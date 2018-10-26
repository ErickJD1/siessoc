<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4852099e94a15df50b8fa3206b79c2d34b86ae272bc8115e9ee7c6e41a14130f extends Twig_Template
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
        $__internal_712d8b7dc0af7ed309d1577f5aa8e49444edee44f77403d767d6874acfa3031c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_712d8b7dc0af7ed309d1577f5aa8e49444edee44f77403d767d6874acfa3031c->enter($__internal_712d8b7dc0af7ed309d1577f5aa8e49444edee44f77403d767d6874acfa3031c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_712d8b7dc0af7ed309d1577f5aa8e49444edee44f77403d767d6874acfa3031c->leave($__internal_712d8b7dc0af7ed309d1577f5aa8e49444edee44f77403d767d6874acfa3031c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
