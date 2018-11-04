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
        $__internal_b6732e403b91d9b8486ee5042c25ee56b3d69c6c770aa20b69ae874f5819e7fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6732e403b91d9b8486ee5042c25ee56b3d69c6c770aa20b69ae874f5819e7fd->enter($__internal_b6732e403b91d9b8486ee5042c25ee56b3d69c6c770aa20b69ae874f5819e7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6732e403b91d9b8486ee5042c25ee56b3d69c6c770aa20b69ae874f5819e7fd->leave($__internal_b6732e403b91d9b8486ee5042c25ee56b3d69c6c770aa20b69ae874f5819e7fd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d02175e3e9933d84cd5aedf1ad5acd19739112abcbda19c61408708218897b9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d02175e3e9933d84cd5aedf1ad5acd19739112abcbda19c61408708218897b9f->enter($__internal_d02175e3e9933d84cd5aedf1ad5acd19739112abcbda19c61408708218897b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d02175e3e9933d84cd5aedf1ad5acd19739112abcbda19c61408708218897b9f->leave($__internal_d02175e3e9933d84cd5aedf1ad5acd19739112abcbda19c61408708218897b9f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9393d4cf84da23925e8b7dd2948af185f73c8a7ff8736c122c82c9644c645da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9393d4cf84da23925e8b7dd2948af185f73c8a7ff8736c122c82c9644c645da->enter($__internal_e9393d4cf84da23925e8b7dd2948af185f73c8a7ff8736c122c82c9644c645da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e9393d4cf84da23925e8b7dd2948af185f73c8a7ff8736c122c82c9644c645da->leave($__internal_e9393d4cf84da23925e8b7dd2948af185f73c8a7ff8736c122c82c9644c645da_prof);

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
