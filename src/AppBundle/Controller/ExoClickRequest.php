<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 10/17/2016
 * Time: 10:47 PM
 */


class ExoClickRequest {
    /**
     * @var resource
     */
    protected $_request;

    /**
     * @var integer
     */
    protected $_method;

    /**
     * @var string
     */
    protected $_url;

    /**
     * @var array
     */
    protected $_headers = array(
        'Content-type: application/json'
    );

    /**
     * @var string|array
     */
    protected $_params;

    /**
     * @var object Response
     */
    protected $_reponse;

    /**
     * Constructor
     *
     * @param   string      $url
     * @param   string      $method
     * @param   array       $params
     */
    public function __construct($url, $method, $params = array()) {

        $this->_url = $url;

        // Set the method
        $this->_method = $method;

        // Set the params
        $this->_params = $params;
    }

    /**
     * Determine the Request method
     *
     * @param   string  $method
     */
    private function setMethod() {

        switch($this->_method) {
            case 'GET':
                break;
            case 'POST':
                curl_setopt($this->_request, CURLOPT_POST, 1);
                break;
            case 'PUT':
                curl_setopt($this->_request, CURLOPT_CUSTOMREQUEST, 'PUT');
                break;
            case 'DELETE':
                curl_setopt($this->_request, CURLOPT_CUSTOMREQUEST, 'DELETE');
                break;
        }
    }

    /**
     * Add authorization header
     *
     * @param   string  $type
     * @param   string  $token
     */
    public function setAuthorizationHeader($type, $token) {

        $authorization = $type . ' ' . $token;

        $this->_headers[] = 'Authorization: ' . $authorization;
    }

    /**
     * Add body to request
     */
    private function addBody() {

        if($this->_method != 'GET' && empty($this->_params) == false) {

            if(is_array($this->_params)) {
                // JSON Encode the array
                $this->_params = json_encode($this->_params);
            }

            curl_setopt($this->_request, CURLOPT_POSTFIELDS, $this->_params);

            // Add a content-length header
            $this->_headers[] = 'Content-length: ' . strlen($this->_params);
        }
    }

    /**
     * Add a query string to the request
     */
    private function addQueryString() {

        if($this->_method == 'GET' && is_array($this->_params) && count($this->_params) > 0) {

            $query_string = '?';

            foreach($this->_params as $param => $value) {

                $query_string = $query_string . $param . '=' . $value . '&';
            }

            trim($query_string, '&');

            $this->_url = $this->_url . $query_string;
        }
        else {

            if(is_array($this->_params) && count($this->_params) > 0 && strpos($this->_url, '{') !== false) {
                // Pattern match params against the url
                foreach($this->_params as $param => $value) {
                    $this->_url = preg_replace('/{' . $param . '}/', $value, $this->_url);
                }
            }
        }
    }

    /**
     * Send the request
     */
    public function send() {

        // Initialise cUrl request
        $this->_request = curl_init();

        // Return the response as a string
        curl_setopt($this->_request, CURLOPT_RETURNTRANSFER, 1);

        // Add a query string
        $this->addQueryString();

        // Set the URL
        curl_setopt($this->_request, CURLOPT_URL, $this->_url);

        // Set request method
        $this->setMethod();

        // Add a body
        $this->addBody();

        if(empty($this->_headers) == false) {
            // Set the headers
            curl_setopt($this->_request, CURLOPT_HTTPHEADER, $this->_headers);
        }

        // Disable SSL checks
        curl_setopt($this->_request, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($this->_request, CURLOPT_SSL_VERIFYHOST, false);

        // Send the request and store the body
        $this->_response = new Response(curl_exec($this->_request));

        // Set the status code
        $this->_response->setStatusCode(curl_getinfo($this->_request, CURLINFO_HTTP_CODE));

        // Close the connection
        curl_close($this->_request);
    }

    /**
     * Get the response
     *
     * @return object
     */
    public function getResponse() {

        return $this->_response;
    }
}

class Response {

    /**
     * @var array
     */
    protected $_reason_phrases = array(
        //Informational 1xx
        100 => "Continue",
        101 => "Switching Protocols",

        // Successful 2xx
        200 => "OK",
        201 => "Created",
        202 => "Accepted",
        203 => "Non-Authoritative Information",
        204 => "No Content",
        205 => "Reset Content",
        206 => "Partial Content",

        // Redirection 3xx
        300 => "Multiple Choices",
        301 => "Moved Permanently",
        302 => "Found",
        303 => "See Other",
        304 => "Not Modified",
        305 => "Use Proxy",
        306 => "(Unused)",
        307 => "Temporary Redirect",

        // Client Error 4xx
        400 => "Bad Request",
        401 => "Unauthorized",
        402 => "Payment Required",
        403 => "Forbidden",
        404 => "Not Found",
        405 => "Method Not Allowed",
        406 => "Not Acceptable",
        407 => "Proxy Authentication Required",
        408 => "Request Timeout",
        409 => "Conflict",
        410 => "Gone",
        411 => "Length Required",
        412 => "Precondition Failed",
        413 => "Request Entity Too Large",
        414 => "Request-URI Too Long",
        415 => "Unsupported Media Type",
        416 => "Requested Range Not Satisfiable",
        417 => "Expectation Failed",

        // Server Error 5xx
        500 => "Internal Server Error",
        501 => "Not Implemented",
        502 => "Bad Gateway",
        503 => "Service Unavailable",
        504 => "Gateway Timeout",
        505 => "HTTP Version Not Supported"
    );

    /**
     * @var integer
     */
    protected $_status_code;

    /**
     * @var string
     */
    protected $_body;

    /**
     * Constructor
     *
     * @param   string      $body
     */
    public function __construct($body) {

        $this->_body = $body;
    }

    /**
     * Constructor
     *
     * @param   string      $status_code
     */
    public function setStatusCode($status_code) {

        $this->_status_code = $status_code;
    }

    /**
     * Get status code
     *
     * @return  integer
     */
    public function getStatusCode() {

        return $this->_status_code;
    }

    /**
     * Get body
     *
     * @return  string
     */
    public function getBody() {

        return $this->_body;
    }

    /**
     * Get body JSON Decoded
     *
     * @return  object|null
     */
    public function getBodyDecoded() {

        return json_decode($this->_body);
    }

    /**
     * Get reason phrase
     *
     * @return string|boolean
     */
    public function getReasonPhrase() {

        if(array_key_exists($this->_status_code, $this->_reason_phrases)) {

            return $this->_reason_phrases[$this->_status_code];
        }
        else {

            return false;
        }
    }

}