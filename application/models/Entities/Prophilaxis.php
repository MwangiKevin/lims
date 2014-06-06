<?php

namespace models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prophilaxis
 *
 * Table(name="prophilaxis")
 * Entity
 */
class Prophilaxis
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
     * Column(name="name", type="string", length=40, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * Column(name="desc", type="integer", nullable=false)
     */
    private $desc;

    /**
     * @var integer
     *
     * Column(name="program", type="integer", nullable=false)
     */
    private $program;

    /**
     * @var integer
     *
     * Column(name="line", type="integer", nullable=false)
     */
    private $line;

    /**
     * @var integer
     *
     * Column(name="type", type="integer", nullable=false)
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
     * @param integer $desc
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
     * @return integer 
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Set program
     *
     * @param integer $program
     * @return Prophilaxis
     */
    public function setProgram($program)
    {
        $this->program = $program;
    
        return $this;
    }

    /**
     * Get program
     *
     * @return integer 
     */
    public function getProgram()
    {
        return $this->program;
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
