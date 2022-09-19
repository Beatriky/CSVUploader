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

/* home/new.html.twig */
class __TwigTemplate_dc25e0f1e330437cc8136abd1a231c8d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello HomeController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "         <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/style/style.css"), "html", null, true);
        echo "\">
         <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" />

     ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "          <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/scripts/script.js"), "html", null, true);
        echo "\" defer></script>
          <script src=\"https://cdn.tailwindcss.com\"></script>
          <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
          <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Hello ";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "! ✅</h1>

    <br />
    <br />
    <div class=\"container\">
        <h1 align=\"center\">Import CSV File Data with Progress Bar in PHP using Ajax </h1>
        <br />
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">Import CSV File Data</h3>
            </div>
            <div class=\"panel-body\">
                <span id=\"message\"></span>
                <form id=\"sample_form\" method=\"POST\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                    <div class=\"form-group\">
                        <label class=\"col-md-4 control-label\">Select CSV File</label>
                        <input type=\"file\" name=\"file\" id=\"file\" />
                    </div>
                    <div class=\"form-group\" align=\"center\">
                        <input type=\"hidden\" name=\"hidden_field\" value=\"1\" />
                        <input type=\"submit\" name=\"import\" id=\"import\" class=\"btn btn-info\" value=\"Import\" />
                    </div>
                </form>
                <div class=\"form-group\" id=\"process\" style=\"display:none;\">
                    <div class=\"progress\">
                        <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                            <span id=\"process_data\">0</span> - <span id=\"total_data\">0</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

        \$(document).ready(function(){

            let clear_timer;

            \$('#sample_form').on('submit', function(event){
                \$('#message').html('');
                event.preventDefault();
                \$.ajax({
                    url:\"upload.php\",
                    method:\"POST\",
                    data: new FormData(this),
                    dataType:\"json\",
                    contentType:false,
                    cache:false,
                    processData:false,
                    beforeSend:function(){
                        \$('#import').attr('disabled','disabled');
                        \$('#import').val('Importing');
                    },
                    success:function(data)
                    {
                        if(data.success)
                        {
                            \$('#total_ data').text(data.total_line);

                            \$('#message').html('<div class=\"alert alert-success\">CSV File Uploaded</div>');
                        }
                        start_import();
                        if(data.error)
                        {
                            \$('#message').html('<div class=\"alert alert-danger\">'+data.error+'</div>');
                            \$('#import').attr('disabled',false);
                            \$('#import').val('Import');
                        }
                    }
                })
            });
        function start_import()
        {
            \$('#process').css('display', 'block');
            \$.ajax({
                url:\"import.php\",
                success:function()
                {

                }
            })
        }

        });
    </script>

</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 23,  142 => 17,  132 => 16,  115 => 10,  105 => 9,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}
     {% block stylesheets %}
         <link rel=\"stylesheet\" href=\"{{ asset(\"assets/style/style.css\") }}\">
         <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" />

     {% endblock %}
      {% block javascripts %}
          <script type=\"text/javascript\" src=\"{{ asset(\"assets/scripts/script.js\") }}\" defer></script>
          <script src=\"https://cdn.tailwindcss.com\"></script>
          <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
          <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

      {% endblock %}
{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Hello {{ controller_name }}! ✅</h1>

    <br />
    <br />
    <div class=\"container\">
        <h1 align=\"center\">Import CSV File Data with Progress Bar in PHP using Ajax </h1>
        <br />
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">Import CSV File Data</h3>
            </div>
            <div class=\"panel-body\">
                <span id=\"message\"></span>
                <form id=\"sample_form\" method=\"POST\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                    <div class=\"form-group\">
                        <label class=\"col-md-4 control-label\">Select CSV File</label>
                        <input type=\"file\" name=\"file\" id=\"file\" />
                    </div>
                    <div class=\"form-group\" align=\"center\">
                        <input type=\"hidden\" name=\"hidden_field\" value=\"1\" />
                        <input type=\"submit\" name=\"import\" id=\"import\" class=\"btn btn-info\" value=\"Import\" />
                    </div>
                </form>
                <div class=\"form-group\" id=\"process\" style=\"display:none;\">
                    <div class=\"progress\">
                        <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                            <span id=\"process_data\">0</span> - <span id=\"total_data\">0</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

        \$(document).ready(function(){

            let clear_timer;

            \$('#sample_form').on('submit', function(event){
                \$('#message').html('');
                event.preventDefault();
                \$.ajax({
                    url:\"upload.php\",
                    method:\"POST\",
                    data: new FormData(this),
                    dataType:\"json\",
                    contentType:false,
                    cache:false,
                    processData:false,
                    beforeSend:function(){
                        \$('#import').attr('disabled','disabled');
                        \$('#import').val('Importing');
                    },
                    success:function(data)
                    {
                        if(data.success)
                        {
                            \$('#total_ data').text(data.total_line);

                            \$('#message').html('<div class=\"alert alert-success\">CSV File Uploaded</div>');
                        }
                        start_import();
                        if(data.error)
                        {
                            \$('#message').html('<div class=\"alert alert-danger\">'+data.error+'</div>');
                            \$('#import').attr('disabled',false);
                            \$('#import').val('Import');
                        }
                    }
                })
            });
        function start_import()
        {
            \$('#process').css('display', 'block');
            \$.ajax({
                url:\"import.php\",
                success:function()
                {

                }
            })
        }

        });
    </script>

</div>
{% endblock %}
", "home/new.html.twig", "/app/templates/home/new.html.twig");
    }
}
