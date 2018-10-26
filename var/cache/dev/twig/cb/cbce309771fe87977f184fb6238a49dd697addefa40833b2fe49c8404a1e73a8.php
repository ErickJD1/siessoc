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
        $__internal_27a94bbce1544d0c5ad7a425a77712f7cf507b37093ab3655d236840b61830fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27a94bbce1544d0c5ad7a425a77712f7cf507b37093ab3655d236840b61830fc->enter($__internal_27a94bbce1544d0c5ad7a425a77712f7cf507b37093ab3655d236840b61830fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_27a94bbce1544d0c5ad7a425a77712f7cf507b37093ab3655d236840b61830fc->leave($__internal_27a94bbce1544d0c5ad7a425a77712f7cf507b37093ab3655d236840b61830fc_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9a3b85b9f8e3d4a333718f46d1663575d42ad0399d8552f4016e32c80c4cac9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a3b85b9f8e3d4a333718f46d1663575d42ad0399d8552f4016e32c80c4cac9f->enter($__internal_9a3b85b9f8e3d4a333718f46d1663575d42ad0399d8552f4016e32c80c4cac9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_9a3b85b9f8e3d4a333718f46d1663575d42ad0399d8552f4016e32c80c4cac9f->leave($__internal_9a3b85b9f8e3d4a333718f46d1663575d42ad0399d8552f4016e32c80c4cac9f_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b6fae94fe3a2774756c2a5726414ba649eabcbc3e674935f87cf8463fc4badc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6fae94fe3a2774756c2a5726414ba649eabcbc3e674935f87cf8463fc4badc0->enter($__internal_b6fae94fe3a2774756c2a5726414ba649eabcbc3e674935f87cf8463fc4badc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b6fae94fe3a2774756c2a5726414ba649eabcbc3e674935f87cf8463fc4badc0->leave($__internal_b6fae94fe3a2774756c2a5726414ba649eabcbc3e674935f87cf8463fc4badc0_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_51a65b697d3a0382ed80a9f89352e5ce59c08092b51647fe0dfe42067ed2e282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51a65b697d3a0382ed80a9f89352e5ce59c08092b51647fe0dfe42067ed2e282->enter($__internal_51a65b697d3a0382ed80a9f89352e5ce59c08092b51647fe0dfe42067ed2e282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_51a65b697d3a0382ed80a9f89352e5ce59c08092b51647fe0dfe42067ed2e282->leave($__internal_51a65b697d3a0382ed80a9f89352e5ce59c08092b51647fe0dfe42067ed2e282_prof);

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
