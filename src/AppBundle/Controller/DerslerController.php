<?php

namespace AppBundle\Controller;

use AppBundle\Entity\derslerdb;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DerslerController extends Controller
{
    /**
     * @Route("/dersler" , name = "dersler")
     */
    public function DerslerListAction()
    {


        $em = $this
            ->getDoctrine()
            ->getManager();
        $dersler = $em
            ->getRepository('AppBundle:derslerdb')
            ->findAll();
        $i = count($dersler);
        $bolumler = $em
            ->getRepository('AppBundle:bolumdb')
            ->findAll();
        return $this
            -> render(':default/Lectures_Pages:dersler.html.twig' , array(
                'dersler' => $dersler ,
                'i' => $i,
                'bolumler' => $bolumler
            ));

    }
    /**
     * @Route("dersler/ders/ekle" , name = "ders_ekle")
     */
    public function dersAddAction(Request $request)
    {
        $ders = new derslerdb();
        $form = $this->createFormBuilder($ders)
            ->add('ders_ad' , TextType::class,
                array(
                    'attr' =>
                        array('class' => 'form-control', 'style' => 'margin-bottom:15px'),
                ))
            ->add('ders_kod' , TextType::class ,
                array(
                    'attr' =>
                        array('class' => 'form-control', 'style' => 'margin-bottom:15px'),
                ))
            ->add('zorunluveyasecmeli' , TextType::class ,
                array(
                    'attr' =>
                        array('class' => 'form-control', 'style' => 'margin-bottom:15px'),
                ))
            ->add('ders_period' , TextType::class ,
                array(
                    'attr' =>
                        array('class' => 'form-control', 'style' => 'margin-bottom:15px'),
                ))
            ->add('ders_donem' , TextType::class ,
                array(
                    'attr' =>
                        array('class' => 'form-control', 'style' => 'margin-bottom:15px'),
                ))
            ->add('akts' , TextType::class ,
                array(
                    'attr' =>
                        array('class' => 'form-control', 'style' => 'margin-bottom:15px'),
                ))
            ->add('labpuan' , TextType::class ,
                array(
                    'attr' =>
                        array('class' => 'form-control', 'style' => 'margin-bottom:15px'),
                ))
            ->add('pratikpuan' , TextType::class ,
                array(
                    'attr' =>
                        array('class' => 'form-control', 'style' => 'margin-bottom:15px'),
                ))
            ->add('teoripuan' , TextType::class ,
                array(
                    'attr' =>
                        array('class' => 'form-control', 'style' => 'margin-bottom:15px'),
                ))

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

            $ders_ad = $form['ders_ad']->getData();
            $ders_kod = $form['ders_kod']->getData();
            $zorunluveyasecmeli = $form['zorunluveyasecmeli']->getData();
            $ders_period = $form['ders_period']->getData();
            $ders_donem = $form['ders_donem']->getData();
            $akts = $form['akts']->getData();
            $labpuan = $form['labpuan']->getData();
            $pratikpuan = $form['pratikpuan']->getData();
            $teoripuan = $form['teoripuan']->getData();


            $ders->setDersAd($ders_ad);
            $ders->setDersKod($ders_kod);
            $ders->setZorunluveyasecmeli($zorunluveyasecmeli);
            $ders->setDersPeriod($ders_period);
            $ders->setDersDonem($ders_donem);
            $ders->setAkts($akts);
            $ders->setLabpuan($labpuan);
            $ders->setPratikpuan($pratikpuan);
            $ders->setTeoripuan($teoripuan);



            $em = $this->getDoctrine()->getManager();

            $em->persist($ders);
            $em->flush();


            $this->addFlash(
                'notice',
                'Ders Eklendi !'
            );

            return $this->redirectToRoute('dersler');

        }

        // Get Data


        return $this->render(
            ":default/Lectures_Pages:ders_yarat.html.twig",
            array(
                'form' => $form->createView(),
            )
        );



    }
    /**
     * @Route("dersler/ders/detay/{id}" , name = "ders_detay")
     */
    public function dersDetailsAction($id)
    {
        $em = $this
            ->getDoctrine()
            ->getManager();
        $ders = $em
            ->getRepository('AppBundle:derslerdb')
            ->find($id);

        return $this -> render(':default/Lectures_Pages:ders_detay.html.twig',
            array(
                'ders' => $ders
            ));
    }
    /**
     * @Route("/dersler_ders/duzenle/{id}" , name="ders_duzenle")
     */
    public function departmentEditAction($id , Request $request)
    {
        $ders = $this->getDoctrine()
            ->getRepository('AppBundle:derslerdb')
            ->find($id);

        $ders->setDersAd($ders->getDersAd());
        $ders->setDersKod($ders->getDersKod());
        $ders->setZorunluveyasecmeli($ders->getZorunluveyasecmeli());
        $ders->setDersPeriod($ders->getDersPeriod());
        $ders->setDersDonem($ders->getDersDonem());
        $ders->setAkts($ders->getAkts());
        $ders->setLabpuan($ders->getLabpuan());
        $ders->setPratikpuan($ders->getPratikpuan());
        $ders->setTeoripuan($ders->getTeoripuan());

        $form = $this->createFormBuilder($ders)
            ->add('ders_ad' , TextType::class,
                array(
                    'attr' =>
                        array('class' => 'form-control', 'style' => 'margin-bottom:15px'),
                ))
            ->add('ders_kod' , TextType::class ,
                array(
                    'attr' =>
                        array('class' => 'form-control', 'style' => 'margin-bottom:15px'),
                ))
            ->add('zorunluveyasecmeli' , TextType::class ,
                array(
                    'attr' =>
                        array('class' => 'form-control', 'style' => 'margin-bottom:15px'),
                ))
            ->add('ders_period' , TextType::class ,
                array(
                    'attr' =>
                        array('class' => 'form-control', 'style' => 'margin-bottom:15px'),
                ))
            ->add('ders_donem' , TextType::class ,
                array(
                    'attr' =>
                        array('class' => 'form-control', 'style' => 'margin-bottom:15px'),
                ))
            ->add('akts' , TextType::class ,
                array(
                    'attr' =>
                        array('class' => 'form-control', 'style' => 'margin-bottom:15px'),
                ))
            ->add('labpuan' , TextType::class ,
                array(
                    'attr' =>
                        array('class' => 'form-control', 'style' => 'margin-bottom:15px'),
                ))
            ->add('pratikpuan' , TextType::class ,
                array(
                    'attr' =>
                        array('class' => 'form-control', 'style' => 'margin-bottom:15px'),
                ))
            ->add('teoripuan' , TextType::class ,
                array(
                    'attr' =>
                        array('class' => 'form-control', 'style' => 'margin-bottom:15px'),
                ))

            ->add(
                'save',
                SubmitType::class,
                array(
                    'label' => 'Gönder',
                    'attr' =>
                        array('class' => 'btn btn-success btn-md btn-block'),
                )
            )

            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //Get DATA
            $ders_ad = $form['ders_ad']->getData();
            $ders_kod = $form['ders_kod']->getData();
            $zorunluveyasecmeli = $form['zorunluveyasecmeli']->getData();
            $ders_period = $form['ders_period']->getData();
            $ders_donem = $form['ders_donem']->getData();
            $akts = $form['akts']->getData();
            $labpuan = $form['labpuan']->getData();
            $pratikpuan = $form['pratikpuan']->getData();
            $teoripuan = $form['teoripuan']->getData();
            $bolumid = $form['bolumid']->getData();
            $em = $this->getDoctrine()->getManager();
            $ders = $em->getRepository('AppBundle:derslerdb')->find($id);

            $ders->setDersAd($ders_ad);
            $ders->setDersKod($ders_kod);
            $ders->setZorunluveyasecmeli($zorunluveyasecmeli);
            $ders->setDersPeriod($ders_period);
            $ders->setDersDonem($ders_donem);
            $ders->setAkts($akts);
            $ders->setLabpuan($labpuan);
            $ders->setPratikpuan($pratikpuan);
            $ders->setTeoripuan($teoripuan);


            $em->flush();
            $this->addFlash(
                'notice',
                'Bölüm Düzenlendi'
            );

            return $this->redirectToRoute('dersler');
        }


        return $this->render(
            'default/Lectures_Pages/ders_duzenle.html.twig',
            array(
                'ders' => $ders,
                'form' => $form->createView()
            )
        );
    }
    /**
     * @Route("/dersler/ders/sil/{id}" , name = "ders_sil")
     */
    public function dersDeleteAction($id)
    {
        $em = $this
            ->getDoctrine()
            ->getManager();
        $ders = $em
            ->getRepository('AppBundle:derslerdb')
            ->find($id);

            $em->remove($ders);
            $em -> flush();


        $this ->addFlash('error','Ders Silindi');
        return $this->redirectToRoute('dersler');
    }

}
