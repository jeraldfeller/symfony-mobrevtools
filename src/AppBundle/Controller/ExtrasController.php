<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 4/6/2017
 * Time: 10:07 AM
 */
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Tools\Pagination\Paginator;
class ExtrasController extends Controller{
    /**
     * @Route("/tools/ip-compiler", name="ipCompile")
     */
    public function showIpCompileAction()
    {
        $isLoggedIn = $this->get('session')->get('isLoggedIn');
        if($isLoggedIn){
            $data16['data'] = array();
            $data24['data'] = array();
            file_put_contents("data_table_tmp_files/ip/16.txt", json_encode($data16, JSON_UNESCAPED_UNICODE));
            file_put_contents("data_table_tmp_files/ip/24.txt", json_encode($data24, JSON_UNESCAPED_UNICODE));
            return $this->render(
                'extras/ip-compile.html.twig', array('page' => 'IP Compiler')
            );
        }else{
            return $this->redirect('/user/login');
        }
    }
    /**
     * @Route("/extras/execute-compile-ip", name="executeIpCompile")
     */
    public function ipCompile()
    {
        $data = json_decode($_POST['param'], true);
        foreach($data as $row){
            $split = explode('.', $row['ip']);
            $ipMask = $split[0] . '.' . $split[1] . '.0.0/16';
            $ipMask24 = $split[0] . '.' . $split[1] . '.' . $split[2] . '.0/24';
            $mask16[$ipMask][] = array(1);
            $mask24[$ipMask24][] = array(1);
        }
        foreach($mask16 as $key => $value){
            $data16['data'][] = array(
                $key,
                count($value)
            );
        }
        foreach($mask24 as $key => $value){
            $data24['data'][] = array(
                $key,
                count($value)
            );
        }
        file_put_contents("data_table_tmp_files/ip/16.txt", json_encode($data16, JSON_UNESCAPED_UNICODE));
        file_put_contents("data_table_tmp_files/ip/24.txt", json_encode($data24, JSON_UNESCAPED_UNICODE));
        return new Response(json_encode(true));
    }
	
	/**
     * @Route("/tools/adplexity", name="adplexity")
     */
    public function showAdplexityAction()
    {
        $isLoggedIn = $this->get('session')->get('isLoggedIn');
        if($isLoggedIn){
			$data['data']  = array();
					file_put_contents("data_table_tmp_files/adplexity/report.txt", json_encode($data, JSON_UNESCAPED_UNICODE));
			$countries = $this->getAdplexityCountries();
			$adTypes = $this->getAdplexityAdTypes();
			$networks = $this->getAdplexityNetworks();
			$sources = $this->getAdplexitySources();
			$options = array(
				'countries' => $countries,
				'adTypes' => $adTypes,
				'networks' => $networks,
				'sources' => $sources
			);
            return $this->render(
                'extras/adplexity.html.twig', array(
				'options' => $options,
				'page' => 'Adplexity')
            );
        }else{
            return $this->redirect('/user/login');
        }
    }
	
	
	/**
     * @Route("/extras/get-adplexity-report", name="getAdplexityReport")
     */
    public function getAdplexityReport()
    {
        $data = json_decode($_POST['param'], true);
		$url = 'https://mobile.adplexity.com/api/v1/top/'.$data['aggregation'].'?';
		$data['data']  = array();
		file_put_contents("data_table_tmp_files/adplexity/report.txt", json_encode($data, JSON_UNESCAPED_UNICODE));
		if($data['countries'] == 'all'){
			$countries = $this->getAdplexityCountries();
			$dataArray = array();
			foreach($countries as $country){
				
				$query = array(
					'metric' => $data['metric'],
					'date_range' => $data['dateRange'],
					'days_running' => $data['daysRunning'],
					'country' => $country['code'],
					'ad_type' => $data['adTypes'],
					'traffic_source' => $data['trafficSources'],
					'affiliate_network' => $data['affiliateNetworks'],
					'count' => $data['count']
				);
				
				$return = json_decode($this->forward('AppBundle:AdplexityApi:adplexityRequest', array('url' => $url,
				'query' => $query))->getContent(), true);
				
				if(!isset($return['errorMessage'])){
					if(count($return) > 0){
						switch($data['aggregation']){
							case 'tracking_domains':
								foreach($return['data'] as $row){
									if(isset($dataArray[$row['domain']])){
										$plus = $dataArray[$row['domain']]['count'];
										$dataArray[$row['domain']] = array(
										'count' =>  $row['count'] + $plus,
										'aggregationName' => $row['tracking_name']
									);	
									}else{
										
										$dataArray[$row['domain']] = array(
										'count' => $row['count'],
										'aggregationName' => $row['tracking_name']
									);	
									}
								}
							break;
							case 'lp_domains':
							
								foreach($return['data'] as $row){
									if(isset($dataArray[$row['domain']])){
										$plus = $dataArray[$row['domain']]['count'];
										$dataArray[$row['domain']] = array(
										'count' =>  $row['count'] + $plus,
										'aggregationName' => ''
									);	
									}else{
										
										$dataArray[$row['domain']] = array(
										'count' => $row['count'],
										'aggregationName' => ''
									);	
									}
								}
							break;
							case 'affiliate_domains':
						
								foreach($return['data'] as $row){
									if(isset($dataArray[$row['domain']])){
										$plus = $dataArray[$row['domain']]['count'];
										$dataArray[$row['domain']] = array(
										'count' =>  $row['count'] + $plus,
										'aggregationName' => $row['affiliate_name']
									);	
									}else{
										
										$dataArray[$row['domain']] = array(
										'count' => $row['count'],
										'aggregationName' => $row['affiliate_name']
									);	
									}
								}
							break;
							case 'offer_domains':
								foreach($return['data'] as $row){
									if(isset($dataArray[$row['domain']])){
											$plus = $dataArray[$row['domain']]['count'];
											$dataArray[$row['domain']] = array(
											'count' =>  $row['count'] + $plus,
											'aggregationName' => ''
										);	
										}else{
											
											$dataArray[$row['domain']] = array(
											'count' => $row['count'],
											'aggregationName' => ''
										);	
										}
								}
							break;
						}
						
						
					}else{
						$data['data']  = array();
					}
				}
				
		
			}
			
			foreach($dataArray as $key => $row){
				
				$data['data'][] = array(
										$key,
										$row['count'],
										$row['aggregationName']
					);
			}
			
			
			
			
		}else if(strpos($data['countries'], ',') != false){
			
			$countries = explode(',', $data['countries']);
			$dataArray = array();
			for($x = 0; $x < count($countries); $x++){
				$query = array(
					'metric' => $data['metric'],
					'date_range' => $data['dateRange'],
					'days_running' => $data['daysRunning'],
					'country' => $countries[$x],
					'ad_type' => $data['adTypes'],
					'traffic_source' => $data['trafficSources'],
					'affiliate_network' => $data['affiliateNetworks'],
					'count' => $data['count']
				);
				
				$return = json_decode($this->forward('AppBundle:AdplexityApi:adplexityRequest', array('url' => $url,
				'query' => $query))->getContent(), true);
				
				if(!isset($return['errorMessage'])){
					if(count($return) > 0){
						switch($data['aggregation']){
							case 'tracking_domains':
								foreach($return['data'] as $row){
									if(isset($dataArray[$row['domain']])){
										$plus = $dataArray[$row['domain']]['count'];
										$dataArray[$row['domain']] = array(
										'count' =>  $row['count'] + $plus,
										'aggregationName' => $row['tracking_name']
									);	
									}else{
										
										$dataArray[$row['domain']] = array(
										'count' => $row['count'],
										'aggregationName' => $row['tracking_name']
									);	
									}
								}
							break;
							case 'lp_domains':
							
								foreach($return['data'] as $row){
									if(isset($dataArray[$row['domain']])){
										$plus = $dataArray[$row['domain']]['count'];
										$dataArray[$row['domain']] = array(
										'count' =>  $row['count'] + $plus,
										'aggregationName' => ''
									);	
									}else{
										
										$dataArray[$row['domain']] = array(
										'count' => $row['count'],
										'aggregationName' => ''
									);	
									}
								}
							break;
							case 'affiliate_domains':
						
								foreach($return['data'] as $row){
									if(isset($dataArray[$row['domain']])){
										$plus = $dataArray[$row['domain']]['count'];
										$dataArray[$row['domain']] = array(
										'count' =>  $row['count'] + $plus,
										'aggregationName' => $row['affiliate_name']
									);	
									}else{
										
										$dataArray[$row['domain']] = array(
										'count' => $row['count'],
										'aggregationName' => $row['affiliate_name']
									);	
									}
								}
							break;
							case 'offer_domains':
							foreach($return['data'] as $row){
								if(isset($dataArray[$row['domain']])){
										$plus = $dataArray[$row['domain']]['count'];
										$dataArray[$row['domain']] = array(
										'count' =>  $row['count'] + $plus,
										'aggregationName' => ''
									);	
									}else{
										
										$dataArray[$row['domain']] = array(
										'count' => $row['count'],
										'aggregationName' => ''
									);	
									}
							}
							break;
						}
						
						
					}else{
						$data['data']  = array();
					}
				}
				
		
			}
			
			foreach($dataArray as $key => $row){
				
				$data['data'][] = array(
										$key,
										$row['count'],
										$row['aggregationName']
					);
			}
			
		}
		else{
			$countryQuery = $data['countries'];
			$query = array(
				'metric' => $data['metric'],
				'date_range' => $data['dateRange'],
				'days_running' => $data['daysRunning'],
				'country' => $countryQuery,
				'ad_type' => $data['adTypes'],
				'traffic_source' => $data['trafficSources'],
				'affiliate_network' => $data['affiliateNetworks'],
				'count' => $data['count']
			);
	
	
			$return = json_decode($this->forward('AppBundle:AdplexityApi:adplexityRequest', array('url' => $url,
				'query' => $query))->getContent(), true);
				
				if(!isset($return['errorMessage'])){
					if(count($return) > 0){
						switch($data['aggregation']){
							case 'tracking_domains':
								foreach($return['data'] as $row){
									$data['data'][] = array(
										$row['domain'],
										$row['count'],
										$row['tracking_name']
									);
								}
							break;
							case 'lp_domains':
								foreach($return as $row){
									$data['data'][] = array(
										$row['domain'],
										$row['count'],
										''
									);
								}
							break;
							case 'affiliate_domains':
								foreach($return as $row){
									$data['data'][] = array(
										$row['domain'],
										$row['count'],
										$row['affiliate_name']
									);
								}
							break;
							case 'offer_domains':
								foreach($return as $row){
									$data['data'][] = array(
										$row['domain'],
										$row['count'],
										''
									);
								}
							break;
						}
						
						
					}else{
						$data['data']  = array();
					}
				}
		}
		
		
			
		
		
		
		
        file_put_contents("data_table_tmp_files/adplexity/report.txt", json_encode($data, JSON_UNESCAPED_UNICODE));
        return new Response(json_encode(true));
    }
	
	public function getAdplexityCountries(){
		$url = 'https://mobile.adplexity.com/api/v1/countries';
		$query = array();
		return json_decode($this->forward('AppBundle:AdplexityApi:adplexityRequest', array('url' => $url,
            'query' => $query))->getContent(), true)['data'];	
	}
	
	public function getAdplexityAdTypes(){
		$url = 'https://mobile.adplexity.com/api/v1/ad_types';
		$query = array();
		return json_decode($this->forward('AppBundle:AdplexityApi:adplexityRequest', array('url' => $url,
            'query' => $query))->getContent(), true)['data'];	
	}
	
	public function getAdplexityNetworks(){
		$url = 'https://mobile.adplexity.com/api/v1/affiliate_networks';
		$query = array();
		return json_decode($this->forward('AppBundle:AdplexityApi:adplexityRequest', array('url' => $url,
            'query' => $query))->getContent(), true)['data'];	
	}
	
	public function getAdplexitySources(){
		$url = 'https://mobile.adplexity.com/api/v1/traffic_sources';
		$query = array();
		return json_decode($this->forward('AppBundle:AdplexityApi:adplexityRequest', array('url' => $url,
            'query' => $query))->getContent(), true)['data'];	
	}
}