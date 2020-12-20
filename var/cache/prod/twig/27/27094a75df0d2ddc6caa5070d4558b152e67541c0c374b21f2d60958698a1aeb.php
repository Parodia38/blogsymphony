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

/* site/contact.html.twig */
class __TwigTemplate_ac868d90b0131d104cd427966d54c538e79055f7d236d1a8e38239a2b0f3e1c9 extends Template
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
        return "site/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("site/layout.html.twig", "site/contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Contact";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1>Contact</h1>

    ";
        // line 8
        $this->loadTemplate("utils/_flash.html.twig", "site/contact.html.twig", 8)->display($context);
        // line 9
        echo "
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["contactForm"] ?? null), 'form_start');
        echo "
        <div class=\"row\">
            <div class=\"col-6\">
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contactForm"] ?? null), "name", [], "any", false, false, false, 13), 'row');
        echo "
            </div>
            <div class=\"col-6\">
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contactForm"] ?? null), "email", [], "any", false, false, false, 16), 'row');
        echo "
            </div>
        </div>

        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contactForm"] ?? null), "object", [], "any", false, false, false, 20), 'row');
        echo "
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contactForm"] ?? null), "message", [], "any", false, false, false, 21), 'row');
        echo "
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contactForm"] ?? null), "rgpd", [], "any", false, false, false, 22), 'row');
        echo "

        <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>

    ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["contactForm"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "site/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 26,  94 => 22,  90 => 21,  86 => 20,  79 => 16,  73 => 13,  67 => 10,  64 => 9,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "site/contact.html.twig", "/Users/arnaudbassey/Documents/Ecole/WebTech/PHP-Symfony/webtech-php-code/ArnaudBassey-blog/templates/site/contact.html.twig");
    }
}
