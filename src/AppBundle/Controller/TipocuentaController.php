<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Tipocuenta;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Tipocuenta controller.
 *
 * @Route("tipocuenta")
 */
class TipocuentaController extends Controller
{
    /**
     * Lists all Tipocuenta entities.
     *
     * @Route("/tcuenta", name="tipocuenta_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tipocuentas = $em->getRepository('AppBundle:Tipocuenta')->findAll();

        return $this->render('tipocuenta/indextipocuenta.html.twig', array(
            'tipocuenta' => $tipocuentas,
        ));
    }

    /**
     * Creates a new Tipocuenta entity.
     *
     * @Route("/new", name="tipocuenta_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $Tipocuenta = new Tipocuenta();
        $form = $this->createForm('AppBundle\Form\TipocuentaType', $Tipocuenta);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($Tipocuenta);
            $em->flush($Tipocuenta);

            $this->addFlash('message', 'Post Creado Exitosamente!');
            return $this->redirectToRoute('tipocuenta_show');
        }

        return $this->render('tipocuenta/newtipocuenta.html.twig', array(
            'tipocuenta' => $Tipocuenta,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Tipocuenta entity.
     *
     * @Route("tipocuenta/{id}", name="tipocuenta_show")
     * @Method("GET")
     */
    public function showAction(Tipocuenta $Tipocuenta)
    {
        $deleteForm = $this->createDeleteForm($Tipocuenta);

        return $this->render('tipocuenta/showtipocuenta.html.twig', array(
            'tipocuenta' => $Tipocuenta,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Tipocuenta entity.
     *
     * @Route("tipocuenta/{id}/edit", name="tipocuenta_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Tipocuenta $Tipocuenta)
    {
        $deleteForm = $this->createDeleteForm($Tipocuenta);
        $editForm = $this->createForm('AppBundle\Form\TipocuentaType', $Tipocuenta);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $this->addFlash('message's, 'Actualizado Correctamente!');

            return $this->redirectToRoute('tipocuenta_index');
        }

        return $this->render('tipocuenta/edittipocuenta.html.twig', array(
            'tipocuenta' => $Tipocuenta,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Tipocuenta entity.
     *
     * @Route("tipocuenta/{id}", name="tipocuenta_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Tipocuenta $Tipocuenta)
    {
        $form = $this->createDeleteForm($Tipocuenta);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($Tipocuenta);
            $em->flush($Tipocuenta);
        }

        return $this->redirectToRoute('tipocuenta_index');
    }

    /**
     * Creates a form to delete a Tipocuenta entity.
     *
     * @param Tipocuenta $Tipocuenta The Tipocuenta entity
     *
     * @return \Symfony\Component\Form\Form The form
*/
    private function createDeleteForm(Tipocuenta $Tipocuenta)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tipocuenta_delete', array('id' => $Tipocuenta->getIdtipocuenta())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
