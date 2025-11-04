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

/* components/itilobject/timeline/timeline.html.twig */
class __TwigTemplate_90185b831c1b4b55b1e3f7a3a5445a6a extends Template
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
        $context["is_timeline_reversed"] = ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("timeline_order") == Twig\Extension\CoreExtension::constant("CommonITILObject::TIMELINE_ORDER_REVERSE"));
        // line 34
        yield "
<div class=\"itil-timeline d-flex flex-column align-items-start mb-auto\">
    ";
        // line 36
        if ( !($context["is_timeline_reversed"] ?? null)) {
            // line 37
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/main_description.html.twig");
            yield "
    ";
        } else {
            // line 39
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/approbation_form.html.twig");
            yield "
        ";
            // line 40
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/answer.html.twig");
            yield "
    ";
        }
        // line 42
        yield "
   ";
        // line 43
        $context["status_closed"] = CoreExtension::inFilter((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 43)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["status"] ?? null) : null), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getClosedStatusArray", [], "method", false, false, false, 43));
        // line 44
        yield "
   ";
        // line 46
        yield "   ";
        $context["user_cache"] = [];
        // line 47
        yield "
   ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["timeline"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 49
            yield "      ";
            $context["entry_i"] = (($__internal_compile_1 = $context["entry"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["item"] ?? null) : null);
            // line 50
            yield "      ";
            $context["entry_object"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "object", [], "array", true, true, false, 50) &&  !(null === (($__internal_compile_2 = $context["entry"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["object"] ?? null) : null)))) ? ((($__internal_compile_3 = $context["entry"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["object"] ?? null) : null)) : ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem((($__internal_compile_4 = $context["entry"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["type"] ?? null) : null), (($__internal_compile_5 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["id"] ?? null) : null))));
            // line 51
            yield "      ";
            $context["users_id"] = (($__internal_compile_6 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["users_id"] ?? null) : null);
            // line 52
            yield "      ";
            $context["is_private"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["entry_i"] ?? null), "is_private", [], "array", true, true, false, 52) &&  !(null === (($__internal_compile_7 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["is_private"] ?? null) : null)))) ? ((($__internal_compile_8 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["is_private"] ?? null) : null)) : (false));
            // line 53
            yield "      ";
            $context["date_creation"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["entry_i"] ?? null), "date_creation", [], "array", true, true, false, 53) &&  !(null === (($__internal_compile_9 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["date_creation"] ?? null) : null)))) ? ((($__internal_compile_10 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["date_creation"] ?? null) : null)) : ((($__internal_compile_11 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["date"] ?? null) : null)));
            // line 54
            yield "      ";
            $context["date_mod"] = (($__internal_compile_12 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["date_mod"] ?? null) : null);
            // line 55
            yield "      ";
            $context["entry_rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
            // line 56
            yield "      ";
            $context["is_current_user"] = (($context["users_id"] ?? null) == $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"));
            // line 57
            yield "      ";
            $context["anonym_user"] = ((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "helpdesk") &&  !($context["is_current_user"] ?? null)) && ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->getEntityConfig("anonymize_support_agents", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")) != Twig\Extension\CoreExtension::constant("Entity::ANONYMIZE_DISABLED")));
            // line 58
            yield "
      ";
            // line 59
            $context["can_edit_i"] = (($__internal_compile_13 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["can_edit"] ?? null) : null);
            // line 60
            yield "
      ";
            // line 61
            $context["timeline_position"] = (($__internal_compile_14 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["timeline_position"] ?? null) : null);
            // line 62
            yield "      ";
            $context["item_position"] = "t-left";
            // line 63
            yield "      ";
            if ((($context["timeline_position"] ?? null) == Twig\Extension\CoreExtension::constant("CommonITILObject::TIMELINE_LEFT"))) {
                // line 64
                yield "         ";
                $context["item_position"] = "t-left";
                // line 65
                yield "      ";
            } elseif ((($context["timeline_position"] ?? null) == Twig\Extension\CoreExtension::constant("CommonITILObject::TIMELINE_MIDLEFT"))) {
                // line 66
                yield "         ";
                $context["item_position"] = "t-left t-middle";
                // line 67
                yield "      ";
            } elseif ((($context["timeline_position"] ?? null) == Twig\Extension\CoreExtension::constant("CommonITILObject::TIMELINE_MIDRIGHT"))) {
                // line 68
                yield "         ";
                $context["item_position"] = "t-right t-middle";
                // line 69
                yield "      ";
            } elseif ((($context["timeline_position"] ?? null) == Twig\Extension\CoreExtension::constant("CommonITILObject::TIMELINE_RIGHT"))) {
                // line 70
                yield "         ";
                $context["item_position"] = "t-right";
                // line 71
                yield "      ";
            }
            // line 72
            yield "
      ";
            // line 73
            $context["itiltype"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "itiltype", [], "array", true, true, false, 73)) ? (("ITIL" . (($__internal_compile_15 = $context["entry"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["itiltype"] ?? null) : null))) : ((($__internal_compile_16 = $context["entry"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["type"] ?? null) : null)));
            // line 74
            yield "
      ";
            // line 75
            $context["state_class"] = "";
            // line 76
            yield "      ";
            if (((($__internal_compile_17 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["state"] ?? null) : null) === constant("Planning::INFO"))) {
                // line 77
                yield "         ";
                $context["state_class"] = "info";
                // line 78
                yield "      ";
            }
            // line 79
            yield "      ";
            if (((($__internal_compile_18 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["state"] ?? null) : null) === constant("Planning::TODO"))) {
                // line 80
                yield "         ";
                $context["state_class"] = "todo";
                // line 81
                yield "      ";
            }
            // line 82
            yield "      ";
            if (((($__internal_compile_19 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["state"] ?? null) : null) === constant("Planning::DONE"))) {
                // line 83
                yield "         ";
                $context["state_class"] = "done";
                // line 84
                yield "      ";
            }
            // line 85
            yield "
      ";
            // line 86
            $context["solution_class"] = "";
            // line 87
            yield "      ";
            if ((((($context["itiltype"] ?? null) == "ITILSolution") || (($context["itiltype"] ?? null) == "ITILValidation")) && CoreExtension::getAttribute($this->env, $this->source, ($context["entry_i"] ?? null), "status", [], "array", true, true, false, 87))) {
                // line 88
                yield "         ";
                $context["status"] = (((($context["itiltype"] ?? null) == "ITILSolution")) ? ((($__internal_compile_20 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["status"] ?? null) : null)) : (Twig\Extension\CoreExtension::replace((($__internal_compile_21 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["status"] ?? null) : null), ["status_" => ""])));
                // line 89
                yield "         ";
                if ((($context["status"] ?? null) == Twig\Extension\CoreExtension::constant("CommonITILValidation::WAITING"))) {
                    // line 90
                    yield "            ";
                    $context["solution_class"] = "waiting";
                    // line 91
                    yield "         ";
                }
                // line 92
                yield "         ";
                if ((($context["status"] ?? null) == Twig\Extension\CoreExtension::constant("CommonITILValidation::ACCEPTED"))) {
                    // line 93
                    yield "            ";
                    $context["solution_class"] = "accepted";
                    // line 94
                    yield "         ";
                }
                // line 95
                yield "         ";
                if ((($context["status"] ?? null) == Twig\Extension\CoreExtension::constant("CommonITILValidation::REFUSED"))) {
                    // line 96
                    yield "            ";
                    $context["solution_class"] = "refused";
                    // line 97
                    yield "         ";
                }
                // line 98
                yield "      ";
            }
            // line 99
            yield "
      ";
            // line 101
            yield "      ";
            // line 102
            yield "      ";
            $context["entry_user"] = (((array_key_exists("users_id", $context) &&  !(null === ($context["users_id"] ?? null)))) ? ((((CoreExtension::getAttribute($this->env, $this->source, ($context["user_cache"] ?? null), ("_" . ($context["users_id"] ?? null)), [], "array", true, true, false, 102) &&  !(null === (($__internal_compile_22 = ($context["user_cache"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[("_" . ($context["users_id"] ?? null))] ?? null) : null)))) ? ((($__internal_compile_23 = ($context["user_cache"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[("_" . ($context["users_id"] ?? null))] ?? null) : null)) : ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem("User", ($context["users_id"] ?? null))))) : (null));
            // line 103
            yield "      ";
            // line 104
            yield "      ";
            $context["user_cache"] = Twig\Extension\CoreExtension::merge(($context["user_cache"] ?? null), [("_" . ($context["users_id"] ?? null)) => ($context["entry_user"] ?? null)]);
            // line 105
            yield "
      ";
            // line 106
            $context["anchor"] = (((($__internal_compile_24 = $context["entry"]) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["type"] ?? null) : null) . "_") . (($__internal_compile_25 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["id"] ?? null) : null));
            // line 107
            yield "      <div id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["anchor"] ?? null), "html", null, true);
            yield "\" class=\"timeline-item mb-3 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itiltype"] ?? null), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["state_class"] ?? null), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_26 = $context["entry"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["class"] ?? null) : null), "html", null, true);
            yield " ";
            yield ((CoreExtension::inFilter("right", ($context["item_position"] ?? null))) ? ("ms-auto") : (""));
            yield "\"
            data-itemtype=\"";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_27 = $context["entry"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["type"] ?? null) : null), "html", null, true);
            yield "\" data-items-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_28 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["id"] ?? null) : null), "html", null, true);
            yield "\"
            ";
            // line 109
            if (CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "item_action", [], "array", true, true, false, 109)) {
                yield "data-item-action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_29 = $context["entry"]) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["item_action"] ?? null) : null), "html", null, true);
                yield "\"";
            }
            yield ">

         ";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::PRE_SHOW_ITEM"), ["item" => ($context["entry_object"] ?? null), "options" => ["parent" => ($context["item"] ?? null), "rand" => ($context["entry_rand"] ?? null)]]), "html", null, true);
            yield "

         <div class=\"row\">
            <div class=\"col-auto todo-list-state ";
            // line 114
            yield ((CoreExtension::inFilter("left", ($context["item_position"] ?? null))) ? ("ms-auto ms-0 order-sm-last") : (""));
            yield "\">
               ";
            // line 115
            if (((($__internal_compile_30 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["state"] ?? null) : null) === constant("Planning::TODO"))) {
                // line 116
                yield "                  ";
                if (($context["can_edit_i"] ?? null)) {
                    // line 117
                    yield "                     <span class=\"state state_1\" onclick=\"change_task_state(";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_31 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["id"] ?? null) : null), "html", null, true);
                    yield ", this)\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("To do"), "html", null, true);
                    yield "\"></span>
                  ";
                } else {
                    // line 119
                    yield "                     <span class=\"state state_1\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("To do"), "html", null, true);
                    yield "\" style=\"cursor: not-allowed;\"></span>
                  ";
                }
                // line 121
                yield "               ";
            } elseif (((($__internal_compile_32 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["state"] ?? null) : null) === constant("Planning::DONE"))) {
                // line 122
                yield "                  ";
                if (($context["can_edit_i"] ?? null)) {
                    // line 123
                    yield "                     <span class=\"state state_2\" onclick=\"change_task_state(";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_33 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["id"] ?? null) : null), "html", null, true);
                    yield ", this)\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Done"), "html", null, true);
                    yield "\"></span>
                  ";
                } else {
                    // line 125
                    yield "                     <span class=\"state state_2\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Done"), "html", null, true);
                    yield "\" style=\"cursor: not-allowed;\"></span>
                  ";
                }
                // line 127
                yield "               ";
            }
            // line 128
            yield "            </div>

            <div class=\"col-auto d-flex flex-column user-part ";
            // line 130
            yield ((CoreExtension::inFilter("right", ($context["item_position"] ?? null))) ? ("ms-auto ms-0 order-sm-last") : ("order-first"));
            yield "\">
               ";
            // line 131
            $context["avatar_rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
            // line 132
            yield "               ";
            // line 133
            yield "               ";
            if ( !(null === ($context["entry_user"] ?? null))) {
                // line 134
                yield "                  ";
                $context["user_fields"] = Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, ($context["entry_user"] ?? null), "fields", [], "any", false, false, false, 134), ["user_name" => $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(CoreExtension::getAttribute($this->env, $this->source,                 // line 135
($context["entry_user"] ?? null), "getFriendlyName", [], "method", false, false, false, 135)), "email" => CoreExtension::getAttribute($this->env, $this->source,                 // line 136
($context["entry_user"] ?? null), "getDefaultEmail", [], "method", false, false, false, 136)]);
                // line 138
                yield "                  <span id=\"timeline-avatar";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["avatar_rand"] ?? null), "html", null, true);
                yield "\">
                     ";
                // line 139
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/user/picture.html.twig", ["users_id" =>                 // line 140
($context["users_id"] ?? null), "user_object" =>                 // line 141
($context["entry_user"] ?? null), "enable_anonymization" =>                 // line 142
($context["anonym_user"] ?? null)], false);
                // line 143
                yield "
                  </span>
                  ";
                // line 145
                if (( !($context["anonym_user"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["entry_user"] ?? null), "canView", [], "method", false, false, false, 145))) {
                    // line 146
                    yield "                     ";
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showToolTip", [Twig\Extension\CoreExtension::include($this->env, $context, "components/user/info_card.html.twig", ["user" =>                     // line 148
($context["user_fields"] ?? null), "user_object" =>                     // line 149
($context["entry_user"] ?? null), "enable_anonymization" => false], false), ["applyto" => ("timeline-avatar" .                     // line 152
($context["avatar_rand"] ?? null))]]);
                    // line 154
                    yield "                  ";
                }
                // line 155
                yield "               ";
            } else {
                // line 156
                yield "                  <span id=\"timeline-avatar";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["avatar_rand"] ?? null), "html", null, true);
                yield "\"><span class=\"avatar avatar-md rounded\"></span></span>
               ";
            }
            // line 158
            yield "            </div>
            <div class=\"col-12 col-sm d-flex flex-column content-part\">
               <div class=\"mt-2 timeline-content ";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["solution_class"] ?? null), "html", null, true);
            yield " flex-grow-1 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["item_position"] ?? null), "html", null, true);
            yield " card\">
                  <div class=\"card-body px-1 px-xxl-3\">
                     ";
            // line 162
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/timeline_item_header.html.twig", ["user_object" =>             // line 163
($context["entry_user"] ?? null)]);
            // line 164
            yield "

                     ";
            // line 166
            if (CoreExtension::inFilter(($context["itiltype"] ?? null), Twig\Extension\CoreExtension::column(($context["timeline_itemtypes"] ?? null), "type"))) {
                // line 167
                yield "                        ";
                $context["matching_types"] = Twig\Extension\CoreExtension::filter($this->env, ($context["timeline_itemtypes"] ?? null), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["v"] ?? null), "type", [], "any", false, false, false, 167) == ($context["itiltype"] ?? null)); });
                // line 168
                yield "                        ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["matching_types"] ?? null)) > 0)) {
                    // line 169
                    yield "                           ";
                    $context["timeline_itemtype"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["matching_types"] ?? null));
                    // line 170
                    yield "                           ";
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["timeline_itemtype"] ?? null), "template", [], "any", true, true, false, 170)) {
                        // line 171
                        yield "                              ";
                        yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, ($context["timeline_itemtype"] ?? null), "template", [], "any", false, false, false, 171), ["form_mode" => "view", "subitem" => CoreExtension::getAttribute($this->env, $this->source, ($context["timeline_itemtype"] ?? null), "item", [], "any", false, false, false, 171)]);
                        yield "
                           ";
                    }
                    // line 173
                    yield "                        ";
                }
                // line 174
                yield "                     ";
            } else {
                // line 175
                yield "                        <div class=\"read-only-content\">
                           ";
                // line 176
                yield $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml((($__internal_compile_34 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["content"] ?? null) : null));
                yield "
                        </div>
                     ";
            }
            // line 179
            yield "                     <div class=\"edit-content collapse\">
                        <div class=\"ajax-content\"></div>
                     </div>
                  </div>
               </div>

               ";
            // line 185
            if (CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "documents", [], "array", true, true, false, 185)) {
                // line 186
                yield "                  ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/sub_documents.html.twig", ["item" =>                 // line 187
($context["item"] ?? null), "entry" =>                 // line 188
$context["entry"]]);
                // line 189
                yield "
               ";
            }
            // line 191
            yield "            </div>
         </div>

         ";
            // line 194
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::POST_SHOW_ITEM"), ["item" => ($context["entry_object"] ?? null), "options" => ["parent" => ($context["item"] ?? null), "rand" => ($context["entry_rand"] ?? null)]]), "html", null, true);
            yield "
      </div>
   ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        yield "
    ";
        // line 198
        if (($context["is_timeline_reversed"] ?? null)) {
            // line 199
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/main_description.html.twig");
            yield "
    ";
        }
        // line 201
        yield "
    <div class=\"timeline-item tasks-title d-none\">
        <h3>";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Task", "Tasks", Session::getPluralNumber()), "html", null, true);
        yield "</h3>
    </div>

    ";
        // line 206
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/todo-list-summary.html.twig");
        yield "

    <div class=\"timeline-item validations-title d-none mt-4\">
        <h3>";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Validation", "Validations", Session::getPluralNumber()), "html", null, true);
        yield "</h3>
    </div>

    ";
        // line 212
        if ( !($context["is_timeline_reversed"] ?? null)) {
            // line 213
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/approbation_form.html.twig");
            yield "
        ";
            // line 214
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/answer.html.twig");
            yield "
    ";
        }
        // line 216
        yield "
</div>

<script type=\"text/javascript\">
\$(function() {
   \$(document).on(\"click\", \".edit-timeline-item\", function() {
      var timeline_item = \$(this).closest(\".timeline-item\");
      var content_block = timeline_item.find(\".timeline-content\");
      var itemtype      = timeline_item.data('itemtype');
      var items_id      = timeline_item.data('items-id');
      var item_action   = timeline_item.data('item-action');

      content_block.find(\".read-only-content\").hide();
      content_block.find(\".edit-content\").show()
         .find(\".ajax-content\")
         .html('<i class=\"fas fa-3x fa-spinner fa-spin ms-auto\"></i>')
         .load(\"";
        // line 232
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/timeline.php"), "html", null, true);
        yield "\", {
            'action'     : 'viewsubitem',
            'type'       : itemtype,
            'parenttype' : '";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 235), "html", null, true);
        yield "',
            '";
        // line 236
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 236), "html", null, true);
        yield "': ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_35 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 236)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["id"] ?? null) : null), "html", null, true);
        yield ",
            'id'         : items_id,
            'item_action': item_action
         });

      timeline_item.find('.timeline-item-buttons').addClass('d-none');
      timeline_item.find('.close-edit-content').removeClass('d-none');

      \$(\"#itil-footer\").find(\".main-actions\").hide();
      \$(\"#right-actions\").hide();
   });

   \$(document).on(\"click\", \".close-edit-content\", function() {
      var timeline_item = \$(this).closest(\".timeline-item\");
      timeline_item.find('.timeline-item-buttons').removeClass('d-none');
      timeline_item.find('.close-edit-content').addClass('d-none');

      timeline_item.find('.ajax-content').html('');
      timeline_item.find('.read-only-content').show();

      \$(\"#itil-footer .main-actions\").show();
      \$(\"#right-actions\").show();
   });
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
        return "components/itilobject/timeline/timeline.html.twig";
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
        return array (  560 => 236,  556 => 235,  550 => 232,  532 => 216,  527 => 214,  522 => 213,  520 => 212,  514 => 209,  508 => 206,  502 => 203,  498 => 201,  492 => 199,  490 => 198,  487 => 197,  470 => 194,  465 => 191,  461 => 189,  459 => 188,  458 => 187,  456 => 186,  454 => 185,  446 => 179,  440 => 176,  437 => 175,  434 => 174,  431 => 173,  425 => 171,  422 => 170,  419 => 169,  416 => 168,  413 => 167,  411 => 166,  407 => 164,  405 => 163,  404 => 162,  397 => 160,  393 => 158,  387 => 156,  384 => 155,  381 => 154,  379 => 152,  378 => 149,  377 => 148,  375 => 146,  373 => 145,  369 => 143,  367 => 142,  366 => 141,  365 => 140,  364 => 139,  359 => 138,  357 => 136,  356 => 135,  354 => 134,  351 => 133,  349 => 132,  347 => 131,  343 => 130,  339 => 128,  336 => 127,  330 => 125,  322 => 123,  319 => 122,  316 => 121,  310 => 119,  302 => 117,  299 => 116,  297 => 115,  293 => 114,  287 => 111,  278 => 109,  272 => 108,  259 => 107,  257 => 106,  254 => 105,  251 => 104,  249 => 103,  246 => 102,  244 => 101,  241 => 99,  238 => 98,  235 => 97,  232 => 96,  229 => 95,  226 => 94,  223 => 93,  220 => 92,  217 => 91,  214 => 90,  211 => 89,  208 => 88,  205 => 87,  203 => 86,  200 => 85,  197 => 84,  194 => 83,  191 => 82,  188 => 81,  185 => 80,  182 => 79,  179 => 78,  176 => 77,  173 => 76,  171 => 75,  168 => 74,  166 => 73,  163 => 72,  160 => 71,  157 => 70,  154 => 69,  151 => 68,  148 => 67,  145 => 66,  142 => 65,  139 => 64,  136 => 63,  133 => 62,  131 => 61,  128 => 60,  126 => 59,  123 => 58,  120 => 57,  117 => 56,  114 => 55,  111 => 54,  108 => 53,  105 => 52,  102 => 51,  99 => 50,  96 => 49,  79 => 48,  76 => 47,  73 => 46,  70 => 44,  68 => 43,  65 => 42,  60 => 40,  55 => 39,  49 => 37,  47 => 36,  43 => 34,  41 => 33,  38 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/timeline.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/timeline.html.twig");
    }
}
