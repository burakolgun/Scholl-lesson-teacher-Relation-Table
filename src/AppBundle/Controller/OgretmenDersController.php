<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ogretim_gorevlisidb;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class OgretmenDersController extends Controller
{
    /**
     * @Route("/ogretim_gorevlileri" , name="ogretim_gorevlileri")
     */
    public function ogretimGorevlileriListAction(Request  $request)
    {
        $em = $this
            ->getDoctrine()
            ->getManager();
        $ogretmenler = $em -> getRepository('AppBundle:ogretim_gorevlisidb') ->findAll();

        return $this->render(':default/Teachers_Pages:ogretmenler.html.twig' , array(
            'ogretmenler' => $ogretmenler
        ));
    }

    /**
     * @Route("/ogretim_gorevlisi_yarat" , name="ogretim_gorevlisi_yarat")
     */
    public function ogretimgorevlisiCreateAction(Request $request)
    {
        // create a task and give it some dummy data for this example
        $ogretmen = new ogretim_gorevlisidb();
        $form = $this->createFormBuilder($ogretmen)
            ->add(
                'gorevli_ad',
                TextType::class,
                array(
                    'attr' =>
                        array('class' => 'form-control', 'style' => 'margin-bottom:15px'),
                )
            )
            ->add(
                'gorevli_soyad',
                TextType::class,
                array(
                    'attr' =>
                        array('class' => 'form-control', 'style' => 'margin-bottom:15px'),
                )
            )
            ->add(
                'gorevli_unvan',
                TextType::class,
                array(
                    'attr' =>
                        array('class' => 'form-control', 'style' => 'margin-bottom:15px'),
                )
            )
            ->add(
                'gorevlendirme',
                TextType::class,
                array(
                    'attr' =>
                        array('class' => 'form-control', 'style' => 'margin-bottom:15px'),
                )
            )
            ->add(
                'gorevli_no',
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


        // Formdan Verileri Alip Degiskenlere atiyoruz  name den var 'a
        if ($form->isSubmitted() && $form->isValid()) {
            $gorevli_ad = $form['gorevli_ad']->getData();
            $gorevli_soyad = $form['gorevli_soyad']->getData();
            $gorevli_unvan = $form['gorevli_unvan']->getData();
            $gorevlendirme = $form['gorevlendirme']->getData();
            $gorevli_no = $form['gorevli_no']->getData();

            // var ' a atilanlari db ye detliyoruz

            $ogretmen->setGorevliAd($gorevli_ad);
            $ogretmen->setGorevliSoyad($gorevli_soyad);
            $ogretmen->setGorevliUnvan($gorevli_unvan);
            $ogretmen->setGorevlendirme($gorevlendirme);
            $ogretmen->setGorevliNo($gorevli_no);



            $em = $this->getDoctrine()->getManager();

            $em->persist($ogretmen);
            $em->flush();


            $this->addFlash(
                'notice',
                'Ogretim Görevlisi Eklendi !'
            );

            return $this->redirectToRoute('ogretim_gorevlileri');
        }


        return $this->render(
            ':default/Teachers_Pages:ogretmen_yarat.html.twig',
            array(
                'form' => $form->createView(),
            )
        );

    }
    /**
     * @Route("/ogretmen_duzenle/{id}" , name = "ogretmen_duzenle")
     */
    public function ogretmenEditAction($id , Request $request)
    {
        $ogretmen = $this->getDoctrine()
            ->getRepository('AppBundle:ogretim_gorevlisidb')
            ->find($id);

        $ogretmen->setGorevliAd($ogretmen->getGorevliAd());
        $ogretmen->setGorevliSoyad($ogretmen->getGorevliSoyad());
        $ogretmen->setGorevliUnvan($ogretmen->getGorevliUnvan());
        $ogretmen->setGorevlendirme($ogretmen->getGorevlendirme());
        $ogretmen->setGorevliNo($ogretmen->getGorevliNo());

        $form = $this->createFormBuilder($ogretmen)
            ->add(
                'gorevli_ad',
                TextType::class,
                array(
                    'attr' => array(
                        'class' => 'form-control',
                        'style' => 'margin-bottom:15px'
                    )
                )
            )
            ->add(
                'gorevli_soyad',
                TextType::class,
                array(
                    'attr' => array(
                        'class' => 'form-control',
                        'style' => 'margin-bottom:15px'
                    )
                )
            )
            ->add(
                'gorevli_unvan',
                TextType::class,
                array(
                    'attr' => array(
                        'class' => 'form-control',
                        'style' => 'margin-bottom:15px'
                    )
                )
            )
            ->add(
                'gorevlendirme',
                TextType::class,
                array(
                    'attr' => array(
                        'class' => 'form-control',
                        'style' => 'margin-bottom:15px'
                    )
                )
            )
            ->add(
                'gorevli_no',
                TextType::class,
                array(
                    'attr' => array(
                        'class' => 'form-control',
                        'style' => 'margin-bottom:15px'
                    )
                )
            )

            ->add(
                'save',
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
            $gorevli_ad = $form['gorevli_ad']->getData();
            $gorevli_soyad = $form['gorevli_soyad']->getData();
            $gorevli_unvan = $form['gorevli_unvan']->getData();
            $gorevlendirme = $form['gorevlendirme']->getData();
            $gorevli_no = $form['gorevli_no']->getData();

            $em = $this->getDoctrine()->getManager();
            $bolum = $em->getRepository('AppBundle:ogretim_gorevlisidb')->find($id);

            $ogretmen->setGorevliAd($gorevli_ad);
            $ogretmen->setGorevliSoyad($gorevli_soyad);
            $ogretmen->setGorevliUnvan($gorevli_unvan);
            $ogretmen->setGorevlendirme($gorevlendirme);
            $ogretmen->setGorevliNo($gorevli_no);

            $em->flush();
            $this->addFlash(
                'notice',
                'Öğretim Görevlisi Düzenlendi'
            );

            return $this->redirectToRoute('ogretim_gorevlileri');
        }



        return $this->render(
            ':default/Teachers_Pages:ogretmen_duzenle.html.twig',
            array(
                'ogretmen' => $ogretmen,
                'form' => $form->createView()
            )
        );

    }

    /**
     * @Route("/ogretmen_sil/{id}" , name = "ogretmen_sil")
     */
    public function ogretmenDeleteAction($id , Request $request)
    {
        $em = $this
            ->getDoctrine()
            ->getManager();
        $ogretmen = $em
            ->getRepository('AppBundle:ogretim_gorevlisidb')
            ->find($id);
        $em ->remove($ogretmen);
        $em->flush();

        $this->addFlash('error','Öğretim Görevlisi Silindi');
        return $this -> redirectToRoute('ogretim_gorevlileri');

    }
    /**
     * @Route("/ogretmen_dersler/{id}"  , name = "ogretmen_dersler")
     */
    public function ogretmenDerslerListAction($id , Request $request)
    {
        $em = $this
            ->getDoctrine()
            ->getManager();
        $ogretmen = $em
            ->getRepository('AppBundle:ogretim_gorevlisidb')
            ->find($id);

        return $this -> render(':default/Teachers_Pages:ogretmen_dersler.html.twig' , array(
            'ogretmen'=>$ogretmen
        ));

    }
}
