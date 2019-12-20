<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Department
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var Collection<Employee>
     * @ORM\OneToMany(targetEntity="Employee",mappedBy="department", fetch="EAGER")
     */
    private $employees;

    /**
     * @var Collection<RegularEmployee>
     * @ORM\OneToMany(targetEntity="RegularEmployee",mappedBy="department", fetch="EAGER")
     */
    private $regularEmployees;

    /**
     * @var Collection<ContractEmployee>
     * @ORM\OneToMany(targetEntity="ContractEmployee",mappedBy="department", fetch="EAGER")
     */
    private $contractEmployees;

    public function __construct()
    {
        $this->employees = new ArrayCollection();
        $this->regularEmployees = new ArrayCollection();
        $this->contractEmployees = new ArrayCollection();
    }

    /**
     * @return Collection
     */
    public function getEmployees(): Collection
    {
        return $this->employees;
    }

    /**
     * @return Collection
     */
    public function getRegularEmployees(): Collection
    {
        return $this->regularEmployees;
    }

    /**
     * @return Collection
     */
    public function getContractEmployees(): Collection
    {
        return $this->contractEmployees;
    }
}
