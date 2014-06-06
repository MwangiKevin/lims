<?php

namespace models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * EidCaregiver
 *
 * Table(name="eid_caregiver")
 * Entity
 */
class EidCaregiver
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
     * Column(name="patient_id", type="integer", nullable=false)
     */
    private $patientId;

    /**
     * @var string
     *
     * Column(name="phone_number", type="string", length=50, nullable=false)
     */
    private $phoneNumber;

    /**
     * @var integer
     *
     * Column(name="HIV_status", type="integer", nullable=false)
     */
    private $hivStatus;

    /**
     * @var integer
     *
     * Column(name="is_parent", type="integer", nullable=false)
     */
    private $isParent;

    /**
     * @var integer
     *
     * Column(name="synced", type="integer", nullable=false)
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
     * @return EidCaregiver
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
     * Set phoneNumber
     *
     * @param string $phoneNumber
     * @return EidCaregiver
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    
        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string 
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set hivStatus
     *
     * @param integer $hivStatus
     * @return EidCaregiver
     */
    public function setHivStatus($hivStatus)
    {
        $this->hivStatus = $hivStatus;
    
        return $this;
    }

    /**
     * Get hivStatus
     *
     * @return integer 
     */
    public function getHivStatus()
    {
        return $this->hivStatus;
    }

    /**
     * Set isParent
     *
     * @param integer $isParent
     * @return EidCaregiver
     */
    public function setIsParent($isParent)
    {
        $this->isParent = $isParent;
    
        return $this;
    }

    /**
     * Get isParent
     *
     * @return integer 
     */
    public function getIsParent()
    {
        return $this->isParent;
    }

    /**
     * Set synced
     *
     * @param integer $synced
     * @return EidCaregiver
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
