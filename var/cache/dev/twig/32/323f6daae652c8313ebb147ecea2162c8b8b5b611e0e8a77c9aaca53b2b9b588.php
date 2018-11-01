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
        $__internal_ab34df18669083bd8ba08496aad6e636c3b31340be7177ba6d67f1530b4b02f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab34df18669083bd8ba08496aad6e636c3b31340be7177ba6d67f1530b4b02f8->enter($__internal_ab34df18669083bd8ba08496aad6e636c3b31340be7177ba6d67f1530b4b02f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab34df18669083bd8ba08496aad6e636c3b31340be7177ba6d67f1530b4b02f8->leave($__internal_ab34df18669083bd8ba08496aad6e636c3b31340be7177ba6d67f1530b4b02f8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1328dd21b1a6c63864f47e1d2181ea5bb4d12efb46cc4ed0fd7011447ab1bcf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1328dd21b1a6c63864f47e1d2181ea5bb4d12efb46cc4ed0fd7011447ab1bcf1->enter($__internal_1328dd21b1a6c63864f47e1d2181ea5bb4d12efb46cc4ed0fd7011447ab1bcf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1328dd21b1a6c63864f47e1d2181ea5bb4d12efb46cc4ed0fd7011447ab1bcf1->leave($__internal_1328dd21b1a6c63864f47e1d2181ea5bb4d12efb46cc4ed0fd7011447ab1bcf1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c7bb112d5deff93e90e9bf8ee7f0341a34ea6540b9991faa77e94813d4fcefba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7bb112d5deff93e90e9bf8ee7f0341a34ea6540b9991faa77e94813d4fcefba->enter($__internal_c7bb112d5deff93e90e9bf8ee7f0341a34ea6540b9991faa77e94813d4fcefba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c7bb112d5deff93e90e9bf8ee7f0341a34ea6540b9991faa77e94813d4fcefba->leave($__internal_c7bb112d5deff93e90e9bf8ee7f0341a34ea6540b9991faa77e94813d4fcefba_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1e8c3389f6a72f56f61d39dd159525c46a29d996f5e471affc7d3ce4ba44ae80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e8c3389f6a72f56f61d39dd159525c46a29d996f5e471affc7d3ce4ba44ae80->enter($__internal_1e8c3389f6a72f56f61d39dd159525c46a29d996f5e471affc7d3ce4ba44ae80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1e8c3389f6a72f56f61d39dd159525c46a29d996f5e471affc7d3ce4ba44ae80->leave($__internal_1e8c3389f6a72f56f61d39dd159525c46a29d996f5e471affc7d3ce4ba44ae80_prof);

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
