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

/* affichagecoachclient.html.twig */
class __TwigTemplate_58cdf02f9356d4c156fd08c09153f8f6cc1bc03742eaa87f759f876aa51396d9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "affichagecoachclient.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "affichagecoachclient.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\"/>
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
  <meta name=\"description\" content=\"\"/>
  <meta name=\"author\" content=\"\"/>
  <title>Tnafes - affichage clients/coachs</title>
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
  <!-- simplebar CSS-->
  <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/simplebar/css/simplebar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
  <!-- Bootstrap core CSS-->
  <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
  <!-- animate CSS-->
  <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
  <!-- Icons CSS-->
  <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
  <!-- Sidebar CSS-->
  <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/sidebar-menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
  <!-- Custom Style-->
  <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/app-style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
  
</head>

<body class=\"bg-theme bg-theme1\">

<!-- start loader -->
   <div id=\"pageloader-overlay\" class=\"visible incoming\"><div class=\"loader-wrapper-outer\"><div class=\"loader-wrapper-inner\" ><div class=\"loader\"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id=\"wrapper\">

  <!--Start sidebar-wrapper-->
\t  ";
        // line 40
        $this->loadTemplate("navbar2.html.twig", "affichagecoachclient.html.twig", 40)->display($context);
        // line 41
        echo "   <!--End sidebar-wrapper-->

<!--Start topbar header-->
      ";
        // line 44
        $this->loadTemplate("topbarheader.html.twig", "affichagecoachclient.html.twig", 44)->display($context);
        // line 45
        echo "<!--End topbar header-->

<div class=\"clearfix\"></div>
\t
  <div class=\"content-wrapper\">
    <div class=\"container-fluid\">

      <div class=\"row\">
      <div class=\"col-lg-6\">
          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Clients</h5>
\t\t\t  <div class=\"table-responsive\">
              <table class=\"table table-hover\">
                <thead>
                  <tr>
                    <th scope=\"col\">Id</th>
                    <th scope=\"col\">Nom</th>
                    <th scope=\"col\">Prenom</th>
                    <th scope=\"col\">Mail</th>
                    <th scope=\"col\">Numtel</th>
                    <th scope=\"col\">Actions:</th>
                  </tr>               
                </thead>
                <tbody>
                ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clientsuser"]) || array_key_exists("clientsuser", $context) ? $context["clientsuser"] : (function () { throw new RuntimeError('Variable "clientsuser" does not exist.', 70, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 71
            echo "                  <tr>
                    <th scope=\"row\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "Id", [], "any", false, false, false, 72), "html", null, true);
            echo "</th>
                    <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "Nom", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>
                    <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "Prenom", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
                    <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "Email", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
                    <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "Numtel", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affichagecoachclientdelete", ["id" => twig_get_attribute($this->env, $this->source, $context["utilisateur"], "Id", [], "any", false, false, false, 77)]), "html", null, true);
            echo "\">Supprimer</a></td>
                  </tr>
                  
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-6\">
          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Clients</h5>
\t\t\t  <div class=\"table-responsive\">
              <table class=\"table table-hover\">
                <thead>
                  <tr>
                  <th scope=\"col\">Id</th>
                    <th scope=\"col\">permaban</th>
                    <th scope=\"col\">date bloque</th>
                    <th scope=\"col\">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 102, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 103
            echo "                  <tr>
                    <td>";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "idClient", [], "any", false, false, false, 104), "html", null, true);
            echo "</td>
                    ";
            // line 105
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["client"], "Permaban", [], "any", false, false, false, 105), true))) {
                // line 106
                echo "                    <td>true</td>
                    ";
            } else {
                // line 108
                echo "                    <td>false</td>
                    ";
            }
            // line 110
            echo "                    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["client"], "Dateblock", [], "any", false, false, false, 110), null))) {
                // line 111
                echo "                    <td>Non bloqué</td>
                    ";
            } else {
                // line 113
                echo "                    <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "Dateblock", [], "any", false, false, false, 113), "d/m/Y"), "html", null, true);
                echo "</td>
                    ";
            }
            // line 115
            echo "                    <td><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affichagecoachclientbloque", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "idClient", [], "any", false, false, false, 115)]), "html", null, true);
            echo "\">bloquer/debloquer</a></td>
                    <td><a href=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affichagecoachclientban", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "idClient", [], "any", false, false, false, 116)]), "html", null, true);
            echo "\">affecter/désaffecter ban</a></td>
                     
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>
      </div><!--End Row-->

      <div class=\"row\">
        <div class=\"col-lg-6\">
          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Coachs</h5>
\t\t\t  <div class=\"table-responsive\">
              <table class=\"table table-hover\">
                <thead>
                  <tr>
                    <th scope=\"col\">Id</th>
                    <th scope=\"col\">Nom</th>
                    <th scope=\"col\">Prenom</th>
                    <th scope=\"col\">Mail</th>
                    <th scope=\"col\">Numtel</th>
                    <th scope=\"col\">Action</th>
                  </tr>
                </thead>
                <tbody>
                ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coachsuser"]) || array_key_exists("coachsuser", $context) ? $context["coachsuser"] : (function () { throw new RuntimeError('Variable "coachsuser" does not exist.', 146, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 147
            echo "                  <tr>
                    <th scope=\"row\">";
            // line 148
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "Id", [], "any", false, false, false, 148), "html", null, true);
            echo "</th>
                    <td>";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "Nom", [], "any", false, false, false, 149), "html", null, true);
            echo "</td>
                    <td>";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "Prenom", [], "any", false, false, false, 150), "html", null, true);
            echo "</td>
                    <td>";
            // line 151
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "Email", [], "any", false, false, false, 151), "html", null, true);
            echo "</td>
                    <td>";
            // line 152
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "Numtel", [], "any", false, false, false, 152), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 153
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affichagecoachclientdelete", ["id" => twig_get_attribute($this->env, $this->source, $context["utilisateur"], "Id", [], "any", false, false, false, 153)]), "html", null, true);
            echo "\">Supprimer</a></td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "                </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-6\">
          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Coachs</h5>
\t\t\t  <div class=\"table-responsive\">
              <table class=\"table table-hover\">
                <thead>
                  <tr>
                    <th scope=\"col\">Id</th>
                    <th scope=\"col\">role</th>
                    <th scope=\"col\">salaire</th>
                    <th scope=\"col\">Action</th>
                  </tr>
                </thead>
                <tbody>
                ";
        // line 177
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coachs"]) || array_key_exists("coachs", $context) ? $context["coachs"] : (function () { throw new RuntimeError('Variable "coachs" does not exist.', 177, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["coach"]) {
            // line 178
            echo "                  <tr>
                    <td>";
            // line 179
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "Id", [], "any", false, false, false, 179), "html", null, true);
            echo "</td>
                    <td>";
            // line 180
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "Role", [], "any", false, false, false, 180), "html", null, true);
            echo "</td>
                    <td>";
            // line 181
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "Salaire", [], "any", false, false, false, 181), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 182
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affichagecoachclientupdatecoach", ["id" => twig_get_attribute($this->env, $this->source, $context["coach"], "Id", [], "any", false, false, false, 182)]), "html", null, true);
            echo "\">Modifier</a></td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coach'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "                </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>
      </div><!--End Row-->
\t  
\t  <!--start overlay-->
\t\t  <div class=\"overlay toggle-menu\"></div>
\t\t<!--end overlay-->

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href=\"javaScript:void();\" class=\"back-to-top\"><i class=\"fa fa-angle-double-up\"></i> </a>
    <!--End Back To Top Button-->
\t
\t<!--Start footer-->
\t<footer class=\"footer\">
      <div class=\"container\">
        <div class=\"text-center\">
          Copyright © 2021 Tnafes
        </div>
      </div>
    </footer>
\t<!--End footer-->
\t
\t<!--start color switcher-->
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
\t\t<li id=\"theme13\"></li>
        <li id=\"theme14\"></li>
        <li id=\"theme15\"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
   
  </div><!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
  <script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t
  <!-- simplebar js -->
  <script src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/simplebar/js/simplebar.js"), "html", null, true);
        echo "\"></script>
  <!-- sidebar-menu js -->
  <script src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/sidebar-menu.js"), "html", null, true);
        echo "\"></script>
  
  <!-- Custom scripts -->
  <script src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app-script.js"), "html", null, true);
        echo "\"></script>
\t
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "affichagecoachclient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  470 => 267,  464 => 264,  459 => 262,  453 => 259,  449 => 258,  445 => 257,  371 => 185,  362 => 182,  358 => 181,  354 => 180,  350 => 179,  347 => 178,  343 => 177,  320 => 156,  311 => 153,  307 => 152,  303 => 151,  299 => 150,  295 => 149,  291 => 148,  288 => 147,  284 => 146,  256 => 120,  246 => 116,  241 => 115,  235 => 113,  231 => 111,  228 => 110,  224 => 108,  220 => 106,  218 => 105,  214 => 104,  211 => 103,  207 => 102,  184 => 81,  174 => 77,  170 => 76,  166 => 75,  162 => 74,  158 => 73,  154 => 72,  151 => 71,  147 => 70,  120 => 45,  118 => 44,  113 => 41,  111 => 40,  94 => 26,  89 => 24,  84 => 22,  79 => 20,  74 => 18,  69 => 16,  64 => 14,  59 => 12,  55 => 11,  43 => 1,);
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
  <title>Tnafes - affichage clients/coachs</title>
  <!-- loader-->
  <link href=\"{{asset('assets/css/pace.min.css')}}\" rel=\"stylesheet\"/>
  <script src=\"{{asset('assets/js/pace.min.js')}}\"></script>
  <!--favicon-->
  <link rel=\"icon\" href=\"{{asset('assets/images/favicon.ico')}}\" type=\"image/x-icon\">
  <!-- simplebar CSS-->
  <link href=\"{{asset('assets/plugins/simplebar/css/simplebar.css')}}\" rel=\"stylesheet\"/>
  <!-- Bootstrap core CSS-->
  <link href=\"{{asset('assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\"/>
  <!-- animate CSS-->
  <link href=\"{{asset('assets/css/animate.css')}}\" rel=\"stylesheet\" type=\"text/css\"/>
  <!-- Icons CSS-->
  <link href=\"{{asset('assets/css/icons.css')}}\" rel=\"stylesheet\" type=\"text/css\"/>
  <!-- Sidebar CSS-->
  <link href=\"{{asset('assets/css/sidebar-menu.css')}}\" rel=\"stylesheet\"/>
  <!-- Custom Style-->
  <link href=\"{{asset('assets/css/app-style.css')}}\" rel=\"stylesheet\"/>
  
</head>

<body class=\"bg-theme bg-theme1\">

<!-- start loader -->
   <div id=\"pageloader-overlay\" class=\"visible incoming\"><div class=\"loader-wrapper-outer\"><div class=\"loader-wrapper-inner\" ><div class=\"loader\"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id=\"wrapper\">

  <!--Start sidebar-wrapper-->
\t  {% include 'navbar2.html.twig' %}
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
      {% include 'topbarheader.html.twig' %}
<!--End topbar header-->

<div class=\"clearfix\"></div>
\t
  <div class=\"content-wrapper\">
    <div class=\"container-fluid\">

      <div class=\"row\">
      <div class=\"col-lg-6\">
          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Clients</h5>
\t\t\t  <div class=\"table-responsive\">
              <table class=\"table table-hover\">
                <thead>
                  <tr>
                    <th scope=\"col\">Id</th>
                    <th scope=\"col\">Nom</th>
                    <th scope=\"col\">Prenom</th>
                    <th scope=\"col\">Mail</th>
                    <th scope=\"col\">Numtel</th>
                    <th scope=\"col\">Actions:</th>
                  </tr>               
                </thead>
                <tbody>
                {% for utilisateur in clientsuser %}
                  <tr>
                    <th scope=\"row\">{{utilisateur.Id}}</th>
                    <td>{{utilisateur.Nom}}</td>
                    <td>{{utilisateur.Prenom}}</td>
                    <td>{{utilisateur.Email}}</td>
                    <td>{{utilisateur.Numtel}}</td>
                    <td><a href=\"{{ path('affichagecoachclientdelete',{id: utilisateur.Id}) }}\">Supprimer</a></td>
                  </tr>
                  
                  {% endfor %}
                </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-6\">
          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Clients</h5>
\t\t\t  <div class=\"table-responsive\">
              <table class=\"table table-hover\">
                <thead>
                  <tr>
                  <th scope=\"col\">Id</th>
                    <th scope=\"col\">permaban</th>
                    <th scope=\"col\">date bloque</th>
                    <th scope=\"col\">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  {% for client in clients %}
                  <tr>
                    <td>{{client.idClient}}</td>
                    {% if client.Permaban == true %}
                    <td>true</td>
                    {% else %}
                    <td>false</td>
                    {% endif %}
                    {% if client.Dateblock == null %}
                    <td>Non bloqué</td>
                    {% else %}
                    <td>{{client.Dateblock|date(\"d/m/Y\")}}</td>
                    {% endif %}
                    <td><a href=\"{{ path('affichagecoachclientbloque',{id: client.idClient}) }}\">bloquer/debloquer</a></td>
                    <td><a href=\"{{ path('affichagecoachclientban',{id: client.idClient}) }}\">affecter/désaffecter ban</a></td>
                     
                  </tr>
                  {% endfor %}
                </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>
      </div><!--End Row-->

      <div class=\"row\">
        <div class=\"col-lg-6\">
          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Coachs</h5>
\t\t\t  <div class=\"table-responsive\">
              <table class=\"table table-hover\">
                <thead>
                  <tr>
                    <th scope=\"col\">Id</th>
                    <th scope=\"col\">Nom</th>
                    <th scope=\"col\">Prenom</th>
                    <th scope=\"col\">Mail</th>
                    <th scope=\"col\">Numtel</th>
                    <th scope=\"col\">Action</th>
                  </tr>
                </thead>
                <tbody>
                {% for utilisateur in coachsuser %}
                  <tr>
                    <th scope=\"row\">{{utilisateur.Id}}</th>
                    <td>{{utilisateur.Nom}}</td>
                    <td>{{utilisateur.Prenom}}</td>
                    <td>{{utilisateur.Email}}</td>
                    <td>{{utilisateur.Numtel}}</td>
                    <td><a href=\"{{ path('affichagecoachclientdelete',{id: utilisateur.Id}) }}\">Supprimer</a></td>
                  </tr>
                  {% endfor %}
                </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-6\">
          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Coachs</h5>
\t\t\t  <div class=\"table-responsive\">
              <table class=\"table table-hover\">
                <thead>
                  <tr>
                    <th scope=\"col\">Id</th>
                    <th scope=\"col\">role</th>
                    <th scope=\"col\">salaire</th>
                    <th scope=\"col\">Action</th>
                  </tr>
                </thead>
                <tbody>
                {% for coach in coachs %}
                  <tr>
                    <td>{{coach.Id}}</td>
                    <td>{{coach.Role}}</td>
                    <td>{{coach.Salaire}}</td>
                    <td><a href=\"{{ path('affichagecoachclientupdatecoach',{id: coach.Id}) }}\">Modifier</a></td>
                  </tr>
                  {% endfor %}
                </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>
      </div><!--End Row-->
\t  
\t  <!--start overlay-->
\t\t  <div class=\"overlay toggle-menu\"></div>
\t\t<!--end overlay-->

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href=\"javaScript:void();\" class=\"back-to-top\"><i class=\"fa fa-angle-double-up\"></i> </a>
    <!--End Back To Top Button-->
\t
\t<!--Start footer-->
\t<footer class=\"footer\">
      <div class=\"container\">
        <div class=\"text-center\">
          Copyright © 2021 Tnafes
        </div>
      </div>
    </footer>
\t<!--End footer-->
\t
\t<!--start color switcher-->
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
\t\t<li id=\"theme13\"></li>
        <li id=\"theme14\"></li>
        <li id=\"theme15\"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
   
  </div><!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
  <script src=\"{{asset('assets/js/jquery.min.js')}}\"></script>
  <script src=\"{{asset('assets/js/popper.min.js')}}\"></script>
  <script src=\"{{asset('assets/js/bootstrap.min.js')}}\"></script>
\t
  <!-- simplebar js -->
  <script src=\"{{asset('assets/plugins/simplebar/js/simplebar.js')}}\"></script>
  <!-- sidebar-menu js -->
  <script src=\"{{asset('assets/js/sidebar-menu.js')}}\"></script>
  
  <!-- Custom scripts -->
  <script src=\"{{asset('assets/js/app-script.js')}}\"></script>
\t
</body>
</html>
", "affichagecoachclient.html.twig", "C:\\Users\\miral\\OneDrive\\Bureau\\PiDevWeb2.33\\templates\\affichagecoachclient.html.twig");
    }
}
