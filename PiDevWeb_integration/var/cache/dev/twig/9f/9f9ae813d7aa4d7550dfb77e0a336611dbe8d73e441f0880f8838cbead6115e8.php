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

/* topbarheader.html.twig */
class __TwigTemplate_a72848bf1e9013f99a8db98b9ca46124d38067b2ae6cb3523999879e9263c9d8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "topbarheader.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "topbarheader.html.twig"));

        // line 1
        echo "<header class=\"topbar-nav\">
<nav class=\"navbar navbar-expand fixed-top\">
  <ul class=\"navbar-nav mr-auto align-items-center\">
    <li class=\"nav-item\">
      <a class=\"nav-link toggle-menu\" href=\"javascript:void();\">
        <i class=\"icon-menu menu-icon\"></i>
      </a>
    </li>
  </ul>
  <ul class=\"navbar-nav align-items-center right-nav-link\">  
    <li class=\"nav-item\">
      <a class=\"nav-link dropdown-toggle dropdown-toggle-nocaret\" data-toggle=\"dropdown\" href=\"#\">
        <span class=\"user-profile\"><img src=\"https://via.placeholder.com/110x110\" class=\"img-circle\" alt=\"user avatar\"></span>
      </a>
      ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15)) {
            // line 16
            echo "        <ul class=\"dropdown-menu dropdown-menu-right\">
          <li class=\"dropdown-item user-details\">
            <a href=\"javaScript:void();\">
              <div class=\"media\">
                <div class=\"avatar\"><img class=\"align-self-start mr-3\" src=\"https://via.placeholder.com/110x110\" alt=\"user avatar\"></div>
                  <div class=\"media-body\">
                    <div class=\"user-subtitle\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "nom", [], "any", false, false, false, 22), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "prenom", [], "any", false, false, false, 22), "html", null, true);
            echo "</div>
                    <div class=\"user-subtitle\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "email", [], "any", false, false, false, 23), "html", null, true);
            echo "</div>
                  </div>
              </div>
            </a>
          </li>
          <li class=\"dropdown-divider\"></li>
          <li class=\"dropdown-item\"><i class=\"icon-settings mr-2\"></i> <a href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updatecurrentuserdata");
            echo "\">Changer mes informations</a></li>
          <li class=\"dropdown-divider\"></li>
          <li class=\"dropdown-item\"><i class=\"icon-power mr-2\"></i> <a href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Se deconnecter</a></li>
        </ul>
      ";
        }
        // line 34
        echo "    </li>
  </ul>
</nav>
</header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "topbarheader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 34,  89 => 31,  84 => 29,  75 => 23,  69 => 22,  61 => 16,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"topbar-nav\">
<nav class=\"navbar navbar-expand fixed-top\">
  <ul class=\"navbar-nav mr-auto align-items-center\">
    <li class=\"nav-item\">
      <a class=\"nav-link toggle-menu\" href=\"javascript:void();\">
        <i class=\"icon-menu menu-icon\"></i>
      </a>
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
</header>", "topbarheader.html.twig", "C:\\Users\\miral\\OneDrive\\Bureau\\PiDevWeb2.33\\templates\\topbarheader.html.twig");
    }
}
