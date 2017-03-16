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
        $__internal_e4c9eb35aa1d33183cc78b27d127b73e14b4dba1e1620801eb4c961172813e87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4c9eb35aa1d33183cc78b27d127b73e14b4dba1e1620801eb4c961172813e87->enter($__internal_e4c9eb35aa1d33183cc78b27d127b73e14b4dba1e1620801eb4c961172813e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_2a915a1fea14d4f73a60dea031b704dbc065a445b4db00337594dc759a601bab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a915a1fea14d4f73a60dea031b704dbc065a445b4db00337594dc759a601bab->enter($__internal_2a915a1fea14d4f73a60dea031b704dbc065a445b4db00337594dc759a601bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_e4c9eb35aa1d33183cc78b27d127b73e14b4dba1e1620801eb4c961172813e87->leave($__internal_e4c9eb35aa1d33183cc78b27d127b73e14b4dba1e1620801eb4c961172813e87_prof);

        
        $__internal_2a915a1fea14d4f73a60dea031b704dbc065a445b4db00337594dc759a601bab->leave($__internal_2a915a1fea14d4f73a60dea031b704dbc065a445b4db00337594dc759a601bab_prof);

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
