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

/* user/new.html.twig */
class __TwigTemplate_adc71ea317b978c0d8ffb35894103535 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/new.html.twig", 1);
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
    <h1>Ajouter un utilisateur</h1>
    <form method=\"post\" class=\"mt-4\">
        <div class=\"form-group\">
            <label for=\"name\">Nom</label>
            <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" required>
        </div>
        <div class=\"form-group mt-3\">
            <label for=\"email\">Email</label>
            <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" required>
        </div>
        <div class=\"form-group mt-3\">
            <label for=\"password\">Password</label>
            <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" required>
        </div>
        <div class=\"form-group mt-3\">
            <label for=\"roles\">Rôles</label>
            <select name=\"role\" id=\"role\">
                <option value=\"ROLE_USER\" ";
        // line 22
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "get", ["role"], "method", false, false, false, 22) == "ROLE_USER")) {
            yield "selected";
        }
        yield ">Utilisateur</option>
                <option value=\"ROLE_ADMIN\" ";
        // line 23
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "request", [], "any", false, false, false, 23), "get", ["role"], "method", false, false, false, 23) == "ROLE_ADMIN")) {
            yield "selected";
        }
        yield ">Administrateur</option>
            </select>
        </div>
        <button type=\"submit\" class=\"btn btn-success mt-3\">Enregistrer</button>
        <a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
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
        return "user/new.html.twig";
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
        return array (  111 => 27,  102 => 23,  96 => 22,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container mt-5\">
    <h1>Ajouter un utilisateur</h1>
    <form method=\"post\" class=\"mt-4\">
        <div class=\"form-group\">
            <label for=\"name\">Nom</label>
            <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" required>
        </div>
        <div class=\"form-group mt-3\">
            <label for=\"email\">Email</label>
            <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" required>
        </div>
        <div class=\"form-group mt-3\">
            <label for=\"password\">Password</label>
            <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" required>
        </div>
        <div class=\"form-group mt-3\">
            <label for=\"roles\">Rôles</label>
            <select name=\"role\" id=\"role\">
                <option value=\"ROLE_USER\" {% if app.request.get('role') == 'ROLE_USER' %}selected{% endif %}>Utilisateur</option>
                <option value=\"ROLE_ADMIN\" {% if app.request.get('role') == 'ROLE_ADMIN' %}selected{% endif %}>Administrateur</option>
            </select>
        </div>
        <button type=\"submit\" class=\"btn btn-success mt-3\">Enregistrer</button>
        <a href=\"{{ path('user_index') }}\" class=\"btn btn-secondary mt-3\">Retour</a>
    </form>
</div>
{% endblock %}
", "user/new.html.twig", "/Users/brice/Desktop/formation CDA/Symfony/templates/user/new.html.twig");
    }
}
