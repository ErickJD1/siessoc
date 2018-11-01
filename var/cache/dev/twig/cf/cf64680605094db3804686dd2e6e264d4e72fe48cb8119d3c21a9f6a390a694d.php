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
        $__internal_6cf7f7c10dceedd3cd4feb90eb94f889dfe131f4cbcfb8d6d20ada782c5bebc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cf7f7c10dceedd3cd4feb90eb94f889dfe131f4cbcfb8d6d20ada782c5bebc0->enter($__internal_6cf7f7c10dceedd3cd4feb90eb94f889dfe131f4cbcfb8d6d20ada782c5bebc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6cf7f7c10dceedd3cd4feb90eb94f889dfe131f4cbcfb8d6d20ada782c5bebc0->leave($__internal_6cf7f7c10dceedd3cd4feb90eb94f889dfe131f4cbcfb8d6d20ada782c5bebc0_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1196b23aa52cf705645d1868b89090109c0ec1b2598dfd745580eeac06cc6cf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1196b23aa52cf705645d1868b89090109c0ec1b2598dfd745580eeac06cc6cf1->enter($__internal_1196b23aa52cf705645d1868b89090109c0ec1b2598dfd745580eeac06cc6cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_1196b23aa52cf705645d1868b89090109c0ec1b2598dfd745580eeac06cc6cf1->leave($__internal_1196b23aa52cf705645d1868b89090109c0ec1b2598dfd745580eeac06cc6cf1_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_69d844b5afc4c796bdbf05a9914eff1d2629f3ad71d1d9252ae77364ab1fe385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69d844b5afc4c796bdbf05a9914eff1d2629f3ad71d1d9252ae77364ab1fe385->enter($__internal_69d844b5afc4c796bdbf05a9914eff1d2629f3ad71d1d9252ae77364ab1fe385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_69d844b5afc4c796bdbf05a9914eff1d2629f3ad71d1d9252ae77364ab1fe385->leave($__internal_69d844b5afc4c796bdbf05a9914eff1d2629f3ad71d1d9252ae77364ab1fe385_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4a4fb18877239c841bf69b0cab669d78c33f69261362c5693b9d85d4d4de840a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a4fb18877239c841bf69b0cab669d78c33f69261362c5693b9d85d4d4de840a->enter($__internal_4a4fb18877239c841bf69b0cab669d78c33f69261362c5693b9d85d4d4de840a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4a4fb18877239c841bf69b0cab669d78c33f69261362c5693b9d85d4d4de840a->leave($__internal_4a4fb18877239c841bf69b0cab669d78c33f69261362c5693b9d85d4d4de840a_prof);

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
