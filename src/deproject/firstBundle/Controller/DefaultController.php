<?php

namespace deproject\firstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;		//you need to use this to use response class
use Symfony\Bundle\AsseticBundle\AsseticBundle;
use deproject\firstBundle\Entity\Partners;

class DefaultController extends Controller
{
    /**
     * @Route("/signin" ,name = "loginpage")
     * @Template("deprojectfirstBundle:Default:signin.html.twig")
     */
    public function indexAction()
    {
       // return array('name' => "This is Response");
       
    	//$response = new Response("this is direct text from <strong>RESPONSE class</strong> ");
    	//$response = new Response("I am <strong> $name </strong>");
    	//return $response;
    	
    	return $this->render('deprojectfirstBundle:Default:signin.html.twig');
    	
    }
    
    /**
     * @Route("/mainpage" ,name = "mainpage")
     * @Template("deprojectfirstBundle:Default:frontpartnerpage.html.twig")
     */
    	public function frontpartnerpageAction()
    	{
    		return $this->render('deprojectfirstBundle:Default:frontpartnerpage.html.twig');
    	}

    	/**
    	 * @Route("/dbbahn" ,name = "dbbahnpage")
    	 * 
    	 */
    	public function dbbahnAction()
    	{
    		 $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('deprojectfirstBundle:Partners')->findAll();

        return $this->render('deprojectfirstBundle:Default:dbbahn.html.twig',array(
            'entities' => $entities,
        ));
    	}
    	 
    	 
    }

