<?php

/* SgDatatablesBundle:Skeleton:class.php.twig */
class __TwigTemplate_d5a4582c22e5d7cbf330545fb640a76a5985da4fd35e0ba908529db1c38cc4ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'use_statements' => array($this, 'block_use_statements'),
            'class_definition' => array($this, 'block_class_definition'),
            'class_body' => array($this, 'block_class_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a5b360dbed4af7e417358b2625c3212f8d6ecbc1b0954894ab00106548ddc6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a5b360dbed4af7e417358b2625c3212f8d6ecbc1b0954894ab00106548ddc6b->enter($__internal_4a5b360dbed4af7e417358b2625c3212f8d6ecbc1b0954894ab00106548ddc6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Skeleton:class.php.twig"));

        $__internal_fd7fddda2a21d05d1843cb205b0b5251b5e6492c3fa5d5d7b2d5c1443fef2e52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd7fddda2a21d05d1843cb205b0b5251b5e6492c3fa5d5d7b2d5c1443fef2e52->enter($__internal_fd7fddda2a21d05d1843cb205b0b5251b5e6492c3fa5d5d7b2d5c1443fef2e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Skeleton:class.php.twig"));

        // line 1
        echo "<?php

namespace ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["namespace"]) ? $context["namespace"] : $this->getContext($context, "namespace")), "html", null, true);
        echo "\\Datatables;

";
        // line 5
        $this->displayBlock('use_statements', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('class_definition', $context, $blocks);
        // line 18
        echo "{
";
        // line 19
        $this->displayBlock('class_body', $context, $blocks);
        // line 157
        echo "}
";
        
        $__internal_4a5b360dbed4af7e417358b2625c3212f8d6ecbc1b0954894ab00106548ddc6b->leave($__internal_4a5b360dbed4af7e417358b2625c3212f8d6ecbc1b0954894ab00106548ddc6b_prof);

        
        $__internal_fd7fddda2a21d05d1843cb205b0b5251b5e6492c3fa5d5d7b2d5c1443fef2e52->leave($__internal_fd7fddda2a21d05d1843cb205b0b5251b5e6492c3fa5d5d7b2d5c1443fef2e52_prof);

    }

    // line 5
    public function block_use_statements($context, array $blocks = array())
    {
        $__internal_f6ee5c542d9cabd13a0932c3bdf099903e7f735a61f6488bf012c62d5f5fcd80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6ee5c542d9cabd13a0932c3bdf099903e7f735a61f6488bf012c62d5f5fcd80->enter($__internal_f6ee5c542d9cabd13a0932c3bdf099903e7f735a61f6488bf012c62d5f5fcd80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "use_statements"));

        $__internal_55d01e16a721f29333d2a0a87e85fee1b283d81ab30ebe2bc9717ce52e2a31e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55d01e16a721f29333d2a0a87e85fee1b283d81ab30ebe2bc9717ce52e2a31e1->enter($__internal_55d01e16a721f29333d2a0a87e85fee1b283d81ab30ebe2bc9717ce52e2a31e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "use_statements"));

        // line 6
        echo "use Sg\\DatatablesBundle\\Datatable\\View\\AbstractDatatableView;
use Sg\\DatatablesBundle\\Datatable\\View\\Style;
";
        
        $__internal_55d01e16a721f29333d2a0a87e85fee1b283d81ab30ebe2bc9717ce52e2a31e1->leave($__internal_55d01e16a721f29333d2a0a87e85fee1b283d81ab30ebe2bc9717ce52e2a31e1_prof);

        
        $__internal_f6ee5c542d9cabd13a0932c3bdf099903e7f735a61f6488bf012c62d5f5fcd80->leave($__internal_f6ee5c542d9cabd13a0932c3bdf099903e7f735a61f6488bf012c62d5f5fcd80_prof);

    }

    // line 10
    public function block_class_definition($context, array $blocks = array())
    {
        $__internal_efd6b09d6438bf1edc18925d7524a167794b70e19277a21fcaa6f49259281d65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efd6b09d6438bf1edc18925d7524a167794b70e19277a21fcaa6f49259281d65->enter($__internal_efd6b09d6438bf1edc18925d7524a167794b70e19277a21fcaa6f49259281d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "class_definition"));

        $__internal_eaf494e1da33b2523964379d4e04a9ebdbbeff400a88923f7698003002ad4968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaf494e1da33b2523964379d4e04a9ebdbbeff400a88923f7698003002ad4968->enter($__internal_eaf494e1da33b2523964379d4e04a9ebdbbeff400a88923f7698003002ad4968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "class_definition"));

        // line 11
        echo "/**
 * Class ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["datatable_class"]) ? $context["datatable_class"] : $this->getContext($context, "datatable_class")), "html", null, true);
        echo "
 *
 * @package ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["namespace"]) ? $context["namespace"] : $this->getContext($context, "namespace")), "html", null, true);
        echo "\\Datatables
 */
class ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["datatable_class"]) ? $context["datatable_class"] : $this->getContext($context, "datatable_class")), "html", null, true);
        echo " extends AbstractDatatableView
";
        
        $__internal_eaf494e1da33b2523964379d4e04a9ebdbbeff400a88923f7698003002ad4968->leave($__internal_eaf494e1da33b2523964379d4e04a9ebdbbeff400a88923f7698003002ad4968_prof);

        
        $__internal_efd6b09d6438bf1edc18925d7524a167794b70e19277a21fcaa6f49259281d65->leave($__internal_efd6b09d6438bf1edc18925d7524a167794b70e19277a21fcaa6f49259281d65_prof);

    }

    // line 19
    public function block_class_body($context, array $blocks = array())
    {
        $__internal_9682cbb8f539c31d87a95fdc4ca2d8de6b93383c7063ed4b8a53194f1c97ec22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9682cbb8f539c31d87a95fdc4ca2d8de6b93383c7063ed4b8a53194f1c97ec22->enter($__internal_9682cbb8f539c31d87a95fdc4ca2d8de6b93383c7063ed4b8a53194f1c97ec22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "class_body"));

        $__internal_8a9446d269c878d897b11f75fce4404de59994efabb481f9245b72b17f7c7ce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a9446d269c878d897b11f75fce4404de59994efabb481f9245b72b17f7c7ce5->enter($__internal_8a9446d269c878d897b11f75fce4404de59994efabb481f9245b72b17f7c7ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "class_body"));

        // line 20
        echo "    /**
     * {@inheritdoc}
     */
    public function buildDatatable(array \$options = array())
    {
        \$this->topActions->set(array(
            'start_html' => '<div class=\"row\"><div class=\"col-sm-3\">',
            'end_html' => '<hr></div></div>',
            'actions' => array(
                array(
                    'route' => \$this->router->generate('";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["route_pref"]) ? $context["route_pref"] : $this->getContext($context, "route_pref")), "html", null, true);
        echo "_new'),
                    'label' => \$this->translator->trans('datatables.actions.new'),
                    'icon' => 'glyphicon glyphicon-plus',
                    'attributes' => array(
                        'rel' => 'tooltip',
                        'title' => \$this->translator->trans('datatables.actions.new'),
                        'class' => 'btn btn-primary',
                        'role' => 'button'
                    ),
                )
            )
        ));

        \$this->features->set(array(
            'auto_width' => true,
            'defer_render' => false,
            'info' => true,
            'jquery_ui' => false,
            'length_change' => true,
            'ordering' => true,
            'paging' => true,
            'processing' => true,
            'scroll_x' => false,
            'scroll_y' => '',
            'searching' => true,
            'state_save' => false,
            'delay' => 0,
            'extensions' => array(),
            'highlight' => false,
            'highlight_color' => 'red'
        ));

        \$this->ajax->set(array(
            'url' => \$this->router->generate('";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["ajax_url"]) ? $context["ajax_url"] : $this->getContext($context, "ajax_url")), "html", null, true);
        echo "'),
            'type' => 'GET',
            'pipeline' => 0
        ));

        \$this->options->set(array(
            'display_start' => 0,
            'defer_loading' => -1,
            'dom' => 'lfrtip',
            'length_menu' => array(10, 25, 50, 100),
            'order_classes' => true,
            'order' => array(array(0, 'asc')),
            'order_multi' => true,
            'page_length' => 10,
            'paging_type' => Style::FULL_NUMBERS_PAGINATION,
            'renderer' => '',
            'scroll_collapse' => false,
            'search_delay' => 0,
            'state_duration' => 7200,
            'stripe_classes' => array(),
            ";
        // line 83
        if ((true == (isset($context["bootstrap3"]) ? $context["bootstrap3"] : $this->getContext($context, "bootstrap3")))) {
            // line 84
            echo "'class' => Style::BOOTSTRAP_3_STYLE,
            ";
        } else {
            // line 86
            echo "'class' => Style::BASE_STYLE,
            ";
        }
        // line 88
        echo "'individual_filtering' => false,
            'individual_filtering_position' => 'head',
            ";
        // line 90
        if ((true == (isset($context["bootstrap3"]) ? $context["bootstrap3"] : $this->getContext($context, "bootstrap3")))) {
            // line 91
            echo "'use_integration_options' => true,
            ";
        } else {
            // line 93
            echo "'use_integration_options' => false,
            ";
        }
        // line 95
        echo "'force_dom' => false,
            'row_id' => '";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["primary_key"]) ? $context["primary_key"] : $this->getContext($context, "primary_key")), "html", null, true);
        echo "'
        ));

        \$this->columnBuilder
            ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 101
            echo "->add('";
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "property", array()), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "column_name", array()), "html", null, true);
            echo "', array(
                'title' => '";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
            echo "',
            ))
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "->add(null, 'action', array(
                'title' => \$this->translator->trans('datatables.actions.title'),
                'actions' => array(
                    array(
                        'route' => '";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["route_pref"]) ? $context["route_pref"] : $this->getContext($context, "route_pref")), "html", null, true);
        echo "_show',
                        'route_parameters' => array(
                            'id' => 'id'
                        ),
                        'label' => \$this->translator->trans('datatables.actions.show'),
                        'icon' => 'glyphicon glyphicon-eye-open',
                        'attributes' => array(
                            'rel' => 'tooltip',
                            'title' => \$this->translator->trans('datatables.actions.show'),
                            'class' => 'btn btn-primary btn-xs',
                            'role' => 'button'
                        ),
                    ),
                    array(
                        'route' => '";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["route_pref"]) ? $context["route_pref"] : $this->getContext($context, "route_pref")), "html", null, true);
        echo "_edit',
                        'route_parameters' => array(
                            'id' => 'id'
                        ),
                        'label' => \$this->translator->trans('datatables.actions.edit'),
                        'icon' => 'glyphicon glyphicon-edit',
                        'attributes' => array(
                            'rel' => 'tooltip',
                            'title' => \$this->translator->trans('datatables.actions.edit'),
                            'class' => 'btn btn-primary btn-xs',
                            'role' => 'button'
                        ),
                    )
                )
            ))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getEntity()
    {
        return '";
        // line 146
        echo twig_escape_filter($this->env, (isset($context["namespace"]) ? $context["namespace"] : $this->getContext($context, "namespace")), "html", null, true);
        echo "\\Entity";
        echo twig_escape_filter($this->env, (((isset($context["entity_namespace"]) ? $context["entity_namespace"] : $this->getContext($context, "entity_namespace"))) ? (("\\" . (isset($context["entity_namespace"]) ? $context["entity_namespace"] : $this->getContext($context, "entity_namespace")))) : ("")), "html", null, true);
        echo "\\";
        echo twig_escape_filter($this->env, (isset($context["entity_class"]) ? $context["entity_class"] : $this->getContext($context, "entity_class")), "html", null, true);
        echo "';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return '";
        // line 154
        echo twig_escape_filter($this->env, (isset($context["datatable_name"]) ? $context["datatable_name"] : $this->getContext($context, "datatable_name")), "html", null, true);
        echo "';
    }
";
        
        $__internal_8a9446d269c878d897b11f75fce4404de59994efabb481f9245b72b17f7c7ce5->leave($__internal_8a9446d269c878d897b11f75fce4404de59994efabb481f9245b72b17f7c7ce5_prof);

        
        $__internal_9682cbb8f539c31d87a95fdc4ca2d8de6b93383c7063ed4b8a53194f1c97ec22->leave($__internal_9682cbb8f539c31d87a95fdc4ca2d8de6b93383c7063ed4b8a53194f1c97ec22_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Skeleton:class.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 154,  298 => 146,  272 => 123,  255 => 109,  249 => 105,  240 => 102,  233 => 101,  229 => 100,  222 => 96,  219 => 95,  215 => 93,  211 => 91,  209 => 90,  205 => 88,  201 => 86,  197 => 84,  195 => 83,  172 => 63,  136 => 30,  124 => 20,  115 => 19,  103 => 16,  98 => 14,  93 => 12,  90 => 11,  81 => 10,  69 => 6,  60 => 5,  49 => 157,  47 => 19,  44 => 18,  42 => 10,  39 => 9,  37 => 5,  32 => 3,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php

namespace {{ namespace }}\\Datatables;

{% block use_statements %}
use Sg\\DatatablesBundle\\Datatable\\View\\AbstractDatatableView;
use Sg\\DatatablesBundle\\Datatable\\View\\Style;
{% endblock use_statements %}

{% block class_definition %}
/**
 * Class {{ datatable_class }}
 *
 * @package {{ namespace }}\\Datatables
 */
class {{ datatable_class }} extends AbstractDatatableView
{% endblock class_definition %}
{
{% block class_body %}
    /**
     * {@inheritdoc}
     */
    public function buildDatatable(array \$options = array())
    {
        \$this->topActions->set(array(
            'start_html' => '<div class=\"row\"><div class=\"col-sm-3\">',
            'end_html' => '<hr></div></div>',
            'actions' => array(
                array(
                    'route' => \$this->router->generate('{{ route_pref }}_new'),
                    'label' => \$this->translator->trans('datatables.actions.new'),
                    'icon' => 'glyphicon glyphicon-plus',
                    'attributes' => array(
                        'rel' => 'tooltip',
                        'title' => \$this->translator->trans('datatables.actions.new'),
                        'class' => 'btn btn-primary',
                        'role' => 'button'
                    ),
                )
            )
        ));

        \$this->features->set(array(
            'auto_width' => true,
            'defer_render' => false,
            'info' => true,
            'jquery_ui' => false,
            'length_change' => true,
            'ordering' => true,
            'paging' => true,
            'processing' => true,
            'scroll_x' => false,
            'scroll_y' => '',
            'searching' => true,
            'state_save' => false,
            'delay' => 0,
            'extensions' => array(),
            'highlight' => false,
            'highlight_color' => 'red'
        ));

        \$this->ajax->set(array(
            'url' => \$this->router->generate('{{ ajax_url }}'),
            'type' => 'GET',
            'pipeline' => 0
        ));

        \$this->options->set(array(
            'display_start' => 0,
            'defer_loading' => -1,
            'dom' => 'lfrtip',
            'length_menu' => array(10, 25, 50, 100),
            'order_classes' => true,
            'order' => array(array(0, 'asc')),
            'order_multi' => true,
            'page_length' => 10,
            'paging_type' => Style::FULL_NUMBERS_PAGINATION,
            'renderer' => '',
            'scroll_collapse' => false,
            'search_delay' => 0,
            'state_duration' => 7200,
            'stripe_classes' => array(),
            {% if true == bootstrap3 -%}
            'class' => Style::BOOTSTRAP_3_STYLE,
            {% else -%}
            'class' => Style::BASE_STYLE,
            {% endif -%}
            'individual_filtering' => false,
            'individual_filtering_position' => 'head',
            {% if true == bootstrap3 -%}
            'use_integration_options' => true,
            {% else -%}
            'use_integration_options' => false,
            {% endif -%}
            'force_dom' => false,
            'row_id' => '{{ primary_key }}'
        ));

        \$this->columnBuilder
            {% for field in fields -%}
            ->add('{{ field.property }}', '{{ field.column_name }}', array(
                'title' => '{{ field.title }}',
            ))
            {% endfor -%}
            ->add(null, 'action', array(
                'title' => \$this->translator->trans('datatables.actions.title'),
                'actions' => array(
                    array(
                        'route' => '{{ route_pref }}_show',
                        'route_parameters' => array(
                            'id' => 'id'
                        ),
                        'label' => \$this->translator->trans('datatables.actions.show'),
                        'icon' => 'glyphicon glyphicon-eye-open',
                        'attributes' => array(
                            'rel' => 'tooltip',
                            'title' => \$this->translator->trans('datatables.actions.show'),
                            'class' => 'btn btn-primary btn-xs',
                            'role' => 'button'
                        ),
                    ),
                    array(
                        'route' => '{{ route_pref }}_edit',
                        'route_parameters' => array(
                            'id' => 'id'
                        ),
                        'label' => \$this->translator->trans('datatables.actions.edit'),
                        'icon' => 'glyphicon glyphicon-edit',
                        'attributes' => array(
                            'rel' => 'tooltip',
                            'title' => \$this->translator->trans('datatables.actions.edit'),
                            'class' => 'btn btn-primary btn-xs',
                            'role' => 'button'
                        ),
                    )
                )
            ))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getEntity()
    {
        return '{{ namespace }}\\Entity{{ entity_namespace ? '\\\\' ~ entity_namespace : '' }}\\{{ entity_class }}';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return '{{ datatable_name }}';
    }
{% endblock class_body %}
}
", "SgDatatablesBundle:Skeleton:class.php.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle/Resources/views/Skeleton/class.php.twig");
    }
}
