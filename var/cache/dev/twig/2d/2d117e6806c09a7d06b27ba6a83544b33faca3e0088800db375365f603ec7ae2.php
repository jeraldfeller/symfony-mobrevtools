<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_9b8b23f81fd6fb587813f16531618ed54cb93290ebe5fa30f1f74869504230ba extends Twig_Template
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
        $__internal_f852934c7b58d972c4453f2e0de5ff6c044b263616a9c4ccd0546541c0ca30a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f852934c7b58d972c4453f2e0de5ff6c044b263616a9c4ccd0546541c0ca30a6->enter($__internal_f852934c7b58d972c4453f2e0de5ff6c044b263616a9c4ccd0546541c0ca30a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_40cf16177e7b27694141f651836221f3c0a8bcb77bb09be43d01fa0520513c90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40cf16177e7b27694141f651836221f3c0a8bcb77bb09be43d01fa0520513c90->enter($__internal_40cf16177e7b27694141f651836221f3c0a8bcb77bb09be43d01fa0520513c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_f852934c7b58d972c4453f2e0de5ff6c044b263616a9c4ccd0546541c0ca30a6->leave($__internal_f852934c7b58d972c4453f2e0de5ff6c044b263616a9c4ccd0546541c0ca30a6_prof);

        
        $__internal_40cf16177e7b27694141f651836221f3c0a8bcb77bb09be43d01fa0520513c90->leave($__internal_40cf16177e7b27694141f651836221f3c0a8bcb77bb09be43d01fa0520513c90_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
