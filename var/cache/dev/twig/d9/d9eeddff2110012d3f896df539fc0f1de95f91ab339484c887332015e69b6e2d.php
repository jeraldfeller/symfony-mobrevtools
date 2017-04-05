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
        $__internal_ca27be16f36f14349233598824eeaa346b940ae0f0134416920078120b0d56e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca27be16f36f14349233598824eeaa346b940ae0f0134416920078120b0d56e5->enter($__internal_ca27be16f36f14349233598824eeaa346b940ae0f0134416920078120b0d56e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_8f5560064311c19b1cc92c6b52c7f3783d9ee156227472e06a57a61732f121b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f5560064311c19b1cc92c6b52c7f3783d9ee156227472e06a57a61732f121b1->enter($__internal_8f5560064311c19b1cc92c6b52c7f3783d9ee156227472e06a57a61732f121b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_ca27be16f36f14349233598824eeaa346b940ae0f0134416920078120b0d56e5->leave($__internal_ca27be16f36f14349233598824eeaa346b940ae0f0134416920078120b0d56e5_prof);

        
        $__internal_8f5560064311c19b1cc92c6b52c7f3783d9ee156227472e06a57a61732f121b1->leave($__internal_8f5560064311c19b1cc92c6b52c7f3783d9ee156227472e06a57a61732f121b1_prof);

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
