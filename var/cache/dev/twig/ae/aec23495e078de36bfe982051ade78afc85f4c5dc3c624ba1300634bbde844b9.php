<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_d4d12c3d9a6ca56c7f7eb81a4655c1c3c5ff2f8659459e58e6ad11ed58aa7541 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_d73613fa8fd59d9eac5ee69ef0f8ae2294a6aa0d437ecda4716c73ae598677df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d73613fa8fd59d9eac5ee69ef0f8ae2294a6aa0d437ecda4716c73ae598677df->enter($__internal_d73613fa8fd59d9eac5ee69ef0f8ae2294a6aa0d437ecda4716c73ae598677df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d73613fa8fd59d9eac5ee69ef0f8ae2294a6aa0d437ecda4716c73ae598677df->leave($__internal_d73613fa8fd59d9eac5ee69ef0f8ae2294a6aa0d437ecda4716c73ae598677df_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5682cc6ccb3e83d9dc76030516f54da15cba669a556c7c0300d6e8faa5d371ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5682cc6ccb3e83d9dc76030516f54da15cba669a556c7c0300d6e8faa5d371ae->enter($__internal_5682cc6ccb3e83d9dc76030516f54da15cba669a556c7c0300d6e8faa5d371ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_5682cc6ccb3e83d9dc76030516f54da15cba669a556c7c0300d6e8faa5d371ae->leave($__internal_5682cc6ccb3e83d9dc76030516f54da15cba669a556c7c0300d6e8faa5d371ae_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
