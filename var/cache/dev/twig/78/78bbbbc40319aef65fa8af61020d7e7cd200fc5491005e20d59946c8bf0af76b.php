<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_9c1fb3beb891c1f9ca13f76f5e73b3400697e2af0430cde522e36e1685e8e96e extends Twig_Template
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
        $__internal_f9ecf1d9efda82c3950777eb8e4ae52af030c7cd6047eaec27e866fe11fa7e8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9ecf1d9efda82c3950777eb8e4ae52af030c7cd6047eaec27e866fe11fa7e8d->enter($__internal_f9ecf1d9efda82c3950777eb8e4ae52af030c7cd6047eaec27e866fe11fa7e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_c540e1fc1e57382679d37142e26caac50815572737a7d343a73cef36c60e1e9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c540e1fc1e57382679d37142e26caac50815572737a7d343a73cef36c60e1e9f->enter($__internal_c540e1fc1e57382679d37142e26caac50815572737a7d343a73cef36c60e1e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f9ecf1d9efda82c3950777eb8e4ae52af030c7cd6047eaec27e866fe11fa7e8d->leave($__internal_f9ecf1d9efda82c3950777eb8e4ae52af030c7cd6047eaec27e866fe11fa7e8d_prof);

        
        $__internal_c540e1fc1e57382679d37142e26caac50815572737a7d343a73cef36c60e1e9f->leave($__internal_c540e1fc1e57382679d37142e26caac50815572737a7d343a73cef36c60e1e9f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
