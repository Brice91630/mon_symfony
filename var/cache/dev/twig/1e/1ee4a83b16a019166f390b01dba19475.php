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

/* profile.html.twig */
class __TwigTemplate_468ac9807d05d4b544640b7bbeb56a93 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile.html.twig", 1);
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

        yield "Profile - SpaceConnect";
        
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/profile.css"), "html", null, true);
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
                <li><a href=\"quizz.html\">Quiz</a></li>
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
    
   <!-- Main Container for Profile -->
<div class=\"profile-container\">
    <!-- User Profile Section -->
    <section class=\"profile-box\">
        <h2>Profil de l'utilisateur</h2>
        <!-- User Details -->
        <div class=\"profile-details\">
            <label>Nom :</label>
            <p id=\"user-name\">John Doe</p>
            
            <label>Email :</label>
            <p id=\"user-email\">johndoe@example.com</p>
            
            <label>Téléphone :</label>
            <p id=\"user-phone\">+33 1 23 45 67 89</p>
            
            <label>Adresse :</label>
            <p id=\"user-address\">123 Rue Exemple, 75000 Paris, France</p>
        </div>
        
        
        <!-- Profile Actions (Edit and Logout) -->
        <div class=\"profile-actions\">
            <button type=\"button\" class=\"btn\" onclick=\"editProfile()\">Modifier le profil</button>
            <button type=\"button\" class=\"btn\" onclick=\"logout()\">Déconnexion</button>
        </div>

        <!-- Newsletter Subscription Section -->
        <div class=\"newsletter-section\">
            <label>Abonné à la newsletter :</label>
            <select id=\"newsletter-select\">
                <option value=\"oui\">Oui</option>
                <option value=\"non\">Non</option>
            </select>
        </div>
    </section>
</div>


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
        return "profile.html.twig";
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
        return array (  132 => 11,  119 => 10,  105 => 7,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profile - SpaceConnect{% endblock %}

{% block stylesheets %}
    {{ parent() }} {# Garde les styles de base définis dans base.html.twig #}
    <link rel=\"stylesheet\" href=\"{{ asset('css/profile.css') }}\">
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
                <li><a href=\"quizz.html\">Quiz</a></li>
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
    
   <!-- Main Container for Profile -->
<div class=\"profile-container\">
    <!-- User Profile Section -->
    <section class=\"profile-box\">
        <h2>Profil de l'utilisateur</h2>
        <!-- User Details -->
        <div class=\"profile-details\">
            <label>Nom :</label>
            <p id=\"user-name\">John Doe</p>
            
            <label>Email :</label>
            <p id=\"user-email\">johndoe@example.com</p>
            
            <label>Téléphone :</label>
            <p id=\"user-phone\">+33 1 23 45 67 89</p>
            
            <label>Adresse :</label>
            <p id=\"user-address\">123 Rue Exemple, 75000 Paris, France</p>
        </div>
        
        
        <!-- Profile Actions (Edit and Logout) -->
        <div class=\"profile-actions\">
            <button type=\"button\" class=\"btn\" onclick=\"editProfile()\">Modifier le profil</button>
            <button type=\"button\" class=\"btn\" onclick=\"logout()\">Déconnexion</button>
        </div>

        <!-- Newsletter Subscription Section -->
        <div class=\"newsletter-section\">
            <label>Abonné à la newsletter :</label>
            <select id=\"newsletter-select\">
                <option value=\"oui\">Oui</option>
                <option value=\"non\">Non</option>
            </select>
        </div>
    </section>
</div>


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

{% endblock %}", "profile.html.twig", "/Users/brice/Desktop/formation CDA/Symfony/templates/profile.html.twig");
    }
}
