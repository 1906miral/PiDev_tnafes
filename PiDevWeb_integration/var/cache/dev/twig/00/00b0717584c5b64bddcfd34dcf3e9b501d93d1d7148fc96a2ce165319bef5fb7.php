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

/* baseadd.html.twig */
class __TwigTemplate_8612d4cc8c560fb5f54c6f680e7d66818abfaf470a81bc8345e1cbaca4ab9899 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'search' => [$this, 'block_search'],
            'titreForm' => [$this, 'block_titreForm'],
            'addForm' => [$this, 'block_addForm'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseadd.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseadd.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
    <meta name=\"description\" content=\"\"/>
    <meta name=\"author\" content=\"\"/>
    <title>Tnafes-Admin</title>
    <!-- loader-->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/pace.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pace.min.js"), "html", null, true);
        echo "\"></script>
    <!--favicon-->
    <link rel=\"icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
    <!-- Vector CSS -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/vectormap/jquery-jvectormap-2.0.2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <!-- simplebar CSS-->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/simplebar/css/simplebar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <!-- Bootstrap core CSS-->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <!-- animate CSS-->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- Icons CSS-->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- Sidebar CSS-->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/sidebar-menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <!-- Custom Style-->
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/app-style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

</head>

<body class=\"bg-theme bg-theme1\">

<!-- Start wrapper-->
<div id=\"wrapper\">

    <!--Start sidebar-wrapper-->
    <div id=\"sidebar-wrapper\" data-simplebar=\"\" data-simplebar-auto-hide=\"true\">
        <div class=\"brand-logo\">
            <a href=\"index.html\">
                <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" width=\"20\" height=\"20\" class=\"logo-icon\">
                <h5 class=\"logo-text\">Tnafes</h5>
            </a>
        </div>
        <ul class=\"sidebar-menu do-nicescrol\">
            <li class=\"sidebar-header\">Menu </li>
            <li>
                <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stats");
        echo "\">
                    <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/home.png"), "html", null, true);
        echo "\" width=\"20\" height=\"20\" class=\"logo-icon\">
                    </i> <span>Acceuil</span>
                </a>
            </li>

            <li>
                <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutclient");
        echo "\">
                    <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user.png"), "html", null, true);
        echo "\" width=\"20\" height=\"20\" class=\"logo-icon\">
                    </i> <span>Ajout client</span>
                </a>
            </li>


            <li>
                <a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutcoach");
        echo "\">
                    <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/coach.png"), "html", null, true);
        echo "\" width=\"20\" height=\"20\" class=\"logo-icon\">
                    </i> <span>Ajout coach</span>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affichagecoachclient");
        echo "\">
                    <i class=\"zmdi zmdi-grid\"></i> <span>Tables coach/client</span>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_index");
        echo "\">
                    <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/reclamation.png"), "html", null, true);
        echo "\" width=\"20\" height=\"20\" class=\"logo-icon\">
                    </i> <span>Reclamation</span>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_index");
        echo "\">
                    <img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/subject.png"), "html", null, true);
        echo "\"width=\"20\" height=\"20\" class=\"logo-icon\">
                    </i> <span>Publication</span>
                </a>
            </li>

            <li>
                <a href=\"categorie.html\">
                    <img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/category.png"), "html", null, true);
        echo "\" width=\"20\" height=\"20\" class=\"logo-icon\">
                    </i> <span>Catégorie</span>
                </a>
            </li>

            <li>
                <a href=\"activite.html\">
                    <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/puzzle.png"), "html", null, true);
        echo "\" width=\"20\" height=\"20\" class=\"logo-icon\">
                    </i> <span>Activité</span>
                </a>
            </li>
            <li>
                <a href=\"article.html\">
                    <img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/publication.png"), "html", null, true);
        echo "\"width=\"20\" height=\"20\"  class=\"logo-icon\">
                    </i> <span>Article</span>
                </a>
            </li>
            <li>
                <a href=\"categorieevent.html\">
                    <img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/category.png"), "html", null, true);
        echo "\" width=\"20\" height=\"20\" class=\"logo-icon\">
                    </i> <span>Catégorie évenement</span>
                </a>
            </li>
            <li>
                <a href=\"event.html\">
                    <img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/event.png"), "html", null, true);
        echo "\"width=\"20\" height=\"20\"  class=\"logo-icon\">
                    </i> <span>Evenement</span>
                </a>
            </li>
            <li>
                <a href=\"abonnement.html\">
                    <img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/abonnement.png"), "html", null, true);
        echo "\" width=\"20\" height=\"20\" class=\"logo-icon\">
                    </i> <span>Abonnement</span>
                </a>
            </li>




        </ul>

    </div>
    <!--End sidebar-wrapper-->

    <!--Start topbar header-->
    <header class=\"topbar-nav\">
        <nav class=\"navbar navbar-expand fixed-top\">
            <ul class=\"navbar-nav mr-auto align-items-center\">
                <li class=\"nav-item\">
                    <a class=\"nav-link toggle-menu\" >
                        <i class=\"icon-menu menu-icon\"></i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <form class=\"search-bar\">
                        ";
        // line 143
        $this->displayBlock('search', $context, $blocks);
        // line 146
        echo "                    </form>
                </li>
            </ul>

            <ul class=\"navbar-nav align-items-center right-nav-link\">

                <li class=\"nav-item\">
                    <a class=\"nav-link dropdown-toggle dropdown-toggle-nocaret\" data-toggle=\"dropdown\" href=\"#\">
                        <span class=\"user-profile\"><img src=\"https://via.placeholder.com/110x110\" class=\"img-circle\" alt=\"user avatar\"></span>
                    </a>
                    ";
        // line 156
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 156, $this->source); })()), "user", [], "any", false, false, false, 156)) {
            // line 157
            echo "                        <ul class=\"dropdown-menu dropdown-menu-right\">
                            <li class=\"dropdown-item user-details\">
                                <a href=\"javaScript:void();\">
                                    <div class=\"media\">
                                        <div class=\"avatar\"><img class=\"align-self-start mr-3\" src=\"https://via.placeholder.com/110x110\" alt=\"user avatar\"></div>
                                        <div class=\"media-body\">
                                            <div class=\"user-subtitle\">";
            // line 163
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 163, $this->source); })()), "user", [], "any", false, false, false, 163), "nom", [], "any", false, false, false, 163), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 163, $this->source); })()), "user", [], "any", false, false, false, 163), "prenom", [], "any", false, false, false, 163), "html", null, true);
            echo "</div>
                                            <div class=\"user-subtitle\">";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 164, $this->source); })()), "user", [], "any", false, false, false, 164), "email", [], "any", false, false, false, 164), "html", null, true);
            echo "</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"dropdown-divider\"></li>
                            <li class=\"dropdown-item\"><i class=\"icon-settings mr-2\"></i> <a href=\"";
            // line 170
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updatecurrentuserdata");
            echo "\">Changer mes informations</a></li>
                            <li class=\"dropdown-divider\"></li>
                            <li class=\"dropdown-item\"><i class=\"icon-power mr-2\"></i> <a href=\"";
            // line 172
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Se deconnecter</a></li>
                        </ul>
                    ";
        }
        // line 175
        echo "                </li>
            </ul>
        </nav>
    </header>
    <!--End topbar header-->



    <div class=\"content-wrapper\">
        <div class=\"container-fluid\">

            <!--Start Dashboard Content-->
            <div class=\"content-wrapper\">
                <div class=\"container-fluid\">

                    <div class=\"row mt-3\">
                        <div class=\"col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"card-title\">";
        // line 194
        $this->displayBlock('titreForm', $context, $blocks);
        echo "</div>
                                    <hr>
                                    <!--<form name=\"publication\" method=\"post\" enctype=\"multipart/form-data\">-->
                                     ";
        // line 197
        $this->displayBlock('addForm', $context, $blocks);
        // line 200
        echo "                                    <!--</form>-->
                                </div>
                            </div>
                        </div>

                    </div><!--End Row-->

                    <!--start overlay-->
                    <div class=\"overlay toggle-menu\"></div>
                    <!--end overlay-->

                </div>
                <!-- End container-fluid-->

            </div>

            <!--End Dashboard Content-->

            <!--start overlay-->
            <div class=\"overlay toggle-menu\"></div>
            <!--end overlay-->

        </div>
        <!-- End container-fluid-->

    </div><!--End content-wrapper-->




    <!--start color switcher-->
    <div class=\"right-sidebar\">
        <div class=\"switcher-icon\">
            <i class=\"zmdi zmdi-settings zmdi-hc-spin\"></i>
        </div>
        <div class=\"right-sidebar-content\">

            <p class=\"mb-0\">Gaussion Texture</p>
            <hr>

            <ul class=\"switcher\">
                <li id=\"theme1\"></li>
                <li id=\"theme2\"></li>
                <li id=\"theme3\"></li>
                <li id=\"theme4\"></li>
                <li id=\"theme5\"></li>
                <li id=\"theme6\"></li>
            </ul>

            <p class=\"mb-0\">Gradient Background</p>
            <hr>

            <ul class=\"switcher\">
                <li id=\"theme7\"></li>
                <li id=\"theme8\"></li>
                <li id=\"theme9\"></li>
                <li id=\"theme10\"></li>
                <li id=\"theme11\"></li>
                <li id=\"theme12\"></li>
                <li id=\"theme13\"></li>
                <li id=\"theme14\"></li>
                <li id=\"theme15\"></li>
            </ul>

        </div>
    </div>
    <!--end color switcher-->

</div><!--End wrapper-->

<!-- Bootstrap core JavaScript-->
<script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- simplebar js -->
<script src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/simplebar/js/simplebar.js"), "html", null, true);
        echo "\"></script>
<!-- sidebar-menu js -->
<script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/sidebar-menu.js"), "html", null, true);
        echo "\"></script>
<!-- loader scripts -->
<script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.loading-indicator.js"), "html", null, true);
        echo "\"></script>
<!-- Custom scripts -->
<script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app-script.js"), "html", null, true);
        echo "\"></script>
<!-- Chart js -->

<script src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/Chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>

<!-- Index js -->
<script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/index.js"), "html", null, true);
        echo "\"></script>


</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 143
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        // line 144
        echo "                        <input type=\"text\" class=\"form-control\" placeholder=\"Recherche\" id=\"search\">
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 194
    public function block_titreForm($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titreForm"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titreForm"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 197
    public function block_addForm($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addForm"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addForm"));

        // line 198
        echo "
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseadd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  532 => 198,  522 => 197,  504 => 194,  493 => 144,  483 => 143,  467 => 288,  461 => 285,  455 => 282,  450 => 280,  445 => 278,  440 => 276,  434 => 273,  430 => 272,  426 => 271,  353 => 200,  351 => 197,  345 => 194,  324 => 175,  318 => 172,  313 => 170,  304 => 164,  298 => 163,  290 => 157,  288 => 156,  276 => 146,  274 => 143,  247 => 119,  238 => 113,  229 => 107,  220 => 101,  211 => 95,  201 => 88,  191 => 81,  187 => 80,  179 => 75,  175 => 74,  167 => 69,  159 => 64,  155 => 63,  145 => 56,  141 => 55,  132 => 49,  128 => 48,  118 => 41,  102 => 28,  97 => 26,  92 => 24,  87 => 22,  82 => 20,  77 => 18,  72 => 16,  67 => 14,  62 => 12,  58 => 11,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
    <meta name=\"description\" content=\"\"/>
    <meta name=\"author\" content=\"\"/>
    <title>Tnafes-Admin</title>
    <!-- loader-->
    <link href=\"{{ asset('assets/css/pace.min.css') }}\" rel=\"stylesheet\"/>
    <script src=\"{{ asset('assets/js/pace.min.js') }}\"></script>
    <!--favicon-->
    <link rel=\"icon\" href=\"{{ asset('assets/images/favicon.ico') }}\" type=\"image/x-icon\">
    <!-- Vector CSS -->
    <link href=\"{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}\" rel=\"stylesheet\"/>
    <!-- simplebar CSS-->
    <link href=\"{{ asset('assets/plugins/simplebar/css/simplebar.css') }}\" rel=\"stylesheet\"/>
    <!-- Bootstrap core CSS-->
    <link href=\"{{ asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\"/>
    <!-- animate CSS-->
    <link href=\"{{ asset('assets/css/animate.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- Icons CSS-->
    <link href=\"{{ asset('assets/css/icons.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- Sidebar CSS-->
    <link href=\"{{ asset('assets/css/sidebar-menu.css') }}\" rel=\"stylesheet\"/>
    <!-- Custom Style-->
    <link href=\"{{ asset('assets/css/app-style.css') }}\" rel=\"stylesheet\"/>

</head>

<body class=\"bg-theme bg-theme1\">

<!-- Start wrapper-->
<div id=\"wrapper\">

    <!--Start sidebar-wrapper-->
    <div id=\"sidebar-wrapper\" data-simplebar=\"\" data-simplebar-auto-hide=\"true\">
        <div class=\"brand-logo\">
            <a href=\"index.html\">
                <img src=\"{{ asset('assets/images/logo.png') }}\" width=\"20\" height=\"20\" class=\"logo-icon\">
                <h5 class=\"logo-text\">Tnafes</h5>
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

    </div>
    <!--End sidebar-wrapper-->

    <!--Start topbar header-->
    <header class=\"topbar-nav\">
        <nav class=\"navbar navbar-expand fixed-top\">
            <ul class=\"navbar-nav mr-auto align-items-center\">
                <li class=\"nav-item\">
                    <a class=\"nav-link toggle-menu\" >
                        <i class=\"icon-menu menu-icon\"></i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <form class=\"search-bar\">
                        {% block search %}
                        <input type=\"text\" class=\"form-control\" placeholder=\"Recherche\" id=\"search\">
                        {% endblock %}
                    </form>
                </li>
            </ul>

            <ul class=\"navbar-nav align-items-center right-nav-link\">

                <li class=\"nav-item\">
                    <a class=\"nav-link dropdown-toggle dropdown-toggle-nocaret\" data-toggle=\"dropdown\" href=\"#\">
                        <span class=\"user-profile\"><img src=\"https://via.placeholder.com/110x110\" class=\"img-circle\" alt=\"user avatar\"></span>
                    </a>
                    {% if app.user %}
                        <ul class=\"dropdown-menu dropdown-menu-right\">
                            <li class=\"dropdown-item user-details\">
                                <a href=\"javaScript:void();\">
                                    <div class=\"media\">
                                        <div class=\"avatar\"><img class=\"align-self-start mr-3\" src=\"https://via.placeholder.com/110x110\" alt=\"user avatar\"></div>
                                        <div class=\"media-body\">
                                            <div class=\"user-subtitle\">{{ app.user.nom }} {{ app.user.prenom }}</div>
                                            <div class=\"user-subtitle\">{{ app.user.email }}</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"dropdown-divider\"></li>
                            <li class=\"dropdown-item\"><i class=\"icon-settings mr-2\"></i> <a href=\"{{ path('updatecurrentuserdata') }}\">Changer mes informations</a></li>
                            <li class=\"dropdown-divider\"></li>
                            <li class=\"dropdown-item\"><i class=\"icon-power mr-2\"></i> <a href=\"{{ path('app_logout') }}\">Se deconnecter</a></li>
                        </ul>
                    {% endif %}
                </li>
            </ul>
        </nav>
    </header>
    <!--End topbar header-->



    <div class=\"content-wrapper\">
        <div class=\"container-fluid\">

            <!--Start Dashboard Content-->
            <div class=\"content-wrapper\">
                <div class=\"container-fluid\">

                    <div class=\"row mt-3\">
                        <div class=\"col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"card-title\">{% block titreForm %}{% endblock %}</div>
                                    <hr>
                                    <!--<form name=\"publication\" method=\"post\" enctype=\"multipart/form-data\">-->
                                     {% block addForm %}

                                        {% endblock %}
                                    <!--</form>-->
                                </div>
                            </div>
                        </div>

                    </div><!--End Row-->

                    <!--start overlay-->
                    <div class=\"overlay toggle-menu\"></div>
                    <!--end overlay-->

                </div>
                <!-- End container-fluid-->

            </div>

            <!--End Dashboard Content-->

            <!--start overlay-->
            <div class=\"overlay toggle-menu\"></div>
            <!--end overlay-->

        </div>
        <!-- End container-fluid-->

    </div><!--End content-wrapper-->




    <!--start color switcher-->
    <div class=\"right-sidebar\">
        <div class=\"switcher-icon\">
            <i class=\"zmdi zmdi-settings zmdi-hc-spin\"></i>
        </div>
        <div class=\"right-sidebar-content\">

            <p class=\"mb-0\">Gaussion Texture</p>
            <hr>

            <ul class=\"switcher\">
                <li id=\"theme1\"></li>
                <li id=\"theme2\"></li>
                <li id=\"theme3\"></li>
                <li id=\"theme4\"></li>
                <li id=\"theme5\"></li>
                <li id=\"theme6\"></li>
            </ul>

            <p class=\"mb-0\">Gradient Background</p>
            <hr>

            <ul class=\"switcher\">
                <li id=\"theme7\"></li>
                <li id=\"theme8\"></li>
                <li id=\"theme9\"></li>
                <li id=\"theme10\"></li>
                <li id=\"theme11\"></li>
                <li id=\"theme12\"></li>
                <li id=\"theme13\"></li>
                <li id=\"theme14\"></li>
                <li id=\"theme15\"></li>
            </ul>

        </div>
    </div>
    <!--end color switcher-->

</div><!--End wrapper-->

<!-- Bootstrap core JavaScript-->
<script src=\"{{ asset('assets/js/jquery.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/popper.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script>

<!-- simplebar js -->
<script src=\"{{ asset('assets/plugins/simplebar/js/simplebar.js') }}\"></script>
<!-- sidebar-menu js -->
<script src=\"{{ asset('assets/js/sidebar-menu.js') }}\"></script>
<!-- loader scripts -->
<script src=\"{{ asset('assets/js/jquery.loading-indicator.js') }}\"></script>
<!-- Custom scripts -->
<script src=\"{{ asset('assets/js/app-script.js') }}\"></script>
<!-- Chart js -->

<script src=\"{{ asset('assets/plugins/Chart.js/Chart.min.js') }}\"></script>

<!-- Index js -->
<script src=\"{{ asset('assets/js/index.js') }}\"></script>


</body>
</html>
", "baseadd.html.twig", "C:\\Users\\miral\\OneDrive\\Bureau\\PiDevWeb2.33\\templates\\baseadd.html.twig");
    }
}
