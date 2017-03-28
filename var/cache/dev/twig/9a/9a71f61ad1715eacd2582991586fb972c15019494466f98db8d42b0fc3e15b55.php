<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_ef67c3f1f8bf8fa76518e922d8091012422ba0ea790bed251fc56b01a7211327 extends Twig_Template
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
        $__internal_ad977b8df5c92cebd53b877241b2ae65d1de5c7d46b8927f9b24cb16c9dcb51f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad977b8df5c92cebd53b877241b2ae65d1de5c7d46b8927f9b24cb16c9dcb51f->enter($__internal_ad977b8df5c92cebd53b877241b2ae65d1de5c7d46b8927f9b24cb16c9dcb51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_cc66f175f397131230a30a4f6f074d087db1c6d05a31424a4141905470c6c280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc66f175f397131230a30a4f6f074d087db1c6d05a31424a4141905470c6c280->enter($__internal_cc66f175f397131230a30a4f6f074d087db1c6d05a31424a4141905470c6c280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_ad977b8df5c92cebd53b877241b2ae65d1de5c7d46b8927f9b24cb16c9dcb51f->leave($__internal_ad977b8df5c92cebd53b877241b2ae65d1de5c7d46b8927f9b24cb16c9dcb51f_prof);

        
        $__internal_cc66f175f397131230a30a4f6f074d087db1c6d05a31424a4141905470c6c280->leave($__internal_cc66f175f397131230a30a4f6f074d087db1c6d05a31424a4141905470c6c280_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
