<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_40e04ab35e201a050e0c92843a8e62800a6de49c6101e521cb09805916766f75 extends Twig_Template
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
        $__internal_2af9fc74bc8a5a7dc7824ae2ab74e193496bf8a065f846009e2cd341c9df9da1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2af9fc74bc8a5a7dc7824ae2ab74e193496bf8a065f846009e2cd341c9df9da1->enter($__internal_2af9fc74bc8a5a7dc7824ae2ab74e193496bf8a065f846009e2cd341c9df9da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_106ef14c86c250c0be64da379627dd84a9961eb9c7f285790f4133cef2e57375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_106ef14c86c250c0be64da379627dd84a9961eb9c7f285790f4133cef2e57375->enter($__internal_106ef14c86c250c0be64da379627dd84a9961eb9c7f285790f4133cef2e57375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_2af9fc74bc8a5a7dc7824ae2ab74e193496bf8a065f846009e2cd341c9df9da1->leave($__internal_2af9fc74bc8a5a7dc7824ae2ab74e193496bf8a065f846009e2cd341c9df9da1_prof);

        
        $__internal_106ef14c86c250c0be64da379627dd84a9961eb9c7f285790f4133cef2e57375->leave($__internal_106ef14c86c250c0be64da379627dd84a9961eb9c7f285790f4133cef2e57375_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
