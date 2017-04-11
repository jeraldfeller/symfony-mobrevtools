<?php

/* SgDatatablesBundle:Datatable:pipeline.js.twig */
class __TwigTemplate_909797394461f02a053b39b4b1e27acf0700202b23fe77edb1f633794500b332 extends Twig_Template
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
        $__internal_d92fd4331d57d9973b50b2afdbbdd0a55863f3248489b61b119d576d0c666626 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d92fd4331d57d9973b50b2afdbbdd0a55863f3248489b61b119d576d0c666626->enter($__internal_d92fd4331d57d9973b50b2afdbbdd0a55863f3248489b61b119d576d0c666626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:pipeline.js.twig"));

        $__internal_a812491d0ded3c05755e7c5315ac0ea774a56f3cdb740b22c1087eef593da7f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a812491d0ded3c05755e7c5315ac0ea774a56f3cdb740b22c1087eef593da7f4->enter($__internal_a812491d0ded3c05755e7c5315ac0ea774a56f3cdb740b22c1087eef593da7f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:pipeline.js.twig"));

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
        
        $__internal_d92fd4331d57d9973b50b2afdbbdd0a55863f3248489b61b119d576d0c666626->leave($__internal_d92fd4331d57d9973b50b2afdbbdd0a55863f3248489b61b119d576d0c666626_prof);

        
        $__internal_a812491d0ded3c05755e7c5315ac0ea774a56f3cdb740b22c1087eef593da7f4->leave($__internal_a812491d0ded3c05755e7c5315ac0ea774a56f3cdb740b22c1087eef593da7f4_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Datatable:pipeline.js.twig";
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
", "SgDatatablesBundle:Datatable:pipeline.js.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle/Resources/views/Datatable/pipeline.js.twig");
    }
}
