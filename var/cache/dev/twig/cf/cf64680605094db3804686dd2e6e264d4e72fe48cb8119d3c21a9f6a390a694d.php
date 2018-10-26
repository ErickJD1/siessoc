<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_6ba9aac5ec6a83998b8704aa4170587a118152751c4122a241e0f7d50b7a07fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c02345f38fef7945496d29e5c3d75dcd5be887e76f779deff43c6983619aa23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c02345f38fef7945496d29e5c3d75dcd5be887e76f779deff43c6983619aa23->enter($__internal_4c02345f38fef7945496d29e5c3d75dcd5be887e76f779deff43c6983619aa23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4c02345f38fef7945496d29e5c3d75dcd5be887e76f779deff43c6983619aa23->leave($__internal_4c02345f38fef7945496d29e5c3d75dcd5be887e76f779deff43c6983619aa23_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6c20fd3d2ce5b73e0676b3f2756e2c321c85aeda78ef41edff45dcc1a2d8aec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c20fd3d2ce5b73e0676b3f2756e2c321c85aeda78ef41edff45dcc1a2d8aec1->enter($__internal_6c20fd3d2ce5b73e0676b3f2756e2c321c85aeda78ef41edff45dcc1a2d8aec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_6c20fd3d2ce5b73e0676b3f2756e2c321c85aeda78ef41edff45dcc1a2d8aec1->leave($__internal_6c20fd3d2ce5b73e0676b3f2756e2c321c85aeda78ef41edff45dcc1a2d8aec1_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5af92e13f33f63ec84ead35bc10db6fb91f72d29841dfa5ad0d79ac067a95835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5af92e13f33f63ec84ead35bc10db6fb91f72d29841dfa5ad0d79ac067a95835->enter($__internal_5af92e13f33f63ec84ead35bc10db6fb91f72d29841dfa5ad0d79ac067a95835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5af92e13f33f63ec84ead35bc10db6fb91f72d29841dfa5ad0d79ac067a95835->leave($__internal_5af92e13f33f63ec84ead35bc10db6fb91f72d29841dfa5ad0d79ac067a95835_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_baa2491c59ddc2ce74424e0c7bd570902be9af2bbd5381212eed486af58cbb6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baa2491c59ddc2ce74424e0c7bd570902be9af2bbd5381212eed486af58cbb6a->enter($__internal_baa2491c59ddc2ce74424e0c7bd570902be9af2bbd5381212eed486af58cbb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_baa2491c59ddc2ce74424e0c7bd570902be9af2bbd5381212eed486af58cbb6a->leave($__internal_baa2491c59ddc2ce74424e0c7bd570902be9af2bbd5381212eed486af58cbb6a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
