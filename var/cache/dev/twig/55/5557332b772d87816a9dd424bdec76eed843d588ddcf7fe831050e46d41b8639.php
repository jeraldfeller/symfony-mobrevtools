<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_40e04ab35e201a050e0c92843a8e62800a6de49c6101e521cb09805916766f75 extends Twig_Template
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
        $__internal_60f244e4468be8bb75a21184a9b32263616a02a886fdef7b4f5fa46bd4163e37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60f244e4468be8bb75a21184a9b32263616a02a886fdef7b4f5fa46bd4163e37->enter($__internal_60f244e4468be8bb75a21184a9b32263616a02a886fdef7b4f5fa46bd4163e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_a8e124a7e6265d49d45bb5182b763f494f58e96483ad351782c626ecda05e125 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8e124a7e6265d49d45bb5182b763f494f58e96483ad351782c626ecda05e125->enter($__internal_a8e124a7e6265d49d45bb5182b763f494f58e96483ad351782c626ecda05e125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_60f244e4468be8bb75a21184a9b32263616a02a886fdef7b4f5fa46bd4163e37->leave($__internal_60f244e4468be8bb75a21184a9b32263616a02a886fdef7b4f5fa46bd4163e37_prof);

        
        $__internal_a8e124a7e6265d49d45bb5182b763f494f58e96483ad351782c626ecda05e125->leave($__internal_a8e124a7e6265d49d45bb5182b763f494f58e96483ad351782c626ecda05e125_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
