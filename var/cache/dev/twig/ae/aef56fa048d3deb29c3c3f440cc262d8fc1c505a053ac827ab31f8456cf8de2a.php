<?php

/* @SgDatatables/Datatable/datatable.html.twig */
class __TwigTemplate_9511773101718045658dd9534981ab7ddc98794244086f35ad8aec8eda486f86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sg_datatable' => array($this, 'block_sg_datatable'),
            'sg_datatable_html' => array($this, 'block_sg_datatable_html'),
            'sg_datatable_js' => array($this, 'block_sg_datatable_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7336cb54e327f4bcca581cd3bccf7133ab9fbd78c7feb91fa9352c6659e6206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7336cb54e327f4bcca581cd3bccf7133ab9fbd78c7feb91fa9352c6659e6206->enter($__internal_e7336cb54e327f4bcca581cd3bccf7133ab9fbd78c7feb91fa9352c6659e6206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/datatable.html.twig"));

        $__internal_789df7c386d16e934af2fccc8f77095216c4d2dc7fe52e88ff5979d4ce00ded9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_789df7c386d16e934af2fccc8f77095216c4d2dc7fe52e88ff5979d4ce00ded9->enter($__internal_789df7c386d16e934af2fccc8f77095216c4d2dc7fe52e88ff5979d4ce00ded9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/datatable.html.twig"));

        // line 9
        $this->displayBlock('sg_datatable', $context, $blocks);
        
        $__internal_e7336cb54e327f4bcca581cd3bccf7133ab9fbd78c7feb91fa9352c6659e6206->leave($__internal_e7336cb54e327f4bcca581cd3bccf7133ab9fbd78c7feb91fa9352c6659e6206_prof);

        
        $__internal_789df7c386d16e934af2fccc8f77095216c4d2dc7fe52e88ff5979d4ce00ded9->leave($__internal_789df7c386d16e934af2fccc8f77095216c4d2dc7fe52e88ff5979d4ce00ded9_prof);

    }

    public function block_sg_datatable($context, array $blocks = array())
    {
        $__internal_dbcd0f6ee68f1ac70eedd248eb470adbb09005fa9946f45794efd7a032f462c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbcd0f6ee68f1ac70eedd248eb470adbb09005fa9946f45794efd7a032f462c2->enter($__internal_dbcd0f6ee68f1ac70eedd248eb470adbb09005fa9946f45794efd7a032f462c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

        $__internal_40362367a96238eeef1af9b854aea657cad4c346fbd80ab9f3105f034a3848ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40362367a96238eeef1af9b854aea657cad4c346fbd80ab9f3105f034a3848ae->enter($__internal_40362367a96238eeef1af9b854aea657cad4c346fbd80ab9f3105f034a3848ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

        // line 10
        echo "
    ";
        // line 11
        $this->displayBlock('sg_datatable_html', $context, $blocks);
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('sg_datatable_js', $context, $blocks);
        // line 22
        echo "
";
        
        $__internal_40362367a96238eeef1af9b854aea657cad4c346fbd80ab9f3105f034a3848ae->leave($__internal_40362367a96238eeef1af9b854aea657cad4c346fbd80ab9f3105f034a3848ae_prof);

        
        $__internal_dbcd0f6ee68f1ac70eedd248eb470adbb09005fa9946f45794efd7a032f462c2->leave($__internal_dbcd0f6ee68f1ac70eedd248eb470adbb09005fa9946f45794efd7a032f462c2_prof);

    }

    // line 11
    public function block_sg_datatable_html($context, array $blocks = array())
    {
        $__internal_1808438e4daa1a7683f26f5b5adf369179d9594a13cdf03bba26fc85557e468e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1808438e4daa1a7683f26f5b5adf369179d9594a13cdf03bba26fc85557e468e->enter($__internal_1808438e4daa1a7683f26f5b5adf369179d9594a13cdf03bba26fc85557e468e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        $__internal_541e740ea1e3dbf92b69c76dc0eab6f6211082db28db30871d8476257a2b812e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_541e740ea1e3dbf92b69c76dc0eab6f6211082db28db30871d8476257a2b812e->enter($__internal_541e740ea1e3dbf92b69c76dc0eab6f6211082db28db30871d8476257a2b812e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        // line 12
        echo "
        ";
        // line 13
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_html.html.twig", "@SgDatatables/Datatable/datatable.html.twig", 13)->display($context);
        // line 14
        echo "
    ";
        
        $__internal_541e740ea1e3dbf92b69c76dc0eab6f6211082db28db30871d8476257a2b812e->leave($__internal_541e740ea1e3dbf92b69c76dc0eab6f6211082db28db30871d8476257a2b812e_prof);

        
        $__internal_1808438e4daa1a7683f26f5b5adf369179d9594a13cdf03bba26fc85557e468e->leave($__internal_1808438e4daa1a7683f26f5b5adf369179d9594a13cdf03bba26fc85557e468e_prof);

    }

    // line 17
    public function block_sg_datatable_js($context, array $blocks = array())
    {
        $__internal_c809f93ea91bfb170b4c919ec8edf235b7d53e77b23c71d121217cf000157726 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c809f93ea91bfb170b4c919ec8edf235b7d53e77b23c71d121217cf000157726->enter($__internal_c809f93ea91bfb170b4c919ec8edf235b7d53e77b23c71d121217cf000157726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        $__internal_25080858222eeb88a9bacc5f7af544e1700938c61927628b16f315be0dce53d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25080858222eeb88a9bacc5f7af544e1700938c61927628b16f315be0dce53d7->enter($__internal_25080858222eeb88a9bacc5f7af544e1700938c61927628b16f315be0dce53d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        // line 18
        echo "
        ";
        // line 19
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_js.html.twig", "@SgDatatables/Datatable/datatable.html.twig", 19)->display($context);
        // line 20
        echo "
    ";
        
        $__internal_25080858222eeb88a9bacc5f7af544e1700938c61927628b16f315be0dce53d7->leave($__internal_25080858222eeb88a9bacc5f7af544e1700938c61927628b16f315be0dce53d7_prof);

        
        $__internal_c809f93ea91bfb170b4c919ec8edf235b7d53e77b23c71d121217cf000157726->leave($__internal_c809f93ea91bfb170b4c919ec8edf235b7d53e77b23c71d121217cf000157726_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/Datatable/datatable.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  106 => 20,  104 => 19,  101 => 18,  92 => 17,  81 => 14,  79 => 13,  76 => 12,  67 => 11,  56 => 22,  54 => 17,  51 => 16,  49 => 11,  46 => 10,  28 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{##
 # This file is part of the SgDatatablesBundle package.
 #
 # (c) stwe <https://github.com/stwe/DatatablesBundle>
 #
 # For the full copyright and license information, please view the LICENSE
 # file that was distributed with this source code.
 #}
{% block sg_datatable %}

    {% block sg_datatable_html %}

        {% include \"SgDatatablesBundle:Datatable:datatable_html.html.twig\" %}

    {% endblock %}

    {% block sg_datatable_js %}

        {% include \"SgDatatablesBundle:Datatable:datatable_js.html.twig\" %}

    {% endblock %}

{% endblock  %}
", "@SgDatatables/Datatable/datatable.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle\\Resources\\views\\Datatable\\datatable.html.twig");
    }
}
