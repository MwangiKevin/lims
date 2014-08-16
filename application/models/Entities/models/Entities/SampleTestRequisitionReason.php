<?php

namespace models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * SampleTestRequisitionReason
 *
 * @ORM\Table(name="sample_test_requisition_reason")
 * @ORM\Entity
 */
class SampleTestRequisitionReason
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
     * @ORM\Column(name="reason_id", type="integer", nullable=false)
     */
    private $reasonId;


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
     * @return SampleTestRequisitionReason
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
     * Set reasonId
     *
     * @param integer $reasonId
     * @return SampleTestRequisitionReason
     */
    public function setReasonId($reasonId)
    {
        $this->reasonId = $reasonId;
    
        return $this;
    }

    /**
     * Get reasonId
     *
     * @return integer 
     */
    public function getReasonId()
    {
        return $this->reasonId;
    }
}
