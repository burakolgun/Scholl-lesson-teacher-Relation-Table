<?php

namespace AppBundle\Controller;

use AppBundle\Entity\bolumdb;


use AppBundle\Entity\derslerdb;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class BolumlerController extends Controller
{
    /**
     * @Route("/bolumler" , name="bolumler")
     */
    public function BolumlerPageAction(Request $request)
    {
        $em = $this->getDoctrine()
            ->getManager();
        $bolumler = $em->getRepository('AppBundle:bolumdb')
            ->findAll();

        return $this->render(
            'default/Department_Pages/bolumler.html.twig',
            array(
                'bolumler' => $bolumler,
            )
        );
    }

    /**
     * @Route("/bolum_ekle" , name="bolum_ekle")
     */
    public function BolumCreateAction(Request $request)
    {

        // create a task and give it some dummy data for this example
        $bolum = new bolumdb();
        $form = $this->createFormBuilder($bolum)
            ->add(
                'department_name',
                TextType::class,
                array(
                    'attr' =>
                        array('class' => 'form-control', 'style' => 'margin-bottom:15px'),
                )
            )
            ->add(
                'period',
                TextType::class,
                array(
                    'attr' =>
                        array('class' => 'form-control', 'style' => 'margin-bottom:15px'),
                )
            )
            ->add(
                'save',
                SubmitType::class,
                array(
                    'label' => 'Gönder',
                    'attr' =>
                        array('class' => 'btn btn-success'),
                )
            )
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $department_name = $form['department_name']->getData();
            $period = $form['period']->getData();

            $bolum->setDepartmentName($department_name);
            $bolum->setPeriod($period);

            $em = $this->getDoctrine()->getManager();

            $em->persist($bolum);
            $em->flush();


            $this->addFlash(
                'notice',
                'Bölüm Eklendi !'
            );

            return $this->redirectToRoute('bolumler');
        }

        // Get Data


        return $this->render(
            ':default/Department_Pages:bolumYarat.html.twig',
            array(
                'form' => $form->createView(),
            )
        );
    }

        /**
         * @Route("/bolum_detay/{id}" , name="bolum_detay")
         */
        public function bolumDetayAction($id, Request $request)
        {
               $bolum = $this->getDoctrine()
                   ->getRepository('AppBundle:bolumdb')
                   ->find($id);
               $dersler = $bolum->getDersler();






               return $this->render(':default/Department_Pages:bolum_detay.html.twig',
                   array(
                       'bolum' => $bolum,
                       'dersler' => $dersler
                   ));
        }

        /**
         * @Route("/bolum_duzenle/{id}" , name="bolum_duzenle")
         */
        public function departmentEditAction($id , Request $request)
        {
            $bolum = $this->getDoctrine()
                ->getRepository('AppBundle:bolumdb')
                ->find($id);

            $bolum->setDepartmentName($bolum->getDepartmentName());
            $bolum->setPeriod($bolum->getPeriod());

            $form = $this->createFormBuilder($bolum)
                ->add(
                    'department_name',
                    TextType::class,
                    array(
                        'attr' => array(
                            'class' => 'form-control',
                            'style' => 'margin-bottom:15px'
                        )
                    )
                )
                ->add(
                    'period',
                    TextType::class,
                    array(
                        'attr' => array(
                            'class' => 'form-control',
                            'style' => 'margin-bottom:15px'
                        )
                    )
                )
                ->add(
                    'gonder',
                    SubmitType::class,
                    array(
                        'label' => 'Kaydet',
                        'attr' => array(
                            'class' => 'btn btn-success btn-md btn-block'
                        )
                    )
                )
                ->getForm();

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                //Get DATA
                $department_name = $form['department_name']->getData();
                $period = $form['period']->getData();

                $em = $this->getDoctrine()->getManager();
                $bolum = $em->getRepository('AppBundle:bolumdb')->find($id);

                $bolum->setDepartmentName($department_name);
                $bolum->setPeriod($period);
                $em->flush();
                $this->addFlash(
                    'notice',
                    'Bölüm Düzenlendi'
                );

                return $this->redirectToRoute('bolumler');
            }


            return $this->render(
                ':default/Department_Pages:bolumDuzenle.html.twig',
                array(
                    'bolum' => $bolum,
                    'form' => $form->createView()
                )
            );
        }



            /**
             * @Route("/bolum_sil/{id}" , name="bolum_sil")
             */
            public function departmentDeleteAction($id)
        {
            $em = $this ->getDoctrine() ->getManager();
            $bolum = $em ->getRepository('AppBundle:bolumdb')->find($id);
            $em->remove($bolum);
            $em->flush();

            $this->addFlash('error','Bolum Silindi');
            return $this -> redirectToRoute('bolumler');

        }






}
