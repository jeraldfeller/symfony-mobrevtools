<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_7adcc7a2cf53352401e690d19af245fde27723fea9f7a3f3ebfce3b138297b32 extends Twig_Template
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
        $__internal_64405ac1f7a6a8112f7ea3ceaeeae34727c7735010cfc490df503fff5919d091 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64405ac1f7a6a8112f7ea3ceaeeae34727c7735010cfc490df503fff5919d091->enter($__internal_64405ac1f7a6a8112f7ea3ceaeeae34727c7735010cfc490df503fff5919d091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_1b9e36553f1c65007766a9c53c6a7a680721174b5de4b5254276172599310625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b9e36553f1c65007766a9c53c6a7a680721174b5de4b5254276172599310625->enter($__internal_1b9e36553f1c65007766a9c53c6a7a680721174b5de4b5254276172599310625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_64405ac1f7a6a8112f7ea3ceaeeae34727c7735010cfc490df503fff5919d091->leave($__internal_64405ac1f7a6a8112f7ea3ceaeeae34727c7735010cfc490df503fff5919d091_prof);

        
        $__internal_1b9e36553f1c65007766a9c53c6a7a680721174b5de4b5254276172599310625->leave($__internal_1b9e36553f1c65007766a9c53c6a7a680721174b5de4b5254276172599310625_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
