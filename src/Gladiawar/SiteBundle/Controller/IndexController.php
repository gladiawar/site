<?php

namespace Gladiawar\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->render('GladiawarSiteBundle:Index:index.html.twig');
    }

    public function galleryAction()
    {
	    return $this->render('GladiawarSiteBundle:Index:gallery.html.twig');
    }

    public function projectAction()
    {
	    return $this->render('GladiawarSiteBundle:Index:project.html.twig');
    }

    public function teamAction()
    {
	    return $this->render('GladiawarSiteBundle:Index:team.html.twig');
    }

    public function contactAction()
    {
	    return $this->render('GladiawarSiteBundle:Index:contact.html.twig');
    }

}
