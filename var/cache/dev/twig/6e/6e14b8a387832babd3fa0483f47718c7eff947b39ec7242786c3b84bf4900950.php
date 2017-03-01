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
        $__internal_861b7ce300ae002949f48b5e037d720645d6af665bb7688a891ac6fa4e34b190 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_861b7ce300ae002949f48b5e037d720645d6af665bb7688a891ac6fa4e34b190->enter($__internal_861b7ce300ae002949f48b5e037d720645d6af665bb7688a891ac6fa4e34b190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_1c229ecfe928cbb52a7804ea3369870e9da86167f490daa74c2be08267fbe036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c229ecfe928cbb52a7804ea3369870e9da86167f490daa74c2be08267fbe036->enter($__internal_1c229ecfe928cbb52a7804ea3369870e9da86167f490daa74c2be08267fbe036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_861b7ce300ae002949f48b5e037d720645d6af665bb7688a891ac6fa4e34b190->leave($__internal_861b7ce300ae002949f48b5e037d720645d6af665bb7688a891ac6fa4e34b190_prof);

        
        $__internal_1c229ecfe928cbb52a7804ea3369870e9da86167f490daa74c2be08267fbe036->leave($__internal_1c229ecfe928cbb52a7804ea3369870e9da86167f490daa74c2be08267fbe036_prof);

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
