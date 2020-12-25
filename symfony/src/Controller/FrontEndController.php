<?php

namespace App\Controller;

use App\Entity\Apps;
use App\Form\AppsType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\AppsRepository;

class FrontEndController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(AppsRepository $appsR)
    {
        $allApps = $appsR->findAll();

        return $this->render("FrontEnd/home.html.twig", [
            "allApps" => $allApps
        ]);
    }

    /**
     * @Route("/test/{age<\d+>?0}",name="test", methods={"GET","POST"}, host="127.0.0.1", schemes={"https","http"})
     */
    public function test(Request $request, $age)
    {
        return $this->render("FrontEnd/home.html.twig");
    }

    /**
     * @Route("/hello/{prenom?World}",name="hello")
     */
    public function hello(Request $request, $prenom)
    {
        $user = new Apps();
        $userForm = $this->createForm(AppsType::class, $user);
        $userForm->handleRequest($request);
        if ($userForm->isSubmitted() && $userForm->isValid()) {
            $newUserData = $userForm->getData();
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($newUserData);
            $manager->flush();
            $this->addFlash('success', 'User Added Succesfuly');
            return $this->redirect('/');
        }

        return $this->render('FrontEnd/hello.html.twig', [
            'name' => $prenom,
            "form" => $userForm->createView()
        ]);
    }

    /**
     * @Route("/createapp", name="createapp")
     */
    public function createApp()
    {
        $prenom = "Test app name";
        $text = "App name";
        // file_put_contents('test.html', $text, FILE_APPEND | LOCK_EX);
        $oldMessage = 'name="App225"';

        $deletedFormat = 'name="NewApp999"';
        $str = file_get_contents('test.html');

        //replace something in the file string - this is a VERY simple example
        $str = str_replace($oldMessage, $deletedFormat, $str);

        //write the entire string
        file_put_contents('test.html', $str);

        return $this->render("FrontEnd/createapp.html.twig", [
            'appname' => $prenom
        ]);
    }
}
