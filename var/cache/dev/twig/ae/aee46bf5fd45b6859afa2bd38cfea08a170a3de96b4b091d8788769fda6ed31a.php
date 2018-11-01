<?php

/* @IvoryCKEditor/Form/ckeditor_widget.html.php */
class __TwigTemplate_8db9313982ed460f968aad00a446be90a31b08c0c3cdebda2467c0c29f7fb0a2 extends Twig_Template
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
        $__internal_c745c1062ca67ff800ba22422c267238c4d53b3851777d18bd93a1059db4ca08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c745c1062ca67ff800ba22422c267238c4d53b3851777d18bd93a1059db4ca08->enter($__internal_c745c1062ca67ff800ba22422c267238c4d53b3851777d18bd93a1059db4ca08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'attributes') ?>><?php echo htmlspecialchars(\$value) ?></textarea>

<?php if (\$enable && !\$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
";
        
        $__internal_c745c1062ca67ff800ba22422c267238c4d53b3851777d18bd93a1059db4ca08->leave($__internal_c745c1062ca67ff800ba22422c267238c4d53b3851777d18bd93a1059db4ca08_prof);

    }

    public function getTemplateName()
    {
        return "@IvoryCKEditor/Form/ckeditor_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'attributes') ?>><?php echo htmlspecialchars(\$value) ?></textarea>

<?php if (\$enable && !\$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
", "@IvoryCKEditor/Form/ckeditor_widget.html.php", "C:\\xampp\\htdocs\\siessoc\\vendor\\egeloen\\ckeditor-bundle\\Resources\\views\\Form\\ckeditor_widget.html.php");
    }
}
