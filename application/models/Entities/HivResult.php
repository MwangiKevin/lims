<?php

namespace models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * HivResult
 *
 * Table(name="hiv_result")
 * Entity
 */
class HivResult
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
     * Column(name="desc", type="string", length=40, nullable=false)
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
     * @param string $desc
     * @return HivResult
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
}
