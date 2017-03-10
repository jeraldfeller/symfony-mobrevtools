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
        $__internal_c10908b97cccabb2ad4a9ff4e46e3d65678520dde5d3b3432aa6e9435d1e4ac0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c10908b97cccabb2ad4a9ff4e46e3d65678520dde5d3b3432aa6e9435d1e4ac0->enter($__internal_c10908b97cccabb2ad4a9ff4e46e3d65678520dde5d3b3432aa6e9435d1e4ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_1cb7e2776413a787c5e828c87f1a2d45ec0f4e4da66d82ef25b143bd27a015a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cb7e2776413a787c5e828c87f1a2d45ec0f4e4da66d82ef25b143bd27a015a0->enter($__internal_1cb7e2776413a787c5e828c87f1a2d45ec0f4e4da66d82ef25b143bd27a015a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_c10908b97cccabb2ad4a9ff4e46e3d65678520dde5d3b3432aa6e9435d1e4ac0->leave($__internal_c10908b97cccabb2ad4a9ff4e46e3d65678520dde5d3b3432aa6e9435d1e4ac0_prof);

        
        $__internal_1cb7e2776413a787c5e828c87f1a2d45ec0f4e4da66d82ef25b143bd27a015a0->leave($__internal_1cb7e2776413a787c5e828c87f1a2d45ec0f4e4da66d82ef25b143bd27a015a0_prof);

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
