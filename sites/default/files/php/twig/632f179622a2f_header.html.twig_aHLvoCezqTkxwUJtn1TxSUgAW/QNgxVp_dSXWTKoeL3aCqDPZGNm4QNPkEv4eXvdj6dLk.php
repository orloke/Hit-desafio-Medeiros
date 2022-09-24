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

/* @hit/header/header.html.twig */
class __TwigTemplate_628343757d6d690716c84c3f2ccca430 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "

";
        // line 9
        $this->loadTemplate("@hit/header/grayheader.html.twig", "@hit/header/header.html.twig", 9)->display($context);
        // line 10
        echo "
";
        // line 11
        $this->loadTemplate("@hit/header/blueheader.html.twig", "@hit/header/header.html.twig", 11)->display($context);
        // line 12
        echo "
";
        // line 13
        $this->loadTemplate("@hit/header/navbarheader.html.twig", "@hit/header/header.html.twig", 13)->display($context);
    }

    public function getTemplateName()
    {
        return "@hit/header/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  50 => 12,  48 => 11,  45 => 10,  43 => 9,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@hit/header/header.html.twig", "D:\\xampp\\htdocs\\ht\\drupal-9.4.6\\themes\\desafio\\templates\\header\\header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 9);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
