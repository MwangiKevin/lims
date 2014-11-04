<?php

namespace models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * SampleTest
 *
 * Table(name="sample_test")
 * Entity
 */
class SampleTest
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
     * @var integer
     *
     * Column(name="sample_id", type="integer", nullable=false)
     */
    private $sampleId;

    /**
     * @var integer
     *
     * Column(name="test_run", type="integer", nullable=false)
     */
    private $testRun;

    /**
     * @var integer
     *
     * Column(name="worksheet_id", type="integer", nullable=false)
     */
    private $worksheetId;

    /**
     * @var integer
     *
     * Column(name="flag", type="integer", nullable=false)
     */
    private $flag;


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
     * Set sampleId
     *
     * @param integer $sampleId
     * @return SampleTest
     */
    public function setSampleId($sampleId)
    {
        $this->sampleId = $sampleId;
    
        return $this;
    }

    /**
     * Get sampleId
     *
     * @return integer 
     */
    public function getSampleId()
    {
        return $this->sampleId;
    }

    /**
     * Set testRun
     *
     * @param integer $testRun
     * @return SampleTest
     */
    public function setTestRun($testRun)
    {
        $this->testRun = $testRun;
    
        return $this;
    }

    /**
     * Get testRun
     *
     * @return integer 
     */
    public function getTestRun()
    {
        return $this->testRun;
    }

    /**
     * Set worksheetId
     *
     * @param integer $worksheetId
     * @return SampleTest
     */
    public function setWorksheetId($worksheetId)
    {
        $this->worksheetId = $worksheetId;
    
        return $this;
    }

    /**
     * Get worksheetId
     *
     * @return integer 
     */
    public function getWorksheetId()
    {
        return $this->worksheetId;
    }

    /**
     * Set flag
     *
     * @param integer $flag
     * @return SampleTest
     */
    public function setFlag($flag)
    {
        $this->flag = $flag;
    
        return $this;
    }

    /**
     * Get flag
     *
     * @return integer 
     */
    public function getFlag()
    {
        return $this->flag;
    }
}
