<?php

class AuthController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $btn=$this->jquery->bootstrap()->htmlButton("btDeconnexion","deconnexion","primary");
        $btn->onClick("$(location).attr('href',\"/frameworkphp/TD5-increase-master/auth/logout/\");");
        $bt=$this->jquery->bootstrap()->htmlButton("btConnexion","Connexion","primary");
        $bt->onClick("$(location).attr('href',\"/frameworkphp/TD5-increase-master/auth/login/\");");
        $this->jquery->compile($this->view);
    }

    public function loginAction()
    {
        $user = user::findFirst();
        $this->session->set("activeUser", $user);
        $btn=$this->jquery->bootstrap()->htmlButton("btDeconnexion","deconnexion","primary");
        $btn->onClick("$(location).attr('href',\"/frameworkphp/TD5-increase-master/auth/logout/\");");
        $this->jquery->compile($this->view);
    }

    public function logoutAction()
    {
        $this->session->destroy('activeUser');
    }

}

