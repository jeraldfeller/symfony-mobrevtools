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
        $__internal_d62b6adbeb5b3fb23741a1bd84feb4aaef800e1a7919d38aed0b5f9ac2d40ecc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d62b6adbeb5b3fb23741a1bd84feb4aaef800e1a7919d38aed0b5f9ac2d40ecc->enter($__internal_d62b6adbeb5b3fb23741a1bd84feb4aaef800e1a7919d38aed0b5f9ac2d40ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_ce7bd5032135eaff5713a747726728616e44385483a2d9e5e3103b4223c78d96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce7bd5032135eaff5713a747726728616e44385483a2d9e5e3103b4223c78d96->enter($__internal_ce7bd5032135eaff5713a747726728616e44385483a2d9e5e3103b4223c78d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_d62b6adbeb5b3fb23741a1bd84feb4aaef800e1a7919d38aed0b5f9ac2d40ecc->leave($__internal_d62b6adbeb5b3fb23741a1bd84feb4aaef800e1a7919d38aed0b5f9ac2d40ecc_prof);

        
        $__internal_ce7bd5032135eaff5713a747726728616e44385483a2d9e5e3103b4223c78d96->leave($__internal_ce7bd5032135eaff5713a747726728616e44385483a2d9e5e3103b4223c78d96_prof);

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
