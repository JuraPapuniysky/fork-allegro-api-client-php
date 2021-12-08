<?php
/**
 * BillingApi
 * PHP version 5
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Allegro REST API
 *
 * https://developer.allegro.pl/about
 *
 * The version of the OpenAPI document: latest
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AllegroApi\Client;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use AllegroApi\ApiException;
use AllegroApi\Configuration;
use AllegroApi\HeaderSelector;
use AllegroApi\ObjectSerializer;

/**
 * BillingApi Class Doc Comment
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BillingApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getBillingEntries
     *
     * Get a list of billing entries
     *
     * @param  \DateTime $occurred_at_gte Date from which billing entries are filtered. If occurredAt.lte is also set, occurredAt.gte cannot be later. (optional)
     * @param  \DateTime $occurred_at_lte Date to which billing entries are filtered. If occurredAt.gte is also set, occurredAt.lte cannot be earlier. (optional)
     * @param  string[] $type_id List of billing types by which billing entries are filtered. (optional)
     * @param  string $offer_id Offer ID by which billing entries are filtered. (optional)
     * @param  int $limit Number of returned operations. (optional, default to 100)
     * @param  int $offset Index of the first returned payment operation from all search results. (optional, default to 0)
     *
     * @throws \AllegroApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object|\AllegroApi\Model\AuthError|\AllegroApi\Model\ErrorsHolder|\AllegroApi\Model\ErrorsHolder
     */
    public function getBillingEntries($occurred_at_gte = null, $occurred_at_lte = null, $type_id = null, $offer_id = null, $limit = 100, $offset = 0)
    {
        list($response) = $this->getBillingEntriesWithHttpInfo($occurred_at_gte, $occurred_at_lte, $type_id, $offer_id, $limit, $offset);
        return $response;
    }

    /**
     * Operation getBillingEntriesWithHttpInfo
     *
     * Get a list of billing entries
     *
     * @param  \DateTime $occurred_at_gte Date from which billing entries are filtered. If occurredAt.lte is also set, occurredAt.gte cannot be later. (optional)
     * @param  \DateTime $occurred_at_lte Date to which billing entries are filtered. If occurredAt.gte is also set, occurredAt.lte cannot be earlier. (optional)
     * @param  string[] $type_id List of billing types by which billing entries are filtered. (optional)
     * @param  string $offer_id Offer ID by which billing entries are filtered. (optional)
     * @param  int $limit Number of returned operations. (optional, default to 100)
     * @param  int $offset Index of the first returned payment operation from all search results. (optional, default to 0)
     *
     * @throws \AllegroApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object|\AllegroApi\Model\AuthError|\AllegroApi\Model\ErrorsHolder|\AllegroApi\Model\ErrorsHolder, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBillingEntriesWithHttpInfo($occurred_at_gte = null, $occurred_at_lte = null, $type_id = null, $offer_id = null, $limit = 100, $offset = 0)
    {
        $request = $this->getBillingEntriesRequest($occurred_at_gte, $occurred_at_lte, $type_id, $offer_id, $limit, $offset);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('object' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'object', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\AllegroApi\Model\AuthError' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\AllegroApi\Model\AuthError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 406:
                    if ('\AllegroApi\Model\ErrorsHolder' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\AllegroApi\Model\ErrorsHolder', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\AllegroApi\Model\ErrorsHolder' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\AllegroApi\Model\ErrorsHolder', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'object';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AllegroApi\Model\AuthError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AllegroApi\Model\ErrorsHolder',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AllegroApi\Model\ErrorsHolder',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getBillingEntriesAsync
     *
     * Get a list of billing entries
     *
     * @param  \DateTime $occurred_at_gte Date from which billing entries are filtered. If occurredAt.lte is also set, occurredAt.gte cannot be later. (optional)
     * @param  \DateTime $occurred_at_lte Date to which billing entries are filtered. If occurredAt.gte is also set, occurredAt.lte cannot be earlier. (optional)
     * @param  string[] $type_id List of billing types by which billing entries are filtered. (optional)
     * @param  string $offer_id Offer ID by which billing entries are filtered. (optional)
     * @param  int $limit Number of returned operations. (optional, default to 100)
     * @param  int $offset Index of the first returned payment operation from all search results. (optional, default to 0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBillingEntriesAsync($occurred_at_gte = null, $occurred_at_lte = null, $type_id = null, $offer_id = null, $limit = 100, $offset = 0)
    {
        return $this->getBillingEntriesAsyncWithHttpInfo($occurred_at_gte, $occurred_at_lte, $type_id, $offer_id, $limit, $offset)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getBillingEntriesAsyncWithHttpInfo
     *
     * Get a list of billing entries
     *
     * @param  \DateTime $occurred_at_gte Date from which billing entries are filtered. If occurredAt.lte is also set, occurredAt.gte cannot be later. (optional)
     * @param  \DateTime $occurred_at_lte Date to which billing entries are filtered. If occurredAt.gte is also set, occurredAt.lte cannot be earlier. (optional)
     * @param  string[] $type_id List of billing types by which billing entries are filtered. (optional)
     * @param  string $offer_id Offer ID by which billing entries are filtered. (optional)
     * @param  int $limit Number of returned operations. (optional, default to 100)
     * @param  int $offset Index of the first returned payment operation from all search results. (optional, default to 0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBillingEntriesAsyncWithHttpInfo($occurred_at_gte = null, $occurred_at_lte = null, $type_id = null, $offer_id = null, $limit = 100, $offset = 0)
    {
        $returnType = 'object';
        $request = $this->getBillingEntriesRequest($occurred_at_gte, $occurred_at_lte, $type_id, $offer_id, $limit, $offset);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getBillingEntries'
     *
     * @param  \DateTime $occurred_at_gte Date from which billing entries are filtered. If occurredAt.lte is also set, occurredAt.gte cannot be later. (optional)
     * @param  \DateTime $occurred_at_lte Date to which billing entries are filtered. If occurredAt.gte is also set, occurredAt.lte cannot be earlier. (optional)
     * @param  string[] $type_id List of billing types by which billing entries are filtered. (optional)
     * @param  string $offer_id Offer ID by which billing entries are filtered. (optional)
     * @param  int $limit Number of returned operations. (optional, default to 100)
     * @param  int $offset Index of the first returned payment operation from all search results. (optional, default to 0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getBillingEntriesRequest($occurred_at_gte = null, $occurred_at_lte = null, $type_id = null, $offer_id = null, $limit = 100, $offset = 0)
    {
        if ($limit !== null && $limit > 100) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling BillingApi.getBillingEntries, must be smaller than or equal to 100.');
        }
        if ($limit !== null && $limit < 1) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling BillingApi.getBillingEntries, must be bigger than or equal to 1.');
        }

        if ($offset !== null && $offset > 1000) {
            throw new \InvalidArgumentException('invalid value for "$offset" when calling BillingApi.getBillingEntries, must be smaller than or equal to 1000.');
        }
        if ($offset !== null && $offset < 0) {
            throw new \InvalidArgumentException('invalid value for "$offset" when calling BillingApi.getBillingEntries, must be bigger than or equal to 0.');
        }


        $resourcePath = '/billing/billing-entries';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($occurred_at_gte !== null) {
            if('form' === 'form' && is_array($occurred_at_gte)) {
                foreach($occurred_at_gte as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['occurredAt.gte'] = $occurred_at_gte;
            }
        }
        // query params
        if ($occurred_at_lte !== null) {
            if('form' === 'form' && is_array($occurred_at_lte)) {
                foreach($occurred_at_lte as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['occurredAt.lte'] = $occurred_at_lte;
            }
        }
        // query params
        if ($type_id !== null) {
            if('form' === 'form' && is_array($type_id)) {
                foreach($type_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['type.id'] = $type_id;
            }
        }
        // query params
        if ($offer_id !== null) {
            if('form' === 'form' && is_array($offer_id)) {
                foreach($offer_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['offer.id'] = $offer_id;
            }
        }
        // query params
        if ($limit !== null) {
            if('form' === 'form' && is_array($limit)) {
                foreach($limit as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['limit'] = $limit;
            }
        }
        // query params
        if ($offset !== null) {
            if('form' === 'form' && is_array($offset)) {
                foreach($offset as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['offset'] = $offset;
            }
        }



        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.allegro.public.v1+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.allegro.public.v1+json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
