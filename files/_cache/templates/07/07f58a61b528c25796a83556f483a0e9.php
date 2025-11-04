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

/* components/itilobject/actors/main.html.twig */
class __TwigTemplate_744dce4f12914f7abf3466c26f23bac6 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/actors/main.html.twig", 33)->unwrap();
        // line 34
        yield "
";
        // line 35
        if ( !array_key_exists("display_actortypes", $context)) {
            // line 36
            yield "   ";
            $context["display_actortypes"] = ["requester", "observer", "assign"];
        }
        // line 38
        if ( !array_key_exists("display_labels", $context)) {
            // line 39
            yield "   ";
            $context["display_labels"] = true;
        }
        // line 41
        yield "
";
        // line 42
        $context["actor_options"] = Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["is_horizontal" => false, "add_field_class" => ((        // line 44
($context["is_expanded"] ?? null)) ? ("col-sm-4") : (""))]);
        // line 46
        $context["can_admin"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canAdminActors", [], "method", false, false, false, 46);
        // line 47
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 47)) {
            // line 48
            yield "   ";
            $context["can_admin"] = true;
        }
        // line 50
        yield "
";
        // line 52
        $context["allow_auto_submit"] = (($context["allow_auto_submit"]) ?? (true));
        // line 54
        yield "
";
        // line 56
        yield "
";
        // line 57
        if ((CoreExtension::inFilter("requester", ($context["display_actortypes"] ?? null)) && ( !CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", ["_users_id_requester"], "method", false, false, false, 57) ||  !CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", ["_groups_id_requester"], "method", false, false, false, 57)))) {
            // line 58
            yield "   ";
            $context["requester_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 59
                yield "      ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/actors/field.html.twig", ["item" =>                 // line 60
($context["item"] ?? null), "actortypeint" => Twig\Extension\CoreExtension::constant("CommonITILActor::REQUESTER"), "actortype" => "requester", "entities_id" =>                 // line 63
($context["entities_id"] ?? null), "itiltemplate" =>                 // line 64
($context["itiltemplate"] ?? null), "params" =>                 // line 65
($context["params"] ?? null), "canupdate" =>                 // line 66
($context["canupdate"] ?? null), "canassigntome" => ((                // line 67
$context["canassigntome"]) ?? (false)), "main_rand" =>                 // line 68
($context["main_rand"] ?? null), "allow_auto_submit" =>                 // line 69
($context["allow_auto_submit"] ?? null)], false);
                // line 70
                yield "
   ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 72
            yield "   ";
            if (($context["display_labels"] ?? null)) {
                // line 73
                yield "      ";
                yield CoreExtension::callMacro($macros["fields"], "macro_field", ["requester",                 // line 75
($context["requester_field"] ?? null), _n("Requester", "Requesters", 1), Twig\Extension\CoreExtension::merge(                // line 77
($context["actor_options"] ?? null), ["required" => (CoreExtension::getAttribute($this->env, $this->source,                 // line 78
($context["itiltemplate"] ?? null), "isMandatoryField", ["_users_id_requester"], "method", false, false, false, 78) || CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", ["_groups_id_requester"], "method", false, false, false, 78))])], 73, $context, $this->getSourceContext());
                // line 80
                yield "
   ";
            } else {
                // line 82
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["requester_field"] ?? null), "html", null, true);
                yield "
   ";
            }
        }
        // line 85
        yield "
";
        // line 86
        if ((CoreExtension::inFilter("observer", ($context["display_actortypes"] ?? null)) && ( !CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", ["_users_id_observer"], "method", false, false, false, 86) ||  !CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", ["_groups_id_observer"], "method", false, false, false, 86)))) {
            // line 87
            yield "   ";
            $context["observer_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 88
                yield "      ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/actors/field.html.twig", ["item" =>                 // line 89
($context["item"] ?? null), "actortypeint" => Twig\Extension\CoreExtension::constant("CommonITILActor::OBSERVER"), "actortype" => "observer", "entities_id" =>                 // line 92
($context["entities_id"] ?? null), "itiltemplate" =>                 // line 93
($context["itiltemplate"] ?? null), "params" =>                 // line 94
($context["params"] ?? null), "canupdate" =>                 // line 95
($context["canupdate"] ?? null), "canassigntome" => ((                // line 96
$context["canassigntome"]) ?? (false)), "main_rand" =>                 // line 97
($context["main_rand"] ?? null), "allow_auto_submit" =>                 // line 98
($context["allow_auto_submit"] ?? null)], false);
                // line 99
                yield "
   ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 101
            yield "   ";
            if (($context["display_labels"] ?? null)) {
                // line 102
                yield "      ";
                yield CoreExtension::callMacro($macros["fields"], "macro_field", ["observer",                 // line 104
($context["observer_field"] ?? null), __("Observer"), Twig\Extension\CoreExtension::merge(                // line 106
($context["actor_options"] ?? null), ["required" => (CoreExtension::getAttribute($this->env, $this->source,                 // line 107
($context["itiltemplate"] ?? null), "isMandatoryField", ["_users_id_observer"], "method", false, false, false, 107) || CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", ["_groups_id_observer"], "method", false, false, false, 107))])], 102, $context, $this->getSourceContext());
                // line 109
                yield "
   ";
            } else {
                // line 111
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["observer_field"] ?? null), "html", null, true);
                yield "
   ";
            }
        }
        // line 114
        yield "
";
        // line 115
        if ((CoreExtension::inFilter("assign", ($context["display_actortypes"] ?? null)) && (( !CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", ["_users_id_assign"], "method", false, false, false, 115) ||  !CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", ["_groups_id_assign"], "method", false, false, false, 115)) ||  !CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", ["_supplier_id_assign"], "method", false, false, false, 115)))) {
            // line 116
            yield "   ";
            $context["assign_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 117
                yield "      ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/actors/field.html.twig", ["item" =>                 // line 118
($context["item"] ?? null), "actortypeint" => Twig\Extension\CoreExtension::constant("CommonITILActor::ASSIGN"), "actortype" => "assign", "users_right" => "own_ticket", "entities_id" =>                 // line 122
($context["entities_id"] ?? null), "itiltemplate" =>                 // line 123
($context["itiltemplate"] ?? null), "params" =>                 // line 124
($context["params"] ?? null), "canupdate" =>                 // line 125
($context["canassign"] ?? null), "canassigntome" => ((                // line 126
$context["canassigntome"]) ?? (false)), "main_rand" =>                 // line 127
($context["main_rand"] ?? null), "allow_auto_submit" =>                 // line 128
($context["allow_auto_submit"] ?? null)], false);
                // line 129
                yield "
   ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 131
            yield "   ";
            if (($context["display_labels"] ?? null)) {
                // line 132
                yield "      ";
                yield CoreExtension::callMacro($macros["fields"], "macro_field", ["assign",                 // line 134
($context["assign_field"] ?? null), __("Assigned to"), Twig\Extension\CoreExtension::merge(                // line 136
($context["actor_options"] ?? null), ["required" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 137
($context["itiltemplate"] ?? null), "isMandatoryField", ["_users_id_assign"], "method", false, false, false, 137) || CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", ["_groups_id_assign"], "method", false, false, false, 137)) || CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", ["_supplier_id_assign"], "method", false, false, false, 137))])], 132, $context, $this->getSourceContext());
                // line 139
                yield "
   ";
            } else {
                // line 141
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["assign_field"] ?? null), "html", null, true);
                yield "
   ";
            }
        }
        // line 144
        yield "
<input type=\"hidden\" name=\"_actors\" id=\"_actors\" />

";
        // line 148
        yield "<div class=\"modal fade\" id=\"editActorNotifySettings\" tabindex=\"-1\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
         <h5 class=\"modal-title\">
            <i class=\"fas fa-envelope\"></i>
            &nbsp;";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit notification settings"), "html", null, true);
        yield "
         </h5>
         <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close"), "html", null, true);
        yield "\"></button>
      </div>
      <div class=\"modal-body\">
         <div class=\"mb-3\">
            <label class=\"form-label\" for=\"actorname\">";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Actor"), "html", null, true);
        yield "</label>
            <input type=\"text\" class=\"form-control\" id=\"actorname\" name=\"_notifications_actorname\" />
            <input type=\"hidden\" name=\"_notifications_actortype\" value=\"\" />
            <input type=\"hidden\" name=\"_notifications_actorindex\" value=\"\" />
         </div>
         <div class=\"mb-3\">
            <label for=\"alternative_email\" class=\"form-label\">";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Email address"), "html", null, true);
        yield "</label>
            <div class=\"form-check form-switch\">
               <input class=\"form-check-input\" type=\"checkbox\" id=\"use_notification\" name=\"_notifications_use_notification\" />
               <label class=\"form-check-label\" for=\"use_notification\">";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Email followup"), "html", null, true);
        yield "</label>
            </div>
            <input type=\"email\" class=\"form-control\" id=\"alternative_email\" name=\"_notifications_alternative_email\" />
         </div>
      </div>
      <div class=\"modal-footer\">
         <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
            <i class=\"ti ti-x\"></i>
            <span>";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close"), "html", null, true);
        yield "<span>
         </button>
         <button type=\"button\" class=\"btn btn-primary\" id=\"saveActorNotifySettings\">
            <i class=\"far fa-save\"></i>
            <span>";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save"), "html", null, true);
        yield "</span>
         </button>
      </div>
    </div>
  </div>
</div>

";
        // line 188
        $context["actortypes"] = ["requester" => Twig\Extension\CoreExtension::constant("CommonITILActor::REQUESTER"), "observer" => Twig\Extension\CoreExtension::constant("CommonITILActor::OBSERVER"), "assign" => Twig\Extension\CoreExtension::constant("CommonITILActor::ASSIGN")];
        // line 193
        yield "
<script type=\"text/javascript\">
   /* global bootstrap */
   var editActorNotifySettings_modal = null;
   \$(function () {
      editActorNotifySettings_modal = new bootstrap.Modal(document.getElementById('editActorNotifySettings'), {});
   });

   var actors = {
      ";
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["actortypes"] ?? null));
        foreach ($context['_seq'] as $context["actortype"] => $context["actortypeint"]) {
            // line 203
            yield "         ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["actortype"], "html", null, true);
            yield ": [
            ";
            // line 204
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getActorsForType", [$context["actortypeint"], ($context["params"] ?? null)], "method", false, false, false, 204));
            foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
                // line 205
                yield "            {
               itemtype: \"";
                // line 206
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_0 = $context["actor"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["itemtype"] ?? null) : null), "html", null, true);
                yield "\",
               items_id: \"";
                // line 207
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_1 = $context["actor"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["items_id"] ?? null) : null), "html", null, true);
                yield "\",
               use_notification: ";
                // line 208
                yield (((($__internal_compile_2 = $context["actor"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["use_notification"] ?? null) : null)) ? ("1") : ("0"));
                yield ",
               alternative_email: \"";
                // line 209
                (((CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "alternative_email", [], "array", true, true, false, 209) &&  !(null === (($__internal_compile_3 = $context["actor"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["alternative_email"] ?? null) : null)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_4 = $context["actor"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["alternative_email"] ?? null) : null), "html", null, true)) : (yield ""));
                yield "\",
               default_email: \"";
                // line 210
                (((CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "default_email", [], "array", true, true, false, 210) &&  !(null === (($__internal_compile_5 = $context["actor"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["default_email"] ?? null) : null)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_6 = $context["actor"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["default_email"] ?? null) : null), "html", null, true)) : (yield ""));
                yield "\",
            },
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 213
            yield "         ],
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['actortype'], $context['actortypeint'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        yield "   };

   // edit email preference when .edit-notify-user button is activated
   function openNotifyModal(event) {
      event.stopPropagation();

      var element = \$(event.target).closest('.actor_entry');
      var itemtype  = element.data('itemtype');
      var items_id  = element.data('items-id');
      var actortype = element.data('actortype');
      var text      = element.find('.actor_text').text().trim();

      actorIndex = actors[actortype].findIndex(element =>
         element.itemtype == itemtype &&
         (items_id === 0 ? element.alternative_email == text : element.items_id == items_id)
      );
      var actor = actors[actortype][actorIndex];

      var modal = \$('#editActorNotifySettings');
      modal.find(\"input[name=_notifications_actortype]\").val(actortype);
      modal.find(\"input[name=_notifications_actorindex]\").val(actorIndex);
      modal.find(\"input[name=_notifications_actorname]\").removeAttr('readonly').val(text).attr('readonly', 'true');
      modal.find(\"input[name=_notifications_use_notification]\").prop('checked', parseInt(actor.use_notification));
      modal.find(\"input[name=_notifications_alternative_email]\").attr('placeholder', actor.default_email);
      modal.find(\"input[name=_notifications_alternative_email]\").val(actor.alternative_email);

      editActorNotifySettings_modal.show();
   }

   // save edited actor when clicking on save button
   \$(document).on('click', '#saveActorNotifySettings', function(event) {
      saveNotificationSettings();
   });

   // prevent submit on enter key in modal (but save notification settings)
   \$(document).on('keyup keypress', '#editActorNotifySettings input', function(event) {
      var keyCode = event.keyCode || event.which;
      if (keyCode === 13) {
         event.preventDefault();
         saveNotificationSettings();
         return false;
      }
   });

   // save settings from modal (get modal data, and serialize them into input hidden)
   function saveNotificationSettings() {
      var modal = \$('#editActorNotifySettings');
      var actortype  = modal.find(\"input[name=_notifications_actortype]\").val();
      var actorIndex = modal.find(\"input[name=_notifications_actorindex]\").val();
      var use_notif  = (modal.find(\"input[name=_notifications_use_notification]\").is(\":checked\") ? 1 : 0);
      var alt_email  = modal.find(\"input[name=_notifications_alternative_email]\").val();

      var actor = actors[actortype][actorIndex];
      actor.use_notification = use_notif;
      actor.alternative_email = alt_email;

      // update notif setting icon for actor
      var fa_class = \"far\";
      if (use_notif) {
         fa_class = \"fas\";
      }

      var actor_entry = \$('.actor_entry[data-itemtype='+actor.itemtype+'][data-items-id='+actor.items_id+'][data-actortype='+actortype+']')
         .filter(function() {
            if(actor.items_id == 0 && actor.itemtype == \"User\") {
               return \$(this).text().trim() === actor.alternative_email;
            }
            return \$(this).text()
         });

      // toggle notify icon
      actor_entry.find('.notify-icon')
         .removeClass('fas far')
         .addClass(fa_class);

      // toggle text for direct email
      if (actor.itemtype == \"User\" && parseInt(actor.items_id) == 0) {
         actor_entry.find('.actor_text').html(alt_email);
      }


      editActorNotifySettings_modal.hide();
      saveActorsToDom();
   }

   // save actors object to dom
   function saveActorsToDom() {
      \$('#_actors').val(JSON.stringify(actors));
   }
   saveActorsToDom();
</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/itilobject/actors/main.html.twig";
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
        return array (  341 => 215,  334 => 213,  325 => 210,  321 => 209,  317 => 208,  313 => 207,  309 => 206,  306 => 205,  302 => 204,  297 => 203,  293 => 202,  282 => 193,  280 => 188,  270 => 181,  263 => 177,  252 => 169,  246 => 166,  237 => 160,  230 => 156,  225 => 154,  217 => 148,  212 => 144,  205 => 141,  201 => 139,  199 => 137,  198 => 136,  197 => 134,  195 => 132,  192 => 131,  187 => 129,  185 => 128,  184 => 127,  183 => 126,  182 => 125,  181 => 124,  180 => 123,  179 => 122,  178 => 118,  176 => 117,  173 => 116,  171 => 115,  168 => 114,  161 => 111,  157 => 109,  155 => 107,  154 => 106,  153 => 104,  151 => 102,  148 => 101,  143 => 99,  141 => 98,  140 => 97,  139 => 96,  138 => 95,  137 => 94,  136 => 93,  135 => 92,  134 => 89,  132 => 88,  129 => 87,  127 => 86,  124 => 85,  117 => 82,  113 => 80,  111 => 78,  110 => 77,  109 => 75,  107 => 73,  104 => 72,  99 => 70,  97 => 69,  96 => 68,  95 => 67,  94 => 66,  93 => 65,  92 => 64,  91 => 63,  90 => 60,  88 => 59,  85 => 58,  83 => 57,  80 => 56,  77 => 54,  75 => 52,  72 => 50,  68 => 48,  66 => 47,  64 => 46,  62 => 44,  61 => 42,  58 => 41,  54 => 39,  52 => 38,  48 => 36,  46 => 35,  43 => 34,  41 => 33,  38 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/actors/main.html.twig", "/var/www/html/glpi/templates/components/itilobject/actors/main.html.twig");
    }
}
