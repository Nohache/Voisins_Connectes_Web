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

/* inscription.html.twig */
class __TwigTemplate_e7e261d72c055766ce8a70451fda7574 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription.html.twig"));

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

        yield "Inscrire un gestionnaire - VoisinsConnectés";
        
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
      <h1 class=\"hero-title\">Inscrire un <span>gestionnaire</span></h1>
      <p class=\"hero-desc\">Créez un nouveau compte gestionnaire pour accéder à la plateforme.</p>
    </div>
  </section>

  <section class=\"forfaits-section\">

    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", ["success"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            yield "      <div class=\"flash-success\" style=\"max-width:600px; margin: 0 auto 1rem; padding: 0.8rem 1.5rem; background: var(--vert); color: var(--vert-tres-fonce); border-radius: 1rem; font-weight: 500;\">✅ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "flashes", ["error"], "method", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 21
            yield "      <div class=\"flash-error\" style=\"max-width:600px; margin: 0 auto 1rem; padding: 0.8rem 1.5rem; background: #fee2e2; color: #dc2626; border-radius: 1rem; font-weight: 500;\">❌ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "
    <div class=\"forfaits-wrapper\" style=\"max-width: 620px;\">
      <form method=\"POST\" action=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
        yield "\">
        <table class=\"forfaits-table\">
          <thead>
            <tr>
              <th colspan=\"2\" style=\"text-align:center; font-family:'Playfair Display',serif; font-size:1.3rem; padding: 1.5rem;\">
                👤 Nouveau gestionnaire
              </th>
            </tr>
          </thead>
          <tbody>

            <tr class=\"category\"><td colspan=\"2\">📋 Informations personnelles</td></tr>

            <tr>
              <td>Nom</td>
              <td><input type=\"text\" name=\"nom\" class=\"form-input\" placeholder=\"Dupont\" required></td>
            </tr>
            <tr>
              <td>Prénom</td>
              <td><input type=\"text\" name=\"prenom\" class=\"form-input\" placeholder=\"Marie\" required></td>
            </tr>
            <tr>
              <td>Email</td>
              <td><input type=\"email\" name=\"email\" class=\"form-input\" placeholder=\"votre@email.com\" required></td>
            </tr>
            <tr>
              <td>Téléphone</td>
              <td><input type=\"tel\" name=\"telephone\" class=\"form-input\" placeholder=\"06 12 34 56 78\"></td>
            </tr>

            <tr class=\"category\"><td colspan=\"2\">🔐 Sécurité</td></tr>

            <tr>
              <td>Mot de passe</td>
              <td><input type=\"password\" name=\"password\" class=\"form-input\" placeholder=\"••••••••\" required></td>
            </tr>
            <tr>
              <td>Confirmer</td>
              <td><input type=\"password\" name=\"password_confirm\" class=\"form-input\" placeholder=\"••••••••\" required></td>
            </tr>

            <tr class=\"category\"><td colspan=\"2\"></td></tr>
            <tr>
              <td style=\"text-align:left;\">
                <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        yield "\" class=\"btn-annuler\">Annuler</a>
              </td>
              <td style=\"text-align:center; padding: 1rem 0;\">
                <button type=\"submit\" class=\"btn-primary\">Créer le compte</button>
              </td>
            </tr>

          </tbody>
        </table>
      </form>
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
        return "inscription.html.twig";
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
        return array (  191 => 69,  144 => 25,  140 => 23,  131 => 21,  126 => 20,  117 => 18,  113 => 17,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Inscrire un gestionnaire - VoisinsConnectés{% endblock %}

{% block body %}
<div class=\"home\">

  <section class=\"dashboard-hero\">
    <div class=\"dashboard-hero-text\">
      <h1 class=\"hero-title\">Inscrire un <span>gestionnaire</span></h1>
      <p class=\"hero-desc\">Créez un nouveau compte gestionnaire pour accéder à la plateforme.</p>
    </div>
  </section>

  <section class=\"forfaits-section\">

    {% for message in app.flashes('success') %}
      <div class=\"flash-success\" style=\"max-width:600px; margin: 0 auto 1rem; padding: 0.8rem 1.5rem; background: var(--vert); color: var(--vert-tres-fonce); border-radius: 1rem; font-weight: 500;\">✅ {{ message }}</div>
    {% endfor %}
    {% for message in app.flashes('error') %}
      <div class=\"flash-error\" style=\"max-width:600px; margin: 0 auto 1rem; padding: 0.8rem 1.5rem; background: #fee2e2; color: #dc2626; border-radius: 1rem; font-weight: 500;\">❌ {{ message }}</div>
    {% endfor %}

    <div class=\"forfaits-wrapper\" style=\"max-width: 620px;\">
      <form method=\"POST\" action=\"{{ path('inscription') }}\">
        <table class=\"forfaits-table\">
          <thead>
            <tr>
              <th colspan=\"2\" style=\"text-align:center; font-family:'Playfair Display',serif; font-size:1.3rem; padding: 1.5rem;\">
                👤 Nouveau gestionnaire
              </th>
            </tr>
          </thead>
          <tbody>

            <tr class=\"category\"><td colspan=\"2\">📋 Informations personnelles</td></tr>

            <tr>
              <td>Nom</td>
              <td><input type=\"text\" name=\"nom\" class=\"form-input\" placeholder=\"Dupont\" required></td>
            </tr>
            <tr>
              <td>Prénom</td>
              <td><input type=\"text\" name=\"prenom\" class=\"form-input\" placeholder=\"Marie\" required></td>
            </tr>
            <tr>
              <td>Email</td>
              <td><input type=\"email\" name=\"email\" class=\"form-input\" placeholder=\"votre@email.com\" required></td>
            </tr>
            <tr>
              <td>Téléphone</td>
              <td><input type=\"tel\" name=\"telephone\" class=\"form-input\" placeholder=\"06 12 34 56 78\"></td>
            </tr>

            <tr class=\"category\"><td colspan=\"2\">🔐 Sécurité</td></tr>

            <tr>
              <td>Mot de passe</td>
              <td><input type=\"password\" name=\"password\" class=\"form-input\" placeholder=\"••••••••\" required></td>
            </tr>
            <tr>
              <td>Confirmer</td>
              <td><input type=\"password\" name=\"password_confirm\" class=\"form-input\" placeholder=\"••••••••\" required></td>
            </tr>

            <tr class=\"category\"><td colspan=\"2\"></td></tr>
            <tr>
              <td style=\"text-align:left;\">
                <a href=\"{{ path('index') }}\" class=\"btn-annuler\">Annuler</a>
              </td>
              <td style=\"text-align:center; padding: 1rem 0;\">
                <button type=\"submit\" class=\"btn-primary\">Créer le compte</button>
              </td>
            </tr>

          </tbody>
        </table>
      </form>
    </div>
  </section>

</div>
{% endblock %}
", "inscription.html.twig", "C:\\laragon\\www\\Voisins connecté web\\web\\templates\\inscription.html.twig");
    }
}
