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
        $__internal_133b9ae59b3d41e3dc5484ee2db354aebc72efa14da9fd46e98834ab9e07613f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_133b9ae59b3d41e3dc5484ee2db354aebc72efa14da9fd46e98834ab9e07613f->enter($__internal_133b9ae59b3d41e3dc5484ee2db354aebc72efa14da9fd46e98834ab9e07613f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_133b9ae59b3d41e3dc5484ee2db354aebc72efa14da9fd46e98834ab9e07613f->leave($__internal_133b9ae59b3d41e3dc5484ee2db354aebc72efa14da9fd46e98834ab9e07613f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f25b64f311413e63ffad02ead3278b06ef7eddd93c21f4b98b23a2abf8c3eada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f25b64f311413e63ffad02ead3278b06ef7eddd93c21f4b98b23a2abf8c3eada->enter($__internal_f25b64f311413e63ffad02ead3278b06ef7eddd93c21f4b98b23a2abf8c3eada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f25b64f311413e63ffad02ead3278b06ef7eddd93c21f4b98b23a2abf8c3eada->leave($__internal_f25b64f311413e63ffad02ead3278b06ef7eddd93c21f4b98b23a2abf8c3eada_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3e4a178f0fff14ae8e6e67520602b8d6e0dd3d7e1c1cb66b7fcc10c987912c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e4a178f0fff14ae8e6e67520602b8d6e0dd3d7e1c1cb66b7fcc10c987912c69->enter($__internal_3e4a178f0fff14ae8e6e67520602b8d6e0dd3d7e1c1cb66b7fcc10c987912c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3e4a178f0fff14ae8e6e67520602b8d6e0dd3d7e1c1cb66b7fcc10c987912c69->leave($__internal_3e4a178f0fff14ae8e6e67520602b8d6e0dd3d7e1c1cb66b7fcc10c987912c69_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ded30488b65831e0bf324fdd20f7f1c08b37420f8f822603c37c3c4ccd1b0195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ded30488b65831e0bf324fdd20f7f1c08b37420f8f822603c37c3c4ccd1b0195->enter($__internal_ded30488b65831e0bf324fdd20f7f1c08b37420f8f822603c37c3c4ccd1b0195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ded30488b65831e0bf324fdd20f7f1c08b37420f8f822603c37c3c4ccd1b0195->leave($__internal_ded30488b65831e0bf324fdd20f7f1c08b37420f8f822603c37c3c4ccd1b0195_prof);

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
