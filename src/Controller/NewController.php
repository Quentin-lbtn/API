<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class NewController 
{
    public function homepage()
    {
        return new Response('Bien jouer ça fonctionne');
    }
}