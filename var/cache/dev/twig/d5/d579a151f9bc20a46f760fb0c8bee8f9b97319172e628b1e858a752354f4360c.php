<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_33f1b96c25963de3fcb8643efcc1f553bbc821c5e4b45d2f2daf78708bf592b4 extends Twig_Template
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
        $__internal_de600e5799ac3fe8773bb7270f1bfe29ee29f4ab131d907dfc78bd50f6084923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de600e5799ac3fe8773bb7270f1bfe29ee29f4ab131d907dfc78bd50f6084923->enter($__internal_de600e5799ac3fe8773bb7270f1bfe29ee29f4ab131d907dfc78bd50f6084923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_de600e5799ac3fe8773bb7270f1bfe29ee29f4ab131d907dfc78bd50f6084923->leave($__internal_de600e5799ac3fe8773bb7270f1bfe29ee29f4ab131d907dfc78bd50f6084923_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
