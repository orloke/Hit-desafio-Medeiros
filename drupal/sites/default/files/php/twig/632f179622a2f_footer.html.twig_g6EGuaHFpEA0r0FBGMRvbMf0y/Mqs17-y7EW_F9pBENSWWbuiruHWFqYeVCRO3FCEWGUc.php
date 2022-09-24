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

/* @hit/footer/footer.html.twig */
class __TwigTemplate_b9149b85d0b7bc4f2f81b47957fe6ca5 extends \Twig\Template
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
        echo "<div class=\"row align-items-center justify-content-center prd-bg prd-white\">
  <div class=\"col-lg-3 my-4 text-center logo-principal\">
    <a href=\"#\" target=\"_blank\">
      <img class=\"logo-prod\" src=\"themes/desafio/img/logo.png\" alt=\"\"/>
    </a>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@hit/footer/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  42 => 9,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@hit/footer/footer.html.twig", "D:\\xampp\\htdocs\\ht\\drupal-9.4.6\\themes\\desafio\\templates\\footer\\footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
