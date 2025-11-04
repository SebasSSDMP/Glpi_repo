<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @glpiinventory/submenu.html.twig */
class __TwigTemplate_c1f743ca6bf9f8665b6d97184a4312a5 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        yield "   <nav class=\"rounded navbar navbar-dark justify-content-center navbar-expand-lg mt-n8 mb-3 rounded\" id=\"fusinv_navbar\">
      <ul class=\"navbar-nav\">
         ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["menu"] ?? null));
        foreach ($context['_seq'] as $context["first_lvl_key"] => $context["first_lvl"]) {
            // line 34
            yield "            <li class=\"nav-item dropdown mx-3\">
               <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["first_lvl_key"], "html", null, true);
            yield "_menu\"
                  role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" title=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_0 = $context["first_lvl"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["name"] ?? null) : null), "html", null, true);
            yield "\">
                  ";
            // line 37
            if (Twig\Extension\CoreExtension::length($this->env->getCharset(), (($__internal_compile_1 = $context["first_lvl"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["pic"] ?? null) : null))) {
                // line 38
                yield "                     <i class=\"p-1 ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_2 = $context["first_lvl"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["pic"] ?? null) : null), "html", null, true);
                yield "\"></i>
                  ";
            }
            // line 40
            yield "                  <span class=\"menu-label\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_3 = $context["first_lvl"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["name"] ?? null) : null), "html", null, true);
            yield "</span>
               </a>
               <ul class=\"dropdown-menu\" aria-labelledby=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["first_lvl_key"], "html", null, true);
            yield "_menu\">
                  ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($__internal_compile_4 = $context["first_lvl"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["children"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["second_lvl"]) {
                // line 44
                yield "                     <li>
                        <a class=\"dropdown-item text-wrap\" href=\"";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_5 = $context["second_lvl"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["link"] ?? null) : null), "html", null, true);
                yield "\">
                           ";
                // line 46
                if (Twig\Extension\CoreExtension::length($this->env->getCharset(), (($__internal_compile_6 = $context["second_lvl"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["pic"] ?? null) : null))) {
                    // line 47
                    yield "                              <i class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_7 = $context["second_lvl"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["pic"] ?? null) : null), "html", null, true);
                    yield "\"></i>
                           ";
                }
                // line 49
                yield "                           <span>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_8 = $context["second_lvl"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["name"] ?? null) : null), "html", null, true);
                yield "</span>
                        </a>
                     </li>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['second_lvl'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            yield "               </ul>
            </li>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['first_lvl_key'], $context['first_lvl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "      </ul>
   </nav>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@glpiinventory/submenu.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  113 => 56,  105 => 53,  94 => 49,  88 => 47,  86 => 46,  82 => 45,  79 => 44,  75 => 43,  71 => 42,  65 => 40,  59 => 38,  57 => 37,  53 => 36,  49 => 35,  46 => 34,  42 => 33,  38 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "@glpiinventory/submenu.html.twig", "/var/www/html/glpi/marketplace/glpiinventory/templates/submenu.html.twig");
    }
}
