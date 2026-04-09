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

/* ajouter_forfait.html.twig */
class __TwigTemplate_c4e8c266d78184721ee315db6426ab05 extends Template
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
        yield "Ajouter un forfait";
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
        yield "  ";
        $context["forfait"] = ["nomForfait" => "", "description" => "", "prix" => 0, "duree" => 0, "fonc_parametrage" => "0", "fonc_perimetreIntervention" => "0", "fonc_notifications" => "0", "fonc_locationMateriel" => "0", "fonc_prestationService" => "0", "fonc_numeroProfil" => "0", "fonc_photosProfil" => "0", "fonc_accompagnementPrioritaire" => "0"];
        // line 20
        yield "
  ";
        // line 21
        yield from $this->load("new_forfait.html.twig", 21)->unwrap()->yield(CoreExtension::merge($context, ["formTitle" => "Ajouter un forfait", "formSubtitle" => "Créez un nouveau forfait et définissez ses fonctionnalités.", "formAction" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forfait_ajouter"), "submitLabel" => "✨ Créer le forfait", "cancelPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forfaits"), "forfait" =>         // line 27
($context["forfait"] ?? null)]));
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "ajouter_forfait.html.twig";
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
        return array (  77 => 27,  76 => 21,  73 => 20,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "ajouter_forfait.html.twig", "C:\\laragon\\www\\Voisins connecté web\\web\\templates\\ajouter_forfait.html.twig");
    }
}
