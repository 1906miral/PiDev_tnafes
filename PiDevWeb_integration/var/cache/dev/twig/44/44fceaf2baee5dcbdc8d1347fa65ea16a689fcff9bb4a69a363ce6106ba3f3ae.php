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

/* acceuilclient/index.html.twig */
class __TwigTemplate_7d02b9503980acbdcf1e419617f826718339bd61cbc67e06560eafccf1283557 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "acceuilclient/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "acceuilclient/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
<title>Travelix</title>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"Travelix Project\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/bootstrap4/bootstrap.min.css\">
<link href=\"plugins/font-awesome-4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/OwlCarousel2-2.2.1/owl.carousel.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/OwlCarousel2-2.2.1/owl.theme.default.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/OwlCarousel2-2.2.1/animate.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/main_styles.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/responsive.css\">
</head>

<body>

<div class=\"super_container\">
\t
\t<!-- Header -->

\t<header class=\"header\">

\t\t<!-- Top Bar -->

\t\t";
        // line 28
        $this->loadTemplate("fronttopbar.html.twig", "acceuilclient/index.html.twig", 28)->display($context);
        // line 29
        echo "
\t\t<!-- Main Navigation -->

\t\t<nav class=\"main_nav\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col main_nav_col d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t<div class=\"logo_container\">
\t\t\t\t\t\t\t<div class=\"logo\"><a href=\"#\"><img src=\"images/logo.png\" alt=\"\">travelix</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"main_nav_container ml-auto\">
\t\t\t\t\t\t\t<ul class=\"main_nav_list\">
\t\t\t\t\t\t\t\t<li class=\"main_nav_item\"><a href=\"#\">home</a></li>
\t\t\t\t\t\t\t\t<li class=\"main_nav_item\"><a href=\"about.html\">about us</a></li>
\t\t\t\t\t\t\t\t<li class=\"main_nav_item\"><a href=\"offers.html\">offers</a></li>
\t\t\t\t\t\t\t\t<li class=\"main_nav_item\"><a href=\"blog.html\">news</a></li>
\t\t\t\t\t\t\t\t<li class=\"main_nav_item\"><a href=\"contact.html\">contact</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"content_search ml-lg-0 ml-auto\">
\t\t\t\t\t\t\t<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t\t\t\t\t\t\twidth=\"17px\" height=\"17px\" viewBox=\"0 0 512 512\" enable-background=\"new 0 0 512 512\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t<path class=\"mag_glass\" fill=\"#FFFFFF\" d=\"M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
\t\t\t\t\t\t\t\t\t\t\ts112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
\t\t\t\t\t\t\t\t\t\t\tC407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
\t\t\t\t\t\t\t\t\t\t\tM119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
\t\t\t\t\t\t\t\t\t\t\tc0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z\"/>
\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t<path class=\"mag_glass\" fill=\"#FFFFFF\" d=\"M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
\t\t\t\t\t\t\t\t\t\t\tc8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
\t\t\t\t\t\t\t\t\t\t\tC-2.019,484.77-2.019,497.865,6.057,505.942z\"/>
\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<form id=\"search_form\" class=\"search_form bez_1\">
\t\t\t\t\t\t\t<input type=\"search\" class=\"search_content_input bez_1\">
\t\t\t\t\t\t</form>

\t\t\t\t\t\t<div class=\"hamburger\">
\t\t\t\t\t\t\t<i class=\"fa fa-bars trans_200\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</nav>

\t</header>

\t<div class=\"menu trans_500\">
\t\t<div class=\"menu_content d-flex flex-column align-items-center justify-content-center text-center\">
\t\t\t<div class=\"menu_close_container\"><div class=\"menu_close\"></div></div>
\t\t\t<div class=\"logo menu_logo\"><a href=\"#\"><img src=\"images/logo.png\" alt=\"\"></a></div>
\t\t\t<ul>
\t\t\t\t<li class=\"menu_item\"><a href=\"#\">home</a></li>
\t\t\t\t<li class=\"menu_item\"><a href=\"about.html\">about us</a></li>
\t\t\t\t<li class=\"menu_item\"><a href=\"offers.html\">offers</a></li>
\t\t\t\t<li class=\"menu_item\"><a href=\"blog.html\">news</a></li>
\t\t\t\t<li class=\"menu_item\"><a href=\"contact.html\">contact</a></li>
\t\t\t</ul>
\t\t</div>
\t</div>

\t<!-- Home -->

\t<div class=\"home\">
\t\t
\t\t<!-- Home Slider -->

\t\t<div class=\"home_slider_container\">
\t\t\t
\t\t\t<div class=\"owl-carousel owl-theme home_slider\">

\t\t\t\t<!-- Slider Item -->
\t\t\t\t<div class=\"owl-item home_slider_item\">
\t\t\t\t\t<!-- Image by https://unsplash.com/@anikindimitry -->
\t\t\t\t\t<div class=\"home_slider_background\" style=\"background-image:url(images/home_slider.jpg)\"></div>

\t\t\t\t\t<div class=\"home_slider_content text-center\">
\t\t\t\t\t\t<div class=\"home_slider_content_inner\" data-animation-in=\"flipInX\" data-animation-out=\"animate-out fadeOut\">
\t\t\t\t\t\t\t<h1>discover</h1>
\t\t\t\t\t\t\t<h1>the world</h1>
\t\t\t\t\t\t\t<div class=\"button home_slider_button\"><div class=\"button_bcg\"></div><a href=\"#\">explore now<span></span><span></span><span></span></a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Slider Item -->
\t\t\t\t<div class=\"owl-item home_slider_item\">
\t\t\t\t\t<div class=\"home_slider_background\" style=\"background-image:url(images/home_slider.jpg)\"></div>

\t\t\t\t\t<div class=\"home_slider_content text-center\">
\t\t\t\t\t\t<div class=\"home_slider_content_inner\" data-animation-in=\"flipInX\" data-animation-out=\"animate-out fadeOut\">
\t\t\t\t\t\t\t<h1>discover</h1>
\t\t\t\t\t\t\t<h1>the world</h1>
\t\t\t\t\t\t\t<div class=\"button home_slider_button\"><div class=\"button_bcg\"></div><a href=\"#\">explore now<span></span><span></span><span></span></a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Slider Item -->
\t\t\t\t<div class=\"owl-item home_slider_item\">
\t\t\t\t\t<div class=\"home_slider_background\" style=\"background-image:url(images/home_slider.jpg)\"></div>

\t\t\t\t\t<div class=\"home_slider_content text-center\">
\t\t\t\t\t\t<div class=\"home_slider_content_inner\" data-animation-in=\"flipInX\" data-animation-out=\"animate-out fadeOut\">
\t\t\t\t\t\t\t<h1>discover</h1>
\t\t\t\t\t\t\t<h1>the world</h1>
\t\t\t\t\t\t\t<div class=\"button home_slider_button\"><div class=\"button_bcg\"></div><a href=\"#\">explore now<span></span><span></span><span></span></a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t
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
\t\t\t
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

\t\t\t<!-- Home Slider Dots -->

\t\t\t<div class=\"home_slider_dots\">
\t\t\t\t<ul id=\"home_slider_custom_dots\" class=\"home_slider_custom_dots\">
\t\t\t\t\t<li class=\"home_slider_custom_dot active\"><div></div>01.</li>
\t\t\t\t\t<li class=\"home_slider_custom_dot\"><div></div>02.</li>
\t\t\t\t\t<li class=\"home_slider_custom_dot\"><div></div>03.</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t
\t\t</div>

\t</div>

\t<!-- Search -->

\t<div class=\"search\">
\t\t

\t\t<!-- Search Contents -->
\t\t
\t\t<div class=\"container fill_height\">
\t\t\t<div class=\"row fill_height\">
\t\t\t\t<div class=\"col fill_height\">

\t\t\t\t\t<!-- Search Tabs -->

\t\t\t\t\t<div class=\"search_tabs_container\">
\t\t\t\t\t\t<div class=\"search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
\t\t\t\t\t\t\t<div class=\"search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"images/suitcase.png\" alt=\"\"><span>hotels</span></div>
\t\t\t\t\t\t\t<div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"images/bus.png\" alt=\"\">car rentals</div>
\t\t\t\t\t\t\t<div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"images/departure.png\" alt=\"\">flights</div>
\t\t\t\t\t\t\t<div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"images/island.png\" alt=\"\">trips</div>
\t\t\t\t\t\t\t<div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"images/cruise.png\" alt=\"\">cruises</div>
\t\t\t\t\t\t\t<div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"images/diving.png\" alt=\"\">activities</div>
\t\t\t\t\t\t</div>\t\t
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Search Panel -->

\t\t\t\t\t<div class=\"search_panel active\">
\t\t\t\t\t\t<form action=\"#\" id=\"search_form_1\" class=\"search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>destination</div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"destination search_input\" required=\"required\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>check in</div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"check_in search_input\" placeholder=\"YYYY-MM-DD\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>check out</div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"check_out search_input\" placeholder=\"YYYY-MM-DD\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>adults</div>
\t\t\t\t\t\t\t\t<select name=\"adults\" id=\"adults_1\" class=\"dropdown_item_select search_input\">
\t\t\t\t\t\t\t\t\t<option>01</option>
\t\t\t\t\t\t\t\t\t<option>02</option>
\t\t\t\t\t\t\t\t\t<option>03</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>children</div>
\t\t\t\t\t\t\t\t<select name=\"children\" id=\"children_1\" class=\"dropdown_item_select search_input\">
\t\t\t\t\t\t\t\t\t<option>0</option>
\t\t\t\t\t\t\t\t\t<option>02</option>
\t\t\t\t\t\t\t\t\t<option>03</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button class=\"button search_button\">search<span></span><span></span><span></span></button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Search Panel -->

\t\t\t\t\t<div class=\"search_panel\">
\t\t\t\t\t\t<form action=\"#\" id=\"search_form_2\" class=\"search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>destination</div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"destination search_input\" required=\"required\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>check in</div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"check_in search_input\" placeholder=\"YYYY-MM-DD\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>check out</div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"check_out search_input\" placeholder=\"YYYY-MM-DD\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>adults</div>
\t\t\t\t\t\t\t\t<select name=\"adults\" id=\"adults_2\" class=\"dropdown_item_select search_input\">
\t\t\t\t\t\t\t\t\t<option>01</option>
\t\t\t\t\t\t\t\t\t<option>02</option>
\t\t\t\t\t\t\t\t\t<option>03</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>children</div>
\t\t\t\t\t\t\t\t<select name=\"children\" id=\"children_2\" class=\"dropdown_item_select search_input\">
\t\t\t\t\t\t\t\t\t<option>0</option>
\t\t\t\t\t\t\t\t\t<option>02</option>
\t\t\t\t\t\t\t\t\t<option>03</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button class=\"button search_button\">search<span></span><span></span><span></span></button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Search Panel -->

\t\t\t\t\t<div class=\"search_panel\">
\t\t\t\t\t\t<form action=\"#\" id=\"search_form_3\" class=\"search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>destination</div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"destination search_input\" required=\"required\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>check in</div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"check_in search_input\" placeholder=\"YYYY-MM-DD\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>check out</div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"check_out search_input\" placeholder=\"YYYY-MM-DD\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>adults</div>
\t\t\t\t\t\t\t\t<select name=\"adults\" id=\"adults_3\" class=\"dropdown_item_select search_input\">
\t\t\t\t\t\t\t\t\t<option>01</option>
\t\t\t\t\t\t\t\t\t<option>02</option>
\t\t\t\t\t\t\t\t\t<option>03</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>children</div>
\t\t\t\t\t\t\t\t<select name=\"children\" id=\"children_3\" class=\"dropdown_item_select search_input\">
\t\t\t\t\t\t\t\t\t<option>0</option>
\t\t\t\t\t\t\t\t\t<option>02</option>
\t\t\t\t\t\t\t\t\t<option>03</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button class=\"button search_button\">search<span></span><span></span><span></span></button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Search Panel -->

\t\t\t\t\t<div class=\"search_panel\">
\t\t\t\t\t\t<form action=\"#\" id=\"search_form_4\" class=\"search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>destination</div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"destination search_input\" required=\"required\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>check in</div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"check_in search_input\" placeholder=\"YYYY-MM-DD\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>check out</div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"check_out search_input\" placeholder=\"YYYY-MM-DD\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>adults</div>
\t\t\t\t\t\t\t\t<select name=\"adults\" id=\"adults_4\" class=\"dropdown_item_select search_input\">
\t\t\t\t\t\t\t\t\t<option>01</option>
\t\t\t\t\t\t\t\t\t<option>02</option>
\t\t\t\t\t\t\t\t\t<option>03</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>children</div>
\t\t\t\t\t\t\t\t<select name=\"children\" id=\"children_4\" class=\"dropdown_item_select search_input\">
\t\t\t\t\t\t\t\t\t<option>0</option>
\t\t\t\t\t\t\t\t\t<option>02</option>
\t\t\t\t\t\t\t\t\t<option>03</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button class=\"button search_button\">search<span></span><span></span><span></span></button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Search Panel -->

\t\t\t\t\t<div class=\"search_panel\">
\t\t\t\t\t\t<form action=\"#\" id=\"search_form_5\" class=\"search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>destination</div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"destination search_input\" required=\"required\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>check in</div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"check_in search_input\" placeholder=\"YYYY-MM-DD\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>check out</div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"check_out search_input\" placeholder=\"YYYY-MM-DD\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>adults</div>
\t\t\t\t\t\t\t\t<select name=\"adults\" id=\"adults_5\" class=\"dropdown_item_select search_input\">
\t\t\t\t\t\t\t\t\t<option>01</option>
\t\t\t\t\t\t\t\t\t<option>02</option>
\t\t\t\t\t\t\t\t\t<option>03</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>children</div>
\t\t\t\t\t\t\t\t<select name=\"children\" id=\"children_5\" class=\"dropdown_item_select search_input\">
\t\t\t\t\t\t\t\t\t<option>0</option>
\t\t\t\t\t\t\t\t\t<option>02</option>
\t\t\t\t\t\t\t\t\t<option>03</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button class=\"button search_button\">search<span></span><span></span><span></span></button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Search Panel -->

\t\t\t\t\t<div class=\"search_panel\">
\t\t\t\t\t\t<form action=\"#\" id=\"search_form_6\" class=\"search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>destination</div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"destination search_input\" required=\"required\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>check in</div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"check_in search_input\" placeholder=\"YYYY-MM-DD\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>check out</div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"check_out search_input\" placeholder=\"YYYY-MM-DD\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>adults</div>
\t\t\t\t\t\t\t\t<select name=\"adults\" id=\"adults_6\" class=\"dropdown_item_select search_input\">
\t\t\t\t\t\t\t\t\t<option>01</option>
\t\t\t\t\t\t\t\t\t<option>02</option>
\t\t\t\t\t\t\t\t\t<option>03</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>children</div>
\t\t\t\t\t\t\t\t<select name=\"children\" id=\"children_6\" class=\"dropdown_item_select search_input\">
\t\t\t\t\t\t\t\t\t<option>0</option>
\t\t\t\t\t\t\t\t\t<option>02</option>
\t\t\t\t\t\t\t\t\t<option>03</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button class=\"button search_button\">search<span></span><span></span><span></span></button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t\t
\t</div>

\t<!-- Intro -->
\t
\t<div class=\"intro\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h2 class=\"intro_title text-center\">We have the best tours</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-10 offset-lg-1\">
\t\t\t\t\t<div class=\"intro_text text-center\">
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. </p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row intro_items\">

\t\t\t\t<!-- Intro Item -->

\t\t\t\t<div class=\"col-lg-4 intro_col\">
\t\t\t\t\t<div class=\"intro_item\">
\t\t\t\t\t\t<div class=\"intro_item_overlay\"></div>
\t\t\t\t\t\t<!-- Image by https://unsplash.com/@dnevozhai -->
\t\t\t\t\t\t<div class=\"intro_item_background\" style=\"background-image:url(images/intro_1.jpg)\"></div>
\t\t\t\t\t\t<div class=\"intro_item_content d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t<div class=\"intro_date\">May 25th - June 01st</div>
\t\t\t\t\t\t\t<div class=\"button intro_button\"><div class=\"button_bcg\"></div><a href=\"#\">see more<span></span><span></span><span></span></a></div>
\t\t\t\t\t\t\t<div class=\"intro_center text-center\">
\t\t\t\t\t\t\t\t<h1>Mauritius</h1>
\t\t\t\t\t\t\t\t<div class=\"intro_price\">From \$1450</div>
\t\t\t\t\t\t\t\t<div class=\"rating rating_4\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Intro Item -->

\t\t\t\t<div class=\"col-lg-4 intro_col\">
\t\t\t\t\t<div class=\"intro_item\">
\t\t\t\t\t\t<div class=\"intro_item_overlay\"></div>
\t\t\t\t\t\t<!-- Image by https://unsplash.com/@hellolightbulb -->
\t\t\t\t\t\t<div class=\"intro_item_background\" style=\"background-image:url(images/intro_2.jpg)\"></div>
\t\t\t\t\t\t<div class=\"intro_item_content d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t<div class=\"intro_date\">May 25th - June 01st</div>
\t\t\t\t\t\t\t<div class=\"button intro_button\"><div class=\"button_bcg\"></div><a href=\"#\">see more<span></span><span></span><span></span></a></div>
\t\t\t\t\t\t\t<div class=\"intro_center text-center\">
\t\t\t\t\t\t\t\t<h1>Greece</h1>
\t\t\t\t\t\t\t\t<div class=\"intro_price\">From \$1450</div>
\t\t\t\t\t\t\t\t<div class=\"rating rating_4\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Intro Item -->

\t\t\t\t<div class=\"col-lg-4 intro_col\">
\t\t\t\t\t<div class=\"intro_item\">
\t\t\t\t\t\t<div class=\"intro_item_overlay\"></div>
\t\t\t\t\t\t<!-- Image by https://unsplash.com/@willianjusten -->
\t\t\t\t\t\t<div class=\"intro_item_background\" style=\"background-image:url(images/intro_3.jpg)\"></div>
\t\t\t\t\t\t<div class=\"intro_item_content d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t<div class=\"intro_date\">May 25th - June 01st</div>
\t\t\t\t\t\t\t<div class=\"button intro_button\"><div class=\"button_bcg\"></div><a href=\"#\">see more<span></span><span></span><span></span></a></div>
\t\t\t\t\t\t\t<div class=\"intro_center text-center\">
\t\t\t\t\t\t\t\t<h1>Scotland</h1>
\t\t\t\t\t\t\t\t<div class=\"intro_price\">From \$1450</div>
\t\t\t\t\t\t\t\t<div class=\"rating rating_4\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- CTA -->

\t<div class=\"cta\">
\t\t<!-- Image by https://unsplash.com/@thanni -->
\t\t<div class=\"cta_background\" style=\"background-image:url(images/cta.jpg)\"></div>
\t\t
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">

\t\t\t\t\t<!-- CTA Slider -->

\t\t\t\t\t<div class=\"cta_slider_container\">
\t\t\t\t\t\t<div class=\"owl-carousel owl-theme cta_slider\">

\t\t\t\t\t\t\t<!-- CTA Slider Item -->
\t\t\t\t\t\t\t<div class=\"owl-item cta_item text-center\">
\t\t\t\t\t\t\t\t<div class=\"cta_title\">maldives deluxe package</div>
\t\t\t\t\t\t\t\t<div class=\"rating_r rating_r_4\">
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"cta_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. Proin bibendum, augue faucibus tincidunt ultrices, tortor augue gravida lectus, et efficitur enim justo vel ligula.</p>
\t\t\t\t\t\t\t\t<div class=\"button cta_button\"><div class=\"button_bcg\"></div><a href=\"#\">book now<span></span><span></span><span></span></a></div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- CTA Slider Item -->
\t\t\t\t\t\t\t<div class=\"owl-item cta_item text-center\">
\t\t\t\t\t\t\t\t<div class=\"cta_title\">maldives deluxe package</div>
\t\t\t\t\t\t\t\t<div class=\"rating_r rating_r_4\">
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"cta_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. Proin bibendum, augue faucibus tincidunt ultrices, tortor augue gravida lectus, et efficitur enim justo vel ligula.</p>
\t\t\t\t\t\t\t\t<div class=\"button cta_button\"><div class=\"button_bcg\"></div><a href=\"#\">book now<span></span><span></span><span></span></a></div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- CTA Slider Item -->
\t\t\t\t\t\t\t<div class=\"owl-item cta_item text-center\">
\t\t\t\t\t\t\t\t<div class=\"cta_title\">maldives deluxe package</div>
\t\t\t\t\t\t\t\t<div class=\"rating_r rating_r_4\">
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"cta_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. Proin bibendum, augue faucibus tincidunt ultrices, tortor augue gravida lectus, et efficitur enim justo vel ligula.</p>
\t\t\t\t\t\t\t\t<div class=\"button cta_button\"><div class=\"button_bcg\"></div><a href=\"#\">book now<span></span><span></span><span></span></a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- CTA Slider Nav - Prev -->
\t\t\t\t\t\t<div class=\"cta_slider_nav cta_slider_prev\">
\t\t\t\t\t\t\t<svg version=\"1.1\" id=\"Layer_4\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t\t\t\t\t\t\t\twidth=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t\t<linearGradient id='cta_grad_prev'>
\t\t\t\t\t\t\t\t\t\t<stop offset='0%' stop-color='#fa9e1b'/>
\t\t\t\t\t\t\t\t\t\t<stop offset='100%' stop-color='#8d4fff'/>
\t\t\t\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t\t\t\t</defs>
\t\t\t\t\t\t\t\t<path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
\t\t\t\t\t\t\t\tM26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
\t\t\t\t\t\t\t\tC22.545,2,26,5.541,26,9.909V23.091z\"/>
\t\t\t\t\t\t\t\t<polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
\t\t\t\t\t\t\t\t11.042,18.219 \"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- CTA Slider Nav - Next -->
\t\t\t\t\t\t<div class=\"cta_slider_nav cta_slider_next\">
\t\t\t\t\t\t\t<svg version=\"1.1\" id=\"Layer_5\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t\t\t\t\t\t\twidth=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t\t<linearGradient id='cta_grad_next'>
\t\t\t\t\t\t\t\t\t\t<stop offset='0%' stop-color='#fa9e1b'/>
\t\t\t\t\t\t\t\t\t\t<stop offset='100%' stop-color='#8d4fff'/>
\t\t\t\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t\t\t\t</defs>
\t\t\t\t\t\t\t<path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
\t\t\t\t\t\t\tM26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
\t\t\t\t\t\t\tC22.545,2,26,5.541,26,9.909V23.091z\"/>
\t\t\t\t\t\t\t<polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
\t\t\t\t\t\t\t17.046,15.554 \"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t\t\t\t
\t</div>

\t<!-- Offers -->

\t<div class=\"offers\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col text-center\">
\t\t\t\t\t<h2 class=\"section_title\">the best offers with rooms</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row offers_items\">

\t\t\t\t<!-- Offers Item -->
\t\t\t\t<div class=\"col-lg-6 offers_col\">
\t\t\t\t\t<div class=\"offers_item\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<div class=\"offers_image_container\">
\t\t\t\t\t\t\t\t\t<!-- Image by https://unsplash.com/@kensuarez -->
\t\t\t\t\t\t\t\t\t<div class=\"offers_image_background\" style=\"background-image:url(images/offer_1.jpg)\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"offer_name\"><a href=\"#\">grand castle</a></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<div class=\"offers_content\">
\t\t\t\t\t\t\t\t\t<div class=\"offers_price\">\$70<span>per night</span></div>
\t\t\t\t\t\t\t\t\t<div class=\"rating_r rating_r_4 offers_rating\">
\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p class=\"offers_text\">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
\t\t\t\t\t\t\t\t\t<div class=\"offers_icons\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"offers_icons_list\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"offers_icons_item\"><img src=\"images/post.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"offers_icons_item\"><img src=\"images/compass.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"offers_icons_item\"><img src=\"images/bicycle.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"offers_icons_item\"><img src=\"images/sailboat.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"offers_link\"><a href=\"offers.html\">read more</a></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<!-- Offers Item -->
\t\t\t\t<div class=\"col-lg-6 offers_col\">
\t\t\t\t\t<div class=\"offers_item\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<div class=\"offers_image_container\">
\t\t\t\t\t\t\t\t\t<!-- Image by Egzon Bytyqi -->
\t\t\t\t\t\t\t\t\t<div class=\"offers_image_background\" style=\"background-image:url(images/offer_2.jpg)\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"offer_name\"><a href=\"#\">turkey hills</a></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<div class=\"offers_content\">
\t\t\t\t\t\t\t\t\t<div class=\"offers_price\">\$50<span>per night</span></div>
\t\t\t\t\t\t\t\t\t<div class=\"rating_r rating_r_4 offers_rating\">
\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p class=\"offers_text\">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
\t\t\t\t\t\t\t\t\t<div class=\"offers_icons\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"offers_icons_list\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"offers_icons_item\"><img src=\"images/post.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"offers_icons_item\"><img src=\"images/compass.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"offers_icons_item\"><img src=\"images/bicycle.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"offers_icons_item\"><img src=\"images/sailboat.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"offers_link\"><a href=\"offers.html\">read more</a></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Offers Item -->
\t\t\t\t<div class=\"col-lg-6 offers_col\">
\t\t\t\t\t<div class=\"offers_item\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<div class=\"offers_image_container\">
\t\t\t\t\t\t\t\t\t<!-- Image by https://unsplash.com/@nevenkrcmarek -->
\t\t\t\t\t\t\t\t\t<div class=\"offers_image_background\" style=\"background-image:url(images/offer_3.jpg)\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"offer_name\"><a href=\"#\">island dream</a></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<div class=\"offers_content\">
\t\t\t\t\t\t\t\t\t<div class=\"offers_price\">\$90<span>per night</span></div>
\t\t\t\t\t\t\t\t\t<div class=\"rating_r rating_r_4 offers_rating\">
\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p class=\"offers_text\">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
\t\t\t\t\t\t\t\t\t<div class=\"offers_icons\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"offers_icons_list\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"offers_icons_item\"><img src=\"images/post.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"offers_icons_item\"><img src=\"images/compass.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"offers_icons_item\"><img src=\"images/bicycle.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"offers_icons_item\"><img src=\"images/sailboat.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"offers_link\"><a href=\"offers.html\">read more</a></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Offers Item -->
\t\t\t\t<div class=\"col-lg-6 offers_col\">
\t\t\t\t\t<div class=\"offers_item\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<div class=\"offers_image_container\">
\t\t\t\t\t\t\t\t\t<!-- Image by https://unsplash.com/@mantashesthaven -->
\t\t\t\t\t\t\t\t\t<div class=\"offers_image_background\" style=\"background-image:url(images/offer_4.jpg)\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"offer_name\"><a href=\"#\">travel light</a></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<div class=\"offers_content\">
\t\t\t\t\t\t\t\t\t<div class=\"offers_price\">\$30<span>per night</span></div>
\t\t\t\t\t\t\t\t\t<div class=\"rating_r rating_r_4 offers_rating\">
\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p class=\"offers_text\">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
\t\t\t\t\t\t\t\t\t<div class=\"offers_icons\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"offers_icons_list\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"offers_icons_item\"><img src=\"images/post.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"offers_icons_item\"><img src=\"images/compass.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"offers_icons_item\"><img src=\"images/bicycle.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"offers_icons_item\"><img src=\"images/sailboat.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"offers_link\"><a href=\"offers.html\">read more</a></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Testimonials -->

\t<div class=\"testimonials\">
\t\t<div class=\"test_border\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col text-center\">
\t\t\t\t\t<h2 class=\"section_title\">what our clients say about us</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t
\t\t\t\t\t<!-- Testimonials Slider -->

\t\t\t\t\t<div class=\"test_slider_container\">
\t\t\t\t\t\t<div class=\"owl-carousel owl-theme test_slider\">

\t\t\t\t\t\t\t<!-- Testimonial Item -->
\t\t\t\t\t\t\t<div class=\"owl-item\">
\t\t\t\t\t\t\t\t<div class=\"test_item\">
\t\t\t\t\t\t\t\t\t<div class=\"test_image\"><img src=\"images/test_1.jpg\" alt=\"https://unsplash.com/@anniegray\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"test_icon\"><img src=\"images/backpack.png\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"test_content_container\">
\t\t\t\t\t\t\t\t\t\t<div class=\"test_content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_item_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_name\">carla smith</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_date\">May 24, 2017</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_quote_title\">\" Best holliday ever \"</div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"test_quote_text\">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Testimonial Item -->
\t\t\t\t\t\t\t<div class=\"owl-item\">
\t\t\t\t\t\t\t\t<div class=\"test_item\">
\t\t\t\t\t\t\t\t\t<div class=\"test_image\"><img src=\"images/test_2.jpg\" alt=\"https://unsplash.com/@tschax\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"test_icon\"><img src=\"images/island_t.png\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"test_content_container\">
\t\t\t\t\t\t\t\t\t\t<div class=\"test_content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_item_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_name\">carla smith</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_date\">May 24, 2017</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_quote_title\">\" Best holliday ever \"</div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"test_quote_text\">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Testimonial Item -->
\t\t\t\t\t\t\t<div class=\"owl-item\">
\t\t\t\t\t\t\t\t<div class=\"test_item\">
\t\t\t\t\t\t\t\t\t<div class=\"test_image\"><img src=\"images/test_3.jpg\" alt=\"https://unsplash.com/@seefromthesky\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"test_icon\"><img src=\"images/kayak.png\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"test_content_container\">
\t\t\t\t\t\t\t\t\t\t<div class=\"test_content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_item_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_name\">carla smith</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_date\">May 24, 2017</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_quote_title\">\" Best holliday ever \"</div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"test_quote_text\">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Testimonial Item -->
\t\t\t\t\t\t\t<div class=\"owl-item\">
\t\t\t\t\t\t\t\t<div class=\"test_item\">
\t\t\t\t\t\t\t\t\t<div class=\"test_image\"><img src=\"images/test_2.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"test_icon\"><img src=\"images/island_t.png\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"test_content_container\">
\t\t\t\t\t\t\t\t\t\t<div class=\"test_content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_item_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_name\">carla smith</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_date\">May 24, 2017</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_quote_title\">\" Best holliday ever \"</div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"test_quote_text\">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Testimonial Item -->
\t\t\t\t\t\t\t<div class=\"owl-item\">
\t\t\t\t\t\t\t\t<div class=\"test_item\">
\t\t\t\t\t\t\t\t\t<div class=\"test_image\"><img src=\"images/test_1.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"test_icon\"><img src=\"images/backpack.png\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"test_content_container\">
\t\t\t\t\t\t\t\t\t\t<div class=\"test_content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_item_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_name\">carla smith</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_date\">May 24, 2017</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_quote_title\">\" Best holliday ever \"</div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"test_quote_text\">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Testimonial Item -->
\t\t\t\t\t\t\t<div class=\"owl-item\">
\t\t\t\t\t\t\t\t<div class=\"test_item\">
\t\t\t\t\t\t\t\t\t<div class=\"test_image\"><img src=\"images/test_3.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"test_icon\"><img src=\"images/kayak.png\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"test_content_container\">
\t\t\t\t\t\t\t\t\t\t<div class=\"test_content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_item_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_name\">carla smith</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_date\">May 24, 2017</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_quote_title\">\" Best holliday ever \"</div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"test_quote_text\">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Testimonials Slider Nav - Prev -->
\t\t\t\t\t\t<div class=\"test_slider_nav test_slider_prev\">
\t\t\t\t\t\t\t<svg version=\"1.1\" id=\"Layer_6\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t\t\t\t\t\t\t\twidth=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t\t<linearGradient id='test_grad_prev'>
\t\t\t\t\t\t\t\t\t\t<stop offset='0%' stop-color='#fa9e1b'/>
\t\t\t\t\t\t\t\t\t\t<stop offset='100%' stop-color='#8d4fff'/>
\t\t\t\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t\t\t\t</defs>
\t\t\t\t\t\t\t\t<path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
\t\t\t\t\t\t\t\tM26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
\t\t\t\t\t\t\t\tC22.545,2,26,5.541,26,9.909V23.091z\"/>
\t\t\t\t\t\t\t\t<polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
\t\t\t\t\t\t\t\t11.042,18.219 \"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Testimonials Slider Nav - Next -->
\t\t\t\t\t\t<div class=\"test_slider_nav test_slider_next\">
\t\t\t\t\t\t\t<svg version=\"1.1\" id=\"Layer_7\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t\t\t\t\t\t\twidth=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t\t<linearGradient id='test_grad_next'>
\t\t\t\t\t\t\t\t\t\t<stop offset='0%' stop-color='#fa9e1b'/>
\t\t\t\t\t\t\t\t\t\t<stop offset='100%' stop-color='#8d4fff'/>
\t\t\t\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t\t\t\t</defs>
\t\t\t\t\t\t\t<path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
\t\t\t\t\t\t\tM26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
\t\t\t\t\t\t\tC22.545,2,26,5.541,26,9.909V23.091z\"/>
\t\t\t\t\t\t\t<polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
\t\t\t\t\t\t\t17.046,15.554 \"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>

\t<div class=\"trending\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col text-center\">
\t\t\t\t\t<h2 class=\"section_title\">trending now</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row trending_container\">

\t\t\t\t<!-- Trending Item -->
\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t<div class=\"trending_item clearfix\">
\t\t\t\t\t\t<div class=\"trending_image\"><img src=\"images/trend_1.png\" alt=\"https://unsplash.com/@fransaraco\"></div>
\t\t\t\t\t\t<div class=\"trending_content\">
\t\t\t\t\t\t\t<div class=\"trending_title\"><a href=\"#\">grand hotel</a></div>
\t\t\t\t\t\t\t<div class=\"trending_price\">From \$182</div>
\t\t\t\t\t\t\t<div class=\"trending_location\">madrid, spain</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Trending Item -->
\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t<div class=\"trending_item clearfix\">
\t\t\t\t\t\t<div class=\"trending_image\"><img src=\"images/trend_2.png\" alt=\"https://unsplash.com/@grovemade\"></div>
\t\t\t\t\t\t<div class=\"trending_content\">
\t\t\t\t\t\t\t<div class=\"trending_title\"><a href=\"#\">mars hotel</a></div>
\t\t\t\t\t\t\t<div class=\"trending_price\">From \$182</div>
\t\t\t\t\t\t\t<div class=\"trending_location\">madrid, spain</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Trending Item -->
\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t<div class=\"trending_item clearfix\">
\t\t\t\t\t\t<div class=\"trending_image\"><img src=\"images/trend_3.png\" alt=\"https://unsplash.com/@jbriscoe\"></div>
\t\t\t\t\t\t<div class=\"trending_content\">
\t\t\t\t\t\t\t<div class=\"trending_title\"><a href=\"#\">queen hotel</a></div>
\t\t\t\t\t\t\t<div class=\"trending_price\">From \$182</div>
\t\t\t\t\t\t\t<div class=\"trending_location\">madrid, spain</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Trending Item -->
\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t<div class=\"trending_item clearfix\">
\t\t\t\t\t\t<div class=\"trending_image\"><img src=\"images/trend_4.png\" alt=\"https://unsplash.com/@oowgnuj\"></div>
\t\t\t\t\t\t<div class=\"trending_content\">
\t\t\t\t\t\t\t<div class=\"trending_title\"><a href=\"#\">mars hotel</a></div>
\t\t\t\t\t\t\t<div class=\"trending_price\">From \$182</div>
\t\t\t\t\t\t\t<div class=\"trending_location\">madrid, spain</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Trending Item -->
\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t<div class=\"trending_item clearfix\">
\t\t\t\t\t\t<div class=\"trending_image\"><img src=\"images/trend_5.png\" alt=\"https://unsplash.com/@mindaugas\"></div>
\t\t\t\t\t\t<div class=\"trending_content\">
\t\t\t\t\t\t\t<div class=\"trending_title\"><a href=\"#\">grand hotel</a></div>
\t\t\t\t\t\t\t<div class=\"trending_price\">From \$182</div>
\t\t\t\t\t\t\t<div class=\"trending_location\">madrid, spain</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Trending Item -->
\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t<div class=\"trending_item clearfix\">
\t\t\t\t\t\t<div class=\"trending_image\"><img src=\"images/trend_6.png\" alt=\"https://unsplash.com/@itsnwa\"></div>
\t\t\t\t\t\t<div class=\"trending_content\">
\t\t\t\t\t\t\t<div class=\"trending_title\"><a href=\"#\">mars hotel</a></div>
\t\t\t\t\t\t\t<div class=\"trending_price\">From \$182</div>
\t\t\t\t\t\t\t<div class=\"trending_location\">madrid, spain</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Trending Item -->
\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t<div class=\"trending_item clearfix\">
\t\t\t\t\t\t<div class=\"trending_image\"><img src=\"images/trend_7.png\" alt=\"https://unsplash.com/@rktkn\"></div>
\t\t\t\t\t\t<div class=\"trending_content\">
\t\t\t\t\t\t\t<div class=\"trending_title\"><a href=\"#\">queen hotel</a></div>
\t\t\t\t\t\t\t<div class=\"trending_price\">From \$182</div>
\t\t\t\t\t\t\t<div class=\"trending_location\">madrid, spain</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Trending Item -->
\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t<div class=\"trending_item clearfix\">
\t\t\t\t\t\t<div class=\"trending_image\"><img src=\"images/trend_8.png\" alt=\"https://unsplash.com/@thoughtcatalog\"></div>
\t\t\t\t\t\t<div class=\"trending_content\">
\t\t\t\t\t\t\t<div class=\"trending_title\"><a href=\"#\">mars hotel</a></div>
\t\t\t\t\t\t\t<div class=\"trending_price\">From \$182</div>
\t\t\t\t\t\t\t<div class=\"trending_location\">madrid, spain</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"contact\">
\t\t<div class=\"contact_background\" style=\"background-image:url(images/contact.png)\"></div>

\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t<div class=\"contact_image\">
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t<div class=\"contact_form_container\">
\t\t\t\t\t\t<div class=\"contact_title\">get in touch</div>
\t\t\t\t\t\t<form action=\"#\" id=\"contact_form\" class=\"contact_form\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"contact_form_name\" class=\"contact_form_name input_field\" placeholder=\"Name\" required=\"required\" data-error=\"Name is required.\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"contact_form_email\" class=\"contact_form_email input_field\" placeholder=\"E-mail\" required=\"required\" data-error=\"Email is required.\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"contact_form_subject\" class=\"contact_form_subject input_field\" placeholder=\"Subject\" required=\"required\" data-error=\"Subject is required.\">
\t\t\t\t\t\t\t<textarea id=\"contact_form_message\" class=\"text_field contact_form_message\" name=\"message\" rows=\"4\" placeholder=\"Message\" required=\"required\" data-error=\"Please, write us a message.\"></textarea>
\t\t\t\t\t\t\t<button type=\"submit\" id=\"form_submit_button\" class=\"form_submit_button button\">send message<span></span><span></span><span></span></button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Footer -->

\t<footer class=\"footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">

\t\t\t\t<!-- Footer Column -->
\t\t\t\t<div class=\"col-lg-3 footer_column\">
\t\t\t\t\t<div class=\"footer_col\">
\t\t\t\t\t\t<div class=\"footer_content footer_about\">
\t\t\t\t\t\t\t<div class=\"logo_container footer_logo\">
\t\t\t\t\t\t\t\t<div class=\"logo\"><a href=\"#\"><img src=\"images/logo.png\" alt=\"\">travelix</a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"footer_about_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer eleme ntum orci eu vehicula pretium.</p>
\t\t\t\t\t\t\t<ul class=\"footer_social_list\">
\t\t\t\t\t\t\t\t<li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-pinterest\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-facebook-f\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Footer Column -->
\t\t\t\t<div class=\"col-lg-3 footer_column\">
\t\t\t\t\t<div class=\"footer_col\">
\t\t\t\t\t\t<div class=\"footer_title\">blog posts</div>
\t\t\t\t\t\t<div class=\"footer_content footer_blog\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Footer blog item -->
\t\t\t\t\t\t\t<div class=\"footer_blog_item clearfix\">
\t\t\t\t\t\t\t\t<div class=\"footer_blog_image\"><img src=\"images/footer_blog_1.jpg\" alt=\"https://unsplash.com/@avidenov\"></div>
\t\t\t\t\t\t\t\t<div class=\"footer_blog_content\">
\t\t\t\t\t\t\t\t\t<div class=\"footer_blog_title\"><a href=\"blog.html\">Travel with us this year</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"footer_blog_date\">Nov 29, 2017</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Footer blog item -->
\t\t\t\t\t\t\t<div class=\"footer_blog_item clearfix\">
\t\t\t\t\t\t\t\t<div class=\"footer_blog_image\"><img src=\"images/footer_blog_2.jpg\" alt=\"https://unsplash.com/@deannaritchie\"></div>
\t\t\t\t\t\t\t\t<div class=\"footer_blog_content\">
\t\t\t\t\t\t\t\t\t<div class=\"footer_blog_title\"><a href=\"blog.html\">New destinations for you</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"footer_blog_date\">Nov 29, 2017</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Footer blog item -->
\t\t\t\t\t\t\t<div class=\"footer_blog_item clearfix\">
\t\t\t\t\t\t\t\t<div class=\"footer_blog_image\"><img src=\"images/footer_blog_3.jpg\" alt=\"https://unsplash.com/@bergeryap87\"></div>
\t\t\t\t\t\t\t\t<div class=\"footer_blog_content\">
\t\t\t\t\t\t\t\t\t<div class=\"footer_blog_title\"><a href=\"blog.html\">Travel with us this year</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"footer_blog_date\">Nov 29, 2017</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Footer Column -->
\t\t\t\t<div class=\"col-lg-3 footer_column\">
\t\t\t\t\t<div class=\"footer_col\">
\t\t\t\t\t\t<div class=\"footer_title\">tags</div>
\t\t\t\t\t\t<div class=\"footer_content footer_tags\">
\t\t\t\t\t\t\t<ul class=\"tags_list clearfix\">
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">design</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">fashion</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">music</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">video</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">party</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">photography</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">adventure</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">travel</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Footer Column -->
\t\t\t\t<div class=\"col-lg-3 footer_column\">
\t\t\t\t\t<div class=\"footer_col\">
\t\t\t\t\t\t<div class=\"footer_title\">contact info</div>
\t\t\t\t\t\t<div class=\"footer_content footer_contact\">
\t\t\t\t\t\t\t<ul class=\"contact_info_list\">
\t\t\t\t\t\t\t\t<li class=\"contact_info_item d-flex flex-row\">
\t\t\t\t\t\t\t\t\t<div><div class=\"contact_info_icon\"><img src=\"images/placeholder.svg\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t\t<div class=\"contact_info_text\">4127 Raoul Wallenber 45b-c Gibraltar</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"contact_info_item d-flex flex-row\">
\t\t\t\t\t\t\t\t\t<div><div class=\"contact_info_icon\"><img src=\"images/phone-call.svg\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t\t<div class=\"contact_info_text\">2556-808-8613</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"contact_info_item d-flex flex-row\">
\t\t\t\t\t\t\t\t\t<div><div class=\"contact_info_icon\"><img src=\"images/message.svg\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t\t<div class=\"contact_info_text\"><a href=\"mailto:contactme@gmail.com?Subject=Hello\" target=\"_top\">contactme@gmail.com</a></div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"contact_info_item d-flex flex-row\">
\t\t\t\t\t\t\t\t\t<div><div class=\"contact_info_icon\"><img src=\"images/planet-earth.svg\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t\t<div class=\"contact_info_text\"><a href=\"https://colorlib.com\">www.colorlib.com</a></div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</footer>

\t<!-- Copyright -->

\t<div class=\"copyright\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-3 order-lg-1 order-2  \">
\t\t\t\t\t<div class=\"copyright_content d-flex flex-row align-items-center\">
\t\t\t\t\t\t<div><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-9 order-lg-2 order-1\">
\t\t\t\t\t<div class=\"footer_nav_container d-flex flex-row align-items-center justify-content-lg-end\">
\t\t\t\t\t\t<div class=\"footer_nav\">
\t\t\t\t\t\t\t<ul class=\"footer_nav_list\">
\t\t\t\t\t\t\t\t<li class=\"footer_nav_item\"><a href=\"#\">home</a></li>
\t\t\t\t\t\t\t\t<li class=\"footer_nav_item\"><a href=\"about.html\">about us</a></li>
\t\t\t\t\t\t\t\t<li class=\"footer_nav_item\"><a href=\"offers.html\">offers</a></li>
\t\t\t\t\t\t\t\t<li class=\"footer_nav_item\"><a href=\"blog.html\">news</a></li>
\t\t\t\t\t\t\t\t<li class=\"footer_nav_item\"><a href=\"contact.html\">contact</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

</div>

<script src=\"js/jquery-3.2.1.min.js\"></script>
<script src=\"styles/bootstrap4/popper.js\"></script>
<script src=\"styles/bootstrap4/bootstrap.min.js\"></script>
<script src=\"plugins/OwlCarousel2-2.2.1/owl.carousel.js\"></script>
<script src=\"plugins/easing/easing.js\"></script>
<script src=\"js/custom.js\"></script>

</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "acceuilclient/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 29,  72 => 28,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
<title>Travelix</title>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"Travelix Project\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/bootstrap4/bootstrap.min.css\">
<link href=\"plugins/font-awesome-4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/OwlCarousel2-2.2.1/owl.carousel.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/OwlCarousel2-2.2.1/owl.theme.default.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/OwlCarousel2-2.2.1/animate.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/main_styles.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/responsive.css\">
</head>

<body>

<div class=\"super_container\">
\t
\t<!-- Header -->

\t<header class=\"header\">

\t\t<!-- Top Bar -->

\t\t{% include 'fronttopbar.html.twig' %}

\t\t<!-- Main Navigation -->

\t\t<nav class=\"main_nav\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col main_nav_col d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t<div class=\"logo_container\">
\t\t\t\t\t\t\t<div class=\"logo\"><a href=\"#\"><img src=\"images/logo.png\" alt=\"\">travelix</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"main_nav_container ml-auto\">
\t\t\t\t\t\t\t<ul class=\"main_nav_list\">
\t\t\t\t\t\t\t\t<li class=\"main_nav_item\"><a href=\"#\">home</a></li>
\t\t\t\t\t\t\t\t<li class=\"main_nav_item\"><a href=\"about.html\">about us</a></li>
\t\t\t\t\t\t\t\t<li class=\"main_nav_item\"><a href=\"offers.html\">offers</a></li>
\t\t\t\t\t\t\t\t<li class=\"main_nav_item\"><a href=\"blog.html\">news</a></li>
\t\t\t\t\t\t\t\t<li class=\"main_nav_item\"><a href=\"contact.html\">contact</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"content_search ml-lg-0 ml-auto\">
\t\t\t\t\t\t\t<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t\t\t\t\t\t\twidth=\"17px\" height=\"17px\" viewBox=\"0 0 512 512\" enable-background=\"new 0 0 512 512\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t<path class=\"mag_glass\" fill=\"#FFFFFF\" d=\"M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
\t\t\t\t\t\t\t\t\t\t\ts112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
\t\t\t\t\t\t\t\t\t\t\tC407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
\t\t\t\t\t\t\t\t\t\t\tM119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
\t\t\t\t\t\t\t\t\t\t\tc0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z\"/>
\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t<path class=\"mag_glass\" fill=\"#FFFFFF\" d=\"M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
\t\t\t\t\t\t\t\t\t\t\tc8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
\t\t\t\t\t\t\t\t\t\t\tC-2.019,484.77-2.019,497.865,6.057,505.942z\"/>
\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<form id=\"search_form\" class=\"search_form bez_1\">
\t\t\t\t\t\t\t<input type=\"search\" class=\"search_content_input bez_1\">
\t\t\t\t\t\t</form>

\t\t\t\t\t\t<div class=\"hamburger\">
\t\t\t\t\t\t\t<i class=\"fa fa-bars trans_200\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</nav>

\t</header>

\t<div class=\"menu trans_500\">
\t\t<div class=\"menu_content d-flex flex-column align-items-center justify-content-center text-center\">
\t\t\t<div class=\"menu_close_container\"><div class=\"menu_close\"></div></div>
\t\t\t<div class=\"logo menu_logo\"><a href=\"#\"><img src=\"images/logo.png\" alt=\"\"></a></div>
\t\t\t<ul>
\t\t\t\t<li class=\"menu_item\"><a href=\"#\">home</a></li>
\t\t\t\t<li class=\"menu_item\"><a href=\"about.html\">about us</a></li>
\t\t\t\t<li class=\"menu_item\"><a href=\"offers.html\">offers</a></li>
\t\t\t\t<li class=\"menu_item\"><a href=\"blog.html\">news</a></li>
\t\t\t\t<li class=\"menu_item\"><a href=\"contact.html\">contact</a></li>
\t\t\t</ul>
\t\t</div>
\t</div>

\t<!-- Home -->

\t<div class=\"home\">
\t\t
\t\t<!-- Home Slider -->

\t\t<div class=\"home_slider_container\">
\t\t\t
\t\t\t<div class=\"owl-carousel owl-theme home_slider\">

\t\t\t\t<!-- Slider Item -->
\t\t\t\t<div class=\"owl-item home_slider_item\">
\t\t\t\t\t<!-- Image by https://unsplash.com/@anikindimitry -->
\t\t\t\t\t<div class=\"home_slider_background\" style=\"background-image:url(images/home_slider.jpg)\"></div>

\t\t\t\t\t<div class=\"home_slider_content text-center\">
\t\t\t\t\t\t<div class=\"home_slider_content_inner\" data-animation-in=\"flipInX\" data-animation-out=\"animate-out fadeOut\">
\t\t\t\t\t\t\t<h1>discover</h1>
\t\t\t\t\t\t\t<h1>the world</h1>
\t\t\t\t\t\t\t<div class=\"button home_slider_button\"><div class=\"button_bcg\"></div><a href=\"#\">explore now<span></span><span></span><span></span></a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Slider Item -->
\t\t\t\t<div class=\"owl-item home_slider_item\">
\t\t\t\t\t<div class=\"home_slider_background\" style=\"background-image:url(images/home_slider.jpg)\"></div>

\t\t\t\t\t<div class=\"home_slider_content text-center\">
\t\t\t\t\t\t<div class=\"home_slider_content_inner\" data-animation-in=\"flipInX\" data-animation-out=\"animate-out fadeOut\">
\t\t\t\t\t\t\t<h1>discover</h1>
\t\t\t\t\t\t\t<h1>the world</h1>
\t\t\t\t\t\t\t<div class=\"button home_slider_button\"><div class=\"button_bcg\"></div><a href=\"#\">explore now<span></span><span></span><span></span></a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Slider Item -->
\t\t\t\t<div class=\"owl-item home_slider_item\">
\t\t\t\t\t<div class=\"home_slider_background\" style=\"background-image:url(images/home_slider.jpg)\"></div>

\t\t\t\t\t<div class=\"home_slider_content text-center\">
\t\t\t\t\t\t<div class=\"home_slider_content_inner\" data-animation-in=\"flipInX\" data-animation-out=\"animate-out fadeOut\">
\t\t\t\t\t\t\t<h1>discover</h1>
\t\t\t\t\t\t\t<h1>the world</h1>
\t\t\t\t\t\t\t<div class=\"button home_slider_button\"><div class=\"button_bcg\"></div><a href=\"#\">explore now<span></span><span></span><span></span></a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t
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
\t\t\t
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

\t\t\t<!-- Home Slider Dots -->

\t\t\t<div class=\"home_slider_dots\">
\t\t\t\t<ul id=\"home_slider_custom_dots\" class=\"home_slider_custom_dots\">
\t\t\t\t\t<li class=\"home_slider_custom_dot active\"><div></div>01.</li>
\t\t\t\t\t<li class=\"home_slider_custom_dot\"><div></div>02.</li>
\t\t\t\t\t<li class=\"home_slider_custom_dot\"><div></div>03.</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t
\t\t</div>

\t</div>

\t<!-- Search -->

\t<div class=\"search\">
\t\t

\t\t<!-- Search Contents -->
\t\t
\t\t<div class=\"container fill_height\">
\t\t\t<div class=\"row fill_height\">
\t\t\t\t<div class=\"col fill_height\">

\t\t\t\t\t<!-- Search Tabs -->

\t\t\t\t\t<div class=\"search_tabs_container\">
\t\t\t\t\t\t<div class=\"search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
\t\t\t\t\t\t\t<div class=\"search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"images/suitcase.png\" alt=\"\"><span>hotels</span></div>
\t\t\t\t\t\t\t<div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"images/bus.png\" alt=\"\">car rentals</div>
\t\t\t\t\t\t\t<div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"images/departure.png\" alt=\"\">flights</div>
\t\t\t\t\t\t\t<div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"images/island.png\" alt=\"\">trips</div>
\t\t\t\t\t\t\t<div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"images/cruise.png\" alt=\"\">cruises</div>
\t\t\t\t\t\t\t<div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"images/diving.png\" alt=\"\">activities</div>
\t\t\t\t\t\t</div>\t\t
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Search Panel -->

\t\t\t\t\t<div class=\"search_panel active\">
\t\t\t\t\t\t<form action=\"#\" id=\"search_form_1\" class=\"search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>destination</div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"destination search_input\" required=\"required\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>check in</div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"check_in search_input\" placeholder=\"YYYY-MM-DD\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>check out</div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"check_out search_input\" placeholder=\"YYYY-MM-DD\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>adults</div>
\t\t\t\t\t\t\t\t<select name=\"adults\" id=\"adults_1\" class=\"dropdown_item_select search_input\">
\t\t\t\t\t\t\t\t\t<option>01</option>
\t\t\t\t\t\t\t\t\t<option>02</option>
\t\t\t\t\t\t\t\t\t<option>03</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>children</div>
\t\t\t\t\t\t\t\t<select name=\"children\" id=\"children_1\" class=\"dropdown_item_select search_input\">
\t\t\t\t\t\t\t\t\t<option>0</option>
\t\t\t\t\t\t\t\t\t<option>02</option>
\t\t\t\t\t\t\t\t\t<option>03</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button class=\"button search_button\">search<span></span><span></span><span></span></button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Search Panel -->

\t\t\t\t\t<div class=\"search_panel\">
\t\t\t\t\t\t<form action=\"#\" id=\"search_form_2\" class=\"search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>destination</div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"destination search_input\" required=\"required\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>check in</div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"check_in search_input\" placeholder=\"YYYY-MM-DD\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>check out</div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"check_out search_input\" placeholder=\"YYYY-MM-DD\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>adults</div>
\t\t\t\t\t\t\t\t<select name=\"adults\" id=\"adults_2\" class=\"dropdown_item_select search_input\">
\t\t\t\t\t\t\t\t\t<option>01</option>
\t\t\t\t\t\t\t\t\t<option>02</option>
\t\t\t\t\t\t\t\t\t<option>03</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>children</div>
\t\t\t\t\t\t\t\t<select name=\"children\" id=\"children_2\" class=\"dropdown_item_select search_input\">
\t\t\t\t\t\t\t\t\t<option>0</option>
\t\t\t\t\t\t\t\t\t<option>02</option>
\t\t\t\t\t\t\t\t\t<option>03</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button class=\"button search_button\">search<span></span><span></span><span></span></button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Search Panel -->

\t\t\t\t\t<div class=\"search_panel\">
\t\t\t\t\t\t<form action=\"#\" id=\"search_form_3\" class=\"search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>destination</div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"destination search_input\" required=\"required\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>check in</div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"check_in search_input\" placeholder=\"YYYY-MM-DD\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>check out</div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"check_out search_input\" placeholder=\"YYYY-MM-DD\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>adults</div>
\t\t\t\t\t\t\t\t<select name=\"adults\" id=\"adults_3\" class=\"dropdown_item_select search_input\">
\t\t\t\t\t\t\t\t\t<option>01</option>
\t\t\t\t\t\t\t\t\t<option>02</option>
\t\t\t\t\t\t\t\t\t<option>03</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>children</div>
\t\t\t\t\t\t\t\t<select name=\"children\" id=\"children_3\" class=\"dropdown_item_select search_input\">
\t\t\t\t\t\t\t\t\t<option>0</option>
\t\t\t\t\t\t\t\t\t<option>02</option>
\t\t\t\t\t\t\t\t\t<option>03</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button class=\"button search_button\">search<span></span><span></span><span></span></button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Search Panel -->

\t\t\t\t\t<div class=\"search_panel\">
\t\t\t\t\t\t<form action=\"#\" id=\"search_form_4\" class=\"search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>destination</div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"destination search_input\" required=\"required\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>check in</div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"check_in search_input\" placeholder=\"YYYY-MM-DD\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>check out</div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"check_out search_input\" placeholder=\"YYYY-MM-DD\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>adults</div>
\t\t\t\t\t\t\t\t<select name=\"adults\" id=\"adults_4\" class=\"dropdown_item_select search_input\">
\t\t\t\t\t\t\t\t\t<option>01</option>
\t\t\t\t\t\t\t\t\t<option>02</option>
\t\t\t\t\t\t\t\t\t<option>03</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>children</div>
\t\t\t\t\t\t\t\t<select name=\"children\" id=\"children_4\" class=\"dropdown_item_select search_input\">
\t\t\t\t\t\t\t\t\t<option>0</option>
\t\t\t\t\t\t\t\t\t<option>02</option>
\t\t\t\t\t\t\t\t\t<option>03</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button class=\"button search_button\">search<span></span><span></span><span></span></button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Search Panel -->

\t\t\t\t\t<div class=\"search_panel\">
\t\t\t\t\t\t<form action=\"#\" id=\"search_form_5\" class=\"search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>destination</div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"destination search_input\" required=\"required\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>check in</div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"check_in search_input\" placeholder=\"YYYY-MM-DD\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>check out</div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"check_out search_input\" placeholder=\"YYYY-MM-DD\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>adults</div>
\t\t\t\t\t\t\t\t<select name=\"adults\" id=\"adults_5\" class=\"dropdown_item_select search_input\">
\t\t\t\t\t\t\t\t\t<option>01</option>
\t\t\t\t\t\t\t\t\t<option>02</option>
\t\t\t\t\t\t\t\t\t<option>03</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>children</div>
\t\t\t\t\t\t\t\t<select name=\"children\" id=\"children_5\" class=\"dropdown_item_select search_input\">
\t\t\t\t\t\t\t\t\t<option>0</option>
\t\t\t\t\t\t\t\t\t<option>02</option>
\t\t\t\t\t\t\t\t\t<option>03</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button class=\"button search_button\">search<span></span><span></span><span></span></button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Search Panel -->

\t\t\t\t\t<div class=\"search_panel\">
\t\t\t\t\t\t<form action=\"#\" id=\"search_form_6\" class=\"search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>destination</div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"destination search_input\" required=\"required\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>check in</div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"check_in search_input\" placeholder=\"YYYY-MM-DD\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>check out</div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"check_out search_input\" placeholder=\"YYYY-MM-DD\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>adults</div>
\t\t\t\t\t\t\t\t<select name=\"adults\" id=\"adults_6\" class=\"dropdown_item_select search_input\">
\t\t\t\t\t\t\t\t\t<option>01</option>
\t\t\t\t\t\t\t\t\t<option>02</option>
\t\t\t\t\t\t\t\t\t<option>03</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>children</div>
\t\t\t\t\t\t\t\t<select name=\"children\" id=\"children_6\" class=\"dropdown_item_select search_input\">
\t\t\t\t\t\t\t\t\t<option>0</option>
\t\t\t\t\t\t\t\t\t<option>02</option>
\t\t\t\t\t\t\t\t\t<option>03</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button class=\"button search_button\">search<span></span><span></span><span></span></button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t\t
\t</div>

\t<!-- Intro -->
\t
\t<div class=\"intro\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h2 class=\"intro_title text-center\">We have the best tours</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-10 offset-lg-1\">
\t\t\t\t\t<div class=\"intro_text text-center\">
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. </p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row intro_items\">

\t\t\t\t<!-- Intro Item -->

\t\t\t\t<div class=\"col-lg-4 intro_col\">
\t\t\t\t\t<div class=\"intro_item\">
\t\t\t\t\t\t<div class=\"intro_item_overlay\"></div>
\t\t\t\t\t\t<!-- Image by https://unsplash.com/@dnevozhai -->
\t\t\t\t\t\t<div class=\"intro_item_background\" style=\"background-image:url(images/intro_1.jpg)\"></div>
\t\t\t\t\t\t<div class=\"intro_item_content d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t<div class=\"intro_date\">May 25th - June 01st</div>
\t\t\t\t\t\t\t<div class=\"button intro_button\"><div class=\"button_bcg\"></div><a href=\"#\">see more<span></span><span></span><span></span></a></div>
\t\t\t\t\t\t\t<div class=\"intro_center text-center\">
\t\t\t\t\t\t\t\t<h1>Mauritius</h1>
\t\t\t\t\t\t\t\t<div class=\"intro_price\">From \$1450</div>
\t\t\t\t\t\t\t\t<div class=\"rating rating_4\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Intro Item -->

\t\t\t\t<div class=\"col-lg-4 intro_col\">
\t\t\t\t\t<div class=\"intro_item\">
\t\t\t\t\t\t<div class=\"intro_item_overlay\"></div>
\t\t\t\t\t\t<!-- Image by https://unsplash.com/@hellolightbulb -->
\t\t\t\t\t\t<div class=\"intro_item_background\" style=\"background-image:url(images/intro_2.jpg)\"></div>
\t\t\t\t\t\t<div class=\"intro_item_content d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t<div class=\"intro_date\">May 25th - June 01st</div>
\t\t\t\t\t\t\t<div class=\"button intro_button\"><div class=\"button_bcg\"></div><a href=\"#\">see more<span></span><span></span><span></span></a></div>
\t\t\t\t\t\t\t<div class=\"intro_center text-center\">
\t\t\t\t\t\t\t\t<h1>Greece</h1>
\t\t\t\t\t\t\t\t<div class=\"intro_price\">From \$1450</div>
\t\t\t\t\t\t\t\t<div class=\"rating rating_4\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Intro Item -->

\t\t\t\t<div class=\"col-lg-4 intro_col\">
\t\t\t\t\t<div class=\"intro_item\">
\t\t\t\t\t\t<div class=\"intro_item_overlay\"></div>
\t\t\t\t\t\t<!-- Image by https://unsplash.com/@willianjusten -->
\t\t\t\t\t\t<div class=\"intro_item_background\" style=\"background-image:url(images/intro_3.jpg)\"></div>
\t\t\t\t\t\t<div class=\"intro_item_content d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t<div class=\"intro_date\">May 25th - June 01st</div>
\t\t\t\t\t\t\t<div class=\"button intro_button\"><div class=\"button_bcg\"></div><a href=\"#\">see more<span></span><span></span><span></span></a></div>
\t\t\t\t\t\t\t<div class=\"intro_center text-center\">
\t\t\t\t\t\t\t\t<h1>Scotland</h1>
\t\t\t\t\t\t\t\t<div class=\"intro_price\">From \$1450</div>
\t\t\t\t\t\t\t\t<div class=\"rating rating_4\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- CTA -->

\t<div class=\"cta\">
\t\t<!-- Image by https://unsplash.com/@thanni -->
\t\t<div class=\"cta_background\" style=\"background-image:url(images/cta.jpg)\"></div>
\t\t
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">

\t\t\t\t\t<!-- CTA Slider -->

\t\t\t\t\t<div class=\"cta_slider_container\">
\t\t\t\t\t\t<div class=\"owl-carousel owl-theme cta_slider\">

\t\t\t\t\t\t\t<!-- CTA Slider Item -->
\t\t\t\t\t\t\t<div class=\"owl-item cta_item text-center\">
\t\t\t\t\t\t\t\t<div class=\"cta_title\">maldives deluxe package</div>
\t\t\t\t\t\t\t\t<div class=\"rating_r rating_r_4\">
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"cta_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. Proin bibendum, augue faucibus tincidunt ultrices, tortor augue gravida lectus, et efficitur enim justo vel ligula.</p>
\t\t\t\t\t\t\t\t<div class=\"button cta_button\"><div class=\"button_bcg\"></div><a href=\"#\">book now<span></span><span></span><span></span></a></div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- CTA Slider Item -->
\t\t\t\t\t\t\t<div class=\"owl-item cta_item text-center\">
\t\t\t\t\t\t\t\t<div class=\"cta_title\">maldives deluxe package</div>
\t\t\t\t\t\t\t\t<div class=\"rating_r rating_r_4\">
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"cta_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. Proin bibendum, augue faucibus tincidunt ultrices, tortor augue gravida lectus, et efficitur enim justo vel ligula.</p>
\t\t\t\t\t\t\t\t<div class=\"button cta_button\"><div class=\"button_bcg\"></div><a href=\"#\">book now<span></span><span></span><span></span></a></div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- CTA Slider Item -->
\t\t\t\t\t\t\t<div class=\"owl-item cta_item text-center\">
\t\t\t\t\t\t\t\t<div class=\"cta_title\">maldives deluxe package</div>
\t\t\t\t\t\t\t\t<div class=\"rating_r rating_r_4\">
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"cta_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. Proin bibendum, augue faucibus tincidunt ultrices, tortor augue gravida lectus, et efficitur enim justo vel ligula.</p>
\t\t\t\t\t\t\t\t<div class=\"button cta_button\"><div class=\"button_bcg\"></div><a href=\"#\">book now<span></span><span></span><span></span></a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- CTA Slider Nav - Prev -->
\t\t\t\t\t\t<div class=\"cta_slider_nav cta_slider_prev\">
\t\t\t\t\t\t\t<svg version=\"1.1\" id=\"Layer_4\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t\t\t\t\t\t\t\twidth=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t\t<linearGradient id='cta_grad_prev'>
\t\t\t\t\t\t\t\t\t\t<stop offset='0%' stop-color='#fa9e1b'/>
\t\t\t\t\t\t\t\t\t\t<stop offset='100%' stop-color='#8d4fff'/>
\t\t\t\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t\t\t\t</defs>
\t\t\t\t\t\t\t\t<path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
\t\t\t\t\t\t\t\tM26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
\t\t\t\t\t\t\t\tC22.545,2,26,5.541,26,9.909V23.091z\"/>
\t\t\t\t\t\t\t\t<polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
\t\t\t\t\t\t\t\t11.042,18.219 \"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- CTA Slider Nav - Next -->
\t\t\t\t\t\t<div class=\"cta_slider_nav cta_slider_next\">
\t\t\t\t\t\t\t<svg version=\"1.1\" id=\"Layer_5\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t\t\t\t\t\t\twidth=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t\t<linearGradient id='cta_grad_next'>
\t\t\t\t\t\t\t\t\t\t<stop offset='0%' stop-color='#fa9e1b'/>
\t\t\t\t\t\t\t\t\t\t<stop offset='100%' stop-color='#8d4fff'/>
\t\t\t\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t\t\t\t</defs>
\t\t\t\t\t\t\t<path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
\t\t\t\t\t\t\tM26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
\t\t\t\t\t\t\tC22.545,2,26,5.541,26,9.909V23.091z\"/>
\t\t\t\t\t\t\t<polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
\t\t\t\t\t\t\t17.046,15.554 \"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t\t\t\t
\t</div>

\t<!-- Offers -->

\t<div class=\"offers\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col text-center\">
\t\t\t\t\t<h2 class=\"section_title\">the best offers with rooms</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row offers_items\">

\t\t\t\t<!-- Offers Item -->
\t\t\t\t<div class=\"col-lg-6 offers_col\">
\t\t\t\t\t<div class=\"offers_item\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<div class=\"offers_image_container\">
\t\t\t\t\t\t\t\t\t<!-- Image by https://unsplash.com/@kensuarez -->
\t\t\t\t\t\t\t\t\t<div class=\"offers_image_background\" style=\"background-image:url(images/offer_1.jpg)\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"offer_name\"><a href=\"#\">grand castle</a></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<div class=\"offers_content\">
\t\t\t\t\t\t\t\t\t<div class=\"offers_price\">\$70<span>per night</span></div>
\t\t\t\t\t\t\t\t\t<div class=\"rating_r rating_r_4 offers_rating\">
\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p class=\"offers_text\">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
\t\t\t\t\t\t\t\t\t<div class=\"offers_icons\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"offers_icons_list\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"offers_icons_item\"><img src=\"images/post.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"offers_icons_item\"><img src=\"images/compass.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"offers_icons_item\"><img src=\"images/bicycle.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"offers_icons_item\"><img src=\"images/sailboat.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"offers_link\"><a href=\"offers.html\">read more</a></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<!-- Offers Item -->
\t\t\t\t<div class=\"col-lg-6 offers_col\">
\t\t\t\t\t<div class=\"offers_item\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<div class=\"offers_image_container\">
\t\t\t\t\t\t\t\t\t<!-- Image by Egzon Bytyqi -->
\t\t\t\t\t\t\t\t\t<div class=\"offers_image_background\" style=\"background-image:url(images/offer_2.jpg)\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"offer_name\"><a href=\"#\">turkey hills</a></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<div class=\"offers_content\">
\t\t\t\t\t\t\t\t\t<div class=\"offers_price\">\$50<span>per night</span></div>
\t\t\t\t\t\t\t\t\t<div class=\"rating_r rating_r_4 offers_rating\">
\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p class=\"offers_text\">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
\t\t\t\t\t\t\t\t\t<div class=\"offers_icons\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"offers_icons_list\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"offers_icons_item\"><img src=\"images/post.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"offers_icons_item\"><img src=\"images/compass.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"offers_icons_item\"><img src=\"images/bicycle.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"offers_icons_item\"><img src=\"images/sailboat.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"offers_link\"><a href=\"offers.html\">read more</a></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Offers Item -->
\t\t\t\t<div class=\"col-lg-6 offers_col\">
\t\t\t\t\t<div class=\"offers_item\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<div class=\"offers_image_container\">
\t\t\t\t\t\t\t\t\t<!-- Image by https://unsplash.com/@nevenkrcmarek -->
\t\t\t\t\t\t\t\t\t<div class=\"offers_image_background\" style=\"background-image:url(images/offer_3.jpg)\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"offer_name\"><a href=\"#\">island dream</a></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<div class=\"offers_content\">
\t\t\t\t\t\t\t\t\t<div class=\"offers_price\">\$90<span>per night</span></div>
\t\t\t\t\t\t\t\t\t<div class=\"rating_r rating_r_4 offers_rating\">
\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p class=\"offers_text\">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
\t\t\t\t\t\t\t\t\t<div class=\"offers_icons\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"offers_icons_list\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"offers_icons_item\"><img src=\"images/post.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"offers_icons_item\"><img src=\"images/compass.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"offers_icons_item\"><img src=\"images/bicycle.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"offers_icons_item\"><img src=\"images/sailboat.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"offers_link\"><a href=\"offers.html\">read more</a></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Offers Item -->
\t\t\t\t<div class=\"col-lg-6 offers_col\">
\t\t\t\t\t<div class=\"offers_item\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<div class=\"offers_image_container\">
\t\t\t\t\t\t\t\t\t<!-- Image by https://unsplash.com/@mantashesthaven -->
\t\t\t\t\t\t\t\t\t<div class=\"offers_image_background\" style=\"background-image:url(images/offer_4.jpg)\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"offer_name\"><a href=\"#\">travel light</a></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<div class=\"offers_content\">
\t\t\t\t\t\t\t\t\t<div class=\"offers_price\">\$30<span>per night</span></div>
\t\t\t\t\t\t\t\t\t<div class=\"rating_r rating_r_4 offers_rating\">
\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p class=\"offers_text\">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
\t\t\t\t\t\t\t\t\t<div class=\"offers_icons\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"offers_icons_list\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"offers_icons_item\"><img src=\"images/post.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"offers_icons_item\"><img src=\"images/compass.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"offers_icons_item\"><img src=\"images/bicycle.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"offers_icons_item\"><img src=\"images/sailboat.png\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"offers_link\"><a href=\"offers.html\">read more</a></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Testimonials -->

\t<div class=\"testimonials\">
\t\t<div class=\"test_border\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col text-center\">
\t\t\t\t\t<h2 class=\"section_title\">what our clients say about us</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t
\t\t\t\t\t<!-- Testimonials Slider -->

\t\t\t\t\t<div class=\"test_slider_container\">
\t\t\t\t\t\t<div class=\"owl-carousel owl-theme test_slider\">

\t\t\t\t\t\t\t<!-- Testimonial Item -->
\t\t\t\t\t\t\t<div class=\"owl-item\">
\t\t\t\t\t\t\t\t<div class=\"test_item\">
\t\t\t\t\t\t\t\t\t<div class=\"test_image\"><img src=\"images/test_1.jpg\" alt=\"https://unsplash.com/@anniegray\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"test_icon\"><img src=\"images/backpack.png\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"test_content_container\">
\t\t\t\t\t\t\t\t\t\t<div class=\"test_content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_item_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_name\">carla smith</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_date\">May 24, 2017</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_quote_title\">\" Best holliday ever \"</div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"test_quote_text\">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Testimonial Item -->
\t\t\t\t\t\t\t<div class=\"owl-item\">
\t\t\t\t\t\t\t\t<div class=\"test_item\">
\t\t\t\t\t\t\t\t\t<div class=\"test_image\"><img src=\"images/test_2.jpg\" alt=\"https://unsplash.com/@tschax\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"test_icon\"><img src=\"images/island_t.png\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"test_content_container\">
\t\t\t\t\t\t\t\t\t\t<div class=\"test_content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_item_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_name\">carla smith</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_date\">May 24, 2017</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_quote_title\">\" Best holliday ever \"</div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"test_quote_text\">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Testimonial Item -->
\t\t\t\t\t\t\t<div class=\"owl-item\">
\t\t\t\t\t\t\t\t<div class=\"test_item\">
\t\t\t\t\t\t\t\t\t<div class=\"test_image\"><img src=\"images/test_3.jpg\" alt=\"https://unsplash.com/@seefromthesky\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"test_icon\"><img src=\"images/kayak.png\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"test_content_container\">
\t\t\t\t\t\t\t\t\t\t<div class=\"test_content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_item_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_name\">carla smith</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_date\">May 24, 2017</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_quote_title\">\" Best holliday ever \"</div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"test_quote_text\">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Testimonial Item -->
\t\t\t\t\t\t\t<div class=\"owl-item\">
\t\t\t\t\t\t\t\t<div class=\"test_item\">
\t\t\t\t\t\t\t\t\t<div class=\"test_image\"><img src=\"images/test_2.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"test_icon\"><img src=\"images/island_t.png\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"test_content_container\">
\t\t\t\t\t\t\t\t\t\t<div class=\"test_content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_item_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_name\">carla smith</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_date\">May 24, 2017</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_quote_title\">\" Best holliday ever \"</div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"test_quote_text\">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Testimonial Item -->
\t\t\t\t\t\t\t<div class=\"owl-item\">
\t\t\t\t\t\t\t\t<div class=\"test_item\">
\t\t\t\t\t\t\t\t\t<div class=\"test_image\"><img src=\"images/test_1.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"test_icon\"><img src=\"images/backpack.png\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"test_content_container\">
\t\t\t\t\t\t\t\t\t\t<div class=\"test_content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_item_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_name\">carla smith</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_date\">May 24, 2017</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_quote_title\">\" Best holliday ever \"</div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"test_quote_text\">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Testimonial Item -->
\t\t\t\t\t\t\t<div class=\"owl-item\">
\t\t\t\t\t\t\t\t<div class=\"test_item\">
\t\t\t\t\t\t\t\t\t<div class=\"test_image\"><img src=\"images/test_3.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"test_icon\"><img src=\"images/kayak.png\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"test_content_container\">
\t\t\t\t\t\t\t\t\t\t<div class=\"test_content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_item_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_name\">carla smith</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_date\">May 24, 2017</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_quote_title\">\" Best holliday ever \"</div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"test_quote_text\">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Testimonials Slider Nav - Prev -->
\t\t\t\t\t\t<div class=\"test_slider_nav test_slider_prev\">
\t\t\t\t\t\t\t<svg version=\"1.1\" id=\"Layer_6\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t\t\t\t\t\t\t\twidth=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t\t<linearGradient id='test_grad_prev'>
\t\t\t\t\t\t\t\t\t\t<stop offset='0%' stop-color='#fa9e1b'/>
\t\t\t\t\t\t\t\t\t\t<stop offset='100%' stop-color='#8d4fff'/>
\t\t\t\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t\t\t\t</defs>
\t\t\t\t\t\t\t\t<path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
\t\t\t\t\t\t\t\tM26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
\t\t\t\t\t\t\t\tC22.545,2,26,5.541,26,9.909V23.091z\"/>
\t\t\t\t\t\t\t\t<polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
\t\t\t\t\t\t\t\t11.042,18.219 \"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Testimonials Slider Nav - Next -->
\t\t\t\t\t\t<div class=\"test_slider_nav test_slider_next\">
\t\t\t\t\t\t\t<svg version=\"1.1\" id=\"Layer_7\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t\t\t\t\t\t\twidth=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t\t<linearGradient id='test_grad_next'>
\t\t\t\t\t\t\t\t\t\t<stop offset='0%' stop-color='#fa9e1b'/>
\t\t\t\t\t\t\t\t\t\t<stop offset='100%' stop-color='#8d4fff'/>
\t\t\t\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t\t\t\t</defs>
\t\t\t\t\t\t\t<path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
\t\t\t\t\t\t\tM26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
\t\t\t\t\t\t\tC22.545,2,26,5.541,26,9.909V23.091z\"/>
\t\t\t\t\t\t\t<polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
\t\t\t\t\t\t\t17.046,15.554 \"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>

\t<div class=\"trending\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col text-center\">
\t\t\t\t\t<h2 class=\"section_title\">trending now</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row trending_container\">

\t\t\t\t<!-- Trending Item -->
\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t<div class=\"trending_item clearfix\">
\t\t\t\t\t\t<div class=\"trending_image\"><img src=\"images/trend_1.png\" alt=\"https://unsplash.com/@fransaraco\"></div>
\t\t\t\t\t\t<div class=\"trending_content\">
\t\t\t\t\t\t\t<div class=\"trending_title\"><a href=\"#\">grand hotel</a></div>
\t\t\t\t\t\t\t<div class=\"trending_price\">From \$182</div>
\t\t\t\t\t\t\t<div class=\"trending_location\">madrid, spain</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Trending Item -->
\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t<div class=\"trending_item clearfix\">
\t\t\t\t\t\t<div class=\"trending_image\"><img src=\"images/trend_2.png\" alt=\"https://unsplash.com/@grovemade\"></div>
\t\t\t\t\t\t<div class=\"trending_content\">
\t\t\t\t\t\t\t<div class=\"trending_title\"><a href=\"#\">mars hotel</a></div>
\t\t\t\t\t\t\t<div class=\"trending_price\">From \$182</div>
\t\t\t\t\t\t\t<div class=\"trending_location\">madrid, spain</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Trending Item -->
\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t<div class=\"trending_item clearfix\">
\t\t\t\t\t\t<div class=\"trending_image\"><img src=\"images/trend_3.png\" alt=\"https://unsplash.com/@jbriscoe\"></div>
\t\t\t\t\t\t<div class=\"trending_content\">
\t\t\t\t\t\t\t<div class=\"trending_title\"><a href=\"#\">queen hotel</a></div>
\t\t\t\t\t\t\t<div class=\"trending_price\">From \$182</div>
\t\t\t\t\t\t\t<div class=\"trending_location\">madrid, spain</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Trending Item -->
\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t<div class=\"trending_item clearfix\">
\t\t\t\t\t\t<div class=\"trending_image\"><img src=\"images/trend_4.png\" alt=\"https://unsplash.com/@oowgnuj\"></div>
\t\t\t\t\t\t<div class=\"trending_content\">
\t\t\t\t\t\t\t<div class=\"trending_title\"><a href=\"#\">mars hotel</a></div>
\t\t\t\t\t\t\t<div class=\"trending_price\">From \$182</div>
\t\t\t\t\t\t\t<div class=\"trending_location\">madrid, spain</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Trending Item -->
\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t<div class=\"trending_item clearfix\">
\t\t\t\t\t\t<div class=\"trending_image\"><img src=\"images/trend_5.png\" alt=\"https://unsplash.com/@mindaugas\"></div>
\t\t\t\t\t\t<div class=\"trending_content\">
\t\t\t\t\t\t\t<div class=\"trending_title\"><a href=\"#\">grand hotel</a></div>
\t\t\t\t\t\t\t<div class=\"trending_price\">From \$182</div>
\t\t\t\t\t\t\t<div class=\"trending_location\">madrid, spain</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Trending Item -->
\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t<div class=\"trending_item clearfix\">
\t\t\t\t\t\t<div class=\"trending_image\"><img src=\"images/trend_6.png\" alt=\"https://unsplash.com/@itsnwa\"></div>
\t\t\t\t\t\t<div class=\"trending_content\">
\t\t\t\t\t\t\t<div class=\"trending_title\"><a href=\"#\">mars hotel</a></div>
\t\t\t\t\t\t\t<div class=\"trending_price\">From \$182</div>
\t\t\t\t\t\t\t<div class=\"trending_location\">madrid, spain</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Trending Item -->
\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t<div class=\"trending_item clearfix\">
\t\t\t\t\t\t<div class=\"trending_image\"><img src=\"images/trend_7.png\" alt=\"https://unsplash.com/@rktkn\"></div>
\t\t\t\t\t\t<div class=\"trending_content\">
\t\t\t\t\t\t\t<div class=\"trending_title\"><a href=\"#\">queen hotel</a></div>
\t\t\t\t\t\t\t<div class=\"trending_price\">From \$182</div>
\t\t\t\t\t\t\t<div class=\"trending_location\">madrid, spain</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Trending Item -->
\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t<div class=\"trending_item clearfix\">
\t\t\t\t\t\t<div class=\"trending_image\"><img src=\"images/trend_8.png\" alt=\"https://unsplash.com/@thoughtcatalog\"></div>
\t\t\t\t\t\t<div class=\"trending_content\">
\t\t\t\t\t\t\t<div class=\"trending_title\"><a href=\"#\">mars hotel</a></div>
\t\t\t\t\t\t\t<div class=\"trending_price\">From \$182</div>
\t\t\t\t\t\t\t<div class=\"trending_location\">madrid, spain</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"contact\">
\t\t<div class=\"contact_background\" style=\"background-image:url(images/contact.png)\"></div>

\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t<div class=\"contact_image\">
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t<div class=\"contact_form_container\">
\t\t\t\t\t\t<div class=\"contact_title\">get in touch</div>
\t\t\t\t\t\t<form action=\"#\" id=\"contact_form\" class=\"contact_form\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"contact_form_name\" class=\"contact_form_name input_field\" placeholder=\"Name\" required=\"required\" data-error=\"Name is required.\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"contact_form_email\" class=\"contact_form_email input_field\" placeholder=\"E-mail\" required=\"required\" data-error=\"Email is required.\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"contact_form_subject\" class=\"contact_form_subject input_field\" placeholder=\"Subject\" required=\"required\" data-error=\"Subject is required.\">
\t\t\t\t\t\t\t<textarea id=\"contact_form_message\" class=\"text_field contact_form_message\" name=\"message\" rows=\"4\" placeholder=\"Message\" required=\"required\" data-error=\"Please, write us a message.\"></textarea>
\t\t\t\t\t\t\t<button type=\"submit\" id=\"form_submit_button\" class=\"form_submit_button button\">send message<span></span><span></span><span></span></button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Footer -->

\t<footer class=\"footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">

\t\t\t\t<!-- Footer Column -->
\t\t\t\t<div class=\"col-lg-3 footer_column\">
\t\t\t\t\t<div class=\"footer_col\">
\t\t\t\t\t\t<div class=\"footer_content footer_about\">
\t\t\t\t\t\t\t<div class=\"logo_container footer_logo\">
\t\t\t\t\t\t\t\t<div class=\"logo\"><a href=\"#\"><img src=\"images/logo.png\" alt=\"\">travelix</a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"footer_about_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer eleme ntum orci eu vehicula pretium.</p>
\t\t\t\t\t\t\t<ul class=\"footer_social_list\">
\t\t\t\t\t\t\t\t<li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-pinterest\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-facebook-f\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Footer Column -->
\t\t\t\t<div class=\"col-lg-3 footer_column\">
\t\t\t\t\t<div class=\"footer_col\">
\t\t\t\t\t\t<div class=\"footer_title\">blog posts</div>
\t\t\t\t\t\t<div class=\"footer_content footer_blog\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Footer blog item -->
\t\t\t\t\t\t\t<div class=\"footer_blog_item clearfix\">
\t\t\t\t\t\t\t\t<div class=\"footer_blog_image\"><img src=\"images/footer_blog_1.jpg\" alt=\"https://unsplash.com/@avidenov\"></div>
\t\t\t\t\t\t\t\t<div class=\"footer_blog_content\">
\t\t\t\t\t\t\t\t\t<div class=\"footer_blog_title\"><a href=\"blog.html\">Travel with us this year</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"footer_blog_date\">Nov 29, 2017</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Footer blog item -->
\t\t\t\t\t\t\t<div class=\"footer_blog_item clearfix\">
\t\t\t\t\t\t\t\t<div class=\"footer_blog_image\"><img src=\"images/footer_blog_2.jpg\" alt=\"https://unsplash.com/@deannaritchie\"></div>
\t\t\t\t\t\t\t\t<div class=\"footer_blog_content\">
\t\t\t\t\t\t\t\t\t<div class=\"footer_blog_title\"><a href=\"blog.html\">New destinations for you</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"footer_blog_date\">Nov 29, 2017</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Footer blog item -->
\t\t\t\t\t\t\t<div class=\"footer_blog_item clearfix\">
\t\t\t\t\t\t\t\t<div class=\"footer_blog_image\"><img src=\"images/footer_blog_3.jpg\" alt=\"https://unsplash.com/@bergeryap87\"></div>
\t\t\t\t\t\t\t\t<div class=\"footer_blog_content\">
\t\t\t\t\t\t\t\t\t<div class=\"footer_blog_title\"><a href=\"blog.html\">Travel with us this year</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"footer_blog_date\">Nov 29, 2017</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Footer Column -->
\t\t\t\t<div class=\"col-lg-3 footer_column\">
\t\t\t\t\t<div class=\"footer_col\">
\t\t\t\t\t\t<div class=\"footer_title\">tags</div>
\t\t\t\t\t\t<div class=\"footer_content footer_tags\">
\t\t\t\t\t\t\t<ul class=\"tags_list clearfix\">
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">design</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">fashion</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">music</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">video</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">party</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">photography</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">adventure</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">travel</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Footer Column -->
\t\t\t\t<div class=\"col-lg-3 footer_column\">
\t\t\t\t\t<div class=\"footer_col\">
\t\t\t\t\t\t<div class=\"footer_title\">contact info</div>
\t\t\t\t\t\t<div class=\"footer_content footer_contact\">
\t\t\t\t\t\t\t<ul class=\"contact_info_list\">
\t\t\t\t\t\t\t\t<li class=\"contact_info_item d-flex flex-row\">
\t\t\t\t\t\t\t\t\t<div><div class=\"contact_info_icon\"><img src=\"images/placeholder.svg\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t\t<div class=\"contact_info_text\">4127 Raoul Wallenber 45b-c Gibraltar</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"contact_info_item d-flex flex-row\">
\t\t\t\t\t\t\t\t\t<div><div class=\"contact_info_icon\"><img src=\"images/phone-call.svg\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t\t<div class=\"contact_info_text\">2556-808-8613</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"contact_info_item d-flex flex-row\">
\t\t\t\t\t\t\t\t\t<div><div class=\"contact_info_icon\"><img src=\"images/message.svg\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t\t<div class=\"contact_info_text\"><a href=\"mailto:contactme@gmail.com?Subject=Hello\" target=\"_top\">contactme@gmail.com</a></div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"contact_info_item d-flex flex-row\">
\t\t\t\t\t\t\t\t\t<div><div class=\"contact_info_icon\"><img src=\"images/planet-earth.svg\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t\t<div class=\"contact_info_text\"><a href=\"https://colorlib.com\">www.colorlib.com</a></div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</footer>

\t<!-- Copyright -->

\t<div class=\"copyright\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-3 order-lg-1 order-2  \">
\t\t\t\t\t<div class=\"copyright_content d-flex flex-row align-items-center\">
\t\t\t\t\t\t<div><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-9 order-lg-2 order-1\">
\t\t\t\t\t<div class=\"footer_nav_container d-flex flex-row align-items-center justify-content-lg-end\">
\t\t\t\t\t\t<div class=\"footer_nav\">
\t\t\t\t\t\t\t<ul class=\"footer_nav_list\">
\t\t\t\t\t\t\t\t<li class=\"footer_nav_item\"><a href=\"#\">home</a></li>
\t\t\t\t\t\t\t\t<li class=\"footer_nav_item\"><a href=\"about.html\">about us</a></li>
\t\t\t\t\t\t\t\t<li class=\"footer_nav_item\"><a href=\"offers.html\">offers</a></li>
\t\t\t\t\t\t\t\t<li class=\"footer_nav_item\"><a href=\"blog.html\">news</a></li>
\t\t\t\t\t\t\t\t<li class=\"footer_nav_item\"><a href=\"contact.html\">contact</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

</div>

<script src=\"js/jquery-3.2.1.min.js\"></script>
<script src=\"styles/bootstrap4/popper.js\"></script>
<script src=\"styles/bootstrap4/bootstrap.min.js\"></script>
<script src=\"plugins/OwlCarousel2-2.2.1/owl.carousel.js\"></script>
<script src=\"plugins/easing/easing.js\"></script>
<script src=\"js/custom.js\"></script>

</body>

</html>", "acceuilclient/index.html.twig", "C:\\Users\\miral\\OneDrive\\Bureau\\PiDevWeb2.33\\templates\\acceuilclient\\index.html.twig");
    }
}
