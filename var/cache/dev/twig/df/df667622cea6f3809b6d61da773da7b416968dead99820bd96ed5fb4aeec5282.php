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
        $__internal_d7f6e0bba7ca8941269a47fa723dd2020c73803e3f64d774958c8921b2d00848 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7f6e0bba7ca8941269a47fa723dd2020c73803e3f64d774958c8921b2d00848->enter($__internal_d7f6e0bba7ca8941269a47fa723dd2020c73803e3f64d774958c8921b2d00848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_f63a8cebbabc3a80ca4a33d185bae1cececd02b5bdf64282f03be306fe11f54e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f63a8cebbabc3a80ca4a33d185bae1cececd02b5bdf64282f03be306fe11f54e->enter($__internal_f63a8cebbabc3a80ca4a33d185bae1cececd02b5bdf64282f03be306fe11f54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_d7f6e0bba7ca8941269a47fa723dd2020c73803e3f64d774958c8921b2d00848->leave($__internal_d7f6e0bba7ca8941269a47fa723dd2020c73803e3f64d774958c8921b2d00848_prof);

        
        $__internal_f63a8cebbabc3a80ca4a33d185bae1cececd02b5bdf64282f03be306fe11f54e->leave($__internal_f63a8cebbabc3a80ca4a33d185bae1cececd02b5bdf64282f03be306fe11f54e_prof);

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
