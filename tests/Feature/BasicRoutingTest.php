<?php

namespace Tests\Feature;

use Tests\TestCase;

class BasicRoutingTest extends TestCase
{
    public function testHome()
    {
        $this->get('/')->assertSee('Spécialiste de l’imprimé et du numérique');
    }

    public function testCv()
    {
        $this->get('/cv')->assertSee('Curriculum vitae');
    }

    public function testPortfolio()
    {
        $this->get('/portfolio')->assertSee('Portfolio');
    }

    public function testCoordonnees()
    {
        $this->get('/coordonnees')->assertSee('Coordonnées');
    }

    public function testContact()
    {
        $this->get('/contact')->assertSee('Contact');
    }

    public function testBlog()
    {
        $this->get('/posts')->assertSee('Blog');
    }
}
