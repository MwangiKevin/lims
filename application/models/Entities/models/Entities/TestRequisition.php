<?php

namespace models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * TestRequisition
 *
 * @ORM\Table(name="test_requisition")
 * @ORM\Entity
 */
class TestRequisition
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
     * @var string
     *
     * @ORM\Column(name="req_no", type="string", length=50, nullable=false)
     */
    private $reqNo;

    /**
     * @var integer
     *
     * @ORM\Column(name="facility_id", type="integer", nullable=false)
     */
    private $facilityId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_dispatched", type="date", nullable=false)
     */
    private $dateDispatched;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_received", type="date", nullable=false)
     */
    private $dateReceived;

    /**
     * @var integer
     *
     * @ORM\Column(name="program_id", type="integer", nullable=false)
     */
    private $programId;

    /**
     * @var string
     *
     * @ORM\Column(name="rejection_address", type="string", length=200, nullable=false)
     */
    private $rejectionAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="string", length=500, nullable=false)
     */
    private $comments;

    /**
     * @var string
     *
     * @ORM\Column(name="lab_comments", type="string", length=200, nullable=false)
     */
    private $labComments;

    /**
     * @var integer
     *
     * @ORM\Column(name="flag", type="integer", nullable=false)
     */
    private $flag;

    /**
     * @var integer
     *
     * @ORM\Column(name="synced", type="integer", nullable=false)
     */
    private $synced;


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
     * Set reqNo
     *
     * @param string $reqNo
     * @return TestRequisition
     */
    public function setReqNo($reqNo)
    {
        $this->reqNo = $reqNo;
    
        return $this;
    }

    /**
     * Get reqNo
     *
     * @return string 
     */
    public function getReqNo()
    {
        return $this->reqNo;
    }

    /**
     * Set facilityId
     *
     * @param integer $facilityId
     * @return TestRequisition
     */
    public function setFacilityId($facilityId)
    {
        $this->facilityId = $facilityId;
    
        return $this;
    }

    /**
     * Get facilityId
     *
     * @return integer 
     */
    public function getFacilityId()
    {
        return $this->facilityId;
    }

    /**
     * Set dateDispatched
     *
     * @param \DateTime $dateDispatched
     * @return TestRequisition
     */
    public function setDateDispatched($dateDispatched)
    {
        $this->dateDispatched = $dateDispatched;
    
        return $this;
    }

    /**
     * Get dateDispatched
     *
     * @return \DateTime 
     */
    public function getDateDispatched()
    {
        return $this->dateDispatched;
    }

    /**
     * Set dateReceived
     *
     * @param \DateTime $dateReceived
     * @return TestRequisition
     */
    public function setDateReceived($dateReceived)
    {
        $this->dateReceived = $dateReceived;
    
        return $this;
    }

    /**
     * Get dateReceived
     *
     * @return \DateTime 
     */
    public function getDateReceived()
    {
        return $this->dateReceived;
    }

    /**
     * Set programId
     *
     * @param integer $programId
     * @return TestRequisition
     */
    public function setProgramId($programId)
    {
        $this->programId = $programId;
    
        return $this;
    }

    /**
     * Get programId
     *
     * @return integer 
     */
    public function getProgramId()
    {
        return $this->programId;
    }

    /**
     * Set rejectionAddress
     *
     * @param string $rejectionAddress
     * @return TestRequisition
     */
    public function setRejectionAddress($rejectionAddress)
    {
        $this->rejectionAddress = $rejectionAddress;
    
        return $this;
    }

    /**
     * Get rejectionAddress
     *
     * @return string 
     */
    public function getRejectionAddress()
    {
        return $this->rejectionAddress;
    }

    /**
     * Set comments
     *
     * @param string $comments
     * @return TestRequisition
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    
        return $this;
    }

    /**
     * Get comments
     *
     * @return string 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set labComments
     *
     * @param string $labComments
     * @return TestRequisition
     */
    public function setLabComments($labComments)
    {
        $this->labComments = $labComments;
    
        return $this;
    }

    /**
     * Get labComments
     *
     * @return string 
     */
    public function getLabComments()
    {
        return $this->labComments;
    }

    /**
     * Set flag
     *
     * @param integer $flag
     * @return TestRequisition
     */
    public function setFlag($flag)
    {
        $this->flag = $flag;
    
        return $this;
    }

    /**
     * Get flag
     *
     * @return integer 
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * Set synced
     *
     * @param integer $synced
     * @return TestRequisition
     */
    public function setSynced($synced)
    {
        $this->synced = $synced;
    
        return $this;
    }

    /**
     * Get synced
     *
     * @return integer 
     */
    public function getSynced()
    {
        return $this->synced;
    }
}
