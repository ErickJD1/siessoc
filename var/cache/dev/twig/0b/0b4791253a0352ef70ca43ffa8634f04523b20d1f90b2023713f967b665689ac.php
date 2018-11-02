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
        $__internal_f142f1ade3e30ba03df0353f879f5251b58e6f64764b0953c6166fba1ab8abaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f142f1ade3e30ba03df0353f879f5251b58e6f64764b0953c6166fba1ab8abaa->enter($__internal_f142f1ade3e30ba03df0353f879f5251b58e6f64764b0953c6166fba1ab8abaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f142f1ade3e30ba03df0353f879f5251b58e6f64764b0953c6166fba1ab8abaa->leave($__internal_f142f1ade3e30ba03df0353f879f5251b58e6f64764b0953c6166fba1ab8abaa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4fb6c77b56603c960a437a62adc3281446b8278faad005ae17a4537d5e941f7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fb6c77b56603c960a437a62adc3281446b8278faad005ae17a4537d5e941f7c->enter($__internal_4fb6c77b56603c960a437a62adc3281446b8278faad005ae17a4537d5e941f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4fb6c77b56603c960a437a62adc3281446b8278faad005ae17a4537d5e941f7c->leave($__internal_4fb6c77b56603c960a437a62adc3281446b8278faad005ae17a4537d5e941f7c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c79e6c7e58734560214f9cc6d4ae48b3b036dbcf4a8d08cfc37b0f0c0776e1df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c79e6c7e58734560214f9cc6d4ae48b3b036dbcf4a8d08cfc37b0f0c0776e1df->enter($__internal_c79e6c7e58734560214f9cc6d4ae48b3b036dbcf4a8d08cfc37b0f0c0776e1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c79e6c7e58734560214f9cc6d4ae48b3b036dbcf4a8d08cfc37b0f0c0776e1df->leave($__internal_c79e6c7e58734560214f9cc6d4ae48b3b036dbcf4a8d08cfc37b0f0c0776e1df_prof);

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
