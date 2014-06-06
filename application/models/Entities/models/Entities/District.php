<?php

namespace models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * District
 *
 * @ORM\Table(name="district")
 * @ORM\Entity
 */
class District
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
     * @var integer
     *
     * @ORM\Column(name="region_id", type="integer", nullable=false)
     */
    private $regionId;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;


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
     * @return District
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
     * Set regionId
     *
     * @param integer $regionId
     * @return District
     */
    public function setRegionId($regionId)
    {
        $this->regionId = $regionId;
    
        return $this;
    }

    /**
     * Get regionId
     *
     * @return integer 
     */
    public function getRegionId()
    {
        return $this->regionId;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return District
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }
}
