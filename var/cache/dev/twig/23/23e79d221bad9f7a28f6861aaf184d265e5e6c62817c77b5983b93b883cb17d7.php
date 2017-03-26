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
        $__internal_6abd47a92add1df7ceb1817a96cbc307ca18942e8a04f6d72c5213a1eb76d2a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6abd47a92add1df7ceb1817a96cbc307ca18942e8a04f6d72c5213a1eb76d2a5->enter($__internal_6abd47a92add1df7ceb1817a96cbc307ca18942e8a04f6d72c5213a1eb76d2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_eff06b28a4a80b293338099d5f96b0d5363474e7f58bd0a1ba5d602bb0a1de03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eff06b28a4a80b293338099d5f96b0d5363474e7f58bd0a1ba5d602bb0a1de03->enter($__internal_eff06b28a4a80b293338099d5f96b0d5363474e7f58bd0a1ba5d602bb0a1de03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_6abd47a92add1df7ceb1817a96cbc307ca18942e8a04f6d72c5213a1eb76d2a5->leave($__internal_6abd47a92add1df7ceb1817a96cbc307ca18942e8a04f6d72c5213a1eb76d2a5_prof);

        
        $__internal_eff06b28a4a80b293338099d5f96b0d5363474e7f58bd0a1ba5d602bb0a1de03->leave($__internal_eff06b28a4a80b293338099d5f96b0d5363474e7f58bd0a1ba5d602bb0a1de03_prof);

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
