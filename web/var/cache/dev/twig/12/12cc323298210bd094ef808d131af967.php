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
          ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 42, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 43
            yield "            ";
            $context["membre"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["membresIndex"] ?? null), (((CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idMembre_demandeur", [], "any", true, true, false, 43) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idMembre_demandeur", [], "any", false, false, false, 43)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idMembre_demandeur", [], "any", false, false, false, 43)) : (0)), [], "array", true, true, false, 43) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["membresIndex"]) || array_key_exists("membresIndex", $context) ? $context["membresIndex"] : (function () { throw new RuntimeError('Variable "membresIndex" does not exist.', 43, $this->source); })()), (((CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idMembre_demandeur", [], "any", true, true, false, 43) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idMembre_demandeur", [], "any", false, false, false, 43)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idMembre_demandeur", [], "any", false, false, false, 43)) : (0)), [], "array", false, false, false, 43)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["membresIndex"]) || array_key_exists("membresIndex", $context) ? $context["membresIndex"] : (function () { throw new RuntimeError('Variable "membresIndex" does not exist.', 43, $this->source); })()), (((CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idMembre_demandeur", [], "any", true, true, false, 43) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idMembre_demandeur", [], "any", false, false, false, 43)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idMembre_demandeur", [], "any", false, false, false, 43)) : (0)), [], "array", false, false, false, 43)) : (null));
            // line 44
            yield "            ";
            $context["categorie"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["categoriesIndex"] ?? null), (((CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idCategorie", [], "any", true, true, false, 44) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idCategorie", [], "any", false, false, false, 44)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idCategorie", [], "any", false, false, false, 44)) : (0)), [], "array", true, true, false, 44) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["categoriesIndex"]) || array_key_exists("categoriesIndex", $context) ? $context["categoriesIndex"] : (function () { throw new RuntimeError('Variable "categoriesIndex" does not exist.', 44, $this->source); })()), (((CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idCategorie", [], "any", true, true, false, 44) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idCategorie", [], "any", false, false, false, 44)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idCategorie", [], "any", false, false, false, 44)) : (0)), [], "array", false, false, false, 44)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["categoriesIndex"]) || array_key_exists("categoriesIndex", $context) ? $context["categoriesIndex"] : (function () { throw new RuntimeError('Variable "categoriesIndex" does not exist.', 44, $this->source); })()), (((CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idCategorie", [], "any", true, true, false, 44) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idCategorie", [], "any", false, false, false, 44)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idCategorie", [], "any", false, false, false, 44)) : (0)), [], "array", false, false, false, 44)) : (null));
            // line 45
            yield "            <tr>
              <td>";
            // line 46
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["service"], "titre", [], "any", true, true, false, 46) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["service"], "titre", [], "any", false, false, false, 46)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "titre", [], "any", false, false, false, 46), "html", null, true)) : ("—"));
            yield "</td>
              <td class=\"td-desc\">";
            // line 47
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["service"], "description", [], "any", true, true, false, 47) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, false, 47)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, false, 47), "html", null, true)) : ("—"));
            yield "</td>
              <td>
                ";
            // line 49
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["service"], "typeService", [], "any", false, false, false, 49) == "public")) {
                // line 50
                yield "                  <span class=\"badge badge-offre\">Public</span>
                ";
            } else {
                // line 52
                yield "                  <span class=\"badge badge-demande\">Privé</span>
                ";
            }
            // line 54
            yield "              </td>
              <td>
                ";
            // line 56
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["service"], "etatService", [], "any", false, false, false, 56) == "publiee")) {
                // line 57
                yield "                  <span class=\"badge badge-active\">Publiée</span>
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 58
$context["service"], "etatService", [], "any", false, false, false, 58) == "en_cours")) {
                // line 59
                yield "                  <span class=\"badge badge-attente\">En cours</span>
                ";
            } else {
                // line 61
                yield "                  <span class=\"badge badge-cloture\">";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["service"], "etatService", [], "any", true, true, false, 61) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["service"], "etatService", [], "any", false, false, false, 61)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "etatService", [], "any", false, false, false, 61), "html", null, true)) : ("—"));
                yield "</span>
                ";
            }
            // line 63
            yield "              </td>
              <td>";
            // line 64
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["service"], "datePublication", [], "any", true, true, false, 64) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["service"], "datePublication", [], "any", false, false, false, 64)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "datePublication", [], "any", false, false, false, 64), "html", null, true)) : ("—"));
            yield "</td>
              <td>";
            // line 65
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["service"], "dateCloture", [], "any", true, true, false, 65) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["service"], "dateCloture", [], "any", false, false, false, 65)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "dateCloture", [], "any", false, false, false, 65), "html", null, true)) : ("—"));
            yield "</td>
              <td>
                ";
            // line 67
            if (CoreExtension::getAttribute($this->env, $this->source, $context["service"], "prixPropose", [], "any", true, true, false, 67)) {
                // line 68
                yield "                  ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "prixPropose", [], "any", false, false, false, 68), 2, ",", " "), "html", null, true);
                yield " €
                ";
            } else {
                // line 70
                yield "                  —
                ";
            }
            // line 72
            yield "              </td>
              <td>";
            // line 73
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["service"], "adresseExecution", [], "any", true, true, false, 73) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["service"], "adresseExecution", [], "any", false, false, false, 73)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "adresseExecution", [], "any", false, false, false, 73), "html", null, true)) : ("—"));
            yield "</td>
              <td>";
            // line 74
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["categorie"] ?? null), "nomCategorie", [], "any", true, true, false, 74) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 74, $this->source); })()), "nomCategorie", [], "any", false, false, false, 74)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 74, $this->source); })()), "nomCategorie", [], "any", false, false, false, 74), "html", null, true)) : ("—"));
            yield "</td>
              <td>";
            // line 75
            yield (((($tmp = (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 75, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 75, $this->source); })()), "prenom", [], "any", false, false, false, 75) . " ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 75, $this->source); })()), "nom", [], "any", false, false, false, 75)), "html", null, true)) : ("—"));
            yield "</td>
              <td class=\"td-actions\">
                <a href=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_modifier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idService", [], "any", false, false, false, 77)]), "html", null, true);
            yield "\" class=\"btn-table btn-modifier\">✏️</a>
                <a href=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idService", [], "any", false, false, false, 78)]), "html", null, true);
            yield "\"
                   class=\"btn-table btn-supprimer\"
                   onclick=\"return confirm('Supprimer cette publication ?')\">🗑️</a>
              </td>
            </tr>
          ";
            $context['_iterated'] = true;
        }
        // line 83
        if (!$context['_iterated']) {
            // line 84
            yield "            <tr>
              <td colspan=\"11\" style=\"text-align:center; color: var(--gris); padding: 2rem;\">
                Aucune publication pour le moment.
              </td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['service'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        yield "        </tbody>
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
        return array (  271 => 90,  260 => 84,  258 => 83,  248 => 78,  244 => 77,  239 => 75,  235 => 74,  231 => 73,  228 => 72,  224 => 70,  218 => 68,  216 => 67,  211 => 65,  207 => 64,  204 => 63,  198 => 61,  194 => 59,  192 => 58,  189 => 57,  187 => 56,  183 => 54,  179 => 52,  175 => 50,  173 => 49,  168 => 47,  164 => 46,  161 => 45,  158 => 44,  155 => 43,  150 => 42,  125 => 19,  116 => 17,  112 => 16,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
          {% for service in services %}
            {% set membre    = membresIndex[service.idMembre_demandeur ?? 0]  ?? null %}
            {% set categorie = categoriesIndex[service.idCategorie ?? 0]      ?? null %}
            <tr>
              <td>{{ service.titre ?? '—' }}</td>
              <td class=\"td-desc\">{{ service.description ?? '—' }}</td>
              <td>
                {% if service.typeService == 'public' %}
                  <span class=\"badge badge-offre\">Public</span>
                {% else %}
                  <span class=\"badge badge-demande\">Privé</span>
                {% endif %}
              </td>
              <td>
                {% if service.etatService == 'publiee' %}
                  <span class=\"badge badge-active\">Publiée</span>
                {% elseif service.etatService == 'en_cours' %}
                  <span class=\"badge badge-attente\">En cours</span>
                {% else %}
                  <span class=\"badge badge-cloture\">{{ service.etatService ?? '—' }}</span>
                {% endif %}
              </td>
              <td>{{ service.datePublication ?? '—' }}</td>
              <td>{{ service.dateCloture ?? '—' }}</td>
              <td>
                {% if service.prixPropose is defined %}
                  {{ service.prixPropose|number_format(2, ',', ' ') }} €
                {% else %}
                  —
                {% endif %}
              </td>
              <td>{{ service.adresseExecution ?? '—' }}</td>
              <td>{{ categorie.nomCategorie ?? '—' }}</td>
              <td>{{ membre ? membre.prenom ~ ' ' ~ membre.nom : '—' }}</td>
              <td class=\"td-actions\">
                <a href=\"{{ path('publication_modifier', {id: service.idService}) }}\" class=\"btn-table btn-modifier\">✏️</a>
                <a href=\"{{ path('publication_supprimer', {id: service.idService}) }}\"
                   class=\"btn-table btn-supprimer\"
                   onclick=\"return confirm('Supprimer cette publication ?')\">🗑️</a>
              </td>
            </tr>
          {% else %}
            <tr>
              <td colspan=\"11\" style=\"text-align:center; color: var(--gris); padding: 2rem;\">
                Aucune publication pour le moment.
              </td>
            </tr>
          {% endfor %}
        </tbody>
      </table>
    </div>
  </section>

</div>
{% endblock %}", "gestion_publication.html.twig", "C:\\laragon\\www\\Voisins connecté web\\web\\templates\\gestion_publication.html.twig");
    }
}
