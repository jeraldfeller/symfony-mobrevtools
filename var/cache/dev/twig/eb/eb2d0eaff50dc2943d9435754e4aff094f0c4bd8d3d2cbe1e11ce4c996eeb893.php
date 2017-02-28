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
        $__internal_7611ed734bbf01a178fae14654927fff7f1b3c6c2c5f4a854e33afce3545df4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7611ed734bbf01a178fae14654927fff7f1b3c6c2c5f4a854e33afce3545df4e->enter($__internal_7611ed734bbf01a178fae14654927fff7f1b3c6c2c5f4a854e33afce3545df4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_b8120c623c34d6bffa8b37db2e7251ad4de1fb8a2b196cbb5ed1bc8ed6fd752c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8120c623c34d6bffa8b37db2e7251ad4de1fb8a2b196cbb5ed1bc8ed6fd752c->enter($__internal_b8120c623c34d6bffa8b37db2e7251ad4de1fb8a2b196cbb5ed1bc8ed6fd752c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_7611ed734bbf01a178fae14654927fff7f1b3c6c2c5f4a854e33afce3545df4e->leave($__internal_7611ed734bbf01a178fae14654927fff7f1b3c6c2c5f4a854e33afce3545df4e_prof);

        
        $__internal_b8120c623c34d6bffa8b37db2e7251ad4de1fb8a2b196cbb5ed1bc8ed6fd752c->leave($__internal_b8120c623c34d6bffa8b37db2e7251ad4de1fb8a2b196cbb5ed1bc8ed6fd752c_prof);

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
