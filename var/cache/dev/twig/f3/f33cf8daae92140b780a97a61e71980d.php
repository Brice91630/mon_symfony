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

/* condition.html.twig */
class __TwigTemplate_80c95cc8492c60ccd06b017565b0c8dc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "condition.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "condition.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "condition.html.twig", 1);
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

    <h1>Condition d'utilisation</h1>

    <h2>1. Informations Générales</h2>
    <p>Conformément aux dispositions des articles 6-III et 19 de la Loi pour la Confiance dans l’Économie Numérique (LCEN), nous informons les utilisateurs du site de l’identité des différents intervenants dans le cadre de sa réalisation et de son suivi :</p>

    <h2>2. Éditeur du Site</h2>
    <p><strong>Nom du site</strong> : [Nom du Site]<br>
    <strong>Éditeur</strong> : [Nom de l’Éditeur]<br>
    <strong>Siège social</strong> : [Adresse complète de l’Éditeur]<br>
    <strong>Numéro de téléphone</strong> : [Numéro de téléphone de l’Éditeur]<br>
    <strong>Email</strong> : <a href=\"mailto:[adresse e-mail de l’éditeur]\">[adresse e-mail de l’éditeur]</a><br>
    <strong>Numéro SIRET</strong> : [Numéro SIRET]</p>

    <h2>3. Directeur de la Publication</h2>
    <p>Le Directeur de la publication est <strong>[Nom du Directeur de publication]</strong>, en qualité de [Fonction, ex. Directeur général].</p>

    <h2>4. Hébergeur du Site</h2>
    <p><strong>Hébergeur</strong> : [Nom de l’Hébergeur]<br>
    <strong>Adresse</strong> : [Adresse de l’Hébergeur]<br>
    <strong>Numéro de téléphone</strong> : [Numéro de téléphone de l’Hébergeur]</p>

    <h2>5. Propriété Intellectuelle</h2>
    <p>Le contenu du site, incluant, de façon non limitative, les textes, images, vidéos, graphismes, logos, icônes et sons, est la propriété de [Nom de l’Éditeur] ou de ses partenaires et est protégé par les lois françaises et internationales relatives à la propriété intellectuelle.</p>
    <p>Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de [Nom de l’Éditeur].</p>

    <h2>6. Responsabilité</h2>
    <p>[Nom de l’Éditeur] s’efforce d’assurer au mieux l’exactitude et la mise à jour des informations diffusées sur le site. Cependant, [Nom de l’Éditeur] ne peut garantir l’exactitude, la précision ou l’exhaustivité des informations mises à disposition sur le site.</p>
    <p>En conséquence, [Nom de l’Éditeur] décline toute responsabilité pour tout dommage résultant d’une imprécision ou inexactitude des informations disponibles sur ce site.</p>

    <h2>7. Données Personnelles</h2>
    <p>Les informations personnelles collectées sur ce site sont traitées conformément à notre <a href=\"[lien vers la politique de confidentialité]\">politique de confidentialité</a>. Conformément à la réglementation en vigueur (RGPD), vous disposez d’un droit d’accès, de rectification et de suppression de vos données. Pour exercer ce droit, veuillez nous contacter à <a href=\"mailto:[adresse e-mail de contact]\">[adresse e-mail de contact]</a>.</p>

    <h2>8. Liens Hypertextes</h2>
    <p>Le site peut contenir des liens hypertextes vers d’autres sites. [Nom de l’Éditeur] n’a aucun contrôle sur le contenu de ces sites et décline toute responsabilité quant à leurs contenus.</p>

    <h2>9. Droit Applicable et Juridiction</h2>
    <p>Les présentes mentions légales sont régies par le droit français. En cas de litige, et après échec de toute tentative de solution amiable, les tribunaux français seront seuls compétents.</p>

    <h2>10. Nous Contacter</h2>
    <p>Pour toute question ou information concernant l’utilisation du site, vous pouvez nous contacter à l’adresse suivante :</p>
    <ul>
        <li>Adresse e-mail : <a href=\"mailto:[votre e-mail]\">[votre e-mail]</a></li>
        <li>Adresse postale : [Votre adresse, optionnel]</li>
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
        return "condition.html.twig";
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

    <h1>Condition d'utilisation</h1>

    <h2>1. Informations Générales</h2>
    <p>Conformément aux dispositions des articles 6-III et 19 de la Loi pour la Confiance dans l’Économie Numérique (LCEN), nous informons les utilisateurs du site de l’identité des différents intervenants dans le cadre de sa réalisation et de son suivi :</p>

    <h2>2. Éditeur du Site</h2>
    <p><strong>Nom du site</strong> : [Nom du Site]<br>
    <strong>Éditeur</strong> : [Nom de l’Éditeur]<br>
    <strong>Siège social</strong> : [Adresse complète de l’Éditeur]<br>
    <strong>Numéro de téléphone</strong> : [Numéro de téléphone de l’Éditeur]<br>
    <strong>Email</strong> : <a href=\"mailto:[adresse e-mail de l’éditeur]\">[adresse e-mail de l’éditeur]</a><br>
    <strong>Numéro SIRET</strong> : [Numéro SIRET]</p>

    <h2>3. Directeur de la Publication</h2>
    <p>Le Directeur de la publication est <strong>[Nom du Directeur de publication]</strong>, en qualité de [Fonction, ex. Directeur général].</p>

    <h2>4. Hébergeur du Site</h2>
    <p><strong>Hébergeur</strong> : [Nom de l’Hébergeur]<br>
    <strong>Adresse</strong> : [Adresse de l’Hébergeur]<br>
    <strong>Numéro de téléphone</strong> : [Numéro de téléphone de l’Hébergeur]</p>

    <h2>5. Propriété Intellectuelle</h2>
    <p>Le contenu du site, incluant, de façon non limitative, les textes, images, vidéos, graphismes, logos, icônes et sons, est la propriété de [Nom de l’Éditeur] ou de ses partenaires et est protégé par les lois françaises et internationales relatives à la propriété intellectuelle.</p>
    <p>Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de [Nom de l’Éditeur].</p>

    <h2>6. Responsabilité</h2>
    <p>[Nom de l’Éditeur] s’efforce d’assurer au mieux l’exactitude et la mise à jour des informations diffusées sur le site. Cependant, [Nom de l’Éditeur] ne peut garantir l’exactitude, la précision ou l’exhaustivité des informations mises à disposition sur le site.</p>
    <p>En conséquence, [Nom de l’Éditeur] décline toute responsabilité pour tout dommage résultant d’une imprécision ou inexactitude des informations disponibles sur ce site.</p>

    <h2>7. Données Personnelles</h2>
    <p>Les informations personnelles collectées sur ce site sont traitées conformément à notre <a href=\"[lien vers la politique de confidentialité]\">politique de confidentialité</a>. Conformément à la réglementation en vigueur (RGPD), vous disposez d’un droit d’accès, de rectification et de suppression de vos données. Pour exercer ce droit, veuillez nous contacter à <a href=\"mailto:[adresse e-mail de contact]\">[adresse e-mail de contact]</a>.</p>

    <h2>8. Liens Hypertextes</h2>
    <p>Le site peut contenir des liens hypertextes vers d’autres sites. [Nom de l’Éditeur] n’a aucun contrôle sur le contenu de ces sites et décline toute responsabilité quant à leurs contenus.</p>

    <h2>9. Droit Applicable et Juridiction</h2>
    <p>Les présentes mentions légales sont régies par le droit français. En cas de litige, et après échec de toute tentative de solution amiable, les tribunaux français seront seuls compétents.</p>

    <h2>10. Nous Contacter</h2>
    <p>Pour toute question ou information concernant l’utilisation du site, vous pouvez nous contacter à l’adresse suivante :</p>
    <ul>
        <li>Adresse e-mail : <a href=\"mailto:[votre e-mail]\">[votre e-mail]</a></li>
        <li>Adresse postale : [Votre adresse, optionnel]</li>
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
{% endblock %}", "condition.html.twig", "/Users/brice/Desktop/formation CDA/Symfony/templates/condition.html.twig");
    }
}
