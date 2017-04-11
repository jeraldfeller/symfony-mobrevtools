<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_4d84ab11d9749d206cfccebc2ebfa6ea9a9d1f6b85375187e04981374d991f96 extends Twig_Template
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
        $__internal_f7832271ab06138d8e820805b9021e5676262b6e33fad8f5e767b16ae854c208 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7832271ab06138d8e820805b9021e5676262b6e33fad8f5e767b16ae854c208->enter($__internal_f7832271ab06138d8e820805b9021e5676262b6e33fad8f5e767b16ae854c208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_70901d2eb18d9b95c75d82c487aa75ee48211f8acfc263c129e2c322f5283d5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70901d2eb18d9b95c75d82c487aa75ee48211f8acfc263c129e2c322f5283d5b->enter($__internal_70901d2eb18d9b95c75d82c487aa75ee48211f8acfc263c129e2c322f5283d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_f7832271ab06138d8e820805b9021e5676262b6e33fad8f5e767b16ae854c208->leave($__internal_f7832271ab06138d8e820805b9021e5676262b6e33fad8f5e767b16ae854c208_prof);

        
        $__internal_70901d2eb18d9b95c75d82c487aa75ee48211f8acfc263c129e2c322f5283d5b->leave($__internal_70901d2eb18d9b95c75d82c487aa75ee48211f8acfc263c129e2c322f5283d5b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
