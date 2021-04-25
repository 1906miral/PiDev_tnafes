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

/* fronttopbar.html.twig */
class __TwigTemplate_7771a6da93e0c96bc7379643d500cfc3f69a99a3fd22a123c4f4b361884b5a32 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fronttopbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fronttopbar.html.twig"));

        // line 1
        echo "<div class=\"top_bar\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col d-flex flex-row\">
\t\t\t\t<div class=\"phone\">tnafes.tnafes@gmail.com</div>
\t\t\t\t<div class=\"user_box ml-auto\">
                ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7)) {
            // line 8
            echo "\t\t\t\t\t<div class=\"user_box_login user_box_link\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">logout</a></div>
\t\t\t\t\t<div class=\"user_box_register user_box_link\"><a href=\"";
            // line 9
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updatecurrentuserdata");
            echo "\">changer mes informations</a></div>
                ";
        } else {
            // line 11
            echo "                    <div class=\"user_box_login user_box_link\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">login</a></div>
\t\t\t\t\t<div class=\"user_box_register user_box_link\"><a href=\"";
            // line 12
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signup");
            echo "\">S'inscrire</a></div>
                ";
        }
        // line 14
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>\t\t
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "fronttopbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 14,  68 => 12,  63 => 11,  58 => 9,  53 => 8,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"top_bar\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col d-flex flex-row\">
\t\t\t\t<div class=\"phone\">tnafes.tnafes@gmail.com</div>
\t\t\t\t<div class=\"user_box ml-auto\">
                {% if app.user %}
\t\t\t\t\t<div class=\"user_box_login user_box_link\"><a href=\"{{path('app_logout')}}\">logout</a></div>
\t\t\t\t\t<div class=\"user_box_register user_box_link\"><a href=\"{{path('updatecurrentuserdata')}}\">changer mes informations</a></div>
                {% else %}
                    <div class=\"user_box_login user_box_link\"><a href=\"{{path('app_login')}}\">login</a></div>
\t\t\t\t\t<div class=\"user_box_register user_box_link\"><a href=\"{{path('signup')}}\">S'inscrire</a></div>
                {% endif %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>\t\t
</div>", "fronttopbar.html.twig", "C:\\Users\\miral\\OneDrive\\Bureau\\PiDevWeb2.33\\templates\\fronttopbar.html.twig");
    }
}
