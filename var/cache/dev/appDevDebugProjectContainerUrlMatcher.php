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

        // app_aws_showofferspage
        if ($pathinfo === '/tools/aws/invalidate') {
            return array (  '_controller' => 'AppBundle\\Controller\\AWSController::showOffersPageAction',  '_route' => 'app_aws_showofferspage',);
        }

        // adplexitykApiAction
        if ($pathinfo === '/api/adplexity/{$url}/{$query}') {
            return array (  'url' => NULL,  'query' => NULL,  '_controller' => 'AppBundle\\Controller\\AdplexityApiController::adplexityRequestAction',  '_route' => 'adplexitykApiAction',);
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

        if (0 === strpos($pathinfo, '/campaign')) {
            // campaignB
            if (0 === strpos($pathinfo, '/campaign/bot-settings') && preg_match('#^/campaign/bot\\-settings/(?P<tid>[^/]++)/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'campaignB')), array (  '_controller' => 'AppBundle\\Controller\\CampaignController::indexBAction',));
            }

            // campaign
            if (preg_match('#^/campaign/(?P<tid>[^/]++)/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
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

                // getCampaignMatch
                if ($pathinfo === '/campaign/get-campaign-match') {
                    return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::getGroupCampaignMatch',  '_route' => 'getCampaignMatch',);
                }

                if (0 === strpos($pathinfo, '/campaign/get-api-')) {
                    // campaignGetApiCampaigns
                    if ($pathinfo === '/campaign/get-api-campaigns') {
                        return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::getApiCampaignAction',  '_route' => 'campaignGetApiCampaigns',);
                    }

                    // campaignGetApiExoclickCampaigns
                    if ($pathinfo === '/campaign/get-api-exoclick-campaigns') {
                        return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::getApiExoClickCampaigns',  '_route' => 'campaignGetApiExoclickCampaigns',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/campaign/add-')) {
                // addCampaign
                if ($pathinfo === '/campaign/add-campaign') {
                    return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::addCampaignAction',  '_route' => 'addCampaign',);
                }

                // addPresetRule
                if ($pathinfo === '/campaign/add-preset-rule') {
                    return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::addPresetRuleAction',  '_route' => 'addPresetRule',);
                }

            }

            // editPresetRule
            if ($pathinfo === '/campaign/edit-preset-rule') {
                return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::editPresetRuleAction',  '_route' => 'editPresetRule',);
            }

            // deletePresetRule
            if ($pathinfo === '/campaign/delete-preset-rule') {
                return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::deletePresetRuleAction',  '_route' => 'deletePresetRule',);
            }

            // addRule
            if ($pathinfo === '/campaign/add-rule') {
                return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::addRuleAction',  '_route' => 'addRule',);
            }

            if (0 === strpos($pathinfo, '/campaign/update-')) {
                // editRule
                if ($pathinfo === '/campaign/update-rule') {
                    return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::editRuleAction',  '_route' => 'editRule',);
                }

                // updateChangeRuleStatus
                if ($pathinfo === '/campaign/update-change-rule-status') {
                    return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::updatChangeRuleStatusAction',  '_route' => 'updateChangeRuleStatus',);
                }

            }

            // deleteCampaignRule
            if ($pathinfo === '/campaign/delete-campaign-rule') {
                return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::deleteCampaignRuleAction',  '_route' => 'deleteCampaignRule',);
            }

            // app_campaign_savedata
            if ($pathinfo === '/campaign/save-data') {
                return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::saveDataAction',  '_route' => 'app_campaign_savedata',);
            }

            // resume-placements
            if ($pathinfo === '/campaign/resume-placements') {
                return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::resumePlacementsAction',  '_route' => 'resume-placements',);
            }

            // app_campaign_deletedata
            if ($pathinfo === '/campaign/delete-data') {
                return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::deleteDataAction',  '_route' => 'app_campaign_deletedata',);
            }

            // addVertical
            if ($pathinfo === '/campaign/add-vertical') {
                return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::addVertical',  '_route' => 'addVertical',);
            }

            if (0 === strpos($pathinfo, '/campaign/update-safe-list')) {
                // updateSafeList
                if ($pathinfo === '/campaign/update-safe-list') {
                    return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::updateSafeList',  '_route' => 'updateSafeList',);
                }

                // updateSafeListActive
                if ($pathinfo === '/campaign/update-safe-list-active') {
                    return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::updateSafeListActive',  '_route' => 'updateSafeListActive',);
                }

            }

            // getVeritical
            if ($pathinfo === '/campaign/get-verticals') {
                return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::getVertical',  '_route' => 'getVeritical',);
            }

            // deleteVertical
            if ($pathinfo === '/campaign/delete-vertical') {
                return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::deleteVertical',  '_route' => 'deleteVertical',);
            }

            if (0 === strpos($pathinfo, '/campaign/add-')) {
                // addCampaignGroup
                if ($pathinfo === '/campaign/add-campaign-group') {
                    return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::addCampaignGroup',  '_route' => 'addCampaignGroup',);
                }

                // addBidAdjustmentRule
                if ($pathinfo === '/campaign/add-bid-adjustment-rule') {
                    return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::addBidAdjustmentRule',  '_route' => 'addBidAdjustmentRule',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/ajax/get-')) {
            // app_campaign_ajaxgetreportsbot
            if (0 === strpos($pathinfo, '/ajax/get-placement-list') && preg_match('#^/ajax/get\\-placement\\-list(?:/(?P<trafficSourceId>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_campaign_ajaxgetreportsbot')), array (  'trafficSourceId' => NULL,  '_controller' => 'AppBundle\\Controller\\CampaignController::ajaxGetReportsBot',));
            }

            // app_campaign_ajaxgetrulepresets
            if ($pathinfo === '/ajax/get-rule-presets') {
                return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::ajaxGetRulePresets',  '_route' => 'app_campaign_ajaxgetrulepresets',);
            }

        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/campaign')) {
                // app_campaign_getcampaignrulepresets
                if ($pathinfo === '/campaign/get-campaign-rule-presets') {
                    return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::getCampaignRulePresets',  '_route' => 'app_campaign_getcampaignrulepresets',);
                }

                // deleteCampaignGroup
                if ($pathinfo === '/campaign/delete-campaign-group') {
                    return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::deleteCampaignGroup',  '_route' => 'deleteCampaignGroup',);
                }

                // addIpRule
                if ($pathinfo === '/campaign/add-ip-rule') {
                    return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::addIpRule',  '_route' => 'addIpRule',);
                }

                // app_campaign_campaignreset
                if ($pathinfo === '/campaign/reset') {
                    return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::campaignResetAction',  '_route' => 'app_campaign_campaignreset',);
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

            // app_conversionsreport_savedata
            if ($pathinfo === '/reports/conversions/save-data') {
                return array (  '_controller' => 'AppBundle\\Controller\\ConversionsReportController::saveDataAction',  '_route' => 'app_conversionsreport_savedata',);
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

        if (0 === strpos($pathinfo, '/monitoring')) {
            // app_domaintracker_showdomainreport
            if ($pathinfo === '/monitoring/domain') {
                return array (  '_controller' => 'AppBundle\\Controller\\DomainTrackerController::showDomainReportAction',  '_route' => 'app_domaintracker_showdomainreport',);
            }

            // app_domaintracker_updatedomaincheck
            if ($pathinfo === '/monitoring/update-domain-check') {
                return array (  '_controller' => 'AppBundle\\Controller\\DomainTrackerController::updateDomainCheckAction',  '_route' => 'app_domaintracker_updatedomaincheck',);
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            // app_domaintracker_ajaxgetreportsdomain
            if ($pathinfo === '/ajax/get-reports-domain') {
                return array (  '_controller' => 'AppBundle\\Controller\\DomainTrackerController::ajaxGetReportsDomain',  '_route' => 'app_domaintracker_ajaxgetreportsdomain',);
            }

            if (0 === strpos($pathinfo, '/api/exoclick')) {
                // exoClickGetCampaigns
                if ($pathinfo === '/api/exoclick/get-campaigns/{$token}') {
                    return array (  'token' => NULL,  '_controller' => 'AppBundle\\Controller\\ExoClickApiController::exoClickGetCampaignsAction',  '_route' => 'exoClickGetCampaigns',);
                }

                // exoClickBlockDomain
                if ($pathinfo === '/api/exoclick/block-domain/{$token}/{$vid}/{$targets}') {
                    return array (  'token' => NULL,  'vid' => NULL,  'targets' => NULL,  '_controller' => 'AppBundle\\Controller\\ExoClickApiController::exoClickPostBlockDomain',  '_route' => 'exoClickBlockDomain',);
                }

                // exoClickDeleteBlockDomain
                if ($pathinfo === '/api/exoclick/delete-block-domain/{$token}/{$vid}/{$target}') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ExoClickApiController::exoClickDeleteBlockDomain',  '_route' => 'exoClickDeleteBlockDomain',);
                }

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

        if (0 === strpos($pathinfo, '/tools/adplexity')) {
            // adplexity
            if ($pathinfo === '/tools/adplexity') {
                return array (  '_controller' => 'AppBundle\\Controller\\ExtrasController::showAdplexityAction',  '_route' => 'adplexity',);
            }

            // app_extras_showadplexityautomated
            if ($pathinfo === '/tools/adplexity/automated') {
                return array (  '_controller' => 'AppBundle\\Controller\\ExtrasController::showAdplexityAutomatedAction',  '_route' => 'app_extras_showadplexityautomated',);
            }

            // app_extras_showadplexitysearchpresets
            if ($pathinfo === '/tools/adplexity/search-presets') {
                return array (  '_controller' => 'AppBundle\\Controller\\ExtrasController::showAdplexitySearchPresetsAction',  '_route' => 'app_extras_showadplexitysearchpresets',);
            }

        }

        if (0 === strpos($pathinfo, '/extras')) {
            // app_extras_executemultipleadplexitysettingsreport
            if ($pathinfo === '/extras/execute-multiple-adplexity-settings') {
                return array (  '_controller' => 'AppBundle\\Controller\\ExtrasController::executeMultipleAdplexitySettingsReport',  '_route' => 'app_extras_executemultipleadplexitysettingsreport',);
            }

            if (0 === strpos($pathinfo, '/extras/get-adplexity-report')) {
                // getAdplexityReport
                if ($pathinfo === '/extras/get-adplexity-report') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ExtrasController::getAdplexityReport',  '_route' => 'getAdplexityReport',);
                }

                // app_extras_getadplexityformultireport
                if ($pathinfo === '/extras/get-adplexity-report-for-multi') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ExtrasController::getAdplexityForMultiReport',  '_route' => 'app_extras_getadplexityformultireport',);
                }

            }

            // app_extras_saveadplexitysettings
            if ($pathinfo === '/extras/save-adplexity-settings') {
                return array (  '_controller' => 'AppBundle\\Controller\\ExtrasController::saveAdplexitySettings',  '_route' => 'app_extras_saveadplexitysettings',);
            }

            // app_extras_addadplexitypresets
            if ($pathinfo === '/extras/add-adplexity-presets') {
                return array (  '_controller' => 'AppBundle\\Controller\\ExtrasController::addAdplexityPresets',  '_route' => 'app_extras_addadplexitypresets',);
            }

            // app_extras_editadplexitypresets
            if ($pathinfo === '/extras/edit-adplexity-presets') {
                return array (  '_controller' => 'AppBundle\\Controller\\ExtrasController::editAdplexityPresets',  '_route' => 'app_extras_editadplexitypresets',);
            }

            // app_extras_deleteadplexitypresets
            if ($pathinfo === '/extras/delete-adplexity-presets') {
                return array (  '_controller' => 'AppBundle\\Controller\\ExtrasController::deleteAdplexityPresets',  '_route' => 'app_extras_deleteadplexitypresets',);
            }

        }

        // app_extras_adplexitygetsearchpresets
        if ($pathinfo === '/tools/adplexity/get-search-presets') {
            return array (  '_controller' => 'AppBundle\\Controller\\ExtrasController::adplexityGetSearchPresets',  '_route' => 'app_extras_adplexitygetsearchpresets',);
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

        if (0 === strpos($pathinfo, '/reports/ip')) {
            // app_ip_showipreport
            if ($pathinfo === '/reports/ip') {
                return array (  '_controller' => 'AppBundle\\Controller\\IpController::showIpReportAction',  '_route' => 'app_ip_showipreport',);
            }

            // app_ip_savedata
            if ($pathinfo === '/reports/ip/save-data') {
                return array (  '_controller' => 'AppBundle\\Controller\\IpController::saveDataAction',  '_route' => 'app_ip_savedata',);
            }

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

            // app_landers_editlander
            if ($pathinfo === '/tools/get-edit-lander') {
                return array (  '_controller' => 'AppBundle\\Controller\\LandersController::editLanderAction',  '_route' => 'app_landers_editlander',);
            }

            // app_landers_putlanders
            if ($pathinfo === '/tools/put-lander') {
                return array (  '_controller' => 'AppBundle\\Controller\\LandersController::putLandersAction',  '_route' => 'app_landers_putlanders',);
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

        // listReports
        if ($pathinfo === '/reports/data-reports') {
            return array (  '_controller' => 'AppBundle\\Controller\\ListReportsController::indexAction',  '_route' => 'listReports',);
        }

        // deleteData
        if ($pathinfo === '/list-reports/delete-data') {
            return array (  '_controller' => 'AppBundle\\Controller\\ListReportsController::deleteDataAction',  '_route' => 'deleteData',);
        }

        if (0 === strpos($pathinfo, '/ajax')) {
            // app_listreports_ajaxgetlistreports
            if ($pathinfo === '/ajax/list-reports') {
                return array (  '_controller' => 'AppBundle\\Controller\\ListReportsController::ajaxGetListReports',  '_route' => 'app_listreports_ajaxgetlistreports',);
            }

            if (0 === strpos($pathinfo, '/ajax/get-reports-')) {
                // app_listreports_ajaxgetreportsip
                if ($pathinfo === '/ajax/get-reports-ip-saved') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ListReportsController::ajaxGetReportsIp',  '_route' => 'app_listreports_ajaxgetreportsip',);
                }

                // app_listreports_ajaxgetreportsconversions
                if ($pathinfo === '/ajax/get-reports-conversions-saved') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ListReportsController::ajaxGetReportsConversions',  '_route' => 'app_listreports_ajaxgetreportsconversions',);
                }

            }

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

            // app_offers_updateoffers
            if ($pathinfo === '/tools/update-offer') {
                return array (  '_controller' => 'AppBundle\\Controller\\OffersController::updateOffersAction',  '_route' => 'app_offers_updateoffers',);
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
            if (0 === strpos($pathinfo, '/offers/group-')) {
                // showHideOfferGroupsOffers
                if ($pathinfo === '/offers/group-show-hide-offers') {
                    return array (  '_controller' => 'AppBundle\\Controller\\OffersController::showHideOffersAction',  '_route' => 'showHideOfferGroupsOffers',);
                }

                // deleteOfferGroupsOffers
                if ($pathinfo === '/offers/group-delete') {
                    return array (  '_controller' => 'AppBundle\\Controller\\OffersController::deleteOffersAction',  '_route' => 'deleteOfferGroupsOffers',);
                }

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

        // app_offers_showpresetssettings
        if ($pathinfo === '/tools/offer-url-presets') {
            return array (  '_controller' => 'AppBundle\\Controller\\OffersController::showPresetsSettings',  '_route' => 'app_offers_showpresetssettings',);
        }

        // app_offers_ajaxgetpresets
        if ($pathinfo === '/ajax/get-offer-url-presets') {
            return array (  '_controller' => 'AppBundle\\Controller\\OffersController::ajaxGetPresets',  '_route' => 'app_offers_ajaxgetpresets',);
        }

        if (0 === strpos($pathinfo, '/tools')) {
            if (0 === strpos($pathinfo, '/tools/settings')) {
                // addOfferUrlPresetsActions
                if ($pathinfo === '/tools/settings/add-offer-url-presets') {
                    return array (  '_controller' => 'AppBundle\\Controller\\OffersController::addPresetsAction',  '_route' => 'addOfferUrlPresetsActions',);
                }

                // getOfferUrlPresets
                if ($pathinfo === '/tools/settings/get-offer-url-presets') {
                    return array (  '_controller' => 'AppBundle\\Controller\\OffersController::getOfferUrlPresetsAction',  '_route' => 'getOfferUrlPresets',);
                }

                // updateOfferUrlPresets
                if ($pathinfo === '/tools/settings/edit-offer-url-presets') {
                    return array (  '_controller' => 'AppBundle\\Controller\\OffersController::presetEditAction',  '_route' => 'updateOfferUrlPresets',);
                }

                // deleteOfferUrlPresets
                if ($pathinfo === '/tools/settings/delete-offer-url-presets') {
                    return array (  '_controller' => 'AppBundle\\Controller\\OffersController::presetDeleteAction',  '_route' => 'deleteOfferUrlPresets',);
                }

            }

            // app_offers_editoffer
            if ($pathinfo === '/tools/get-edit-offer') {
                return array (  '_controller' => 'AppBundle\\Controller\\OffersController::editOfferAction',  '_route' => 'app_offers_editoffer',);
            }

        }

        if (0 === strpos($pathinfo, '/reports/placements')) {
            // placementsReports
            if ($pathinfo === '/reports/placements') {
                return array (  '_controller' => 'AppBundle\\Controller\\PlacementsReportsController::indexAction',  '_route' => 'placementsReports',);
            }

            // app_placementsreports_initialize
            if ($pathinfo === '/reports/placements/initialize') {
                return array (  '_controller' => 'AppBundle\\Controller\\PlacementsReportsController::initializeAction',  '_route' => 'app_placementsreports_initialize',);
            }

            // app_placementsreports_getcampaigns
            if ($pathinfo === '/reports/placements/get-campaigns') {
                return array (  '_controller' => 'AppBundle\\Controller\\PlacementsReportsController::getCampaigns',  '_route' => 'app_placementsreports_getcampaigns',);
            }

            // app_placementsreports_savedata
            if ($pathinfo === '/reports/placements/save-data') {
                return array (  '_controller' => 'AppBundle\\Controller\\PlacementsReportsController::saveDataAction',  '_route' => 'app_placementsreports_savedata',);
            }

            if (0 === strpos($pathinfo, '/reports/placements/get-reports')) {
                // app_placementsreports_ajaxgetlistreports
                if ($pathinfo === '/reports/placements/get-reports') {
                    return array (  '_controller' => 'AppBundle\\Controller\\PlacementsReportsController::ajaxGetListReports',  '_route' => 'app_placementsreports_ajaxgetlistreports',);
                }

                // app_placementsreports_getreportsplacementssaved
                if ($pathinfo === '/reports/placements/get-reports-placements-saved') {
                    return array (  '_controller' => 'AppBundle\\Controller\\PlacementsReportsController::getReportsPlacementsSaved',  '_route' => 'app_placementsreports_getreportsplacementssaved',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/planning')) {
            // app_planning_showcreatecampaignpage
            if ($pathinfo === '/planning/create-campaign') {
                return array (  '_controller' => 'AppBundle\\Controller\\PlanningController::showCreateCampaignPageAction',  '_route' => 'app_planning_showcreatecampaignpage',);
            }

            // app_planning_addcampaigns
            if ($pathinfo === '/planning/add-campaigns') {
                return array (  '_controller' => 'AppBundle\\Controller\\PlanningController::addCampaignsAction',  '_route' => 'app_planning_addcampaigns',);
            }

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

        if (0 === strpos($pathinfo, '/settings')) {
            // getApiAccessByTraffic
            if ($pathinfo === '/settings/get-api-access-by-traffic/{$traffic}') {
                return array (  'traffic' => NULL,  '_controller' => 'AppBundle\\Controller\\SettingsController::getApiAccessByTrafficAction',  '_route' => 'getApiAccessByTraffic',);
            }

            // app_settings_presetsrules
            if ($pathinfo === '/settings/presets-rules') {
                return array (  '_controller' => 'AppBundle\\Controller\\SettingsController::presetsRulesAction',  '_route' => 'app_settings_presetsrules',);
            }

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

        if (0 === strpos($pathinfo, '/system')) {
            // registerToken
            if ($pathinfo === '/system/register-token/{$VOLUUMSESSIONID}/{$EXOSESSIONTOKEN}') {
                return array (  'VOLUUMSESSIONID' => NULL,  'EXOSESSIONTOKEN' => NULL,  '_controller' => 'AppBundle\\Controller\\SystemController::registerTokenAction',  '_route' => 'registerToken',);
            }

            // sendMessage
            if ($pathinfo === '/system/send-email/{$from}/{$to}/{$subject}/{$message}') {
                return array (  '_controller' => 'AppBundle\\Controller\\SystemController::sendEmail',  '_route' => 'sendMessage',);
            }

        }

        // app_trafficmonitoring_showtrafficreport
        if ($pathinfo === '/monitoring/traffic') {
            return array (  '_controller' => 'AppBundle\\Controller\\TrafficMonitoringController::showTrafficReportAction',  '_route' => 'app_trafficmonitoring_showtrafficreport',);
        }

        // app_trafficmonitoring_gettrafficmonitoringreportsfilters
        if ($pathinfo === '/reports/get-traffic-source-monitoring-reports-filter') {
            return array (  '_controller' => 'AppBundle\\Controller\\TrafficMonitoringController::getTrafficMonitoringReportsFiltersAction',  '_route' => 'app_trafficmonitoring_gettrafficmonitoringreportsfilters',);
        }

        // app_trafficmonitoring_ajaxgetreportstrafficmonitoring
        if ($pathinfo === '/ajax/get-reports-traffic-monitoring') {
            return array (  '_controller' => 'AppBundle\\Controller\\TrafficMonitoringController::ajaxGetReportsTrafficMonitoring',  '_route' => 'app_trafficmonitoring_ajaxgetreportstrafficmonitoring',);
        }

        if (0 === strpos($pathinfo, '/monitoring')) {
            // app_trafficmonitoring_getcampaigntrafficsettings
            if ($pathinfo === '/monitoring/get-campaign-traffic-settings') {
                return array (  '_controller' => 'AppBundle\\Controller\\TrafficMonitoringController::getCampaignTrafficSettingsAction',  '_route' => 'app_trafficmonitoring_getcampaigntrafficsettings',);
            }

            if (0 === strpos($pathinfo, '/monitoring/update-traffic-monitoring-')) {
                // app_trafficmonitoring_updatecampaigntrafficsettingsvisits
                if ($pathinfo === '/monitoring/update-traffic-monitoring-settings') {
                    return array (  '_controller' => 'AppBundle\\Controller\\TrafficMonitoringController::updateCampaignTrafficSettingsVisits',  '_route' => 'app_trafficmonitoring_updatecampaigntrafficsettingsvisits',);
                }

                // app_trafficmonitoring_updatecampaigntrafficglobalsettings
                if ($pathinfo === '/monitoring/update-traffic-monitoring-global-settings') {
                    return array (  '_controller' => 'AppBundle\\Controller\\TrafficMonitoringController::updateCampaignTrafficGlobalSettings',  '_route' => 'app_trafficmonitoring_updatecampaigntrafficglobalsettings',);
                }

                if (0 === strpos($pathinfo, '/monitoring/update-traffic-monitoring-notification-settings')) {
                    // app_trafficmonitoring_updatecampaigntrafficnotificationsettings
                    if ($pathinfo === '/monitoring/update-traffic-monitoring-notification-settings') {
                        return array (  '_controller' => 'AppBundle\\Controller\\TrafficMonitoringController::updateCampaignTrafficNotificationSettings',  '_route' => 'app_trafficmonitoring_updatecampaigntrafficnotificationsettings',);
                    }

                    // app_trafficmonitoring_updatecampaigntrafficnotificationsettingscampaignlevel
                    if ($pathinfo === '/monitoring/update-traffic-monitoring-notification-settings-campaign-level') {
                        return array (  '_controller' => 'AppBundle\\Controller\\TrafficMonitoringController::updateCampaignTrafficNotificationSettingsCampaignLevel',  '_route' => 'app_trafficmonitoring_updatecampaigntrafficnotificationsettingscampaignlevel',);
                    }

                }

            }

        }

        // app_users_renderloginform
        if ($pathinfo === '/user/login') {
            return array (  '_controller' => 'AppBundle\\Controller\\UsersController::renderLoginForm',  '_route' => 'app_users_renderloginform',);
        }

        // app_users_rendererrorpage
        if ($pathinfo === '/error') {
            return array (  '_controller' => 'AppBundle\\Controller\\UsersController::renderErrorPage',  '_route' => 'app_users_rendererrorpage',);
        }

        if (0 === strpos($pathinfo, '/user')) {
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

            // pageAccess
            if (0 === strpos($pathinfo, '/manage-users/page-access') && preg_match('#^/manage\\-users/page\\-access(?:/(?P<uid>[^/]++)(?:/(?P<page>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pageAccess')), array (  'uid' => NULL,  'page' => NULL,  '_controller' => 'AppBundle\\Controller\\UsersController::getAccessiblePagesAction',));
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

                if (0 === strpos($pathinfo, '/api/voluum/get-')) {
                    // voluumGetCountries
                    if ($pathinfo === '/api/voluum/get-countries') {
                        return array (  'sessionId' => NULL,  '_controller' => 'AppBundle\\Controller\\VoluumApiController::voluumGetCountriesAction',  '_route' => 'voluumGetCountries',);
                    }

                    // voluumGetAffiliateNetworks
                    if ($pathinfo === '/api/voluum/get-affiliate-networks') {
                        return array (  'sessionId' => NULL,  '_controller' => 'AppBundle\\Controller\\VoluumApiController::voluumGetAffiliateNetworksAction',  '_route' => 'voluumGetAffiliateNetworks',);
                    }

                    // voluumGetTrafficSource
                    if ($pathinfo === '/api/voluum/get-traffic-source') {
                        return array (  'sessionId' => NULL,  '_controller' => 'AppBundle\\Controller\\VoluumApiController::voluumGetTrafficSourceAction',  '_route' => 'voluumGetTrafficSource',);
                    }

                    // voluumGetFlow
                    if ($pathinfo === '/api/voluum/get-flow') {
                        return array (  'sessionId' => NULL,  '_controller' => 'AppBundle\\Controller\\VoluumApiController::voluumGetFlowAction',  '_route' => 'voluumGetFlow',);
                    }

                    // voluumGetDomain
                    if ($pathinfo === '/api/voluum/get-domain') {
                        return array (  'sessionId' => NULL,  '_controller' => 'AppBundle\\Controller\\VoluumApiController::voluumGetDomainAction',  '_route' => 'voluumGetDomain',);
                    }

                }

                // voluumPutLander
                if ($pathinfo === '/api/voluum/put-lander/{$url}/{$query}/{$sessionId}') {
                    return array (  'url' => NULL,  'query' => NULL,  'sessionId' => NULL,  '_controller' => 'AppBundle\\Controller\\VoluumApiController::voluumPutLanderAction',  '_route' => 'voluumPutLander',);
                }

                // voluumGetLander
                if ($pathinfo === '/api/voluum/get-offer/{$offerId}') {
                    return array (  'offerId' => NULL,  '_controller' => 'AppBundle\\Controller\\VoluumApiController::voluumGetOfferAction',  '_route' => 'voluumGetLander',);
                }

                // voluumPutOffer
                if ($pathinfo === '/api/voluum/put-offer/{$url}/{$query}/{$sessionId}') {
                    return array (  'url' => NULL,  'query' => NULL,  'sessionId' => NULL,  '_controller' => 'AppBundle\\Controller\\VoluumApiController::voluumPutOfferAction',  '_route' => 'voluumPutOffer',);
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
