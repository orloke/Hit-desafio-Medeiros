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

/* @hit/header/blueheader.html.twig */
class __TwigTemplate_49b0b2ce15a0bc8f20091af585f38077 extends \Twig\Template
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
        // line 5
        echo "
  <!--HEADER-->
  ";
        // line 8
        echo "  <div class=\"row prd-bg py-2 \">

    <!--CONTAINER  -->
    
    <div class=\"container-header p-3 d-flex align-items-center gap-4\">

    <!--HAMBURGUER-->
  <div class=\"col-1 d-flex justify-content-end\">
    <button class=\"navbar-toggler first-button\"
      type=\"button\"
      data-mdb-toggle=\"collapse\"
      data-mdb-target=\"#navbarToggleExternalContent9\"
      aria-controls=\"navbarToggleExternalContent9\"
      aria-expanded=\"false\"
      aria-label=\"Toggle navigation\">
      <div class=\"animated-icon1\">
        <span></span><span></span><span></span>
      </div>
    </button>
    </div>

      ";
        // line 30
        echo "
      <div>
          <div class=\"logo-principal\">
            <a href=\"#\" target=\"_blank\">
              <img src=\"themes/desafio/img/logo.png \" alt=\"\">
            </a>
          </div>    
      </div>

      <div class=\"container-social d-flex align-items-center\">
          
        <!--REDES SOCIAIS  -->
        <div class=\"redes-sociais-menu d-flex align-items-center\">
              <div class=\"#\">
                  <a class=\"icons instagram-sup\" href=\"#\" target=\"_blank\">Instagram</a>
              </div>
              <div class=\"#\">
                  <a class=\"icons facebook-sup\" href=\"#\" target=\"_blank\">Facebook</a>
              </div>
              <div class=\"#\">
                  <a class=\"icons twitter-sup\" href=\"#\" target=\"_blank\">Twitter</a>
              </div>
        </div>          
      </div>  

    </div>
    </div>

  </div>";
    }

    public function getTemplateName()
    {
        return "@hit/header/blueheader.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 30,  43 => 8,  39 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@hit/header/blueheader.html.twig", "D:\\xampp\\htdocs\\ht\\drupal-9.4.6\\themes\\desafio\\templates\\header\\blueheader.html.twig");
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
