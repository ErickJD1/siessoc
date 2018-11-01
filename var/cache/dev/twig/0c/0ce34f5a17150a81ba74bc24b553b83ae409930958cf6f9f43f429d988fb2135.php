<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_0172219d5ae44b0f56ae4fa663b0fd8a501cb08212839a57e84b3254ecc2570e extends Twig_Template
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
        $__internal_f93e6f10a7a289b829a2237bce5b0c0d8f615078d0c5598b1bb7a7284620f39b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f93e6f10a7a289b829a2237bce5b0c0d8f615078d0c5598b1bb7a7284620f39b->enter($__internal_f93e6f10a7a289b829a2237bce5b0c0d8f615078d0c5598b1bb7a7284620f39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_f93e6f10a7a289b829a2237bce5b0c0d8f615078d0c5598b1bb7a7284620f39b->leave($__internal_f93e6f10a7a289b829a2237bce5b0c0d8f615078d0c5598b1bb7a7284620f39b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
