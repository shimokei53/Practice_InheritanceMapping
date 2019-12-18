<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class BarB extends Bar
{
    /**
     * @ORM\ManyToOne(targetEntity="Foo", inversedBy="barBs")
     */
    private $foo;
}
