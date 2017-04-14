<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_b4acb9cb541094e958246a4a248df9cee748a724cdbf1f8d584c5dd654ef781f extends Twig_Template
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
        $__internal_1577280a71a5c46beda9a8a779706467b70e574412c9681a89ebda6e0b285a86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1577280a71a5c46beda9a8a779706467b70e574412c9681a89ebda6e0b285a86->enter($__internal_1577280a71a5c46beda9a8a779706467b70e574412c9681a89ebda6e0b285a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_21c1df460836d7faa04d6f13b4828d66bf9bda9a58169f495dd4ce715658da83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21c1df460836d7faa04d6f13b4828d66bf9bda9a58169f495dd4ce715658da83->enter($__internal_21c1df460836d7faa04d6f13b4828d66bf9bda9a58169f495dd4ce715658da83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_1577280a71a5c46beda9a8a779706467b70e574412c9681a89ebda6e0b285a86->leave($__internal_1577280a71a5c46beda9a8a779706467b70e574412c9681a89ebda6e0b285a86_prof);

        
        $__internal_21c1df460836d7faa04d6f13b4828d66bf9bda9a58169f495dd4ce715658da83->leave($__internal_21c1df460836d7faa04d6f13b4828d66bf9bda9a58169f495dd4ce715658da83_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
