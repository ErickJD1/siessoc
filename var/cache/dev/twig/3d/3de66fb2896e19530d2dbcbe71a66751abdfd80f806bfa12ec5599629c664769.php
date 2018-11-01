<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_983f5ff5e7e6d59fe5432748e83f0e1fe720d5a418433ef7d3e258274b02051b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fcbdb6a96ffe92d96ad2605ad521d5a6f5853a9fecee9d8544c83240c99b088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fcbdb6a96ffe92d96ad2605ad521d5a6f5853a9fecee9d8544c83240c99b088->enter($__internal_0fcbdb6a96ffe92d96ad2605ad521d5a6f5853a9fecee9d8544c83240c99b088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_0fcbdb6a96ffe92d96ad2605ad521d5a6f5853a9fecee9d8544c83240c99b088->leave($__internal_0fcbdb6a96ffe92d96ad2605ad521d5a6f5853a9fecee9d8544c83240c99b088_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
