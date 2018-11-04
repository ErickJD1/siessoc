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
        $__internal_b79c9c1afd98fab2f65f446478ee498b3930c5bd73294c30c7e8b71592d071cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b79c9c1afd98fab2f65f446478ee498b3930c5bd73294c30c7e8b71592d071cc->enter($__internal_b79c9c1afd98fab2f65f446478ee498b3930c5bd73294c30c7e8b71592d071cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b79c9c1afd98fab2f65f446478ee498b3930c5bd73294c30c7e8b71592d071cc->leave($__internal_b79c9c1afd98fab2f65f446478ee498b3930c5bd73294c30c7e8b71592d071cc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4513cfc94a8b93d6adc4054f24f251cb1687cf7941f07251bdb0813bfbf993e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4513cfc94a8b93d6adc4054f24f251cb1687cf7941f07251bdb0813bfbf993e6->enter($__internal_4513cfc94a8b93d6adc4054f24f251cb1687cf7941f07251bdb0813bfbf993e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4513cfc94a8b93d6adc4054f24f251cb1687cf7941f07251bdb0813bfbf993e6->leave($__internal_4513cfc94a8b93d6adc4054f24f251cb1687cf7941f07251bdb0813bfbf993e6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3516f00e2b7362d74d076b7a9cf81944190d8e75cb90937ad5cf181965832b00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3516f00e2b7362d74d076b7a9cf81944190d8e75cb90937ad5cf181965832b00->enter($__internal_3516f00e2b7362d74d076b7a9cf81944190d8e75cb90937ad5cf181965832b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3516f00e2b7362d74d076b7a9cf81944190d8e75cb90937ad5cf181965832b00->leave($__internal_3516f00e2b7362d74d076b7a9cf81944190d8e75cb90937ad5cf181965832b00_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9ef9f67cffd86834fe9b65a1fde7fd8578e74a7d7bf6a96aa427d192807e37d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ef9f67cffd86834fe9b65a1fde7fd8578e74a7d7bf6a96aa427d192807e37d0->enter($__internal_9ef9f67cffd86834fe9b65a1fde7fd8578e74a7d7bf6a96aa427d192807e37d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9ef9f67cffd86834fe9b65a1fde7fd8578e74a7d7bf6a96aa427d192807e37d0->leave($__internal_9ef9f67cffd86834fe9b65a1fde7fd8578e74a7d7bf6a96aa427d192807e37d0_prof);

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
