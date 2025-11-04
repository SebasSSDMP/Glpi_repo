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

/* components/itilobject/service_levels.html.twig */
class __TwigTemplate_5788d3f2e5edcda4222c1d42286c99af extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/service_levels.html.twig", 33)->unwrap();
        // line 34
        $macros["modals"] = $this->macros["modals"] = $this->loadTemplate("components/form/modals_macros.html.twig", "components/itilobject/service_levels.html.twig", 34)->unwrap();
        // line 35
        yield "
";
        // line 36
        $context["la_fields"] = [];
        // line 37
        yield "
";
        // line 38
        $context["la_fields"] = Twig\Extension\CoreExtension::merge(($context["la_fields"] ?? null), [["la" =>         // line 40
($context["sla"] ?? null), "type_str" => "sla", "type" => Twig\Extension\CoreExtension::constant("SLM::TTO"), "datefieldname" => "time_to_own", "lafieldname" => "slas_id_tto", "label" => __("TTO"), "helper" => __("Time to own")], ["la" =>         // line 48
($context["sla"] ?? null), "type_str" => "sla", "type" => Twig\Extension\CoreExtension::constant("SLM::TTR"), "datefieldname" => "time_to_resolve", "lafieldname" => "slas_id_ttr", "label" => __("TTR"), "helper" => __("Time to resolve")]]);
        // line 57
        yield "
";
        // line 58
        $context["la_fields"] = Twig\Extension\CoreExtension::merge(($context["la_fields"] ?? null), [["la" =>         // line 60
($context["ola"] ?? null), "type_str" => "ola", "type" => Twig\Extension\CoreExtension::constant("SLM::TTO"), "datefieldname" => "internal_time_to_own", "lafieldname" => "olas_id_tto", "label" => __("Internal TTO"), "helper" => __("Internal Time to own")], ["la" =>         // line 68
($context["ola"] ?? null), "type_str" => "ola", "type" => Twig\Extension\CoreExtension::constant("SLM::TTR"), "datefieldname" => "internal_time_to_resolve", "lafieldname" => "olas_id_ttr", "label" => __("Internal TTR"), "helper" => __("Internal Time to resolve")]]);
        // line 77
        yield "

";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["la_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["la_field"]) {
            // line 80
            yield "   ";
            $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
            // line 81
            yield "   ";
            $context["date_displayed"] = ( !CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", true, true, false, 81) ||  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", false, false, false, 81), "isHiddenField", [CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "datefieldname", [], "any", false, false, false, 81)], "method", false, false, false, 81));
            // line 82
            yield "   ";
            $context["la_displayed"] = ( !CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", true, true, false, 82) ||  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", false, false, false, 82), "isHiddenField", [CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "lafieldname", [], "any", false, false, false, 82)], "method", false, false, false, 82));
            // line 83
            yield "
   ";
            // line 84
            if ((($context["date_displayed"] ?? null) || ($context["la_displayed"] ?? null))) {
                // line 85
                yield "      ";
                $context["la_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 86
                    yield "         ";
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "la", [], "any", false, false, false, 86), "getDataForTicket", [(($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 86)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null), CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "type", [], "any", false, false, false, 86)], "method", false, false, false, 86)) {
                        // line 87
                        yield "            ";
                        if (($context["date_displayed"] ?? null)) {
                            // line 88
                            yield "               <span class=\"text-muted\">
                  ";
                            // line 89
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 89)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "datefieldname", [], "any", false, false, false, 89)] ?? null) : null)), "html", null, true);
                            yield "
               </span>
            ";
                        }
                        // line 92
                        yield "
            ";
                        // line 93
                        if (($context["la_displayed"] ?? null)) {
                            // line 94
                            yield "               <span class=\"level_name badge itil-badge bg-secondary ms-1 flex-column flex-sm-row\">
                  <span class=\"d-flex align-items-center\">
                     <i class=\"fas fa-stopwatch slt me-1\"></i>
                     <span class=\"text-truncate\"
                           title=\"";
                            // line 98
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemComment(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "la", [], "any", false, false, false, 98), "getType", [], "method", false, false, false, 98), (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 98)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "lafieldname", [], "any", false, false, false, 98)] ?? null) : null)), "html", null, true);
                            yield "\"
                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                        ";
                            // line 100
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "la", [], "any", false, false, false, 100), "getType", [], "method", false, false, false, 100), (($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 100)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "lafieldname", [], "any", false, false, false, 100)] ?? null) : null)), "html", null, true);
                            yield "
                     </span>

                     ";
                            // line 103
                            if (($context["canupdate"] ?? null)) {
                                // line 104
                                yield "                        <i class=\"ti ti-x ms-1\" role=\"button\"
                           onclick=\"delete_date_";
                                // line 105
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                                yield "(event)\"
                           title=\"";
                                // line 106
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
                                yield "\"
                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                     ";
                            }
                            // line 109
                            yield "                  </span>

                  ";
                            // line 111
                            $context["nextaction"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "la", [], "any", false, false, false, 111), "getNextActionForTicket", [($context["item"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "type", [], "any", false, false, false, 111)], "method", false, false, false, 111);
                            // line 112
                            yield "                  ";
                            $context["level"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "la", [], "any", false, false, false, 112), "getLevelFromAction", [($context["nextaction"] ?? null)], "method", false, false, false, 112);
                            // line 113
                            yield "                  ";
                            if ((($context["level"] ?? null) != false)) {
                                // line 114
                                yield "                     <span class=\"badge bg-info ms-0 ms-sm-1\">
                        <i class=\"fas fa-clock me-1\"
                           title=\"";
                                // line 116
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Next escalation: %s"), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, ($context["nextaction"] ?? null), "fields", [], "any", false, false, false, 116)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["date"] ?? null) : null))), "html", null, true);
                                yield "\"
                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                        <span title=\"";
                                // line 118
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("%1\$s: %2\$s"), _n("Escalation level", "Escalation levels", 1), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName(($context["level"] ?? null))), "html", null, true);
                                yield "\"
                              data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                           ";
                                // line 120
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName(($context["level"] ?? null)), "html", null, true);
                                yield "
                        </span>
                     </span>
                  ";
                            }
                            // line 124
                            yield "               </span>
               <script type=\"text/javascript\">
                  function delete_date_";
                            // line 126
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                            yield "(e) {
                     e.preventDefault();

                     var delete_date = 0;
                     if (confirm('";
                            // line 130
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Also delete date?"), "html", null, true);
                            yield "')) {
                        delete_date = 1;
                     }

                     submitGetLink('";
                            // line 134
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 134), "html", null, true);
                            yield "', {
                        '";
                            // line 135
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "type_str", [], "any", false, false, false, 135), "html", null, true);
                            yield "_delete': 1,
                        'id': ";
                            // line 136
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 136)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["id"] ?? null) : null), "html", null, true);
                            yield ",
                        'type': ";
                            // line 137
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "type", [], "any", false, false, false, 137), "html", null, true);
                            yield ",
                        '_glpi_csrf_token': '";
                            // line 138
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
                            yield "',
                        '_glpi_simple_form': 1,
                        'delete_date': delete_date
                     });
                  }
               </script>
            ";
                        }
                        // line 145
                        yield "         ";
                    } else {
                        // line 146
                        yield "            <div class=\"d-flex align-items-center flex-wrap\">
               ";
                        // line 147
                        $context["assign_la_id"] = ("assign_la_" . ($context["rand"] ?? null));
                        // line 148
                        yield "
               ";
                        // line 149
                        if (($context["date_displayed"] ?? null)) {
                            // line 150
                            yield "                  <div class=\"la_datefield\">
                     ";
                            // line 151
                            yield CoreExtension::callMacro($macros["fields"], "macro_datetimeField", [CoreExtension::getAttribute($this->env, $this->source,                             // line 152
$context["la_field"], "datefieldname", [], "any", false, false, false, 152), (($__internal_compile_6 = CoreExtension::getAttribute($this->env, $this->source,                             // line 153
($context["item"] ?? null), "fields", [], "any", false, false, false, 153)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "datefieldname", [], "any", false, false, false, 153)] ?? null) : null), "", ["include_field" => false, "id" => ("date_" .                             // line 157
($context["assign_la_id"] ?? null)), "disabled" =>  !                            // line 158
($context["canupdate"] ?? null)]], 151, $context, $this->getSourceContext());
                            // line 160
                            yield "
                  </div>
               ";
                        }
                        // line 163
                        yield "
               ";
                        // line 164
                        if (($context["la_displayed"] ?? null)) {
                            // line 165
                            yield "                  <div class=\"";
                            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 165)) ? ("") : ("collapsed"));
                            yield " w-100 mt-1 d-none\" id=\"dropdown_";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["assign_la_id"] ?? null), "html", null, true);
                            yield "\">
                     ";
                            // line 166
                            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                             // line 167
$context["la_field"], "la", [], "any", false, false, false, 167), "getType", [], "method", false, false, false, 167), CoreExtension::getAttribute($this->env, $this->source,                             // line 168
$context["la_field"], "lafieldname", [], "any", false, false, false, 168), (($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source,                             // line 169
($context["item"] ?? null), "fields", [], "any", false, false, false, 169)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "lafieldname", [], "any", false, false, false, 169)] ?? null) : null), "", ["include_field" => false, "entity" => (($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source,                             // line 173
($context["item"] ?? null), "fields", [], "any", false, false, false, 173)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["entities_id"] ?? null) : null), "condition" => ["type" => CoreExtension::getAttribute($this->env, $this->source,                             // line 174
$context["la_field"], "type", [], "any", false, false, false, 174)], "disabled" =>  !                            // line 175
($context["canupdate"] ?? null), "add_field_class" => ((                            // line 176
($context["is_expanded"] ?? null)) ? ("col-sm-6") : (""))]], 166, $context, $this->getSourceContext());
                            // line 178
                            yield "
                  </div>

                  ";
                            // line 181
                            if (($context["canupdate"] ?? null)) {
                                // line 182
                                yield "                     <button class=\"btn btn-sm btn-ghost-secondary ms-1\" type=\"button\"
                           id=\"button_";
                                // line 183
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["assign_la_id"] ?? null), "html", null, true);
                                yield "\"
                           data-bs-toggle=\"modal\" data-bs-target=\"#";
                                // line 184
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["assign_la_id"] ?? null), "html", null, true);
                                yield "\"
                           aria-expanded=\"false\" aria-controls=\"";
                                // line 185
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["assign_la_id"] ?? null), "html", null, true);
                                yield "\">
                        <i class=\"fas fa-stopwatch slt pointer\"
                           title=\"";
                                // line 187
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Assign a SLA"), "html", null, true);
                                yield "\"
                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                     </button>

                     ";
                                // line 191
                                yield CoreExtension::callMacro($macros["modals"], "macro_confirm", [__("Warning"), Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                                 // line 193
$context["la_field"], "la", [], "any", false, false, false, 193), "getAddConfirmation", [], "method", false, false, false, 193), "<br />"), ["id" =>                                 // line 195
($context["assign_la_id"] ?? null), "confirm_label" => ("<i class=\"fas fa-stopwatch me-1\"></i>" . __("Assign")), "confirm_event" => (("toggleAssignLA_" .                                 // line 197
($context["rand"] ?? null)) . "()")]], 191, $context, $this->getSourceContext());
                                // line 199
                                yield "

                     <script type=\"text/javascript\">
                        function toggleAssignLA_";
                                // line 202
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                                yield "() {
                           // hide button clicked
                           \$(\"#button_";
                                // line 204
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["assign_la_id"] ?? null), "html", null, true);
                                yield "\").hide();

                           // hide date field
                           \$(\"#date_";
                                // line 207
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["assign_la_id"] ?? null), "html", null, true);
                                yield "\").closest('.la_datefield').hide();

                           // show dropdown field
                           \$('#dropdown_assign_la_";
                                // line 210
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                                yield "').removeClass('d-none');

                           // show level agreement dropdown
                           var myCollapse = new bootstrap.Collapse(document.getElementById('dropdown_";
                                // line 213
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["assign_la_id"] ?? null), "html", null, true);
                                yield "'));
                           myCollapse.show();
                        }
                     </script>

                     ";
                                // line 218
                                if (((($__internal_compile_9 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 218)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "lafieldname", [], "any", false, false, false, 218)] ?? null) : null) != 0)) {
                                    // line 219
                                    yield "                        <script type=\"text/javascript\">
                           \$(document).ready(function() {
                              toggleAssignLA_";
                                    // line 221
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                                    yield "();
                           });
                        </script>
                     ";
                                }
                                // line 225
                                yield "                  ";
                            }
                            // line 226
                            yield "               ";
                        }
                        // line 227
                        yield "            </div>
         ";
                    }
                    // line 229
                    yield "      ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 230
                yield "      ";
                yield CoreExtension::callMacro($macros["fields"], "macro_field", [CoreExtension::getAttribute($this->env, $this->source,                 // line 231
$context["la_field"], "lafieldname", [], "any", false, false, false, 231),                 // line 232
($context["la_html"] ?? null), CoreExtension::getAttribute($this->env, $this->source,                 // line 233
$context["la_field"], "label", [], "any", false, false, false, 233), ["helper" => CoreExtension::getAttribute($this->env, $this->source,                 // line 235
$context["la_field"], "helper", [], "any", false, false, false, 235), "mb" => "mb-2", "label_class" => "col-auto", "full_width" => true, "is_horizontal" => false, "add_field_class" => ((                // line 240
($context["is_expanded"] ?? null)) ? ("col-sm-6") : ("")), "required" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 241
($context["field_options"] ?? null), "fields_template", [], "any", false, false, false, 241), "isMandatoryField", [CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "lafieldname", [], "any", false, false, false, 241)], "method", false, false, false, 241)]], 230, $context, $this->getSourceContext());
                // line 243
                yield "
   ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['la_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/itilobject/service_levels.html.twig";
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
        return array (  373 => 243,  371 => 241,  370 => 240,  369 => 235,  368 => 233,  367 => 232,  366 => 231,  364 => 230,  360 => 229,  356 => 227,  353 => 226,  350 => 225,  343 => 221,  339 => 219,  337 => 218,  329 => 213,  323 => 210,  317 => 207,  311 => 204,  306 => 202,  301 => 199,  299 => 197,  298 => 195,  297 => 193,  296 => 191,  289 => 187,  284 => 185,  280 => 184,  276 => 183,  273 => 182,  271 => 181,  266 => 178,  264 => 176,  263 => 175,  262 => 174,  261 => 173,  260 => 169,  259 => 168,  258 => 167,  257 => 166,  250 => 165,  248 => 164,  245 => 163,  240 => 160,  238 => 158,  237 => 157,  236 => 153,  235 => 152,  234 => 151,  231 => 150,  229 => 149,  226 => 148,  224 => 147,  221 => 146,  218 => 145,  208 => 138,  204 => 137,  200 => 136,  196 => 135,  192 => 134,  185 => 130,  178 => 126,  174 => 124,  167 => 120,  162 => 118,  157 => 116,  153 => 114,  150 => 113,  147 => 112,  145 => 111,  141 => 109,  135 => 106,  131 => 105,  128 => 104,  126 => 103,  120 => 100,  115 => 98,  109 => 94,  107 => 93,  104 => 92,  98 => 89,  95 => 88,  92 => 87,  89 => 86,  86 => 85,  84 => 84,  81 => 83,  78 => 82,  75 => 81,  72 => 80,  68 => 79,  64 => 77,  62 => 68,  61 => 60,  60 => 58,  57 => 57,  55 => 48,  54 => 40,  53 => 38,  50 => 37,  48 => 36,  45 => 35,  43 => 34,  41 => 33,  38 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/service_levels.html.twig", "/var/www/html/glpi/templates/components/itilobject/service_levels.html.twig");
    }
}
