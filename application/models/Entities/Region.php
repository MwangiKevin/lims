<?php

namespace models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Region
 *
 * Table(name="region")
 * Entity
 */
class Region
{
    /**
     * @var integer
     *
     * Column(name="id", type="integer", nullable=false)
     * Id
     * GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * Column(name="name", type="string", length=30, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * Column(name="fusion_id", type="string", length=3, nullable=true)
     */
    private $fusionId;

    /**
     * @var integer
     *
     * Column(name="status", type="integer", nullable=false)
     */
    private $status;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Region
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set fusionId
     *
     * @param string $fusionId
     * @return Region
     */
    public function setFusionId($fusionId)
    {
        $this->fusionId = $fusionId;
    
        return $this;
    }

    /**
     * Get fusionId
     *
     * @return string 
     */
    public function getFusionId()
    {
        return $this->fusionId;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Region
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }
}
