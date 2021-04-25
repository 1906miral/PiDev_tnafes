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

/* publication/publication.html.twig */
class __TwigTemplate_92d04d617bbf7778a6073d358e07c0a730236fc174e67aba0248233e032a2d11 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'Posts' => [$this, 'block_Posts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "pub.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "publication/publication.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "publication/publication.html.twig"));

        $this->parent = $this->loadTemplate("pub.html.twig", "publication/publication.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_Posts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Posts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Posts"));

        // line 3
        echo "    <div class=\"blog\">
    <div class=\"container\">
    <div class=\"row\">

    <!-- Blog Content -->

    <div class=\"col-lg-8\">
        <script >
            /* Voici la fonction javascript qui change la propriété \"display\"
            pour afficher ou non le div selon que ce soit \"none\" ou \"block\". */
            function togg(){
                let d1 = document.getElementById(\"d1\");
                if(getComputedStyle(d1).display != \"none\"){
                    d1.style.display = \"none\";
                } else {
                    d1.style.display = \"block\";
                }
            };
            function AfficherMasquer()
            {
                divInfo = document.getElementById('d1');

                if (divInfo.style.display == 'none')
                    divInfo.style.display = 'block';
                else
                    divInfo.style.display = 'none';

            }

        </script>
    <div class=\"blog_post_container\">
    <div class=\"blog_post\">
        <div class=\"blog_post_image\">
            <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 36, $this->source); })()), "imageFile"), "html", null, true);
        echo "\" height=\"300\">
            <div class=\"blog_post_date d-flex flex-column align-items-center justify-content-center\">
                <div class=\"blog_post_day\">";
        // line 38
        ((twig_get_attribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 38, $this->source); })()), "datePublication", [], "any", false, false, false, 38)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 38, $this->source); })()), "datePublication", [], "any", false, false, false, 38), "d"), "html", null, true))) : (print ("")));
        echo "</div>
                <div class=\"blog_post_month\">";
        // line 39
        ((twig_get_attribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 39, $this->source); })()), "datePublication", [], "any", false, false, false, 39)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 39, $this->source); })()), "datePublication", [], "any", false, false, false, 39), "m-y"), "html", null, true))) : (print ("")));
        echo "</div>
            </div>
        </div>
        <div class=\"blog_post_title\"><h1>Votre calme avec tnafes</h1></div>
        <div class=\"blog_post_text\">
            <p>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 44, $this->source); })()), "contenu", [], "any", false, false, false, 44), "html", null, true);
        echo "</p>
        </div>
        <div class=\"blog_post_meta\">
            <ul>
                <li class=\"blog_post_meta_item\">
                    <button id=\"btn\" style=\"color:#a5a5a5;border: none;background-color: #feffff\" onClick=\"togg()\">
                        ";
        // line 50
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 50, $this->source); })()), "nbcomment", [], "any", false, false, false, 50), 0))) {
            // line 51
            echo "                           Aucun commentaire ajouté
                        ";
        } else {
            // line 53
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 53, $this->source); })()), "nbcomment", [], "any", false, false, false, 53), "html", null, true);
            echo " commentaires
                        ";
        }
        // line 55
        echo "                    </button>


                    <div class=\"blog_post_text\" id=\"d1\" style=\"display:none\">
                        ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59)) {
            // line 60
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 60, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 61
                echo "                            ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61), "id", [], "any", false, false, false, 61), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "idclientComment", [], "any", false, false, false, 61), "id", [], "any", false, false, false, 61)))) {
                    // line 62
                    echo "                            <p style=\"color: #0a1219\">Vous</p>
                                <form method=\"post\" action=\"";
                    // line 63
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentaire_delete2", ["idComment" => twig_get_attribute($this->env, $this->source, $context["comment"], "idComment", [], "any", false, false, false, 63)]), "html", null, true);
                    echo "\" onsubmit=\"return confirm('Voulez vous vraiment supprimer ce commentaire?');\">
                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 65
                    echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["comment"], "idComment", [], "any", false, false, false, 65))), "html", null, true);
                    echo "\">
                                    <p> ";
                    // line 66
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "contenuComment", [], "any", false, false, false, 66), "html", null, true);
                    echo " : ";
                    ((twig_get_attribute($this->env, $this->source, $context["comment"], "datecomment", [], "any", false, false, false, 66)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "datecomment", [], "any", false, false, false, 66), "Y-m-d"), "html", null, true))) : (print ("")));
                    echo "
                                    <button id=\"btn\" style=\"color:#a5a5a5;border: none;background-color: #feffff\"> <img src=\"";
                    // line 67
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/delete.png"), "html", null, true);
                    echo "\" width=\"25\" height=\"25\"></button>
                                    </p>
                                </form>

                            ";
                } else {
                    // line 72
                    echo "                            <p style=\"color: #0a1219\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "nomClient", [], "any", false, false, false, 72), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "prenomClient", [], "any", false, false, false, 72), "html", null, true);
                    echo "</p>
                    <p> ";
                    // line 73
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "contenuComment", [], "any", false, false, false, 73), "html", null, true);
                    echo " : ";
                    ((twig_get_attribute($this->env, $this->source, $context["comment"], "datecomment", [], "any", false, false, false, 73)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "datecomment", [], "any", false, false, false, 73), "Y-m-d"), "html", null, true))) : (print ("")));
                    echo "</p>
                                ";
                }
                // line 75
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                        ";
        }
        // line 77
        echo "                    </div>


                </li>
            </ul>

        </div>


        ";
        // line 86
        echo twig_include($this->env, $context, "publication/_formC.html.twig", ["button_label" => "Commenter"]);
        echo "



    </div>
    </div>


    <div class=\"col-lg-4 sidebar_col\">

        <div class=\"sidebar_latest_posts\">
            <div class=\"sidebar_title\">Récemment publiée</div>
            <div class=\"latest_posts_container\">
                <ul>
                ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publications"]) || array_key_exists("publications", $context) ? $context["publications"] : (function () { throw new RuntimeError('Variable "publications" does not exist.', 100, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pub"]) {
            // line 101
            echo "                    <!-- Latest Post -->
                    <li class=\"latest_post clearfix\">
                        <div class=\"latest_post_image\">
                            <a href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_front", ["idPub" => twig_get_attribute($this->env, $this->source, $context["pub"], "idPub", [], "any", false, false, false, 104)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["pub"], "imageFile"), "html", null, true);
            echo "\" width=\"60\" height=\"60\"></a>
                        </div>
                        <div class=\"latest_post_content\">
                            <div class=\"latest_post_title trans_200\"><a href=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_front", ["idPub" => twig_get_attribute($this->env, $this->source, $context["pub"], "idPub", [], "any", false, false, false, 107)]), "html", null, true);
            echo "\">Méditation et Bien-être</a></div>
                            <div class=\"latest_post_meta\">

                                <div class=\"latest_post_date trans_200\">";
            // line 110
            ((twig_get_attribute($this->env, $this->source, $context["pub"], "datePublication", [], "any", false, false, false, 110)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pub"], "datePublication", [], "any", false, false, false, 110), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</div>
                            </div>
                        </div>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pub'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                </ul>
            </div>
        </div>
    </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "publication/publication.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 115,  257 => 110,  251 => 107,  243 => 104,  238 => 101,  234 => 100,  217 => 86,  206 => 77,  203 => 76,  197 => 75,  190 => 73,  183 => 72,  175 => 67,  169 => 66,  165 => 65,  160 => 63,  157 => 62,  154 => 61,  149 => 60,  147 => 59,  141 => 55,  135 => 53,  131 => 51,  129 => 50,  120 => 44,  112 => 39,  108 => 38,  103 => 36,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'pub.html.twig' %}
{% block Posts %}
    <div class=\"blog\">
    <div class=\"container\">
    <div class=\"row\">

    <!-- Blog Content -->

    <div class=\"col-lg-8\">
        <script >
            /* Voici la fonction javascript qui change la propriété \"display\"
            pour afficher ou non le div selon que ce soit \"none\" ou \"block\". */
            function togg(){
                let d1 = document.getElementById(\"d1\");
                if(getComputedStyle(d1).display != \"none\"){
                    d1.style.display = \"none\";
                } else {
                    d1.style.display = \"block\";
                }
            };
            function AfficherMasquer()
            {
                divInfo = document.getElementById('d1');

                if (divInfo.style.display == 'none')
                    divInfo.style.display = 'block';
                else
                    divInfo.style.display = 'none';

            }

        </script>
    <div class=\"blog_post_container\">
    <div class=\"blog_post\">
        <div class=\"blog_post_image\">
            <img src=\"{{ vich_uploader_asset(publication,'imageFile') }}\" height=\"300\">
            <div class=\"blog_post_date d-flex flex-column align-items-center justify-content-center\">
                <div class=\"blog_post_day\">{{ publication.datePublication ? publication.datePublication|date('d') : '' }}</div>
                <div class=\"blog_post_month\">{{ publication.datePublication ? publication.datePublication|date('m-y') : '' }}</div>
            </div>
        </div>
        <div class=\"blog_post_title\"><h1>Votre calme avec tnafes</h1></div>
        <div class=\"blog_post_text\">
            <p>{{ publication.contenu }}</p>
        </div>
        <div class=\"blog_post_meta\">
            <ul>
                <li class=\"blog_post_meta_item\">
                    <button id=\"btn\" style=\"color:#a5a5a5;border: none;background-color: #feffff\" onClick=\"togg()\">
                        {% if ( publication.nbcomment ==0) %}
                           Aucun commentaire ajouté
                        {% else %}
                        {{ publication.nbcomment }} commentaires
                        {% endif %}
                    </button>


                    <div class=\"blog_post_text\" id=\"d1\" style=\"display:none\">
                        {% if app.user %}
                        {% for comment in commentaires %}
                            {% if app.user.id==comment.idclientComment.id %}
                            <p style=\"color: #0a1219\">Vous</p>
                                <form method=\"post\" action=\"{{ path('commentaire_delete2', {'idComment': comment.idComment}) }}\" onsubmit=\"return confirm('Voulez vous vraiment supprimer ce commentaire?');\">
                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ comment.idComment) }}\">
                                    <p> {{ comment.contenuComment }} : {{ comment.datecomment ? comment.datecomment|date('Y-m-d'):''}}
                                    <button id=\"btn\" style=\"color:#a5a5a5;border: none;background-color: #feffff\"> <img src=\"{{ asset('images/delete.png') }}\" width=\"25\" height=\"25\"></button>
                                    </p>
                                </form>

                            {% else %}
                            <p style=\"color: #0a1219\">{{ comment.nomClient }} {{ comment.prenomClient }}</p>
                    <p> {{ comment.contenuComment }} : {{ comment.datecomment ? comment.datecomment|date('Y-m-d'):''}}</p>
                                {% endif %}
                        {% endfor %}
                        {% endif %}
                    </div>


                </li>
            </ul>

        </div>


        {{ include('publication/_formC.html.twig', {'button_label': 'Commenter'}) }}



    </div>
    </div>


    <div class=\"col-lg-4 sidebar_col\">

        <div class=\"sidebar_latest_posts\">
            <div class=\"sidebar_title\">Récemment publiée</div>
            <div class=\"latest_posts_container\">
                <ul>
                {% for pub in publications %}
                    <!-- Latest Post -->
                    <li class=\"latest_post clearfix\">
                        <div class=\"latest_post_image\">
                            <a href=\"{{ path('publication_front', {'idPub': pub.idPub}) }}\"><img src=\"{{ vich_uploader_asset(pub,'imageFile') }}\" width=\"60\" height=\"60\"></a>
                        </div>
                        <div class=\"latest_post_content\">
                            <div class=\"latest_post_title trans_200\"><a href=\"{{ path('publication_front', {'idPub': pub.idPub}) }}\">Méditation et Bien-être</a></div>
                            <div class=\"latest_post_meta\">

                                <div class=\"latest_post_date trans_200\">{{ pub.datePublication ? pub.datePublication|date('Y-m-d'):''}}</div>
                            </div>
                        </div>
                    </li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    </div>
    </div>
{% endblock %}", "publication/publication.html.twig", "C:\\Users\\miral\\OneDrive\\Bureau\\PiDevWeb2.4\\templates\\publication\\publication.html.twig");
    }
}
