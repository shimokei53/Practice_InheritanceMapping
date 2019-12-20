<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class RegularEmployee extends Employee
{
    /**
     * @ORM\ManyToOne(targetEntity="Department", inversedBy="regularEmployees")
     */
    private $department;
}
