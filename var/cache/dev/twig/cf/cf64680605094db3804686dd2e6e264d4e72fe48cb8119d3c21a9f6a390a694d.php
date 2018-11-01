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
        $__internal_68c62d3886cb5022a408ca82d6c933b566158aba58e7ef82757c43d15025f21d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68c62d3886cb5022a408ca82d6c933b566158aba58e7ef82757c43d15025f21d->enter($__internal_68c62d3886cb5022a408ca82d6c933b566158aba58e7ef82757c43d15025f21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_68c62d3886cb5022a408ca82d6c933b566158aba58e7ef82757c43d15025f21d->leave($__internal_68c62d3886cb5022a408ca82d6c933b566158aba58e7ef82757c43d15025f21d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ae5d654998d5b4379b0f724693158ea877f69854e645da1d79e0fef060333ad4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae5d654998d5b4379b0f724693158ea877f69854e645da1d79e0fef060333ad4->enter($__internal_ae5d654998d5b4379b0f724693158ea877f69854e645da1d79e0fef060333ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_ae5d654998d5b4379b0f724693158ea877f69854e645da1d79e0fef060333ad4->leave($__internal_ae5d654998d5b4379b0f724693158ea877f69854e645da1d79e0fef060333ad4_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7b73b7ea5269b3861a910ee6f589e3dcad546b75f92ee599636beab87f9fa5ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b73b7ea5269b3861a910ee6f589e3dcad546b75f92ee599636beab87f9fa5ca->enter($__internal_7b73b7ea5269b3861a910ee6f589e3dcad546b75f92ee599636beab87f9fa5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7b73b7ea5269b3861a910ee6f589e3dcad546b75f92ee599636beab87f9fa5ca->leave($__internal_7b73b7ea5269b3861a910ee6f589e3dcad546b75f92ee599636beab87f9fa5ca_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ecd26796b21055abceffb5385641ba0edd8a8a9d1a4c69fdfb45fb116c129bda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecd26796b21055abceffb5385641ba0edd8a8a9d1a4c69fdfb45fb116c129bda->enter($__internal_ecd26796b21055abceffb5385641ba0edd8a8a9d1a4c69fdfb45fb116c129bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ecd26796b21055abceffb5385641ba0edd8a8a9d1a4c69fdfb45fb116c129bda->leave($__internal_ecd26796b21055abceffb5385641ba0edd8a8a9d1a4c69fdfb45fb116c129bda_prof);

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
