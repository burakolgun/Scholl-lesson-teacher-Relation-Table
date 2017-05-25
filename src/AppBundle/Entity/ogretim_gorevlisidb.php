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
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\derslerdb", inversedBy="ogretmenler")
     * @ORM\JoinTable(name="ogretmenler_dersler")
     */
    private $dersler;

    public function __construct() {
        $this->dersler = new \Doctrine\Common\Collections\ArrayCollection();
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
}
