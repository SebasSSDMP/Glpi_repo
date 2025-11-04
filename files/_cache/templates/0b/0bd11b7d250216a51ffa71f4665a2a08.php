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

/* components/itilobject/timeline/simple_form.html.twig */
class __TwigTemplate_d0d8aa134a1078af38d24206494f8f8f extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/timeline/simple_form.html.twig", 33)->unwrap();
        // line 34
        yield "
";
        // line 35
        $context["target"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 35);
        // line 36
        $context["is_new_item"] = ((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 36)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null) == 0);
        // line 37
        $context["show_form"] = ( !array_key_exists("no_form", $context) || true);
        // line 38
        yield "
";
        // line 39
        $context["field_options"] = ["is_horizontal" => false, "full_width" => true, "fields_template" =>         // line 42
($context["itiltemplate"] ?? null), "disabled" =>  !(        // line 43
($context["canupdate"] ?? null) || ($context["can_requester"] ?? null))];
        // line 45
        yield "
";
        // line 46
        if (($context["show_form"] ?? null)) {
            // line 47
            yield "<form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["target"] ?? null), "html", null, true);
            yield "\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["formoptions"] ?? null), "html", null, true);
            yield " enctype=\"multipart/form-data\" data-submit-once>
";
        }
        // line 49
        yield "   <div class=\"row flex-column\">
      ";
        // line 50
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 50)) {
            // line 51
            yield "        ";
            $context["recipient"] = ((((($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 51)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["users_id_recipient"] ?? null) : null) > 0)) ? ((($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 51)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["users_id_recipient"] ?? null) : null)) : ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID")));
            // line 52
            yield "        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["User", "users_id_recipient",             // line 55
($context["recipient"] ?? null), __("By"), Twig\Extension\CoreExtension::merge(            // line 57
($context["field_options"] ?? null), ["maxlength" => 255, "entity" => (($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source,             // line 59
($context["item"] ?? null), "fields", [], "any", false, false, false, 59)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["entities_id"] ?? null) : null), "right" => "all"])], 52, $context, $this->getSourceContext());
            // line 62
            yield "
      ";
        }
        // line 64
        yield "
      ";
        // line 65
        yield CoreExtension::callMacro($macros["fields"], "macro_textField", ["name", (($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source,         // line 67
($context["item"] ?? null), "fields", [], "any", false, false, false, 67)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["name"] ?? null) : null), __("Title"), Twig\Extension\CoreExtension::merge(        // line 69
($context["field_options"] ?? null), ["maxlength" => 255])], 65, $context, $this->getSourceContext());
        // line 72
        yield "

      ";
        // line 74
        $context["uploads"] = [];
        // line 75
        yield "      ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "input", [], "any", false, true, false, 75), "_content", [], "any", true, true, false, 75)) {
            // line 76
            yield "         ";
            $context["uploads"] = Twig\Extension\CoreExtension::merge(($context["uploads"] ?? null), ["_content" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "input", [], "any", false, false, false, 76), "_content", [], "any", false, false, false, 76), "_tag_content" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "input", [], "any", false, false, false, 76), "_tag_content", [], "any", false, false, false, 76)]);
            // line 77
            yield "      ";
        }
        // line 78
        yield "      ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "input", [], "any", false, true, false, 78), "_filename", [], "any", true, true, false, 78)) {
            // line 79
            yield "         ";
            $context["uploads"] = Twig\Extension\CoreExtension::merge(($context["uploads"] ?? null), ["_filename" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "input", [], "any", false, false, false, 79), "_filename", [], "any", false, false, false, 79), "_tag_filename" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "input", [], "any", false, false, false, 79), "_tag_filename", [], "any", false, false, false, 79)]);
            // line 80
            yield "      ";
        }
        // line 81
        yield "
      ";
        // line 82
        yield CoreExtension::callMacro($macros["fields"], "macro_textareaField", ["content", (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source,         // line 84
($context["item"] ?? null), "fields", [], "any", false, false, false, 84)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["content"] ?? null) : null), __("Description"), Twig\Extension\CoreExtension::merge(        // line 86
($context["field_options"] ?? null), ["enable_richtext" => true, "enable_fileupload" => true, "enable_mentions" => true, "enable_fileupload" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 90
($context["itiltemplate"] ?? null), "isHiddenField", ["_documents_id"], "method", false, false, false, 90)) ? (false) : (true)), "entities_id" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 91
($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 91)) ? (($context["entities_id"] ?? null)) : ((($__internal_compile_6 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 91)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["entities_id"] ?? null) : null))), "uploads" =>         // line 92
($context["uploads"] ?? null), "add_field_class" => "col-12 itil-textarea-content"])], 82, $context, $this->getSourceContext());
        // line 95
        yield "
   </div>

   ";
        // line 98
        if ((( !($context["is_new_item"] ?? null) && ($context["show_form"] ?? null)) &&  !(($__internal_compile_7 = ($context["params"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["template_preview"] ?? null) : null))) {
            // line 99
            yield "      <div class=\"d-flex card-footer mx-n3 mb-n3\">
         <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\">
            <i class=\"far fa-save\"></i>
            <span>";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Save"), "html", null, true);
            yield "</span>
         </button>
      </div>

      <input type=\"hidden\" name=\"id\" value=\"";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 106)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["id"] ?? null) : null), "html", null, true);
            yield "\" />
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\" />
   </form>
   ";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/itilobject/timeline/simple_form.html.twig";
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
        return array (  154 => 107,  150 => 106,  143 => 102,  138 => 99,  136 => 98,  131 => 95,  129 => 92,  128 => 91,  127 => 90,  126 => 86,  125 => 84,  124 => 82,  121 => 81,  118 => 80,  115 => 79,  112 => 78,  109 => 77,  106 => 76,  103 => 75,  101 => 74,  97 => 72,  95 => 69,  94 => 67,  93 => 65,  90 => 64,  86 => 62,  84 => 59,  83 => 57,  82 => 55,  80 => 52,  77 => 51,  75 => 50,  72 => 49,  64 => 47,  62 => 46,  59 => 45,  57 => 43,  56 => 42,  55 => 39,  52 => 38,  50 => 37,  48 => 36,  46 => 35,  43 => 34,  41 => 33,  38 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/simple_form.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/simple_form.html.twig");
    }
}
