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

/* components/itilobject/add_items.html.twig */
class __TwigTemplate_46d0e7e98319ec63c799e0a26f9dea44 extends Template
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
<div id=\"itemAddForm";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\">
   ";
        // line 34
        if (($context["can_edit"] ?? null)) {
            // line 35
            yield "      ";
            yield ($context["my_items_dropdown"] ?? null);
            yield "
      ";
            // line 36
            yield ($context["all_items_dropdown"] ?? null);
            yield "
      <a href=\"javascript:itemAction";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "('add');\" class=\"btn btn-sm btn-outline-secondary\">
         <i class=\"fas fa-plus\"></i>
         <span>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Add"), "html", null, true);
            yield "</span>
      </a>
   ";
        }
        // line 42
        yield "
   ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items_to_add"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item_to_add"]) {
            // line 44
            yield "      ";
            yield $context["item_to_add"];
            yield "
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item_to_add'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "
   ";
        // line 47
        if ((($context["count"] ?? null) == 0)) {
            // line 48
            yield "      <input type=\"hidden\" value=\"0\" name=\"items_id\">
   ";
        }
        // line 50
        yield "
   ";
        // line 51
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "id", [], "any", false, false, false, 51) > 0) && (($context["usedcount"] ?? null) != ($context["count"] ?? null)))) {
            // line 52
            yield "      <i>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(_n("%1\$s item not saved", "%1\$s items not saved", (($context["count"] ?? null) - ($context["usedcount"] ?? null))), (($context["count"] ?? null) - ($context["usedcount"] ?? null))), "html", null, true);
            yield "</i>
   ";
        }
        // line 54
        yield "   ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "id", [], "any", false, false, false, 54) > 0) && (($context["usedcount"] ?? null) > 5))) {
            // line 55
            yield "      <i><a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Ticket", CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "id", [], "any", false, false, false, 55)), "html", null, true);
            yield "&amp;forcetab=Item_Ticket\$1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((__("Display all items") . "(") . ($context["usedcount"] ?? null)) . ")"), "html", null, true);
            yield "</a></i>
   ";
        }
        // line 57
        yield "   <script>
      function refreshItemCounter";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "() {
         const item_form = \$(\"#itemAddForm";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\");
         let item_count = item_form.find('input[type=\"hidden\"][name^=\"items_id[\"]').length;
         item_form.closest('.accordion-item').find('.item-counter').text(item_count);
      }

      function itemAction";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "(action, itemtype, items_id) {
          if (itemtype === undefined && items_id === undefined) {
              const my_items_dropdown = \$('#dropdown_my_items";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "');
              if (my_items_dropdown.length > 0) {
                 const val = my_items_dropdown.val();
                 if (val && val.includes('_')) {
                    itemtype = val.split('_')[0];
                    items_id = val.split('_')[1];
                 }
              }
              if (itemtype === undefined && items_id === undefined) {
                  const dropdown_itemtype = \$('#dropdown_itemtype";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "');
                  const dropdown_items_id = \$('#dropdown_add_items_id";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "');
                  if (dropdown_itemtype.length > 0 && dropdown_items_id.length > 0) {
                      itemtype = dropdown_itemtype.val();
                      items_id = dropdown_items_id.val();
                  }
              }
          }
         if (!itemtype || !items_id) {
            glpi_toast_error(";
        // line 84
        yield json_encode(__("Please select an item to add"));
        yield ");
            return;
         }
         \$.ajax({
            method: 'POST',
            url: CFG_GLPI.root_doc + '/ajax/itemTicket.php',
            dataType: 'html',
            data: {
               'action': action,
               'rand': ";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield ",
               'params': ";
        // line 94
        yield json_encode(($context["opt"] ?? null));
        yield ",
               'my_items': \$('#dropdown_my_items";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').val(),
               'itemtype': itemtype,
               'items_id': items_id,
            },
            success: function(response) {
               \$(\"#itemAddForm";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\").replaceWith(response);
            }
         });
      }
      refreshItemCounter";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "();
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
        return "components/itilobject/add_items.html.twig";
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
        return array (  196 => 104,  189 => 100,  181 => 95,  177 => 94,  173 => 93,  161 => 84,  150 => 76,  146 => 75,  134 => 66,  129 => 64,  121 => 59,  117 => 58,  114 => 57,  106 => 55,  103 => 54,  97 => 52,  95 => 51,  92 => 50,  88 => 48,  86 => 47,  83 => 46,  74 => 44,  70 => 43,  67 => 42,  61 => 39,  56 => 37,  52 => 36,  47 => 35,  45 => 34,  41 => 33,  38 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/add_items.html.twig", "/var/www/html/glpi/templates/components/itilobject/add_items.html.twig");
    }
}
