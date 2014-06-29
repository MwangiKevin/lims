<?php

namespace models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * SampleTestRun
 *
 * @ORM\Table(name="sample_test_run")
 * @ORM\Entity
 */
class SampleTestRun
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="worksheet_id", type="integer", nullable=false)
     */
    private $worksheetId;

    /**
     * @var integer
     *
     * @ORM\Column(name="sample_id", type="integer", nullable=false)
     */
    private $sampleId;

    /**
     * @var integer
     *
     * @ORM\Column(name="test_run_no", type="integer", nullable=false)
     */
    private $testRunNo;

    /**
     * @var string
     *
     * @ORM\Column(name="result", type="string", length=50, nullable=false)
     */
    private $result;


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
     * Set worksheetId
     *
     * @param integer $worksheetId
     * @return SampleTestRun
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
     * Set sampleId
     *
     * @param integer $sampleId
     * @return SampleTestRun
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
     * Set testRunNo
     *
     * @param integer $testRunNo
     * @return SampleTestRun
     */
    public function setTestRunNo($testRunNo)
    {
        $this->testRunNo = $testRunNo;
    
        return $this;
    }

    /**
     * Get testRunNo
     *
     * @return integer 
     */
    public function getTestRunNo()
    {
        return $this->testRunNo;
    }

    /**
     * Set result
     *
     * @param string $result
     * @return SampleTestRun
     */
    public function setResult($result)
    {
        $this->result = $result;
    
        return $this;
    }

    /**
     * Get result
     *
     * @return string 
     */
    public function getResult()
    {
        return $this->result;
    }
}
