<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Todo;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TodoController extends Controller
{
    /**
     * @Route("/todos", name="todo_list")
     */
    public function indexAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Todo');
        $todos = $repository->findAll();

        return $this->render('todo/index.html.twig'
            , array(
                'todos' => $todos
        ));
    }

    /**
     * @Route("/todo/create", name="todo_create")
     */
    public function createAction(Request $request)
    {
        return $this->render('todo/create.html.twig');
    }

    /**
     * @Route("/todo/edit/{id}", name="todo_edit")
     */
    public function editAction($id, Request $request)
    {
        return $this->render('todo/edit.html.twig');
    }

    /**
     * @Route("/todo/detail/{id}", name="todo_detail")
     */
    public function detailxAction($id)
    {
        return $this->render('todo/detail.html.twig');
    }

    /**
     * @Route("/todo/delete", name="todo_delete")
     */
    public function deleteAction(Request $request)
    {

    }
}
