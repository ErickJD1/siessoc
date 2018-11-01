<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_403fce37dc8ab3460b7cfcd408b596f18c4a36a81da88fe5d76c3b6055a02dcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_145ea27d116699a3a8806e0f8fce9e66914b41fbd14c949c80fab0c36a64fa9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_145ea27d116699a3a8806e0f8fce9e66914b41fbd14c949c80fab0c36a64fa9d->enter($__internal_145ea27d116699a3a8806e0f8fce9e66914b41fbd14c949c80fab0c36a64fa9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_145ea27d116699a3a8806e0f8fce9e66914b41fbd14c949c80fab0c36a64fa9d->leave($__internal_145ea27d116699a3a8806e0f8fce9e66914b41fbd14c949c80fab0c36a64fa9d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_04324d6202e921f8010128e9a5994f37152c9bd296415284d2ef057031ce9de7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04324d6202e921f8010128e9a5994f37152c9bd296415284d2ef057031ce9de7->enter($__internal_04324d6202e921f8010128e9a5994f37152c9bd296415284d2ef057031ce9de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_04324d6202e921f8010128e9a5994f37152c9bd296415284d2ef057031ce9de7->leave($__internal_04324d6202e921f8010128e9a5994f37152c9bd296415284d2ef057031ce9de7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
