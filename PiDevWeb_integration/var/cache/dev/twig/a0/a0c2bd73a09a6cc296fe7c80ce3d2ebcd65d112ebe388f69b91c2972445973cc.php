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

/* footer.html.twig */
class __TwigTemplate_05dcc8aeca969364509e52cc730d70a570d49d52a6cf7f03502ad9b8715e9a9e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        echo "<!-- Footer -->
<head></head>
<footer class=\"footer\">
    <div class=\"container\">
        <div class=\"row\">

            <!-- Footer Column -->
            <div class=\"col-lg-3 footer_column\">
                <div class=\"footer_col\">
                    <div class=\"footer_content footer_about\">
                        <div class=\"logo_container footer_logo\">
                            <div class=\"logo\"><a href=\"#\"><img src=\"images/logo.png\" alt=\"\">travelix</a></div>
                        </div>
                        <p class=\"footer_about_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer eleme ntum orci eu vehicula pretium.</p>
                        <ul class=\"footer_social_list\">
                            <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-pinterest\"></i></a></li>
                            <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-facebook-f\"></i></a></li>
                            <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                            <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Footer Column -->
            <div class=\"col-lg-3 footer_column\">

            </div>

            <!-- Footer Column -->
            <div class=\"col-lg-3 footer_column\">
                <div class=\"footer_col\">
                    <div class=\"footer_title\">tags</div>
                    <div class=\"footer_content footer_tags\">
                        <ul class=\"tags_list clearfix\">
                            <li class=\"tag_item\"><a href=\"#\">design</a></li>
                            <li class=\"tag_item\"><a href=\"#\">fashion</a></li>
                            <li class=\"tag_item\"><a href=\"#\">music</a></li>
                            <li class=\"tag_item\"><a href=\"#\">video</a></li>
                            <li class=\"tag_item\"><a href=\"#\">party</a></li>
                            <li class=\"tag_item\"><a href=\"#\">photography</a></li>
                            <li class=\"tag_item\"><a href=\"#\">adventure</a></li>
                            <li class=\"tag_item\"><a href=\"#\">travel</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Footer Column -->
            <div class=\"col-lg-3 footer_column\">
                <div class=\"footer_col\">
                    <div class=\"footer_title\">contact info</div>
                    <div class=\"footer_content footer_contact\">
                        <ul class=\"contact_info_list\">
                            <li class=\"contact_info_item d-flex flex-row\">
                                <div><div class=\"contact_info_icon\"><img src=\"images/placeholder.svg\" alt=\"\"></div></div>
                                <div class=\"contact_info_text\">4127 Raoul Wallenber 45b-c Gibraltar</div>
                            </li>
                            <li class=\"contact_info_item d-flex flex-row\">
                                <div><div class=\"contact_info_icon\"><img src=\"images/phone-call.svg\" alt=\"\"></div></div>
                                <div class=\"contact_info_text\">2556-808-8613</div>
                            </li>
                            <li class=\"contact_info_item d-flex flex-row\">
                                <div><div class=\"contact_info_icon\"><img src=\"images/message.svg\" alt=\"\"></div></div>
                                <div class=\"contact_info_text\"><a href=\"mailto:contactme@gmail.com?Subject=Hello\" target=\"_top\">contactme@gmail.com</a></div>
                            </li>
                            <li class=\"contact_info_item d-flex flex-row\">
                                <div><div class=\"contact_info_icon\"><img src=\"images/planet-earth.svg\" alt=\"\"></div></div>
                                <div class=\"contact_info_text\"><a href=\"https://colorlib.com\">www.colorlib.com</a></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>

<!-- Copyright -->

<div class=\"copyright\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 order-lg-1 order-2  \">

            </div>
            <div class=\"col-lg-9 order-lg-2 order-1\">
                <div class=\"footer_nav_container d-flex flex-row align-items-center justify-content-lg-end\">
                    <div class=\"footer_nav\">
                        <ul class=\"footer_nav_list\">
                            <li class=\"footer_nav_item\"><a href=\"#\">home</a></li>
                            <li class=\"footer_nav_item\"><a href=\"about.html\">about us</a></li>
                            <li class=\"footer_nav_item\"><a href=\"offers.html\">offers</a></li>
                            <li class=\"footer_nav_item\"><a href=\"blog.html\">news</a></li>
                            <li class=\"footer_nav_item\"><a href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_new");
        echo "\">contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 97,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer -->
<head></head>
<footer class=\"footer\">
    <div class=\"container\">
        <div class=\"row\">

            <!-- Footer Column -->
            <div class=\"col-lg-3 footer_column\">
                <div class=\"footer_col\">
                    <div class=\"footer_content footer_about\">
                        <div class=\"logo_container footer_logo\">
                            <div class=\"logo\"><a href=\"#\"><img src=\"images/logo.png\" alt=\"\">travelix</a></div>
                        </div>
                        <p class=\"footer_about_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer eleme ntum orci eu vehicula pretium.</p>
                        <ul class=\"footer_social_list\">
                            <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-pinterest\"></i></a></li>
                            <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-facebook-f\"></i></a></li>
                            <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                            <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Footer Column -->
            <div class=\"col-lg-3 footer_column\">

            </div>

            <!-- Footer Column -->
            <div class=\"col-lg-3 footer_column\">
                <div class=\"footer_col\">
                    <div class=\"footer_title\">tags</div>
                    <div class=\"footer_content footer_tags\">
                        <ul class=\"tags_list clearfix\">
                            <li class=\"tag_item\"><a href=\"#\">design</a></li>
                            <li class=\"tag_item\"><a href=\"#\">fashion</a></li>
                            <li class=\"tag_item\"><a href=\"#\">music</a></li>
                            <li class=\"tag_item\"><a href=\"#\">video</a></li>
                            <li class=\"tag_item\"><a href=\"#\">party</a></li>
                            <li class=\"tag_item\"><a href=\"#\">photography</a></li>
                            <li class=\"tag_item\"><a href=\"#\">adventure</a></li>
                            <li class=\"tag_item\"><a href=\"#\">travel</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Footer Column -->
            <div class=\"col-lg-3 footer_column\">
                <div class=\"footer_col\">
                    <div class=\"footer_title\">contact info</div>
                    <div class=\"footer_content footer_contact\">
                        <ul class=\"contact_info_list\">
                            <li class=\"contact_info_item d-flex flex-row\">
                                <div><div class=\"contact_info_icon\"><img src=\"images/placeholder.svg\" alt=\"\"></div></div>
                                <div class=\"contact_info_text\">4127 Raoul Wallenber 45b-c Gibraltar</div>
                            </li>
                            <li class=\"contact_info_item d-flex flex-row\">
                                <div><div class=\"contact_info_icon\"><img src=\"images/phone-call.svg\" alt=\"\"></div></div>
                                <div class=\"contact_info_text\">2556-808-8613</div>
                            </li>
                            <li class=\"contact_info_item d-flex flex-row\">
                                <div><div class=\"contact_info_icon\"><img src=\"images/message.svg\" alt=\"\"></div></div>
                                <div class=\"contact_info_text\"><a href=\"mailto:contactme@gmail.com?Subject=Hello\" target=\"_top\">contactme@gmail.com</a></div>
                            </li>
                            <li class=\"contact_info_item d-flex flex-row\">
                                <div><div class=\"contact_info_icon\"><img src=\"images/planet-earth.svg\" alt=\"\"></div></div>
                                <div class=\"contact_info_text\"><a href=\"https://colorlib.com\">www.colorlib.com</a></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>

<!-- Copyright -->

<div class=\"copyright\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 order-lg-1 order-2  \">

            </div>
            <div class=\"col-lg-9 order-lg-2 order-1\">
                <div class=\"footer_nav_container d-flex flex-row align-items-center justify-content-lg-end\">
                    <div class=\"footer_nav\">
                        <ul class=\"footer_nav_list\">
                            <li class=\"footer_nav_item\"><a href=\"#\">home</a></li>
                            <li class=\"footer_nav_item\"><a href=\"about.html\">about us</a></li>
                            <li class=\"footer_nav_item\"><a href=\"offers.html\">offers</a></li>
                            <li class=\"footer_nav_item\"><a href=\"blog.html\">news</a></li>
                            <li class=\"footer_nav_item\"><a href=\"{{ path('reclamation_new') }}\">contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>", "footer.html.twig", "C:\\Users\\miral\\OneDrive\\Bureau\\PiDevWeb2.33\\templates\\footer.html.twig");
    }
}
