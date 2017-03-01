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
        $__internal_ac16fc03f360574f5ca45f8e6cee675890949d46db71a3d0504d1168f2f2a4a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac16fc03f360574f5ca45f8e6cee675890949d46db71a3d0504d1168f2f2a4a6->enter($__internal_ac16fc03f360574f5ca45f8e6cee675890949d46db71a3d0504d1168f2f2a4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_d13829b850dd1da9a26d492de7b41bd3194131d2fc9d53b039f5502591709902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d13829b850dd1da9a26d492de7b41bd3194131d2fc9d53b039f5502591709902->enter($__internal_d13829b850dd1da9a26d492de7b41bd3194131d2fc9d53b039f5502591709902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_ac16fc03f360574f5ca45f8e6cee675890949d46db71a3d0504d1168f2f2a4a6->leave($__internal_ac16fc03f360574f5ca45f8e6cee675890949d46db71a3d0504d1168f2f2a4a6_prof);

        
        $__internal_d13829b850dd1da9a26d492de7b41bd3194131d2fc9d53b039f5502591709902->leave($__internal_d13829b850dd1da9a26d492de7b41bd3194131d2fc9d53b039f5502591709902_prof);

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
