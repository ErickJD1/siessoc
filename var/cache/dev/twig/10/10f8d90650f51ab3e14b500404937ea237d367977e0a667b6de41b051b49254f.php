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
        $__internal_d3c4195b8866e75008fffa1de9795a62dbb33158b000fda7bae24076878571df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3c4195b8866e75008fffa1de9795a62dbb33158b000fda7bae24076878571df->enter($__internal_d3c4195b8866e75008fffa1de9795a62dbb33158b000fda7bae24076878571df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d3c4195b8866e75008fffa1de9795a62dbb33158b000fda7bae24076878571df->leave($__internal_d3c4195b8866e75008fffa1de9795a62dbb33158b000fda7bae24076878571df_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f56e1e7314e9615b008f9c2664221539aa76ccc60bccc805b8ecbc1ecccf39b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f56e1e7314e9615b008f9c2664221539aa76ccc60bccc805b8ecbc1ecccf39b8->enter($__internal_f56e1e7314e9615b008f9c2664221539aa76ccc60bccc805b8ecbc1ecccf39b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_f56e1e7314e9615b008f9c2664221539aa76ccc60bccc805b8ecbc1ecccf39b8->leave($__internal_f56e1e7314e9615b008f9c2664221539aa76ccc60bccc805b8ecbc1ecccf39b8_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ef25f3e23e7084ad18ff569b4e4c030862b780f4cc35a21bdecda392f8b8ff23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef25f3e23e7084ad18ff569b4e4c030862b780f4cc35a21bdecda392f8b8ff23->enter($__internal_ef25f3e23e7084ad18ff569b4e4c030862b780f4cc35a21bdecda392f8b8ff23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ef25f3e23e7084ad18ff569b4e4c030862b780f4cc35a21bdecda392f8b8ff23->leave($__internal_ef25f3e23e7084ad18ff569b4e4c030862b780f4cc35a21bdecda392f8b8ff23_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_119899dc375464b93cd032303e4161dfa1c2a9c74f712f34f0439daec368f08b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_119899dc375464b93cd032303e4161dfa1c2a9c74f712f34f0439daec368f08b->enter($__internal_119899dc375464b93cd032303e4161dfa1c2a9c74f712f34f0439daec368f08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_119899dc375464b93cd032303e4161dfa1c2a9c74f712f34f0439daec368f08b->leave($__internal_119899dc375464b93cd032303e4161dfa1c2a9c74f712f34f0439daec368f08b_prof);

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
