<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_c3b2618a1b0f73e8007c1ad7fbc824a857ecdddccb51a75f301933109077fbfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9070bdad49c87ef5bf97e5fc2e7b653a73543f8f674100e9efb68dfdeae0a027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9070bdad49c87ef5bf97e5fc2e7b653a73543f8f674100e9efb68dfdeae0a027->enter($__internal_9070bdad49c87ef5bf97e5fc2e7b653a73543f8f674100e9efb68dfdeae0a027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9070bdad49c87ef5bf97e5fc2e7b653a73543f8f674100e9efb68dfdeae0a027->leave($__internal_9070bdad49c87ef5bf97e5fc2e7b653a73543f8f674100e9efb68dfdeae0a027_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b885ddb7753c5989f9000823673dc8c66bcfa9167a0fbe62919504466971bc48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b885ddb7753c5989f9000823673dc8c66bcfa9167a0fbe62919504466971bc48->enter($__internal_b885ddb7753c5989f9000823673dc8c66bcfa9167a0fbe62919504466971bc48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_b885ddb7753c5989f9000823673dc8c66bcfa9167a0fbe62919504466971bc48->leave($__internal_b885ddb7753c5989f9000823673dc8c66bcfa9167a0fbe62919504466971bc48_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}
