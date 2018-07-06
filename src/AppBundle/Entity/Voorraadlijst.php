<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voorraadlijst
 *
 * @ORM\Table(name="voorraadlijst")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VoorraadlijstRepository")
 */
class Voorraadlijst
{

    /**
     * @var string
     *
     * @ORM\Column(name="artikelnummer", type="string", length=20, nullable=true)
    * @ORM\Id
     */
    private $artikelnummer;

    /**
     * @var string
     *
     * @ORM\Column(name="omschrijving", type="string", length=999, nullable=true)
     */
    private $omschrijving;

    /**
     * @var string
     *
     * @ORM\Column(name="adviesprijs", type="string", length=999, nullable=true)
     */
    private $adviesprijs;

    /**
     * @var string
     *
     * @ORM\Column(name="nuBeschikbaar", type="string", length=999, nullable=true)
     */
    private $nuBeschikbaar;

    /**
     * @var string
     *
     * @ORM\Column(name="eersteLevVerwacht", type="string", length=999, nullable=true)
     */
    private $eersteLevVerwacht;

    /**
     * @var string
     *
     * @ORM\Column(name="beschikbaarNaEersteLev", type="string", length=999, nullable=true)
     */
    private $beschikbaarNaEersteLev;

    /**
     * @var string
     *
     * @ORM\Column(name="tweedeLevVerwacht", type="string", length=999, nullable=true)
     */
    private $tweedeLevVerwacht;

    /**
     * @var string
     *
     * @ORM\Column(name="beschikbaarNaTweedeLev", type="string", length=999, nullable=true)
     */
    private $beschikbaarNaTweedeLev;

    /**
     * @var string
     *
     * @ORM\Column(name="derdeLevVerwacht", type="string", length=999, nullable=true)
     */
    private $derdeLevVerwacht;

    /**
     * @var string
     *
     * @ORM\Column(name="beschikbaarNaDerdeLev", type="string", length=999, nullable=true)
     */
    private $beschikbaarNaDerdeLev;

    /**
     * @var string
     *
     * @ORM\Column(name="vierDeZomerProcent", type="string", length=999, nullable=true)
     */
    private $vierDeZomerProcent;

    /**
     * @var string
     *
     * @ORM\Column(name="vierDeZomerEuro", type="string", length=999, nullable=true)
     */
    private $vierDeZomerEuro;

    /**
     * @var string
     *
     * @ORM\Column(name="Opmerking", type="string", length=999, nullable=true)
     */
    private $opmerking;


    /**
     * Set artikelnummer
     *
     * @param string $artikelnummer
     *
     * @return Voorraadlijst
     */
    public function setArtikelnummer($artikelnummer)
    {
        $this->artikelnummer = $artikelnummer;

        return $this;
    }

    /**
     * Get artikelnummer
     *
     * @return string
     */
    public function getArtikelnummer()
    {
        return $this->artikelnummer;
    }

    /**
     * Set omschrijving
     *
     * @param string $omschrijving
     *
     * @return Voorraadlijst
     */
    public function setOmschrijving($omschrijving)
    {
        $this->omschrijving = $omschrijving;

        return $this;
    }

    /**
     * Get omschrijving
     *
     * @return string
     */
    public function getOmschrijving()
    {
        return $this->omschrijving;
    }

    /**
     * Set adviesprijs
     *
     * @param string $adviesprijs
     *
     * @return Voorraadlijst
     */
    public function setAdviesprijs($adviesprijs)
    {
        $this->adviesprijs = $adviesprijs;

        return $this;
    }

    /**
     * Get adviesprijs
     *
     * @return string
     */
    public function getAdviesprijs()
    {
        return $this->adviesprijs;
    }

    /**
     * Set nuBeschikbaar
     *
     * @param string $nuBeschikbaar
     *
     * @return Voorraadlijst
     */
    public function setNuBeschikbaar($nuBeschikbaar)
    {
        $this->nuBeschikbaar = $nuBeschikbaar;

        return $this;
    }

    /**
     * Get nuBeschikbaar
     *
     * @return string
     */
    public function getNuBeschikbaar()
    {
        return $this->nuBeschikbaar;
    }

    /**
     * Set eersteLevVerwacht
     *
     * @param string $eersteLevVerwacht
     *
     * @return Voorraadlijst
     */
    public function setEersteLevVerwacht($eersteLevVerwacht)
    {
        $this->eersteLevVerwacht = $eersteLevVerwacht;

        return $this;
    }

    /**
     * Get eersteLevVerwacht
     *
     * @return string
     */
    public function getEersteLevVerwacht()
    {
        return $this->eersteLevVerwacht;
    }

    /**
     * Set beschikbaarNaEersteLev
     *
     * @param string $beschikbaarNaEersteLev
     *
     * @return Voorraadlijst
     */
    public function setBeschikbaarNaEersteLev($beschikbaarNaEersteLev)
    {
        $this->beschikbaarNaEersteLev = $beschikbaarNaEersteLev;

        return $this;
    }

    /**
     * Get beschikbaarNaEersteLev
     *
     * @return string
     */
    public function getBeschikbaarNaEersteLev()
    {
        return $this->beschikbaarNaEersteLev;
    }

    /**
     * Set tweedeLevVerwacht
     *
     * @param string $tweedeLevVerwacht
     *
     * @return Voorraadlijst
     */
    public function setTweedeLevVerwacht($tweedeLevVerwacht)
    {
        $this->tweedeLevVerwacht = $tweedeLevVerwacht;

        return $this;
    }

    /**
     * Get tweedeLevVerwacht
     *
     * @return string
     */
    public function getTweedeLevVerwacht()
    {
        return $this->tweedeLevVerwacht;
    }

    /**
     * Set beschikbaarNaTweedeLev
     *
     * @param string $beschikbaarNaTweedeLev
     *
     * @return Voorraadlijst
     */
    public function setBeschikbaarNaTweedeLev($beschikbaarNaTweedeLev)
    {
        $this->beschikbaarNaTweedeLev = $beschikbaarNaTweedeLev;

        return $this;
    }

    /**
     * Get beschikbaarNaTweedeLev
     *
     * @return string
     */
    public function getBeschikbaarNaTweedeLev()
    {
        return $this->beschikbaarNaTweedeLev;
    }

    /**
     * Set derdeLevVerwacht
     *
     * @param string $derdeLevVerwacht
     *
     * @return Voorraadlijst
     */
    public function setDerdeLevVerwacht($derdeLevVerwacht)
    {
        $this->derdeLevVerwacht = $derdeLevVerwacht;

        return $this;
    }

    /**
     * Get derdeLevVerwacht
     *
     * @return string
     */
    public function getDerdeLevVerwacht()
    {
        return $this->derdeLevVerwacht;
    }

    /**
     * Set beschikbaarNaDerdeLev
     *
     * @param string $beschikbaarNaDerdeLev
     *
     * @return Voorraadlijst
     */
    public function setBeschikbaarNaDerdeLev($beschikbaarNaDerdeLev)
    {
        $this->beschikbaarNaDerdeLev = $beschikbaarNaDerdeLev;

        return $this;
    }

    /**
     * Get beschikbaarNaDerdeLev
     *
     * @return string
     */
    public function getBeschikbaarNaDerdeLev()
    {
        return $this->beschikbaarNaDerdeLev;
    }

    /**
     * Set vierDeZomerProcent
     *
     * @param string $vierDeZomerProcent
     *
     * @return Voorraadlijst
     */
    public function setVierDeZomerProcent($vierDeZomerProcent)
    {
        $this->vierDeZomerProcent = $vierDeZomerProcent;

        return $this;
    }

    /**
     * Get vierDeZomerProcent
     *
     * @return string
     */
    public function getVierDeZomerProcent()
    {
        return $this->vierDeZomerProcent;
    }

    /**
     * Set vierDeZomerEuro
     *
     * @param string $vierDeZomerEuro
     *
     * @return Voorraadlijst
     */
    public function setVierDeZomerEuro($vierDeZomerEuro)
    {
        $this->vierDeZomerEuro = $vierDeZomerEuro;

        return $this;
    }

    /**
     * Get vierDeZomerEuro
     *
     * @return string
     */
    public function getVierDeZomerEuro()
    {
        return $this->vierDeZomerEuro;
    }

    /**
     * Set opmerking
     *
     * @param string $opmerking
     *
     * @return Voorraadlijst
     */
    public function setOpmerking($opmerking)
    {
        $this->opmerking = $opmerking;

        return $this;
    }

    /**
     * Get opmerking
     *
     * @return string
     */
    public function getOpmerking()
    {
        return $this->opmerking;
    }
}

