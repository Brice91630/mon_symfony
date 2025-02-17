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
class __TwigTemplate_814e0ae946fb60f12858ad7df7849d42 extends Template
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
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Home - SpaceConnect";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield " ";
        // line 7
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/accueil.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
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

        // line 11
        yield "
    <!-- En-tête -->
    <header>
        <div class=\"container\">
            <h1>
                <nav>
                    <ul>
                        <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">
                            <img src=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logoSpaceConnect.webp"), "html", null, true);
        yield "\" width=\"60px\" alt=\"Logo SpaceConnect\">
                        </a>
                        <a href=\"";
        // line 21
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
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        yield "\" method=\"get\">
                            <input type=\"text\" name=\"query\" placeholder=\"Rechercher...\">
                            <button type=\"submit\"><i class=\"fa fa-search\"></i></button>
                        </form>
                    </li>
                    <li><a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quiz");
        yield "\">Quizz</a></li>
                    <li><a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("support");
        yield "\">Support</a></li>
                    <li><a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum");
        yield "\">Forum</a></li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"header-profil\"><i class=\"fa fa-user fa-lg\"></i></a>
                        <div class=\"dropdown-child\">
                            <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        yield "\">Profile</a>
                            <a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Se connecter</a>
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
                    ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 78, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 79
            yield "                        <article>
                            <img src=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 80))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 80), "html", null, true);
            yield "\">
                            <h3>";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 81), "html", null, true);
            yield "</h3>
                            <p>";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "resume", [], "any", false, false, false, 82), "html", null, true);
            yield "</p>
                            <a href=\"";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 83)]), "html", null, true);
            yield "\" class=\"btn\">Lire plus</a>
                        </article>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
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
            <p>&copy; SpaceConnect. Tous droits réservés.</p>
            <nav>
                <ul>
                    <li><a href=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentions_legales");
        yield "\">Mentions légales</a></li>
                    <li><a href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("politique_confidentialite");
        yield "\">Politique de confidentialité</a></li>
                    <li><a href=\"";
        // line 111
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conditions_utilisation");
        yield "\">Conditions d'utilisation</a></li>
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
        return array (  291 => 111,  287 => 110,  283 => 109,  258 => 86,  249 => 83,  245 => 82,  241 => 81,  235 => 80,  232 => 79,  228 => 78,  194 => 47,  190 => 46,  183 => 42,  179 => 41,  175 => 40,  167 => 35,  150 => 21,  145 => 19,  141 => 18,  132 => 11,  119 => 10,  105 => 7,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home - SpaceConnect{% endblock %}

{% block stylesheets %}
    {{ parent() }} {# Garde les styles de base définis dans base.html.twig #}
    <link rel=\"stylesheet\" href=\"{{ asset('css/accueil.css') }}\">
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
                        <form class=\"search-form\" action=\"{{ path('search') }}\" method=\"get\">
                            <input type=\"text\" name=\"query\" placeholder=\"Rechercher...\">
                            <button type=\"submit\"><i class=\"fa fa-search\"></i></button>
                        </form>
                    </li>
                    <li><a href=\"{{ path('quiz') }}\">Quizz</a></li>
                    <li><a href=\"{{ path('support') }}\">Support</a></li>
                    <li><a href=\"{{ path('forum') }}\">Forum</a></li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"header-profil\"><i class=\"fa fa-user fa-lg\"></i></a>
                        <div class=\"dropdown-child\">
                            <a href=\"{{ path('profile') }}\">Profile</a>
                            <a href=\"{{ path('app_login') }}\">Se connecter</a>
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
                            <img src=\"{{ asset('img/' ~ article.image) }}\" alt=\"{{ article.titre }}\">
                            <h3>{{ article.titre }}</h3>
                            <p>{{ article.resume }}</p>
                            <a href=\"{{ path('article_show', {id: article.id}) }}\" class=\"btn\">Lire plus</a>
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
            <p>&copy; SpaceConnect. Tous droits réservés.</p>
            <nav>
                <ul>
                    <li><a href=\"{{ path('mentions_legales') }}\">Mentions légales</a></li>
                    <li><a href=\"{{ path('politique_confidentialite') }}\">Politique de confidentialité</a></li>
                    <li><a href=\"{{ path('conditions_utilisation') }}\">Conditions d'utilisation</a></li>
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

{% endblock %}
", "home.html.twig", "/Users/brice/Desktop/formation CDA/Symfony/templates/home.html.twig");
    }
}
