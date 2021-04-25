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

/* ajoutclient.twig */
class __TwigTemplate_be3fc76e66a016e8c8a55ad01e5234d4a8f185279db6f036998ef9304a38450c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ajoutclient.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ajoutclient.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\"/>
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
  <meta name=\"description\" content=\"\"/>
  <meta name=\"author\" content=\"\"/>
  <title>Tnafes - ajout client</title>
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
        // line 41
        $this->loadTemplate("navbar2.html.twig", "ajoutclient.twig", 41)->display($context);
        // line 42
        echo "   <!--End sidebar-wrapper-->

<!--Start topbar header-->
      ";
        // line 45
        $this->loadTemplate("topbarheader.html.twig", "ajoutclient.twig", 45)->display($context);
        // line 46
        echo "<!--End topbar header-->

<div class=\"clearfix\"></div>
\t
  <div class=\"content-wrapper\">
    <div class=\"container-fluid\">

    <div class=\"row mt-3\">
      <div class=\"col-lg-6\">
         <div class=\"card\">
           <div class=\"card-body\">
           <div class=\"card-title\">ajout client</div>
           <hr>
            ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 59, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
           <div class=\"form-group\">
            <label for=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 61, $this->source); })()), "nom", [], "any", false, false, false, 61), "vars", [], "any", false, false, false, 61), "id", [], "any", false, false, false, 61), "html", null, true);
        echo "\">Nom</label>
            <input value=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 62, $this->source); })()), "nom", [], "any", false, false, false, 62), "vars", [], "any", false, false, false, 62), "value", [], "any", false, false, false, 62), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 62, $this->source); })()), "nom", [], "any", false, false, false, 62), "vars", [], "any", false, false, false, 62), "full_name", [], "any", false, false, false, 62), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 62, $this->source); })()), "nom", [], "any", false, false, false, 62), "vars", [], "any", false, false, false, 62), "id", [], "any", false, false, false, 62), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" placeholder=\"Nom du client\">
           ";
        // line 63
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 63, $this->source); })()), "nom", [], "any", false, false, false, 63), "setRendered", [], "any", false, false, false, 63);
        // line 64
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 64, $this->source); })()), "nom", [], "any", false, false, false, 64), 'errors');
        echo "
           </div>
           <div class=\"form-group\">
            <label for=\"";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 67, $this->source); })()), "prenom", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "id", [], "any", false, false, false, 67), "html", null, true);
        echo "\">Prenom</label>
            <input value=\"";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 68, $this->source); })()), "prenom", [], "any", false, false, false, 68), "vars", [], "any", false, false, false, 68), "value", [], "any", false, false, false, 68), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 68, $this->source); })()), "prenom", [], "any", false, false, false, 68), "vars", [], "any", false, false, false, 68), "full_name", [], "any", false, false, false, 68), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 68, $this->source); })()), "prenom", [], "any", false, false, false, 68), "vars", [], "any", false, false, false, 68), "id", [], "any", false, false, false, 68), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" placeholder=\"Prenom du client\">
            ";
        // line 69
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 69, $this->source); })()), "prenom", [], "any", false, false, false, 69), "setRendered", [], "any", false, false, false, 69);
        // line 70
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 70, $this->source); })()), "prenom", [], "any", false, false, false, 70), 'errors');
        echo "
           </div>
           <div class=\"form-group\">
            <label for=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 73, $this->source); })()), "email", [], "any", false, false, false, 73), "vars", [], "any", false, false, false, 73), "id", [], "any", false, false, false, 73), "html", null, true);
        echo "\">Email</label>
            <input value=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 74, $this->source); })()), "email", [], "any", false, false, false, 74), "vars", [], "any", false, false, false, 74), "value", [], "any", false, false, false, 74), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 74, $this->source); })()), "email", [], "any", false, false, false, 74), "vars", [], "any", false, false, false, 74), "full_name", [], "any", false, false, false, 74), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 74, $this->source); })()), "email", [], "any", false, false, false, 74), "vars", [], "any", false, false, false, 74), "id", [], "any", false, false, false, 74), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" placeholder=\"Mail du client\">
           ";
        // line 75
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 75, $this->source); })()), "email", [], "any", false, false, false, 75), "setRendered", [], "any", false, false, false, 75);
        // line 76
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 76, $this->source); })()), "email", [], "any", false, false, false, 76), 'errors');
        echo "
           </div>
           <div class=\"form-group\">
            <label for=\"";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 79, $this->source); })()), "numtel", [], "any", false, false, false, 79), "vars", [], "any", false, false, false, 79), "id", [], "any", false, false, false, 79), "html", null, true);
        echo "\">Mobile</label>
            <input value=\"";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 80, $this->source); })()), "numtel", [], "any", false, false, false, 80), "vars", [], "any", false, false, false, 80), "value", [], "any", false, false, false, 80), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 80, $this->source); })()), "numtel", [], "any", false, false, false, 80), "vars", [], "any", false, false, false, 80), "full_name", [], "any", false, false, false, 80), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 80, $this->source); })()), "numtel", [], "any", false, false, false, 80), "vars", [], "any", false, false, false, 80), "id", [], "any", false, false, false, 80), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" placeholder=\"Numero du client\">
           ";
        // line 81
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 81, $this->source); })()), "numtel", [], "any", false, false, false, 81), "setRendered", [], "any", false, false, false, 81);
        // line 82
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 82, $this->source); })()), "numtel", [], "any", false, false, false, 82), 'errors');
        echo "
           </div>
           <div class=\"form-group\">
            <label for=\"";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 85, $this->source); })()), "password", [], "any", false, false, false, 85), "vars", [], "any", false, false, false, 85), "id", [], "any", false, false, false, 85), "html", null, true);
        echo "\">Password</label>
            <input value=\"";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 86, $this->source); })()), "password", [], "any", false, false, false, 86), "vars", [], "any", false, false, false, 86), "value", [], "any", false, false, false, 86), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 86, $this->source); })()), "password", [], "any", false, false, false, 86), "vars", [], "any", false, false, false, 86), "full_name", [], "any", false, false, false, 86), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 86, $this->source); })()), "password", [], "any", false, false, false, 86), "vars", [], "any", false, false, false, 86), "id", [], "any", false, false, false, 86), "html", null, true);
        echo "\" type=\"password\" class=\"form-control\" placeholder=\"mot de passe\">
           ";
        // line 87
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 87, $this->source); })()), "password", [], "any", false, false, false, 87), "setRendered", [], "any", false, false, false, 87);
        // line 88
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 88, $this->source); })()), "password", [], "any", false, false, false, 88), 'errors');
        echo "
           </div>
           <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btn-light px-5\"><i class=\"icon-lock\"></i> Inscrire</button>
          </div>
          ";
        // line 93
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 93, $this->source); })()), "inscrire", [], "any", false, false, false, 93), "setRendered", [], "any", false, false, false, 93);
        // line 94
        echo "          ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 94, $this->source); })()), 'form_end');
        echo "
         </div>
         </div>
      </div>
    </div><!--End Row-->

\t<!--start overlay-->
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
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t
 <!-- simplebar js -->
  <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/simplebar/js/simplebar.js"), "html", null, true);
        echo "\"></script>
  <!-- sidebar-menu js -->
  <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/sidebar-menu.js"), "html", null, true);
        echo "\"></script>
  
  <!-- Custom scripts -->
  <script src=\"";
        // line 174
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
        return "ajoutclient.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 174,  343 => 171,  338 => 169,  332 => 166,  328 => 165,  324 => 164,  250 => 94,  248 => 93,  239 => 88,  237 => 87,  229 => 86,  225 => 85,  218 => 82,  216 => 81,  208 => 80,  204 => 79,  197 => 76,  195 => 75,  187 => 74,  183 => 73,  176 => 70,  174 => 69,  166 => 68,  162 => 67,  155 => 64,  153 => 63,  145 => 62,  141 => 61,  136 => 59,  121 => 46,  119 => 45,  114 => 42,  112 => 41,  94 => 26,  89 => 24,  84 => 22,  79 => 20,  74 => 18,  69 => 16,  64 => 14,  59 => 12,  55 => 11,  43 => 1,);
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
  <title>Tnafes - ajout client</title>
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

    <div class=\"row mt-3\">
      <div class=\"col-lg-6\">
         <div class=\"card\">
           <div class=\"card-body\">
           <div class=\"card-title\">ajout client</div>
           <hr>
            {{ form_start(formclient,{'attr': {'novalidate': 'novalidate'}}) }}
           <div class=\"form-group\">
            <label for=\"{{formclient.nom.vars.id}}\">Nom</label>
            <input value=\"{{formclient.nom.vars.value}}\" name=\"{{formclient.nom.vars.full_name}}\" id=\"{{formclient.nom.vars.id}}\" type=\"text\" class=\"form-control\" placeholder=\"Nom du client\">
           {% do formclient.nom.setRendered %}
          {{ form_errors(formclient.nom) }}
           </div>
           <div class=\"form-group\">
            <label for=\"{{formclient.prenom.vars.id}}\">Prenom</label>
            <input value=\"{{formclient.prenom.vars.value}}\" name=\"{{formclient.prenom.vars.full_name}}\" id=\"{{formclient.prenom.vars.id}}\" type=\"text\" class=\"form-control\" placeholder=\"Prenom du client\">
            {% do formclient.prenom.setRendered %}
          {{ form_errors(formclient.prenom) }}
           </div>
           <div class=\"form-group\">
            <label for=\"{{formclient.email.vars.id}}\">Email</label>
            <input value=\"{{formclient.email.vars.value}}\" name=\"{{formclient.email.vars.full_name}}\" id=\"{{formclient.email.vars.id}}\" type=\"text\" class=\"form-control\" placeholder=\"Mail du client\">
           {% do formclient.email.setRendered %}
          {{ form_errors(formclient.email) }}
           </div>
           <div class=\"form-group\">
            <label for=\"{{formclient.numtel.vars.id}}\">Mobile</label>
            <input value=\"{{formclient.numtel.vars.value}}\" name=\"{{formclient.numtel.vars.full_name}}\" id=\"{{formclient.numtel.vars.id}}\" type=\"text\" class=\"form-control\" placeholder=\"Numero du client\">
           {% do formclient.numtel.setRendered %}
          {{ form_errors(formclient.numtel) }}
           </div>
           <div class=\"form-group\">
            <label for=\"{{formclient.password.vars.id}}\">Password</label>
            <input value=\"{{formclient.password.vars.value}}\" name=\"{{formclient.password.vars.full_name}}\" id=\"{{formclient.password.vars.id}}\" type=\"password\" class=\"form-control\" placeholder=\"mot de passe\">
           {% do formclient.password.setRendered %}
          {{ form_errors(formclient.password) }}
           </div>
           <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btn-light px-5\"><i class=\"icon-lock\"></i> Inscrire</button>
          </div>
          {% do formclient.inscrire.setRendered %}
          {{ form_end(formclient) }}
         </div>
         </div>
      </div>
    </div><!--End Row-->

\t<!--start overlay-->
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
", "ajoutclient.twig", "C:\\Users\\miral\\OneDrive\\Bureau\\PiDevWeb2.33\\templates\\ajoutclient.twig");
    }
}
