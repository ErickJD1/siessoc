<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_1657a9167102e91206a56a60c5549d7bdd3954caaae315a8a0f8e566db0ebbd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_fc9ea32708597ba1b6b93d3502f7d9b076b08602c9d79344f6ba737de8917b42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc9ea32708597ba1b6b93d3502f7d9b076b08602c9d79344f6ba737de8917b42->enter($__internal_fc9ea32708597ba1b6b93d3502f7d9b076b08602c9d79344f6ba737de8917b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc9ea32708597ba1b6b93d3502f7d9b076b08602c9d79344f6ba737de8917b42->leave($__internal_fc9ea32708597ba1b6b93d3502f7d9b076b08602c9d79344f6ba737de8917b42_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_273e17fdb03017587d11cb879b4fd8a1be0bf6ab9e8d54f9706be38219fbb267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_273e17fdb03017587d11cb879b4fd8a1be0bf6ab9e8d54f9706be38219fbb267->enter($__internal_273e17fdb03017587d11cb879b4fd8a1be0bf6ab9e8d54f9706be38219fbb267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_273e17fdb03017587d11cb879b4fd8a1be0bf6ab9e8d54f9706be38219fbb267->leave($__internal_273e17fdb03017587d11cb879b4fd8a1be0bf6ab9e8d54f9706be38219fbb267_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show.html.twig");
    }
}
