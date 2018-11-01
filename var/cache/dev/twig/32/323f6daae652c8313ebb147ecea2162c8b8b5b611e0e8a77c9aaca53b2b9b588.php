<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_f74d4dd66bce8e3a1352d3e7a7182997cf1fb4143d0abeaa55023d4fdef7de6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_d28b1f20c8285715c06d26962999693e93a0dce755788b5391e12d3ea3023e96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d28b1f20c8285715c06d26962999693e93a0dce755788b5391e12d3ea3023e96->enter($__internal_d28b1f20c8285715c06d26962999693e93a0dce755788b5391e12d3ea3023e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d28b1f20c8285715c06d26962999693e93a0dce755788b5391e12d3ea3023e96->leave($__internal_d28b1f20c8285715c06d26962999693e93a0dce755788b5391e12d3ea3023e96_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f79ab752d6f0590f1a8960ff12fb5e3b2ab64ef4134576ac67efdef3c36277bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f79ab752d6f0590f1a8960ff12fb5e3b2ab64ef4134576ac67efdef3c36277bd->enter($__internal_f79ab752d6f0590f1a8960ff12fb5e3b2ab64ef4134576ac67efdef3c36277bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f79ab752d6f0590f1a8960ff12fb5e3b2ab64ef4134576ac67efdef3c36277bd->leave($__internal_f79ab752d6f0590f1a8960ff12fb5e3b2ab64ef4134576ac67efdef3c36277bd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_642906568cc2256fdbb08d0dd4644c811648fb960ea2f71e052fecbb27412256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_642906568cc2256fdbb08d0dd4644c811648fb960ea2f71e052fecbb27412256->enter($__internal_642906568cc2256fdbb08d0dd4644c811648fb960ea2f71e052fecbb27412256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_642906568cc2256fdbb08d0dd4644c811648fb960ea2f71e052fecbb27412256->leave($__internal_642906568cc2256fdbb08d0dd4644c811648fb960ea2f71e052fecbb27412256_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c46dac42536633e9cb79c7391b34511c8aa3fdad99cc190a8a7495dddfa2b333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c46dac42536633e9cb79c7391b34511c8aa3fdad99cc190a8a7495dddfa2b333->enter($__internal_c46dac42536633e9cb79c7391b34511c8aa3fdad99cc190a8a7495dddfa2b333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c46dac42536633e9cb79c7391b34511c8aa3fdad99cc190a8a7495dddfa2b333->leave($__internal_c46dac42536633e9cb79c7391b34511c8aa3fdad99cc190a8a7495dddfa2b333_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
