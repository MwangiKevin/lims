<?php

namespace models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facility
 *
 * @ORM\Table(name="facility")
 * @ORM\Entity
 */
class Facility
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
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=20, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="district_id", type="integer", nullable=true)
     */
    private $districtId;

    /**
     * @var integer
     *
     * @ORM\Column(name="partner_id", type="integer", nullable=false)
     */
    private $partnerId;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=250, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_address", type="string", length=60, nullable=false)
     */
    private $mailAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=50, nullable=false)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone2", type="string", length=40, nullable=false)
     */
    private $telephone2;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_person_phone", type="string", length=100, nullable=false)
     */
    private $contactPersonPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="google_maps", type="string", length=500, nullable=true)
     */
    private $googleMaps;


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
     * @param string $code
     * @return Facility
     */
    public function setCode($code)
    {
        $this->code = $code;
    
        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Facility
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
     * Set districtId
     *
     * @param integer $districtId
     * @return Facility
     */
    public function setDistrictId($districtId)
    {
        $this->districtId = $districtId;
    
        return $this;
    }

    /**
     * Get districtId
     *
     * @return integer 
     */
    public function getDistrictId()
    {
        return $this->districtId;
    }

    /**
     * Set partnerId
     *
     * @param integer $partnerId
     * @return Facility
     */
    public function setPartnerId($partnerId)
    {
        $this->partnerId = $partnerId;
    
        return $this;
    }

    /**
     * Get partnerId
     *
     * @return integer 
     */
    public function getPartnerId()
    {
        return $this->partnerId;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Facility
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set mailAddress
     *
     * @param string $mailAddress
     * @return Facility
     */
    public function setMailAddress($mailAddress)
    {
        $this->mailAddress = $mailAddress;
    
        return $this;
    }

    /**
     * Get mailAddress
     *
     * @return string 
     */
    public function getMailAddress()
    {
        return $this->mailAddress;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Facility
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    
        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set telephone2
     *
     * @param string $telephone2
     * @return Facility
     */
    public function setTelephone2($telephone2)
    {
        $this->telephone2 = $telephone2;
    
        return $this;
    }

    /**
     * Get telephone2
     *
     * @return string 
     */
    public function getTelephone2()
    {
        return $this->telephone2;
    }

    /**
     * Set contactPersonPhone
     *
     * @param string $contactPersonPhone
     * @return Facility
     */
    public function setContactPersonPhone($contactPersonPhone)
    {
        $this->contactPersonPhone = $contactPersonPhone;
    
        return $this;
    }

    /**
     * Get contactPersonPhone
     *
     * @return string 
     */
    public function getContactPersonPhone()
    {
        return $this->contactPersonPhone;
    }

    /**
     * Set googleMaps
     *
     * @param string $googleMaps
     * @return Facility
     */
    public function setGoogleMaps($googleMaps)
    {
        $this->googleMaps = $googleMaps;
    
        return $this;
    }

    /**
     * Get googleMaps
     *
     * @return string 
     */
    public function getGoogleMaps()
    {
        return $this->googleMaps;
    }
}
