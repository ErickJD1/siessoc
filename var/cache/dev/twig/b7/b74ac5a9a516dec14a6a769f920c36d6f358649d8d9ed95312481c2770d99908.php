<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_8e53eb094d7cbd45657e2e29f9fb7ad8f5334357d3c78fbeb4327b17b42ee817 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a26f114623b82a3aa388a3bb9d32bff0e05e738c18c7ea9a338c561e44dff6f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a26f114623b82a3aa388a3bb9d32bff0e05e738c18c7ea9a338c561e44dff6f6->enter($__internal_a26f114623b82a3aa388a3bb9d32bff0e05e738c18c7ea9a338c561e44dff6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a26f114623b82a3aa388a3bb9d32bff0e05e738c18c7ea9a338c561e44dff6f6->leave($__internal_a26f114623b82a3aa388a3bb9d32bff0e05e738c18c7ea9a338c561e44dff6f6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d58ddd012a78b78ff9c3661f3e108fa9ea3ba01edbd58433d26da437b6e48b1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d58ddd012a78b78ff9c3661f3e108fa9ea3ba01edbd58433d26da437b6e48b1d->enter($__internal_d58ddd012a78b78ff9c3661f3e108fa9ea3ba01edbd58433d26da437b6e48b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_d58ddd012a78b78ff9c3661f3e108fa9ea3ba01edbd58433d26da437b6e48b1d->leave($__internal_d58ddd012a78b78ff9c3661f3e108fa9ea3ba01edbd58433d26da437b6e48b1d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
