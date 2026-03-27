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

/* modif_publication.html.twig */
class __TwigTemplate_46556ed5e0b8dd072671c1e5ceb502ee extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modif_publication.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modif_publication.html.twig"));

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

        yield "Modifier la publication";
        
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
        yield "
";
        // line 8
        $context["publications"] = [1 => ["titre" => "Taille de haies", "description" => "Besoin d'un coup de main pour tailler mes haies de 10m.", "typeService" => "Demande", "etatService" => "Active", "datePublication" => "01/03/2025", "dateCloture" => "30/03/2025", "prixPropose" => "25,00 €", "adresseExecution" => "Lyon 3e", "categorie" => "Jardinage", "membre" => "M. Dupont"], 2 => ["titre" => "Prêt perceuse", "description" => "Je prête ma perceuse pour le week-end.", "typeService" => "Offre", "etatService" => "Active", "datePublication" => "05/03/2025", "dateCloture" => "15/03/2025", "prixPropose" => "0,00 €", "adresseExecution" => "Lyon 6e", "categorie" => "Outillage", "membre" => "Mme Martin"], 3 => ["titre" => "Garde de chat", "description" => "Cherche quelqu'un pour garder mon chat pendant 1 semaine.", "typeService" => "Demande", "etatService" => "Clôturée", "datePublication" => "10/02/2025", "dateCloture" => "17/02/2025", "prixPropose" => "50,00 €", "adresseExecution" => "Lyon 2e", "categorie" => "Animaux", "membre" => "M. Bernard"], 4 => ["titre" => "Cours de guitare", "description" => "Propose des cours de guitare pour débutants, 1h par semaine.", "typeService" => "Offre", "etatService" => "En attente", "datePublication" => "12/03/2025", "dateCloture" => "—", "prixPropose" => "15,00 €", "adresseExecution" => "Lyon 1er", "categorie" => "Cours", "membre" => "Mme Leroy"], 5 => ["titre" => "Transport de meubles", "description" => "Besoin d'aide pour déménager un canapé et une armoire.", "typeService" => "Demande", "etatService" => "Active", "datePublication" => "14/03/2025", "dateCloture" => "21/03/2025", "prixPropose" => "40,00 €", "adresseExecution" => "Villeurbanne", "categorie" => "Déménagement", "membre" => "M. Petit"]];
        // line 15
        yield "
";
        // line 16
        $context["pub"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["publications"]) || array_key_exists("publications", $context) ? $context["publications"] : (function () { throw new RuntimeError('Variable "publications" does not exist.', 16, $this->source); })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 16, $this->source); })()), [], "array", false, false, false, 16);
        // line 17
        yield "
<div class=\"home\">

  <!-- HERO -->
  <section class=\"dashboard-hero\">
    <div class=\"dashboard-hero-text\">
      <h1 class=\"hero-title\">Modifier la <span>publication</span></h1>
      <p class=\"hero-desc\">Modifiez les informations de cette publication.</p>
    </div>
  </section>

  <section class=\"publications-section\">

    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "flashes", ["success"], "method", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 31
            yield "      <div class=\"flash-success\" style=\"max-width:700px; margin: 0 auto 1rem; padding: 0.8rem 1.5rem; background: var(--vert); color: var(--vert-tres-fonce); border-radius: 1rem; font-weight: 500;\">✅ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "
    <form method=\"POST\" action=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_modifier", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 34, $this->source); })())]), "html", null, true);
        yield "\">
      <div class=\"forfaits-wrapper\" style=\"max-width: 700px; margin: 0 auto;\">
        <table class=\"forfaits-table\">
          <thead>
            <tr>
              <th class=\"th-label\">Champ</th>
              <th class=\"th-plan\">Valeur</th>
            </tr>
          </thead>
          <tbody>

            <tr class=\"category\"><td colspan=\"2\">📋 Informations générales</td></tr>

            <tr>
              <td>Titre</td>
              <td><input type=\"text\" name=\"titre\" value=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pub"]) || array_key_exists("pub", $context) ? $context["pub"] : (function () { throw new RuntimeError('Variable "pub" does not exist.', 49, $this->source); })()), "titre", [], "any", false, false, false, 49), "html", null, true);
        yield "\" class=\"form-input\"></td>
            </tr>
            <tr>
              <td>Description</td>
              <td><textarea name=\"description\" class=\"form-textarea\" rows=\"3\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pub"]) || array_key_exists("pub", $context) ? $context["pub"] : (function () { throw new RuntimeError('Variable "pub" does not exist.', 53, $this->source); })()), "description", [], "any", false, false, false, 53), "html", null, true);
        yield "</textarea></td>
            </tr>
            <tr>
              <td>Type de service</td>
              <td>
                <select name=\"typeService\" class=\"form-input\">
                  <option value=\"Demande\" ";
        // line 59
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pub"]) || array_key_exists("pub", $context) ? $context["pub"] : (function () { throw new RuntimeError('Variable "pub" does not exist.', 59, $this->source); })()), "typeService", [], "any", false, false, false, 59) == "Demande")) {
            yield "selected";
        }
        yield ">Demande</option>
                  <option value=\"Offre\"   ";
        // line 60
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pub"]) || array_key_exists("pub", $context) ? $context["pub"] : (function () { throw new RuntimeError('Variable "pub" does not exist.', 60, $this->source); })()), "typeService", [], "any", false, false, false, 60) == "Offre")) {
            yield "selected";
        }
        yield ">Offre</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>État</td>
              <td>
                <select name=\"etatService\" class=\"form-input\">
                  <option value=\"Active\"     ";
        // line 68
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pub"]) || array_key_exists("pub", $context) ? $context["pub"] : (function () { throw new RuntimeError('Variable "pub" does not exist.', 68, $this->source); })()), "etatService", [], "any", false, false, false, 68) == "Active")) {
            yield "selected";
        }
        yield ">Active</option>
                  <option value=\"En attente\" ";
        // line 69
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pub"]) || array_key_exists("pub", $context) ? $context["pub"] : (function () { throw new RuntimeError('Variable "pub" does not exist.', 69, $this->source); })()), "etatService", [], "any", false, false, false, 69) == "En attente")) {
            yield "selected";
        }
        yield ">En attente</option>
                  <option value=\"Clôturée\"   ";
        // line 70
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pub"]) || array_key_exists("pub", $context) ? $context["pub"] : (function () { throw new RuntimeError('Variable "pub" does not exist.', 70, $this->source); })()), "etatService", [], "any", false, false, false, 70) == "Clôturée")) {
            yield "selected";
        }
        yield ">Clôturée</option>
                </select>
              </td>
            </tr>

            <tr class=\"category\"><td colspan=\"2\">📅 Dates & Prix</td></tr>

            <tr>
              <td>Date de publication</td>
              <td><input type=\"text\" name=\"datePublication\" value=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pub"]) || array_key_exists("pub", $context) ? $context["pub"] : (function () { throw new RuntimeError('Variable "pub" does not exist.', 79, $this->source); })()), "datePublication", [], "any", false, false, false, 79), "html", null, true);
        yield "\" class=\"form-input\"></td>
            </tr>
            <tr>
              <td>Date de clôture</td>
              <td><input type=\"text\" name=\"dateCloture\" value=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pub"]) || array_key_exists("pub", $context) ? $context["pub"] : (function () { throw new RuntimeError('Variable "pub" does not exist.', 83, $this->source); })()), "dateCloture", [], "any", false, false, false, 83), "html", null, true);
        yield "\" class=\"form-input\"></td>
            </tr>
            <tr>
              <td>Prix proposé</td>
              <td><input type=\"text\" name=\"prixPropose\" value=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pub"]) || array_key_exists("pub", $context) ? $context["pub"] : (function () { throw new RuntimeError('Variable "pub" does not exist.', 87, $this->source); })()), "prixPropose", [], "any", false, false, false, 87), "html", null, true);
        yield "\" class=\"form-input\"></td>
            </tr>

            <tr class=\"category\"><td colspan=\"2\">📍 Localisation & Catégorie</td></tr>

            <tr>
              <td>Adresse d'exécution</td>
              <td><input type=\"text\" name=\"adresseExecution\" value=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pub"]) || array_key_exists("pub", $context) ? $context["pub"] : (function () { throw new RuntimeError('Variable "pub" does not exist.', 94, $this->source); })()), "adresseExecution", [], "any", false, false, false, 94), "html", null, true);
        yield "\" class=\"form-input\"></td>
            </tr>
            <tr>
              <td>Catégorie</td>
              <td><input type=\"text\" name=\"categorie\" value=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pub"]) || array_key_exists("pub", $context) ? $context["pub"] : (function () { throw new RuntimeError('Variable "pub" does not exist.', 98, $this->source); })()), "categorie", [], "any", false, false, false, 98), "html", null, true);
        yield "\" class=\"form-input\"></td>
            </tr>
            <tr>
              <td>Membre</td>
              <td><input type=\"text\" name=\"membre\" value=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pub"]) || array_key_exists("pub", $context) ? $context["pub"] : (function () { throw new RuntimeError('Variable "pub" does not exist.', 102, $this->source); })()), "membre", [], "any", false, false, false, 102), "html", null, true);
        yield "\" class=\"form-input\"></td>
            </tr>

            <!-- Boutons -->
            <tr class=\"category\"><td colspan=\"2\"></td></tr>
            <tr>
                <td style=\"text-align:left;\">
                    <a href=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion_publication");
        yield "\" class=\"btn-table btn-annuler\">Annuler</a>
                </td>
                <td style=\"text-align:center;\">
                    <button type=\"submit\" class=\"btn-table btn-modifier\">💾 Enregistrer</button>
                </td>
            </tr>

          </tbody>
        </table>
      </div>
    </form>
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
        return "modif_publication.html.twig";
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
        return array (  268 => 109,  258 => 102,  251 => 98,  244 => 94,  234 => 87,  227 => 83,  220 => 79,  206 => 70,  200 => 69,  194 => 68,  181 => 60,  175 => 59,  166 => 53,  159 => 49,  141 => 34,  138 => 33,  129 => 31,  125 => 30,  110 => 17,  108 => 16,  105 => 15,  103 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Modifier la publication{% endblock %}

{% block body %}

{# Données fixes — à remplacer par des variables Doctrine plus tard #}
{% set publications = {
  1: { titre: 'Taille de haies',      description: \"Besoin d'un coup de main pour tailler mes haies de 10m.\", typeService: 'Demande', etatService: 'Active',     datePublication: '01/03/2025', dateCloture: '30/03/2025', prixPropose: '25,00 €', adresseExecution: 'Lyon 3e',      categorie: 'Jardinage',    membre: 'M. Dupont'  },
  2: { titre: 'Prêt perceuse',        description: 'Je prête ma perceuse pour le week-end.',                  typeService: 'Offre',   etatService: 'Active',     datePublication: '05/03/2025', dateCloture: '15/03/2025', prixPropose: '0,00 €',  adresseExecution: 'Lyon 6e',      categorie: 'Outillage',    membre: 'Mme Martin' },
  3: { titre: 'Garde de chat',        description: \"Cherche quelqu'un pour garder mon chat pendant 1 semaine.\", typeService: 'Demande', etatService: 'Clôturée', datePublication: '10/02/2025', dateCloture: '17/02/2025', prixPropose: '50,00 €', adresseExecution: 'Lyon 2e',      categorie: 'Animaux',      membre: 'M. Bernard' },
  4: { titre: 'Cours de guitare',     description: 'Propose des cours de guitare pour débutants, 1h par semaine.', typeService: 'Offre', etatService: 'En attente', datePublication: '12/03/2025', dateCloture: '—',         prixPropose: '15,00 €', adresseExecution: 'Lyon 1er',     categorie: 'Cours',        membre: 'Mme Leroy'  },
  5: { titre: 'Transport de meubles', description: \"Besoin d'aide pour déménager un canapé et une armoire.\",  typeService: 'Demande', etatService: 'Active',     datePublication: '14/03/2025', dateCloture: '21/03/2025', prixPropose: '40,00 €', adresseExecution: 'Villeurbanne', categorie: 'Déménagement', membre: 'M. Petit'   }
} %}

{% set pub = publications[id] %}

<div class=\"home\">

  <!-- HERO -->
  <section class=\"dashboard-hero\">
    <div class=\"dashboard-hero-text\">
      <h1 class=\"hero-title\">Modifier la <span>publication</span></h1>
      <p class=\"hero-desc\">Modifiez les informations de cette publication.</p>
    </div>
  </section>

  <section class=\"publications-section\">

    {% for message in app.flashes('success') %}
      <div class=\"flash-success\" style=\"max-width:700px; margin: 0 auto 1rem; padding: 0.8rem 1.5rem; background: var(--vert); color: var(--vert-tres-fonce); border-radius: 1rem; font-weight: 500;\">✅ {{ message }}</div>
    {% endfor %}

    <form method=\"POST\" action=\"{{ path('publication_modifier', {id: id}) }}\">
      <div class=\"forfaits-wrapper\" style=\"max-width: 700px; margin: 0 auto;\">
        <table class=\"forfaits-table\">
          <thead>
            <tr>
              <th class=\"th-label\">Champ</th>
              <th class=\"th-plan\">Valeur</th>
            </tr>
          </thead>
          <tbody>

            <tr class=\"category\"><td colspan=\"2\">📋 Informations générales</td></tr>

            <tr>
              <td>Titre</td>
              <td><input type=\"text\" name=\"titre\" value=\"{{ pub.titre }}\" class=\"form-input\"></td>
            </tr>
            <tr>
              <td>Description</td>
              <td><textarea name=\"description\" class=\"form-textarea\" rows=\"3\">{{ pub.description }}</textarea></td>
            </tr>
            <tr>
              <td>Type de service</td>
              <td>
                <select name=\"typeService\" class=\"form-input\">
                  <option value=\"Demande\" {% if pub.typeService == 'Demande' %}selected{% endif %}>Demande</option>
                  <option value=\"Offre\"   {% if pub.typeService == 'Offre'   %}selected{% endif %}>Offre</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>État</td>
              <td>
                <select name=\"etatService\" class=\"form-input\">
                  <option value=\"Active\"     {% if pub.etatService == 'Active'     %}selected{% endif %}>Active</option>
                  <option value=\"En attente\" {% if pub.etatService == 'En attente' %}selected{% endif %}>En attente</option>
                  <option value=\"Clôturée\"   {% if pub.etatService == 'Clôturée'   %}selected{% endif %}>Clôturée</option>
                </select>
              </td>
            </tr>

            <tr class=\"category\"><td colspan=\"2\">📅 Dates & Prix</td></tr>

            <tr>
              <td>Date de publication</td>
              <td><input type=\"text\" name=\"datePublication\" value=\"{{ pub.datePublication }}\" class=\"form-input\"></td>
            </tr>
            <tr>
              <td>Date de clôture</td>
              <td><input type=\"text\" name=\"dateCloture\" value=\"{{ pub.dateCloture }}\" class=\"form-input\"></td>
            </tr>
            <tr>
              <td>Prix proposé</td>
              <td><input type=\"text\" name=\"prixPropose\" value=\"{{ pub.prixPropose }}\" class=\"form-input\"></td>
            </tr>

            <tr class=\"category\"><td colspan=\"2\">📍 Localisation & Catégorie</td></tr>

            <tr>
              <td>Adresse d'exécution</td>
              <td><input type=\"text\" name=\"adresseExecution\" value=\"{{ pub.adresseExecution }}\" class=\"form-input\"></td>
            </tr>
            <tr>
              <td>Catégorie</td>
              <td><input type=\"text\" name=\"categorie\" value=\"{{ pub.categorie }}\" class=\"form-input\"></td>
            </tr>
            <tr>
              <td>Membre</td>
              <td><input type=\"text\" name=\"membre\" value=\"{{ pub.membre }}\" class=\"form-input\"></td>
            </tr>

            <!-- Boutons -->
            <tr class=\"category\"><td colspan=\"2\"></td></tr>
            <tr>
                <td style=\"text-align:left;\">
                    <a href=\"{{ path('gestion_publication') }}\" class=\"btn-table btn-annuler\">Annuler</a>
                </td>
                <td style=\"text-align:center;\">
                    <button type=\"submit\" class=\"btn-table btn-modifier\">💾 Enregistrer</button>
                </td>
            </tr>

          </tbody>
        </table>
      </div>
    </form>
  </section>

</div>
{% endblock %}
", "modif_publication.html.twig", "C:\\laragon\\www\\Voisins connecté web\\web\\templates\\modif_publication.html.twig");
    }
}
