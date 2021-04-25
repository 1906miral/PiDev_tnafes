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

/* reset_password/request.html.twig */
class __TwigTemplate_48d8626a0c8c45df0925eba549592d965c63543f2e30f137d7c2eb5a25e9a573 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/request.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/request.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\"/>
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
  <meta name=\"description\" content=\"\"/>
  <meta name=\"author\" content=\"\"/>
  <title>Tnafes - Mot de pass oublié</title>
  <!-- loader-->
  <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/pace.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
  <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/pace.min.js"), "html", null, true);
        echo "\"></script>
  <!--favicon-->
  <link rel=\"icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
  <!-- Bootstrap core CSS-->
  <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
  <!-- animate CSS-->
  <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
  <!-- Icons CSS-->
  <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
  <!-- Custom Style-->
  <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/app-style.css"), "html", null, true);
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
\t\t \t\t<img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-icon.png"), "html", null, true);
        echo "\" alt=\"logo icon\">
\t\t \t</div>
\t\t  <div class=\"card-title text-uppercase text-center py-3\">Mot de pass oublié</div>
          ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 70
        echo "\t\t   </div>
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
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t
  <!-- sidebar-menu js -->
  <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/sidebar-menu.js"), "html", null, true);
        echo "\"></script>
  
  <!-- Custom scripts -->
  <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/app-script.js"), "html", null, true);
        echo "\"></script>
  
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 43
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "flashes", [0 => "reset_password_error"], "method", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 45
            echo "        <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 47, $this->source); })()), 'form_start');
        echo "
        
\t\t\t  <div class=\"form-group\">
\t\t\t  <label for=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 50, $this->source); })()), "email", [], "any", false, false, false, 50), "vars", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50), "html", null, true);
        echo "\" class=\"sr-only\">Email</label>
\t\t\t   <div class=\"position-relative has-icon-right\">
\t\t\t\t  <input value=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 52, $this->source); })()), "email", [], "any", false, false, false, 52), "vars", [], "any", false, false, false, 52), "value", [], "any", false, false, false, 52), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 52, $this->source); })()), "email", [], "any", false, false, false, 52), "vars", [], "any", false, false, false, 52), "full_name", [], "any", false, false, false, 52), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 52, $this->source); })()), "email", [], "any", false, false, false, 52), "vars", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52), "html", null, true);
        echo "\" type=\"text\" class=\"form-control input-shadow\" placeholder=\"Enterez votre Email\">
\t\t\t\t  ";
        // line 53
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 53, $this->source); })()), "email", [], "any", false, false, false, 53), "setRendered", [], "any", false, false, false, 53);
        // line 54
        echo "          <div class=\"form-control-position\">
\t\t\t\t\t  <i class=\"icon-envelope-open\"></i>
\t\t\t\t  </div>
\t\t\t   </div>
\t\t\t  </div>
              <div>
            <small>
                Entrez votre adresse e-mail et nous vous enverrons un
                lien pour réinitialiser votre mot de passe.
            </small>
        </div>
        
        <button class=\"btn btn-light btn-block waves-effect waves-light\">Envoyer un e-mail de réinitialisation du mot de passe</button>
        ";
        // line 67
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 67, $this->source); })()), "email", [], "any", false, false, false, 67), "setRendered", [], "any", false, false, false, 67);
        // line 68
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 68, $this->source); })()), 'form_end');
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reset_password/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 68,  260 => 67,  245 => 54,  243 => 53,  235 => 52,  230 => 50,  223 => 47,  214 => 45,  209 => 44,  199 => 43,  185 => 127,  179 => 124,  173 => 121,  169 => 120,  165 => 119,  114 => 70,  112 => 43,  106 => 40,  86 => 23,  81 => 21,  76 => 19,  71 => 17,  66 => 15,  61 => 13,  57 => 12,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\"/>
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
  <meta name=\"description\" content=\"\"/>
  <meta name=\"author\" content=\"\"/>
  <title>Tnafes - Mot de pass oublié</title>
  <!-- loader-->
  <link href=\"{{asset('css/pace.min.css')}}\" rel=\"stylesheet\"/>
  <script src=\"{{asset('js/pace.min.js')}}\"></script>
  <!--favicon-->
  <link rel=\"icon\" href=\"{{asset('images/favicon.ico')}}\" type=\"image/x-icon\">
  <!-- Bootstrap core CSS-->
  <link href=\"{{asset('css/bootstrap.min.css')}}\" rel=\"stylesheet\"/>
  <!-- animate CSS-->
  <link href=\"{{asset('css/animate.css')}}\" rel=\"stylesheet\" type=\"text/css\"/>
  <!-- Icons CSS-->
  <link href=\"{{asset('css/icons.css')}}\" rel=\"stylesheet\" type=\"text/css\"/>
  <!-- Custom Style-->
  <link href=\"{{asset('css/app-style.css')}}\" rel=\"stylesheet\"/>
  
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
\t\t \t\t<img src=\"{{asset('images/logo-icon.png')}}\" alt=\"logo icon\">
\t\t \t</div>
\t\t  <div class=\"card-title text-uppercase text-center py-3\">Mot de pass oublié</div>
          {% block body %}
          {% for flashError in app.flashes('reset_password_error') %}
        <div class=\"alert alert-danger\" role=\"alert\">{{ flashError }}</div>
        {% endfor %}
\t\t    {{ form_start(requestForm) }}
        
\t\t\t  <div class=\"form-group\">
\t\t\t  <label for=\"{{requestForm.email.vars.id}}\" class=\"sr-only\">Email</label>
\t\t\t   <div class=\"position-relative has-icon-right\">
\t\t\t\t  <input value=\"{{requestForm.email.vars.value}}\" name=\"{{requestForm.email.vars.full_name}}\" id=\"{{requestForm.email.vars.id}}\" type=\"text\" class=\"form-control input-shadow\" placeholder=\"Enterez votre Email\">
\t\t\t\t  {% do requestForm.email.setRendered %}
          <div class=\"form-control-position\">
\t\t\t\t\t  <i class=\"icon-envelope-open\"></i>
\t\t\t\t  </div>
\t\t\t   </div>
\t\t\t  </div>
              <div>
            <small>
                Entrez votre adresse e-mail et nous vous enverrons un
                lien pour réinitialiser votre mot de passe.
            </small>
        </div>
        
        <button class=\"btn btn-light btn-block waves-effect waves-light\">Envoyer un e-mail de réinitialisation du mot de passe</button>
        {% do requestForm.email.setRendered %}
        {{ form_end(requestForm) }}
        {% endblock %}
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
  <script src=\"{{asset('js/jquery.min.js')}}\"></script>
  <script src=\"{{asset('js/popper.min.js')}}\"></script>
  <script src=\"{{asset('js/bootstrap.min.js')}}\"></script>
\t
  <!-- sidebar-menu js -->
  <script src=\"{{asset('js/sidebar-menu.js')}}\"></script>
  
  <!-- Custom scripts -->
  <script src=\"{{asset('js/app-script.js')}}\"></script>
  
</body>
</html>", "reset_password/request.html.twig", "C:\\Users\\miral\\OneDrive\\Bureau\\PiDevWeb2.33\\templates\\reset_password\\request.html.twig");
    }
}
