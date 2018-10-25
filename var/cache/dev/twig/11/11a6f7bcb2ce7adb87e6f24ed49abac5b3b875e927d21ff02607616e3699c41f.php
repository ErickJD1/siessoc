<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_03514466e360b25dffceecef76904872db015ef4ef06cb13a6bbd4b8665113db extends Twig_Template
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
        $__internal_b2336b9e2ce22b48aed454e5336bc7196b63c7b6b5bc34c338133957b530a07b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2336b9e2ce22b48aed454e5336bc7196b63c7b6b5bc34c338133957b530a07b->enter($__internal_b2336b9e2ce22b48aed454e5336bc7196b63c7b6b5bc34c338133957b530a07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b2336b9e2ce22b48aed454e5336bc7196b63c7b6b5bc34c338133957b530a07b->leave($__internal_b2336b9e2ce22b48aed454e5336bc7196b63c7b6b5bc34c338133957b530a07b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2cd4fbc63fd11cb3138cb16d1832c97f24737465e55f304db9d0690aa3d83160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cd4fbc63fd11cb3138cb16d1832c97f24737465e55f304db9d0690aa3d83160->enter($__internal_2cd4fbc63fd11cb3138cb16d1832c97f24737465e55f304db9d0690aa3d83160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_2cd4fbc63fd11cb3138cb16d1832c97f24737465e55f304db9d0690aa3d83160->leave($__internal_2cd4fbc63fd11cb3138cb16d1832c97f24737465e55f304db9d0690aa3d83160_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_384dbe28bc2b092879bddaffc7daff63f8c2edde0779fd82ace01421f71cdfc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_384dbe28bc2b092879bddaffc7daff63f8c2edde0779fd82ace01421f71cdfc1->enter($__internal_384dbe28bc2b092879bddaffc7daff63f8c2edde0779fd82ace01421f71cdfc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_384dbe28bc2b092879bddaffc7daff63f8c2edde0779fd82ace01421f71cdfc1->leave($__internal_384dbe28bc2b092879bddaffc7daff63f8c2edde0779fd82ace01421f71cdfc1_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c095195a158fed6a734dfd48c941c3bb2e44b5aacbe261a6fd76bc8723e29ef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c095195a158fed6a734dfd48c941c3bb2e44b5aacbe261a6fd76bc8723e29ef0->enter($__internal_c095195a158fed6a734dfd48c941c3bb2e44b5aacbe261a6fd76bc8723e29ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c095195a158fed6a734dfd48c941c3bb2e44b5aacbe261a6fd76bc8723e29ef0->leave($__internal_c095195a158fed6a734dfd48c941c3bb2e44b5aacbe261a6fd76bc8723e29ef0_prof);

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
