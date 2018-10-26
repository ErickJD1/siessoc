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
        $__internal_d7088dcc29e69bbf855c366faaf29372f2c06e2637e13030c9e508e5e19e9475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7088dcc29e69bbf855c366faaf29372f2c06e2637e13030c9e508e5e19e9475->enter($__internal_d7088dcc29e69bbf855c366faaf29372f2c06e2637e13030c9e508e5e19e9475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d7088dcc29e69bbf855c366faaf29372f2c06e2637e13030c9e508e5e19e9475->leave($__internal_d7088dcc29e69bbf855c366faaf29372f2c06e2637e13030c9e508e5e19e9475_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ef48e815630712d93d32d8fe7ec48160aa605ff0ac8bcc2f38acfde9ece9001f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef48e815630712d93d32d8fe7ec48160aa605ff0ac8bcc2f38acfde9ece9001f->enter($__internal_ef48e815630712d93d32d8fe7ec48160aa605ff0ac8bcc2f38acfde9ece9001f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_ef48e815630712d93d32d8fe7ec48160aa605ff0ac8bcc2f38acfde9ece9001f->leave($__internal_ef48e815630712d93d32d8fe7ec48160aa605ff0ac8bcc2f38acfde9ece9001f_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_728c30fd164ed55be88f83cf243eff7c88f47c768699b087a1f9f3ff275c5a9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_728c30fd164ed55be88f83cf243eff7c88f47c768699b087a1f9f3ff275c5a9d->enter($__internal_728c30fd164ed55be88f83cf243eff7c88f47c768699b087a1f9f3ff275c5a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_728c30fd164ed55be88f83cf243eff7c88f47c768699b087a1f9f3ff275c5a9d->leave($__internal_728c30fd164ed55be88f83cf243eff7c88f47c768699b087a1f9f3ff275c5a9d_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_df6571d875ac97be31126346642ee130e5d29b69670188903f0cce358c6355d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df6571d875ac97be31126346642ee130e5d29b69670188903f0cce358c6355d0->enter($__internal_df6571d875ac97be31126346642ee130e5d29b69670188903f0cce358c6355d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_df6571d875ac97be31126346642ee130e5d29b69670188903f0cce358c6355d0->leave($__internal_df6571d875ac97be31126346642ee130e5d29b69670188903f0cce358c6355d0_prof);

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
