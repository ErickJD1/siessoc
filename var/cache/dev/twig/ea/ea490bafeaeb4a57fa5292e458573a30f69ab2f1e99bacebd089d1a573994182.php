<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_a6bb3d67d7a776f02a49bed0d2249d7bbf06b0f791e6e840d0470b7055aad3aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_99ce19a6d5298b57b3096b21f7bb1d5eaadc0e4d8dfc6df5f7246b6c93ccbba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99ce19a6d5298b57b3096b21f7bb1d5eaadc0e4d8dfc6df5f7246b6c93ccbba9->enter($__internal_99ce19a6d5298b57b3096b21f7bb1d5eaadc0e4d8dfc6df5f7246b6c93ccbba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99ce19a6d5298b57b3096b21f7bb1d5eaadc0e4d8dfc6df5f7246b6c93ccbba9->leave($__internal_99ce19a6d5298b57b3096b21f7bb1d5eaadc0e4d8dfc6df5f7246b6c93ccbba9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_96ac9cfee9d1804da1762b1c7cbdad642b658bbd77ca8e6c0869a44f6ca6f464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96ac9cfee9d1804da1762b1c7cbdad642b658bbd77ca8e6c0869a44f6ca6f464->enter($__internal_96ac9cfee9d1804da1762b1c7cbdad642b658bbd77ca8e6c0869a44f6ca6f464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_96ac9cfee9d1804da1762b1c7cbdad642b658bbd77ca8e6c0869a44f6ca6f464->leave($__internal_96ac9cfee9d1804da1762b1c7cbdad642b658bbd77ca8e6c0869a44f6ca6f464_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/edit.html.twig");
    }
}
