<?php

namespace App\Controller;

use App\Entity\Learner;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(EntityManagerInterface $entityManager)
    {
//        $entityManager = $this->getDoctrine()->getManager();
//
//        $l1 = new Learner();
//        $l1 ->setName('Vanya');
//        $l1 ->setAge(14);
//        $l1 ->setAverageScore(7);
//        $entityManager->persist($l1 );
//
//        $l2 = new Learner();
//        $l2 ->setName('Maria');
//        $l2 ->setAge(14);
//        $l2 ->setAverageScore(9);
//        $entityManager->persist($l2 );
//
//        $l3 = new Learner();
//        $l3 ->setName('Georgiy');
//        $l3 ->setAge(15);
//        $l3 ->setAverageScore(10);
//        $entityManager->persist($l3 );
//
//        $l4 = new Learner();
//        $l4 ->setName('Irina');
//        $l4 ->setAge(14);
//        $l4 ->setAverageScore(10);
//        $entityManager->persist($l4 );
//
//        $l5 = new Learner();
//        $l5 ->setName('Oleg');
//        $l5 ->setAge(15);
//        $l5 ->setAverageScore(9);
//        $entityManager->persist($l5 );
//
//        $entityManager->flush();

        $learner = $this->getDoctrine()
            ->getRepository(Learner::class)
            ->findAll();

        $date = date("r");

        return $this->render('main/index.html.twig', [
            'arr_learner' => $learner,
            'date' => $date
        ]);
    }
}
