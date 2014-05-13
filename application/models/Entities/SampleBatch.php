<?php

namespace models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * SampleBatch
 *
 * @ORM\Table(name="sample_batch")
 * @ORM\Entity
 */
class SampleBatch
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
     * @ORM\Column(name="batch_no", type="integer", nullable=false)
     */
    private $batchNo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dispatched_date", type="date", nullable=false)
     */
    private $dispatchedDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="arrival_date", type="date", nullable=false)
     */
    private $arrivalDate;


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
     * Set batchNo
     *
     * @param integer $batchNo
     * @return SampleBatch
     */
    public function setBatchNo($batchNo)
    {
        $this->batchNo = $batchNo;
    
        return $this;
    }

    /**
     * Get batchNo
     *
     * @return integer 
     */
    public function getBatchNo()
    {
        return $this->batchNo;
    }

    /**
     * Set dispatchedDate
     *
     * @param \DateTime $dispatchedDate
     * @return SampleBatch
     */
    public function setDispatchedDate($dispatchedDate)
    {
        $this->dispatchedDate = $dispatchedDate;
    
        return $this;
    }

    /**
     * Get dispatchedDate
     *
     * @return \DateTime 
     */
    public function getDispatchedDate()
    {
        return $this->dispatchedDate;
    }

    /**
     * Set arrivalDate
     *
     * @param \DateTime $arrivalDate
     * @return SampleBatch
     */
    public function setArrivalDate($arrivalDate)
    {
        $this->arrivalDate = $arrivalDate;
    
        return $this;
    }

    /**
     * Get arrivalDate
     *
     * @return \DateTime 
     */
    public function getArrivalDate()
    {
        return $this->arrivalDate;
    }
}
