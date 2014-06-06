<?php

namespace models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Worksheet
 *
 * @ORM\Table(name="worksheet")
 * @ORM\Entity
 */
class Worksheet
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
     * @ORM\Column(name="cdc_worksheet_no", type="string", length=100, nullable=false)
     */
    private $cdcWorksheetNo;

    /**
     * @var string
     *
     * @ORM\Column(name="date_created", type="string", length=100, nullable=false)
     */
    private $dateCreated;

    /**
     * @var string
     *
     * @ORM\Column(name="HIQCAPNo", type="string", length=100, nullable=false)
     */
    private $hiqcapno;

    /**
     * @var string
     *
     * @ORM\Column(name="Spek_kit_no", type="string", length=100, nullable=false)
     */
    private $spekKitNo;

    /**
     * @var integer
     *
     * @ORM\Column(name="updated_by", type="integer", nullable=true)
     */
    private $updatedBy;

    /**
     * @var integer
     *
     * @ORM\Column(name="reviewed_by", type="integer", nullable=true)
     */
    private $reviewedBy;

    /**
     * @var integer
     *
     * @ORM\Column(name="created_by", type="integer", nullable=false)
     */
    private $createdBy;

    /**
     * @var string
     *
     * @ORM\Column(name="lot_no", type="string", length=100, nullable=false)
     */
    private $lotNo;

    /**
     * @var string
     *
     * @ORM\Column(name="rack_no", type="string", length=100, nullable=false)
     */
    private $rackNo;

    /**
     * @var integer
     *
     * @ORM\Column(name="flag", type="integer", nullable=true)
     */
    private $flag;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="kit_expiry_date", type="date", nullable=true)
     */
    private $kitExpiryDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_cut", type="date", nullable=true)
     */
    private $dateCut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_run", type="date", nullable=true)
     */
    private $dateRun;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_reviewed", type="date", nullable=true)
     */
    private $dateReviewed;

    /**
     * @var integer
     *
     * @ORM\Column(name="lab", type="integer", nullable=true)
     */
    private $lab;

    /**
     * @var integer
     *
     * @ORM\Column(name="review_2_by", type="integer", nullable=true)
     */
    private $review2By;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="review_2_date", type="date", nullable=true)
     */
    private $review2Date;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="sample_prep_lot_no", type="string", length=100, nullable=true)
     */
    private $samplePrepLotNo;

    /**
     * @var string
     *
     * @ORM\Column(name="bulk_lysis_lot_no", type="blob", nullable=true)
     */
    private $bulkLysisLotNo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sample_prep_expiry_date", type="date", nullable=true)
     */
    private $samplePrepExpiryDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="bulk_lysis_expiry_date", type="date", nullable=true)
     */
    private $bulkLysisExpiryDate;

    /**
     * @var string
     *
     * @ORM\Column(name="control_lot_no", type="string", length=100, nullable=true)
     */
    private $controlLotNo;

    /**
     * @var string
     *
     * @ORM\Column(name="calibrator_lot_no", type="string", length=100, nullable=true)
     */
    private $calibratorLotNo;

    /**
     * @var string
     *
     * @ORM\Column(name="amplification_kit_lot_no", type="string", length=100, nullable=true)
     */
    private $amplificationKitLotNo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="control_expiry_date", type="date", nullable=true)
     */
    private $controlExpiryDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="calibrator_expiry_date", type="date", nullable=true)
     */
    private $calibratorExpiryDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="amplification_expiry_date", type="date", nullable=true)
     */
    private $amplificationExpiryDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_cancelled", type="date", nullable=true)
     */
    private $dateCancelled;

    /**
     * @var integer
     *
     * @ORM\Column(name="cancelled_by", type="integer", nullable=true)
     */
    private $cancelledBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_updated", type="date", nullable=true)
     */
    private $dateUpdated;

    /**
     * @var integer
     *
     * @ORM\Column(name="neg_control_result", type="integer", nullable=true)
     */
    private $negControlResult;

    /**
     * @var string
     *
     * @ORM\Column(name="neg_control_interpretation", type="string", length=100, nullable=true)
     */
    private $negControlInterpretation;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_control_result", type="integer", nullable=true)
     */
    private $posControlResult;

    /**
     * @var string
     *
     * @ORM\Column(name="pos_control_interpretation", type="string", length=100, nullable=true)
     */
    private $posControlInterpretation;


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
     * Set cdcWorksheetNo
     *
     * @param string $cdcWorksheetNo
     * @return Worksheet
     */
    public function setCdcWorksheetNo($cdcWorksheetNo)
    {
        $this->cdcWorksheetNo = $cdcWorksheetNo;
    
        return $this;
    }

    /**
     * Get cdcWorksheetNo
     *
     * @return string 
     */
    public function getCdcWorksheetNo()
    {
        return $this->cdcWorksheetNo;
    }

    /**
     * Set dateCreated
     *
     * @param string $dateCreated
     * @return Worksheet
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
    
        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return string 
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set hiqcapno
     *
     * @param string $hiqcapno
     * @return Worksheet
     */
    public function setHiqcapno($hiqcapno)
    {
        $this->hiqcapno = $hiqcapno;
    
        return $this;
    }

    /**
     * Get hiqcapno
     *
     * @return string 
     */
    public function getHiqcapno()
    {
        return $this->hiqcapno;
    }

    /**
     * Set spekKitNo
     *
     * @param string $spekKitNo
     * @return Worksheet
     */
    public function setSpekKitNo($spekKitNo)
    {
        $this->spekKitNo = $spekKitNo;
    
        return $this;
    }

    /**
     * Get spekKitNo
     *
     * @return string 
     */
    public function getSpekKitNo()
    {
        return $this->spekKitNo;
    }

    /**
     * Set updatedBy
     *
     * @param integer $updatedBy
     * @return Worksheet
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;
    
        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return integer 
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * Set reviewedBy
     *
     * @param integer $reviewedBy
     * @return Worksheet
     */
    public function setReviewedBy($reviewedBy)
    {
        $this->reviewedBy = $reviewedBy;
    
        return $this;
    }

    /**
     * Get reviewedBy
     *
     * @return integer 
     */
    public function getReviewedBy()
    {
        return $this->reviewedBy;
    }

    /**
     * Set createdBy
     *
     * @param integer $createdBy
     * @return Worksheet
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
    
        return $this;
    }

    /**
     * Get createdBy
     *
     * @return integer 
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set lotNo
     *
     * @param string $lotNo
     * @return Worksheet
     */
    public function setLotNo($lotNo)
    {
        $this->lotNo = $lotNo;
    
        return $this;
    }

    /**
     * Get lotNo
     *
     * @return string 
     */
    public function getLotNo()
    {
        return $this->lotNo;
    }

    /**
     * Set rackNo
     *
     * @param string $rackNo
     * @return Worksheet
     */
    public function setRackNo($rackNo)
    {
        $this->rackNo = $rackNo;
    
        return $this;
    }

    /**
     * Get rackNo
     *
     * @return string 
     */
    public function getRackNo()
    {
        return $this->rackNo;
    }

    /**
     * Set flag
     *
     * @param integer $flag
     * @return Worksheet
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
     * Set kitExpiryDate
     *
     * @param \DateTime $kitExpiryDate
     * @return Worksheet
     */
    public function setKitExpiryDate($kitExpiryDate)
    {
        $this->kitExpiryDate = $kitExpiryDate;
    
        return $this;
    }

    /**
     * Get kitExpiryDate
     *
     * @return \DateTime 
     */
    public function getKitExpiryDate()
    {
        return $this->kitExpiryDate;
    }

    /**
     * Set dateCut
     *
     * @param \DateTime $dateCut
     * @return Worksheet
     */
    public function setDateCut($dateCut)
    {
        $this->dateCut = $dateCut;
    
        return $this;
    }

    /**
     * Get dateCut
     *
     * @return \DateTime 
     */
    public function getDateCut()
    {
        return $this->dateCut;
    }

    /**
     * Set dateRun
     *
     * @param \DateTime $dateRun
     * @return Worksheet
     */
    public function setDateRun($dateRun)
    {
        $this->dateRun = $dateRun;
    
        return $this;
    }

    /**
     * Get dateRun
     *
     * @return \DateTime 
     */
    public function getDateRun()
    {
        return $this->dateRun;
    }

    /**
     * Set dateReviewed
     *
     * @param \DateTime $dateReviewed
     * @return Worksheet
     */
    public function setDateReviewed($dateReviewed)
    {
        $this->dateReviewed = $dateReviewed;
    
        return $this;
    }

    /**
     * Get dateReviewed
     *
     * @return \DateTime 
     */
    public function getDateReviewed()
    {
        return $this->dateReviewed;
    }

    /**
     * Set lab
     *
     * @param integer $lab
     * @return Worksheet
     */
    public function setLab($lab)
    {
        $this->lab = $lab;
    
        return $this;
    }

    /**
     * Get lab
     *
     * @return integer 
     */
    public function getLab()
    {
        return $this->lab;
    }

    /**
     * Set review2By
     *
     * @param integer $review2By
     * @return Worksheet
     */
    public function setReview2By($review2By)
    {
        $this->review2By = $review2By;
    
        return $this;
    }

    /**
     * Get review2By
     *
     * @return integer 
     */
    public function getReview2By()
    {
        return $this->review2By;
    }

    /**
     * Set review2Date
     *
     * @param \DateTime $review2Date
     * @return Worksheet
     */
    public function setReview2Date($review2Date)
    {
        $this->review2Date = $review2Date;
    
        return $this;
    }

    /**
     * Get review2Date
     *
     * @return \DateTime 
     */
    public function getReview2Date()
    {
        return $this->review2Date;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return Worksheet
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

    /**
     * Set samplePrepLotNo
     *
     * @param string $samplePrepLotNo
     * @return Worksheet
     */
    public function setSamplePrepLotNo($samplePrepLotNo)
    {
        $this->samplePrepLotNo = $samplePrepLotNo;
    
        return $this;
    }

    /**
     * Get samplePrepLotNo
     *
     * @return string 
     */
    public function getSamplePrepLotNo()
    {
        return $this->samplePrepLotNo;
    }

    /**
     * Set bulkLysisLotNo
     *
     * @param string $bulkLysisLotNo
     * @return Worksheet
     */
    public function setBulkLysisLotNo($bulkLysisLotNo)
    {
        $this->bulkLysisLotNo = $bulkLysisLotNo;
    
        return $this;
    }

    /**
     * Get bulkLysisLotNo
     *
     * @return string 
     */
    public function getBulkLysisLotNo()
    {
        return $this->bulkLysisLotNo;
    }

    /**
     * Set samplePrepExpiryDate
     *
     * @param \DateTime $samplePrepExpiryDate
     * @return Worksheet
     */
    public function setSamplePrepExpiryDate($samplePrepExpiryDate)
    {
        $this->samplePrepExpiryDate = $samplePrepExpiryDate;
    
        return $this;
    }

    /**
     * Get samplePrepExpiryDate
     *
     * @return \DateTime 
     */
    public function getSamplePrepExpiryDate()
    {
        return $this->samplePrepExpiryDate;
    }

    /**
     * Set bulkLysisExpiryDate
     *
     * @param \DateTime $bulkLysisExpiryDate
     * @return Worksheet
     */
    public function setBulkLysisExpiryDate($bulkLysisExpiryDate)
    {
        $this->bulkLysisExpiryDate = $bulkLysisExpiryDate;
    
        return $this;
    }

    /**
     * Get bulkLysisExpiryDate
     *
     * @return \DateTime 
     */
    public function getBulkLysisExpiryDate()
    {
        return $this->bulkLysisExpiryDate;
    }

    /**
     * Set controlLotNo
     *
     * @param string $controlLotNo
     * @return Worksheet
     */
    public function setControlLotNo($controlLotNo)
    {
        $this->controlLotNo = $controlLotNo;
    
        return $this;
    }

    /**
     * Get controlLotNo
     *
     * @return string 
     */
    public function getControlLotNo()
    {
        return $this->controlLotNo;
    }

    /**
     * Set calibratorLotNo
     *
     * @param string $calibratorLotNo
     * @return Worksheet
     */
    public function setCalibratorLotNo($calibratorLotNo)
    {
        $this->calibratorLotNo = $calibratorLotNo;
    
        return $this;
    }

    /**
     * Get calibratorLotNo
     *
     * @return string 
     */
    public function getCalibratorLotNo()
    {
        return $this->calibratorLotNo;
    }

    /**
     * Set amplificationKitLotNo
     *
     * @param string $amplificationKitLotNo
     * @return Worksheet
     */
    public function setAmplificationKitLotNo($amplificationKitLotNo)
    {
        $this->amplificationKitLotNo = $amplificationKitLotNo;
    
        return $this;
    }

    /**
     * Get amplificationKitLotNo
     *
     * @return string 
     */
    public function getAmplificationKitLotNo()
    {
        return $this->amplificationKitLotNo;
    }

    /**
     * Set controlExpiryDate
     *
     * @param \DateTime $controlExpiryDate
     * @return Worksheet
     */
    public function setControlExpiryDate($controlExpiryDate)
    {
        $this->controlExpiryDate = $controlExpiryDate;
    
        return $this;
    }

    /**
     * Get controlExpiryDate
     *
     * @return \DateTime 
     */
    public function getControlExpiryDate()
    {
        return $this->controlExpiryDate;
    }

    /**
     * Set calibratorExpiryDate
     *
     * @param \DateTime $calibratorExpiryDate
     * @return Worksheet
     */
    public function setCalibratorExpiryDate($calibratorExpiryDate)
    {
        $this->calibratorExpiryDate = $calibratorExpiryDate;
    
        return $this;
    }

    /**
     * Get calibratorExpiryDate
     *
     * @return \DateTime 
     */
    public function getCalibratorExpiryDate()
    {
        return $this->calibratorExpiryDate;
    }

    /**
     * Set amplificationExpiryDate
     *
     * @param \DateTime $amplificationExpiryDate
     * @return Worksheet
     */
    public function setAmplificationExpiryDate($amplificationExpiryDate)
    {
        $this->amplificationExpiryDate = $amplificationExpiryDate;
    
        return $this;
    }

    /**
     * Get amplificationExpiryDate
     *
     * @return \DateTime 
     */
    public function getAmplificationExpiryDate()
    {
        return $this->amplificationExpiryDate;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Worksheet
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set dateCancelled
     *
     * @param \DateTime $dateCancelled
     * @return Worksheet
     */
    public function setDateCancelled($dateCancelled)
    {
        $this->dateCancelled = $dateCancelled;
    
        return $this;
    }

    /**
     * Get dateCancelled
     *
     * @return \DateTime 
     */
    public function getDateCancelled()
    {
        return $this->dateCancelled;
    }

    /**
     * Set cancelledBy
     *
     * @param integer $cancelledBy
     * @return Worksheet
     */
    public function setCancelledBy($cancelledBy)
    {
        $this->cancelledBy = $cancelledBy;
    
        return $this;
    }

    /**
     * Get cancelledBy
     *
     * @return integer 
     */
    public function getCancelledBy()
    {
        return $this->cancelledBy;
    }

    /**
     * Set dateUpdated
     *
     * @param \DateTime $dateUpdated
     * @return Worksheet
     */
    public function setDateUpdated($dateUpdated)
    {
        $this->dateUpdated = $dateUpdated;
    
        return $this;
    }

    /**
     * Get dateUpdated
     *
     * @return \DateTime 
     */
    public function getDateUpdated()
    {
        return $this->dateUpdated;
    }

    /**
     * Set negControlResult
     *
     * @param integer $negControlResult
     * @return Worksheet
     */
    public function setNegControlResult($negControlResult)
    {
        $this->negControlResult = $negControlResult;
    
        return $this;
    }

    /**
     * Get negControlResult
     *
     * @return integer 
     */
    public function getNegControlResult()
    {
        return $this->negControlResult;
    }

    /**
     * Set negControlInterpretation
     *
     * @param string $negControlInterpretation
     * @return Worksheet
     */
    public function setNegControlInterpretation($negControlInterpretation)
    {
        $this->negControlInterpretation = $negControlInterpretation;
    
        return $this;
    }

    /**
     * Get negControlInterpretation
     *
     * @return string 
     */
    public function getNegControlInterpretation()
    {
        return $this->negControlInterpretation;
    }

    /**
     * Set posControlResult
     *
     * @param integer $posControlResult
     * @return Worksheet
     */
    public function setPosControlResult($posControlResult)
    {
        $this->posControlResult = $posControlResult;
    
        return $this;
    }

    /**
     * Get posControlResult
     *
     * @return integer 
     */
    public function getPosControlResult()
    {
        return $this->posControlResult;
    }

    /**
     * Set posControlInterpretation
     *
     * @param string $posControlInterpretation
     * @return Worksheet
     */
    public function setPosControlInterpretation($posControlInterpretation)
    {
        $this->posControlInterpretation = $posControlInterpretation;
    
        return $this;
    }

    /**
     * Get posControlInterpretation
     *
     * @return string 
     */
    public function getPosControlInterpretation()
    {
        return $this->posControlInterpretation;
    }
}
