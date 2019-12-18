<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class BarA extends Bar
{
    /**
     * @ORM\ManyToOne(targetEntity="Foo", inversedBy="barAs")
     */
    private $foo;
}
