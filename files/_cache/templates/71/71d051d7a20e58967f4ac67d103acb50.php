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

/* components/itilobject/timeline/form_validation.html.twig */
class __TwigTemplate_eca01f2f756a233152f90db51564e1ec extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/timeline/form_validation.html.twig", 34)->unwrap();
        // line 36
        $context["params"] = ((array_key_exists("params", $context)) ? (Twig\Extension\CoreExtension::default(($context["params"] ?? null), [])) : ([]));
        // line 33
        $this->parent = $this->loadTemplate("components/itilobject/timeline/form_timeline_item.html.twig", "components/itilobject/timeline/form_validation.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    public function block_timeline_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        yield "   ";
        if ((($context["form_mode"] ?? null) == "view")) {
            // line 40
            yield "      <div class=\"read-only-content w-100\">
         ";
            // line 41
            yield (($__internal_compile_0 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["content"] ?? null) : null);
            yield "

         ";
            // line 43
            if (Twig\Extension\CoreExtension::length($this->env->getCharset(), (($__internal_compile_1 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["comment_submission"] ?? null) : null))) {
                // line 44
                yield "            <div class='alert alert-info mt-2'>
                <div class='d-flex'>
                    <div><i class='ti ti-quote me-2'></i></div>
                    <div class=\"rich_text_container\">
                        ";
                // line 48
                yield $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getEnhancedHtml((($__internal_compile_2 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["comment_submission"] ?? null) : null), ["user_mentions" => true, "images_gallery" => true]);
                // line 51
                yield "
                    </div>
                </div>
            </div>
         ";
            }
            // line 56
            yield "         ";
            if (Twig\Extension\CoreExtension::length($this->env->getCharset(), (($__internal_compile_3 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["comment_validation"] ?? null) : null))) {
                // line 57
                yield "            <div class='alert alert-info mt-2'>
                <div class='d-flex'>
                    <div><i class='ti ti-quote me-2'></i></div>
                    <div class=\"rich_text_container\">
                        ";
                // line 61
                yield $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getEnhancedHtml((($__internal_compile_4 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["comment_validation"] ?? null) : null), ["user_mentions" => true, "images_gallery" => true]);
                // line 64
                yield "
                    </div>
                </div>
            </div>
         ";
            }
            // line 69
            yield "
         ";
            // line 70
            if ((($__internal_compile_5 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["can_answer"] ?? null) : null)) {
                // line 71
                yield "            <hr class=\"my-2\" />
            <form id=\"validationanswers_id_";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_6 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["id"] ?? null) : null), "html", null, true);
                yield "\"
                  action=\"";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath((($__internal_compile_7 = ($context["entry"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["type"] ?? null) : null)), "html", null, true);
                yield "\" method=\"post\" data-submit-once>

               <input type=\"hidden\" name=\"id\" value=\"";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_8 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["id"] ?? null) : null), "html", null, true);
                yield "\" />
               <input type=\"hidden\" name=\"users_id_validate\" value=\"";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_9 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["users_id_validate"] ?? null) : null), "html", null, true);
                yield "\" />
               <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
                yield "\" />
               ";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("pre_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
                yield "

               <div class=\"mb-3 comment-part\">
                  ";
                // line 81
                yield CoreExtension::callMacro($macros["fields"], "macro_textareaField", ["comment_validation", "", _n("Comment", "Comments", 1), ["full_width" => true, "enable_richtext" => true, "is_horizontal" => false, "enable_fileupload" => false, "enable_mentions" => true, "entities_id" => (($__internal_compile_10 = CoreExtension::getAttribute($this->env, $this->source,                 // line 91
($context["item"] ?? null), "fields", [], "any", false, false, false, 91)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["entities_id"] ?? null) : null), "rand" =>                 // line 92
($context["rand"] ?? null)]], 81, $context, $this->getSourceContext());
                // line 94
                yield "

                  ";
                // line 96
                yield CoreExtension::callMacro($macros["fields"], "macro_fileField", ["filename", null, "", ["multiple" => true, "full_width" => true, "no_label" => true]], 96, $context, $this->getSourceContext());
                // line 105
                yield "
               </div>

               <div class=\"validation-footer\">
                  <button type=\"submit\" class=\"btn btn-outline-green\" name=\"approval_action\" value=\"approve\">
                     <i class=\"fas fa-thumbs-up\"></i>
                     <span class=\"validation-label\">";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Approve"), "html", null, true);
                yield "</span>
                  </button>
                  <button type=\"submit\" class=\"btn btn-outline-red\" name=\"approval_action\" value=\"refuse\">
                     <i class=\"fas fa-thumbs-down\"></i>
                     <span class=\"validation-label\">";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Refuse"), "html", null, true);
                yield "</span>
                  </button>
               </div>
            </form>
         ";
            }
            // line 120
            yield "      </div>
   ";
        } elseif ((        // line 121
($context["form_mode"] ?? null) == "answer")) {
            // line 122
            yield "      <form name=\"asset_form\" style=\"width: 100%;\" class=\"d-flex flex-column\" method=\"post\"
            action=\"";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "getFormURL", [], "method", false, false, false, 123), "html", null, true);
            yield "\" enctype=\"multipart/form-data\" data-track-changes=\"true\" data-submit-once>

         <input type=\"hidden\" name=\"id\" value=\"";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_11 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 125)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["id"] ?? null) : null), "html", null, true);
            yield "\" />
         <input type=\"hidden\" name=\"users_id_validate\" value=\"";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_12 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 126)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["users_id_validate"] ?? null) : null), "html", null, true);
            yield "\" />
         <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\" />

         ";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("pre_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            yield "

         <div class=\"mb-3 comment-part\">
            ";
            // line 132
            yield CoreExtension::callMacro($macros["fields"], "macro_textareaField", ["comment_validation", (($__internal_compile_13 = CoreExtension::getAttribute($this->env, $this->source,             // line 134
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 134)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["comment_validation"] ?? null) : null), _n("Comment", "Comments", 1), ["full_width" => true, "enable_richtext" => true, "is_horizontal" => false, "enable_fileupload" => false, "enable_mentions" => true, "entities_id" => (($__internal_compile_14 = CoreExtension::getAttribute($this->env, $this->source,             // line 142
($context["item"] ?? null), "fields", [], "any", false, false, false, 142)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["entities_id"] ?? null) : null), "rand" =>             // line 143
($context["rand"] ?? null)]], 132, $context, $this->getSourceContext());
            // line 145
            yield "

            ";
            // line 147
            yield CoreExtension::callMacro($macros["fields"], "macro_fileField", ["filename", null, "", ["multiple" => true, "full_width" => true, "no_label" => true]], 147, $context, $this->getSourceContext());
            // line 156
            yield "
         </div>

         <div class=\"validation-footer\">
            <button type=\"submit\" class=\"btn btn-outline-green\" name=\"approval_action\" value=\"approve\">
               <i class=\"fas fa-thumbs-up\"></i>
               <span class=\"validation-label\">";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Approve"), "html", null, true);
            yield "</span>
            </button>
            <button type=\"submit\" class=\"btn btn-outline-red\" name=\"approval_action\" value=\"refuse\">
               <i class=\"fas fa-thumbs-down\"></i>
               <span class=\"validation-label\">";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Refuse"), "html", null, true);
            yield "</span>
            </button>
         </div>
      </form>
   ";
        } else {
            // line 171
            yield "      <div class=\"itilvalidation card mt-4\">
         <form name=\"asset_form\" style=\"width: 100%;\" class=\"d-flex flex-column\" method=\"post\"
               action=\"";
            // line 173
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "getFormURL", [], "method", false, false, false, 173), "html", null, true);
            yield "\" enctype=\"multipart/form-data\" data-track-changes=\"true\" data-submit-once>
            <input type=\"hidden\" name=\"itemtype\" value=\"";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 174), "html", null, true);
            yield "\" />
            <input type=\"hidden\" name=\"";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 175), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_15 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 175)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["id"] ?? null) : null), "html", null, true);
            yield "\" />

            <div class=\"card-header\">
                <h3 class=\"cart-title\">";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Validation request"), "html", null, true);
            yield "</h3>
            </div>
            <div class=\"card-body\">
                ";
            // line 181
            yield CoreExtension::callMacro($macros["fields"], "macro_readOnlyField", ["approval_requester", CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentUser(), "getFriendlyName", [], "method", false, false, false, 183), _n("Requester", "Requesters", 1), ["full_width" => true, "rand" =>             // line 187
($context["rand"] ?? null)]], 181, $context, $this->getSourceContext());
            // line 189
            yield "

                ";
            // line 191
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "isNewItem", [], "method", false, false, false, 191)) {
                // line 192
                yield "                    ";
                yield CoreExtension::callMacro($macros["fields"], "macro_dropdownArrayField", ["validatortype", (($__internal_compile_16 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 192)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["validatortype"] ?? null) : null), ["User" => $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), "Group" => $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Group")], __("Approver"), ["display_emptychoice" => true, "rand" =>                 // line 197
($context["rand"] ?? null), "field_class" => "col-12", "label_class" => "col-xxl-4", "input_class" => "col-xxl-8 flex-wrap", "add_field_html" => (("<span id=\"show_validator_field" .                 // line 201
($context["rand"] ?? null)) . "\" class=\"flex-grow-1\">&nbsp;</span>")]], 192, $context, $this->getSourceContext());
                // line 202
                yield "
                    ";
                // line 203
                $context["right"] = "validate";
                // line 204
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 204) === "Ticket")) {
                    // line 205
                    yield "                        ";
                    $context["right"] = ((((($__internal_compile_17 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 205)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["type"] ?? null) : null) == 2)) ? ("validate_request") : ("validate_incident"));
                    // line 206
                    yield "                    ";
                }
                // line 207
                yield "                    ";
                if ( !(null === (($__internal_compile_18 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 207)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["validatortype"] ?? null) : null))) {
                    // line 208
                    yield "                    <script type=\"application/javascript\">
                        \$('#show_validator_field";
                    // line 209
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                    yield "').load(CFG_GLPI.root_doc + '/ajax/dropdownValidator.php', {
                            id: ";
                    // line 210
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_19 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 210)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["id"] ?? null) : null), "html", null, true);
                    yield ",
                            entity: ";
                    // line 211
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_20 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 211)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["entities_id"] ?? null) : null), "html", null, true);
                    yield ",
                            right: '";
                    // line 212
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["right"] ?? null), "html", null, true);
                    yield "',
                            validatortype: \"";
                    // line 213
                    yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, true, false, 213), "users_id_validate", [], "array", false, true, false, 213), "groups_id", [], "array", true, true, false, 213)) ? ("Group") : ((( !Twig\Extension\CoreExtension::testEmpty((($__internal_compile_21 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 213)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["users_id_validate"] ?? null) : null))) ? ("User") : (""))));
                    yield "\"
                        });
                    </script>
                    ";
                } else {
                    // line 217
                    yield "                        ";
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ajax::updateItemOnSelectEvent", [("dropdown_validatortype" .                     // line 218
($context["rand"] ?? null)), ("show_validator_field" .                     // line 219
($context["rand"] ?? null)), ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("root_doc") . "/ajax/dropdownValidator.php"), ["id" => 0, "entity" => (($__internal_compile_22 = CoreExtension::getAttribute($this->env, $this->source,                     // line 223
($context["item"] ?? null), "fields", [], "any", false, false, false, 223)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["entities_id"] ?? null) : null), "right" =>                     // line 224
($context["right"] ?? null), "validatortype" => "__VALUE__", "groups_id" => 0]]);
                    // line 229
                    yield "                    ";
                }
                // line 230
                yield "                ";
            } else {
                // line 231
                yield "                    ";
                yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["User", "users_id_validate", (($__internal_compile_23 = CoreExtension::getAttribute($this->env, $this->source,                 // line 234
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 234)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["users_id_validate"] ?? null) : null), __("Approver"), ["disabled" => true, "full_width" => true]], 231, $context, $this->getSourceContext());
                // line 240
                yield "
                ";
            }
            // line 242
            yield "
                ";
            // line 243
            yield CoreExtension::callMacro($macros["fields"], "macro_textareaField", ["comment_submission", (($__internal_compile_24 = CoreExtension::getAttribute($this->env, $this->source,             // line 245
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 245)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["comment_submission"] ?? null) : null), _n("Comment", "Comments", 1), ["full_width" => true, "enable_richtext" => true, "enable_fileupload" => false, "enable_mentions" => true, "entities_id" => (($__internal_compile_25 = CoreExtension::getAttribute($this->env, $this->source,             // line 252
($context["item"] ?? null), "fields", [], "any", false, false, false, 252)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["entities_id"] ?? null) : null), "rand" =>             // line 253
($context["rand"] ?? null)]], 243, $context, $this->getSourceContext());
            // line 255
            yield "

                ";
            // line 257
            yield CoreExtension::callMacro($macros["fields"], "macro_fileField", ["filename", null, "", ["multiple" => true, "full_width" => true]], 257, $context, $this->getSourceContext());
            // line 265
            yield "
            </div>

            ";
            // line 268
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("post_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            yield "

            <div class=\"d-flex justify-content-center card-footer\">
               ";
            // line 271
            if (((($__internal_compile_26 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 271)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["id"] ?? null) : null) <= 0)) {
                // line 272
                yield "                  <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"add\">
                     <i class=\"fas fa-plus\"></i>
                     <span>";
                // line 274
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Add"), "html", null, true);
                yield "</span>
                  </button>
               ";
            } else {
                // line 277
                yield "                  <input type=\"hidden\" name=\"id\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_27 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 277)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["id"] ?? null) : null), "html", null, true);
                yield "\" />
                  <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\">
                     <i class=\"far fa-save\"></i>
                     <span>";
                // line 280
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Save"), "html", null, true);
                yield "</span>
                  </button>

                  ";
                // line 283
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "can", [(($__internal_compile_28 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 283)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["id"] ?? null) : null), Twig\Extension\CoreExtension::constant("PURGE")], "method", false, false, false, 283)) {
                    // line 284
                    yield "                     <button class=\"btn btn-outline-danger me-2\" type=\"submit\" name=\"purge\"
                             onclick=\"return confirm('";
                    // line 285
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Confirm the final deletion?"), "html", null, true);
                    yield "');\">
                        <i class=\"fas fa-trash-alt\"></i>
                        <span>";
                    // line 287
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
                    yield "</span>
                     </button>
                  ";
                }
                // line 290
                yield "               ";
            }
            // line 291
            yield "            </div>

            <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 293
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\" />
         </form>
      </div>

      ";
            // line 297
            if (($context["scroll"] ?? null)) {
                // line 298
                yield "         <script type=\"text/javascript\">
            window.scrollTo(0,document.body.scrollHeight);
         </script>
      ";
            }
            // line 302
            yield "   ";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/itilobject/timeline/form_validation.html.twig";
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
        return array (  428 => 302,  422 => 298,  420 => 297,  413 => 293,  409 => 291,  406 => 290,  400 => 287,  395 => 285,  392 => 284,  390 => 283,  384 => 280,  377 => 277,  371 => 274,  367 => 272,  365 => 271,  359 => 268,  354 => 265,  352 => 257,  348 => 255,  346 => 253,  345 => 252,  344 => 245,  343 => 243,  340 => 242,  336 => 240,  334 => 234,  332 => 231,  329 => 230,  326 => 229,  324 => 224,  323 => 223,  322 => 219,  321 => 218,  319 => 217,  312 => 213,  308 => 212,  304 => 211,  300 => 210,  296 => 209,  293 => 208,  290 => 207,  287 => 206,  284 => 205,  281 => 204,  279 => 203,  276 => 202,  274 => 201,  273 => 197,  271 => 192,  269 => 191,  265 => 189,  263 => 187,  262 => 181,  256 => 178,  248 => 175,  244 => 174,  240 => 173,  236 => 171,  228 => 166,  221 => 162,  213 => 156,  211 => 147,  207 => 145,  205 => 143,  204 => 142,  203 => 134,  202 => 132,  196 => 129,  191 => 127,  187 => 126,  183 => 125,  178 => 123,  175 => 122,  173 => 121,  170 => 120,  162 => 115,  155 => 111,  147 => 105,  145 => 96,  141 => 94,  139 => 92,  138 => 91,  137 => 81,  131 => 78,  127 => 77,  123 => 76,  119 => 75,  114 => 73,  110 => 72,  107 => 71,  105 => 70,  102 => 69,  95 => 64,  93 => 61,  87 => 57,  84 => 56,  77 => 51,  75 => 48,  69 => 44,  67 => 43,  62 => 41,  59 => 40,  56 => 39,  52 => 38,  47 => 33,  45 => 36,  43 => 34,  36 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/form_validation.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/form_validation.html.twig");
    }
}
