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
        $__internal_e693926021ae4165cebd9caafa0002959304e92dc45f1369d49149abe231fb92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e693926021ae4165cebd9caafa0002959304e92dc45f1369d49149abe231fb92->enter($__internal_e693926021ae4165cebd9caafa0002959304e92dc45f1369d49149abe231fb92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e693926021ae4165cebd9caafa0002959304e92dc45f1369d49149abe231fb92->leave($__internal_e693926021ae4165cebd9caafa0002959304e92dc45f1369d49149abe231fb92_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2fdf12df23f56ef2f59585395c9360b2fa28d9229304d53f843ffdf04e335934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fdf12df23f56ef2f59585395c9360b2fa28d9229304d53f843ffdf04e335934->enter($__internal_2fdf12df23f56ef2f59585395c9360b2fa28d9229304d53f843ffdf04e335934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_2fdf12df23f56ef2f59585395c9360b2fa28d9229304d53f843ffdf04e335934->leave($__internal_2fdf12df23f56ef2f59585395c9360b2fa28d9229304d53f843ffdf04e335934_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a49f7e0191ad81be0d755475b820a62828cf7bf40c8a39601a5c58b20d7de1e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a49f7e0191ad81be0d755475b820a62828cf7bf40c8a39601a5c58b20d7de1e6->enter($__internal_a49f7e0191ad81be0d755475b820a62828cf7bf40c8a39601a5c58b20d7de1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a49f7e0191ad81be0d755475b820a62828cf7bf40c8a39601a5c58b20d7de1e6->leave($__internal_a49f7e0191ad81be0d755475b820a62828cf7bf40c8a39601a5c58b20d7de1e6_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_566864d7f412e2c032e84ab0056780eb9fc5cdf76103ba76a7497d547c5b7467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_566864d7f412e2c032e84ab0056780eb9fc5cdf76103ba76a7497d547c5b7467->enter($__internal_566864d7f412e2c032e84ab0056780eb9fc5cdf76103ba76a7497d547c5b7467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_566864d7f412e2c032e84ab0056780eb9fc5cdf76103ba76a7497d547c5b7467->leave($__internal_566864d7f412e2c032e84ab0056780eb9fc5cdf76103ba76a7497d547c5b7467_prof);

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
