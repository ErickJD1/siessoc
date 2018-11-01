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
        $__internal_c8d2f70710c0b48b1e681a48b7fd94491bf52fae613a5eefcd9cdcb29d8f5a95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8d2f70710c0b48b1e681a48b7fd94491bf52fae613a5eefcd9cdcb29d8f5a95->enter($__internal_c8d2f70710c0b48b1e681a48b7fd94491bf52fae613a5eefcd9cdcb29d8f5a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c8d2f70710c0b48b1e681a48b7fd94491bf52fae613a5eefcd9cdcb29d8f5a95->leave($__internal_c8d2f70710c0b48b1e681a48b7fd94491bf52fae613a5eefcd9cdcb29d8f5a95_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_84efd3927c2c3ac334dda581e35fb7d5453a19e03350c682a1702e69b0756a2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84efd3927c2c3ac334dda581e35fb7d5453a19e03350c682a1702e69b0756a2d->enter($__internal_84efd3927c2c3ac334dda581e35fb7d5453a19e03350c682a1702e69b0756a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_84efd3927c2c3ac334dda581e35fb7d5453a19e03350c682a1702e69b0756a2d->leave($__internal_84efd3927c2c3ac334dda581e35fb7d5453a19e03350c682a1702e69b0756a2d_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d5f4b362240687fb4dc976392dd1d995c7d10eef1b5ddcf6a5a3ff46b806bc88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f4b362240687fb4dc976392dd1d995c7d10eef1b5ddcf6a5a3ff46b806bc88->enter($__internal_d5f4b362240687fb4dc976392dd1d995c7d10eef1b5ddcf6a5a3ff46b806bc88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d5f4b362240687fb4dc976392dd1d995c7d10eef1b5ddcf6a5a3ff46b806bc88->leave($__internal_d5f4b362240687fb4dc976392dd1d995c7d10eef1b5ddcf6a5a3ff46b806bc88_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8f0b47312dc1e5888f842f21d551209a6c02735b1572ea56dc1426a7a2b96116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f0b47312dc1e5888f842f21d551209a6c02735b1572ea56dc1426a7a2b96116->enter($__internal_8f0b47312dc1e5888f842f21d551209a6c02735b1572ea56dc1426a7a2b96116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8f0b47312dc1e5888f842f21d551209a6c02735b1572ea56dc1426a7a2b96116->leave($__internal_8f0b47312dc1e5888f842f21d551209a6c02735b1572ea56dc1426a7a2b96116_prof);

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
