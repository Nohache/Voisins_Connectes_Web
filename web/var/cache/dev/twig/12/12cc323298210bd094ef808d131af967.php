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

/* gestion_publication.html.twig */
class __TwigTemplate_4c4ee99cc9c55ce77e973a2ece9feaed extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_publication.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_publication.html.twig"));

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

        yield "Gestion des publications";
        
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
      <h1 class=\"hero-title\">Gestion des <span>publications</span></h1>
      <p class=\"hero-desc\">Consultez et gérez l'ensemble des services publiés sur la plateforme VoisinsConnectés.</p>
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
    <h2 class=\"section-title\">Toutes les publications</h2>
    <p class=\"section-sub\">Gérez les services publiés par les membres de la plateforme.</p>

    <div class=\"publications-wrapper\">
      <table class=\"publications-table\">
        <thead>
          <tr>
            <th>Titre</th>
            <th>Description</th>
            <th>Type</th>
            <th>État</th>
            <th>Date publication</th>
            <th>Date clôture</th>
            <th>Prix proposé</th>
            <th>Adresse</th>
            <th>Catégorie</th>
            <th>Membre</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Taille de haies</td>
            <td class=\"td-desc\">Besoin d'un coup de main pour tailler mes haies de 10m.</td>
            <td><span class=\"badge badge-demande\">Demande</span></td>
            <td><span class=\"badge badge-active\">Active</span></td>
            <td>01/03/2025</td>
            <td>30/03/2025</td>
            <td>25,00 €</td>
            <td>Lyon 3e</td>
            <td>Jardinage</td>
            <td>M. Dupont</td>
            <td class=\"td-actions\">
              <a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_modifier", ["id" => 1]);
        yield "\" class=\"btn-table btn-modifier\">✏️</a>
              <a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_supprimer", ["id" => 1]);
        yield "\" class=\"btn-table btn-supprimer\" onclick=\"return confirm('Supprimer cette publication ?')\">🗑️</a>
            </td>
          </tr>
          <tr>
            <td>Prêt perceuse</td>
            <td class=\"td-desc\">Je prête ma perceuse pour le week-end.</td>
            <td><span class=\"badge badge-offre\">Offre</span></td>
            <td><span class=\"badge badge-active\">Active</span></td>
            <td>05/03/2025</td>
            <td>15/03/2025</td>
            <td>0,00 €</td>
            <td>Lyon 6e</td>
            <td>Outillage</td>
            <td>Mme Martin</td>
            <td class=\"td-actions\">
              <a href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_modifier", ["id" => 2]);
        yield "\" class=\"btn-table btn-modifier\">✏️</a>
              <a href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_supprimer", ["id" => 2]);
        yield "\" class=\"btn-table btn-supprimer\" onclick=\"return confirm('Supprimer cette publication ?')\">🗑️</a>
            </td>
          </tr>
          <tr>
            <td>Garde de chat</td>
            <td class=\"td-desc\">Cherche quelqu'un pour garder mon chat pendant 1 semaine.</td>
            <td><span class=\"badge badge-demande\">Demande</span></td>
            <td><span class=\"badge badge-cloture\">Clôturée</span></td>
            <td>10/02/2025</td>
            <td>17/02/2025</td>
            <td>50,00 €</td>
            <td>Lyon 2e</td>
            <td>Animaux</td>
            <td>M. Bernard</td>
            <td class=\"td-actions\">
              <a href=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_modifier", ["id" => 3]);
        yield "\" class=\"btn-table btn-modifier\">✏️</a>
              <a href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_supprimer", ["id" => 3]);
        yield "\" class=\"btn-table btn-supprimer\" onclick=\"return confirm('Supprimer cette publication ?')\">🗑️</a>
            </td>
          </tr>
          <tr>
            <td>Cours de guitare</td>
            <td class=\"td-desc\">Propose des cours de guitare pour débutants, 1h par semaine.</td>
            <td><span class=\"badge badge-offre\">Offre</span></td>
            <td><span class=\"badge badge-attente\">En attente</span></td>
            <td>12/03/2025</td>
            <td>—</td>
            <td>15,00 €</td>
            <td>Lyon 1er</td>
            <td>Cours</td>
            <td>Mme Leroy</td>
            <td class=\"td-actions\">
              <a href=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_modifier", ["id" => 4]);
        yield "\" class=\"btn-table btn-modifier\">✏️</a>
              <a href=\"";
        // line 103
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_supprimer", ["id" => 4]);
        yield "\" class=\"btn-table btn-supprimer\" onclick=\"return confirm('Supprimer cette publication ?')\">🗑️</a>
            </td>
          </tr>
          <tr>
            <td>Transport de meubles</td>
            <td class=\"td-desc\">Besoin d'aide pour déménager un canapé et une armoire.</td>
            <td><span class=\"badge badge-demande\">Demande</span></td>
            <td><span class=\"badge badge-active\">Active</span></td>
            <td>14/03/2025</td>
            <td>21/03/2025</td>
            <td>40,00 €</td>
            <td>Villeurbanne</td>
            <td>Déménagement</td>
            <td>M. Petit</td>
            <td class=\"td-actions\">
              <a href=\"";
        // line 118
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_modifier", ["id" => 5]);
        yield "\" class=\"btn-table btn-modifier\">✏️</a>
              <a href=\"";
        // line 119
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_supprimer", ["id" => 5]);
        yield "\" class=\"btn-table btn-supprimer\" onclick=\"return confirm('Supprimer cette publication ?')\">🗑️</a>
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
        return "gestion_publication.html.twig";
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
        return array (  254 => 119,  250 => 118,  232 => 103,  228 => 102,  210 => 87,  206 => 86,  188 => 71,  184 => 70,  166 => 55,  162 => 54,  125 => 19,  116 => 17,  112 => 16,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Gestion des publications{% endblock %}

{% block body %}
<div class=\"home\">

  <!-- HERO -->
  <section class=\"dashboard-hero\">
    <div class=\"dashboard-hero-text\">
      <h1 class=\"hero-title\">Gestion des <span>publications</span></h1>
      <p class=\"hero-desc\">Consultez et gérez l'ensemble des services publiés sur la plateforme VoisinsConnectés.</p>
    </div>
  </section>

  {% for message in app.flashes('success') %}
    <div class=\"flash-success\" style=\"max-width:1100px; margin: 0 auto 1rem; padding: 0.8rem 1.5rem; background: var(--vert); color: var(--vert-tres-fonce); border-radius: 1rem; font-weight: 500;\">✅ {{ message }}</div>
  {% endfor %}

  <section class=\"publications-section\">
    <h2 class=\"section-title\">Toutes les publications</h2>
    <p class=\"section-sub\">Gérez les services publiés par les membres de la plateforme.</p>

    <div class=\"publications-wrapper\">
      <table class=\"publications-table\">
        <thead>
          <tr>
            <th>Titre</th>
            <th>Description</th>
            <th>Type</th>
            <th>État</th>
            <th>Date publication</th>
            <th>Date clôture</th>
            <th>Prix proposé</th>
            <th>Adresse</th>
            <th>Catégorie</th>
            <th>Membre</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Taille de haies</td>
            <td class=\"td-desc\">Besoin d'un coup de main pour tailler mes haies de 10m.</td>
            <td><span class=\"badge badge-demande\">Demande</span></td>
            <td><span class=\"badge badge-active\">Active</span></td>
            <td>01/03/2025</td>
            <td>30/03/2025</td>
            <td>25,00 €</td>
            <td>Lyon 3e</td>
            <td>Jardinage</td>
            <td>M. Dupont</td>
            <td class=\"td-actions\">
              <a href=\"{{ path('publication_modifier', {id: 1}) }}\" class=\"btn-table btn-modifier\">✏️</a>
              <a href=\"{{ path('publication_supprimer', {id: 1}) }}\" class=\"btn-table btn-supprimer\" onclick=\"return confirm('Supprimer cette publication ?')\">🗑️</a>
            </td>
          </tr>
          <tr>
            <td>Prêt perceuse</td>
            <td class=\"td-desc\">Je prête ma perceuse pour le week-end.</td>
            <td><span class=\"badge badge-offre\">Offre</span></td>
            <td><span class=\"badge badge-active\">Active</span></td>
            <td>05/03/2025</td>
            <td>15/03/2025</td>
            <td>0,00 €</td>
            <td>Lyon 6e</td>
            <td>Outillage</td>
            <td>Mme Martin</td>
            <td class=\"td-actions\">
              <a href=\"{{ path('publication_modifier', {id: 2}) }}\" class=\"btn-table btn-modifier\">✏️</a>
              <a href=\"{{ path('publication_supprimer', {id: 2}) }}\" class=\"btn-table btn-supprimer\" onclick=\"return confirm('Supprimer cette publication ?')\">🗑️</a>
            </td>
          </tr>
          <tr>
            <td>Garde de chat</td>
            <td class=\"td-desc\">Cherche quelqu'un pour garder mon chat pendant 1 semaine.</td>
            <td><span class=\"badge badge-demande\">Demande</span></td>
            <td><span class=\"badge badge-cloture\">Clôturée</span></td>
            <td>10/02/2025</td>
            <td>17/02/2025</td>
            <td>50,00 €</td>
            <td>Lyon 2e</td>
            <td>Animaux</td>
            <td>M. Bernard</td>
            <td class=\"td-actions\">
              <a href=\"{{ path('publication_modifier', {id: 3}) }}\" class=\"btn-table btn-modifier\">✏️</a>
              <a href=\"{{ path('publication_supprimer', {id: 3}) }}\" class=\"btn-table btn-supprimer\" onclick=\"return confirm('Supprimer cette publication ?')\">🗑️</a>
            </td>
          </tr>
          <tr>
            <td>Cours de guitare</td>
            <td class=\"td-desc\">Propose des cours de guitare pour débutants, 1h par semaine.</td>
            <td><span class=\"badge badge-offre\">Offre</span></td>
            <td><span class=\"badge badge-attente\">En attente</span></td>
            <td>12/03/2025</td>
            <td>—</td>
            <td>15,00 €</td>
            <td>Lyon 1er</td>
            <td>Cours</td>
            <td>Mme Leroy</td>
            <td class=\"td-actions\">
              <a href=\"{{ path('publication_modifier', {id: 4}) }}\" class=\"btn-table btn-modifier\">✏️</a>
              <a href=\"{{ path('publication_supprimer', {id: 4}) }}\" class=\"btn-table btn-supprimer\" onclick=\"return confirm('Supprimer cette publication ?')\">🗑️</a>
            </td>
          </tr>
          <tr>
            <td>Transport de meubles</td>
            <td class=\"td-desc\">Besoin d'aide pour déménager un canapé et une armoire.</td>
            <td><span class=\"badge badge-demande\">Demande</span></td>
            <td><span class=\"badge badge-active\">Active</span></td>
            <td>14/03/2025</td>
            <td>21/03/2025</td>
            <td>40,00 €</td>
            <td>Villeurbanne</td>
            <td>Déménagement</td>
            <td>M. Petit</td>
            <td class=\"td-actions\">
              <a href=\"{{ path('publication_modifier', {id: 5}) }}\" class=\"btn-table btn-modifier\">✏️</a>
              <a href=\"{{ path('publication_supprimer', {id: 5}) }}\" class=\"btn-table btn-supprimer\" onclick=\"return confirm('Supprimer cette publication ?')\">🗑️</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

</div>
{% endblock %}
", "gestion_publication.html.twig", "C:\\laragon\\www\\Voisins connecté web\\web\\templates\\gestion_publication.html.twig");
    }
}
