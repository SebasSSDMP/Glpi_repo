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

/* components/itilobject/fields/global_validation.html.twig */
class __TwigTemplate_81f0228aca3393b3edff844feb4fcb52 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/fields/global_validation.html.twig", 33)->unwrap();
        // line 34
        yield "
";
        // line 35
        $context["validation"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getValidationClassInstance", [], "method", false, false, false, 35);
        // line 36
        yield "
";
        // line 37
        if ( !(null === ($context["validation"] ?? null))) {
            // line 38
            yield "   ";
            $context["create_right_val"] = Twig\Extension\CoreExtension::constant("CREATE");
            // line 39
            yield "   ";
            $context["validation_right"] = "validate";
            // line 40
            yield "   ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 40) == "Ticket")) {
                // line 41
                yield "      ";
                if (((($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["type"] ?? null) : null) == Twig\Extension\CoreExtension::constant("Ticket::INCIDENT_TYPE"))) {
                    // line 42
                    yield "         ";
                    $context["create_right_val"] = Twig\Extension\CoreExtension::constant("TicketValidation::CREATEINCIDENT");
                    // line 43
                    yield "         ";
                    $context["validation_right"] = "validate_incident";
                    // line 44
                    yield "      ";
                } elseif (((($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["type"] ?? null) : null) == Twig\Extension\CoreExtension::constant("Ticket::DEMAND_TYPE"))) {
                    // line 45
                    yield "         ";
                    $context["create_right_val"] = Twig\Extension\CoreExtension::constant("TicketValidation::CREATEREQUEST");
                    // line 46
                    yield "         ";
                    $context["validation_right"] = "validate_request";
                    // line 47
                    yield "      ";
                }
                // line 48
                yield "   ";
            }
            // line 49
            yield "   ";
            $context["can_create"] = Session::haveRight($this->extensions['Glpi\Application\View\Extension\PhpExtension']->getStatic(($context["validation"] ?? null), "rightname"), ($context["create_right_val"] ?? null));
            // line 50
            yield "
   ";
            // line 51
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 51)) {
                // line 52
                yield "      ";
                if (($context["can_create"] ?? null)) {
                    // line 53
                    yield "         ";
                    $context["required"] = [];
                    // line 54
                    yield "         ";
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", false, false, false, 54), "isMandatoryField", ["_add_validation"], "method", false, false, false, 54)) {
                        // line 55
                        yield "            ";
                        $context["required"] = ["required" => true];
                        // line 58
                        yield "         ";
                    }
                    // line 59
                    yield "
         ";
                    // line 60
                    yield CoreExtension::callMacro($macros["fields"], "macro_field", ["_add_validation", CoreExtension::getAttribute($this->env, $this->source,                     // line 62
($context["validation"] ?? null), "dropdownValidator", [Twig\Extension\CoreExtension::merge(["name" => "users_id_validate", "entity" => (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source,                     // line 64
($context["item"] ?? null), "fields", [], "any", false, false, false, 64)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["entities_id"] ?? null) : null), "right" =>                     // line 65
($context["validation_right"] ?? null), "users_id_validate" => (($__internal_compile_3 =                     // line 66
($context["params"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["users_id_validate"] ?? null) : null), "display" => false, "disabled" =>  !                    // line 68
($context["canupdate"] ?? null)],                     // line 69
($context["required"] ?? null))], "method", false, false, false, 62), __("Approval request"),                     // line 71
($context["field_options"] ?? null)], 60, $context, $this->getSourceContext());
                    // line 72
                    yield "

         <input type=\"hidden\" name=\"_add_validation\" value=\"";
                    // line 74
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_4 = ($context["params"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["_add_validation"] ?? null) : null), "html", null, true);
                    yield "\" />
      ";
                }
                // line 76
                yield "   ";
            } else {
                // line 77
                yield "        ";
                if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", ["global_validation"], "method", false, false, false, 77)) {
                    // line 78
                    yield "            ";
                    yield CoreExtension::callMacro($macros["fields"], "macro_htmlField", ["global_validation", $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("TicketValidation::getStatus", [(($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source,                     // line 80
($context["item"] ?? null), "fields", [], "any", false, false, false, 80)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["global_validation"] ?? null) : null), true]), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("CommonITILValidation"),                     // line 82
($context["field_options"] ?? null)], 78, $context, $this->getSourceContext());
                    // line 83
                    yield "
        ";
                }
                // line 85
                yield "   ";
            }
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/itilobject/fields/global_validation.html.twig";
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
        return array (  145 => 85,  141 => 83,  139 => 82,  138 => 80,  136 => 78,  133 => 77,  130 => 76,  125 => 74,  121 => 72,  119 => 71,  118 => 69,  117 => 68,  116 => 66,  115 => 65,  114 => 64,  113 => 62,  112 => 60,  109 => 59,  106 => 58,  103 => 55,  100 => 54,  97 => 53,  94 => 52,  92 => 51,  89 => 50,  86 => 49,  83 => 48,  80 => 47,  77 => 46,  74 => 45,  71 => 44,  68 => 43,  65 => 42,  62 => 41,  59 => 40,  56 => 39,  53 => 38,  51 => 37,  48 => 36,  46 => 35,  43 => 34,  41 => 33,  38 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/fields/global_validation.html.twig", "/var/www/html/glpi/templates/components/itilobject/fields/global_validation.html.twig");
    }
}
