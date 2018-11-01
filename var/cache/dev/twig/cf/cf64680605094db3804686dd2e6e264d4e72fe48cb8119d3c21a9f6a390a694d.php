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
        $__internal_a3805b60531f17e5cd5ac57f32971e711169923e855d8685f7a15d519b96a8b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3805b60531f17e5cd5ac57f32971e711169923e855d8685f7a15d519b96a8b5->enter($__internal_a3805b60531f17e5cd5ac57f32971e711169923e855d8685f7a15d519b96a8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a3805b60531f17e5cd5ac57f32971e711169923e855d8685f7a15d519b96a8b5->leave($__internal_a3805b60531f17e5cd5ac57f32971e711169923e855d8685f7a15d519b96a8b5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f8892beae72f1d42ee2837858a577af8c605ff73aedc27ed7d2489123223bb9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8892beae72f1d42ee2837858a577af8c605ff73aedc27ed7d2489123223bb9d->enter($__internal_f8892beae72f1d42ee2837858a577af8c605ff73aedc27ed7d2489123223bb9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_f8892beae72f1d42ee2837858a577af8c605ff73aedc27ed7d2489123223bb9d->leave($__internal_f8892beae72f1d42ee2837858a577af8c605ff73aedc27ed7d2489123223bb9d_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f7287709d20b6ac77af440ae714737e4086806dc50d0ea996173987c6bd42daf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7287709d20b6ac77af440ae714737e4086806dc50d0ea996173987c6bd42daf->enter($__internal_f7287709d20b6ac77af440ae714737e4086806dc50d0ea996173987c6bd42daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f7287709d20b6ac77af440ae714737e4086806dc50d0ea996173987c6bd42daf->leave($__internal_f7287709d20b6ac77af440ae714737e4086806dc50d0ea996173987c6bd42daf_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ca5adbd58f8548fd667654eeea99af61614e728586c1875e947a7d7dd48e3345 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca5adbd58f8548fd667654eeea99af61614e728586c1875e947a7d7dd48e3345->enter($__internal_ca5adbd58f8548fd667654eeea99af61614e728586c1875e947a7d7dd48e3345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ca5adbd58f8548fd667654eeea99af61614e728586c1875e947a7d7dd48e3345->leave($__internal_ca5adbd58f8548fd667654eeea99af61614e728586c1875e947a7d7dd48e3345_prof);

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
