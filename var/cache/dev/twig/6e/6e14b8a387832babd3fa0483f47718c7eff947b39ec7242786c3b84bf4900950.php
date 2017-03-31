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
        $__internal_432e77fd5994c715a562fda24effdf91ec97db10d6efb4710bf4ee3a933a876e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_432e77fd5994c715a562fda24effdf91ec97db10d6efb4710bf4ee3a933a876e->enter($__internal_432e77fd5994c715a562fda24effdf91ec97db10d6efb4710bf4ee3a933a876e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_fac4b0dbab144722acfa1e8d710cc1676f94e3190949c868b3868f5235143471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fac4b0dbab144722acfa1e8d710cc1676f94e3190949c868b3868f5235143471->enter($__internal_fac4b0dbab144722acfa1e8d710cc1676f94e3190949c868b3868f5235143471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_432e77fd5994c715a562fda24effdf91ec97db10d6efb4710bf4ee3a933a876e->leave($__internal_432e77fd5994c715a562fda24effdf91ec97db10d6efb4710bf4ee3a933a876e_prof);

        
        $__internal_fac4b0dbab144722acfa1e8d710cc1676f94e3190949c868b3868f5235143471->leave($__internal_fac4b0dbab144722acfa1e8d710cc1676f94e3190949c868b3868f5235143471_prof);

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
