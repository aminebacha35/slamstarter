<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProjectsController extends AbstractController
{
    /**
     * @Route("/projects", name="projects")
     */
    public function index()
    {
        return $this->render('projects/index.html.twig', [
            'controller_name' => 'ProjectsController',
             'project' => ["project 1","project 2","project 3"] 
        ]);
    }
}
