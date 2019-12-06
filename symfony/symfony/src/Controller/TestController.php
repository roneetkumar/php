<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestController extends Controller
{
    public function index()
    {
        return $this->render("index.html.twig");
    }

    public function page1()
    {
        return $this->render("page1.html.twig");
    }

    public function page2()
    {
        return $this->render("page2.html.twig");
    }
}
