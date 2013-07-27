<?php

namespace Cmar\MeetingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Cmar\MeetingBundle\Entity\Group;
use Cmar\MeetingBundle\Form\GroupType;

/**
 * Group Admin Controller.
 *
 * @Route("/groupadmin")
 */
class GroupAdminController extends Controller
{
    /**
     * Lists all Group entities.
     *
     * @Route("/", name="group")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('CmarMeetingBundle:Group')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Group entity.
     *
     * @Route("/{id}/show", name="group_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('CmarMeetingBundle:Group')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Group entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Group entity.
     *
     * @Route("/new", name="group_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Group();
        $form   = $this->createForm(new GroupType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Group entity.
     *
     * @Route("/create", name="group_create")
     * @Method("post")
     * @Template("CmarMeetingBundle:Group:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Group();
        $request = $this->getRequest();
        $form    = $this->createForm(new GroupType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('group_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Group entity.
     *
     * @Route("/{id}/edit", name="group_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('CmarMeetingBundle:Group')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Group entity.');
        }

        $editForm = $this->createForm(new GroupType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Group entity.
     *
     * @Route("/{id}/update", name="group_update")
     * @Method("post")
     * @Template("CmarMeetingBundle:Group:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('CmarMeetingBundle:Group')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Group entity.');
        }

        $editForm   = $this->createForm(new GroupType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('group_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Group entity.
     *
     * @Route("/{id}/delete", name="group_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('CmarMeetingBundle:Group')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Group entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('group'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
