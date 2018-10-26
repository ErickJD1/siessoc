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
        $__internal_8cb58f409e03b97733eb229ef9d0da2a0824f33eb07cdee94aac1e6b580ac4a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cb58f409e03b97733eb229ef9d0da2a0824f33eb07cdee94aac1e6b580ac4a6->enter($__internal_8cb58f409e03b97733eb229ef9d0da2a0824f33eb07cdee94aac1e6b580ac4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cb58f409e03b97733eb229ef9d0da2a0824f33eb07cdee94aac1e6b580ac4a6->leave($__internal_8cb58f409e03b97733eb229ef9d0da2a0824f33eb07cdee94aac1e6b580ac4a6_prof);

    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_a58ae417dc5adea6292a09e13593232188c608a239e1defe7945714d67563ec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a58ae417dc5adea6292a09e13593232188c608a239e1defe7945714d67563ec7->enter($__internal_a58ae417dc5adea6292a09e13593232188c608a239e1defe7945714d67563ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Dashboard";
        
        $__internal_a58ae417dc5adea6292a09e13593232188c608a239e1defe7945714d67563ec7->leave($__internal_a58ae417dc5adea6292a09e13593232188c608a239e1defe7945714d67563ec7_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_d75cc79a256d449f6b066f3e88cb51a35c58a562516cabf28166e86755aa1df5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d75cc79a256d449f6b066f3e88cb51a35c58a562516cabf28166e86755aa1df5->enter($__internal_d75cc79a256d449f6b066f3e88cb51a35c58a562516cabf28166e86755aa1df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "\t
";
        
        $__internal_d75cc79a256d449f6b066f3e88cb51a35c58a562516cabf28166e86755aa1df5->leave($__internal_d75cc79a256d449f6b066f3e88cb51a35c58a562516cabf28166e86755aa1df5_prof);

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
