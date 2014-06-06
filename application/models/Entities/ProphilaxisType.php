<?php

namespace models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProphilaxisType
 *
 * Table(name="prophilaxis_type")
 * Entity
 */
class ProphilaxisType
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
     * Column(name="desc", type="integer", nullable=false)
     */
    private $desc;


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
     * @param integer $desc
     * @return ProphilaxisType
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;
    
        return $this;
    }

    /**
     * Get desc
     *
     * @return integer 
     */
    public function getDesc()
    {
        return $this->desc;
    }
}
