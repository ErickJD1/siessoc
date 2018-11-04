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
        $__internal_7cee4e25ca86e19c0b3b36b36dfc84a32e216944554fe4371ef372d2f993b8c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cee4e25ca86e19c0b3b36b36dfc84a32e216944554fe4371ef372d2f993b8c5->enter($__internal_7cee4e25ca86e19c0b3b36b36dfc84a32e216944554fe4371ef372d2f993b8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7cee4e25ca86e19c0b3b36b36dfc84a32e216944554fe4371ef372d2f993b8c5->leave($__internal_7cee4e25ca86e19c0b3b36b36dfc84a32e216944554fe4371ef372d2f993b8c5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b27ea7bb1555397715c339968a55385e0db7545b2498d643b507f01a2a715896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b27ea7bb1555397715c339968a55385e0db7545b2498d643b507f01a2a715896->enter($__internal_b27ea7bb1555397715c339968a55385e0db7545b2498d643b507f01a2a715896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_b27ea7bb1555397715c339968a55385e0db7545b2498d643b507f01a2a715896->leave($__internal_b27ea7bb1555397715c339968a55385e0db7545b2498d643b507f01a2a715896_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2bc0a7fed879b3a2bd9451a70ba279a98f453c4c541ac3adc4de1ccbea82b5b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bc0a7fed879b3a2bd9451a70ba279a98f453c4c541ac3adc4de1ccbea82b5b2->enter($__internal_2bc0a7fed879b3a2bd9451a70ba279a98f453c4c541ac3adc4de1ccbea82b5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2bc0a7fed879b3a2bd9451a70ba279a98f453c4c541ac3adc4de1ccbea82b5b2->leave($__internal_2bc0a7fed879b3a2bd9451a70ba279a98f453c4c541ac3adc4de1ccbea82b5b2_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4ec5be3a05d322a545f7a9357e12b51463fe3c2da78a678ac0e92d5d9228b672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ec5be3a05d322a545f7a9357e12b51463fe3c2da78a678ac0e92d5d9228b672->enter($__internal_4ec5be3a05d322a545f7a9357e12b51463fe3c2da78a678ac0e92d5d9228b672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4ec5be3a05d322a545f7a9357e12b51463fe3c2da78a678ac0e92d5d9228b672->leave($__internal_4ec5be3a05d322a545f7a9357e12b51463fe3c2da78a678ac0e92d5d9228b672_prof);

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
