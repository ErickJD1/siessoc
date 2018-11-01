<?php

/* default/dashboard.html.twig */
class __TwigTemplate_9ef131f4d79a649202d01b81cec672c29f24014d821d05c68562e62453d71e31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "default/dashboard.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_080f130435ae5a3309114eb834bcab461ad0b86bfbc28e66c1928ce92329a800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_080f130435ae5a3309114eb834bcab461ad0b86bfbc28e66c1928ce92329a800->enter($__internal_080f130435ae5a3309114eb834bcab461ad0b86bfbc28e66c1928ce92329a800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_080f130435ae5a3309114eb834bcab461ad0b86bfbc28e66c1928ce92329a800->leave($__internal_080f130435ae5a3309114eb834bcab461ad0b86bfbc28e66c1928ce92329a800_prof);

    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_166157818d6245d113c1f835d9c5ced1bdc253c4d05ad420a1655a737e54de2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_166157818d6245d113c1f835d9c5ced1bdc253c4d05ad420a1655a737e54de2b->enter($__internal_166157818d6245d113c1f835d9c5ced1bdc253c4d05ad420a1655a737e54de2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Dashboard";
        
        $__internal_166157818d6245d113c1f835d9c5ced1bdc253c4d05ad420a1655a737e54de2b->leave($__internal_166157818d6245d113c1f835d9c5ced1bdc253c4d05ad420a1655a737e54de2b_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_eed6bc312bb23055063ff8cb378d94372cd968c17df1db7a3a5b775d95cae955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eed6bc312bb23055063ff8cb378d94372cd968c17df1db7a3a5b775d95cae955->enter($__internal_eed6bc312bb23055063ff8cb378d94372cd968c17df1db7a3a5b775d95cae955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "\t
";
        
        $__internal_eed6bc312bb23055063ff8cb378d94372cd968c17df1db7a3a5b775d95cae955->leave($__internal_eed6bc312bb23055063ff8cb378d94372cd968c17df1db7a3a5b775d95cae955_prof);

    }

    public function getTemplateName()
    {
        return "default/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout/base-layout.html.twig' %}
{% block page_title %}Dashboard{% endblock %}
{% block page_content %}
\t
{% endblock %}", "default/dashboard.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\default\\dashboard.html.twig");
    }
}
