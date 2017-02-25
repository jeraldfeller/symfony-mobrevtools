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
        $__internal_6281058404ed1f454af2c90ab663fe1947f5c6600ce64415f5232b60593d7c2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6281058404ed1f454af2c90ab663fe1947f5c6600ce64415f5232b60593d7c2b->enter($__internal_6281058404ed1f454af2c90ab663fe1947f5c6600ce64415f5232b60593d7c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_28217521a5f508ff42bfc5e0b77056e1e981cd16f647b4775b58ba756a568b6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28217521a5f508ff42bfc5e0b77056e1e981cd16f647b4775b58ba756a568b6b->enter($__internal_28217521a5f508ff42bfc5e0b77056e1e981cd16f647b4775b58ba756a568b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_6281058404ed1f454af2c90ab663fe1947f5c6600ce64415f5232b60593d7c2b->leave($__internal_6281058404ed1f454af2c90ab663fe1947f5c6600ce64415f5232b60593d7c2b_prof);

        
        $__internal_28217521a5f508ff42bfc5e0b77056e1e981cd16f647b4775b58ba756a568b6b->leave($__internal_28217521a5f508ff42bfc5e0b77056e1e981cd16f647b4775b58ba756a568b6b_prof);

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
