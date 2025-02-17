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

/* politique.html.twig */
class __TwigTemplate_ca39c81708fc554dd6d055baa04fd2fe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "politique.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "politique.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "politique.html.twig", 1);
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

        yield "Article - SpaceConnect";
        
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

    <h1>Politique de Confidentialité</h1>
    <p>Dernière mise à jour : [Date]</p>

    <p>Votre vie privée est importante pour nous. Cette politique de confidentialité explique quelles informations nous collectons, pourquoi nous les collectons et comment nous les utilisons. En utilisant notre site, vous acceptez les termes de cette politique.</p>

    <h2>1. Collecte des Informations</h2>
    <p>Nous pouvons collecter des informations de plusieurs façons :</p>
    <ul>
        <li><strong>Données fournies par les utilisateurs</strong> : lorsque vous vous inscrivez à notre newsletter, commentez un article ou remplissez un formulaire de contact, nous collectons des informations comme votre nom, adresse e-mail, et tout autre renseignement que vous choisissez de fournir.</li>
        <li><strong>Données collectées automatiquement</strong> : certaines informations sont collectées automatiquement, comme votre adresse IP, le type de navigateur, la langue et les pages visitées sur notre blog, pour améliorer l’expérience utilisateur et adapter notre contenu.</li>
    </ul>

    <h2>2. Utilisation des Informations</h2>
    <p>Les informations collectées sont utilisées pour :</p>
    <ul>
        <li><strong>Améliorer notre contenu et votre expérience</strong> : en fonction des intérêts et du comportement des utilisateurs.</li>
        <li><strong>Envoyer des communications</strong> : si vous avez choisi de recevoir des newsletters, nous vous enverrons des e-mails sur nos dernières publications ou promotions. Vous pouvez vous désabonner à tout moment.</li>
        <li><strong>Analyser le trafic et l’interaction des utilisateurs</strong> : pour optimiser notre blog et comprendre les préférences de notre audience.</li>
    </ul>

    <h2>3. Partage des Informations</h2>
    <p>Vos informations ne seront pas vendues ni louées à des tiers. Toutefois, nous pouvons partager certaines données avec des fournisseurs tiers de services pour :</p>
    <ul>
        <li>La gestion de notre site (hébergement, sécurité, etc.).</li>
        <li>L’analyse du trafic (via des outils tels que Google Analytics).</li>
    </ul>
    <p>Ces tiers n’ont accès à vos informations que pour accomplir les tâches spécifiques pour lesquelles nous les avons engagés, et ils sont tenus de respecter la confidentialité de vos données.</p>

    <h2>4. Cookies et Technologies Similaires</h2>
    <p>Nous utilisons des cookies pour améliorer votre expérience sur notre blog :</p>
    <ul>
        <li>Les cookies sont des fichiers stockés sur votre appareil permettant de vous identifier lorsque vous revenez sur notre site.</li>
        <li>Ils nous aident à personnaliser le contenu, mémoriser vos préférences et analyser les tendances.</li>
        <li>Vous pouvez configurer votre navigateur pour refuser tous les cookies ou pour vous alerter lorsqu’un cookie est envoyé.</li>
    </ul>

    <h2>5. Sécurité des Données</h2>
    <p>Nous mettons en œuvre des mesures de sécurité pour protéger vos données contre l’accès non autorisé, l’altération, la divulgation ou la destruction. Cependant, aucun système n’est totalement sécurisé et nous ne pouvons garantir la sécurité absolue des informations transmises en ligne.</p>

    <h2>6. Vos Droits</h2>
    <p>Conformément à la loi RGPD, vous disposez de certains droits relatifs à vos données :</p>
    <ul>
        <li><strong>Droit d’accès</strong> : vous pouvez demander une copie des données que nous possédons sur vous.</li>
        <li><strong>Droit de rectification</strong> : vous pouvez nous demander de corriger les informations inexactes.</li>
        <li><strong>Droit à l’oubli</strong> : vous pouvez nous demander de supprimer vos informations personnelles, sous certaines conditions.</li>
    </ul>
    <p>Pour exercer l’un de ces droits, veuillez nous contacter à <a href=\"mailto:[adresse e-mail de contact]\">[adresse e-mail de contact]</a>.</p>

    <h2>7. Modifications de la Politique de Confidentialité</h2>
    <p>Nous nous réservons le droit de modifier cette politique de confidentialité à tout moment. Les modifications seront publiées sur cette page avec la date de mise à jour. Nous vous encourageons à consulter cette page régulièrement.</p>

    <h2>8. Nous Contacter</h2>
    <p>Pour toute question concernant cette politique de confidentialité ou vos informations personnelles, contactez-nous à :</p>
    <ul>
        <li>Adresse e-mail : <a href=\"mailto:[votre e-mail]\">[votre e-mail]</a></li>
        <li>Adresse postale : [votre adresse, optionnel]</li>
    </ul>
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
        return "politique.html.twig";
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

{% block title %}Article - SpaceConnect{% endblock %}

{% block stylesheets %}
    {{ parent() }} {# Garde les styles de base définis dans base.html.twig #}
    <link rel=\"stylesheet\" href=\"{{ asset('css/accueil.css') }}\">
{% endblock %}

{% block body %}

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

    <h1>Politique de Confidentialité</h1>
    <p>Dernière mise à jour : [Date]</p>

    <p>Votre vie privée est importante pour nous. Cette politique de confidentialité explique quelles informations nous collectons, pourquoi nous les collectons et comment nous les utilisons. En utilisant notre site, vous acceptez les termes de cette politique.</p>

    <h2>1. Collecte des Informations</h2>
    <p>Nous pouvons collecter des informations de plusieurs façons :</p>
    <ul>
        <li><strong>Données fournies par les utilisateurs</strong> : lorsque vous vous inscrivez à notre newsletter, commentez un article ou remplissez un formulaire de contact, nous collectons des informations comme votre nom, adresse e-mail, et tout autre renseignement que vous choisissez de fournir.</li>
        <li><strong>Données collectées automatiquement</strong> : certaines informations sont collectées automatiquement, comme votre adresse IP, le type de navigateur, la langue et les pages visitées sur notre blog, pour améliorer l’expérience utilisateur et adapter notre contenu.</li>
    </ul>

    <h2>2. Utilisation des Informations</h2>
    <p>Les informations collectées sont utilisées pour :</p>
    <ul>
        <li><strong>Améliorer notre contenu et votre expérience</strong> : en fonction des intérêts et du comportement des utilisateurs.</li>
        <li><strong>Envoyer des communications</strong> : si vous avez choisi de recevoir des newsletters, nous vous enverrons des e-mails sur nos dernières publications ou promotions. Vous pouvez vous désabonner à tout moment.</li>
        <li><strong>Analyser le trafic et l’interaction des utilisateurs</strong> : pour optimiser notre blog et comprendre les préférences de notre audience.</li>
    </ul>

    <h2>3. Partage des Informations</h2>
    <p>Vos informations ne seront pas vendues ni louées à des tiers. Toutefois, nous pouvons partager certaines données avec des fournisseurs tiers de services pour :</p>
    <ul>
        <li>La gestion de notre site (hébergement, sécurité, etc.).</li>
        <li>L’analyse du trafic (via des outils tels que Google Analytics).</li>
    </ul>
    <p>Ces tiers n’ont accès à vos informations que pour accomplir les tâches spécifiques pour lesquelles nous les avons engagés, et ils sont tenus de respecter la confidentialité de vos données.</p>

    <h2>4. Cookies et Technologies Similaires</h2>
    <p>Nous utilisons des cookies pour améliorer votre expérience sur notre blog :</p>
    <ul>
        <li>Les cookies sont des fichiers stockés sur votre appareil permettant de vous identifier lorsque vous revenez sur notre site.</li>
        <li>Ils nous aident à personnaliser le contenu, mémoriser vos préférences et analyser les tendances.</li>
        <li>Vous pouvez configurer votre navigateur pour refuser tous les cookies ou pour vous alerter lorsqu’un cookie est envoyé.</li>
    </ul>

    <h2>5. Sécurité des Données</h2>
    <p>Nous mettons en œuvre des mesures de sécurité pour protéger vos données contre l’accès non autorisé, l’altération, la divulgation ou la destruction. Cependant, aucun système n’est totalement sécurisé et nous ne pouvons garantir la sécurité absolue des informations transmises en ligne.</p>

    <h2>6. Vos Droits</h2>
    <p>Conformément à la loi RGPD, vous disposez de certains droits relatifs à vos données :</p>
    <ul>
        <li><strong>Droit d’accès</strong> : vous pouvez demander une copie des données que nous possédons sur vous.</li>
        <li><strong>Droit de rectification</strong> : vous pouvez nous demander de corriger les informations inexactes.</li>
        <li><strong>Droit à l’oubli</strong> : vous pouvez nous demander de supprimer vos informations personnelles, sous certaines conditions.</li>
    </ul>
    <p>Pour exercer l’un de ces droits, veuillez nous contacter à <a href=\"mailto:[adresse e-mail de contact]\">[adresse e-mail de contact]</a>.</p>

    <h2>7. Modifications de la Politique de Confidentialité</h2>
    <p>Nous nous réservons le droit de modifier cette politique de confidentialité à tout moment. Les modifications seront publiées sur cette page avec la date de mise à jour. Nous vous encourageons à consulter cette page régulièrement.</p>

    <h2>8. Nous Contacter</h2>
    <p>Pour toute question concernant cette politique de confidentialité ou vos informations personnelles, contactez-nous à :</p>
    <ul>
        <li>Adresse e-mail : <a href=\"mailto:[votre e-mail]\">[votre e-mail]</a></li>
        <li>Adresse postale : [votre adresse, optionnel]</li>
    </ul>
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

{% endblock %}", "politique.html.twig", "/Users/brice/Desktop/formation CDA/Symfony/templates/politique.html.twig");
    }
}
