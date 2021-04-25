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

/* modifcoach.html.twig */
class __TwigTemplate_2e2e49f0646aa23bc3443242d15986cc744775fb077caa7b7865654e4f28dae4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modifcoach.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modifcoach.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\"/>
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
  <meta name=\"description\" content=\"\"/>
  <meta name=\"author\" content=\"\"/>
  <title>Tnafes - Mise à jour d'un coach</title>
  <!-- loader-->
  <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/pace.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
  <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/pace.min.js"), "html", null, true);
        echo "\"></script>
  <!--favicon-->
  <link rel=\"icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
  <!-- simplebar CSS-->
  <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/simplebar/css/simplebar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
  <!-- Bootstrap core CSS-->
  <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
  <!-- animate CSS-->
  <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
  <!-- Icons CSS-->
  <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
  <!-- Sidebar CSS-->
  <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/sidebar-menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
  <!-- Custom Style-->
  <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/app-style.css"), "html", null, true);
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
        $this->loadTemplate("navbar.html.twig", "modifcoach.html.twig", 41)->display($context);
        // line 42
        echo "  <!--End sidebar-wrapper-->

<!--Start topbar header-->
      ";
        // line 45
        $this->loadTemplate("topbarheader.html.twig", "modifcoach.html.twig", 45)->display($context);
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
           <div class=\"card-title\">Modification coach</div>
           <hr>
            ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formcoach"]) || array_key_exists("formcoach", $context) ? $context["formcoach"] : (function () { throw new RuntimeError('Variable "formcoach" does not exist.', 58, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
           <div class=\"form-group\">
            <input value=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formcoach"]) || array_key_exists("formcoach", $context) ? $context["formcoach"] : (function () { throw new RuntimeError('Variable "formcoach" does not exist.', 60, $this->source); })()), "nom", [], "any", false, false, false, 60), "vars", [], "any", false, false, false, 60), "value", [], "any", false, false, false, 60), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formcoach"]) || array_key_exists("formcoach", $context) ? $context["formcoach"] : (function () { throw new RuntimeError('Variable "formcoach" does not exist.', 60, $this->source); })()), "nom", [], "any", false, false, false, 60), "vars", [], "any", false, false, false, 60), "full_name", [], "any", false, false, false, 60), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formcoach"]) || array_key_exists("formcoach", $context) ? $context["formcoach"] : (function () { throw new RuntimeError('Variable "formcoach" does not exist.', 60, $this->source); })()), "nom", [], "any", false, false, false, 60), "vars", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60), "html", null, true);
        echo "\" type=\"hidden\" class=\"form-control\" placeholder=\"Nom du coach\">
           ";
        // line 61
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formcoach"]) || array_key_exists("formcoach", $context) ? $context["formcoach"] : (function () { throw new RuntimeError('Variable "formcoach" does not exist.', 61, $this->source); })()), "nom", [], "any", false, false, false, 61), "setRendered", [], "any", false, false, false, 61);
        // line 62
        echo "           </div>
           <div class=\"form-group\">
            <input value=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formcoach"]) || array_key_exists("formcoach", $context) ? $context["formcoach"] : (function () { throw new RuntimeError('Variable "formcoach" does not exist.', 64, $this->source); })()), "prenom", [], "any", false, false, false, 64), "vars", [], "any", false, false, false, 64), "value", [], "any", false, false, false, 64), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formcoach"]) || array_key_exists("formcoach", $context) ? $context["formcoach"] : (function () { throw new RuntimeError('Variable "formcoach" does not exist.', 64, $this->source); })()), "prenom", [], "any", false, false, false, 64), "vars", [], "any", false, false, false, 64), "full_name", [], "any", false, false, false, 64), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formcoach"]) || array_key_exists("formcoach", $context) ? $context["formcoach"] : (function () { throw new RuntimeError('Variable "formcoach" does not exist.', 64, $this->source); })()), "prenom", [], "any", false, false, false, 64), "vars", [], "any", false, false, false, 64), "id", [], "any", false, false, false, 64), "html", null, true);
        echo "\" type=\"hidden\" class=\"form-control\" placeholder=\"Prenom du coach\">
           ";
        // line 65
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formcoach"]) || array_key_exists("formcoach", $context) ? $context["formcoach"] : (function () { throw new RuntimeError('Variable "formcoach" does not exist.', 65, $this->source); })()), "prenom", [], "any", false, false, false, 65), "setRendered", [], "any", false, false, false, 65);
        // line 66
        echo "           </div>
           <div class=\"form-group\">
            <label for=\"";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formcoach"]) || array_key_exists("formcoach", $context) ? $context["formcoach"] : (function () { throw new RuntimeError('Variable "formcoach" does not exist.', 68, $this->source); })()), "email", [], "any", false, false, false, 68), "vars", [], "any", false, false, false, 68), "id", [], "any", false, false, false, 68), "html", null, true);
        echo "\">Email</label>
            <input value=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formcoach"]) || array_key_exists("formcoach", $context) ? $context["formcoach"] : (function () { throw new RuntimeError('Variable "formcoach" does not exist.', 69, $this->source); })()), "email", [], "any", false, false, false, 69), "vars", [], "any", false, false, false, 69), "value", [], "any", false, false, false, 69), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formcoach"]) || array_key_exists("formcoach", $context) ? $context["formcoach"] : (function () { throw new RuntimeError('Variable "formcoach" does not exist.', 69, $this->source); })()), "email", [], "any", false, false, false, 69), "vars", [], "any", false, false, false, 69), "full_name", [], "any", false, false, false, 69), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formcoach"]) || array_key_exists("formcoach", $context) ? $context["formcoach"] : (function () { throw new RuntimeError('Variable "formcoach" does not exist.', 69, $this->source); })()), "email", [], "any", false, false, false, 69), "vars", [], "any", false, false, false, 69), "id", [], "any", false, false, false, 69), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" placeholder=\"Mail du coach\">
            ";
        // line 70
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formcoach"]) || array_key_exists("formcoach", $context) ? $context["formcoach"] : (function () { throw new RuntimeError('Variable "formcoach" does not exist.', 70, $this->source); })()), "email", [], "any", false, false, false, 70), "setRendered", [], "any", false, false, false, 70);
        // line 71
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formcoach"]) || array_key_exists("formcoach", $context) ? $context["formcoach"] : (function () { throw new RuntimeError('Variable "formcoach" does not exist.', 71, $this->source); })()), "email", [], "any", false, false, false, 71), 'errors');
        echo "
           </div>
           <div class=\"form-group\">
            <label for=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formcoach"]) || array_key_exists("formcoach", $context) ? $context["formcoach"] : (function () { throw new RuntimeError('Variable "formcoach" does not exist.', 74, $this->source); })()), "numtel", [], "any", false, false, false, 74), "vars", [], "any", false, false, false, 74), "id", [], "any", false, false, false, 74), "html", null, true);
        echo "\">Mobile</label>
            <input value=\"";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formcoach"]) || array_key_exists("formcoach", $context) ? $context["formcoach"] : (function () { throw new RuntimeError('Variable "formcoach" does not exist.', 75, $this->source); })()), "numtel", [], "any", false, false, false, 75), "vars", [], "any", false, false, false, 75), "value", [], "any", false, false, false, 75), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formcoach"]) || array_key_exists("formcoach", $context) ? $context["formcoach"] : (function () { throw new RuntimeError('Variable "formcoach" does not exist.', 75, $this->source); })()), "numtel", [], "any", false, false, false, 75), "vars", [], "any", false, false, false, 75), "full_name", [], "any", false, false, false, 75), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formcoach"]) || array_key_exists("formcoach", $context) ? $context["formcoach"] : (function () { throw new RuntimeError('Variable "formcoach" does not exist.', 75, $this->source); })()), "numtel", [], "any", false, false, false, 75), "vars", [], "any", false, false, false, 75), "id", [], "any", false, false, false, 75), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" placeholder=\"Numero du coach\">
           ";
        // line 76
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formcoach"]) || array_key_exists("formcoach", $context) ? $context["formcoach"] : (function () { throw new RuntimeError('Variable "formcoach" does not exist.', 76, $this->source); })()), "numtel", [], "any", false, false, false, 76), "setRendered", [], "any", false, false, false, 76);
        // line 77
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formcoach"]) || array_key_exists("formcoach", $context) ? $context["formcoach"] : (function () { throw new RuntimeError('Variable "formcoach" does not exist.', 77, $this->source); })()), "numtel", [], "any", false, false, false, 77), 'errors');
        echo "
           </div>
           <div class=\"form-group\">
            <input value=\"";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formcoach"]) || array_key_exists("formcoach", $context) ? $context["formcoach"] : (function () { throw new RuntimeError('Variable "formcoach" does not exist.', 80, $this->source); })()), "password", [], "any", false, false, false, 80), "vars", [], "any", false, false, false, 80), "value", [], "any", false, false, false, 80), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formcoach"]) || array_key_exists("formcoach", $context) ? $context["formcoach"] : (function () { throw new RuntimeError('Variable "formcoach" does not exist.', 80, $this->source); })()), "password", [], "any", false, false, false, 80), "vars", [], "any", false, false, false, 80), "full_name", [], "any", false, false, false, 80), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formcoach"]) || array_key_exists("formcoach", $context) ? $context["formcoach"] : (function () { throw new RuntimeError('Variable "formcoach" does not exist.', 80, $this->source); })()), "password", [], "any", false, false, false, 80), "vars", [], "any", false, false, false, 80), "id", [], "any", false, false, false, 80), "html", null, true);
        echo "\" type=\"hidden\" class=\"form-control\" placeholder=\"mot de passe\">
            ";
        // line 81
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formcoach"]) || array_key_exists("formcoach", $context) ? $context["formcoach"] : (function () { throw new RuntimeError('Variable "formcoach" does not exist.', 81, $this->source); })()), "password", [], "any", false, false, false, 81), "setRendered", [], "any", false, false, false, 81);
        // line 82
        echo "           </div>
           <div class=\"form-group\">
            <label for=\"";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formcoache"]) || array_key_exists("formcoache", $context) ? $context["formcoache"] : (function () { throw new RuntimeError('Variable "formcoache" does not exist.', 84, $this->source); })()), "salaire", [], "any", false, false, false, 84), "vars", [], "any", false, false, false, 84), "id", [], "any", false, false, false, 84), "html", null, true);
        echo "\">Salaire</label>
            <input value=\"";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formcoache"]) || array_key_exists("formcoache", $context) ? $context["formcoache"] : (function () { throw new RuntimeError('Variable "formcoache" does not exist.', 85, $this->source); })()), "salaire", [], "any", false, false, false, 85), "vars", [], "any", false, false, false, 85), "value", [], "any", false, false, false, 85), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formcoache"]) || array_key_exists("formcoache", $context) ? $context["formcoache"] : (function () { throw new RuntimeError('Variable "formcoache" does not exist.', 85, $this->source); })()), "salaire", [], "any", false, false, false, 85), "vars", [], "any", false, false, false, 85), "full_name", [], "any", false, false, false, 85), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formcoache"]) || array_key_exists("formcoache", $context) ? $context["formcoache"] : (function () { throw new RuntimeError('Variable "formcoache" does not exist.', 85, $this->source); })()), "salaire", [], "any", false, false, false, 85), "vars", [], "any", false, false, false, 85), "id", [], "any", false, false, false, 85), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" placeholder=\"salaire\">
            ";
        // line 86
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formcoache"]) || array_key_exists("formcoache", $context) ? $context["formcoache"] : (function () { throw new RuntimeError('Variable "formcoache" does not exist.', 86, $this->source); })()), "salaire", [], "any", false, false, false, 86), "setRendered", [], "any", false, false, false, 86);
        // line 87
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formcoache"]) || array_key_exists("formcoache", $context) ? $context["formcoache"] : (function () { throw new RuntimeError('Variable "formcoache" does not exist.', 87, $this->source); })()), "salaire", [], "any", false, false, false, 87), 'errors');
        echo "
           </div>
           <div class=\"form-group\">
           <label for=\"";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formcoache"]) || array_key_exists("formcoache", $context) ? $context["formcoache"] : (function () { throw new RuntimeError('Variable "formcoache" does not exist.', 90, $this->source); })()), "role", [], "any", false, false, false, 90), "vars", [], "any", false, false, false, 90), "id", [], "any", false, false, false, 90), "html", null, true);
        echo "\">role</label>
            <input value=\"";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formcoache"]) || array_key_exists("formcoache", $context) ? $context["formcoache"] : (function () { throw new RuntimeError('Variable "formcoache" does not exist.', 91, $this->source); })()), "role", [], "any", false, false, false, 91), "vars", [], "any", false, false, false, 91), "value", [], "any", false, false, false, 91), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formcoache"]) || array_key_exists("formcoache", $context) ? $context["formcoache"] : (function () { throw new RuntimeError('Variable "formcoache" does not exist.', 91, $this->source); })()), "role", [], "any", false, false, false, 91), "vars", [], "any", false, false, false, 91), "full_name", [], "any", false, false, false, 91), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formcoache"]) || array_key_exists("formcoache", $context) ? $context["formcoache"] : (function () { throw new RuntimeError('Variable "formcoache" does not exist.', 91, $this->source); })()), "role", [], "any", false, false, false, 91), "vars", [], "any", false, false, false, 91), "id", [], "any", false, false, false, 91), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" placeholder=\"salaire\">
            ";
        // line 92
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formcoache"]) || array_key_exists("formcoache", $context) ? $context["formcoache"] : (function () { throw new RuntimeError('Variable "formcoache" does not exist.', 92, $this->source); })()), "role", [], "any", false, false, false, 92), "setRendered", [], "any", false, false, false, 92);
        // line 93
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formcoache"]) || array_key_exists("formcoache", $context) ? $context["formcoache"] : (function () { throw new RuntimeError('Variable "formcoache" does not exist.', 93, $this->source); })()), "role", [], "any", false, false, false, 93), 'errors');
        echo "
           </div>
           <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btn-light px-5\"><i class=\"icon-lock\"></i>Modifier</button>
          </div>
          ";
        // line 98
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formcoach"]) || array_key_exists("formcoach", $context) ? $context["formcoach"] : (function () { throw new RuntimeError('Variable "formcoach" does not exist.', 98, $this->source); })()), "inscrire", [], "any", false, false, false, 98), "setRendered", [], "any", false, false, false, 98);
        // line 99
        echo "          ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formcoach"]) || array_key_exists("formcoach", $context) ? $context["formcoach"] : (function () { throw new RuntimeError('Variable "formcoach" does not exist.', 99, $this->source); })()), 'form_end');
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
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t
 <!-- simplebar js -->
  <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/simplebar/js/simplebar.js"), "html", null, true);
        echo "\"></script>
  <!-- sidebar-menu js -->
  <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/sidebar-menu.js"), "html", null, true);
        echo "\"></script>
  
  <!-- Custom scripts -->
  <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/app-script.js"), "html", null, true);
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
        return "modifcoach.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 179,  363 => 176,  358 => 174,  352 => 171,  348 => 170,  344 => 169,  270 => 99,  268 => 98,  259 => 93,  257 => 92,  249 => 91,  245 => 90,  238 => 87,  236 => 86,  228 => 85,  224 => 84,  220 => 82,  218 => 81,  210 => 80,  203 => 77,  201 => 76,  193 => 75,  189 => 74,  182 => 71,  180 => 70,  172 => 69,  168 => 68,  164 => 66,  162 => 65,  154 => 64,  150 => 62,  148 => 61,  140 => 60,  135 => 58,  121 => 46,  119 => 45,  114 => 42,  112 => 41,  94 => 26,  89 => 24,  84 => 22,  79 => 20,  74 => 18,  69 => 16,  64 => 14,  59 => 12,  55 => 11,  43 => 1,);
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
  <title>Tnafes - Mise à jour d'un coach</title>
  <!-- loader-->
  <link href=\"{{asset('css/pace.min.css')}}\" rel=\"stylesheet\"/>
  <script src=\"{{asset('js/pace.min.js')}}\"></script>
  <!--favicon-->
  <link rel=\"icon\" href=\"{{asset('images/favicon.ico')}}\" type=\"image/x-icon\">
  <!-- simplebar CSS-->
  <link href=\"{{asset('plugins/simplebar/css/simplebar.css')}}\" rel=\"stylesheet\"/>
  <!-- Bootstrap core CSS-->
  <link href=\"{{asset('css/bootstrap.min.css')}}\" rel=\"stylesheet\"/>
  <!-- animate CSS-->
  <link href=\"{{asset('css/animate.css')}}\" rel=\"stylesheet\" type=\"text/css\"/>
  <!-- Icons CSS-->
  <link href=\"{{asset('css/icons.css')}}\" rel=\"stylesheet\" type=\"text/css\"/>
  <!-- Sidebar CSS-->
  <link href=\"{{asset('css/sidebar-menu.css')}}\" rel=\"stylesheet\"/>
  <!-- Custom Style-->
  <link href=\"{{asset('css/app-style.css')}}\" rel=\"stylesheet\"/>
  
  
</head>

<body class=\"bg-theme bg-theme1\">

<!-- start loader -->
   <div id=\"pageloader-overlay\" class=\"visible incoming\"><div class=\"loader-wrapper-outer\"><div class=\"loader-wrapper-inner\" ><div class=\"loader\"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id=\"wrapper\">

 <!--Start sidebar-wrapper-->
\t  {% include 'navbar.html.twig' %}
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
           <div class=\"card-title\">Modification coach</div>
           <hr>
            {{ form_start(formcoach,{'attr': {'novalidate': 'novalidate'}}) }}
           <div class=\"form-group\">
            <input value=\"{{formcoach.nom.vars.value}}\" name=\"{{formcoach.nom.vars.full_name}}\" id=\"{{formcoach.nom.vars.id}}\" type=\"hidden\" class=\"form-control\" placeholder=\"Nom du coach\">
           {% do formcoach.nom.setRendered %}
           </div>
           <div class=\"form-group\">
            <input value=\"{{formcoach.prenom.vars.value}}\" name=\"{{formcoach.prenom.vars.full_name}}\" id=\"{{formcoach.prenom.vars.id}}\" type=\"hidden\" class=\"form-control\" placeholder=\"Prenom du coach\">
           {% do formcoach.prenom.setRendered %}
           </div>
           <div class=\"form-group\">
            <label for=\"{{formcoach.email.vars.id}}\">Email</label>
            <input value=\"{{formcoach.email.vars.value}}\" name=\"{{formcoach.email.vars.full_name}}\" id=\"{{formcoach.email.vars.id}}\" type=\"text\" class=\"form-control\" placeholder=\"Mail du coach\">
            {% do formcoach.email.setRendered %}
          {{ form_errors(formcoach.email) }}
           </div>
           <div class=\"form-group\">
            <label for=\"{{formcoach.numtel.vars.id}}\">Mobile</label>
            <input value=\"{{formcoach.numtel.vars.value}}\" name=\"{{formcoach.numtel.vars.full_name}}\" id=\"{{formcoach.numtel.vars.id}}\" type=\"text\" class=\"form-control\" placeholder=\"Numero du coach\">
           {% do formcoach.numtel.setRendered %}
          {{ form_errors(formcoach.numtel) }}
           </div>
           <div class=\"form-group\">
            <input value=\"{{formcoach.password.vars.value}}\" name=\"{{formcoach.password.vars.full_name}}\" id=\"{{formcoach.password.vars.id}}\" type=\"hidden\" class=\"form-control\" placeholder=\"mot de passe\">
            {% do formcoach.password.setRendered %}
           </div>
           <div class=\"form-group\">
            <label for=\"{{formcoache.salaire.vars.id}}\">Salaire</label>
            <input value=\"{{formcoache.salaire.vars.value}}\" name=\"{{formcoache.salaire.vars.full_name}}\" id=\"{{formcoache.salaire.vars.id}}\" type=\"text\" class=\"form-control\" placeholder=\"salaire\">
            {% do formcoache.salaire.setRendered %}
          {{ form_errors(formcoache.salaire) }}
           </div>
           <div class=\"form-group\">
           <label for=\"{{formcoache.role.vars.id}}\">role</label>
            <input value=\"{{formcoache.role.vars.value}}\" name=\"{{formcoache.role.vars.full_name}}\" id=\"{{formcoache.role.vars.id}}\" type=\"text\" class=\"form-control\" placeholder=\"salaire\">
            {% do formcoache.role.setRendered %}
          {{ form_errors(formcoache.role) }}
           </div>
           <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btn-light px-5\"><i class=\"icon-lock\"></i>Modifier</button>
          </div>
          {% do formcoach.inscrire.setRendered %}
          {{ form_end(formcoach) }}
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
  <script src=\"{{asset('js/jquery.min.js')}}\"></script>
  <script src=\"{{asset('js/popper.min.js')}}\"></script>
  <script src=\"{{asset('js/bootstrap.min.js')}}\"></script>
\t
 <!-- simplebar js -->
  <script src=\"{{asset('plugins/simplebar/js/simplebar.js')}}\"></script>
  <!-- sidebar-menu js -->
  <script src=\"{{asset('js/sidebar-menu.js')}}\"></script>
  
  <!-- Custom scripts -->
  <script src=\"{{asset('js/app-script.js')}}\"></script>
\t
</body>
</html>
", "modifcoach.html.twig", "C:\\Users\\miral\\OneDrive\\Bureau\\PiDevWeb2.33\\templates\\modifcoach.html.twig");
    }
}
