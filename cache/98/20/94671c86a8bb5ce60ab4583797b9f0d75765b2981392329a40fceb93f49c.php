<?php

/* todo.html */
class __TwigTemplate_982094671c86a8bb5ce60ab4583797b9f0d75765b2981392329a40fceb93f49c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>Codoforum features</title>

        <!-- Bootstrap -->
        <link href=\"../ext/bs/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"../css/app.css\" rel=\"stylesheet\">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
          <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body>

        <div class=\"container\">
            <div class=\"row\">

                <div class=\"alert alert-info\">A feature at the top is not always guranteed to be implemented first but will always get highest priority when new features are added</div>
                <section class=\"todo col-md-8\">

                    <div class=\"header\">
                        <b>todo list
                        </b>                        
                        <div class=\"tools\">
                            <div class=\"tool\"><i class=\"glyphicon glyphicon-plus tip\" title=\"add new\"></i></div>
                        </div>
                    </div>

                    <table class=\"table\" id=\"features-table\">
                        <tr>
                            <th>Feature</th>
                            <th>No. of votes</th>
                            <th>Actions</th>
                        </tr>
                        ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["features"]) ? $context["features"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 43
            echo "
                        <tr>
                            <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["feature"], "name", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["feature"], "votes", array()), "html", null, true);
            echo "</td>
                            <td>
                                <div class=\"tool tip upvote\" title=\"upvote\" data-id=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["feature"], "id", array()), "html", null, true);
            echo "\">
                                    <i class=\"glyphicon glyphicon-thumbs-up\"></i>
                                </div>
                                <div class=\"tool tip downvote\" title=\"downvote\" data-id=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["feature"], "id", array()), "html", null, true);
            echo "\">
                                    <i class=\"glyphicon glyphicon-thumbs-down\"></i>
                                </div>
                            </td>
                        </tr>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                    </table>
                </section>
                <div class=\"col-md-4\">

                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">Add new feature </div>
                        <form class=\"add panel-body\" action=\"add.php\" method=\"POST\">
                            <div class=\"form-group\">
                                <label for=\"feature\">feature</label>
                                <input type=\"text\" class=\"form-control\" name=\"feature\" id=\"feature\" placeholder=\"Enter feature name\" required>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary\">add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>    
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src=\"../ext/bs/js/bootstrap.min.js\"></script>
        <script type=\"text/javascript\">

jQuery(document).ready(function (\$) {

    \$('.tip').tooltip();

    \$('#features-table').on('click', \".upvote\", function () {

        window.location = \"../php/vote.php?action=up&id=\" + \$(this).data('id');
    });

    \$('#features-table').on('click', \".downvote\", function () {

        window.location = \"../php/vote.php?action=down&id=\" + \$(this).data('id');
    });

});
        </script>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "todo.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 58,  85 => 51,  79 => 48,  74 => 46,  70 => 45,  66 => 43,  62 => 42,  19 => 1,);
    }
}
