<?php

namespace DbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Overall
 */
class Overall
{
    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $home;

    /**
     * @var string
     */
    private $away;

    /**
     * @var integer
     */
    private $dateid;


    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Overall
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
     * Set home
     *
     * @param string $home
     * @return Overall
     */
    public function setHome($home)
    {
        $this->home = $home;

        return $this;
    }

    /**
     * Get home
     *
     * @return string 
     */
    public function getHome()
    {
        return $this->home;
    }

    /**
     * Set away
     *
     * @param string $away
     * @return Overall
     */
    public function setAway($away)
    {
        $this->away = $away;

        return $this;
    }

    /**
     * Get away
     *
     * @return string 
     */
    public function getAway()
    {
        return $this->away;
    }

    /**
     * Get dateid
     *
     * @return integer 
     */
    public function getDateId()
    {
        return $this->dateid;
    }
}
