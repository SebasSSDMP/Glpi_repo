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

/* components/itilobject/timeline/timeline_item_header.html.twig */
class __TwigTemplate_f316b5ef1ad85dcb3ce2766ec9b3e1bd extends Template
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
<div class=\"d-flex timeline-header\">
   <div class=\"d-flex creator\">
      ";
        // line 35
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/timeline_item_header_badges.html.twig", ["users_id" =>         // line 36
($context["users_id"] ?? null), "user_object" =>         // line 37
($context["user_object"] ?? null), "date_creation" =>         // line 38
($context["date_creation"] ?? null), "date_mod" =>         // line 39
($context["date_mod"] ?? null), "users_id_editor" => (($__internal_compile_0 =         // line 40
($context["entry_i"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["users_id_editor"] ?? null) : null), "anchor" => (((($__internal_compile_1 =         // line 41
($context["entry"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["type"] ?? null) : null) . "_") . (($__internal_compile_2 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["id"] ?? null) : null)), "anonym_user" =>         // line 42
($context["anonym_user"] ?? null)], false);
        // line 43
        yield "
   </div>

   <div class=\"d-flex ms-auto timeline-item-buttons\">
      ";
        // line 47
        $context["actions"] = [];
        // line 48
        yield "      ";
        if ((((($__internal_compile_3 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["can_edit"] ?? null) : null) &&  !($context["status_closed"] ?? null)) &&  !CoreExtension::inFilter((($__internal_compile_4 = ($context["entry"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["type"] ?? null) : null), ["Document_Item", "Assign"]))) {
            // line 49
            yield "         ";
            $context["edit_btn"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 50
                yield "            <li>
               <a class=\"dropdown-item edit-timeline-item\" href=\"#\">
                  <i class=\"fa-fw ti ti-edit\"></i>
                  <span>";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit"), "html", null, true);
                yield "</span>
               </a>
            </li>
         ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 57
            yield "         ";
            $context["actions"] = Twig\Extension\CoreExtension::merge(($context["actions"] ?? null), ["edit_btn" => ($context["edit_btn"] ?? null)]);
            // line 58
            yield "      ";
        }
        // line 59
        yield "
      ";
        // line 60
        if (($context["is_private"] ?? null)) {
            // line 61
            yield "         <span class=\"is-private ms-2\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Private"), "html", null, true);
            yield "\"
               data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\">
            <i class=\"ti ti-lock\" aria-label=\"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Private"), "html", null, true);
            yield "\"></i>
         </span>
      ";
        }
        // line 66
        yield "
      ";
        // line 67
        if ((($__internal_compile_5 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["can_promote"] ?? null) : null)) {
            // line 68
            yield "         ";
            if (((($__internal_compile_6 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["sourceof_items_id"] ?? null) : null) > 0)) {
                // line 69
                yield "            ";
                $context["promoted_btn"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 70
                    yield "               <li>
                  <a class=\"dropdown-item text-warning\" href=\"";
                    // line 71
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Ticket", (($__internal_compile_7 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["sourceof_items_id"] ?? null) : null)), "html", null, true);
                    yield "\">
                     <i class=\"fa-fw ti ti-git-branch\"></i>
                     <span>";
                    // line 73
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("%s was already promoted"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName((($__internal_compile_8 = ($context["entry"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["type"] ?? null) : null))), "html", null, true);
                    yield "</span>
                  </a>
               </li>
            ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 77
                yield "            ";
                $context["actions"] = Twig\Extension\CoreExtension::merge(($context["actions"] ?? null), ["promoted_btn" => ($context["promoted_btn"] ?? null)]);
                // line 78
                yield "         ";
            } else {
                // line 79
                yield "            ";
                $context["promote_url"] = ("?_promoted_fup_id=" . (($__internal_compile_9 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["id"] ?? null) : null));
                // line 80
                yield "            ";
                if (((($__internal_compile_10 = ($context["entry"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["type"] ?? null) : null) === "TicketTask")) {
                    // line 81
                    yield "               ";
                    $context["promote_url"] = ("?_promoted_task_id=" . (($__internal_compile_11 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["id"] ?? null) : null));
                    // line 82
                    yield "            ";
                }
                // line 83
                yield "
            ";
                // line 84
                $context["promote_btn"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 85
                    yield "               <li>
                  <a class=\"dropdown-item\" href=\"";
                    // line 86
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Ticket") . ($context["promote_url"] ?? null)), "html", null, true);
                    yield "\">
                     <i class=\"fa-fw ti ti-git-branch\"></i>
                     <span>";
                    // line 88
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Promote to Ticket"), "html", null, true);
                    yield "</span>
                  </a>
               </li>
            ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 92
                yield "            ";
                $context["actions"] = Twig\Extension\CoreExtension::merge(($context["actions"] ?? null), ["promote_btn" => ($context["promote_btn"] ?? null)]);
                // line 93
                yield "         ";
            }
            // line 94
            yield "      ";
        }
        // line 95
        yield "
      ";
        // line 96
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["actions"] ?? null))) {
            // line 97
            yield "         <div class=\"dropdown ms-2\">
            <button class=\"btn btn-sm btn-ghost-secondary timeline-more-actions\" type=\"button\" id=\"more-actions-";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_rand"] ?? null), "html", null, true);
            yield "\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
               <i class=\"ti ti-dots-vertical\"></i>
            </button>
            <ul class=\"dropdown-menu\" aria-labelledby=\"more-actions-";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_rand"] ?? null), "html", null, true);
            yield "\">
               ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["actions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 103
                yield "                  ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["action"], "html", null, true);
                yield "
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            yield "            </ul>
         </div>
      ";
        }
        // line 108
        yield "   </div>

   <button class=\"btn btn-sm btn-ghost-secondary close-edit-content d-none ms-auto\">
      <i class=\"ti ti-x\"></i>
   </button>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/itilobject/timeline/timeline_item_header.html.twig";
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
        return array (  213 => 108,  208 => 105,  199 => 103,  195 => 102,  191 => 101,  185 => 98,  182 => 97,  180 => 96,  177 => 95,  174 => 94,  171 => 93,  168 => 92,  160 => 88,  155 => 86,  152 => 85,  150 => 84,  147 => 83,  144 => 82,  141 => 81,  138 => 80,  135 => 79,  132 => 78,  129 => 77,  121 => 73,  116 => 71,  113 => 70,  110 => 69,  107 => 68,  105 => 67,  102 => 66,  96 => 63,  90 => 61,  88 => 60,  85 => 59,  82 => 58,  79 => 57,  71 => 53,  66 => 50,  63 => 49,  60 => 48,  58 => 47,  52 => 43,  50 => 42,  49 => 41,  48 => 40,  47 => 39,  46 => 38,  45 => 37,  44 => 36,  43 => 35,  38 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/timeline_item_header.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/timeline_item_header.html.twig");
    }
}
