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

/* @escalade/escalade_form.html.twig */
class __TwigTemplate_57153be77edb7959cc7353e888cf26d0 extends Template
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
        // line 29
        return "components/itilobject/timeline/form_timeline_item.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@escalade/escalade_form.html.twig", 30)->unwrap();
        // line 29
        $this->parent = $this->loadTemplate("components/itilobject/timeline/form_timeline_item.html.twig", "@escalade/escalade_form.html.twig", 29);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 32
    public function block_timeline_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        yield "    <div class=\"escalation card mt-4 \">
        <form name=\"asset_form\" id=\"asset_form\" class=\"d-flex flex-column escalation-form bg-white\" method=\"post\"
              action=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["action"] ?? null), "html", null, true);
        yield "\"
              enctype=\"multipart/form-data\"
              data-track-changes=\"true\" data-submit-once>

            <input type=\"hidden\" name=\"tickets_id\" value=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "getID", [], "method", false, false, false, 39), "html", null, true);
        yield "\" />
            <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\" />

            <div class=\"escalation card-header\">
                <h3 class=\"card-title\"> ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Escalate ticket", "escalade"), "html", null, true);
        yield "</h3>
            </div>
            <div class=\"escalation card-body\">
                ";
        // line 46
        yield CoreExtension::callMacro($macros["fields"], "macro_textareaField", ["comment", "", __("Comment", "escalade"), ["full_width" => true, "required" => true, "label" => true, "is_horizontal" => false, "enable_richtext" => true, "enable_fileupload" => false, "enable_mentions" => true, "rand" =>         // line 58
($context["rand"] ?? null)]], 46, $context, $this->getSourceContext());
        // line 60
        yield "
                <div class=\"form-field col-12 mt-2\">
                    ";
        // line 62
        yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["Group", "groups_id", "", $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Group"), ["label_class" => "col-auto", "input_class" => "col-12", "field_class" => "col-12 mr-0 ", "full_width" => true, "required" => true, "icon_label" => true, "entity" => (($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source,         // line 74
($context["ticket"] ?? null), "fields", [], "any", false, false, false, 74)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["entities_id"] ?? null) : null), "condition" =>         // line 75
($context["condition"] ?? null), "value" => 0, "used" =>         // line 77
($context["assigned_groups"] ?? null), "rand" =>         // line 78
($context["rand"] ?? null)]], 62, $context, $this->getSourceContext());
        // line 80
        yield "
                </div>
                ";
        // line 82
        yield CoreExtension::callMacro($macros["fields"], "macro_checkboxField", ["is_observer_checkbox",         // line 84
($context["assign_me_as_observer"] ?? null), __("Assign me as an observer", "escalade"), ["field_class" => "col-12", "label_class" => "col-auto", "input_class" => "col-auto"]], 82, $context, $this->getSourceContext());
        // line 91
        yield "
            </div>
            <div class=\"escalation d-flex card-footer justify-content-center\">
                <div class=\"input-group justify-content-center\">
                    <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"escalate\">
                        <i class=\"fas fa-plus\"></i>
                        <span>";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Add"), "html", null, true);
        yield "</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <script>
        \$(document).ready(function () {
            var form = \$('#itil-form');
            var inputs = form.serializeArray();
            var asset_form = \$('#asset_form');

            if (asset_form.length > 0) {
                \$.each(inputs, function(i, input) {
                    if (input.name != '_actors') {
                        asset_form.append('<input type=\"hidden\" name=\"ticket_details[' + input.name + ']\" value=\"' + input.value + '\">');
                    }
                });
            }
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
        return "@escalade/escalade_form.html.twig";
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
        return array (  109 => 97,  101 => 91,  99 => 84,  98 => 82,  94 => 80,  92 => 78,  91 => 77,  90 => 75,  89 => 74,  88 => 62,  84 => 60,  82 => 58,  81 => 46,  75 => 43,  69 => 40,  65 => 39,  58 => 35,  54 => 33,  50 => 32,  45 => 29,  43 => 30,  36 => 29,);
    }

    public function getSourceContext()
    {
        return new Source("", "@escalade/escalade_form.html.twig", "/var/www/html/glpi/marketplace/escalade/templates/escalade_form.html.twig");
    }
}
