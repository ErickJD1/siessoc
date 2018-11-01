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
        $__internal_9f205040780588a3c53ba2a8fc02800ebb49ec0ab75c7249855909a4636d85ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f205040780588a3c53ba2a8fc02800ebb49ec0ab75c7249855909a4636d85ea->enter($__internal_9f205040780588a3c53ba2a8fc02800ebb49ec0ab75c7249855909a4636d85ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9f205040780588a3c53ba2a8fc02800ebb49ec0ab75c7249855909a4636d85ea->leave($__internal_9f205040780588a3c53ba2a8fc02800ebb49ec0ab75c7249855909a4636d85ea_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4c93df32c2f60e64519ebc12c869fd86ec383f3f3d9cc7a5eef0caf5c47fab1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c93df32c2f60e64519ebc12c869fd86ec383f3f3d9cc7a5eef0caf5c47fab1a->enter($__internal_4c93df32c2f60e64519ebc12c869fd86ec383f3f3d9cc7a5eef0caf5c47fab1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_4c93df32c2f60e64519ebc12c869fd86ec383f3f3d9cc7a5eef0caf5c47fab1a->leave($__internal_4c93df32c2f60e64519ebc12c869fd86ec383f3f3d9cc7a5eef0caf5c47fab1a_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7018db47efdb23bcb45dff63a1c36238cfddf81f22f85a2b4dc892f3b8a62f12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7018db47efdb23bcb45dff63a1c36238cfddf81f22f85a2b4dc892f3b8a62f12->enter($__internal_7018db47efdb23bcb45dff63a1c36238cfddf81f22f85a2b4dc892f3b8a62f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7018db47efdb23bcb45dff63a1c36238cfddf81f22f85a2b4dc892f3b8a62f12->leave($__internal_7018db47efdb23bcb45dff63a1c36238cfddf81f22f85a2b4dc892f3b8a62f12_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7ec2921a477768abc68cadbe0c10628c53c28cb2fac670a7a4a9b89f5f6dcbbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ec2921a477768abc68cadbe0c10628c53c28cb2fac670a7a4a9b89f5f6dcbbb->enter($__internal_7ec2921a477768abc68cadbe0c10628c53c28cb2fac670a7a4a9b89f5f6dcbbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7ec2921a477768abc68cadbe0c10628c53c28cb2fac670a7a4a9b89f5f6dcbbb->leave($__internal_7ec2921a477768abc68cadbe0c10628c53c28cb2fac670a7a4a9b89f5f6dcbbb_prof);

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
