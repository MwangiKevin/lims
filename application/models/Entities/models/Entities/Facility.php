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
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

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
     * @ORM\Column(name="phone", type="string", length=50, nullable=false)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="google_maps", type="string", length=500, nullable=true)
     */
    private $googleMaps;

    /**
     * @var \models\Entities\District
     *
     * @ORM\ManyToOne(targetEntity="models\Entities\District")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="district_id", referencedColumnName="id")
     * })
     */
    private $district;


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
     * Set phone
     *
     * @param string $phone
     * @return Facility
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    
        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
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

    /**
     * Set district
     *
     * @param \models\Entities\District $district
     * @return Facility
     */
    public function setDistrict(\models\Entities\District $district = null)
    {
        $this->district = $district;
    
        return $this;
    }

    /**
     * Get district
     *
     * @return \models\Entities\District 
     */
    public function getDistrict()
    {
        return $this->district;
    }
}
