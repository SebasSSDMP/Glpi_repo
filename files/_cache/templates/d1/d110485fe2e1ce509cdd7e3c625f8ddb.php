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

/* components/itilobject/mainform_open.html.twig */
class __TwigTemplate_39b0d9b6ce3c8b0bee9e01556d5df218 extends Template
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
        $context["enctype"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 33)) ? ("multipart/form-data") : ("application/x-www-form-urlencoded"));
        // line 34
        $context["new_cls"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 34)) ? ("new-itil-object") : (""));
        // line 35
        yield "
";
        // line 36
        $context["form_path"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 36);
        // line 37
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 37)) {
            // line 38
            yield "   ";
            $context["form_path"] = ((($context["form_path"] ?? null) . "?id=") . (($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 38)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null));
        }
        // line 40
        yield "
";
        // line 41
        if (($context["selfservice"] ?? null)) {
            // line 42
            yield "   ";
            $context["form_path"] = $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/tracking.injector.php");
        }
        // line 44
        yield "
";
        // line 45
        $context["track_changes"] = "true";
        // line 46
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 46)) {
            // line 47
            yield "   ";
            $context["track_changes"] = "false";
        }
        // line 49
        yield "
<form method=\"POST\" action=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_path"] ?? null), "html", null, true);
        yield "\" enctype=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["enctype"] ?? null), "html", null, true);
        yield "\"
      data-track-changes=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["track_changes"] ?? null), "html", null, true);
        yield "\" id=\"itil-form\" class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["new_cls"] ?? null), "html", null, true);
        yield "\" data-submit-once>
   ";
        // line 52
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 52)) {
            // line 53
            yield "       <input type=\"hidden\" name=\"id\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 53)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["id"] ?? null) : null), "html", null, true);
            yield "\" />
   ";
        }
        // line 55
        yield "   <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\" />
   <input type=\"hidden\" name=\"_skip_default_actor\" value=\"1\" />

   ";
        // line 58
        if (array_key_exists("itiltemplate_key", $context)) {
            // line 59
            yield "      <input type=\"hidden\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itiltemplate_key"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "fields", [], "any", false, false, false, 59)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["id"] ?? null) : null), "html", null, true);
            yield "\" />
   ";
        }
        // line 61
        yield "   ";
        if (array_key_exists("predefined_fields", $context)) {
            // line 62
            yield "      <input type=\"hidden\" name=\"_predefined_fields\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["predefined_fields"] ?? null), "html", null, true);
            yield "\" />
   ";
        }
        // line 64
        yield "
   ";
        // line 65
        if (($context["selfservice"] ?? null)) {
            // line 66
            yield "      <input type=\"hidden\" name=\"_from_helpdesk\" value=\"1\" />
         ";
        }
        // line 69
        yield "
   ";
        // line 70
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "tickets_id", [], "array", true, true, false, 70) || CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_tickets_id", [], "array", true, true, false, 70))) {
            // line 71
            yield "      <input type=\"hidden\" name=\"_tickets_id\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "tickets_id", [], "array", true, true, false, 71) &&  !(null === (($__internal_compile_3 = ($context["params"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["tickets_id"] ?? null) : null)))) ? ((($__internal_compile_4 = ($context["params"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["tickets_id"] ?? null) : null)) : ((($__internal_compile_5 = ($context["params"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["_tickets_id"] ?? null) : null))), "html", null, true);
            yield "\" />
   ";
        }
        // line 73
        yield "
   ";
        // line 74
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "problems_id", [], "array", true, true, false, 74) || CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_problems_id", [], "array", true, true, false, 74))) {
            // line 75
            yield "      <input type=\"hidden\" name=\"_problems_id\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "problems_id", [], "array", true, true, false, 75) &&  !(null === (($__internal_compile_6 = ($context["params"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["problems_id"] ?? null) : null)))) ? ((($__internal_compile_7 = ($context["params"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["problems_id"] ?? null) : null)) : ((($__internal_compile_8 = ($context["params"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["_problems_id"] ?? null) : null))), "html", null, true);
            yield "\" />
   ";
        }
        // line 77
        yield "
   ";
        // line 78
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_add_fromitem", [], "array", true, true, false, 78)) {
            // line 79
            yield "      <input type=\"hidden\" name=\"_from_items_id\" value=\"";
            (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_from_items_id", [], "array", true, true, false, 79) &&  !(null === (($__internal_compile_9 = ($context["params"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["_from_items_id"] ?? null) : null)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_10 = ($context["params"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["_from_items_id"] ?? null) : null), "html", null, true)) : (yield 0));
            yield "\" />
      <input type=\"hidden\" name=\"_from_itemtype\" value=\"";
            // line 80
            (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_from_itemtype", [], "array", true, true, false, 80) &&  !(null === (($__internal_compile_11 = ($context["params"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["_from_itemtype"] ?? null) : null)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_12 = ($context["params"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["_from_itemtype"] ?? null) : null), "html", null, true)) : (yield ""));
            yield "\" />
   ";
        }
        // line 82
        yield "
   ";
        // line 83
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_promoted_fup_id", [], "array", true, true, false, 83) && ((($__internal_compile_13 = ($context["params"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["_promoted_fup_id"] ?? null) : null) > 0))) {
            // line 84
            yield "      <input type=\"hidden\" name=\"_promoted_fup_id\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_14 = ($context["params"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["_promoted_fup_id"] ?? null) : null), "html", null, true);
            yield "\" />
   ";
        }
        // line 86
        yield "   ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_promoted_task_id", [], "array", true, true, false, 86) && ((($__internal_compile_15 = ($context["params"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["_promoted_task_id"] ?? null) : null) > 0))) {
            // line 87
            yield "      <input type=\"hidden\" name=\"_promoted_task_id\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_16 = ($context["params"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["_promoted_task_id"] ?? null) : null), "html", null, true);
            yield "\" />
   ";
        }
        // line 89
        yield "   ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_skip_promoted_fields", [], "array", true, true, false, 89) && ((($__internal_compile_17 = ($context["params"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["_skip_promoted_fields"] ?? null) : null) > 0))) {
            // line 90
            yield "      <input type=\"hidden\" name=\"_skip_promoted_fields\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_18 = ($context["params"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["_skip_promoted_fields"] ?? null) : null), "html", null, true);
            yield "\" />
   ";
        }
        // line 92
        yield "
   ";
        // line 94
        yield "   ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_projecttasks_id", [], "array", true, true, false, 94) && ((($__internal_compile_19 = ($context["params"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["_projecttasks_id"] ?? null) : null) > 0))) {
            // line 95
            yield "      <input type=\"hidden\" name=\"_projecttasks_id\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_20 = ($context["params"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["_projecttasks_id"] ?? null) : null), "html", null, true);
            yield "\" />
   ";
        }
        // line 97
        yield "
   ";
        // line 98
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_tasktemplates_id", [], "array", true, true, false, 98) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (($__internal_compile_21 = ($context["params"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["_tasktemplates_id"] ?? null) : null)) > 0))) {
            // line 99
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($__internal_compile_22 = ($context["params"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["_tasktemplates_id"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tasktemplate_id"]) {
                // line 100
                yield "         <input type=\"hidden\" name=\"_tasktemplates_id[]\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["tasktemplate_id"], "html", null, true);
                yield "\" />
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tasktemplate_id'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            yield "   ";
        }
        // line 103
        yield "
   ";
        // line 104
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_hidden_fields", [], "array", true, true, false, 104) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (($__internal_compile_23 = ($context["params"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["_hidden_fields"] ?? null) : null)) > 0))) {
            // line 105
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($__internal_compile_24 = ($context["params"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["_hidden_fields"] ?? null) : null));
            foreach ($context['_seq'] as $context["field_name"] => $context["field_value"]) {
                // line 106
                yield "         <input type=\"hidden\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field_name"], "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field_value"], "html", null, true);
                yield "\" />
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['field_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            yield "   ";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/itilobject/mainform_open.html.twig";
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
        return array (  255 => 108,  244 => 106,  239 => 105,  237 => 104,  234 => 103,  231 => 102,  222 => 100,  217 => 99,  215 => 98,  212 => 97,  206 => 95,  203 => 94,  200 => 92,  194 => 90,  191 => 89,  185 => 87,  182 => 86,  176 => 84,  174 => 83,  171 => 82,  166 => 80,  161 => 79,  159 => 78,  156 => 77,  150 => 75,  148 => 74,  145 => 73,  139 => 71,  137 => 70,  134 => 69,  130 => 66,  128 => 65,  125 => 64,  119 => 62,  116 => 61,  108 => 59,  106 => 58,  99 => 55,  93 => 53,  91 => 52,  85 => 51,  79 => 50,  76 => 49,  72 => 47,  70 => 46,  68 => 45,  65 => 44,  61 => 42,  59 => 41,  56 => 40,  52 => 38,  50 => 37,  48 => 36,  45 => 35,  43 => 34,  41 => 33,  38 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/mainform_open.html.twig", "/var/www/html/glpi/templates/components/itilobject/mainform_open.html.twig");
    }
}
