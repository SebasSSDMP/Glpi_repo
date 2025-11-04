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

/* layout/parts/saved_searches_list.html.twig */
class __TwigTemplate_aed76184466d0c4512f68672a8f9bbf3 extends Template
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["saved_searches"] ?? null)) == 0)) {
            // line 34
            yield "   <div class=\"alert alert-info\" role=\"alert\">
      ";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("You have not recorded any saved searches yet"), "html", null, true);
            yield "
   </div>
";
        }
        // line 38
        yield "
<div class='sortable-savedsearches'>
";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["saved_searches"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["search"]) {
            // line 41
            yield "   <div class=\"savedsearches-item grip-savedsearch list-group-item search-line d-flex align-items-center pe-1 ";
            yield (((($context["active"] ?? null) == (($__internal_compile_0 = $context["search"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null))) ? ("active") : (""));
            yield "\"
         data-id=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_1 = $context["search"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["id"] ?? null) : null), "html", null, true);
            yield "\">
      ";
            // line 43
            if ( !(($__internal_compile_2 = $context["search"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["_error"] ?? null) : null)) {
                // line 44
                yield "          <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeSearchPath("SavedSearch"), "html", null, true);
                yield "?action=load&amp;id=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_3 = $context["search"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["id"] ?? null) : null), "html", null, true);
                yield "\"
             class=\"d-block saved-searches-link text-truncate\">
             ";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_4 = $context["search"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["name"] ?? null) : null)), "html", null, true);
                yield "
          </a>
      ";
            } else {
                // line 49
                yield "          <span class=\"d-block text-truncate\">
              ";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_5 = $context["search"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["name"] ?? null) : null)), "html", null, true);
                yield "
          </span>
      ";
            }
            // line 53
            yield "      <div class=\"";
            yield ((((($__internal_compile_6 = $context["search"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["is_default"] ?? null) : null) > 0)) ? ("") : ("list-group-item-actions"));
            yield " ms-auto default-ctrl\">
          ";
            // line 54
            if ( !(($__internal_compile_7 = $context["search"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["_error"] ?? null) : null)) {
                // line 55
                yield "             <i class=\"";
                yield ((((($__internal_compile_8 = $context["search"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["is_default"] ?? null) : null) > 0)) ? ("fas") : ("far"));
                yield " fa-star fa-xs mark-default me-1\"
                title=\"";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((($__internal_compile_9 = $context["search"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["is_default"] ?? null) : null) > 0)) ? (__("Default search")) : (__("mark as default"))), "html", null, true);
                yield "\"
                data-bs-toggle=\"tooltip\" data-bs-placement=\"right\"
                role=\"button\"></i>
          ";
            }
            // line 60
            yield "      </div>
      <div class=\"d-flex flex-nowrap align-items-center\">
         ";
            // line 62
            if (((($__internal_compile_10 = $context["search"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["is_private"] ?? null) : null) == 1)) {
                // line 63
                yield "         <i class=\"ti ti-lock fa-xs text-muted me-1\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("private"), "html", null, true);
                yield "\"
            data-bs-toggle=\"tooltip\" data-bs-placement=\"right\"></i>
         ";
            }
            // line 66
            yield "         <span class=\"badge\">
            ";
            // line 67
            yield (($__internal_compile_11 = $context["search"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["count"] ?? null) : null);
            yield "
         </span>
      </div>
   </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "</div>

<script type=\"text/javascript\">
\$(function() {
   sortable('.sortable-savedsearches', {
      placeholder: '<div class=\"sortable-placeholder\">&nbsp;</div>',
   })
   \$('.sortable-savedsearches').on('sortupdate', function(e) {
      var _ids = \$('.savedsearches-item').map(function(idx, ele) {
         return \$(ele).data('id');
      }).get();

      \$.post(CFG_GLPI['root_doc']+'/ajax/savedsearch.php', {
         'action': 'reorder',
         'ids': _ids,
      });

      displayAjaxMessageAfterRedirect();
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
        return "layout/parts/saved_searches_list.html.twig";
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
        return array (  140 => 72,  129 => 67,  126 => 66,  119 => 63,  117 => 62,  113 => 60,  106 => 56,  101 => 55,  99 => 54,  94 => 53,  88 => 50,  85 => 49,  79 => 46,  71 => 44,  69 => 43,  65 => 42,  60 => 41,  56 => 40,  52 => 38,  46 => 35,  43 => 34,  41 => 33,  38 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/parts/saved_searches_list.html.twig", "/var/www/html/glpi/templates/layout/parts/saved_searches_list.html.twig");
    }
}
