<?php

namespace Esprit\BestdealBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Esprit\BestdealBundle\Entity\Comment;
use Esprit\BestdealBundle\Form\CommentType;

use Esprit\BestdealBundle\Entity\Commande;
use Esprit\BestdealBundle\Form\CommandeType;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $deals = $em->getRepository('EspritBestdealBundle:Deal')->findAll();
        
        return $this->render('EspritBestdealBundle:Default:index.html.twig', array('deals' => $deals));
    }
    
    
    public function aficherproduitAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $produit = $em->getRepository('EspritBestdealBundle:Produit')->findOneById($id);
        
        return $this->render('EspritBestdealBundle:Default:aficherproduit.html.twig', array('produit' => $produit));
    }
    
   
    
    
    public function sendcommentAction($id)
    {
        $comment = new Comment;
        
        $form = $this->createForm(new CommentType, $comment);
        
        $request = $this->getRequest();
        
        if($request->isMethod('Post')){
            $form->bind($request);
            
            if($form->isValid()){
                
                $comment = $form->getData();
                
                $em = $this->getDoctrine()->getManager();
                $produit= $em->getRepository('EspritBestdealBundle:Produit')->findOneById($id);
                $comment->setProduit($produit);
                $em->persist($comment);
                $em->flush();
                
               return $this->redirect($this->generateUrl('esprit_bestdeal_produit',array('id'=>$id)));
                
                
            }
            
                   }
        
        
        
        
        return $this->render('EspritBestdealBundle:Default:sendcomment.html.twig', 
                array( 'id'=>$id,
                    'form'=>$form->createView(),
                        
                    
                    ));
    }
    
    
    public function rechercheAction()
    {  
        $em = $this->getDoctrine()->getManager();
        
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            
          $mot =  $request->get('recherche');
          $query = $em->createQuery("SELECT u FROM Esprit\BestdealBundle\Entity\Deal u WHERE u.nom LIKE '%$mot%' ");
          $recherches = $query->getResult();
          
          /*
          $date1 =  $request->get('date1');
          $date2 =  $request->get('date2');
          
          $query2 = $em->createQuery("SELECT u FROM Esprit\BestdealBundle\Entity\Deal u WHERE u.datedebut BETWEEN  '.$date1.' AND '.$date2.' OR u.datefin BETWEEN  '.$date1.' AND '.$date2.'");
          $recherches2 = $query2->getResult();
            */
          }
        return $this->render('EspritBestdealBundle:Default:recherche.html.twig', array(
            'recherches' => $recherches,
            //'recherches2' => $recherches2
            
            ));
    }
    
    
public function commandeAction($id)
    {
        $commande = new Commande;
        $em = $this->getDoctrine()->getManager();
       
        $client = $this->get('security.context')->getToken()->getUser();
        
        $deal = $em->getRepository('EspritBestdealBundle:Deal')->findOneById($id);
        
        $form = $this->createForm(new CommandeType, $commande);
        
        $request = $this->getRequest();
        
        if($request->isMethod('Post')){
            $form->bind($request);
            
            if($form->isValid()){
                
                $commande = $form->getData();
                
                $commande->setClient($client);
                $commande->setDeal($deal);
                $em->persist($commande);
                $em->flush();
                
               return $this->redirect($this->generateUrl('esprit_bestdeal_homepage'));
                
                
            }
            
                   }
        
        
        
        
        return $this->render('EspritBestdealBundle:Default:commande.html.twig', array( 
            'form'=>$form->createView(),
            
            'id'=>$id,
         
                ));
            
    }
    
    
}
