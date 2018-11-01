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
        $__internal_495a1e753ead40a92673a73477c9ada81148add35eac2cf90abeeab5e2fa9f9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_495a1e753ead40a92673a73477c9ada81148add35eac2cf90abeeab5e2fa9f9d->enter($__internal_495a1e753ead40a92673a73477c9ada81148add35eac2cf90abeeab5e2fa9f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_495a1e753ead40a92673a73477c9ada81148add35eac2cf90abeeab5e2fa9f9d->leave($__internal_495a1e753ead40a92673a73477c9ada81148add35eac2cf90abeeab5e2fa9f9d_prof);

    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_ed1c2e6248034067b95bf44491e913ef6e89a117d56bef40d81a7ba5437cec6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed1c2e6248034067b95bf44491e913ef6e89a117d56bef40d81a7ba5437cec6b->enter($__internal_ed1c2e6248034067b95bf44491e913ef6e89a117d56bef40d81a7ba5437cec6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Dashboard";
        
        $__internal_ed1c2e6248034067b95bf44491e913ef6e89a117d56bef40d81a7ba5437cec6b->leave($__internal_ed1c2e6248034067b95bf44491e913ef6e89a117d56bef40d81a7ba5437cec6b_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_94e58c3a4080b384cc1b80737d737ee2a98f3cd86d308da7d263de37d5a5f7d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94e58c3a4080b384cc1b80737d737ee2a98f3cd86d308da7d263de37d5a5f7d6->enter($__internal_94e58c3a4080b384cc1b80737d737ee2a98f3cd86d308da7d263de37d5a5f7d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "\t
";
        
        $__internal_94e58c3a4080b384cc1b80737d737ee2a98f3cd86d308da7d263de37d5a5f7d6->leave($__internal_94e58c3a4080b384cc1b80737d737ee2a98f3cd86d308da7d263de37d5a5f7d6_prof);

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
