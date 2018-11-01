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
        $__internal_89853d24fa0dc4440af8c545f40d268f22adef814033a24b87e61b736246a0aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89853d24fa0dc4440af8c545f40d268f22adef814033a24b87e61b736246a0aa->enter($__internal_89853d24fa0dc4440af8c545f40d268f22adef814033a24b87e61b736246a0aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89853d24fa0dc4440af8c545f40d268f22adef814033a24b87e61b736246a0aa->leave($__internal_89853d24fa0dc4440af8c545f40d268f22adef814033a24b87e61b736246a0aa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ef38eda235bd6a5327f2c8b713f3214c6892512afc0ac8ce1b841fda45ac4aed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef38eda235bd6a5327f2c8b713f3214c6892512afc0ac8ce1b841fda45ac4aed->enter($__internal_ef38eda235bd6a5327f2c8b713f3214c6892512afc0ac8ce1b841fda45ac4aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ef38eda235bd6a5327f2c8b713f3214c6892512afc0ac8ce1b841fda45ac4aed->leave($__internal_ef38eda235bd6a5327f2c8b713f3214c6892512afc0ac8ce1b841fda45ac4aed_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_478e31c727e637023b27d14ba9ff0e4f4cefe3b7ddea01a61c39a5d922e813a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_478e31c727e637023b27d14ba9ff0e4f4cefe3b7ddea01a61c39a5d922e813a5->enter($__internal_478e31c727e637023b27d14ba9ff0e4f4cefe3b7ddea01a61c39a5d922e813a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_478e31c727e637023b27d14ba9ff0e4f4cefe3b7ddea01a61c39a5d922e813a5->leave($__internal_478e31c727e637023b27d14ba9ff0e4f4cefe3b7ddea01a61c39a5d922e813a5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_05beb82d9a6fa81de5f2ce98e09bd2deeddd328562cac35afbfb3a9b62950a1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05beb82d9a6fa81de5f2ce98e09bd2deeddd328562cac35afbfb3a9b62950a1e->enter($__internal_05beb82d9a6fa81de5f2ce98e09bd2deeddd328562cac35afbfb3a9b62950a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_05beb82d9a6fa81de5f2ce98e09bd2deeddd328562cac35afbfb3a9b62950a1e->leave($__internal_05beb82d9a6fa81de5f2ce98e09bd2deeddd328562cac35afbfb3a9b62950a1e_prof);

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
