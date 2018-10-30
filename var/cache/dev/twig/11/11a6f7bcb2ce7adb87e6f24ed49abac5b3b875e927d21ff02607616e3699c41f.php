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
        $__internal_2cd6d7fcfb2a933df60825143b232aa887be279c688a58fdc04c957003c7a1ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cd6d7fcfb2a933df60825143b232aa887be279c688a58fdc04c957003c7a1ac->enter($__internal_2cd6d7fcfb2a933df60825143b232aa887be279c688a58fdc04c957003c7a1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2cd6d7fcfb2a933df60825143b232aa887be279c688a58fdc04c957003c7a1ac->leave($__internal_2cd6d7fcfb2a933df60825143b232aa887be279c688a58fdc04c957003c7a1ac_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d37c6e8761829d04f8a8aed30673a30ee6422b24e82f7723c755c952332308cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d37c6e8761829d04f8a8aed30673a30ee6422b24e82f7723c755c952332308cc->enter($__internal_d37c6e8761829d04f8a8aed30673a30ee6422b24e82f7723c755c952332308cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_d37c6e8761829d04f8a8aed30673a30ee6422b24e82f7723c755c952332308cc->leave($__internal_d37c6e8761829d04f8a8aed30673a30ee6422b24e82f7723c755c952332308cc_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_183f766fb3ccebb26fcf7ca5f0f190247add3bf4aef1f311931c8c810619a0eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_183f766fb3ccebb26fcf7ca5f0f190247add3bf4aef1f311931c8c810619a0eb->enter($__internal_183f766fb3ccebb26fcf7ca5f0f190247add3bf4aef1f311931c8c810619a0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_183f766fb3ccebb26fcf7ca5f0f190247add3bf4aef1f311931c8c810619a0eb->leave($__internal_183f766fb3ccebb26fcf7ca5f0f190247add3bf4aef1f311931c8c810619a0eb_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9fa142465d4a8a18d7f41c003fb216556442550701daf9a99ca4f8c08fcc5f1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa142465d4a8a18d7f41c003fb216556442550701daf9a99ca4f8c08fcc5f1f->enter($__internal_9fa142465d4a8a18d7f41c003fb216556442550701daf9a99ca4f8c08fcc5f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9fa142465d4a8a18d7f41c003fb216556442550701daf9a99ca4f8c08fcc5f1f->leave($__internal_9fa142465d4a8a18d7f41c003fb216556442550701daf9a99ca4f8c08fcc5f1f_prof);

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
