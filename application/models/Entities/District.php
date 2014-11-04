<?php

namespace models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * District
 *
 * Table(name="district")
 * Entity
 */
class District
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
     * @var string
     *
     * Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * Column(name="region_id", type="integer", nullable=false)
     */
    private $regionId;

    /**
     * @var integer
     *
     * Column(name="status", type="integer", nullable=false)
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
