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

/* components/itilobject/layout.html.twig */
class __TwigTemplate_2881ce3b45bc554c2d77ebcca7a1a716 extends Template
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
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 34
        $context["main_rand"] = ($context["rand"] ?? null);
        // line 35
        yield "
";
        // line 36
        $context["itil_layout"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("itil_layout", true);
        // line 37
        $context["is_collapsed"] = ((($__internal_compile_0 = ($context["itil_layout"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["collapsed"] ?? null) : null) == "true");
        // line 38
        $context["is_expanded"] = ((($__internal_compile_1 = ($context["itil_layout"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["expanded"] ?? null) : null) == "true");
        // line 39
        $context["collapsed_cls"] = ((($context["is_collapsed"] ?? null)) ? ("right-collapsed") : (""));
        // line 40
        $context["expanded_cls"] = (((($context["is_expanded"] ?? null) == "true")) ? ("right-expanded") : (""));
        // line 41
        yield "
";
        // line 42
        $context["left_regular_cls"] = "col-lg-8";
        // line 43
        $context["right_regular_cls"] = "col-lg-4";
        // line 44
        yield "
";
        // line 45
        $context["left_expanded_cls"] = "col-xl-5 col-lg-6";
        // line 46
        $context["right_expanded_cls"] = "col-xl-7 col-lg-6";
        // line 47
        yield "
";
        // line 48
        $context["left_side_cls"] = ($context["left_regular_cls"] ?? null);
        // line 49
        $context["right_side_cls"] = ($context["right_regular_cls"] ?? null);
        // line 50
        if (($context["is_expanded"] ?? null)) {
            // line 51
            yield "    ";
            $context["left_side_cls"] = ($context["left_expanded_cls"] ?? null);
            // line 52
            yield "    ";
            $context["right_side_cls"] = ($context["right_expanded_cls"] ?? null);
        }
        // line 54
        yield "

<div id=\"itil-object-container\" class=\"mt-n1 ";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["collapsed_cls"] ?? null), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["expanded_cls"] ?? null), "html", null, true);
        yield "\">

   ";
        // line 58
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 58) &&  !(($__internal_compile_2 = ($context["params"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["template_preview"] ?? null) : null))) {
            // line 59
            yield "      ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/mainform_open.html.twig");
            yield "
   ";
        }
        // line 61
        yield "
   <div class=\"row d-flex flex-column alin-items-stretch itil-object\">
      ";
        // line 63
        $context["is_timeline_reversed"] = ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("timeline_order") == Twig\Extension\CoreExtension::constant("CommonITILObject::TIMELINE_ORDER_REVERSE"));
        // line 64
        yield "      ";
        $context["fl_direction"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 64) || ($context["is_timeline_reversed"] ?? null))) ? ("flex-column") : ("flex-column-reverse"));
        // line 65
        yield "      <div class=\"itil-left-side col-12 ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["left_side_cls"] ?? null), "html", null, true);
        yield " order-last order-lg-first pt-2 pe-2 pe-lg-4 d-flex ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fl_direction"] ?? null), "html", null, true);
        yield " border-top border-4\">
         ";
        // line 66
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 66)) {
            // line 67
            yield "            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/new_form.html.twig");
            yield "
         ";
        } else {
            // line 69
            yield "            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/timeline.html.twig");
            yield "
         ";
        }
        // line 71
        yield "      </div>
      <div class=\"itil-right-side col-12 ";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["right_side_cls"] ?? null), "html", null, true);
        yield " mt-0 mt-lg-n1 card-footer p-0 rounded-0\">
         ";
        // line 73
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 73)) {
            // line 74
            yield "            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/mainform_open.html.twig");
            yield "
         ";
        }
        // line 76
        yield "         ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/fields_panel.html.twig");
        yield "
         ";
        // line 77
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 77)) {
            // line 78
            yield "            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/mainform_close.html.twig");
            yield "
         ";
        }
        // line 80
        yield "      </div>
   </div>

   ";
        // line 83
        if ( !(($__internal_compile_3 = ($context["params"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["template_preview"] ?? null) : null)) {
            // line 84
            yield "      ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/footer.html.twig");
            yield "
   ";
        }
        // line 86
        yield "
   ";
        // line 87
        if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 87) &&  !(($__internal_compile_4 = ($context["params"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["template_preview"] ?? null) : null))) {
            // line 88
            yield "      ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/mainform_close.html.twig");
            yield "
   ";
        }
        // line 90
        yield "
</div>

";
        // line 93
        if (($context["ticket_ticket"] ?? null)) {
            // line 94
            yield "   ";
            // line 95
            yield "   <form method=\"POST\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ticket_ticket"] ?? null), "getFormURL", [], "method", false, false, false, 95), "html", null, true);
            yield "\" class=\"d-none\" id=\"linked_tickets_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["main_rand"] ?? null), "html", null, true);
            yield "\" data-submit-once>
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\" />
      <input type=\"hidden\" name=\"purge\" value=\"1\" />
      <input type=\"hidden\" name=\"tickets_id\" value=\"";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 98)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["id"] ?? null) : null), "html", null, true);
            yield "\" />
   </form>
";
        }
        // line 101
        yield "
";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["requester", "observer", "assign"]);
        foreach ($context['_seq'] as $context["_key"] => $context["actortype"]) {
            // line 104
            yield "   <form method=\"POST\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 104), "html", null, true);
            yield "\" class=\"d-none\" id=\"addme_as_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["actortype"], "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["main_rand"] ?? null), "html", null, true);
            yield "\" data-submit-once>
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\" />
      <input type=\"hidden\" name=\"addme_as_actor\" value=\"1\" />
      <input type=\"hidden\" name=\"actortype\" value=\"";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["actortype"], "html", null, true);
            yield "\" />
   </form>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actortype'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        yield "
<form name=\"massaction_";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" id=\"massaction_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" method=\"post\"
      action=\"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/massiveaction.php"), "html", null, true);
        yield "\" data-submit-once>
   <div id=\"massive_container_";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\"></div>
   <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\" />
</form>

<script type=\"text/javascript\">
\$(function() {
   \$(document).on(\"click\", \".switch-panel-width\", function() {
       if (\$('#itil-object-container').hasClass('right-collapsed')) {
           \$('#itil-object-container').removeClass('right-collapsed');
       } else if (\$('.itil-left-side').hasClass(\"";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["left_regular_cls"] ?? null), "html", null, true);
        yield "\")) {
         // Expand right-side panel
         \$('#itil-object-container').addClass('right-expanded');
         // Left side
         \$('.itil-left-side').removeClass(\"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["left_regular_cls"] ?? null), "html", null, true);
        yield "\").addClass(\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["left_expanded_cls"] ?? null), "html", null, true);
        yield "\");
         \$('.itil-footer .timeline-buttons').removeClass(\"";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["left_regular_cls"] ?? null), "html", null, true);
        yield "\").addClass(\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["left_expanded_cls"] ?? null), "html", null, true);
        yield "\");
         // Right side
         \$('.itil-footer .form-buttons').removeClass('col-lg').addClass(\"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["right_expanded_cls"] ?? null), "html", null, true);
        yield "\");
         \$('.itil-right-side').removeClass(\"";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["right_regular_cls"] ?? null), "html", null, true);
        yield "\").addClass(\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["right_expanded_cls"] ?? null), "html", null, true);
        yield "\");
         // Switcher buttons
         \$('.switch-panel-width i.fas').removeClass('fa-caret-left').addClass('fa-caret-right');
         \$('.itil-right-side .accordion-body:not(.accordion-actors).row .col-12').removeClass('col-12').addClass('col-sm-6');
         \$('#actors .col-12').removeClass('col-12').addClass('col-sm-4');
      } else {
         // Decrease right-side panel
         \$('#itil-object-container').removeClass('right-expanded');
         // Left side
         \$('.itil-left-side').removeClass(\"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["left_expanded_cls"] ?? null), "html", null, true);
        yield "\").addClass(\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["left_regular_cls"] ?? null), "html", null, true);
        yield "\");
         \$('.itil-footer .timeline-buttons').removeClass(\"";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["left_expanded_cls"] ?? null), "html", null, true);
        yield "\").addClass(\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["left_regular_cls"] ?? null), "html", null, true);
        yield "\");
         // Right side
         \$('.itil-footer .form-buttons').removeClass(\"";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["right_expanded_cls"] ?? null), "html", null, true);
        yield "\").addClass('col-lg');
         \$('.itil-right-side').removeClass(\"";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["right_expanded_cls"] ?? null), "html", null, true);
        yield "\").addClass(\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["right_regular_cls"] ?? null), "html", null, true);
        yield "\");
         // Switcher buttons
         \$('.switch-panel-width i.fas').removeClass('fa-caret-right').addClass('fa-caret-left');
         \$('.itil-right-side .accordion-body:not(.accordion-actors).row .col-sm-6').removeClass('col-sm-6').addClass('col-12');
         \$('#actors .col-sm-4').removeClass('col-sm-4').addClass('col-12');
      }

      saveFieldPanelState();
   });

    \$(document).on(\"click\", \".collapse-panel\", function() {
       \$('#itil-object-container').addClass('right-collapsed');

        // Hide all accordion item
        \$('#itil-data .accordion-collapse').removeClass('show');
        \$('#itil-data .accordion-button').addClass('collapsed');

       saveFieldPanelState();
    });

    \$(document).on(\"click\", \".right-collapsed .itil-right-side\", function(event) {
        \$('#itil-object-container').removeClass('right-collapsed');
        saveFieldPanelState();
    });

    var myCollapsible = document.getElementById('itil-data')
    myCollapsible.addEventListener('shown.bs.collapse', function () {
        saveFieldPanelState();
    });
    myCollapsible.addEventListener('hidden.bs.collapse', function () {
        saveFieldPanelState();
    });

    var itil_layout = {
        collapsed: false,
        expanded: false,
        items: {}
    };

    var saveFieldPanelState = function() {
        itil_layout.collapsed = \$('#itil-object-container').hasClass('right-collapsed');
        itil_layout.expanded  = \$('#itil-object-container').hasClass('right-expanded');

        \$('#itil-data .accordion-collapse').each(function() {
            var item_shown = \$(this).hasClass('show');
            var item_id    = \$(this).attr('id');

            itil_layout.items[item_id] = item_shown;
        });

        \$.ajax({
            url: CFG_GLPI.root_doc + '/ajax/itillayout.php',
            type: 'POST',
            datatype: \"json\",
            data: {
                'itil_layout': itil_layout
            }
        });
    }

    var restoreFieldPanelState = function() {
        \$.each(field_panel_state.items, function(item_id, item_shown) {
            if (item_shown) {
                \$('#' + item_id).addClass('show');
            } else {
                \$('#' + item_id).removeClass('show');
            }
        });
    }
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
        return "components/itilobject/layout.html.twig";
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
        return array (  329 => 143,  325 => 142,  318 => 140,  312 => 139,  298 => 130,  294 => 129,  287 => 127,  281 => 126,  274 => 122,  263 => 114,  259 => 113,  255 => 112,  249 => 111,  246 => 110,  237 => 107,  232 => 105,  223 => 104,  219 => 103,  216 => 101,  210 => 98,  205 => 96,  198 => 95,  196 => 94,  194 => 93,  189 => 90,  183 => 88,  181 => 87,  178 => 86,  172 => 84,  170 => 83,  165 => 80,  159 => 78,  157 => 77,  152 => 76,  146 => 74,  144 => 73,  140 => 72,  137 => 71,  131 => 69,  125 => 67,  123 => 66,  116 => 65,  113 => 64,  111 => 63,  107 => 61,  101 => 59,  99 => 58,  92 => 56,  88 => 54,  84 => 52,  81 => 51,  79 => 50,  77 => 49,  75 => 48,  72 => 47,  70 => 46,  68 => 45,  65 => 44,  63 => 43,  61 => 42,  58 => 41,  56 => 40,  54 => 39,  52 => 38,  50 => 37,  48 => 36,  45 => 35,  43 => 34,  41 => 33,  38 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/layout.html.twig", "/var/www/html/glpi/templates/components/itilobject/layout.html.twig");
    }
}
