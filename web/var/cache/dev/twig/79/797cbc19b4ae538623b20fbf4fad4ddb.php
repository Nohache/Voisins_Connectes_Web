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

/* demande_publication.html.twig */
class __TwigTemplate_e96c1d4e4308721877f953b885c92491 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demande_publication.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demande_publication.html.twig"));

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

        yield "Validation des demandes de publication";
        
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

  <section class=\"dashboard-hero\">
    <div class=\"dashboard-hero-text\">
      <h1 class=\"hero-title\">Demandes de <span>publication</span></h1>
      <p class=\"hero-desc\">Validez ou refusez les demandes de publication soumises par les membres.</p>
    </div>
  </section>

  ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", ["success"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            yield "    <div class=\"flash-success\" style=\"max-width:1100px; margin: 0 auto 1rem; padding: 0.8rem 1.5rem; background: #4CAF50; color: white; border-radius: 1rem; font-weight: 500;\">✅ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "
  ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", ["error"], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            yield "    <div class=\"flash-error\" style=\"max-width:1100px; margin: 0 auto 1rem; padding: 0.8rem 1.5rem; background: #f44336; color: white; border-radius: 1rem; font-weight: 500;\">❌ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "
  <section class=\"publications-section\">
    <h2 class=\"section-title\">Demandes en attente</h2>
    <p class=\"section-sub\">Liste des publications en attente de validation.</p>

    <div class=\"publications-wrapper\">
      <table class=\"publications-table\">
        <thead>
          <tr>
            <th>Titre</th>
            <th>Description</th>
            <th>Type</th>
            <th>Prix proposé</th>
            <th>Adresse</th>
            <th>Catégorie</th>
            <th>Membre demandeur</th>
            <th>Date publication</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 43, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 44
            yield "            ";
            $context["membre"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["membresIndex"] ?? null), (((CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idMembre_demandeur", [], "any", true, true, false, 44) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idMembre_demandeur", [], "any", false, false, false, 44)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idMembre_demandeur", [], "any", false, false, false, 44)) : (0)), [], "array", true, true, false, 44) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["membresIndex"]) || array_key_exists("membresIndex", $context) ? $context["membresIndex"] : (function () { throw new RuntimeError('Variable "membresIndex" does not exist.', 44, $this->source); })()), (((CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idMembre_demandeur", [], "any", true, true, false, 44) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idMembre_demandeur", [], "any", false, false, false, 44)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idMembre_demandeur", [], "any", false, false, false, 44)) : (0)), [], "array", false, false, false, 44)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["membresIndex"]) || array_key_exists("membresIndex", $context) ? $context["membresIndex"] : (function () { throw new RuntimeError('Variable "membresIndex" does not exist.', 44, $this->source); })()), (((CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idMembre_demandeur", [], "any", true, true, false, 44) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idMembre_demandeur", [], "any", false, false, false, 44)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idMembre_demandeur", [], "any", false, false, false, 44)) : (0)), [], "array", false, false, false, 44)) : (null));
            // line 45
            yield "            ";
            $context["categorie"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["categoriesIndex"] ?? null), (((CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idCategorie", [], "any", true, true, false, 45) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idCategorie", [], "any", false, false, false, 45)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idCategorie", [], "any", false, false, false, 45)) : (0)), [], "array", true, true, false, 45) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["categoriesIndex"]) || array_key_exists("categoriesIndex", $context) ? $context["categoriesIndex"] : (function () { throw new RuntimeError('Variable "categoriesIndex" does not exist.', 45, $this->source); })()), (((CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idCategorie", [], "any", true, true, false, 45) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idCategorie", [], "any", false, false, false, 45)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idCategorie", [], "any", false, false, false, 45)) : (0)), [], "array", false, false, false, 45)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["categoriesIndex"]) || array_key_exists("categoriesIndex", $context) ? $context["categoriesIndex"] : (function () { throw new RuntimeError('Variable "categoriesIndex" does not exist.', 45, $this->source); })()), (((CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idCategorie", [], "any", true, true, false, 45) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idCategorie", [], "any", false, false, false, 45)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idCategorie", [], "any", false, false, false, 45)) : (0)), [], "array", false, false, false, 45)) : (null));
            // line 46
            yield "            <tr>
              <td style=\"font-weight: 500;\">";
            // line 47
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["service"], "titre", [], "any", true, true, false, 47) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["service"], "titre", [], "any", false, false, false, 47)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "titre", [], "any", false, false, false, 47), "html", null, true)) : ("—"));
            yield "</td>
              <td style=\"max-width: 250px; white-space: normal; word-wrap: break-word;\">";
            // line 48
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["service"], "description", [], "any", true, true, false, 48) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, false, 48)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, false, 48), "html", null, true)) : ("—"));
            yield "</td>
              <td>
                ";
            // line 50
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["service"], "typeService", [], "any", false, false, false, 50) == "public")) {
                // line 51
                yield "                  <span style=\"display: inline-block; padding: 0.25rem 0.75rem; border-radius: 2rem; font-size: 0.75rem; background: #e3f2fd; color: #1976d2;\">Public</span>
                ";
            } else {
                // line 53
                yield "                  <span style=\"display: inline-block; padding: 0.25rem 0.75rem; border-radius: 2rem; font-size: 0.75rem; background: #f3e5f5; color: #7b1fa2;\">Privé</span>
                ";
            }
            // line 55
            yield "              </td>
              <td style=\"text-align: right;\">
                ";
            // line 57
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["service"], "prixPropose", [], "any", true, true, false, 57) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["service"], "prixPropose", [], "any", false, false, false, 57)))) {
                // line 58
                yield "                  ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "prixPropose", [], "any", false, false, false, 58), 2, ",", " "), "html", null, true);
                yield " €
                ";
            } else {
                // line 60
                yield "                  —
                ";
            }
            // line 62
            yield "              </td>
              <td>";
            // line 63
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["service"], "adresseExecution", [], "any", true, true, false, 63) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["service"], "adresseExecution", [], "any", false, false, false, 63)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "adresseExecution", [], "any", false, false, false, 63), "html", null, true)) : ("—"));
            yield "</td>
              <td>";
            // line 64
            yield (((($tmp = (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 64, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 64, $this->source); })()), "libelle", [], "any", false, false, false, 64), "html", null, true)) : ("—"));
            yield "</td>
              <td>";
            // line 65
            yield (((($tmp = (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 65, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 65, $this->source); })()), "prenom", [], "any", false, false, false, 65) . " ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 65, $this->source); })()), "nom", [], "any", false, false, false, 65)), "html", null, true)) : ("—"));
            yield "</td>
              <td>";
            // line 66
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["service"], "datePublication", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "datePublication", [], "any", false, false, false, 66), "d/m/Y"), "html", null, true)) : ("—"));
            yield "</td>
              <td style=\"white-space: nowrap;\">
                <a href=\"";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_valider", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idService", [], "any", false, false, false, 68)]), "html", null, true);
            yield "\"
                   style=\"display: inline-block; padding: 0.4rem 0.8rem; margin: 0 0.2rem; background: #4CAF50; color: white; border-radius: 0.5rem; text-decoration: none;\"
                   onclick=\"return confirm('Valider cette publication ?')\">✅ Valider</a>
                <a href=\"";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_refuser", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idService", [], "any", false, false, false, 71)]), "html", null, true);
            yield "\"
                   style=\"display: inline-block; padding: 0.4rem 0.8rem; margin: 0 0.2rem; background: #f44336; color: white; border-radius: 0.5rem; text-decoration: none;\"
                   onclick=\"return confirm('Refuser cette publication ?')\">❌ Refuser</a>
              </td>
            </tr>
          ";
            $context['_iterated'] = true;
        }
        // line 76
        if (!$context['_iterated']) {
            // line 77
            yield "            <tr>
              <td colspan=\"9\" style=\"text-align: center; padding: 2rem; color: #888;\">
                Aucune demande de publication en attente.
              </td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['service'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
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
        return "demande_publication.html.twig";
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
        return array (  261 => 83,  250 => 77,  248 => 76,  238 => 71,  232 => 68,  227 => 66,  223 => 65,  219 => 64,  215 => 63,  212 => 62,  208 => 60,  202 => 58,  200 => 57,  196 => 55,  192 => 53,  188 => 51,  186 => 50,  181 => 48,  177 => 47,  174 => 46,  171 => 45,  168 => 44,  163 => 43,  140 => 22,  131 => 20,  127 => 19,  124 => 18,  115 => 16,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Validation des demandes de publication{% endblock %}

{% block body %}
<div class=\"home\">

  <section class=\"dashboard-hero\">
    <div class=\"dashboard-hero-text\">
      <h1 class=\"hero-title\">Demandes de <span>publication</span></h1>
      <p class=\"hero-desc\">Validez ou refusez les demandes de publication soumises par les membres.</p>
    </div>
  </section>

  {% for message in app.flashes('success') %}
    <div class=\"flash-success\" style=\"max-width:1100px; margin: 0 auto 1rem; padding: 0.8rem 1.5rem; background: #4CAF50; color: white; border-radius: 1rem; font-weight: 500;\">✅ {{ message }}</div>
  {% endfor %}

  {% for message in app.flashes('error') %}
    <div class=\"flash-error\" style=\"max-width:1100px; margin: 0 auto 1rem; padding: 0.8rem 1.5rem; background: #f44336; color: white; border-radius: 1rem; font-weight: 500;\">❌ {{ message }}</div>
  {% endfor %}

  <section class=\"publications-section\">
    <h2 class=\"section-title\">Demandes en attente</h2>
    <p class=\"section-sub\">Liste des publications en attente de validation.</p>

    <div class=\"publications-wrapper\">
      <table class=\"publications-table\">
        <thead>
          <tr>
            <th>Titre</th>
            <th>Description</th>
            <th>Type</th>
            <th>Prix proposé</th>
            <th>Adresse</th>
            <th>Catégorie</th>
            <th>Membre demandeur</th>
            <th>Date publication</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          {% for service in services %}
            {% set membre    = membresIndex[service.idMembre_demandeur ?? 0] ?? null %}
            {% set categorie = categoriesIndex[service.idCategorie ?? 0] ?? null %}
            <tr>
              <td style=\"font-weight: 500;\">{{ service.titre ?? '—' }}</td>
              <td style=\"max-width: 250px; white-space: normal; word-wrap: break-word;\">{{ service.description ?? '—' }}</td>
              <td>
                {% if service.typeService == 'public' %}
                  <span style=\"display: inline-block; padding: 0.25rem 0.75rem; border-radius: 2rem; font-size: 0.75rem; background: #e3f2fd; color: #1976d2;\">Public</span>
                {% else %}
                  <span style=\"display: inline-block; padding: 0.25rem 0.75rem; border-radius: 2rem; font-size: 0.75rem; background: #f3e5f5; color: #7b1fa2;\">Privé</span>
                {% endif %}
              </td>
              <td style=\"text-align: right;\">
                {% if service.prixPropose is defined and service.prixPropose is not null %}
                  {{ service.prixPropose|number_format(2, ',', ' ') }} €
                {% else %}
                  —
                {% endif %}
              </td>
              <td>{{ service.adresseExecution ?? '—' }}</td>
              <td>{{ categorie ? categorie.libelle : '—' }}</td>
              <td>{{ membre ? membre.prenom ~ ' ' ~ membre.nom : '—' }}</td>
              <td>{{ service.datePublication ? service.datePublication|date('d/m/Y') : '—' }}</td>
              <td style=\"white-space: nowrap;\">
                <a href=\"{{ path('publication_valider', {id: service.idService}) }}\"
                   style=\"display: inline-block; padding: 0.4rem 0.8rem; margin: 0 0.2rem; background: #4CAF50; color: white; border-radius: 0.5rem; text-decoration: none;\"
                   onclick=\"return confirm('Valider cette publication ?')\">✅ Valider</a>
                <a href=\"{{ path('publication_refuser', {id: service.idService}) }}\"
                   style=\"display: inline-block; padding: 0.4rem 0.8rem; margin: 0 0.2rem; background: #f44336; color: white; border-radius: 0.5rem; text-decoration: none;\"
                   onclick=\"return confirm('Refuser cette publication ?')\">❌ Refuser</a>
              </td>
            </tr>
          {% else %}
            <tr>
              <td colspan=\"9\" style=\"text-align: center; padding: 2rem; color: #888;\">
                Aucune demande de publication en attente.
              </td>
            </tr>
          {% endfor %}
        </tbody>
      </table>
    </div>
  </section>

</div>
{% endblock %}
", "demande_publication.html.twig", "C:\\laragon\\www\\Voisins connecté web\\web\\templates\\demande_publication.html.twig");
    }
}
