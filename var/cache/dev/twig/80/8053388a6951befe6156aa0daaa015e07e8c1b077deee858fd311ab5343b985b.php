<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_0572b4943f6bb43ba0e82716640a055431562ff6e2a989de12dede058678c211 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_d405b74f79b46fa70fef80bddc33dc58d6457e64006522b6c33f7e8a6bd7eed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d405b74f79b46fa70fef80bddc33dc58d6457e64006522b6c33f7e8a6bd7eed0->enter($__internal_d405b74f79b46fa70fef80bddc33dc58d6457e64006522b6c33f7e8a6bd7eed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d405b74f79b46fa70fef80bddc33dc58d6457e64006522b6c33f7e8a6bd7eed0->leave($__internal_d405b74f79b46fa70fef80bddc33dc58d6457e64006522b6c33f7e8a6bd7eed0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3dbacb8bb13a9a888951bbd7dc0c1d0bc46f874bd76c8f88dbfb50fdeb5825fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dbacb8bb13a9a888951bbd7dc0c1d0bc46f874bd76c8f88dbfb50fdeb5825fa->enter($__internal_3dbacb8bb13a9a888951bbd7dc0c1d0bc46f874bd76c8f88dbfb50fdeb5825fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("SalexUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_3dbacb8bb13a9a888951bbd7dc0c1d0bc46f874bd76c8f88dbfb50fdeb5825fa->leave($__internal_3dbacb8bb13a9a888951bbd7dc0c1d0bc46f874bd76c8f88dbfb50fdeb5825fa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle/Resources/views/Resetting/reset.html.twig");
    }
}
