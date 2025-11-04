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

/* central/widget_tab.html.twig */
class __TwigTemplate_239ebf766f1ec206b53e6ab9197946a2 extends Template
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
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 34
        yield "<table class=\"tab_cadre_central\">
   ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::DISPLAY_CENTRAL")), "html", null, true);
        yield "
</table>

<div id=\"home-dashboard";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" class=\"container-fluid\">
   ";
        // line 39
        $context["grid_items"] = [];
        // line 40
        yield "   ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["cards"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 41
            yield "      ";
            $context["card_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 42
                yield "         <div class=\"card\">
            <div class=\"card-body p-0\">
              <div class=\"lazy-widget\" data-itemtype=\"";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "itemtype", [], "any", false, false, false, 44), "html", null, true);
                yield "\" data-widget=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "widget", [], "any", false, false, false, 44), "html", null, true);
                yield "\"
                 data-params=\"";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(((CoreExtension::getAttribute($this->env, $this->source, $context["card"], "params", [], "any", true, true, false, 45)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "params", [], "any", false, false, false, 45), [])) : ([]))), "html", null, true);
                yield "\">
              </div>
            </div>
         </div>
      ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 50
            yield "
      ";
            // line 51
            $context["grid_items"] = Twig\Extension\CoreExtension::merge(($context["grid_items"] ?? null), [            // line 52
($context["card_html"] ?? null)]);
            // line 54
            yield "   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "
   ";
        // line 56
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/masonry_grid.html.twig", ["grid_items" =>         // line 57
($context["grid_items"] ?? null)], false);
        // line 58
        yield "

   <script>
   \$(function () {
      \$('#home-dashboard";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield " .lazy-widget').each(function() {
         const this_obj = \$(this);
         const params = {
            'itemtype': this_obj.data('itemtype'),
            'widget': this_obj.data('widget'),
            'params': this_obj.data('params')
         };
         this_obj.html('<i class=\"fas fa-3x fa-spinner fa-spin ms-auto\"></i>')
            .load('";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/central.php"), "html", null, true);
        yield "', params, function(response, status, xhr) {
               const parent = this_obj.closest('.grid-item').parent();

               if (status === 'error' || !response) {
                  window['msnry_' + parent.prop('id')].remove(this_obj.closest('.grid-item'));
               }

               window['msnry_' + parent.prop('id')].layout();
            });
      });
   });
   </script>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "central/widget_tab.html.twig";
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
        return array (  120 => 70,  109 => 62,  103 => 58,  101 => 57,  100 => 56,  97 => 55,  91 => 54,  89 => 52,  88 => 51,  85 => 50,  76 => 45,  70 => 44,  66 => 42,  63 => 41,  58 => 40,  56 => 39,  52 => 38,  46 => 35,  43 => 34,  41 => 33,  38 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "central/widget_tab.html.twig", "/var/www/html/glpi/templates/central/widget_tab.html.twig");
    }
}
