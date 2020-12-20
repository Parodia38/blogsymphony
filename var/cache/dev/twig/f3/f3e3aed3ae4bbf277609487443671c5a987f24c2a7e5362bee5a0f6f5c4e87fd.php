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

/* admin/partner/show.html.twig */
class __TwigTemplate_dd3825e8a802406c5d7e8ca61349088378cd3a256896377fa0beb7fa5188e2bf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/partner/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/partner/show.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/partner/show.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>
    <p>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 7, $this->source); })()), "description", [], "any", false, false, false, 7), "html", null, true);
        echo "</p>
    <p>Statut : ";
        // line 8
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 8, $this->source); })()), "status", [], "any", false, false, false, 8)) ? ("Publié") : ("Brouillon"));
        echo "</p>
    <p>Lien : ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 9, $this->source); })()), "url", [], "any", false, false, false, 9), "html", null, true);
        echo "</p>

    ";
        // line 11
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 11, $this->source); })()), "logo", [], "any", false, false, false, 11))) {
            // line 12
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 12, $this->source); })()), "logo", [], "any", false, false, false, 12)), "html", null, true);
            echo "\" alt=\"\" width=\"100\">
    ";
        }
        // line 14
        echo "
    <p>
        <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partner_index");
        echo "\" class=\"btn btn-outline-primary\">Retour à la liste</a>
    </p>

    <p>
        <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partner_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
        echo "\" class=\"btn btn-primary\">Modifier</a>
    </p>

    ";
        // line 23
        echo twig_include($this->env, $context, "admin/partner/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/partner/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 23,  125 => 20,  118 => 16,  114 => 14,  108 => 12,  106 => 11,  101 => 9,  97 => 8,  93 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout.html.twig' %}

{% block title %}{{ partner.name }}{% endblock %}

{% block content %}
    <h1>{{ partner.name }}</h1>
    <p>{{ partner.description }}</p>
    <p>Statut : {{ partner.status ? 'Publié' : 'Brouillon' }}</p>
    <p>Lien : {{ partner.url }}</p>

    {% if partner.logo is not null %}
        <img src=\"{{ asset(partner.logo) }}\" alt=\"\" width=\"100\">
    {% endif %}

    <p>
        <a href=\"{{ path('partner_index') }}\" class=\"btn btn-outline-primary\">Retour à la liste</a>
    </p>

    <p>
        <a href=\"{{ path('partner_edit', {'id': partner.id}) }}\" class=\"btn btn-primary\">Modifier</a>
    </p>

    {{ include('admin/partner/_delete_form.html.twig') }}
{% endblock %}
", "admin/partner/show.html.twig", "/Users/arnaudbassey/Documents/DWWM/Initiation symphony/dwm-blog-exam/templates/admin/partner/show.html.twig");
    }
}
