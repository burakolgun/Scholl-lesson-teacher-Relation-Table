<?php

namespace AppBundle\Controller;

use AppBundle\Entity\bolumdb;


use AppBundle\Entity\derslerdb;
use AppBundle\Entity\ogretim_gorevlisidb;
use Doctrine\ORM\Mapping\MappingException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\DBAL\Exception\ConnectionException;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class BolumlerController extends Controller
{
    /**
     * @Route("/bolumler" , name="bolumler")
     */
    public function BolumlerPageAction(Request $request)
    {
        try {
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
        }catch (ConnectionException $exception)
        {
            $this->addFlash('error','Veri Tabanına Bağlanırken Hata Oluştu.');
            $this->addFlash('error','Hata ->'.$exception->getMessage());
            return $this->render(':default/ErrorPages:SqlConnectionError.html.twig'
            );
        }catch (MappingException $exception)
        {
            $this->addFlash('error','Veri Tabanına Bağlanırken Hata Oluştu.');
            $this->addFlash('error','Hata ->'.$exception->getMessage());
            return $this->render(':default/ErrorPages:404ErrorPage.html.twig'
            );

        }

        }

    /**
     * @Route("/bolum_ekle" , name="bolum_ekle")
     */
    public function BolumCreateAction(Request $request)
    {
        try {

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
        }catch (ConnectionException $exception)
        {
            $this->addFlash('error','Veri Tabanına Bağlanırken Hata Oluştu.');
            $this->addFlash('error','Hata ->'.$exception->getMessage());
            return $this->render(':default/ErrorPages:SqlConnectionError.html.twig'
            );
        }catch (MappingException $exception)
        {
            $this->addFlash('error','Veri Tabanına Bağlanırken Hata Oluştu.');
            $this->addFlash('error','Hata ->'.$exception->getMessage());
            return $this->render(':default/ErrorPages:404ErrorPage.html.twig'
            );

        }
    }

        /**
         * @Route("/bolum_detay/{id}/{donem_id}/{semester_id}" , name="bolum_detay")
         */
        public function bolumDetayAction($id,$donem_id,$semester_id, Request $request)
        {

            try {
                $bolum = $this->getDoctrine()
                    ->getRepository('AppBundle:bolumdb')
                    ->find($id);
                $dersler = $bolum->getDersler();


                //Bolume Yeni Ders Eklemek Icin


                return $this->render(
                    ':default/Department_Pages:bolum_detay.html.twig',
                    array(
                        'bolum' => $bolum,
                        'dersler' => $dersler,
                        'donem_id' => $donem_id,
                        'semester_id' => $semester_id
                    )
                );
            }catch (ConnectionException $exception)
            {
                $this->addFlash('error','Veri Tabanına Bağlanırken Hata Oluştu.');
                $this->addFlash('error','Hata ->'.$exception->getMessage());
                return $this->render(':default/ErrorPages:SqlConnectionError.html.twig'
                );
            }catch (MappingException $exception)
            {
                $this->addFlash('error','Veri Tabanına Bağlanırken Hata Oluştu.');
                $this->addFlash('error','Hata ->'.$exception->getMessage());
                return $this->render(':default/ErrorPages:404ErrorPage.html.twig'
                );

            }

        }

        /**
         * @Route("/bolum_duzenle/{id}" , name="bolum_duzenle")
         */
        public function departmentEditAction($id , Request $request)
        {
            try{
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
        }catch (ConnectionException $exception)
            {
                $this->addFlash('error','Veri Tabanına Bağlanırken Hata Oluştu.');
                $this->addFlash('error','Hata ->'.$exception->getMessage());
                return $this->render(':default/ErrorPages:SqlConnectionError.html.twig'
                );
            }catch (MappingException $exception)
            {
                $this->addFlash('error','Veri Tabanına Bağlanırken Hata Oluştu.');
                $this->addFlash('error','Hata ->'.$exception->getMessage());
                return $this->render(':default/ErrorPages:404ErrorPage.html.twig'
                );

            }}



            /**
             * @Route("/bolum_sil/{id}" , name="bolum_sil")
             */
            public function departmentDeleteAction($id)
            {
                try {
                    $em = $this->getDoctrine()->getManager();
                    $bolum = $em->getRepository('AppBundle:bolumdb')->find($id);
                    $em->remove($bolum);
                    $em->flush();

                    $this->addFlash('error', 'Bolum Silindi');

                    return $this->redirectToRoute('bolumler');

                } catch (ConnectionException $exception) {
                    $this->addFlash('error', 'Veri Tabanına Bağlanırken Hata Oluştu.');
                    $this->addFlash('error', 'Hata ->'.$exception->getMessage());

                    return $this->render(
                        ':default/ErrorPages:SqlConnectionError.html.twig'
                    );
                } catch (MappingException $exception) {
                    $this->addFlash('error', 'Veri Tabanına Bağlanırken Hata Oluştu.');
                    $this->addFlash('error', 'Hata ->'.$exception->getMessage());

                    return $this->render(
                        ':default/ErrorPages:404ErrorPage.html.twig'
                    );

                }
            }
    /**
     * @Route("/bolumler/detay/dersler/{bolum_id}/{ders_id}/{semester_id}" , name="bolum_dersler_hocalar")
     */
    public function departmentAddLessonAction($bolum_id , $ders_id , $semester_id ,  Request $request)
    {
        try{
        $em = $this -> getDoctrine()->getRepository('AppBundle:ogretim_gorevlisidb');
        $hocalar = $em ->findAll();








        return $this->render('default/Department_Pages/bolum_ders_hocaekle.html.twig',array(
            'hocalar' => $hocalar,
            'bolum_id' => $bolum_id,
            'ders_id' => $ders_id,
            'semester_id' => $semester_id
        ));
    }catch (ConnectionException $exception)
        {
            $this->addFlash('error','Veri Tabanına Bağlanırken Hata Oluştu.');
            $this->addFlash('error','Hata ->'.$exception->getMessage());
            return $this->render(':default/ErrorPages:SqlConnectionError.html.twig'
            );
        }catch (MappingException $exception)
        {
            $this->addFlash('error','Veri Tabanına Bağlanırken Hata Oluştu.');
            $this->addFlash('error','Hata ->'.$exception->getMessage());
            return $this->render(':default/ErrorPages:404ErrorPage.html.twig'
            );

        }}

    /**
     * @Route("/bolumler/detay/dersler/{bolum_id}/{ders_id}/{hoca_id}/{semester_id}" , name="hocaya_ders_ekle_on_function")
     */




    public function teacherLessonAddAction($bolum_id , $ders_id , $hoca_id ,$semester_id)
    {
        try{
        $em = $this
            ->getDoctrine()->getManager();
        $hoca = $em ->find('AppBundle:ogretim_gorevlisidb',$hoca_id);

        $ders = $em ->find('AppBundle:derslerdb' , $ders_id);

        $donem = $ders->getDersDonem();
        if($semester_id == 'ders.Ogretmenler2017Guz') {
            $hoca->addDersler2017Guz($ders); // buradan donemlere gore ders ekliyoruz :D

            $em->persist($ders);
            $em->flush();
        }elseif ($semester_id == 'ders.Ogretmenler2017Bahar'){
            $hoca->addDersler2017Bahar($ders); // buradan donemlere gore ders ekliyoruz :D

            $em->persist($ders);
            $em->flush();
        }elseif ($semester_id == 'ders.Ogretmenler2018Guz'){
            $hoca->addDersler2018Guz($ders); // buradan donemlere gore ders ekliyoruz :D

            $em->persist($ders);
            $em->flush();
        }elseif ($semester_id == 'ders.Ogretmenler2018Bahar'){
            $hoca->addDersler2018Bahar($ders); // buradan donemlere gore ders ekliyoruz :D

            $em->persist($ders);
            $em->flush();
        }elseif ($semester_id == 'ders.Ogretmenler2019Guz'){
            $hoca->addDersler2019Guz($ders); // buradan donemlere gore ders ekliyoruz :D

            $em->persist($ders);
            $em->flush();
        }elseif ($semester_id == 'ders.Ogretmenler2019Bahar'){
            $hoca->addDersler2019Bahar($ders); // buradan donemlere gore ders ekliyoruz :D

            $em->persist($ders);
            $em->flush();
        }elseif ($semester_id == 'ders.Ogretmenler2020Guz'){
            $hoca->addDersler2020Guz($ders); // buradan donemlere gore ders ekliyoruz :D

            $em->persist($ders);
            $em->flush();
        }elseif ($semester_id == 'ders.Ogretmenler2020Bahar'){
            $hoca->addDersler2020Bahar($ders); // buradan donemlere gore ders ekliyoruz :D

            $em->persist($ders);
            $em->flush();
        }elseif ($semester_id == 'ders.Ogretmenler2021Guz'){
            $hoca->addDersler2021Guz($ders); // buradan donemlere gore ders ekliyoruz :D

            $em->persist($ders);
            $em->flush();
        }elseif ($semester_id == 'ders.Ogretmenler2021Bahar'){
            $hoca->addDersler2021Bahar($ders); // buradan donemlere gore ders ekliyoruz :D

            $em->persist($ders);
            $em->flush();
        }elseif ($semester_id == 'ders.Ogretmenler2022Guz'){
            $hoca->addDersler2022Guz($ders); // buradan donemlere gore ders ekliyoruz :D

            $em->persist($ders);
            $em->flush();
        }elseif ($semester_id == 'ders.Ogretmenler2022Bahar'){
            $hoca->addDersler2022Bahar($ders); // buradan donemlere gore ders ekliyoruz :D

            $em->persist($ders);
            $em->flush();
        }elseif ($semester_id == 'ders.Ogretmenler2023Guz'){
            $hoca->addDersler2023Guz($ders); // buradan donemlere gore ders ekliyoruz :D

            $em->persist($ders);
            $em->flush();
        }elseif ($semester_id == 'ders.Ogretmenler2023Bahar'){
            $hoca->addDersler2023Bahar($ders); // buradan donemlere gore ders ekliyoruz :D

            $em->persist($ders);
            $em->flush();
        }elseif ($semester_id == 'ders.Ogretmenler2024Guz'){
            $hoca->addDersler2024Guz($ders); // buradan donemlere gore ders ekliyoruz :D

            $em->persist($ders);
            $em->flush();
        }elseif ($semester_id == 'ders.Ogretmenler2024Bahar'){
            $hoca->addDersler2024Bahar($ders); // buradan donemlere gore ders ekliyoruz :D

            $em->persist($ders);
            $em->flush();
        }elseif ($semester_id == 'ders.Ogretmenler2025Guz'){
            $hoca->addDersler2025Guz($ders); // buradan donemlere gore ders ekliyoruz :D

            $em->persist($ders);
            $em->flush();
        }elseif ($semester_id == 'ders.Ogretmenler2025Bahar'){
            $hoca->addDersler2025Bahar($ders); // buradan donemlere gore ders ekliyoruz :D

            $em->persist($ders);
            $em->flush();
        }

        return $this->redirect('http://localhost:8000/bolum_detay/'.$bolum_id.'/'.$donem.'/'.$semester_id);

    }catch (ConnectionException $exception)
        {
            $this->addFlash('error','Veri Tabanına Bağlanırken Hata Oluştu.');
            $this->addFlash('error','Hata ->'.$exception->getMessage());
            return $this->render(':default/ErrorPages:SqlConnectionError.html.twig'
            );
        }catch (MappingException $exception)
        {
            $this->addFlash('error','Veri Tabanına Bağlanırken Hata Oluştu.');
            $this->addFlash('error','Hata ->'.$exception->getMessage());
            return $this->render(':default/ErrorPages:404ErrorPage.html.twig'
            );

        }}

    /**
     * @Route("/bolumler/detay/dersler/gorevli/{hoca_id}/{ders_id}/{bolum_id}/{semester_id}" , name="dersten_hoca_sil")
     */

    public function teachersLessonDeleteAction($hoca_id , $ders_id , $bolum_id , $semester_id)
    {
        try{

        $em = $this
            ->getDoctrine()->getManager();
        $hoca = $em ->find('AppBundle:ogretim_gorevlisidb',$hoca_id);

        $ders = $em ->find('AppBundle:derslerdb' , $ders_id);
        $donem = $ders->getDersDonem();
            if($semester_id == 'ders.Ogretmenler2017Guz'){
        $hoca ->removeDersler2017Guz($ders);

        $em ->persist($ders);
        $em ->flush();}
            elseif($semester_id == 'ders.Ogretmenler2017Bahar'){
                $hoca ->removeDersler2017Bahar($ders);

                $em ->persist($ders);
                $em ->flush();}
            elseif($semester_id == 'ders.Ogretmenler2018Guz'){
                $hoca ->removeDersler2018Guz($ders);

                $em ->persist($ders);
                $em ->flush();}
            elseif($semester_id == 'ders.Ogretmenler2018Bahar'){
                $hoca ->removeDersler2018Bahar($ders);

                $em ->persist($ders);
                $em ->flush();}
            elseif($semester_id == 'ders.Ogretmenler2019Guz'){
                $hoca ->removeDersler2019Guz($ders);

                $em ->persist($ders);
                $em ->flush();}
            elseif($semester_id == 'ders.Ogretmenler2019Bahar'){
                $hoca ->removeDersler2019Bahar($ders);

                $em ->persist($ders);
                $em ->flush();}
            elseif($semester_id == 'ders.Ogretmenler2020Guz'){
                $hoca ->removeDersler2020Guz($ders);

                $em ->persist($ders);
                $em ->flush();}
            elseif($semester_id == 'ders.Ogretmenler2020Bahar'){
                $hoca ->removeDersler2020Bahar($ders);

                $em ->persist($ders);
                $em ->flush();}
            elseif($semester_id == 'ders.Ogretmenler2021Guz'){
                $hoca ->removeDersler2021Guz($ders);

                $em ->persist($ders);
                $em ->flush();}
            elseif($semester_id == 'ders.Ogretmenler2021Bahar'){
                $hoca ->removeDersler2021Bahar($ders);

                $em ->persist($ders);
                $em ->flush();}
            elseif($semester_id == 'ders.Ogretmenler2022Guz'){
                $hoca ->removeDersler2022Guz($ders);

                $em ->persist($ders);
                $em ->flush();}
            elseif($semester_id == 'ders.Ogretmenler2022Bahar'){
                $hoca ->removeDersler2022Bahar($ders);

                $em ->persist($ders);
                $em ->flush();}
            elseif($semester_id == 'ders.Ogretmenler2023Guz'){
                $hoca ->removeDersler2023Guz($ders);

                $em ->persist($ders);
                $em ->flush();}
            elseif($semester_id == 'ders.Ogretmenler2023Bahar'){
                $hoca ->removeDersler2023Bahar($ders);

                $em ->persist($ders);
                $em ->flush();}
            elseif($semester_id == 'ders.Ogretmenler2024Guz'){
                $hoca ->removeDersler2024Guz($ders);

                $em ->persist($ders);
                $em ->flush();}
            elseif($semester_id == 'ders.Ogretmenler2024Bahar'){
                $hoca ->removeDersler2024Bahar($ders);

                $em ->persist($ders);
                $em ->flush();}
            elseif($semester_id == 'ders.Ogretmenler2025Guz'){
                $hoca ->removeDersler2025Guz($ders);

                $em ->persist($ders);
                $em ->flush();}
            elseif($semester_id == 'ders.Ogretmenler2025Bahar'){
                $hoca ->removeDersler2025Bahar($ders);

                $em ->persist($ders);
                $em ->flush();}


        return $this->redirect('/bolum_detay/'.$bolum_id.'/'.$donem.'/'.$semester_id);


    }catch (ConnectionException $exception)
        {
            $this->addFlash('error','Veri Tabanına Bağlanırken Hata Oluştu.');
            $this->addFlash('error','Hata ->'.$exception->getMessage());
            return $this->render(':default/ErrorPages:SqlConnectionError.html.twig'
            );
        }catch (MappingException $exception)
        {
            $this->addFlash('error','Veri Tabanına Bağlanırken Hata Oluştu.');
            $this->addFlash('error','Hata ->'.$exception->getMessage());
            return $this->render(':default/ErrorPages:404ErrorPage.html.twig'
            );

        }}







}
