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

/* security/login.html.twig */
class __TwigTemplate_aad2ee31d55534abb638143854c2cfa5911ad47212744bd44202379eb53f62e7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\"/>
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
  <meta name=\"description\" content=\"\"/>
  <meta name=\"author\" content=\"\"/>
  <title>Tnafes - Login</title>
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

 <div class=\"loader-wrapper\"><div class=\"lds-ring\"></div></div>
\t<div class=\"card card-authentication1 mx-auto my-5\">
\t\t<div class=\"card-body\">
\t\t <div class=\"card-content p-2\">
\t\t \t<div class=\"text-center\">
                <div class=\"logo menu_logo\"><a href=\"#\"><img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/123.png"), "html", null, true);
        echo "\" alt=\"\"></a></div>
\t\t \t</div>
\t\t  <div class=\"card-title text-uppercase text-center py-3\">Se connecter</div>
          ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 93
        echo "\t\t   </div>
\t\t  </div>
\t\t  <div class=\"card-footer text-center py-3\">
\t\t    <p class=\"text-warning mb-0\">Pas de compte? <a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signup");
        echo "\">Créer un compte</a></p>
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
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t
  <!-- sidebar-menu js -->
  <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/sidebar-menu.js"), "html", null, true);
        echo "\"></script>
  
  <!-- Custom scripts -->
  <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app-script.js"), "html", null, true);
        echo "\"></script>
  
</body>
</html>
    

    
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 42
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 43
        echo "\t\t    <form method=\"post\">
        ";
        // line 44
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 44, $this->source); })())) {
            // line 45
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 45, $this->source); })()), "messageKey", [], "any", false, false, false, 45), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 45, $this->source); })()), "messageData", [], "any", false, false, false, 45), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 47
        echo "\t\t\t  <div class=\"form-group\">
              <label for=\"inputEmail\" class=\"sr-only\">Email</label>
\t\t\t   <div class=\"position-relative has-icon-right\">
                <input type=\"email\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control input-shadow\" placeholder=\"Enter Username\" required autofocus>
\t\t\t\t  <div class=\"form-control-position\">
\t\t\t\t\t  <i class=\"icon-user\"></i>
\t\t\t\t  </div>
\t\t\t   </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
              <label for=\"inputPassword\" class=\"sr-only\">Mot de passe</label>
\t\t\t   <div class=\"position-relative has-icon-right\">
                  <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control input-shadow\" placeholder=\"Enter Password\" required>
\t\t\t\t  <div class=\"form-control-position\">
\t\t\t\t\t  <i class=\"icon-lock\"></i>
\t\t\t\t  </div>
\t\t\t   </div>
\t\t\t  </div>
\t\t\t<div class=\"form-row\">
\t\t\t 
       <div class=\"card-footer text-center py-3\">
\t\t    <p class=\"text-warning mb-0\">Mot de passe oublié? <a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\"> Réinitialisez votre mot de passe</a></p>
\t\t  </div>
\t\t\t  <a href=\"reset-password.html\"></a>
\t\t\t 
\t\t\t</div>
      <input type=\"hidden\" name=\"_csrf_token\"
           value=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
    >

    ";
        // line 87
        echo "\t\t\t <button type=\"submit\" class=\"btn btn-light btn-block\">Se connecter</button>
\t\t\t  
\t\t\t 
\t\t\t 
\t\t\t </form>
             ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 87,  258 => 74,  249 => 68,  228 => 50,  223 => 47,  217 => 45,  215 => 44,  212 => 43,  202 => 42,  184 => 153,  178 => 150,  172 => 147,  168 => 146,  164 => 145,  112 => 96,  107 => 93,  105 => 42,  99 => 39,  78 => 21,  73 => 19,  68 => 17,  63 => 15,  58 => 13,  44 => 1,);
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
  <title>Tnafes - Login</title>
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

 <div class=\"loader-wrapper\"><div class=\"lds-ring\"></div></div>
\t<div class=\"card card-authentication1 mx-auto my-5\">
\t\t<div class=\"card-body\">
\t\t <div class=\"card-content p-2\">
\t\t \t<div class=\"text-center\">
                <div class=\"logo menu_logo\"><a href=\"#\"><img src=\"{{ asset('images/123.png') }}\" alt=\"\"></a></div>
\t\t \t</div>
\t\t  <div class=\"card-title text-uppercase text-center py-3\">Se connecter</div>
          {% block body %}
\t\t    <form method=\"post\">
        {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
        {% endif %}
\t\t\t  <div class=\"form-group\">
              <label for=\"inputEmail\" class=\"sr-only\">Email</label>
\t\t\t   <div class=\"position-relative has-icon-right\">
                <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control input-shadow\" placeholder=\"Enter Username\" required autofocus>
\t\t\t\t  <div class=\"form-control-position\">
\t\t\t\t\t  <i class=\"icon-user\"></i>
\t\t\t\t  </div>
\t\t\t   </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
              <label for=\"inputPassword\" class=\"sr-only\">Mot de passe</label>
\t\t\t   <div class=\"position-relative has-icon-right\">
                  <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control input-shadow\" placeholder=\"Enter Password\" required>
\t\t\t\t  <div class=\"form-control-position\">
\t\t\t\t\t  <i class=\"icon-lock\"></i>
\t\t\t\t  </div>
\t\t\t   </div>
\t\t\t  </div>
\t\t\t<div class=\"form-row\">
\t\t\t 
       <div class=\"card-footer text-center py-3\">
\t\t    <p class=\"text-warning mb-0\">Mot de passe oublié? <a href=\"{{ path('app_forgot_password_request') }}\"> Réinitialisez votre mot de passe</a></p>
\t\t  </div>
\t\t\t  <a href=\"reset-password.html\"></a>
\t\t\t 
\t\t\t</div>
      <input type=\"hidden\" name=\"_csrf_token\"
           value=\"{{ csrf_token('authenticate') }}\"
    >

    {#
        Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
        See https://symfony.com/doc/current/security/remember_me.html

        <div class=\"checkbox mb-3\">
            <label>
                <input type=\"checkbox\" name=\"_remember_me\"> Remember me
            </label>
        </div>
    #}
\t\t\t <button type=\"submit\" class=\"btn btn-light btn-block\">Se connecter</button>
\t\t\t  
\t\t\t 
\t\t\t 
\t\t\t </form>
             {% endblock %}
\t\t   </div>
\t\t  </div>
\t\t  <div class=\"card-footer text-center py-3\">
\t\t    <p class=\"text-warning mb-0\">Pas de compte? <a href=\"{{ path('signup') }}\">Créer un compte</a></p>
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
    

    
", "security/login.html.twig", "C:\\Users\\miral\\OneDrive\\Bureau\\PiDevWeb2.33\\templates\\security\\login.html.twig");
    }
}
