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
        $__internal_de03cd56768e3343fa0d936fee1cfb9065d42520951dc9af007eca93fd80e79b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de03cd56768e3343fa0d936fee1cfb9065d42520951dc9af007eca93fd80e79b->enter($__internal_de03cd56768e3343fa0d936fee1cfb9065d42520951dc9af007eca93fd80e79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de03cd56768e3343fa0d936fee1cfb9065d42520951dc9af007eca93fd80e79b->leave($__internal_de03cd56768e3343fa0d936fee1cfb9065d42520951dc9af007eca93fd80e79b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e0a3baa2058205225891868897868d64098b805995158b698f18b65dee624ae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0a3baa2058205225891868897868d64098b805995158b698f18b65dee624ae5->enter($__internal_e0a3baa2058205225891868897868d64098b805995158b698f18b65dee624ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e0a3baa2058205225891868897868d64098b805995158b698f18b65dee624ae5->leave($__internal_e0a3baa2058205225891868897868d64098b805995158b698f18b65dee624ae5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9661c06d9ba9dddc2d35a8dfdd0331f8bd611022df756a0141e14765c7b5e174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9661c06d9ba9dddc2d35a8dfdd0331f8bd611022df756a0141e14765c7b5e174->enter($__internal_9661c06d9ba9dddc2d35a8dfdd0331f8bd611022df756a0141e14765c7b5e174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9661c06d9ba9dddc2d35a8dfdd0331f8bd611022df756a0141e14765c7b5e174->leave($__internal_9661c06d9ba9dddc2d35a8dfdd0331f8bd611022df756a0141e14765c7b5e174_prof);

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
