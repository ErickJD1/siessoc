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
        $__internal_70b589e353b9be283c167211137a31c385a5ca05ed7bb4365662478420b8e2ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70b589e353b9be283c167211137a31c385a5ca05ed7bb4365662478420b8e2ef->enter($__internal_70b589e353b9be283c167211137a31c385a5ca05ed7bb4365662478420b8e2ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70b589e353b9be283c167211137a31c385a5ca05ed7bb4365662478420b8e2ef->leave($__internal_70b589e353b9be283c167211137a31c385a5ca05ed7bb4365662478420b8e2ef_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5bfb2b0ecc80f61a84866791cc95e67396734723475dc6c5f7ad6f87b7ce31d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bfb2b0ecc80f61a84866791cc95e67396734723475dc6c5f7ad6f87b7ce31d8->enter($__internal_5bfb2b0ecc80f61a84866791cc95e67396734723475dc6c5f7ad6f87b7ce31d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5bfb2b0ecc80f61a84866791cc95e67396734723475dc6c5f7ad6f87b7ce31d8->leave($__internal_5bfb2b0ecc80f61a84866791cc95e67396734723475dc6c5f7ad6f87b7ce31d8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e8e8ca9020bfb8cbc0273fa049a631f9856ddc350c27399d9146715974ff5241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e8ca9020bfb8cbc0273fa049a631f9856ddc350c27399d9146715974ff5241->enter($__internal_e8e8ca9020bfb8cbc0273fa049a631f9856ddc350c27399d9146715974ff5241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e8e8ca9020bfb8cbc0273fa049a631f9856ddc350c27399d9146715974ff5241->leave($__internal_e8e8ca9020bfb8cbc0273fa049a631f9856ddc350c27399d9146715974ff5241_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8a48e1053739b45240db6a107742fc9e09cdf409c4cdc4568a803fa1aabb1f99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a48e1053739b45240db6a107742fc9e09cdf409c4cdc4568a803fa1aabb1f99->enter($__internal_8a48e1053739b45240db6a107742fc9e09cdf409c4cdc4568a803fa1aabb1f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8a48e1053739b45240db6a107742fc9e09cdf409c4cdc4568a803fa1aabb1f99->leave($__internal_8a48e1053739b45240db6a107742fc9e09cdf409c4cdc4568a803fa1aabb1f99_prof);

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
