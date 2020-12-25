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

/* FrontEnd/hello.html.twig */
class __TwigTemplate_04e0638f67ad79372aa530db91bdbe0041c8c549aed1d75dba2b34f1a0f1c205 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "FrontEnd/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontEnd/hello.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontEnd/hello.html.twig"));

        $this->parent = $this->loadTemplate("FrontEnd/base.html.twig", "FrontEnd/hello.html.twig", 1);
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
        echo "\t<h1>Hello
\t\t";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "!</h1>

\t<div class=\"container\">
\t\t<div class=\"row justify-content-between\">
\t\t\t<div class=\"col-md-5 bg-info rounded p-2\">

\t\t\t\t<p class=\"btn btn-primary m-1\" onclick=\"moduleDetailes(1)\">Module1 Add h1 Text .</p>
\t\t\t\t<input id=\"module1\" type=\"text\" placeholder=\"Module 1\" class=\"form-control\" style=\"display:none;\" onkeyup=\"addModule(1);\"/>
\t\t\t\t<p class=\"btn btn-success m-1\" onclick=\"moduleDetailes(2)\">Module2 Add p Text</p>
\t\t\t\t<input id=\"module2\" type=\"text\" placeholder=\"Module 2\" class=\"form-control\" style=\"display:none;\" onkeyup=\"addModule(2);\"/>
\t\t\t\t<p class=\"btn btn-dark m-1\" onclick=\"moduleDetailes(3)\">Module3 Add li Text</p>
\t\t\t\t<input id=\"module3\" type=\"text\" placeholder=\"Module 3\" class=\"form-control\" style=\"display:none;\" onkeyup=\"addModule(3);\"/>

\t\t\t</div>
\t\t\t<div class=\"col-md-5 bg-success rounded\" style=\"minheight: 250px\" id=\"phone\"></div>
\t\t</div>


\t\t<script src=\"./js/module.js\"></script>


\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FrontEnd/hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'FrontEnd/base.html.twig' %}

{% block body %}
\t<h1>Hello
\t\t{{ name }}!</h1>

\t<div class=\"container\">
\t\t<div class=\"row justify-content-between\">
\t\t\t<div class=\"col-md-5 bg-info rounded p-2\">

\t\t\t\t<p class=\"btn btn-primary m-1\" onclick=\"moduleDetailes(1)\">Module1 Add h1 Text .</p>
\t\t\t\t<input id=\"module1\" type=\"text\" placeholder=\"Module 1\" class=\"form-control\" style=\"display:none;\" onkeyup=\"addModule(1);\"/>
\t\t\t\t<p class=\"btn btn-success m-1\" onclick=\"moduleDetailes(2)\">Module2 Add p Text</p>
\t\t\t\t<input id=\"module2\" type=\"text\" placeholder=\"Module 2\" class=\"form-control\" style=\"display:none;\" onkeyup=\"addModule(2);\"/>
\t\t\t\t<p class=\"btn btn-dark m-1\" onclick=\"moduleDetailes(3)\">Module3 Add li Text</p>
\t\t\t\t<input id=\"module3\" type=\"text\" placeholder=\"Module 3\" class=\"form-control\" style=\"display:none;\" onkeyup=\"addModule(3);\"/>

\t\t\t</div>
\t\t\t<div class=\"col-md-5 bg-success rounded\" style=\"minheight: 250px\" id=\"phone\"></div>
\t\t</div>


\t\t<script src=\"./js/module.js\"></script>


\t{% endblock %}
", "FrontEnd/hello.html.twig", "C:\\Users\\vrajo\\OneDrive\\Bureau\\granit\\symfony\\symfony\\applipro4\\symfony\\templates\\FrontEnd\\hello.html.twig");
    }
}
