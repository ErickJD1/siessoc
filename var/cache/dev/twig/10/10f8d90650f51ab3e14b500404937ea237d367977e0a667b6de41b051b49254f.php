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
        $__internal_1c199f7fd67010701a507a378cf5a8fac298c6419e905ddc3da73109affd2089 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c199f7fd67010701a507a378cf5a8fac298c6419e905ddc3da73109affd2089->enter($__internal_1c199f7fd67010701a507a378cf5a8fac298c6419e905ddc3da73109affd2089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1c199f7fd67010701a507a378cf5a8fac298c6419e905ddc3da73109affd2089->leave($__internal_1c199f7fd67010701a507a378cf5a8fac298c6419e905ddc3da73109affd2089_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_72217ef8a081c6d536857238337607c583dffe2b41a6ff9ec1581068b336a033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72217ef8a081c6d536857238337607c583dffe2b41a6ff9ec1581068b336a033->enter($__internal_72217ef8a081c6d536857238337607c583dffe2b41a6ff9ec1581068b336a033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_72217ef8a081c6d536857238337607c583dffe2b41a6ff9ec1581068b336a033->leave($__internal_72217ef8a081c6d536857238337607c583dffe2b41a6ff9ec1581068b336a033_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b93c3f0ddcffa3235b2dcfecec15cc2008b0654c5f8e8455b4f80eff382c367c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b93c3f0ddcffa3235b2dcfecec15cc2008b0654c5f8e8455b4f80eff382c367c->enter($__internal_b93c3f0ddcffa3235b2dcfecec15cc2008b0654c5f8e8455b4f80eff382c367c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b93c3f0ddcffa3235b2dcfecec15cc2008b0654c5f8e8455b4f80eff382c367c->leave($__internal_b93c3f0ddcffa3235b2dcfecec15cc2008b0654c5f8e8455b4f80eff382c367c_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_29a488b8fc4dafa42b6259e8c167d5991f6bb14d225027c3dd31d69bf66aeb5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29a488b8fc4dafa42b6259e8c167d5991f6bb14d225027c3dd31d69bf66aeb5b->enter($__internal_29a488b8fc4dafa42b6259e8c167d5991f6bb14d225027c3dd31d69bf66aeb5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_29a488b8fc4dafa42b6259e8c167d5991f6bb14d225027c3dd31d69bf66aeb5b->leave($__internal_29a488b8fc4dafa42b6259e8c167d5991f6bb14d225027c3dd31d69bf66aeb5b_prof);

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
