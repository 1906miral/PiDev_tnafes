<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* navbar2.html.twig */
class __TwigTemplate_38edba12b2a4f2ec49eefc9549c3ad3de9d9f6af46628337566bba95573f9931 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar2.html.twig"));

        // line 1
        echo "<div id=\"sidebar-wrapper\" data-simplebar=\"\" data-simplebar-auto-hide=\"true\">
     <div class=\"brand-logo\">
         <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" class=\"logo-icon\">
       <h5 class=\"logo-text\">Backoffice Tnafes.tn</h5>
     </a>
   </div>



    <ul class=\"sidebar-menu do-nicescrol\">
        <li class=\"sidebar-header\">Menu </li>
        <li>
            <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stats");
        echo "\">
                <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/home.png"), "html", null, true);
        echo "\" width=\"20\" height=\"20\" class=\"logo-icon\">
                </i> <span>Acceuil</span>
            </a>
        </li>

        <li>
            <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutclient");
        echo "\">
                <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user.png"), "html", null, true);
        echo "\" width=\"20\" height=\"20\" class=\"logo-icon\">
                </i> <span>Ajout client</span>
            </a>
        </li>


        <li>
            <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutcoach");
        echo "\">
                <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/coach.png"), "html", null, true);
        echo "\" width=\"20\" height=\"20\" class=\"logo-icon\">
                </i> <span>Ajout coach</span>
            </a>
        </li>
        <li>
            <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affichagecoachclient");
        echo "\">
                <i class=\"zmdi zmdi-grid\"></i> <span>Tables coach/client</span>
            </a>
        </li>
        <li>
            <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_index");
        echo "\">
                <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/reclamation.png"), "html", null, true);
        echo "\" width=\"20\" height=\"20\" class=\"logo-icon\">
                </i> <span>Reclamation</span>
            </a>
        </li>
        <li>
            <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_index");
        echo "\">
                <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/subject.png"), "html", null, true);
        echo "\"width=\"20\" height=\"20\" class=\"logo-icon\">
                </i> <span>Publication</span>
            </a>
        </li>

        <li>
            <a href=\"categorie.html\">
                <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/category.png"), "html", null, true);
        echo "\" width=\"20\" height=\"20\" class=\"logo-icon\">
                </i> <span>Catégorie</span>
            </a>
        </li>

        <li>
            <a href=\"activite.html\">
                <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/puzzle.png"), "html", null, true);
        echo "\" width=\"20\" height=\"20\" class=\"logo-icon\">
                </i> <span>Activité</span>
            </a>
        </li>
        <li>
            <a href=\"article.html\">
                <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/publication.png"), "html", null, true);
        echo "\"width=\"20\" height=\"20\"  class=\"logo-icon\">
                </i> <span>Article</span>
            </a>
        </li>
        <li>
            <a href=\"categorieevent.html\">
                <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/category.png"), "html", null, true);
        echo "\" width=\"20\" height=\"20\" class=\"logo-icon\">
                </i> <span>Catégorie évenement</span>
            </a>
        </li>
        <li>
            <a href=\"event.html\">
                <img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/event.png"), "html", null, true);
        echo "\"width=\"20\" height=\"20\"  class=\"logo-icon\">
                </i> <span>Evenement</span>
            </a>
        </li>
        <li>
            <a href=\"abonnement.html\">
                <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/abonnement.png"), "html", null, true);
        echo "\" width=\"20\" height=\"20\" class=\"logo-icon\">
                </i> <span>Abonnement</span>
            </a>
        </li>




    </ul>



</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "navbar2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 84,  170 => 78,  161 => 72,  152 => 66,  143 => 60,  133 => 53,  123 => 46,  119 => 45,  111 => 40,  107 => 39,  99 => 34,  91 => 29,  87 => 28,  77 => 21,  73 => 20,  64 => 14,  60 => 13,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"sidebar-wrapper\" data-simplebar=\"\" data-simplebar-auto-hide=\"true\">
     <div class=\"brand-logo\">
         <img src=\"{{ asset('assets/images/logo.png') }}\" class=\"logo-icon\">
       <h5 class=\"logo-text\">Backoffice Tnafes.tn</h5>
     </a>
   </div>



    <ul class=\"sidebar-menu do-nicescrol\">
        <li class=\"sidebar-header\">Menu </li>
        <li>
            <a href=\"{{ path('stats') }}\">
                <img src=\"{{ asset('assets/images/home.png') }}\" width=\"20\" height=\"20\" class=\"logo-icon\">
                </i> <span>Acceuil</span>
            </a>
        </li>

        <li>
            <a href=\"{{path('ajoutclient')}}\">
                <img src=\"{{ asset('assets/images/user.png') }}\" width=\"20\" height=\"20\" class=\"logo-icon\">
                </i> <span>Ajout client</span>
            </a>
        </li>


        <li>
            <a href=\"{{path('ajoutcoach')}}\">
                <img src=\"{{ asset('assets/images/coach.png') }}\" width=\"20\" height=\"20\" class=\"logo-icon\">
                </i> <span>Ajout coach</span>
            </a>
        </li>
        <li>
            <a href=\"{{path('affichagecoachclient')}}\">
                <i class=\"zmdi zmdi-grid\"></i> <span>Tables coach/client</span>
            </a>
        </li>
        <li>
            <a href=\"{{ path('reclamation_index') }}\">
                <img src=\"{{ asset('assets/images/reclamation.png') }}\" width=\"20\" height=\"20\" class=\"logo-icon\">
                </i> <span>Reclamation</span>
            </a>
        </li>
        <li>
            <a href=\"{{ path('publication_index') }}\">
                <img src=\"{{ asset('assets/images/subject.png') }}\"width=\"20\" height=\"20\" class=\"logo-icon\">
                </i> <span>Publication</span>
            </a>
        </li>

        <li>
            <a href=\"categorie.html\">
                <img src=\"{{ asset('assets/images/category.png') }}\" width=\"20\" height=\"20\" class=\"logo-icon\">
                </i> <span>Catégorie</span>
            </a>
        </li>

        <li>
            <a href=\"activite.html\">
                <img src=\"{{ asset('assets/images/puzzle.png') }}\" width=\"20\" height=\"20\" class=\"logo-icon\">
                </i> <span>Activité</span>
            </a>
        </li>
        <li>
            <a href=\"article.html\">
                <img src=\"{{ asset('assets/images/publication.png') }}\"width=\"20\" height=\"20\"  class=\"logo-icon\">
                </i> <span>Article</span>
            </a>
        </li>
        <li>
            <a href=\"categorieevent.html\">
                <img src=\"{{ asset('assets/images/category.png') }}\" width=\"20\" height=\"20\" class=\"logo-icon\">
                </i> <span>Catégorie évenement</span>
            </a>
        </li>
        <li>
            <a href=\"event.html\">
                <img src=\"{{ asset('assets/images/event.png') }}\"width=\"20\" height=\"20\"  class=\"logo-icon\">
                </i> <span>Evenement</span>
            </a>
        </li>
        <li>
            <a href=\"abonnement.html\">
                <img src=\"{{ asset('assets/images/abonnement.png') }}\" width=\"20\" height=\"20\" class=\"logo-icon\">
                </i> <span>Abonnement</span>
            </a>
        </li>




    </ul>



</div>", "navbar2.html.twig", "C:\\Users\\miral\\OneDrive\\Bureau\\PiDevWeb2.33\\templates\\navbar2.html.twig");
    }
}
