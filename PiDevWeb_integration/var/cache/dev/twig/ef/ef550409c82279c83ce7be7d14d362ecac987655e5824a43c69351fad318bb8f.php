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

/* basedisplay.html.twig */
class __TwigTemplate_808570f78fd3dd18042765ced098525ba8fc6f9859ca30191f834c31eb346784 extends Template
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
            'titre' => [$this, 'block_titre'],
            'table' => [$this, 'block_table'],
            'pagination' => [$this, 'block_pagination'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basedisplay.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basedisplay.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
    <meta name=\"description\" content=\"\"/>
    <meta name=\"author\" content=\"\"/>
    <title>Tnafes-admin</title>
    <!-- loader-->

    <!--favicon-->
    <link rel=\"icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
    <!-- Vector CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/vectormap/jquery-jvectormap-2.0.2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <!-- simplebar CSS-->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/simplebar/css/simplebar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <!-- Bootstrap core CSS-->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <!-- animate CSS-->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- Icons CSS-->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- Sidebar CSS-->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/sidebar-menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <!-- Custom Style-->
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/app-style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css\" integrity=\"sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==\" crossorigin=\"anonymous\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/css/flashy.css"), "html", null, true);
        echo "\">
    <link href=\"//fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet'>
</head>

<body class=\"bg-theme bg-theme1\">

<!-- Start wrapper-->
<div id=\"wrapper\">

    <!--Start sidebar-wrapper-->
    <div id=\"sidebar-wrapper\" data-simplebar=\"\" data-simplebar-auto-hide=\"true\">
        <div class=\"brand-logo\">
            <a href=\"index.html\">
                <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" class=\"logo-icon\">
                <h5 class=\"logo-text\">Tnafes</h5>
            </a>
        </div>
        <ul class=\"sidebar-menu do-nicescrol\">
            <li class=\"sidebar-header\">Menu </li>
            <li>
                <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stats");
        echo "\">
                    <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/home.png"), "html", null, true);
        echo "\" width=\"20\" height=\"20\" class=\"logo-icon\">
                    </i> <span>Acceuil</span>
                </a>
            </li>

            <li>
                <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutclient");
        echo "\">
                    <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user.png"), "html", null, true);
        echo "\" width=\"20\" height=\"20\" class=\"logo-icon\">
                    </i> <span>Ajout client</span>
                </a>
            </li>


            <li>
                <a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutcoach");
        echo "\">
                    <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/coach.png"), "html", null, true);
        echo "\" width=\"20\" height=\"20\" class=\"logo-icon\">
                    </i> <span>Ajout coach</span>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affichagecoachclient");
        echo "\">
                    <i class=\"zmdi zmdi-grid\"></i> <span>Tables coach/client</span>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_index");
        echo "\">
                    <img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/reclamation.png"), "html", null, true);
        echo "\" width=\"20\" height=\"20\" class=\"logo-icon\">
                    </i> <span>Reclamation</span>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_index");
        echo "\">
                    <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/subject.png"), "html", null, true);
        echo "\"width=\"20\" height=\"20\" class=\"logo-icon\">
                    </i> <span>Publication</span>
                </a>
            </li>

            <li>
                <a href=\"categorie.html\">
                    <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/category.png"), "html", null, true);
        echo "\" width=\"20\" height=\"20\" class=\"logo-icon\">
                    </i> <span>Catégorie</span>
                </a>
            </li>

            <li>
                <a href=\"activite.html\">
                    <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/puzzle.png"), "html", null, true);
        echo "\" width=\"20\" height=\"20\" class=\"logo-icon\">
                    </i> <span>Activité</span>
                </a>
            </li>
            <li>
                <a href=\"article.html\">
                    <img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/publication.png"), "html", null, true);
        echo "\"width=\"20\" height=\"20\"  class=\"logo-icon\">
                    </i> <span>Article</span>
                </a>
            </li>
            <li>
                <a href=\"categorieevent.html\">
                    <img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/category.png"), "html", null, true);
        echo "\" width=\"20\" height=\"20\" class=\"logo-icon\">
                    </i> <span>Catégorie évenement</span>
                </a>
            </li>
            <li>
                <a href=\"event.html\">
                    <img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/event.png"), "html", null, true);
        echo "\"width=\"20\" height=\"20\"  class=\"logo-icon\">
                    </i> <span>Evenement</span>
                </a>
            </li>
            <li>
                <a href=\"abonnement.html\">
                    <img src=\"";
        // line 122
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
        // line 146
        $this->displayBlock('search', $context, $blocks);
        // line 150
        echo "                    </form>
                </li>
            </ul>

            <ul class=\"navbar-nav align-items-center right-nav-link\">

                <li class=\"nav-item\">
                    <a class=\"nav-link dropdown-toggle dropdown-toggle-nocaret\" data-toggle=\"dropdown\" href=\"#\">
                        <span class=\"user-profile\"><img src=\"https://via.placeholder.com/110x110\" class=\"img-circle\" alt=\"user avatar\"></span>
                    </a>
                    ";
        // line 160
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 160, $this->source); })()), "user", [], "any", false, false, false, 160)) {
            // line 161
            echo "                        <ul class=\"dropdown-menu dropdown-menu-right\">
                            <li class=\"dropdown-item user-details\">
                                <a href=\"javaScript:void();\">
                                    <div class=\"media\">
                                        <div class=\"avatar\"><img class=\"align-self-start mr-3\" src=\"https://via.placeholder.com/110x110\" alt=\"user avatar\"></div>
                                        <div class=\"media-body\">
                                            <div class=\"user-subtitle\">";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 167, $this->source); })()), "user", [], "any", false, false, false, 167), "nom", [], "any", false, false, false, 167), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 167, $this->source); })()), "user", [], "any", false, false, false, 167), "prenom", [], "any", false, false, false, 167), "html", null, true);
            echo "</div>
                                            <div class=\"user-subtitle\">";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 168, $this->source); })()), "user", [], "any", false, false, false, 168), "email", [], "any", false, false, false, 168), "html", null, true);
            echo "</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"dropdown-divider\"></li>
                            <li class=\"dropdown-item\"><i class=\"icon-settings mr-2\"></i> <a href=\"";
            // line 174
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updatecurrentuserdata");
            echo "\">Changer mes informations</a></li>
                            <li class=\"dropdown-divider\"></li>
                            <li class=\"dropdown-item\"><i class=\"icon-power mr-2\"></i> <a href=\"";
            // line 176
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Se deconnecter</a></li>
                        </ul>
                    ";
        }
        // line 179
        echo "                </li>
            </ul>
        </nav>
    </header>
    <!--End topbar header-->



    <div class=\"content-wrapper\">
        <div class=\"container-fluid\">

            <!--Start Dashboard Content-->

            <div class=\"row\">
                <div class=\"col-12 col-lg-12\">
                    <div class=\"card\">

                        <div class=\"card-header\"><!--titre mtaa tableau wala elli thebou aalih-->
                            ";
        // line 197
        $this->displayBlock('titre', $context, $blocks);
        // line 200
        echo "                        </div>

                        <div class=\"table-responsive\">
                            <!--tableau badlouh kima thebou kol wehed kifech iheb yaffichi-->
                            ";
        // line 204
        $this->displayBlock('table', $context, $blocks);
        // line 207
        echo "                        </div>

                    </div>
                    ";
        // line 210
        $this->displayBlock('pagination', $context, $blocks);
        // line 211
        echo "                </div>
            </div><!--End Row-->

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
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- simplebar js -->
<script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/simplebar/js/simplebar.js"), "html", null, true);
        echo "\"></script>
<!-- sidebar-menu js -->
<script src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/sidebar-menu.js"), "html", null, true);
        echo "\"></script>
<!-- loader scripts -->

<!-- Custom scripts -->
<script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app-script.js"), "html", null, true);
        echo "\"></script>
<!-- Chart js -->

<script src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/Chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>

<!-- Index js -->
<script src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/index.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
<!-- Flashy depends on jQuery -->
<script src=\"//code.jquery.com/jquery.js\"></script>
<!-- Load Flashy default JavaScript -->
<script src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/js/flashy.js"), "html", null, true);
        echo "\"></script>
<!-- Include Flashy default partial -->
";
        // line 293
        echo twig_include($this->env, $context, "@MercurySeriesFlashy/flashy.html.twig");
        echo "

</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 146
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        // line 147
        echo "                            <input type=\"text\" class=\"form-control\" placeholder=\"Recherche\" id=\"search\">

                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 197
    public function block_titre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        // line 198
        echo "
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 204
    public function block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        // line 205
        echo "
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 210
    public function block_pagination($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pagination"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pagination"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "basedisplay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  552 => 210,  541 => 205,  531 => 204,  520 => 198,  510 => 197,  498 => 147,  488 => 146,  473 => 293,  468 => 291,  460 => 286,  454 => 283,  448 => 280,  441 => 276,  436 => 274,  430 => 271,  426 => 270,  422 => 269,  362 => 211,  360 => 210,  355 => 207,  353 => 204,  347 => 200,  345 => 197,  325 => 179,  319 => 176,  314 => 174,  305 => 168,  299 => 167,  291 => 161,  289 => 160,  277 => 150,  275 => 146,  248 => 122,  239 => 116,  230 => 110,  221 => 104,  212 => 98,  202 => 91,  192 => 84,  188 => 83,  180 => 78,  176 => 77,  168 => 72,  160 => 67,  156 => 66,  146 => 59,  142 => 58,  133 => 52,  129 => 51,  119 => 44,  102 => 30,  96 => 27,  91 => 25,  86 => 23,  81 => 21,  76 => 19,  71 => 17,  66 => 15,  61 => 13,  47 => 1,);
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
    <title>Tnafes-admin</title>
    <!-- loader-->

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

    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css\" integrity=\"sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==\" crossorigin=\"anonymous\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/mercuryseriesflashy/css/flashy.css') }}\">
    <link href=\"//fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet'>
</head>

<body class=\"bg-theme bg-theme1\">

<!-- Start wrapper-->
<div id=\"wrapper\">

    <!--Start sidebar-wrapper-->
    <div id=\"sidebar-wrapper\" data-simplebar=\"\" data-simplebar-auto-hide=\"true\">
        <div class=\"brand-logo\">
            <a href=\"index.html\">
                <img src=\"{{ asset('assets/images/logo.png') }}\" class=\"logo-icon\">
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
                        {% block search%}
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

            <div class=\"row\">
                <div class=\"col-12 col-lg-12\">
                    <div class=\"card\">

                        <div class=\"card-header\"><!--titre mtaa tableau wala elli thebou aalih-->
                            {% block titre %}

                            {% endblock %}
                        </div>

                        <div class=\"table-responsive\">
                            <!--tableau badlouh kima thebou kol wehed kifech iheb yaffichi-->
                            {% block table %}

                            {% endblock %}
                        </div>

                    </div>
                    {% block pagination %}{% endblock %}
                </div>
            </div><!--End Row-->

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

<!-- Custom scripts -->
<script src=\"{{ asset('assets/js/app-script.js') }}\"></script>
<!-- Chart js -->

<script src=\"{{ asset('assets/plugins/Chart.js/Chart.min.js') }}\"></script>

<!-- Index js -->
<script src=\"{{ asset('assets/js/index.js') }}\"></script>
<script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
<!-- Flashy depends on jQuery -->
<script src=\"//code.jquery.com/jquery.js\"></script>
<!-- Load Flashy default JavaScript -->
<script src=\"{{ asset('bundles/mercuryseriesflashy/js/flashy.js') }}\"></script>
<!-- Include Flashy default partial -->
{{ include('@MercurySeriesFlashy/flashy.html.twig') }}

</body>
</html>
", "basedisplay.html.twig", "C:\\Users\\miral\\OneDrive\\Bureau\\PiDevWeb2.33\\templates\\basedisplay.html.twig");
    }
}
