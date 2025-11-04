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

/* pages/setup/dropdowns_list.html.twig */
class __TwigTemplate_5e3c4f452171b693c10865c25dbc4120 extends Template
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
        $context["grid_items"] = [];
        // line 34
        yield "
";
        // line 35
        $context["nb_opt"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["optgroup"] ?? null));
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["optgroup"] ?? null));
        foreach ($context['_seq'] as $context["label"] => $context["dropdown"]) {
            // line 37
            yield "   ";
            $context["card_id"] = ("dropdowns_list_" . Twig\Extension\CoreExtension::random($this->env->getCharset()));
            // line 38
            yield "   ";
            $context["card_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 39
                yield "      <div class=\"card\">
         <div class=\"accordion accordion-flush\">
            <div class=\"accordion-item\">
               <h2 class=\"accordion-header\">
                  <button class=\"accordion-button ";
                // line 43
                yield (((($context["nb_opt"] ?? null) > 1)) ? ("collapsed") : (""));
                yield "\" type=\"button\"
                     data-bs-toggle=\"collapse\" data-bs-target=\"#";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["card_id"] ?? null), "html", null, true);
                yield "\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                     ";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "
                  </button>
               </h2>
               <div id=\"";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["card_id"] ?? null), "html", null, true);
                yield "\" class=\"accordion-collapse ";
                yield (((($context["nb_opt"] ?? null) > 1)) ? ("collapse") : (""));
                yield "\" style=\"transition: none\">
                  <div class=\"list-group list-group-flush list-group-hoverable\">
                     ";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["dropdown"]);
                foreach ($context['_seq'] as $context["itemtype"] => $context["dropdown_label"]) {
                    // line 51
                    yield "                        ";
                    $context["is_entity_assign"] = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeClass($context["itemtype"]), "isEntityAssign", [], "method", false, false, false, 51);
                    // line 52
                    yield "                        <a class=\"list-group-item list-group-item-action ";
                    yield ((($context["is_entity_assign"] ?? null)) ? ("") : ("dropdown-no-entity"));
                    yield "\"
                           href=\"";
                    // line 53
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeSearchPath($context["itemtype"]), "html", null, true);
                    yield "\">
                           <div class=\"row\">
                              <div class=\"col-auto\">
                                 <i class=\"fa-fw ";
                    // line 56
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon($context["itemtype"]), "html", null, true);
                    yield "\"></i>
                              </div>
                              <div class=\"col text-truncate\">
                                 ";
                    // line 59
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["dropdown_label"], "html", null, true);
                    yield "
                              </div>
                              <div class=\"col-1 text-muted\">
                                 ";
                    // line 62
                    if (($context["is_entity_assign"] ?? null)) {
                        // line 63
                        yield "                                    <i class=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("Entity"), "html", null, true);
                        yield " fa-sm\"
                                       data-bs-toggle=\"tooltip\"
                                       title=\"";
                        // line 65
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Dropdown with entity management"), "html", null, true);
                        yield "\"></i>
                                 ";
                    }
                    // line 67
                    yield "                              </div>
                           </div>
                        </a>
                     ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['itemtype'], $context['dropdown_label'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                yield "                  </div>
               </div>
            </div>
         </div>
      </div>
   ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 77
            yield "
   ";
            // line 78
            $context["grid_items"] = Twig\Extension\CoreExtension::merge(($context["grid_items"] ?? null), [            // line 79
($context["card_html"] ?? null)]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['dropdown'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        yield "

<div class=\"container-fluid text-start mb-4 dropdowns-list\">
   <div class=\"input-icon mb-3\">
      <input class=\"form-control\" placeholder=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Filter dropdowns"), "html", null, true);
        yield "\" id=\"filter-dropdown\" />
      <span class=\"input-icon-addon\">
         <i class=\"fas fa-search\"></i>
      </span>
   </div>

   ";
        // line 92
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/masonry_grid.html.twig", ["grid_items" =>         // line 93
($context["grid_items"] ?? null), "grid_item_class" => "col-lg-6 col-xl-4 col-xxl-3"], false);
        // line 95
        yield "
</div>

<script>
\$(function () {
   var timerid;
   \$('#filter-dropdown').on('input',function() {
      var input_value = \$(this).val();

      clearTimeout(timerid);

      // reset state
      \$('.dropdowns-list .collapse').removeClass('show');
      \$('.dropdowns-list .masonry_grid').trigger(\"layout:refresh\");
      \$('.dropdowns-list .list-group-item').show();
      \$('.dropdowns-list .accordion-collapse').removeClass('show')
      \$('.dropdowns-list .accordion-button').addClass('collapsed')

      if (input_value.length > 0) {
         timerid = setTimeout(function() {
            \$('.dropdowns-list .list-group-item:not(:icontains('+input_value+'))').hide();
            \$('.dropdowns-list .list-group-item:icontains('+input_value+')')
               .closest('.accordion-collapse').addClass('show')
               .siblings('.accordion-header')
                  .children('.accordion-button').removeClass('collapsed');

            \$('.dropdowns-list .masonry_grid').trigger(\"layout:refresh\");

         }, 500);
      }
   })

   \$('.dropdowns-list .collapse').on('shown.bs.collapse hidden.bs.collapse', function() {
      \$('.dropdowns-list .masonry_grid').trigger(\"layout:refresh\");
   })
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
        return "pages/setup/dropdowns_list.html.twig";
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
        return array (  174 => 95,  172 => 93,  171 => 92,  162 => 86,  156 => 82,  150 => 79,  149 => 78,  146 => 77,  137 => 71,  128 => 67,  123 => 65,  117 => 63,  115 => 62,  109 => 59,  103 => 56,  97 => 53,  92 => 52,  89 => 51,  85 => 50,  78 => 48,  72 => 45,  68 => 44,  64 => 43,  58 => 39,  55 => 38,  52 => 37,  48 => 36,  46 => 35,  43 => 34,  41 => 33,  38 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/setup/dropdowns_list.html.twig", "/var/www/html/glpi/templates/pages/setup/dropdowns_list.html.twig");
    }
}
