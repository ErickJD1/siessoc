<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_c1a0b416dfdbd0d2a4fede41c7aea9d735cd96f47a145fe0d0042b7832e7c236 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_70eb83fb9ee49063e86576e663d7ac164ddc9b0c6bc868aa98b0017e68ef23e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70eb83fb9ee49063e86576e663d7ac164ddc9b0c6bc868aa98b0017e68ef23e8->enter($__internal_70eb83fb9ee49063e86576e663d7ac164ddc9b0c6bc868aa98b0017e68ef23e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70eb83fb9ee49063e86576e663d7ac164ddc9b0c6bc868aa98b0017e68ef23e8->leave($__internal_70eb83fb9ee49063e86576e663d7ac164ddc9b0c6bc868aa98b0017e68ef23e8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3e6f73cd0aa74d4bd3d74978ca3860d7a7da95e8c73bbdc5199401ff2b0418e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e6f73cd0aa74d4bd3d74978ca3860d7a7da95e8c73bbdc5199401ff2b0418e3->enter($__internal_3e6f73cd0aa74d4bd3d74978ca3860d7a7da95e8c73bbdc5199401ff2b0418e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_3e6f73cd0aa74d4bd3d74978ca3860d7a7da95e8c73bbdc5199401ff2b0418e3->leave($__internal_3e6f73cd0aa74d4bd3d74978ca3860d7a7da95e8c73bbdc5199401ff2b0418e3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new.html.twig");
    }
}
