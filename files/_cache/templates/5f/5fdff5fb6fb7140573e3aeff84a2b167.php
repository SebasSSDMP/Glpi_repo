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

/* components/itilobject/timeline/form_followup.html.twig */
class __TwigTemplate_b3549787cd1b333ba296e1db8e56a642 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'timeline_card' => [$this, 'block_timeline_card'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 33
        return "components/itilobject/timeline/form_timeline_item.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/timeline/form_followup.html.twig", 34)->unwrap();
        // line 36
        $context["params"] = Twig\Extension\CoreExtension::merge(["item" => ($context["item"] ?? null)], ((array_key_exists("params", $context)) ? (Twig\Extension\CoreExtension::default(($context["params"] ?? null), [])) : ([])));
        // line 38
        $context["candedit"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "maySolve", [], "method", false, false, false, 38);
        // line 39
        $context["can_read_kb"] = (Session::haveRight("knowbase", Twig\Extension\CoreExtension::constant("READ")) || Session::haveRight("knowbase", Twig\Extension\CoreExtension::constant("KnowbaseItem::READFAQ")));
        // line 40
        $context["can_update_kb"] = Session::haveRight("knowbase", Twig\Extension\CoreExtension::constant("UPDATE"));
        // line 41
        $context["nokb"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "nokb", [], "array", true, true, false, 41) || ((($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["nokb"] ?? null) : null) == true));
        // line 42
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 33
        $this->parent = $this->loadTemplate("components/itilobject/timeline/form_timeline_item.html.twig", "components/itilobject/timeline/form_followup.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 44
    public function block_timeline_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        yield "   ";
        if ((($context["form_mode"] ?? null) == "view")) {
            // line 46
            yield "      <div class=\"read-only-content\">
         <div class=\"rich_text_container\">
            ";
            // line 48
            yield $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getEnhancedHtml((($__internal_compile_1 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["content"] ?? null) : null), ["user_mentions" => true, "images_gallery" => true]);
            // line 51
            yield "
         </div>

         <div class=\"timeline-badges\">
            ";
            // line 55
            if ((($__internal_compile_2 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["requesttypes_id"] ?? null) : null)) {
                // line 56
                yield "               <span class=\"badge bg-blue-lt\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Source of followup"), "html", null, true);
                yield "\">
                  <i class=\"fas fa-inbox me-1\"></i>
                  ";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("RequestType", (($__internal_compile_3 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["requesttypes_id"] ?? null) : null)), "html", null, true);
                yield "
               </span>
            ";
            }
            // line 61
            yield "
            ";
            // line 62
            if ((($__internal_compile_4 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["sourceitems_id"] ?? null) : null)) {
                // line 63
                yield "               <span class=\"badge bg-blue-lt\">
                  <i class=\"fas fa-code-branch me-1\"></i>
                  ";
                // line 65
                $context["merged_badge"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 66
                    yield "                     <span class=\"badge ms-2 me-n2\">
                        ";
                    // line 67
                    yield $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("Ticket", (($__internal_compile_5 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["sourceitems_id"] ?? null) : null));
                    yield "
                     </span>
                  ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 70
                yield "                  ";
                yield Twig\Extension\CoreExtension::sprintf(__("Merged from Ticket %1\$s"), ($context["merged_badge"] ?? null));
                yield "
               </span>
            ";
            }
            // line 73
            yield "
            ";
            // line 74
            if ((($__internal_compile_6 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["sourceof_items_id"] ?? null) : null)) {
                // line 75
                yield "               <span class=\"badge bg-blue-lt\">
                  <i class=\"fas fa-code-branch me-1\"></i>
                  ";
                // line 77
                $context["promoted_badge"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 78
                    yield "                     <span class=\"badge ms-2 me-n2\">
                        ";
                    // line 79
                    yield $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("Ticket", (($__internal_compile_7 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["sourceof_items_id"] ?? null) : null));
                    yield "
                     </span>
                  ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 82
                yield "                  ";
                yield Twig\Extension\CoreExtension::sprintf(__("Promoted to Ticket %1\$s"), ($context["promoted_badge"] ?? null));
                yield "
               </span>
            ";
            }
            // line 85
            yield "
            ";
            // line 86
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/pending_reasons_messages.html.twig");
            yield "
         </div>
      </div>
   ";
        } else {
            // line 90
            yield "      <div class=\"itilfollowup\">
         <form name=\"asset_form\" style=\"width: 100%;\" class=\"d-flex flex-column\" method=\"post\"
               action=\"";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "getFormURL", [], "method", false, false, false, 92), "html", null, true);
            yield "\" enctype=\"multipart/form-data\" data-track-changes=\"true\" data-submit-once>
            <input type=\"hidden\" name=\"itemtype\" value=\"";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 93), "html", null, true);
            yield "\" />
            <input type=\"hidden\" name=\"items_id\" value=\"";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 94)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["id"] ?? null) : null), "html", null, true);
            yield "\" />
            ";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("pre_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            yield "

            ";
            // line 97
            $context["add_reopen"] = ((((CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_openfollowup", [], "array", true, true, false, 97) &&  !(null === (($__internal_compile_9 = ($context["_get"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["_openfollowup"] ?? null) : null)))) ? ((($__internal_compile_10 = ($context["_get"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["_openfollowup"] ?? null) : null)) : (false)) || CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "needReopen", [], "method", false, false, false, 97));
            // line 98
            yield "            ";
            if (($context["add_reopen"] ?? null)) {
                // line 99
                yield "               <input type=\"hidden\" name=\"add_reopen\" value=\"1\" />
            ";
            }
            // line 101
            yield "
            <div class=\"row mx-n3 mx-xxl-auto\">
               ";
            // line 103
            $context["col_md"] = ((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central")) ? ("col-xl-7 col-xxl-8") : ("col-xxl-12"));
            // line 104
            yield "               <div class=\"col-12 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["col_md"] ?? null), "html", null, true);
            yield "\">
                  ";
            // line 105
            yield CoreExtension::callMacro($macros["fields"], "macro_textareaField", ["content", (($__internal_compile_11 = CoreExtension::getAttribute($this->env, $this->source,             // line 107
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 107)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["content"] ?? null) : null), "", ["full_width" => true, "no_label" => true, "enable_richtext" => true, "enable_fileupload" => true, "enable_mentions" => true, "entities_id" => (($__internal_compile_12 = CoreExtension::getAttribute($this->env, $this->source,             // line 115
($context["item"] ?? null), "fields", [], "any", false, false, false, 115)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["entities_id"] ?? null) : null), "rand" =>             // line 116
($context["rand"] ?? null), "required" =>             // line 117
($context["add_reopen"] ?? null)]], 105, $context, $this->getSourceContext());
            // line 119
            yield "
               </div>
               ";
            // line 121
            if (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central")) {
                // line 122
                yield "                  <div class=\"col-12 col-xl-5 col-xxl-4 order-first order-md-last pe-0 pe-xxl-auto\">
                     <div class=\"row\">

                        ";
                // line 125
                $context["fup_template_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 126
                    yield "                           <i class=\"fas fa-reply fa-fw me-1\"
                              title=\"";
                    // line 127
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Followup template", "Followup templates", Session::getPluralNumber()), "html", null, true);
                    yield "\"></i>
                        ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 129
                yield "                        ";
                yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["ITILFollowupTemplate", "itilfollowuptemplates_id", (($__internal_compile_13 = CoreExtension::getAttribute($this->env, $this->source,                 // line 132
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 132)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["itilfollowuptemplates_id"] ?? null) : null),                 // line 133
($context["fup_template_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "on_change" => (("itilfollowuptemplate_update" .                 // line 137
($context["rand"] ?? null)) . "(this.value)"), "entity" => (($__internal_compile_14 = CoreExtension::getAttribute($this->env, $this->source,                 // line 138
($context["item"] ?? null), "fields", [], "any", false, false, false, 138)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["entities_id"] ?? null) : null), "rand" =>                 // line 139
($context["rand"] ?? null)]], 129, $context, $this->getSourceContext());
                // line 141
                yield "

                        ";
                // line 143
                $context["fup_source_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 144
                    yield "                           <i class=\"fas fa-inbox fa-fw me-1\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Source of followup"), "html", null, true);
                    yield "\"></i>
                        ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 146
                yield "                        ";
                yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["RequestType", "requesttypes_id", (($__internal_compile_15 = CoreExtension::getAttribute($this->env, $this->source,                 // line 149
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 149)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["requesttypes_id"] ?? null) : null),                 // line 150
($context["fup_source_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "condition" => ["is_active" => 1, "is_itilfollowup" => 1], "rand" =>                 // line 158
($context["rand"] ?? null)]], 146, $context, $this->getSourceContext());
                // line 160
                yield "

                        ";
                // line 162
                $context["fup_private_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 163
                    yield "                           <i class=\"ti ti-lock fa-fw me-1\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Private"), "html", null, true);
                    yield "\"></i>
                        ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 165
                yield "                        ";
                yield CoreExtension::callMacro($macros["fields"], "macro_sliderField", ["is_private", (($__internal_compile_16 = CoreExtension::getAttribute($this->env, $this->source,                 // line 167
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 167)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["is_private"] ?? null) : null),                 // line 168
($context["fup_private_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                 // line 172
($context["rand"] ?? null)]], 165, $context, $this->getSourceContext());
                // line 174
                yield "

                        ";
                // line 176
                if ((($context["can_read_kb"] ?? null) && (($context["kb_id_toload"] ?? null) > 0))) {
                    // line 177
                    yield "                           ";
                    $context["link_kb_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 178
                        yield "                              <i class=\"fas fa-link fa-fw me-1\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                 title=\"";
                        // line 179
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(__("Link to knowledge base entry #%id"), ["%id" => ($context["kb_id_toload"] ?? null)]), "html", null, true);
                        yield "\"></i>
                           ";
                        return; yield '';
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 181
                    yield "                           ";
                    yield CoreExtension::callMacro($macros["fields"], "macro_sliderField", ["kb_linked_id", 1,                     // line 184
($context["link_kb_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                     // line 188
($context["rand"] ?? null), "yes_value" =>                     // line 189
($context["kb_id_toload"] ?? null)]], 181, $context, $this->getSourceContext());
                    // line 191
                    yield "
                        ";
                }
                // line 193
                yield "
                        ";
                // line 194
                if (((($context["candedit"] ?? null) && ($context["can_update_kb"] ?? null)) &&  !($context["nokb"] ?? null))) {
                    // line 195
                    yield "                           ";
                    $context["fup_to_kb_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 196
                        yield "                              <i class=\"far fa-save fa-fw me-1\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save and add to the knowledge base"), "html", null, true);
                        yield "\"
                                 data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                           ";
                        return; yield '';
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 199
                    yield "                           ";
                    yield CoreExtension::callMacro($macros["fields"], "macro_sliderField", ["_fup_to_kb", 0,                     // line 202
($context["fup_to_kb_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                     // line 206
($context["rand"] ?? null)]], 199, $context, $this->getSourceContext());
                    // line 208
                    yield "
                        ";
                }
                // line 210
                yield "                     </div>
                  </div>
               ";
            }
            // line 213
            yield "            </div>

            ";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("post_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            yield "
            ";
            // line 217
            yield "            <div class=\"d-flex card-footer mx-n3 mb-n3 flex-wrap\" style=\"row-gap: 10px; min-height: 79px\">
               ";
            // line 218
            $context["pending_reasons"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 219
                yield "                  ";
                $context["show_pending_reasons_actions"] = (((($__internal_compile_17 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 219)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["status"] ?? null) : null) == Twig\Extension\CoreExtension::constant("CommonITILObject::WAITING")) &&  !($context["add_reopen"] ?? null));
                // line 220
                yield "                  ";
                if (((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central") && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isAllowedStatus", [(($__internal_compile_18 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 220)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["status"] ?? null) : null), Twig\Extension\CoreExtension::constant("CommonITILObject::WAITING")], "method", false, false, false, 220)) && $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::canDisplayPendingReasonForItem", [($context["subitem"] ?? null)]))) {
                    // line 221
                    yield "                     <span
                        class=\"input-group-text bg-yellow-lt py-0 pe-0 ";
                    // line 222
                    yield ((($context["show_pending_reasons_actions"] ?? null)) ? ("flex-fill") : (""));
                    yield "\"
                        id=\"pending-reasons-control-";
                    // line 223
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                    yield "\"
                     >
                        <span class=\"d-inline-flex align-items-center\" title=\"";
                    // line 225
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Set the status to pending"), "html", null, true);
                    yield "\"
                              data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" role=\"button\">
                           <i class=\"fas fa-pause me-2\"></i>
                           <label class=\"form-check form-switch mt-2\">
                              <input type=\"hidden\"   name=\"pending\" value=\"0\" />
                              <input type=\"checkbox\" name=\"pending\" value=\"1\" class=\"form-check-input\"
                                    id=\"enable-pending-reasons-";
                    // line 231
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                    yield "\"
                                    role=\"button\"
                                    ";
                    // line 233
                    yield (((((($__internal_compile_19 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 233)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["status"] ?? null) : null) == Twig\Extension\CoreExtension::constant("CommonITILObject::WAITING")) &&  !($context["add_reopen"] ?? null))) ? ("checked") : (""));
                    yield "
                                    data-bs-toggle=\"collapse\" data-bs-target=\"#pending-reasons-setup-";
                    // line 234
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                    yield "\" />
                           </label>
                        </span>

                        <div
                           class=\"collapse ps-2 py-1 flex-fill ";
                    // line 239
                    yield ((($context["show_pending_reasons_actions"] ?? null)) ? ("show") : (""));
                    yield "\"
                           aria-expanded=\"";
                    // line 240
                    yield ((($context["show_pending_reasons_actions"] ?? null)) ? ("true") : ("false"));
                    yield "\"
                           id=\"pending-reasons-setup-";
                    // line 241
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                    yield "\"
                        >
                           ";
                    // line 243
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/pending_reasons.html.twig");
                    yield "
                        </div>
                     </span>
                  ";
                }
                // line 247
                yield "               ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 248
            yield "
               ";
            // line 249
            if (((($__internal_compile_20 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 249)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["id"] ?? null) : null) <= 0)) {
                // line 250
                yield "                  ";
                // line 251
                yield "                  <div class=\"input-group flex-nowrap\">
                     <button class=\"btn btn-primary\" type=\"submit\" name=\"add\">
                        <i class=\"fas fa-plus\"></i>
                        <span>";
                // line 254
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Add"), "html", null, true);
                yield "</span>
                     </button>
                     ";
                // line 256
                yield ($context["pending_reasons"] ?? null);
                yield "
                  </div>
               ";
            } else {
                // line 259
                yield "                  <input type=\"hidden\" name=\"id\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_21 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 259)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["id"] ?? null) : null), "html", null, true);
                yield "\" />
                  <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\">
                     <i class=\"far fa-save\"></i>
                     <span>";
                // line 262
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Save"), "html", null, true);
                yield "</span>
                  </button>

                  ";
                // line 265
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "can", [(($__internal_compile_22 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 265)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["id"] ?? null) : null), Twig\Extension\CoreExtension::constant("PURGE")], "method", false, false, false, 265)) {
                    // line 266
                    yield "                     <button class=\"btn btn-outline-danger me-2\" type=\"submit\" name=\"purge\"
                             onclick=\"return confirm('";
                    // line 267
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Confirm the final deletion?"), "html", null, true);
                    yield "');\">
                        <i class=\"fas fa-trash-alt\"></i>
                        <span>";
                    // line 269
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
                    yield "</span>
                     </button>
                  ";
                }
                // line 272
                yield "                  ";
                yield ($context["pending_reasons"] ?? null);
                yield "
               ";
            }
            // line 274
            yield "            </div>

            <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 276
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\" />
         </form>
      </div>

      <script type=\"text/javascript\">
         function itilfollowuptemplate_update";
            // line 281
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "(value) {
            \$.ajax({
               url: '";
            // line 283
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/itilfollowup.php"), "html", null, true);
            yield "',
               type: 'POST',
               data: {
                  itilfollowuptemplates_id: value,
                  items_id: '";
            // line 287
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_23 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 287)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["id"] ?? null) : null), "html", null, true);
            yield "',
                  itemtype: '";
            // line 288
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 288), "html", null, true);
            yield "'
               }
            }).done(function (data) {
               var requesttypes_id = isNaN(parseInt(data.requesttypes_id))
                  ? 0
                  : parseInt(data.requesttypes_id);

               // set textarea content
               setRichTextEditorContent(\"content_";
            // line 296
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\", data.content);
               // set category
               //need to create new DOM option, because SELECT is remotely-sourced (AJAX)
               //see : https://select2.org/programmatic-control/add-select-clear-items#preselecting-options-in-an-remotely-sourced-ajax-select2
               var newOption = new Option(data.requesttypes_name, requesttypes_id, true, true);
               \$(\"#dropdown_requesttypes_id";
            // line 301
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\").append(newOption).trigger('change');

               if (data.is_private !== undefined) {
                  // set is_private
                  \$(\"#is_private_";
            // line 305
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\")
                     .prop(\"checked\", data.is_private == \"0\"
                           ? false
                           : true);
               }
            });
         }
      </script>
   ";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/itilobject/timeline/form_followup.html.twig";
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
        return array (  527 => 305,  520 => 301,  512 => 296,  501 => 288,  497 => 287,  490 => 283,  485 => 281,  477 => 276,  473 => 274,  467 => 272,  461 => 269,  456 => 267,  453 => 266,  451 => 265,  445 => 262,  438 => 259,  432 => 256,  427 => 254,  422 => 251,  420 => 250,  418 => 249,  415 => 248,  411 => 247,  404 => 243,  399 => 241,  395 => 240,  391 => 239,  383 => 234,  379 => 233,  374 => 231,  365 => 225,  360 => 223,  356 => 222,  353 => 221,  350 => 220,  347 => 219,  345 => 218,  342 => 217,  338 => 215,  334 => 213,  329 => 210,  325 => 208,  323 => 206,  322 => 202,  320 => 199,  312 => 196,  309 => 195,  307 => 194,  304 => 193,  300 => 191,  298 => 189,  297 => 188,  296 => 184,  294 => 181,  288 => 179,  285 => 178,  282 => 177,  280 => 176,  276 => 174,  274 => 172,  273 => 168,  272 => 167,  270 => 165,  263 => 163,  261 => 162,  257 => 160,  255 => 158,  254 => 150,  253 => 149,  251 => 146,  244 => 144,  242 => 143,  238 => 141,  236 => 139,  235 => 138,  234 => 137,  233 => 133,  232 => 132,  230 => 129,  224 => 127,  221 => 126,  219 => 125,  214 => 122,  212 => 121,  208 => 119,  206 => 117,  205 => 116,  204 => 115,  203 => 107,  202 => 105,  197 => 104,  195 => 103,  191 => 101,  187 => 99,  184 => 98,  182 => 97,  177 => 95,  173 => 94,  169 => 93,  165 => 92,  161 => 90,  154 => 86,  151 => 85,  144 => 82,  137 => 79,  134 => 78,  132 => 77,  128 => 75,  126 => 74,  123 => 73,  116 => 70,  109 => 67,  106 => 66,  104 => 65,  100 => 63,  98 => 62,  95 => 61,  89 => 58,  83 => 56,  81 => 55,  75 => 51,  73 => 48,  69 => 46,  66 => 45,  62 => 44,  57 => 33,  55 => 42,  53 => 41,  51 => 40,  49 => 39,  47 => 38,  45 => 36,  43 => 34,  36 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/form_followup.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/form_followup.html.twig");
    }
}
