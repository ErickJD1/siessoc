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
        $__internal_245c06d56771e23f42605f6aaf80a69fa5c9e934e6f5aed47dab97b5b6e15f96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_245c06d56771e23f42605f6aaf80a69fa5c9e934e6f5aed47dab97b5b6e15f96->enter($__internal_245c06d56771e23f42605f6aaf80a69fa5c9e934e6f5aed47dab97b5b6e15f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_245c06d56771e23f42605f6aaf80a69fa5c9e934e6f5aed47dab97b5b6e15f96->leave($__internal_245c06d56771e23f42605f6aaf80a69fa5c9e934e6f5aed47dab97b5b6e15f96_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6f12d6681f24f17a083d207fe7140531f7d772130dea4674d2b695cd49a9a947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f12d6681f24f17a083d207fe7140531f7d772130dea4674d2b695cd49a9a947->enter($__internal_6f12d6681f24f17a083d207fe7140531f7d772130dea4674d2b695cd49a9a947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_6f12d6681f24f17a083d207fe7140531f7d772130dea4674d2b695cd49a9a947->leave($__internal_6f12d6681f24f17a083d207fe7140531f7d772130dea4674d2b695cd49a9a947_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3273f765888efac8ba4c4b343ec48941121135d24fbe8095c72b52231a0510b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3273f765888efac8ba4c4b343ec48941121135d24fbe8095c72b52231a0510b2->enter($__internal_3273f765888efac8ba4c4b343ec48941121135d24fbe8095c72b52231a0510b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3273f765888efac8ba4c4b343ec48941121135d24fbe8095c72b52231a0510b2->leave($__internal_3273f765888efac8ba4c4b343ec48941121135d24fbe8095c72b52231a0510b2_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c4f4614796f4d5d1b3360c58a462938a8e7c0366ae04f13e6242542503c3f8b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4f4614796f4d5d1b3360c58a462938a8e7c0366ae04f13e6242542503c3f8b2->enter($__internal_c4f4614796f4d5d1b3360c58a462938a8e7c0366ae04f13e6242542503c3f8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c4f4614796f4d5d1b3360c58a462938a8e7c0366ae04f13e6242542503c3f8b2->leave($__internal_c4f4614796f4d5d1b3360c58a462938a8e7c0366ae04f13e6242542503c3f8b2_prof);

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
