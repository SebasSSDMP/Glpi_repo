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

/* components/itilobject/timeline/pending_reasons_messages.html.twig */
class __TwigTemplate_2e26fb8e989b1a0ae75ef1458be7eb26 extends Template
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
        $context["pending_reason_item_parent"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::getForItem", [($context["item"] ?? null)]);
        // line 34
        yield "
";
        // line 35
        $context["pending_reason_contexts"] = ["pending" => ["className" => "badge bg-blue-lt", "icon" => "<i class=\"fas fa-pause me-1\"></i>", "text" => __("Pending")], "done" => ["className" => "badge bg-transparent text-muted", "icon" => "<i class=\"fas fa-solid fa-check\"></i>", "text" => __("Done")]];
        // line 47
        yield "
";
        // line 48
        $context["pending_reason_selected_context"] = "pending";
        // line 49
        yield "
";
        // line 50
        if (($context["display_for_parent"] ?? null)) {
            // line 51
            yield "   ";
            $context["pending_reason"] = ((($context["pending_reason_item_parent"] ?? null)) ? ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason::getById", [(($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["pending_reason_item_parent"] ?? null), "fields", [], "any", false, false, false, 51)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["pendingreasons_id"] ?? null) : null)])) : (false));
        } else {
            // line 53
            yield "   ";
            $context["pending_item"] = (($context["pending_item"]) ?? ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call(((($__internal_compile_1 = ($context["entry"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["type"] ?? null) : null) . "::getById"), [(($__internal_compile_2 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["id"] ?? null) : null)])));
            // line 54
            yield "   ";
            $context["pending_reason_item"] = ((($context["pending_item"] ?? null)) ? ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::getForItem", [($context["pending_item"] ?? null)])) : (false));
            // line 55
            yield "   ";
            $context["pending_reason"] = ((($context["pending_reason_item"] ?? null)) ? ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason::getById", [(($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source, ($context["pending_reason_item"] ?? null), "fields", [], "any", false, false, false, 55)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["pendingreasons_id"] ?? null) : null)])) : (false));
            // line 56
            yield "   ";
            $context["is_latest_pending"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::isLastPendingForItem", [            // line 57
($context["item"] ?? null),             // line 58
($context["pending_item"] ?? null)]);
            // line 60
            yield "   ";
            $context["pending_reason_selected_context"] = (((($context["is_latest_pending"] ?? null) && (($context["pending_reason_item_parent"] ?? null) != false))) ? ("pending") : ("done"));
        }
        // line 62
        yield "
";
        // line 63
        if (($context["pending_reason"] ?? null)) {
            // line 64
            yield "   <span class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_4 = ($context["pending_reason_contexts"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[($context["pending_reason_selected_context"] ?? null)] ?? null) : null), "className", [], "any", false, false, false, 64), "html", null, true);
            yield " ";
            yield ((($context["display_for_parent"] ?? null)) ? ("mt-1 w-100 text-truncate") : (""));
            yield "\">
      ";
            // line 65
            yield CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_5 = ($context["pending_reason_contexts"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[($context["pending_reason_selected_context"] ?? null)] ?? null) : null), "icon", [], "any", false, false, false, 65);
            yield "
      ";
            // line 66
            yield (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_6 = ($context["pending_reason_contexts"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[($context["pending_reason_selected_context"] ?? null)] ?? null) : null), "text", [], "any", false, false, false, 66) . Twig\Extension\CoreExtension::sprintf(": %s", CoreExtension::getAttribute($this->env, $this->source, ($context["pending_reason"] ?? null), "getLink", [], "method", false, false, false, 66)));
            yield "

      ";
            // line 68
            if ((($context["display_for_parent"] ?? null) || $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::isLastPendingForItem", [            // line 69
($context["item"] ?? null),             // line 70
($context["pending_item"] ?? null)]))) {
                // line 72
                yield "         ";
                $context["next_bump"] = CoreExtension::getAttribute($this->env, $this->source, ($context["pending_reason_item_parent"] ?? null), "getNextFollowupDate", [], "method", false, false, false, 72);
                // line 73
                yield "         ";
                if (($context["next_bump"] ?? null)) {
                    // line 74
                    yield "
            <i class=\"fas fa-clock ms-2\" title=\"";
                    // line 75
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Next automatic follow-up scheduled on %s"), $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::convDate", [($context["next_bump"] ?? null)])), "html", null, true);
                    yield "\"
               data-bs-toggle=\"tooltip\"></i>
         ";
                }
                // line 78
                yield "
         ";
                // line 79
                $context["resolve"] = CoreExtension::getAttribute($this->env, $this->source, ($context["pending_reason_item_parent"] ?? null), "getAutoResolvedate", [], "method", false, false, false, 79);
                // line 80
                yield "         ";
                if (($context["resolve"] ?? null)) {
                    // line 81
                    yield "            <i class=\"fas fa-stop ms-2\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Automatic resolution scheduled on %s"), $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::convDate", [($context["resolve"] ?? null)])), "html", null, true);
                    yield "\"
               data-bs-toggle=\"tooltip\"></i>
         ";
                }
                // line 84
                yield "      ";
            }
            // line 85
            yield "   </span>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/itilobject/timeline/pending_reasons_messages.html.twig";
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
        return array (  138 => 85,  135 => 84,  128 => 81,  125 => 80,  123 => 79,  120 => 78,  114 => 75,  111 => 74,  108 => 73,  105 => 72,  103 => 70,  102 => 69,  101 => 68,  96 => 66,  92 => 65,  85 => 64,  83 => 63,  80 => 62,  76 => 60,  74 => 58,  73 => 57,  71 => 56,  68 => 55,  65 => 54,  62 => 53,  58 => 51,  56 => 50,  53 => 49,  51 => 48,  48 => 47,  46 => 35,  43 => 34,  41 => 33,  38 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/pending_reasons_messages.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/pending_reasons_messages.html.twig");
    }
}
