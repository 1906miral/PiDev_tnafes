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

/* formulaireReclam.html.twig */
class __TwigTemplate_ad0355f75a33ab5db15ed03505bfdea5d81366f488366a0bb2006a14615bdf10 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'formReclam' => [$this, 'block_formReclam'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formulaireReclam.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formulaireReclam.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
<title>Reclamations</title>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"description\" content=\"Travelix Project\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bootstrap4/bootstrap.min.css"), "html", null, true);
        echo "\">
\t<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.theme.default.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/animate.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/main_styles.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/responsive.css"), "html", null, true);
        echo "\">
</head>

<body>
";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 163
        echo "</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "<div class=\"super_container\">
\t
\t<!-- Header -->



\t\t<!-- Main Navigation -->
\t";
        // line 27
        $this->loadTemplate("navbar.html.twig", "formulaireReclam.html.twig", 27)->display($context);
        // line 28
        echo "


\t<div class=\"menu trans_500\">
\t\t<div class=\"menu_content d-flex flex-column align-items-center justify-content-center text-center\">
\t\t\t<div class=\"menu_close_container\"><div class=\"menu_close\"></div></div>
\t\t\t<div class=\"logo menu_logo\"><a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_index2");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/123.png"), "html", null, true);
        echo "\"></a></div>
\t\t\t<ul>
\t\t\t\t\t<li class=\"menu_item\"><a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_index2");
        echo "\">Acceuil</a></li>
\t\t\t\t<li class=\"menu_item\"><a href=\"Articles.html.twig\">Articles</a></li>
\t\t\t\t<li class=\"menu_item\"><a href=\"Evenements.html.twig\">Evenements</a></li>
\t\t\t\t<li class=\"menu_item\"><a href=\"Rendez-vous.html.twig\">Rendez-vous</a></li>
\t\t\t\t<li class=\"menu_item\"><a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_new");
        echo "\">Reclamations</a></li>
\t\t\t</ul>
\t\t</div>
\t</div>

\t<!-- Home -->

\t<div class=\"home\">
\t\t<div class=\"home_background parallax-window\" data-parallax=\"scroll\"><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/images/meditation.jpg"), "html", null, true);
        echo "\">
\t\t\t<div class=\"home_slider_content text-center\">
\t\t\t\t<div class=\"home_slider_content_inner\" data-animation-in=\"flipInX\" data-animation-out=\"animate-out fadeOut\">
\t\t\t\t\t<h1>votre </h1>
\t\t\t\t\t<h1> calme avec Tnafes</h1>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Contact -->

\t<div class=\"contact_form_section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">

\t\t\t\t\t<!-- Contact Form -->
\t\t\t\t\t<div class=\"contact_form_container\">
\t\t\t\t\t\t<div class=\"contact_title text-center\">Envoyer une réclamation</div>

\t\t\t\t\t\t\t";
        // line 70
        $this->displayBlock('formReclam', $context, $blocks);
        // line 72
        echo "
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- About -->
\t<div class=\"about\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-5\">

\t\t\t\t\t<!-- About - Image -->
\t\t\t\t\t<div>
\t\t\t\t\t\t<img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/yoga.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t
\t\t\t\t\t<!-- About - Content -->

\t\t\t\t\t<div class=\"about_content\">
\t\t\t\t\t\t<div class=\"logo_container about_logo\">
\t\t\t\t\t\t\t<div class=\"logo\"><a href=\"#\"><!--<img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/123.png"), "html", null, true);
        echo "\" alt=\"\">-->Tnafes</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"about_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer eleme ntum orci eu vehicula iaculis consequat nisl. Nunc et suscipit urna pretium.</p>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t
\t\t\t\t\t<!-- About Info -->

\t\t\t\t\t<div class=\"about_info\">
\t\t\t\t\t\t<ul class=\"contact_info_list\">
\t\t\t\t\t\t\t<li class=\"contact_info_item d-flex flex-row\">
\t\t\t\t\t\t\t\t<div><div class=\"contact_info_icon\"><img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder.svg"), "html", null, true);
        echo "\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t<div class=\"contact_info_text\">4127 Raoul Wallenber 45b-c Gibraltar</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"contact_info_item d-flex flex-row\">
\t\t\t\t\t\t\t\t<div><div class=\"contact_info_icon\"><img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/phone-call.svg"), "html", null, true);
        echo "\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t<div class=\"contact_info_text\">2556-808-8613</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"contact_info_item d-flex flex-row\">
\t\t\t\t\t\t\t\t<div><div class=\"contact_info_icon\"><img src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/message.svg"), "html", null, true);
        echo "\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t<div class=\"contact_info_text\"><a href=\"mailto:contactme@gmail.com?Subject=Hello\" target=\"_top\">contactme@gmail.com</a></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"contact_info_item d-flex flex-row\">
\t\t\t\t\t\t\t\t<div><div class=\"contact_info_icon\"><img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/planet-earth.svg"), "html", null, true);
        echo "\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t<div class=\"contact_info_text\"><a href=\"https://colorlib.com\">www.colorlib.com</a></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Google Map -->
\t\t
\t<div class=\"travelix_map\">
\t\t<div id=\"google_map\" class=\"google_map\">
\t\t\t<div class=\"map_container\">
\t\t\t\t<div id=\"map\"></div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Footer -->
\t";
        // line 150
        $this->loadTemplate("footer.html.twig", "formulaireReclam.html.twig", 150)->display($context);
        // line 151
        echo "


</div>

<script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/parallax-js-master/parallax.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA\"></script>
<script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/contact_custom.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 70
    public function block_formReclam($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formReclam"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formReclam"));

        // line 71
        echo "\t\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "formulaireReclam.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 71,  317 => 70,  305 => 161,  300 => 159,  296 => 158,  292 => 157,  288 => 156,  281 => 151,  279 => 150,  253 => 127,  246 => 123,  239 => 119,  232 => 115,  214 => 100,  199 => 88,  181 => 72,  179 => 70,  154 => 48,  143 => 40,  136 => 36,  129 => 34,  121 => 28,  119 => 27,  110 => 20,  100 => 19,  88 => 163,  86 => 19,  79 => 15,  75 => 14,  71 => 13,  67 => 12,  63 => 11,  59 => 10,  55 => 9,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
<title>Reclamations</title>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"description\" content=\"Travelix Project\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/bootstrap4/bootstrap.min.css') }}\">
\t<link href=\"{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/main_styles.css') }}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/responsive.css') }}\">
</head>

<body>
{% block body %}
<div class=\"super_container\">
\t
\t<!-- Header -->



\t\t<!-- Main Navigation -->
\t{% include 'navbar.html.twig' %}



\t<div class=\"menu trans_500\">
\t\t<div class=\"menu_content d-flex flex-column align-items-center justify-content-center text-center\">
\t\t\t<div class=\"menu_close_container\"><div class=\"menu_close\"></div></div>
\t\t\t<div class=\"logo menu_logo\"><a href=\"{{ path('publication_index2') }}\"><img src=\"{{ asset('images/123.png') }}\"></a></div>
\t\t\t<ul>
\t\t\t\t\t<li class=\"menu_item\"><a href=\"{{ path('publication_index2') }}\">Acceuil</a></li>
\t\t\t\t<li class=\"menu_item\"><a href=\"Articles.html.twig\">Articles</a></li>
\t\t\t\t<li class=\"menu_item\"><a href=\"Evenements.html.twig\">Evenements</a></li>
\t\t\t\t<li class=\"menu_item\"><a href=\"Rendez-vous.html.twig\">Rendez-vous</a></li>
\t\t\t\t<li class=\"menu_item\"><a href=\"{{ path('reclamation_new') }}\">Reclamations</a></li>
\t\t\t</ul>
\t\t</div>
\t</div>

\t<!-- Home -->

\t<div class=\"home\">
\t\t<div class=\"home_background parallax-window\" data-parallax=\"scroll\"><img src=\"{{ asset('/images/images/meditation.jpg') }}\">
\t\t\t<div class=\"home_slider_content text-center\">
\t\t\t\t<div class=\"home_slider_content_inner\" data-animation-in=\"flipInX\" data-animation-out=\"animate-out fadeOut\">
\t\t\t\t\t<h1>votre </h1>
\t\t\t\t\t<h1> calme avec Tnafes</h1>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Contact -->

\t<div class=\"contact_form_section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">

\t\t\t\t\t<!-- Contact Form -->
\t\t\t\t\t<div class=\"contact_form_container\">
\t\t\t\t\t\t<div class=\"contact_title text-center\">Envoyer une réclamation</div>

\t\t\t\t\t\t\t{% block formReclam %}
\t\t\t\t\t\t\t{% endblock %}

\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- About -->
\t<div class=\"about\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-5\">

\t\t\t\t\t<!-- About - Image -->
\t\t\t\t\t<div>
\t\t\t\t\t\t<img src=\"{{ asset('images/yoga.png') }}\" alt=\"\">
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t
\t\t\t\t\t<!-- About - Content -->

\t\t\t\t\t<div class=\"about_content\">
\t\t\t\t\t\t<div class=\"logo_container about_logo\">
\t\t\t\t\t\t\t<div class=\"logo\"><a href=\"#\"><!--<img src=\"{{ asset('images/123.png') }}\" alt=\"\">-->Tnafes</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"about_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer eleme ntum orci eu vehicula iaculis consequat nisl. Nunc et suscipit urna pretium.</p>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t
\t\t\t\t\t<!-- About Info -->

\t\t\t\t\t<div class=\"about_info\">
\t\t\t\t\t\t<ul class=\"contact_info_list\">
\t\t\t\t\t\t\t<li class=\"contact_info_item d-flex flex-row\">
\t\t\t\t\t\t\t\t<div><div class=\"contact_info_icon\"><img src=\"{{ asset('images/placeholder.svg') }}\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t<div class=\"contact_info_text\">4127 Raoul Wallenber 45b-c Gibraltar</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"contact_info_item d-flex flex-row\">
\t\t\t\t\t\t\t\t<div><div class=\"contact_info_icon\"><img src=\"{{ asset('images/phone-call.svg') }}\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t<div class=\"contact_info_text\">2556-808-8613</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"contact_info_item d-flex flex-row\">
\t\t\t\t\t\t\t\t<div><div class=\"contact_info_icon\"><img src=\"{{ asset('images/message.svg') }}\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t<div class=\"contact_info_text\"><a href=\"mailto:contactme@gmail.com?Subject=Hello\" target=\"_top\">contactme@gmail.com</a></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"contact_info_item d-flex flex-row\">
\t\t\t\t\t\t\t\t<div><div class=\"contact_info_icon\"><img src=\"{{ asset('images/planet-earth.svg') }}\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t<div class=\"contact_info_text\"><a href=\"https://colorlib.com\">www.colorlib.com</a></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Google Map -->
\t\t
\t<div class=\"travelix_map\">
\t\t<div id=\"google_map\" class=\"google_map\">
\t\t\t<div class=\"map_container\">
\t\t\t\t<div id=\"map\"></div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Footer -->
\t{% include 'footer.html.twig' %}



</div>

<script src=\"{{ asset('js/jquery-3.2.1.min.js') }}\"></script>
<script src=\"{{ asset('styles/bootstrap4/popper.js') }}\"></script>
<script src=\"{{ asset('styles/bootstrap4/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('plugins/parallax-js-master/parallax.min.js') }}\"></script>
<script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA\"></script>
<script src=\"{{ asset('js/contact_custom.js') }}\"></script>
{% endblock %}
</body>

</html>", "formulaireReclam.html.twig", "C:\\Users\\miral\\OneDrive\\Bureau\\PiDevWeb2.33\\templates\\formulaireReclam.html.twig");
    }
}
