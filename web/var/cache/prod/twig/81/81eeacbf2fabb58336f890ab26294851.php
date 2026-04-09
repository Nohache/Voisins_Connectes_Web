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
class __TwigTemplate_7914a578641d5bb0a54158168536e9ab extends Template
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
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Gestion des forfaits";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 16));
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 20));
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["forfaits"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["forfait"]) {
            // line 32
            yield "        ";
            $context["isPremium"] = (CoreExtension::getAttribute($this->env, $this->source, $context["forfait"], "prix", [], "any", false, false, false, 32) > 0);
            // line 33
            yield "        <div class=\"forfait-card ";
            yield (((($tmp = ($context["isPremium"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("forfait-card--premium") : (""));
            yield "\">
          <div class=\"forfait-card-header\">
            <div class=\"plan-badge ";
            // line 35
            yield (((($tmp = ($context["isPremium"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("plan-premium") : ("plan-free"));
            yield "\">";
            yield (((($tmp = ($context["isPremium"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Payant") : ("Gratuit"));
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
            yield (((($tmp = ($context["isPremium"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("<span>/mois</span>") : (""));
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
        return array (  253 => 76,  246 => 74,  244 => 73,  236 => 70,  232 => 69,  227 => 66,  223 => 65,  217 => 61,  212 => 60,  208 => 59,  202 => 55,  197 => 54,  193 => 53,  187 => 49,  182 => 48,  177 => 47,  173 => 46,  158 => 41,  153 => 39,  149 => 38,  144 => 36,  138 => 35,  132 => 33,  129 => 32,  124 => 31,  118 => 28,  111 => 23,  102 => 21,  98 => 20,  95 => 19,  86 => 17,  82 => 16,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forfaits.html.twig", "C:\\laragon\\www\\Voisins connecté web\\web\\templates\\forfaits.html.twig");
    }
}
