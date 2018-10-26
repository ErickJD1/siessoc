<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_5d257f22ae05625af5dd86c47e34f2fa8d5b22f095921d585bb48576baf3c883 extends Twig_Template
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
        $__internal_fc947ebc1d268105d9bf23ca501bc4961e6dadb750a3fbe55f2f686ed7dada30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc947ebc1d268105d9bf23ca501bc4961e6dadb750a3fbe55f2f686ed7dada30->enter($__internal_fc947ebc1d268105d9bf23ca501bc4961e6dadb750a3fbe55f2f686ed7dada30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_fc947ebc1d268105d9bf23ca501bc4961e6dadb750a3fbe55f2f686ed7dada30->leave($__internal_fc947ebc1d268105d9bf23ca501bc4961e6dadb750a3fbe55f2f686ed7dada30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
