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

/* ajouter_forfait.html.twig */
class __TwigTemplate_a58767964b96919a45e64950ee321b01 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ajouter_forfait.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ajouter_forfait.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Ajouter un forfait";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"home\">

  <!-- HERO -->
  <section class=\"dashboard-hero\">
    <div class=\"dashboard-hero-text\">
      <h1 class=\"hero-title\">Ajouter un <span>forfait</span></h1>
      <p class=\"hero-desc\">Créez un nouveau forfait et définissez ses fonctionnalités.</p>
    </div>
  </section>

  <section class=\"forfaits-section\">
    <h2 class=\"section-title\">Nouveau forfait</h2>

    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", ["success"], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            yield "      <div class=\"flash-success\">✅ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "
    <form method=\"POST\" action=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forfait_ajouter");
        yield "\">
    <div class=\"forfaits-wrapper\">
      <table class=\"forfaits-table\">

        <!-- EN-TÊTE : champs nom / prix / durée -->
        <thead>
          <tr>
            <th class=\"th-label\"></th>
            <th class=\"th-plan\" style=\"min-width: 220px;\">
              <input type=\"text\" name=\"nomForfait\" placeholder=\"Nom du forfait\" class=\"form-input\" style=\"margin: 0.5rem 0; text-align:center;\" required>
              <div style=\"display:flex; gap:0.5rem; align-items:center; justify-content:center; margin-top:0.3rem;\">
                <input type=\"number\" name=\"prix\" value=\"0\" step=\"0.01\" min=\"0\" class=\"form-input\" style=\"width:80px; text-align:center;\" required>
                <span style=\"color:var(--gris); font-size:0.85rem;\">€ /</span>
                <select name=\"duree\" id=\"duree\" class=\"form-input\" style=\"width:90px;\">
                  <option value=\"gratuit\">gratuit</option>
                  <option value=\"mois\">mois</option>
                  <option value=\"an\">an</option>
                </select>
              </div>
            </th>
          </tr>
        </thead>

        <!-- FONCTIONNALITÉS avec cases à cocher -->
        <tbody>
          <tr class=\"category\"><td colspan=\"2\">🔧 Proposer des services</td></tr>
          <tr>
            <td>Paramétrage</td>
            <td><label class=\"toggle-label\"><input type=\"checkbox\" name=\"fonc_parametrage\" class=\"toggle-checkbox\"><span class=\"toggle-switch\"></span></label></td>
          </tr>
          <tr>
            <td>Périmètre d'intervention</td>
            <td><label class=\"toggle-label\"><input type=\"checkbox\" name=\"fonc_perimetreIntervention\" class=\"toggle-checkbox\"><span class=\"toggle-switch\"></span></label></td>
          </tr>
          <tr>
            <td>Notifications « Nouvelles demandes »</td>
            <td><label class=\"toggle-label\"><input type=\"checkbox\" name=\"fonc_notifications\" class=\"toggle-checkbox\"><span class=\"toggle-switch\"></span></label></td>
          </tr>

          <tr class=\"category\"><td colspan=\"2\">🙋 Répondre aux demandes</td></tr>
          <tr>
            <td>Location de matériel</td>
            <td><label class=\"toggle-label\"><input type=\"checkbox\" name=\"fonc_locationMateriel\" class=\"toggle-checkbox\"><span class=\"toggle-switch\"></span></label></td>
          </tr>
          <tr>
            <td>Prestation de service</td>
            <td><label class=\"toggle-label\"><input type=\"checkbox\" name=\"fonc_prestationService\" class=\"toggle-checkbox\"><span class=\"toggle-switch\"></span></label></td>
          </tr>

          <tr class=\"category\"><td colspan=\"2\">👤 Profil utilisateur</td></tr>
          <tr>
            <td>Numéro de téléphone sur le profil</td>
            <td><label class=\"toggle-label\"><input type=\"checkbox\" name=\"fonc_numeroProfil\" class=\"toggle-checkbox\"><span class=\"toggle-switch\"></span></label></td>
          </tr>
          <tr>
            <td>Photos des réalisations sur le profil</td>
            <td><label class=\"toggle-label\"><input type=\"checkbox\" name=\"fonc_photosProfil\" class=\"toggle-checkbox\"><span class=\"toggle-switch\"></span></label></td>
          </tr>

          <tr class=\"category\"><td colspan=\"2\">🎧 Assistance</td></tr>
          <tr>
            <td>Accompagnement personnalisé et prioritaire</td>
            <td><label class=\"toggle-label\"><input type=\"checkbox\" name=\"fonc_accompagnementPrioritaire\" class=\"toggle-checkbox\"><span class=\"toggle-switch\"></span></label></td>
          </tr>

          <!-- BOUTONS -->
          <tr class=\"category\"><td colspan=\"2\"></td></tr>
          <tr>
            <td style=\"text-align:left;\">
              <a href=\"";
        // line 92
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forfaits");
        yield "\" class=\"btn-table btn-annuler\">Retour</a>
            </td>
            <td style=\"text-align:center; padding: 1rem;\">
              <button type=\"submit\" class=\"btn-primary\">✨ Créer le forfait</button>
            </td>
          </tr>
        </tbody>

      </table>
    </div>
    </form>
  </section>

</div>

<script>
  document.getElementById('duree').addEventListener('change', function() {
    if (this.value === 'gratuit') {
      document.querySelector('input[name=\"prix\"]').value = '0';
    }
  });
</script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "ajouter_forfait.html.twig";
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
        return array (  203 => 92,  131 => 23,  128 => 22,  119 => 20,  115 => 19,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Ajouter un forfait{% endblock %}

{% block body %}
<div class=\"home\">

  <!-- HERO -->
  <section class=\"dashboard-hero\">
    <div class=\"dashboard-hero-text\">
      <h1 class=\"hero-title\">Ajouter un <span>forfait</span></h1>
      <p class=\"hero-desc\">Créez un nouveau forfait et définissez ses fonctionnalités.</p>
    </div>
  </section>

  <section class=\"forfaits-section\">
    <h2 class=\"section-title\">Nouveau forfait</h2>

    {% for message in app.flashes('success') %}
      <div class=\"flash-success\">✅ {{ message }}</div>
    {% endfor %}

    <form method=\"POST\" action=\"{{ path('app_forfait_ajouter') }}\">
    <div class=\"forfaits-wrapper\">
      <table class=\"forfaits-table\">

        <!-- EN-TÊTE : champs nom / prix / durée -->
        <thead>
          <tr>
            <th class=\"th-label\"></th>
            <th class=\"th-plan\" style=\"min-width: 220px;\">
              <input type=\"text\" name=\"nomForfait\" placeholder=\"Nom du forfait\" class=\"form-input\" style=\"margin: 0.5rem 0; text-align:center;\" required>
              <div style=\"display:flex; gap:0.5rem; align-items:center; justify-content:center; margin-top:0.3rem;\">
                <input type=\"number\" name=\"prix\" value=\"0\" step=\"0.01\" min=\"0\" class=\"form-input\" style=\"width:80px; text-align:center;\" required>
                <span style=\"color:var(--gris); font-size:0.85rem;\">€ /</span>
                <select name=\"duree\" id=\"duree\" class=\"form-input\" style=\"width:90px;\">
                  <option value=\"gratuit\">gratuit</option>
                  <option value=\"mois\">mois</option>
                  <option value=\"an\">an</option>
                </select>
              </div>
            </th>
          </tr>
        </thead>

        <!-- FONCTIONNALITÉS avec cases à cocher -->
        <tbody>
          <tr class=\"category\"><td colspan=\"2\">🔧 Proposer des services</td></tr>
          <tr>
            <td>Paramétrage</td>
            <td><label class=\"toggle-label\"><input type=\"checkbox\" name=\"fonc_parametrage\" class=\"toggle-checkbox\"><span class=\"toggle-switch\"></span></label></td>
          </tr>
          <tr>
            <td>Périmètre d'intervention</td>
            <td><label class=\"toggle-label\"><input type=\"checkbox\" name=\"fonc_perimetreIntervention\" class=\"toggle-checkbox\"><span class=\"toggle-switch\"></span></label></td>
          </tr>
          <tr>
            <td>Notifications « Nouvelles demandes »</td>
            <td><label class=\"toggle-label\"><input type=\"checkbox\" name=\"fonc_notifications\" class=\"toggle-checkbox\"><span class=\"toggle-switch\"></span></label></td>
          </tr>

          <tr class=\"category\"><td colspan=\"2\">🙋 Répondre aux demandes</td></tr>
          <tr>
            <td>Location de matériel</td>
            <td><label class=\"toggle-label\"><input type=\"checkbox\" name=\"fonc_locationMateriel\" class=\"toggle-checkbox\"><span class=\"toggle-switch\"></span></label></td>
          </tr>
          <tr>
            <td>Prestation de service</td>
            <td><label class=\"toggle-label\"><input type=\"checkbox\" name=\"fonc_prestationService\" class=\"toggle-checkbox\"><span class=\"toggle-switch\"></span></label></td>
          </tr>

          <tr class=\"category\"><td colspan=\"2\">👤 Profil utilisateur</td></tr>
          <tr>
            <td>Numéro de téléphone sur le profil</td>
            <td><label class=\"toggle-label\"><input type=\"checkbox\" name=\"fonc_numeroProfil\" class=\"toggle-checkbox\"><span class=\"toggle-switch\"></span></label></td>
          </tr>
          <tr>
            <td>Photos des réalisations sur le profil</td>
            <td><label class=\"toggle-label\"><input type=\"checkbox\" name=\"fonc_photosProfil\" class=\"toggle-checkbox\"><span class=\"toggle-switch\"></span></label></td>
          </tr>

          <tr class=\"category\"><td colspan=\"2\">🎧 Assistance</td></tr>
          <tr>
            <td>Accompagnement personnalisé et prioritaire</td>
            <td><label class=\"toggle-label\"><input type=\"checkbox\" name=\"fonc_accompagnementPrioritaire\" class=\"toggle-checkbox\"><span class=\"toggle-switch\"></span></label></td>
          </tr>

          <!-- BOUTONS -->
          <tr class=\"category\"><td colspan=\"2\"></td></tr>
          <tr>
            <td style=\"text-align:left;\">
              <a href=\"{{ path('app_forfaits') }}\" class=\"btn-table btn-annuler\">Retour</a>
            </td>
            <td style=\"text-align:center; padding: 1rem;\">
              <button type=\"submit\" class=\"btn-primary\">✨ Créer le forfait</button>
            </td>
          </tr>
        </tbody>

      </table>
    </div>
    </form>
  </section>

</div>

<script>
  document.getElementById('duree').addEventListener('change', function() {
    if (this.value === 'gratuit') {
      document.querySelector('input[name=\"prix\"]').value = '0';
    }
  });
</script>

{% endblock %}
", "ajouter_forfait.html.twig", "C:\\laragon\\www\\Voisins connecté web\\web\\templates\\ajouter_forfait.html.twig");
    }
}
