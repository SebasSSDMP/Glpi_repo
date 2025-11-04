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

/* components/itilobject/footer.html.twig */
class __TwigTemplate_2a99dc2d347cac5c0715b4b368e255d1 extends Template
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
        $context["timeline_btns_cls"] = ($context["left_regular_cls"] ?? null);
        // line 34
        $context["form_btns_cls"] = ((($context["is_expanded"] ?? null)) ? (($context["right_expanded_cls"] ?? null)) : ("col-lg"));
        // line 35
        $context["timeline_btn_layout"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpitimeline_action_btn_layout");
        // line 36
        $context["switch_btn_cls"] = "fa-caret-left";
        // line 37
        if (($context["is_expanded"] ?? null)) {
            // line 38
            yield "    ";
            $context["timeline_btns_cls"] = ($context["left_expanded_cls"] ?? null);
            // line 39
            yield "    ";
            $context["form_btns_cls"] = ($context["right_expanded_cls"] ?? null);
            // line 40
            yield "    ";
            $context["switch_btn_cls"] = "fa-caret-right";
        }
        // line 42
        yield "
<div class=\"mx-n2 mb-n2 itil-footer itil-footer p-0 border-top\" id=\"itil-footer\">
   <div class=\"buttons-bar d-flex py-2\">
      <div class=\"col ";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["timeline_btns_cls"] ?? null), "html", null, true);
        yield " ps-3 timeline-buttons d-flex\">
         ";
        // line 46
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 46)) {
            // line 47
            yield "            ";
            $context["main_actions_itemtypes"] = Twig\Extension\CoreExtension::filter($this->env, ($context["timeline_itemtypes"] ?? null), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return ( !CoreExtension::getAttribute($this->env, $this->source, ($context["v"] ?? null), "hide_in_menu", [], "any", true, true, false, 47) || (CoreExtension::getAttribute($this->env, $this->source, ($context["v"] ?? null), "hide_in_menu", [], "any", false, false, false, 47) != true)); });
            // line 48
            yield "
            ";
            // line 49
            $context["default_action_data"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["main_actions_itemtypes"] ?? null));
            // line 50
            yield "            ";
            $context["default_action"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::keys(($context["main_actions_itemtypes"] ?? null)));
            // line 51
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNotSolved", [], "method", false, false, false, 51) && (($context["default_action_data"] ?? null) != false))) {
                // line 52
                yield "               ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["main_actions_itemtypes"] ?? null)) > 1)) {
                    // line 53
                    yield "                  ";
                    $context["btn_class"] = (((($context["timeline_btn_layout"] ?? null) == Twig\Extension\CoreExtension::constant("Config::TIMELINE_ACTION_BTN_SPLITTED"))) ? ("") : ("btn-group"));
                    // line 54
                    yield "                  <div class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["btn_class"] ?? null), "html", null, true);
                    yield " me-2 main-actions\" style=\"";
                    yield (((($context["load_kb_sol"] ?? null) > 0)) ? ("display:none;") : (""));
                    yield "\">
               ";
                } else {
                    // line 56
                    yield "                                    <div class=\"main-actions\" style=\"display:inline-flex\">
               ";
                }
                // line 59
                yield "                  <button
                     class=\"btn btn-primary answer-action mb-2 ";
                // line 60
                (((($context["default_action"] ?? null) != "answer")) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("action-" . ($context["default_action"] ?? null)), "html", null, true)) : (yield ""));
                yield "\"
                     data-bs-toggle=\"collapse\"
                     data-bs-target=\"#new-";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["default_action_data"] ?? null), "class", [], "any", false, false, false, 62), "html", null, true);
                yield "-block\"
                  >
                     <i class=\"";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["default_action_data"] ?? null), "icon", [], "any", false, false, false, 64), "html", null, true);
                yield "\"></i>
                     <span>";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["default_action_data"] ?? null), "label", [], "any", false, false, false, 65), "html", null, true);
                yield "</span>
                  </button>

                  ";
                // line 68
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["main_actions_itemtypes"] ?? null)) > 1)) {
                    // line 69
                    yield "                     ";
                    if ((($context["timeline_btn_layout"] ?? null) == Twig\Extension\CoreExtension::constant("Config::TIMELINE_ACTION_BTN_SPLITTED"))) {
                        // line 70
                        yield "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(($context["main_actions_itemtypes"] ?? null));
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
                        foreach ($context['_seq'] as $context["action"] => $context["timeline_itemtype"]) {
                            // line 71
                            yield "                        ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 71) > 0)) {
                                // line 72
                                yield "                              <button class=\"ms-2 mb-2 btn btn-primary answer-action action-";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["action"], "html", null, true);
                                yield "\" data-bs-toggle=\"collapse\" data-bs-target=\"#new-";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "class", [], "any", false, false, false, 72), "html", null, true);
                                yield "-block\">
                                 <i class=\"";
                                // line 73
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "icon", [], "any", false, false, false, 73), "html", null, true);
                                yield "\"></i>
                                 <span>";
                                // line 74
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "short_label", [], "any", false, false, false, 74), "html", null, true);
                                yield "</span>
                              </button>
                              ";
                            }
                            // line 77
                            yield "                        ";
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
                        unset($context['_seq'], $context['_iterated'], $context['action'], $context['timeline_itemtype'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 78
                        yield "                     ";
                    } else {
                        // line 79
                        yield "                        <button
                           type=\"button\"
                           class=\"btn btn-primary dropdown-toggle dropdown-toggle-split mb-2 ";
                        // line 81
                        (((($context["default_action"] ?? null) != "answer")) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("action-" . ($context["default_action"] ?? null)), "html", null, true)) : (yield ""));
                        yield "\"
                           data-bs-toggle=\"dropdown\"
                           aria-expanded=\"false\"
                        >
                           <span class=\"visually-hidden\">";
                        // line 85
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("View other actions"), "html", null, true);
                        yield "</span>
                        </button>
                        <ul class=\"dropdown-menu\">
                              ";
                        // line 88
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(($context["main_actions_itemtypes"] ?? null));
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
                        foreach ($context['_seq'] as $context["action"] => $context["timeline_itemtype"]) {
                            // line 89
                            yield "                                 ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 89) > 0)) {
                                // line 90
                                yield "                                 <li><a class=\"dropdown-item action-";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["action"], "html", null, true);
                                yield " answer-action\" href=\"#\"
                                    data-bs-toggle=\"collapse\" data-bs-target=\"#new-";
                                // line 91
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "class", [], "any", false, false, false, 91), "html", null, true);
                                yield "-block\">
                                    <i class=\"";
                                // line 92
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "icon", [], "any", false, false, false, 92), "html", null, true);
                                yield "\"></i>
                                    <span>";
                                // line 93
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "label", [], "any", false, false, false, 93), "html", null, true);
                                yield "</span>
                                 </a></li>
                                 ";
                            }
                            // line 96
                            yield "                              ";
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
                        unset($context['_seq'], $context['_iterated'], $context['action'], $context['timeline_itemtype'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 97
                        yield "                        </ul>
                     ";
                    }
                    // line 99
                    yield "                  ";
                }
                // line 100
                yield "               </div>
            ";
            }
            // line 102
            yield "
            <ul class=\"legacy-timeline-actions\">
               ";
            // line 104
            yield ((array_key_exists("legacy_timeline_actions", $context)) ? (Twig\Extension\CoreExtension::default(($context["legacy_timeline_actions"] ?? null), "")) : (""));
            yield "
            </ul>
            ";
            // line 106
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/filter_timeline.html.twig");
            yield "
         ";
        }
        // line 108
        yield "     </div>

      <div class=\"form-buttons ";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_btns_cls"] ?? null), "html", null, true);
        yield " d-flex justify-content-between ms-auto ms-lg-0 my-n2 py-2 pe-3 card-footer border-top-0 position-relative\">
         <span class=\"d-none d-lg-block ms-n3\"
               data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Toggle panels width"), "html", null, true);
        yield "\">
            <button type=\"button\" class=\"switch-panel-width btn btn-icon btn-ghost-secondary px-0\">
               <i class=\"fas ";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["switch_btn_cls"] ?? null), "html", null, true);
        yield "\"></i>
            </button>
            <button type=\"button\" class=\"collapse-panel btn btn-icon btn-ghost-secondary px-0 mr-1\">
               <i class=\"fas fa-caret-right\"></i>
            </button>
         </span>

         <span>
         ";
        // line 122
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 122)) {
            // line 123
            yield "            <button class=\"btn btn-primary\" type=\"submit\" name=\"add\" form=\"itil-form\"
                  title=\"";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Add"), "html", null, true);
            yield "\">
               <i class=\"fas fa-plus\"></i>
               <span class=\"d-none d-lg-block\">";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Add"), "html", null, true);
            yield "</span>
            </button>
         ";
        } else {
            // line 129
            yield "
            <div class=\"btn-group\" role=\"group\" id=\"right-actions\">
               ";
            // line 131
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canDeleteItem", [], "method", false, false, false, 131)) {
                // line 132
                yield "                  ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isDeleted", [], "method", false, false, false, 132)) {
                    // line 133
                    yield "                     <button class=\"btn btn-outline-secondary\" type=\"submit\" name=\"restore\" form=\"itil-form\"
                           title=\"";
                    // line 134
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Restore"), "html", null, true);
                    yield "\">
                        <i class=\"fas fa-trash-restore-alt\"></i>
                        <span class=\"d-none d-lg-block\">";
                    // line 136
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Restore"), "html", null, true);
                    yield "</span>
                     </button>

                     <button class=\"btn btn-outline-danger\" type=\"submit\" name=\"purge\" form=\"itil-form\"
                           title=\"";
                    // line 140
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
                    yield "\"
                           onclick=\"return confirm('";
                    // line 141
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Confirm the final deletion?"), "html", null, true);
                    yield "');\">
                        <i class=\"ti ti-trash\"></i>
                        <span class=\"d-none d-lg-block\">";
                    // line 143
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
                    yield "</span>
                     </button>
                  ";
                } else {
                    // line 146
                    yield "                     <button class=\"btn btn-outline-danger\" type=\"submit\" name=\"delete\" form=\"itil-form\"
                           title=\"";
                    // line 147
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Put in trashbin"), "html", null, true);
                    yield "\"
                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                        <i class=\"ti ti-trash\"></i>
                     </button>
                  ";
                }
                // line 152
                yield "               ";
            }
            // line 153
            yield "
               ";
            // line 154
            if (($context["canupdate"] ?? null)) {
                // line 155
                yield "                  ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/form/single-action.html.twig", ["onlyicon" => true]);
                // line 157
                yield "
               ";
            }
            // line 159
            yield "
               ";
            // line 160
            $context["is_locked"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "locked", [], "array", true, true, false, 160) && (($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["locked"] ?? null) : null));
            // line 161
            yield "               ";
            $context["display_save_btn"] = ( !($context["is_locked"] ?? null) && ((((($context["canupdate"] ?? null) || ($context["can_requester"] ?? null)) || ($context["canpriority"] ?? null)) || ($context["canassign"] ?? null)) || ($context["canassigntome"] ?? null)));
            // line 162
            yield "               ";
            if (($context["display_save_btn"] ?? null)) {
                // line 163
                yield "                  <button class=\"btn btn-primary\" type=\"submit\" name=\"update\" form=\"itil-form\"
                        title=\"";
                // line 164
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Save"), "html", null, true);
                yield "\">
                     <i class=\"far fa-save\"></i>
                     <span class=\"d-none d-xl-block\">";
                // line 166
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Save"), "html", null, true);
                yield "</span>
                  </button>
               ";
            }
            // line 169
            yield "            </div>

         ";
        }
        // line 172
        yield "         </span>
      </div>
   </div>
</div>

";
        // line 177
        $context["openfollowup"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_openfollowup", [], "array", true, true, false, 177) &&  !(null === (($__internal_compile_1 = ($context["_get"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["_openfollowup"] ?? null) : null)))) ? ((($__internal_compile_2 = ($context["_get"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["_openfollowup"] ?? null) : null)) : (false));
        // line 178
        $context["is_timeline_reversed"] = ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("timeline_order") == Twig\Extension\CoreExtension::constant("CommonITILObject::TIMELINE_ORDER_REVERSE"));
        // line 179
        yield "
<script type=\"text/javascript\">

(function(){
    ";
        // line 188
        yield "   var scrollToTimelineStart = function() {
        // scroll body to ensure we are at bottom (useful for responsive display)
        \$('html, body').animate({
        scrollTop: ";
        // line 191
        yield ((($context["is_timeline_reversed"] ?? null)) ? ("-") : (""));
        yield "\$(document).height()
        }, 0, function(){
            // scroll timeline with animation
            var timeline = \$(\"#itil-object-container .itil-left-side\");
            timeline.animate({
                scrollTop: ";
        // line 196
        yield ((($context["is_timeline_reversed"] ?? null)) ? ("-") : (""));
        yield "timeline.prop('scrollHeight')
            }, 'slow');
        });
   };

   \$(document).on(\"click\", \"#itil-footer .answer-action\", function() {
      scrollToTimelineStart();
      // hide answer button after clicking on it only for merge btn
      \$(\"#itil-footer .main-actions\").hide();
      // hide also itil object action to prevent confusion
      \$(\"#right-actions\").hide();
   });

   \$(function() {
      // when close button of new answer block is clicked, show again the new answer button (and the itil object actions)
      \$(document).on(\"click\", \"#new-itilobject-form .close-itil-answer\", function() {
         \$(\"#itil-footer .main-actions\").show();
         \$(\"#right-actions\").show();
      });

      ";
        // line 216
        if (($context["openfollowup"] ?? null)) {
            // line 217
            yield "         // trigger for reopen, show followup form in timeline
         var myCollapse = document.getElementById('new-ITILFollowup-block')
         var bsCollapse = new bootstrap.Collapse(myCollapse);
         bsCollapse.show();

         scrollToTimelineStart();
      ";
        }
        // line 224
        yield "   });
})();

</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/itilobject/footer.html.twig";
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
        return array (  482 => 224,  473 => 217,  471 => 216,  448 => 196,  440 => 191,  435 => 188,  429 => 179,  427 => 178,  425 => 177,  418 => 172,  413 => 169,  407 => 166,  402 => 164,  399 => 163,  396 => 162,  393 => 161,  391 => 160,  388 => 159,  384 => 157,  381 => 155,  379 => 154,  376 => 153,  373 => 152,  365 => 147,  362 => 146,  356 => 143,  351 => 141,  347 => 140,  340 => 136,  335 => 134,  332 => 133,  329 => 132,  327 => 131,  323 => 129,  317 => 126,  312 => 124,  309 => 123,  307 => 122,  296 => 114,  291 => 112,  286 => 110,  282 => 108,  277 => 106,  272 => 104,  268 => 102,  264 => 100,  261 => 99,  257 => 97,  243 => 96,  237 => 93,  233 => 92,  229 => 91,  224 => 90,  221 => 89,  204 => 88,  198 => 85,  191 => 81,  187 => 79,  184 => 78,  170 => 77,  164 => 74,  160 => 73,  153 => 72,  150 => 71,  132 => 70,  129 => 69,  127 => 68,  121 => 65,  117 => 64,  112 => 62,  107 => 60,  104 => 59,  100 => 56,  92 => 54,  89 => 53,  86 => 52,  83 => 51,  80 => 50,  78 => 49,  75 => 48,  72 => 47,  70 => 46,  66 => 45,  61 => 42,  57 => 40,  54 => 39,  51 => 38,  49 => 37,  47 => 36,  45 => 35,  43 => 34,  41 => 33,  38 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/footer.html.twig", "/var/www/html/glpi/templates/components/itilobject/footer.html.twig");
    }
}
