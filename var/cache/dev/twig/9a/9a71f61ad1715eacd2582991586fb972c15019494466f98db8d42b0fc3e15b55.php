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
        $__internal_62447ce06bce39225691b867196db2499fa024d859aede2a14b94960186710b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62447ce06bce39225691b867196db2499fa024d859aede2a14b94960186710b3->enter($__internal_62447ce06bce39225691b867196db2499fa024d859aede2a14b94960186710b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_c71ac1130b9c06e7e537169ec0d1401b42795ce92c63ff1140127b8439000167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c71ac1130b9c06e7e537169ec0d1401b42795ce92c63ff1140127b8439000167->enter($__internal_c71ac1130b9c06e7e537169ec0d1401b42795ce92c63ff1140127b8439000167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_62447ce06bce39225691b867196db2499fa024d859aede2a14b94960186710b3->leave($__internal_62447ce06bce39225691b867196db2499fa024d859aede2a14b94960186710b3_prof);

        
        $__internal_c71ac1130b9c06e7e537169ec0d1401b42795ce92c63ff1140127b8439000167->leave($__internal_c71ac1130b9c06e7e537169ec0d1401b42795ce92c63ff1140127b8439000167_prof);

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
