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
        $__internal_98cfe305cf34ffd84b3ca27f1332060b7a3bc31452cb0b554136d9e7bdaa914a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98cfe305cf34ffd84b3ca27f1332060b7a3bc31452cb0b554136d9e7bdaa914a->enter($__internal_98cfe305cf34ffd84b3ca27f1332060b7a3bc31452cb0b554136d9e7bdaa914a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98cfe305cf34ffd84b3ca27f1332060b7a3bc31452cb0b554136d9e7bdaa914a->leave($__internal_98cfe305cf34ffd84b3ca27f1332060b7a3bc31452cb0b554136d9e7bdaa914a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_31addee613657cd43dc18278c4ee7744bf6a67ec2443fdd55e20b91c98d8acf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31addee613657cd43dc18278c4ee7744bf6a67ec2443fdd55e20b91c98d8acf1->enter($__internal_31addee613657cd43dc18278c4ee7744bf6a67ec2443fdd55e20b91c98d8acf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_31addee613657cd43dc18278c4ee7744bf6a67ec2443fdd55e20b91c98d8acf1->leave($__internal_31addee613657cd43dc18278c4ee7744bf6a67ec2443fdd55e20b91c98d8acf1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_df71054f80d0b332cae2509e04248713b353bcb45ea0c5adb9e4a8703fee5b14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df71054f80d0b332cae2509e04248713b353bcb45ea0c5adb9e4a8703fee5b14->enter($__internal_df71054f80d0b332cae2509e04248713b353bcb45ea0c5adb9e4a8703fee5b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_df71054f80d0b332cae2509e04248713b353bcb45ea0c5adb9e4a8703fee5b14->leave($__internal_df71054f80d0b332cae2509e04248713b353bcb45ea0c5adb9e4a8703fee5b14_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_011915459b56f554189427435a88844541132ee396477545adef35630d4bd33f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_011915459b56f554189427435a88844541132ee396477545adef35630d4bd33f->enter($__internal_011915459b56f554189427435a88844541132ee396477545adef35630d4bd33f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_011915459b56f554189427435a88844541132ee396477545adef35630d4bd33f->leave($__internal_011915459b56f554189427435a88844541132ee396477545adef35630d4bd33f_prof);

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
