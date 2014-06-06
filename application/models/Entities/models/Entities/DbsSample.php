<?php

namespace models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * DbsSample
 *
 * @ORM\Table(name="dbs_sample")
 * @ORM\Entity
 */
class DbsSample
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
     * @ORM\Column(name="sample_id", type="integer", nullable=false)
     */
    private $sampleId;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_of_spots", type="integer", nullable=false)
     */
    private $numOfSpots;


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
     * Set sampleId
     *
     * @param integer $sampleId
     * @return DbsSample
     */
    public function setSampleId($sampleId)
    {
        $this->sampleId = $sampleId;
    
        return $this;
    }

    /**
     * Get sampleId
     *
     * @return integer 
     */
    public function getSampleId()
    {
        return $this->sampleId;
    }

    /**
     * Set numOfSpots
     *
     * @param integer $numOfSpots
     * @return DbsSample
     */
    public function setNumOfSpots($numOfSpots)
    {
        $this->numOfSpots = $numOfSpots;
    
        return $this;
    }

    /**
     * Get numOfSpots
     *
     * @return integer 
     */
    public function getNumOfSpots()
    {
        return $this->numOfSpots;
    }
}
