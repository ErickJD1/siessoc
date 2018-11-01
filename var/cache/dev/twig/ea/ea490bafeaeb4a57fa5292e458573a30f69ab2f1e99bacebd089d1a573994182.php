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
        $__internal_14dcba8470298f442ae9489dc9a11f7125b39ffa8c8fa18ad01f24cf13e0a6ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14dcba8470298f442ae9489dc9a11f7125b39ffa8c8fa18ad01f24cf13e0a6ad->enter($__internal_14dcba8470298f442ae9489dc9a11f7125b39ffa8c8fa18ad01f24cf13e0a6ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14dcba8470298f442ae9489dc9a11f7125b39ffa8c8fa18ad01f24cf13e0a6ad->leave($__internal_14dcba8470298f442ae9489dc9a11f7125b39ffa8c8fa18ad01f24cf13e0a6ad_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a573a6a011d6a872d9bf3e1b3d691f3a2bd0acd0b1c4c017e2cc9e12e567b80d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a573a6a011d6a872d9bf3e1b3d691f3a2bd0acd0b1c4c017e2cc9e12e567b80d->enter($__internal_a573a6a011d6a872d9bf3e1b3d691f3a2bd0acd0b1c4c017e2cc9e12e567b80d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_a573a6a011d6a872d9bf3e1b3d691f3a2bd0acd0b1c4c017e2cc9e12e567b80d->leave($__internal_a573a6a011d6a872d9bf3e1b3d691f3a2bd0acd0b1c4c017e2cc9e12e567b80d_prof);

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
