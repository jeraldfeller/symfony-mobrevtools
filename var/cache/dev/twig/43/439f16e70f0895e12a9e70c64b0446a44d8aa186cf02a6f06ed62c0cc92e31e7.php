<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_62fd50b32df5620b0aa528d72531aa7517a4f02b6c05f74de96e0590655fbf26 extends Twig_Template
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
        $__internal_73d19ad75a084fdaba5b446360175cd595ce3650e2067886b5fc4f54bf3f0664 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73d19ad75a084fdaba5b446360175cd595ce3650e2067886b5fc4f54bf3f0664->enter($__internal_73d19ad75a084fdaba5b446360175cd595ce3650e2067886b5fc4f54bf3f0664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_08f9e1b05481d6127a1c0ccf52afbaf33ea9e69784825a5e62b93e4f704a7d92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08f9e1b05481d6127a1c0ccf52afbaf33ea9e69784825a5e62b93e4f704a7d92->enter($__internal_08f9e1b05481d6127a1c0ccf52afbaf33ea9e69784825a5e62b93e4f704a7d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_73d19ad75a084fdaba5b446360175cd595ce3650e2067886b5fc4f54bf3f0664->leave($__internal_73d19ad75a084fdaba5b446360175cd595ce3650e2067886b5fc4f54bf3f0664_prof);

        
        $__internal_08f9e1b05481d6127a1c0ccf52afbaf33ea9e69784825a5e62b93e4f704a7d92->leave($__internal_08f9e1b05481d6127a1c0ccf52afbaf33ea9e69784825a5e62b93e4f704a7d92_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
