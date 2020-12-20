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
class __TwigTemplate_988d61107a097720f7ce6c2d93beb9ac30a58a909e0103407d3f45c4d70c5989 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        echo ((twig_in_filter("article", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", [], "any", false, false, false, 19), "attributes", [], "any", false, false, false, 19), "get", [0 => "_route"], "method", false, false, false, 19))) ? ("text-dark") : (""));
        echo "\">Article</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_index");
        echo "\" class=\"nav-link ";
        echo ((twig_in_filter("category", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "attributes", [], "any", false, false, false, 22), "get", [0 => "_route"], "method", false, false, false, 22))) ? ("text-dark") : (""));
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
            echo ((twig_in_filter("user", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "request", [], "any", false, false, false, 26), "attributes", [], "any", false, false, false, 26), "get", [0 => "_route"], "method", false, false, false, 26))) ? ("text-dark") : (""));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 37
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  156 => 37,  146 => 36,  131 => 38,  129 => 36,  126 => 35,  124 => 34,  117 => 29,  109 => 26,  106 => 25,  104 => 24,  97 => 22,  89 => 19,  75 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}

    <header class=\"navbar navbar-dark bg-dark\">
        <div class=\"container-fluid d-flex justify-content-between\">
            <p class=\"text-light h3\">Espace d'administration</p>
            <a href=\"{{ path('site_index') }}\" class=\"text-light\">Retour au site</a>
        </div>
    </header>

    <div class=\"container-fluid\" style=\"background:linear-gradient(90deg, #f7f7f9 calc(25% - 15px), #fff calc(23.1% - 15px) );\">

        <div class=\"row pt-3\" style=\"min-height: 87vh\">
            <aside class=\"col-3\">
                <nav>
                    <ul class=\"list-unstyled\">
                        <li class=\"nav-item\">
                            <a href=\"{{ path('article_index') }}\" class=\"nav-link {{ 'article' in app.request.attributes.get('_route') ? 'text-dark' }}\">Article</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"{{ path('category_index') }}\" class=\"nav-link {{ 'category' in app.request.attributes.get('_route') ? 'text-dark' }}\">Catégorie</a>
                        </li>
                        {% if is_granted('ROLE_SUPER') %}
                            <li class=\"nav-item\">
                                <a href=\"{{ path('user_index') }}\" class=\"nav-link {{ 'user' in app.request.attributes.get('_route') ? 'text-dark' }}\">Utilisateur</a>
                            </li>
                        {% endif %}
                    </ul>
                </nav>
            </aside>

            <main class=\"col-lg-9\">
                {% include \"utils/_flash.html.twig\" %}

                {% block content %}
                {% endblock %}
            </main>
        </div>
    </div>


{% endblock %}
", "admin/layout.html.twig", "/Users/arnaudbassey/Documents/Ecole/WebTech/PHP-Symfony/webtech-php-code/ArnaudBassey-blog/templates/admin/layout.html.twig");
    }
}
