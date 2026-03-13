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

/* forfaits.html.twig */
class __TwigTemplate_4c0acb8619bd2aad543b141dbe137bcd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forfaits.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forfaits.html.twig"));

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

        yield "Gestion des forfaits";
        
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
      <h1 class=\"hero-title\">Gestion des <span>forfaits</span></h1>
      <p class=\"hero-desc\">Consultez et gérez les forfaits proposés aux utilisateurs de la plateforme VoisinsConnectés.</p>
    </div>
  </section>

  ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", ["success"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            yield "    <div class=\"flash-success\" style=\"max-width:750px; margin: 0 auto 1rem; padding: 0.8rem 1.5rem; background: var(--vert); color: var(--vert-tres-fonce); border-radius: 1rem; font-weight: 500;\">✅ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "
  <!-- TABLEAU -->
  <section class=\"forfaits-section\">
    <h2 class=\"section-title\">Les forfaits disponibles</h2>
    <p class=\"section-sub\">Aperçu des fonctionnalités incluses dans chaque forfait.</p>

    <div class=\"forfaits-wrapper\">
      <table class=\"forfaits-table\">
        <thead>
          <tr>
            <th class=\"th-label\"></th>
            <th class=\"th-plan\">
              <div class=\"plan-badge plan-free\">Gratuit</div>
              <div class=\"plan-name\">Standard</div>
              <div class=\"plan-price\">0 €</div>
            </th>
            <th class=\"th-plan\">
              <div class=\"plan-badge plan-premium\">Payant</div>
              <div class=\"plan-name\">Premium</div>
              <div class=\"plan-price\">9,90 € <span>/mois</span></div>
            </th>
          </tr>
        </thead>
        <tbody>

          <tr class=\"category\"><td colspan=\"3\">🔧 Proposer des services</td></tr>
          <tr>
            <td>Paramétrage</td>
            <td><span class=\"check\">✔</span></td>
            <td><span class=\"check\">✔</span></td>
          </tr>
          <tr>
            <td>Périmètre d'intervention</td>
            <td><span class=\"check\">✔</span></td>
            <td><span class=\"check\">✔</span></td>
          </tr>
          <tr>
            <td>Notifications « Nouvelles demandes »</td>
            <td><span class=\"check\">✔</span></td>
            <td><span class=\"check\">✔</span></td>
          </tr>

          <tr class=\"category\"><td colspan=\"3\">🙋 Répondre aux demandes</td></tr>
          <tr>
            <td>Location de matériel</td>
            <td><span class=\"check\">✔</span></td>
            <td><span class=\"check\">✔</span></td>
          </tr>
          <tr>
            <td>Prestation de service</td>
            <td><span class=\"check\">✔</span></td>
            <td><span class=\"check\">✔</span></td>
          </tr>

          <tr class=\"category\"><td colspan=\"3\">👤 Profil utilisateur</td></tr>
          <tr>
            <td>Numéro de téléphone sur le profil</td>
            <td><span class=\"cross\">✘</span></td>
            <td><span class=\"check\">✔</span></td>
          </tr>
          <tr>
            <td>Photos des réalisations sur le profil</td>
            <td><span class=\"cross\">✘</span></td>
            <td><span class=\"check\">✔</span></td>
          </tr>

          <tr class=\"category\"><td colspan=\"3\">🎧 Assistance</td></tr>
          <tr>
            <td>Accompagnement personnalisé et prioritaire</td>
            <td><span class=\"cross\">✘</span></td>
            <td><span class=\"check\">✔</span></td>
          </tr>

          <!-- Boutons -->
          <tr class=\"category\"><td colspan=\"3\"></td></tr>
          <tr>
            <td></td>
            <td><a href=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forfait_modifier", ["id" => "standard"]);
        yield "\" class=\"btn-table btn-modifier\">✏️ Modifier</a></td>
            <td><a href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forfait_modifier", ["id" => "premium"]);
        yield "\" class=\"btn-table btn-modifier\">✏️ Modifier</a></td>
          </tr>
          <tr>
            <td></td>
            <td>
              <a href=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forfait_supprimer", ["id" => "standard"]);
        yield "\"
                 class=\"btn-table btn-supprimer\"
                 onclick=\"return confirm('Supprimer le forfait Standard ?')\">🗑️ Supprimer</a>
            </td>
            <td>
              <a href=\"";
        // line 107
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forfait_supprimer", ["id" => "premium"]);
        yield "\"
                 class=\"btn-table btn-supprimer\"
                 onclick=\"return confirm('Supprimer le forfait Premium ?')\">🗑️ Supprimer</a>
            </td>
          </tr>

        </tbody>
      </table>
    </div>
  </section>

</div>
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
        return "forfaits.html.twig";
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
        return array (  224 => 107,  216 => 102,  208 => 97,  204 => 96,  125 => 19,  116 => 17,  112 => 16,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Gestion des forfaits{% endblock %}

{% block body %}
<div class=\"home\">

  <!-- HERO -->
  <section class=\"dashboard-hero\">
    <div class=\"dashboard-hero-text\">
      <h1 class=\"hero-title\">Gestion des <span>forfaits</span></h1>
      <p class=\"hero-desc\">Consultez et gérez les forfaits proposés aux utilisateurs de la plateforme VoisinsConnectés.</p>
    </div>
  </section>

  {% for message in app.flashes('success') %}
    <div class=\"flash-success\" style=\"max-width:750px; margin: 0 auto 1rem; padding: 0.8rem 1.5rem; background: var(--vert); color: var(--vert-tres-fonce); border-radius: 1rem; font-weight: 500;\">✅ {{ message }}</div>
  {% endfor %}

  <!-- TABLEAU -->
  <section class=\"forfaits-section\">
    <h2 class=\"section-title\">Les forfaits disponibles</h2>
    <p class=\"section-sub\">Aperçu des fonctionnalités incluses dans chaque forfait.</p>

    <div class=\"forfaits-wrapper\">
      <table class=\"forfaits-table\">
        <thead>
          <tr>
            <th class=\"th-label\"></th>
            <th class=\"th-plan\">
              <div class=\"plan-badge plan-free\">Gratuit</div>
              <div class=\"plan-name\">Standard</div>
              <div class=\"plan-price\">0 €</div>
            </th>
            <th class=\"th-plan\">
              <div class=\"plan-badge plan-premium\">Payant</div>
              <div class=\"plan-name\">Premium</div>
              <div class=\"plan-price\">9,90 € <span>/mois</span></div>
            </th>
          </tr>
        </thead>
        <tbody>

          <tr class=\"category\"><td colspan=\"3\">🔧 Proposer des services</td></tr>
          <tr>
            <td>Paramétrage</td>
            <td><span class=\"check\">✔</span></td>
            <td><span class=\"check\">✔</span></td>
          </tr>
          <tr>
            <td>Périmètre d'intervention</td>
            <td><span class=\"check\">✔</span></td>
            <td><span class=\"check\">✔</span></td>
          </tr>
          <tr>
            <td>Notifications « Nouvelles demandes »</td>
            <td><span class=\"check\">✔</span></td>
            <td><span class=\"check\">✔</span></td>
          </tr>

          <tr class=\"category\"><td colspan=\"3\">🙋 Répondre aux demandes</td></tr>
          <tr>
            <td>Location de matériel</td>
            <td><span class=\"check\">✔</span></td>
            <td><span class=\"check\">✔</span></td>
          </tr>
          <tr>
            <td>Prestation de service</td>
            <td><span class=\"check\">✔</span></td>
            <td><span class=\"check\">✔</span></td>
          </tr>

          <tr class=\"category\"><td colspan=\"3\">👤 Profil utilisateur</td></tr>
          <tr>
            <td>Numéro de téléphone sur le profil</td>
            <td><span class=\"cross\">✘</span></td>
            <td><span class=\"check\">✔</span></td>
          </tr>
          <tr>
            <td>Photos des réalisations sur le profil</td>
            <td><span class=\"cross\">✘</span></td>
            <td><span class=\"check\">✔</span></td>
          </tr>

          <tr class=\"category\"><td colspan=\"3\">🎧 Assistance</td></tr>
          <tr>
            <td>Accompagnement personnalisé et prioritaire</td>
            <td><span class=\"cross\">✘</span></td>
            <td><span class=\"check\">✔</span></td>
          </tr>

          <!-- Boutons -->
          <tr class=\"category\"><td colspan=\"3\"></td></tr>
          <tr>
            <td></td>
            <td><a href=\"{{ path('app_forfait_modifier', {id: 'standard'}) }}\" class=\"btn-table btn-modifier\">✏️ Modifier</a></td>
            <td><a href=\"{{ path('app_forfait_modifier', {id: 'premium'}) }}\" class=\"btn-table btn-modifier\">✏️ Modifier</a></td>
          </tr>
          <tr>
            <td></td>
            <td>
              <a href=\"{{ path('app_forfait_supprimer', {id: 'standard'}) }}\"
                 class=\"btn-table btn-supprimer\"
                 onclick=\"return confirm('Supprimer le forfait Standard ?')\">🗑️ Supprimer</a>
            </td>
            <td>
              <a href=\"{{ path('app_forfait_supprimer', {id: 'premium'}) }}\"
                 class=\"btn-table btn-supprimer\"
                 onclick=\"return confirm('Supprimer le forfait Premium ?')\">🗑️ Supprimer</a>
            </td>
          </tr>

        </tbody>
      </table>
    </div>
  </section>

</div>
{% endblock %}
", "forfaits.html.twig", "C:\\laragon\\www\\Voisins connecté\\templates\\forfaits.html.twig");
    }
}
