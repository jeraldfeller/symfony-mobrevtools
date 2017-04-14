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
        $__internal_a285f870f29f14c3af1883426c07e52c051385fd23ff59a60c73c466a7ffca76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a285f870f29f14c3af1883426c07e52c051385fd23ff59a60c73c466a7ffca76->enter($__internal_a285f870f29f14c3af1883426c07e52c051385fd23ff59a60c73c466a7ffca76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_680a3a8fb2645a4fb2b69b4664a1596d1077c04ff50fb8125bd66c211e616a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_680a3a8fb2645a4fb2b69b4664a1596d1077c04ff50fb8125bd66c211e616a2e->enter($__internal_680a3a8fb2645a4fb2b69b4664a1596d1077c04ff50fb8125bd66c211e616a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_a285f870f29f14c3af1883426c07e52c051385fd23ff59a60c73c466a7ffca76->leave($__internal_a285f870f29f14c3af1883426c07e52c051385fd23ff59a60c73c466a7ffca76_prof);

        
        $__internal_680a3a8fb2645a4fb2b69b4664a1596d1077c04ff50fb8125bd66c211e616a2e->leave($__internal_680a3a8fb2645a4fb2b69b4664a1596d1077c04ff50fb8125bd66c211e616a2e_prof);

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
