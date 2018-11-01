<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_af901365e46c4819c65427f04a4543e3f556fc4d8f866038bcd6ae411c5a1d98 extends Twig_Template
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
        $__internal_14dce0c2c00a7a947d68df44e8b8c275bb0e6366e003589821a0b9e99b6d0517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14dce0c2c00a7a947d68df44e8b8c275bb0e6366e003589821a0b9e99b6d0517->enter($__internal_14dce0c2c00a7a947d68df44e8b8c275bb0e6366e003589821a0b9e99b6d0517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_14dce0c2c00a7a947d68df44e8b8c275bb0e6366e003589821a0b9e99b6d0517->leave($__internal_14dce0c2c00a7a947d68df44e8b8c275bb0e6366e003589821a0b9e99b6d0517_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_26b3bc1381c1ceca3df856825b3af6d8b840d8cedc0cdaf770c8cc1a931a4d5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b3bc1381c1ceca3df856825b3af6d8b840d8cedc0cdaf770c8cc1a931a4d5a->enter($__internal_26b3bc1381c1ceca3df856825b3af6d8b840d8cedc0cdaf770c8cc1a931a4d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_26b3bc1381c1ceca3df856825b3af6d8b840d8cedc0cdaf770c8cc1a931a4d5a->leave($__internal_26b3bc1381c1ceca3df856825b3af6d8b840d8cedc0cdaf770c8cc1a931a4d5a_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_bb947de67174f04cccf79c74843363cec16652cbeb69b1a2cceef85b7cdec9da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb947de67174f04cccf79c74843363cec16652cbeb69b1a2cceef85b7cdec9da->enter($__internal_bb947de67174f04cccf79c74843363cec16652cbeb69b1a2cceef85b7cdec9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bb947de67174f04cccf79c74843363cec16652cbeb69b1a2cceef85b7cdec9da->leave($__internal_bb947de67174f04cccf79c74843363cec16652cbeb69b1a2cceef85b7cdec9da_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_bfcf8a3d4cb3425d857d178f63ef5451cb59c604d2f8ac7aa0f4845318c65660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfcf8a3d4cb3425d857d178f63ef5451cb59c604d2f8ac7aa0f4845318c65660->enter($__internal_bfcf8a3d4cb3425d857d178f63ef5451cb59c604d2f8ac7aa0f4845318c65660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_bfcf8a3d4cb3425d857d178f63ef5451cb59c604d2f8ac7aa0f4845318c65660->leave($__internal_bfcf8a3d4cb3425d857d178f63ef5451cb59c604d2f8ac7aa0f4845318c65660_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
", "FOSUserBundle:Registration:email.txt.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
