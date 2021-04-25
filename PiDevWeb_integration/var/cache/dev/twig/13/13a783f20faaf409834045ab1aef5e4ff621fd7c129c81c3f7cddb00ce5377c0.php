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

/* navbar.html.twig */
class __TwigTemplate_ea8320f8a6857e4f8fd51be26f1945261267f527324c7e4f63ed72d581e6e9a7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        echo "<!-- Header -->

<header class=\"header\">

    <!-- Top Bar -->

    <div class=\"top_bar\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col d-flex flex-row\">
                    <div class=\"phone\">tnafes.tnafes@gmail.com</div>
                    <div class=\"user_box ml-auto\">
                        ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13)) {
            // line 14
            echo "                            <div class=\"user_box_login user_box_link\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Se deconnecter</a></div>
                            <div class=\"user_box_register user_box_link\"><a href=\"";
            // line 15
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updatecurrentuserdata");
            echo "\">Changer mes informations</a></div>
                        ";
        } else {
            // line 17
            echo "                            <div class=\"user_box_login user_box_link\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Se connecter</a></div>
                            <div class=\"user_box_register user_box_link\"><a href=\"";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signup");
            echo "\">S'inscrire</a></div>
                        ";
        }
        // line 20
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->

    <nav class=\"main_nav\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col main_nav_col d-flex flex-row align-items-center justify-content-start\">
                    <div class=\"logo_container\">
                        <div class=\"logo\"><a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_index2");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/123.png"), "html", null, true);
        echo "\" alt=\"\"><br>TNAFES</a></div>
                    </div>
                    <div class=\"main_nav_container ml-auto\">
                        <ul class=\"main_nav_list\">
                            <li class=\"main_nav_item\"><a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_index2");
        echo "\" >Acceuil</a></li>
                            <li class=\"main_nav_item\"><a href=\"\" >Articles</a></li>
                            <li class=\"main_nav_item\"><a href=\"\" >Activités</a></li>

                            <li class=\"main_nav_item\"><a href=\"\" >Rendez-vous</a></li>

                            <li class=\"main_nav_item\"><a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_new");
        echo "\" >Reclamations</a></li>
                            <li class=\"main_nav_item\"><a href=\"\" >Messages</a></li>
                            <li class=\"main_nav_item\"><a  href=\"\" > Abonnements</a></li>

                        </ul>
                    </div>
                    <div class=\"content_search ml-lg-0 ml-auto\">
                        <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                             width=\"17px\" height=\"17px\" viewBox=\"0 0 512 512\" enable-background=\"new 0 0 512 512\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t<g>
                                    <g>
                                        <g>
                                            <path class=\"mag_glass\" fill=\"#FFFFFF\" d=\"M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
\t\t\t\t\t\t\t\t\t\t\ts112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
\t\t\t\t\t\t\t\t\t\t\tC407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
\t\t\t\t\t\t\t\t\t\t\tM119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
\t\t\t\t\t\t\t\t\t\t\tc0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z\"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path class=\"mag_glass\" fill=\"#FFFFFF\" d=\"M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
\t\t\t\t\t\t\t\t\t\t\tc8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
\t\t\t\t\t\t\t\t\t\t\tC-2.019,484.77-2.019,497.865,6.057,505.942z\"/>
                                        </g>
                                    </g>
                                </g>
\t\t\t\t\t\t\t</svg>
                    </div>

                    <form id=\"search_form\" class=\"search_form bez_1\">
                        <input type=\"search\" class=\"search_content_input bez_1\">
                    </form>

                    <div class=\"hamburger\">
                        <i class=\"fa fa-bars trans_200\"></i>
                    </div>
                </div>
            </div>
        </div>
    </nav>

</header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 43,  103 => 37,  94 => 33,  79 => 20,  74 => 18,  69 => 17,  64 => 15,  59 => 14,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Header -->

<header class=\"header\">

    <!-- Top Bar -->

    <div class=\"top_bar\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col d-flex flex-row\">
                    <div class=\"phone\">tnafes.tnafes@gmail.com</div>
                    <div class=\"user_box ml-auto\">
                        {% if app.user %}
                            <div class=\"user_box_login user_box_link\"><a href=\"{{path('app_logout')}}\">Se deconnecter</a></div>
                            <div class=\"user_box_register user_box_link\"><a href=\"{{path('updatecurrentuserdata')}}\">Changer mes informations</a></div>
                        {% else %}
                            <div class=\"user_box_login user_box_link\"><a href=\"{{path('app_login')}}\">Se connecter</a></div>
                            <div class=\"user_box_register user_box_link\"><a href=\"{{path('signup')}}\">S'inscrire</a></div>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->

    <nav class=\"main_nav\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col main_nav_col d-flex flex-row align-items-center justify-content-start\">
                    <div class=\"logo_container\">
                        <div class=\"logo\"><a href=\"{{ path('publication_index2') }}\"><img src=\"{{ asset('images/123.png') }}\" alt=\"\"><br>TNAFES</a></div>
                    </div>
                    <div class=\"main_nav_container ml-auto\">
                        <ul class=\"main_nav_list\">
                            <li class=\"main_nav_item\"><a href=\"{{ path('publication_index2') }}\" >Acceuil</a></li>
                            <li class=\"main_nav_item\"><a href=\"\" >Articles</a></li>
                            <li class=\"main_nav_item\"><a href=\"\" >Activités</a></li>

                            <li class=\"main_nav_item\"><a href=\"\" >Rendez-vous</a></li>

                            <li class=\"main_nav_item\"><a href=\"{{ path('reclamation_new')}}\" >Reclamations</a></li>
                            <li class=\"main_nav_item\"><a href=\"\" >Messages</a></li>
                            <li class=\"main_nav_item\"><a  href=\"\" > Abonnements</a></li>

                        </ul>
                    </div>
                    <div class=\"content_search ml-lg-0 ml-auto\">
                        <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                             width=\"17px\" height=\"17px\" viewBox=\"0 0 512 512\" enable-background=\"new 0 0 512 512\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t<g>
                                    <g>
                                        <g>
                                            <path class=\"mag_glass\" fill=\"#FFFFFF\" d=\"M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
\t\t\t\t\t\t\t\t\t\t\ts112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
\t\t\t\t\t\t\t\t\t\t\tC407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
\t\t\t\t\t\t\t\t\t\t\tM119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
\t\t\t\t\t\t\t\t\t\t\tc0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z\"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path class=\"mag_glass\" fill=\"#FFFFFF\" d=\"M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
\t\t\t\t\t\t\t\t\t\t\tc8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
\t\t\t\t\t\t\t\t\t\t\tC-2.019,484.77-2.019,497.865,6.057,505.942z\"/>
                                        </g>
                                    </g>
                                </g>
\t\t\t\t\t\t\t</svg>
                    </div>

                    <form id=\"search_form\" class=\"search_form bez_1\">
                        <input type=\"search\" class=\"search_content_input bez_1\">
                    </form>

                    <div class=\"hamburger\">
                        <i class=\"fa fa-bars trans_200\"></i>
                    </div>
                </div>
            </div>
        </div>
    </nav>

</header>", "navbar.html.twig", "C:\\Users\\miral\\OneDrive\\Bureau\\PiDevWeb2.33\\templates\\navbar.html.twig");
    }
}
