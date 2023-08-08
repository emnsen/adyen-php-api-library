<?php
/**
 * Adyen Checkout API
 *
 * The version of the OpenAPI document: 70
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Adyen\Service\Checkout;

use Adyen\AdyenException;
use Adyen\Client;
use Adyen\Service;
use Adyen\Model\Checkout\ObjectSerializer;

class UtilityApi extends Service
{
    /**
     * @var array|string|string[]
     */
    private $baseURL;

    /**
     * UtilityApi constructor.
     *
     * @param \Adyen\Client $client
     * @throws AdyenException
     */
    public function __construct(Client $client)
    {
        parent::__construct($client);

        // Create the baseUrl based on live/test and optional live-url-prefix
        $this->baseURL = $this->createBaseUrl("https://checkout-test.adyen.com/v70");
    }

    /**
    * Get an Apple Pay session
    *
    * @param \Adyen\Model\Checkout\ApplePaySessionRequest $applePaySessionRequest
    * @param array|null $requestOptions
    * @return \Adyen\Model\Checkout\ApplePaySessionResponse
    * @throws AdyenException
    */
    public function getApplePaySession(\Adyen\Model\Checkout\ApplePaySessionRequest $applePaySessionRequest, array $requestOptions = null): \Adyen\Model\Checkout\ApplePaySessionResponse
    {
        $endpoint = $this->baseURL . "/applePay/sessions";
        $response = $this->requestHttp($endpoint, strtolower('POST'), (array) $applePaySessionRequest->jsonSerialize(), $requestOptions);
        return ObjectSerializer::deserialize($response, \Adyen\Model\Checkout\ApplePaySessionResponse::class);
    }

    /**
    * Create originKey values for domains
    *
    * @param \Adyen\Model\Checkout\UtilityRequest $utilityRequest
    * @param array|null $requestOptions
    * @return \Adyen\Model\Checkout\UtilityResponse
    * @throws AdyenException
    */
    public function originKeys(\Adyen\Model\Checkout\UtilityRequest $utilityRequest, array $requestOptions = null): \Adyen\Model\Checkout\UtilityResponse
    {
        $endpoint = $this->baseURL . "/originKeys";
        $response = $this->requestHttp($endpoint, strtolower('POST'), (array) $utilityRequest->jsonSerialize(), $requestOptions);
        return ObjectSerializer::deserialize($response, \Adyen\Model\Checkout\UtilityResponse::class);
    }
}
