<?php
/**
 * Created by PhpStorm.
 * User: apprenti
 * Date: 17/01/17
 * Time: 10:29
 */
namespace ContentSpiningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContentSpinController extends Controller
{
    public function indexAction()
    {
        // On récupère le service
        $contentSpin = $this->container->get('content_spin.test');
        $this->render('contentSpin.html');
    }
}