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

/* admin/partener/show.html.twig */
class __TwigTemplate_e4ed28615ff7560691c2a843e23d2811f2248720db30fe8aaf9f48eb0a1f665d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/partener/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/partener/show.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/partener/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partener"]) || array_key_exists("partener", $context) ? $context["partener"] : (function () { throw new RuntimeError('Variable "partener" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partener"]) || array_key_exists("partener", $context) ? $context["partener"] : (function () { throw new RuntimeError('Variable "partener" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>
    <p>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partener"]) || array_key_exists("partener", $context) ? $context["partener"] : (function () { throw new RuntimeError('Variable "partener" does not exist.', 7, $this->source); })()), "description", [], "any", false, false, false, 7), "html", null, true);
        echo "</p>
    <p>Statut : ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partener"]) || array_key_exists("partener", $context) ? $context["partener"] : (function () { throw new RuntimeError('Variable "partener" does not exist.', 8, $this->source); })()), "status", [], "any", false, false, false, 8), "html", null, true);
        echo "</p>
    <p>Url : ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partener"]) || array_key_exists("partener", $context) ? $context["partener"] : (function () { throw new RuntimeError('Variable "partener" does not exist.', 9, $this->source); })()), "url", [], "any", false, false, false, 9), "html", null, true);
        echo "</p>
    <p>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partener"]) || array_key_exists("partener", $context) ? $context["partener"] : (function () { throw new RuntimeError('Variable "partener" does not exist.', 10, $this->source); })()), "content", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>

    ";
        // line 12
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["partener"]) || array_key_exists("partener", $context) ? $context["partener"] : (function () { throw new RuntimeError('Variable "partener" does not exist.', 12, $this->source); })()), "logo", [], "any", false, false, false, 12))) {
            // line 13
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["partener"]) || array_key_exists("partener", $context) ? $context["partener"] : (function () { throw new RuntimeError('Variable "partener" does not exist.', 13, $this->source); })()), "logo", [], "any", false, false, false, 13)), "html", null, true);
            echo "\" alt=\"Image\">
    ";
        }
        // line 15
        echo "
    <p>
        <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partener_index");
        echo "\" class=\"btn btn-outline-primary\">Retour à la liste</a>
    </p>

    <p>
        <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partener_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["partener"]) || array_key_exists("partener", $context) ? $context["partener"] : (function () { throw new RuntimeError('Variable "partener" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)]), "html", null, true);
        echo "\" class=\"btn btn-primary\">Modifier</a>
    </p>

    ";
        // line 24
        echo twig_include($this->env, $context, "admin/partener/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/partener/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 24,  129 => 21,  122 => 17,  118 => 15,  112 => 13,  110 => 12,  105 => 10,  101 => 9,  97 => 8,  93 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout.html.twig' %}

{% block title %}{{ partener.name }}{% endblock %}

{% block content %}
    <h1>{{ partener.name }}</h1>
    <p>{{ partener.description }}</p>
    <p>Statut : {{ partener.status }}</p>
    <p>Url : {{ partener.url }}</p>
    <p>{{ partener.content }}</p>

    {% if partener.logo is not null %}
        <img src=\"{{ asset(partener.logo) }}\" alt=\"Image\">
    {% endif %}

    <p>
        <a href=\"{{ path('partener_index') }}\" class=\"btn btn-outline-primary\">Retour à la liste</a>
    </p>

    <p>
        <a href=\"{{ path('partener_edit', {'id': partener.id}) }}\" class=\"btn btn-primary\">Modifier</a>
    </p>

    {{ include('admin/partener/_delete_form.html.twig') }}
{% endblock %}
", "admin/partener/show.html.twig", "/Users/arnaudbassey/Documents/DWWM/Initiation symphony/dwm-blog-exam/templates/admin/partener/show.html.twig");
    }
}
