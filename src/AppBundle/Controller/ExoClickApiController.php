<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 2/21/2017
 * Time: 4:56 PM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use AppBundle\Controller\ExoClickRequest;

class ExoClickApiController extends Controller{


    public function exoClickLoginAction($token = null){

        $url = 'https://api.exoclick.com/v1/login';

        $params = array(
            'api_token'  => $token
        );

        // Create a new Request object
        $request = new  ExoClickRequest($url, 'POST', $params);

        // Send the request
        $request->send();

        // Get the Response object
        $response = $request->getResponse();

        if($response->getStatusCode() == 200) {

            // Retrieve the session token details
            $return = array($sessionToken = $response->getBodyDecoded(),  $response->getStatusCode(), $response->getReasonPhrase(), $response->getBody());

            return new Response(json_encode($return));
        }
        else {

            $errorResponse[] = $response->getStatusCode() . PHP_EOL;
            $errorResponse[] = $response->getReasonPhrase() . PHP_EOL;
            $errorResponse[] = $response->getBody() . PHP_EOL;

            return new Response(json_encode($errorResponse));
        }

    }
    /**
     * @Route("/api/exoclick/get-campaigns/{$token}", name="exoClickGetCampaigns")
     */
    public function exoClickGetCampaignsAction($token = null){

        $url = 'https://api.exoclick.com/v1/campaigns';

        // Specify the campaign id
        $params = array('limit' => 1000);

        $request = new  ExoClickRequest($url, 'GET', $params);
        $type = 'Bearer';

        // Set the Authorization Header, retrieved from earlier Login request
        $request->setAuthorizationHeader($type, $token);

        // Send the request
        $request->send();

        // Get the response object
        $response = $request->getResponse();


        if($response->getStatusCode() == 200) {

            $statistics = $response->getBodyDecoded();

            foreach($statistics->result as $statistic) {

                $data[] =  array('id' => $statistic->id,
                    'name' => $statistic->name,
                    'max_daily_budget_reset' => $statistic->max_daily_budget_reset,
                    'checked' => $statistic->checked,
                    'idgroup' => $statistic->idgroup,
                    'media_type' => $statistic->media_type,
                    'pricing_model' => $statistic->pricing_model,
                    'size' => $statistic->size,
                    'type' => $statistic->type,
                    'rejecting_reason' => $statistic->rejecting_reason,
                    'parting_timezone' => $statistic->parting_timezone,
                    'percentage' => $statistic->percentage,
                    'capping' => $statistic->capping,
                    'status' => $statistic->status,
                    'price' => $statistic->price);
            }

            return new Response(json_encode($data));


        }
        else {
            // Campaign statistics not found
            $errorResponse[] = $response->getStatusCode() . PHP_EOL;
            $errorResponse[] = $response->getReasonPhrase() . PHP_EOL;
            $errorResponse[] = $response->getBody() . PHP_EOL;

            return new Response(json_encode(array('error' => $errorResponse)));
        }



    }

}


