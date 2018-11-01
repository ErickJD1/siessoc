<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_e45275d5fdfb84ec9137eb4c0e150e2b7d47bc9bc3006997088eb01fe92bcb89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_87ebf54b27d3f34c61c554f8d896aeb7da31013b8bcfbcfe9c901c03d524ef7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87ebf54b27d3f34c61c554f8d896aeb7da31013b8bcfbcfe9c901c03d524ef7e->enter($__internal_87ebf54b27d3f34c61c554f8d896aeb7da31013b8bcfbcfe9c901c03d524ef7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87ebf54b27d3f34c61c554f8d896aeb7da31013b8bcfbcfe9c901c03d524ef7e->leave($__internal_87ebf54b27d3f34c61c554f8d896aeb7da31013b8bcfbcfe9c901c03d524ef7e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9c8217a00fd0e0b880356b531d1d2795dc4e7bb07d5967805c1930163f6ab5ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c8217a00fd0e0b880356b531d1d2795dc4e7bb07d5967805c1930163f6ab5ce->enter($__internal_9c8217a00fd0e0b880356b531d1d2795dc4e7bb07d5967805c1930163f6ab5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_9c8217a00fd0e0b880356b531d1d2795dc4e7bb07d5967805c1930163f6ab5ce->leave($__internal_9c8217a00fd0e0b880356b531d1d2795dc4e7bb07d5967805c1930163f6ab5ce_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
