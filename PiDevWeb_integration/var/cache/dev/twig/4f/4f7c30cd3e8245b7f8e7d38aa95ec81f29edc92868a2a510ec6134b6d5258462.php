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

/* updatecurrentuserdata/index.html.twig */
class __TwigTemplate_2aeb906bf0c7f62145de1dbfa381a4b6794b582a5937671bf9a4b26c8ede0009 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "updatecurrentuserdata/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "updatecurrentuserdata/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\"/>
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
  <meta name=\"description\" content=\"\"/>
  <meta name=\"author\" content=\"\"/>
  <title>Tnafes - Modification d'information</title>
  <!-- loader-->

  <!--favicon-->
  <link rel=\"icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
  <!-- Bootstrap core CSS-->
  <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
  <!-- animate CSS-->
  <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
  <!-- Icons CSS-->
  <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
  <!-- Custom Style-->
  <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/app-style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
  
</head>

<body class=\"bg-theme bg-theme1\">

<!-- start loader -->
   <div id=\"pageloader-overlay\" class=\"visible incoming\"><div class=\"loader-wrapper-outer\"><div class=\"loader-wrapper-inner\" ><div class=\"loader\"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id=\"wrapper\">

\t<div class=\"card card-authentication1 mx-auto my-4\">
\t\t<div class=\"card-body\">
\t\t <div class=\"card-content p-2\">
\t\t \t<div class=\"text-center\">
                <div class=\"logo menu_logo\"><a href=\"#\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/123.png"), "html", null, true);
        echo "\" alt=\"\"></a></div>
\t\t \t</div>
\t\t  <div class=\"card-title text-uppercase text-center py-3\">Modification d'information</div>
\t\t    ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
\t\t\t  <div class=\"form-group\">
\t\t\t  <label for=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "nom", [], "any", false, false, false, 43), "vars", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43), "html", null, true);
        echo "\" class=\"sr-only\"></label>
\t\t\t   <div class=\"position-relative has-icon-right\">
\t\t\t\t  <input value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "nom", [], "any", false, false, false, 45), "vars", [], "any", false, false, false, 45), "value", [], "any", false, false, false, 45), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "nom", [], "any", false, false, false, 45), "vars", [], "any", false, false, false, 45), "full_name", [], "any", false, false, false, 45), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "nom", [], "any", false, false, false, 45), "vars", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45), "html", null, true);
        echo "\" type=\"text\" class=\"form-control input-shadow\" placeholder=\"Votre nom\">
\t\t\t\t  ";
        // line 46
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "nom", [], "any", false, false, false, 46), "setRendered", [], "any", false, false, false, 46);
        // line 47
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "nom", [], "any", false, false, false, 47), 'errors');
        echo "
          <div class=\"form-control-position\">
\t\t\t\t\t  <i class=\"icon-user\"></i>
\t\t\t\t  </div>
\t\t\t   </div>
\t\t\t  </div>
        <div class=\"form-group\">
\t\t\t  <label for=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "prenom", [], "any", false, false, false, 54), "vars", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54), "html", null, true);
        echo "\" class=\"sr-only\">Prenom</label>
\t\t\t   <div class=\"position-relative has-icon-right\">
\t\t\t\t  <input value=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "prenom", [], "any", false, false, false, 56), "vars", [], "any", false, false, false, 56), "value", [], "any", false, false, false, 56), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "prenom", [], "any", false, false, false, 56), "vars", [], "any", false, false, false, 56), "full_name", [], "any", false, false, false, 56), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "prenom", [], "any", false, false, false, 56), "vars", [], "any", false, false, false, 56), "id", [], "any", false, false, false, 56), "html", null, true);
        echo "\" type=\"text\" class=\"form-control input-shadow\" placeholder=\"Votre prenom\">
\t\t\t\t  ";
        // line 57
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "prenom", [], "any", false, false, false, 57), "setRendered", [], "any", false, false, false, 57);
        // line 58
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "prenom", [], "any", false, false, false, 58), 'errors');
        echo "
          <div class=\"form-control-position\">
\t\t\t\t\t  <i class=\"icon-user\"></i>
\t\t\t\t  </div>
\t\t\t   </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t  <label for=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "email", [], "any", false, false, false, 65), "vars", [], "any", false, false, false, 65), "id", [], "any", false, false, false, 65), "html", null, true);
        echo "\" class=\"sr-only\">Email</label>
\t\t\t   <div class=\"position-relative has-icon-right\">
\t\t\t\t  <input value=\"";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "email", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "value", [], "any", false, false, false, 67), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "email", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "full_name", [], "any", false, false, false, 67), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "email", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "id", [], "any", false, false, false, 67), "html", null, true);
        echo "\" type=\"text\" class=\"form-control input-shadow\" placeholder=\"Votre Email\">
\t\t\t\t  ";
        // line 68
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "email", [], "any", false, false, false, 68), "setRendered", [], "any", false, false, false, 68);
        // line 69
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "email", [], "any", false, false, false, 69), 'errors');
        echo "
          <div class=\"form-control-position\">
\t\t\t\t\t  <i class=\"icon-envelope-open\"></i>
\t\t\t\t  </div>
\t\t\t   </div>
\t\t\t  </div>
        <div class=\"form-group\">
\t\t\t  <label for=\"";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "numtel", [], "any", false, false, false, 76), "vars", [], "any", false, false, false, 76), "id", [], "any", false, false, false, 76), "html", null, true);
        echo "\" class=\"sr-only\">Numero tel</label>
\t\t\t   <div class=\"position-relative has-icon-right\">
\t\t\t\t  <input value=\"";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "numtel", [], "any", false, false, false, 78), "vars", [], "any", false, false, false, 78), "value", [], "any", false, false, false, 78), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "numtel", [], "any", false, false, false, 78), "vars", [], "any", false, false, false, 78), "full_name", [], "any", false, false, false, 78), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "numtel", [], "any", false, false, false, 78), "vars", [], "any", false, false, false, 78), "id", [], "any", false, false, false, 78), "html", null, true);
        echo "\" type=\"text\" class=\"form-control input-shadow\" placeholder=\"Votre numero\">
\t\t\t\t  ";
        // line 79
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "numtel", [], "any", false, false, false, 79), "setRendered", [], "any", false, false, false, 79);
        // line 80
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "numtel", [], "any", false, false, false, 80), 'errors');
        echo "
          <div class=\"form-control-position\">
\t\t\t\t\t  <i class=\"icon col-sm-3zmdi zmdi-bookmark-outline\"></i>
\t\t\t\t  </div>
\t\t\t   </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t   <label for=\"";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "password", [], "any", false, false, false, 87), "vars", [], "any", false, false, false, 87), "id", [], "any", false, false, false, 87), "html", null, true);
        echo "\" class=\"sr-only\">Password</label>
\t\t\t   <div class=\"position-relative has-icon-right\">
\t\t\t\t  <input value=\"";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "password", [], "any", false, false, false, 89), "vars", [], "any", false, false, false, 89), "value", [], "any", false, false, false, 89), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "password", [], "any", false, false, false, 89), "vars", [], "any", false, false, false, 89), "full_name", [], "any", false, false, false, 89), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "password", [], "any", false, false, false, 89), "vars", [], "any", false, false, false, 89), "id", [], "any", false, false, false, 89), "html", null, true);
        echo "\" type=\"password\" class=\"form-control input-shadow\" placeholder=\"Votre mot de passe\">
\t\t\t\t  ";
        // line 90
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "password", [], "any", false, false, false, 90), "setRendered", [], "any", false, false, false, 90);
        // line 91
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "password", [], "any", false, false, false, 91), 'errors');
        echo "
          <div class=\"form-control-position\">
\t\t\t\t\t  <i class=\"icon-lock\"></i>
\t\t\t\t  </div>
\t\t\t   </div>
\t\t\t  </div>
        <button value=\"";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "inscrire", [], "any", false, false, false, 97), "vars", [], "any", false, false, false, 97), "value", [], "any", false, false, false, 97), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "inscrire", [], "any", false, false, false, 97), "vars", [], "any", false, false, false, 97), "full_name", [], "any", false, false, false, 97), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "inscrire", [], "any", false, false, false, 97), "vars", [], "any", false, false, false, 97), "id", [], "any", false, false, false, 97), "html", null, true);
        echo "\" type=\"submit\" class=\"btn btn-light btn-block waves-effect waves-light\">Inscrire</button>
        ";
        // line 98
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "inscrire", [], "any", false, false, false, 98), "setRendered", [], "any", false, false, false, 98);
        // line 99
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), 'form_end');
        echo "
\t\t   </div>
\t\t  </div>
\t     </div>
    
     <!--Start Back To Top Button-->
    <a href=\"javaScript:void();\" class=\"back-to-top\"><i class=\"fa fa-angle-double-up\"></i> </a>
    <!--End Back To Top Button-->
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
\t
\t</div><!--wrapper-->
\t
  <!-- Bootstrap core JavaScript-->
  <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t
  <!-- sidebar-menu js -->
  <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/sidebar-menu.js"), "html", null, true);
        echo "\"></script>
  
  <!-- Custom scripts -->
  <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app-script.js"), "html", null, true);
        echo "\"></script>
  
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "updatecurrentuserdata/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 157,  315 => 154,  309 => 151,  305 => 150,  301 => 149,  247 => 99,  245 => 98,  237 => 97,  227 => 91,  225 => 90,  217 => 89,  212 => 87,  201 => 80,  199 => 79,  191 => 78,  186 => 76,  175 => 69,  173 => 68,  165 => 67,  160 => 65,  149 => 58,  147 => 57,  139 => 56,  134 => 54,  123 => 47,  121 => 46,  113 => 45,  108 => 43,  103 => 41,  97 => 38,  77 => 21,  72 => 19,  67 => 17,  62 => 15,  57 => 13,  43 => 1,);
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
  <title>Tnafes - Modification d'information</title>
  <!-- loader-->

  <!--favicon-->
  <link rel=\"icon\" href=\"{{asset('assets/images/favicon.ico')}}\" type=\"image/x-icon\">
  <!-- Bootstrap core CSS-->
  <link href=\"{{asset('assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\"/>
  <!-- animate CSS-->
  <link href=\"{{asset('assets/css/animate.css')}}\" rel=\"stylesheet\" type=\"text/css\"/>
  <!-- Icons CSS-->
  <link href=\"{{asset('assets/css/icons.css')}}\" rel=\"stylesheet\" type=\"text/css\"/>
  <!-- Custom Style-->
  <link href=\"{{asset('assets/css/app-style.css')}}\" rel=\"stylesheet\"/>
  
</head>

<body class=\"bg-theme bg-theme1\">

<!-- start loader -->
   <div id=\"pageloader-overlay\" class=\"visible incoming\"><div class=\"loader-wrapper-outer\"><div class=\"loader-wrapper-inner\" ><div class=\"loader\"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id=\"wrapper\">

\t<div class=\"card card-authentication1 mx-auto my-4\">
\t\t<div class=\"card-body\">
\t\t <div class=\"card-content p-2\">
\t\t \t<div class=\"text-center\">
                <div class=\"logo menu_logo\"><a href=\"#\"><img src=\"{{ asset('images/123.png') }}\" alt=\"\"></a></div>
\t\t \t</div>
\t\t  <div class=\"card-title text-uppercase text-center py-3\">Modification d'information</div>
\t\t    {{ form_start(form,{'attr': {'novalidate': 'novalidate'}}) }}
\t\t\t  <div class=\"form-group\">
\t\t\t  <label for=\"{{form.nom.vars.id}}\" class=\"sr-only\"></label>
\t\t\t   <div class=\"position-relative has-icon-right\">
\t\t\t\t  <input value=\"{{form.nom.vars.value}}\" name=\"{{form.nom.vars.full_name}}\" id=\"{{form.nom.vars.id}}\" type=\"text\" class=\"form-control input-shadow\" placeholder=\"Votre nom\">
\t\t\t\t  {% do form.nom.setRendered %}
          {{ form_errors(form.nom) }}
          <div class=\"form-control-position\">
\t\t\t\t\t  <i class=\"icon-user\"></i>
\t\t\t\t  </div>
\t\t\t   </div>
\t\t\t  </div>
        <div class=\"form-group\">
\t\t\t  <label for=\"{{form.prenom.vars.id}}\" class=\"sr-only\">Prenom</label>
\t\t\t   <div class=\"position-relative has-icon-right\">
\t\t\t\t  <input value=\"{{form.prenom.vars.value}}\" name=\"{{form.prenom.vars.full_name}}\" id=\"{{form.prenom.vars.id}}\" type=\"text\" class=\"form-control input-shadow\" placeholder=\"Votre prenom\">
\t\t\t\t  {% do form.prenom.setRendered %}
          {{ form_errors(form.prenom) }}
          <div class=\"form-control-position\">
\t\t\t\t\t  <i class=\"icon-user\"></i>
\t\t\t\t  </div>
\t\t\t   </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t  <label for=\"{{form.email.vars.id}}\" class=\"sr-only\">Email</label>
\t\t\t   <div class=\"position-relative has-icon-right\">
\t\t\t\t  <input value=\"{{form.email.vars.value}}\" name=\"{{form.email.vars.full_name}}\" id=\"{{form.email.vars.id}}\" type=\"text\" class=\"form-control input-shadow\" placeholder=\"Votre Email\">
\t\t\t\t  {% do form.email.setRendered %}
          {{ form_errors(form.email) }}
          <div class=\"form-control-position\">
\t\t\t\t\t  <i class=\"icon-envelope-open\"></i>
\t\t\t\t  </div>
\t\t\t   </div>
\t\t\t  </div>
        <div class=\"form-group\">
\t\t\t  <label for=\"{{form.numtel.vars.id}}\" class=\"sr-only\">Numero tel</label>
\t\t\t   <div class=\"position-relative has-icon-right\">
\t\t\t\t  <input value=\"{{form.numtel.vars.value}}\" name=\"{{form.numtel.vars.full_name}}\" id=\"{{form.numtel.vars.id}}\" type=\"text\" class=\"form-control input-shadow\" placeholder=\"Votre numero\">
\t\t\t\t  {% do form.numtel.setRendered %}
          {{ form_errors(form.numtel) }}
          <div class=\"form-control-position\">
\t\t\t\t\t  <i class=\"icon col-sm-3zmdi zmdi-bookmark-outline\"></i>
\t\t\t\t  </div>
\t\t\t   </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t   <label for=\"{{form.password.vars.id}}\" class=\"sr-only\">Password</label>
\t\t\t   <div class=\"position-relative has-icon-right\">
\t\t\t\t  <input value=\"{{form.password.vars.value}}\" name=\"{{form.password.vars.full_name}}\" id=\"{{form.password.vars.id}}\" type=\"password\" class=\"form-control input-shadow\" placeholder=\"Votre mot de passe\">
\t\t\t\t  {% do form.password.setRendered %}
          {{ form_errors(form.password) }}
          <div class=\"form-control-position\">
\t\t\t\t\t  <i class=\"icon-lock\"></i>
\t\t\t\t  </div>
\t\t\t   </div>
\t\t\t  </div>
        <button value=\"{{form.inscrire.vars.value}}\" name=\"{{form.inscrire.vars.full_name}}\" id=\"{{form.inscrire.vars.id}}\" type=\"submit\" class=\"btn btn-light btn-block waves-effect waves-light\">Inscrire</button>
        {% do form.inscrire.setRendered %}
        {{ form_end(form) }}
\t\t   </div>
\t\t  </div>
\t     </div>
    
     <!--Start Back To Top Button-->
    <a href=\"javaScript:void();\" class=\"back-to-top\"><i class=\"fa fa-angle-double-up\"></i> </a>
    <!--End Back To Top Button-->
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
\t
\t</div><!--wrapper-->
\t
  <!-- Bootstrap core JavaScript-->
  <script src=\"{{asset('assets/js/jquery.min.js')}}\"></script>
  <script src=\"{{asset('assets/js/popper.min.js')}}\"></script>
  <script src=\"{{asset('assets/js/bootstrap.min.js')}}\"></script>
\t
  <!-- sidebar-menu js -->
  <script src=\"{{asset('assets/js/sidebar-menu.js')}}\"></script>
  
  <!-- Custom scripts -->
  <script src=\"{{asset('assets/js/app-script.js')}}\"></script>
  
</body>
</html>
", "updatecurrentuserdata/index.html.twig", "C:\\Users\\miral\\OneDrive\\Bureau\\PiDevWeb2.4\\templates\\updatecurrentuserdata\\index.html.twig");
    }
}
