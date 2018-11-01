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
        $__internal_41320523115756edddba248fb0155f0dab995c46bdb36a4794b74c5b5a46e95c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41320523115756edddba248fb0155f0dab995c46bdb36a4794b74c5b5a46e95c->enter($__internal_41320523115756edddba248fb0155f0dab995c46bdb36a4794b74c5b5a46e95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_41320523115756edddba248fb0155f0dab995c46bdb36a4794b74c5b5a46e95c->leave($__internal_41320523115756edddba248fb0155f0dab995c46bdb36a4794b74c5b5a46e95c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_959c4478f23c3b129a3598c7659a03a6837b7297d93e38d11a554bf14565b84b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_959c4478f23c3b129a3598c7659a03a6837b7297d93e38d11a554bf14565b84b->enter($__internal_959c4478f23c3b129a3598c7659a03a6837b7297d93e38d11a554bf14565b84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_959c4478f23c3b129a3598c7659a03a6837b7297d93e38d11a554bf14565b84b->leave($__internal_959c4478f23c3b129a3598c7659a03a6837b7297d93e38d11a554bf14565b84b_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6cb49aa452bda5d898ce0ea61d2ed7a07ca402168b8c6abe1d39baa39bb4e624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cb49aa452bda5d898ce0ea61d2ed7a07ca402168b8c6abe1d39baa39bb4e624->enter($__internal_6cb49aa452bda5d898ce0ea61d2ed7a07ca402168b8c6abe1d39baa39bb4e624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6cb49aa452bda5d898ce0ea61d2ed7a07ca402168b8c6abe1d39baa39bb4e624->leave($__internal_6cb49aa452bda5d898ce0ea61d2ed7a07ca402168b8c6abe1d39baa39bb4e624_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_60607fc8276674996eba55e18fabeef228a559f39d2bbd604e27386503b7c8a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60607fc8276674996eba55e18fabeef228a559f39d2bbd604e27386503b7c8a6->enter($__internal_60607fc8276674996eba55e18fabeef228a559f39d2bbd604e27386503b7c8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_60607fc8276674996eba55e18fabeef228a559f39d2bbd604e27386503b7c8a6->leave($__internal_60607fc8276674996eba55e18fabeef228a559f39d2bbd604e27386503b7c8a6_prof);

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
