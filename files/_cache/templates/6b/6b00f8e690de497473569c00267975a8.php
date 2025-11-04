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

/* components/itilobject/timeline/form_solution.html.twig */
class __TwigTemplate_f78ada8226f02be992d05eedd657cd6d extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/timeline/form_solution.html.twig", 34)->unwrap();
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
        $context["noform"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "noform", [], "array", true, true, false, 42) || ((($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["noform"] ?? null) : null) == true));
        // line 43
        $context["disabled"] = (($context["candedit"] ?? null) == false);
        // line 33
        $this->parent = $this->loadTemplate("components/itilobject/timeline/form_timeline_item.html.twig", "components/itilobject/timeline/form_solution.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 45
    public function block_timeline_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        yield "   ";
        if ((($context["form_mode"] ?? null) == "view")) {
            // line 47
            yield "      <div class=\"read-only-content\">
         <div class= \"rich_text_container\">
            ";
            // line 49
            yield $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getEnhancedHtml((($__internal_compile_2 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["content"] ?? null) : null), ["user_mentions" => true, "images_gallery" => true]);
            // line 52
            yield "
         </div>

         <div class=\"timeline-badges\">
            ";
            // line 56
            if ((($__internal_compile_3 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["solutiontypes_id"] ?? null) : null)) {
                // line 57
                yield "               <span class=\"badge bg-blue-lt\">
                  <i class=\"fas fa-tag me-1\"></i>
                  ";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("SolutionType", (($__internal_compile_4 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["solutiontypes_id"] ?? null) : null)), "html", null, true);
                yield "
               </span>
            ";
            }
            // line 62
            yield "
            ";
            // line 63
            if ((((($__internal_compile_5 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["status"] ?? null) : null) != Twig\Extension\CoreExtension::constant("CommonITILValidation::WAITING")) && ((($__internal_compile_6 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["status"] ?? null) : null) != Twig\Extension\CoreExtension::constant("CommonITILValidation::NONE")))) {
                // line 64
                yield "               <span class=\"badge bg-blue-lt\">
                  ";
                // line 65
                $context["action"] = ((((($__internal_compile_7 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["status"] ?? null) : null) == Twig\Extension\CoreExtension::constant("CommonITILValidation::ACCEPTED"))) ? (__("Accepted")) : (_x("validation", "Refused")));
                // line 66
                yield "                  ";
                yield Twig\Extension\CoreExtension::sprintf(__("%1\$s on %2\$s by %3\$s"),                 // line 67
($context["action"] ?? null), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_8 =                 // line 68
($context["entry_i"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["date_approval"] ?? null) : null)), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("User", (($__internal_compile_9 =                 // line 69
($context["entry_i"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["users_id_approval"] ?? null) : null), ["enable_anonymization" => true]));
                // line 70
                yield "
               </span>
            ";
            }
            // line 73
            yield "         </div>
      </div>
   ";
        } else {
            // line 76
            yield "      <div class=\"itilsolution\">
         ";
            // line 77
            $context["validation_class"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getValidationClassInstance", [], "method", false, false, false, 77);
            // line 78
            yield "         ";
            if ( !(null === ($context["validation_class"] ?? null))) {
                // line 79
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["validation_class"] ?? null), "alertValidation", [($context["item"] ?? null), "solution"], "method", false, false, false, 79), "html", null, true);
                yield "
         ";
            }
            // line 81
            yield "
         ";
            // line 82
            if ( !($context["noform"] ?? null)) {
                // line 83
                yield "         <form name=\"asset_form\" style=\"width: 100%;\" class=\"d-flex flex-column\" method=\"post\"
               action=\"";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "getFormURL", [], "method", false, false, false, 84), "html", null, true);
                yield "\" enctype=\"multipart/form-data\" data-track-changes=\"true\" data-submit-once>
         ";
            }
            // line 86
            yield "
            <input type=\"hidden\" name=\"itemtype\" value=\"";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 87), "html", null, true);
            yield "\" />
            <input type=\"hidden\" name=\"items_id\" value=\"";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_10 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 88)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["id"] ?? null) : null), "html", null, true);
            yield "\" />
            <input type=\"hidden\" name=\"_no_message_link\" value=\"1\" />
            ";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("pre_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            yield "

            ";
            // line 92
            if (($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ticket_Ticket::countOpenChildren", [(($__internal_compile_11 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 92)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["id"] ?? null) : null)]) > 0)) {
                // line 93
                yield "               <div class=\"alert alert-important alert-warning\">
                  <i class=\"fas fa-2x fa-info me-2\"></i>
                  <span>";
                // line 95
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Warning: non closed children tickets depends on current ticket. Are you sure you want to close it?"), "html", null, true);
                yield "</span>
               </div>
            ";
            }
            // line 98
            yield "
            <div class=\"row mx-n3 mx-xxl-auto\">
               <div class=\"col-12 col-xl-7 col-xxl-8\">
                  ";
            // line 101
            $context["content"] = (($__internal_compile_12 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 101)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["content"] ?? null) : null);
            // line 102
            yield "                  ";
            if ((($context["kb_id_toload"] ?? null) > 0)) {
                // line 103
                yield "                     ";
                $context["kb_item"] = $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem("KnowbaseItem", ($context["kb_id_toload"] ?? null));
                // line 104
                yield "                     ";
                $context["content"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["kb_item"] ?? null), "fields", [], "any", false, true, false, 104), "answer", [], "array", true, true, false, 104) &&  !(null === (($__internal_compile_13 = CoreExtension::getAttribute($this->env, $this->source, ($context["kb_item"] ?? null), "fields", [], "any", false, true, false, 104)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["answer"] ?? null) : null)))) ? ((($__internal_compile_14 = CoreExtension::getAttribute($this->env, $this->source, ($context["kb_item"] ?? null), "fields", [], "any", false, true, false, 104)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["answer"] ?? null) : null)) : (""));
                // line 105
                yield "                  ";
            }
            // line 106
            yield "
                  ";
            // line 107
            yield CoreExtension::callMacro($macros["fields"], "macro_textareaField", ["content",             // line 109
($context["content"] ?? null), "", ["full_width" => true, "no_label" => true, "enable_richtext" => true, "enable_fileupload" => true, "enable_mentions" => true, "entities_id" => (($__internal_compile_15 = CoreExtension::getAttribute($this->env, $this->source,             // line 117
($context["item"] ?? null), "fields", [], "any", false, false, false, 117)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["entities_id"] ?? null) : null), "rand" =>             // line 118
($context["rand"] ?? null), "disabled" =>             // line 119
($context["disabled"] ?? null)]], 107, $context, $this->getSourceContext());
            // line 121
            yield "
               </div>
               <div class=\"col-12 col-xl-5 col-xxl-4 order-first order-md-last pe-0 pe-xxl-auto\">
                  <div class=\"row\">
                     ";
            // line 125
            if (($context["candedit"] ?? null)) {
                // line 126
                yield "                        ";
                if ((($context["can_read_kb"] ?? null) &&  !($context["nokb"] ?? null))) {
                    // line 127
                    yield "                           ";
                    $context["search_solution_button"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 128
                        yield "                              <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path((((("/front/knowbaseitem.php?item_itemtype=" . CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 128)) . "&item_items_id=") . CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "method", false, false, false, 128)) . "&forcetab=Knowbase\$1")), "html", null, true);
                        yield "\"
                                 class=\"btn btn-secondary overflow-hidden text-nowrap\" type=\"submit\"
                                 title=\"";
                        // line 130
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Search a solution"), "html", null, true);
                        yield "\"
                                 data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                                 <i class=\"fas fa-search\"></i>
                              </a>
                           ";
                        return; yield '';
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 135
                    yield "                           ";
                    yield CoreExtension::callMacro($macros["fields"], "macro_field", ["",                     // line 137
($context["search_solution_button"] ?? null), "", ["full_width" => true, "icon_label" => true]], 135, $context, $this->getSourceContext());
                    // line 143
                    yield "
                        ";
                }
                // line 145
                yield "
                        ";
                // line 146
                $context["sol_template_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 147
                    yield "                           <i class=\"fas fa-reply fa-fw me-1\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                              title=\"";
                    // line 148
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Solution template", "Solution templates", Session::getPluralNumber()), "html", null, true);
                    yield "\"></i>
                        ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 150
                yield "                        ";
                yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["SolutionTemplate", "solutiontemplates_id", 0,                 // line 154
($context["sol_template_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "on_change" => (("solutiontemplate_update" .                 // line 158
($context["rand"] ?? null)) . "(this.value)"), "rand" =>                 // line 159
($context["rand"] ?? null), "entity" => (($__internal_compile_16 = CoreExtension::getAttribute($this->env, $this->source,                 // line 160
($context["item"] ?? null), "fields", [], "any", false, false, false, 160)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["entities_id"] ?? null) : null), "disabled" =>                 // line 161
($context["disabled"] ?? null)]], 150, $context, $this->getSourceContext());
                // line 163
                yield "

                     ";
            }
            // line 166
            yield "
                     ";
            // line 167
            $context["sol_type_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 168
                yield "                        <i class=\"fas fa-tag fa-fw me-1\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("SolutionType"), "html", null, true);
                yield "\"
                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                     ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 171
            yield "                     ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["SolutionType", "solutiontypes_id", (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 174
($context["subitem"] ?? null), "fields", [], "any", false, true, false, 174), "solutiontypes_id", [], "array", true, true, false, 174) &&  !(null === (($__internal_compile_17 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, true, false, 174)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["solutiontypes_id"] ?? null) : null)))) ? ((($__internal_compile_18 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, true, false, 174)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["solutiontypes_id"] ?? null) : null)) : (0)),             // line 175
($context["sol_type_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>             // line 179
($context["rand"] ?? null), "entity" => (($__internal_compile_19 = CoreExtension::getAttribute($this->env, $this->source,             // line 180
($context["item"] ?? null), "fields", [], "any", false, false, false, 180)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["entities_id"] ?? null) : null), "disabled" =>             // line 181
($context["disabled"] ?? null)]], 171, $context, $this->getSourceContext());
            // line 183
            yield "

                     ";
            // line 185
            if ((($context["can_read_kb"] ?? null) && (($context["kb_id_toload"] ?? null) > 0))) {
                // line 186
                yield "                        ";
                $context["link_kb_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 187
                    yield "                           <i class=\"fas fa-link fa-fw me-1\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                              title=\"";
                    // line 188
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(__("Link to knowledge base entry #%id"), ["%id" => ($context["kb_id_toload"] ?? null)]), "html", null, true);
                    yield "\"></i>
                        ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 190
                yield "                        ";
                yield CoreExtension::callMacro($macros["fields"], "macro_sliderField", ["kb_linked_id", 1,                 // line 193
($context["link_kb_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                 // line 197
($context["rand"] ?? null), "yes_value" =>                 // line 198
($context["kb_id_toload"] ?? null)]], 190, $context, $this->getSourceContext());
                // line 200
                yield "
                     ";
            }
            // line 202
            yield "
                     ";
            // line 203
            if (((($context["candedit"] ?? null) && ($context["can_update_kb"] ?? null)) &&  !($context["nokb"] ?? null))) {
                // line 204
                yield "                        ";
                $context["sol_to_kb_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 205
                    yield "                           <i class=\"far fa-save fa-fw me-1\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save and add to the knowledge base"), "html", null, true);
                    yield "\"
                              data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                        ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 208
                yield "                        ";
                yield CoreExtension::callMacro($macros["fields"], "macro_sliderField", ["_sol_to_kb", 0,                 // line 211
($context["sol_to_kb_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                 // line 215
($context["rand"] ?? null)]], 208, $context, $this->getSourceContext());
                // line 217
                yield "
                     ";
            }
            // line 219
            yield "                  </div>
               </div>
            </div>

         ";
            // line 223
            if ( !($context["noform"] ?? null)) {
                // line 224
                yield "               ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("post_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
                yield "
               <div class=\"d-flex card-footer mx-n3 mb-n3\">
                  ";
                // line 226
                if (((($__internal_compile_20 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 226)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["id"] ?? null) : null) <= 0)) {
                    // line 227
                    yield "                     <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"add\">
                        <i class=\"fas fa-plus\"></i>
                        <span>";
                    // line 229
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Add"), "html", null, true);
                    yield "</span>
                     </button>
                  ";
                } else {
                    // line 232
                    yield "                     <input type=\"hidden\" name=\"id\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_21 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 232)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["id"] ?? null) : null), "html", null, true);
                    yield "\" />
                     <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\">
                        <i class=\"far fa-save\"></i>
                        <span>";
                    // line 235
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Save"), "html", null, true);
                    yield "</span>
                     </button>
                  ";
                }
                // line 238
                yield "               </div>

               <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                // line 240
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
                yield "\" />
            </form>
         ";
            }
            // line 243
            yield "      </div>

      <script type=\"text/javascript\">
         function solutiontemplate_update";
            // line 246
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "(value) {
            \$.ajax({
               url: '";
            // line 248
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/solution.php"), "html", null, true);
            yield "',
               type: 'POST',
               data: {
                  solutiontemplates_id: value,
                  items_id: '";
            // line 252
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_22 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 252)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["id"] ?? null) : null), "html", null, true);
            yield "',
                  itemtype: '";
            // line 253
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 253), "html", null, true);
            yield "'
               }
            }).done(function (data) {
               // set textarea content
               setRichTextEditorContent(\"content_";
            // line 257
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\", data.content);

               // set type
               var solutiontypes_id = isNaN(parseInt(data.solutiontypes_id))
                  ? 0
                  : parseInt(data.solutiontypes_id);

               //need to create new DOM option, because SELECT is remotely-sourced (AJAX)
               //see : https://select2.org/programmatic-control/add-select-clear-items#preselecting-options-in-an-remotely-sourced-ajax-select2
               var newOption = new Option(data.solutiontypes_name, solutiontypes_id, true, true);
               \$(\"#dropdown_solutiontypes_id";
            // line 267
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\").append(newOption).trigger('change');
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
        return "components/itilobject/timeline/form_solution.html.twig";
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
        return array (  433 => 267,  420 => 257,  413 => 253,  409 => 252,  402 => 248,  397 => 246,  392 => 243,  386 => 240,  382 => 238,  376 => 235,  369 => 232,  363 => 229,  359 => 227,  357 => 226,  351 => 224,  349 => 223,  343 => 219,  339 => 217,  337 => 215,  336 => 211,  334 => 208,  326 => 205,  323 => 204,  321 => 203,  318 => 202,  314 => 200,  312 => 198,  311 => 197,  310 => 193,  308 => 190,  302 => 188,  299 => 187,  296 => 186,  294 => 185,  290 => 183,  288 => 181,  287 => 180,  286 => 179,  285 => 175,  284 => 174,  282 => 171,  274 => 168,  272 => 167,  269 => 166,  264 => 163,  262 => 161,  261 => 160,  260 => 159,  259 => 158,  258 => 154,  256 => 150,  250 => 148,  247 => 147,  245 => 146,  242 => 145,  238 => 143,  236 => 137,  234 => 135,  225 => 130,  219 => 128,  216 => 127,  213 => 126,  211 => 125,  205 => 121,  203 => 119,  202 => 118,  201 => 117,  200 => 109,  199 => 107,  196 => 106,  193 => 105,  190 => 104,  187 => 103,  184 => 102,  182 => 101,  177 => 98,  171 => 95,  167 => 93,  165 => 92,  160 => 90,  155 => 88,  151 => 87,  148 => 86,  143 => 84,  140 => 83,  138 => 82,  135 => 81,  129 => 79,  126 => 78,  124 => 77,  121 => 76,  116 => 73,  111 => 70,  109 => 69,  108 => 68,  107 => 67,  105 => 66,  103 => 65,  100 => 64,  98 => 63,  95 => 62,  89 => 59,  85 => 57,  83 => 56,  77 => 52,  75 => 49,  71 => 47,  68 => 46,  64 => 45,  59 => 33,  57 => 43,  55 => 42,  53 => 41,  51 => 40,  49 => 39,  47 => 38,  45 => 36,  43 => 34,  36 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/form_solution.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/form_solution.html.twig");
    }
}
