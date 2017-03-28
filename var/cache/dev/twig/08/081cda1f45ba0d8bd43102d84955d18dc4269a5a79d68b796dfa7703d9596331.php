<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_8aca62dec61eb97bc00bf257f9163e2a2a2fd0ff96c4f4ca3558630e66cf6001 extends Twig_Template
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
        $__internal_e00c39a71759fdfa5590206b698a2ab39a59a6f35255c863a996e4ffc987f24c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e00c39a71759fdfa5590206b698a2ab39a59a6f35255c863a996e4ffc987f24c->enter($__internal_e00c39a71759fdfa5590206b698a2ab39a59a6f35255c863a996e4ffc987f24c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_fe01315b897074a86bc4e88fc07f9a856778ebc855ed4f3d3af9b8e3a998fb39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe01315b897074a86bc4e88fc07f9a856778ebc855ed4f3d3af9b8e3a998fb39->enter($__internal_fe01315b897074a86bc4e88fc07f9a856778ebc855ed4f3d3af9b8e3a998fb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e00c39a71759fdfa5590206b698a2ab39a59a6f35255c863a996e4ffc987f24c->leave($__internal_e00c39a71759fdfa5590206b698a2ab39a59a6f35255c863a996e4ffc987f24c_prof);

        
        $__internal_fe01315b897074a86bc4e88fc07f9a856778ebc855ed4f3d3af9b8e3a998fb39->leave($__internal_fe01315b897074a86bc4e88fc07f9a856778ebc855ed4f3d3af9b8e3a998fb39_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
