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
        $__internal_4d4d697fd95cf1eb5aeac85940e568c9de1587f635ee600a63578636415221dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d4d697fd95cf1eb5aeac85940e568c9de1587f635ee600a63578636415221dc->enter($__internal_4d4d697fd95cf1eb5aeac85940e568c9de1587f635ee600a63578636415221dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d4d697fd95cf1eb5aeac85940e568c9de1587f635ee600a63578636415221dc->leave($__internal_4d4d697fd95cf1eb5aeac85940e568c9de1587f635ee600a63578636415221dc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eca77b7d03f54535fd14613245afa3c3cf56caef7f2baa27c2dc6750d4dc1695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eca77b7d03f54535fd14613245afa3c3cf56caef7f2baa27c2dc6750d4dc1695->enter($__internal_eca77b7d03f54535fd14613245afa3c3cf56caef7f2baa27c2dc6750d4dc1695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_eca77b7d03f54535fd14613245afa3c3cf56caef7f2baa27c2dc6750d4dc1695->leave($__internal_eca77b7d03f54535fd14613245afa3c3cf56caef7f2baa27c2dc6750d4dc1695_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2c4ceae9dddcea9e4f8784023549a20e52327049982b50d0f019734e0a57ec7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c4ceae9dddcea9e4f8784023549a20e52327049982b50d0f019734e0a57ec7b->enter($__internal_2c4ceae9dddcea9e4f8784023549a20e52327049982b50d0f019734e0a57ec7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2c4ceae9dddcea9e4f8784023549a20e52327049982b50d0f019734e0a57ec7b->leave($__internal_2c4ceae9dddcea9e4f8784023549a20e52327049982b50d0f019734e0a57ec7b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_897da4b63a6f8cb10966a76dac380e1452edd16b2a0f392af32892d173596d50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_897da4b63a6f8cb10966a76dac380e1452edd16b2a0f392af32892d173596d50->enter($__internal_897da4b63a6f8cb10966a76dac380e1452edd16b2a0f392af32892d173596d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_897da4b63a6f8cb10966a76dac380e1452edd16b2a0f392af32892d173596d50->leave($__internal_897da4b63a6f8cb10966a76dac380e1452edd16b2a0f392af32892d173596d50_prof);

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
