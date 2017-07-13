<?php

namespace DbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TStats
 */
class TStats
{
    /**
     * @var string
     */
    private $tName;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $halftime;

    /**
     * @var integer
     */
    private $cornerK;

    /**
     * @var integer
     */
    private $goalK;

    /**
     * @var integer
     */
    private $freeK;

    /**
     * @var string
     */
    private $venue;

    /**
     * @var integer
     */
    private $tId;


    /**
     * Set tName
     *
     * @param string $tName
     * @return TStats
     */
    public function setTName($tName)
    {
        $this->tName = $tName;

        return $this;
    }

    /**
     * Get tName
     *
     * @return string 
     */
    public function getTName()
    {
        return $this->tName;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return TStats
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set time
     *
     * @param string $halftime
     * @return TStats
     */
    public function sethalftime($halftime)
    {
        $this->halftime = $halftime;

        return $this;
    }

    /**
     * Get time
     *
     * @return string
     */
    public function gethalftime()
    {
        return $this->halftime;
    }

    /**
     * Set cornerK
     *
     * @param integer $cornerK
     * @return TStats
     */
    public function setCornerK($cornerK)
    {
        $this->cornerK = $cornerK;

        return $this;
    }

    /**
     * Get cornerK
     *
     * @return integer 
     */
    public function getCornerK()
    {
        return $this->cornerK;
    }

    /**
     * Set goalK
     *
     * @param integer $goalK
     * @return TStats
     */
    public function setGoalK($goalK)
    {
        $this->goalK = $goalK;

        return $this;
    }

    /**
     * Get goalK
     *
     * @return integer 
     */
    public function getGoalK()
    {
        return $this->goalK;
    }

    /**
     * Set freeK
     *
     * @param integer $freeK
     * @return TStats
     */
    public function setFreeK($freeK)
    {
        $this->freeK = $freeK;

        return $this;
    }

    /**
     * Get freeK
     *
     * @return integer 
     */
    public function getFreeK()
    {
        return $this->freeK;
    }

    /**
     * Set freeK
     *
     * @param string $venue
     * @return TStats
     */
    public function setVenue(string $venue)
    {
        $this->venue = $venue;

        return $this;
    }

    /**
     * Get venue
     *
     * @return string
     */
    public function getVenue()
    {
        return $this->venue;
    }

    /**
     * Get tId
     *
     * @return integer 
     */
    public function getTId()
    {
        return $this->tId;
    }
}
