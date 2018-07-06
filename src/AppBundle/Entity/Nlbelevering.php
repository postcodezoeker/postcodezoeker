<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nlbelevering
 *
 * @ORM\Table(name="nlbelevering")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NlbeleveringRepository")
 */
class Nlbelevering
{

    /**
     * @var string
     *
     * @ORM\Column(name="Postcode", type="string", length=7, unique=true)
     * @ORM\Id
     */
    private $postcode;

    /**
     * @var string
     *
     * @ORM\Column(name="Week1", type="string", length=255, nullable=true)
     */
    private $week1;

    /**
     * @var string
     *
     * @ORM\Column(name="Week2", type="string", length=255, nullable=true)
     */
    private $week2;

    /**
     * @var string
     *
     * @ORM\Column(name="Week3", type="string", length=255, nullable=true)
     */
    private $week3;

    /**
     * @var string
     *
     * @ORM\Column(name="Week4", type="string", length=255, nullable=true)
     */
    private $week4;

    /**
     * @var string
     *
     * @ORM\Column(name="Week5", type="string", length=255, nullable=true)
     */
    private $week5;

    /**
     * @var string
     *
     * @ORM\Column(name="Week6", type="string", length=255, nullable=true)
     */
    private $week6;

    /**
     * @var string
     *
     * @ORM\Column(name="Week7", type="string", length=255, nullable=true)
     */
    private $week7;

    /**
     * @var string
     *
     * @ORM\Column(name="Week8", type="string", length=255, nullable=true)
     */
    private $week8;

    /**
     * @var string
     *
     * @ORM\Column(name="Week9", type="string", length=255, nullable=true)
     */
    private $week9;


    /**
     * Set postcode
     *
     * @param string $postcode
     *
     * @return Nlbeleverling
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Get postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set week1
     *
     * @param string $week1
     *
     * @return Nlbeleverling
     */
    public function setWeek1($week1)
    {
        $this->week1 = $week1;

        return $this;
    }

    /**
     * Get week1
     *
     * @return string
     */
    public function getWeek1()
    {
        return $this->week1;
    }

    /**
     * Set week2
     *
     * @param string $week2
     *
     * @return Nlbeleverling
     */
    public function setWeek2($week2)
    {
        $this->week2 = $week2;

        return $this;
    }

    /**
     * Get week2
     *
     * @return string
     */
    public function getWeek2()
    {
        return $this->week2;
    }

    /**
     * Set week3
     *
     * @param string $week3
     *
     * @return Nlbeleverling
     */
    public function setWeek3($week3)
    {
        $this->week3 = $week3;

        return $this;
    }

    /**
     * Get week3
     *
     * @return string
     */
    public function getWeek3()
    {
        return $this->week3;
    }

    /**
     * Set week4
     *
     * @param string $week4
     *
     * @return Nlbeleverling
     */
    public function setWeek4($week4)
    {
        $this->week4 = $week4;

        return $this;
    }

    /**
     * Get week4
     *
     * @return string
     */
    public function getWeek4()
    {
        return $this->week4;
    }

    /**
     * Set week5
     *
     * @param string $week5
     *
     * @return Nlbeleverling
     */
    public function setWeek5($week5)
    {
        $this->week5 = $week5;

        return $this;
    }

    /**
     * Get week5
     *
     * @return string
     */
    public function getWeek5()
    {
        return $this->week5;
    }

    /**
     * Set week6
     *
     * @param string $week6
     *
     * @return Nlbeleverling
     */
    public function setWeek6($week6)
    {
        $this->week6 = $week6;

        return $this;
    }

    /**
     * Get week6
     *
     * @return string
     */
    public function getWeek6()
    {
        return $this->week6;
    }

    /**
     * Set week7
     *
     * @param string $week7
     *
     * @return Nlbeleverling
     */
    public function setWeek7($week7)
    {
        $this->week7 = $week7;

        return $this;
    }

    /**
     * Get week7
     *
     * @return string
     */
    public function getWeek7()
    {
        return $this->week7;
    }

    /**
     * Set week8
     *
     * @param string $week8
     *
     * @return Nlbeleverling
     */
    public function setWeek8($week8)
    {
        $this->week8 = $week8;

        return $this;
    }

    /**
     * Get week8
     *
     * @return string
     */
    public function getWeek8()
    {
        return $this->week8;
    }

    /**
     * Set week9
     *
     * @param string $week9
     *
     * @return Nlbeleverling
     */
    public function setWeek9($week9)
    {
        $this->week9 = $week9;

        return $this;
    }

    /**
     * Get week9
     *
     * @return string
     */
    public function getWeek9()
    {
        return $this->week9;
    }

}

