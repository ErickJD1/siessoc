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
        $__internal_923a1a4339eb353dc53f41bc16fd5343bc428e3ebe90fbf33ceee44c1b7654ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_923a1a4339eb353dc53f41bc16fd5343bc428e3ebe90fbf33ceee44c1b7654ff->enter($__internal_923a1a4339eb353dc53f41bc16fd5343bc428e3ebe90fbf33ceee44c1b7654ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_923a1a4339eb353dc53f41bc16fd5343bc428e3ebe90fbf33ceee44c1b7654ff->leave($__internal_923a1a4339eb353dc53f41bc16fd5343bc428e3ebe90fbf33ceee44c1b7654ff_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_073274e6852c993046cf2f4ed93794ddd8ebb6c3add959cc84f5b8c8335486f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_073274e6852c993046cf2f4ed93794ddd8ebb6c3add959cc84f5b8c8335486f4->enter($__internal_073274e6852c993046cf2f4ed93794ddd8ebb6c3add959cc84f5b8c8335486f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_073274e6852c993046cf2f4ed93794ddd8ebb6c3add959cc84f5b8c8335486f4->leave($__internal_073274e6852c993046cf2f4ed93794ddd8ebb6c3add959cc84f5b8c8335486f4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9df88de3f1d101b9d34439bc4868932f9a82c34309dcfc106a06634b0e21960f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df88de3f1d101b9d34439bc4868932f9a82c34309dcfc106a06634b0e21960f->enter($__internal_9df88de3f1d101b9d34439bc4868932f9a82c34309dcfc106a06634b0e21960f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9df88de3f1d101b9d34439bc4868932f9a82c34309dcfc106a06634b0e21960f->leave($__internal_9df88de3f1d101b9d34439bc4868932f9a82c34309dcfc106a06634b0e21960f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d75fa9583c872655bf3a52af57763a8b69d91c1cdc6b7b6b02a0b6ab62059981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d75fa9583c872655bf3a52af57763a8b69d91c1cdc6b7b6b02a0b6ab62059981->enter($__internal_d75fa9583c872655bf3a52af57763a8b69d91c1cdc6b7b6b02a0b6ab62059981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d75fa9583c872655bf3a52af57763a8b69d91c1cdc6b7b6b02a0b6ab62059981->leave($__internal_d75fa9583c872655bf3a52af57763a8b69d91c1cdc6b7b6b02a0b6ab62059981_prof);

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
