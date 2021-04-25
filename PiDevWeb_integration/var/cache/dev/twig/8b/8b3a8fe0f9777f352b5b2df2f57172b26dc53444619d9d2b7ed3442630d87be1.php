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

/* signup.html.twig */
class __TwigTemplate_d7e05ae2a489e8a5698f62b23143c91771fe2842a45cbe71841f473d06caef18 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "signup.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "signup.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\"/>
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
  <meta name=\"description\" content=\"\"/>
  <meta name=\"author\" content=\"\"/>
  <title>Tnafes - Inscription</title>
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
  <!-- Bootstrap core CSS-->
  <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
  <!-- animate CSS-->
  <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
  <!-- Icons CSS-->
  <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
  <!-- Custom Style-->
  <link href=\"";
        // line 22
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
                <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" class=\"logo-icon\">
\t\t \t</div>
\t\t  <div class=\"card-title text-uppercase text-center py-3\">Inscription</div>
\t\t    ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
\t\t\t  <div class=\"form-group\">
\t\t\t  <label for=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "nom", [], "any", false, false, false, 44), "vars", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44), "html", null, true);
        echo "\" class=\"sr-only\"></label>
\t\t\t   <div class=\"position-relative has-icon-right\">
\t\t\t\t  <input value=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "nom", [], "any", false, false, false, 46), "vars", [], "any", false, false, false, 46), "value", [], "any", false, false, false, 46), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "nom", [], "any", false, false, false, 46), "vars", [], "any", false, false, false, 46), "full_name", [], "any", false, false, false, 46), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "nom", [], "any", false, false, false, 46), "vars", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46), "html", null, true);
        echo "\" type=\"text\" class=\"form-control input-shadow\" placeholder=\"Enterez votre nom\">
\t\t\t\t  ";
        // line 47
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "nom", [], "any", false, false, false, 47), "setRendered", [], "any", false, false, false, 47);
        // line 48
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "nom", [], "any", false, false, false, 48), 'errors');
        echo "
          <div class=\"form-control-position\">
\t\t\t\t\t  <i class=\"icon-user\"></i>
\t\t\t\t  </div>
\t\t\t   </div>
\t\t\t  </div>
        <div class=\"form-group\">
\t\t\t  <label for=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "prenom", [], "any", false, false, false, 55), "vars", [], "any", false, false, false, 55), "id", [], "any", false, false, false, 55), "html", null, true);
        echo "\" class=\"sr-only\">Prenom</label>
\t\t\t   <div class=\"position-relative has-icon-right\">
\t\t\t\t  <input value=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "prenom", [], "any", false, false, false, 57), "vars", [], "any", false, false, false, 57), "value", [], "any", false, false, false, 57), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "prenom", [], "any", false, false, false, 57), "vars", [], "any", false, false, false, 57), "full_name", [], "any", false, false, false, 57), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "prenom", [], "any", false, false, false, 57), "vars", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57), "html", null, true);
        echo "\" type=\"text\" class=\"form-control input-shadow\" placeholder=\"Enterez votre prenom\">
\t\t\t\t  ";
        // line 58
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "prenom", [], "any", false, false, false, 58), "setRendered", [], "any", false, false, false, 58);
        // line 59
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "prenom", [], "any", false, false, false, 59), 'errors');
        echo "
          <div class=\"form-control-position\">
\t\t\t\t\t  <i class=\"icon-user\"></i>
\t\t\t\t  </div>
\t\t\t   </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t  <label for=\"";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "email", [], "any", false, false, false, 66), "vars", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66), "html", null, true);
        echo "\" class=\"sr-only\">Email</label>
\t\t\t   <div class=\"position-relative has-icon-right\">
\t\t\t\t  <input value=\"";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "email", [], "any", false, false, false, 68), "vars", [], "any", false, false, false, 68), "value", [], "any", false, false, false, 68), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "email", [], "any", false, false, false, 68), "vars", [], "any", false, false, false, 68), "full_name", [], "any", false, false, false, 68), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "email", [], "any", false, false, false, 68), "vars", [], "any", false, false, false, 68), "id", [], "any", false, false, false, 68), "html", null, true);
        echo "\" type=\"text\" class=\"form-control input-shadow\" placeholder=\"Enterez votre Email\">
\t\t\t\t  ";
        // line 69
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "email", [], "any", false, false, false, 69), "setRendered", [], "any", false, false, false, 69);
        // line 70
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "email", [], "any", false, false, false, 70), 'errors');
        echo "
          <div class=\"form-control-position\">
\t\t\t\t\t  <i class=\"icon-envelope-open\"></i>
\t\t\t\t  </div>
\t\t\t   </div>
\t\t\t  </div>
        <div class=\"form-group\">
\t\t\t  <label for=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "numtel", [], "any", false, false, false, 77), "vars", [], "any", false, false, false, 77), "id", [], "any", false, false, false, 77), "html", null, true);
        echo "\" class=\"sr-only\">Numero tel</label>
\t\t\t   <div class=\"position-relative has-icon-right\">
\t\t\t\t  <input value=\"";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "numtel", [], "any", false, false, false, 79), "vars", [], "any", false, false, false, 79), "value", [], "any", false, false, false, 79), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "numtel", [], "any", false, false, false, 79), "vars", [], "any", false, false, false, 79), "full_name", [], "any", false, false, false, 79), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "numtel", [], "any", false, false, false, 79), "vars", [], "any", false, false, false, 79), "id", [], "any", false, false, false, 79), "html", null, true);
        echo "\" type=\"text\" class=\"form-control input-shadow\" placeholder=\"Enterez votre numero\">
\t\t\t\t  ";
        // line 80
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "numtel", [], "any", false, false, false, 80), "setRendered", [], "any", false, false, false, 80);
        // line 81
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "numtel", [], "any", false, false, false, 81), 'errors');
        echo "
          <div class=\"form-control-position\">
\t\t\t\t\t  <i class=\"icon col-sm-3zmdi zmdi-bookmark-outline\"></i>
\t\t\t\t  </div>
\t\t\t   </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t   <label for=\"";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "password", [], "any", false, false, false, 88), "vars", [], "any", false, false, false, 88), "id", [], "any", false, false, false, 88), "html", null, true);
        echo "\" class=\"sr-only\">Password</label>
\t\t\t   <div class=\"position-relative has-icon-right\">
\t\t\t\t  <input value=\"";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "password", [], "any", false, false, false, 90), "vars", [], "any", false, false, false, 90), "value", [], "any", false, false, false, 90), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "password", [], "any", false, false, false, 90), "vars", [], "any", false, false, false, 90), "full_name", [], "any", false, false, false, 90), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "password", [], "any", false, false, false, 90), "vars", [], "any", false, false, false, 90), "id", [], "any", false, false, false, 90), "html", null, true);
        echo "\" type=\"password\" class=\"form-control input-shadow\" placeholder=\"Choisissez votre mot de passe\">
\t\t\t\t  ";
        // line 91
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "password", [], "any", false, false, false, 91), "setRendered", [], "any", false, false, false, 91);
        // line 92
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "password", [], "any", false, false, false, 92), 'errors');
        echo "
          <div class=\"form-control-position\">
\t\t\t\t\t  <i class=\"icon-lock\"></i>
\t\t\t\t  </div>
\t\t\t   </div>
\t\t\t  </div>
        <button value=\"";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "inscrire", [], "any", false, false, false, 98), "vars", [], "any", false, false, false, 98), "value", [], "any", false, false, false, 98), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "inscrire", [], "any", false, false, false, 98), "vars", [], "any", false, false, false, 98), "full_name", [], "any", false, false, false, 98), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "inscrire", [], "any", false, false, false, 98), "vars", [], "any", false, false, false, 98), "id", [], "any", false, false, false, 98), "html", null, true);
        echo "\" type=\"submit\" class=\"btn btn-light btn-block waves-effect waves-light\">Inscrire</button>
        ";
        // line 99
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "inscrire", [], "any", false, false, false, 99), "setRendered", [], "any", false, false, false, 99);
        // line 100
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), 'form_end');
        echo "
\t\t   </div>
\t\t  </div>
\t\t  <div class=\"card-footer text-center py-3\">
\t\t    <p class=\"text-warning mb-0\">Vous avez déjà un compte? <a href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\"> Connectez vous ici</a></p>
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
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t
  <!-- sidebar-menu js -->
  <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/sidebar-menu.js"), "html", null, true);
        echo "\"></script>
  
  <!-- Custom scripts -->
  <script src=\"";
        // line 161
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
        return "signup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 161,  328 => 158,  322 => 155,  318 => 154,  314 => 153,  262 => 104,  254 => 100,  252 => 99,  244 => 98,  234 => 92,  232 => 91,  224 => 90,  219 => 88,  208 => 81,  206 => 80,  198 => 79,  193 => 77,  182 => 70,  180 => 69,  172 => 68,  167 => 66,  156 => 59,  154 => 58,  146 => 57,  141 => 55,  130 => 48,  128 => 47,  120 => 46,  115 => 44,  110 => 42,  104 => 39,  84 => 22,  79 => 20,  74 => 18,  69 => 16,  64 => 14,  59 => 12,  55 => 11,  43 => 1,);
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
  <title>Tnafes - Inscription</title>
  <!-- loader-->
  <link href=\"{{asset('assets/css/pace.min.css')}}\" rel=\"stylesheet\"/>
  <script src=\"{{asset('assets/js/pace.min.js')}}\"></script>
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
                <img src=\"{{ asset('assets/images/logo.png') }}\" class=\"logo-icon\">
\t\t \t</div>
\t\t  <div class=\"card-title text-uppercase text-center py-3\">Inscription</div>
\t\t    {{ form_start(form,{'attr': {'novalidate': 'novalidate'}}) }}
\t\t\t  <div class=\"form-group\">
\t\t\t  <label for=\"{{form.nom.vars.id}}\" class=\"sr-only\"></label>
\t\t\t   <div class=\"position-relative has-icon-right\">
\t\t\t\t  <input value=\"{{form.nom.vars.value}}\" name=\"{{form.nom.vars.full_name}}\" id=\"{{form.nom.vars.id}}\" type=\"text\" class=\"form-control input-shadow\" placeholder=\"Enterez votre nom\">
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
\t\t\t\t  <input value=\"{{form.prenom.vars.value}}\" name=\"{{form.prenom.vars.full_name}}\" id=\"{{form.prenom.vars.id}}\" type=\"text\" class=\"form-control input-shadow\" placeholder=\"Enterez votre prenom\">
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
\t\t\t\t  <input value=\"{{form.email.vars.value}}\" name=\"{{form.email.vars.full_name}}\" id=\"{{form.email.vars.id}}\" type=\"text\" class=\"form-control input-shadow\" placeholder=\"Enterez votre Email\">
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
\t\t\t\t  <input value=\"{{form.numtel.vars.value}}\" name=\"{{form.numtel.vars.full_name}}\" id=\"{{form.numtel.vars.id}}\" type=\"text\" class=\"form-control input-shadow\" placeholder=\"Enterez votre numero\">
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
\t\t\t\t  <input value=\"{{form.password.vars.value}}\" name=\"{{form.password.vars.full_name}}\" id=\"{{form.password.vars.id}}\" type=\"password\" class=\"form-control input-shadow\" placeholder=\"Choisissez votre mot de passe\">
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
\t\t  <div class=\"card-footer text-center py-3\">
\t\t    <p class=\"text-warning mb-0\">Vous avez déjà un compte? <a href=\"{{path('app_login')}}\"> Connectez vous ici</a></p>
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
", "signup.html.twig", "C:\\Users\\miral\\OneDrive\\Bureau\\PiDevWeb2.33\\templates\\signup.html.twig");
    }
}
