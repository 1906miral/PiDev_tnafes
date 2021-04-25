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

/* bloque.html.twig */
class __TwigTemplate_a8b3b4e6530c2d553e1e76882ea0bf0e6dfa1528f09c27fd925c15821fffd6f5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bloque.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bloque.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\"/>
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
  <meta name=\"description\" content=\"\"/>
  <meta name=\"author\" content=\"\"/>
  <title>Tnafes - blocage d'un client</title>
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
        $this->loadTemplate("navbar.html.twig", "bloque.html.twig", 41)->display($context);
        // line 42
        echo "   <!--End sidebar-wrapper-->

<!--Start topbar header-->
      ";
        // line 45
        $this->loadTemplate("topbarheader.html.twig", "bloque.html.twig", 45)->display($context);
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
           <div class=\"card-title\">Bloquer un client</div>
           <hr>

            ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 60, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
            <div class=\"form-group\">
            <input value=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 62, $this->source); })()), "idClient", [], "any", false, false, false, 62), "vars", [], "any", false, false, false, 62), "value", [], "any", false, false, false, 62), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 62, $this->source); })()), "idClient", [], "any", false, false, false, 62), "vars", [], "any", false, false, false, 62), "full_name", [], "any", false, false, false, 62), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 62, $this->source); })()), "idClient", [], "any", false, false, false, 62), "vars", [], "any", false, false, false, 62), "id", [], "any", false, false, false, 62), "html", null, true);
        echo "\" type=\"hidden\" class=\"form-control\" placeholder=\"permaban\">
           ";
        // line 63
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 63, $this->source); })()), "idClient", [], "any", false, false, false, 63), "setRendered", [], "any", false, false, false, 63);
        // line 64
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 64, $this->source); })()), "idClient", [], "any", false, false, false, 64), 'errors');
        echo "
           </div>
           <div class=\"form-group\">
            <input value=\"";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 67, $this->source); })()), "permaban", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "value", [], "any", false, false, false, 67), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 67, $this->source); })()), "permaban", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "full_name", [], "any", false, false, false, 67), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 67, $this->source); })()), "permaban", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "id", [], "any", false, false, false, 67), "html", null, true);
        echo "\" type=\"hidden\" class=\"form-control\" placeholder=\"permaban\">
           ";
        // line 68
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 68, $this->source); })()), "permaban", [], "any", false, false, false, 68), "setRendered", [], "any", false, false, false, 68);
        // line 69
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 69, $this->source); })()), "permaban", [], "any", false, false, false, 69), 'errors');
        echo "
           </div>
           <div class=\"form-group\">
            <label for=\"";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 72, $this->source); })()), "dateblock", [], "any", false, false, false, 72), "vars", [], "any", false, false, false, 72), "id", [], "any", false, false, false, 72), "html", null, true);
        echo "\">dateblock</label>
            <input name=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 73, $this->source); })()), "dateblock", [], "any", false, false, false, 73), "vars", [], "any", false, false, false, 73), "full_name", [], "any", false, false, false, 73), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 73, $this->source); })()), "dateblock", [], "any", false, false, false, 73), "vars", [], "any", false, false, false, 73), "id", [], "any", false, false, false, 73), "html", null, true);
        echo "\" type=\"date\" class=\"form-control\" placeholder=\"dateblock\">
            ";
        // line 74
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 74, $this->source); })()), "dateblock", [], "any", false, false, false, 74), "setRendered", [], "any", false, false, false, 74);
        // line 75
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 75, $this->source); })()), "dateblock", [], "any", false, false, false, 75), 'errors');
        echo "
           </div>
           
           <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btn-light px-5\"><i class=\"icon-lock\"></i> Valider</button>
          </div>
          ";
        // line 81
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formclient"]) || array_key_exists("formclient", $context) ? $context["formclient"] : (function () { throw new RuntimeError('Variable "formclient" does not exist.', 81, $this->source); })()), 'form_end');
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
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t
 <!-- simplebar js -->
  <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/simplebar/js/simplebar.js"), "html", null, true);
        echo "\"></script>
  <!-- sidebar-menu js -->
  <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/sidebar-menu.js"), "html", null, true);
        echo "\"></script>
  
  <!-- Custom scripts -->
  <script src=\"";
        // line 161
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
        return "bloque.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 161,  290 => 158,  285 => 156,  279 => 153,  275 => 152,  271 => 151,  198 => 81,  188 => 75,  186 => 74,  180 => 73,  176 => 72,  169 => 69,  167 => 68,  159 => 67,  152 => 64,  150 => 63,  142 => 62,  137 => 60,  121 => 46,  119 => 45,  114 => 42,  112 => 41,  94 => 26,  89 => 24,  84 => 22,  79 => 20,  74 => 18,  69 => 16,  64 => 14,  59 => 12,  55 => 11,  43 => 1,);
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
  <title>Tnafes - blocage d'un client</title>
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
           <div class=\"card-title\">Bloquer un client</div>
           <hr>

            {{ form_start(formclient,{'attr': {'novalidate': 'novalidate'}}) }}
            <div class=\"form-group\">
            <input value=\"{{formclient.idClient.vars.value}}\" name=\"{{formclient.idClient.vars.full_name}}\" id=\"{{formclient.idClient.vars.id}}\" type=\"hidden\" class=\"form-control\" placeholder=\"permaban\">
           {% do formclient.idClient.setRendered %}
          {{ form_errors(formclient.idClient) }}
           </div>
           <div class=\"form-group\">
            <input value=\"{{formclient.permaban.vars.value}}\" name=\"{{formclient.permaban.vars.full_name}}\" id=\"{{formclient.permaban.vars.id}}\" type=\"hidden\" class=\"form-control\" placeholder=\"permaban\">
           {% do formclient.permaban.setRendered %}
          {{ form_errors(formclient.permaban) }}
           </div>
           <div class=\"form-group\">
            <label for=\"{{formclient.dateblock.vars.id}}\">dateblock</label>
            <input name=\"{{formclient.dateblock.vars.full_name}}\" id=\"{{formclient.dateblock.vars.id}}\" type=\"date\" class=\"form-control\" placeholder=\"dateblock\">
            {% do formclient.dateblock.setRendered %}
          {{ form_errors(formclient.dateblock) }}
           </div>
           
           <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btn-light px-5\"><i class=\"icon-lock\"></i> Valider</button>
          </div>
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
", "bloque.html.twig", "C:\\Users\\miral\\OneDrive\\Bureau\\PiDevWeb2.33\\templates\\bloque.html.twig");
    }
}
