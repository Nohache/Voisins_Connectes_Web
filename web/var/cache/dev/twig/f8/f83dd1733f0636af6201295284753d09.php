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

        yield "Modifier une publication";
        
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
<div class=\"home\">

    <!-- HERO -->
    <section class=\"dashboard-hero\">
        <div class=\"dashboard-hero-text\">
            <h1 class=\"hero-title\">Modifier la <span>publication</span></h1>
            <p class=\"hero-desc\">Ajustez les informations de cette publication.</p>
        </div>
    </section>

    <section class=\"publications-section\">

        <!-- FLASH MESSAGES -->
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "flashes", ["success"], "method", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 21
            yield "            <div class=\"flash-success\">✅ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "flashes", ["error"], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 25
            yield "            <div class=\"flash-error\">❌ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "
        <!-- FORMULAIRE -->
        <form method=\"POST\" action=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_modifier", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 29, $this->source); })())]), "html", null, true);
        yield "\">
            <div class=\"forfaits-wrapper\">

                <table class=\"forfaits-table\">
                    <thead>
                        <tr>
                            <th class=\"th-label\">Champ</th>
                            <th class=\"th-plan\">Valeur</th>
                        </tr>
                    </thead>

                    <tbody>

                        <!-- SECTION : Informations générales -->
                        <tr class=\"category\">
                            <td colspan=\"2\">📋 Informations générales</td>
                        </tr>

                        <tr>
                            <td>Titre</td>
                            <td>
                                <input type=\"text\" name=\"titre\" value=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 50, $this->source); })()), "titre", [], "any", false, false, false, 50), "html", null, true);
        yield "\" class=\"form-input\" required>
                            </td>
                        </tr>

                        <tr>
                            <td>Description</td>
                            <td>
                                <textarea name=\"description\" class=\"form-textarea\" rows=\"4\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 57, $this->source); })()), "description", [], "any", false, false, false, 57), "html", null, true);
        yield "</textarea>
                            </td>
                        </tr>

                        <tr>
                            <td>Type de service</td>
                            <td>
                                <select name=\"typeService\" class=\"form-input\">
                                    <option value=\"public\" ";
        // line 65
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 65, $this->source); })()), "typeService", [], "any", false, false, false, 65) == "public")) {
            yield "selected";
        }
        yield ">Public</option>
                                    <option value=\"prive\"  ";
        // line 66
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 66, $this->source); })()), "typeService", [], "any", false, false, false, 66) == "prive")) {
            yield "selected";
        }
        yield ">Privé</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>État</td>
                            <td>
                                <select name=\"etatService\" class=\"form-input\">
                                    <option value=\"publiee\"    ";
        // line 75
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 75, $this->source); })()), "etatService", [], "any", false, false, false, 75) == "publiee")) {
            yield "selected";
        }
        yield ">Publiée</option>
                                    <option value=\"en_cours\"   ";
        // line 76
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 76, $this->source); })()), "etatService", [], "any", false, false, false, 76) == "en_cours")) {
            yield "selected";
        }
        yield ">En cours</option>
                                    <option value=\"refusee\"    ";
        // line 77
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 77, $this->source); })()), "etatService", [], "any", false, false, false, 77) == "refusee")) {
            yield "selected";
        }
        yield ">Refusée</option>
                                    <option value=\"depubliee\"  ";
        // line 78
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 78, $this->source); })()), "etatService", [], "any", false, false, false, 78) == "depubliee")) {
            yield "selected";
        }
        yield ">Dépubliée</option>
                                </select>
                            </td>
                        </tr>

                        <!-- SECTION : Dates & Prix -->
                        <tr class=\"category\">
                            <td colspan=\"2\">📅 Dates & Prix</td>
                        </tr>

                        <tr>
                            <input type=\"date\" name=\"datePublication\" 
                                value=\"";
        // line 90
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 90, $this->source); })()), "datePublication", [], "any", false, false, false, 90)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 90, $this->source); })()), "datePublication", [], "any", false, false, false, 90), "Y-m-d"), "html", null, true)) : (""));
        yield "\" 
                                class=\"form-input\">
                        </tr>

                        <tr>
                            <td>Date de clôture</td>
                            <td>
                                <input type=\"date\" name=\"dateCloture\" value=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 97, $this->source); })()), "dateCloture", [], "any", false, false, false, 97), "html", null, true);
        yield "\" class=\"form-input\">
                            </td>
                        </tr>

                        <tr>
                            <td>Prix proposé</td>
                            <td>
                                <input type=\"number\" step=\"0.01\" min=\"0\" name=\"prixPropose\" value=\"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 104, $this->source); })()), "prixPropose", [], "any", false, false, false, 104), "html", null, true);
        yield "\" class=\"form-input\">
                            </td>
                        </tr>

                        <!-- SECTION : Localisation & Catégorie -->
                        <tr class=\"category\">
                            <td colspan=\"2\">📍 Localisation & Catégorie</td>
                        </tr>

                        <tr>
                            <td>Adresse d'exécution</td>
                            <td>
                                <input type=\"text\" name=\"adresseExecution\" value=\"";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 116, $this->source); })()), "adresseExecution", [], "any", false, false, false, 116), "html", null, true);
        yield "\" class=\"form-input\">
                            </td>
                        </tr>

                        <tr>
                            <td>Catégorie</td>
                            <td>
                                <select name=\"idCategorie\" class=\"form-input\">
                                    <option value=\"\">-- Sélectionner une catégorie --</option>
                                    ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 125, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 126
            yield "                                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "idCategorie", [], "any", false, false, false, 126), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "idCategorie", [], "any", false, false, false, 126) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 126, $this->source); })()), "idCategorie", [], "any", false, false, false, 126))) {
                yield "selected";
            }
            yield ">
                                            ";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "libelle", [], "any", false, false, false, 127), "html", null, true);
            yield "
                                        </option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        yield "                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Membre</td>
                            <td>
                                <input type=\"text\" class=\"form-input\" value=\"
                                    ";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["membresIndex"]) || array_key_exists("membresIndex", $context) ? $context["membresIndex"] : (function () { throw new RuntimeError('Variable "membresIndex" does not exist.', 138, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 138, $this->source); })()), "idMembre_demandeur", [], "any", false, false, false, 138), [], "array", false, false, false, 138), "prenom", [], "any", false, false, false, 138) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["membresIndex"]) || array_key_exists("membresIndex", $context) ? $context["membresIndex"] : (function () { throw new RuntimeError('Variable "membresIndex" does not exist.', 138, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 138, $this->source); })()), "idMembre_demandeur", [], "any", false, false, false, 138), [], "array", false, false, false, 138), "nom", [], "any", false, false, false, 138)), "html", null, true);
        yield "
                                \" readonly>
                            </td>
                        </tr>

                        <!-- SECTION : Boutons -->
                        <tr class=\"category\"><td colspan=\"2\"></td></tr>

                        <tr>
                            <td style=\"text-align:left;\">
                                <a href=\"";
        // line 148
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
        return array (  341 => 148,  328 => 138,  318 => 130,  309 => 127,  300 => 126,  296 => 125,  284 => 116,  269 => 104,  259 => 97,  249 => 90,  232 => 78,  226 => 77,  220 => 76,  214 => 75,  200 => 66,  194 => 65,  183 => 57,  173 => 50,  149 => 29,  145 => 27,  136 => 25,  132 => 24,  129 => 23,  120 => 21,  116 => 20,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Modifier une publication{% endblock %}

{% block body %}

<div class=\"home\">

    <!-- HERO -->
    <section class=\"dashboard-hero\">
        <div class=\"dashboard-hero-text\">
            <h1 class=\"hero-title\">Modifier la <span>publication</span></h1>
            <p class=\"hero-desc\">Ajustez les informations de cette publication.</p>
        </div>
    </section>

    <section class=\"publications-section\">

        <!-- FLASH MESSAGES -->
        {% for message in app.flashes('success') %}
            <div class=\"flash-success\">✅ {{ message }}</div>
        {% endfor %}

        {% for message in app.flashes('error') %}
            <div class=\"flash-error\">❌ {{ message }}</div>
        {% endfor %}

        <!-- FORMULAIRE -->
        <form method=\"POST\" action=\"{{ path('publication_modifier', {id: id}) }}\">
            <div class=\"forfaits-wrapper\">

                <table class=\"forfaits-table\">
                    <thead>
                        <tr>
                            <th class=\"th-label\">Champ</th>
                            <th class=\"th-plan\">Valeur</th>
                        </tr>
                    </thead>

                    <tbody>

                        <!-- SECTION : Informations générales -->
                        <tr class=\"category\">
                            <td colspan=\"2\">📋 Informations générales</td>
                        </tr>

                        <tr>
                            <td>Titre</td>
                            <td>
                                <input type=\"text\" name=\"titre\" value=\"{{ service.titre }}\" class=\"form-input\" required>
                            </td>
                        </tr>

                        <tr>
                            <td>Description</td>
                            <td>
                                <textarea name=\"description\" class=\"form-textarea\" rows=\"4\">{{ service.description }}</textarea>
                            </td>
                        </tr>

                        <tr>
                            <td>Type de service</td>
                            <td>
                                <select name=\"typeService\" class=\"form-input\">
                                    <option value=\"public\" {% if service.typeService == 'public' %}selected{% endif %}>Public</option>
                                    <option value=\"prive\"  {% if service.typeService == 'prive'  %}selected{% endif %}>Privé</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>État</td>
                            <td>
                                <select name=\"etatService\" class=\"form-input\">
                                    <option value=\"publiee\"    {% if service.etatService == 'publiee'    %}selected{% endif %}>Publiée</option>
                                    <option value=\"en_cours\"   {% if service.etatService == 'en_cours'   %}selected{% endif %}>En cours</option>
                                    <option value=\"refusee\"    {% if service.etatService == 'refusee'    %}selected{% endif %}>Refusée</option>
                                    <option value=\"depubliee\"  {% if service.etatService == 'depubliee'  %}selected{% endif %}>Dépubliée</option>
                                </select>
                            </td>
                        </tr>

                        <!-- SECTION : Dates & Prix -->
                        <tr class=\"category\">
                            <td colspan=\"2\">📅 Dates & Prix</td>
                        </tr>

                        <tr>
                            <input type=\"date\" name=\"datePublication\" 
                                value=\"{{ service.datePublication ? service.datePublication|date('Y-m-d') : '' }}\" 
                                class=\"form-input\">
                        </tr>

                        <tr>
                            <td>Date de clôture</td>
                            <td>
                                <input type=\"date\" name=\"dateCloture\" value=\"{{ service.dateCloture }}\" class=\"form-input\">
                            </td>
                        </tr>

                        <tr>
                            <td>Prix proposé</td>
                            <td>
                                <input type=\"number\" step=\"0.01\" min=\"0\" name=\"prixPropose\" value=\"{{ service.prixPropose }}\" class=\"form-input\">
                            </td>
                        </tr>

                        <!-- SECTION : Localisation & Catégorie -->
                        <tr class=\"category\">
                            <td colspan=\"2\">📍 Localisation & Catégorie</td>
                        </tr>

                        <tr>
                            <td>Adresse d'exécution</td>
                            <td>
                                <input type=\"text\" name=\"adresseExecution\" value=\"{{ service.adresseExecution }}\" class=\"form-input\">
                            </td>
                        </tr>

                        <tr>
                            <td>Catégorie</td>
                            <td>
                                <select name=\"idCategorie\" class=\"form-input\">
                                    <option value=\"\">-- Sélectionner une catégorie --</option>
                                    {% for cat in categories %}
                                        <option value=\"{{ cat.idCategorie }}\" {% if cat.idCategorie == service.idCategorie %}selected{% endif %}>
                                            {{ cat.libelle }}
                                        </option>
                                    {% endfor %}
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Membre</td>
                            <td>
                                <input type=\"text\" class=\"form-input\" value=\"
                                    {{ membresIndex[service.idMembre_demandeur].prenom ~ ' ' ~ membresIndex[service.idMembre_demandeur].nom }}
                                \" readonly>
                            </td>
                        </tr>

                        <!-- SECTION : Boutons -->
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
