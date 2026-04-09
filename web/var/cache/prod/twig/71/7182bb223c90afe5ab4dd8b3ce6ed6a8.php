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
class __TwigTemplate_de9bc552c2d13a7f11c10e087b2cd75c extends Template
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
        yield "Validation des demandes d'adhésion";
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
      <h1 class=\"hero-title\">Demandes d'<span>adhésion</span></h1>
      <p class=\"hero-desc\">Validez ou refusez les demandes d'adhésion soumises par les membres de la plateforme.</p>
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
  <section class=\"publications-section\">
    <h2 class=\"section-title\">Demandes en attente</h2>
    <p class=\"section-sub\">Liste des publications soumises par les membres en attente de validation.</p>

    <div class=\"publications-wrapper\">
      <table class=\"publications-table\">
        <thead>
          <tr>
            <th>Titre</th>
            <th>Description</th>
            <th>Type</th>
            <th>Prix proposé</th>
            <th>Adresse</th>
            <th>Catégorie</th>
            <th>Membre</th>
            <th>Date demande</th>
            <th>État</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["reponses"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 42
            yield "            ";
            $context["service"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["servicesIndex"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "idService", [], "any", false, false, false, 42), [], "array", true, true, false, 42) &&  !(null === (($_v0 = ($context["servicesIndex"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "idService", [], "any", false, false, false, 42)] ?? null) : null)))) ? ((($_v1 = ($context["servicesIndex"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "idService", [], "any", false, false, false, 42)] ?? null) : null)) : (null));
            // line 43
            yield "            ";
            $context["membre"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["membresIndex"] ?? null), (((CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "idMembre", [], "any", true, true, false, 43) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "idMembre", [], "any", false, false, false, 43)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "idMembre", [], "any", false, false, false, 43)) : (0)), [], "array", true, true, false, 43) &&  !(null === (($_v2 = ($context["membresIndex"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[(((CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "idMembre", [], "any", true, true, false, 43) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "idMembre", [], "any", false, false, false, 43)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "idMembre", [], "any", false, false, false, 43)) : (0))] ?? null) : null)))) ? ((($_v3 = ($context["membresIndex"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[(((CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "idMembre", [], "any", true, true, false, 43) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "idMembre", [], "any", false, false, false, 43)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "idMembre", [], "any", false, false, false, 43)) : (0))] ?? null) : null)) : (null));
            // line 44
            yield "            ";
            $context["categorie"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["categoriesIndex"] ?? null), (((CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "idCategorie", [], "any", true, true, false, 44) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "idCategorie", [], "any", false, false, false, 44)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "idCategorie", [], "any", false, false, false, 44)) : (0)), [], "array", true, true, false, 44) &&  !(null === (($_v4 = ($context["categoriesIndex"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[(((CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "idCategorie", [], "any", true, true, false, 44) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "idCategorie", [], "any", false, false, false, 44)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "idCategorie", [], "any", false, false, false, 44)) : (0))] ?? null) : null)))) ? ((($_v5 = ($context["categoriesIndex"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[(((CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "idCategorie", [], "any", true, true, false, 44) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "idCategorie", [], "any", false, false, false, 44)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "idCategorie", [], "any", false, false, false, 44)) : (0))] ?? null) : null)) : (null));
            // line 45
            yield "            <tr>
              <td>";
            // line 46
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "titreService", [], "any", true, true, false, 46) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "titreService", [], "any", false, false, false, 46)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "titreService", [], "any", false, false, false, 46), "html", null, true)) : ("—"));
            yield "</td>
              <td class=\"td-desc\">";
            // line 47
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "descriptionService", [], "any", true, true, false, 47) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "descriptionService", [], "any", false, false, false, 47)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "descriptionService", [], "any", false, false, false, 47), "html", null, true)) : ("—"));
            yield "</td>
              <td>
                ";
            // line 49
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "typeService", [], "any", false, false, false, 49) == "demande")) {
                // line 50
                yield "                  <span class=\"badge badge-demande\">Demande</span>
                ";
            } else {
                // line 52
                yield "                  <span class=\"badge badge-offre\">Offre</span>
                ";
            }
            // line 54
            yield "              </td>
              <td>";
            // line 55
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "prix", [], "any", true, true, false, 55)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "prix", [], "any", false, false, false, 55), 2, ",", " ") . " €"), "html", null, true)) : ("—"));
            yield "</td>
              <td>";
            // line 56
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "adresseService", [], "any", true, true, false, 56) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "adresseService", [], "any", false, false, false, 56)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "adresseService", [], "any", false, false, false, 56), "html", null, true)) : ("—"));
            yield "</td>
              <td>";
            // line 57
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["categorie"] ?? null), "nomCategorie", [], "any", true, true, false, 57) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["categorie"] ?? null), "nomCategorie", [], "any", false, false, false, 57)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["categorie"] ?? null), "nomCategorie", [], "any", false, false, false, 57), "html", null, true)) : ("—"));
            yield "</td>
              <td>";
            // line 58
            yield (((($tmp = ($context["membre"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "prenom", [], "any", false, false, false, 58) . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "nom", [], "any", false, false, false, 58)), "html", null, true)) : ("—"));
            yield "</td>
              <td>";
            // line 59
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "dateReponse", [], "any", true, true, false, 59) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "dateReponse", [], "any", false, false, false, 59)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "dateReponse", [], "any", false, false, false, 59), "html", null, true)) : ("—"));
            yield "</td>
              <td>
                ";
            // line 61
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "statutReponse", [], "any", false, false, false, 61) == "validée")) {
                // line 62
                yield "                  <span class=\"badge badge-active\">Validée</span>
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 63
$context["reponse"], "statutReponse", [], "any", false, false, false, 63) == "refusée")) {
                // line 64
                yield "                  <span class=\"badge badge-cloture\">Refusée</span>
                ";
            } else {
                // line 66
                yield "                  <span class=\"badge badge-attente\">En attente</span>
                ";
            }
            // line 68
            yield "              </td>
              <td class=\"td-actions\">
                <a href=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_valider", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "idReponse", [], "any", false, false, false, 70)]), "html", null, true);
            yield "\"
                   class=\"btn-table btn-valider\"
                   onclick=\"return confirm('Valider cette publication ?')\">✅ Valider</a>
                <a href=\"";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_refuser", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "idReponse", [], "any", false, false, false, 73)]), "html", null, true);
            yield "\"
                   class=\"btn-table btn-supprimer\"
                   onclick=\"return confirm('Refuser cette publication ?')\">❌ Refuser</a>
              </td>
            </tr>
          ";
            $context['_iterated'] = true;
        }
        // line 78
        if (!$context['_iterated']) {
            // line 79
            yield "            <tr>
              <td colspan=\"10\" style=\"text-align:center; color: var(--gris); padding: 2rem;\">
                Aucune demande de publication pour le moment.
              </td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reponse'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        yield "        </tbody>
      </table>
    </div>
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
        return array (  227 => 85,  216 => 79,  214 => 78,  204 => 73,  198 => 70,  194 => 68,  190 => 66,  186 => 64,  184 => 63,  181 => 62,  179 => 61,  174 => 59,  170 => 58,  166 => 57,  162 => 56,  158 => 55,  155 => 54,  151 => 52,  147 => 50,  145 => 49,  140 => 47,  136 => 46,  133 => 45,  130 => 44,  127 => 43,  124 => 42,  119 => 41,  95 => 19,  86 => 17,  82 => 16,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "demande_adhesion.html.twig", "C:\\laragon\\www\\Voisins connecté web\\web\\templates\\demande_adhesion.html.twig");
    }
}
