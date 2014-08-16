<?php

namespace models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Userlog
 *
 * @ORM\Table(name="userlog")
 * @ORM\Entity
 */
class Userlog
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
     * @var boolean
     *
     * @ORM\Column(name="user", type="boolean", nullable=true)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="access_type", type="string", length=255, nullable=true)
     */
    private $accessType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=true)
     */
    private $timestamp;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_address", type="string", length=255, nullable=true)
     */
    private $ipAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="agent", type="string", length=255, nullable=true)
     */
    private $agent;

    /**
     * @var string
     *
     * @ORM\Column(name="sess_data", type="text", nullable=true)
     */
    private $sessData;


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
     * Set user
     *
     * @param boolean $user
     * @return Userlog
     */
    public function setUser($user)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return boolean 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set accessType
     *
     * @param string $accessType
     * @return Userlog
     */
    public function setAccessType($accessType)
    {
        $this->accessType = $accessType;
    
        return $this;
    }

    /**
     * Get accessType
     *
     * @return string 
     */
    public function getAccessType()
    {
        return $this->accessType;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return Userlog
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    
        return $this;
    }

    /**
     * Get timestamp
     *
     * @return \DateTime 
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set ipAddress
     *
     * @param string $ipAddress
     * @return Userlog
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
    
        return $this;
    }

    /**
     * Get ipAddress
     *
     * @return string 
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * Set agent
     *
     * @param string $agent
     * @return Userlog
     */
    public function setAgent($agent)
    {
        $this->agent = $agent;
    
        return $this;
    }

    /**
     * Get agent
     *
     * @return string 
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * Set sessData
     *
     * @param string $sessData
     * @return Userlog
     */
    public function setSessData($sessData)
    {
        $this->sessData = $sessData;
    
        return $this;
    }

    /**
     * Get sessData
     *
     * @return string 
     */
    public function getSessData()
    {
        return $this->sessData;
    }
}
