<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_8bf7f61542f32de2f5f76e08119e4c0761be7fce7a49661d165bbb6a0527df8e extends Twig_Template
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
        $__internal_7ae5c32db6ce4083d71e0d14e263f8d4330ea6e9a644c040ef49c554f967c27f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ae5c32db6ce4083d71e0d14e263f8d4330ea6e9a644c040ef49c554f967c27f->enter($__internal_7ae5c32db6ce4083d71e0d14e263f8d4330ea6e9a644c040ef49c554f967c27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_dadbcbf123cd5b8e94a4a737e5b3be91038e1bc41f0cb88275cbe41832ab7696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dadbcbf123cd5b8e94a4a737e5b3be91038e1bc41f0cb88275cbe41832ab7696->enter($__internal_dadbcbf123cd5b8e94a4a737e5b3be91038e1bc41f0cb88275cbe41832ab7696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_7ae5c32db6ce4083d71e0d14e263f8d4330ea6e9a644c040ef49c554f967c27f->leave($__internal_7ae5c32db6ce4083d71e0d14e263f8d4330ea6e9a644c040ef49c554f967c27f_prof);

        
        $__internal_dadbcbf123cd5b8e94a4a737e5b3be91038e1bc41f0cb88275cbe41832ab7696->leave($__internal_dadbcbf123cd5b8e94a4a737e5b3be91038e1bc41f0cb88275cbe41832ab7696_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
