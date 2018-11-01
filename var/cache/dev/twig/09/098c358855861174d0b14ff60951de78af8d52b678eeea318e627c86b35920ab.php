<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_21e1e3772331346655e549a0e7a36800befa0daaeae5a5f312cb02ac8f6e0dc0 extends Twig_Template
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
        $__internal_b868dd8709abd95d8fae516de3da2d0c76b6eeb43637b07c4594a6bdf5bf2952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b868dd8709abd95d8fae516de3da2d0c76b6eeb43637b07c4594a6bdf5bf2952->enter($__internal_b868dd8709abd95d8fae516de3da2d0c76b6eeb43637b07c4594a6bdf5bf2952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b868dd8709abd95d8fae516de3da2d0c76b6eeb43637b07c4594a6bdf5bf2952->leave($__internal_b868dd8709abd95d8fae516de3da2d0c76b6eeb43637b07c4594a6bdf5bf2952_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e37bc767c2a55d73e03a23695f6b1f2e801e89ddbc808859d9d1434ad0feb741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e37bc767c2a55d73e03a23695f6b1f2e801e89ddbc808859d9d1434ad0feb741->enter($__internal_e37bc767c2a55d73e03a23695f6b1f2e801e89ddbc808859d9d1434ad0feb741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e37bc767c2a55d73e03a23695f6b1f2e801e89ddbc808859d9d1434ad0feb741->leave($__internal_e37bc767c2a55d73e03a23695f6b1f2e801e89ddbc808859d9d1434ad0feb741_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
