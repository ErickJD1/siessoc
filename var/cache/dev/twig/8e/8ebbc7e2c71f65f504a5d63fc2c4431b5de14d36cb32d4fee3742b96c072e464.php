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
        $__internal_e4b5167f24fa80e1ca23805c7b1d769369c6500033f908ae8155b4f4d46220a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4b5167f24fa80e1ca23805c7b1d769369c6500033f908ae8155b4f4d46220a4->enter($__internal_e4b5167f24fa80e1ca23805c7b1d769369c6500033f908ae8155b4f4d46220a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4b5167f24fa80e1ca23805c7b1d769369c6500033f908ae8155b4f4d46220a4->leave($__internal_e4b5167f24fa80e1ca23805c7b1d769369c6500033f908ae8155b4f4d46220a4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5d25d9539074abdfc896022efa17cab31f05d745a455516b151780a25a4fa9d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d25d9539074abdfc896022efa17cab31f05d745a455516b151780a25a4fa9d6->enter($__internal_5d25d9539074abdfc896022efa17cab31f05d745a455516b151780a25a4fa9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5d25d9539074abdfc896022efa17cab31f05d745a455516b151780a25a4fa9d6->leave($__internal_5d25d9539074abdfc896022efa17cab31f05d745a455516b151780a25a4fa9d6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cdd33bd7fce710086a1545b8993ac9492d671fa91eb0656fe4edb6895abe5f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdd33bd7fce710086a1545b8993ac9492d671fa91eb0656fe4edb6895abe5f80->enter($__internal_cdd33bd7fce710086a1545b8993ac9492d671fa91eb0656fe4edb6895abe5f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cdd33bd7fce710086a1545b8993ac9492d671fa91eb0656fe4edb6895abe5f80->leave($__internal_cdd33bd7fce710086a1545b8993ac9492d671fa91eb0656fe4edb6895abe5f80_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8ca251d199def1e89779379fe51744fee88a789f4841d96d3e270e92e30f004d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ca251d199def1e89779379fe51744fee88a789f4841d96d3e270e92e30f004d->enter($__internal_8ca251d199def1e89779379fe51744fee88a789f4841d96d3e270e92e30f004d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8ca251d199def1e89779379fe51744fee88a789f4841d96d3e270e92e30f004d->leave($__internal_8ca251d199def1e89779379fe51744fee88a789f4841d96d3e270e92e30f004d_prof);

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
