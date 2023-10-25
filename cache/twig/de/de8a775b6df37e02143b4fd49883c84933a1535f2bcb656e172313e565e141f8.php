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

/* default.html.twig */
class __TwigTemplate_0cc174de1b3808a5820efa5b0c961e381fc82c641ed369706d8da8d1b9fe9b4c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "        ";
        $this->loadTemplate("partials/navigation.html.twig", "default.html.twig", 4)->display($context);
        // line 5
        echo "          <section id=\"body\">
            <div class=\"wrapper padding\">
               ";
        // line 7
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
            </div>
          </section>

";
        // line 11
        $this->loadTemplate("partials/footer.html.twig", "default.html.twig", 11)->display($context);
        // line 12
        echo "
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 12,  56 => 11,  49 => 7,  45 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% block content %}
        {% include 'partials/navigation.html.twig' %}
          <section id=\"body\">
            <div class=\"wrapper padding\">
               {{ page.content | raw }}
            </div>
          </section>

{% include 'partials/footer.html.twig' %}

{% endblock %}
", "default.html.twig", "C:\\xampp\\htdocs\\grav-admin-v1.7.43\\grav-admin\\user\\themes\\chalk\\templates\\default.html.twig");
    }
}
