<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_5ab75b0f4238ee8ba9591869520a786008096907037d8bb94b7dd92277fa2d3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/loginBase.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_content' => array($this, 'block_page_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'user_auth_contents' => array($this, 'block_user_auth_contents'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/loginBase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b8efa8669fecfa4a0389f3efedb9aadb8b873b7a28e779995a96df4aab03bc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b8efa8669fecfa4a0389f3efedb9aadb8b873b7a28e779995a96df4aab03bc6->enter($__internal_1b8efa8669fecfa4a0389f3efedb9aadb8b873b7a28e779995a96df4aab03bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b8efa8669fecfa4a0389f3efedb9aadb8b873b7a28e779995a96df4aab03bc6->leave($__internal_1b8efa8669fecfa4a0389f3efedb9aadb8b873b7a28e779995a96df4aab03bc6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_be78ec97db3e2476954287339cdee2fd391f7be8e60f5a99abbd86c4398d1909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be78ec97db3e2476954287339cdee2fd391f7be8e60f5a99abbd86c4398d1909->enter($__internal_be78ec97db3e2476954287339cdee2fd391f7be8e60f5a99abbd86c4398d1909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_be78ec97db3e2476954287339cdee2fd391f7be8e60f5a99abbd86c4398d1909->leave($__internal_be78ec97db3e2476954287339cdee2fd391f7be8e60f5a99abbd86c4398d1909_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_fb6f6c3dbd20ab04123fefe4bc5ef2db2709a396916a557b5712bfcd7523c8de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb6f6c3dbd20ab04123fefe4bc5ef2db2709a396916a557b5712bfcd7523c8de->enter($__internal_fb6f6c3dbd20ab04123fefe4bc5ef2db2709a396916a557b5712bfcd7523c8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_fb6f6c3dbd20ab04123fefe4bc5ef2db2709a396916a557b5712bfcd7523c8de->leave($__internal_fb6f6c3dbd20ab04123fefe4bc5ef2db2709a396916a557b5712bfcd7523c8de_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_79cecb93d3ef6566b0868891dba0368abf1428f7224262fe06b1b22b32fbfd6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79cecb93d3ef6566b0868891dba0368abf1428f7224262fe06b1b22b32fbfd6d->enter($__internal_79cecb93d3ef6566b0868891dba0368abf1428f7224262fe06b1b22b32fbfd6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "\t\t<div class=\"login-box\">
\t\t\t<div class=\"login-logo\">
\t\t\t\t<a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/logo.jpg"), "html", null, true);
        echo "\"></a>
\t\t\t</div><!-- /.login-logo -->

\t\t\t<div class=\"login-box-body\">
\t\t\t\t";
        // line 13
        $this->displayBlock('user_auth_contents', $context, $blocks);
        // line 14
        echo "\t\t\t</div> <!-- End of login-box-body -->
\t\t</div><!-- End of login-box -->
\t";
        
        $__internal_79cecb93d3ef6566b0868891dba0368abf1428f7224262fe06b1b22b32fbfd6d->leave($__internal_79cecb93d3ef6566b0868891dba0368abf1428f7224262fe06b1b22b32fbfd6d_prof);

    }

    // line 13
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_551550d9fb10aaabbca8a2a84bb0581127760fdac008e7b7db4e8e55b80b0a24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_551550d9fb10aaabbca8a2a84bb0581127760fdac008e7b7db4e8e55b80b0a24->enter($__internal_551550d9fb10aaabbca8a2a84bb0581127760fdac008e7b7db4e8e55b80b0a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        echo " ";
        
        $__internal_551550d9fb10aaabbca8a2a84bb0581127760fdac008e7b7db4e8e55b80b0a24->leave($__internal_551550d9fb10aaabbca8a2a84bb0581127760fdac008e7b7db4e8e55b80b0a24_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 13,  83 => 14,  81 => 13,  72 => 9,  68 => 7,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout/loginBase.html.twig' %}

{% block title %}{{ site_name }}{% endblock %}

{% block page_content %}
\t{% block fos_user_content %}
\t\t<div class=\"login-box\">
\t\t\t<div class=\"login-logo\">
\t\t\t\t<a href=\"{{ path('homepage') }}\"><img src=\"{{ asset('bundles/app/images/logo.jpg') }}\"></a>
\t\t\t</div><!-- /.login-logo -->

\t\t\t<div class=\"login-box-body\">
\t\t\t\t{% block user_auth_contents %} {% endblock %}
\t\t\t</div> <!-- End of login-box-body -->
\t\t</div><!-- End of login-box -->
\t{% endblock %}
{% endblock %}", "FOSUserBundle::layout.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle/Resources/views/layout.html.twig");
    }
}
