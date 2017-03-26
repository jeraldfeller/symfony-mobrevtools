<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_502d18011db3de7711248fa76cc15b0ed66f41215fa7dc34aaf643a400e3ec6e extends Twig_Template
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
        $__internal_4fcab04ee2023700cb9805d9929768e17a98486e85ea7b89808a25aae99f84d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fcab04ee2023700cb9805d9929768e17a98486e85ea7b89808a25aae99f84d9->enter($__internal_4fcab04ee2023700cb9805d9929768e17a98486e85ea7b89808a25aae99f84d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_a581ef690251945e3c515c547a912bd2617b47ea6bc0c48c7f244cce4a855b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a581ef690251945e3c515c547a912bd2617b47ea6bc0c48c7f244cce4a855b30->enter($__internal_a581ef690251945e3c515c547a912bd2617b47ea6bc0c48c7f244cce4a855b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_4fcab04ee2023700cb9805d9929768e17a98486e85ea7b89808a25aae99f84d9->leave($__internal_4fcab04ee2023700cb9805d9929768e17a98486e85ea7b89808a25aae99f84d9_prof);

        
        $__internal_a581ef690251945e3c515c547a912bd2617b47ea6bc0c48c7f244cce4a855b30->leave($__internal_a581ef690251945e3c515c547a912bd2617b47ea6bc0c48c7f244cce4a855b30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
