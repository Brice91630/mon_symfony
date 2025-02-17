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
class __TwigTemplate_828a5877e7d04da46eca6928926e775c extends Template
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/article.css"), "html", null, true);
        yield "\" >
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
        yield "
<!-- En-tête -->
<header>
    <div class=\"container\">
        <h1>
            <nav>
                <ul>
                    <a href=\"accueil.html\">
                        <img src=\"img/logoSpaceConnect.webp\" width=\"60px\" alt=\"Logo SpaceConnect\">
                    </a>
                    <a href=\"accueil.html\">SpaceConnect</a>
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
                    <form class=\"search-form\" action=\"recherche.html\" method=\"get\">
                        <input type=\"text\" name=\"query\" placeholder=\"Rechercher...\">
                        <button type=\"submit\"><i class=\"fa fa-search\"></i></button>
                    </form>
                </li>
                <li><a href=\"quizz.html\">Quizz</a></li>
                <li><a href=\"Support.html\">Support</a></li>
                <li><a href=\"forum.html\">Forum</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"header-profil\"><i class=\"fa fa-user fa-lg\"></i></a>
                    <div class=\"dropdown-child\">
                        <a href=\"profile .html\">Profile</a>
                        <a href=\"inscription.html\">Se connecter</a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</header>

<section class=\"hero\">
    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h2>
    <p>Une introduction captivante à l'article...</p>
</section>

<article>
    <div class=\"container\">
        <h2>Titre de l'Article</h2>
        <p><strong>Auteur:</strong> Jean Dupont</p>
        <p><strong>Date:</strong> 30 octobre 2024</p>
        <img src=\"img/alientiktok.jpg\" alt=\"Image d'article\" class=\"centered-image\">
        
        <p>";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 64, $this->source); })()), "content", [], "any", false, false, false, 64), "html", null, true);
        yield "</p>        
        <h3>Sous-titre</h3>
        <p>";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 66, $this->source); })()), "category", [], "any", false, false, false, 66), "html", null, true);
        yield "</p>

        <h3>Conclusion</h3>
        <p>Phasellus libero justo, vulputate in ullamcorper in, aliquet in erat. Donec quis velit vel sem fermentum tincidunt a sed felis.</p>
    </div>
</article>

<!-- Section des commentaires -->
<section class=\"comments-section\">
    <h3>Commentaires</h3>

    <!-- Affichage dynamique des commentaires -->
    <div class=\"comment\">
        <div class=\"comment-header\">
            <p><strong>Utilisateur1</strong> - 30 octobre 2024</p>
        </div>
        <div class=\"comment-body\">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>

    <div class=\"comment\">
        <div class=\"comment-header\">
            <p><strong>Utilisateur2</strong> - 31 octobre 2024</p>
        </div>
        <div class=\"comment-body\">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>

    <!-- Formulaire de commentaire -->
    <form class=\"comment-form\">
        <label for=\"comment-author\">Nom</label>
        <input type=\"text\" id=\"comment-author\" name=\"author\" required placeholder=\"Votre nom\">

        <label for=\"comment-content\">Commentaire</label>
        <textarea id=\"comment-content\" name=\"content\" required placeholder=\"Écrivez votre commentaire...\"></textarea>

        <button type=\"submit\">Publier</button>
    </form>

    <p class=\"comment-count\">2 commentaires</p>
</section>

 <!-- Pied de page -->
 <footer>
    <div class=\"container\">
        <p>&copy; SpaceConnect. Tous droits réservés.</p>
        <nav>
            <ul>
                <li><a href=\"mentionslegales.html\">Mentions légales</a></li>
                <li><a href=\"politique.html\">Politique de confidentialité</a></li>
                <li><a href=\"conditionUtilisation.html\">Conditions d'utilisation</a></li>
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

<!-- Script pour le menu responsive -->
<script>
    const toggleButton = document.querySelector('.menu-toggle');
    const navMenu = document.querySelector('.nav-menu');

    toggleButton.addEventListener('click', () => {
        navMenu.classList.toggle('open');
    });
</script>

    <h1>";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 143, $this->source); })()), "title", [], "any", false, false, false, 143), "html", null, true);
        yield "</h1>
    <p><strong>Catégorie :</strong> ";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 144, $this->source); })()), "category", [], "any", false, false, false, 144), "html", null, true);
        yield "</p>
    <div>
        <p>";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 146, $this->source); })()), "content", [], "any", false, false, false, 146), "html", null, true);
        yield "</p>
    </div>

    <h3>Commentaires</h3>

    ";
        // line 152
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 152, $this->source); })()), "commentaires", [], "any", false, false, false, 152));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 153
            yield "        <div>
            <p>";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "content", [], "any", false, false, false, 154), "html", null, true);
            yield "</p>
            <small>Posté par ";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "user", [], "any", false, false, false, 155), "html", null, true);
            yield "</small>

            ";
            // line 157
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "user", [], "any", false, false, false, 157) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 157, $this->source); })()), "user", [], "any", false, false, false, 157)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                // line 158
                yield "                ";
                // line 159
                yield "                <form method=\"POST\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_page", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 159, $this->source); })()), "id", [], "any", false, false, false, 159)]), "html", null, true);
                yield "\">
                    <input type=\"hidden\" name=\"commentaire_id\" value=\"";
                // line 160
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 160), "html", null, true);
                yield "\">
                    <textarea name=\"content\" rows=\"5\" class=\"form-control\">";
                // line 161
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "content", [], "any", false, false, false, 161), "html", null, true);
                yield "</textarea>
                    <input type=\"hidden\" name=\"action\" value=\"edit\">
                    <button type=\"submit\" class=\"btn btn-warning\">Modifier</button>
                </form>

                ";
                // line 167
                yield "                <form method=\"POST\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_page", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 167, $this->source); })()), "id", [], "any", false, false, false, 167)]), "html", null, true);
                yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce commentaire ?');\">
                    <input type=\"hidden\" name=\"commentaire_id\" value=\"";
                // line 168
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 168), "html", null, true);
                yield "\">
                    <input type=\"hidden\" name=\"action\" value=\"delete\">
                    <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                </form>
            ";
            }
            // line 173
            yield "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['commentaire'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        yield "
    ";
        // line 177
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 177, $this->source); })()), "user", [], "any", false, false, false, 177)) {
            // line 178
            yield "        <h3>Ajouter un commentaire</h3>

        <form method=\"POST\" action=\"";
            // line 180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_page", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 180, $this->source); })()), "id", [], "any", false, false, false, 180)]), "html", null, true);
            yield "\">  ";
            // line 181
            yield "            <div class=\"form-group\">
                <label for=\"content\">Contenu du commentaire</label>
                <textarea id=\"content\" name=\"content\" class=\"form-control\" rows=\"5\"></textarea>
            </div>

            <button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
        </form>

    ";
        } else {
            // line 190
            yield "        <p>Vous devez être connecté pour ajouter un commentaire.</p>
    ";
        }
        
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
        return array (  346 => 190,  335 => 181,  332 => 180,  328 => 178,  325 => 177,  322 => 175,  315 => 173,  307 => 168,  302 => 167,  294 => 161,  290 => 160,  285 => 159,  283 => 158,  281 => 157,  276 => 155,  272 => 154,  269 => 153,  264 => 152,  256 => 146,  251 => 144,  247 => 143,  167 => 66,  162 => 64,  104 => 8,  91 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('styles/article.css') }}\" >
{% endblock %}

{% block body %}

<!-- En-tête -->
<header>
    <div class=\"container\">
        <h1>
            <nav>
                <ul>
                    <a href=\"accueil.html\">
                        <img src=\"img/logoSpaceConnect.webp\" width=\"60px\" alt=\"Logo SpaceConnect\">
                    </a>
                    <a href=\"accueil.html\">SpaceConnect</a>
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
                    <form class=\"search-form\" action=\"recherche.html\" method=\"get\">
                        <input type=\"text\" name=\"query\" placeholder=\"Rechercher...\">
                        <button type=\"submit\"><i class=\"fa fa-search\"></i></button>
                    </form>
                </li>
                <li><a href=\"quizz.html\">Quizz</a></li>
                <li><a href=\"Support.html\">Support</a></li>
                <li><a href=\"forum.html\">Forum</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"header-profil\"><i class=\"fa fa-user fa-lg\"></i></a>
                    <div class=\"dropdown-child\">
                        <a href=\"profile .html\">Profile</a>
                        <a href=\"inscription.html\">Se connecter</a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</header>

<section class=\"hero\">
    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h2>
    <p>Une introduction captivante à l'article...</p>
</section>

<article>
    <div class=\"container\">
        <h2>Titre de l'Article</h2>
        <p><strong>Auteur:</strong> Jean Dupont</p>
        <p><strong>Date:</strong> 30 octobre 2024</p>
        <img src=\"img/alientiktok.jpg\" alt=\"Image d'article\" class=\"centered-image\">
        
        <p>{{ article.content }}</p>        
        <h3>Sous-titre</h3>
        <p>{{ article.category}}</p>

        <h3>Conclusion</h3>
        <p>Phasellus libero justo, vulputate in ullamcorper in, aliquet in erat. Donec quis velit vel sem fermentum tincidunt a sed felis.</p>
    </div>
</article>

<!-- Section des commentaires -->
<section class=\"comments-section\">
    <h3>Commentaires</h3>

    <!-- Affichage dynamique des commentaires -->
    <div class=\"comment\">
        <div class=\"comment-header\">
            <p><strong>Utilisateur1</strong> - 30 octobre 2024</p>
        </div>
        <div class=\"comment-body\">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>

    <div class=\"comment\">
        <div class=\"comment-header\">
            <p><strong>Utilisateur2</strong> - 31 octobre 2024</p>
        </div>
        <div class=\"comment-body\">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>

    <!-- Formulaire de commentaire -->
    <form class=\"comment-form\">
        <label for=\"comment-author\">Nom</label>
        <input type=\"text\" id=\"comment-author\" name=\"author\" required placeholder=\"Votre nom\">

        <label for=\"comment-content\">Commentaire</label>
        <textarea id=\"comment-content\" name=\"content\" required placeholder=\"Écrivez votre commentaire...\"></textarea>

        <button type=\"submit\">Publier</button>
    </form>

    <p class=\"comment-count\">2 commentaires</p>
</section>

 <!-- Pied de page -->
 <footer>
    <div class=\"container\">
        <p>&copy; SpaceConnect. Tous droits réservés.</p>
        <nav>
            <ul>
                <li><a href=\"mentionslegales.html\">Mentions légales</a></li>
                <li><a href=\"politique.html\">Politique de confidentialité</a></li>
                <li><a href=\"conditionUtilisation.html\">Conditions d'utilisation</a></li>
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

<!-- Script pour le menu responsive -->
<script>
    const toggleButton = document.querySelector('.menu-toggle');
    const navMenu = document.querySelector('.nav-menu');

    toggleButton.addEventListener('click', () => {
        navMenu.classList.toggle('open');
    });
</script>

    <h1>{{ article.title }}</h1>
    <p><strong>Catégorie :</strong> {{ article.category }}</p>
    <div>
        <p>{{ article.content }}</p>
    </div>

    <h3>Commentaires</h3>

    {# Affichage des commentaires associés à l'article #}
    {% for commentaire in article.commentaires %}
        <div>
            <p>{{ commentaire.content }}</p>
            <small>Posté par {{ commentaire.user }}</small>

            {% if commentaire.user == app.user or is_granted('ROLE_ADMIN') %}
                {# Formulaire de modification du commentaire (visible pour l'auteur ou les administrateurs) #}
                <form method=\"POST\" action=\"{{ path('article_page', {id: article.id}) }}\">
                    <input type=\"hidden\" name=\"commentaire_id\" value=\"{{ commentaire.id }}\">
                    <textarea name=\"content\" rows=\"5\" class=\"form-control\">{{ commentaire.content }}</textarea>
                    <input type=\"hidden\" name=\"action\" value=\"edit\">
                    <button type=\"submit\" class=\"btn btn-warning\">Modifier</button>
                </form>

                {# Formulaire de suppression du commentaire (visible pour l'auteur ou les administrateurs) #}
                <form method=\"POST\" action=\"{{ path('article_page', {id: article.id}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce commentaire ?');\">
                    <input type=\"hidden\" name=\"commentaire_id\" value=\"{{ commentaire.id }}\">
                    <input type=\"hidden\" name=\"action\" value=\"delete\">
                    <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                </form>
            {% endif %}
        </div>
    {% endfor %}

    {# Formulaire d'ajout d'un nouveau commentaire #}
    {% if app.user %}
        <h3>Ajouter un commentaire</h3>

        <form method=\"POST\" action=\"{{ path('article_page', {id: article.id}) }}\">  {# Envoi du formulaire à l'URL actuelle de l'article #}
            <div class=\"form-group\">
                <label for=\"content\">Contenu du commentaire</label>
                <textarea id=\"content\" name=\"content\" class=\"form-control\" rows=\"5\"></textarea>
            </div>

            <button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
        </form>

    {% else %}
        <p>Vous devez être connecté pour ajouter un commentaire.</p>
    {% endif %}
{% endblock %}
", "articles/page.html.twig", "/Users/brice/Desktop/formation CDA/Symfony/templates/articles/page.html.twig");
    }
}
