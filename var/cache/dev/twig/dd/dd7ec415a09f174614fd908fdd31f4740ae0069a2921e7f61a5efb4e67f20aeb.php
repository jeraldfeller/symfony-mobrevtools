<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_19179dba84515c3aecd4fa5465debba977ce4288173c33959909cc0261a69edb extends Twig_Template
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
        $__internal_a4926172ff48239168d4d99c99240a438ef8828bcfa9b71c49372708b2d71555 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4926172ff48239168d4d99c99240a438ef8828bcfa9b71c49372708b2d71555->enter($__internal_a4926172ff48239168d4d99c99240a438ef8828bcfa9b71c49372708b2d71555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_fab608767dac745ef732daa83ec03deecffaa35fc2ae12003cce39589ccba482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fab608767dac745ef732daa83ec03deecffaa35fc2ae12003cce39589ccba482->enter($__internal_fab608767dac745ef732daa83ec03deecffaa35fc2ae12003cce39589ccba482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_a4926172ff48239168d4d99c99240a438ef8828bcfa9b71c49372708b2d71555->leave($__internal_a4926172ff48239168d4d99c99240a438ef8828bcfa9b71c49372708b2d71555_prof);

        
        $__internal_fab608767dac745ef732daa83ec03deecffaa35fc2ae12003cce39589ccba482->leave($__internal_fab608767dac745ef732daa83ec03deecffaa35fc2ae12003cce39589ccba482_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
