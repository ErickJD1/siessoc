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
        $__internal_907b2ae3013dd32d7be330393db46ecaf38979ca268482d72fdc562e3d16babb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_907b2ae3013dd32d7be330393db46ecaf38979ca268482d72fdc562e3d16babb->enter($__internal_907b2ae3013dd32d7be330393db46ecaf38979ca268482d72fdc562e3d16babb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_907b2ae3013dd32d7be330393db46ecaf38979ca268482d72fdc562e3d16babb->leave($__internal_907b2ae3013dd32d7be330393db46ecaf38979ca268482d72fdc562e3d16babb_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_491f5cf8befdccdf6d39c1b374c49cb21ed32fb0f8a6b96f0718c2ac71a7a1b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_491f5cf8befdccdf6d39c1b374c49cb21ed32fb0f8a6b96f0718c2ac71a7a1b0->enter($__internal_491f5cf8befdccdf6d39c1b374c49cb21ed32fb0f8a6b96f0718c2ac71a7a1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_491f5cf8befdccdf6d39c1b374c49cb21ed32fb0f8a6b96f0718c2ac71a7a1b0->leave($__internal_491f5cf8befdccdf6d39c1b374c49cb21ed32fb0f8a6b96f0718c2ac71a7a1b0_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1376bed376beb6e31ecaeebed8024334a238b03c1c432e3a777b5021e6905e8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1376bed376beb6e31ecaeebed8024334a238b03c1c432e3a777b5021e6905e8c->enter($__internal_1376bed376beb6e31ecaeebed8024334a238b03c1c432e3a777b5021e6905e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1376bed376beb6e31ecaeebed8024334a238b03c1c432e3a777b5021e6905e8c->leave($__internal_1376bed376beb6e31ecaeebed8024334a238b03c1c432e3a777b5021e6905e8c_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_234de04fbc69541557e9ca621bc4266decde332c303395716971fe0147f3c30a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_234de04fbc69541557e9ca621bc4266decde332c303395716971fe0147f3c30a->enter($__internal_234de04fbc69541557e9ca621bc4266decde332c303395716971fe0147f3c30a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_234de04fbc69541557e9ca621bc4266decde332c303395716971fe0147f3c30a->leave($__internal_234de04fbc69541557e9ca621bc4266decde332c303395716971fe0147f3c30a_prof);

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
