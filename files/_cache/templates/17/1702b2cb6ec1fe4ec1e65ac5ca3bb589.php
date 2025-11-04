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

/* components/itilobject/timeline/main_description.html.twig */
class __TwigTemplate_9a47eb137dffa7acdd4355bdbd3ce104 extends Template
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
        $context["users_id"] = ((((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 33)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["users_id_recipient"] ?? null) : null) > 0)) ? ((($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 33)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["users_id_recipient"] ?? null) : null)) : (0));
        // line 34
        $context["entry_rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 35
        yield "
<div class=\"timeline-item mb-3 ITILContent\"
     data-itemtype=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 37), "html", null, true);
        yield "\" data-items-id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 37)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["id"] ?? null) : null), "html", null, true);
        yield "\">
   <div class=\"row\">
      <div class=\"col-auto d-flex flex-column \">
         ";
        // line 40
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/user/picture.html.twig", ["users_id" => ($context["users_id"] ?? null)], false);
        yield "
      </div>
      <div class=\"col-12 col-sm\">
         <div class=\"mt-2 timeline-content left card\">
            <div class=\"card-body\">
               <div class=\"d-flex timeline-header\">
                  <div class=\"d-flex creator\">
                     ";
        // line 47
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/timeline_item_header_badges.html.twig", ["users_id" =>         // line 48
($context["users_id"] ?? null), "date_creation" => (($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source,         // line 49
($context["item"] ?? null), "fields", [], "any", false, false, false, 49)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["date_creation"] ?? null) : null), "date_mod" => (($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source,         // line 50
($context["item"] ?? null), "fields", [], "any", false, false, false, 50)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["date_mod"] ?? null) : null), "users_id_editor" => (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source,         // line 51
($context["item"] ?? null), "fields", [], "any", false, false, false, 51)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["users_id_lastupdater"] ?? null) : null), "anonym_user" =>         // line 52
($context["anonym_user"] ?? null)], false);
        // line 53
        yield "
                  </div>

                  ";
        // line 56
        if (($context["canupdate"] ?? null)) {
            // line 57
            yield "                    <div class=\"dropdown ms-auto timeline-item-buttons\">
                        <button class=\"btn btn-sm btn-ghost-secondary timeline-more-actions\" type=\"button\" id=\"more-actions-";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_rand"] ?? null), "html", null, true);
            yield "\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fas ti ti-dots-vertical\"></i>
                        </button>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"more-actions-";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_rand"] ?? null), "html", null, true);
            yield "\">
                            <li><a class=\"dropdown-item edit-timeline-item\" href=\"#\">
                            <i class=\"fa-fw ti ti-edit\"></i>
                            <span>";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit"), "html", null, true);
            yield "</span>
                            </a></li>
                        </ul>
                    </div>
                  ";
        }
        // line 69
        yield "
                  <button class=\"btn btn-sm btn-ghost-secondary close-edit-content d-none ms-auto\">
                     <i class=\"ti ti-x\"></i>
                  </button>
               </div>

               <div class=\"read-only-content\">
                  ";
        // line 76
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", ["name"], "method", false, false, false, 76)) {
            // line 77
            yield "                     <div class=\"card-title card-header mx-n3 mt-n3\">
                        ";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_6 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 78)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["name"] ?? null) : null)), "html", null, true);
            yield "
                     </div>
                  ";
        }
        // line 81
        yield "                  ";
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", ["content"], "method", false, false, false, 81)) {
            // line 82
            yield "                     <div class=\"rich_text_container\">
                        ";
            // line 83
            yield $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getEnhancedHtml((($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 83)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["content"] ?? null) : null), ["user_mentions" => true, "images_gallery" => true]);
            // line 86
            yield "
                     </div>
                  ";
        }
        // line 89
        yield "               </div>
               <div class=\"edit-content collapse\">
                  <div class=\"ajax-content\"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/itilobject/timeline/main_description.html.twig";
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
        return array (  137 => 89,  132 => 86,  130 => 83,  127 => 82,  124 => 81,  118 => 78,  115 => 77,  113 => 76,  104 => 69,  96 => 64,  90 => 61,  84 => 58,  81 => 57,  79 => 56,  74 => 53,  72 => 52,  71 => 51,  70 => 50,  69 => 49,  68 => 48,  67 => 47,  57 => 40,  49 => 37,  45 => 35,  43 => 34,  41 => 33,  38 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/main_description.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/main_description.html.twig");
    }
}
