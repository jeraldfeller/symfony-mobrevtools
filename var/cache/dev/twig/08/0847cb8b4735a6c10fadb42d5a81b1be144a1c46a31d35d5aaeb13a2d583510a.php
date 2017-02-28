<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_09daacb408027fe257ca809043d25ec4f3638762d4f70c3d6ed8d56fa3f43c91 extends Twig_Template
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
        $__internal_e9ce3ba67150c7e046b59090a9170f9d624862e57e4f63d44e88b45c32ccde95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9ce3ba67150c7e046b59090a9170f9d624862e57e4f63d44e88b45c32ccde95->enter($__internal_e9ce3ba67150c7e046b59090a9170f9d624862e57e4f63d44e88b45c32ccde95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_4915e3a6a03c27603d5f6ae658855533bdb2b3d440f6b1932947cfba006f7313 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4915e3a6a03c27603d5f6ae658855533bdb2b3d440f6b1932947cfba006f7313->enter($__internal_4915e3a6a03c27603d5f6ae658855533bdb2b3d440f6b1932947cfba006f7313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_e9ce3ba67150c7e046b59090a9170f9d624862e57e4f63d44e88b45c32ccde95->leave($__internal_e9ce3ba67150c7e046b59090a9170f9d624862e57e4f63d44e88b45c32ccde95_prof);

        
        $__internal_4915e3a6a03c27603d5f6ae658855533bdb2b3d440f6b1932947cfba006f7313->leave($__internal_4915e3a6a03c27603d5f6ae658855533bdb2b3d440f6b1932947cfba006f7313_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
