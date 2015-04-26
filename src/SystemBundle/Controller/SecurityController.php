<?php
/**
 * Created by PhpStorm.
 * User: molodtsov
 * Date: 26.04.15
 * Time: 22:06
 */

namespace SystemBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;

class SecurityController extends Controller
{
    public function indexAction()
    {
        return $this->render('SystemBundle:Security:index.html.twig', []);
    }

    public function loginAction(Request $request)
    {
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $request->getSession()->get(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->render('SystemBundle:Security:login.html.twig', array(
            'last_username' => $request->getSession()->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
        ));
    }

    public function loginCheckAction(Request $request)
    {
        var_dump($request);die;
    }

    public function logoutAction()
    {
        // The security layer will intercept this request
    }
}
