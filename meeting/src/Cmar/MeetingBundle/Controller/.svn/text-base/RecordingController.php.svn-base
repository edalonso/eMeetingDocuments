<?php

namespace Cmar\MeetingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Cmar\MeetingBundle\Entity\Recording;
use Cmar\MeetingBundle\Form\RecordingType;

/**
 * Recording controller.
 *
 * @Route("/recording")
 */
class RecordingController extends Controller
{
    /**
     * Lists all Recording entities.
     *
     * @Route("/", name="recording")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('CmarMeetingBundle:Recording')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Recording entity.
     *
     * @Route("/{id}/show", name="recording_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('CmarMeetingBundle:Recording')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Recording entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Recording entity.
     *
     * @Route("/new", name="recording_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Recording();
        $form   = $this->createForm(new RecordingType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Recording entity.
     *
     * @Route("/create", name="recording_create")
     * @Method("post")
     * @Template("CmarMeetingBundle:Recording:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Recording();
        $request = $this->getRequest();
        $form    = $this->createForm(new RecordingType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('recording_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Recording entity.
     *
     * @Route("/{id}/edit", name="recording_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('CmarMeetingBundle:Recording')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Recording entity.');
        }

        $editForm = $this->createForm(new RecordingType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Recording entity.
     *
     * @Route("/{id}/update", name="recording_update")
     * @Method("post")
     * @Template("CmarMeetingBundle:Recording:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('CmarMeetingBundle:Recording')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Recording entity.');
        }

        $editForm   = $this->createForm(new RecordingType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('recording_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Recording entity.
     *
     * @Route("/{id}/delete", name="recording_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('CmarMeetingBundle:Recording')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Recording entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('recording'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
