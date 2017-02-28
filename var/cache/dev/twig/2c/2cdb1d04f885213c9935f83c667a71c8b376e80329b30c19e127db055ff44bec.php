<?php

/* @SgDatatables/Datatable/pipeline.js.twig */
class __TwigTemplate_79c1d09e36ef092add8ec249a18107d98cc3d1278d8b44c4e3025504e55ed2af extends Twig_Template
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
        $__internal_33c1f000b41ab9f0fcc8f38c2fcf4f958a963fecead8ef82f0d50a1615a496c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33c1f000b41ab9f0fcc8f38c2fcf4f958a963fecead8ef82f0d50a1615a496c9->enter($__internal_33c1f000b41ab9f0fcc8f38c2fcf4f958a963fecead8ef82f0d50a1615a496c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/pipeline.js.twig"));

        $__internal_655ea8e8eaf1d247c8871047e9071e534e53940cf20fdac75f26cd1ef3e43c1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_655ea8e8eaf1d247c8871047e9071e534e53940cf20fdac75f26cd1ef3e43c1d->enter($__internal_655ea8e8eaf1d247c8871047e9071e534e53940cf20fdac75f26cd1ef3e43c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/pipeline.js.twig"));

        // line 5
        echo "var pipelineFunctionAlreadyLoaded = true;

\$.fn.dataTable.pipeline = function ( opts ) {
    // Configuration options
    var conf = \$.extend( {
        pages: 5,     // number of pages to cache
        url: '',      // script url
        data: null,   // function or object with parameters to send to the server
                      // matching how `ajax.data` works in DataTables
        method: 'GET' // Ajax HTTP method
    }, opts );

    // Private variables for storing the cache
    var cacheLower = -1;
    var cacheUpper = null;
    var cacheLastRequest = null;
    var cacheLastJson = null;

    return function ( request, drawCallback, settings ) {
        var ajax          = false;
        var requestStart  = request.start;
        var drawStart     = request.start;
        var requestLength = request.length;
        var requestEnd    = requestStart + requestLength;

        if ( settings.clearCache ) {
            // API requested that the cache be cleared
            ajax = true;
            settings.clearCache = false;
        }
        else if ( cacheLower < 0 || requestStart < cacheLower || requestEnd > cacheUpper ) {
            // outside cached data - need to make a request
            ajax = true;
        }
        else if ( JSON.stringify( request.order )   !== JSON.stringify( cacheLastRequest.order ) ||
                JSON.stringify( request.columns ) !== JSON.stringify( cacheLastRequest.columns ) ||
                JSON.stringify( request.search )  !== JSON.stringify( cacheLastRequest.search )
        ) {
            // properties changed (ordering, columns, searching)
            ajax = true;
        }

        // Store the request for checking next time around
        cacheLastRequest = \$.extend( true, {}, request );

        if ( ajax ) {
            // Need data from the server
            if ( requestStart < cacheLower ) {
                requestStart = requestStart - (requestLength*(conf.pages-1));

                if ( requestStart < 0 ) {
                    requestStart = 0;
                }
            }

            cacheLower = requestStart;
            cacheUpper = requestStart + (requestLength * conf.pages);

            request.start = requestStart;
            request.length = requestLength*conf.pages;

            // Provide the same `data` options as DataTables.
            if ( \$.isFunction ( conf.data ) ) {
                // As a function it is executed with the data object as an arg
                // for manipulation. If an object is returned, it is used as the
                // data object to submit
                var d = conf.data( request );
                if ( d ) {
                    \$.extend( request, d );
                }
            }
            else if ( \$.isPlainObject( conf.data ) ) {
                // As an object, the data given extends the default
                \$.extend( request, conf.data );
            }

            settings.jqXHR = \$.ajax( {
                \"type\":     conf.method,
                \"url\":      conf.url,
                \"data\":     request,
                \"dataType\": \"json\",
                \"cache\":    false,
                \"success\":  function ( json ) {
                    cacheLastJson = \$.extend(true, {}, json);

                    if ( cacheLower != drawStart ) {
                        json.data.splice( 0, drawStart-cacheLower );
                    }
                    if ( requestLength >= -1 ) {
                        json.data.splice( requestLength, json.data.length );
                    }

                    drawCallback( json );
                }
            } );
        }
        else {
            json = \$.extend( true, {}, cacheLastJson );
            json.draw = request.draw; // Update the echo for each response
            json.data.splice( 0, requestStart-cacheLower );
            json.data.splice( requestLength, json.data.length );

            drawCallback(json);
        }
    }
};

// Register an API method that will empty the pipelined data, forcing an Ajax
// fetch on the next draw (i.e. `table.clearPipeline().draw()`)
\$.fn.dataTable.Api.register( 'clearPipeline()', function () {
    return this.iterator( 'table', function ( settings ) {
        settings.clearCache = true;
    } );
} );
";
        
        $__internal_33c1f000b41ab9f0fcc8f38c2fcf4f958a963fecead8ef82f0d50a1615a496c9->leave($__internal_33c1f000b41ab9f0fcc8f38c2fcf4f958a963fecead8ef82f0d50a1615a496c9_prof);

        
        $__internal_655ea8e8eaf1d247c8871047e9071e534e53940cf20fdac75f26cd1ef3e43c1d->leave($__internal_655ea8e8eaf1d247c8871047e9071e534e53940cf20fdac75f26cd1ef3e43c1d_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/Datatable/pipeline.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
Pipelining function for DataTables. To be used to the `ajax` option of DataTables
from: https://datatables.net/examples/server_side/pipeline.html
#}
var pipelineFunctionAlreadyLoaded = true;

\$.fn.dataTable.pipeline = function ( opts ) {
    // Configuration options
    var conf = \$.extend( {
        pages: 5,     // number of pages to cache
        url: '',      // script url
        data: null,   // function or object with parameters to send to the server
                      // matching how `ajax.data` works in DataTables
        method: 'GET' // Ajax HTTP method
    }, opts );

    // Private variables for storing the cache
    var cacheLower = -1;
    var cacheUpper = null;
    var cacheLastRequest = null;
    var cacheLastJson = null;

    return function ( request, drawCallback, settings ) {
        var ajax          = false;
        var requestStart  = request.start;
        var drawStart     = request.start;
        var requestLength = request.length;
        var requestEnd    = requestStart + requestLength;

        if ( settings.clearCache ) {
            // API requested that the cache be cleared
            ajax = true;
            settings.clearCache = false;
        }
        else if ( cacheLower < 0 || requestStart < cacheLower || requestEnd > cacheUpper ) {
            // outside cached data - need to make a request
            ajax = true;
        }
        else if ( JSON.stringify( request.order )   !== JSON.stringify( cacheLastRequest.order ) ||
                JSON.stringify( request.columns ) !== JSON.stringify( cacheLastRequest.columns ) ||
                JSON.stringify( request.search )  !== JSON.stringify( cacheLastRequest.search )
        ) {
            // properties changed (ordering, columns, searching)
            ajax = true;
        }

        // Store the request for checking next time around
        cacheLastRequest = \$.extend( true, {}, request );

        if ( ajax ) {
            // Need data from the server
            if ( requestStart < cacheLower ) {
                requestStart = requestStart - (requestLength*(conf.pages-1));

                if ( requestStart < 0 ) {
                    requestStart = 0;
                }
            }

            cacheLower = requestStart;
            cacheUpper = requestStart + (requestLength * conf.pages);

            request.start = requestStart;
            request.length = requestLength*conf.pages;

            // Provide the same `data` options as DataTables.
            if ( \$.isFunction ( conf.data ) ) {
                // As a function it is executed with the data object as an arg
                // for manipulation. If an object is returned, it is used as the
                // data object to submit
                var d = conf.data( request );
                if ( d ) {
                    \$.extend( request, d );
                }
            }
            else if ( \$.isPlainObject( conf.data ) ) {
                // As an object, the data given extends the default
                \$.extend( request, conf.data );
            }

            settings.jqXHR = \$.ajax( {
                \"type\":     conf.method,
                \"url\":      conf.url,
                \"data\":     request,
                \"dataType\": \"json\",
                \"cache\":    false,
                \"success\":  function ( json ) {
                    cacheLastJson = \$.extend(true, {}, json);

                    if ( cacheLower != drawStart ) {
                        json.data.splice( 0, drawStart-cacheLower );
                    }
                    if ( requestLength >= -1 ) {
                        json.data.splice( requestLength, json.data.length );
                    }

                    drawCallback( json );
                }
            } );
        }
        else {
            json = \$.extend( true, {}, cacheLastJson );
            json.draw = request.draw; // Update the echo for each response
            json.data.splice( 0, requestStart-cacheLower );
            json.data.splice( requestLength, json.data.length );

            drawCallback(json);
        }
    }
};

// Register an API method that will empty the pipelined data, forcing an Ajax
// fetch on the next draw (i.e. `table.clearPipeline().draw()`)
\$.fn.dataTable.Api.register( 'clearPipeline()', function () {
    return this.iterator( 'table', function ( settings ) {
        settings.clearCache = true;
    } );
} );
", "@SgDatatables/Datatable/pipeline.js.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle\\Resources\\views\\Datatable\\pipeline.js.twig");
    }
}
