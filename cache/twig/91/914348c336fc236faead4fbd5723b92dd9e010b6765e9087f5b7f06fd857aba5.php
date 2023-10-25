<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/base.html.twig */
class __TwigTemplate_809180aedf1f2ce9bb8372f9aeea5e4a6d193cd57ce0e0804114ca11874e1591 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", []))), "html", null, true);
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 28
        echo "</head>
<body ";
        // line 29
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", [])) {
            echo "class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []), "html", null, true);
            echo "\" ";
        }
        echo ">

  <main>
\t<div class=\"grid grid-centered\"";
        // line 32
        if ($this->getAttribute(($context["theme_config"] ?? null), "body_width", [])) {
            echo "style=\"max-width: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "body_width", []), "html", null, true);
            echo ";\" ";
        }
        echo ">
      <div class=\"grid-cell\">
      \t";
        // line 34
        $this->displayBlock('content', $context, $blocks);
        // line 36
        echo "   \t\t</div> 
   \t</div> 
  </main>
  

";
        // line 41
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "

</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 11
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 11)->display($context);
        // line 12
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/logo.png"), "html", null, true);
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method"), "html", null, true);
        echo "\" />
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "

";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 17
        echo "<link href=\"https://fonts.googleapis.com/css?family=Cormorant+Garamond|Lato\" rel=\"stylesheet\">
    ";
        // line 18
        if (($this->getAttribute(($context["theme_config"] ?? null), "blog_theme", []) == "light")) {
            // line 19
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css-compiled/light.css", 1 => 98], "method");
            // line 20
            echo "    ";
        } else {
            // line 21
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css-compiled/dark.css", 1 => 98], "method");
            // line 22
            echo "    ";
        }
        // line 23
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://cdnjs.cloudflare.com/ajax/libs/fluidbox/2.0.5/css/fluidbox.min.css", 1 => 98], "method");
        // line 24
        echo "    ";
    }

    // line 34
    public function block_content($context, array $blocks = [])
    {
        // line 35
        echo "        ";
    }

    // line 41
    public function block_javascripts($context, array $blocks = [])
    {
        // line 42
        if ($this->getAttribute(($context["theme_config"] ?? null), "ga_analytics", [])) {
            // line 43
            echo "  <script async src=\"https://www.googletagmanager.com/gtag/js?id=";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "ga_analytics", []), "html", null, true);
            echo "\"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', '";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "ga_analytics", []), "html", null, true);
            echo "');
  </script>
  
";
        }
        // line 52
        echo "
   ";
        // line 53
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 108], "method");
        // line 54
        echo "   ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "//cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js", 1 => 107], "method");
        // line 55
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/vendor.js", 1 => 103], "method");
        // line 56
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/webfont.js", 1 => 102], "method");
        // line 57
        echo "     ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "scrollappear_enabled", [])) {
            // line 58
            echo "    ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/scrollappear.js", 1 => 103], "method");
            // line 59
            echo "    ";
        }
        // line 60
        echo "  ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "https://cdnjs.cloudflare.com/ajax/libs/fluidbox/2.0.5/js/jquery.fluidbox.min.js", 1 => 102], "method");
        // line 61
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/application.js", 1 => 100], "method");
        // line 62
        echo "    
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 62,  210 => 61,  207 => 60,  204 => 59,  201 => 58,  198 => 57,  195 => 56,  192 => 55,  189 => 54,  187 => 53,  184 => 52,  177 => 48,  168 => 43,  166 => 42,  163 => 41,  159 => 35,  156 => 34,  152 => 24,  149 => 23,  146 => 22,  143 => 21,  140 => 20,  137 => 19,  135 => 18,  132 => 17,  129 => 16,  121 => 25,  119 => 16,  114 => 14,  110 => 13,  107 => 12,  105 => 11,  94 => 7,  91 => 6,  88 => 5,  79 => 64,  77 => 41,  70 => 36,  68 => 34,  59 => 32,  49 => 29,  46 => 28,  44 => 5,  39 => 3,  36 => 2,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
    {% block stylesheets %}
<link href=\"https://fonts.googleapis.com/css?family=Cormorant+Garamond|Lato\" rel=\"stylesheet\">
    {% if theme_config.blog_theme == \"light\" %}
        {% do assets.addCss('theme://css-compiled/light.css', 98) %}
    {% else %}
        {% do assets.addCss('theme://css-compiled/dark.css', 98) %}
    {% endif %}
        {% do assets.addCss('https://cdnjs.cloudflare.com/ajax/libs/fluidbox/2.0.5/css/fluidbox.min.css', 98) %}
    {% endblock %}
    {{ assets.css() | raw }}

{% endblock head%}
</head>
<body {% if page.header.body_classes %}class=\"{{ page.header.body_classes }}\" {% endif %}>

  <main>
\t<div class=\"grid grid-centered\"{% if theme_config.body_width%}style=\"max-width: {{ theme_config.body_width }};\" {% endif %}>
      <div class=\"grid-cell\">
      \t{% block content %}
        {% endblock %}
   \t\t</div> 
   \t</div> 
  </main>
  

{% block javascripts %}
{% if theme_config.ga_analytics %}
  <script async src=\"https://www.googletagmanager.com/gtag/js?id={{ site.ga_analytics }}\"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', '{{ site.ga_analytics }}');
  </script>
  
{% endif %}

   {% do assets.addJs('jquery', 108) %}
   {% do assets.addJs('//cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js', 107) %}
    {% do assets.addJs('theme://js/vendor.js', 103) %}
    {% do assets.addJs('theme://js/webfont.js', 102) %}
     {% if theme_config.scrollappear_enabled %}
    {% do assets.addJs('theme://js/scrollappear.js', 103) %}
    {% endif %}
  {% do assets.addJs('https://cdnjs.cloudflare.com/ajax/libs/fluidbox/2.0.5/js/jquery.fluidbox.min.js', 102) %}
    {% do assets.addJs('theme://js/application.js', 100) %}
    
{% endblock %}
{{ assets.js() | raw }}

</body>
</html>
", "partials/base.html.twig", "C:\\xampp\\htdocs\\grav-admin-v1.7.43\\grav-admin\\user\\themes\\chalk\\templates\\partials\\base.html.twig");
    }
}
