<?php

namespace VenteBundle\Controller;

use BddBundle\Entity\Commande;
use Dompdf\Dompdf;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Commande controller.
 *
 */
class CommandeController extends Controller
{
    /**
     * Lists all commande entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $commandes = $em->getRepository('BddBundle:Commande')->findAll();
        $repository = $this->getDoctrine()->getRepository('BddBundle:Commande');
        $commandes= $repository->findBy(array('iduser'=>$user));

        return $this->render('@Vente/commande/index.html.twig', array(
            'commandes' => $commandes,
        ));
    }

    /**
     * Creates a new commande entity.
     *
     */
    public function newAction(Request $request)
    {
        $commande = new Commande();
        $form = $this->createForm('VenteBundle\Form\CommandeType', $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($commande);
            $em->flush();

            return $this->redirectToRoute('vente_show', array('id' => $commande->getId()));
        }

        return $this->render('@Vente/commande/new.html.twig', array(
            'commande' => $commande,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a commande entity.
     *
     */
    public function showAction(Commande $commande, Request $request)
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $deleteForm = $this->createDeleteForm($commande);
        $repository = $this->getDoctrine()->getRepository('BddBundle:Commande');
        $commandes= $repository->findBy(array('iduser'=>$user));
        //dump($commande);
        //die();

        return $this->render('@Vente/commande/show.html.twig', array(
            'commande' => $commande,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing commande entity.
     *
     */
    public function editAction(Request $request, Commande $commande)
    {
        $deleteForm = $this->createDeleteForm($commande);
        $editForm = $this->createForm('VenteBundle\Form\CommandeType', $commande);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('vente_edit', array('id' => $commande->getId()));
        }

        return $this->render('@Vente/commande/edit.html.twig', array(
            'commande' => $commande,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a commande entity.
     *
     */
    public function deleteAction(Request $request, Commande $commande)
    {
        $form = $this->createDeleteForm($commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($commande);
            $em->flush();
        }

        return $this->redirectToRoute('vente_index');
    }

    /**
     * Creates a form to delete a commande entity.
     *
     * @param Commande $commande The commande entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Commande $commande)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('vente_delete', array('id' => $commande->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }



    public function PDFAction(Commande $commande, Request $request)
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $deleteForm = $this->createDeleteForm($commande);
        $repository = $this->getDoctrine()->getRepository('BddBundle:Commande');
        $commandes= $repository->findBy(array('iduser'=>$user));
        //dump($commande);
        //die();



        // On  crée une instance de Dompdf
        $dompdf = new Dompdf();
        //  On  ajoute le texte à afficher
        $html=$this->renderView('@Vente/commande/indexPDF.html.twig',array('commande' => $commande));
        // On envoie le code html  à notre instance de dompdf
        $dompdf->loadHtml($html);
        // On demande à dompdf de générer le  pdf
        $dompdf->render();

        $dompdf->stream();

        /***********/
        // On renvoie  le flux du fichier pdf dans une  Response pour l'utilisateur
        return $this->redirectToRoute('vente_index');

    }

}
