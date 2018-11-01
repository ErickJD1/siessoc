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
        $__internal_6d6aee19de4ee16057880d006d122573222a32a94ef43dd7a313e495a1cb82a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d6aee19de4ee16057880d006d122573222a32a94ef43dd7a313e495a1cb82a0->enter($__internal_6d6aee19de4ee16057880d006d122573222a32a94ef43dd7a313e495a1cb82a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d6aee19de4ee16057880d006d122573222a32a94ef43dd7a313e495a1cb82a0->leave($__internal_6d6aee19de4ee16057880d006d122573222a32a94ef43dd7a313e495a1cb82a0_prof);

    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_8846f66432f0494bc87adba241a2db631b959da0c1738797f6c788404e108942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8846f66432f0494bc87adba241a2db631b959da0c1738797f6c788404e108942->enter($__internal_8846f66432f0494bc87adba241a2db631b959da0c1738797f6c788404e108942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Dashboard";
        
        $__internal_8846f66432f0494bc87adba241a2db631b959da0c1738797f6c788404e108942->leave($__internal_8846f66432f0494bc87adba241a2db631b959da0c1738797f6c788404e108942_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_84c31f2b4252dba8a7c50a36683f98fb875f4870c0e650f4b0aab3e6176d336d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84c31f2b4252dba8a7c50a36683f98fb875f4870c0e650f4b0aab3e6176d336d->enter($__internal_84c31f2b4252dba8a7c50a36683f98fb875f4870c0e650f4b0aab3e6176d336d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "\t
";
        
        $__internal_84c31f2b4252dba8a7c50a36683f98fb875f4870c0e650f4b0aab3e6176d336d->leave($__internal_84c31f2b4252dba8a7c50a36683f98fb875f4870c0e650f4b0aab3e6176d336d_prof);

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
