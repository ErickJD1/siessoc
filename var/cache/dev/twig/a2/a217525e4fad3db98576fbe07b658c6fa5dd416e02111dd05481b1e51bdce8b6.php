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
        $__internal_0ff8bdd9a1a87087f5a4eb86e0c9a48ed04e4d1958fde2fae8b61c179dad0752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ff8bdd9a1a87087f5a4eb86e0c9a48ed04e4d1958fde2fae8b61c179dad0752->enter($__internal_0ff8bdd9a1a87087f5a4eb86e0c9a48ed04e4d1958fde2fae8b61c179dad0752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ff8bdd9a1a87087f5a4eb86e0c9a48ed04e4d1958fde2fae8b61c179dad0752->leave($__internal_0ff8bdd9a1a87087f5a4eb86e0c9a48ed04e4d1958fde2fae8b61c179dad0752_prof);

    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_261ccba38ff66481e87d0bfcd2775a92b853e2f5f3cc343d211acf63aff0ddbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_261ccba38ff66481e87d0bfcd2775a92b853e2f5f3cc343d211acf63aff0ddbd->enter($__internal_261ccba38ff66481e87d0bfcd2775a92b853e2f5f3cc343d211acf63aff0ddbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Dashboard";
        
        $__internal_261ccba38ff66481e87d0bfcd2775a92b853e2f5f3cc343d211acf63aff0ddbd->leave($__internal_261ccba38ff66481e87d0bfcd2775a92b853e2f5f3cc343d211acf63aff0ddbd_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_482f21a4cfd2fc15039714677df2b391ca4db034adaea786aa7affbfccf47aee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_482f21a4cfd2fc15039714677df2b391ca4db034adaea786aa7affbfccf47aee->enter($__internal_482f21a4cfd2fc15039714677df2b391ca4db034adaea786aa7affbfccf47aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "\t
";
        
        $__internal_482f21a4cfd2fc15039714677df2b391ca4db034adaea786aa7affbfccf47aee->leave($__internal_482f21a4cfd2fc15039714677df2b391ca4db034adaea786aa7affbfccf47aee_prof);

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
