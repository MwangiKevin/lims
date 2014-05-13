<?php
use Doctrine\Common\ClassLoader, Doctrine\ORM\Configuration, Doctrine\ORM\EntityManager, Doctrine\DBAL\Types\Type, Doctrine\Common\Cache\ArrayCache, Doctrine\DBAL\Logging\EchoSqlLogger;

define('DEBUGGING', FALSE);

class Doctrine {

	public $em = null;

	public function __construct() {
		// load database configuration and custom config from CodeIgniter
		require APPPATH . 'config/database.php';

		// Set up class loading.
		require_once APPPATH . 'libraries/Doctrine/Common/ClassLoader.php';

		$doctrineClassLoader = new \Doctrine\Common\ClassLoader('Doctrine', APPPATH . 'libraries');
		$doctrineClassLoader -> register();

		$entitiesClassLoader = new \Doctrine\Common\ClassLoader('models/Entities', rtrim(APPPATH, '/'));
		$entitiesClassLoader -> register();

		$proxiesClassLoader = new \Doctrine\Common\ClassLoader('Proxies', APPPATH . 'models');
		$proxiesClassLoader -> register();

		$symfonyClassLoader = new \Doctrine\Common\ClassLoader('Symfony', APPPATH . 'libraries/Doctrine');
		$symfonyClassLoader -> register();

		// Choose caching method based on application mode
		if (ENVIRONMENT == 'production') {
			$cache = new \Doctrine\Common\Cache\ApcCache;
		} else {
			$cache = new \Doctrine\Common\Cache\ArrayCache;
		}

		// Set some configuration options
		$config = new Configuration;

		// Metadata driver
		$driverImpl = $config -> newDefaultAnnotationDriver(array(APPPATH . 'models', APPPATH . 'models/Entities'));
		$config -> setMetadataDriverImpl($driverImpl);

		// Caching
		$config -> setMetadataCacheImpl($cache);
		$config -> setQueryCacheImpl($cache);

		// Proxies
		$config -> setProxyDir(APPPATH . 'models/Proxies');
		$config -> setProxyNamespace('Proxies');

		if (ENVIRONMENT == 'development') {
			$config -> setAutoGenerateProxyClasses(TRUE);
		} else {
			$config -> setAutoGenerateProxyClasses(FALSE);
		}

		// SQL query logger
		if (DEBUGGING) {
			$logger = new \Doctrine\DBAL\Logging\EchoSQLLogger;
			$config -> setSQLLogger($logger);
		}

		// Database connection information
		$connectionOptions = array('driver' => 'pdo_mysql', 'user' => $db['default']['username'], 'password' => $db['default']['password'], 'host' => $db['default']['hostname'], 'dbname' => $db['default']['database'], 'charset' => $db['default']['char_set'], 'driverOptions' => array('charset' => $db['default']['char_set']));

		// Create EntityManager
		$this -> em = EntityManager::create($connectionOptions, $config);

		//$this -> autoGenerateEntitiesFromDatabase();
	}

	//auto-generate entities
	function autoGenerateEntitiesFromDatabase() {
		// custom datatypes (not mapped for reverse engineering)
		$this -> em -> getConnection() -> getDatabasePlatform() -> registerDoctrineTypeMapping('set', 'string');
		$this -> em -> getConnection() -> getDatabasePlatform() -> registerDoctrineTypeMapping('enum', 'string');
		$this -> em -> getConnection() -> getDatabasePlatform() -> registerDoctrineTypeMapping('blob', 'string');

		// fetch metadata
		$driver = new \Doctrine\ORM\Mapping\Driver\DatabaseDriver($this -> em -> getConnection() -> getSchemaManager());

		$driver -> setNamespace('models\\Entities\\');
		//set driver implementation
		$this -> em -> getConfiguration() -> setMetadataDriverImpl($driver);

		$cmf = new \Doctrine\ORM\Tools\DisconnectedClassMetadataFactory($this -> em);
		$cmf -> setEntityManager($this -> em);
		$classes = $driver -> getAllClassNames();

		//get class metadata
		$metadata = $cmf -> getAllMetadata();
		/*foreach ($classes as $class) {
		 //any unsupported table/schema could be handled here to exclude some classes
		 if (true) {
		 $metadata[] = $cmf->getMetadataFor($class);
		 //var_dump($metadata);die;
		 }
		 }*/
		//var_dump($metadata);die;
		$generator = new \Doctrine\ORM\Tools\EntityGenerator();
		$generator -> setGenerateAnnotations(true);
		$generator -> setGenerateStubMethods(true);
		$generator -> setRegenerateEntityIfExists(false);
		$generator -> setUpdateEntityIfExists(true);
		try {
			//var_dump($classes);die;
			$generator -> generate($metadata, APPPATH . 'models/Entities');
			print 'Done!';
		} catch(exception $ex) {
			die($ex -> getMessage());
		}
	}

}
