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

/* forfaits1.html.twig */
class __TwigTemplate_fa337a30b10fca6d682f53b8032049a2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forfaits1.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forfaits1.html.twig"));

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
      <span class=\"hero-tag\">💼 Administration</span>
      <h1 class=\"hero-title\">Gestion des <span>forfaits</span></h1>
      <p class=\"hero-desc\">Consultez et gérez les forfaits proposés aux utilisateurs de la plateforme VoisinsConnectés.</p>
    </div>
  </section>

  ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", ["success"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            yield "    <div class=\"flash-success\" style=\"max-width:750px; margin: 0 auto 1rem; padding: 0.8rem 1.5rem; background: var(--vert); color: var(--vert-tres-fonce); border-radius: 1rem; font-weight: 500;\">✅ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "
  <!-- TABLEAU -->
  <section class=\"forfaits-section\">
    <span class=\"section-tag\">📋 Comparatif</span>
    <h2 class=\"section-title\">Les forfaits disponibles</h2>
    <p class=\"section-sub\">Aperçu des fonctionnalités incluses dans chaque forfait.</p>

    <div class=\"forfaits-wrapper\">
      <table class=\"forfaits-table\">
        <thead>
          <tr>
            <th class=\"th-label\"></th>
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["forfaits"]) || array_key_exists("forfaits", $context) ? $context["forfaits"] : (function () { throw new RuntimeError('Variable "forfaits" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["id"] => $context["forfait"]) {
            // line 33
            yield "            <th class=\"th-plan\">
              <div class=\"plan-badge ";
            // line 34
            yield ((($context["id"] == "standard")) ? ("plan-free") : ("plan-premium"));
            yield "\">
                ";
            // line 35
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "duree", [], "any", false, false, false, 35) == "gratuit")) ? ("Gratuit") : ("Payant"));
            yield "
              </div>
              <div class=\"plan-name\">";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "nomForfait", [], "any", false, false, false, 37), "html", null, true);
            yield "</div>
              <div class=\"plan-price\">
                ";
            // line 39
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "prix", [], "any", false, false, false, 39) == "0")) ? ("0 €") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "prix", [], "any", false, false, false, 39) . " €"), "html", null, true)));
            yield "
                ";
            // line 40
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "duree", [], "any", false, false, false, 40) != "gratuit")) {
                yield "<span>/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "duree", [], "any", false, false, false, 40), "html", null, true);
                yield "</span>";
            }
            // line 41
            yield "              </div>
            </th>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['id'], $context['forfait'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "          </tr>
        </thead>
        <tbody>
          ";
        // line 47
        $context["currentCategorie"] = "";
        // line 48
        yield "          ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fonctionnalites"]) || array_key_exists("fonctionnalites", $context) ? $context["fonctionnalites"] : (function () { throw new RuntimeError('Variable "fonctionnalites" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["cle"] => $context["fonc"]) {
            // line 49
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["fonc"], "categorie", [], "any", false, false, false, 49) != (isset($context["currentCategorie"]) || array_key_exists("currentCategorie", $context) ? $context["currentCategorie"] : (function () { throw new RuntimeError('Variable "currentCategorie" does not exist.', 49, $this->source); })()))) {
                // line 50
                yield "              ";
                $context["currentCategorie"] = CoreExtension::getAttribute($this->env, $this->source, $context["fonc"], "categorie", [], "any", false, false, false, 50);
                // line 51
                yield "              <tr class=\"category\">
                <td colspan=\"";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["forfaits"]) || array_key_exists("forfaits", $context) ? $context["forfaits"] : (function () { throw new RuntimeError('Variable "forfaits" does not exist.', 52, $this->source); })())) + 1), "html", null, true);
                yield "\">
                  ";
                // line 53
                if (((isset($context["currentCategorie"]) || array_key_exists("currentCategorie", $context) ? $context["currentCategorie"] : (function () { throw new RuntimeError('Variable "currentCategorie" does not exist.', 53, $this->source); })()) == "Proposer des services")) {
                    yield "🔧";
                }
                // line 54
                yield "                  ";
                if (((isset($context["currentCategorie"]) || array_key_exists("currentCategorie", $context) ? $context["currentCategorie"] : (function () { throw new RuntimeError('Variable "currentCategorie" does not exist.', 54, $this->source); })()) == "Répondre aux demandes")) {
                    yield "🙋";
                }
                // line 55
                yield "                  ";
                if (((isset($context["currentCategorie"]) || array_key_exists("currentCategorie", $context) ? $context["currentCategorie"] : (function () { throw new RuntimeError('Variable "currentCategorie" does not exist.', 55, $this->source); })()) == "Profil utilisateur")) {
                    yield "👤";
                }
                // line 56
                yield "                  ";
                if (((isset($context["currentCategorie"]) || array_key_exists("currentCategorie", $context) ? $context["currentCategorie"] : (function () { throw new RuntimeError('Variable "currentCategorie" does not exist.', 56, $this->source); })()) == "Assistance")) {
                    yield "🎧";
                }
                // line 57
                yield "                  ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentCategorie"]) || array_key_exists("currentCategorie", $context) ? $context["currentCategorie"] : (function () { throw new RuntimeError('Variable "currentCategorie" does not exist.', 57, $this->source); })()), "html", null, true);
                yield "
                </td>
              </tr>
            ";
            }
            // line 61
            yield "            <tr>
              <td>";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fonc"], "label", [], "any", false, false, false, 62), "html", null, true);
            yield "</td>
              ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["forfaits"]) || array_key_exists("forfaits", $context) ? $context["forfaits"] : (function () { throw new RuntimeError('Variable "forfaits" does not exist.', 63, $this->source); })()));
            foreach ($context['_seq'] as $context["id"] => $context["forfait"]) {
                // line 64
                yield "                <td>
                  ";
                // line 65
                if (CoreExtension::inFilter($context["cle"], CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "fonctionnalites", [], "any", false, false, false, 65))) {
                    // line 66
                    yield "                    <span class=\"check\">✔</span>
                  ";
                } else {
                    // line 68
                    yield "                    <span class=\"cross\">✘</span>
                  ";
                }
                // line 70
                yield "                </td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['id'], $context['forfait'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            yield "            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['cle'], $context['fonc'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        yield "
          <!-- Boutons -->
          <tr class=\"category\"><td colspan=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["forfaits"]) || array_key_exists("forfaits", $context) ? $context["forfaits"] : (function () { throw new RuntimeError('Variable "forfaits" does not exist.', 76, $this->source); })())) + 1), "html", null, true);
        yield "\"></td></tr>
          <tr>
            <td></td>
            ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["forfaits"]) || array_key_exists("forfaits", $context) ? $context["forfaits"] : (function () { throw new RuntimeError('Variable "forfaits" does not exist.', 79, $this->source); })()));
        foreach ($context['_seq'] as $context["id"] => $context["forfait"]) {
            // line 80
            yield "            <td>
              <a href=\"";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forfait_modifier", ["id" => $context["id"]]), "html", null, true);
            yield "\" class=\"btn-table btn-modifier\">✏️ Modifier</a>
            </td>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['id'], $context['forfait'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        yield "          </tr>
          <tr>
            <td></td>
            ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["forfaits"]) || array_key_exists("forfaits", $context) ? $context["forfaits"] : (function () { throw new RuntimeError('Variable "forfaits" does not exist.', 87, $this->source); })()));
        foreach ($context['_seq'] as $context["id"] => $context["forfait"]) {
            // line 88
            yield "            <td>
              <a href=\"";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forfait_supprimer", ["id" => $context["id"]]), "html", null, true);
            yield "\"
                 class=\"btn-table btn-supprimer\"
                 onclick=\"return confirm('Supprimer le forfait ";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "nomForfait", [], "any", false, false, false, 91), "html", null, true);
            yield " ?')\">🗑️ Supprimer</a>
            </td>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['id'], $context['forfait'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        yield "          </tr>
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
        return "forfaits1.html.twig";
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
        return array (  321 => 94,  312 => 91,  307 => 89,  304 => 88,  300 => 87,  295 => 84,  286 => 81,  283 => 80,  279 => 79,  273 => 76,  269 => 74,  262 => 72,  255 => 70,  251 => 68,  247 => 66,  245 => 65,  242 => 64,  238 => 63,  234 => 62,  231 => 61,  223 => 57,  218 => 56,  213 => 55,  208 => 54,  204 => 53,  200 => 52,  197 => 51,  194 => 50,  191 => 49,  186 => 48,  184 => 47,  179 => 44,  171 => 41,  165 => 40,  161 => 39,  156 => 37,  151 => 35,  147 => 34,  144 => 33,  140 => 32,  126 => 20,  117 => 18,  113 => 17,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
      <span class=\"hero-tag\">💼 Administration</span>
      <h1 class=\"hero-title\">Gestion des <span>forfaits</span></h1>
      <p class=\"hero-desc\">Consultez et gérez les forfaits proposés aux utilisateurs de la plateforme VoisinsConnectés.</p>
    </div>
  </section>

  {% for message in app.flashes('success') %}
    <div class=\"flash-success\" style=\"max-width:750px; margin: 0 auto 1rem; padding: 0.8rem 1.5rem; background: var(--vert); color: var(--vert-tres-fonce); border-radius: 1rem; font-weight: 500;\">✅ {{ message }}</div>
  {% endfor %}

  <!-- TABLEAU -->
  <section class=\"forfaits-section\">
    <span class=\"section-tag\">📋 Comparatif</span>
    <h2 class=\"section-title\">Les forfaits disponibles</h2>
    <p class=\"section-sub\">Aperçu des fonctionnalités incluses dans chaque forfait.</p>

    <div class=\"forfaits-wrapper\">
      <table class=\"forfaits-table\">
        <thead>
          <tr>
            <th class=\"th-label\"></th>
            {% for id, forfait in forfaits %}
            <th class=\"th-plan\">
              <div class=\"plan-badge {{ id == 'standard' ? 'plan-free' : 'plan-premium' }}\">
                {{ forfait.duree == 'gratuit' ? 'Gratuit' : 'Payant' }}
              </div>
              <div class=\"plan-name\">{{ forfait.nomForfait }}</div>
              <div class=\"plan-price\">
                {{ forfait.prix == '0' ? '0 €' : forfait.prix ~ ' €' }}
                {% if forfait.duree != 'gratuit' %}<span>/{{ forfait.duree }}</span>{% endif %}
              </div>
            </th>
            {% endfor %}
          </tr>
        </thead>
        <tbody>
          {% set currentCategorie = '' %}
          {% for cle, fonc in fonctionnalites %}
            {% if fonc.categorie != currentCategorie %}
              {% set currentCategorie = fonc.categorie %}
              <tr class=\"category\">
                <td colspan=\"{{ forfaits|length + 1 }}\">
                  {% if currentCategorie == 'Proposer des services' %}🔧{% endif %}
                  {% if currentCategorie == 'Répondre aux demandes' %}🙋{% endif %}
                  {% if currentCategorie == 'Profil utilisateur' %}👤{% endif %}
                  {% if currentCategorie == 'Assistance' %}🎧{% endif %}
                  {{ currentCategorie }}
                </td>
              </tr>
            {% endif %}
            <tr>
              <td>{{ fonc.label }}</td>
              {% for id, forfait in forfaits %}
                <td>
                  {% if cle in forfait.fonctionnalites %}
                    <span class=\"check\">✔</span>
                  {% else %}
                    <span class=\"cross\">✘</span>
                  {% endif %}
                </td>
              {% endfor %}
            </tr>
          {% endfor %}

          <!-- Boutons -->
          <tr class=\"category\"><td colspan=\"{{ forfaits|length + 1 }}\"></td></tr>
          <tr>
            <td></td>
            {% for id, forfait in forfaits %}
            <td>
              <a href=\"{{ path('app_forfait_modifier', {id: id}) }}\" class=\"btn-table btn-modifier\">✏️ Modifier</a>
            </td>
            {% endfor %}
          </tr>
          <tr>
            <td></td>
            {% for id, forfait in forfaits %}
            <td>
              <a href=\"{{ path('app_forfait_supprimer', {id: id}) }}\"
                 class=\"btn-table btn-supprimer\"
                 onclick=\"return confirm('Supprimer le forfait {{ forfait.nomForfait }} ?')\">🗑️ Supprimer</a>
            </td>
            {% endfor %}
          </tr>
        </tbody>
      </table>
    </div>
  </section>

</div>
{% endblock %}
", "forfaits1.html.twig", "C:\\laragon\\www\\Voisins connecté\\templates\\forfaits1.html.twig");
    }
}
