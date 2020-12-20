<?php

namespace App\Controller\Admin;

use App\Entity\Article;
use App\Form\Admin\ArticleType;
use App\Repository\ArticleRepository;
use Knp\Component\Pager\PaginatorInterface;
use Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/article")
 */
class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="article_index", methods={"GET"})
     */
    public function index(ArticleRepository $articleRepository, PaginatorInterface $paginator, Request $request): Response
    {

        $articles = $paginator->paginate(
            $articleRepository->findAll(),
            $request->query->get('page', 1),
            10
        );

        return $this->render('/admin/article/index.html.twig', [
            'articles' => $articles,
        ]);
    }

    /**
     * @Route("/ajouter", name="article_new", methods={"GET","POST"})
     */
    public function new(Request $request, UploadableManager $uploadableManager): Response
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            if ($article->getFile() !== null) {
                $uploadableManager->markEntityToUpload($article, $article->getFile());
            }
            $entityManager->persist($article);
            $entityManager->flush();

            $this->addFlash('success', 'L\'article a bien été ajouté');
            return $this->redirectToRoute('article_index');
        }

        return $this->render('admin/article/new.html.twig', [
            'article' => $article,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="article_show", methods={"GET"})
     */
    public function show(Article $article): Response
    {
        return $this->render('admin/article/show.html.twig', [
            'article' => $article,
        ]);
    }

    /**
     * @Route("/{id}/modifier", name="article_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Article $article, UploadableManager $uploadableManager): Response
    {
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($article->getFile() !== null) {
                $uploadableManager->markEntityToUpload($article, $article->getFile());
            }
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'L\'article a bien été modifié');

            return $this->redirectToRoute('article_index');
        }

        return $this->render('admin/article/edit.html.twig', [
            'article' => $article,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="article_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Article $article): Response
    {
        if ($this->isCsrfTokenValid('delete'.$article->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($article);
            $entityManager->flush();

            $this->addFlash('success', 'L\'article a bien été supprimé');
        }

        return $this->redirectToRoute('article_index');
    }
}
