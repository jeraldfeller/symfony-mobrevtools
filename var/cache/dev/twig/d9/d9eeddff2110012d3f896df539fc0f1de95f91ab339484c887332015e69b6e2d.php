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
        $__internal_6b86b6ed201ca1954e2d70da717f62f7a34b870cf111741c7b618100471a0a96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b86b6ed201ca1954e2d70da717f62f7a34b870cf111741c7b618100471a0a96->enter($__internal_6b86b6ed201ca1954e2d70da717f62f7a34b870cf111741c7b618100471a0a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_27ea52ec11a90d221695b5e032e5eca10d1182cb5dfdacdc74a5c12debc92b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27ea52ec11a90d221695b5e032e5eca10d1182cb5dfdacdc74a5c12debc92b66->enter($__internal_27ea52ec11a90d221695b5e032e5eca10d1182cb5dfdacdc74a5c12debc92b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_6b86b6ed201ca1954e2d70da717f62f7a34b870cf111741c7b618100471a0a96->leave($__internal_6b86b6ed201ca1954e2d70da717f62f7a34b870cf111741c7b618100471a0a96_prof);

        
        $__internal_27ea52ec11a90d221695b5e032e5eca10d1182cb5dfdacdc74a5c12debc92b66->leave($__internal_27ea52ec11a90d221695b5e032e5eca10d1182cb5dfdacdc74a5c12debc92b66_prof);

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
