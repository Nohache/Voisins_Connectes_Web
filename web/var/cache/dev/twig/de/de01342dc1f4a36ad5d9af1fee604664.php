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
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", ["success"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            yield "    <div class=\"flash-success\" style=\"max-width:1100px; margin: 0 auto 1rem; padding: 0.8rem 1.5rem; background: var(--vert); color: var(--vert-tres-fonce); border-radius: 1rem; font-weight: 500;\">✅ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "
  <!-- ══ CARTES (grands écrans) ══ -->
  <section class=\"forfaits-cards-section forfaits-desktop-only\">
    <h2 class=\"section-title\">Les forfaits disponibles</h2>
    <p class=\"section-sub\">Gérez les forfaits proposés aux membres de la plateforme.</p>
    <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forfait_ajouter");
        yield "\" class=\"btn-primary\" style=\"display:inline-block; margin-bottom:2rem;\">+ Ajouter un forfait</a>


    <div class=\"forfaits-cards-grid\">
      ";
        // line 29
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["forfaits"]) || array_key_exists("forfaits", $context) ? $context["forfaits"] : (function () { throw new RuntimeError('Variable "forfaits" does not exist.', 29, $this->source); })()))) {
            // line 30
            yield "        <p>Aucun forfait disponible.</p>
      ";
        } else {
            // line 32
            yield "        ";
            $context["categories"] = ["Proposer des services", "Répondre aux demandes", "Profil utilisateur", "Assistance"];
            // line 33
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["forfaits"]) || array_key_exists("forfaits", $context) ? $context["forfaits"] : (function () { throw new RuntimeError('Variable "forfaits" does not exist.', 33, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["forfait"]) {
                // line 34
                yield "          ";
                $context["active"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "fonctionnalites", [], "any", true, true, false, 34)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "fonctionnalites", [], "any", false, false, false, 34), [])) : ([]));
                // line 35
                yield "          <div class=\"forfait-card ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "prix", [], "any", false, false, false, 35) != "0")) ? ("forfait-card--premium") : (""));
                yield "\">
            <div class=\"forfait-card-header\">
              <div class=\"plan-badge ";
                // line 37
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "prix", [], "any", false, false, false, 37) == "0")) ? ("plan-free") : ("plan-premium"));
                yield "\">";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "prix", [], "any", false, false, false, 37) == "0")) ? ("Gratuit") : ("Payant"));
                yield "</div>
              <h2 class=\"forfait-card-title\">";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "nomForfait", [], "any", false, false, false, 38), "html", null, true);
                yield "</h2>
              <div class=\"forfait-card-price\">
                ";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "prix", [], "any", false, false, false, 40), "html", null, true);
                yield " €
                ";
                // line 41
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "prix", [], "any", false, false, false, 41) != "0")) {
                    yield "<span>/";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "duree", [], "any", false, false, false, 41), "html", null, true);
                    yield "</span>";
                }
                // line 42
                yield "              </div>
              <p class=\"forfait-card-desc\">";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "description_text", [], "any", true, true, false, 43)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "description_text", [], "any", false, false, false, 43), "Description du forfait")) : ("Description du forfait")), "html", null, true);
                yield "</p>
            </div>
            <div class=\"forfait-card-body\">
              ";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 46, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                    // line 47
                    yield "                <div class=\"forfait-feature-category\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["categorie"], "html", null, true);
                    yield "</div>
                <ul class=\"forfait-features\">
                  ";
                    // line 49
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fonctionnalites"]) || array_key_exists("fonctionnalites", $context) ? $context["fonctionnalites"] : (function () { throw new RuntimeError('Variable "fonctionnalites" does not exist.', 49, $this->source); })()));
                    foreach ($context['_seq'] as $context["key"] => $context["feature"]) {
                        // line 50
                        yield "                    ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "categorie", [], "any", false, false, false, 50) == $context["categorie"])) {
                            // line 51
                            yield "                      <li>
                        ";
                            // line 52
                            if (CoreExtension::inFilter($context["key"], (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 52, $this->source); })()))) {
                                // line 53
                                yield "                          <span class=\"check\">✔</span>
                        ";
                            } else {
                                // line 55
                                yield "                          <span class=\"cross\">✘</span>
                        ";
                            }
                            // line 57
                            yield "                        ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "label", [], "any", false, false, false, 57), "html", null, true);
                            yield "
                      </li>
                    ";
                        }
                        // line 60
                        yield "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['key'], $context['feature'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 61
                    yield "                </ul>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                yield "            </div>
            <div class=\"forfait-card-footer\">
              <a href=\"";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forfait_modifier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "id", [], "any", false, false, false, 65)]), "html", null, true);
                yield "\" class=\"btn-table btn-modifier\">✏️ Modifier</a>
              <a href=\"";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forfait_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "id", [], "any", false, false, false, 66)]), "html", null, true);
                yield "\" class=\"btn-table btn-supprimer\" onclick=\"return confirm('Supprimer le forfait ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "nomForfait", [], "any", false, false, false, 66), "html", null, true);
                yield " ?')\">🗑️ Supprimer</a>
            </div>
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['forfait'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            yield "      ";
        }
        // line 71
        yield "    </div>
  </section>

  <!-- ══ TABLEAU (petits écrans) ══ -->
  <section class=\"forfaits-section forfaits-mobile-only\">
    <h2 class=\"section-title\">Les forfaits disponibles</h2>
    <p class=\"section-sub\">Aperçu des fonctionnalités incluses dans chaque forfait.</p>
    <a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forfait_ajouter");
        yield "\" class=\"btn-primary\" style=\"display:inline-block; margin-bottom:2rem;\">➕ Ajouter un forfait</a>


    <div class=\"forfaits-wrapper\">
      ";
        // line 82
        $context["categories"] = ["Proposer des services", "Répondre aux demandes", "Profil utilisateur", "Assistance"];
        // line 83
        yield "      ";
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["forfaits"]) || array_key_exists("forfaits", $context) ? $context["forfaits"] : (function () { throw new RuntimeError('Variable "forfaits" does not exist.', 83, $this->source); })()))) {
            // line 84
            yield "        <p>Aucun forfait disponible.</p>
      ";
        } else {
            // line 86
            yield "        <table class=\"forfaits-table\">
          <thead>
            <tr>
              <th class=\"th-label\"></th>
              ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["forfaits"]) || array_key_exists("forfaits", $context) ? $context["forfaits"] : (function () { throw new RuntimeError('Variable "forfaits" does not exist.', 90, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["forfait"]) {
                // line 91
                yield "                <th class=\"th-plan\">
                  <div class=\"plan-badge ";
                // line 92
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "prix", [], "any", false, false, false, 92) == "0")) ? ("plan-free") : ("plan-premium"));
                yield "\">";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "prix", [], "any", false, false, false, 92) == "0")) ? ("Gratuit") : ("Payant"));
                yield "</div>
                  <div class=\"plan-name\">";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "nomForfait", [], "any", false, false, false, 93), "html", null, true);
                yield "</div>
                  <div class=\"plan-price\">";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "prix", [], "any", false, false, false, 94), "html", null, true);
                yield " € ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "prix", [], "any", false, false, false, 94) != "0")) {
                    yield "<span>/";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "duree", [], "any", false, false, false, 94), "html", null, true);
                    yield "</span>";
                }
                yield "</div>
                </th>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['forfait'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            yield "            </tr>
          </thead>
          <tbody>
            ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 100, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 101
                yield "              <tr class=\"category\"><td colspan=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["forfaits"]) || array_key_exists("forfaits", $context) ? $context["forfaits"] : (function () { throw new RuntimeError('Variable "forfaits" does not exist.', 101, $this->source); })())) + 1), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["categorie"], "html", null, true);
                yield "</td></tr>
              ";
                // line 102
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fonctionnalites"]) || array_key_exists("fonctionnalites", $context) ? $context["fonctionnalites"] : (function () { throw new RuntimeError('Variable "fonctionnalites" does not exist.', 102, $this->source); })()));
                foreach ($context['_seq'] as $context["key"] => $context["feature"]) {
                    // line 103
                    yield "                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "categorie", [], "any", false, false, false, 103) == $context["categorie"])) {
                        // line 104
                        yield "                  <tr>
                    <td>";
                        // line 105
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "label", [], "any", false, false, false, 105), "html", null, true);
                        yield "</td>
                    ";
                        // line 106
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["forfaits"]) || array_key_exists("forfaits", $context) ? $context["forfaits"] : (function () { throw new RuntimeError('Variable "forfaits" does not exist.', 106, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["forfait"]) {
                            // line 107
                            yield "                      ";
                            $context["active"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "fonctionnalites", [], "any", true, true, false, 107)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "fonctionnalites", [], "any", false, false, false, 107), [])) : ([]));
                            // line 108
                            yield "                      <td>
                        ";
                            // line 109
                            if (CoreExtension::inFilter($context["key"], (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 109, $this->source); })()))) {
                                // line 110
                                yield "                          <span class=\"check\">✔</span>
                        ";
                            } else {
                                // line 112
                                yield "                          <span class=\"cross\">✘</span>
                        ";
                            }
                            // line 114
                            yield "                      </td>
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['forfait'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 116
                        yield "                  </tr>
                ";
                    }
                    // line 118
                    yield "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['feature'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 119
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            yield "            <tr class=\"category\"><td colspan=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["forfaits"]) || array_key_exists("forfaits", $context) ? $context["forfaits"] : (function () { throw new RuntimeError('Variable "forfaits" does not exist.', 120, $this->source); })())) + 1), "html", null, true);
            yield "\"></td></tr>
            <tr>
              <td></td>
              ";
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["forfaits"]) || array_key_exists("forfaits", $context) ? $context["forfaits"] : (function () { throw new RuntimeError('Variable "forfaits" does not exist.', 123, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["forfait"]) {
                // line 124
                yield "                <td style=\"text-align:center; vertical-align:middle; width:22.5%;\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forfait_modifier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "id", [], "any", false, false, false, 124)]), "html", null, true);
                yield "\" class=\"btn-table btn-modifier\">✏️ Modifier</a></td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['forfait'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            yield "            </tr>
            <tr>
              <td></td>
              ";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["forfaits"]) || array_key_exists("forfaits", $context) ? $context["forfaits"] : (function () { throw new RuntimeError('Variable "forfaits" does not exist.', 129, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["forfait"]) {
                // line 130
                yield "                <td style=\"text-align:center; vertical-align:middle; width:22.5%;\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forfait_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "id", [], "any", false, false, false, 130)]), "html", null, true);
                yield "\" class=\"btn-table btn-supprimer\" onclick=\"return confirm('Supprimer le forfait ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "nomForfait", [], "any", false, false, false, 130), "html", null, true);
                yield " ?')\">🗑️ Supprimer</a></td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['forfait'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            yield "            </tr>
          </tbody>
        </table>
      ";
        }
        // line 136
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
        return array (  448 => 136,  442 => 132,  431 => 130,  427 => 129,  422 => 126,  413 => 124,  409 => 123,  402 => 120,  396 => 119,  390 => 118,  386 => 116,  379 => 114,  375 => 112,  371 => 110,  369 => 109,  366 => 108,  363 => 107,  359 => 106,  355 => 105,  352 => 104,  349 => 103,  345 => 102,  338 => 101,  334 => 100,  329 => 97,  314 => 94,  310 => 93,  304 => 92,  301 => 91,  297 => 90,  291 => 86,  287 => 84,  284 => 83,  282 => 82,  275 => 78,  266 => 71,  263 => 70,  251 => 66,  247 => 65,  243 => 63,  236 => 61,  230 => 60,  223 => 57,  219 => 55,  215 => 53,  213 => 52,  210 => 51,  207 => 50,  203 => 49,  197 => 47,  193 => 46,  187 => 43,  184 => 42,  178 => 41,  174 => 40,  169 => 38,  163 => 37,  157 => 35,  154 => 34,  149 => 33,  146 => 32,  142 => 30,  140 => 29,  133 => 25,  126 => 20,  117 => 18,  113 => 17,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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

  <!-- ══ CARTES (grands écrans) ══ -->
  <section class=\"forfaits-cards-section forfaits-desktop-only\">
    <h2 class=\"section-title\">Les forfaits disponibles</h2>
    <p class=\"section-sub\">Gérez les forfaits proposés aux membres de la plateforme.</p>
    <a href=\"{{ path('app_forfait_ajouter') }}\" class=\"btn-primary\" style=\"display:inline-block; margin-bottom:2rem;\">+ Ajouter un forfait</a>


    <div class=\"forfaits-cards-grid\">
      {% if forfaits is empty %}
        <p>Aucun forfait disponible.</p>
      {% else %}
        {% set categories = ['Proposer des services', 'Répondre aux demandes', 'Profil utilisateur', 'Assistance'] %}
        {% for forfait in forfaits %}
          {% set active = forfait.fonctionnalites|default([]) %}
          <div class=\"forfait-card {{ forfait.prix != '0' ? 'forfait-card--premium' : '' }}\">
            <div class=\"forfait-card-header\">
              <div class=\"plan-badge {{ forfait.prix == '0' ? 'plan-free' : 'plan-premium' }}\">{{ forfait.prix == '0' ? 'Gratuit' : 'Payant' }}</div>
              <h2 class=\"forfait-card-title\">{{ forfait.nomForfait }}</h2>
              <div class=\"forfait-card-price\">
                {{ forfait.prix }} €
                {% if forfait.prix != '0' %}<span>/{{ forfait.duree }}</span>{% endif %}
              </div>
              <p class=\"forfait-card-desc\">{{ forfait.description_text|default('Description du forfait') }}</p>
            </div>
            <div class=\"forfait-card-body\">
              {% for categorie in categories %}
                <div class=\"forfait-feature-category\">{{ categorie }}</div>
                <ul class=\"forfait-features\">
                  {% for key, feature in fonctionnalites %}
                    {% if feature.categorie == categorie %}
                      <li>
                        {% if key in active %}
                          <span class=\"check\">✔</span>
                        {% else %}
                          <span class=\"cross\">✘</span>
                        {% endif %}
                        {{ feature.label }}
                      </li>
                    {% endif %}
                  {% endfor %}
                </ul>
              {% endfor %}
            </div>
            <div class=\"forfait-card-footer\">
              <a href=\"{{ path('app_forfait_modifier', {id: forfait.id}) }}\" class=\"btn-table btn-modifier\">✏️ Modifier</a>
              <a href=\"{{ path('app_forfait_supprimer', {id: forfait.id}) }}\" class=\"btn-table btn-supprimer\" onclick=\"return confirm('Supprimer le forfait {{ forfait.nomForfait }} ?')\">🗑️ Supprimer</a>
            </div>
          </div>
        {% endfor %}
      {% endif %}
    </div>
  </section>

  <!-- ══ TABLEAU (petits écrans) ══ -->
  <section class=\"forfaits-section forfaits-mobile-only\">
    <h2 class=\"section-title\">Les forfaits disponibles</h2>
    <p class=\"section-sub\">Aperçu des fonctionnalités incluses dans chaque forfait.</p>
    <a href=\"{{ path('app_forfait_ajouter') }}\" class=\"btn-primary\" style=\"display:inline-block; margin-bottom:2rem;\">➕ Ajouter un forfait</a>


    <div class=\"forfaits-wrapper\">
      {% set categories = ['Proposer des services', 'Répondre aux demandes', 'Profil utilisateur', 'Assistance'] %}
      {% if forfaits is empty %}
        <p>Aucun forfait disponible.</p>
      {% else %}
        <table class=\"forfaits-table\">
          <thead>
            <tr>
              <th class=\"th-label\"></th>
              {% for forfait in forfaits %}
                <th class=\"th-plan\">
                  <div class=\"plan-badge {{ forfait.prix == '0' ? 'plan-free' : 'plan-premium' }}\">{{ forfait.prix == '0' ? 'Gratuit' : 'Payant' }}</div>
                  <div class=\"plan-name\">{{ forfait.nomForfait }}</div>
                  <div class=\"plan-price\">{{ forfait.prix }} € {% if forfait.prix != '0' %}<span>/{{ forfait.duree }}</span>{% endif %}</div>
                </th>
              {% endfor %}
            </tr>
          </thead>
          <tbody>
            {% for categorie in categories %}
              <tr class=\"category\"><td colspan=\"{{ forfaits|length + 1 }}\">{{ categorie }}</td></tr>
              {% for key, feature in fonctionnalites %}
                {% if feature.categorie == categorie %}
                  <tr>
                    <td>{{ feature.label }}</td>
                    {% for forfait in forfaits %}
                      {% set active = forfait.fonctionnalites|default([]) %}
                      <td>
                        {% if key in active %}
                          <span class=\"check\">✔</span>
                        {% else %}
                          <span class=\"cross\">✘</span>
                        {% endif %}
                      </td>
                    {% endfor %}
                  </tr>
                {% endif %}
              {% endfor %}
            {% endfor %}
            <tr class=\"category\"><td colspan=\"{{ forfaits|length + 1 }}\"></td></tr>
            <tr>
              <td></td>
              {% for forfait in forfaits %}
                <td style=\"text-align:center; vertical-align:middle; width:22.5%;\"><a href=\"{{ path('app_forfait_modifier', {id: forfait.id}) }}\" class=\"btn-table btn-modifier\">✏️ Modifier</a></td>
              {% endfor %}
            </tr>
            <tr>
              <td></td>
              {% for forfait in forfaits %}
                <td style=\"text-align:center; vertical-align:middle; width:22.5%;\"><a href=\"{{ path('app_forfait_supprimer', {id: forfait.id}) }}\" class=\"btn-table btn-supprimer\" onclick=\"return confirm('Supprimer le forfait {{ forfait.nomForfait }} ?')\">🗑️ Supprimer</a></td>
              {% endfor %}
            </tr>
          </tbody>
        </table>
      {% endif %}
    </div>
  </section>

</div>
{% endblock %}
", "forfaits.html.twig", "C:\\laragon\\www\\Voisins connecté web\\web\\templates\\forfaits.html.twig");
    }
}
