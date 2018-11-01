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
        $__internal_bf66ba32931d94cb63657c0895938484db58a39d0eb2faca63cb32ce5134b221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf66ba32931d94cb63657c0895938484db58a39d0eb2faca63cb32ce5134b221->enter($__internal_bf66ba32931d94cb63657c0895938484db58a39d0eb2faca63cb32ce5134b221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf66ba32931d94cb63657c0895938484db58a39d0eb2faca63cb32ce5134b221->leave($__internal_bf66ba32931d94cb63657c0895938484db58a39d0eb2faca63cb32ce5134b221_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f7215a006a7f6f0cb31234809d509594ff990218284189c18815a1a63381db8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7215a006a7f6f0cb31234809d509594ff990218284189c18815a1a63381db8e->enter($__internal_f7215a006a7f6f0cb31234809d509594ff990218284189c18815a1a63381db8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("SalexUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_f7215a006a7f6f0cb31234809d509594ff990218284189c18815a1a63381db8e->leave($__internal_f7215a006a7f6f0cb31234809d509594ff990218284189c18815a1a63381db8e_prof);

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
