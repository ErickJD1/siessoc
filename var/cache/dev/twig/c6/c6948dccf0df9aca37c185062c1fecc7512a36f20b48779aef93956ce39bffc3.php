<?php

/* default/dashboard.html.twig */
class __TwigTemplate_9aa3d7e2ccbcb4b73e44478d8480004dd2bc48eb3c1470c14b95c894ccf06822 extends Twig_Template
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
        $__internal_6165021f2c49af587822398b9cab5094b34b445390a81c1158ce23822ac83c0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6165021f2c49af587822398b9cab5094b34b445390a81c1158ce23822ac83c0d->enter($__internal_6165021f2c49af587822398b9cab5094b34b445390a81c1158ce23822ac83c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6165021f2c49af587822398b9cab5094b34b445390a81c1158ce23822ac83c0d->leave($__internal_6165021f2c49af587822398b9cab5094b34b445390a81c1158ce23822ac83c0d_prof);

    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_6c29286579bbbb442a6f7cf34b6098b5f6a26de11b54f3a364d1e947fa63465e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c29286579bbbb442a6f7cf34b6098b5f6a26de11b54f3a364d1e947fa63465e->enter($__internal_6c29286579bbbb442a6f7cf34b6098b5f6a26de11b54f3a364d1e947fa63465e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Dashboard";
        
        $__internal_6c29286579bbbb442a6f7cf34b6098b5f6a26de11b54f3a364d1e947fa63465e->leave($__internal_6c29286579bbbb442a6f7cf34b6098b5f6a26de11b54f3a364d1e947fa63465e_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_ee9fa563b2288b10b26c9350924583b9d0893c862c4d7a76bdcc5c5fe5bcc78b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee9fa563b2288b10b26c9350924583b9d0893c862c4d7a76bdcc5c5fe5bcc78b->enter($__internal_ee9fa563b2288b10b26c9350924583b9d0893c862c4d7a76bdcc5c5fe5bcc78b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "\t
";
        
        $__internal_ee9fa563b2288b10b26c9350924583b9d0893c862c4d7a76bdcc5c5fe5bcc78b->leave($__internal_ee9fa563b2288b10b26c9350924583b9d0893c862c4d7a76bdcc5c5fe5bcc78b_prof);

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
