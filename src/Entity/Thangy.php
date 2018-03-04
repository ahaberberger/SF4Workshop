<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ThangyRepository")
 */
class Thangy
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $text;

    /**
     * @ManyToOne(targetEntity="Thingy", inversedBy="thangies")
     * @JoinColumn(name="thingy_id", referencedColumnName="id")
     */
    private $thingy;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text): void
    {
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getThingy()
    {
        return $this->thingy;
    }

    /**
     * @param mixed $thingy
     */
    public function setThingy($thingy): void
    {
        $this->thingy = $thingy;
    }
}
