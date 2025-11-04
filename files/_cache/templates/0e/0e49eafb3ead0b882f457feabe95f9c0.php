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

/* components/form/modals_macros.html.twig */
class __TwigTemplate_e495d3e8933dd0d1733f13abcafb5493 extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        yield "
";
        // line 50
        yield "
";
        return; yield '';
    }

    // line 33
    public function macro_confirm($__modal_title__ = "", $__modal_body__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "modal_title" => $__modal_title__,
            "modal_body" => $__modal_body__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 34
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["buttons" => ["cancel" => ["label" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 37
($context["options"] ?? null), "cancel_label", [], "array", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_0 = ($context["options"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["cancel_label"] ?? null) : null), _x("button", "Cancel"))) : (_x("button", "Cancel"))), "event" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 38
($context["options"] ?? null), "cancel_event", [], "array", true, true, false, 38)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_1 = ($context["options"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["cancel_event"] ?? null) : null), "")) : (""))], "confirm" => ["label" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 41
($context["options"] ?? null), "confirm_label", [], "array", true, true, false, 41)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_2 = ($context["options"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["confirm_label"] ?? null) : null), _x("button", "Ok"))) : (_x("button", "Ok"))), "event" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 42
($context["options"] ?? null), "confirm_event", [], "array", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_3 = ($context["options"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["confirm_event"] ?? null) : null), "")) : ("")), "class" => "ms-auto"]]],             // line 46
($context["options"] ?? null));
            // line 47
            yield "
   ";
            // line 48
            yield CoreExtension::callMacro($macros["_self"], "macro_modal", [($context["modal_title"] ?? null), ($context["modal_body"] ?? null), ($context["options"] ?? null)], 48, $context, $this->getSourceContext());
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 51
    public function macro_modal($__modal_title__ = null, $__modal_body__ = null, $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "modal_title" => $__modal_title__,
            "modal_body" => $__modal_body__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 52
            yield "   ";
            $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
            // line 53
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => ("modal" .             // line 54
($context["rand"] ?? null)), "rand" =>             // line 55
($context["rand"] ?? null), "buttons" => [], "modal_classes" => ""],             // line 58
($context["options"] ?? null));
            // line 59
            yield "
   <div class=\"modal fade ";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "modal_classes", [], "any", false, false, false, 60), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 60), "html", null, true);
            yield "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
         <div class=\"modal-content\">
            <div class=\"modal-header\">
               <h5 class=\"modal-title\">";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["modal_title"] ?? null), "html", null, true);
            yield "</h5>
               <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Close"), "html", null, true);
            yield "\"></button>
            </div>
            <div class=\"modal-body overflow-auto\">
               ";
            // line 68
            yield ($context["modal_body"] ?? null);
            yield "
            </div>
            <div class=\"modal-footer\">
               ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($__internal_compile_4 = ($context["options"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["buttons"] ?? null) : null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 72
                yield "                  <button type=\"button\" class=\"btn ";
                yield (((($__internal_compile_5 = ($context["options"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["primary"] ?? null) : null)) ? ("btn-primary") : ("btn-outline-secondary"));
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["button"], "class", [], "array", true, true, false, 72)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_6 = $context["button"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["class"] ?? null) : null), "")) : ("")), "html", null, true);
                yield "\"
                          id=\"";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["button"], "id", [], "array", true, true, false, 73)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_7 = $context["button"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["id"] ?? null) : null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 73) . "_btn_") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 73)))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 73) . "_btn_") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 73)))), "html", null, true);
                yield "\" data-bs-dismiss=\"modal\">
                     ";
                // line 74
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["button"], "label", [], "array", true, true, false, 74)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_8 = $context["button"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["label"] ?? null) : null), "")) : (""));
                yield "
                  </button>
               ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            yield "            </div>
         </div>
      </div>
   </div>
   <script>
      \$(function () {
         ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($__internal_compile_9 = ($context["options"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["buttons"] ?? null) : null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 84
                yield "         \$('#";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 84), "html", null, true);
                yield "').on('click', '#";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["button"], "id", [], "array", true, true, false, 84)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_10 = $context["button"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["id"] ?? null) : null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 84) . "_btn_") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 84)))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 84) . "_btn_") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 84)))), "html", null, true);
                yield "', function (event) {
            ";
                // line 85
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["button"], "event", [], "array", true, true, false, 85)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_11 = $context["button"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["event"] ?? null) : null), "return true;")) : ("return true;"));
                yield "
         });
         ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            yield "      });
   </script>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/form/modals_macros.html.twig";
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
        return array (  226 => 88,  209 => 85,  202 => 84,  185 => 83,  177 => 77,  160 => 74,  156 => 73,  149 => 72,  132 => 71,  126 => 68,  120 => 65,  116 => 64,  107 => 60,  104 => 59,  102 => 58,  101 => 55,  100 => 54,  98 => 53,  95 => 52,  81 => 51,  73 => 48,  70 => 47,  68 => 46,  67 => 42,  66 => 41,  65 => 38,  64 => 37,  62 => 34,  48 => 33,  42 => 50,  39 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/form/modals_macros.html.twig", "/var/www/html/glpi/templates/components/form/modals_macros.html.twig");
    }
}
