<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_f82574fdb641a09ad6be49beaca217e1359a391e395f7a38a07132e52372f153 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_3921237dd07cfd7fd368ce71ac57b2717bbc295a67ac43d096a34ce209126c60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3921237dd07cfd7fd368ce71ac57b2717bbc295a67ac43d096a34ce209126c60->enter($__internal_3921237dd07cfd7fd368ce71ac57b2717bbc295a67ac43d096a34ce209126c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3921237dd07cfd7fd368ce71ac57b2717bbc295a67ac43d096a34ce209126c60->leave($__internal_3921237dd07cfd7fd368ce71ac57b2717bbc295a67ac43d096a34ce209126c60_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5453fbe0a220c9c1013751e089ace42c2c8c80488f10a4962ae30e2ed72ce616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5453fbe0a220c9c1013751e089ace42c2c8c80488f10a4962ae30e2ed72ce616->enter($__internal_5453fbe0a220c9c1013751e089ace42c2c8c80488f10a4962ae30e2ed72ce616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_5453fbe0a220c9c1013751e089ace42c2c8c80488f10a4962ae30e2ed72ce616->leave($__internal_5453fbe0a220c9c1013751e089ace42c2c8c80488f10a4962ae30e2ed72ce616_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register.html.twig");
    }
}
