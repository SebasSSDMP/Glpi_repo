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

/* components/table.html.twig */
class __TwigTemplate_3aea82a9bdb69094e7508778f81be237 extends Template
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
        // line 32
        yield "
<div class=\"table-responsive card-table\">
   <table class=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("class", $context)) ? (Twig\Extension\CoreExtension::default(($context["class"] ?? null), "")) : ("")), "html", null, true);
        yield "\">
      <thead>
      ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["header_rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["header_row"]) {
            // line 37
            yield "         <tr>
            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["header_row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                // line 39
                yield "               ";
                if ( !is_iterable($context["header"])) {
                    // line 40
                    yield "                  ";
                    $context["header"] = ["content" => $context["header"]];
                    // line 41
                    yield "               ";
                }
                // line 42
                yield "               <th colspan=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["header"], "colspan", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["header"], "colspan", [], "any", false, false, false, 42), 1)) : (1)), "html", null, true);
                yield "\" style=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["header"], "style", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["header"], "style", [], "any", false, false, false, 42), "")) : ("")), "html", null, true);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["header"], "content", [], "any", false, false, false, 42);
                yield "</th>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            yield "         </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "      </thead>
      <tbody>
      ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 49
            yield "         <tr class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "class", [], "any", true, true, false, 49)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "class", [], "any", false, false, false, 49), "")) : ("")), "html", null, true);
            yield "\">
            ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "values", [], "any", false, false, false, 50));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 51
                yield "               ";
                if ( !is_iterable($context["value"])) {
                    // line 52
                    yield "                  ";
                    $context["value"] = ["content" => $context["value"]];
                    // line 53
                    yield "               ";
                }
                // line 54
                yield "               <td colspan=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["value"], "colspan", [], "any", true, true, false, 54)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["value"], "colspan", [], "any", false, false, false, 54), 1)) : (1)), "html", null, true);
                yield "\" class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["value"], "class", [], "any", true, true, false, 54)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["value"], "class", [], "any", false, false, false, 54), "")) : ("")), "html", null, true);
                yield "\" style=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["value"], "style", [], "any", true, true, false, 54)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["value"], "style", [], "any", false, false, false, 54), "")) : ("")), "html", null, true);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["value"], "content", [], "any", false, false, false, 54);
                yield "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            yield "         </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "      </tbody>
   </table>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/table.html.twig";
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
        return array (  135 => 58,  128 => 56,  113 => 54,  110 => 53,  107 => 52,  104 => 51,  100 => 50,  95 => 49,  91 => 48,  87 => 46,  80 => 44,  67 => 42,  64 => 41,  61 => 40,  58 => 39,  54 => 38,  51 => 37,  47 => 36,  42 => 34,  38 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/table.html.twig", "/var/www/html/glpi/templates/components/table.html.twig");
    }
}
