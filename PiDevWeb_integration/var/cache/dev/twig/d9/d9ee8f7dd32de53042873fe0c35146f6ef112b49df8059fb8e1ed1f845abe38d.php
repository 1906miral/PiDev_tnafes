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

/* pub.html.twig */
class __TwigTemplate_c806aca022569cb56a9770e9a0550501d877838da983935265ce8c956068a48c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'Posts' => [$this, 'block_Posts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pub.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pub.html.twig"));

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
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/colorbox/colorbox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/blog_styles.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/blog_responsive.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/easing/easing.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
</head>

<body>

";
        // line 29
        $this->loadTemplate("navbar.html.twig", "pub.html.twig", 29)->display($context);
        // line 30
        echo "

<div class=\"menu trans_500\">
    <div class=\"menu_content d-flex flex-column align-items-center justify-content-center text-center\">
        <div class=\"menu_close_container\"><div class=\"menu_close\"></div></div>
        <div class=\"logo menu_logo\"><a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_index2");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/123.png"), "html", null, true);
        echo "\" alt=\"\"></a></div>
        <ul>
            <li class=\"menu_item\"><a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_index2");
        echo "\">Acceuil</a></li>
            <li class=\"menu_item\"><a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_new");
        echo "\">Reclamations</a></li>
            <li class=\"menu_item\"><a href=\"Evenements.html.twig\">Evenements</a></li>
            <li class=\"menu_item\"><a href=\"Rendez-vous.html.twig\">Rendez-vous</a></li>
            <li class=\"menu_item\"><a href=\"Articles.html.twig\">Articles</a></li>
        </ul>
    </div>
</div>

    <!-- Home -->

    <div class=\"home\">
        <div class=\"home_background parallax-window\" data-parallax=\"scroll\"><img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/meditation.jpg"), "html", null, true);
        echo "\"></div>
        <div class=\"home_slider_content text-center\">
            <div class=\"home_slider_content_inner\" data-animation-in=\"flipInX\" data-animation-out=\"animate-out fadeOut\">
                <h1>votre </h1>
                <h1> calme avec Tnafes</h1>

            </div>
        </div>
    </div>

    <!-- Blog -->
";
        // line 60
        $this->displayBlock('Posts', $context, $blocks);
        // line 63
        echo "

</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 60
    public function block_Posts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Posts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Posts"));

        // line 61
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 61,  186 => 60,  172 => 63,  170 => 60,  156 => 49,  142 => 38,  138 => 37,  131 => 35,  124 => 30,  122 => 29,  114 => 24,  110 => 23,  106 => 22,  102 => 21,  98 => 20,  94 => 19,  90 => 18,  86 => 17,  82 => 16,  78 => 15,  74 => 14,  70 => 13,  66 => 12,  62 => 11,  58 => 10,  54 => 9,  44 => 1,);
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
    <link href=\"{{ asset('plugins/colorbox/colorbox.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/blog_styles.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/blog_responsive.css') }}\">
    <script src=\"{{ asset('js/jquery-3.2.1.min.js') }}\"></script>
    <script src=\"{{ asset('styles/bootstrap4/popper.js') }}\"></script>
    <script src=\"{{ asset('styles/bootstrap4/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}\"></script>
    <script src=\"{{ asset('plugins/easing/easing.js') }}\"></script>
    <script src=\"{{ asset('js/custom.js') }}\"></script>
</head>

<body>

{% include 'navbar.html.twig' %}


<div class=\"menu trans_500\">
    <div class=\"menu_content d-flex flex-column align-items-center justify-content-center text-center\">
        <div class=\"menu_close_container\"><div class=\"menu_close\"></div></div>
        <div class=\"logo menu_logo\"><a href=\"{{ path('publication_index2') }}\"><img src=\"{{ asset('images/123.png') }}\" alt=\"\"></a></div>
        <ul>
            <li class=\"menu_item\"><a href=\"{{ path('publication_index2') }}\">Acceuil</a></li>
            <li class=\"menu_item\"><a href=\"{{ path('reclamation_new') }}\">Reclamations</a></li>
            <li class=\"menu_item\"><a href=\"Evenements.html.twig\">Evenements</a></li>
            <li class=\"menu_item\"><a href=\"Rendez-vous.html.twig\">Rendez-vous</a></li>
            <li class=\"menu_item\"><a href=\"Articles.html.twig\">Articles</a></li>
        </ul>
    </div>
</div>

    <!-- Home -->

    <div class=\"home\">
        <div class=\"home_background parallax-window\" data-parallax=\"scroll\"><img src=\"{{ asset('/images/meditation.jpg') }}\"></div>
        <div class=\"home_slider_content text-center\">
            <div class=\"home_slider_content_inner\" data-animation-in=\"flipInX\" data-animation-out=\"animate-out fadeOut\">
                <h1>votre </h1>
                <h1> calme avec Tnafes</h1>

            </div>
        </div>
    </div>

    <!-- Blog -->
{% block Posts %}

{% endblock %}


</body>

</html>", "pub.html.twig", "C:\\Users\\miral\\OneDrive\\Bureau\\PiDevWeb2.33\\templates\\pub.html.twig");
    }
}
