<?php

namespace models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Patient
 *
 * @ORM\Table(name="patient")
 * @ORM\Entity
 */
class Patient
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
     * @ORM\Column(name="code", type="integer", nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dob", type="date", nullable=false)
     */
    private $dob;

    /**
     * @var integer
     *
     * @ORM\Column(name="gender", type="integer", nullable=false)
     */
    private $gender;

    /**
     * @var integer
     *
     * @ORM\Column(name="prophylaxis_id", type="integer", nullable=false)
     */
    private $prophylaxisId;

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
     * Set code
     *
     * @param integer $code
     * @return Patient
     */
    public function setCode($code)
    {
        $this->code = $code;
    
        return $this;
    }

    /**
     * Get code
     *
     * @return integer 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Patient
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
     * Set dob
     *
     * @param \DateTime $dob
     * @return Patient
     */
    public function setDob($dob)
    {
        $this->dob = $dob;
    
        return $this;
    }

    /**
     * Get dob
     *
     * @return \DateTime 
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set gender
     *
     * @param integer $gender
     * @return Patient
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    
        return $this;
    }

    /**
     * Get gender
     *
     * @return integer 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set prophylaxisId
     *
     * @param integer $prophylaxisId
     * @return Patient
     */
    public function setProphylaxisId($prophylaxisId)
    {
        $this->prophylaxisId = $prophylaxisId;
    
        return $this;
    }

    /**
     * Get prophylaxisId
     *
     * @return integer 
     */
    public function getProphylaxisId()
    {
        return $this->prophylaxisId;
    }

    /**
     * Set synced
     *
     * @param integer $synced
     * @return Patient
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
