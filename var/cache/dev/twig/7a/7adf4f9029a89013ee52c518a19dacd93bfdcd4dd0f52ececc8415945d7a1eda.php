<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_a7619a8abca1d12940443149b049ab036f5ca95811c86454a6f282cef5f5b58f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6aa54f6ed4b10088e13069b36a3bfb55a51f4a46cc5fe8efaffc0580828f447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6aa54f6ed4b10088e13069b36a3bfb55a51f4a46cc5fe8efaffc0580828f447->enter($__internal_c6aa54f6ed4b10088e13069b36a3bfb55a51f4a46cc5fe8efaffc0580828f447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c6aa54f6ed4b10088e13069b36a3bfb55a51f4a46cc5fe8efaffc0580828f447->leave($__internal_c6aa54f6ed4b10088e13069b36a3bfb55a51f4a46cc5fe8efaffc0580828f447_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b176d55bbda774d824d789d8bd86d2376e1a55398511b70d59a6ea030e40f7e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b176d55bbda774d824d789d8bd86d2376e1a55398511b70d59a6ea030e40f7e1->enter($__internal_b176d55bbda774d824d789d8bd86d2376e1a55398511b70d59a6ea030e40f7e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b176d55bbda774d824d789d8bd86d2376e1a55398511b70d59a6ea030e40f7e1->leave($__internal_b176d55bbda774d824d789d8bd86d2376e1a55398511b70d59a6ea030e40f7e1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
