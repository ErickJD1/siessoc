<?php

/* @SalexUser/Resetting/reset_content.html.twig */
class __TwigTemplate_45be4276d6a26689809dc00386b3e42765c48d9cfc1c737bf7d2d2fb96dc5dde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'password_widget' => array($this, 'block_password_widget'),
            'form_errors' => array($this, 'block_form_errors'),
            'password_errors' => array($this, 'block_password_errors'),
            'user_auth_contents' => array($this, 'block_user_auth_contents'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eec89c80a7abab1cce2fc4ce06e2df00a518831b7ef6c22d18243ab035d76c6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eec89c80a7abab1cce2fc4ce06e2df00a518831b7ef6c22d18243ab035d76c6c->enter($__internal_eec89c80a7abab1cce2fc4ce06e2df00a518831b7ef6c22d18243ab035d76c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalexUser/Resetting/reset_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this));
        // line 5
        $this->displayBlock('password_widget', $context, $blocks);
        // line 13
        $this->displayBlock('form_errors', $context, $blocks);
        // line 24
        $this->displayBlock('password_errors', $context, $blocks);
        // line 37
        echo "
";
        // line 38
        $this->displayBlock('user_auth_contents', $context, $blocks);
        
        $__internal_eec89c80a7abab1cce2fc4ce06e2df00a518831b7ef6c22d18243ab035d76c6c->leave($__internal_eec89c80a7abab1cce2fc4ce06e2df00a518831b7ef6c22d18243ab035d76c6c_prof);

    }

    // line 5
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_75338d96fa6757be913ab6a15d73e06ef112ee83697e928d3c5cb4edd703e285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75338d96fa6757be913ab6a15d73e06ef112ee83697e928d3c5cb4edd703e285->enter($__internal_75338d96fa6757be913ab6a15d73e06ef112ee83697e928d3c5cb4edd703e285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 6
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "password")) : ("password"));
        // line 7
        echo "<div class=\"form-group has-feedback\">
    \t";
        // line 8
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    \t<span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
    </div>";
        
        $__internal_75338d96fa6757be913ab6a15d73e06ef112ee83697e928d3c5cb4edd703e285->leave($__internal_75338d96fa6757be913ab6a15d73e06ef112ee83697e928d3c5cb4edd703e285_prof);

    }

    // line 13
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_2543bf49547f067fa586636bee050fe003a80f2d6fcb2f99e8588c8437dc8ddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2543bf49547f067fa586636bee050fe003a80f2d6fcb2f99e8588c8437dc8ddf->enter($__internal_2543bf49547f067fa586636bee050fe003a80f2d6fcb2f99e8588c8437dc8ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 14
        if ((array_key_exists("errors", $context) && (twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0))) {
            // line 15
            echo "<div class=\"alert alert-danger alert-dismissible\">";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "</div>";
        }
        
        $__internal_2543bf49547f067fa586636bee050fe003a80f2d6fcb2f99e8588c8437dc8ddf->leave($__internal_2543bf49547f067fa586636bee050fe003a80f2d6fcb2f99e8588c8437dc8ddf_prof);

    }

    // line 24
    public function block_password_errors($context, array $blocks = array())
    {
        $__internal_b4978182ba5dfd2bd75cb2993d9d3e2a21c26f55d6b330cdeffcf251b5523ec0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4978182ba5dfd2bd75cb2993d9d3e2a21c26f55d6b330cdeffcf251b5523ec0->enter($__internal_b4978182ba5dfd2bd75cb2993d9d3e2a21c26f55d6b330cdeffcf251b5523ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_errors"));

        // line 25
        if ((array_key_exists("errors", $context) && (twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0))) {
            // line 26
            echo "<div class=\"form-group has-error\">";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 28
                echo "<label class=\"control-label\">
            \t<i class=\"fa fa-times-circle-o\"></i>
            \t";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
         \t</label>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "</div>";
        }
        
        $__internal_b4978182ba5dfd2bd75cb2993d9d3e2a21c26f55d6b330cdeffcf251b5523ec0->leave($__internal_b4978182ba5dfd2bd75cb2993d9d3e2a21c26f55d6b330cdeffcf251b5523ec0_prof);

    }

    // line 38
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_48610cc109148a47c6bff60b34e62a30df55e67e12719a2e3efe2016fbb624a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48610cc109148a47c6bff60b34e62a30df55e67e12719a2e3efe2016fbb624a8->enter($__internal_48610cc109148a47c6bff60b34e62a30df55e67e12719a2e3efe2016fbb624a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        // line 39
        echo "\t";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "attr" => array("class" => "fos_user_resetting_reset")));
        echo "
\t    ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t    <div>
\t        <input type=\"submit\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary btn-block btn-flat\" />
\t    </div>
\t";
        // line 44
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_48610cc109148a47c6bff60b34e62a30df55e67e12719a2e3efe2016fbb624a8->leave($__internal_48610cc109148a47c6bff60b34e62a30df55e67e12719a2e3efe2016fbb624a8_prof);

    }

    public function getTemplateName()
    {
        return "@SalexUser/Resetting/reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 44,  146 => 42,  141 => 40,  136 => 39,  130 => 38,  122 => 33,  114 => 30,  110 => 28,  106 => 27,  104 => 26,  102 => 25,  96 => 24,  88 => 19,  82 => 17,  78 => 16,  76 => 15,  74 => 14,  68 => 13,  58 => 8,  55 => 7,  53 => 6,  47 => 5,  40 => 38,  37 => 37,  35 => 24,  33 => 13,  31 => 5,  29 => 3,  26 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% form_theme form _self %}
{# Overriding Form Elements #}
{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    <div class=\"form-group has-feedback\">
    \t{{ block('form_widget_simple') }}
    \t<span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
    </div>
{%- endblock password_widget -%}

{%- block form_errors -%}
    {%- if errors is defined and errors|length > 0 -%}
    <div class=\"alert alert-danger alert-dismissible\">
        {%- for error in errors -%}
            {{ error.message }}
        {%- endfor -%}
    </div>
    {%- endif -%}
{%- endblock form_errors -%}

{# This is individual form type error #}
{%- block password_errors -%}
    {%- if errors is defined and errors|length > 0 -%}
    <div class=\"form-group has-error\">
        {%- for error in errors -%}
            <label class=\"control-label\">
            \t<i class=\"fa fa-times-circle-o\"></i>
            \t{{ error.message }}
         \t</label>
        {%- endfor -%}
    </div>
    {%- endif -%}
{%- endblock password_errors -%}
{# End of Overriding Form Elements #}

{% block user_auth_contents %}
\t{{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'fos_user_resetting_reset' } }) }}
\t    {{ form_widget(form) }}
\t    <div>
\t        <input type=\"submit\" value=\"{{ 'resetting.reset.submit'|trans }}\" class=\"btn btn-primary btn-block btn-flat\" />
\t    </div>
\t{{ form_end(form) }}
{% endblock %}", "@SalexUser/Resetting/reset_content.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle\\Resources\\views\\Resetting\\reset_content.html.twig");
    }
}
