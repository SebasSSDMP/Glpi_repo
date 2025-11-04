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

/* components/itilobject/linked_tickets.html.twig */
class __TwigTemplate_b23d3ee4a13f2fc5461da2079678381f extends Template
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
<input type=\"hidden\" name=\"_link[tickets_id_1]\" value=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 33)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null), "html", null, true);
        yield "\" />

";
        // line 35
        $context["linked_tickets"] = ((array_key_exists("linked_tickets", $context)) ? (Twig\Extension\CoreExtension::default(($context["linked_tickets"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["ticket_ticket"] ?? null), "getLinkedTicketsTo", [(($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 35)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["id"] ?? null) : null), true], "method", false, false, false, 35))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["ticket_ticket"] ?? null), "getLinkedTicketsTo", [(($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 35)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["id"] ?? null) : null), true], "method", false, false, false, 35)));
        // line 36
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["linked_tickets"] ?? null))) {
            // line 37
            yield "<div class=\"card\">
   <div class=\"list-group list-group-flush list-group-hoverable\">
      ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["linked_tickets"] ?? null));
            foreach ($context['_seq'] as $context["id"] => $context["linked"]) {
                // line 40
                yield "      ";
                $context["new_ticket"] = $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem("Ticket", (($__internal_compile_3 = $context["linked"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["tickets_id"] ?? null) : null));
                // line 41
                yield "      <div class=\"list-group-item\">
         <div class=\"row\">
            <div class=\"col-auto\">
               ";
                // line 44
                yield $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ticket_Ticket::getLinkName", [(($__internal_compile_4 =                 // line 45
$context["linked"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["link"] ?? null) : null), CoreExtension::getAttribute($this->env, $this->source,                 // line 46
$context["linked"], "tickets_id_1", [], "array", true, true, false, 46), true]);
                // line 48
                yield "
            </div>
            <div class=\"col text-truncate\">
               <a href=\"";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Ticket", (($__internal_compile_5 = $context["linked"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["tickets_id"] ?? null) : null)), "html", null, true);
                yield "\" class=\"col-9 overflow-hidden text-nowrap\">
                  ";
                // line 52
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["new_ticket"] ?? null), "getStatusIcon", [(($__internal_compile_6 = CoreExtension::getAttribute($this->env, $this->source, ($context["new_ticket"] ?? null), "fields", [], "any", false, false, false, 52)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["status"] ?? null) : null)], "method", false, false, false, 52);
                yield "
                  <span title=\"";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source, ($context["new_ticket"] ?? null), "fields", [], "any", false, false, false, 53)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["name"] ?? null) : null)), "html", null, true);
                yield "\" data-bs-toggle=\"tooltip\">
                     ";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source, ($context["new_ticket"] ?? null), "fields", [], "any", false, false, false, 54)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["name"] ?? null) : null)), "html", null, true);
                yield "
                  </span>
                  (";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_9 = CoreExtension::getAttribute($this->env, $this->source, ($context["new_ticket"] ?? null), "fields", [], "any", false, false, false, 56)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["id"] ?? null) : null), "html", null, true);
                yield ")
               </a>
            </div>

            ";
                // line 60
                if (($context["canupdate"] ?? null)) {
                    // line 61
                    yield "               <div class=\"col-auto\">
                  <button type=\"submit\"
                          form=\"linked_tickets_";
                    // line 63
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["main_rand"] ?? null), "html", null, true);
                    yield "\"
                          name=\"id\"
                          value=\"";
                    // line 65
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["id"], "html", null, true);
                    yield "\"
                          class=\"btn btn-sm btn-ghost-danger\"
                          title=\"";
                    // line 67
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
                    yield "\"
                          data-bs-toggle=\"tooltip\">
                     <i class=\"fas fa-unlink\"></i>
                  </button>
               </div>
            ";
                }
                // line 73
                yield "         </div>
      </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['linked'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            yield "   </div>
</div>
";
        }
        // line 79
        yield "
";
        // line 80
        if ((($context["canupdate"] ?? null) &&  !(($__internal_compile_10 = ($context["params"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["template_preview"] ?? null) : null))) {
            // line 81
            yield "   ";
            $context["has_pending_link"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), (($__internal_compile_11 = (($__internal_compile_12 = ($context["params"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["_link"] ?? null) : null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["tickets_id_2"] ?? null) : null)) > 0);
            // line 82
            yield "   <div class=\"mt-2\">
      <button class=\"btn btn-sm btn-ghost-secondary ";
            // line 83
            yield ((($context["has_pending_link"] ?? null)) ? ("d-none") : (""));
            yield "\" type=\"button\"
               data-bs-toggle=\"collapse\" data-bs-target=\"#link_ticket_dropdowns\"
               aria-expanded=\"false\" aria-controls=\"link_ticket_dropdowns\" onclick=\"\$(this).hide();\">
         <i class=\"fas fa-plus\"></i>
         <span>";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add"), "html", null, true);
            yield "</span>
      </button>

      <span class=\"collapse ";
            // line 90
            yield ((($context["has_pending_link"] ?? null)) ? ("show") : (""));
            yield "\" id=\"link_ticket_dropdowns\">
         ";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ticket_ticket"] ?? null), "dropdownLinks", ["_link[link]", (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 93
($context["params"] ?? null), "_link", [], "array", false, true, false, 93), "link", [], "array", true, true, false, 93) &&  !(null === (($__internal_compile_13 = CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_link", [], "array", false, true, false, 93)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["link"] ?? null) : null)))) ? ((($__internal_compile_14 = CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_link", [], "array", false, true, false, 93)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["link"] ?? null) : null)) : (""))], "method", false, false, false, 91), "html", null, true);
            // line 94
            yield "

         ";
            // line 96
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "dropdown", [["name" => "_link[tickets_id_2]", "used" => [(($__internal_compile_15 = CoreExtension::getAttribute($this->env, $this->source,             // line 98
($context["item"] ?? null), "fields", [], "any", false, false, false, 98)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["id"] ?? null) : null)], "displaywith" => ["id"], "display" => false, "value" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 101
($context["params"] ?? null), "_link", [], "array", false, true, false, 101), "tickets_id_2", [], "array", true, true, false, 101) &&  !(null === (($__internal_compile_16 = CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_link", [], "array", false, true, false, 101)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["tickets_id_2"] ?? null) : null)))) ? ((($__internal_compile_17 = CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_link", [], "array", false, true, false, 101)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["tickets_id_2"] ?? null) : null)) : (""))]], "method", false, false, false, 96);
            // line 102
            yield "
      </span>
   </div>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/itilobject/linked_tickets.html.twig";
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
        return array (  176 => 102,  174 => 101,  173 => 98,  172 => 96,  168 => 94,  166 => 93,  165 => 91,  161 => 90,  155 => 87,  148 => 83,  145 => 82,  142 => 81,  140 => 80,  137 => 79,  132 => 76,  124 => 73,  115 => 67,  110 => 65,  105 => 63,  101 => 61,  99 => 60,  92 => 56,  87 => 54,  83 => 53,  79 => 52,  75 => 51,  70 => 48,  68 => 46,  67 => 45,  66 => 44,  61 => 41,  58 => 40,  54 => 39,  50 => 37,  48 => 36,  46 => 35,  41 => 33,  38 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/linked_tickets.html.twig", "/var/www/html/glpi/templates/components/itilobject/linked_tickets.html.twig");
    }
}
