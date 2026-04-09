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
      <p class=\"hero-desc\">Validez ou refusez les demandes d'adhésion soumises par les membres.</p>
    </div>
  </section>

  ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", ["success"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            yield "    <div class=\"flash-success\">✅ ";
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
    <p class=\"section-sub\">Liste des demandes d’adhésion en attente de validation.</p>

    <div class=\"publications-wrapper\">
      <table class=\"publications-table\">
        <thead>
          <tr>
            <th>Membre</th>
            <th>Forfait</th>
            <th>Date début</th>
            <th>Date fin</th>
            <th>Statut</th>
            <th>Actions</th>
          </tr>
        </thead>

        <tbody>

          ";
        // line 39
        $context["hasPending"] = false;
        // line 40
        yield "
          ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["adhesions"]) || array_key_exists("adhesions", $context) ? $context["adhesions"] : (function () { throw new RuntimeError('Variable "adhesions" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["adhesion"]) {
            // line 42
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["adhesion"], "statut", [], "any", false, false, false, 42) == "en_attente")) {
                // line 43
                yield "              ";
                $context["hasPending"] = true;
                // line 44
                yield "
              ";
                // line 45
                $context["membre"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["membresIndex"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["adhesion"], "idMembre", [], "any", false, false, false, 45), [], "array", true, true, false, 45) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["membresIndex"]) || array_key_exists("membresIndex", $context) ? $context["membresIndex"] : (function () { throw new RuntimeError('Variable "membresIndex" does not exist.', 45, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["adhesion"], "idMembre", [], "any", false, false, false, 45), [], "array", false, false, false, 45)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["membresIndex"]) || array_key_exists("membresIndex", $context) ? $context["membresIndex"] : (function () { throw new RuntimeError('Variable "membresIndex" does not exist.', 45, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["adhesion"], "idMembre", [], "any", false, false, false, 45), [], "array", false, false, false, 45)) : (null));
                // line 46
                yield "              ";
                $context["forfait"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["forfaitsIndex"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["adhesion"], "idForfait", [], "any", false, false, false, 46), [], "array", true, true, false, 46) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["forfaitsIndex"]) || array_key_exists("forfaitsIndex", $context) ? $context["forfaitsIndex"] : (function () { throw new RuntimeError('Variable "forfaitsIndex" does not exist.', 46, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["adhesion"], "idForfait", [], "any", false, false, false, 46), [], "array", false, false, false, 46)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["forfaitsIndex"]) || array_key_exists("forfaitsIndex", $context) ? $context["forfaitsIndex"] : (function () { throw new RuntimeError('Variable "forfaitsIndex" does not exist.', 46, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["adhesion"], "idForfait", [], "any", false, false, false, 46), [], "array", false, false, false, 46)) : (null));
                // line 47
                yield "
              <tr>
                <td>";
                // line 49
                yield (((($tmp = (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 49, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 49, $this->source); })()), "prenom", [], "any", false, false, false, 49) . " ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 49, $this->source); })()), "nom", [], "any", false, false, false, 49)), "html", null, true)) : ("—"));
                yield "</td>
                <td>";
                // line 50
                yield (((($tmp = (isset($context["forfait"]) || array_key_exists("forfait", $context) ? $context["forfait"] : (function () { throw new RuntimeError('Variable "forfait" does not exist.', 50, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forfait"]) || array_key_exists("forfait", $context) ? $context["forfait"] : (function () { throw new RuntimeError('Variable "forfait" does not exist.', 50, $this->source); })()), "nomForfait", [], "any", false, false, false, 50), "html", null, true)) : ("—"));
                yield "</td>
                <td>";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["adhesion"], "dateDebut", [], "any", false, false, false, 51), "html", null, true);
                yield "</td>
                <td>";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["adhesion"], "dateFin", [], "any", false, false, false, 52), "html", null, true);
                yield "</td>

                <td>
                  <span class=\"badge badge-attente\">En attente</span>
                </td>

                <td class=\"td-actions\">
                  <a href=\"";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adhesion_valider", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["adhesion"], "idAdhesion", [], "any", false, false, false, 59)]), "html", null, true);
                yield "\"
                     class=\"btn-table btn-valider\"
                     onclick=\"return confirm('Valider cette adhésion ?')\">
                     ✅ Valider
                  </a>

                  <a href=\"";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adhesion_refuser", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["adhesion"], "idAdhesion", [], "any", false, false, false, 65)]), "html", null, true);
                yield "\"
                     class=\"btn-table btn-supprimer\"
                     onclick=\"return confirm('Refuser cette adhésion ?')\">
                     ❌ Refuser
                  </a>
                </td>
              </tr>

            ";
            }
            // line 74
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['adhesion'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        yield "
          ";
        // line 76
        if ((($tmp =  !(isset($context["hasPending"]) || array_key_exists("hasPending", $context) ? $context["hasPending"] : (function () { throw new RuntimeError('Variable "hasPending" does not exist.', 76, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 77
            yield "            <tr>
              <td colspan=\"6\" style=\"text-align:center; padding:2rem; color:var(--gris);\">
                Aucune demande d’adhésion en attente.
              </td>
            </tr>
          ";
        }
        // line 83
        yield "
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
        return array (  236 => 83,  228 => 77,  226 => 76,  223 => 75,  217 => 74,  205 => 65,  196 => 59,  186 => 52,  182 => 51,  178 => 50,  174 => 49,  170 => 47,  167 => 46,  165 => 45,  162 => 44,  159 => 43,  156 => 42,  152 => 41,  149 => 40,  147 => 39,  125 => 19,  116 => 17,  112 => 16,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
      <p class=\"hero-desc\">Validez ou refusez les demandes d'adhésion soumises par les membres.</p>
    </div>
  </section>

  {% for message in app.flashes('success') %}
    <div class=\"flash-success\">✅ {{ message }}</div>
  {% endfor %}

  <section class=\"publications-section\">
    <h2 class=\"section-title\">Demandes en attente</h2>
    <p class=\"section-sub\">Liste des demandes d’adhésion en attente de validation.</p>

    <div class=\"publications-wrapper\">
      <table class=\"publications-table\">
        <thead>
          <tr>
            <th>Membre</th>
            <th>Forfait</th>
            <th>Date début</th>
            <th>Date fin</th>
            <th>Statut</th>
            <th>Actions</th>
          </tr>
        </thead>

        <tbody>

          {% set hasPending = false %}

          {% for adhesion in adhesions %}
            {% if adhesion.statut == 'en_attente' %}
              {% set hasPending = true %}

              {% set membre = membresIndex[adhesion.idMembre] ?? null %}
              {% set forfait = forfaitsIndex[adhesion.idForfait] ?? null %}

              <tr>
                <td>{{ membre ? membre.prenom ~ ' ' ~ membre.nom : '—' }}</td>
                <td>{{ forfait ? forfait.nomForfait : '—' }}</td>
                <td>{{ adhesion.dateDebut }}</td>
                <td>{{ adhesion.dateFin }}</td>

                <td>
                  <span class=\"badge badge-attente\">En attente</span>
                </td>

                <td class=\"td-actions\">
                  <a href=\"{{ path('adhesion_valider', {id: adhesion.idAdhesion}) }}\"
                     class=\"btn-table btn-valider\"
                     onclick=\"return confirm('Valider cette adhésion ?')\">
                     ✅ Valider
                  </a>

                  <a href=\"{{ path('adhesion_refuser', {id: adhesion.idAdhesion}) }}\"
                     class=\"btn-table btn-supprimer\"
                     onclick=\"return confirm('Refuser cette adhésion ?')\">
                     ❌ Refuser
                  </a>
                </td>
              </tr>

            {% endif %}
          {% endfor %}

          {% if not hasPending %}
            <tr>
              <td colspan=\"6\" style=\"text-align:center; padding:2rem; color:var(--gris);\">
                Aucune demande d’adhésion en attente.
              </td>
            </tr>
          {% endif %}

        </tbody>

      </table>
    </div>
  </section>

</div>
{% endblock %}
", "demande_adhesion.html.twig", "C:\\laragon\\www\\Voisins connecté web\\web\\templates\\demande_adhesion.html.twig");
    }
}
