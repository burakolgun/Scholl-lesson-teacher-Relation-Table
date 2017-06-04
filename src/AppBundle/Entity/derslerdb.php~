<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * derslerdb
 *
 * @ORM\Table(name="derslerdb")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\derslerdbRepository")
 */
class derslerdb
{

    /**
     * Many Groups have Many Users.
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\bolumdb", mappedBy="dersler")
     */
    private $bolumler;

    public function __construct() {
        $this->bolumler = new \Doctrine\Common\Collections\ArrayCollection();
    }
    /**
     * Many ders have Many ogretmen.
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\ogretim_gorevlisidb", mappedBy="dersler")
     */
    private $ogretmenler;

    public function _construct() {
        $this->ogretmenler = new \Doctrine\Common\Collections\ArrayCollection();
    }



    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="akts", type="float", nullable=true)
     */
    private $akts;

    /**
     * @var float
     *
     * @ORM\Column(name="labpuan", type="float", nullable=true)
     */
    private $labpuan;

    /**
     * @var string
     *
     * @ORM\Column(name="ders_kod", type="string", length=255)
     */
    private $dersKod;

    /**
     * @var string
     *
     * @ORM\Column(name="zorunluveyasecmeli", type="string", length=255)
     */
    private $zorunluveyasecmeli;

    /**
     * @var string
     *
     * @ORM\Column(name="ders_period", type="string", length=255, nullable=true)
     */
    private $dersPeriod;

    /**
     * @var string
     *
     * @ORM\Column(name="ders_ad", type="string", length=255)
     */
    private $dersAd;

    /**
     * @var float
     *
     * @ORM\Column(name="pratikpuan", type="float", nullable=true)
     */
    private $pratikpuan;

    /**
     * @var int
     *
     * @ORM\Column(name="ders_donem", type="integer")
     */
    private $dersDonem;

    /**
     * @var float
     *
     * @ORM\Column(name="teoripuan", type="float")
     */
    private $teoripuan;




    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set akts
     *
     * @param float $akts
     *
     * @return derslerdb
     */
    public function setAkts($akts)
    {
        $this->akts = $akts;

        return $this;
    }

    /**
     * Get akts
     *
     * @return float
     */
    public function getAkts()
    {
        return $this->akts;
    }

    /**
     * Set labpuan
     *
     * @param float $labpuan
     *
     * @return derslerdb
     */
    public function setLabpuan($labpuan)
    {
        $this->labpuan = $labpuan;

        return $this;
    }

    /**
     * Get labpuan
     *
     * @return float
     */
    public function getLabpuan()
    {
        return $this->labpuan;
    }

    /**
     * Set dersKod
     *
     * @param string $dersKod
     *
     * @return derslerdb
     */
    public function setDersKod($dersKod)
    {
        $this->dersKod = $dersKod;

        return $this;
    }

    /**
     * Get dersKod
     *
     * @return string
     */
    public function getDersKod()
    {
        return $this->dersKod;
    }

    /**
     * Set zorunluveyasecmeli
     *
     * @param string $zorunluveyasecmeli
     *
     * @return derslerdb
     */
    public function setZorunluveyasecmeli($zorunluveyasecmeli)
    {
        $this->zorunluveyasecmeli = $zorunluveyasecmeli;

        return $this;
    }

    /**
     * Get zorunluveyasecmeli
     *
     * @return string
     */
    public function getZorunluveyasecmeli()
    {
        return $this->zorunluveyasecmeli;
    }

    /**
     * Set dersPeriod
     *
     * @param string $dersPeriod
     *
     * @return derslerdb
     */
    public function setDersPeriod($dersPeriod)
    {
        $this->dersPeriod = $dersPeriod;

        return $this;
    }

    /**
     * Get dersPeriod
     *
     * @return string
     */
    public function getDersPeriod()
    {
        return $this->dersPeriod;
    }

    /**
     * Set dersAd
     *
     * @param string $dersAd
     *
     * @return derslerdb
     */
    public function setDersAd($dersAd)
    {
        $this->dersAd = $dersAd;

        return $this;
    }

    /**
     * Get dersAd
     *
     * @return string
     */
    public function getDersAd()
    {
        return $this->dersAd;
    }

    /**
     * Set pratikpuan
     *
     * @param float $pratikpuan
     *
     * @return derslerdb
     */
    public function setPratikpuan($pratikpuan)
    {
        $this->pratikpuan = $pratikpuan;

        return $this;
    }

    /**
     * Get pratikpuan
     *
     * @return float
     */
    public function getPratikpuan()
    {
        return $this->pratikpuan;
    }

    /**
     * Set dersDonem
     *
     * @param integer $dersDonem
     *
     * @return derslerdb
     */
    public function setDersDonem($dersDonem)
    {
        $this->dersDonem = $dersDonem;

        return $this;
    }

    /**
     * Get dersDonem
     *
     * @return int
     */
    public function getDersDonem()
    {
        return $this->dersDonem;
    }

    /**
     * Set teoripuan
     *
     * @param float $teoripuan
     *
     * @return derslerdb
     */
    public function setTeoripuan($teoripuan)
    {
        $this->teoripuan = $teoripuan;

        return $this;
    }

    /**
     * Get teoripuan
     *
     * @return float
     */
    public function getTeoripuan()
    {
        return $this->teoripuan;
    }

    /**
     * Add bolumler
     *
     * @param \AppBundle\Entity\bolumdb $bolumler
     *
     * @return derslerdb
     */
    public function addBolumler(\AppBundle\Entity\bolumdb $bolumler)
    {
        $this->bolumler[] = $bolumler;

        return $this;
    }

    /**
     * Remove bolumler
     *
     * @param \AppBundle\Entity\bolumdb $bolumler
     */
    public function removeBolumler(\AppBundle\Entity\bolumdb $bolumler)
    {
        $this->bolumler->removeElement($bolumler);
    }

    /**
     * Get bolumler
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBolumler()
    {
        return $this->bolumler;
    }


    /**
     * Add ogretmenler
     *
     * @param \AppBundle\Entity\ogretim_gorevlisidb $ogretmenler
     *
     * @return derslerdb
     */
    public function addOgretmenler(\AppBundle\Entity\ogretim_gorevlisidb $ogretmenler)
    {
        $this->ogretmenler[] = $ogretmenler;

        return $this;
    }

    /**
     * Remove ogretmenler
     *
     * @param \AppBundle\Entity\ogretim_gorevlisidb $ogretmenler
     */
    public function removeOgretmenler(\AppBundle\Entity\ogretim_gorevlisidb $ogretmenler)
    {
        $this->ogretmenler->removeElement($ogretmenler);
    }

    /**
     * Get ogretmenler
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOgretmenler()
    {
        return $this->ogretmenler;
    }
}
