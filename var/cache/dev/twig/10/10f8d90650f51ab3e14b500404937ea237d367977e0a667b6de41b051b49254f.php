<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_8653095e355a2b046b4d6d73c5aaa52fbc3fae1a4ce3cbc437a5d75cecba8246 extends Twig_Template
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
        $__internal_d3b355ddc1ef5a0c6da8f3e01bd23ec02921014fa5cd3be9fb81498e29c11832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b355ddc1ef5a0c6da8f3e01bd23ec02921014fa5cd3be9fb81498e29c11832->enter($__internal_d3b355ddc1ef5a0c6da8f3e01bd23ec02921014fa5cd3be9fb81498e29c11832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d3b355ddc1ef5a0c6da8f3e01bd23ec02921014fa5cd3be9fb81498e29c11832->leave($__internal_d3b355ddc1ef5a0c6da8f3e01bd23ec02921014fa5cd3be9fb81498e29c11832_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6f664a18264647bb5c89c0b0854cb3a3b66b666960845da2857315605b529211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f664a18264647bb5c89c0b0854cb3a3b66b666960845da2857315605b529211->enter($__internal_6f664a18264647bb5c89c0b0854cb3a3b66b666960845da2857315605b529211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_6f664a18264647bb5c89c0b0854cb3a3b66b666960845da2857315605b529211->leave($__internal_6f664a18264647bb5c89c0b0854cb3a3b66b666960845da2857315605b529211_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f5b5390984ebff93ed6bc78f8924592de3957446b84c1ea2ca14bf009ba96f3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5b5390984ebff93ed6bc78f8924592de3957446b84c1ea2ca14bf009ba96f3b->enter($__internal_f5b5390984ebff93ed6bc78f8924592de3957446b84c1ea2ca14bf009ba96f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f5b5390984ebff93ed6bc78f8924592de3957446b84c1ea2ca14bf009ba96f3b->leave($__internal_f5b5390984ebff93ed6bc78f8924592de3957446b84c1ea2ca14bf009ba96f3b_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5bd7e392186860f50aa275a02645bb0908bce89b207774125062fc37cfaa59ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bd7e392186860f50aa275a02645bb0908bce89b207774125062fc37cfaa59ff->enter($__internal_5bd7e392186860f50aa275a02645bb0908bce89b207774125062fc37cfaa59ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5bd7e392186860f50aa275a02645bb0908bce89b207774125062fc37cfaa59ff->leave($__internal_5bd7e392186860f50aa275a02645bb0908bce89b207774125062fc37cfaa59ff_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
", "@FOSUser/Resetting/email.txt.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
