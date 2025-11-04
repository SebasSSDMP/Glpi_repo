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

/* components/itilobject/timeline/form_document_item.html.twig */
class __TwigTemplate_edea5c8f44711c23f6c3e74aefcaed3c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'timeline_card' => [$this, 'block_timeline_card'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 33
        return "components/itilobject/timeline/form_timeline_item.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/timeline/form_document_item.html.twig", 34)->unwrap();
        // line 33
        $this->parent = $this->loadTemplate("components/itilobject/timeline/form_timeline_item.html.twig", "components/itilobject/timeline/form_document_item.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    public function block_timeline_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        yield "   ";
        if ((($context["form_mode"] ?? null) == "view")) {
            // line 38
            yield "      <div class=\"row align-items-center m-n2\">
         ";
            // line 39
            $context["name"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["entry_i"] ?? null), "name", [], "array", true, true, false, 39) &&  !(null === (($__internal_compile_0 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["name"] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["name"] ?? null) : null)) : ((($__internal_compile_2 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["filename"] ?? null) : null)));
            // line 40
            yield "         ";
            $context["filename"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["entry_i"] ?? null), "filename", [], "array", true, true, false, 40) &&  !(null === (($__internal_compile_3 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["filename"] ?? null) : null)))) ? ((($__internal_compile_4 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["filename"] ?? null) : null)) : ((($__internal_compile_5 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["name"] ?? null) : null)));
            // line 41
            yield "         ";
            $context["fk"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 41);
            // line 42
            yield "
         ";
            // line 43
            if ((($__internal_compile_6 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["filename"] ?? null) : null)) {
                // line 44
                yield "            ";
                $context["docpath"] = $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(((((("front/document.send.php?docid=" . (($__internal_compile_7 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["id"] ?? null) : null)) . "&") . ($context["fk"] ?? null)) . "=") . (($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 44)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["id"] ?? null) : null)));
                // line 45
                yield "            <div class=\"col text-truncate\">
               <a href=\"";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["docpath"] ?? null), "html", null, true);
                yield "\" target=\"_blank\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\">
                  <img src=\"";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DocumentExtension']->getDocumentIcon(($context["filename"] ?? null)), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("File extension"), "html", null, true);
                yield "\" />
                  ";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["filename"] ?? null), "html", null, true);
                yield "
               </a>
            </div>
         ";
            }
            // line 52
            yield "
         ";
            // line 53
            if ((($__internal_compile_9 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["link"] ?? null) : null)) {
                // line 54
                yield "            <div class=\"col-auto\">
               <a href=\"";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_10 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["link"] ?? null) : null), "html", null, true);
                yield "\" target=\"_blank\">
                  <i class=\"ti ti-external-link\"></i>
                  ";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_11 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["name"] ?? null) : null), "html", null, true);
                yield "
               </a>
            </div>
         ";
            }
            // line 61
            yield "
         ";
            // line 62
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["entry_i"] ?? null), "filepath", [], "array", true, true, false, 62) &&  !(null === (($__internal_compile_12 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["filepath"] ?? null) : null)))) {
                // line 63
                yield "            <div class=\"col-auto text-muted ms-2\">
               ";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DocumentExtension']->getDocumentSize((($__internal_compile_13 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["filepath"] ?? null) : null)), "html", null, true);
                yield "
            </div>
         ";
            }
            // line 67
            yield "
         <div class=\"col-auto\">
            <div class=\"list-group-item-actions\">
               ";
            // line 70
            if ((($__internal_compile_14 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["_can_edit"] ?? null) : null)) {
                // line 71
                yield "                  <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Document", (($__internal_compile_15 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["id"] ?? null) : null)), "html", null, true);
                yield "\"
                     class=\"btn btn-sm btn-ghost-secondary\" title=\"";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Edit"), "html", null, true);
                yield "\"
                     data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                     <i class=\"ti ti-edit\"></i>
                  </a>
               ";
            }
            // line 77
            yield "
               ";
            // line 78
            if ((($__internal_compile_16 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["_can_delete"] ?? null) : null)) {
                // line 79
                yield "                  <form class=\"d-inline\" method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 79), "html", null, true);
                yield "\">
                     <input type=\"hidden\" name=\"";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fk"] ?? null), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_17 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 80)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["id"] ?? null) : null), "html", null, true);
                yield "\">
                     <input type=\"hidden\" name=\"documents_id\" value=\"";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_18 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["id"] ?? null) : null), "html", null, true);
                yield "\">
                     <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
                yield "\" />
                     <button type=\"submit\" class=\"btn btn-sm btn-ghost-secondary\" name=\"delete_document\"
                             title=\"";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
                yield "\"
                             data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                        <i class=\"ti ti-trash\"></i>
                     </button>
                  </form>
               ";
            }
            // line 90
            yield "            </div>
         </div>
      </div>
    ";
        } else {
            // line 94
            yield "        <div class=\"document_item\">
            <form name=\"asset_form\" style=\"width: 100%;\" class=\"d-flex flex-column\" method=\"post\"
                action=\"";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Document"), "html", null, true);
            yield "\" enctype=\"multipart/form-data\" data-track-changes=\"true\" data-submit-once>
                <input type=\"hidden\" name=\"entities_id\" value=\"";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 97), "html", null, true);
            yield "\" />
                <input type=\"hidden\" name=\"is_recursive\" value=\"";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isRecursive", [], "method", false, false, false, 98), "html", null, true);
            yield "\" />
                <input type=\"hidden\" name=\"itemtype\" value=\"";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 99), "html", null, true);
            yield "\" />
                <input type=\"hidden\" name=\"items_id\" value=\"";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_19 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 100)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["id"] ?? null) : null), "html", null, true);
            yield "\" />
                <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\" />
                ";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("pre_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            yield "

                ";
            // line 104
            if (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central")) {
                // line 105
                yield "                    ";
                yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["DocumentCategory", "documentcategories_id", null, __("Heading"), ["label_class" => "col-xxl-3", "field_class" => "col-xxl-11", "full_width" => true, "is_horizontal" => false]], 105, $context, $this->getSourceContext());
                // line 116
                yield "
                ";
            }
            // line 118
            yield "
                ";
            // line 119
            $context["max_size"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 120
                yield "                    <div class=\"alert alert-info\">
                        ";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Document::getMaxUploadSize"), "html", null, true);
                yield "
                    </div>
                ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 124
            yield "
                ";
            // line 125
            yield CoreExtension::callMacro($macros["fields"], "macro_fileField", ["filename", null, __("File"), ["multiple" => true, "label_class" => "col-xxl-3", "field_class" => "col-xxl-11", "full_width" => true, "is_horizontal" => false, "add_field_html" =>             // line 135
($context["max_size"] ?? null)]], 125, $context, $this->getSourceContext());
            // line 137
            yield "

                ";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("post_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            yield "

                <div class=\"d-flex card-footer mx-n3 mb-n3\">
                    ";
            // line 142
            if (((($__internal_compile_20 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 142)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["id"] ?? null) : null) <= 0)) {
                // line 143
                yield "                        <div class=\"input-group\">
                            <button class=\"btn btn-primary\" type=\"submit\" name=\"add\">
                                <i class=\"ti ti-file-plus\"></i>
                                <span>";
                // line 146
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Add a new file"), "html", null, true);
                yield "</span>
                            </button>
                        </div>
                    ";
            }
            // line 150
            yield "                </div>
            </form>
        </div>
   ";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/itilobject/timeline/form_document_item.html.twig";
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
        return array (  279 => 150,  272 => 146,  267 => 143,  265 => 142,  259 => 139,  255 => 137,  253 => 135,  252 => 125,  249 => 124,  242 => 121,  239 => 120,  237 => 119,  234 => 118,  230 => 116,  227 => 105,  225 => 104,  220 => 102,  216 => 101,  212 => 100,  208 => 99,  204 => 98,  200 => 97,  196 => 96,  192 => 94,  186 => 90,  177 => 84,  172 => 82,  168 => 81,  162 => 80,  157 => 79,  155 => 78,  152 => 77,  144 => 72,  139 => 71,  137 => 70,  132 => 67,  126 => 64,  123 => 63,  121 => 62,  118 => 61,  111 => 57,  106 => 55,  103 => 54,  101 => 53,  98 => 52,  91 => 48,  85 => 47,  79 => 46,  76 => 45,  73 => 44,  71 => 43,  68 => 42,  65 => 41,  62 => 40,  60 => 39,  57 => 38,  54 => 37,  50 => 36,  45 => 33,  43 => 34,  36 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/form_document_item.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/form_document_item.html.twig");
    }
}
