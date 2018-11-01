<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_f64a158f6833c9e0ac51fd928e61ac34e3b1d5c2c73da6adc8c6ffa9e1cedac4 extends Twig_Template
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
        $__internal_a68f6283eb5067b3aaa052c8527488bde564beeddb5cdd1859fd74c630d4e35f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a68f6283eb5067b3aaa052c8527488bde564beeddb5cdd1859fd74c630d4e35f->enter($__internal_a68f6283eb5067b3aaa052c8527488bde564beeddb5cdd1859fd74c630d4e35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_a68f6283eb5067b3aaa052c8527488bde564beeddb5cdd1859fd74c630d4e35f->leave($__internal_a68f6283eb5067b3aaa052c8527488bde564beeddb5cdd1859fd74c630d4e35f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
