<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * donem
 *
 * @ORM\Table(name="donem")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\donemRepository")
 */
class donem
{
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
     * @ORM\Column(name="donemadi", type="string", length=255, nullable=true, unique=true)
     */
    private $donemadi;


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
     * Set donemadi
     *
     * @param string $donemadi
     *
     * @return donem
     */
    public function setDonemadi($donemadi)
    {
        $this->donemadi = $donemadi;

        return $this;
    }

    /**
     * Get donemadi
     *
     * @return string
     */
    public function getDonemadi()
    {
        return $this->donemadi;
    }
}
