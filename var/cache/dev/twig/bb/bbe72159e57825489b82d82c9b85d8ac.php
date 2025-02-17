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

/* articles/new.html.twig */
class __TwigTemplate_606c73112e2ce6344f64e2215efd2dd8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "articles/new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "<div class=\"container mt-5\">
    <h1>Ajouter un article</h1>
    <form method=\"post\" class=\"mt-4\">
        <div class=\"form-group\">
            <label for=\"title\">Titre</label>
            <input type=\"text\" id=\"title\" name=\"title\" class=\"form-control\" required>
        </div>
        <div class=\"form-group mt-3\">
            <label for=\"content\">Contenu</label>
            <textarea id=\"content\" name=\"content\" class=\"form-control\" required></textarea>
        </div>
        <div class=\"form-group mt-3\">
            <label for=\"category\">Catégorie</label>
            <select name=\"category\" id=\"category\" class=\"form-control\">
                <option value=\"News\" ";
        // line 18
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "get", ["category"], "method", false, false, false, 18) == "News")) {
            yield "selected";
        }
        yield ">Actualités</option>
                <option value=\"Tech\" ";
        // line 19
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", [], "any", false, false, false, 19), "get", ["category"], "method", false, false, false, 19) == "Tech")) {
            yield "selected";
        }
        yield ">Technologie</option>
                <option value=\"Lifestyle\" ";
        // line 20
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "request", [], "any", false, false, false, 20), "get", ["category"], "method", false, false, false, 20) == "Lifestyle")) {
            yield "selected";
        }
        yield ">Style de vie</option>
            </select>
        </div>
        <button type=\"submit\" class=\"btn btn-success mt-3\">Enregistrer</button>
        <a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        yield "\" class=\"btn btn-secondary mt-3\">Retour</a>
    </form>
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
        return "articles/new.html.twig";
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
        return array (  113 => 24,  104 => 20,  98 => 19,  92 => 18,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container mt-5\">
    <h1>Ajouter un article</h1>
    <form method=\"post\" class=\"mt-4\">
        <div class=\"form-group\">
            <label for=\"title\">Titre</label>
            <input type=\"text\" id=\"title\" name=\"title\" class=\"form-control\" required>
        </div>
        <div class=\"form-group mt-3\">
            <label for=\"content\">Contenu</label>
            <textarea id=\"content\" name=\"content\" class=\"form-control\" required></textarea>
        </div>
        <div class=\"form-group mt-3\">
            <label for=\"category\">Catégorie</label>
            <select name=\"category\" id=\"category\" class=\"form-control\">
                <option value=\"News\" {% if app.request.get('category') == 'News' %}selected{% endif %}>Actualités</option>
                <option value=\"Tech\" {% if app.request.get('category') == 'Tech' %}selected{% endif %}>Technologie</option>
                <option value=\"Lifestyle\" {% if app.request.get('category') == 'Lifestyle' %}selected{% endif %}>Style de vie</option>
            </select>
        </div>
        <button type=\"submit\" class=\"btn btn-success mt-3\">Enregistrer</button>
        <a href=\"{{ path('article_index') }}\" class=\"btn btn-secondary mt-3\">Retour</a>
    </form>
</div>
{% endblock %}
", "articles/new.html.twig", "/Users/brice/Desktop/formation CDA/Symfony/templates/articles/new.html.twig");
    }
}
