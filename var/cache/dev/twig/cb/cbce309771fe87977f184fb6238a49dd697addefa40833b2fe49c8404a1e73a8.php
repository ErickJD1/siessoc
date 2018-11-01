<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_e1b839532624ebf4735ffbacf04d7f61b560e518415a80c3781732e6cf0fff6b extends Twig_Template
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
        $__internal_30e1855993549f81442a1c2ff8bce89b8cdb6dfe724c5330e5f072eed32b92dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30e1855993549f81442a1c2ff8bce89b8cdb6dfe724c5330e5f072eed32b92dc->enter($__internal_30e1855993549f81442a1c2ff8bce89b8cdb6dfe724c5330e5f072eed32b92dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_30e1855993549f81442a1c2ff8bce89b8cdb6dfe724c5330e5f072eed32b92dc->leave($__internal_30e1855993549f81442a1c2ff8bce89b8cdb6dfe724c5330e5f072eed32b92dc_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_95553564545c61cfe2879ee06bfbda1387a7f2125cdb75660153b5959039040c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95553564545c61cfe2879ee06bfbda1387a7f2125cdb75660153b5959039040c->enter($__internal_95553564545c61cfe2879ee06bfbda1387a7f2125cdb75660153b5959039040c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_95553564545c61cfe2879ee06bfbda1387a7f2125cdb75660153b5959039040c->leave($__internal_95553564545c61cfe2879ee06bfbda1387a7f2125cdb75660153b5959039040c_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b05175d1b3819a3085029af1714f0d0541d99a2eb27aa5a2f3961cfd278b0b0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b05175d1b3819a3085029af1714f0d0541d99a2eb27aa5a2f3961cfd278b0b0b->enter($__internal_b05175d1b3819a3085029af1714f0d0541d99a2eb27aa5a2f3961cfd278b0b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b05175d1b3819a3085029af1714f0d0541d99a2eb27aa5a2f3961cfd278b0b0b->leave($__internal_b05175d1b3819a3085029af1714f0d0541d99a2eb27aa5a2f3961cfd278b0b0b_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8dffd91df66fc49a1a4467960eb20b979c369aded9aac515e64e9fd71e97ad2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dffd91df66fc49a1a4467960eb20b979c369aded9aac515e64e9fd71e97ad2b->enter($__internal_8dffd91df66fc49a1a4467960eb20b979c369aded9aac515e64e9fd71e97ad2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8dffd91df66fc49a1a4467960eb20b979c369aded9aac515e64e9fd71e97ad2b->leave($__internal_8dffd91df66fc49a1a4467960eb20b979c369aded9aac515e64e9fd71e97ad2b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
", "@FOSUser/Registration/email.txt.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
