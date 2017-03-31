<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_344096aee71c7802bf4797171e5c69de2f77629f49f49570c9ff24a623530587 extends Twig_Template
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
        $__internal_37956e3ff04614ca916cbb8375ebbbae61d73c1fc08d81f3f561447c3767f97b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37956e3ff04614ca916cbb8375ebbbae61d73c1fc08d81f3f561447c3767f97b->enter($__internal_37956e3ff04614ca916cbb8375ebbbae61d73c1fc08d81f3f561447c3767f97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_77c9ebd4c94f31c2595bbe47cd863b4c5a10b040f5602f121771d5c4939ffef2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77c9ebd4c94f31c2595bbe47cd863b4c5a10b040f5602f121771d5c4939ffef2->enter($__internal_77c9ebd4c94f31c2595bbe47cd863b4c5a10b040f5602f121771d5c4939ffef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_37956e3ff04614ca916cbb8375ebbbae61d73c1fc08d81f3f561447c3767f97b->leave($__internal_37956e3ff04614ca916cbb8375ebbbae61d73c1fc08d81f3f561447c3767f97b_prof);

        
        $__internal_77c9ebd4c94f31c2595bbe47cd863b4c5a10b040f5602f121771d5c4939ffef2->leave($__internal_77c9ebd4c94f31c2595bbe47cd863b4c5a10b040f5602f121771d5c4939ffef2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
