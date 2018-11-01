<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_00d6a8d0e97cf4a62114af54999ba532a0027a0847b1c14599dfe4f6d52308cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4c73783dc50198f90a0e2dde08b4957a34d9acbb8b05fa91e749a3554fd549f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4c73783dc50198f90a0e2dde08b4957a34d9acbb8b05fa91e749a3554fd549f->enter($__internal_c4c73783dc50198f90a0e2dde08b4957a34d9acbb8b05fa91e749a3554fd549f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4c73783dc50198f90a0e2dde08b4957a34d9acbb8b05fa91e749a3554fd549f->leave($__internal_c4c73783dc50198f90a0e2dde08b4957a34d9acbb8b05fa91e749a3554fd549f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_49d3dc9c1c6f6fe7d657ef7c650c3fddf1df80d50b7023faf66f7fc05b832c94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49d3dc9c1c6f6fe7d657ef7c650c3fddf1df80d50b7023faf66f7fc05b832c94->enter($__internal_49d3dc9c1c6f6fe7d657ef7c650c3fddf1df80d50b7023faf66f7fc05b832c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_49d3dc9c1c6f6fe7d657ef7c650c3fddf1df80d50b7023faf66f7fc05b832c94->leave($__internal_49d3dc9c1c6f6fe7d657ef7c650c3fddf1df80d50b7023faf66f7fc05b832c94_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b90e0e9bf4009a44559e0690a89f03dc7ab111f03276b714bb59ace9037d880c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b90e0e9bf4009a44559e0690a89f03dc7ab111f03276b714bb59ace9037d880c->enter($__internal_b90e0e9bf4009a44559e0690a89f03dc7ab111f03276b714bb59ace9037d880c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b90e0e9bf4009a44559e0690a89f03dc7ab111f03276b714bb59ace9037d880c->leave($__internal_b90e0e9bf4009a44559e0690a89f03dc7ab111f03276b714bb59ace9037d880c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
