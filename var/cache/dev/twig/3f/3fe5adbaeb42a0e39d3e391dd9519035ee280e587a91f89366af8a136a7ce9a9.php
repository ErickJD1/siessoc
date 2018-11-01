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
        $__internal_31c28cc651d1c6fcaad63440a8d536a803a918d637be2c18bbe66c87a9803665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31c28cc651d1c6fcaad63440a8d536a803a918d637be2c18bbe66c87a9803665->enter($__internal_31c28cc651d1c6fcaad63440a8d536a803a918d637be2c18bbe66c87a9803665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31c28cc651d1c6fcaad63440a8d536a803a918d637be2c18bbe66c87a9803665->leave($__internal_31c28cc651d1c6fcaad63440a8d536a803a918d637be2c18bbe66c87a9803665_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ccf5cbec35bca805aa962d19edd422d0a765f32cdb92d8b728a09ebc31c14ed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccf5cbec35bca805aa962d19edd422d0a765f32cdb92d8b728a09ebc31c14ed7->enter($__internal_ccf5cbec35bca805aa962d19edd422d0a765f32cdb92d8b728a09ebc31c14ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_ccf5cbec35bca805aa962d19edd422d0a765f32cdb92d8b728a09ebc31c14ed7->leave($__internal_ccf5cbec35bca805aa962d19edd422d0a765f32cdb92d8b728a09ebc31c14ed7_prof);

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
