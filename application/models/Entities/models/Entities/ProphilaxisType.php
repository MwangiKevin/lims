<?php

namespace models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProphilaxisType
 *
 * @ORM\Table(name="prophilaxis_type")
 * @ORM\Entity
 */
class ProphilaxisType
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
     * @ORM\Column(name="desc", type="integer", nullable=false)
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
