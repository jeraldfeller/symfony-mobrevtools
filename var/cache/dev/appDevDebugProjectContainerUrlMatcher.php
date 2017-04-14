<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // app_blacklistreport_showbotreport
        if ($pathinfo === '/reports/blacklist') {
            return array (  '_controller' => 'AppBundle\\Controller\\BlacklistReportController::showBotReportAction',  '_route' => 'app_blacklistreport_showbotreport',);
        }

        // app_blacklistreport_ajaxgetreportsbot
        if ($pathinfo === '/ajax/get-reports-blacklist') {
            return array (  '_controller' => 'AppBundle\\Controller\\BlacklistReportController::ajaxGetReportsBot',  '_route' => 'app_blacklistreport_ajaxgetreportsbot',);
        }

        if (0 === strpos($pathinfo, '/reports')) {
            // app_blacklistreport_deletedata
            if ($pathinfo === '/reports/delete-data') {
                return array (  '_controller' => 'AppBundle\\Controller\\BlacklistReportController::deleteDataAction',  '_route' => 'app_blacklistreport_deletedata',);
            }

            // app_botreport_showbotreport
            if ($pathinfo === '/reports/bot') {
                return array (  '_controller' => 'AppBundle\\Controller\\BotReportController::showBotReportAction',  '_route' => 'app_botreport_showbotreport',);
            }

        }

        // app_botreport_ajaxgetreportsbot
        if ($pathinfo === '/ajax/get-reports-bot') {
            return array (  '_controller' => 'AppBundle\\Controller\\BotReportController::ajaxGetReportsBot',  '_route' => 'app_botreport_ajaxgetreportsbot',);
        }

        // app_botreport_deletedata
        if ($pathinfo === '/reports/delete-data') {
            return array (  '_controller' => 'AppBundle\\Controller\\BotReportController::deleteDataAction',  '_route' => 'app_botreport_deletedata',);
        }

        if (0 === strpos($pathinfo, '/api/cake-api/{$affiliateId}/{$apiKey}/{$network}')) {
            // cakeApiOfferFeed
            if ($pathinfo === '/api/cake-api/{$affiliateId}/{$apiKey}/{$network}') {
                return array (  'affiliateId' => NULL,  'apiKey' => NULL,  'network' => NULL,  '_controller' => 'AppBundle\\Controller\\CakeApiController::getOffersAction',  '_route' => 'cakeApiOfferFeed',);
            }

            if (0 === strpos($pathinfo, '/api/cake-api/{$affiliateId}/{$apiKey}/{$network}/{$c')) {
                // cakeApiApplyOffer
                if ($pathinfo === '/api/cake-api/{$affiliateId}/{$apiKey}/{$network}/{$contractId}') {
                    return array (  'affiliateId' => NULL,  'apiKey' => NULL,  'network' => NULL,  'contractId' => NULL,  '_controller' => 'AppBundle\\Controller\\CakeApiController::applyOffersAction',  '_route' => 'cakeApiApplyOffer',);
                }

                // getCampaignAffiliate
                if ($pathinfo === '/api/cake-api/{$affiliateId}/{$apiKey}/{$network}/{$campaignId}') {
                    return array (  'affiliateId' => NULL,  'apiKey' => NULL,  'network' => NULL,  'campaignId' => NULL,  '_controller' => 'AppBundle\\Controller\\CakeApiController::getCampaignAffiliateAction',  '_route' => 'getCampaignAffiliate',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/campaign')) {
                // campaign
                if (0 === strpos($pathinfo, '/campaign/bot-settings') && preg_match('#^/campaign/bot\\-settings/(?P<tid>[^/]++)/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'campaign')), array (  '_controller' => 'AppBundle\\Controller\\CampaignController::indexAction',));
                }

                if (0 === strpos($pathinfo, '/campaign/get-')) {
                    // getCampaigns
                    if (0 === strpos($pathinfo, '/campaign/get-campaigns') && preg_match('#^/campaign/get\\-campaigns/(?P<tid>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'getCampaigns')), array (  '_controller' => 'AppBundle\\Controller\\CampaignController::getCampaignsForSelect',));
                    }

                    // campaignDetailsAll
                    if ($pathinfo === '/campaign/get-details/all') {
                        return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::getCampaignDetailsAllAction',  '_route' => 'campaignDetailsAll',);
                    }

                    // campaignGetApiCampaigns
                    if ($pathinfo === '/campaign/get-api-campaigns') {
                        return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::getApiCampaignAction',  '_route' => 'campaignGetApiCampaigns',);
                    }

                }

                // importCampaigns
                if ($pathinfo === '/campaign/import-campaigns') {
                    return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::importCampaignAction',  '_route' => 'importCampaigns',);
                }

                // getGroup
                if ($pathinfo === '/campaign/get-groups') {
                    return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::getGroup',  '_route' => 'getGroup',);
                }

                // addVertical
                if ($pathinfo === '/campaign/add-vertical') {
                    return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::addVertical',  '_route' => 'addVertical',);
                }

                // getVeritical
                if ($pathinfo === '/campaign/get-verticals') {
                    return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::getVertical',  '_route' => 'getVeritical',);
                }

                // deleteVertical
                if ($pathinfo === '/campaign/delete-vertical') {
                    return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::deleteVertical',  '_route' => 'deleteVertical',);
                }

                // addCampaignGroup
                if ($pathinfo === '/campaign/add-campaign-group') {
                    return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::addCampaignGroup',  '_route' => 'addCampaignGroup',);
                }

                // getGroupCampaignMatch
                if ($pathinfo === '/campaign/get-group-campaign-match') {
                    return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::getGroupCampaignMatch',  '_route' => 'getGroupCampaignMatch',);
                }

                if (0 === strpos($pathinfo, '/campaign/add-b')) {
                    // addBotRule
                    if ($pathinfo === '/campaign/add-bot-rule') {
                        return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::addBotRule',  '_route' => 'addBotRule',);
                    }

                    // addBlacklistRule
                    if ($pathinfo === '/campaign/add-blacklist-rule') {
                        return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::addBlacklistRule',  '_route' => 'addBlacklistRule',);
                    }

                    // addBidAdjustmentRule
                    if ($pathinfo === '/campaign/add-bid-adjustment-rule') {
                        return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::addBidAdjustmentRule',  '_route' => 'addBidAdjustmentRule',);
                    }

                }

                // getPlacementReport
                if ($pathinfo === '/campaign/get-placement-report') {
                    return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::getPlacementReport',  '_route' => 'getPlacementReport',);
                }

                // deleteCampaignGroup
                if ($pathinfo === '/campaign/delete-campaign-group') {
                    return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::deleteCampaignGroup',  '_route' => 'deleteCampaignGroup',);
                }

                // addIpRule
                if ($pathinfo === '/campaign/add-ip-rule') {
                    return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::addIpRule',  '_route' => 'addIpRule',);
                }

            }

            if (0 === strpos($pathinfo, '/common')) {
                // getGeoCodeByCountry
                if ($pathinfo === '/common/get-geo-code-by-country/{$country}') {
                    return array (  'country' => NULL,  '_controller' => 'AppBundle\\Controller\\CommonController::getGeoCodeByCountryAction',  '_route' => 'getGeoCodeByCountry',);
                }

                if (0 === strpos($pathinfo, '/common/create-')) {
                    // commonCreateDateRange
                    if ($pathinfo === '/common/create-date-range/{$startDate}/{$endDate}') {
                        return array (  'startDate' => NULL,  'endDate' => NULL,  '_controller' => 'AppBundle\\Controller\\CommonController::createDateRangeAction',  '_route' => 'commonCreateDateRange',);
                    }

                    // commonCreateTimeRange
                    if ($pathinfo === '/common/create-time-range/{$start}/{$end}') {
                        return array (  'start' => NULL,  'end' => NULL,  '_controller' => 'AppBundle\\Controller\\CommonController::createTimeRangeAction',  '_route' => 'commonCreateTimeRange',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/ajax/get-')) {
            // commonGetActiveCampaigns
            if ($pathinfo === '/ajax/get-active-campaigns') {
                return array (  '_controller' => 'AppBundle\\Controller\\CommonController::getActiveCampaignsAction',  '_route' => 'commonGetActiveCampaigns',);
            }

            // commonGetImportedCampaigns
            if ($pathinfo === '/ajax/get-imported-campaigns') {
                return array (  '_controller' => 'AppBundle\\Controller\\CommonController::getImportedCampaignsAction',  '_route' => 'commonGetImportedCampaigns',);
            }

        }

        // app_conversionsreport_showconversionsreport
        if ($pathinfo === '/reports/conversions') {
            return array (  '_controller' => 'AppBundle\\Controller\\ConversionsReportController::showConversionsReportAction',  '_route' => 'app_conversionsreport_showconversionsreport',);
        }

        if (0 === strpos($pathinfo, '/ajax/get-')) {
            if (0 === strpos($pathinfo, '/ajax/get-imported-campaigns')) {
                // commonGetImportedCampaignsAll
                if ($pathinfo === '/ajax/get-imported-campaigns/all') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ConversionsReportController::getImportedCampaignsAllAction',  '_route' => 'commonGetImportedCampaignsAll',);
                }

                // commonGetImportedCampaignsLabelAll
                if ($pathinfo === '/ajax/get-imported-campaigns-label/all') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ConversionsReportController::getImportedCampaignsLabelAllAction',  '_route' => 'commonGetImportedCampaignsLabelAll',);
                }

            }

            // app_conversionsreport_ajaxgetreportsconversions
            if ($pathinfo === '/ajax/get-reports-conversions') {
                return array (  '_controller' => 'AppBundle\\Controller\\ConversionsReportController::ajaxGetReportsConversions',  '_route' => 'app_conversionsreport_ajaxgetreportsconversions',);
            }

        }

        if (0 === strpos($pathinfo, '/reports')) {
            // clearConversionReport
            if ($pathinfo === '/reports/clear-conversion-report') {
                return array (  '_controller' => 'AppBundle\\Controller\\ConversionsReportController::clearConversionReportAction',  '_route' => 'clearConversionReport',);
            }

            if (0 === strpos($pathinfo, '/reports/fetch-')) {
                // fetchConversions
                if ($pathinfo === '/reports/fetch-conversions') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ConversionsReportController::fetchConversionsAction',  '_route' => 'fetchConversions',);
                }

                // fetchIpData
                if ($pathinfo === '/reports/fetch-ip-data') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ConversionsReportController::fetchIpDataAction',  '_route' => 'fetchIpData',);
                }

            }

            if (0 === strpos($pathinfo, '/reports/merge-ip-conversion-data')) {
                // mergeIpConversionData
                if ($pathinfo === '/reports/merge-ip-conversion-data') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ConversionsReportController::mergeIpConversionDataAction',  '_route' => 'mergeIpConversionData',);
                }

                if (0 === strpos($pathinfo, '/reports/merge-ip-conversion-data-')) {
                    // mergeIpDataConversionSecondPhase
                    if ($pathinfo === '/reports/merge-ip-conversion-data-second-phase') {
                        return array (  '_controller' => 'AppBundle\\Controller\\ConversionsReportController::mergeIpConversionDataSecondPhaseAction',  '_route' => 'mergeIpDataConversionSecondPhase',);
                    }

                    // mergeIpDataConversionThirdPhase
                    if ($pathinfo === '/reports/merge-ip-conversion-data-third-phase') {
                        return array (  '_controller' => 'AppBundle\\Controller\\ConversionsReportController::mergeIpConversionDataThirdPhaseAction',  '_route' => 'mergeIpDataConversionThirdPhase',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/reports/final')) {
                if (0 === strpos($pathinfo, '/reports/finalizing-')) {
                    // finalizingFirstPhase
                    if ($pathinfo === '/reports/finalizing-first-phase') {
                        return array (  '_controller' => 'AppBundle\\Controller\\ConversionsReportController::finalizingFirstPhaseAction',  '_route' => 'finalizingFirstPhase',);
                    }

                    // finalizingSecondPhase
                    if ($pathinfo === '/reports/finalizing-second-phase') {
                        return array (  '_controller' => 'AppBundle\\Controller\\ConversionsReportController::finalizingSecondPhaseAction',  '_route' => 'finalizingSecondPhase',);
                    }

                    // finalizingThirdPhase
                    if ($pathinfo === '/reports/finalizing-third-phase') {
                        return array (  '_controller' => 'AppBundle\\Controller\\ConversionsReportController::finalizingThirdPhaseAction',  '_route' => 'finalizingThirdPhase',);
                    }

                }

                // finalPhase
                if ($pathinfo === '/reports/final-phase') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ConversionsReportController::finalPhaseAction',  '_route' => 'finalPhase',);
                }

            }

            // app_conversionsreport_getimporteddatareport
            if ($pathinfo === '/reports/get-imported-data-report') {
                return array (  '_controller' => 'AppBundle\\Controller\\ConversionsReportController::getImportedDataReportAction',  '_route' => 'app_conversionsreport_getimporteddatareport',);
            }

            // app_conversionsreport_importfile
            if ($pathinfo === '/reports/import-file') {
                return array (  '_controller' => 'AppBundle\\Controller\\ConversionsReportController::importFileAction',  '_route' => 'app_conversionsreport_importfile',);
            }

            // app_conversionsreport_updateimportfile
            if ($pathinfo === '/reports/update-import-file') {
                return array (  '_controller' => 'AppBundle\\Controller\\ConversionsReportController::updateImportFileAction',  '_route' => 'app_conversionsreport_updateimportfile',);
            }

            // app_conversionsreport_deletelabel
            if ($pathinfo === '/reports/delete-label') {
                return array (  '_controller' => 'AppBundle\\Controller\\ConversionsReportController::deleteLabelAction',  '_route' => 'app_conversionsreport_deletelabel',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/delete')) {
            if (0 === strpos($pathinfo, '/delete/reports')) {
                // deleteReports
                if ($pathinfo === '/delete/reports/{$data}') {
                    return array (  'data' => NULL,  '_controller' => 'AppBundle\\Controller\\DeletesController::deleteReportsAction',  '_route' => 'deleteReports',);
                }

                // deleteReportsAll
                if ($pathinfo === '/delete/reports-all/{$data}') {
                    return array (  'data' => NULL,  '_controller' => 'AppBundle\\Controller\\DeletesController::deleteReportsAllAction',  '_route' => 'deleteReportsAll',);
                }

            }

            // deleteIndividual
            if ($pathinfo === '/delete/individual/{$appBundle}/{$column}/{$value}') {
                return array (  'appBundle' => NULL,  'column' => NULL,  'value' => NULL,  '_controller' => 'AppBundle\\Controller\\DeletesController::deleteIndividualColumnAction',  '_route' => 'deleteIndividual',);
            }

        }

        // app_domaintracker_showdomainreport
        if ($pathinfo === '/monitoring/domain') {
            return array (  '_controller' => 'AppBundle\\Controller\\DomainTrackerController::showDomainReportAction',  '_route' => 'app_domaintracker_showdomainreport',);
        }

        // app_domaintracker_updatedomaincheck
        if ($pathinfo === '/reports/update-domain-check') {
            return array (  '_controller' => 'AppBundle\\Controller\\DomainTrackerController::updateDomainCheckAction',  '_route' => 'app_domaintracker_updatedomaincheck',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            // app_domaintracker_ajaxgetreportsdomain
            if ($pathinfo === '/ajax/get-reports-domain') {
                return array (  '_controller' => 'AppBundle\\Controller\\DomainTrackerController::ajaxGetReportsDomain',  '_route' => 'app_domaintracker_ajaxgetreportsdomain',);
            }

            // exoClickGetCampaigns
            if ($pathinfo === '/api/exoclick/get-campaigns/{$token}') {
                return array (  'token' => NULL,  '_controller' => 'AppBundle\\Controller\\ExoClickApiController::exoClickGetCampaignsAction',  '_route' => 'exoClickGetCampaigns',);
            }

        }

        // ipCompile
        if ($pathinfo === '/tools/ip-compiler') {
            return array (  '_controller' => 'AppBundle\\Controller\\ExtrasController::showIpCompileAction',  '_route' => 'ipCompile',);
        }

        // executeIpCompile
        if ($pathinfo === '/extras/execute-compile-ip') {
            return array (  '_controller' => 'AppBundle\\Controller\\ExtrasController::ipCompile',  '_route' => 'executeIpCompile',);
        }

        // getFilters
        if ($pathinfo === '/filters/{$bundle}/{$column}') {
            return array (  'bundle' => NULL,  'column' => NULL,  '_controller' => 'AppBundle\\Controller\\FiltersController::getFiltersAction',  '_route' => 'getFilters',);
        }

        // app_htmldata_showhtmlpages
        if ($pathinfo === '/monitoring/exploit-log') {
            return array (  '_controller' => 'AppBundle\\Controller\\HtmlDataController::showHtmlPagesAction',  '_route' => 'app_htmldata_showhtmlpages',);
        }

        if (0 === strpos($pathinfo, '/html-pages')) {
            // app_htmldata_getcode
            if ($pathinfo === '/html-pages/get-code') {
                return array (  '_controller' => 'AppBundle\\Controller\\HtmlDataController::getCodeAction',  '_route' => 'app_htmldata_getcode',);
            }

            // app_htmldata_displaycode
            if ($pathinfo === '/html-pages/display-code') {
                return array (  '_controller' => 'AppBundle\\Controller\\HtmlDataController::displayCodeAction',  '_route' => 'app_htmldata_displaycode',);
            }

        }

        // app_htmldata_ajaxgethtmldata
        if ($pathinfo === '/ajax/get-html-data') {
            return array (  '_controller' => 'AppBundle\\Controller\\HtmlDataController::ajaxGetHtmlData',  '_route' => 'app_htmldata_ajaxgethtmldata',);
        }

        // app_ip_showipreport
        if ($pathinfo === '/reports/ip') {
            return array (  '_controller' => 'AppBundle\\Controller\\IpController::showIpReportAction',  '_route' => 'app_ip_showipreport',);
        }

        // app_ip_ajaxgetreportsip
        if ($pathinfo === '/ajax/get-reports-ip') {
            return array (  '_controller' => 'AppBundle\\Controller\\IpController::ajaxGetReportsIp',  '_route' => 'app_ip_ajaxgetreportsip',);
        }

        if (0 === strpos($pathinfo, '/tools')) {
            // app_landers_showlanderspage
            if ($pathinfo === '/tools/landers') {
                return array (  '_controller' => 'AppBundle\\Controller\\LandersController::showLandersPageAction',  '_route' => 'app_landers_showlanderspage',);
            }

            // app_landers_addlanders
            if ($pathinfo === '/tools/add-landers') {
                return array (  '_controller' => 'AppBundle\\Controller\\LandersController::addLandersAction',  '_route' => 'app_landers_addlanders',);
            }

        }

        // app_landers_getlanderstofile
        if ($pathinfo === '/ajax/get-landers-to-file') {
            return array (  '_controller' => 'AppBundle\\Controller\\LandersController::getLandersToFileAction',  '_route' => 'app_landers_getlanderstofile',);
        }

        // clearTmpFiles
        if ($pathinfo === '/tools/clear-tmp-files') {
            return array (  '_controller' => 'AppBundle\\Controller\\LandersController::clearTmpFilesAction',  '_route' => 'clearTmpFiles',);
        }

        // app_logtracker_showlogtrackerreport
        if ($pathinfo === '/monitoring/data-log') {
            return array (  '_controller' => 'AppBundle\\Controller\\LogTrackerController::showLogTrackerReportAction',  '_route' => 'app_logtracker_showlogtrackerreport',);
        }

        // app_logtracker_ajaxgetreportsip
        if ($pathinfo === '/ajax/get-reports-log-tracker') {
            return array (  '_controller' => 'AppBundle\\Controller\\LogTrackerController::ajaxGetReportsIp',  '_route' => 'app_logtracker_ajaxgetreportsip',);
        }

        if (0 === strpos($pathinfo, '/reports')) {
            // app_metrics_showmetricsreport
            if ($pathinfo === '/reports/metrics') {
                return array (  '_controller' => 'AppBundle\\Controller\\MetricsController::showMetricsReportAction',  '_route' => 'app_metrics_showmetricsreport',);
            }

            // app_metrics_getmetricsreport
            if ($pathinfo === '/reports/get-metrics-report') {
                return array (  '_controller' => 'AppBundle\\Controller\\MetricsController::getMetricsReportAction',  '_route' => 'app_metrics_getmetricsreport',);
            }

        }

        // menuPages
        if ($pathinfo === '/nav/menu-pages') {
            return array (  '_controller' => 'AppBundle\\Controller\\NavmenuController::getMenuPagesAction',  '_route' => 'menuPages',);
        }

        if (0 === strpos($pathinfo, '/tools')) {
            // app_offers_showofferspage
            if ($pathinfo === '/tools/offers') {
                return array (  '_controller' => 'AppBundle\\Controller\\OffersController::showOffersPageAction',  '_route' => 'app_offers_showofferspage',);
            }

            // app_offers_addoffers
            if ($pathinfo === '/tools/add-offers') {
                return array (  '_controller' => 'AppBundle\\Controller\\OffersController::addOffersAction',  '_route' => 'app_offers_addoffers',);
            }

        }

        if (0 === strpos($pathinfo, '/offer')) {
            // offerGroups
            if ($pathinfo === '/offer-search/offer-groups') {
                return array (  '_controller' => 'AppBundle\\Controller\\OffersController::showGroupsAction',  '_route' => 'offerGroups',);
            }

            if (0 === strpos($pathinfo, '/offers')) {
                // addOfferGroup
                if ($pathinfo === '/offers/add-group') {
                    return array (  '_controller' => 'AppBundle\\Controller\\OffersController::addGroupAction',  '_route' => 'addOfferGroup',);
                }

                // editOfferGroup
                if ($pathinfo === '/offers/edit-group') {
                    return array (  '_controller' => 'AppBundle\\Controller\\OffersController::editGroupAction',  '_route' => 'editOfferGroup',);
                }

                // deleteOfferGroup
                if ($pathinfo === '/offers/delete-group') {
                    return array (  '_controller' => 'AppBundle\\Controller\\OffersController::deleteGroupAction',  '_route' => 'deleteOfferGroup',);
                }

            }

        }

        // app_offers_ajaxgetoffergroups
        if ($pathinfo === '/ajax/get-offer-groups') {
            return array (  '_controller' => 'AppBundle\\Controller\\OffersController::ajaxGetOfferGroups',  '_route' => 'app_offers_ajaxgetoffergroups',);
        }

        if (0 === strpos($pathinfo, '/offer')) {
            // offerSearch
            if ($pathinfo === '/offer-search') {
                return array (  '_controller' => 'AppBundle\\Controller\\OffersController::showOfferSearchAction',  '_route' => 'offerSearch',);
            }

            if (0 === strpos($pathinfo, '/offers')) {
                // searchOffer
                if ($pathinfo === '/offers/search-offer') {
                    return array (  '_controller' => 'AppBundle\\Controller\\OffersController::searchOfferAction',  '_route' => 'searchOffer',);
                }

                // applyOffers
                if ($pathinfo === '/offers/apply-offers') {
                    return array (  '_controller' => 'AppBundle\\Controller\\OffersController::applyOfferAction',  '_route' => 'applyOffers',);
                }

                // refreshOffers
                if ($pathinfo === '/offers/refresh-offers') {
                    return array (  '_controller' => 'AppBundle\\Controller\\OffersController::refreshOfferAction',  '_route' => 'refreshOffers',);
                }

                // addOfferToGroup
                if ($pathinfo === '/offers/add-offer-to-group') {
                    return array (  '_controller' => 'AppBundle\\Controller\\OffersController::addOfferToGroupAction',  '_route' => 'addOfferToGroup',);
                }

            }

        }

        // app_offers_ajaxgetcaketmptbl
        if ($pathinfo === '/ajax/get-cake-tmp-tbl') {
            return array (  '_controller' => 'AppBundle\\Controller\\OffersController::ajaxGetCakeTmpTbl',  '_route' => 'app_offers_ajaxgetcaketmptbl',);
        }

        // offersGroupsOffers
        if (0 === strpos($pathinfo, '/offer-search/group') && preg_match('#^/offer\\-search/group(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'offersGroupsOffers')), array (  'id' => NULL,  '_controller' => 'AppBundle\\Controller\\OffersController::showManageOffersGroupAction',));
        }

        // app_offers_getgroupoffers
        if (0 === strpos($pathinfo, '/ajax/offer/group') && preg_match('#^/ajax/offer/group(?:/(?P<groupId>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_offers_getgroupoffers')), array (  'groupId' => NULL,  '_controller' => 'AppBundle\\Controller\\OffersController::getGroupOffersAction',));
        }

        if (0 === strpos($pathinfo, '/offer')) {
            // deleteOfferGroupsOffers
            if ($pathinfo === '/offers/group-delete') {
                return array (  '_controller' => 'AppBundle\\Controller\\OffersController::deleteOffersAction',  '_route' => 'deleteOfferGroupsOffers',);
            }

            // offerPresetSearch
            if ($pathinfo === '/offer-search/offer-preset-searches') {
                return array (  '_controller' => 'AppBundle\\Controller\\OffersController::showOfferPresetAction',  '_route' => 'offerPresetSearch',);
            }

            if (0 === strpos($pathinfo, '/offers')) {
                // addOfferPreset
                if ($pathinfo === '/offers/add-preset') {
                    return array (  '_controller' => 'AppBundle\\Controller\\OffersController::addPresetAction',  '_route' => 'addOfferPreset',);
                }

                // editOfferPreset
                if ($pathinfo === '/offers/edit-preset') {
                    return array (  '_controller' => 'AppBundle\\Controller\\OffersController::editPresetAction',  '_route' => 'editOfferPreset',);
                }

                // deleteOfferPreset
                if ($pathinfo === '/offers/delete-preset') {
                    return array (  '_controller' => 'AppBundle\\Controller\\OffersController::deletePresetAction',  '_route' => 'deleteOfferPreset',);
                }

            }

        }

        // app_offers_getpresets
        if ($pathinfo === '/ajax/offer/presets') {
            return array (  '_controller' => 'AppBundle\\Controller\\OffersController::getPresetsAction',  '_route' => 'app_offers_getpresets',);
        }

        if (0 === strpos($pathinfo, '/global-settings')) {
            // app_settings_showapiaccesscredentials
            if ($pathinfo === '/global-settings/api-access') {
                return array (  '_controller' => 'AppBundle\\Controller\\SettingsController::showApiAccessCredentials',  '_route' => 'app_settings_showapiaccesscredentials',);
            }

            // app_settings_updateaccess
            if ($pathinfo === '/global-settings/update-access-action') {
                return array (  '_controller' => 'AppBundle\\Controller\\SettingsController::updateAccessAction',  '_route' => 'app_settings_updateaccess',);
            }

            // app_settings_showtrafficsourcesettings
            if ($pathinfo === '/global-settings/traffic-source') {
                return array (  '_controller' => 'AppBundle\\Controller\\SettingsController::showTrafficSourceSettings',  '_route' => 'app_settings_showtrafficsourcesettings',);
            }

        }

        // app_settings_ajaxgettrafficsource
        if ($pathinfo === '/ajax/get-traffic-source') {
            return array (  '_controller' => 'AppBundle\\Controller\\SettingsController::ajaxGetTrafficSource',  '_route' => 'app_settings_ajaxgettrafficsource',);
        }

        if (0 === strpos($pathinfo, '/global-settings')) {
            if (0 === strpos($pathinfo, '/global-settings/traffic-')) {
                // app_settings_trafficdelete
                if ($pathinfo === '/global-settings/traffic-delete-action') {
                    return array (  '_controller' => 'AppBundle\\Controller\\SettingsController::trafficDeleteAction',  '_route' => 'app_settings_trafficdelete',);
                }

                // app_settings_gettraffic
                if ($pathinfo === '/global-settings/traffic-get-action') {
                    return array (  '_controller' => 'AppBundle\\Controller\\SettingsController::getTrafficAction',  '_route' => 'app_settings_gettraffic',);
                }

            }

            // app_settings_importtrafficsource
            if ($pathinfo === '/global-settings/add-trafficsource') {
                return array (  '_controller' => 'AppBundle\\Controller\\SettingsController::importTrafficsourceAction',  '_route' => 'app_settings_importtrafficsource',);
            }

        }

        // getApiAccessByTraffic
        if ($pathinfo === '/settings/get-api-access-by-traffic/{$traffic}') {
            return array (  'traffic' => NULL,  '_controller' => 'AppBundle\\Controller\\SettingsController::getApiAccessByTrafficAction',  '_route' => 'getApiAccessByTraffic',);
        }

        // app_settings_showpresetssettings
        if ($pathinfo === '/tools/lander-presets') {
            return array (  '_controller' => 'AppBundle\\Controller\\SettingsController::showPresetsSettings',  '_route' => 'app_settings_showpresetssettings',);
        }

        // app_settings_ajaxgetpresets
        if ($pathinfo === '/ajax/get-presets') {
            return array (  '_controller' => 'AppBundle\\Controller\\SettingsController::ajaxGetPresets',  '_route' => 'app_settings_ajaxgetpresets',);
        }

        if (0 === strpos($pathinfo, '/tools/settings')) {
            // addPresetsActions
            if ($pathinfo === '/tools/settings/add-presets') {
                return array (  '_controller' => 'AppBundle\\Controller\\SettingsController::addPresetsAction',  '_route' => 'addPresetsActions',);
            }

            // getPresets
            if ($pathinfo === '/tools/settings/get-presets') {
                return array (  '_controller' => 'AppBundle\\Controller\\SettingsController::getPresetsAction',  '_route' => 'getPresets',);
            }

            // updatePresets
            if ($pathinfo === '/tools/settings/edit-presets') {
                return array (  '_controller' => 'AppBundle\\Controller\\SettingsController::presetEditAction',  '_route' => 'updatePresets',);
            }

            // deletePresets
            if ($pathinfo === '/tools/settings/delete-presets') {
                return array (  '_controller' => 'AppBundle\\Controller\\SettingsController::presetDeleteAction',  '_route' => 'deletePresets',);
            }

        }

        // app_settings_showaffiliate
        if ($pathinfo === '/global-settings/affiliate') {
            return array (  '_controller' => 'AppBundle\\Controller\\SettingsController::showAffiliateAction',  '_route' => 'app_settings_showaffiliate',);
        }

        if (0 === strpos($pathinfo, '/settings')) {
            // addNetworkAction
            if ($pathinfo === '/settings/add-network') {
                return array (  '_controller' => 'AppBundle\\Controller\\SettingsController::addNetworkAction',  '_route' => 'addNetworkAction',);
            }

            // editNetwork
            if ($pathinfo === '/settings/edit-network') {
                return array (  '_controller' => 'AppBundle\\Controller\\SettingsController::editNetworkAction',  '_route' => 'editNetwork',);
            }

            // deleteNetwork
            if ($pathinfo === '/settings/delete-network') {
                return array (  '_controller' => 'AppBundle\\Controller\\SettingsController::deleteNetworkAction',  '_route' => 'deleteNetwork',);
            }

        }

        // app_settings_ajaxgetnetwork
        if ($pathinfo === '/ajax/get-affiliate-network') {
            return array (  '_controller' => 'AppBundle\\Controller\\SettingsController::ajaxGetNetwork',  '_route' => 'app_settings_ajaxgetnetwork',);
        }

        // registerToken
        if ($pathinfo === '/system/register-token/{$VOLUUMSESSIONID}/{$EXOSESSIONTOKEN}') {
            return array (  'VOLUUMSESSIONID' => NULL,  'EXOSESSIONTOKEN' => NULL,  '_controller' => 'AppBundle\\Controller\\SystemController::registerTokenAction',  '_route' => 'registerToken',);
        }

        // app_trafficmonitoring_showipreport
        if ($pathinfo === '/monitoring/traffic') {
            return array (  '_controller' => 'AppBundle\\Controller\\TrafficMonitoringController::showIpReportAction',  '_route' => 'app_trafficmonitoring_showipreport',);
        }

        // app_trafficmonitoring_gettrafficmonitoringreportsfilters
        if ($pathinfo === '/reports/get-traffic-source-monitoring-reports-filter') {
            return array (  '_controller' => 'AppBundle\\Controller\\TrafficMonitoringController::getTrafficMonitoringReportsFiltersAction',  '_route' => 'app_trafficmonitoring_gettrafficmonitoringreportsfilters',);
        }

        // app_trafficmonitoring_ajaxgetreportstrafficmonitoring
        if ($pathinfo === '/ajax/get-reports-traffic-monitoring') {
            return array (  '_controller' => 'AppBundle\\Controller\\TrafficMonitoringController::ajaxGetReportsTrafficMonitoring',  '_route' => 'app_trafficmonitoring_ajaxgetreportstrafficmonitoring',);
        }

        // app_trafficmonitoring_getcampaigntrafficsettings
        if ($pathinfo === '/monitoring/get-campaign-traffic-settings') {
            return array (  '_controller' => 'AppBundle\\Controller\\TrafficMonitoringController::getCampaignTrafficSettingsAction',  '_route' => 'app_trafficmonitoring_getcampaigntrafficsettings',);
        }

        if (0 === strpos($pathinfo, '/reports/update-traffic-monitoring-')) {
            // app_trafficmonitoring_updatecampaigntrafficsettingsvisits
            if ($pathinfo === '/reports/update-traffic-monitoring-settings') {
                return array (  '_controller' => 'AppBundle\\Controller\\TrafficMonitoringController::updateCampaignTrafficSettingsVisits',  '_route' => 'app_trafficmonitoring_updatecampaigntrafficsettingsvisits',);
            }

            // app_trafficmonitoring_updatecampaigntrafficnotificationsettings
            if ($pathinfo === '/reports/update-traffic-monitoring-notification-settings') {
                return array (  '_controller' => 'AppBundle\\Controller\\TrafficMonitoringController::updateCampaignTrafficNotificationSettings',  '_route' => 'app_trafficmonitoring_updatecampaigntrafficnotificationsettings',);
            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // app_users_renderloginform
            if ($pathinfo === '/user/login') {
                return array (  '_controller' => 'AppBundle\\Controller\\UsersController::renderLoginForm',  '_route' => 'app_users_renderloginform',);
            }

            // app_users_create
            if ($pathinfo === '/user/create-account') {
                return array (  '_controller' => 'AppBundle\\Controller\\UsersController::createAction',  '_route' => 'app_users_create',);
            }

            if (0 === strpos($pathinfo, '/user/get-account')) {
                // app_users_showactionbyid
                if (preg_match('#^/user/get\\-account/(?P<param>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_users_showactionbyid')), array (  '_controller' => 'AppBundle\\Controller\\UsersController::showActionById',));
                }

                // app_users_showactionall
                if ($pathinfo === '/user/get-account-all') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UsersController::showActionAll',  '_route' => 'app_users_showactionall',);
                }

            }

            if (0 === strpos($pathinfo, '/user/log')) {
                // app_users_login
                if ($pathinfo === '/user/login-action') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UsersController::loginAction',  '_route' => 'app_users_login',);
                }

                // app_users_logout
                if ($pathinfo === '/user/logout') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UsersController::logout',  '_route' => 'app_users_logout',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/global-settings/manage-users')) {
            if (0 === strpos($pathinfo, '/global-settings/manage-users/groups')) {
                // groups
                if ($pathinfo === '/global-settings/manage-users/groups') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UsersController::showGroupsAction',  '_route' => 'groups',);
                }

                // manageUsersGroups
                if (0 === strpos($pathinfo, '/global-settings/manage-users/groups/group-id') && preg_match('#^/global\\-settings/manage\\-users/groups/group\\-id(?:/(?P<groupId>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'manageUsersGroups')), array (  'groupId' => NULL,  '_controller' => 'AppBundle\\Controller\\UsersController::showManageUsersGroupAction',));
                }

            }

            // users
            if ($pathinfo === '/global-settings/manage-users/users') {
                return array (  '_controller' => 'AppBundle\\Controller\\UsersController::showUsersAction',  '_route' => 'users',);
            }

        }

        if (0 === strpos($pathinfo, '/manage-users')) {
            // addUser
            if ($pathinfo === '/manage-users/add-user') {
                return array (  '_controller' => 'AppBundle\\Controller\\UsersController::addUserAction',  '_route' => 'addUser',);
            }

            // editUser
            if ($pathinfo === '/manage-users/edit-user') {
                return array (  '_controller' => 'AppBundle\\Controller\\UsersController::editUserAction',  '_route' => 'editUser',);
            }

            // deleteUser
            if ($pathinfo === '/manage-users/delete-user') {
                return array (  '_controller' => 'AppBundle\\Controller\\UsersController::deleteUserAction',  '_route' => 'deleteUser',);
            }

            // addGroup
            if ($pathinfo === '/manage-users/add-group') {
                return array (  '_controller' => 'AppBundle\\Controller\\UsersController::addGroupAction',  '_route' => 'addGroup',);
            }

            // editGroup
            if ($pathinfo === '/manage-users/edit-group') {
                return array (  '_controller' => 'AppBundle\\Controller\\UsersController::editGroupAction',  '_route' => 'editGroup',);
            }

            // deleteGroup
            if ($pathinfo === '/manage-users/delete-group') {
                return array (  '_controller' => 'AppBundle\\Controller\\UsersController::deleteGroupAction',  '_route' => 'deleteGroup',);
            }

            if (0 === strpos($pathinfo, '/manage-users/g')) {
                // getGroupByUserId
                if (0 === strpos($pathinfo, '/manage-users/get-group-by-user-id') && preg_match('#^/manage\\-users/get\\-group\\-by\\-user\\-id(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'getGroupByUserId')), array (  'id' => NULL,  '_controller' => 'AppBundle\\Controller\\UsersController::getGroupByUserIdAction',));
                }

                // groupAddUser
                if ($pathinfo === '/manage-users/group-add-user') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UsersController::groupAddUserAction',  '_route' => 'groupAddUser',);
                }

            }

            // deleteUserFromGroup
            if ($pathinfo === '/manage-users/delete-user-from-group') {
                return array (  '_controller' => 'AppBundle\\Controller\\UsersController::deleteUserFromGroupAction',  '_route' => 'deleteUserFromGroup',);
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/ajax/g')) {
                if (0 === strpos($pathinfo, '/ajax/get-')) {
                    // app_users_getusers
                    if ($pathinfo === '/ajax/get-users') {
                        return array (  '_controller' => 'AppBundle\\Controller\\UsersController::getUsersAction',  '_route' => 'app_users_getusers',);
                    }

                    // app_users_getgroups
                    if ($pathinfo === '/ajax/get-groups') {
                        return array (  '_controller' => 'AppBundle\\Controller\\UsersController::getGroupsAction',  '_route' => 'app_users_getgroups',);
                    }

                }

                // app_users_getgroupusers
                if (0 === strpos($pathinfo, '/ajax/groups/get-users') && preg_match('#^/ajax/groups/get\\-users(?:/(?P<groupId>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_users_getgroupusers')), array (  'groupId' => NULL,  '_controller' => 'AppBundle\\Controller\\UsersController::getGroupUsersAction',));
                }

            }

            if (0 === strpos($pathinfo, '/api/voluum')) {
                if (0 === strpos($pathinfo, '/api/voluum-')) {
                    // voluumReport
                    if ($pathinfo === '/api/voluum-report/{$url}/{$query}/{$method}/{$sessionId}') {
                        return array (  'url' => NULL,  'query' => NULL,  'method' => NULL,  'sessionId' => NULL,  '_controller' => 'AppBundle\\Controller\\VoluumApiController::getVoluumReportsAction',  '_route' => 'voluumReport',);
                    }

                    // voluumPost
                    if ($pathinfo === '/api/voluum-post/{$url}/{$query}/{$method}/{$sessionId}') {
                        return array (  'url' => NULL,  'query' => NULL,  'method' => NULL,  'sessionId' => NULL,  '_controller' => 'AppBundle\\Controller\\VoluumApiController::postVoluumAction',  '_route' => 'voluumPost',);
                    }

                }

                // voluumGetCountries
                if ($pathinfo === '/api/voluum/get-countries') {
                    return array (  'sessionId' => NULL,  '_controller' => 'AppBundle\\Controller\\VoluumApiController::voluumGetCountriesAction',  '_route' => 'voluumGetCountries',);
                }

            }

        }

        // app_voluumapi_showlanderspage
        if ($pathinfo === '/tools/cost-update') {
            return array (  '_controller' => 'AppBundle\\Controller\\VoluumApiController::showLandersPageAction',  '_route' => 'app_voluumapi_showlanderspage',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/api/voluum')) {
                // getCampaignsManualCost
                if ($pathinfo === '/api/voluum/get-campaigns-manual-cost') {
                    return array (  '_controller' => 'AppBundle\\Controller\\VoluumApiController::getCampaignManualCostAction',  '_route' => 'getCampaignsManualCost',);
                }

                // updateCost
                if ($pathinfo === '/api/voluum/update-cost') {
                    return array (  '_controller' => 'AppBundle\\Controller\\VoluumApiController::updateCostAction',  '_route' => 'updateCost',);
                }

            }

            // ajaxGetCampaignsManualCost
            if ($pathinfo === '/ajax/get-campaigns-manual-cost') {
                return array (  '_controller' => 'AppBundle\\Controller\\VoluumApiController::ajaxGetReportsCampaignManualCost',  '_route' => 'ajaxGetCampaignsManualCost',);
            }

        }

        if (0 === strpos($pathinfo, '/reports')) {
            // app_whitelistreport_showwhitelistreport
            if ($pathinfo === '/reports/whitelist') {
                return array (  '_controller' => 'AppBundle\\Controller\\WhitelistReportController::showWhitelistReportAction',  '_route' => 'app_whitelistreport_showwhitelistreport',);
            }

            // app_whitelistreport_getwhitelistreport
            if ($pathinfo === '/reports/get-whitelist-report') {
                return array (  '_controller' => 'AppBundle\\Controller\\WhitelistReportController::getWhitelistReportAction',  '_route' => 'app_whitelistreport_getwhitelistreport',);
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            // app_whitelistreport_ajaxgetreportswhitelist
            if ($pathinfo === '/ajax/get-reports-whitelist') {
                return array (  '_controller' => 'AppBundle\\Controller\\WhitelistReportController::ajaxGetReportsWhitelist',  '_route' => 'app_whitelistreport_ajaxgetreportswhitelist',);
            }

            // zeroparkApiAction
            if ($pathinfo === '/api/zeropark/{$url}/{$query}/{$method}/{$token}') {
                return array (  'url' => NULL,  'query' => NULL,  'method' => NULL,  'token' => NULL,  '_controller' => 'AppBundle\\Controller\\ZeroparkApiController::zeroparkRequestAction',  '_route' => 'zeroparkApiAction',);
            }

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
