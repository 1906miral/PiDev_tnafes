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

/* Acceuil.html.twig */
class __TwigTemplate_6d7a798553a2395dfd96b76267f0b7b4ad5ceebe7f94cd6f7797519f28badce2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'displayPub' => [$this, 'block_displayPub'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Acceuil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Acceuil.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
<title>Tnafes</title>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"Travelix Project\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bootstrap4/bootstrap.min.css"), "html", null, true);
        echo "\">
<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.theme.default.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/animate.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/main_styles.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/responsive.css"), "html", null, true);
        echo "\">
\t<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/easing/easing.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
</head>

<body>

";
        // line 26
        $this->loadTemplate("navbar.html.twig", "Acceuil.html.twig", 26)->display($context);
        // line 27
        echo "

\t<div class=\"menu trans_500\">
\t\t<div class=\"menu_content d-flex flex-column align-items-center justify-content-center text-center\">
\t\t\t<div class=\"menu_close_container\"><div class=\"menu_close\"></div></div>
\t\t\t<div class=\"logo menu_logo\"><a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_index2");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/123.png"), "html", null, true);
        echo "\" alt=\"\"></a></div>
\t\t\t<ul>
\t\t\t\t<li class=\"menu_item\"><a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_index2");
        echo "\">Acceuil</a></li>
\t\t\t\t<li class=\"menu_item\"><a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_new");
        echo "\">Reclamations</a></li>
\t\t\t\t<li class=\"menu_item\"><a href=\"Evenements.html.twig\">Evenements</a></li>
\t\t\t\t<li class=\"menu_item\"><a href=\"Rendez-vous.html.twig\">Rendez-vous</a></li>
\t\t\t\t<li class=\"menu_item\"><a href=\"Articles.html.twig\">Articles</a></li>
\t\t\t</ul>
\t\t</div>
\t</div>

\t<!-- Home -->

\t<div class=\"home\">
\t\t
\t\t<!-- Home Slider -->

\t\t<div class=\"home_slider_container\">

\t\t\t<div class=\"owl-carousel owl-theme home_slider\">

\t\t\t\t<!-- Slider Item -->
\t\t\t\t<div class=\"owl-item home_slider_item\">
\t\t\t\t\t<!-- Image by https://unsplash.com/@anikindimitry -->
\t\t\t\t\t<div class=\"home_slider_background\"><img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/images/meditation.jpg"), "html", null, true);
        echo "\"></div>

\t\t\t\t\t<div class=\"home_slider_content text-center\">
\t\t\t\t\t\t<div class=\"home_slider_content_inner\" data-animation-in=\"flipInX\" data-animation-out=\"animate-out fadeOut\">
\t\t\t\t\t\t\t<h1>votre </h1>
\t\t\t\t\t\t\t<h1> calme avec Tnafes</h1>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>



\t\t\t</div>

\t\t\t<!-- Home Slider Nav - Prev -->
\t\t\t<div class=\"home_slider_nav home_slider_prev\">
\t\t\t\t<svg version=\"1.1\" id=\"Layer_2\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t\t\t\t\twidth=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
\t\t\t\t\t<defs>
\t\t\t\t\t\t<linearGradient id='home_grad_prev'>
\t\t\t\t\t\t\t<stop offset='0%' stop-color='#fa9e1b'/>
\t\t\t\t\t\t\t<stop offset='100%' stop-color='#8d4fff'/>
\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t</defs>
\t\t\t\t\t<path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
\t\t\t\t\tM26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
\t\t\t\t\tC22.545,2,26,5.541,26,9.909V23.091z\"/>
\t\t\t\t\t<polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
\t\t\t\t\t11.042,18.219 \"/>
\t\t\t\t</svg>
\t\t\t</div>

\t\t\t<!-- Home Slider Nav - Next -->
\t\t\t<div class=\"home_slider_nav home_slider_next\">
\t\t\t\t<svg version=\"1.1\" id=\"Layer_3\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t\t\t\twidth=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
\t\t\t\t\t<defs>
\t\t\t\t\t\t<linearGradient id='home_grad_next'>
\t\t\t\t\t\t\t<stop offset='0%' stop-color='#fa9e1b'/>
\t\t\t\t\t\t\t<stop offset='100%' stop-color='#8d4fff'/>
\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t</defs>
\t\t\t\t<path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
\t\t\t\tM26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
\t\t\t\tC22.545,2,26,5.541,26,9.909V23.091z\"/>
\t\t\t\t<polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
\t\t\t\t17.046,15.554 \"/>
\t\t\t\t</svg>
\t\t\t</div>

\t\t\t<!-- Home Slider Dots

\t\t\t<div class=\"home_slider_dots\">
\t\t\t\t<ul id=\"home_slider_custom_dots\" class=\"home_slider_custom_dots\">
\t\t\t\t\t<li class=\"home_slider_custom_dot active\"><div></div>01.</li>
\t\t\t\t\t<li class=\"home_slider_custom_dot\"><div></div>02.</li>
\t\t\t\t\t<li class=\"home_slider_custom_dot\"><div></div>03.</li>
\t\t\t\t</ul>
\t\t\t</div>-->

\t\t</div>

\t</div>

\t<!-- Search -->

\t<div class=\"search\">


\t\t<!-- Search Contents -->
\t\t
\t\t<div class=\"container fill_height\">
\t\t\t<div class=\"row fill_height\">
\t\t\t\t<div class=\"col fill_height\">


\t<!-- Intro -->

\t\t\t\t\t<div class=\"intro\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<h2 class=\"intro_title text-center\">Récemment publiée</h2>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"row intro_items\">



\t\t\t\t\t\t\t\t<!-- Intro Item -->

\t\t\t\t\t\t\t\t";
        // line 149
        $this->displayBlock('displayPub', $context, $blocks);
        // line 151
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>












\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t</div>
</body>


</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 149
    public function block_displayPub($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "displayPub"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "displayPub"));

        // line 150
        echo "\t\t\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Acceuil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 150,  286 => 149,  252 => 151,  250 => 149,  154 => 56,  130 => 35,  126 => 34,  119 => 32,  112 => 27,  110 => 26,  102 => 21,  98 => 20,  94 => 19,  90 => 18,  86 => 17,  82 => 16,  78 => 15,  74 => 14,  70 => 13,  66 => 12,  62 => 11,  58 => 10,  54 => 9,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
<title>Tnafes</title>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"Travelix Project\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/bootstrap4/bootstrap.min.css') }}\">
<link href=\"{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/main_styles.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/responsive.css') }}\">
\t<script src=\"{{ asset('js/jquery-3.2.1.min.js') }}\"></script>
\t<script src=\"{{ asset('styles/bootstrap4/popper.js') }}\"></script>
\t<script src=\"{{ asset('styles/bootstrap4/bootstrap.min.js') }}\"></script>
\t<script src=\"{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}\"></script>
\t<script src=\"{{ asset('plugins/easing/easing.js') }}\"></script>
\t<script src=\"{{ asset('js/custom.js') }}\"></script>
</head>

<body>

{% include 'navbar.html.twig' %}


\t<div class=\"menu trans_500\">
\t\t<div class=\"menu_content d-flex flex-column align-items-center justify-content-center text-center\">
\t\t\t<div class=\"menu_close_container\"><div class=\"menu_close\"></div></div>
\t\t\t<div class=\"logo menu_logo\"><a href=\"{{ path('publication_index2') }}\"><img src=\"{{ asset('images/123.png') }}\" alt=\"\"></a></div>
\t\t\t<ul>
\t\t\t\t<li class=\"menu_item\"><a href=\"{{ path('publication_index2') }}\">Acceuil</a></li>
\t\t\t\t<li class=\"menu_item\"><a href=\"{{ path('reclamation_new') }}\">Reclamations</a></li>
\t\t\t\t<li class=\"menu_item\"><a href=\"Evenements.html.twig\">Evenements</a></li>
\t\t\t\t<li class=\"menu_item\"><a href=\"Rendez-vous.html.twig\">Rendez-vous</a></li>
\t\t\t\t<li class=\"menu_item\"><a href=\"Articles.html.twig\">Articles</a></li>
\t\t\t</ul>
\t\t</div>
\t</div>

\t<!-- Home -->

\t<div class=\"home\">
\t\t
\t\t<!-- Home Slider -->

\t\t<div class=\"home_slider_container\">

\t\t\t<div class=\"owl-carousel owl-theme home_slider\">

\t\t\t\t<!-- Slider Item -->
\t\t\t\t<div class=\"owl-item home_slider_item\">
\t\t\t\t\t<!-- Image by https://unsplash.com/@anikindimitry -->
\t\t\t\t\t<div class=\"home_slider_background\"><img src=\"{{ asset('/images/images/meditation.jpg') }}\"></div>

\t\t\t\t\t<div class=\"home_slider_content text-center\">
\t\t\t\t\t\t<div class=\"home_slider_content_inner\" data-animation-in=\"flipInX\" data-animation-out=\"animate-out fadeOut\">
\t\t\t\t\t\t\t<h1>votre </h1>
\t\t\t\t\t\t\t<h1> calme avec Tnafes</h1>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>



\t\t\t</div>

\t\t\t<!-- Home Slider Nav - Prev -->
\t\t\t<div class=\"home_slider_nav home_slider_prev\">
\t\t\t\t<svg version=\"1.1\" id=\"Layer_2\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t\t\t\t\twidth=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
\t\t\t\t\t<defs>
\t\t\t\t\t\t<linearGradient id='home_grad_prev'>
\t\t\t\t\t\t\t<stop offset='0%' stop-color='#fa9e1b'/>
\t\t\t\t\t\t\t<stop offset='100%' stop-color='#8d4fff'/>
\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t</defs>
\t\t\t\t\t<path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
\t\t\t\t\tM26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
\t\t\t\t\tC22.545,2,26,5.541,26,9.909V23.091z\"/>
\t\t\t\t\t<polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
\t\t\t\t\t11.042,18.219 \"/>
\t\t\t\t</svg>
\t\t\t</div>

\t\t\t<!-- Home Slider Nav - Next -->
\t\t\t<div class=\"home_slider_nav home_slider_next\">
\t\t\t\t<svg version=\"1.1\" id=\"Layer_3\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t\t\t\twidth=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
\t\t\t\t\t<defs>
\t\t\t\t\t\t<linearGradient id='home_grad_next'>
\t\t\t\t\t\t\t<stop offset='0%' stop-color='#fa9e1b'/>
\t\t\t\t\t\t\t<stop offset='100%' stop-color='#8d4fff'/>
\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t</defs>
\t\t\t\t<path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
\t\t\t\tM26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
\t\t\t\tC22.545,2,26,5.541,26,9.909V23.091z\"/>
\t\t\t\t<polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
\t\t\t\t17.046,15.554 \"/>
\t\t\t\t</svg>
\t\t\t</div>

\t\t\t<!-- Home Slider Dots

\t\t\t<div class=\"home_slider_dots\">
\t\t\t\t<ul id=\"home_slider_custom_dots\" class=\"home_slider_custom_dots\">
\t\t\t\t\t<li class=\"home_slider_custom_dot active\"><div></div>01.</li>
\t\t\t\t\t<li class=\"home_slider_custom_dot\"><div></div>02.</li>
\t\t\t\t\t<li class=\"home_slider_custom_dot\"><div></div>03.</li>
\t\t\t\t</ul>
\t\t\t</div>-->

\t\t</div>

\t</div>

\t<!-- Search -->

\t<div class=\"search\">


\t\t<!-- Search Contents -->
\t\t
\t\t<div class=\"container fill_height\">
\t\t\t<div class=\"row fill_height\">
\t\t\t\t<div class=\"col fill_height\">


\t<!-- Intro -->

\t\t\t\t\t<div class=\"intro\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<h2 class=\"intro_title text-center\">Récemment publiée</h2>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"row intro_items\">



\t\t\t\t\t\t\t\t<!-- Intro Item -->

\t\t\t\t\t\t\t\t{% block displayPub %}
\t\t\t\t\t\t\t\t{% endblock %}

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>












\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t</div>
</body>


</html>", "Acceuil.html.twig", "C:\\Users\\miral\\OneDrive\\Bureau\\PiDevWeb2.33\\templates\\Acceuil.html.twig");
    }
}
