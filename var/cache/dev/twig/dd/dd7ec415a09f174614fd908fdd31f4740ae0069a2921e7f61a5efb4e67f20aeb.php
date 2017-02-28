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
        $__internal_c389c524604897b9de7fac08176fba5156c696bebbe0ee02606b77552395e534 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c389c524604897b9de7fac08176fba5156c696bebbe0ee02606b77552395e534->enter($__internal_c389c524604897b9de7fac08176fba5156c696bebbe0ee02606b77552395e534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_718033e19fadbf0d66f99a0a6bab49c375a21db768a776367455a2177dbdefc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_718033e19fadbf0d66f99a0a6bab49c375a21db768a776367455a2177dbdefc2->enter($__internal_718033e19fadbf0d66f99a0a6bab49c375a21db768a776367455a2177dbdefc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_c389c524604897b9de7fac08176fba5156c696bebbe0ee02606b77552395e534->leave($__internal_c389c524604897b9de7fac08176fba5156c696bebbe0ee02606b77552395e534_prof);

        
        $__internal_718033e19fadbf0d66f99a0a6bab49c375a21db768a776367455a2177dbdefc2->leave($__internal_718033e19fadbf0d66f99a0a6bab49c375a21db768a776367455a2177dbdefc2_prof);

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
