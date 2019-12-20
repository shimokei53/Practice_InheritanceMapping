<?php

namespace App\Controller;

use App\Entity\Employee;
use App\Entity\RegularEmployee;
use App\Entity\ContractEmployee;
use App\Entity\Department;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DepartmentController extends AbstractController
{
    /**
     * @Route("/department", name="department")
     */
    public function index()
    {
        /** @var Department $department */
        $department = $this->get('doctrine')->getRepository(Department::class)->find(1);
        dump($department->getEmployees());
        dump($department->getRegularEmployees());
        dump($department->getContractEmployees());

        $employee = $this->get('doctrine')->getRepository(Employee::class)->findAll();
        $regularEmployee = $this->get('doctrine')->getRepository(RegularEmployee::class)->findAll();
        $contractEmployee = $this->get('doctrine')->getRepository(ContractEmployee::class)->findAll();
        dump($employee);
        dump($regularEmployee);
        dump($contractEmployee);

        return new Response();
    }
}
