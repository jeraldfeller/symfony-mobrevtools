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
        $__internal_fc4e53e0b915c1f82e66fdde321b32e30e6cb4036e2fe780ec81a77a44129901 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc4e53e0b915c1f82e66fdde321b32e30e6cb4036e2fe780ec81a77a44129901->enter($__internal_fc4e53e0b915c1f82e66fdde321b32e30e6cb4036e2fe780ec81a77a44129901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_2eac5c9419b7e12ce38c85b8fea9e4bb08a43e25f0ae240f1e2707a21c622a44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eac5c9419b7e12ce38c85b8fea9e4bb08a43e25f0ae240f1e2707a21c622a44->enter($__internal_2eac5c9419b7e12ce38c85b8fea9e4bb08a43e25f0ae240f1e2707a21c622a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_fc4e53e0b915c1f82e66fdde321b32e30e6cb4036e2fe780ec81a77a44129901->leave($__internal_fc4e53e0b915c1f82e66fdde321b32e30e6cb4036e2fe780ec81a77a44129901_prof);

        
        $__internal_2eac5c9419b7e12ce38c85b8fea9e4bb08a43e25f0ae240f1e2707a21c622a44->leave($__internal_2eac5c9419b7e12ce38c85b8fea9e4bb08a43e25f0ae240f1e2707a21c622a44_prof);

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
