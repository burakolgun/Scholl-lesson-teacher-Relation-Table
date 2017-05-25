<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * egeders
 *
 * @ORM\Table(name="bolumdb")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\egedersRepository")
 */
class bolumdb
{
    /**
     * Many bolum have Many ders.
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\derslerdb", inversedBy="bolumler")
     * @ORM\JoinTable(name="bolumler_dersler")
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
     * @ORM\Column(name="department_name", type="string", length=100)
     */
    private $departmentName;

    /**
     * @var string
     *
     * @ORM\Column(name="period", type="string", length=3)
     */
    private $period;


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
     * Set departmentName
     *
     * @param string $departmentName
     *
     * @return egeders
     */
    public function setDepartmentName($departmentName)
    {
        $this->departmentName = $departmentName;

        return $this;
    }

    /**
     * Get departmentName
     *
     * @return string
     */
    public function getDepartmentName()
    {
        return $this->departmentName;
    }

    /**
     * Set period
     *
     * @param string $period
     *
     * @return egeders
     */
    public function setPeriod($period)
    {
        $this->period = $period;

        return $this;
    }

    /**
     * Get period
     *
     * @return string
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Add dersler
     *
     * @param \AppBundle\Entity\derslerdb $dersler
     *
     * @return bolumdb
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
     * Get dersler
     *
     * @return array
     */
    public function getAllDersler()
    {
        return array($this->dersler);
    }


}
