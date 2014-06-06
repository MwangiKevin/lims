<?php

namespace models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lab
 *
 * @ORM\Table(name="lab")
 * @ORM\Entity
 */
class Lab
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
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_1", type="string", length=50, nullable=false)
     */
    private $phone1;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_2", type="string", length=50, nullable=false)
     */
    private $phone2;

    /**
     * @var integer
     *
     * @ORM\Column(name="cobas_count", type="integer", nullable=false)
     */
    private $cobasCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="abbott_count", type="integer", nullable=false)
     */
    private $abbottCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="district", type="integer", nullable=false)
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
     * @return Lab
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
     * Set email
     *
     * @param string $email
     * @return Lab
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
     * Set phone1
     *
     * @param string $phone1
     * @return Lab
     */
    public function setPhone1($phone1)
    {
        $this->phone1 = $phone1;
    
        return $this;
    }

    /**
     * Get phone1
     *
     * @return string 
     */
    public function getPhone1()
    {
        return $this->phone1;
    }

    /**
     * Set phone2
     *
     * @param string $phone2
     * @return Lab
     */
    public function setPhone2($phone2)
    {
        $this->phone2 = $phone2;
    
        return $this;
    }

    /**
     * Get phone2
     *
     * @return string 
     */
    public function getPhone2()
    {
        return $this->phone2;
    }

    /**
     * Set cobasCount
     *
     * @param integer $cobasCount
     * @return Lab
     */
    public function setCobasCount($cobasCount)
    {
        $this->cobasCount = $cobasCount;
    
        return $this;
    }

    /**
     * Get cobasCount
     *
     * @return integer 
     */
    public function getCobasCount()
    {
        return $this->cobasCount;
    }

    /**
     * Set abbottCount
     *
     * @param integer $abbottCount
     * @return Lab
     */
    public function setAbbottCount($abbottCount)
    {
        $this->abbottCount = $abbottCount;
    
        return $this;
    }

    /**
     * Get abbottCount
     *
     * @return integer 
     */
    public function getAbbottCount()
    {
        return $this->abbottCount;
    }

    /**
     * Set district
     *
     * @param integer $district
     * @return Lab
     */
    public function setDistrict($district)
    {
        $this->district = $district;
    
        return $this;
    }

    /**
     * Get district
     *
     * @return integer 
     */
    public function getDistrict()
    {
        return $this->district;
    }
}
