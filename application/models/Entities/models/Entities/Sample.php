<?php

namespace models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sample
 *
 * @ORM\Table(name="sample")
 * @ORM\Entity
 */
class Sample
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
     * @ORM\Column(name="patient_id", type="integer", nullable=false)
     */
    private $patientId;

    /**
     * @var integer
     *
     * @ORM\Column(name="requisition_id", type="integer", nullable=false)
     */
    private $requisitionId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_collected", type="date", nullable=false)
     */
    private $dateCollected;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_dispatched", type="date", nullable=false)
     */
    private $dateDispatched;

    /**
     * @var integer
     *
     * @ORM\Column(name="program", type="integer", nullable=false)
     */
    private $program;

    /**
     * @var integer
     *
     * @ORM\Column(name="sample_type", type="integer", nullable=false)
     */
    private $sampleType;

    /**
     * @var integer
     *
     * @ORM\Column(name="no_of_dbs_spots", type="integer", nullable=false)
     */
    private $noOfDbsSpots;

    /**
     * @var string
     *
     * @ORM\Column(name="name_of_clinician", type="string", length=50, nullable=false)
     */
    private $nameOfClinician;


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
     * Set patientId
     *
     * @param integer $patientId
     * @return Sample
     */
    public function setPatientId($patientId)
    {
        $this->patientId = $patientId;
    
        return $this;
    }

    /**
     * Get patientId
     *
     * @return integer 
     */
    public function getPatientId()
    {
        return $this->patientId;
    }

    /**
     * Set requisitionId
     *
     * @param integer $requisitionId
     * @return Sample
     */
    public function setRequisitionId($requisitionId)
    {
        $this->requisitionId = $requisitionId;
    
        return $this;
    }

    /**
     * Get requisitionId
     *
     * @return integer 
     */
    public function getRequisitionId()
    {
        return $this->requisitionId;
    }

    /**
     * Set dateCollected
     *
     * @param \DateTime $dateCollected
     * @return Sample
     */
    public function setDateCollected($dateCollected)
    {
        $this->dateCollected = $dateCollected;
    
        return $this;
    }

    /**
     * Get dateCollected
     *
     * @return \DateTime 
     */
    public function getDateCollected()
    {
        return $this->dateCollected;
    }

    /**
     * Set dateDispatched
     *
     * @param \DateTime $dateDispatched
     * @return Sample
     */
    public function setDateDispatched($dateDispatched)
    {
        $this->dateDispatched = $dateDispatched;
    
        return $this;
    }

    /**
     * Get dateDispatched
     *
     * @return \DateTime 
     */
    public function getDateDispatched()
    {
        return $this->dateDispatched;
    }

    /**
     * Set program
     *
     * @param integer $program
     * @return Sample
     */
    public function setProgram($program)
    {
        $this->program = $program;
    
        return $this;
    }

    /**
     * Get program
     *
     * @return integer 
     */
    public function getProgram()
    {
        return $this->program;
    }

    /**
     * Set sampleType
     *
     * @param integer $sampleType
     * @return Sample
     */
    public function setSampleType($sampleType)
    {
        $this->sampleType = $sampleType;
    
        return $this;
    }

    /**
     * Get sampleType
     *
     * @return integer 
     */
    public function getSampleType()
    {
        return $this->sampleType;
    }

    /**
     * Set noOfDbsSpots
     *
     * @param integer $noOfDbsSpots
     * @return Sample
     */
    public function setNoOfDbsSpots($noOfDbsSpots)
    {
        $this->noOfDbsSpots = $noOfDbsSpots;
    
        return $this;
    }

    /**
     * Get noOfDbsSpots
     *
     * @return integer 
     */
    public function getNoOfDbsSpots()
    {
        return $this->noOfDbsSpots;
    }

    /**
     * Set nameOfClinician
     *
     * @param string $nameOfClinician
     * @return Sample
     */
    public function setNameOfClinician($nameOfClinician)
    {
        $this->nameOfClinician = $nameOfClinician;
    
        return $this;
    }

    /**
     * Get nameOfClinician
     *
     * @return string 
     */
    public function getNameOfClinician()
    {
        return $this->nameOfClinician;
    }
}
