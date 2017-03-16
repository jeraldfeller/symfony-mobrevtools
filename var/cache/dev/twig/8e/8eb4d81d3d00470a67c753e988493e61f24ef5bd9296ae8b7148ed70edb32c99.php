<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_0050df91baea8b8ff649bdb3ae9c97137f39662a05a5bbbeaa12ca2f9686013f extends Twig_Template
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
        $__internal_fbebf2487538f277c283dfff4d65f404e2ebdeeb43dcc35ff0f5068b74d0db99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbebf2487538f277c283dfff4d65f404e2ebdeeb43dcc35ff0f5068b74d0db99->enter($__internal_fbebf2487538f277c283dfff4d65f404e2ebdeeb43dcc35ff0f5068b74d0db99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_2c687626fcff3051f8956db551a61151d42f4547bdd85a3142ea22c2a00116b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c687626fcff3051f8956db551a61151d42f4547bdd85a3142ea22c2a00116b5->enter($__internal_2c687626fcff3051f8956db551a61151d42f4547bdd85a3142ea22c2a00116b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_fbebf2487538f277c283dfff4d65f404e2ebdeeb43dcc35ff0f5068b74d0db99->leave($__internal_fbebf2487538f277c283dfff4d65f404e2ebdeeb43dcc35ff0f5068b74d0db99_prof);

        
        $__internal_2c687626fcff3051f8956db551a61151d42f4547bdd85a3142ea22c2a00116b5->leave($__internal_2c687626fcff3051f8956db551a61151d42f4547bdd85a3142ea22c2a00116b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
