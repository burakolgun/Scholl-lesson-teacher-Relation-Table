<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ogretim_gorevlisidb
 *
 * @ORM\Table(name="ogretim_gorevlisidb")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ogretim_gorevlisidbRepository")
 */
class ogretim_gorevlisidb
{



    /**
     * Many Users have Many Groups.
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\derslerdb", inversedBy="ogretmenler_2017_bahar")
     * @ORM\JoinTable(name="ogretmenler_2017_bahar_dersler")
     */
    private $dersler_2017_bahar;

    public function __construct() {
        $this->dersler_2017_bahar = new \Doctrine\Common\Collections\ArrayCollection();
    }
    /**
     * Many Users have Many Groups.
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\derslerdb", inversedBy="ogretmenler_2017_guz")
     * @ORM\JoinTable(name="ogretmenler_2017_guz_dersler")
     */
    private $dersler_2017_guz;

    public function __constructer() {
        $this->dersler_2017_guz = new \Doctrine\Common\Collections\ArrayCollection();
    }
    /**
     * Many Users have Many Groups.
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\derslerdb", inversedBy="ogretmenler_2018_bahar")
     * @ORM\JoinTable(name="ogretmenler_2018_bahar_dersler")
     */
    private $dersler_2018_bahar;

    public function __construct1() {
        $this->dersler_2018_bahar = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Many Users have Many Groups.
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\derslerdb", inversedBy="ogretmenler_2018_guz")
     * @ORM\JoinTable(name="ogretmenler_2018_guz_dersler")
     */
    private $dersler_2018_guz;

    public function __constructer1() {
        $this->dersler_2018_guz = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Many Users have Many Groups.
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\derslerdb", inversedBy="ogretmenler_2019_bahar")
     * @ORM\JoinTable(name="ogretmenler_2019_bahar_dersler")
     */
    private $dersler_2019_bahar;

    public function __construct2() {
        $this->dersler_2019_bahar = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Many Users have Many Groups.
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\derslerdb", inversedBy="ogretmenler_2019_guz")
     * @ORM\JoinTable(name="ogretmenler_2019_guz_dersler")
     */
    private $dersler_2019_guz;

    public function __constructer2() {
        $this->dersler_2019_guz = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Many Users have Many Groups.
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\derslerdb", inversedBy="ogretmenler_2020_bahar")
     * @ORM\JoinTable(name="ogretmenler_2020_bahar_dersler")
     */
    private $dersler_2020_bahar;

    public function __construct3() {
        $this->dersler_2020_bahar = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Many Users have Many Groups.
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\derslerdb", inversedBy="ogretmenler_2020_guz")
     * @ORM\JoinTable(name="ogretmenler_2020_guz_dersler")
     */
    private $dersler_2020_guz;

    public function __constructer3() {
        $this->dersler_2020_guz = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
 * Many Users have Many Groups.
 * @ORM\ManyToMany(targetEntity="AppBundle\Entity\derslerdb", inversedBy="ogretmenler_2021_bahar")
 * @ORM\JoinTable(name="ogretmenler_2021_bahar_dersler")
 */
    private $dersler_2021_bahar;

    public function __construct4() {
        $this->dersler_2021_bahar = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Many Users have Many Groups.
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\derslerdb", inversedBy="ogretmenler_2021_guz")
     * @ORM\JoinTable(name="ogretmenler_2021_guz_dersler")
     */
    private $dersler_2021_guz;

    public function __constructer4() {
        $this->dersler_2021_guz = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Many Users have Many Groups.
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\derslerdb", inversedBy="ogretmenler_2022_bahar")
     * @ORM\JoinTable(name="ogretmenler_2022_bahar_dersler")
     */
    private $dersler_2022_bahar;

    public function __construct5() {
        $this->dersler_2022_bahar = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Many Users have Many Groups.
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\derslerdb", inversedBy="ogretmenler_2022_guz")
     * @ORM\JoinTable(name="ogretmenler_2022_guz_dersler")
     */
    private $dersler_2022_guz;

    public function __constructer5() {
        $this->dersler_2022_guz = new \Doctrine\Common\Collections\ArrayCollection();
    }



    /**
     * Many Users have Many Groups.
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\derslerdb", inversedBy="ogretmenler_2023_bahar")
     * @ORM\JoinTable(name="ogretmenler_2023_bahar_dersler")
     */
    private $dersler_2023_bahar;

    public function __construct6() {
        $this->dersler_2023_bahar = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Many Users have Many Groups.
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\derslerdb", inversedBy="ogretmenler_2023_guz")
     * @ORM\JoinTable(name="ogretmenler_2023_guz_dersler")
     */
    private $dersler_2023_guz;

    public function __constructer6() {
        $this->dersler_2023_guz = new \Doctrine\Common\Collections\ArrayCollection();
    }



    /**
     * Many Users have Many Groups.
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\derslerdb", inversedBy="ogretmenler_2024_bahar")
     * @ORM\JoinTable(name="ogretmenler_2024_bahar_dersler")
     */
    private $dersler_2024_bahar;

    public function __construct7() {
        $this->dersler_2024_bahar = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Many Users have Many Groups.
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\derslerdb", inversedBy="ogretmenler_2024_guz")
     * @ORM\JoinTable(name="ogretmenler_2024_guz_dersler")
     */
    private $dersler_2024_guz;

    public function __constructer7() {
        $this->dersler_2024_guz = new \Doctrine\Common\Collections\ArrayCollection();
    }




    /**
     * Many Users have Many Groups.
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\derslerdb", inversedBy="ogretmenler_2025_bahar")
     * @ORM\JoinTable(name="ogretmenler_2025_bahar_dersler")
     */
    private $dersler_2025_bahar;

    public function __construct8() {
        $this->dersler_2025_bahar = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Many Users have Many Groups.
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\derslerdb", inversedBy="ogretmenler_2025_guz")
     * @ORM\JoinTable(name="ogretmenler_2025_guz_dersler")
     */
    private $dersler_2025_guz;

    public function __constructer8() {
        $this->dersler_2025_guz = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @var string
     *
     * @ORM\Column(name="gorevlendirme", type="string", length=255 , nullable=true)
     */
    private $gorevlendirme;

    /**
     * @var string
     *
     * @ORM\Column(name="gorevli_ad", type="string", length=255 , nullable=true)
     */
    private $gorevliAd;

    /**
     * @var string
     *
     * @ORM\Column(name="gorevli_unvan", type="string", length=255 , nullable=true)
     */
    private $gorevliUnvan;

    /**
     * @var string
     *
     * @ORM\Column(name="gorevli_soyad", type="string", length=255 , nullable=true)
     */
    private $gorevliSoyad;

    /**
     * @var string
     *
     * @ORM\Column(name="gorevli_no", type="string", length=255 , nullable=true)
     */
    private $gorevliNo;


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
     * Set gorevlendirme
     *
     * @param string $gorevlendirme
     *
     * @return ogretim_gorevlisidb
     */
    public function setGorevlendirme($gorevlendirme)
    {
        $this->gorevlendirme = $gorevlendirme;

        return $this;
    }

    /**
     * Get gorevlendirme
     *
     * @return string
     */
    public function getGorevlendirme()
    {
        return $this->gorevlendirme;
    }

    /**
     * Set gorevliAd
     *
     * @param string $gorevliAd
     *
     * @return ogretim_gorevlisidb
     */
    public function setGorevliAd($gorevliAd)
    {
        $this->gorevliAd = $gorevliAd;

        return $this;
    }

    /**
     * Get gorevliAd
     *
     * @return string
     */
    public function getGorevliAd()
    {
        return $this->gorevliAd;
    }

    /**
     * Set gorevliUnvan
     *
     * @param string $gorevliUnvan
     *
     * @return ogretim_gorevlisidb
     */
    public function setGorevliUnvan($gorevliUnvan)
    {
        $this->gorevliUnvan = $gorevliUnvan;

        return $this;
    }

    /**
     * Get gorevliUnvan
     *
     * @return string
     */
    public function getGorevliUnvan()
    {
        return $this->gorevliUnvan;
    }

    /**
     * Set gorevliSoyad
     *
     * @param string $gorevliSoyad
     *
     * @return ogretim_gorevlisidb
     */
    public function setGorevliSoyad($gorevliSoyad)
    {
        $this->gorevliSoyad = $gorevliSoyad;

        return $this;
    }

    /**
     * Get gorevliSoyad
     *
     * @return string
     */
    public function getGorevliSoyad()
    {
        return $this->gorevliSoyad;
    }

    /**
     * Set gorevliNo
     *
     * @param string $gorevliNo
     *
     * @return ogretim_gorevlisidb
     */
    public function setGorevliNo($gorevliNo)
    {
        $this->gorevliNo = $gorevliNo;

        return $this;
    }

    /**
     * Get gorevliNo
     *
     * @return string
     */
    public function getGorevliNo()
    {
        return $this->gorevliNo;
    }

    /**
     * Add dersler
     *
     * @param \AppBundle\Entity\derslerdb $dersler
     *
     * @return ogretim_gorevlisidb
     */
    public function addDersler(\AppBundle\Entity\derslerdb $dersler)
    {
        $this->dersler[] = $dersler;

        return $this;
    }

    /**
     * Remove dersler
     *
     * @param \AppBundle\Entity\derslerdb $dersler
     */
    public function removeDersler(\AppBundle\Entity\derslerdb $dersler)
    {
        $this->dersler->removeElement($dersler);
    }

    /**
     * Get dersler
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDersler()
    {
        return $this->dersler;
    }

    /**
     * Add dersler2017Bahar
     *
     * @param \AppBundle\Entity\derslerdb $dersler2017Bahar
     *
     * @return ogretim_gorevlisidb
     */
    public function addDersler2017Bahar(\AppBundle\Entity\derslerdb $dersler2017Bahar)
    {
        $this->dersler_2017_bahar[] = $dersler2017Bahar;

        return $this;
    }

    /**
     * Remove dersler2017Bahar
     *
     * @param \AppBundle\Entity\derslerdb $dersler2017Bahar
     */
    public function removeDersler2017Bahar(\AppBundle\Entity\derslerdb $dersler2017Bahar)
    {
        $this->dersler_2017_bahar->removeElement($dersler2017Bahar);
    }

    /**
     * Get dersler2017Bahar
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDersler2017Bahar()
    {
        return $this->dersler_2017_bahar;
    }

    /**
     * Add dersler2017Guz
     *
     * @param \AppBundle\Entity\derslerdb $dersler2017Guz
     *
     * @return ogretim_gorevlisidb
     */
    public function addDersler2017Guz(\AppBundle\Entity\derslerdb $dersler2017Guz)
    {
        $this->dersler_2017_guz[] = $dersler2017Guz;

        return $this;
    }

    /**
     * Remove dersler2017Guz
     *
     * @param \AppBundle\Entity\derslerdb $dersler2017Guz
     */
    public function removeDersler2017Guz(\AppBundle\Entity\derslerdb $dersler2017Guz)
    {
        $this->dersler_2017_guz->removeElement($dersler2017Guz);
    }

    /**
     * Get dersler2017Guz
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDersler2017Guz()
    {
        return $this->dersler_2017_guz;
    }

    /**
     * Add dersler2018Bahar
     *
     * @param \AppBundle\Entity\derslerdb $dersler2018Bahar
     *
     * @return ogretim_gorevlisidb
     */
    public function addDersler2018Bahar(\AppBundle\Entity\derslerdb $dersler2018Bahar)
    {
        $this->dersler_2018_bahar[] = $dersler2018Bahar;

        return $this;
    }

    /**
     * Remove dersler2018Bahar
     *
     * @param \AppBundle\Entity\derslerdb $dersler2018Bahar
     */
    public function removeDersler2018Bahar(\AppBundle\Entity\derslerdb $dersler2018Bahar)
    {
        $this->dersler_2018_bahar->removeElement($dersler2018Bahar);
    }

    /**
     * Get dersler2018Bahar
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDersler2018Bahar()
    {
        return $this->dersler_2018_bahar;
    }

    /**
     * Add dersler2018Guz
     *
     * @param \AppBundle\Entity\derslerdb $dersler2018Guz
     *
     * @return ogretim_gorevlisidb
     */
    public function addDersler2018Guz(\AppBundle\Entity\derslerdb $dersler2018Guz)
    {
        $this->dersler_2018_guz[] = $dersler2018Guz;

        return $this;
    }

    /**
     * Remove dersler2018Guz
     *
     * @param \AppBundle\Entity\derslerdb $dersler2018Guz
     */
    public function removeDersler2018Guz(\AppBundle\Entity\derslerdb $dersler2018Guz)
    {
        $this->dersler_2018_guz->removeElement($dersler2018Guz);
    }

    /**
     * Get dersler2018Guz
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDersler2018Guz()
    {
        return $this->dersler_2018_guz;
    }

    /**
     * Add dersler2019Bahar
     *
     * @param \AppBundle\Entity\derslerdb $dersler2019Bahar
     *
     * @return ogretim_gorevlisidb
     */
    public function addDersler2019Bahar(\AppBundle\Entity\derslerdb $dersler2019Bahar)
    {
        $this->dersler_2019_bahar[] = $dersler2019Bahar;

        return $this;
    }

    /**
     * Remove dersler2019Bahar
     *
     * @param \AppBundle\Entity\derslerdb $dersler2019Bahar
     */
    public function removeDersler2019Bahar(\AppBundle\Entity\derslerdb $dersler2019Bahar)
    {
        $this->dersler_2019_bahar->removeElement($dersler2019Bahar);
    }

    /**
     * Get dersler2019Bahar
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDersler2019Bahar()
    {
        return $this->dersler_2019_bahar;
    }

    /**
     * Add dersler2019Guz
     *
     * @param \AppBundle\Entity\derslerdb $dersler2019Guz
     *
     * @return ogretim_gorevlisidb
     */
    public function addDersler2019Guz(\AppBundle\Entity\derslerdb $dersler2019Guz)
    {
        $this->dersler_2019_guz[] = $dersler2019Guz;

        return $this;
    }

    /**
     * Remove dersler2019Guz
     *
     * @param \AppBundle\Entity\derslerdb $dersler2019Guz
     */
    public function removeDersler2019Guz(\AppBundle\Entity\derslerdb $dersler2019Guz)
    {
        $this->dersler_2019_guz->removeElement($dersler2019Guz);
    }

    /**
     * Get dersler2019Guz
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDersler2019Guz()
    {
        return $this->dersler_2019_guz;
    }

    /**
     * Add dersler2020Bahar
     *
     * @param \AppBundle\Entity\derslerdb $dersler2020Bahar
     *
     * @return ogretim_gorevlisidb
     */
    public function addDersler2020Bahar(\AppBundle\Entity\derslerdb $dersler2020Bahar)
    {
        $this->dersler_2020_bahar[] = $dersler2020Bahar;

        return $this;
    }

    /**
     * Remove dersler2020Bahar
     *
     * @param \AppBundle\Entity\derslerdb $dersler2020Bahar
     */
    public function removeDersler2020Bahar(\AppBundle\Entity\derslerdb $dersler2020Bahar)
    {
        $this->dersler_2020_bahar->removeElement($dersler2020Bahar);
    }

    /**
     * Get dersler2020Bahar
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDersler2020Bahar()
    {
        return $this->dersler_2020_bahar;
    }

    /**
     * Add dersler2020Guz
     *
     * @param \AppBundle\Entity\derslerdb $dersler2020Guz
     *
     * @return ogretim_gorevlisidb
     */
    public function addDersler2020Guz(\AppBundle\Entity\derslerdb $dersler2020Guz)
    {
        $this->dersler_2020_guz[] = $dersler2020Guz;

        return $this;
    }

    /**
     * Remove dersler2020Guz
     *
     * @param \AppBundle\Entity\derslerdb $dersler2020Guz
     */
    public function removeDersler2020Guz(\AppBundle\Entity\derslerdb $dersler2020Guz)
    {
        $this->dersler_2020_guz->removeElement($dersler2020Guz);
    }

    /**
     * Get dersler2020Guz
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDersler2020Guz()
    {
        return $this->dersler_2020_guz;
    }

    /**
     * Add dersler2021Bahar
     *
     * @param \AppBundle\Entity\derslerdb $dersler2021Bahar
     *
     * @return ogretim_gorevlisidb
     */
    public function addDersler2021Bahar(\AppBundle\Entity\derslerdb $dersler2021Bahar)
    {
        $this->dersler_2021_bahar[] = $dersler2021Bahar;

        return $this;
    }

    /**
     * Remove dersler2021Bahar
     *
     * @param \AppBundle\Entity\derslerdb $dersler2021Bahar
     */
    public function removeDersler2021Bahar(\AppBundle\Entity\derslerdb $dersler2021Bahar)
    {
        $this->dersler_2021_bahar->removeElement($dersler2021Bahar);
    }

    /**
     * Get dersler2021Bahar
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDersler2021Bahar()
    {
        return $this->dersler_2021_bahar;
    }

    /**
     * Add dersler2021Guz
     *
     * @param \AppBundle\Entity\derslerdb $dersler2021Guz
     *
     * @return ogretim_gorevlisidb
     */
    public function addDersler2021Guz(\AppBundle\Entity\derslerdb $dersler2021Guz)
    {
        $this->dersler_2021_guz[] = $dersler2021Guz;

        return $this;
    }

    /**
     * Remove dersler2021Guz
     *
     * @param \AppBundle\Entity\derslerdb $dersler2021Guz
     */
    public function removeDersler2021Guz(\AppBundle\Entity\derslerdb $dersler2021Guz)
    {
        $this->dersler_2021_guz->removeElement($dersler2021Guz);
    }

    /**
     * Get dersler2021Guz
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDersler2021Guz()
    {
        return $this->dersler_2021_guz;
    }

    /**
     * Add dersler2022Bahar
     *
     * @param \AppBundle\Entity\derslerdb $dersler2022Bahar
     *
     * @return ogretim_gorevlisidb
     */
    public function addDersler2022Bahar(\AppBundle\Entity\derslerdb $dersler2022Bahar)
    {
        $this->dersler_2022_bahar[] = $dersler2022Bahar;

        return $this;
    }

    /**
     * Remove dersler2022Bahar
     *
     * @param \AppBundle\Entity\derslerdb $dersler2022Bahar
     */
    public function removeDersler2022Bahar(\AppBundle\Entity\derslerdb $dersler2022Bahar)
    {
        $this->dersler_2022_bahar->removeElement($dersler2022Bahar);
    }

    /**
     * Get dersler2022Bahar
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDersler2022Bahar()
    {
        return $this->dersler_2022_bahar;
    }

    /**
     * Add dersler2022Guz
     *
     * @param \AppBundle\Entity\derslerdb $dersler2022Guz
     *
     * @return ogretim_gorevlisidb
     */
    public function addDersler2022Guz(\AppBundle\Entity\derslerdb $dersler2022Guz)
    {
        $this->dersler_2022_guz[] = $dersler2022Guz;

        return $this;
    }

    /**
     * Remove dersler2022Guz
     *
     * @param \AppBundle\Entity\derslerdb $dersler2022Guz
     */
    public function removeDersler2022Guz(\AppBundle\Entity\derslerdb $dersler2022Guz)
    {
        $this->dersler_2022_guz->removeElement($dersler2022Guz);
    }

    /**
     * Get dersler2022Guz
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDersler2022Guz()
    {
        return $this->dersler_2022_guz;
    }

    /**
     * Add dersler2023Bahar
     *
     * @param \AppBundle\Entity\derslerdb $dersler2023Bahar
     *
     * @return ogretim_gorevlisidb
     */
    public function addDersler2023Bahar(\AppBundle\Entity\derslerdb $dersler2023Bahar)
    {
        $this->dersler_2023_bahar[] = $dersler2023Bahar;

        return $this;
    }

    /**
     * Remove dersler2023Bahar
     *
     * @param \AppBundle\Entity\derslerdb $dersler2023Bahar
     */
    public function removeDersler2023Bahar(\AppBundle\Entity\derslerdb $dersler2023Bahar)
    {
        $this->dersler_2023_bahar->removeElement($dersler2023Bahar);
    }

    /**
     * Get dersler2023Bahar
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDersler2023Bahar()
    {
        return $this->dersler_2023_bahar;
    }

    /**
     * Add dersler2023Guz
     *
     * @param \AppBundle\Entity\derslerdb $dersler2023Guz
     *
     * @return ogretim_gorevlisidb
     */
    public function addDersler2023Guz(\AppBundle\Entity\derslerdb $dersler2023Guz)
    {
        $this->dersler_2023_guz[] = $dersler2023Guz;

        return $this;
    }

    /**
     * Remove dersler2023Guz
     *
     * @param \AppBundle\Entity\derslerdb $dersler2023Guz
     */
    public function removeDersler2023Guz(\AppBundle\Entity\derslerdb $dersler2023Guz)
    {
        $this->dersler_2023_guz->removeElement($dersler2023Guz);
    }

    /**
     * Get dersler2023Guz
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDersler2023Guz()
    {
        return $this->dersler_2023_guz;
    }

    /**
     * Add dersler2024Bahar
     *
     * @param \AppBundle\Entity\derslerdb $dersler2024Bahar
     *
     * @return ogretim_gorevlisidb
     */
    public function addDersler2024Bahar(\AppBundle\Entity\derslerdb $dersler2024Bahar)
    {
        $this->dersler_2024_bahar[] = $dersler2024Bahar;

        return $this;
    }

    /**
     * Remove dersler2024Bahar
     *
     * @param \AppBundle\Entity\derslerdb $dersler2024Bahar
     */
    public function removeDersler2024Bahar(\AppBundle\Entity\derslerdb $dersler2024Bahar)
    {
        $this->dersler_2024_bahar->removeElement($dersler2024Bahar);
    }

    /**
     * Get dersler2024Bahar
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDersler2024Bahar()
    {
        return $this->dersler_2024_bahar;
    }

    /**
     * Add dersler2024Guz
     *
     * @param \AppBundle\Entity\derslerdb $dersler2024Guz
     *
     * @return ogretim_gorevlisidb
     */
    public function addDersler2024Guz(\AppBundle\Entity\derslerdb $dersler2024Guz)
    {
        $this->dersler_2024_guz[] = $dersler2024Guz;

        return $this;
    }

    /**
     * Remove dersler2024Guz
     *
     * @param \AppBundle\Entity\derslerdb $dersler2024Guz
     */
    public function removeDersler2024Guz(\AppBundle\Entity\derslerdb $dersler2024Guz)
    {
        $this->dersler_2024_guz->removeElement($dersler2024Guz);
    }

    /**
     * Get dersler2024Guz
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDersler2024Guz()
    {
        return $this->dersler_2024_guz;
    }

    /**
     * Add dersler2025Bahar
     *
     * @param \AppBundle\Entity\derslerdb $dersler2025Bahar
     *
     * @return ogretim_gorevlisidb
     */
    public function addDersler2025Bahar(\AppBundle\Entity\derslerdb $dersler2025Bahar)
    {
        $this->dersler_2025_bahar[] = $dersler2025Bahar;

        return $this;
    }

    /**
     * Remove dersler2025Bahar
     *
     * @param \AppBundle\Entity\derslerdb $dersler2025Bahar
     */
    public function removeDersler2025Bahar(\AppBundle\Entity\derslerdb $dersler2025Bahar)
    {
        $this->dersler_2025_bahar->removeElement($dersler2025Bahar);
    }

    /**
     * Get dersler2025Bahar
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDersler2025Bahar()
    {
        return $this->dersler_2025_bahar;
    }

    /**
     * Add dersler2025Guz
     *
     * @param \AppBundle\Entity\derslerdb $dersler2025Guz
     *
     * @return ogretim_gorevlisidb
     */
    public function addDersler2025Guz(\AppBundle\Entity\derslerdb $dersler2025Guz)
    {
        $this->dersler_2025_guz[] = $dersler2025Guz;

        return $this;
    }

    /**
     * Remove dersler2025Guz
     *
     * @param \AppBundle\Entity\derslerdb $dersler2025Guz
     */
    public function removeDersler2025Guz(\AppBundle\Entity\derslerdb $dersler2025Guz)
    {
        $this->dersler_2025_guz->removeElement($dersler2025Guz);
    }

    /**
     * Get dersler2025Guz
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDersler2025Guz()
    {
        return $this->dersler_2025_guz;
    }
}
