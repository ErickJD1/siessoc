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
        $__internal_e6e516268987036ea17b2b031640a49991281285c834877fb462c76c5fca100d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6e516268987036ea17b2b031640a49991281285c834877fb462c76c5fca100d->enter($__internal_e6e516268987036ea17b2b031640a49991281285c834877fb462c76c5fca100d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6e516268987036ea17b2b031640a49991281285c834877fb462c76c5fca100d->leave($__internal_e6e516268987036ea17b2b031640a49991281285c834877fb462c76c5fca100d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_789791f174a67411e86279ef794975dbf2a9fc8a4428ed0c91fa3e44cb13ad39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_789791f174a67411e86279ef794975dbf2a9fc8a4428ed0c91fa3e44cb13ad39->enter($__internal_789791f174a67411e86279ef794975dbf2a9fc8a4428ed0c91fa3e44cb13ad39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_789791f174a67411e86279ef794975dbf2a9fc8a4428ed0c91fa3e44cb13ad39->leave($__internal_789791f174a67411e86279ef794975dbf2a9fc8a4428ed0c91fa3e44cb13ad39_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f7e9ddcba6e3262d65a310a2cf86c111049bb094a70330baa24cd6032288028d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e9ddcba6e3262d65a310a2cf86c111049bb094a70330baa24cd6032288028d->enter($__internal_f7e9ddcba6e3262d65a310a2cf86c111049bb094a70330baa24cd6032288028d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f7e9ddcba6e3262d65a310a2cf86c111049bb094a70330baa24cd6032288028d->leave($__internal_f7e9ddcba6e3262d65a310a2cf86c111049bb094a70330baa24cd6032288028d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_93c2dd28929901394a065c8387bf7eac601d303c31571009a9a1cdaef8498c13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93c2dd28929901394a065c8387bf7eac601d303c31571009a9a1cdaef8498c13->enter($__internal_93c2dd28929901394a065c8387bf7eac601d303c31571009a9a1cdaef8498c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_93c2dd28929901394a065c8387bf7eac601d303c31571009a9a1cdaef8498c13->leave($__internal_93c2dd28929901394a065c8387bf7eac601d303c31571009a9a1cdaef8498c13_prof);

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
