<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_45fda9a20d2636f9f9883557199bc3418fc1da6a32d4a40dfde451f5c88b8d6b extends Twig_Template
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
        $__internal_fd12723fae3fe74566c745c0b54c9a46f42fc79e6124b7ccb60e2bc417a9c4e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd12723fae3fe74566c745c0b54c9a46f42fc79e6124b7ccb60e2bc417a9c4e1->enter($__internal_fd12723fae3fe74566c745c0b54c9a46f42fc79e6124b7ccb60e2bc417a9c4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_fd12723fae3fe74566c745c0b54c9a46f42fc79e6124b7ccb60e2bc417a9c4e1->leave($__internal_fd12723fae3fe74566c745c0b54c9a46f42fc79e6124b7ccb60e2bc417a9c4e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
