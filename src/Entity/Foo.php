<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FooRepository")
 */
class Foo
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var Collection<Bar>
     * @ORM\OneToMany(targetEntity="Bar",mappedBy="foo", fetch="EAGER")
     */
    private $bars;

    /**
     * @var Collection<BarA>
     * @ORM\OneToMany(targetEntity="BarA",mappedBy="foo", fetch="EAGER")
     */
    private $barAs;

    /**
     * @var Collection<BarB>
     * @ORM\OneToMany(targetEntity="BarB",mappedBy="foo", fetch="EAGER")
     */
    private $barBs;

    public function __construct()
    {
        $this->bars = new ArrayCollection();
        $this->barAs = new ArrayCollection();
        $this->barBs = new ArrayCollection();
    }

    /**
     * @return Collection
     */
    public function getBars(): Collection
    {
        return $this->bars;
    }

    /**
     * @return Collection
     */
    public function getBarAs(): Collection
    {
        return $this->barAs;
    }

    /**
     * @return Collection
     */
    public function getBarBs(): Collection
    {
        return $this->barBs;
    }
}
