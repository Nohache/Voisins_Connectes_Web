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
class __TwigTemplate_12ce669c8bd7a6cf7c9e808ca669bd59 extends Template
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
        // line 1
        yield "<div class=\"home\">

  <!-- HERO -->
  <section class=\"dashboard-hero\">
    <div class=\"dashboard-hero-text\">
      <h1 class=\"hero-title\">";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["formTitle"] ?? null), "html", null, true);
        yield "</h1>
      <p class=\"hero-desc\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["formSubtitle"] ?? null), "html", null, true);
        yield "</p>
    </div>
  </section>

  ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 11));
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 14));
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["formAction"] ?? null), "html", null, true);
        yield "\" id=\"forfaitForm\">
    <div class=\"forfaits-wrapper\">
      <table class=\"forfaits-table\">
        <thead>
          <tr>
            <th class=\"th-label\"></th>
            <th class=\"th-plan\" style=\"min-width: 220px;\">
              <input type=\"text\" name=\"nomForfait\" value=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["forfait"] ?? null), "nomForfait", [], "any", true, true, false, 25)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["forfait"] ?? null), "nomForfait", [], "any", false, false, false, 25), "")) : ("")), "html", null, true);
        yield "\" class=\"form-input\" style=\"margin: 0.5rem 0; text-align:center;\" placeholder=\"Nom du forfait\" required>
              <textarea name=\"description\" class=\"form-input\" style=\"margin: 0.5rem 0; width: 100%; height: 80px; resize: vertical;\" placeholder=\"Description du forfait\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["forfait"] ?? null), "description", [], "any", true, true, false, 26)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["forfait"] ?? null), "description", [], "any", false, false, false, 26), "")) : ("")), "html", null, true);
        yield "</textarea>
              <div style=\"display:flex; gap:0.5rem; align-items:center; justify-content:center; margin-top:0.3rem;\">
                <input type=\"number\" name=\"prix\" id=\"prix\" value=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["forfait"] ?? null), "prix", [], "any", true, true, false, 28)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["forfait"] ?? null), "prix", [], "any", false, false, false, 28), 0)) : (0)), "html", null, true);
        yield "\" step=\"0.01\" min=\"0\" class=\"form-input\" style=\"width:80px; text-align:center;\" required>
                <span style=\"color:var(--gris); font-size:0.85rem;\">€ /</span>
                <select name=\"duree\" id=\"duree\" class=\"form-input\" style=\"width:90px;\">
                  <option value=\"gratuit\" ";
        // line 31
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["forfait"] ?? null), "duree", [], "any", true, true, false, 31)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["forfait"] ?? null), "duree", [], "any", false, false, false, 31), 0)) : (0)) == 0)) {
            yield "selected";
        }
        yield ">gratuit</option>
                  <option value=\"mois\"    ";
        // line 32
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["forfait"] ?? null), "duree", [], "any", true, true, false, 32)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["forfait"] ?? null), "duree", [], "any", false, false, false, 32), 0)) : (0)) == 30)) {
            yield "selected";
        }
        yield ">mois</option>
                  <option value=\"an\"      ";
        // line 33
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["forfait"] ?? null), "duree", [], "any", true, true, false, 33)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["forfait"] ?? null), "duree", [], "any", false, false, false, 33), 0)) : (0)) == 365)) {
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
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["forfait"] ?? null), "fonc_parametrage", [], "any", false, false, false, 46) == "1")) {
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
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["forfait"] ?? null), "fonc_perimetreIntervention", [], "any", false, false, false, 55) == "1")) {
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
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["forfait"] ?? null), "fonc_notifications", [], "any", false, false, false, 64) == "1")) {
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
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["forfait"] ?? null), "fonc_locationMateriel", [], "any", false, false, false, 75) == "1")) {
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
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["forfait"] ?? null), "fonc_prestationService", [], "any", false, false, false, 84) == "1")) {
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
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["forfait"] ?? null), "fonc_numeroProfil", [], "any", false, false, false, 95) == "1")) {
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
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["forfait"] ?? null), "fonc_photosProfil", [], "any", false, false, false, 104) == "1")) {
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
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["forfait"] ?? null), "fonc_accompagnementPrioritaire", [], "any", false, false, false, 115) == "1")) {
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cancelPath"] ?? null), "html", null, true);
        yield "\" class=\"btn-table btn-annuler\">Retour</a>
            </td>
            <td style=\"text-align:center; padding: 1rem;\">
              <button type=\"submit\" class=\"btn-primary\">";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["submitLabel"] ?? null), "html", null, true);
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
        return array (  269 => 127,  263 => 124,  249 => 115,  233 => 104,  219 => 95,  203 => 84,  189 => 75,  173 => 64,  159 => 55,  145 => 46,  127 => 33,  121 => 32,  115 => 31,  109 => 28,  104 => 26,  100 => 25,  90 => 18,  87 => 17,  78 => 15,  73 => 14,  64 => 12,  60 => 11,  53 => 7,  49 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "new_forfait.html.twig", "C:\\laragon\\www\\Voisins connecté web\\web\\templates\\new_forfait.html.twig");
    }
}
