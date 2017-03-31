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
        $__internal_fc24462efca1ccdcdcaa1dca45bc3d15fd1b62a86ea0a269681c37a4c4954bb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc24462efca1ccdcdcaa1dca45bc3d15fd1b62a86ea0a269681c37a4c4954bb8->enter($__internal_fc24462efca1ccdcdcaa1dca45bc3d15fd1b62a86ea0a269681c37a4c4954bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_ebc7155f64e381f70b9ea038fb5df5698d5890e9bf70f8a44bd29d54cf77a45b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebc7155f64e381f70b9ea038fb5df5698d5890e9bf70f8a44bd29d54cf77a45b->enter($__internal_ebc7155f64e381f70b9ea038fb5df5698d5890e9bf70f8a44bd29d54cf77a45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_fc24462efca1ccdcdcaa1dca45bc3d15fd1b62a86ea0a269681c37a4c4954bb8->leave($__internal_fc24462efca1ccdcdcaa1dca45bc3d15fd1b62a86ea0a269681c37a4c4954bb8_prof);

        
        $__internal_ebc7155f64e381f70b9ea038fb5df5698d5890e9bf70f8a44bd29d54cf77a45b->leave($__internal_ebc7155f64e381f70b9ea038fb5df5698d5890e9bf70f8a44bd29d54cf77a45b_prof);

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
