<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_325165ed24c59866a54db11137adbf4b8bd8bcf08d0bef4ad8a6c0eeb3668c17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_2e783749682e13fd7a08fe03c1173d89cc2d8ec9a090a42f7bc8d2a10def9d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e783749682e13fd7a08fe03c1173d89cc2d8ec9a090a42f7bc8d2a10def9d43->enter($__internal_2e783749682e13fd7a08fe03c1173d89cc2d8ec9a090a42f7bc8d2a10def9d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e783749682e13fd7a08fe03c1173d89cc2d8ec9a090a42f7bc8d2a10def9d43->leave($__internal_2e783749682e13fd7a08fe03c1173d89cc2d8ec9a090a42f7bc8d2a10def9d43_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e1541ab2c9c8a5b74c997e4b81bef4b0aff25f90ef268269482e618eb181ed3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1541ab2c9c8a5b74c997e4b81bef4b0aff25f90ef268269482e618eb181ed3c->enter($__internal_e1541ab2c9c8a5b74c997e4b81bef4b0aff25f90ef268269482e618eb181ed3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_e1541ab2c9c8a5b74c997e4b81bef4b0aff25f90ef268269482e618eb181ed3c->leave($__internal_e1541ab2c9c8a5b74c997e4b81bef4b0aff25f90ef268269482e618eb181ed3c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
