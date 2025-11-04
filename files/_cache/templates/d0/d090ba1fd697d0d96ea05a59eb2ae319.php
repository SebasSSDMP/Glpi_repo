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

/* components/itilobject/timeline/form_task.html.twig */
class __TwigTemplate_01843f1f7a5cdcd50e7252be74b2770d extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/timeline/form_task.html.twig", 34)->unwrap();
        // line 36
        $context["params"] = Twig\Extension\CoreExtension::merge(["parent" => ($context["item"] ?? null)], ((array_key_exists("params", $context)) ? (Twig\Extension\CoreExtension::default(($context["params"] ?? null), [])) : ([])));
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
        // line 43
        $context["formoptions"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "formoptions", [], "array", true, true, false, 43) &&  !(null === (($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["formoptions"] ?? null) : null)))) ? ((($__internal_compile_2 = ($context["params"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["formoptions"] ?? null) : null)) : (""));
        // line 33
        $this->parent = $this->loadTemplate("components/itilobject/timeline/form_timeline_item.html.twig", "components/itilobject/timeline/form_task.html.twig", 33);
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
            yield "      <div class=\"read-only-content ";
            yield ((((($__internal_compile_3 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["state"] ?? null) : null) === constant("Planning::DONE"))) ? ("done") : (""));
            yield "\">
         <div class=\"rich_text_container text-content\" data-bs-html=\"true\" data-bs-custom-class=\"todo-list-tooltip\"
              title=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getTextFromHtml((($__internal_compile_4 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["content"] ?? null) : null)), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\">
            ";
            // line 50
            yield $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getEnhancedHtml((($__internal_compile_5 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["content"] ?? null) : null), ["user_mentions" => true, "images_gallery" => true]);
            // line 53
            yield "
         </div>

         <div class=\"timeline-badges\">
            ";
            // line 57
            if ((($__internal_compile_6 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["users_id_tech"] ?? null) : null)) {
                // line 58
                yield "               <span class=\"badge bg-orange-lt\">
                  ";
                // line 59
                $context["is_current_tech"] = ((($__internal_compile_7 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["users_id_tech"] ?? null) : null) == $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"));
                // line 60
                yield "                  ";
                $context["anonym_tech"] = ((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "helpdesk") &&  !($context["is_current_tech"] ?? null)) && ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->getEntityConfig("anonymize_support_agents", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")) != Twig\Extension\CoreExtension::constant("Entity::ANONYMIZE_DISABLED")));
                // line 61
                yield "                  ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/user/link_with_tooltip.html.twig", ["users_id" => (($__internal_compile_8 =                 // line 62
($context["entry_i"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["users_id_tech"] ?? null) : null), "enable_anonymization" =>                 // line 63
($context["anonym_tech"] ?? null)], false);
                // line 64
                yield "
               </span>
            ";
            }
            // line 67
            yield "
            ";
            // line 68
            if ((($__internal_compile_9 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["groups_id_tech"] ?? null) : null)) {
                // line 69
                yield "               <span class=\"badge bg-orange-lt\">
                  <i class=\"fas fa-users me-1\"></i>
                  ";
                // line 71
                yield $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("Group", (($__internal_compile_10 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["groups_id_tech"] ?? null) : null), ["enable_anonymization" => true]);
                yield "
               </span>
            ";
            }
            // line 74
            yield "
            ";
            // line 75
            if ((($__internal_compile_11 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["taskcategories_id"] ?? null) : null)) {
                // line 76
                yield "               <span class=\"badge bg-orange-lt\">
                  ";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("TaskCategory", (($__internal_compile_12 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["taskcategories_id"] ?? null) : null)), "html", null, true);
                yield "
               </span>
            ";
            }
            // line 80
            yield "
            ";
            // line 81
            if ((($__internal_compile_13 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["actiontime"] ?? null) : null)) {
                // line 82
                yield "               <span class=\"actiontime badge bg-orange-lt\">
                  <i class=\"fas fa-stopwatch me-1\"></i>
                  ";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDuration((($__internal_compile_14 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["actiontime"] ?? null) : null)), "html", null, true);
                yield "
               </span>
            ";
            }
            // line 87
            yield "
            ";
            // line 88
            if ((($__internal_compile_15 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["begin"] ?? null) : null)) {
                // line 89
                yield "               <span class=\"planification badge bg-orange-lt\">
                  <i class=\"fas fa-calendar me-1\"></i>
                  ";
                // line 91
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_16 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["begin"] ?? null) : null)), "html", null, true);
                yield "
                  &rArr;
                  ";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_17 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["end"] ?? null) : null)), "html", null, true);
                yield "
               </span>
            ";
            }
            // line 96
            yield "
            ";
            // line 97
            if ((($__internal_compile_18 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["sourceitems_id"] ?? null) : null)) {
                // line 98
                yield "               <span class=\"badge bg-blue-lt\">
                  <i class=\"fas fa-code-branch me-1\"></i>
                  ";
                // line 100
                $context["merged_badge"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 101
                    yield "                     <span class=\"badge ms-2 me-n2\">
                        ";
                    // line 102
                    yield $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("Ticket", (($__internal_compile_19 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["sourceitems_id"] ?? null) : null));
                    yield "
                     </span>
                  ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 105
                yield "                  ";
                yield Twig\Extension\CoreExtension::sprintf(__("Merged from Ticket %1\$s"), ($context["merged_badge"] ?? null));
                yield "
               </span>
            ";
            }
            // line 108
            yield "
            ";
            // line 109
            if ((($__internal_compile_20 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["sourceof_items_id"] ?? null) : null)) {
                // line 110
                yield "               <span class=\"badge bg-blue-lt\">
                  <i class=\"fas fa-code-branch me-1\"></i>
                  ";
                // line 112
                $context["promoted_badge"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 113
                    yield "                     <span class=\"badge ms-2 me-n2\">
                        ";
                    // line 114
                    yield $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("Ticket", (($__internal_compile_21 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["sourceof_items_id"] ?? null) : null));
                    yield "
                     </span>
                  ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 117
                yield "                  ";
                yield Twig\Extension\CoreExtension::sprintf(__("Promoted to Ticket %1\$s"), ($context["promoted_badge"] ?? null));
                yield "
               </span>
            ";
            }
            // line 120
            yield "
            ";
            // line 121
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/pending_reasons_messages.html.twig");
            yield "
         </div>
      </div>

      <script type=\"text/javascript\">
         function change_task_state(tasks_id, target) {
            \$.post('";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/timeline.php"), "html", null, true);
            yield "',
               {'action':     'change_task_state',
                  'tasks_id':   tasks_id,
                  'parenttype': '";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 130), "html", null, true);
            yield "',
                  '";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 131), "html", null, true);
            yield "': ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_22 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 131)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["id"] ?? null) : null), "html", null, true);
            yield "
               })
               .done(function(response) {
                  \$(target).closest('.timeline-item').find('.state')
                     .removeClass('state_1 state_2')
                     .addClass('state_'+response.state)
                     .attr('title', response.label);

                  \$(target).closest('.timeline-item').find('.read-only-content')
                     .toggleClass('done');

                  var todo_tasks   = \$('.todo-list-state .state.state_1').length;
                  var done_tasks   = \$('.todo-list-state .state.state_2').length;
                  var total_tasks  = todo_tasks + done_tasks;
                  var percent_done = Math.floor(100 * done_tasks / total_tasks);

                  \$('.timeline-progress')
                     .css('width', percent_done + '%')
                     .attr('aria-valuenow', percent_done);
                  \$('.task-progress-label').html(percent_done + '%');
               });
         }
      </script>
   ";
        } else {
            // line 155
            yield "      <div class=\"itiltask\">
         <form name=\"asset_form\" style=\"width: 100%;\" class=\"d-flex flex-column\" method=\"post\"
               action=\"";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "getFormURL", [], "method", false, false, false, 157), "html", null, true);
            yield "\"  enctype=\"multipart/form-data\" data-track-changes=\"true\" data-submit-once ";
            yield ($context["formoptions"] ?? null);
            yield ">
            <input type=\"hidden\" name=\"itemtype\" value=\"";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 158), "html", null, true);
            yield "\" />
            <input type=\"hidden\" name=\"";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 159), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_23 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 159)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["id"] ?? null) : null), "html", null, true);
            yield "\" />
            ";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("pre_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            yield "

            <div class=\"row mx-n3 mx-xxl-auto\">
               <div class=\"col-12 col-xl-7 col-xxl-8\">
                  ";
            // line 164
            yield CoreExtension::callMacro($macros["fields"], "macro_textareaField", ["content", (($__internal_compile_24 = CoreExtension::getAttribute($this->env, $this->source,             // line 166
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 166)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["content"] ?? null) : null), "", ["full_width" => true, "no_label" => true, "enable_richtext" => true, "enable_fileupload" => true, "enable_mentions" => true, "entities_id" => (($__internal_compile_25 = CoreExtension::getAttribute($this->env, $this->source,             // line 174
($context["item"] ?? null), "fields", [], "any", false, false, false, 174)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["entities_id"] ?? null) : null), "rand" =>             // line 175
($context["rand"] ?? null)]], 164, $context, $this->getSourceContext());
            // line 177
            yield "
               </div>
               <div class=\"col-12 col-xl-5 col-xxl-4 order-first order-md-last pe-0 pe-xxl-auto\">
                  <div class=\"row\">

                     ";
            // line 182
            $context["task_template_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 183
                yield "                        <i class=\"fas fa-reply fa-fw me-1\"
                           title=\"";
                // line 184
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Task template", "Task templates", Session::getPluralNumber()), "html", null, true);
                yield "\"></i>
                     ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 186
            yield "                     ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["TaskTemplate", "tasktemplates_id", (($__internal_compile_26 = CoreExtension::getAttribute($this->env, $this->source,             // line 189
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 189)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["tasktemplates_id"] ?? null) : null),             // line 190
($context["task_template_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "on_change" => (("itiltasktemplate_update" .             // line 194
($context["rand"] ?? null)) . "(this.value)"), "entity" => (($__internal_compile_27 = CoreExtension::getAttribute($this->env, $this->source,             // line 195
($context["item"] ?? null), "fields", [], "any", false, false, false, 195)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["entities_id"] ?? null) : null), "rand" =>             // line 196
($context["rand"] ?? null)]], 186, $context, $this->getSourceContext());
            // line 198
            yield "

                     ";
            // line 200
            $context["task_date_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 201
                yield "                        <i class=\"fas fa-calendar fa-fw me-1\"
                           title=\"";
                // line 202
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Date", "Dates", 1), "html", null, true);
                yield "\"></i>
                     ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 204
            yield "                     ";
            yield CoreExtension::callMacro($macros["fields"], "macro_datetimeField", ["date", (($__internal_compile_28 = CoreExtension::getAttribute($this->env, $this->source,             // line 206
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 206)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["date"] ?? null) : null),             // line 207
($context["task_date_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>             // line 211
($context["rand"] ?? null)]], 204, $context, $this->getSourceContext());
            // line 213
            yield "

                     ";
            // line 216
            yield "                     ";
            $context["task_category_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 217
                yield "                        <i class=\"fas fa-tag fa-fw me-1\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Category", "Categories", 1), "html", null, true);
                yield "\"></i>
                     ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 219
            yield "                     ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["TaskCategory", "taskcategories_id", (($__internal_compile_29 = CoreExtension::getAttribute($this->env, $this->source,             // line 222
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 222)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["taskcategories_id"] ?? null) : null),             // line 223
($context["task_category_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "entity" => (($__internal_compile_30 = CoreExtension::getAttribute($this->env, $this->source,             // line 227
($context["item"] ?? null), "fields", [], "any", false, false, false, 227)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["entities_id"] ?? null) : null), "condition" => ["is_active" => 1], "rand" =>             // line 231
($context["rand"] ?? null)]], 219, $context, $this->getSourceContext());
            // line 233
            yield "

                     ";
            // line 236
            yield "                     ";
            $context["task_state_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 237
                yield "                        <i class=\"fas fa-tasks fa-fw me-1\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Status"), "html", null, true);
                yield "\"></i>
                     ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 239
            yield "
                     ";
            // line 240
            $context["task_state"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 241
                yield "                        ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Planning::dropdownState", ["state", (($__internal_compile_31 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 241)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["state"] ?? null) : null), true, ["rand" => ($context["rand"] ?? null)]]);
                // line 242
                yield "                     ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 243
            yield "
                     ";
            // line 244
            yield CoreExtension::callMacro($macros["fields"], "macro_htmlField", ["state",             // line 246
($context["task_state"] ?? null),             // line 247
($context["task_state_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>             // line 251
($context["rand"] ?? null)]], 244, $context, $this->getSourceContext());
            // line 253
            yield "

                     ";
            // line 255
            $context["task_private_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 256
                yield "                        <i class=\"ti ti-lock fa-fw me-1\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Private"), "html", null, true);
                yield "\"></i>
                     ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 258
            yield "                     ";
            yield CoreExtension::callMacro($macros["fields"], "macro_sliderField", ["is_private", (($__internal_compile_32 = CoreExtension::getAttribute($this->env, $this->source,             // line 260
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 260)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["is_private"] ?? null) : null),             // line 261
($context["task_private_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>             // line 265
($context["rand"] ?? null)]], 258, $context, $this->getSourceContext());
            // line 267
            yield "

                     ";
            // line 269
            if ((($context["can_read_kb"] ?? null) && (($context["kb_id_toload"] ?? null) > 0))) {
                // line 270
                yield "                        ";
                $context["link_kb_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 271
                    yield "                           <i class=\"fas fa-link fa-fw me-1\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                              title=\"";
                    // line 272
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(__("Link to knowledge base entry #%id"), ["%id" => ($context["kb_id_toload"] ?? null)]), "html", null, true);
                    yield "\"></i>
                        ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 274
                yield "                        ";
                yield CoreExtension::callMacro($macros["fields"], "macro_sliderField", ["kb_linked_id", 1,                 // line 277
($context["link_kb_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                 // line 281
($context["rand"] ?? null), "yes_value" =>                 // line 282
($context["kb_id_toload"] ?? null)]], 274, $context, $this->getSourceContext());
                // line 284
                yield "
                     ";
            }
            // line 286
            yield "
                     ";
            // line 287
            if (((($context["candedit"] ?? null) && ($context["can_update_kb"] ?? null)) &&  !($context["nokb"] ?? null))) {
                // line 288
                yield "                        ";
                $context["task_to_kb_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 289
                    yield "                           <i class=\"far fa-save fa-fw me-1\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save and add to the knowledge base"), "html", null, true);
                    yield "\"
                              data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                        ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 292
                yield "                        ";
                yield CoreExtension::callMacro($macros["fields"], "macro_sliderField", ["_task_to_kb", 0,                 // line 295
($context["task_to_kb_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                 // line 299
($context["rand"] ?? null)]], 292, $context, $this->getSourceContext());
                // line 301
                yield "
                     ";
            }
            // line 303
            yield "
                     ";
            // line 305
            yield "                     ";
            $context["task_actiontime_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 306
                yield "                        <i class=\"fas fa-stopwatch fa-fw me-1\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Duration"), "html", null, true);
                yield "\"></i>
                     ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 308
            yield "                     ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownTimestampField", ["actiontime", (($__internal_compile_33 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 308)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["actiontime"] ?? null) : null), ($context["task_actiontime_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>             // line 311
($context["rand"] ?? null), "min" => 0, "max" => (8 * Twig\Extension\CoreExtension::constant("HOUR_TIMESTAMP")), "addfirstminutes" => true, "inhours" => true, "toadd" => Twig\Extension\CoreExtension::map($this->env, range(9, 100),             // line 316
function ($__i__) use ($context, $macros) { $context["i"] = $__i__; return (($context["i"] ?? null) * Twig\Extension\CoreExtension::constant("HOUR_TIMESTAMP")); })]], 308, $context, $this->getSourceContext());
            // line 317
            yield "

                     ";
            // line 320
            yield "                     ";
            $context["task_user_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 321
                yield "                        <i class=\"fas fa-user fa-fw me-1\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), "html", null, true);
                yield "\"></i>
                     ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 323
            yield "                     ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["User", "users_id_tech", ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 326
($context["subitem"] ?? null), "fields", [], "any", false, true, false, 326), "users_id_tech", [], "array", true, true, false, 326)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_34 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, true, false, 326)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["users_id_tech"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"))) : ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"))),             // line 327
($context["task_user_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "entity" => (($__internal_compile_35 = CoreExtension::getAttribute($this->env, $this->source,             // line 331
($context["item"] ?? null), "fields", [], "any", false, false, false, 331)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["entities_id"] ?? null) : null), "right" => "own_ticket", "rand" =>             // line 333
($context["rand"] ?? null)]], 323, $context, $this->getSourceContext());
            // line 335
            yield "

                     ";
            // line 338
            yield "                     ";
            $context["task_group_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 339
                yield "                        <i class=\"fas fa-users fa-fw me-1\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Group"), "html", null, true);
                yield "\"></i>
                     ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 341
            yield "                     ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["Group", "groups_id_tech", (($__internal_compile_36 = CoreExtension::getAttribute($this->env, $this->source,             // line 344
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 344)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["groups_id_tech"] ?? null) : null),             // line 345
($context["task_group_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "entity" => (($__internal_compile_37 = CoreExtension::getAttribute($this->env, $this->source,             // line 349
($context["item"] ?? null), "fields", [], "any", false, false, false, 349)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["entities_id"] ?? null) : null), "condition" => ["is_task" => 1], "rand" =>             // line 351
($context["rand"] ?? null)]], 341, $context, $this->getSourceContext());
            // line 353
            yield "

                     <script type=\"text/javascript\">
                        function showPlanUpdate";
            // line 356
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "(e) {
                           \$('#plan";
            // line 357
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "').hide();
                           \$('#viewplan";
            // line 358
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "').load('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/planning.php"), "html", null, true);
            yield "', {
                              action: \"add_event_classic_form\",
                              form: \"followups\", // Was followups for tasks before. Can't find where this is used.
                              entity: ";
            // line 361
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_38 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 361)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["entities_id"] ?? null) : null), "html", null, true);
            yield ",
                              rand_user: ";
            // line 362
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
            yield ",
                              rand_group: ";
            // line 363
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
            yield ",
                              itemtype: \"";
            // line 364
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "type", [], "any", false, false, false, 364), "html", null, true);
            yield "\",
                              items_id: ";
            // line 365
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, true, false, 365), "id", [], "array", true, true, false, 365)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_39 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, true, false, 365)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["id"] ?? null) : null),  -1)) : ( -1)), "html", null, true);
            yield ",
                              parent_itemtype: \"";
            // line 366
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 366), "html", null, true);
            yield "\",
                              parent_items_id: ";
            // line 367
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_40 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 367)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["id"] ?? null) : null), "html", null, true);
            yield ",
                              parent_fk_field: \"";
            // line 368
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 368), "html", null, true);
            yield "\",
                              begin: \"";
            // line 369
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_41 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 369)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["begin"] ?? null) : null), "html", null, true);
            yield "\",
                              end: \"";
            // line 370
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_42 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 370)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42["end"] ?? null) : null), "html", null, true);
            yield "\",
                           });
                        }
                     </script>
                     <div class=\"col-12\">
                        ";
            // line 375
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "can", [(($__internal_compile_43 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 375)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43["id"] ?? null) : null), Twig\Extension\CoreExtension::constant("UPDATE")], "method", false, false, false, 375) && (($__internal_compile_44 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 375)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44["begin"] ?? null) : null))) {
                // line 376
                yield "                           <script type=\"text/javascript\">
                              showPlanUpdate";
                // line 377
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "();
                           </script>
                           <button id=\"unplan";
                // line 379
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "\" class=\"btn btn-outline-warning\" type=\"submit\" name=\"unplan\"
                                 onclick=\"return confirm('";
                // line 380
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Confirm the deletion of planning?"), "html", null, true);
                yield "');\">
                              <i class=\"fas ti ti-calendar-off\"></i>
                              <span>";
                // line 382
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Unplan"), "html", null, true);
                yield "</span>
                           </button>
                        ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source,             // line 384
($context["item"] ?? null), "isAllowedStatus", [(($__internal_compile_45 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 384)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45["status"] ?? null) : null), Twig\Extension\CoreExtension::constant("CommonITILObject::PLANNED")], "method", false, false, false, 384)) {
                // line 385
                yield "                           <button id=\"plan";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "\" class=\"btn btn-outline-secondary text-truncate\" onclick=\"showPlanUpdate";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "()\" type=\"button\">
                              <i class=\"fas fa-calendar\"></i>
                              <span>";
                // line 387
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Plan this task"), "html", null, true);
                yield "</span>
                           </button>
                        ";
            }
            // line 390
            yield "                        <div id=\"viewplan";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\"></div>
                     </div>
                  </div>
               </div>
            </div>

            ";
            // line 396
            $context["pending_reasons"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 397
                yield "               ";
                $context["show_pending_reasons_actions"] = (((($__internal_compile_46 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 397)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46["status"] ?? null) : null) == Twig\Extension\CoreExtension::constant("CommonITILObject::WAITING")) &&  !($context["has_pending_reason"] ?? null));
                // line 398
                yield "               ";
                if ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::canDisplayPendingReasonForItem", [($context["subitem"] ?? null)])) {
                    // line 399
                    yield "                  <span
                     class=\"input-group-text bg-yellow-lt py-0 pe-0 ";
                    // line 400
                    yield ((($context["show_pending_reasons_actions"] ?? null)) ? ("flex-fill") : (""));
                    yield "\"
                     id=\"pending-reasons-control-";
                    // line 401
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                    yield "\"
                  >
                     <span class=\"d-inline-flex align-items-center\" title=\"";
                    // line 403
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Set the status to pending"), "html", null, true);
                    yield "\"
                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" role=\"button\">
                        <i class=\"fas fa-pause me-2\"></i>
                        <label class=\"form-check form-switch mt-2\">
                           <input type=\"hidden\"   name=\"pending\" value=\"0\" />
                           <input type=\"checkbox\" name=\"pending\" value=\"1\" class=\"form-check-input\"
                                 id=\"enable-pending-reasons-";
                    // line 409
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                    yield "\"
                                 role=\"button\"
                                 ";
                    // line 411
                    yield ((((($__internal_compile_47 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 411)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47["status"] ?? null) : null) == Twig\Extension\CoreExtension::constant("CommonITILObject::WAITING"))) ? ("checked") : (""));
                    yield "
                                 data-bs-toggle=\"collapse\" data-bs-target=\"#pending-reasons-setup-";
                    // line 412
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                    yield "\" />
                        </label>
                     </span>

                     ";
                    // line 416
                    if ( !($context["has_pending_reason"] ?? null)) {
                        // line 417
                        yield "                        <div
                           class=\"collapse ps-2 py-1 flex-fill ";
                        // line 418
                        yield ((($context["show_pending_reasons_actions"] ?? null)) ? ("show") : (""));
                        yield "\"
                           aria-expanded=\"";
                        // line 419
                        yield ((($context["show_pending_reasons_actions"] ?? null)) ? ("true") : ("false"));
                        yield "\"
                           id=\"pending-reasons-setup-";
                        // line 420
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                        yield "\"
                        >
                           ";
                        // line 422
                        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/pending_reasons.html.twig");
                        yield "
                        </div>
                     ";
                    }
                    // line 425
                    yield "                  </span>
               ";
                }
                // line 427
                yield "            ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 428
            yield "
            ";
            // line 429
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("post_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            yield "
            ";
            // line 431
            yield "            <div class=\"d-flex card-footer mx-n3 mb-n3 flex-wrap\" style=\"row-gap: 10px; min-height: 79px\">
               ";
            // line 432
            if (((($__internal_compile_48 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 432)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48["id"] ?? null) : null) <= 0)) {
                // line 433
                yield "                  ";
                // line 434
                yield "                  <div class=\"input-group flex-nowrap\">
                     <button class=\"btn btn-primary\" type=\"submit\" name=\"add\">
                        <i class=\"fas fa-plus\"></i>
                        <span>";
                // line 437
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Add"), "html", null, true);
                yield "</span>
                     </button>
                     ";
                // line 439
                yield ($context["pending_reasons"] ?? null);
                yield "
                  </div>
               ";
            } else {
                // line 442
                yield "                  <input type=\"hidden\" name=\"id\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_49 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 442)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49["id"] ?? null) : null), "html", null, true);
                yield "\" />
                  <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\">
                     <i class=\"far fa-save\"></i>
                     <span>";
                // line 445
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Save"), "html", null, true);
                yield "</span>
                  </button>

                  ";
                // line 448
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "can", [(($__internal_compile_50 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 448)) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50["id"] ?? null) : null), Twig\Extension\CoreExtension::constant("PURGE")], "method", false, false, false, 448)) {
                    // line 449
                    yield "                     <button class=\"btn btn-outline-danger me-2\" type=\"submit\" name=\"purge\"
                             onclick=\"return confirm('";
                    // line 450
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Confirm the final deletion?"), "html", null, true);
                    yield "');\">
                        <i class=\"fas fa-trash-alt\"></i>
                        <span>";
                    // line 452
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
                    yield "</span>
                     </button>
                  ";
                }
                // line 455
                yield "                  ";
                yield ($context["pending_reasons"] ?? null);
                yield "
               ";
            }
            // line 457
            yield "            </div>

            <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 459
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\" />
         </form>
      </div>

      <script type=\"text/javascript\">
         function itiltasktemplate_update";
            // line 464
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "(value) {
            \$.ajax({
               url: '";
            // line 466
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/task.php"), "html", null, true);
            yield "',
               type: 'POST',
               data: {
                  tasktemplates_id: value,
                  items_id: '";
            // line 470
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_51 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 470)) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51["id"] ?? null) : null), "html", null, true);
            yield "',
                  itemtype: '";
            // line 471
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 471), "html", null, true);
            yield "'
               }
            }).done(function (data) {
                if (data.content !== undefined) {
                    // set textarea content
                    setRichTextEditorContent(\"content_";
            // line 476
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\", data.content);
                }

                if (data.taskcategories_id !== undefined) {
                    // set category
                    const taskcategories_id = isNaN(parseInt(data.taskcategories_id))
                        ? 0
                        : parseInt(data.taskcategories_id);

                     //need to create new DOM option, because SELECT is remotely-sourced (AJAX)
                     //see : https://select2.org/programmatic-control/add-select-clear-items#preselecting-options-in-an-remotely-sourced-ajax-select2
                     var newOption = new Option(data.taskcategories_name, taskcategories_id, true, true);
                     \$(\"#dropdown_taskcategories_id";
            // line 488
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\").append(newOption).trigger('change');
                }

                if (data.is_private !== undefined) {
                    // set is_private
                    \$(\"#is_private_";
            // line 493
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\")
                        .prop(\"checked\", data.is_private == \"0\"
                            ? false
                            : true);
                }

                if (data.state !== undefined) {
                    // Set state
                    \$(\"#dropdown_state";
            // line 501
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\").trigger('setValue', data.state);
                }

                if (data.actiontime !== undefined) {
                    // Set duration
                    \$(\"#dropdown_actiontime";
            // line 506
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\").trigger('setValue', data.actiontime);
                }

                if (data.users_id_tech !== undefined) {
                    // Set user
                    \$(\"#dropdown_users_id_tech";
            // line 511
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\").trigger('setValue', data.users_id_tech);
                }

               if (data.groups_id_tech !== undefined) {
                   // Set group
                   \$(\"#dropdown_groups_id_tech";
            // line 516
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\").trigger('setValue', data.groups_id_tech);
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
        return "components/itilobject/timeline/form_task.html.twig";
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
        return array (  897 => 516,  889 => 511,  881 => 506,  873 => 501,  862 => 493,  854 => 488,  839 => 476,  831 => 471,  827 => 470,  820 => 466,  815 => 464,  807 => 459,  803 => 457,  797 => 455,  791 => 452,  786 => 450,  783 => 449,  781 => 448,  775 => 445,  768 => 442,  762 => 439,  757 => 437,  752 => 434,  750 => 433,  748 => 432,  745 => 431,  741 => 429,  738 => 428,  734 => 427,  730 => 425,  724 => 422,  719 => 420,  715 => 419,  711 => 418,  708 => 417,  706 => 416,  699 => 412,  695 => 411,  690 => 409,  681 => 403,  676 => 401,  672 => 400,  669 => 399,  666 => 398,  663 => 397,  661 => 396,  651 => 390,  645 => 387,  637 => 385,  635 => 384,  630 => 382,  625 => 380,  621 => 379,  616 => 377,  613 => 376,  611 => 375,  603 => 370,  599 => 369,  595 => 368,  591 => 367,  587 => 366,  583 => 365,  579 => 364,  575 => 363,  571 => 362,  567 => 361,  559 => 358,  555 => 357,  551 => 356,  546 => 353,  544 => 351,  543 => 349,  542 => 345,  541 => 344,  539 => 341,  532 => 339,  529 => 338,  525 => 335,  523 => 333,  522 => 331,  521 => 327,  520 => 326,  518 => 323,  511 => 321,  508 => 320,  504 => 317,  502 => 316,  501 => 311,  499 => 308,  492 => 306,  489 => 305,  486 => 303,  482 => 301,  480 => 299,  479 => 295,  477 => 292,  469 => 289,  466 => 288,  464 => 287,  461 => 286,  457 => 284,  455 => 282,  454 => 281,  453 => 277,  451 => 274,  445 => 272,  442 => 271,  439 => 270,  437 => 269,  433 => 267,  431 => 265,  430 => 261,  429 => 260,  427 => 258,  420 => 256,  418 => 255,  414 => 253,  412 => 251,  411 => 247,  410 => 246,  409 => 244,  406 => 243,  402 => 242,  399 => 241,  397 => 240,  394 => 239,  387 => 237,  384 => 236,  380 => 233,  378 => 231,  377 => 227,  376 => 223,  375 => 222,  373 => 219,  366 => 217,  363 => 216,  359 => 213,  357 => 211,  356 => 207,  355 => 206,  353 => 204,  347 => 202,  344 => 201,  342 => 200,  338 => 198,  336 => 196,  335 => 195,  334 => 194,  333 => 190,  332 => 189,  330 => 186,  324 => 184,  321 => 183,  319 => 182,  312 => 177,  310 => 175,  309 => 174,  308 => 166,  307 => 164,  300 => 160,  294 => 159,  290 => 158,  284 => 157,  280 => 155,  251 => 131,  247 => 130,  241 => 127,  232 => 121,  229 => 120,  222 => 117,  215 => 114,  212 => 113,  210 => 112,  206 => 110,  204 => 109,  201 => 108,  194 => 105,  187 => 102,  184 => 101,  182 => 100,  178 => 98,  176 => 97,  173 => 96,  167 => 93,  162 => 91,  158 => 89,  156 => 88,  153 => 87,  147 => 84,  143 => 82,  141 => 81,  138 => 80,  132 => 77,  129 => 76,  127 => 75,  124 => 74,  118 => 71,  114 => 69,  112 => 68,  109 => 67,  104 => 64,  102 => 63,  101 => 62,  99 => 61,  96 => 60,  94 => 59,  91 => 58,  89 => 57,  83 => 53,  81 => 50,  77 => 49,  71 => 47,  68 => 46,  64 => 45,  59 => 33,  57 => 43,  55 => 42,  53 => 41,  51 => 40,  49 => 39,  47 => 38,  45 => 36,  43 => 34,  36 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/form_task.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/form_task.html.twig");
    }
}
