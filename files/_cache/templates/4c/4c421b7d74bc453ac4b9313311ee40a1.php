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

/* components/user/link_with_tooltip.html.twig */
class __TwigTemplate_2dda6740a96f28ce0f21e25343d9939e extends Template
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
        yield "
<span id=\"user_";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\">
    <i class=\"ti ti-user ms-1\"></i>
    ";
        // line 37
        yield $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("User", ($context["users_id"] ?? null), ["enable_anonymization" => ($context["enable_anonymization"] ?? null)]);
        yield "
</span>

";
        // line 40
        if ( !($context["enable_anonymization"] ?? null)) {
            // line 41
            yield "    ";
            $context["user"] = (($context["user_object"]) ?? ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem("User", ($context["users_id"] ?? null))));
            // line 42
            yield "    ";
            if (( !(null === ($context["user"] ?? null)) && CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "canView", [], "method", false, false, false, 42))) {
                // line 43
                yield "        ";
                $context["user_fields"] = CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "fields", [], "any", false, false, false, 43);
                // line 44
                yield "        ";
                $context["user_fields"] = Twig\Extension\CoreExtension::merge(($context["user_fields"] ?? null), ["user_name" => $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "getFriendlyName", [], "method", false, false, false, 44))]);
                // line 45
                yield "        ";
                $context["user_fields"] = Twig\Extension\CoreExtension::merge(($context["user_fields"] ?? null), ["email" => CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "getDefaultEmail", [], "method", false, false, false, 45)]);
                // line 46
                yield "        ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showToolTip", [Twig\Extension\CoreExtension::include($this->env, $context, "components/user/info_card.html.twig", ["user" =>                 // line 52
($context["user_fields"] ?? null), "user_object" =>                 // line 53
($context["user"] ?? null)], false), ["applyto" => ("user_" .                 // line 58
($context["rand"] ?? null))]]);
                // line 62
                yield "    ";
            }
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/user/link_with_tooltip.html.twig";
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
        return array (  80 => 62,  78 => 58,  77 => 53,  76 => 52,  74 => 46,  71 => 45,  68 => 44,  65 => 43,  62 => 42,  59 => 41,  57 => 40,  51 => 37,  46 => 35,  43 => 34,  41 => 33,  38 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/user/link_with_tooltip.html.twig", "/var/www/html/glpi/templates/components/user/link_with_tooltip.html.twig");
    }
}
