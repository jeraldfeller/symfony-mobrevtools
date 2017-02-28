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
        $__internal_540fb7911c8f808af91515073dd76c52227d0d1fcdef1d5e6ee82aa64c0613da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_540fb7911c8f808af91515073dd76c52227d0d1fcdef1d5e6ee82aa64c0613da->enter($__internal_540fb7911c8f808af91515073dd76c52227d0d1fcdef1d5e6ee82aa64c0613da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_c2b5e5941e7106d2993ee85bd97466247e0c1775f652b03f9553eb8530bc6fea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2b5e5941e7106d2993ee85bd97466247e0c1775f652b03f9553eb8530bc6fea->enter($__internal_c2b5e5941e7106d2993ee85bd97466247e0c1775f652b03f9553eb8530bc6fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_540fb7911c8f808af91515073dd76c52227d0d1fcdef1d5e6ee82aa64c0613da->leave($__internal_540fb7911c8f808af91515073dd76c52227d0d1fcdef1d5e6ee82aa64c0613da_prof);

        
        $__internal_c2b5e5941e7106d2993ee85bd97466247e0c1775f652b03f9553eb8530bc6fea->leave($__internal_c2b5e5941e7106d2993ee85bd97466247e0c1775f652b03f9553eb8530bc6fea_prof);

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
