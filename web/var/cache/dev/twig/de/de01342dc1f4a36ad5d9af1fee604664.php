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
  ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "flashes", ["error"], "method", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 21
            yield "    <div class=\"flash-error\" style=\"max-width:1100px; margin: 0 auto 1rem; padding: 0.8rem 1.5rem; background: #fee2e2; color: #dc2626; border-radius: 1rem; font-weight: 500;\">❌ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "
  <!-- ══ CARTES (grands écrans) ══ -->
  <section class=\"forfaits-cards-section forfaits-desktop-only\">
    <h2 class=\"section-title\">Les forfaits disponibles</h2>
    <p class=\"section-sub\">Gérez les forfaits proposés aux membres de la plateforme.</p>
    <a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forfait_ajouter");
        yield "\" class=\"btn-primary\" style=\"display:inline-block; margin-bottom:2rem;\">+ Ajouter un forfait</a>

    <div class=\"forfaits-cards-grid\" id=\"forfaits-cards-grid\">
      ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["forfaits"]) || array_key_exists("forfaits", $context) ? $context["forfaits"] : (function () { throw new RuntimeError('Variable "forfaits" does not exist.', 31, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["forfait"]) {
            // line 32
            yield "        ";
            $context["isPremium"] = (CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "prix", [], "any", false, false, false, 32) > 0);
            // line 33
            yield "        <div class=\"forfait-card ";
            yield (((($tmp = (isset($context["isPremium"]) || array_key_exists("isPremium", $context) ? $context["isPremium"] : (function () { throw new RuntimeError('Variable "isPremium" does not exist.', 33, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("forfait-card--premium") : (""));
            yield "\">
          <div class=\"forfait-card-header\">
            <div class=\"plan-badge ";
            // line 35
            yield (((($tmp = (isset($context["isPremium"]) || array_key_exists("isPremium", $context) ? $context["isPremium"] : (function () { throw new RuntimeError('Variable "isPremium" does not exist.', 35, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("plan-premium") : ("plan-free"));
            yield "\">";
            yield (((($tmp = (isset($context["isPremium"]) || array_key_exists("isPremium", $context) ? $context["isPremium"] : (function () { throw new RuntimeError('Variable "isPremium" does not exist.', 35, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Payant") : ("Gratuit"));
            yield "</div>
            <h2 class=\"forfait-card-title\">";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "nomForfait", [], "any", false, false, false, 36), "html", null, true);
            yield "</h2>
            <div class=\"forfait-card-price\">
              ";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "prix", [], "any", false, false, false, 38), 2, ",", " "), "html", null, true);
            yield " €
              ";
            // line 39
            yield (((($tmp = (isset($context["isPremium"]) || array_key_exists("isPremium", $context) ? $context["isPremium"] : (function () { throw new RuntimeError('Variable "isPremium" does not exist.', 39, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("<span>/mois</span>") : (""));
            yield "
            </div>
            <p class=\"forfait-card-duree\">⏱ Durée : ";
            // line 41
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "prix", [], "any", false, false, false, 41) == 0)) {
                yield "gratuit";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "duree", [], "any", false, false, false, 41) == "mois")) {
                yield "30 jours";
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "duree", [], "any", false, false, false, 41), "html", null, true);
                yield " jour(s)";
            }
            yield "</p>
          </div>
          <div class=\"forfait-card-body\">
            <div class=\"forfait-feature-category\">🔧 Proposer des services</div>
            <ul class=\"forfait-features\">
              ";
            // line 46
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "fonc_parametrage", [], "any", false, false, false, 46) == "1")) {
                yield "<li><span class=\"check\">✔</span> Paramétrage</li>";
            }
            // line 47
            yield "              ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "fonc_perimetreIntervention", [], "any", false, false, false, 47) == "1")) {
                yield "<li><span class=\"check\">✔</span> Périmètre d'intervention</li>";
            }
            // line 48
            yield "              ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "fonc_notifications", [], "any", false, false, false, 48) == "1")) {
                yield "<li><span class=\"check\">✔</span> Notifications « Nouvelles demandes »</li>";
            }
            // line 49
            yield "            </ul>
            
            <div class=\"forfait-feature-category\">🙋 Répondre aux demandes</div>
            <ul class=\"forfait-features\">
              ";
            // line 53
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "fonc_locationMateriel", [], "any", false, false, false, 53) == "1")) {
                yield "<li><span class=\"check\">✔</span> Location de matériel</li>";
            }
            // line 54
            yield "              ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "fonc_prestationService", [], "any", false, false, false, 54) == "1")) {
                yield "<li><span class=\"check\">✔</span> Prestation de service</li>";
            }
            // line 55
            yield "            </ul>
            
            <div class=\"forfait-feature-category\">👤 Profil utilisateur</div>
            <ul class=\"forfait-features\">
              ";
            // line 59
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "fonc_numeroProfil", [], "any", false, false, false, 59) == "1")) {
                yield "<li><span class=\"check\">✔</span> Numéro de téléphone sur le profil</li>";
            }
            // line 60
            yield "              ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "fonc_photosProfil", [], "any", false, false, false, 60) == "1")) {
                yield "<li><span class=\"check\">✔</span> Photos des réalisations sur le profil</li>";
            }
            // line 61
            yield "            </ul>
            
            <div class=\"forfait-feature-category\">🎧 Assistance</div>
            <ul class=\"forfait-features\">
              ";
            // line 65
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "fonc_accompagnementPrioritaire", [], "any", false, false, false, 65) == "1")) {
                yield "<li><span class=\"check\">✔</span> Accompagnement personnalisé et prioritaire</li>";
            }
            // line 66
            yield "            </ul>
          </div>
          <div class=\"forfait-card-footer\">
            <a href=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forfait_modifier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "idForfait", [], "any", false, false, false, 69)]), "html", null, true);
            yield "\" class=\"btn-table btn-modifier\">✏️ Modifier</a>
            <a href=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forfait_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "idForfait", [], "any", false, false, false, 70)]), "html", null, true);
            yield "\" class=\"btn-table btn-supprimer\" onclick=\"return confirm('Supprimer ce forfait ?')\">🗑️ Supprimer</a>
          </div>
        </div>
      ";
            $context['_iterated'] = true;
        }
        // line 73
        if (!$context['_iterated']) {
            // line 74
            yield "        <div style=\"text-align:center; padding: 2rem; color: var(--gris);\">Aucun forfait disponible.</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['forfait'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "    </div>
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
        return array (  283 => 76,  276 => 74,  274 => 73,  266 => 70,  262 => 69,  257 => 66,  253 => 65,  247 => 61,  242 => 60,  238 => 59,  232 => 55,  227 => 54,  223 => 53,  217 => 49,  212 => 48,  207 => 47,  203 => 46,  188 => 41,  183 => 39,  179 => 38,  174 => 36,  168 => 35,  162 => 33,  159 => 32,  154 => 31,  148 => 28,  141 => 23,  132 => 21,  128 => 20,  125 => 19,  116 => 17,  112 => 16,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
    <div class=\"flash-success\" style=\"max-width:1100px; margin: 0 auto 1rem; padding: 0.8rem 1.5rem; background: var(--vert); color: var(--vert-tres-fonce); border-radius: 1rem; font-weight: 500;\">✅ {{ message }}</div>
  {% endfor %}

  {% for message in app.flashes('error') %}
    <div class=\"flash-error\" style=\"max-width:1100px; margin: 0 auto 1rem; padding: 0.8rem 1.5rem; background: #fee2e2; color: #dc2626; border-radius: 1rem; font-weight: 500;\">❌ {{ message }}</div>
  {% endfor %}

  <!-- ══ CARTES (grands écrans) ══ -->
  <section class=\"forfaits-cards-section forfaits-desktop-only\">
    <h2 class=\"section-title\">Les forfaits disponibles</h2>
    <p class=\"section-sub\">Gérez les forfaits proposés aux membres de la plateforme.</p>
    <a href=\"{{ path('app_forfait_ajouter') }}\" class=\"btn-primary\" style=\"display:inline-block; margin-bottom:2rem;\">+ Ajouter un forfait</a>

    <div class=\"forfaits-cards-grid\" id=\"forfaits-cards-grid\">
      {% for forfait in forfaits %}
        {% set isPremium = forfait.prix > 0 %}
        <div class=\"forfait-card {{ isPremium ? 'forfait-card--premium' : '' }}\">
          <div class=\"forfait-card-header\">
            <div class=\"plan-badge {{ isPremium ? 'plan-premium' : 'plan-free' }}\">{{ isPremium ? 'Payant' : 'Gratuit' }}</div>
            <h2 class=\"forfait-card-title\">{{ forfait.nomForfait }}</h2>
            <div class=\"forfait-card-price\">
              {{ forfait.prix|number_format(2, ',', ' ') }} €
              {{ isPremium ? '<span>/mois</span>'|raw : '' }}
            </div>
            <p class=\"forfait-card-duree\">⏱ Durée : {% if forfait.prix == 0 %}gratuit{% elseif forfait.duree == 'mois' %}30 jours{% else %}{{ forfait.duree }} jour(s){% endif %}</p>
          </div>
          <div class=\"forfait-card-body\">
            <div class=\"forfait-feature-category\">🔧 Proposer des services</div>
            <ul class=\"forfait-features\">
              {% if forfait.fonc_parametrage == '1' %}<li><span class=\"check\">✔</span> Paramétrage</li>{% endif %}
              {% if forfait.fonc_perimetreIntervention == '1' %}<li><span class=\"check\">✔</span> Périmètre d'intervention</li>{% endif %}
              {% if forfait.fonc_notifications == '1' %}<li><span class=\"check\">✔</span> Notifications « Nouvelles demandes »</li>{% endif %}
            </ul>
            
            <div class=\"forfait-feature-category\">🙋 Répondre aux demandes</div>
            <ul class=\"forfait-features\">
              {% if forfait.fonc_locationMateriel == '1' %}<li><span class=\"check\">✔</span> Location de matériel</li>{% endif %}
              {% if forfait.fonc_prestationService == '1' %}<li><span class=\"check\">✔</span> Prestation de service</li>{% endif %}
            </ul>
            
            <div class=\"forfait-feature-category\">👤 Profil utilisateur</div>
            <ul class=\"forfait-features\">
              {% if forfait.fonc_numeroProfil == '1' %}<li><span class=\"check\">✔</span> Numéro de téléphone sur le profil</li>{% endif %}
              {% if forfait.fonc_photosProfil == '1' %}<li><span class=\"check\">✔</span> Photos des réalisations sur le profil</li>{% endif %}
            </ul>
            
            <div class=\"forfait-feature-category\">🎧 Assistance</div>
            <ul class=\"forfait-features\">
              {% if forfait.fonc_accompagnementPrioritaire == '1' %}<li><span class=\"check\">✔</span> Accompagnement personnalisé et prioritaire</li>{% endif %}
            </ul>
          </div>
          <div class=\"forfait-card-footer\">
            <a href=\"{{ path('app_forfait_modifier', {id: forfait.idForfait}) }}\" class=\"btn-table btn-modifier\">✏️ Modifier</a>
            <a href=\"{{ path('app_forfait_supprimer', {id: forfait.idForfait}) }}\" class=\"btn-table btn-supprimer\" onclick=\"return confirm('Supprimer ce forfait ?')\">🗑️ Supprimer</a>
          </div>
        </div>
      {% else %}
        <div style=\"text-align:center; padding: 2rem; color: var(--gris);\">Aucun forfait disponible.</div>
      {% endfor %}
    </div>
  </section>

</div>
{% endblock %}", "forfaits.html.twig", "C:\\laragon\\www\\Voisins connecté web\\web\\templates\\forfaits.html.twig");
    }
}
