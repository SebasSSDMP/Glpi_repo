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

/* components/itilobject/timeline/timeline_item_header_badges.html.twig */
class __TwigTemplate_f5b65826f6179cc145a741592e617360 extends Template
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
        $context["timeline_display_date"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpitimeline_date_format");
        // line 34
        $context["date_creation_formatted"] = ($context["date_creation"] ?? null);
        // line 35
        $context["date_mod_formatted"] = ($context["date_mod"] ?? null);
        // line 36
        $context["date_creation_relative"] = ($context["date_creation"] ?? null);
        // line 37
        $context["date_mod_relative"] = ($context["date_mod"] ?? null);
        // line 38
        yield "
";
        // line 39
        if ( !(is_string($__internal_compile_0 = ($context["anchor"] ?? null)) && is_string($__internal_compile_1 = "Log_") && str_starts_with($__internal_compile_0, $__internal_compile_1))) {
            // line 40
            yield "    ";
            // line 41
            yield "    ";
            // line 42
            yield "    ";
            $context["date_creation_formatted"] = $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime(($context["date_creation"] ?? null));
            // line 43
            yield "    ";
            $context["date_mod_formatted"] = $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime(($context["date_mod"] ?? null));
            // line 44
            yield "    ";
            $context["date_creation_relative"] = $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getRelativeDatetime(($context["date_creation"] ?? null));
            // line 45
            yield "    ";
            $context["date_mod_relative"] = $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getRelativeDatetime(($context["date_mod"] ?? null));
        }
        // line 47
        yield "
<span class=\"badge user-select-auto text-wrap d-none d-md-block\">
   ";
        // line 49
        $context["date_span"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 50
            yield "      <span
         ";
            // line 51
            if ((($context["timeline_display_date"] ?? null) == Twig\Extension\CoreExtension::constant("Config::TIMELINE_RELATIVE_DATE"))) {
                // line 52
                yield "            title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["date_creation_formatted"] ?? null), "html", null, true);
                yield "\"
            data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\"
         ";
            }
            // line 55
            yield "      >
         <i class=\"far fa-clock me-1\"></i>
         <a href=\"#";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["anchor"] ?? null), "html", null, true);
            yield "\">
            ";
            // line 58
            if ((($context["timeline_display_date"] ?? null) == Twig\Extension\CoreExtension::constant("Config::TIMELINE_RELATIVE_DATE"))) {
                // line 59
                yield "               ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["date_creation_relative"] ?? null), "html", null, true);
                yield "
            ";
            } else {
                // line 61
                yield "               ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["date_creation_formatted"] ?? null), "html", null, true);
                yield "
            ";
            }
            // line 63
            yield "         </a>
      </span>
   ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 66
        yield "
   ";
        // line 67
        if ((($context["users_id"] ?? null) > 0)) {
            // line 68
            yield "      ";
            $context["creator_span"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 69
                yield "         ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/user/link_with_tooltip.html.twig", ["users_id" =>                 // line 70
($context["users_id"] ?? null), "user_object" =>                 // line 71
($context["user_object"] ?? null), "enable_anonymization" =>                 // line 72
($context["anonym_user"] ?? null)], false);
                // line 73
                yield "
      ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 75
            yield "
      ";
            // line 76
            yield Twig\Extension\CoreExtension::sprintf(__("Created: %1\$s by %2\$s"), ($context["date_span"] ?? null), ($context["creator_span"] ?? null));
            yield "
   ";
        } else {
            // line 78
            yield "      ";
            yield Twig\Extension\CoreExtension::sprintf(__("Created: %1\$s"), ($context["date_span"] ?? null));
            yield "
   ";
        }
        // line 80
        yield "</span>

";
        // line 82
        if (((($context["users_id_editor"] ?? null) > 0) && (($context["date_creation"] ?? null) != ($context["date_mod"] ?? null)))) {
            // line 83
            yield "   <span class=\"badge user-select-auto text-wrap ms-1 d-none d-md-block\">
      ";
            // line 84
            $context["date_span"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 85
                yield "         <span
            ";
                // line 86
                if ((($context["timeline_display_date"] ?? null) == Twig\Extension\CoreExtension::constant("Config::TIMELINE_RELATIVE_DATE"))) {
                    // line 87
                    yield "               title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["date_mod_formatted"] ?? null), "html", null, true);
                    yield "\"
               data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\"
            ";
                }
                // line 90
                yield "         >
            <i class=\"far fa-clock me-1\"></i>
            ";
                // line 92
                if ((($context["timeline_display_date"] ?? null) == Twig\Extension\CoreExtension::constant("Config::TIMELINE_RELATIVE_DATE"))) {
                    // line 93
                    yield "               ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["date_mod_relative"] ?? null), "html", null, true);
                    yield "
            ";
                } else {
                    // line 95
                    yield "               ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["date_mod_formatted"] ?? null), "html", null, true);
                    yield "
            ";
                }
                // line 97
                yield "         </span>
      ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 99
            yield "
      ";
            // line 100
            $context["is_current_editor"] = (($context["users_id_editor"] ?? null) == $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"));
            // line 101
            yield "      ";
            $context["anonym_editor"] = ((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "helpdesk") &&  !($context["is_current_editor"] ?? null)) && ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->getEntityConfig("anonymize_support_agents", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")) != Twig\Extension\CoreExtension::constant("Entity::ANONYMIZE_DISABLED")));
            // line 102
            yield "      ";
            $context["editor_span"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 103
                yield "         ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/user/link_with_tooltip.html.twig", ["users_id" =>                 // line 104
($context["users_id_editor"] ?? null), "user_object" => (((                // line 105
($context["users_id"] ?? null) == ($context["users_id_editor"] ?? null))) ? (($context["user_object"] ?? null)) : (null)), "enable_anonymization" =>                 // line 106
($context["anonym_editor"] ?? null)], false);
                // line 107
                yield "
      ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 109
            yield "
      ";
            // line 110
            yield Twig\Extension\CoreExtension::sprintf(__("Last update: %1\$s by %2\$s"), ($context["date_span"] ?? null), ($context["editor_span"] ?? null));
            yield "
   </span>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/itilobject/timeline/timeline_item_header_badges.html.twig";
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
        return array (  223 => 110,  220 => 109,  215 => 107,  213 => 106,  212 => 105,  211 => 104,  209 => 103,  206 => 102,  203 => 101,  201 => 100,  198 => 99,  193 => 97,  187 => 95,  181 => 93,  179 => 92,  175 => 90,  168 => 87,  166 => 86,  163 => 85,  161 => 84,  158 => 83,  156 => 82,  152 => 80,  146 => 78,  141 => 76,  138 => 75,  133 => 73,  131 => 72,  130 => 71,  129 => 70,  127 => 69,  124 => 68,  122 => 67,  119 => 66,  113 => 63,  107 => 61,  101 => 59,  99 => 58,  95 => 57,  91 => 55,  84 => 52,  82 => 51,  79 => 50,  77 => 49,  73 => 47,  69 => 45,  66 => 44,  63 => 43,  60 => 42,  58 => 41,  56 => 40,  54 => 39,  51 => 38,  49 => 37,  47 => 36,  45 => 35,  43 => 34,  41 => 33,  38 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/timeline_item_header_badges.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/timeline_item_header_badges.html.twig");
    }
}
