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

/* demande_adhesion.html.twig */
class __TwigTemplate_a565aa811ba83a9f8140d815c7eb68e7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demande_adhesion.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demande_adhesion.html.twig"));

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

        yield "Validation des demandes d'adhésion";
        
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
      <h1 class=\"hero-title\">Demandes d'<span>adhésion</span></h1>
      <p class=\"hero-desc\">Validez ou refusez les demandes d'inscription des nouveaux membres de la plateforme VoisinsConnectés.</p>
    </div>
  </section>

  ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", ["success"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            yield "    <div class=\"flash-success\" style=\"max-width:1100px; margin: 0 auto 1rem; padding: 0.8rem 1.5rem; background: var(--vert); color: var(--vert-tres-fonce); border-radius: 1rem; font-weight: 500;\">✅ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "
  <section class=\"publications-section\">
    <h2 class=\"section-title\">Demandes en attente</h2>
    <p class=\"section-sub\">Liste des membres ayant soumis une demande d'adhésion à la plateforme.</p>

    <div class=\"publications-wrapper\">
      <table class=\"publications-table\">
        <thead>
          <tr>
            <th>Forfait souhaité</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Adresse</th>
            <th>Date demande</th>
            <th>État</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><span class=\"badge plan-premium\">Premium</span></td>
            <td>Dupont</td>
            <td>Marie</td>
            <td>marie.dupont@email.com</td>
            <td>06 12 34 56 78</td>
            <td>Lyon 3e</td>
            <td>01/03/2025</td>
            <td><span class=\"badge badge-attente\">En attente</span></td>
            <td class=\"td-actions\">
              <a href=\"#\" class=\"btn-table btn-valider\" onclick=\"return confirm('Valider la demande de Marie Dupont ?')\">✅ Valider</a>
              <a href=\"#\" class=\"btn-table btn-supprimer\" onclick=\"return confirm('Refuser la demande de Marie Dupont ?')\">❌ Refuser</a>
            </td>
          </tr>
          <tr>
            <td><span class=\"badge plan-premium\">Premium</span></td>
            <td>Martin</td>
            <td>Jean</td>
            <td>jean.martin@email.com</td>
            <td>07 23 45 67 89</td>
            <td>Lyon 6e</td>
            <td>03/03/2025</td>
            <td><span class=\"badge badge-attente\">En attente</span></td>
            <td class=\"td-actions\">
              <a href=\"#\" class=\"btn-table btn-valider\" onclick=\"return confirm('Valider la demande de Jean Martin ?')\">✅ Valider</a>
              <a href=\"#\" class=\"btn-table btn-supprimer\" onclick=\"return confirm('Refuser la demande de Jean Martin ?')\">❌ Refuser</a>
            </td>
          </tr>
          <tr>
            <td><span class=\"badge plan-premium\">Premium</span></td>
            <td>Bernard</td>
            <td>Sophie</td>
            <td>sophie.bernard@email.com</td>
            <td>06 34 56 78 90</td>
            <td>Villeurbanne</td>
            <td>05/03/2025</td>
            <td><span class=\"badge badge-active\">Validée</span></td>
            <td class=\"td-actions\">
              <a href=\"#\" class=\"btn-table btn-valider\" onclick=\"return confirm('Valider la demande de Sophie Bernard ?')\">✅ Valider</a>
              <a href=\"#\" class=\"btn-table btn-supprimer\" onclick=\"return confirm('Refuser la demande de Sophie Bernard ?')\">❌ Refuser</a>
            </td>
          </tr>
          <tr>
            <td><span class=\"badge plan-premium\">Premium</span></td>
            <td>Leroy</td>
            <td>Pierre</td>
            <td>pierre.leroy@email.com</td>
            <td>07 45 67 89 01</td>
            <td>Lyon 2e</td>
            <td>08/03/2025</td>
            <td><span class=\"badge badge-cloture\">Refusée</span></td>
            <td class=\"td-actions\">
              <a href=\"#\" class=\"btn-table btn-valider\" onclick=\"return confirm('Valider la demande de Pierre Leroy ?')\">✅ Valider</a>
              <a href=\"#\" class=\"btn-table btn-supprimer\" onclick=\"return confirm('Refuser la demande de Pierre Leroy ?')\">❌ Refuser</a>
            </td>
          </tr>
          <tr>
            <td><span class=\"badge plan-premium\">Premium</span></td>
            <td>Petit</td>
            <td>Claire</td>
            <td>claire.petit@email.com</td>
            <td>06 56 78 90 12</td>
            <td>Lyon 1er</td>
            <td>10/03/2025</td>
            <td><span class=\"badge badge-attente\">En attente</span></td>
            <td class=\"td-actions\">
              <a href=\"#\" class=\"btn-table btn-valider\" onclick=\"return confirm('Valider la demande de Claire Petit ?')\">✅ Valider</a>
              <a href=\"#\" class=\"btn-table btn-supprimer\" onclick=\"return confirm('Refuser la demande de Claire Petit ?')\">❌ Refuser</a>
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
        return "demande_adhesion.html.twig";
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
        return array (  125 => 19,  116 => 17,  112 => 16,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Validation des demandes d'adhésion{% endblock %}

{% block body %}
<div class=\"home\">

  <!-- HERO -->
  <section class=\"dashboard-hero\">
    <div class=\"dashboard-hero-text\">
      <h1 class=\"hero-title\">Demandes d'<span>adhésion</span></h1>
      <p class=\"hero-desc\">Validez ou refusez les demandes d'inscription des nouveaux membres de la plateforme VoisinsConnectés.</p>
    </div>
  </section>

  {% for message in app.flashes('success') %}
    <div class=\"flash-success\" style=\"max-width:1100px; margin: 0 auto 1rem; padding: 0.8rem 1.5rem; background: var(--vert); color: var(--vert-tres-fonce); border-radius: 1rem; font-weight: 500;\">✅ {{ message }}</div>
  {% endfor %}

  <section class=\"publications-section\">
    <h2 class=\"section-title\">Demandes en attente</h2>
    <p class=\"section-sub\">Liste des membres ayant soumis une demande d'adhésion à la plateforme.</p>

    <div class=\"publications-wrapper\">
      <table class=\"publications-table\">
        <thead>
          <tr>
            <th>Forfait souhaité</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Adresse</th>
            <th>Date demande</th>
            <th>État</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><span class=\"badge plan-premium\">Premium</span></td>
            <td>Dupont</td>
            <td>Marie</td>
            <td>marie.dupont@email.com</td>
            <td>06 12 34 56 78</td>
            <td>Lyon 3e</td>
            <td>01/03/2025</td>
            <td><span class=\"badge badge-attente\">En attente</span></td>
            <td class=\"td-actions\">
              <a href=\"#\" class=\"btn-table btn-valider\" onclick=\"return confirm('Valider la demande de Marie Dupont ?')\">✅ Valider</a>
              <a href=\"#\" class=\"btn-table btn-supprimer\" onclick=\"return confirm('Refuser la demande de Marie Dupont ?')\">❌ Refuser</a>
            </td>
          </tr>
          <tr>
            <td><span class=\"badge plan-premium\">Premium</span></td>
            <td>Martin</td>
            <td>Jean</td>
            <td>jean.martin@email.com</td>
            <td>07 23 45 67 89</td>
            <td>Lyon 6e</td>
            <td>03/03/2025</td>
            <td><span class=\"badge badge-attente\">En attente</span></td>
            <td class=\"td-actions\">
              <a href=\"#\" class=\"btn-table btn-valider\" onclick=\"return confirm('Valider la demande de Jean Martin ?')\">✅ Valider</a>
              <a href=\"#\" class=\"btn-table btn-supprimer\" onclick=\"return confirm('Refuser la demande de Jean Martin ?')\">❌ Refuser</a>
            </td>
          </tr>
          <tr>
            <td><span class=\"badge plan-premium\">Premium</span></td>
            <td>Bernard</td>
            <td>Sophie</td>
            <td>sophie.bernard@email.com</td>
            <td>06 34 56 78 90</td>
            <td>Villeurbanne</td>
            <td>05/03/2025</td>
            <td><span class=\"badge badge-active\">Validée</span></td>
            <td class=\"td-actions\">
              <a href=\"#\" class=\"btn-table btn-valider\" onclick=\"return confirm('Valider la demande de Sophie Bernard ?')\">✅ Valider</a>
              <a href=\"#\" class=\"btn-table btn-supprimer\" onclick=\"return confirm('Refuser la demande de Sophie Bernard ?')\">❌ Refuser</a>
            </td>
          </tr>
          <tr>
            <td><span class=\"badge plan-premium\">Premium</span></td>
            <td>Leroy</td>
            <td>Pierre</td>
            <td>pierre.leroy@email.com</td>
            <td>07 45 67 89 01</td>
            <td>Lyon 2e</td>
            <td>08/03/2025</td>
            <td><span class=\"badge badge-cloture\">Refusée</span></td>
            <td class=\"td-actions\">
              <a href=\"#\" class=\"btn-table btn-valider\" onclick=\"return confirm('Valider la demande de Pierre Leroy ?')\">✅ Valider</a>
              <a href=\"#\" class=\"btn-table btn-supprimer\" onclick=\"return confirm('Refuser la demande de Pierre Leroy ?')\">❌ Refuser</a>
            </td>
          </tr>
          <tr>
            <td><span class=\"badge plan-premium\">Premium</span></td>
            <td>Petit</td>
            <td>Claire</td>
            <td>claire.petit@email.com</td>
            <td>06 56 78 90 12</td>
            <td>Lyon 1er</td>
            <td>10/03/2025</td>
            <td><span class=\"badge badge-attente\">En attente</span></td>
            <td class=\"td-actions\">
              <a href=\"#\" class=\"btn-table btn-valider\" onclick=\"return confirm('Valider la demande de Claire Petit ?')\">✅ Valider</a>
              <a href=\"#\" class=\"btn-table btn-supprimer\" onclick=\"return confirm('Refuser la demande de Claire Petit ?')\">❌ Refuser</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

</div>
{% endblock %}
", "demande_adhesion.html.twig", "C:\\laragon\\www\\Voisins connecté web\\web\\templates\\demande_adhesion.html.twig");
    }
}
