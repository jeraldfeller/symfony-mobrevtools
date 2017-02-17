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
        $__internal_1a91ef0657f6e77f02c21feb984977099f0ae2f7f6c1b747b54b8554f457395f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a91ef0657f6e77f02c21feb984977099f0ae2f7f6c1b747b54b8554f457395f->enter($__internal_1a91ef0657f6e77f02c21feb984977099f0ae2f7f6c1b747b54b8554f457395f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_14eeefcf741d61d0ec0c2cb67cc78952b4f29fb88393de929eca908668465f19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14eeefcf741d61d0ec0c2cb67cc78952b4f29fb88393de929eca908668465f19->enter($__internal_14eeefcf741d61d0ec0c2cb67cc78952b4f29fb88393de929eca908668465f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_1a91ef0657f6e77f02c21feb984977099f0ae2f7f6c1b747b54b8554f457395f->leave($__internal_1a91ef0657f6e77f02c21feb984977099f0ae2f7f6c1b747b54b8554f457395f_prof);

        
        $__internal_14eeefcf741d61d0ec0c2cb67cc78952b4f29fb88393de929eca908668465f19->leave($__internal_14eeefcf741d61d0ec0c2cb67cc78952b4f29fb88393de929eca908668465f19_prof);

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
