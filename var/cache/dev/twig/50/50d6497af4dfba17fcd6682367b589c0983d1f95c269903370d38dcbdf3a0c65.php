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
        $__internal_c385bafca0125857f577bdd13fb264c4cb8d1f7e4ba9c279136ae3d2bc6c0215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c385bafca0125857f577bdd13fb264c4cb8d1f7e4ba9c279136ae3d2bc6c0215->enter($__internal_c385bafca0125857f577bdd13fb264c4cb8d1f7e4ba9c279136ae3d2bc6c0215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalexUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c385bafca0125857f577bdd13fb264c4cb8d1f7e4ba9c279136ae3d2bc6c0215->leave($__internal_c385bafca0125857f577bdd13fb264c4cb8d1f7e4ba9c279136ae3d2bc6c0215_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5261fedb55e1357d2aaee312e81aed48e616dde6d6ef8d1e93d33a0666908b10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5261fedb55e1357d2aaee312e81aed48e616dde6d6ef8d1e93d33a0666908b10->enter($__internal_5261fedb55e1357d2aaee312e81aed48e616dde6d6ef8d1e93d33a0666908b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("SalexUserBundle:Resetting:reset_content.html.twig", "@SalexUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_5261fedb55e1357d2aaee312e81aed48e616dde6d6ef8d1e93d33a0666908b10->leave($__internal_5261fedb55e1357d2aaee312e81aed48e616dde6d6ef8d1e93d33a0666908b10_prof);

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
