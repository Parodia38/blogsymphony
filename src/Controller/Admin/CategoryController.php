<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use App\Form\Admin\CategoryType;
use App\Repository\CategoryRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/categorie")
 */
class CategoryController extends AbstractController
{
    /**
     * @Route("/", name="category_index", methods={"GET"})
     */
    public function index(CategoryRepository $categoryRepository, PaginatorInterface $paginator, Request $request): Response
    {
        $categories = $paginator->paginate(
            $categoryRepository->findAll(),
            $request->query->get('page', 1),
            10
        );
        return $this->render('admin/category/index.html.twig', [
            'categories' => $categories,
        ]);
    }

    /**
     * @Route("/ajouter", name="category_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($category);
            $entityManager->flush();

            $this->addFlash('success', 'La catégorie a bien été ajoutée');

            return $this->redirectToRoute('category_index');
        }

        return $this->render('admin/category/new.html.twig', [
            'category' => $category,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/{id}/modifier", name="category_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Category $category): Response
    {
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'La catégorie a bien été modifiée');

            return $this->redirectToRoute('category_index');
        }

        return $this->render('admin/category/edit.html.twig', [
            'category' => $category,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="category_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Category $category): Response
    {
        if ($this->isCsrfTokenValid('delete'.$category->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($category);
            $entityManager->flush();
            $this->addFlash('success', 'La catégorie a bien été supprimée');
        }

        return $this->redirectToRoute('category_index');
    }
}
