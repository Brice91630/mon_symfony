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

/* security/login.html.twig */
class __TwigTemplate_7bc4cbc4ccb8100eb606cd792c3eaef9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        // line 3
        yield "    <!-- Conteneur principal -->
    <div class=\"auth-container\">
        <!-- Bouton retour (en dehors des boîtes) -->
        <button onclick=\"window.history.back()\" class=\"back-btn\">Retour</button>

        <!-- Section de Connexion -->
        <section class=\"auth-box\">
            <h2>Connexion</h2>
            <form action=\"accueil.html\" method=\"get\">
                <label for=\"login-email\">Email</label>
                <input type=\"email\" id=\"login-email\" name=\"email\" required>

                <label for=\"login-password\">Mot de passe</label>
                <input type=\"password\" id=\"login-password\" name=\"password\" required>

                <button type=\"submit\" class=\"btn\">Se connecter</button>
                <p class=\"switch-text\">Pas encore de compte ? <a href=\"#inscription\" class=\"switch-link\">S'inscrire</a></p>
            </form>
        </section>

        <!-- Section d'Inscription -->
        <section class=\"auth-box\" id=\"inscription\">
            <h2>Inscription</h2>
            <form action=\"acceuil.html\" method=\"get\">
                <label for=\"register-name\">Nom complet</label>
                <input type=\"text\" id=\"register-name\" name=\"name\" required>

                <label for=\"register-email\">Email</label>
                <input type=\"email\" id=\"register-email\" name=\"email\" required>

                <label for=\"register-password\">Mot de passe</label>
                <input type=\"password\" id=\"register-password\" name=\"password\" required>

                <button type=\"submit\" class=\"btn\">S'inscrire</button>
                <p class=\"switch-text\">Déjà un compte ? <a href=\"#connexion\" class=\"switch-link\">Se connecter</a></p>
            </form>
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
        return "security/login.html.twig";
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
        return array (  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <!-- Conteneur principal -->
    <div class=\"auth-container\">
        <!-- Bouton retour (en dehors des boîtes) -->
        <button onclick=\"window.history.back()\" class=\"back-btn\">Retour</button>

        <!-- Section de Connexion -->
        <section class=\"auth-box\">
            <h2>Connexion</h2>
            <form action=\"accueil.html\" method=\"get\">
                <label for=\"login-email\">Email</label>
                <input type=\"email\" id=\"login-email\" name=\"email\" required>

                <label for=\"login-password\">Mot de passe</label>
                <input type=\"password\" id=\"login-password\" name=\"password\" required>

                <button type=\"submit\" class=\"btn\">Se connecter</button>
                <p class=\"switch-text\">Pas encore de compte ? <a href=\"#inscription\" class=\"switch-link\">S'inscrire</a></p>
            </form>
        </section>

        <!-- Section d'Inscription -->
        <section class=\"auth-box\" id=\"inscription\">
            <h2>Inscription</h2>
            <form action=\"acceuil.html\" method=\"get\">
                <label for=\"register-name\">Nom complet</label>
                <input type=\"text\" id=\"register-name\" name=\"name\" required>

                <label for=\"register-email\">Email</label>
                <input type=\"email\" id=\"register-email\" name=\"email\" required>

                <label for=\"register-password\">Mot de passe</label>
                <input type=\"password\" id=\"register-password\" name=\"password\" required>

                <button type=\"submit\" class=\"btn\">S'inscrire</button>
                <p class=\"switch-text\">Déjà un compte ? <a href=\"#connexion\" class=\"switch-link\">Se connecter</a></p>
            </form>
        </section>
    </div>
{% endblock %}
", "security/login.html.twig", "/Users/brice/Desktop/formation CDA/Symfony/templates/security/login.html.twig");
    }
}
