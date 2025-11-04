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

/* components/itilobject/fields_panel.html.twig */
class __TwigTemplate_22301934a176eaa767d808154f0d1c88 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/fields_panel.html.twig", 33)->unwrap();
        // line 34
        $context["field_options"] = ["full_width" => true, "fields_template" =>         // line 36
($context["itiltemplate"] ?? null), "disabled" =>  !        // line 37
($context["canupdate"] ?? null), "add_field_class" => ((        // line 38
($context["is_expanded"] ?? null)) ? ("col-sm-6") : (""))];
        // line 40
        yield "
";
        // line 41
        $context["itil_layout"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("itil_layout", true);
        // line 42
        $context["headers_states"] = (($__internal_compile_0 = ($context["itil_layout"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["items"] ?? null) : null);
        // line 43
        yield "
<div class=\"accordion open accordion-flush\" id=\"itil-data\">
   ";
        // line 45
        $context["main_show"] = ((( !CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "item-main", [], "array", true, true, false, 45) || ((($__internal_compile_1 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["item-main"] ?? null) : null) == "true"))) ? (true) : (false));
        // line 46
        yield "   <div class=\"accordion-item\">
      <h2 class=\"accordion-header\" id=\"heading-main-item\">
         <button class=\"accordion-button ";
        // line 48
        yield ((($context["main_show"] ?? null)) ? ("") : ("collapsed"));
        yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#item-main\" aria-expanded=\"true\" aria-controls=\"ticket-main\">
            <i class=\"ti ti-alert-circle me-1 item-icon\"></i>
            <span class='status-recall'>
                ";
        // line 51
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getStatusIcon", [(($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 51)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["status"] ?? null) : null)], "method", false, false, false, 51);
        yield "
            </span>
            <span class=\"item-title\">
                ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getTypeName", [1], "method", false, false, false, 54), "html", null, true);
        yield "
            </span>
         </button>
      </h2>
      <div id=\"item-main\" class=\"accordion-collapse collapse ";
        // line 58
        yield ((($context["main_show"] ?? null)) ? ("show") : (""));
        yield "\" aria-labelledby=\"heading-main-item\">
         <div class=\"accordion-body row m-0 mt-n2\">

            ";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("pre_item_form", ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        yield "

            ";
        // line 63
        if (Session::isMultiEntitiesMode()) {
            // line 64
            yield "               ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 64)) {
                // line 65
                yield "                  ";
                yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["Entity", "entities_id", (($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source,                 // line 68
($context["item"] ?? null), "fields", [], "any", false, false, false, 68)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["entities_id"] ?? null) : null), _n("Entity", "Entities", 1), Twig\Extension\CoreExtension::merge(                // line 70
($context["field_options"] ?? null), ["entity" =>                 // line 71
($context["userentities"] ?? null), "on_change" => "this.form.submit()"])], 65, $context, $this->getSourceContext());
                // line 74
                yield "
               ";
            } else {
                // line 76
                yield "                  ";
                $context["entity_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 77
                    yield "                     ";
                    yield $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Entity::badgeCompletenameLinkById", [(($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 77)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["entities_id"] ?? null) : null)]);
                    yield "
                  ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 79
                yield "
                  ";
                // line 80
                yield CoreExtension::callMacro($macros["fields"], "macro_field", ["",                 // line 82
($context["entity_html"] ?? null), _n("Entity", "Entities", 1), Twig\Extension\CoreExtension::merge(                // line 84
($context["field_options"] ?? null), ["add_field_class" => "d-flex align-items-center"])], 80, $context, $this->getSourceContext());
                // line 87
                yield "
               ";
            }
            // line 89
            yield "
               ";
            // line 90
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["is_recursive"], "method", false, false, false, 90)) {
                // line 91
                yield "                  ";
                yield CoreExtension::callMacro($macros["fields"], "macro_dropdownYesNo", ["is_recursive", (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source,                 // line 93
($context["item"] ?? null), "fields", [], "any", false, false, false, 93)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["is_recursive"] ?? null) : null), __("Child entities"),                 // line 95
($context["field_options"] ?? null)], 91, $context, $this->getSourceContext());
                // line 96
                yield "
               ";
            }
            // line 98
            yield "            ";
        }
        // line 99
        yield "
            ";
        // line 100
        yield CoreExtension::callMacro($macros["fields"], "macro_datetimeField", ["date", (($__internal_compile_6 = CoreExtension::getAttribute($this->env, $this->source,         // line 102
($context["item"] ?? null), "fields", [], "any", false, false, false, 102)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["date"] ?? null) : null), __("Opening date"),         // line 104
($context["field_options"] ?? null)], 100, $context, $this->getSourceContext());
        // line 105
        yield "

            ";
        // line 107
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 107) != "Ticket")) {
            // line 108
            yield "               ";
            yield CoreExtension::callMacro($macros["fields"], "macro_datetimeField", ["time_to_resolve", (($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source,             // line 110
($context["item"] ?? null), "fields", [], "any", false, false, false, 110)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["time_to_resolve"] ?? null) : null), __("Time to resolve"),             // line 112
($context["field_options"] ?? null)], 108, $context, $this->getSourceContext());
            // line 113
            yield "
            ";
        }
        // line 115
        yield "
            ";
        // line 116
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isSolved", [true], "method", false, false, false, 116)) {
            // line 117
            yield "               ";
            yield CoreExtension::callMacro($macros["fields"], "macro_datetimeField", ["solvedate", (($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source,             // line 119
($context["item"] ?? null), "fields", [], "any", false, false, false, 119)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["solvedate"] ?? null) : null), __("Resolution date"),             // line 121
($context["field_options"] ?? null)], 117, $context, $this->getSourceContext());
            // line 122
            yield "
            ";
        }
        // line 124
        yield "
            ";
        // line 125
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isClosed", [], "method", false, false, false, 125)) {
            // line 126
            yield "               ";
            yield CoreExtension::callMacro($macros["fields"], "macro_datetimeField", ["closedate", (($__internal_compile_9 = CoreExtension::getAttribute($this->env, $this->source,             // line 128
($context["item"] ?? null), "fields", [], "any", false, false, false, 128)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["closedate"] ?? null) : null), __("Close date"),             // line 130
($context["field_options"] ?? null)], 126, $context, $this->getSourceContext());
            // line 131
            yield "
            ";
        }
        // line 133
        yield "
            ";
        // line 134
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 134) == "Ticket")) {
            // line 135
            yield "               ";
            $context["type_params"] = Twig\Extension\CoreExtension::merge(["value" => (($__internal_compile_10 = CoreExtension::getAttribute($this->env, $this->source,             // line 136
($context["item"] ?? null), "fields", [], "any", false, false, false, 136)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["type"] ?? null) : null), "width" => "100%", "display" => false],             // line 139
($context["field_options"] ?? null));
            // line 140
            yield "               ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 140)) {
                // line 141
                yield "                  ";
                $context["type_params"] = Twig\Extension\CoreExtension::merge(($context["type_params"] ?? null), ["on_change" => "this.form.submit()"]);
                // line 142
                yield "               ";
            } else {
                // line 143
                yield "                  ";
                $context["type_params"] = Twig\Extension\CoreExtension::merge(($context["type_params"] ?? null), ["on_change" => "reloadCategory()"]);
                // line 144
                yield "               ";
            }
            // line 145
            yield "               ";
            yield CoreExtension::callMacro($macros["fields"], "macro_field", ["type", CoreExtension::getAttribute($this->env, $this->source,             // line 147
($context["item"] ?? null), "dropdownType", ["type", ($context["type_params"] ?? null)], "method", false, false, false, 147), _n("Type", "Types", 1),             // line 149
($context["field_options"] ?? null)], 145, $context, $this->getSourceContext());
            // line 150
            yield "
            ";
        }
        // line 152
        yield "
            ";
        // line 153
        $context["cat_params"] = Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["entity" => (($__internal_compile_11 = CoreExtension::getAttribute($this->env, $this->source,         // line 154
($context["item"] ?? null), "fields", [], "any", false, false, false, 154)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["entities_id"] ?? null) : null), "disabled" =>  !(        // line 155
($context["canupdate"] ?? null) || ($context["can_requester"] ?? null))]);
        // line 157
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 157)) {
            // line 158
            yield "               ";
            $context["cat_params"] = Twig\Extension\CoreExtension::merge(($context["cat_params"] ?? null), ["on_change" => "this.form.submit()"]);
            // line 161
            yield "            ";
        }
        // line 162
        yield "            ";
        if ((( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 162) && CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", ["itilcategories_id"], "method", false, false, false, 162)) && ((($__internal_compile_12 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 162)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["itilcategories_id"] ?? null) : null) > 0))) {
            // line 163
            yield "               ";
            $context["cat_params"] = Twig\Extension\CoreExtension::merge(($context["cat_params"] ?? null), ["display_emptychoice" => false]);
            // line 166
            yield "            ";
        }
        // line 167
        yield "            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 167) == "Ticket")) {
            // line 168
            yield "               ";
            if (((($__internal_compile_13 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 168)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["type"] ?? null) : null) == Twig\Extension\CoreExtension::constant("Ticket::INCIDENT_TYPE"))) {
                // line 169
                yield "                  ";
                $context["cat_params"] = Twig\Extension\CoreExtension::merge(($context["cat_params"] ?? null), ["condition" => ["is_incident" => 1]]);
                // line 170
                yield "               ";
            } elseif (((($__internal_compile_14 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 170)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["type"] ?? null) : null) == Twig\Extension\CoreExtension::constant("Ticket::DEMAND_TYPE"))) {
                // line 171
                yield "                  ";
                $context["cat_params"] = Twig\Extension\CoreExtension::merge(($context["cat_params"] ?? null), ["condition" => ["is_request" => 1]]);
                // line 172
                yield "               ";
            }
            // line 173
            yield "            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 173) == "Problem")) {
            // line 174
            yield "               ";
            $context["cat_params"] = Twig\Extension\CoreExtension::merge(($context["cat_params"] ?? null), ["condition" => ["is_problem" => 1]]);
            // line 175
            yield "            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 175) == "Change")) {
            // line 176
            yield "               ";
            $context["cat_params"] = Twig\Extension\CoreExtension::merge(($context["cat_params"] ?? null), ["condition" => ["is_change" => 1]]);
            // line 177
            yield "            ";
        }
        // line 178
        yield "            <span id=\"category_block_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\">
            ";
        // line 179
        yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["ITILCategory", "itilcategories_id", (($__internal_compile_15 = CoreExtension::getAttribute($this->env, $this->source,         // line 182
($context["item"] ?? null), "fields", [], "any", false, false, false, 182)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["itilcategories_id"] ?? null) : null), _n("Category", "Categories", 1),         // line 184
($context["cat_params"] ?? null)], 179, $context, $this->getSourceContext());
        // line 185
        yield "
            </span>

            ";
        // line 188
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/fields/status.html.twig");
        yield "

            ";
        // line 190
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["requesttypes_id"], "method", false, false, false, 190)) {
            // line 191
            yield "               ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["RequestType", "requesttypes_id", (($__internal_compile_16 = CoreExtension::getAttribute($this->env, $this->source,             // line 194
($context["item"] ?? null), "fields", [], "any", false, false, false, 194)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["requesttypes_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("RequestType"), Twig\Extension\CoreExtension::merge(            // line 196
($context["field_options"] ?? null), ["condition" => ["is_active" => 1, "is_ticketheader" => 1]])], 191, $context, $this->getSourceContext());
            // line 202
            yield "
            ";
        }
        // line 204
        yield "
            ";
        // line 205
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/fields/priority_matrix.html.twig");
        yield "

            ";
        // line 207
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["locations_id"], "method", false, false, false, 207)) {
            // line 208
            yield "               ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["Location", "locations_id", (($__internal_compile_17 = CoreExtension::getAttribute($this->env, $this->source,             // line 211
($context["item"] ?? null), "fields", [], "any", false, false, false, 211)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["locations_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Location"), Twig\Extension\CoreExtension::merge(            // line 213
($context["field_options"] ?? null), ["hide_if_no_elements" => true, "entity" => (($__internal_compile_18 = CoreExtension::getAttribute($this->env, $this->source,             // line 215
($context["item"] ?? null), "fields", [], "any", false, false, false, 215)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["entities_id"] ?? null) : null), "entity_sons" => true])], 208, $context, $this->getSourceContext());
            // line 218
            yield "
            ";
        }
        // line 220
        yield "
            ";
        // line 221
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 221) && (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 221) == "Ticket"))) {
            // line 222
            yield "               ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["Contract", "_contracts_id", ((CoreExtension::getAttribute($this->env, $this->source,             // line 225
($context["params"] ?? null), "_contracts_id", [], "array", true, true, false, 225)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_19 = ($context["params"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["_contracts_id"] ?? null) : null), 0)) : (0)), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Contract"), Twig\Extension\CoreExtension::merge(            // line 227
($context["field_options"] ?? null), ["entity" => (($__internal_compile_20 = CoreExtension::getAttribute($this->env, $this->source,             // line 228
($context["item"] ?? null), "fields", [], "any", false, false, false, 228)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["entities_id"] ?? null) : null), "width" => "100%", "hide_if_no_elements" => true, "nochecklimit" => true])], 222, $context, $this->getSourceContext());
            // line 233
            yield "
            ";
        }
        // line 235
        yield "
            ";
        // line 236
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 236) != "Ticket") || CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 236))) {
            // line 237
            yield "               ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownTimestampField", ["actiontime", (($__internal_compile_21 = CoreExtension::getAttribute($this->env, $this->source,             // line 239
($context["item"] ?? null), "fields", [], "any", false, false, false, 239)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["actiontime"] ?? null) : null), __("Total duration"),             // line 241
($context["field_options"] ?? null)], 237, $context, $this->getSourceContext());
            // line 242
            yield "
            ";
        }
        // line 244
        yield "
            ";
        // line 245
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/fields/global_validation.html.twig");
        yield "

            ";
        // line 247
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("post_item_form", ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        yield "
         </div>
      </div>
   </div>

   ";
        // line 252
        $context["actors_show"] = ((( !CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "actors", [], "array", true, true, false, 252) || ((($__internal_compile_22 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["actors"] ?? null) : null) == "true"))) ? (true) : (false));
        // line 253
        yield "   <div class=\"accordion-item\">
      <h2 class=\"accordion-header\" id=\"heading-actor\" title=\"";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Actors"), "html", null, true);
        yield "\" data-bs-toggle=\"tooltip\">
         <button class=\"accordion-button ";
        // line 255
        yield ((($context["actors_show"] ?? null)) ? ("") : ("collapsed"));
        yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#actors\" aria-expanded=\"true\" aria-controls=\"actors\">
            <i class=\"ti ti-users me-1\"></i>
            <span class=\"item-title\">
                ";
        // line 258
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Actors"), "html", null, true);
        yield "
            </span>
            <span class=\"badge bg-secondary ms-2\">
               ";
        // line 261
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "countActors", [], "method", false, false, false, 261), "html", null, true);
        yield "
            </span>
         </button>
      </h2>
      <div id=\"actors\" class=\"accordion-collapse collapse ";
        // line 265
        yield ((($context["actors_show"] ?? null)) ? ("show") : (""));
        yield "\" aria-labelledby=\"heading-actor\">
         <div class=\"accordion-body accordion-actors row m-0 mt-n2\">
            ";
        // line 267
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/actors/main.html.twig");
        yield "
         </div>
      </div>
   </div>

   ";
        // line 272
        if ((array_key_exists("item_ticket", $context) &&  !(null === ($context["item_ticket"] ?? null)))) {
            // line 273
            yield "      ";
            $context["items_show"] = ((( !CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "items", [], "array", true, true, false, 273) || ((($__internal_compile_23 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["items"] ?? null) : null) == "true"))) ? (true) : (false));
            // line 274
            yield "      <div class=\"accordion-item\">
         <h2 class=\"accordion-header\" id=\"items-heading\" title=\"";
            // line 275
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Item", "Items", Session::getPluralNumber()), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 276
            yield ((($context["items_show"] ?? null)) ? ("") : ("collapsed"));
            yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#items\" aria-expanded=\"true\" aria-controls=\"items\">
               <i class=\"ti ti-package me-1\"></i>
               <span class=\"item-title\">
                    ";
            // line 279
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Item", "Items", Session::getPluralNumber()), "html", null, true);
            yield "
                </span>
               <span class=\"item-counter badge bg-secondary ms-2\"></span>
               ";
            // line 282
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", ["items_id"], "method", false, false, false, 282)) {
                // line 283
                yield "                  <span class=\"required\">*</span>
               ";
            }
            // line 285
            yield "            </button>
         </h2>
         <div id=\"items\" class=\"accordion-collapse collapse ";
            // line 287
            yield ((($context["items_show"] ?? null)) ? ("show") : (""));
            yield "\" aria-labelledby=\"items-heading\">
            <div class=\"accordion-body accordion-items row m-0 mt-n2\">
               ";
            // line 289
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item_ticket"] ?? null), "itemAddForm", [($context["item"] ?? null), Twig\Extension\CoreExtension::merge(((array_key_exists("params", $context)) ? (Twig\Extension\CoreExtension::default(($context["params"] ?? null), [])) : ([])), ["entities_id" => ($context["entities_id"] ?? null)])], "method", false, false, false, 289), "html", null, true);
            yield "
            </div>
         </div>
      </div>
   ";
        }
        // line 294
        yield "
   ";
        // line 295
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 295) == "Ticket")) {
            // line 296
            yield "      ";
            $context["la_content"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 297
                yield "         ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/service_levels.html.twig");
                yield "
      ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 299
            yield "
      ";
            // line 300
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::trim(($context["la_content"] ?? null))) > 0)) {
                // line 301
                yield "         ";
                $context["nb_la"] = (((((((($__internal_compile_24 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 301)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["slas_id_tto"] ?? null) : null) > 0)) ? (1) : (0)) + ((((($__internal_compile_25 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 301)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["slas_id_ttr"] ?? null) : null) > 0)) ? (1) : (0))) + ((((($__internal_compile_26 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 301)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["olas_id_tto"] ?? null) : null) > 0)) ? (1) : (0))) + ((((($__internal_compile_27 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 301)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["olas_id_ttr"] ?? null) : null) > 0)) ? (1) : (0)));
                // line 302
                yield "         ";
                $context["servicelevels_show"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "service-levels", [], "array", true, true, false, 302) && ((($__internal_compile_28 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["service-levels"] ?? null) : null) == "true"))) ? (true) : (false));
                // line 303
                yield "         <div class=\"accordion-item\">
            <h2 class=\"accordion-header\" id=\"service-levels-heading\" title=\"";
                // line 304
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Service level", "Service levels", Session::getPluralNumber()), "html", null, true);
                yield "\" data-bs-toggle=\"tooltip\">
               <button class=\"accordion-button ";
                // line 305
                yield ((($context["servicelevels_show"] ?? null)) ? ("") : ("collapsed"));
                yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#service-levels\" aria-expanded=\"true\" aria-controls=\"service-levels\">
                  <i class=\"ti ti-alarm me-1\"></i>
                  <span class=\"item-title\">
                     ";
                // line 308
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Service level", "Service levels", Session::getPluralNumber()), "html", null, true);
                yield "
                  </span>
                  ";
                // line 310
                if ((($context["nb_la"] ?? null) > 0)) {
                    // line 311
                    yield "                     <span class=\"badge bg-secondary ms-2\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nb_la"] ?? null), "html", null, true);
                    yield "</span>
                  ";
                }
                // line 313
                yield "               </button>
            </h2>
            <div id=\"service-levels\" class=\"accordion-collapse collapse ";
                // line 315
                yield ((($context["servicelevels_show"] ?? null)) ? ("show") : (""));
                yield "\" aria-labelledby=\"service-levels-heading\">
               <div class=\"accordion-body row m-0 mt-n2\">
                  ";
                // line 317
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["la_content"] ?? null), "html", null, true);
                yield "
               </div>
            </div>
         </div>
      ";
            }
            // line 322
            yield "   ";
        }
        // line 323
        yield "
   ";
        // line 324
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 324), ["Problem", "Change"])) {
            // line 325
            yield "      ";
            $context["analysis_fields"] = ["impactcontent" => __("Impacts"), "causecontent" => __("Causes"), "symptomcontent" => __("Symptoms"), "controlistcontent" => __("Control list")];
            // line 331
            yield "
      ";
            // line 332
            $context["nb_analysis"] = 0;
            // line 333
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["analysis_fields"] ?? null));
            foreach ($context['_seq'] as $context["analysis_field"] => $context["label"]) {
                // line 334
                yield "         ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", [$context["analysis_field"]], "method", false, false, false, 334) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::trim((($__internal_compile_29 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 334)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[$context["analysis_field"]] ?? null) : null))) > 0))) {
                    // line 335
                    yield "            ";
                    $context["nb_analysis"] = (($context["nb_analysis"] ?? null) + 1);
                    // line 336
                    yield "         ";
                }
                // line 337
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['analysis_field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 338
            yield "      ";
            $context["analysis_show"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "analysis", [], "array", true, true, false, 338) && ((($__internal_compile_30 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["analysis"] ?? null) : null) == "true"))) ? (true) : (false));
            // line 339
            yield "      <div class=\"accordion-item\">
         <h2 class=\"accordion-header\" id=\"analysis-heading\" title=\"";
            // line 340
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Analysis"), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 341
            yield ((($context["analysis_show"] ?? null)) ? ("") : ("collapsed"));
            yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#analysis\" aria-expanded=\"true\" aria-controls=\"analysis\">
               <i class=\"ti ti-eyeglass me-1\"></i>
               <span class=\"item-title\">
                    ";
            // line 344
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Analysis"), "html", null, true);
            yield "
               </span>
               ";
            // line 346
            if ((($context["nb_analysis"] ?? null) > 0)) {
                // line 347
                yield "                  <span class=\"badge bg-secondary ms-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nb_analysis"] ?? null), "html", null, true);
                yield "</span>
               ";
            }
            // line 349
            yield "            </button>
         </h2>
         <div id=\"analysis\" class=\"accordion-collapse collapse ";
            // line 351
            yield ((($context["analysis_show"] ?? null)) ? ("show") : (""));
            yield "\" aria-labelledby=\"analysis-heading\">
            <div class=\"accordion-body row m-0 mt-n2\">
               ";
            // line 353
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["analysis_fields"] ?? null));
            foreach ($context['_seq'] as $context["analysis_field"] => $context["label"]) {
                // line 354
                yield "                  ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", [$context["analysis_field"]], "method", false, false, false, 354)) {
                    // line 355
                    yield "                     ";
                    yield CoreExtension::callMacro($macros["fields"], "macro_textareaField", [                    // line 356
$context["analysis_field"], (($__internal_compile_31 = CoreExtension::getAttribute($this->env, $this->source,                     // line 357
($context["item"] ?? null), "fields", [], "any", false, false, false, 357)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[$context["analysis_field"]] ?? null) : null),                     // line 358
$context["label"], Twig\Extension\CoreExtension::merge(                    // line 359
($context["field_options"] ?? null), ["enable_richtext" => true, "is_horizontal" => false])], 355, $context, $this->getSourceContext());
                    // line 363
                    yield "
                  ";
                }
                // line 365
                yield "               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['analysis_field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 366
            yield "            </div>
         </div>
      </div>
   ";
        }
        // line 370
        yield "
   ";
        // line 371
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 371) == "Change")) {
            // line 372
            yield "      ";
            $context["plans_fields"] = ["rolloutplancontent" => __("Deployment plan"), "backoutplancontent" => __("Backup plan"), "checklistcontent" => __("Checklist")];
            // line 377
            yield "
      ";
            // line 378
            $context["nb_plans"] = 0;
            // line 379
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["plans_fields"] ?? null));
            foreach ($context['_seq'] as $context["plans_field"] => $context["label"]) {
                // line 380
                yield "         ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", [$context["plans_field"]], "method", false, false, false, 380) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::trim((($__internal_compile_32 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 380)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[$context["plans_field"]] ?? null) : null))) > 0))) {
                    // line 381
                    yield "            ";
                    $context["nb_plans"] = (($context["nb_plans"] ?? null) + 1);
                    // line 382
                    yield "         ";
                }
                // line 383
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['plans_field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 384
            yield "
      ";
            // line 385
            $context["plans_show"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "plans", [], "array", true, true, false, 385) && ((($__internal_compile_33 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["plans"] ?? null) : null) == "true"))) ? (true) : (false));
            // line 386
            yield "      <div class=\"accordion-item\">
         <h2 class=\"accordion-header\" id=\"plans-heading\" title=\"";
            // line 387
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Plans"), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 388
            yield ((($context["plans_show"] ?? null)) ? ("") : ("collapsed"));
            yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#plans\" aria-expanded=\"true\" aria-controls=\"plans\">
               <i class=\"ti ti-checkup-list me-1\"></i>
               <span class=\"item-title\">
                    ";
            // line 391
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Plans"), "html", null, true);
            yield "
               </span>
               ";
            // line 393
            if ((($context["nb_plans"] ?? null) > 0)) {
                // line 394
                yield "                  <span class=\"badge bg-secondary ms-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nb_plans"] ?? null), "html", null, true);
                yield "</span>
               ";
            }
            // line 396
            yield "            </button>
         </h2>
         <div id=\"plans\" class=\"accordion-collapse collapse ";
            // line 398
            yield ((($context["plans_show"] ?? null)) ? ("show") : (""));
            yield "\" aria-labelledby=\"plans-heading\">
            <div class=\"accordion-body row m-0 mt-n2\">
               ";
            // line 400
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["plans_fields"] ?? null));
            foreach ($context['_seq'] as $context["plans_field"] => $context["label"]) {
                // line 401
                yield "                  ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", [$context["plans_field"]], "method", false, false, false, 401)) {
                    // line 402
                    yield "                     ";
                    yield CoreExtension::callMacro($macros["fields"], "macro_textareaField", [                    // line 403
$context["plans_field"], (($__internal_compile_34 = CoreExtension::getAttribute($this->env, $this->source,                     // line 404
($context["item"] ?? null), "fields", [], "any", false, false, false, 404)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[$context["plans_field"]] ?? null) : null),                     // line 405
$context["label"], Twig\Extension\CoreExtension::merge(                    // line 406
($context["field_options"] ?? null), ["enable_richtext" => true, "is_horizontal" => false])], 402, $context, $this->getSourceContext());
                    // line 410
                    yield "
                  ";
                }
                // line 412
                yield "               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['plans_field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 413
            yield "            </div>
         </div>
      </div>
   ";
        }
        // line 417
        yield "
   ";
        // line 418
        if (($context["ticket_ticket"] ?? null)) {
            // line 419
            yield "      ";
            $context["linked_tickets_show"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "linked_tickets", [], "array", true, true, false, 419) && ((($__internal_compile_35 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["linked_tickets"] ?? null) : null) == "true"))) ? (true) : (false));
            // line 420
            yield "      <div class=\"accordion-item\">
         <h2 class=\"accordion-header\" id=\"linked_tickets-heading\" title=\"";
            // line 421
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Ticket_Ticket", ($context["nb_linked_tickets"] ?? null)), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 422
            yield ((($context["linked_tickets_show"] ?? null)) ? ("") : ("collapsed"));
            yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#linked_tickets\" aria-expanded=\"true\" aria-controls=\"linked_tickets\">
               <i class=\"ti ti-link me-1\"></i>
               ";
            // line 424
            $context["linked_tickets"] = CoreExtension::getAttribute($this->env, $this->source, ($context["ticket_ticket"] ?? null), "getLinkedTicketsTo", [(($__internal_compile_36 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 424)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["id"] ?? null) : null), true], "method", false, false, false, 424);
            // line 425
            yield "               ";
            $context["nb_linked_tickets"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["linked_tickets"] ?? null));
            // line 426
            yield "               ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 426) && ((($__internal_compile_37 = (($__internal_compile_38 = ($context["params"] ?? null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["_link"] ?? null) : null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["tickets_id_2"] ?? null) : null) > 0))) {
                // line 427
                yield "                  ";
                $context["nb_linked_tickets"] = 1;
                // line 428
                yield "               ";
            }
            // line 429
            yield "               <span class=\"item-title\">
                    ";
            // line 430
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Ticket_Ticket", ($context["nb_linked_tickets"] ?? null)), "html", null, true);
            yield "
               </span>
               ";
            // line 432
            if ((($context["nb_linked_tickets"] ?? null) > 0)) {
                // line 433
                yield "                  <span class=\"badge bg-secondary ms-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nb_linked_tickets"] ?? null), "html", null, true);
                yield "</span>
               ";
            }
            // line 435
            yield "            </button>
         </h2>
         <div id=\"linked_tickets\" class=\"accordion-collapse collapse ";
            // line 437
            yield ((($context["linked_tickets_show"] ?? null)) ? ("show") : (""));
            yield "\" aria-labelledby=\"linked_tickets-heading\">
            <div class=\"accordion-body\">
               ";
            // line 439
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/linked_tickets.html.twig");
            yield "
            </div>
         </div>
      </div>
   ";
        }
        // line 444
        yield "
    <span class=\"d-none d-md-block\">
        <button type=\"button\" class=\"switch-panel-width btn btn-icon btn-ghost-secondary position-absolute bottom-0 start-0 mb-2\">
            <i class=\"fas fa-caret-left\"></i>
        </button>
    </span>
</div>

<script type=\"text/javascript\">
\$(function() {
   if (\$(window).width() < 768) { // medium breakpoint (Todo check if it's possible to get bootstrap breakpoints withint javascript)
      \$('#itil-data .accordion-collapse').each(function() {
         \$(this).removeClass('show');
      })
   }
});

var reloadCategory = function() {
    var type = \$('[name=type]').val();

    \$('#category_block_";
        // line 464
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield " .field-container').load(
        '";
        // line 465
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("ajax/dropdownTicketCategories.php"), "html", null, true);
        yield "',
        {
            'type': type,
            'entity_restrict': ";
        // line 468
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_39 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 468)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["entities_id"] ?? null) : null), "html", null, true);
        yield ",
            'value': ";
        // line 469
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_40 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 469)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["itilcategories_id"] ?? null) : null), "html", null, true);
        yield ",
        }
    );
};
</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/itilobject/fields_panel.html.twig";
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
        return array (  852 => 469,  848 => 468,  842 => 465,  838 => 464,  816 => 444,  808 => 439,  803 => 437,  799 => 435,  793 => 433,  791 => 432,  786 => 430,  783 => 429,  780 => 428,  777 => 427,  774 => 426,  771 => 425,  769 => 424,  764 => 422,  760 => 421,  757 => 420,  754 => 419,  752 => 418,  749 => 417,  743 => 413,  737 => 412,  733 => 410,  731 => 406,  730 => 405,  729 => 404,  728 => 403,  726 => 402,  723 => 401,  719 => 400,  714 => 398,  710 => 396,  704 => 394,  702 => 393,  697 => 391,  691 => 388,  687 => 387,  684 => 386,  682 => 385,  679 => 384,  673 => 383,  670 => 382,  667 => 381,  664 => 380,  659 => 379,  657 => 378,  654 => 377,  651 => 372,  649 => 371,  646 => 370,  640 => 366,  634 => 365,  630 => 363,  628 => 359,  627 => 358,  626 => 357,  625 => 356,  623 => 355,  620 => 354,  616 => 353,  611 => 351,  607 => 349,  601 => 347,  599 => 346,  594 => 344,  588 => 341,  584 => 340,  581 => 339,  578 => 338,  572 => 337,  569 => 336,  566 => 335,  563 => 334,  558 => 333,  556 => 332,  553 => 331,  550 => 325,  548 => 324,  545 => 323,  542 => 322,  534 => 317,  529 => 315,  525 => 313,  519 => 311,  517 => 310,  512 => 308,  506 => 305,  502 => 304,  499 => 303,  496 => 302,  493 => 301,  491 => 300,  488 => 299,  481 => 297,  478 => 296,  476 => 295,  473 => 294,  465 => 289,  460 => 287,  456 => 285,  452 => 283,  450 => 282,  444 => 279,  438 => 276,  434 => 275,  431 => 274,  428 => 273,  426 => 272,  418 => 267,  413 => 265,  406 => 261,  400 => 258,  394 => 255,  390 => 254,  387 => 253,  385 => 252,  377 => 247,  372 => 245,  369 => 244,  365 => 242,  363 => 241,  362 => 239,  360 => 237,  358 => 236,  355 => 235,  351 => 233,  349 => 228,  348 => 227,  347 => 225,  345 => 222,  343 => 221,  340 => 220,  336 => 218,  334 => 215,  333 => 213,  332 => 211,  330 => 208,  328 => 207,  323 => 205,  320 => 204,  316 => 202,  314 => 196,  313 => 194,  311 => 191,  309 => 190,  304 => 188,  299 => 185,  297 => 184,  296 => 182,  295 => 179,  290 => 178,  287 => 177,  284 => 176,  281 => 175,  278 => 174,  275 => 173,  272 => 172,  269 => 171,  266 => 170,  263 => 169,  260 => 168,  257 => 167,  254 => 166,  251 => 163,  248 => 162,  245 => 161,  242 => 158,  239 => 157,  237 => 155,  236 => 154,  235 => 153,  232 => 152,  228 => 150,  226 => 149,  225 => 147,  223 => 145,  220 => 144,  217 => 143,  214 => 142,  211 => 141,  208 => 140,  206 => 139,  205 => 136,  203 => 135,  201 => 134,  198 => 133,  194 => 131,  192 => 130,  191 => 128,  189 => 126,  187 => 125,  184 => 124,  180 => 122,  178 => 121,  177 => 119,  175 => 117,  173 => 116,  170 => 115,  166 => 113,  164 => 112,  163 => 110,  161 => 108,  159 => 107,  155 => 105,  153 => 104,  152 => 102,  151 => 100,  148 => 99,  145 => 98,  141 => 96,  139 => 95,  138 => 93,  136 => 91,  134 => 90,  131 => 89,  127 => 87,  125 => 84,  124 => 82,  123 => 80,  120 => 79,  113 => 77,  110 => 76,  106 => 74,  104 => 71,  103 => 70,  102 => 68,  100 => 65,  97 => 64,  95 => 63,  90 => 61,  84 => 58,  77 => 54,  71 => 51,  65 => 48,  61 => 46,  59 => 45,  55 => 43,  53 => 42,  51 => 41,  48 => 40,  46 => 38,  45 => 37,  44 => 36,  43 => 34,  41 => 33,  38 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/fields_panel.html.twig", "/var/www/html/glpi/templates/components/itilobject/fields_panel.html.twig");
    }
}
