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

/* components/itilobject/answer.html.twig */
class __TwigTemplate_03dfedacaf97583506cc60f3f7dd0030 extends Template
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
<div id=\"new-itilobject-form\" class=\"ms-auto ps-3\">
   ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["timeline_itemtypes"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["timeline_itemtype"]) {
            // line 35
            yield "      ";
            $context["show_kb_sol"] = ((($context["load_kb_sol"] ?? null) > 0) && (CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "type", [], "any", false, false, false, 35) == "ITILSolution"));
            // line 36
            yield "      <div class=\"timeline-item mb-3  ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "type", [], "any", false, false, false, 36), "html", null, true);
            yield " collapse ";
            yield ((($context["show_kb_sol"] ?? null)) ? ("show") : (""));
            yield "\"
        id=\"new-";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "class", [], "any", false, false, false, 37), "html", null, true);
            yield "-block\" aria-expanded=\"false\" data-bs-parent=\"#new-itilobject-form\">
         <div class=\"row\">
            <div class=\"col-auto order-last d-none d-md-block\">
               ";
            // line 40
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/user/picture.html.twig", ["users_id" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID")], false);
            yield "
            </div>
            <div class=\"col\">
               <div class=\"row timeline-content t-right card mt-4\">
                  <div class=\"card-body\">
                     <div class=\"clearfix\">
                        <button class=\"btn btn-sm btn-ghost-secondary float-end mb-1 close-itil-answer\"
                              data-bs-toggle=\"collapse\" data-bs-target=\"#new-";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "class", [], "any", false, false, false, 47), "html", null, true);
            yield "-block\">
                           <i class=\"fa-lg ti ti-x\"></i>
                        </button>
                     </div>
                     <div>
                        ";
            // line 52
            if (CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "template", [], "any", true, true, false, 52)) {
                // line 53
                yield "                           ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "template", [], "any", false, false, false, 53), ["item" =>                 // line 54
($context["item"] ?? null), "subitem" => CoreExtension::getAttribute($this->env, $this->source,                 // line 55
$context["timeline_itemtype"], "item", [], "any", false, false, false, 55), "kb_id_toload" =>                 // line 56
($context["load_kb_sol"] ?? null)]);
                // line 57
                yield "
                        ";
            } else {
                // line 59
                yield "                           ";
                $context["sf_options"] = ["parent" => ($context["item"] ?? null)];
                // line 60
                yield "                           ";
                if (($context["show_kb_sol"] ?? null)) {
                    // line 61
                    yield "                              ";
                    $context["sf_options"] = Twig\Extension\CoreExtension::merge(($context["sf_options"] ?? null), ["kb_id_toload" =>                     // line 62
($context["load_kb_sol"] ?? null)]);
                    // line 64
                    yield "                           ";
                }
                // line 65
                yield "                           ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "item", [], "any", false, false, false, 65), "showForm", [ -1, ($context["sf_options"] ?? null)], "method", false, false, false, 65), "html", null, true);
                yield "
                        ";
            }
            // line 67
            yield "                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timeline_itemtype'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        yield "</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/itilobject/answer.html.twig";
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
        return array (  144 => 74,  124 => 67,  118 => 65,  115 => 64,  113 => 62,  111 => 61,  108 => 60,  105 => 59,  101 => 57,  99 => 56,  98 => 55,  97 => 54,  95 => 53,  93 => 52,  85 => 47,  75 => 40,  69 => 37,  62 => 36,  59 => 35,  42 => 34,  38 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/answer.html.twig", "/var/www/html/glpi/templates/components/itilobject/answer.html.twig");
    }
}
