<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_a7842723d16d12d9ed9db5976973b39110251d95cb4411ac5f2ed2447d97aa3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_0dd6920c3dec4f88e1b3dc1fe8c29d9a94455c713888eddc84d324a32341f30b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dd6920c3dec4f88e1b3dc1fe8c29d9a94455c713888eddc84d324a32341f30b->enter($__internal_0dd6920c3dec4f88e1b3dc1fe8c29d9a94455c713888eddc84d324a32341f30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0dd6920c3dec4f88e1b3dc1fe8c29d9a94455c713888eddc84d324a32341f30b->leave($__internal_0dd6920c3dec4f88e1b3dc1fe8c29d9a94455c713888eddc84d324a32341f30b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_db6014ef8bfcc21ba7977a9472efa470a5bb5f0386dd1da06161cfb66e01c5e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db6014ef8bfcc21ba7977a9472efa470a5bb5f0386dd1da06161cfb66e01c5e8->enter($__internal_db6014ef8bfcc21ba7977a9472efa470a5bb5f0386dd1da06161cfb66e01c5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_db6014ef8bfcc21ba7977a9472efa470a5bb5f0386dd1da06161cfb66e01c5e8->leave($__internal_db6014ef8bfcc21ba7977a9472efa470a5bb5f0386dd1da06161cfb66e01c5e8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
