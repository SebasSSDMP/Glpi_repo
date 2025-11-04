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

/* components/itilobject/timeline/todo-list-summary.html.twig */
class __TwigTemplate_6c53b43dde8274ef29f3433dabbd7256 extends Template
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
        $context["timeline_stats"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getTimelineStats", [], "method", false, false, false, 33);
        // line 34
        $context["total_duration"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["timeline_stats"] ?? null), "total_duration", [], "array", true, true, false, 34) &&  !(null === (($__internal_compile_0 = ($context["timeline_stats"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["total_duration"] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["timeline_stats"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["total_duration"] ?? null) : null)) : (0));
        // line 35
        $context["todo_percent"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["timeline_stats"] ?? null), "percent_done", [], "array", true, true, false, 35) &&  !(null === (($__internal_compile_2 = ($context["timeline_stats"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["percent_done"] ?? null) : null)))) ? ((($__internal_compile_3 = ($context["timeline_stats"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["percent_done"] ?? null) : null)) : (0));
        // line 36
        yield "
<div class=\"timeline-item timeline_stats pb-3\">
   <div class=\"mb-2 ms-1 text-muted\">
      ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Total duration: %s"), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDuration(($context["total_duration"] ?? null))), "html", null, true);
        yield "
   </div>
   <div class=\"d-flex\">
      <span class=\"task-progress-label mx-2\">
         ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["todo_percent"] ?? null), "html", null, true);
        yield "%
      </span>
      <div class=\"progress mt-1\" style=\"max-width: 260px\">
         <div class=\"progress-bar progress-bar-striped timeline-progress\" role=\"progressbar\" style=\"width: ";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["todo_percent"] ?? null), "html", null, true);
        yield "%;\"
              aria-valuenow=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["todo_percent"] ?? null), "html", null, true);
        yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
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
        return "components/itilobject/timeline/todo-list-summary.html.twig";
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
        return array (  69 => 47,  65 => 46,  59 => 43,  52 => 39,  47 => 36,  45 => 35,  43 => 34,  41 => 33,  38 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/todo-list-summary.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/todo-list-summary.html.twig");
    }
}
