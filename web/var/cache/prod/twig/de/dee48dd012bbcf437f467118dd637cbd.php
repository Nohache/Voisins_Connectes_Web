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

/* modif_publication.html.twig */
class __TwigTemplate_32c02b844bc56309a81f0a58a9e13656 extends Template
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
        yield "Modifier la publication";
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
        yield "
<div class=\"home\">

  <!-- HERO -->
  <section class=\"dashboard-hero\">
    <div class=\"dashboard-hero-text\">
      <h1 class=\"hero-title\">Modifier la <span>publication</span></h1>
      <p class=\"hero-desc\">Modifiez les informations de cette publication.</p>
    </div>
  </section>

  <section class=\"publications-section\">

    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            yield "      <div class=\"flash-success\" style=\"max-width:700px; margin: 0 auto 1rem; padding: 0.8rem 1.5rem; background: var(--vert); color: var(--vert-tres-fonce); border-radius: 1rem; font-weight: 500;\">✅ ";
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_modifier", ["id" => ($context["id"] ?? null)]), "html", null, true);
        yield "\">
      <div class=\"forfaits-wrapper\" style=\"max-width: 700px; margin: 0 auto;\">
        <table class=\"forfaits-table\">
          <thead>
            <tr>
              <th class=\"th-label\">Champ</th>
              <th class=\"th-plan\">Valeur</th>
            </tr>
          </thead>
          <tbody>

            <tr class=\"category\"><td colspan=\"2\">📋 Informations générales</td></tr>

            <tr>
              <td>Titre</td>
              <td><input type=\"text\" name=\"titre\" value=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "titre", [], "any", false, false, false, 38), "html", null, true);
        yield "\" class=\"form-input\"></td>
            </tr>
            <tr>
              <td>Description</td>
              <td><textarea name=\"description\" class=\"form-textarea\" rows=\"3\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "description", [], "any", false, false, false, 42), "html", null, true);
        yield "</textarea></td>
            </tr>
            <tr>
              <td>Type de service</td>
              <td>
                <select name=\"typeService\" class=\"form-input\">
                  <option value=\"Demande\" ";
        // line 48
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "typeService", [], "any", false, false, false, 48) == "Demande")) {
            yield "selected";
        }
        yield ">Demande</option>
                  <option value=\"Offre\"   ";
        // line 49
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "typeService", [], "any", false, false, false, 49) == "Offre")) {
            yield "selected";
        }
        yield ">Offre</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>État</td>
              <td>
                <select name=\"etatService\" class=\"form-input\">
                  <option value=\"Active\"     ";
        // line 57
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "etatService", [], "any", false, false, false, 57) == "Active")) {
            yield "selected";
        }
        yield ">Active</option>
                  <option value=\"En attente\" ";
        // line 58
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "etatService", [], "any", false, false, false, 58) == "En attente")) {
            yield "selected";
        }
        yield ">En attente</option>
                  <option value=\"Clôturée\"   ";
        // line 59
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "etatService", [], "any", false, false, false, 59) == "Clôturée")) {
            yield "selected";
        }
        yield ">Clôturée</option>
                </select>
              </td>
            </tr>

            <tr class=\"category\"><td colspan=\"2\">📅 Dates & Prix</td></tr>

            <tr>
              <td>Date de publication</td>
              <td><input type=\"text\" name=\"datePublication\" value=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "datePublication", [], "any", false, false, false, 68), "html", null, true);
        yield "\" class=\"form-input\"></td>
            </tr>
            <tr>
              <td>Date de clôture</td>
              <td><input type=\"text\" name=\"dateCloture\" value=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "dateCloture", [], "any", false, false, false, 72), "html", null, true);
        yield "\" class=\"form-input\"></td>
            </tr>
            <tr>
              <td>Prix proposé</td>
              <td><input type=\"text\" name=\"prixPropose\" value=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "prixPropose", [], "any", false, false, false, 76), "html", null, true);
        yield "\" class=\"form-input\"></td>
            </tr>

            <tr class=\"category\"><td colspan=\"2\">📍 Localisation & Catégorie</td></tr>

            <tr>
              <td>Adresse d'exécution</td>
              <td><input type=\"text\" name=\"adresseExecution\" value=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "adresseExecution", [], "any", false, false, false, 83), "html", null, true);
        yield "\" class=\"form-input\"></td>
            </tr>
            <tr>
              <td>Catégorie</td>
              <td><input type=\"text\" name=\"idCategorie\" value=\"";
        // line 87
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["categoriesIndex"] ?? null), (((CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "idCategorie", [], "any", true, true, false, 87) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "idCategorie", [], "any", false, false, false, 87)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "idCategorie", [], "any", false, false, false, 87)) : (0)), [], "array", false, true, false, 87), "nomCategorie", [], "any", true, true, false, 87) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (($_v0 = ($context["categoriesIndex"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(((CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "idCategorie", [], "any", true, true, false, 87) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "idCategorie", [], "any", false, false, false, 87)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "idCategorie", [], "any", false, false, false, 87)) : (0))] ?? null) : null), "nomCategorie", [], "any", false, false, false, 87)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["categoriesIndex"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[(((CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "idCategorie", [], "any", true, true, false, 87) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "idCategorie", [], "any", false, false, false, 87)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "idCategorie", [], "any", false, false, false, 87)) : (0))] ?? null) : null), "nomCategorie", [], "any", false, false, false, 87), "html", null, true)) : (""));
        yield "\" class=\"form-input\"></td>
            </tr>
            <tr>
              <td>Membre</td>
              <td><input type=\"text\" name=\"idMembre_demandeur\" value=\"";
        // line 91
        yield (((($tmp = (($_v2 = ($context["membresIndex"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[(((CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "idMembre_demandeur", [], "any", true, true, false, 91) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "idMembre_demandeur", [], "any", false, false, false, 91)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "idMembre_demandeur", [], "any", false, false, false, 91)) : (0))] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (($_v3 = ($context["membresIndex"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "idMembre_demandeur", [], "any", false, false, false, 91)] ?? null) : null), "prenom", [], "any", false, false, false, 91) . " ") . CoreExtension::getAttribute($this->env, $this->source, (($_v4 = ($context["membresIndex"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "idMembre_demandeur", [], "any", false, false, false, 91)] ?? null) : null), "nom", [], "any", false, false, false, 91)), "html", null, true)) : (""));
        yield "\" class=\"form-input\" readonly></td>
            </tr>

            <!-- Boutons -->
            <tr class=\"category\"><td colspan=\"2\"></td></tr>
            <tr>
                <td style=\"text-align:left;\">
                    <a href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion_publication");
        yield "\" class=\"btn-table btn-annuler\">Annuler</a>
                </td>
                <td style=\"text-align:center;\">
                    <button type=\"submit\" class=\"btn-table btn-modifier\">💾 Enregistrer</button>
                </td>
            </tr>

          </tbody>
        </table>
      </div>
    </form>
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
        return "modif_publication.html.twig";
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
        return array (  228 => 98,  218 => 91,  211 => 87,  204 => 83,  194 => 76,  187 => 72,  180 => 68,  166 => 59,  160 => 58,  154 => 57,  141 => 49,  135 => 48,  126 => 42,  119 => 38,  101 => 23,  98 => 22,  89 => 20,  85 => 19,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modif_publication.html.twig", "C:\\laragon\\www\\Voisins connecté web\\web\\templates\\modif_publication.html.twig");
    }
}
