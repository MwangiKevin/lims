<?php

namespace models\Entities;

use Doctrine\Mapping as ORM;

/**
 * TestRequisitionReason
 *
 * @Table(name="test_requisition_reason")
 * @Entity
 */
class TestRequisitionReason
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
     * @Column(name="desc", type="string", length=100, nullable=false)
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set desc
     *
     * @param string $desc
     * @return TestRequisitionReason
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
     * @return TestRequisitionReason
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
     * @return TestRequisitionReason
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
}
