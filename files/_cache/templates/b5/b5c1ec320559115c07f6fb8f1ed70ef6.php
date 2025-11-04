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

/* components/itilobject/timeline/new_form.html.twig */
class __TwigTemplate_040cc14fa9d99fea6f76ff690d2558b6 extends Template
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
        $context["users_id"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID");
        // line 34
        yield "
<div class=\"itil-timeline\">
   <div class=\"timeline-item ITILContent\">
      <div class=\"row\">
         <div class=\"col-auto d-flex flex-column picture-block\">
            ";
        // line 39
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/user/picture.html.twig", ["users_id" => ($context["users_id"] ?? null)], false);
        yield "
         </div>
         <div class=\"col-12 col-sm content-block\">
            <div class=\"d-flex\">
               <div class=\"d-none d-md-block\">
                  <strong>";
        // line 44
        yield $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("User", ($context["users_id"] ?? null));
        yield "</strong>
               </div>
            </div>
            <span class=\"mt-2 timeline-content left card\">
               <div class=\"card-body\">
                  ";
        // line 49
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 49)) {
            // line 50
            yield "                     <div class=\"alert alert-info\" role=\"alert\">
                        ";
            // line 51
            $context["entitybadge"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 52
                yield "                           <span class=\"ms-1\">
                              ";
                // line 53
                yield $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Entity::badgeCompletenameById", [(($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 53)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["entities_id"] ?? null) : null)]);
                yield "
                           </span>
                        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 56
            yield "
                        ";
            // line 57
            yield Twig\Extension\CoreExtension::sprintf(__("%1\$s will be added in entity %2\$s"), CoreExtension::getAttribute($this->env, $this->source,             // line 58
($context["item"] ?? null), "getTypeName", [1], "method", false, false, false, 58),             // line 59
($context["entitybadge"] ?? null));
            // line 60
            yield "
                     </div>
                  ";
        }
        // line 63
        yield "
                  ";
        // line 64
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/simple_form.html.twig", ["no_form" => true]);
        // line 66
        yield "
               </div>
            </span>
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
        return "components/itilobject/timeline/new_form.html.twig";
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
        return array (  100 => 66,  98 => 64,  95 => 63,  90 => 60,  88 => 59,  87 => 58,  86 => 57,  83 => 56,  76 => 53,  73 => 52,  71 => 51,  68 => 50,  66 => 49,  58 => 44,  50 => 39,  43 => 34,  41 => 33,  38 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/new_form.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/new_form.html.twig");
    }
}
