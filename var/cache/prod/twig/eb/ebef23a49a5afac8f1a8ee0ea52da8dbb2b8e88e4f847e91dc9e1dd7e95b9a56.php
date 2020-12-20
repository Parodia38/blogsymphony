<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/layout.html.twig */
class __TwigTemplate_de94a0c0e5c2f31a581ad5128cdf0ac3a2264f2a50152c9a05065dcc35384af9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "admin/layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    <header class=\"navbar navbar-dark bg-dark\">
        <div class=\"container-fluid d-flex justify-content-between\">
            <p class=\"text-light h3\">Espace d'administration</p>
            <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_index");
        echo "\" class=\"text-light\">Retour au site</a>
        </div>
    </header>

    <div class=\"container-fluid\" style=\"background:linear-gradient(90deg, #f7f7f9 calc(25% - 15px), #fff calc(23.1% - 15px) );\">

        <div class=\"row pt-3\" style=\"min-height: 87vh\">
            <aside class=\"col-3\">
                <nav>
                    <ul class=\"list-unstyled\">
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        echo "\" class=\"nav-link ";
        echo ((twig_in_filter("article", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 19), "attributes", [], "any", false, false, false, 19), "get", [0 => "_route"], "method", false, false, false, 19))) ? ("text-dark") : (""));
        echo "\">Article</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_index");
        echo "\" class=\"nav-link ";
        echo ((twig_in_filter("category", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 22), "attributes", [], "any", false, false, false, 22), "get", [0 => "_route"], "method", false, false, false, 22))) ? ("text-dark") : (""));
        echo "\">Catégorie</a>
                        </li>
                        ";
        // line 24
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER")) {
            // line 25
            echo "                            <li class=\"nav-item\">
                                <a href=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
            echo "\" class=\"nav-link ";
            echo ((twig_in_filter("user", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 26), "attributes", [], "any", false, false, false, 26), "get", [0 => "_route"], "method", false, false, false, 26))) ? ("text-dark") : (""));
            echo "\">Utilisateur</a>
                            </li>
                        ";
        }
        // line 29
        echo "                    </ul>
                </nav>
            </aside>

            <main class=\"col-lg-9\">
                ";
        // line 34
        $this->loadTemplate("utils/_flash.html.twig", "admin/layout.html.twig", 34)->display($context);
        // line 35
        echo "
                ";
        // line 36
        $this->displayBlock('content', $context, $blocks);
        // line 38
        echo "            </main>
        </div>
    </div>


";
    }

    // line 36
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "                ";
    }

    public function getTemplateName()
    {
        return "admin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 37,  122 => 36,  113 => 38,  111 => 36,  108 => 35,  106 => 34,  99 => 29,  91 => 26,  88 => 25,  86 => 24,  79 => 22,  71 => 19,  57 => 8,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/layout.html.twig", "/Users/arnaudbassey/Documents/Ecole/WebTech/PHP-Symfony/webtech-php-code/ArnaudBassey-blog/templates/admin/layout.html.twig");
    }
}
