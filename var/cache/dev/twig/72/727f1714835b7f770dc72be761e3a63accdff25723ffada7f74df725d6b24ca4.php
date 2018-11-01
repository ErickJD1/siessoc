<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_af901365e46c4819c65427f04a4543e3f556fc4d8f866038bcd6ae411c5a1d98 extends Twig_Template
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
        $__internal_c6674ff1c47f05522deecd4fa3f20e81eb8757b58785fd13d9d2f1dce8ddfb39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6674ff1c47f05522deecd4fa3f20e81eb8757b58785fd13d9d2f1dce8ddfb39->enter($__internal_c6674ff1c47f05522deecd4fa3f20e81eb8757b58785fd13d9d2f1dce8ddfb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c6674ff1c47f05522deecd4fa3f20e81eb8757b58785fd13d9d2f1dce8ddfb39->leave($__internal_c6674ff1c47f05522deecd4fa3f20e81eb8757b58785fd13d9d2f1dce8ddfb39_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_220bd77075afeca8e070697aaddab50077820749ea5fb244278280bba192439a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_220bd77075afeca8e070697aaddab50077820749ea5fb244278280bba192439a->enter($__internal_220bd77075afeca8e070697aaddab50077820749ea5fb244278280bba192439a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_220bd77075afeca8e070697aaddab50077820749ea5fb244278280bba192439a->leave($__internal_220bd77075afeca8e070697aaddab50077820749ea5fb244278280bba192439a_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_33edfffe3e57d8aab09fdb79f557568b4a22cecdc3411ffd82cbef61c8424188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33edfffe3e57d8aab09fdb79f557568b4a22cecdc3411ffd82cbef61c8424188->enter($__internal_33edfffe3e57d8aab09fdb79f557568b4a22cecdc3411ffd82cbef61c8424188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_33edfffe3e57d8aab09fdb79f557568b4a22cecdc3411ffd82cbef61c8424188->leave($__internal_33edfffe3e57d8aab09fdb79f557568b4a22cecdc3411ffd82cbef61c8424188_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a71016952dd1cef12cb1716b5d9c7b699979bbf8417c99fc7a228ccc900475e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a71016952dd1cef12cb1716b5d9c7b699979bbf8417c99fc7a228ccc900475e0->enter($__internal_a71016952dd1cef12cb1716b5d9c7b699979bbf8417c99fc7a228ccc900475e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a71016952dd1cef12cb1716b5d9c7b699979bbf8417c99fc7a228ccc900475e0->leave($__internal_a71016952dd1cef12cb1716b5d9c7b699979bbf8417c99fc7a228ccc900475e0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
