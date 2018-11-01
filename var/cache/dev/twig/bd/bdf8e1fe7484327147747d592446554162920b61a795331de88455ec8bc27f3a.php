<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_be7ffe4035887828cf6988a95415643e7f2dc57eac51c1b83e30885e99e6f646 extends Twig_Template
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
        $__internal_7f3ffa9572fd75d8e1544a21e48042a089a5d4649b674b8215ec013cc557fd90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f3ffa9572fd75d8e1544a21e48042a089a5d4649b674b8215ec013cc557fd90->enter($__internal_7f3ffa9572fd75d8e1544a21e48042a089a5d4649b674b8215ec013cc557fd90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f3ffa9572fd75d8e1544a21e48042a089a5d4649b674b8215ec013cc557fd90->leave($__internal_7f3ffa9572fd75d8e1544a21e48042a089a5d4649b674b8215ec013cc557fd90_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_14f374bc030867a420c08f8053cbbef86dba845d76e57e6c5d0fdcd0e18acf3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f374bc030867a420c08f8053cbbef86dba845d76e57e6c5d0fdcd0e18acf3d->enter($__internal_14f374bc030867a420c08f8053cbbef86dba845d76e57e6c5d0fdcd0e18acf3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_14f374bc030867a420c08f8053cbbef86dba845d76e57e6c5d0fdcd0e18acf3d->leave($__internal_14f374bc030867a420c08f8053cbbef86dba845d76e57e6c5d0fdcd0e18acf3d_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_8ae7fbcd0825e115cb63a5d4310dcf06494d5bd388061b7248345cc096216076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ae7fbcd0825e115cb63a5d4310dcf06494d5bd388061b7248345cc096216076->enter($__internal_8ae7fbcd0825e115cb63a5d4310dcf06494d5bd388061b7248345cc096216076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_8ae7fbcd0825e115cb63a5d4310dcf06494d5bd388061b7248345cc096216076->leave($__internal_8ae7fbcd0825e115cb63a5d4310dcf06494d5bd388061b7248345cc096216076_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_56ee870192a7f23f914d71677655799b4cf9390b880a3b4eb13de32d6cdf10ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ee870192a7f23f914d71677655799b4cf9390b880a3b4eb13de32d6cdf10ec->enter($__internal_56ee870192a7f23f914d71677655799b4cf9390b880a3b4eb13de32d6cdf10ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_56ee870192a7f23f914d71677655799b4cf9390b880a3b4eb13de32d6cdf10ec->leave($__internal_56ee870192a7f23f914d71677655799b4cf9390b880a3b4eb13de32d6cdf10ec_prof);

    }

    // line 13
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_268b9754ac2ce3a953bb5c61c6dfada946b33388fcb484bcd8731fe986ef16bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_268b9754ac2ce3a953bb5c61c6dfada946b33388fcb484bcd8731fe986ef16bb->enter($__internal_268b9754ac2ce3a953bb5c61c6dfada946b33388fcb484bcd8731fe986ef16bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        echo " ";
        
        $__internal_268b9754ac2ce3a953bb5c61c6dfada946b33388fcb484bcd8731fe986ef16bb->leave($__internal_268b9754ac2ce3a953bb5c61c6dfada946b33388fcb484bcd8731fe986ef16bb_prof);

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
