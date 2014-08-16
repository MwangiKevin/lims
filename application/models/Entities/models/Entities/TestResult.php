<?php

namespace models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * TestResult
 *
 * @ORM\Table(name="test_result")
 * @ORM\Entity
 */
class TestResult
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
     * @ORM\Column(name="sample_id", type="integer", nullable=false)
     */
    private $sampleId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_released", type="datetime", nullable=false)
     */
    private $dateReleased;

    /**
     * @var integer
     *
     * @ORM\Column(name="result_id", type="integer", nullable=false)
     */
    private $resultId;


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
     * @return TestResult
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
     * Set dateReleased
     *
     * @param \DateTime $dateReleased
     * @return TestResult
     */
    public function setDateReleased($dateReleased)
    {
        $this->dateReleased = $dateReleased;
    
        return $this;
    }

    /**
     * Get dateReleased
     *
     * @return \DateTime 
     */
    public function getDateReleased()
    {
        return $this->dateReleased;
    }

    /**
     * Set resultId
     *
     * @param integer $resultId
     * @return TestResult
     */
    public function setResultId($resultId)
    {
        $this->resultId = $resultId;
    
        return $this;
    }

    /**
     * Get resultId
     *
     * @return integer 
     */
    public function getResultId()
    {
        return $this->resultId;
    }
}
