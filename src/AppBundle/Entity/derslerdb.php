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
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\ogretim_gorevlisidb", mappedBy="dersler_2017_bahar")
     */
    private $ogretmenler_2017_bahar;

    public function _construct() {
        $this->ogretmenler_2017_bahar = new \Doctrine\Common\Collections\ArrayCollection();
    }
    /**
     * Many ders have Many ogretmen.
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\ogretim_gorevlisidb", mappedBy="dersler_2017_guz")
     */
    private $ogretmenler_2017_guz;

    public function _constructer() {
        $this->ogretmenler_2017_guz = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Many ders have Many ogretmen.
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\ogretim_gorevlisidb", mappedBy="dersler_2018_bahar")
     */
    private $ogretmenler_2018_bahar;

    public function _construct1() {
        $this->ogretmenler_2018_bahar = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Many ders have Many ogretmen.
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\ogretim_gorevlisidb", mappedBy="dersler_2018_guz")
     */
    private $ogretmenler_2018_guz;

    public function _constructer2() {
        $this->ogretmenler_2018_guz = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Many ders have Many ogretmen.
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\ogretim_gorevlisidb", mappedBy="dersler_2019_bahar")
     */
    private $ogretmenler_2019_bahar;

    public function _construct2() {
        $this->ogretmenler_2019_bahar = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Many ders have Many ogretmen.
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\ogretim_gorevlisidb", mappedBy="dersler_2019_guz")
     */
    private $ogretmenler_2019_guz;

    public function _constructer3() {
        $this->ogretmenler_2019_guz = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Many ders have Many ogretmen.
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\ogretim_gorevlisidb", mappedBy="dersler_2020_bahar")
     */
    private $ogretmenler_2020_bahar;

    public function _construct3() {
        $this->ogretmenler_2020_bahar = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Many ders have Many ogretmen.
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\ogretim_gorevlisidb", mappedBy="dersler_2020_guz")
     */
    private $ogretmenler_2020_guz;

    public function _constructer4() {
        $this->ogretmenler_2020_guz = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Many ders have Many ogretmen.
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\ogretim_gorevlisidb", mappedBy="dersler_2021_bahar")
     */
    private $ogretmenler_2021_bahar;

    public function _construct4() {
        $this->ogretmenler_2021_bahar = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Many ders have Many ogretmen.
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\ogretim_gorevlisidb", mappedBy="dersler_2021_guz")
     */
    private $ogretmenler_2021_guz;

    public function _constructer5() {
        $this->ogretmenler_2021_guz = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Many ders have Many ogretmen.
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\ogretim_gorevlisidb", mappedBy="dersler_2022_bahar")
     */
    private $ogretmenler_2022_bahar;

    public function _construct6() {
        $this->ogretmenler_2022_bahar = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Many ders have Many ogretmen.
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\ogretim_gorevlisidb", mappedBy="dersler_2022_guz")
     */
    private $ogretmenler_2022_guz;

    public function _constructer6() {
        $this->ogretmenler_2022_guz = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Many ders have Many ogretmen.
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\ogretim_gorevlisidb", mappedBy="dersler_2023_bahar")
     */
    private $ogretmenler_2023_bahar;

    public function _construct7() {
        $this->ogretmenler_2023_bahar = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Many ders have Many ogretmen.
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\ogretim_gorevlisidb", mappedBy="dersler_2023_guz")
     */
    private $ogretmenler_2023_guz;

    public function _constructer7() {
        $this->ogretmenler_2023_guz = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Many ders have Many ogretmen.
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\ogretim_gorevlisidb", mappedBy="dersler_2024_bahar")
     */
    private $ogretmenler_2024_bahar;

    public function _construct8() {
        $this->ogretmenler_2024_bahar = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Many ders have Many ogretmen.
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\ogretim_gorevlisidb", mappedBy="dersler_2024_guz")
     */
    private $ogretmenler_2024_guz;

    public function _constructer8() {
        $this->ogretmenler_2024_guz = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Many ders have Many ogretmen.
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\ogretim_gorevlisidb", mappedBy="dersler_2025_bahar")
     */
    private $ogretmenler_2025_bahar;

    public function _construct9() {
        $this->ogretmenler_2025_bahar = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Many ders have Many ogretmen.
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\ogretim_gorevlisidb", mappedBy="dersler_2025_guz")
     */
    private $ogretmenler_2025_guz;

    public function _constructer9() {
        $this->ogretmenler_2025_guz = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * Add ogretmenler2017Bahar
     *
     * @param \AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2017Bahar
     *
     * @return derslerdb
     */
    public function addOgretmenler2017Bahar(\AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2017Bahar)
    {
        $this->ogretmenler_2017_bahar[] = $ogretmenler2017Bahar;

        return $this;
    }

    /**
     * Remove ogretmenler2017Bahar
     *
     * @param \AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2017Bahar
     */
    public function removeOgretmenler2017Bahar(\AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2017Bahar)
    {
        $this->ogretmenler_2017_bahar->removeElement($ogretmenler2017Bahar);
    }

    /**
     * Get ogretmenler2017Bahar
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOgretmenler2017Bahar()
    {
        return $this->ogretmenler_2017_bahar;
    }

    /**
     * Add ogretmenler2017Guz
     *
     * @param \AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2017Guz
     *
     * @return derslerdb
     */
    public function addOgretmenler2017Guz(\AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2017Guz)
    {
        $this->ogretmenler_2017_guz[] = $ogretmenler2017Guz;

        return $this;
    }

    /**
     * Remove ogretmenler2017Guz
     *
     * @param \AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2017Guz
     */
    public function removeOgretmenler2017Guz(\AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2017Guz)
    {
        $this->ogretmenler_2017_guz->removeElement($ogretmenler2017Guz);
    }

    /**
     * Get ogretmenler2017Guz
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOgretmenler2017Guz()
    {
        return $this->ogretmenler_2017_guz;
    }

    /**
     * Add ogretmenler2018Bahar
     *
     * @param \AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2018Bahar
     *
     * @return derslerdb
     */
    public function addOgretmenler2018Bahar(\AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2018Bahar)
    {
        $this->ogretmenler_2018_bahar[] = $ogretmenler2018Bahar;

        return $this;
    }

    /**
     * Remove ogretmenler2018Bahar
     *
     * @param \AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2018Bahar
     */
    public function removeOgretmenler2018Bahar(\AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2018Bahar)
    {
        $this->ogretmenler_2018_bahar->removeElement($ogretmenler2018Bahar);
    }

    /**
     * Get ogretmenler2018Bahar
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOgretmenler2018Bahar()
    {
        return $this->ogretmenler_2018_bahar;
    }

    /**
     * Add ogretmenler2018Guz
     *
     * @param \AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2018Guz
     *
     * @return derslerdb
     */
    public function addOgretmenler2018Guz(\AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2018Guz)
    {
        $this->ogretmenler_2018_guz[] = $ogretmenler2018Guz;

        return $this;
    }

    /**
     * Remove ogretmenler2018Guz
     *
     * @param \AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2018Guz
     */
    public function removeOgretmenler2018Guz(\AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2018Guz)
    {
        $this->ogretmenler_2018_guz->removeElement($ogretmenler2018Guz);
    }

    /**
     * Get ogretmenler2018Guz
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOgretmenler2018Guz()
    {
        return $this->ogretmenler_2018_guz;
    }

    /**
     * Add ogretmenler2019Bahar
     *
     * @param \AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2019Bahar
     *
     * @return derslerdb
     */
    public function addOgretmenler2019Bahar(\AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2019Bahar)
    {
        $this->ogretmenler_2019_bahar[] = $ogretmenler2019Bahar;

        return $this;
    }

    /**
     * Remove ogretmenler2019Bahar
     *
     * @param \AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2019Bahar
     */
    public function removeOgretmenler2019Bahar(\AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2019Bahar)
    {
        $this->ogretmenler_2019_bahar->removeElement($ogretmenler2019Bahar);
    }

    /**
     * Get ogretmenler2019Bahar
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOgretmenler2019Bahar()
    {
        return $this->ogretmenler_2019_bahar;
    }

    /**
     * Add ogretmenler2019Guz
     *
     * @param \AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2019Guz
     *
     * @return derslerdb
     */
    public function addOgretmenler2019Guz(\AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2019Guz)
    {
        $this->ogretmenler_2019_guz[] = $ogretmenler2019Guz;

        return $this;
    }

    /**
     * Remove ogretmenler2019Guz
     *
     * @param \AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2019Guz
     */
    public function removeOgretmenler2019Guz(\AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2019Guz)
    {
        $this->ogretmenler_2019_guz->removeElement($ogretmenler2019Guz);
    }

    /**
     * Get ogretmenler2019Guz
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOgretmenler2019Guz()
    {
        return $this->ogretmenler_2019_guz;
    }

    /**
     * Add ogretmenler2020Bahar
     *
     * @param \AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2020Bahar
     *
     * @return derslerdb
     */
    public function addOgretmenler2020Bahar(\AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2020Bahar)
    {
        $this->ogretmenler_2020_bahar[] = $ogretmenler2020Bahar;

        return $this;
    }

    /**
     * Remove ogretmenler2020Bahar
     *
     * @param \AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2020Bahar
     */
    public function removeOgretmenler2020Bahar(\AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2020Bahar)
    {
        $this->ogretmenler_2020_bahar->removeElement($ogretmenler2020Bahar);
    }

    /**
     * Get ogretmenler2020Bahar
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOgretmenler2020Bahar()
    {
        return $this->ogretmenler_2020_bahar;
    }

    /**
     * Add ogretmenler2020Guz
     *
     * @param \AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2020Guz
     *
     * @return derslerdb
     */
    public function addOgretmenler2020Guz(\AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2020Guz)
    {
        $this->ogretmenler_2020_guz[] = $ogretmenler2020Guz;

        return $this;
    }

    /**
     * Remove ogretmenler2020Guz
     *
     * @param \AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2020Guz
     */
    public function removeOgretmenler2020Guz(\AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2020Guz)
    {
        $this->ogretmenler_2020_guz->removeElement($ogretmenler2020Guz);
    }

    /**
     * Get ogretmenler2020Guz
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOgretmenler2020Guz()
    {
        return $this->ogretmenler_2020_guz;
    }

    /**
     * Add ogretmenler2021Bahar
     *
     * @param \AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2021Bahar
     *
     * @return derslerdb
     */
    public function addOgretmenler2021Bahar(\AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2021Bahar)
    {
        $this->ogretmenler_2021_bahar[] = $ogretmenler2021Bahar;

        return $this;
    }

    /**
     * Remove ogretmenler2021Bahar
     *
     * @param \AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2021Bahar
     */
    public function removeOgretmenler2021Bahar(\AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2021Bahar)
    {
        $this->ogretmenler_2021_bahar->removeElement($ogretmenler2021Bahar);
    }

    /**
     * Get ogretmenler2021Bahar
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOgretmenler2021Bahar()
    {
        return $this->ogretmenler_2021_bahar;
    }

    /**
     * Add ogretmenler2021Guz
     *
     * @param \AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2021Guz
     *
     * @return derslerdb
     */
    public function addOgretmenler2021Guz(\AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2021Guz)
    {
        $this->ogretmenler_2021_guz[] = $ogretmenler2021Guz;

        return $this;
    }

    /**
     * Remove ogretmenler2021Guz
     *
     * @param \AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2021Guz
     */
    public function removeOgretmenler2021Guz(\AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2021Guz)
    {
        $this->ogretmenler_2021_guz->removeElement($ogretmenler2021Guz);
    }

    /**
     * Get ogretmenler2021Guz
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOgretmenler2021Guz()
    {
        return $this->ogretmenler_2021_guz;
    }

    /**
     * Add ogretmenler2022Bahar
     *
     * @param \AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2022Bahar
     *
     * @return derslerdb
     */
    public function addOgretmenler2022Bahar(\AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2022Bahar)
    {
        $this->ogretmenler_2022_bahar[] = $ogretmenler2022Bahar;

        return $this;
    }

    /**
     * Remove ogretmenler2022Bahar
     *
     * @param \AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2022Bahar
     */
    public function removeOgretmenler2022Bahar(\AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2022Bahar)
    {
        $this->ogretmenler_2022_bahar->removeElement($ogretmenler2022Bahar);
    }

    /**
     * Get ogretmenler2022Bahar
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOgretmenler2022Bahar()
    {
        return $this->ogretmenler_2022_bahar;
    }

    /**
     * Add ogretmenler2022Guz
     *
     * @param \AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2022Guz
     *
     * @return derslerdb
     */
    public function addOgretmenler2022Guz(\AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2022Guz)
    {
        $this->ogretmenler_2022_guz[] = $ogretmenler2022Guz;

        return $this;
    }

    /**
     * Remove ogretmenler2022Guz
     *
     * @param \AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2022Guz
     */
    public function removeOgretmenler2022Guz(\AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2022Guz)
    {
        $this->ogretmenler_2022_guz->removeElement($ogretmenler2022Guz);
    }

    /**
     * Get ogretmenler2022Guz
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOgretmenler2022Guz()
    {
        return $this->ogretmenler_2022_guz;
    }

    /**
     * Add ogretmenler2023Bahar
     *
     * @param \AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2023Bahar
     *
     * @return derslerdb
     */
    public function addOgretmenler2023Bahar(\AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2023Bahar)
    {
        $this->ogretmenler_2023_bahar[] = $ogretmenler2023Bahar;

        return $this;
    }

    /**
     * Remove ogretmenler2023Bahar
     *
     * @param \AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2023Bahar
     */
    public function removeOgretmenler2023Bahar(\AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2023Bahar)
    {
        $this->ogretmenler_2023_bahar->removeElement($ogretmenler2023Bahar);
    }

    /**
     * Get ogretmenler2023Bahar
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOgretmenler2023Bahar()
    {
        return $this->ogretmenler_2023_bahar;
    }

    /**
     * Add ogretmenler2023Guz
     *
     * @param \AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2023Guz
     *
     * @return derslerdb
     */
    public function addOgretmenler2023Guz(\AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2023Guz)
    {
        $this->ogretmenler_2023_guz[] = $ogretmenler2023Guz;

        return $this;
    }

    /**
     * Remove ogretmenler2023Guz
     *
     * @param \AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2023Guz
     */
    public function removeOgretmenler2023Guz(\AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2023Guz)
    {
        $this->ogretmenler_2023_guz->removeElement($ogretmenler2023Guz);
    }

    /**
     * Get ogretmenler2023Guz
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOgretmenler2023Guz()
    {
        return $this->ogretmenler_2023_guz;
    }

    /**
     * Add ogretmenler2024Bahar
     *
     * @param \AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2024Bahar
     *
     * @return derslerdb
     */
    public function addOgretmenler2024Bahar(\AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2024Bahar)
    {
        $this->ogretmenler_2024_bahar[] = $ogretmenler2024Bahar;

        return $this;
    }

    /**
     * Remove ogretmenler2024Bahar
     *
     * @param \AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2024Bahar
     */
    public function removeOgretmenler2024Bahar(\AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2024Bahar)
    {
        $this->ogretmenler_2024_bahar->removeElement($ogretmenler2024Bahar);
    }

    /**
     * Get ogretmenler2024Bahar
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOgretmenler2024Bahar()
    {
        return $this->ogretmenler_2024_bahar;
    }

    /**
     * Add ogretmenler2024Guz
     *
     * @param \AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2024Guz
     *
     * @return derslerdb
     */
    public function addOgretmenler2024Guz(\AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2024Guz)
    {
        $this->ogretmenler_2024_guz[] = $ogretmenler2024Guz;

        return $this;
    }

    /**
     * Remove ogretmenler2024Guz
     *
     * @param \AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2024Guz
     */
    public function removeOgretmenler2024Guz(\AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2024Guz)
    {
        $this->ogretmenler_2024_guz->removeElement($ogretmenler2024Guz);
    }

    /**
     * Get ogretmenler2024Guz
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOgretmenler2024Guz()
    {
        return $this->ogretmenler_2024_guz;
    }

    /**
     * Add ogretmenler2025Bahar
     *
     * @param \AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2025Bahar
     *
     * @return derslerdb
     */
    public function addOgretmenler2025Bahar(\AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2025Bahar)
    {
        $this->ogretmenler_2025_bahar[] = $ogretmenler2025Bahar;

        return $this;
    }

    /**
     * Remove ogretmenler2025Bahar
     *
     * @param \AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2025Bahar
     */
    public function removeOgretmenler2025Bahar(\AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2025Bahar)
    {
        $this->ogretmenler_2025_bahar->removeElement($ogretmenler2025Bahar);
    }

    /**
     * Get ogretmenler2025Bahar
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOgretmenler2025Bahar()
    {
        return $this->ogretmenler_2025_bahar;
    }

    /**
     * Add ogretmenler2025Guz
     *
     * @param \AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2025Guz
     *
     * @return derslerdb
     */
    public function addOgretmenler2025Guz(\AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2025Guz)
    {
        $this->ogretmenler_2025_guz[] = $ogretmenler2025Guz;

        return $this;
    }

    /**
     * Remove ogretmenler2025Guz
     *
     * @param \AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2025Guz
     */
    public function removeOgretmenler2025Guz(\AppBundle\Entity\ogretim_gorevlisidb $ogretmenler2025Guz)
    {
        $this->ogretmenler_2025_guz->removeElement($ogretmenler2025Guz);
    }

    /**
     * Get ogretmenler2025Guz
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOgretmenler2025Guz()
    {
        return $this->ogretmenler_2025_guz;
    }
}
