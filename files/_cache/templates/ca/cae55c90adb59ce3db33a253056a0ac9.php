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

/* components/itilobject/timeline/pending_reasons.html.twig */
class __TwigTemplate_6d79858054627367926014fabaa12b40 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/timeline/pending_reasons.html.twig", 33)->unwrap();
        // line 34
        yield "
";
        // line 35
        if ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::canDisplayPendingReasonForItem", [($context["subitem"] ?? null)])) {
            // line 36
            yield "   ";
            $context["pending_item"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::getForItem", [($context["subitem"] ?? null), true]);
            // line 37
            yield "   ";
            $context["pending_item_parent"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::getForItem", [($context["item"] ?? null), true]);
            // line 38
            yield "   ";
            $context["pendingreasons_id"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pending_item"] ?? null), "fields", [], "any", false, true, false, 38), "pendingreasons_id", [], "array", true, true, false, 38) &&  !(null === (($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["pending_item"] ?? null), "fields", [], "any", false, true, false, 38)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["pendingreasons_id"] ?? null) : null)))) ? ((($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, ($context["pending_item"] ?? null), "fields", [], "any", false, true, false, 38)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["pendingreasons_id"] ?? null) : null)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pending_item_parent"] ?? null), "fields", [], "any", false, true, false, 38), "pendingreasons_id", [], "array", true, true, false, 38) &&  !(null === (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["pending_item_parent"] ?? null), "fields", [], "any", false, true, false, 38)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["pendingreasons_id"] ?? null) : null)))) ? ((($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source, ($context["pending_item_parent"] ?? null), "fields", [], "any", false, true, false, 38)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["pendingreasons_id"] ?? null) : null)) : (0))));
            // line 39
            yield "
   <div class=\"row\">
      <div class=\"col-12 col-sm-4\" title=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("PendingReason"), "html", null, true);
            yield "\"
           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
         ";
            // line 43
            $context["pendingreasons_lbl"] = ('' === $tmp = "            <i class=\"fas fa-tags fa-fw\"></i>
         ") ? '' : new Markup($tmp, $this->env->getCharset());
            // line 46
            yield "         ";
            $context["pending_reasons_id_script"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 47
                yield "            <script>
               var myCollapsible = \$('#pending-reasons-setup-";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "')[0];
               myCollapsible.addEventListener('show.bs.collapse', function () {
                  \$('#pending-reasons-control-";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "').addClass('flex-fill');
               });
               myCollapsible.addEventListener('hide.bs.collapse', function () {
                  \$('#pending-reasons-control-";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "').removeClass('flex-fill');
               });
            </script>
         ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 57
            yield "         ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["PendingReason", "pendingreasons_id",             // line 60
($context["pendingreasons_id"] ?? null),             // line 61
($context["pendingreasons_lbl"] ?? null), ["label_class" => "col-1", "input_class" => "col-10 ms-1", "rand" =>             // line 65
($context["rand"] ?? null), "mb" => "", "hide_if_no_elements" => true, "addicon" => false, "comments" => false, "width" => "95%", "field_class" => "flex-nowrap", "add_field_html" =>             // line 72
($context["pending_reasons_id_script"] ?? null)]], 57, $context, $this->getSourceContext());
            // line 74
            yield "
         <script>
            \$('#dropdown_pendingreasons_id";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "').change(function() {
               var pending_val = \$(this).val();
               if (pending_val > 0) {
                  \$('#pending-reasons-more_options_";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "').addClass('show');
                  \$.ajax({
                     url: '";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("ajax/pendingreason.php"), "html", null, true);
            yield "',
                     type: 'POST',
                     data: {
                        pendingreasons_id: pending_val
                     }
                  }).done(function(data) {
                     \$('#dropdown_followup_frequency";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "')
                        .val(data.followup_frequency)
                        .trigger('change');
                     \$('#dropdown_followups_before_resolution";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "')
                        .val(data.followups_before_resolution)
                        .trigger('change');
                  });
               } else {
                  \$('#pending-reasons-more_options_";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "').removeClass('show');
               }
            });
         </script>
      </div>

      <div class=\"collapse col-12 col-sm-8 ";
            // line 101
            yield ((($context["pendingreasons_id"] ?? null)) ? ("show") : (""));
            yield "\" id=\"pending-reasons-more_options_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\">
         <div class=\"row\">
            <div class=\"col-12 col-sm-6\" title=\"";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Automatic follow-up"), "html", null, true);
            yield "\"
                  data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
               ";
            // line 105
            $context["pendingreasons_frequency_field"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason::displayFollowupFrequencyfield", [((            // line 106
($context["pending_item"] ?? null)) ? ((($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, ($context["pending_item"] ?? null), "fields", [], "any", false, false, false, 106)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["followup_frequency"] ?? null) : null)) : ((($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, ($context["pending_item_parent"] ?? null), "fields", [], "any", false, false, false, 106)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["followup_frequency"] ?? null) : null))), "", ["rand" =>             // line 109
($context["rand"] ?? null)], false]);
            // line 113
            yield "               ";
            $context["pendingreasons_frequency_lbl"] = ('' === $tmp = "                  <i class=\"fas fa-redo fa-fw\"></i>
               ") ? '' : new Markup($tmp, $this->env->getCharset());
            // line 116
            yield "               ";
            yield CoreExtension::callMacro($macros["fields"], "macro_field", ["followup_frequency",             // line 118
($context["pendingreasons_frequency_field"] ?? null),             // line 119
($context["pendingreasons_frequency_lbl"] ?? null), ["field_class" => "", "label_class" => "col-1", "input_class" => "col-10 ms-1", "rand" =>             // line 124
($context["rand"] ?? null), "mb" => ""]], 116, $context, $this->getSourceContext());
            // line 127
            yield "
            </div>
            <div class=\"col-12 col-sm-6\" title=\"";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Automatic resolution"), "html", null, true);
            yield "\"
                 data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
               ";
            // line 131
            $context["pendingreasons_resolution_field"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason::displayFollowupsNumberBeforeResolutionField", [((            // line 132
($context["pending_item"] ?? null)) ? ((($__internal_compile_6 = CoreExtension::getAttribute($this->env, $this->source, ($context["pending_item"] ?? null), "fields", [], "any", false, false, false, 132)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["followups_before_resolution"] ?? null) : null)) : ((($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source, ($context["pending_item_parent"] ?? null), "fields", [], "any", false, false, false, 132)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["followups_before_resolution"] ?? null) : null))), "", ["rand" =>             // line 135
($context["rand"] ?? null)], false]);
            // line 139
            yield "               ";
            $context["pendingreasons_resolution_lbl"] = ('' === $tmp = "                  <i class=\"fas fa-check fa-fw\"></i>
               ") ? '' : new Markup($tmp, $this->env->getCharset());
            // line 142
            yield "               ";
            yield CoreExtension::callMacro($macros["fields"], "macro_field", ["followups_before_resolution",             // line 144
($context["pendingreasons_resolution_field"] ?? null),             // line 145
($context["pendingreasons_resolution_lbl"] ?? null), ["field_class" => "", "label_class" => "col-1", "input_class" => "col-10 ms-1", "rand" =>             // line 150
($context["rand"] ?? null), "mb" => ""]], 142, $context, $this->getSourceContext());
            // line 153
            yield "
            </div>
         </div>
      </div>
   </div>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/itilobject/timeline/pending_reasons.html.twig";
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
        return array (  197 => 153,  195 => 150,  194 => 145,  193 => 144,  191 => 142,  187 => 139,  185 => 135,  184 => 132,  183 => 131,  178 => 129,  174 => 127,  172 => 124,  171 => 119,  170 => 118,  168 => 116,  164 => 113,  162 => 109,  161 => 106,  160 => 105,  155 => 103,  148 => 101,  139 => 95,  131 => 90,  125 => 87,  116 => 81,  111 => 79,  105 => 76,  101 => 74,  99 => 72,  98 => 65,  97 => 61,  96 => 60,  94 => 57,  86 => 53,  80 => 50,  75 => 48,  72 => 47,  69 => 46,  66 => 43,  61 => 41,  57 => 39,  54 => 38,  51 => 37,  48 => 36,  46 => 35,  43 => 34,  41 => 33,  38 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/pending_reasons.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/pending_reasons.html.twig");
    }
}
