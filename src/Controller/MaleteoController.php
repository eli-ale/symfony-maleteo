<?php

    namespace App\Controller;

    use App\Entity\Comentarios;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\Routing\Annotation\Route;
    use App\Form\DemoFormType;
    use Doctrine\ORM\EntityManagerInterface;
    use Symfony\Component\HttpFoundation\Request;


    class MaleteoController extends AbstractController{

        /**
         * @Route("/", name="homepage")
         */
        public function maleteo(EntityManagerInterface $em, Request $request) {
            $DemoForm = $this->createForm(DemoFormType::class);
            $DemoForm->handleRequest($request);

            if($DemoForm->isSubmitted() && $DemoForm->isValid()){
                $solicitud = $DemoForm->getData();
    
                    $em->persist($solicitud);
                    $em->flush();

                    return $this->redirectToRoute('homepage');

                    }
            
            //$opiniones = $em->getRepository(Comentarios::class)-> FindByLikes(3);

            return $this->render('maleteo/index.html.twig',
            [
                'demoForm' => $DemoForm->createView(),
            //   'opiniones' => $opiniones
            
            ]);
        }
    }