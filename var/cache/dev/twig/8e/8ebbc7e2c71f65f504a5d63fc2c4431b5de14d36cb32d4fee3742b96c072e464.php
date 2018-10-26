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
        $__internal_b58c60c4f535bdc89bfbcd67cb093930ec1c39130089d7cd606b2c16f9ec896f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b58c60c4f535bdc89bfbcd67cb093930ec1c39130089d7cd606b2c16f9ec896f->enter($__internal_b58c60c4f535bdc89bfbcd67cb093930ec1c39130089d7cd606b2c16f9ec896f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b58c60c4f535bdc89bfbcd67cb093930ec1c39130089d7cd606b2c16f9ec896f->leave($__internal_b58c60c4f535bdc89bfbcd67cb093930ec1c39130089d7cd606b2c16f9ec896f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2fd12f86df7667674a1da5cdcc95df4a0ddf74647982eb51c9f9e79970b81a03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fd12f86df7667674a1da5cdcc95df4a0ddf74647982eb51c9f9e79970b81a03->enter($__internal_2fd12f86df7667674a1da5cdcc95df4a0ddf74647982eb51c9f9e79970b81a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2fd12f86df7667674a1da5cdcc95df4a0ddf74647982eb51c9f9e79970b81a03->leave($__internal_2fd12f86df7667674a1da5cdcc95df4a0ddf74647982eb51c9f9e79970b81a03_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_46733a007a7be9ec9a4d47c9ff56ab7f841bc14ef4b7d38fa04f564f97fb7739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46733a007a7be9ec9a4d47c9ff56ab7f841bc14ef4b7d38fa04f564f97fb7739->enter($__internal_46733a007a7be9ec9a4d47c9ff56ab7f841bc14ef4b7d38fa04f564f97fb7739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_46733a007a7be9ec9a4d47c9ff56ab7f841bc14ef4b7d38fa04f564f97fb7739->leave($__internal_46733a007a7be9ec9a4d47c9ff56ab7f841bc14ef4b7d38fa04f564f97fb7739_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_467ab061541ad3ad38db01e77966ecc64f8b84ad5f2184691a85630b1596ce83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_467ab061541ad3ad38db01e77966ecc64f8b84ad5f2184691a85630b1596ce83->enter($__internal_467ab061541ad3ad38db01e77966ecc64f8b84ad5f2184691a85630b1596ce83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_467ab061541ad3ad38db01e77966ecc64f8b84ad5f2184691a85630b1596ce83->leave($__internal_467ab061541ad3ad38db01e77966ecc64f8b84ad5f2184691a85630b1596ce83_prof);

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
