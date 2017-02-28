<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_ef67c3f1f8bf8fa76518e922d8091012422ba0ea790bed251fc56b01a7211327 extends Twig_Template
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
        $__internal_6ae05d453be2d4e776eb95541dbd32a579240956012e9bfd9752280e07c75c53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ae05d453be2d4e776eb95541dbd32a579240956012e9bfd9752280e07c75c53->enter($__internal_6ae05d453be2d4e776eb95541dbd32a579240956012e9bfd9752280e07c75c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_7e8141819dc94dda1974cc695d84e09894ccbcb91ba37a09823a1fdea590d3c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e8141819dc94dda1974cc695d84e09894ccbcb91ba37a09823a1fdea590d3c8->enter($__internal_7e8141819dc94dda1974cc695d84e09894ccbcb91ba37a09823a1fdea590d3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_6ae05d453be2d4e776eb95541dbd32a579240956012e9bfd9752280e07c75c53->leave($__internal_6ae05d453be2d4e776eb95541dbd32a579240956012e9bfd9752280e07c75c53_prof);

        
        $__internal_7e8141819dc94dda1974cc695d84e09894ccbcb91ba37a09823a1fdea590d3c8->leave($__internal_7e8141819dc94dda1974cc695d84e09894ccbcb91ba37a09823a1fdea590d3c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
