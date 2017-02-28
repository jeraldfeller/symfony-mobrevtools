<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f42332fc3c49f2e41acc9c203e898e802cb5cd366c04d4854764782e5e4d15ee extends Twig_Template
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
        $__internal_0ff1a66bd444d2cd1e8221d5e4ab68a4e931d6352835e8043624c9e66eeab219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ff1a66bd444d2cd1e8221d5e4ab68a4e931d6352835e8043624c9e66eeab219->enter($__internal_0ff1a66bd444d2cd1e8221d5e4ab68a4e931d6352835e8043624c9e66eeab219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_c79025526eff973348fa14211f73241aa6d4e1391256cc483dc8c4b90a636fb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c79025526eff973348fa14211f73241aa6d4e1391256cc483dc8c4b90a636fb4->enter($__internal_c79025526eff973348fa14211f73241aa6d4e1391256cc483dc8c4b90a636fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0ff1a66bd444d2cd1e8221d5e4ab68a4e931d6352835e8043624c9e66eeab219->leave($__internal_0ff1a66bd444d2cd1e8221d5e4ab68a4e931d6352835e8043624c9e66eeab219_prof);

        
        $__internal_c79025526eff973348fa14211f73241aa6d4e1391256cc483dc8c4b90a636fb4->leave($__internal_c79025526eff973348fa14211f73241aa6d4e1391256cc483dc8c4b90a636fb4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
