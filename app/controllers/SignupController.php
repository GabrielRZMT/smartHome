<?php

class SignupController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function registerAction()
    {

        $user = new Users();

        //Store and check for errors
        $success = $user->save($this->request->getPost(), array('name', 'email'));

        if ($success) {
            echo "Gracias! Pronto me pondré en contacto contigo.";
        } else {
            echo "Lo sentimos, los siguientes errores ocurrieron: <br>";
            foreach ($user->getMessages() as $message) {
                echo $message->getMessage(), "<br/>";
            }
        }
        $this->view->disable();
    }

}