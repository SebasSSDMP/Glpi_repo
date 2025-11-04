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

/* components/itilobject/fields/status.html.twig */
class __TwigTemplate_cc0b28152b1adf70407f51ef5ea2fe22 extends Template
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
";
        // line 33
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/fields/status.html.twig", 33)->unwrap();
        // line 34
        yield "
";
        // line 35
        if (($context["canupdate"] ?? null)) {
            // line 36
            yield "   ";
            $context["status_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 37
                yield "      ";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "dropdownStatus", [Twig\Extension\CoreExtension::merge(["value" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 38
($context["item"] ?? null), "input", [], "any", false, true, false, 38), "status", [], "array", true, true, false, 38)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "input", [], "any", false, true, false, 38)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["status"] ?? null) : null), (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 38)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["status"] ?? null) : null))) : ((($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 38)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["status"] ?? null) : null))), "value_calculation" => (($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source,                 // line 39
($context["item"] ?? null), "fields", [], "any", false, false, false, 39)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["status"] ?? null) : null), "showtype" => "allowed", "width" => "100%", "display" => false],                 // line 43
($context["field_options"] ?? null))], "method", false, false, false, 37);
                yield "

      ";
                // line 45
                $context["validation_class"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getValidationClassInstance", [], "method", false, false, false, 45);
                // line 46
                yield "      ";
                if ( !(null === ($context["validation_class"] ?? null))) {
                    // line 47
                    yield "         ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["validation_class"] ?? null), "alertValidation", [($context["item"] ?? null), "status"], "method", false, false, false, 47), "html", null, true);
                    yield "
      ";
                }
                // line 49
                yield "
      ";
                // line 50
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/pending_reasons_messages.html.twig", ["display_for_parent" => true]);
                // line 52
                yield "
   ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
        } else {
            // line 55
            yield "   ";
            $context["field_options"] = Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["center" => true]);
            // line 56
            yield "   ";
            $context["status_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 57
                yield "      ";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getStatusIcon", [(($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 57)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["status"] ?? null) : null)], "method", false, false, false, 57);
                yield "
      ";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getStatus", [(($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 58)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["status"] ?? null) : null)], "method", false, false, false, 58), "html", null, true);
                yield "

      ";
                // line 60
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canReopen", [], "method", false, false, false, 60)) {
                    // line 61
                    yield "         <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getLinkURL", [], "method", false, false, false, 61), "html", null, true);
                    yield "&amp;_openfollowup=1\"
            class=\"btn btn-ghost-secondary\">
            <i class=\"far fa-folder-open\"></i>
            <span>";
                    // line 64
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Reopen"), "html", null, true);
                    yield "</span>
         </a>
      ";
                }
                // line 67
                yield "   ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
        }
        // line 69
        yield "
";
        // line 70
        yield CoreExtension::callMacro($macros["fields"], "macro_field", ["status",         // line 72
($context["status_field"] ?? null), __("Status"),         // line 74
($context["field_options"] ?? null)], 70, $context, $this->getSourceContext());
        // line 75
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/itilobject/fields/status.html.twig";
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
        return array (  125 => 75,  123 => 74,  122 => 72,  121 => 70,  118 => 69,  113 => 67,  107 => 64,  100 => 61,  98 => 60,  93 => 58,  88 => 57,  85 => 56,  82 => 55,  76 => 52,  74 => 50,  71 => 49,  65 => 47,  62 => 46,  60 => 45,  55 => 43,  54 => 39,  53 => 38,  51 => 37,  48 => 36,  46 => 35,  43 => 34,  41 => 33,  38 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/fields/status.html.twig", "/var/www/html/glpi/templates/components/itilobject/fields/status.html.twig");
    }
}
