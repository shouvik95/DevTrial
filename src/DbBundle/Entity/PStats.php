<?php

namespace DbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PStats
 */
class PStats
{
    /**
     * @var string
     */
    private $pName;

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
    private $shot;

    /**
     * @var integer
     */
    private $shotongoal;

    /**
     * @var integer
     */
    private $assist;

    /**
     * @var integer
     */
    private $goal;

    /**
     * @var integer
     */
    private $owngoal;

    /**
     * @var integer
     */
    private $penaltykickmade;

    /**
     * @var integer
     */
    private $penaltykickattempt;

    /**
     * @var integer
     */
    private $offsides;

    /**
     * @var integer
     */
    private $keepersave;

    /**
     * @var integer
     */
    private $foul;

    /**
     * @var integer
     */
    private $yellowcard;

    /**
     * @var integer
     */
    private $redcard;

    /**
     * @var integer
     */
    private $pId;


    /**
     * Set pName
     *
     * @param string $pName
     * @return PStats
     */
    public function setPName($pName)
    {
        $this->pName = $pName;

        return $this;
    }

    /**
     * Get pName
     *
     * @return string 
     */
    public function getPName()
    {
        return $this->pName;
    }

    /**
     * Set tName
     *
     * @param string $tName
     * @return PStats
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
     * @return PStats
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
     * @return PStats
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
     * Set shot
     *
     * @param integer $shot
     * @return PStats
     */
    public function setShot($shot)
    {
        $this->shot = $shot;

        return $this;
    }

    /**
     * Get shot
     *
     * @return integer 
     */
    public function getShot()
    {
        return $this->shot;
    }

    /**
     * Set shotongoal
     *
     * @param integer $shotongoal
     * @return PStats
     */
    public function setShotongoal($shotongoal)
    {
        $this->shotongoal = $shotongoal;

        return $this;
    }

    /**
     * Get shotongoal
     *
     * @return integer 
     */
    public function getShotongoal()
    {
        return $this->shotongoal;
    }

    /**
     * Set assist
     *
     * @param integer $assist
     * @return PStats
     */
    public function setAssist($assist)
    {
        $this->assist = $assist;

        return $this;
    }

    /**
     * Get assist
     *
     * @return integer 
     */
    public function getAssist()
    {
        return $this->assist;
    }

    /**
     * Set goal
     *
     * @param integer $goal
     * @return PStats
     */
    public function setGoal($goal)
    {
        $this->goal = $goal;

        return $this;
    }

    /**
     * Get goal
     *
     * @return integer 
     */
    public function getGoal()
    {
        return $this->goal;
    }

    /**
     * Set owngoal
     *
     * @param integer $owngoal
     * @return PStats
     */
    public function setOwngoal($owngoal)
    {
        $this->owngoal = $owngoal;

        return $this;
    }

    /**
     * Get owngoal
     *
     * @return integer 
     */
    public function getOwngoal()
    {
        return $this->owngoal;
    }

    /**
     * Set penaltykickmade
     *
     * @param integer $penaltykickmade
     * @return PStats
     */
    public function setPenaltykickmade($penaltykickmade)
    {
        $this->penaltykickmade = $penaltykickmade;

        return $this;
    }

    /**
     * Get penaltykickmade
     *
     * @return integer 
     */
    public function getPenaltykickmade()
    {
        return $this->penaltykickmade;
    }

    /**
     * Set penaltykickattempt
     *
     * @param integer $penaltykickattempt
     * @return PStats
     */
    public function setPenaltykickattempt($penaltykickattempt)
    {
        $this->penaltykickattempt = $penaltykickattempt;

        return $this;
    }

    /**
     * Get penaltykickattempt
     *
     * @return integer 
     */
    public function getPenaltykickattempt()
    {
        return $this->penaltykickattempt;
    }

    /**
     * Set offsides
     *
     * @param integer $offsides
     * @return PStats
     */
    public function setOffsides($offsides)
    {
        $this->offsides = $offsides;

        return $this;
    }

    /**
     * Get offsides
     *
     * @return integer 
     */
    public function getOffsides()
    {
        return $this->offsides;
    }

    /**
     * Set keepersave
     *
     * @param integer $keepersave
     * @return PStats
     */
    public function setKeepersave($keepersave)
    {
        $this->keepersave = $keepersave;

        return $this;
    }

    /**
     * Get keepersave
     *
     * @return integer 
     */
    public function getKeepersave()
    {
        return $this->keepersave;
    }

    /**
     * Set foul
     *
     * @param integer $foul
     * @return PStats
     */
    public function setFoul($foul)
    {
        $this->foul = $foul;

        return $this;
    }

    /**
     * Get foul
     *
     * @return integer 
     */
    public function getFoul()
    {
        return $this->foul;
    }

    /**
     * Set yellowcard
     *
     * @param integer $yellowcard
     * @return PStats
     */
    public function setYellowcard($yellowcard)
    {
        $this->yellowcard = $yellowcard;

        return $this;
    }

    /**
     * Get yellowcard
     *
     * @return integer 
     */
    public function getYellowcard()
    {
        return $this->yellowcard;
    }

    /**
     * Set redcard
     *
     * @param integer $redcard
     * @return PStats
     */
    public function setRedcard($redcard)
    {
        $this->redcard = $redcard;

        return $this;
    }

    /**
     * Get redcard
     *
     * @return integer 
     */
    public function getRedcard()
    {
        return $this->redcard;
    }

    /**
     * Get pId
     *
     * @return integer 
     */
    public function getPId()
    {
        return $this->pId;
    }
}
