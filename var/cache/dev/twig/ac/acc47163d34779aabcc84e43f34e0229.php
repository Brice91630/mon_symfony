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

/* articles/index.html.twig */
class __TwigTemplate_1d515a510a6adc0ce30ce5d36184ca04 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "articles/index.html.twig", 1);
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
    <h1 class=\"mb-4\">Liste des articles</h1>

      ";
        // line 8
        yield "    <form method=\"get\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        yield "\" class=\"mb-4 d-flex\">
        <input 
            type=\"text\" 
            name=\"search\" 
            placeholder=\"Rechercher...\" 
            value=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "get", ["search"], "method", false, false, false, 13), "html", null, true);
        yield "\" 
            class=\"form-control me-2\"
        >
        <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
    </form>

    ";
        // line 20
        yield "    <form method=\"get\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        yield "\">
        <select name=\"category\" id=\"category\" class=\"form-control\">
            <option value=\"\" ";
        // line 22
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "get", ["category"], "method", false, false, false, 22))) {
            yield "selected";
        }
        yield ">Toutes les catégories</option>
            <option value=\"News\" ";
        // line 23
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "request", [], "any", false, false, false, 23), "get", ["category"], "method", false, false, false, 23) == "News")) {
            yield "selected";
        }
        yield ">Actualités</option>
            <option value=\"Tech\" ";
        // line 24
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "get", ["category"], "method", false, false, false, 24) == "Tech")) {
            yield "selected";
        }
        yield ">Technologie</option>
            <option value=\"Lifestyle\" ";
        // line 25
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "request", [], "any", false, false, false, 25), "get", ["category"], "method", false, false, false, 25) == "Lifestyle")) {
            yield "selected";
        }
        yield ">Style de vie</option>
        </select>
        <button type=\"submit\" class=\"btn btn-primary mt-2\">Filtrer</button>
    </form>


    ";
        // line 32
        yield "    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Contenu</th>
                <th>Catégorie</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 43, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 44
            yield "                <tr>
                    <td>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
                    <td>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 46), "html", null, true);
            yield "</td>
                    <td>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "content", [], "any", false, false, false, 47), "html", null, true);
            yield "</td>
                    <td>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 48), "html", null, true);
            yield "</td>
                    <td>
                        <a href=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_page", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm\">Voir</a>
                        <a href=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm\">Modifier</a>
                        <form action=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            yield "\" method=\"post\" style=\"display: inline;\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 53))), "html", null, true);
            yield "\">
                            <button type=\"submit\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet article ?');\">Supprimer</button>
                        </form>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 59
            yield "                <tr>
                    <td colspan=\"5\" class=\"text-center\">Aucun article trouvé.</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "        </tbody>
    </table>
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
        return "articles/index.html.twig";
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
        return array (  204 => 63,  195 => 59,  184 => 53,  180 => 52,  176 => 51,  172 => 50,  167 => 48,  163 => 47,  159 => 46,  155 => 45,  152 => 44,  147 => 43,  134 => 32,  123 => 25,  117 => 24,  111 => 23,  105 => 22,  99 => 20,  90 => 13,  81 => 8,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container mt-5\">
    <h1 class=\"mb-4\">Liste des articles</h1>

      {# Barre de recherche #}
    <form method=\"get\" action=\"{{ path('article_index') }}\" class=\"mb-4 d-flex\">
        <input 
            type=\"text\" 
            name=\"search\" 
            placeholder=\"Rechercher...\" 
            value=\"{{ app.request.get('search') }}\" 
            class=\"form-control me-2\"
        >
        <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
    </form>

    {# Formulaire de filtre par catégorie #}
    <form method=\"get\" action=\"{{ path('article_index') }}\">
        <select name=\"category\" id=\"category\" class=\"form-control\">
            <option value=\"\" {% if app.request.get('category') is empty %}selected{% endif %}>Toutes les catégories</option>
            <option value=\"News\" {% if app.request.get('category') == 'News' %}selected{% endif %}>Actualités</option>
            <option value=\"Tech\" {% if app.request.get('category') == 'Tech' %}selected{% endif %}>Technologie</option>
            <option value=\"Lifestyle\" {% if app.request.get('category') == 'Lifestyle' %}selected{% endif %}>Style de vie</option>
        </select>
        <button type=\"submit\" class=\"btn btn-primary mt-2\">Filtrer</button>
    </form>


    {# Tableau des articles #}
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Contenu</th>
                <th>Catégorie</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for article in articles %}
                <tr>
                    <td>{{ article.id }}</td>
                    <td>{{ article.title }}</td>
                    <td>{{ article.content }}</td>
                    <td>{{ article.category }}</td>
                    <td>
                        <a href=\"{{ path('article_page', {id: article.id}) }}\" class=\"btn btn-primary btn-sm\">Voir</a>
                        <a href=\"{{ path('article_edit', {id: article.id}) }}\" class=\"btn btn-primary btn-sm\">Modifier</a>
                        <form action=\"{{ path('article_delete', {id: article.id}) }}\" method=\"post\" style=\"display: inline;\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ article.id) }}\">
                            <button type=\"submit\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet article ?');\">Supprimer</button>
                        </form>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"5\" class=\"text-center\">Aucun article trouvé.</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
</div>

{% endblock %}
", "articles/index.html.twig", "/Users/brice/Desktop/formation CDA/Symfony/templates/articles/index.html.twig");
    }
}
