<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_5d80faa5d0517b4c6eb562e3cb8eea063b9cac5e1ccf6df8d408273bac5e239b extends Twig_Template
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
        $__internal_0edc09e5797c0e1b2c38c5de215e3155a5eeff9aa88b40e7d74c3f0772b43b5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0edc09e5797c0e1b2c38c5de215e3155a5eeff9aa88b40e7d74c3f0772b43b5a->enter($__internal_0edc09e5797c0e1b2c38c5de215e3155a5eeff9aa88b40e7d74c3f0772b43b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_de81db473f75e04e20b8a6a4330c4add80ad9ab1d8cd9ff2b83b50eddea56758 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de81db473f75e04e20b8a6a4330c4add80ad9ab1d8cd9ff2b83b50eddea56758->enter($__internal_de81db473f75e04e20b8a6a4330c4add80ad9ab1d8cd9ff2b83b50eddea56758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_0edc09e5797c0e1b2c38c5de215e3155a5eeff9aa88b40e7d74c3f0772b43b5a->leave($__internal_0edc09e5797c0e1b2c38c5de215e3155a5eeff9aa88b40e7d74c3f0772b43b5a_prof);

        
        $__internal_de81db473f75e04e20b8a6a4330c4add80ad9ab1d8cd9ff2b83b50eddea56758->leave($__internal_de81db473f75e04e20b8a6a4330c4add80ad9ab1d8cd9ff2b83b50eddea56758_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
