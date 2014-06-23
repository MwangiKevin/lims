<?php

namespace models\Entities;

use Doctrine\Mapping as ORM;

/**
 * Prophilaxis
 *
 * @Table(name="prophilaxis")
 * @Entity
 */
class Prophilaxis
{
    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="name", type="string", length=40, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @Column(name="desc", type="string", length=40, nullable=false)
     */
    private $desc;

    /**
     * @var integer
     *
     * @Column(name="eid", type="integer", nullable=false)
     */
    private $eid;

    /**
     * @var integer
     *
     * @Column(name="vl", type="integer", nullable=false)
     */
    private $vl;

    /**
     * @var integer
     *
     * @Column(name="infant_prophilaxis", type="integer", nullable=false)
     */
    private $infantProphilaxis;

    /**
     * @var integer
     *
     * @Column(name="pmtc_pregnancy", type="integer", nullable=false)
     */
    private $pmtcPregnancy;

    /**
     * @var integer
     *
     * @Column(name="pmtc_delivery", type="integer", nullable=false)
     */
    private $pmtcDelivery;

    /**
     * @var integer
     *
     * @Column(name="line", type="integer", nullable=false)
     */
    private $line;

    /**
     * @var integer
     *
     * @Column(name="type", type="integer", nullable=false)
     */
    private $type;


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
     * @return Prophilaxis
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
     * Set desc
     *
     * @param string $desc
     * @return Prophilaxis
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;
    
        return $this;
    }

    /**
     * Get desc
     *
     * @return string 
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Set eid
     *
     * @param integer $eid
     * @return Prophilaxis
     */
    public function setEid($eid)
    {
        $this->eid = $eid;
    
        return $this;
    }

    /**
     * Get eid
     *
     * @return integer 
     */
    public function getEid()
    {
        return $this->eid;
    }

    /**
     * Set vl
     *
     * @param integer $vl
     * @return Prophilaxis
     */
    public function setVl($vl)
    {
        $this->vl = $vl;
    
        return $this;
    }

    /**
     * Get vl
     *
     * @return integer 
     */
    public function getVl()
    {
        return $this->vl;
    }

    /**
     * Set infantProphilaxis
     *
     * @param integer $infantProphilaxis
     * @return Prophilaxis
     */
    public function setInfantProphilaxis($infantProphilaxis)
    {
        $this->infantProphilaxis = $infantProphilaxis;
    
        return $this;
    }

    /**
     * Get infantProphilaxis
     *
     * @return integer 
     */
    public function getInfantProphilaxis()
    {
        return $this->infantProphilaxis;
    }

    /**
     * Set pmtcPregnancy
     *
     * @param integer $pmtcPregnancy
     * @return Prophilaxis
     */
    public function setPmtcPregnancy($pmtcPregnancy)
    {
        $this->pmtcPregnancy = $pmtcPregnancy;
    
        return $this;
    }

    /**
     * Get pmtcPregnancy
     *
     * @return integer 
     */
    public function getPmtcPregnancy()
    {
        return $this->pmtcPregnancy;
    }

    /**
     * Set pmtcDelivery
     *
     * @param integer $pmtcDelivery
     * @return Prophilaxis
     */
    public function setPmtcDelivery($pmtcDelivery)
    {
        $this->pmtcDelivery = $pmtcDelivery;
    
        return $this;
    }

    /**
     * Get pmtcDelivery
     *
     * @return integer 
     */
    public function getPmtcDelivery()
    {
        return $this->pmtcDelivery;
    }

    /**
     * Set line
     *
     * @param integer $line
     * @return Prophilaxis
     */
    public function setLine($line)
    {
        $this->line = $line;
    
        return $this;
    }

    /**
     * Get line
     *
     * @return integer 
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return Prophilaxis
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }
}
