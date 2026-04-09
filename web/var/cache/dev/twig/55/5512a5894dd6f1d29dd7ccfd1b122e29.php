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

/* base.html.twig */
class __TwigTemplate_5b3baef0749173f387c34d3ddfa1062f extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'importmap' => [$this, 'block_importmap'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"icon\" href=\"/images/voisins_connectes_arrondi.png\">
        ";
        // line 7
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 10
        yield "
        ";
        // line 11
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 14
        yield "    </head>
    <body>
        <nav class=\"navbar-floating\">
        <div class=\"navbar-links\">
            <img src=\"/images/voisins_connectes_arrondi.png\" alt=\"Logo\" class=\"logo\">

            <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        yield "\"
            class=\"nav-btn ";
        // line 21
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "request", [], "any", false, false, false, 21), "pathinfo", [], "any", false, false, false, 21) == "/voisins_connecte/accueil")) {
            yield "nav-btn--active";
        } else {
            yield "nav-btn--inactive";
        }
        yield "\">
            Accueil
            </a>
             
             <div class=\"dropdown\">
                <button class=\"nav-btn ";
        // line 26
        if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "request", [], "any", false, false, false, 26), "pathinfo", [], "any", false, false, false, 26)) && is_string($_v1 = "/voisins_connecte/gestion") && str_starts_with($_v0, $_v1))) {
            yield "nav-btn--active";
        } else {
            yield "nav-btn--inactive";
        }
        yield " dropdown-btn\">
                    Gestion ▾
                </button>
                <div class=\"dropdown-menu\">
                    <a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion_forfait");
        yield "\"
                    class=\"dropdown-item ";
        // line 31
        if ((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "request", [], "any", false, false, false, 31), "pathinfo", [], "any", false, false, false, 31)) && is_string($_v3 = "/voisins_connecte/gestion_forfait") && str_starts_with($_v2, $_v3))) {
            yield "dropdown-item--active";
        }
        yield "\">
                    Forfaits
                    </a>
                    <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion_publication");
        yield "\"
                    class=\"dropdown-item ";
        // line 35
        if ((is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "request", [], "any", false, false, false, 35), "pathinfo", [], "any", false, false, false, 35)) && is_string($_v5 = "/voisins_connecte/gestion_publication") && str_starts_with($_v4, $_v5))) {
            yield "dropdown-item--active";
        }
        yield "\">
                    Publications
                    </a>
                </div>
            </div>
            <!-- Dropdown Validation — actif si on est sur une page demande -->
            <div class=\"dropdown\">
                <button class=\"nav-btn ";
        // line 42
        if ((is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "request", [], "any", false, false, false, 42), "pathinfo", [], "any", false, false, false, 42)) && is_string($_v7 = "/voisins_connecte/demande") && str_starts_with($_v6, $_v7))) {
            yield "nav-btn--active";
        } else {
            yield "nav-btn--inactive";
        }
        yield " dropdown-btn\">
                    Validation ▾
                </button>
                <div class=\"dropdown-menu\">
                    <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demande_adhesion");
        yield "\"
                    class=\"dropdown-item ";
        // line 47
        if ((is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "request", [], "any", false, false, false, 47), "pathinfo", [], "any", false, false, false, 47)) && is_string($_v9 = "/voisins_connecte/demande_adh") && str_starts_with($_v8, $_v9))) {
            yield "dropdown-item--active";
        }
        yield "\">
                    Demandes d'adhésion
                    </a>
                    <a href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demande_publication");
        yield "\"
                    class=\"dropdown-item ";
        // line 51
        if ((is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "request", [], "any", false, false, false, 51), "pathinfo", [], "any", false, false, false, 51)) && is_string($_v11 = "/voisins_connecte/demande_pub") && str_starts_with($_v10, $_v11))) {
            yield "dropdown-item--active";
        }
        yield "\">
                    Demandes de publication
                    </a>
                </div>
            </div>

            <!--<a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
        yield "\"
            class=\"nav-btn ";
        // line 58
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "request", [], "any", false, false, false, 58), "pathinfo", [], "any", false, false, false, 58) == "/voisins_connecte/inscription")) {
            yield "nav-btn--active";
        } else {
            yield "nav-btn--inactive";
        }
        yield "\">
            Inscriptions
            </a>-->

            <a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deconnexion");
        yield "\" class=\"nav-btn nav-btn--deconnexion\">
                Déconnexion
            </a>
        </div>
    </nav>
    ";
        // line 67
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 68
        yield "    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        yield "            <link rel=\"stylesheet\" href=\"/styles/app.css\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        yield "            ";
        yield from $this->unwrap()->yieldBlock('importmap', $context, $blocks);
        // line 13
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_importmap(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 67
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  306 => 67,  284 => 12,  273 => 13,  270 => 12,  257 => 11,  245 => 8,  232 => 7,  210 => 5,  197 => 68,  195 => 67,  187 => 62,  176 => 58,  172 => 57,  161 => 51,  157 => 50,  149 => 47,  145 => 46,  134 => 42,  122 => 35,  118 => 34,  110 => 31,  106 => 30,  95 => 26,  83 => 21,  79 => 20,  71 => 14,  69 => 11,  66 => 10,  64 => 7,  59 => 5,  53 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" href=\"/images/voisins_connectes_arrondi.png\">
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"/styles/app.css\">
        {% endblock %}

        {% block javascripts %}
            {% block importmap %}{% endblock %}
        {% endblock %}
    </head>
    <body>
        <nav class=\"navbar-floating\">
        <div class=\"navbar-links\">
            <img src=\"/images/voisins_connectes_arrondi.png\" alt=\"Logo\" class=\"logo\">

            <a href=\"{{ path('index') }}\"
            class=\"nav-btn {% if app.request.pathinfo == '/voisins_connecte/accueil' %}nav-btn--active{% else %}nav-btn--inactive{% endif %}\">
            Accueil
            </a>
             
             <div class=\"dropdown\">
                <button class=\"nav-btn {% if app.request.pathinfo starts with '/voisins_connecte/gestion' %}nav-btn--active{% else %}nav-btn--inactive{% endif %} dropdown-btn\">
                    Gestion ▾
                </button>
                <div class=\"dropdown-menu\">
                    <a href=\"{{ path('gestion_forfait') }}\"
                    class=\"dropdown-item {% if app.request.pathinfo starts with '/voisins_connecte/gestion_forfait' %}dropdown-item--active{% endif %}\">
                    Forfaits
                    </a>
                    <a href=\"{{ path('gestion_publication') }}\"
                    class=\"dropdown-item {% if app.request.pathinfo starts with '/voisins_connecte/gestion_publication' %}dropdown-item--active{% endif %}\">
                    Publications
                    </a>
                </div>
            </div>
            <!-- Dropdown Validation — actif si on est sur une page demande -->
            <div class=\"dropdown\">
                <button class=\"nav-btn {% if app.request.pathinfo starts with '/voisins_connecte/demande' %}nav-btn--active{% else %}nav-btn--inactive{% endif %} dropdown-btn\">
                    Validation ▾
                </button>
                <div class=\"dropdown-menu\">
                    <a href=\"{{ path('demande_adhesion') }}\"
                    class=\"dropdown-item {% if app.request.pathinfo starts with '/voisins_connecte/demande_adh' %}dropdown-item--active{% endif %}\">
                    Demandes d'adhésion
                    </a>
                    <a href=\"{{ path('demande_publication') }}\"
                    class=\"dropdown-item {% if app.request.pathinfo starts with '/voisins_connecte/demande_pub' %}dropdown-item--active{% endif %}\">
                    Demandes de publication
                    </a>
                </div>
            </div>

            <!--<a href=\"{{ path('inscription') }}\"
            class=\"nav-btn {% if app.request.pathinfo == '/voisins_connecte/inscription' %}nav-btn--active{% else %}nav-btn--inactive{% endif %}\">
            Inscriptions
            </a>-->

            <a href=\"{{ path('deconnexion') }}\" class=\"nav-btn nav-btn--deconnexion\">
                Déconnexion
            </a>
        </div>
    </nav>
    {% block body %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\laragon\\www\\Voisins connecté web\\web\\templates\\base.html.twig");
    }
}
