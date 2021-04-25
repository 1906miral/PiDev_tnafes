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

/* reclamation/index.html.twig */
class __TwigTemplate_6f879ebd31a937964d10d2fb9be0e26aa398637e979fc5bd0df1be1d23e204cd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'titre' => [$this, 'block_titre'],
            'table' => [$this, 'block_table'],
            'pagination' => [$this, 'block_pagination'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "basedisplay.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $this->parent = $this->loadTemplate("basedisplay.html.twig", "reclamation/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        // line 4
        echo "    Liste des réclamations
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        // line 7
        echo "

    <table class=\"table\" id=\"t\">
        <thead>
            <tr>

                <th>NomUser</th>
                <th>PrenomUser</th>
                <th>Numtel</th>
                <th>Email</th>
                <th>Description</th>
                <th>Objet</th>
                <th>Etat</th>
                <th>Date</th>
                <th>DateTraitement</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody id=\"all\">
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 27
            echo "            <tr>

                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "nomUser", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "prenomUser", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "numtel", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "email", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "description", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "objet", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                ";
            // line 35
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["reclamation"], "etat", [], "any", false, false, false, 35), "Traitée"))) {
                // line 36
                echo "                <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/check.png"), "html", null, true);
                echo "\" height=\"40\" width=\"40\"></td>
                    ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 37
$context["reclamation"], "etat", [], "any", false, false, false, 37), "En attente"))) {
                // line 38
                echo "                    <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/wait.png"), "html", null, true);
                echo "\" height=\"40\" width=\"40\"></td>
                        ";
            } else {
                // line 40
                echo "                    <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/loading.png"), "html", null, true);
                echo "\" height=\"40\" width=\"40\"></td>
                ";
            }
            // line 42
            echo "                <td>";
            ((twig_get_attribute($this->env, $this->source, $context["reclamation"], "date", [], "any", false, false, false, 42)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "date", [], "any", false, false, false, 42), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 43
            ((twig_get_attribute($this->env, $this->source, $context["reclamation"], "dateTraitement", [], "any", false, false, false, 43)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "dateTraitement", [], "any", false, false, false, 43), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>
                    ";
            // line 45
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["reclamation"], "etat", [], "any", false, false, false, 45), "Traitée"))) {
                // line 46
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_edit", ["idReclamation" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "idReclamation", [], "any", false, false, false, 46)]), "html", null, true);
                echo "\" onclick=\"return false;\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/refresh.png"), "html", null, true);
                echo "\" height=\"30\" width=\"30\"></a>
                    ";
            } else {
                // line 48
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_edit", ["idReclamation" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "idReclamation", [], "any", false, false, false, 48)]), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/refresh.png"), "html", null, true);
                echo "\" height=\"30\" width=\"30\"></a>
                    ";
            }
            // line 50
            echo "                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 53
            echo "            <tr>
                <td colspan=\"11\">Aucune réclamation</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </tbody>
        <tbody id=\"search\">
        </tbody>

    </table>

   <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\">
    </script>
    <script>
        \$( document ).ready(function() {
            \$(\"#search\").keyup(function(e){
                /* La variable value va prendre la valeur insérer dans le champ de texte afin d’effectuer la recherche */
                var value = \$(this).val();
                /* Ajax est lancé lors du remplissage du champ texte dont l’id est « search » pour faire la recherche */

                \$.ajax({
                    /* l’url est une chaine de caractères contenant l’adresse où la requête est envoyée */
                    url : \"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("searchrec");
        echo "\",
                    /* La méthode utilisée pour transférer les données est GET */
                    type : 'GET',
                    /*Ici search value va prendre la chaine entrée par un utilisateur dans la zone de recherche et sera placée après l’url */
                    data: {
                        'searchValue' : value
                    },
                    /*Cette fonction permet de vider le contenu du tableau pour recevoir le nouveau contenu*/
                    success : function(retour){
                        if(retour){
                            \$('#t tbody#search').empty();
                            \$.each(JSON.parse(retour), function(i, obj) {
                                \$('#t tbody#all').hide();

                             \$('#t tbody#search').append('<tr><td> '+obj.nomUser+'  </td><td>    '+obj.prenomUser+'  </td><td>'+obj.numtel+' </td><td>'+obj.email+' </td><td>'+obj.description+' </td><td>'+obj.objet+' </td><td>'+obj.etat+' </td>'+obj.date+' </td><td>'+obj.dateTraitement+' </td><td><td><a href=\"reclamation/'+obj.idReclamation+'/edit\">Modifier</a></td></tr>');
                            });
                        }
                        else
                        {
                            \$('#t tbody#all').show();
                            \$('#t tbody#search').empty();
                            \$('#t tbody#search').fadeIn('fast');
                        }
                    },
                });
                return false;
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 104
    public function block_pagination($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pagination"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pagination"));

        // line 105
        echo "    <div >

            ";
        // line 107
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 107, $this->source); })()));
        echo "

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 107,  279 => 105,  269 => 104,  229 => 74,  210 => 57,  201 => 53,  194 => 50,  186 => 48,  178 => 46,  176 => 45,  171 => 43,  166 => 42,  160 => 40,  154 => 38,  152 => 37,  147 => 36,  145 => 35,  141 => 34,  137 => 33,  133 => 32,  129 => 31,  125 => 30,  121 => 29,  117 => 27,  112 => 26,  91 => 7,  81 => 6,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basedisplay.html.twig' %}

{% block titre %}
    Liste des réclamations
{% endblock %}
{% block table %}


    <table class=\"table\" id=\"t\">
        <thead>
            <tr>

                <th>NomUser</th>
                <th>PrenomUser</th>
                <th>Numtel</th>
                <th>Email</th>
                <th>Description</th>
                <th>Objet</th>
                <th>Etat</th>
                <th>Date</th>
                <th>DateTraitement</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody id=\"all\">
        {% for reclamation in reclamations %}
            <tr>

                <td>{{ reclamation.nomUser }}</td>
                <td>{{ reclamation.prenomUser }}</td>
                <td>{{ reclamation.numtel }}</td>
                <td>{{ reclamation.email }}</td>
                <td>{{ reclamation.description }}</td>
                <td>{{ reclamation.objet }}</td>
                {% if reclamation.etat=='Traitée'  %}
                <td><img src=\"{{ asset('images/check.png') }}\" height=\"40\" width=\"40\"></td>
                    {% elseif reclamation.etat=='En attente' %}
                    <td><img src=\"{{ asset('images/wait.png') }}\" height=\"40\" width=\"40\"></td>
                        {% else %}
                    <td><img src=\"{{ asset('images/loading.png') }}\" height=\"40\" width=\"40\"></td>
                {% endif %}
                <td>{{ reclamation.date ? reclamation.date|date('Y-m-d') : '' }}</td>
                <td>{{ reclamation.dateTraitement ? reclamation.dateTraitement|date('Y-m-d') : '' }}</td>
                <td>
                    {% if reclamation.etat=='Traitée'  %}
                    <a href=\"{{ path('reclamation_edit', {'idReclamation': reclamation.idReclamation}) }}\" onclick=\"return false;\"><img src=\"{{ asset('images/refresh.png') }}\" height=\"30\" width=\"30\"></a>
                    {% else %}
                        <a href=\"{{ path('reclamation_edit', {'idReclamation': reclamation.idReclamation}) }}\"><img src=\"{{ asset('images/refresh.png') }}\" height=\"30\" width=\"30\"></a>
                    {% endif %}
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"11\">Aucune réclamation</td>
            </tr>
        {% endfor %}
        </tbody>
        <tbody id=\"search\">
        </tbody>

    </table>

   <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\">
    </script>
    <script>
        \$( document ).ready(function() {
            \$(\"#search\").keyup(function(e){
                /* La variable value va prendre la valeur insérer dans le champ de texte afin d’effectuer la recherche */
                var value = \$(this).val();
                /* Ajax est lancé lors du remplissage du champ texte dont l’id est « search » pour faire la recherche */

                \$.ajax({
                    /* l’url est une chaine de caractères contenant l’adresse où la requête est envoyée */
                    url : \"{{ path('searchrec') }}\",
                    /* La méthode utilisée pour transférer les données est GET */
                    type : 'GET',
                    /*Ici search value va prendre la chaine entrée par un utilisateur dans la zone de recherche et sera placée après l’url */
                    data: {
                        'searchValue' : value
                    },
                    /*Cette fonction permet de vider le contenu du tableau pour recevoir le nouveau contenu*/
                    success : function(retour){
                        if(retour){
                            \$('#t tbody#search').empty();
                            \$.each(JSON.parse(retour), function(i, obj) {
                                \$('#t tbody#all').hide();

                             \$('#t tbody#search').append('<tr><td> '+obj.nomUser+'  </td><td>    '+obj.prenomUser+'  </td><td>'+obj.numtel+' </td><td>'+obj.email+' </td><td>'+obj.description+' </td><td>'+obj.objet+' </td><td>'+obj.etat+' </td>'+obj.date+' </td><td>'+obj.dateTraitement+' </td><td><td><a href=\"reclamation/'+obj.idReclamation+'/edit\">Modifier</a></td></tr>');
                            });
                        }
                        else
                        {
                            \$('#t tbody#all').show();
                            \$('#t tbody#search').empty();
                            \$('#t tbody#search').fadeIn('fast');
                        }
                    },
                });
                return false;
            });
        });
    </script>
{% endblock %}
{% block pagination %}
    <div >

            {{ knp_pagination_render(reclamations) }}

    </div>
{% endblock %}
", "reclamation/index.html.twig", "C:\\Users\\miral\\OneDrive\\Bureau\\PiDevWeb2.33\\templates\\reclamation\\index.html.twig");
    }
}
