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

/* home.html.twig */
class __TwigTemplate_480df0fa6f1302c0593f24d3a7de5a54 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
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
        yield "    <!-- En-tête -->
    <header>
        <div class=\"container\">
            <h1>
                <nav>
                    <ul>
                        <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">
                            <img src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logoSpaceConnect.webp"), "html", null, true);
        yield "\" width=\"60px\" alt=\"Logo SpaceConnect\">
                        </a>
                        <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">SpaceConnect</a>
                    </ul>
                </nav>
            </h1>

            <!-- Bouton menu responsive -->
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
                    <li><a href=\"#\">Quizz</a></li> <!-- À remplacer par une route réelle -->
                    <li><a href=\"#\">Support</a></li> <!-- À remplacer par une route réelle -->
                    <li><a href=\"#\">Forum</a></li> <!-- À remplacer par une route réelle -->
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"header-profil\"><i class=\"fa fa-user fa-lg\"></i></a>
                        <div class=\"dropdown-child\">
                            <a href=\"#\">Profil</a> <!-- À remplacer par une route réelle -->
                            ";
        // line 43
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43)) {
            // line 44
            yield "                                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Se déconnecter</a>
                            ";
        } else {
            // line 46
            yield "                                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Se connecter</a>
                            ";
        }
        // line 48
        yield "                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Bannière -->
    <section id=\"banner\" class=\"banner\">
        <div class=\"container\">
            <h1>Space Connect</h1>
        </div>
    </section>

    <!-- Contenu principal -->
    <main>
        <!-- Section Introduction -->
        <section id=\"intro\" class=\"hero\">
            <div class=\"container\">
                <h2>Découvrez les derniers articles et actualités</h2>
                <p>Restez informé avec nos articles variés et enrichissants couvrant un large éventail de sujets.</p>
                <a href=\"#articles\" class=\"btn\">Voir les articles</a>
            </div>
        </section>

        <!-- Articles dynamiques -->
        <section id=\"articles\" class=\"articles\">
            <div class=\"container\">
                <h2>Articles populaires</h2>
                <div class=\"articles-grid\">
                    ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 78, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 79
            yield "                        <article>
                            ";
            // line 80
            if (CoreExtension::getAttribute($this->env, $this->source, $context["article"], "imageName", [], "any", false, false, false, 80)) {
                // line 81
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("/uploads/articles/" . CoreExtension::getAttribute($this->env, $this->source, $context["article"], "imageName", [], "any", false, false, false, 81)), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 81), "html", null, true);
                yield "\" class=\"img-fluid\">
                            ";
            } else {
                // line 83
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/placeholder.jpg"), "html", null, true);
                yield "\" alt=\"Image par défaut\" class=\"img-fluid\">
                            ";
            }
            // line 85
            yield "                            <h3>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 85), "html", null, true);
            yield "</h3>
                            <p>";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["article"], "content", [], "any", false, false, false, 86), 0, 100) . "..."), "html", null, true);
            yield "</p> <!-- Résumé court basé sur content -->
                            <a href=\"";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_page", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 87)]), "html", null, true);
            yield "\" class=\"btn\">Lire plus</a>
                        </article>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        yield "                </div>
            </div>
        </section>

        <!-- Newsletter -->
        <section id=\"newsletter\" class=\"newsletter\">
            <div class=\"container\">
                <h2>Abonnez-vous à notre newsletter</h2>
                <p>Recevez les dernières mises à jour et articles directement dans votre boîte mail.</p>
                <form action=\"#\" method=\"post\">
                    <input type=\"email\" placeholder=\"Votre email\" required>
                    <button type=\"submit\">S'abonner</button>
                </form>
            </div>
        </section>
    </main>

    <!-- Pied de page -->
    <footer>
        <div class=\"container\">
            <p>© SpaceConnect. Tous droits réservés.</p>
            <nav>
                <ul>
                    <li><a href=\"#\">Mentions légales</a></li> <!-- À remplacer par une route réelle -->
                    <li><a href=\"#\">Politique de confidentialité</a></li> <!-- À remplacer par une route réelle -->
                    <li><a href=\"#\">Conditions d'utilisation</a></li> <!-- À remplacer par une route réelle -->
                </ul>
            </nav>
            <div class=\"social-media\">
                <p>Suivez-nous sur nos réseaux :</p>
                <ul>
                    <li><a href=\"https://www.facebook.com/\" target=\"_blank\">Facebook</a></li>
                    <li><a href=\"https://x.com/\" target=\"_blank\">Twitter</a></li>
                    <li><a href=\"https://www.instagram.com/\" target=\"_blank\">Instagram</a></li>
                    <li><a href=\"https://www.linkedin.com/\" target=\"_blank\">LinkedIn</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- Script pour le menu responsive -->
    <script>
        const toggleButton = document.querySelector('.menu-toggle');
        const navMenu = document.querySelector('.nav-menu');

        toggleButton.addEventListener('click', () => {
            navMenu.classList.toggle('open');
        });
    </script>
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
        return "home.html.twig";
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
        return array (  240 => 90,  231 => 87,  227 => 86,  222 => 85,  216 => 83,  208 => 81,  206 => 80,  203 => 79,  199 => 78,  167 => 48,  161 => 46,  155 => 44,  153 => 43,  138 => 31,  121 => 17,  116 => 15,  112 => 14,  104 => 8,  91 => 7,  77 => 4,  64 => 3,  41 => 1,);
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
                        <a href=\"{{ path('home') }}\">
                            <img src=\"{{ asset('img/logoSpaceConnect.webp') }}\" width=\"60px\" alt=\"Logo SpaceConnect\">
                        </a>
                        <a href=\"{{ path('home') }}\">SpaceConnect</a>
                    </ul>
                </nav>
            </h1>

            <!-- Bouton menu responsive -->
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
                    <li><a href=\"#\">Quizz</a></li> <!-- À remplacer par une route réelle -->
                    <li><a href=\"#\">Support</a></li> <!-- À remplacer par une route réelle -->
                    <li><a href=\"#\">Forum</a></li> <!-- À remplacer par une route réelle -->
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"header-profil\"><i class=\"fa fa-user fa-lg\"></i></a>
                        <div class=\"dropdown-child\">
                            <a href=\"#\">Profil</a> <!-- À remplacer par une route réelle -->
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

    <!-- Bannière -->
    <section id=\"banner\" class=\"banner\">
        <div class=\"container\">
            <h1>Space Connect</h1>
        </div>
    </section>

    <!-- Contenu principal -->
    <main>
        <!-- Section Introduction -->
        <section id=\"intro\" class=\"hero\">
            <div class=\"container\">
                <h2>Découvrez les derniers articles et actualités</h2>
                <p>Restez informé avec nos articles variés et enrichissants couvrant un large éventail de sujets.</p>
                <a href=\"#articles\" class=\"btn\">Voir les articles</a>
            </div>
        </section>

        <!-- Articles dynamiques -->
        <section id=\"articles\" class=\"articles\">
            <div class=\"container\">
                <h2>Articles populaires</h2>
                <div class=\"articles-grid\">
                    {% for article in articles %}
                        <article>
                            {% if article.imageName %}
                                <img src=\"{{ '/uploads/articles/' ~ article.imageName }}\" alt=\"{{ article.title }}\" class=\"img-fluid\">
                            {% else %}
                                <img src=\"{{ asset('img/placeholder.jpg') }}\" alt=\"Image par défaut\" class=\"img-fluid\">
                            {% endif %}
                            <h3>{{ article.title }}</h3>
                            <p>{{ article.content|slice(0, 100) ~ '...' }}</p> <!-- Résumé court basé sur content -->
                            <a href=\"{{ path('article_page', {id: article.id}) }}\" class=\"btn\">Lire plus</a>
                        </article>
                    {% endfor %}
                </div>
            </div>
        </section>

        <!-- Newsletter -->
        <section id=\"newsletter\" class=\"newsletter\">
            <div class=\"container\">
                <h2>Abonnez-vous à notre newsletter</h2>
                <p>Recevez les dernières mises à jour et articles directement dans votre boîte mail.</p>
                <form action=\"#\" method=\"post\">
                    <input type=\"email\" placeholder=\"Votre email\" required>
                    <button type=\"submit\">S'abonner</button>
                </form>
            </div>
        </section>
    </main>

    <!-- Pied de page -->
    <footer>
        <div class=\"container\">
            <p>© SpaceConnect. Tous droits réservés.</p>
            <nav>
                <ul>
                    <li><a href=\"#\">Mentions légales</a></li> <!-- À remplacer par une route réelle -->
                    <li><a href=\"#\">Politique de confidentialité</a></li> <!-- À remplacer par une route réelle -->
                    <li><a href=\"#\">Conditions d'utilisation</a></li> <!-- À remplacer par une route réelle -->
                </ul>
            </nav>
            <div class=\"social-media\">
                <p>Suivez-nous sur nos réseaux :</p>
                <ul>
                    <li><a href=\"https://www.facebook.com/\" target=\"_blank\">Facebook</a></li>
                    <li><a href=\"https://x.com/\" target=\"_blank\">Twitter</a></li>
                    <li><a href=\"https://www.instagram.com/\" target=\"_blank\">Instagram</a></li>
                    <li><a href=\"https://www.linkedin.com/\" target=\"_blank\">LinkedIn</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- Script pour le menu responsive -->
    <script>
        const toggleButton = document.querySelector('.menu-toggle');
        const navMenu = document.querySelector('.nav-menu');

        toggleButton.addEventListener('click', () => {
            navMenu.classList.toggle('open');
        });
    </script>
{% endblock %}", "home.html.twig", "/Users/brice/Desktop/formation CDA/Symfony/templates/home.html.twig");
    }
}
