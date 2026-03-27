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

/* modif_forfait.html.twig */
class __TwigTemplate_54463c8bd8549c3eca5f20a17ff0475c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modif_forfait.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modif_forfait.html.twig"));

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

        yield "Modifier le forfait - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forfait"]) || array_key_exists("forfait", $context) ? $context["forfait"] : (function () { throw new RuntimeError('Variable "forfait" does not exist.', 3, $this->source); })()), "nomForfait", [], "any", false, false, false, 3), "html", null, true);
        
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
      <h1 class=\"hero-title\">Modifier le forfait <span>";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forfait"]) || array_key_exists("forfait", $context) ? $context["forfait"] : (function () { throw new RuntimeError('Variable "forfait" does not exist.', 11, $this->source); })()), "nomForfait", [], "any", false, false, false, 11), "html", null, true);
        yield "</span></h1>
      <p class=\"hero-desc\">Modifiez les informations et les fonctionnalités de ce forfait.</p>
    </div>
  </section>

  <section class=\"forfaits-section\">
    <h2 class=\"section-title\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forfait"]) || array_key_exists("forfait", $context) ? $context["forfait"] : (function () { throw new RuntimeError('Variable "forfait" does not exist.', 17, $this->source); })()), "nomForfait", [], "any", false, false, false, 17), "html", null, true);
        yield "</h2>

    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", ["success"], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            yield "      <div class=\"flash-success\">✅ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "
    <form method=\"POST\" action=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forfait_modifier", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["forfait"]) || array_key_exists("forfait", $context) ? $context["forfait"] : (function () { throw new RuntimeError('Variable "forfait" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23)]), "html", null, true);
        yield "\">
    <div class=\"forfaits-wrapper\">
      <table class=\"forfaits-table\">

        <!-- EN-TÊTE : champs nom / prix / durée éditables -->
        <thead>
          <tr>
            <th class=\"th-label\"></th>
            <th class=\"th-plan\" style=\"min-width: 220px;\">
            <label for=\"nomForfait\" class=\"form-label\">Nom du forfait</label>
              <input type=\"text\" name=\"nomForfait\" value=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forfait"]) || array_key_exists("forfait", $context) ? $context["forfait"] : (function () { throw new RuntimeError('Variable "forfait" does not exist.', 33, $this->source); })()), "nomForfait", [], "any", false, false, false, 33), "html", null, true);
        yield "\" class=\"form-input\" style=\"margin: 0.5rem 0; text-align:center;\">
              <div style=\"display:flex; gap:0.5rem; align-items:center; justify-content:center; margin-top:0.3rem;\">
              <label for=\"prix\" class=\"form-label\">Prix </label>
                <input type=\"number\" name=\"prix\" value=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forfait"]) || array_key_exists("forfait", $context) ? $context["forfait"] : (function () { throw new RuntimeError('Variable "forfait" does not exist.', 36, $this->source); })()), "prix", [], "any", false, false, false, 36), "html", null, true);
        yield "\" step=\"0.01\" min=\"0\" class=\"form-input\" style=\"width:80px; text-align:center;\">
                <span style=\"color:var(--gris); font-size:0.85rem;\">€ /</span>
                <select name=\"duree\" id=\"duree\" class=\"form-input\" style=\"width:90px;\">
                    <option value=\"gratuit\" ";
        // line 39
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["forfait"]) || array_key_exists("forfait", $context) ? $context["forfait"] : (function () { throw new RuntimeError('Variable "forfait" does not exist.', 39, $this->source); })()), "duree", [], "any", false, false, false, 39) == "gratuit")) {
            yield "selected";
        }
        yield ">gratuit</option>
                    <option value=\"mois\"    ";
        // line 40
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["forfait"]) || array_key_exists("forfait", $context) ? $context["forfait"] : (function () { throw new RuntimeError('Variable "forfait" does not exist.', 40, $this->source); })()), "duree", [], "any", false, false, false, 40) == "mois")) {
            yield "selected";
        }
        yield ">mois</option>
                    <option value=\"an\"      ";
        // line 41
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["forfait"]) || array_key_exists("forfait", $context) ? $context["forfait"] : (function () { throw new RuntimeError('Variable "forfait" does not exist.', 41, $this->source); })()), "duree", [], "any", false, false, false, 41) == "an")) {
            yield "selected";
        }
        yield ">an</option>
                </select>
              </div>
            </th>
          </tr>
        </thead>

        <!-- FONCTIONNALITÉS avec cases à cocher -->
        <tbody>
          ";
        // line 50
        $context["currentCategorie"] = "";
        // line 51
        yield "          ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fonctionnalites"]) || array_key_exists("fonctionnalites", $context) ? $context["fonctionnalites"] : (function () { throw new RuntimeError('Variable "fonctionnalites" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["cle"] => $context["fonc"]) {
            // line 52
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["fonc"], "categorie", [], "any", false, false, false, 52) != (isset($context["currentCategorie"]) || array_key_exists("currentCategorie", $context) ? $context["currentCategorie"] : (function () { throw new RuntimeError('Variable "currentCategorie" does not exist.', 52, $this->source); })()))) {
                // line 53
                yield "              ";
                $context["currentCategorie"] = CoreExtension::getAttribute($this->env, $this->source, $context["fonc"], "categorie", [], "any", false, false, false, 53);
                // line 54
                yield "              <tr class=\"category\">
                <td colspan=\"2\">
                  ";
                // line 56
                if (((isset($context["currentCategorie"]) || array_key_exists("currentCategorie", $context) ? $context["currentCategorie"] : (function () { throw new RuntimeError('Variable "currentCategorie" does not exist.', 56, $this->source); })()) == "Proposer des services")) {
                    yield "🔧";
                }
                // line 57
                yield "                  ";
                if (((isset($context["currentCategorie"]) || array_key_exists("currentCategorie", $context) ? $context["currentCategorie"] : (function () { throw new RuntimeError('Variable "currentCategorie" does not exist.', 57, $this->source); })()) == "Répondre aux demandes")) {
                    yield "🙋";
                }
                // line 58
                yield "                  ";
                if (((isset($context["currentCategorie"]) || array_key_exists("currentCategorie", $context) ? $context["currentCategorie"] : (function () { throw new RuntimeError('Variable "currentCategorie" does not exist.', 58, $this->source); })()) == "Profil utilisateur")) {
                    yield "👤";
                }
                // line 59
                yield "                  ";
                if (((isset($context["currentCategorie"]) || array_key_exists("currentCategorie", $context) ? $context["currentCategorie"] : (function () { throw new RuntimeError('Variable "currentCategorie" does not exist.', 59, $this->source); })()) == "Assistance")) {
                    yield "🎧";
                }
                // line 60
                yield "                  ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentCategorie"]) || array_key_exists("currentCategorie", $context) ? $context["currentCategorie"] : (function () { throw new RuntimeError('Variable "currentCategorie" does not exist.', 60, $this->source); })()), "html", null, true);
                yield "
                </td>
              </tr>
            ";
            }
            // line 64
            yield "            <tr>
              <td>";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fonc"], "label", [], "any", false, false, false, 65), "html", null, true);
            yield "</td>
              <td>
                <label class=\"toggle-label\">
                  <input type=\"checkbox\"
                         name=\"fonc_";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["cle"], "html", null, true);
            yield "\"
                         class=\"toggle-checkbox\"
                         ";
            // line 71
            if (CoreExtension::inFilter($context["cle"], CoreExtension::getAttribute($this->env, $this->source, (isset($context["forfait"]) || array_key_exists("forfait", $context) ? $context["forfait"] : (function () { throw new RuntimeError('Variable "forfait" does not exist.', 71, $this->source); })()), "fonctionnalites", [], "any", false, false, false, 71))) {
                yield "checked";
            }
            yield ">
                  <span class=\"toggle-switch\"></span>
                </label>
              </td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['cle'], $context['fonc'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        yield "
          <!-- BOUTONS -->
          <tr class=\"category\"><td colspan=\"2\"></td></tr>
            <tr>
                <td style=\"text-align:left;\">
                    <a href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion_publication");
        yield "\" class=\"btn-table btn-annuler\">Annuler</a>
                </td>
                <td style=\"text-align:center;\">
                    <button type=\"submit\" class=\"btn-table btn-modifier\">💾 Enregistrer</button>
                </td>
            </tr>
          </tr>
        </tbody>

      </table>
    </div>
    </form>
  </section>

</div>

<script>
  document.getElementById('duree').addEventListener('change', function() {
    if (this.value === 'gratuit') {
      document.querySelector('input[name=\"prix\"]').value = '0';
    }
  });
</script>
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
        return "modif_forfait.html.twig";
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
        return array (  269 => 82,  262 => 77,  248 => 71,  243 => 69,  236 => 65,  233 => 64,  225 => 60,  220 => 59,  215 => 58,  210 => 57,  206 => 56,  202 => 54,  199 => 53,  196 => 52,  191 => 51,  189 => 50,  175 => 41,  169 => 40,  163 => 39,  157 => 36,  151 => 33,  138 => 23,  135 => 22,  126 => 20,  122 => 19,  117 => 17,  108 => 11,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Modifier le forfait - {{ forfait.nomForfait }}{% endblock %}

{% block body %}
<div class=\"home\">

  <!-- HERO -->
  <section class=\"dashboard-hero\">
    <div class=\"dashboard-hero-text\">
      <h1 class=\"hero-title\">Modifier le forfait <span>{{ forfait.nomForfait }}</span></h1>
      <p class=\"hero-desc\">Modifiez les informations et les fonctionnalités de ce forfait.</p>
    </div>
  </section>

  <section class=\"forfaits-section\">
    <h2 class=\"section-title\">{{ forfait.nomForfait }}</h2>

    {% for message in app.flashes('success') %}
      <div class=\"flash-success\">✅ {{ message }}</div>
    {% endfor %}

    <form method=\"POST\" action=\"{{ path('app_forfait_modifier', {id: forfait.id}) }}\">
    <div class=\"forfaits-wrapper\">
      <table class=\"forfaits-table\">

        <!-- EN-TÊTE : champs nom / prix / durée éditables -->
        <thead>
          <tr>
            <th class=\"th-label\"></th>
            <th class=\"th-plan\" style=\"min-width: 220px;\">
            <label for=\"nomForfait\" class=\"form-label\">Nom du forfait</label>
              <input type=\"text\" name=\"nomForfait\" value=\"{{ forfait.nomForfait }}\" class=\"form-input\" style=\"margin: 0.5rem 0; text-align:center;\">
              <div style=\"display:flex; gap:0.5rem; align-items:center; justify-content:center; margin-top:0.3rem;\">
              <label for=\"prix\" class=\"form-label\">Prix </label>
                <input type=\"number\" name=\"prix\" value=\"{{ forfait.prix }}\" step=\"0.01\" min=\"0\" class=\"form-input\" style=\"width:80px; text-align:center;\">
                <span style=\"color:var(--gris); font-size:0.85rem;\">€ /</span>
                <select name=\"duree\" id=\"duree\" class=\"form-input\" style=\"width:90px;\">
                    <option value=\"gratuit\" {% if forfait.duree == 'gratuit' %}selected{% endif %}>gratuit</option>
                    <option value=\"mois\"    {% if forfait.duree == 'mois'    %}selected{% endif %}>mois</option>
                    <option value=\"an\"      {% if forfait.duree == 'an'      %}selected{% endif %}>an</option>
                </select>
              </div>
            </th>
          </tr>
        </thead>

        <!-- FONCTIONNALITÉS avec cases à cocher -->
        <tbody>
          {% set currentCategorie = '' %}
          {% for cle, fonc in fonctionnalites %}
            {% if fonc.categorie != currentCategorie %}
              {% set currentCategorie = fonc.categorie %}
              <tr class=\"category\">
                <td colspan=\"2\">
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
              <td>
                <label class=\"toggle-label\">
                  <input type=\"checkbox\"
                         name=\"fonc_{{ cle }}\"
                         class=\"toggle-checkbox\"
                         {% if cle in forfait.fonctionnalites %}checked{% endif %}>
                  <span class=\"toggle-switch\"></span>
                </label>
              </td>
            </tr>
          {% endfor %}

          <!-- BOUTONS -->
          <tr class=\"category\"><td colspan=\"2\"></td></tr>
            <tr>
                <td style=\"text-align:left;\">
                    <a href=\"{{ path('gestion_publication') }}\" class=\"btn-table btn-annuler\">Annuler</a>
                </td>
                <td style=\"text-align:center;\">
                    <button type=\"submit\" class=\"btn-table btn-modifier\">💾 Enregistrer</button>
                </td>
            </tr>
          </tr>
        </tbody>

      </table>
    </div>
    </form>
  </section>

</div>

<script>
  document.getElementById('duree').addEventListener('change', function() {
    if (this.value === 'gratuit') {
      document.querySelector('input[name=\"prix\"]').value = '0';
    }
  });
</script>
{% endblock %}

", "modif_forfait.html.twig", "C:\\laragon\\www\\Voisins connecté web\\web\\templates\\modif_forfait.html.twig");
    }
}
