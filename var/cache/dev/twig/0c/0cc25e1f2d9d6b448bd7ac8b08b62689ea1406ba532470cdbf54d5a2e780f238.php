<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e5c2d8b1aea804925193899019206f657fe1c578b6da0fd19439c95d4f9d0321 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_ea157731c51e597673feb6c00c846fb68974c8eca05b3fa384025ee305413ba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea157731c51e597673feb6c00c846fb68974c8eca05b3fa384025ee305413ba1->enter($__internal_ea157731c51e597673feb6c00c846fb68974c8eca05b3fa384025ee305413ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea157731c51e597673feb6c00c846fb68974c8eca05b3fa384025ee305413ba1->leave($__internal_ea157731c51e597673feb6c00c846fb68974c8eca05b3fa384025ee305413ba1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_08477d42c42fce7d7eb9ee80abb1b52c9816994143bd596c6c76f5bb72c64f29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08477d42c42fce7d7eb9ee80abb1b52c9816994143bd596c6c76f5bb72c64f29->enter($__internal_08477d42c42fce7d7eb9ee80abb1b52c9816994143bd596c6c76f5bb72c64f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_08477d42c42fce7d7eb9ee80abb1b52c9816994143bd596c6c76f5bb72c64f29->leave($__internal_08477d42c42fce7d7eb9ee80abb1b52c9816994143bd596c6c76f5bb72c64f29_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b2f7cff50b45ffcbef76275eb71b54a438b0f9117d0b9ba99fb79f260fdbe42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b2f7cff50b45ffcbef76275eb71b54a438b0f9117d0b9ba99fb79f260fdbe42->enter($__internal_0b2f7cff50b45ffcbef76275eb71b54a438b0f9117d0b9ba99fb79f260fdbe42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0b2f7cff50b45ffcbef76275eb71b54a438b0f9117d0b9ba99fb79f260fdbe42->leave($__internal_0b2f7cff50b45ffcbef76275eb71b54a438b0f9117d0b9ba99fb79f260fdbe42_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
