<?php

namespace models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * EidPatient
 *
 * @ORM\Table(name="eid_patient")
 * @ORM\Entity
 */
class EidPatient
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
     * @ORM\Column(name="entry_point", type="integer", nullable=false)
     */
    private $entryPoint;

    /**
     * @var integer
     *
     * @ORM\Column(name="infant_feeding_id", type="integer", nullable=false)
     */
    private $infantFeedingId;

    /**
     * @var integer
     *
     * @ORM\Column(name="prophylaxis", type="integer", nullable=false)
     */
    private $prophylaxis;

    /**
     * @var integer
     *
     * @ORM\Column(name="flag", type="integer", nullable=false)
     */
    private $flag;

    /**
     * @var integer
     *
     * @ORM\Column(name="synced", type="integer", nullable=false)
     */
    private $synced;


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
     * @return EidPatient
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
     * Set entryPoint
     *
     * @param integer $entryPoint
     * @return EidPatient
     */
    public function setEntryPoint($entryPoint)
    {
        $this->entryPoint = $entryPoint;
    
        return $this;
    }

    /**
     * Get entryPoint
     *
     * @return integer 
     */
    public function getEntryPoint()
    {
        return $this->entryPoint;
    }

    /**
     * Set infantFeedingId
     *
     * @param integer $infantFeedingId
     * @return EidPatient
     */
    public function setInfantFeedingId($infantFeedingId)
    {
        $this->infantFeedingId = $infantFeedingId;
    
        return $this;
    }

    /**
     * Get infantFeedingId
     *
     * @return integer 
     */
    public function getInfantFeedingId()
    {
        return $this->infantFeedingId;
    }

    /**
     * Set prophylaxis
     *
     * @param integer $prophylaxis
     * @return EidPatient
     */
    public function setProphylaxis($prophylaxis)
    {
        $this->prophylaxis = $prophylaxis;
    
        return $this;
    }

    /**
     * Get prophylaxis
     *
     * @return integer 
     */
    public function getProphylaxis()
    {
        return $this->prophylaxis;
    }

    /**
     * Set flag
     *
     * @param integer $flag
     * @return EidPatient
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

    /**
     * Set synced
     *
     * @param integer $synced
     * @return EidPatient
     */
    public function setSynced($synced)
    {
        $this->synced = $synced;
    
        return $this;
    }

    /**
     * Get synced
     *
     * @return integer 
     */
    public function getSynced()
    {
        return $this->synced;
    }
}
