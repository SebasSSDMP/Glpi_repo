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

/* components/itilobject/fields/priority_matrix.html.twig */
class __TwigTemplate_b8bef0c67ea582af433fb8c76b43e1a2 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/fields/priority_matrix.html.twig", 33)->unwrap();
        // line 34
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 35
        yield "
";
        // line 36
        $context["urgency_options"] = Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["disabled" =>  !(        // line 37
($context["canupdate"] ?? null) || ($context["can_requester"] ?? null))]);
        // line 39
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", false, false, false, 39), "isMandatoryField", ["urgency"], "method", false, false, false, 39)) {
            // line 40
            yield "   ";
            $context["urgency_options"] = Twig\Extension\CoreExtension::merge(($context["urgency_options"] ?? null), ["required" => true]);
        }
        // line 44
        yield "
";
        // line 45
        yield CoreExtension::callMacro($macros["fields"], "macro_field", ["urgency", CoreExtension::getAttribute($this->env, $this->source,         // line 47
($context["item"] ?? null), "dropdownUrgency", [Twig\Extension\CoreExtension::merge(["value" => (($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source,         // line 48
($context["item"] ?? null), "fields", [], "any", false, false, false, 48)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["urgency"] ?? null) : null), "width" => "100%", "display" => false, "rand" =>         // line 51
($context["rand"] ?? null)],         // line 52
($context["urgency_options"] ?? null))], "method", false, false, false, 47), __("Urgency"),         // line 54
($context["field_options"] ?? null)], 45, $context, $this->getSourceContext());
        // line 55
        yield "

";
        // line 57
        $context["impact_options"] = ($context["field_options"] ?? null);
        // line 58
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", false, false, false, 58), "isMandatoryField", ["impact"], "method", false, false, false, 58)) {
            // line 59
            yield "   ";
            $context["impact_options"] = Twig\Extension\CoreExtension::merge(($context["impact_options"] ?? null), ["required" => true]);
        }
        // line 63
        yield "
";
        // line 64
        yield CoreExtension::callMacro($macros["fields"], "macro_field", ["impact", CoreExtension::getAttribute($this->env, $this->source,         // line 66
($context["item"] ?? null), "dropdownImpact", [Twig\Extension\CoreExtension::merge(["value" => (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source,         // line 67
($context["item"] ?? null), "fields", [], "any", false, false, false, 67)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["impact"] ?? null) : null), "width" => "100%", "display" => false, "rand" =>         // line 70
($context["rand"] ?? null)],         // line 71
($context["impact_options"] ?? null))], "method", false, false, false, 66), __("Impact"),         // line 73
($context["field_options"] ?? null)], 64, $context, $this->getSourceContext());
        // line 74
        yield "

";
        // line 76
        $context["priority_options"] = Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["disabled" =>  !        // line 77
($context["canpriority"] ?? null), "withmajor" => true]);
        // line 80
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", false, false, false, 80), "isMandatoryField", ["priority"], "method", false, false, false, 80)) {
            // line 81
            yield "   ";
            $context["priority_options"] = Twig\Extension\CoreExtension::merge(($context["priority_options"] ?? null), ["required" => true]);
        }
        // line 85
        yield "
";
        // line 86
        yield CoreExtension::callMacro($macros["fields"], "macro_field", ["priority", CoreExtension::getAttribute($this->env, $this->source,         // line 88
($context["item"] ?? null), "dropdownPriority", [Twig\Extension\CoreExtension::merge(["value" => (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source,         // line 89
($context["item"] ?? null), "fields", [], "any", false, false, false, 89)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["priority"] ?? null) : null), "width" => "100%", "display" => false, "rand" =>         // line 92
($context["rand"] ?? null)], Twig\Extension\CoreExtension::merge(        // line 93
($context["field_options"] ?? null), ($context["priority_options"] ?? null)))], "method", false, false, false, 88), __("Priority"),         // line 95
($context["field_options"] ?? null)], 86, $context, $this->getSourceContext());
        // line 96
        yield "

<script type=\"text/javascript\">
\$(function() {
   \$('#dropdown_urgency";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield ", #dropdown_impact";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').on('change.select2', function (e) {
      \$.ajax({
         url: \"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/priority.php"), "html", null, true);
        yield "\",
         datatype: 'json',
         data: {
            'urgency': \$('#dropdown_urgency";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').select2('data') ? \$('#dropdown_urgency";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').select2('data')[0].id : 0,
            'impact':  \$('#dropdown_impact";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').select2('data') ? \$('#dropdown_impact";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').select2('data')[0].id : 0,
            '_predefined_fields':  \$('input[name=\"_predefined_fields\"]').val(),
            'getJson': true,
         }
      }).done(function(data) {
         \$('#dropdown_priority";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').val(data.priority);
         \$('#dropdown_priority";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').trigger('change');
      });
   })
});
</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/itilobject/fields/priority_matrix.html.twig";
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
        return array (  151 => 112,  147 => 111,  137 => 106,  131 => 105,  125 => 102,  118 => 100,  112 => 96,  110 => 95,  109 => 93,  108 => 92,  107 => 89,  106 => 88,  105 => 86,  102 => 85,  98 => 81,  96 => 80,  94 => 77,  93 => 76,  89 => 74,  87 => 73,  86 => 71,  85 => 70,  84 => 67,  83 => 66,  82 => 64,  79 => 63,  75 => 59,  73 => 58,  71 => 57,  67 => 55,  65 => 54,  64 => 52,  63 => 51,  62 => 48,  61 => 47,  60 => 45,  57 => 44,  53 => 40,  51 => 39,  49 => 37,  48 => 36,  45 => 35,  43 => 34,  41 => 33,  38 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/fields/priority_matrix.html.twig", "/var/www/html/glpi/templates/components/itilobject/fields/priority_matrix.html.twig");
    }
}
