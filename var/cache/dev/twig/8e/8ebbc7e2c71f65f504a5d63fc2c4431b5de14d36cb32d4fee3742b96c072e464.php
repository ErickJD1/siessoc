<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_cdeb1178f3da505011052073f905e777c22e75a7e09d162d4c93b7c5241252bb extends Twig_Template
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
        $__internal_3ed7d34eb91aa4ab7700d2e7ab010bbbc4f72b0e529a6c5b5748581023a72271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ed7d34eb91aa4ab7700d2e7ab010bbbc4f72b0e529a6c5b5748581023a72271->enter($__internal_3ed7d34eb91aa4ab7700d2e7ab010bbbc4f72b0e529a6c5b5748581023a72271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ed7d34eb91aa4ab7700d2e7ab010bbbc4f72b0e529a6c5b5748581023a72271->leave($__internal_3ed7d34eb91aa4ab7700d2e7ab010bbbc4f72b0e529a6c5b5748581023a72271_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e2b0527e23037ac689c6f36c8e5eeaa483f89374dc006d8183095eb1b62f338c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2b0527e23037ac689c6f36c8e5eeaa483f89374dc006d8183095eb1b62f338c->enter($__internal_e2b0527e23037ac689c6f36c8e5eeaa483f89374dc006d8183095eb1b62f338c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e2b0527e23037ac689c6f36c8e5eeaa483f89374dc006d8183095eb1b62f338c->leave($__internal_e2b0527e23037ac689c6f36c8e5eeaa483f89374dc006d8183095eb1b62f338c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c246049cdc37f27b221d3aa077cb08364fd3b22cd948ba24e3541e4f8d3bc13c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c246049cdc37f27b221d3aa077cb08364fd3b22cd948ba24e3541e4f8d3bc13c->enter($__internal_c246049cdc37f27b221d3aa077cb08364fd3b22cd948ba24e3541e4f8d3bc13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c246049cdc37f27b221d3aa077cb08364fd3b22cd948ba24e3541e4f8d3bc13c->leave($__internal_c246049cdc37f27b221d3aa077cb08364fd3b22cd948ba24e3541e4f8d3bc13c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7fd560fb0a008ee31adf0afcc3a5f66bbdaea53c430a4d09b65b61dd42c6c032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fd560fb0a008ee31adf0afcc3a5f66bbdaea53c430a4d09b65b61dd42c6c032->enter($__internal_7fd560fb0a008ee31adf0afcc3a5f66bbdaea53c430a4d09b65b61dd42c6c032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7fd560fb0a008ee31adf0afcc3a5f66bbdaea53c430a4d09b65b61dd42c6c032->leave($__internal_7fd560fb0a008ee31adf0afcc3a5f66bbdaea53c430a4d09b65b61dd42c6c032_prof);

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
