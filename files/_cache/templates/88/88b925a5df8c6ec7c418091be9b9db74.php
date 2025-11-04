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

/* components/itilobject/timeline/approbation_form.html.twig */
class __TwigTemplate_7b747e71533c1c76838d6a5f149681df extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/timeline/approbation_form.html.twig", 33)->unwrap();
        // line 34
        yield "
";
        // line 35
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isSolved", [], "method", false, false, false, 35) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canApprove", [], "method", false, false, false, 35)) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isAllowedStatus", [(($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 35)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["status"] ?? null) : null), Twig\Extension\CoreExtension::constant("CommonITILObject::CLOSED")], "method", false, false, false, 35))) {
            // line 36
            yield "<div class=\"timeline-item mb-3\">
   <div class=\"row\">
      <div class=\"col-auto d-none d-md-block\">
         ";
            // line 39
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/user/picture.html.twig", ["users_id" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID")], false);
            yield "
      </div>
      <div class=\"col\">
         <div class=\"row timeline-content t-left card mt-4\">
            <form name=\"form\" method=\"post\" action=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("ItilFollowup"), "html", null, true);
            yield "\" data-submit-once>

               <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\" />
               <input type=\"hidden\" name=\"itemtype\" value=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 46), "html", null, true);
            yield "\" />
               <input type=\"hidden\" name=\"items_id\" value=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 47)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["id"] ?? null) : null), "html", null, true);
            yield "\" />
               <input type=\"hidden\" name=\"requesttypes_id\" value=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 48)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["id"] ?? null) : null), "html", null, true);
            yield "\" />

               <div class=\"card-header\">
                  ";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Approval of the solution"), "html", null, true);
            yield "
               </div>
               <div class=\"card-body\">
                  ";
            // line 54
            yield CoreExtension::callMacro($macros["fields"], "macro_textareaField", ["content", "", __("Comments"), ["full_width" => true, "helper" => __("Optional when approved"), "enable_richtext" => true, "enable_fileupload" => true, "enable_mentions" => true, "entities_id" => (($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source,             // line 64
($context["item"] ?? null), "fields", [], "any", false, false, false, 64)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["entities_id"] ?? null) : null), "is_horizontal" => false]], 54, $context, $this->getSourceContext());
            // line 67
            yield "
               </div>

               <div class=\"card-footer\">
                  <button class=\"btn btn-icon btn-outline-danger me-2\" name=\"add_reopen\">
                     <i class=\"ti ti-x\"></i>
                     <span>";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Refuse"), "html", null, true);
            yield "</span>
                  </button>

                  <button class=\"btn btn-icon btn-outline-success\" name=\"add_close\">
                     <i class=\"ti ti-check\"></i>
                     <span>";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Approve"), "html", null, true);
            yield "</span>
                  </button>
               </div>
            </form>
         </div>
      </div>
   </div>
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
        return "components/itilobject/timeline/approbation_form.html.twig";
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
        return array (  108 => 78,  100 => 73,  92 => 67,  90 => 64,  89 => 54,  83 => 51,  77 => 48,  73 => 47,  69 => 46,  65 => 45,  60 => 43,  53 => 39,  48 => 36,  46 => 35,  43 => 34,  41 => 33,  38 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/approbation_form.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/approbation_form.html.twig");
    }
}
