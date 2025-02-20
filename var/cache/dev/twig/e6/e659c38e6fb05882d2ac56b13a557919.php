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

/* articles/page.html.twig */
class __TwigTemplate_7f72b1264be5563df8d29ca6e2fd1ad8 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/page.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/page.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "articles/page.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/accueil.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "<!-- En-tête -->
<header>
    <div class=\"container\">
        <h1>
            <nav>
                <ul>
                    <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        yield "\"> <!-- Remplace 'app_home' par 'article_index' -->
                        <img src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logoSpaceConnect.webp"), "html", null, true);
        yield "\" width=\"60px\" alt=\"Logo SpaceConnect\">
                    </a>
                    <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        yield "\" class=\"switch-link\">SpaceConnect</a>
                </ul>
            </nav>
        </h1>

        <!-- Bouton pour les petits écrans -->
        <button class=\"menu-toggle\" aria-label=\"Menu\">
            <i class=\"fa fa-bars\"></i>
        </button>

        <!-- Menu de navigation -->
        <nav class=\"nav-menu\">
            <ul>
                <li>
                    <form class=\"search-form\" action=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        yield "\" method=\"get\">
                        <input type=\"text\" name=\"search\" placeholder=\"Rechercher...\">
                        <button type=\"submit\"><i class=\"fa fa-search\"></i></button>
                    </form>
                </li>
                <li><a href=\"#\">Quizz</a></li> <!-- Remplacez par une route réelle si disponible -->
                <li><a href=\"#\">Support</a></li> <!-- Remplacez par une route réelle si disponible -->
                <li><a href=\"#\">Forum</a></li> <!-- Remplacez par une route réelle si disponible -->
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"header-profil\"><i class=\"fa fa-user fa-lg\"></i></a>
                    <div class=\"dropdown-child\">
                        <a href=\"#\">Profil</a> <!-- Remplacez par une route réelle si disponible -->
                        ";
        // line 43
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43)) {
            // line 44
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Se déconnecter</a>
                        ";
        } else {
            // line 46
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Se connecter</a>
                        ";
        }
        // line 48
        yield "                    </div>
                </li>
            </ul>
        </nav>
    </div>
</header>

<!-- Section principale de l'article -->
<article>
    <div class=\"container mt-5\">
        <h2>";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 58, $this->source); })()), "title", [], "any", false, false, false, 58), "html", null, true);
        yield "</h2>
        <p><strong>Catégorie :</strong> ";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 59, $this->source); })()), "category", [], "any", false, false, false, 59), "html", null, true);
        yield "</p>
        <p><strong>Date :</strong> ";
        // line 60
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 60, $this->source); })()), "updatedAt", [], "any", false, false, false, 60)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 60, $this->source); })()), "updatedAt", [], "any", false, false, false, 60), "d F Y"), "html", null, true)) : ("Non spécifiée"));
        yield "</p>

        <!-- Affichage de l'image -->
        ";
        // line 63
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 63, $this->source); })()), "imageName", [], "any", false, false, false, 63)) {
            // line 64
            yield "            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("/uploads/articles/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 64, $this->source); })()), "imageName", [], "any", false, false, false, 64)), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 64, $this->source); })()), "title", [], "any", false, false, false, 64), "html", null, true);
            yield "\" class=\"img-fluid mb-3\">
        ";
        }
        // line 66
        yield "
        <p>";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 67, $this->source); })()), "content", [], "any", false, false, false, 67), "html", null, true);
        yield "</p>
    </div>
</article>

<!-- Section des commentaires -->
<section class=\"comments-section container mt-5\">
    <h3>Commentaires</h3>

    ";
        // line 76
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 76, $this->source); })()), "commentaires", [], "any", false, false, false, 76));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 77
            yield "       ";
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "user", [], "any", false, false, false, 77) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                // line 78
                yield "                ";
                // line 79
                yield "                <form method=\"POST\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_page", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 79, $this->source); })()), "id", [], "any", false, false, false, 79)]), "html", null, true);
                yield "\" class=\"mt-2\">
                    <input type=\"hidden\" name=\"commentaire_id\" value=\"";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 80), "html", null, true);
                yield "\">
                    <textarea name=\"content\" rows=\"3\" class=\"form-control\">";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "content", [], "any", false, false, false, 81), "html", null, true);
                yield "</textarea>
                    <input type=\"hidden\" name=\"action\" value=\"edit\">
                    <button type=\"submit\" class=\"btn btn-warning btn-sm mt-1\">Modifier</button>
                </form>

                ";
                // line 87
                yield "                <form method=\"POST\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_page", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 87, $this->source); })()), "id", [], "any", false, false, false, 87)]), "html", null, true);
                yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce commentaire ?');\">
                    <input type=\"hidden\" name=\"commentaire_id\" value=\"";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 88), "html", null, true);
                yield "\">
                    <input type=\"hidden\" name=\"action\" value=\"delete\">
                    <button type=\"submit\" class=\"btn btn-danger btn-sm mt-1\">Supprimer</button>
                </form>
            ";
            }
            // line 93
            yield "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['commentaire'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        yield "
    ";
        // line 97
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97)) {
            // line 98
            yield "        <h3>Ajouter un commentaire</h3>
        <form method=\"POST\" action=\"";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_page", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 99, $this->source); })()), "id", [], "any", false, false, false, 99)]), "html", null, true);
            yield "\" class=\"comment-form\">
            <div class=\"form-group\">
                <label for=\"content\">Votre commentaire</label>
                <textarea id=\"content\" name=\"content\" class=\"form-control\" rows=\"5\" placeholder=\"Écrivez votre commentaire...\" required></textarea>
            </div>
            <button type=\"submit\" class=\"btn btn-primary mt-2\">Publier</button>
        </form>
    ";
        } else {
            // line 107
            yield "        <p>Vous devez être <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">connecté</a> pour ajouter un commentaire.</p>
    ";
        }
        // line 109
        yield "</section>

<!-- Pied de page -->
<footer class=\"mt-5\">
    <div class=\"container\">
        <p>© SpaceConnect. Tous droits réservés.</p>
        <nav>
            <ul>
                <li><a href=\"#\">Mentions légales</a></li> <!-- Remplacez par une route réelle si disponible -->
                <li><a href=\"#\">Politique de confidentialité</a></li> <!-- Remplacez par une route réelle si disponible -->
                <li><a href=\"#\">Conditions d'utilisation</a></li> <!-- Remplacez par une route réelle si disponible -->
            </ul>
        </nav>
        <div class=\"social-media\">
            <p>Suivez-nous sur nos réseaux :</p>
            <ul>
                <li><a href=\"https://www.facebook.com/?locale=fr_FR\" target=\"_blank\">Facebook</a></li>
                <li><a href=\"https://x.com/?lang=fr\" target=\"_blank\">Twitter</a></li>
                <li><a href=\"https://www.instagram.com/\" target=\"_blank\">Instagram</a></li>
                <li><a href=\"https://www.linkedin.com/in/axel-jean-denis-681822213/?trk=opento_nprofile_details\" target=\"_blank\">LinkedIn</a></li>
            </ul>
        </div>
    </div>
</footer>
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
        return "articles/page.html.twig";
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
        return array (  290 => 109,  284 => 107,  273 => 99,  270 => 98,  267 => 97,  264 => 95,  257 => 93,  249 => 88,  244 => 87,  236 => 81,  232 => 80,  227 => 79,  225 => 78,  222 => 77,  217 => 76,  206 => 67,  203 => 66,  195 => 64,  193 => 63,  187 => 60,  183 => 59,  179 => 58,  167 => 48,  161 => 46,  155 => 44,  153 => 43,  138 => 31,  121 => 17,  116 => 15,  112 => 14,  104 => 8,  91 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('styles/accueil.css') }}\">
{% endblock %}

{% block body %}
<!-- En-tête -->
<header>
    <div class=\"container\">
        <h1>
            <nav>
                <ul>
                    <a href=\"{{ path('article_index') }}\"> <!-- Remplace 'app_home' par 'article_index' -->
                        <img src=\"{{ asset('img/logoSpaceConnect.webp') }}\" width=\"60px\" alt=\"Logo SpaceConnect\">
                    </a>
                    <a href=\"{{ path('register') }}\" class=\"switch-link\">SpaceConnect</a>
                </ul>
            </nav>
        </h1>

        <!-- Bouton pour les petits écrans -->
        <button class=\"menu-toggle\" aria-label=\"Menu\">
            <i class=\"fa fa-bars\"></i>
        </button>

        <!-- Menu de navigation -->
        <nav class=\"nav-menu\">
            <ul>
                <li>
                    <form class=\"search-form\" action=\"{{ path('article_index') }}\" method=\"get\">
                        <input type=\"text\" name=\"search\" placeholder=\"Rechercher...\">
                        <button type=\"submit\"><i class=\"fa fa-search\"></i></button>
                    </form>
                </li>
                <li><a href=\"#\">Quizz</a></li> <!-- Remplacez par une route réelle si disponible -->
                <li><a href=\"#\">Support</a></li> <!-- Remplacez par une route réelle si disponible -->
                <li><a href=\"#\">Forum</a></li> <!-- Remplacez par une route réelle si disponible -->
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"header-profil\"><i class=\"fa fa-user fa-lg\"></i></a>
                    <div class=\"dropdown-child\">
                        <a href=\"#\">Profil</a> <!-- Remplacez par une route réelle si disponible -->
                        {% if app.user %}
                            <a href=\"{{ path('app_logout') }}\">Se déconnecter</a>
                        {% else %}
                            <a href=\"{{ path('app_login') }}\">Se connecter</a>
                        {% endif %}
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</header>

<!-- Section principale de l'article -->
<article>
    <div class=\"container mt-5\">
        <h2>{{ article.title }}</h2>
        <p><strong>Catégorie :</strong> {{ article.category }}</p>
        <p><strong>Date :</strong> {{ article.updatedAt ? article.updatedAt|date('d F Y') : 'Non spécifiée' }}</p>

        <!-- Affichage de l'image -->
        {% if article.imageName %}
            <img src=\"{{ '/uploads/articles/' ~ article.imageName }}\" alt=\"{{ article.title }}\" class=\"img-fluid mb-3\">
        {% endif %}

        <p>{{ article.content }}</p>
    </div>
</article>

<!-- Section des commentaires -->
<section class=\"comments-section container mt-5\">
    <h3>Commentaires</h3>

    {# Affichage des commentaires associés à l'article #}
    {% for commentaire in article.commentaires %}
       {% if commentaire.user == app.user or is_granted('ROLE_ADMIN') %}
                {# Formulaire de modification du commentaire #}
                <form method=\"POST\" action=\"{{ path('article_page', {id: article.id}) }}\" class=\"mt-2\">
                    <input type=\"hidden\" name=\"commentaire_id\" value=\"{{ commentaire.id }}\">
                    <textarea name=\"content\" rows=\"3\" class=\"form-control\">{{ commentaire.content }}</textarea>
                    <input type=\"hidden\" name=\"action\" value=\"edit\">
                    <button type=\"submit\" class=\"btn btn-warning btn-sm mt-1\">Modifier</button>
                </form>

                {# Formulaire de suppression du commentaire #}
                <form method=\"POST\" action=\"{{ path('article_page', {id: article.id}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce commentaire ?');\">
                    <input type=\"hidden\" name=\"commentaire_id\" value=\"{{ commentaire.id }}\">
                    <input type=\"hidden\" name=\"action\" value=\"delete\">
                    <button type=\"submit\" class=\"btn btn-danger btn-sm mt-1\">Supprimer</button>
                </form>
            {% endif %}
        </div>
    {% endfor %}

    {# Formulaire d'ajout d'un nouveau commentaire #}
    {% if app.user %}
        <h3>Ajouter un commentaire</h3>
        <form method=\"POST\" action=\"{{ path('article_page', {id: article.id}) }}\" class=\"comment-form\">
            <div class=\"form-group\">
                <label for=\"content\">Votre commentaire</label>
                <textarea id=\"content\" name=\"content\" class=\"form-control\" rows=\"5\" placeholder=\"Écrivez votre commentaire...\" required></textarea>
            </div>
            <button type=\"submit\" class=\"btn btn-primary mt-2\">Publier</button>
        </form>
    {% else %}
        <p>Vous devez être <a href=\"{{ path('app_login') }}\">connecté</a> pour ajouter un commentaire.</p>
    {% endif %}
</section>

<!-- Pied de page -->
<footer class=\"mt-5\">
    <div class=\"container\">
        <p>© SpaceConnect. Tous droits réservés.</p>
        <nav>
            <ul>
                <li><a href=\"#\">Mentions légales</a></li> <!-- Remplacez par une route réelle si disponible -->
                <li><a href=\"#\">Politique de confidentialité</a></li> <!-- Remplacez par une route réelle si disponible -->
                <li><a href=\"#\">Conditions d'utilisation</a></li> <!-- Remplacez par une route réelle si disponible -->
            </ul>
        </nav>
        <div class=\"social-media\">
            <p>Suivez-nous sur nos réseaux :</p>
            <ul>
                <li><a href=\"https://www.facebook.com/?locale=fr_FR\" target=\"_blank\">Facebook</a></li>
                <li><a href=\"https://x.com/?lang=fr\" target=\"_blank\">Twitter</a></li>
                <li><a href=\"https://www.instagram.com/\" target=\"_blank\">Instagram</a></li>
                <li><a href=\"https://www.linkedin.com/in/axel-jean-denis-681822213/?trk=opento_nprofile_details\" target=\"_blank\">LinkedIn</a></li>
            </ul>
        </div>
    </div>
</footer>
{% endblock %}", "articles/page.html.twig", "/Users/brice/Desktop/formation CDA/Symfony/templates/articles/page.html.twig");
    }
}
