<?php

namespace AppBundle\Controller;

use AppBundle\Entity\bolumdb;


use AppBundle\Entity\derslerdb;
use AppBundle\Entity\ogretim_gorevlisidb;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
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

            //Bolume Yeni Ders Eklemek Icin












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
                $em = $this->getDoctrine()->getManager();
                $bolum = $em->getRepository('AppBundle:bolumdb')->find($id);
                $em->remove($bolum);
                $em->flush();

                $this->addFlash('error', 'Bolum Silindi');

                return $this->redirectToRoute('bolumler');

            }
    /**
     * @Route("/bolumler/detay/dersler/{bolum_id}/{ders_id}" , name="bolum_ders_ekle")
     */
    public function departmentAddLessonAction($bolum_id , $ders_id ,  Request $request)
    {

        $em = $this -> getDoctrine()->getRepository('AppBundle:ogretim_gorevlisidb');
        $hocalar = $em ->findAll();








        return $this->render('default/Department_Pages/bolum_ders_hocaekle.html.twig',array(
            'hocalar' => $hocalar,
            'bolum_id' => $bolum_id,
            'ders_id' => $ders_id
        ));
    }

    /**
     * @Route("/bolumler/detay/dersler/{bolum_id}/{ders_id}/{hoca_id}" , name="hocaya_ders_ekle_on_function")
     */




    public function teacherLessonAddAction($bolum_id , $ders_id , $hoca_id)
    {
        $em = $this
            ->getDoctrine()->getManager();
        $hoca = $em ->find('AppBundle:ogretim_gorevlisidb',$hoca_id);

        $ders = $em ->find('AppBundle:derslerdb' , $ders_id);

        $hoca ->addDersler($ders);

        $em ->persist($ders);
        $em ->flush();

        return $this->redirect('http://localhost:8000/bolum_detay/'.$bolum_id);

    }

    /**
     * @Route("/bolumler/detay/dersler/gorevli/{hoca_id}/{ders_id}/{bolum_id}" , name="dersten_hoca_sil")
     */

    public function teachersLessonDeleteAction($hoca_id , $ders_id , $bolum_id)
    {

        $em = $this
            ->getDoctrine()->getManager();
        $hoca = $em ->find('AppBundle:ogretim_gorevlisidb',$hoca_id);

        $ders = $em ->find('AppBundle:derslerdb' , $ders_id);

        $hoca ->removeDersler($ders);

        $em ->persist($ders);
        $em ->flush();

        return $this->redirect('http://localhost:8000/bolum_detay/'.$bolum_id);


    }







}
