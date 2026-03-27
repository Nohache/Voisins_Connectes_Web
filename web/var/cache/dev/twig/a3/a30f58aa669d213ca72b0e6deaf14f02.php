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

/* accueil.html.twig */
class __TwigTemplate_994e61d19c3f54e3aa314ca42d0711d3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil.html.twig"));

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

        yield "Accueil gestionnaire";
        
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

  <!-- HEADER BIENVENUE -->
  <section class=\"dashboard-hero\">
    <div class=\"dashboard-hero-text\">
      <h1 class=\"hero-title\">Bienvenue sur votre <span>tableau de bord</span></h1>
      <p class=\"hero-desc\">Gérez les forfaits, validez les demandes et supervisez les publications de la plateforme VoisinsConnectés.</p>
    </div>
  </section>

  <!-- STATS -->
  <section class=\"stats\">
    <div class=\"stat-item\">
      <span class=\"stat-num\">12</span>
      <span class=\"stat-label\">Demandes d'adhésion en attente</span>
    </div>
    <div class=\"stat-item\">
      <span class=\"stat-num\">5</span>
      <span class=\"stat-label\">Publications à valider</span>
    </div>
    <div class=\"stat-item\">
      <span class=\"stat-num\">3</span>
      <span class=\"stat-label\">Forfaits actifs</span>
    </div>
  </section>

  <!-- RACCOURCIS -->
  <section class=\"shortcuts\">
    <h2 class=\"section-title\">Vos fonctionnalités</h2>
    <p class=\"section-sub\">Accédez rapidement aux outils de gestion de la plateforme.</p>

    <div class=\"shortcuts-grid\">

      <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forfaits");
        yield "\" class=\"shortcut-card\">
        <div class=\"shortcut-icon\">💼</div>
        <div class=\"shortcut-body\">
          <p class=\"shortcut-title\">Gestion des forfaits</p>
          <p class=\"shortcut-text\">Créez, modifiez et gérez les forfaits proposés aux utilisateurs de la plateforme.</p>
        </div>
        <span class=\"shortcut-arrow\">→</span>
      </a>

      <!-- <a href=\"/demande_adhésion\" class=\"shortcut-card\">
        <div class=\"shortcut-icon\">👥</div>
        <div class=\"shortcut-body\">
          <p class=\"shortcut-title\">Demandes d'adhésion</p>
          <p class=\"shortcut-text\">Validez ou refusez les demandes d'inscription des nouveaux membres.</p>
        </div>
        <span class=\"shortcut-arrow\">→</span>
      </a> -->

      <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion_publication");
        yield "\" class=\"shortcut-card\">
        <div class=\"shortcut-icon\">📰</div>
        <div class=\"shortcut-body\">
          <p class=\"shortcut-title\">Gestion des publications</p>
          <p class=\"shortcut-text\">Supervisez l'ensemble des publications actives sur la plateforme.</p>
        </div>
        <span class=\"shortcut-arrow\">→</span>
      </a>

      <!-- <a href=\"/publication_demande_adhésion\" class=\"shortcut-card\">
        <div class=\"shortcut-icon\">📋</div>
        <div class=\"shortcut-body\">
          <p class=\"shortcut-title\">Demandes de publication</p>
          <p class=\"shortcut-text\">Examinez et validez les demandes de publication soumises par les membres.</p>
        </div>
        <span class=\"shortcut-arrow\">→</span>
      </a> -->

    </div>
  </section>

  <!-- ACTIVITÉ RÉCENTE -->
  <section class=\"activity\">
    <h2 class=\"section-title\">🕐 Activité récente</h2>
    <p class=\"section-sub\">Un aperçu des dernières demandes et événements sur la plateforme.</p>

    <div class=\"activity-list\">
      <div class=\"activity-item\">
        <div class=\"activity-dot dot-green\"></div>
        <div class=\"activity-body\">
          <p class=\"activity-title\">Nouvelle demande d'adhésion</p>
          <p class=\"activity-sub\">Marie Dupont a soumis une demande d'inscription</p>
        </div>
        <span class=\"activity-time\">Il y a 5 min</span>
      </div>
      <div class=\"activity-item\">
        <div class=\"activity-dot dot-blue\"></div>
        <div class=\"activity-body\">
          <p class=\"activity-title\">Publication en attente</p>
          <p class=\"activity-sub\">Jean Martin a soumis une demande de publication de service</p>
        </div>
        <span class=\"activity-time\">Il y a 20 min</span>
      </div>
      <div class=\"activity-item\">
        <div class=\"activity-dot dot-orange\"></div>
        <div class=\"activity-body\">
          <p class=\"activity-title\">Forfait modifié</p>
          <p class=\"activity-sub\">Le forfait \"Premium\" a été mis à jour</p>
        </div>
        <span class=\"activity-time\">Il y a 1h</span>
      </div>
      <div class=\"activity-item\">
        <div class=\"activity-dot dot-green\"></div>
        <div class=\"activity-body\">
          <p class=\"activity-title\">Adhésion validée</p>
          <p class=\"activity-sub\">La demande de Pierre Leroy a été acceptée</p>
        </div>
        <span class=\"activity-time\">Il y a 2h</span>
      </div>
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
        return "accueil.html.twig";
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
        return array (  156 => 57,  135 => 39,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil gestionnaire{% endblock %}

{% block body %}
<div class=\"home\">

  <!-- HEADER BIENVENUE -->
  <section class=\"dashboard-hero\">
    <div class=\"dashboard-hero-text\">
      <h1 class=\"hero-title\">Bienvenue sur votre <span>tableau de bord</span></h1>
      <p class=\"hero-desc\">Gérez les forfaits, validez les demandes et supervisez les publications de la plateforme VoisinsConnectés.</p>
    </div>
  </section>

  <!-- STATS -->
  <section class=\"stats\">
    <div class=\"stat-item\">
      <span class=\"stat-num\">12</span>
      <span class=\"stat-label\">Demandes d'adhésion en attente</span>
    </div>
    <div class=\"stat-item\">
      <span class=\"stat-num\">5</span>
      <span class=\"stat-label\">Publications à valider</span>
    </div>
    <div class=\"stat-item\">
      <span class=\"stat-num\">3</span>
      <span class=\"stat-label\">Forfaits actifs</span>
    </div>
  </section>

  <!-- RACCOURCIS -->
  <section class=\"shortcuts\">
    <h2 class=\"section-title\">Vos fonctionnalités</h2>
    <p class=\"section-sub\">Accédez rapidement aux outils de gestion de la plateforme.</p>

    <div class=\"shortcuts-grid\">

      <a href=\"{{ path('app_forfaits') }}\" class=\"shortcut-card\">
        <div class=\"shortcut-icon\">💼</div>
        <div class=\"shortcut-body\">
          <p class=\"shortcut-title\">Gestion des forfaits</p>
          <p class=\"shortcut-text\">Créez, modifiez et gérez les forfaits proposés aux utilisateurs de la plateforme.</p>
        </div>
        <span class=\"shortcut-arrow\">→</span>
      </a>

      <!-- <a href=\"/demande_adhésion\" class=\"shortcut-card\">
        <div class=\"shortcut-icon\">👥</div>
        <div class=\"shortcut-body\">
          <p class=\"shortcut-title\">Demandes d'adhésion</p>
          <p class=\"shortcut-text\">Validez ou refusez les demandes d'inscription des nouveaux membres.</p>
        </div>
        <span class=\"shortcut-arrow\">→</span>
      </a> -->

      <a href=\"{{ path('gestion_publication') }}\" class=\"shortcut-card\">
        <div class=\"shortcut-icon\">📰</div>
        <div class=\"shortcut-body\">
          <p class=\"shortcut-title\">Gestion des publications</p>
          <p class=\"shortcut-text\">Supervisez l'ensemble des publications actives sur la plateforme.</p>
        </div>
        <span class=\"shortcut-arrow\">→</span>
      </a>

      <!-- <a href=\"/publication_demande_adhésion\" class=\"shortcut-card\">
        <div class=\"shortcut-icon\">📋</div>
        <div class=\"shortcut-body\">
          <p class=\"shortcut-title\">Demandes de publication</p>
          <p class=\"shortcut-text\">Examinez et validez les demandes de publication soumises par les membres.</p>
        </div>
        <span class=\"shortcut-arrow\">→</span>
      </a> -->

    </div>
  </section>

  <!-- ACTIVITÉ RÉCENTE -->
  <section class=\"activity\">
    <h2 class=\"section-title\">🕐 Activité récente</h2>
    <p class=\"section-sub\">Un aperçu des dernières demandes et événements sur la plateforme.</p>

    <div class=\"activity-list\">
      <div class=\"activity-item\">
        <div class=\"activity-dot dot-green\"></div>
        <div class=\"activity-body\">
          <p class=\"activity-title\">Nouvelle demande d'adhésion</p>
          <p class=\"activity-sub\">Marie Dupont a soumis une demande d'inscription</p>
        </div>
        <span class=\"activity-time\">Il y a 5 min</span>
      </div>
      <div class=\"activity-item\">
        <div class=\"activity-dot dot-blue\"></div>
        <div class=\"activity-body\">
          <p class=\"activity-title\">Publication en attente</p>
          <p class=\"activity-sub\">Jean Martin a soumis une demande de publication de service</p>
        </div>
        <span class=\"activity-time\">Il y a 20 min</span>
      </div>
      <div class=\"activity-item\">
        <div class=\"activity-dot dot-orange\"></div>
        <div class=\"activity-body\">
          <p class=\"activity-title\">Forfait modifié</p>
          <p class=\"activity-sub\">Le forfait \"Premium\" a été mis à jour</p>
        </div>
        <span class=\"activity-time\">Il y a 1h</span>
      </div>
      <div class=\"activity-item\">
        <div class=\"activity-dot dot-green\"></div>
        <div class=\"activity-body\">
          <p class=\"activity-title\">Adhésion validée</p>
          <p class=\"activity-sub\">La demande de Pierre Leroy a été acceptée</p>
        </div>
        <span class=\"activity-time\">Il y a 2h</span>
      </div>
    </div>
  </section>

</div>
{% endblock %}
", "accueil.html.twig", "C:\\laragon\\www\\Voisins connecté web\\web\\templates\\accueil.html.twig");
    }
}
