<?php

/* :default:dashboard.html.twig */
class __TwigTemplate_1f8f3ba32e9b1287da09188dce49b1dacecd57232f4bfb4991066ebc4ec05cfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":default:dashboard.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b294599a01e59460f93691c4a9cbefa25ff651733f32ebe51c4953f737573bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b294599a01e59460f93691c4a9cbefa25ff651733f32ebe51c4953f737573bf->enter($__internal_0b294599a01e59460f93691c4a9cbefa25ff651733f32ebe51c4953f737573bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b294599a01e59460f93691c4a9cbefa25ff651733f32ebe51c4953f737573bf->leave($__internal_0b294599a01e59460f93691c4a9cbefa25ff651733f32ebe51c4953f737573bf_prof);

    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_010b0bec19065be643232983814e9ec46d10721c09872e191b51efeefabb65a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_010b0bec19065be643232983814e9ec46d10721c09872e191b51efeefabb65a4->enter($__internal_010b0bec19065be643232983814e9ec46d10721c09872e191b51efeefabb65a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Dashboard";
        
        $__internal_010b0bec19065be643232983814e9ec46d10721c09872e191b51efeefabb65a4->leave($__internal_010b0bec19065be643232983814e9ec46d10721c09872e191b51efeefabb65a4_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_31c28696925ac2f0d490d2bfec4d95b8f5fd17ca3d76007dec730f9b91e96361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31c28696925ac2f0d490d2bfec4d95b8f5fd17ca3d76007dec730f9b91e96361->enter($__internal_31c28696925ac2f0d490d2bfec4d95b8f5fd17ca3d76007dec730f9b91e96361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "\t
";
        
        $__internal_31c28696925ac2f0d490d2bfec4d95b8f5fd17ca3d76007dec730f9b91e96361->leave($__internal_31c28696925ac2f0d490d2bfec4d95b8f5fd17ca3d76007dec730f9b91e96361_prof);

    }

    public function getTemplateName()
    {
        return ":default:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout/base-layout.html.twig' %}
{% block page_title %}Dashboard{% endblock %}
{% block page_content %}
\t
{% endblock %}", ":default:dashboard.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/default/dashboard.html.twig");
    }
}
