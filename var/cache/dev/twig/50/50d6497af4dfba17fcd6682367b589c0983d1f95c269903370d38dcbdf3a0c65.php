<?php

/* @SalexUser/Resetting/reset.html.twig */
class __TwigTemplate_b37ab9bef43afc4bc89e0c2704b56f93104816fcc24a076e593a11f71c791dbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@SalexUser/Resetting/reset.html.twig", 1);
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
        $__internal_a991653190c7d8516290da86045e7b9e7402cdbdb1d1e6b2518d9d038f8ccef2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a991653190c7d8516290da86045e7b9e7402cdbdb1d1e6b2518d9d038f8ccef2->enter($__internal_a991653190c7d8516290da86045e7b9e7402cdbdb1d1e6b2518d9d038f8ccef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalexUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a991653190c7d8516290da86045e7b9e7402cdbdb1d1e6b2518d9d038f8ccef2->leave($__internal_a991653190c7d8516290da86045e7b9e7402cdbdb1d1e6b2518d9d038f8ccef2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a75d214f1da3ed04f7e756a67ab8de5dde0ebb68ee1a13451d5547a79ad7cf43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a75d214f1da3ed04f7e756a67ab8de5dde0ebb68ee1a13451d5547a79ad7cf43->enter($__internal_a75d214f1da3ed04f7e756a67ab8de5dde0ebb68ee1a13451d5547a79ad7cf43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("SalexUserBundle:Resetting:reset_content.html.twig", "@SalexUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_a75d214f1da3ed04f7e756a67ab8de5dde0ebb68ee1a13451d5547a79ad7cf43->leave($__internal_a75d214f1da3ed04f7e756a67ab8de5dde0ebb68ee1a13451d5547a79ad7cf43_prof);

    }

    public function getTemplateName()
    {
        return "@SalexUser/Resetting/reset.html.twig";
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
{% include \"SalexUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@SalexUser/Resetting/reset.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
