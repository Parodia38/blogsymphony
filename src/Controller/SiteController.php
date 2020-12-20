<?php

namespace App\Controller;

use App\Form\ContactType;
use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route(name="site_")
 */
class SiteController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        $toto = 'SiteController';
        return $this->render('site/index.html.twig', [
            'controller_name' => $toto,
        ]);
    }


    /**
     * @Route("/a-propos", name="about")
     */
    public function about(): Response
    {
        return $this->render('site/about.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(Request $request, MailerInterface $mailer)
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $name = $form->get('name')->getData();
            $email = $form->get('email')->getData();
            $object = $form->get('object');
            $message = $form->get('message')->getData();

            $choices = $object->getConfig()->getOption('choices');

            $object = array_search($object->getData(), $choices);

            $msg = (new TemplatedEmail())
                ->from($email)
                ->to("contact@site.local")
                ->subject($object)
                ->textTemplate('mail/contact.txt.twig')
                ->context([
                    'name' => $name,
                    'mail' => $email,
                    'message' => $message,
                ])
            ;

            $mailer->send($msg);

            //$this->get('session')->getFlashBag()->add('success', 'Votre message a bien été envoyé');
            $this->addFlash('success', 'Votre message a bien été envoyé');

            return $this->redirectToRoute('site_contact');

        }

        return $this->render('site/contact.html.twig', [
            'contactForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/blog", name="blog")
     */
    public function blog(ArticleRepository $articleRepository, PaginatorInterface $paginator, Request $request): Response
    {

        $articles = $paginator->paginate(
            $articleRepository->findAllPublished(),
            $request->query->get('page', 1),
            9
        );

        return $this->render('site/blog/index.html.twig', [
            'articles' => $articles,
        ]);
    }

    /**
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function showArticle(ArticleRepository $articleRepository,?string $slug): Response
    {
        $article = $articleRepository->detailed($slug);

        if (!$article) {
            throw $this->createNotFoundException('Article introuvable');
        }

        return $this->render('site/blog/show.html.twig', [
            'article' => $article
        ]);
    }

    /**
     * @Route("/blog/categorie/{slug}", name="blog_category")
     */
    public function showCategory(CategoryRepository $categoryRepository, PaginatorInterface $paginator, Request $request,?string $slug): Response
    {

        $category = $categoryRepository->detailed($slug);

        if (!$category) {
            return $this->redirectToRoute('site_blog');
        }

        $articles = $paginator->paginate(
            $category->getArticles(),
            $request->query->get('page', 1),
            9
        );

        return $this->render('site/blog/category.html.twig', [
            'category' => $category,
            'articles' => $articles,
        ]);
    }


    public function blogSidebar(CategoryRepository $categoryRepository): Response
    {
       return $this->render('site/blog/_sidebar.html.twig', [
           'categories' => $categoryRepository->list(),
       ]);
    }
}
