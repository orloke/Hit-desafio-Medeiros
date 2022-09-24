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

/* themes/desafio/page--front.html.twig */
class __TwigTemplate_abad2f605c940c428171d584373edb84 extends \Twig\Template
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
        // line 10
        $this->loadTemplate("@hit/header/header.html.twig", "themes/desafio/page--front.html.twig", 10)->display($context);
        // line 11
        echo "
<main class= \"main-content\" data-content=\"intro\"> 
    <div class=\"lista-noticias-line\">
        <a class=\"lista-noticias\" href=\"./intro\" data-move-to=\"intro\">
            INTRODUÇÃO
        </a>
        <a  class=\"lista-noticias\" href=\"./contato\" data-move-to=\"contato\">
            CONTATO
        </a>
    </div>
    <div class=\"wrap\"> 
    ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "publicacoes", [], "any", false, false, true, 22)) {
            // line 23
            echo "    <section class=\"container\" id=\"intro\">
                <div class=\"section-container aos-init aos-animate\" data-aos=\"flip-down\" data-aos-easing=\"ease-out-cubic\" data-aos-duration=\"2000\">

                    <div class=\"acesso-links\">
                        <h3>Introdução</h3>
                    </div>
                    <div class=\"container-principal\">
                        ";
            // line 30
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "publicacoes", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "
                    </div>
                </div>
    </section>
            <hr class=\"gradiente\">
        ";
        }
        // line 36
        echo "
        <section class=\"container\" id=\"contato\">
                <div class=\"section-container aos-init aos-animate\" data-aos=\"flip-down\" data-aos-easing=\"ease-out-cubic\" data-aos-duration=\"2000\">
                    <div class=\"acesso-links\">
                        <h3>Contato</h3>
                    </div>
                    <div class=\"container-principal\">
                        <form>
                    <div class=\"forms\">
                            <div class=\"forms-input\">
                                <input type=\"name\" class=\"form-control\" id=\"name\" aria-describedby=\"nameHelp\" placeholder=\"Nome*\" required>
                            </div>
                            <div class=\"forms-input\">
                                <input type=\"email\" class=\"form-control\" id=\"Email\" aria-describedby=\"emailHelp\" placeholder=\"Email*\" required>
                            </div>
                        </div>    
                                <textarea class=\"form-control\" rows=\"5\" id=\"comment\" name=\"text\" placeholder=\"Mensagem*\"></textarea>
                                <button type=\"submit\" class=\"btn\">Enviar</button>
                        </form>
                    </div>
                </div>
        </section>
    </div>
</main>

  <a class=\"back2Top\" title=\"Voltar ao topo\" href=\"#\">&#10148;</a>
  ";
        // line 63
        echo "  ";
        $this->loadTemplate("@hit/footer/footer.html.twig", "themes/desafio/page--front.html.twig", 63)->display($context);
        // line 64
        echo "
<div>
";
    }

    public function getTemplateName()
    {
        return "themes/desafio/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 64,  106 => 63,  78 => 36,  69 => 30,  60 => 23,  58 => 22,  45 => 11,  43 => 10,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/desafio/page--front.html.twig", "D:\\xampp\\htdocs\\ht\\drupal-9.4.6\\themes\\desafio\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 10, "if" => 22);
        static $filters = array("escape" => 30);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
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
