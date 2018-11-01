<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_acb17e2a1712f3fa79c241a5f1d22c01491100bfece92b702b2d73352bdce857 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_432561c62e7c9aafab3ded27d56b7a8d4614fd1122008ba6a60a10a9a999a1a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_432561c62e7c9aafab3ded27d56b7a8d4614fd1122008ba6a60a10a9a999a1a8->enter($__internal_432561c62e7c9aafab3ded27d56b7a8d4614fd1122008ba6a60a10a9a999a1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_432561c62e7c9aafab3ded27d56b7a8d4614fd1122008ba6a60a10a9a999a1a8->leave($__internal_432561c62e7c9aafab3ded27d56b7a8d4614fd1122008ba6a60a10a9a999a1a8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b8c48978b6ae6a5ff925eb922f5a75a6f08b86785d96b81d7d79cae862ab0594 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8c48978b6ae6a5ff925eb922f5a75a6f08b86785d96b81d7d79cae862ab0594->enter($__internal_b8c48978b6ae6a5ff925eb922f5a75a6f08b86785d96b81d7d79cae862ab0594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b8c48978b6ae6a5ff925eb922f5a75a6f08b86785d96b81d7d79cae862ab0594->leave($__internal_b8c48978b6ae6a5ff925eb922f5a75a6f08b86785d96b81d7d79cae862ab0594_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5407ffa3377fb65adc34a1d8c9ad95fde17de4a8d781ad1f63a34d664decbebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5407ffa3377fb65adc34a1d8c9ad95fde17de4a8d781ad1f63a34d664decbebe->enter($__internal_5407ffa3377fb65adc34a1d8c9ad95fde17de4a8d781ad1f63a34d664decbebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5407ffa3377fb65adc34a1d8c9ad95fde17de4a8d781ad1f63a34d664decbebe->leave($__internal_5407ffa3377fb65adc34a1d8c9ad95fde17de4a8d781ad1f63a34d664decbebe_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d43523f9f2acbf9c18039ac9c55ab6c3b28a10f8e3c7c62b5ea7d410d1a2d37c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d43523f9f2acbf9c18039ac9c55ab6c3b28a10f8e3c7c62b5ea7d410d1a2d37c->enter($__internal_d43523f9f2acbf9c18039ac9c55ab6c3b28a10f8e3c7c62b5ea7d410d1a2d37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d43523f9f2acbf9c18039ac9c55ab6c3b28a10f8e3c7c62b5ea7d410d1a2d37c->leave($__internal_d43523f9f2acbf9c18039ac9c55ab6c3b28a10f8e3c7c62b5ea7d410d1a2d37c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
