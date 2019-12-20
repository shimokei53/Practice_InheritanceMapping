<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ContractEmployee extends Employee
{
    /**
     * @ORM\ManyToOne(targetEntity="Department", inversedBy="contractEmployees")
     */
    private $department;
}
