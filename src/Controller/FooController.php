<?php

namespace App\Controller;

use App\Entity\Bar;
use App\Entity\BarA;
use App\Entity\BarB;
use App\Entity\Foo;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FooController extends AbstractController
{
    /**
     * @Route("/foo", name="foo")
     */
    public function index()
    {
        /** @var Foo $foo */
        $foo = $this->get('doctrine')->getRepository(Foo::class)->find(1);
        dump($foo->getBars());
        dump($foo->getBarAs());
        dump($foo->getBarBs());

        $bar = $this->get('doctrine')->getRepository(Bar::class)->findAll();
        $barA = $this->get('doctrine')->getRepository(BarA::class)->findAll();
        $barB = $this->get('doctrine')->getRepository(BarB::class)->findAll();
        dump($bar);
        dump($barA);
        dump($barB);

        return new Response();
    }
}
