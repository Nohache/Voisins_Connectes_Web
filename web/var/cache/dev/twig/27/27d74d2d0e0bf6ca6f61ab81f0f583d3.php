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
use Twig\TemplateWrapper;

/* new_forfait.html.twig */
class __TwigTemplate_0a234668778b01984d30e9da6d772d64 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "new_forfait.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "new_forfait.html.twig"));

        // line 1
        yield "<div class=\"home\">

  <!-- HERO -->
  <section class=\"dashboard-hero\">
    <div class=\"dashboard-hero-text\">
      <h1 class=\"hero-title\">";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["formTitle"]) || array_key_exists("formTitle", $context) ? $context["formTitle"] : (function () { throw new RuntimeError('Variable "formTitle" does not exist.', 6, $this->source); })()), "html", null, true);
        yield "</h1>
      <p class=\"hero-desc\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["formSubtitle"]) || array_key_exists("formSubtitle", $context) ? $context["formSubtitle"] : (function () { throw new RuntimeError('Variable "formSubtitle" does not exist.', 7, $this->source); })()), "html", null, true);
        yield "</p>
    </div>
  </section>

  ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", ["success"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            yield "    <div class=\"flash-success\" style=\"max-width:600px; margin: 0 auto 1rem; padding: 0.8rem 1.5rem; background: var(--vert); color: var(--vert-tres-fonce); border-radius: 1rem; font-weight: 500;\">✅ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", ["error"], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 15
            yield "    <div class=\"flash-error\" style=\"max-width:600px; margin: 0 auto 1rem; padding: 0.8rem 1.5rem; background: #fee2e2; color: #dc2626; border-radius: 1rem; font-weight: 500;\">❌ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "
  <form method=\"POST\" action=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["formAction"]) || array_key_exists("formAction", $context) ? $context["formAction"] : (function () { throw new RuntimeError('Variable "formAction" does not exist.', 18, $this->source); })()), "html", null, true);
        yield "\" id=\"forfaitForm\">
    <div class=\"forfaits-wrapper\">
      <table class=\"forfaits-table\">
        <thead>
          <tr>
            <th class=\"th-label\"></th>
            <th class=\"th-plan\" style=\"min-width: 220px;\">
              <input type=\"text\" name=\"nomForfait\" value=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["forfait"] ?? null), "nomForfait", [], "any", true, true, false, 25)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forfait"]) || array_key_exists("forfait", $context) ? $context["forfait"] : (function () { throw new RuntimeError('Variable "forfait" does not exist.', 25, $this->source); })()), "nomForfait", [], "any", false, false, false, 25), "")) : ("")), "html", null, true);
        yield "\" class=\"form-input\" style=\"margin: 0.5rem 0; text-align:center;\" placeholder=\"Nom du forfait\" required>
              <textarea name=\"description\" class=\"form-input\" style=\"margin: 0.5rem 0; width: 100%; height: 80px; resize: vertical;\" placeholder=\"Description du forfait\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["forfait"] ?? null), "description", [], "any", true, true, false, 26)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forfait"]) || array_key_exists("forfait", $context) ? $context["forfait"] : (function () { throw new RuntimeError('Variable "forfait" does not exist.', 26, $this->source); })()), "description", [], "any", false, false, false, 26), "")) : ("")), "html", null, true);
        yield "</textarea>
              <div style=\"display:flex; gap:0.5rem; align-items:center; justify-content:center; margin-top:0.3rem;\">
                <input type=\"number\" name=\"prix\" id=\"prix\" value=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["forfait"] ?? null), "prix", [], "any", true, true, false, 28)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forfait"]) || array_key_exists("forfait", $context) ? $context["forfait"] : (function () { throw new RuntimeError('Variable "forfait" does not exist.', 28, $this->source); })()), "prix", [], "any", false, false, false, 28), 0)) : (0)), "html", null, true);
        yield "\" step=\"0.01\" min=\"0\" class=\"form-input\" style=\"width:80px; text-align:center;\" required>
                <span style=\"color:var(--gris); font-size:0.85rem;\">€ /</span>
                <select name=\"duree\" id=\"duree\" class=\"form-input\" style=\"width:90px;\">
                  <option value=\"gratuit\" ";
        // line 31
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["forfait"] ?? null), "duree", [], "any", true, true, false, 31)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forfait"]) || array_key_exists("forfait", $context) ? $context["forfait"] : (function () { throw new RuntimeError('Variable "forfait" does not exist.', 31, $this->source); })()), "duree", [], "any", false, false, false, 31), 0)) : (0)) == 0)) {
            yield "selected";
        }
        yield ">gratuit</option>
                  <option value=\"mois\"    ";
        // line 32
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["forfait"] ?? null), "duree", [], "any", true, true, false, 32)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forfait"]) || array_key_exists("forfait", $context) ? $context["forfait"] : (function () { throw new RuntimeError('Variable "forfait" does not exist.', 32, $this->source); })()), "duree", [], "any", false, false, false, 32), 0)) : (0)) == 30)) {
            yield "selected";
        }
        yield ">mois</option>
                  <option value=\"an\"      ";
        // line 33
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["forfait"] ?? null), "duree", [], "any", true, true, false, 33)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forfait"]) || array_key_exists("forfait", $context) ? $context["forfait"] : (function () { throw new RuntimeError('Variable "forfait" does not exist.', 33, $this->source); })()), "duree", [], "any", false, false, false, 33), 0)) : (0)) == 365)) {
            yield "selected";
        }
        yield ">an</option>
                </select>
              </div>
            </th>
          </tr>
        </thead>

        <tbody>
          <tr class=\"category\"><td colspan=\"2\">🔧 Proposer des services</td></tr>
          <tr>
            <td>Paramétrage</td>
            <td>
              <label class=\"toggle-label\">
                <input type=\"checkbox\" name=\"fonc_parametrage\" class=\"toggle-checkbox\" value=\"1\" ";
        // line 46
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["forfait"]) || array_key_exists("forfait", $context) ? $context["forfait"] : (function () { throw new RuntimeError('Variable "forfait" does not exist.', 46, $this->source); })()), "fonc_parametrage", [], "any", false, false, false, 46) == "1")) {
            yield "checked";
        }
        yield ">
                <span class=\"toggle-switch\"></span>
              </label>
            </td>
          </tr>
          <tr>
            <td>Périmètre d'intervention</td>
            <td>
              <label class=\"toggle-label\">
                <input type=\"checkbox\" name=\"fonc_perimetreIntervention\" class=\"toggle-checkbox\" value=\"1\" ";
        // line 55
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["forfait"]) || array_key_exists("forfait", $context) ? $context["forfait"] : (function () { throw new RuntimeError('Variable "forfait" does not exist.', 55, $this->source); })()), "fonc_perimetreIntervention", [], "any", false, false, false, 55) == "1")) {
            yield "checked";
        }
        yield ">
                <span class=\"toggle-switch\"></span>
              </label>
            </td>
          </tr>
          <tr>
            <td>Notifications « Nouvelles demandes »</td>
            <td>
              <label class=\"toggle-label\">
                <input type=\"checkbox\" name=\"fonc_notifications\" class=\"toggle-checkbox\" value=\"1\" ";
        // line 64
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["forfait"]) || array_key_exists("forfait", $context) ? $context["forfait"] : (function () { throw new RuntimeError('Variable "forfait" does not exist.', 64, $this->source); })()), "fonc_notifications", [], "any", false, false, false, 64) == "1")) {
            yield "checked";
        }
        yield ">
                <span class=\"toggle-switch\"></span>
              </label>
            </td>
          </tr>

          <tr class=\"category\"><td colspan=\"2\">🙋 Répondre aux demandes</td></tr>
          <tr>
            <td>Location de matériel</td>
            <td>
              <label class=\"toggle-label\">
                <input type=\"checkbox\" name=\"fonc_locationMateriel\" class=\"toggle-checkbox\" value=\"1\" ";
        // line 75
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["forfait"]) || array_key_exists("forfait", $context) ? $context["forfait"] : (function () { throw new RuntimeError('Variable "forfait" does not exist.', 75, $this->source); })()), "fonc_locationMateriel", [], "any", false, false, false, 75) == "1")) {
            yield "checked";
        }
        yield ">
                <span class=\"toggle-switch\"></span>
              </label>
            </td>
          </tr>
          <tr>
            <td>Prestation de service</td>
            <td>
              <label class=\"toggle-label\">
                <input type=\"checkbox\" name=\"fonc_prestationService\" class=\"toggle-checkbox\" value=\"1\" ";
        // line 84
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["forfait"]) || array_key_exists("forfait", $context) ? $context["forfait"] : (function () { throw new RuntimeError('Variable "forfait" does not exist.', 84, $this->source); })()), "fonc_prestationService", [], "any", false, false, false, 84) == "1")) {
            yield "checked";
        }
        yield ">
                <span class=\"toggle-switch\"></span>
              </label>
            </td>
          </tr>

          <tr class=\"category\"><td colspan=\"2\">👤 Profil utilisateur</td></tr>
          <tr>
            <td>Numéro de téléphone sur le profil</td>
            <td>
              <label class=\"toggle-label\">
                <input type=\"checkbox\" name=\"fonc_numeroProfil\" class=\"toggle-checkbox\" value=\"1\" ";
        // line 95
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["forfait"]) || array_key_exists("forfait", $context) ? $context["forfait"] : (function () { throw new RuntimeError('Variable "forfait" does not exist.', 95, $this->source); })()), "fonc_numeroProfil", [], "any", false, false, false, 95) == "1")) {
            yield "checked";
        }
        yield ">
                <span class=\"toggle-switch\"></span>
              </label>
            </td>
          </tr>
          <tr>
            <td>Photos des réalisations sur le profil</td>
            <td>
              <label class=\"toggle-label\">
                <input type=\"checkbox\" name=\"fonc_photosProfil\" class=\"toggle-checkbox\" value=\"1\" ";
        // line 104
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["forfait"]) || array_key_exists("forfait", $context) ? $context["forfait"] : (function () { throw new RuntimeError('Variable "forfait" does not exist.', 104, $this->source); })()), "fonc_photosProfil", [], "any", false, false, false, 104) == "1")) {
            yield "checked";
        }
        yield ">
                <span class=\"toggle-switch\"></span>
              </label>
            </td>
          </tr>

          <tr class=\"category\"><td colspan=\"2\">🎧 Assistance</td></tr>
          <tr>
            <td>Accompagnement personnalisé et prioritaire</td>
            <td>
              <label class=\"toggle-label\">
                <input type=\"checkbox\" name=\"fonc_accompagnementPrioritaire\" class=\"toggle-checkbox\" value=\"1\" ";
        // line 115
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["forfait"]) || array_key_exists("forfait", $context) ? $context["forfait"] : (function () { throw new RuntimeError('Variable "forfait" does not exist.', 115, $this->source); })()), "fonc_accompagnementPrioritaire", [], "any", false, false, false, 115) == "1")) {
            yield "checked";
        }
        yield ">
                <span class=\"toggle-switch\"></span>
              </label>
            </td>
          </tr>

          <tr class=\"category\"><td colspan=\"2\"></td></tr>
          <tr>
            <td style=\"text-align:left;\">
              <a href=\"";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["cancelPath"]) || array_key_exists("cancelPath", $context) ? $context["cancelPath"] : (function () { throw new RuntimeError('Variable "cancelPath" does not exist.', 124, $this->source); })()), "html", null, true);
        yield "\" class=\"btn-table btn-annuler\">Retour</a>
            </td>
            <td style=\"text-align:center; padding: 1rem;\">
              <button type=\"submit\" class=\"btn-primary\">";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["submitLabel"]) || array_key_exists("submitLabel", $context) ? $context["submitLabel"] : (function () { throw new RuntimeError('Variable "submitLabel" does not exist.', 127, $this->source); })()), "html", null, true);
        yield "</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </form>

</div>

<script>
  const dureeSelect = document.getElementById('duree');
  const prixInput = document.getElementById('prix');

  if (dureeSelect && prixInput) {
    const togglePrix = () => {
      if (dureeSelect.value === 'gratuit') {
        prixInput.value = '0';
        prixInput.readOnly = true;
      } else {
        prixInput.readOnly = false;
      }
    };

    dureeSelect.addEventListener('change', togglePrix);
    togglePrix();
  }

  const form = document.getElementById('forfaitForm');
  if (form) {
    form.addEventListener('submit', function(e) {
      const nom = document.querySelector('input[name=\"nomForfait\"]').value.trim();
      if (nom === '') {
        e.preventDefault();
        alert('Veuillez saisir un nom de forfait');
        return false;
      }
      const prix = parseFloat(prixInput.value);
      if (isNaN(prix) || prix < 0) {
        e.preventDefault();
        alert('Veuillez saisir un prix valide');
        return false;
      }
      return true;
    });
  }
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "new_forfait.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  275 => 127,  269 => 124,  255 => 115,  239 => 104,  225 => 95,  209 => 84,  195 => 75,  179 => 64,  165 => 55,  151 => 46,  133 => 33,  127 => 32,  121 => 31,  115 => 28,  110 => 26,  106 => 25,  96 => 18,  93 => 17,  84 => 15,  79 => 14,  70 => 12,  66 => 11,  59 => 7,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"home\">

  <!-- HERO -->
  <section class=\"dashboard-hero\">
    <div class=\"dashboard-hero-text\">
      <h1 class=\"hero-title\">{{ formTitle }}</h1>
      <p class=\"hero-desc\">{{ formSubtitle }}</p>
    </div>
  </section>

  {% for message in app.flashes('success') %}
    <div class=\"flash-success\" style=\"max-width:600px; margin: 0 auto 1rem; padding: 0.8rem 1.5rem; background: var(--vert); color: var(--vert-tres-fonce); border-radius: 1rem; font-weight: 500;\">✅ {{ message }}</div>
  {% endfor %}
  {% for message in app.flashes('error') %}
    <div class=\"flash-error\" style=\"max-width:600px; margin: 0 auto 1rem; padding: 0.8rem 1.5rem; background: #fee2e2; color: #dc2626; border-radius: 1rem; font-weight: 500;\">❌ {{ message }}</div>
  {% endfor %}

  <form method=\"POST\" action=\"{{ formAction }}\" id=\"forfaitForm\">
    <div class=\"forfaits-wrapper\">
      <table class=\"forfaits-table\">
        <thead>
          <tr>
            <th class=\"th-label\"></th>
            <th class=\"th-plan\" style=\"min-width: 220px;\">
              <input type=\"text\" name=\"nomForfait\" value=\"{{ forfait.nomForfait|default('') }}\" class=\"form-input\" style=\"margin: 0.5rem 0; text-align:center;\" placeholder=\"Nom du forfait\" required>
              <textarea name=\"description\" class=\"form-input\" style=\"margin: 0.5rem 0; width: 100%; height: 80px; resize: vertical;\" placeholder=\"Description du forfait\">{{ forfait.description|default('') }}</textarea>
              <div style=\"display:flex; gap:0.5rem; align-items:center; justify-content:center; margin-top:0.3rem;\">
                <input type=\"number\" name=\"prix\" id=\"prix\" value=\"{{ forfait.prix|default(0) }}\" step=\"0.01\" min=\"0\" class=\"form-input\" style=\"width:80px; text-align:center;\" required>
                <span style=\"color:var(--gris); font-size:0.85rem;\">€ /</span>
                <select name=\"duree\" id=\"duree\" class=\"form-input\" style=\"width:90px;\">
                  <option value=\"gratuit\" {% if forfait.duree|default(0) == 0 %}selected{% endif %}>gratuit</option>
                  <option value=\"mois\"    {% if forfait.duree|default(0) == 30 %}selected{% endif %}>mois</option>
                  <option value=\"an\"      {% if forfait.duree|default(0) == 365 %}selected{% endif %}>an</option>
                </select>
              </div>
            </th>
          </tr>
        </thead>

        <tbody>
          <tr class=\"category\"><td colspan=\"2\">🔧 Proposer des services</td></tr>
          <tr>
            <td>Paramétrage</td>
            <td>
              <label class=\"toggle-label\">
                <input type=\"checkbox\" name=\"fonc_parametrage\" class=\"toggle-checkbox\" value=\"1\" {% if forfait.fonc_parametrage == '1' %}checked{% endif %}>
                <span class=\"toggle-switch\"></span>
              </label>
            </td>
          </tr>
          <tr>
            <td>Périmètre d'intervention</td>
            <td>
              <label class=\"toggle-label\">
                <input type=\"checkbox\" name=\"fonc_perimetreIntervention\" class=\"toggle-checkbox\" value=\"1\" {% if forfait.fonc_perimetreIntervention == '1' %}checked{% endif %}>
                <span class=\"toggle-switch\"></span>
              </label>
            </td>
          </tr>
          <tr>
            <td>Notifications « Nouvelles demandes »</td>
            <td>
              <label class=\"toggle-label\">
                <input type=\"checkbox\" name=\"fonc_notifications\" class=\"toggle-checkbox\" value=\"1\" {% if forfait.fonc_notifications == '1' %}checked{% endif %}>
                <span class=\"toggle-switch\"></span>
              </label>
            </td>
          </tr>

          <tr class=\"category\"><td colspan=\"2\">🙋 Répondre aux demandes</td></tr>
          <tr>
            <td>Location de matériel</td>
            <td>
              <label class=\"toggle-label\">
                <input type=\"checkbox\" name=\"fonc_locationMateriel\" class=\"toggle-checkbox\" value=\"1\" {% if forfait.fonc_locationMateriel == '1' %}checked{% endif %}>
                <span class=\"toggle-switch\"></span>
              </label>
            </td>
          </tr>
          <tr>
            <td>Prestation de service</td>
            <td>
              <label class=\"toggle-label\">
                <input type=\"checkbox\" name=\"fonc_prestationService\" class=\"toggle-checkbox\" value=\"1\" {% if forfait.fonc_prestationService == '1' %}checked{% endif %}>
                <span class=\"toggle-switch\"></span>
              </label>
            </td>
          </tr>

          <tr class=\"category\"><td colspan=\"2\">👤 Profil utilisateur</td></tr>
          <tr>
            <td>Numéro de téléphone sur le profil</td>
            <td>
              <label class=\"toggle-label\">
                <input type=\"checkbox\" name=\"fonc_numeroProfil\" class=\"toggle-checkbox\" value=\"1\" {% if forfait.fonc_numeroProfil == '1' %}checked{% endif %}>
                <span class=\"toggle-switch\"></span>
              </label>
            </td>
          </tr>
          <tr>
            <td>Photos des réalisations sur le profil</td>
            <td>
              <label class=\"toggle-label\">
                <input type=\"checkbox\" name=\"fonc_photosProfil\" class=\"toggle-checkbox\" value=\"1\" {% if forfait.fonc_photosProfil == '1' %}checked{% endif %}>
                <span class=\"toggle-switch\"></span>
              </label>
            </td>
          </tr>

          <tr class=\"category\"><td colspan=\"2\">🎧 Assistance</td></tr>
          <tr>
            <td>Accompagnement personnalisé et prioritaire</td>
            <td>
              <label class=\"toggle-label\">
                <input type=\"checkbox\" name=\"fonc_accompagnementPrioritaire\" class=\"toggle-checkbox\" value=\"1\" {% if forfait.fonc_accompagnementPrioritaire == '1' %}checked{% endif %}>
                <span class=\"toggle-switch\"></span>
              </label>
            </td>
          </tr>

          <tr class=\"category\"><td colspan=\"2\"></td></tr>
          <tr>
            <td style=\"text-align:left;\">
              <a href=\"{{ cancelPath }}\" class=\"btn-table btn-annuler\">Retour</a>
            </td>
            <td style=\"text-align:center; padding: 1rem;\">
              <button type=\"submit\" class=\"btn-primary\">{{ submitLabel }}</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </form>

</div>

<script>
  const dureeSelect = document.getElementById('duree');
  const prixInput = document.getElementById('prix');

  if (dureeSelect && prixInput) {
    const togglePrix = () => {
      if (dureeSelect.value === 'gratuit') {
        prixInput.value = '0';
        prixInput.readOnly = true;
      } else {
        prixInput.readOnly = false;
      }
    };

    dureeSelect.addEventListener('change', togglePrix);
    togglePrix();
  }

  const form = document.getElementById('forfaitForm');
  if (form) {
    form.addEventListener('submit', function(e) {
      const nom = document.querySelector('input[name=\"nomForfait\"]').value.trim();
      if (nom === '') {
        e.preventDefault();
        alert('Veuillez saisir un nom de forfait');
        return false;
      }
      const prix = parseFloat(prixInput.value);
      if (isNaN(prix) || prix < 0) {
        e.preventDefault();
        alert('Veuillez saisir un prix valide');
        return false;
      }
      return true;
    });
  }
</script>
", "new_forfait.html.twig", "C:\\laragon\\www\\Voisins connecté web\\web\\templates\\new_forfait.html.twig");
    }
}
