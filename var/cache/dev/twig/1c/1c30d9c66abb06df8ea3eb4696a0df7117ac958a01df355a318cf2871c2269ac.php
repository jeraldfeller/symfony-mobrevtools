<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_7f65b22b222b4587006b29e47c0a12451f874f04c5b0970b7ccbac6f1ba651e2 extends Twig_Template
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
        $__internal_6ce1eb43586bb9614cc369a4dd4af8361b9b831dc191d91ce2ca3dc823eaa806 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ce1eb43586bb9614cc369a4dd4af8361b9b831dc191d91ce2ca3dc823eaa806->enter($__internal_6ce1eb43586bb9614cc369a4dd4af8361b9b831dc191d91ce2ca3dc823eaa806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_8004ee550e69921d694d44fbc64d1b942a5857d7c38a65de9b8fb0c51c138e59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8004ee550e69921d694d44fbc64d1b942a5857d7c38a65de9b8fb0c51c138e59->enter($__internal_8004ee550e69921d694d44fbc64d1b942a5857d7c38a65de9b8fb0c51c138e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_6ce1eb43586bb9614cc369a4dd4af8361b9b831dc191d91ce2ca3dc823eaa806->leave($__internal_6ce1eb43586bb9614cc369a4dd4af8361b9b831dc191d91ce2ca3dc823eaa806_prof);

        
        $__internal_8004ee550e69921d694d44fbc64d1b942a5857d7c38a65de9b8fb0c51c138e59->leave($__internal_8004ee550e69921d694d44fbc64d1b942a5857d7c38a65de9b8fb0c51c138e59_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
