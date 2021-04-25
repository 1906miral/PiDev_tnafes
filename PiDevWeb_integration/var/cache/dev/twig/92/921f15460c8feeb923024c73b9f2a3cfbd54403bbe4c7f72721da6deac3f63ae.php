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

/* publication/index2.html.twig */
class __TwigTemplate_59ce3d393501c94eceeada6dbfef1d6483a46d703ce4125a377f20a803f7e27c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'displayPub' => [$this, 'block_displayPub'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Acceuil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "publication/index2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "publication/index2.html.twig"));

        $this->parent = $this->loadTemplate("Acceuil.html.twig", "publication/index2.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_displayPub($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "displayPub"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "displayPub"));

        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publications"]) || array_key_exists("publications", $context) ? $context["publications"] : (function () { throw new RuntimeError('Variable "publications" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
            // line 4
            echo "
        <div class=\"col-lg-4 intro_col\">
            <div class=\"intro_item\">
                <div class=\"intro_item_overlay\"></div>
                <!-- Image by https://unsplash.com/@dnevozhai -->
                <div class=\"intro_item_background\" style=\"background-image:url(";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["publication"], "imageFile"), "html", null, true);
            echo ")\"></div>
                <div class=\"intro_item_content d-flex flex-column align-items-center justify-content-center\">
                    <div class=\"intro_date\">";
            // line 11
            ((twig_get_attribute($this->env, $this->source, $context["publication"], "datePublication", [], "any", false, false, false, 11)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "datePublication", [], "any", false, false, false, 11), "d-m-y"), "html", null, true))) : (print ("")));
            echo "</div>
                    <div class=\"button intro_button\"><div class=\"button_bcg\"></div><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_front", ["idPub" => twig_get_attribute($this->env, $this->source, $context["publication"], "idPub", [], "any", false, false, false, 12)]), "html", null, true);
            echo "\">Détails<span></span><span></span><span></span></a></div>
                    <div class=\"intro_center text-center\">
                        <h1>Votre </h1>
                        <h1> calme avec Tnafes</h1>
                    </div>
                </div>
            </div>
        </div>




    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publication'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "

    <div class=\"blog_navigation\">
        <ul>
            ";
        // line 29
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["publications"]) || array_key_exists("publications", $context) ? $context["publications"] : (function () { throw new RuntimeError('Variable "publications" does not exist.', 29, $this->source); })()));
        echo "
        </ul>
    </div>











";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "publication/index2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 29,  108 => 25,  89 => 12,  85 => 11,  80 => 9,  73 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Acceuil.html.twig' %}
{% block displayPub %}
    {% for publication in publications %}

        <div class=\"col-lg-4 intro_col\">
            <div class=\"intro_item\">
                <div class=\"intro_item_overlay\"></div>
                <!-- Image by https://unsplash.com/@dnevozhai -->
                <div class=\"intro_item_background\" style=\"background-image:url({{ vich_uploader_asset(publication,'imageFile') }})\"></div>
                <div class=\"intro_item_content d-flex flex-column align-items-center justify-content-center\">
                    <div class=\"intro_date\">{{ publication.datePublication ? publication.datePublication|date('d-m-y') : '' }}</div>
                    <div class=\"button intro_button\"><div class=\"button_bcg\"></div><a href=\"{{ path('publication_front', {'idPub': publication.idPub}) }}\">Détails<span></span><span></span><span></span></a></div>
                    <div class=\"intro_center text-center\">
                        <h1>Votre </h1>
                        <h1> calme avec Tnafes</h1>
                    </div>
                </div>
            </div>
        </div>




    {% endfor %}


    <div class=\"blog_navigation\">
        <ul>
            {{ knp_pagination_render(publications) }}
        </ul>
    </div>











{% endblock %}", "publication/index2.html.twig", "C:\\Users\\miral\\OneDrive\\Bureau\\PiDevWeb2.33\\templates\\publication\\index2.html.twig");
    }
}
