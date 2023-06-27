# Horrentotaal\HamstraApi\OrderApi

All URIs are relative to *https://staging.api.hamstraonline.vmcluster.nl*

Method | HTTP request | Description
------------- | ------------- | -------------
[**orderCreateOrderAsync**](OrderApi.md#orderCreateOrderAsync) | **POST** /api/order | Creates the order
[**orderOrderQuotationAsync**](OrderApi.md#orderOrderQuotationAsync) | **PUT** /api/order/orderQuotation | Creates an order for the given quotation
[**orderSaveAsQuotation**](OrderApi.md#orderSaveAsQuotation) | **PUT** /api/order/saveAsQuotation | Creates a quotation for the given order
[**orderSaveOrderAsync**](OrderApi.md#orderSaveOrderAsync) | **PUT** /api/order/saveOrder | Creates or updates the order
[**orderUpdateOrderAsync**](OrderApi.md#orderUpdateOrderAsync) | **PUT** /api/order | Updates the order
[**orderValidateAsync**](OrderApi.md#orderValidateAsync) | **POST** /api/order/validate | Validate the order


# **orderCreateOrderAsync**
> int orderCreateOrderAsync($order_request)

Creates the order

Sample order validation errors:                    POST /order      [          {             \"key\": \"Width\",             \"value\": [                 {                     \"message\": \"The value '1200' is smaller than the minimum value '1400'\"                 }             ]          }      ]                Sample order request:                    POST /order      {          \"salesReference1\": \"Webshop order #1\",          \"salesReference2\": null,          \"commissionName\": \"\",          \"purchaseOrder\": \"1\",          \"deliveryName\": \"Company name\",          \"deliveryStreet\": \"dorpsplein 1\",          \"deliveryZipCode\": \"1234AB\",          \"deliveryCity\": \"Rotterdam\",          \"deliveryCountry\": \"Netherlands\",          \"deliveryEmail\": \"name@email.nl\",          \"deliveryPhone\": \"0123456789\",          \"buffer\": 0, // The time in hours the order will not be picked up (order can be changed)          \"MailHTML\": \"Thank you for your order...\" // The mail template to be sent to the customer          \"orderLines\": [              {                  \"quantityOrdered\": 1.0,                  \"productID\": 101,                  \"Height\": 1500, // Deprecated,                  \"Width\": 1200, // Deprecated,                  \"Color\": \"9010\", // Deprecated                  \"customerDescription\": \"Livingroom right window\",                  \"customerReference\": \"John Doe\",                  \"orderLineOptions\": [                      {                          \"option\": \"Height\"                          \"optionId\": 1 // Deprecated,                          \"value\": 1500,                      },                      {                          \"option\": \"Width\"                          \"optionId\": 2 // Deprecated,                          \"value\": 1200,                      }                  ]              }          ]      }

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Horrentotaal\HamstraApi\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Horrentotaal\HamstraApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new Horrentotaal\HamstraApi\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_request = new \Horrentotaal\HamstraApi\Model\HamstraAPIModelsOrdersOrderRequest(); // \Horrentotaal\HamstraApi\Model\HamstraAPIModelsOrdersOrderRequest | The order to create

try {
    $result = $apiInstance->orderCreateOrderAsync($order_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderCreateOrderAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_request** | [**\Horrentotaal\HamstraApi\Model\HamstraAPIModelsOrdersOrderRequest**](../Model/HamstraAPIModelsOrdersOrderRequest.md)| The order to create |

### Return type

**int**

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderOrderQuotationAsync**
> int orderOrderQuotationAsync($order_quotation)

Creates an order for the given quotation

Sample order validation errors:                    PUT /order/orderQuotation      [          {             \"key\": \"Width\",             \"value\": [                 {                     \"message\": \"The value '1200' is smaller than the minimum value '1400'\"                 }             ]          }      ]                Sample order request:                    PUT /order/orderQuotation      {          \"quotationIds\": [1, 2],          \"commissionName\": \"\",          \"purchaseOrder\": \"1\",          \"homeDelivery\": true,          \"deliveryName\": \"Company name\",          \"deliveryStreet\": \"dorpsplein 1\",          \"deliveryZipCode\": \"1234AB\",          \"deliveryCity\": \"Rotterdam\",          \"deliveryCountry\": \"Netherlands\",          \"deliveryEmail\": \"name@email.nl\",          \"deliveryPhone\": \"0123456789\"      }

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Horrentotaal\HamstraApi\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Horrentotaal\HamstraApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new Horrentotaal\HamstraApi\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_quotation = new \Horrentotaal\HamstraApi\Model\HamstraAPIModelsOrdersOrderQuotation(); // \Horrentotaal\HamstraApi\Model\HamstraAPIModelsOrdersOrderQuotation | The quotations to order

try {
    $result = $apiInstance->orderOrderQuotationAsync($order_quotation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderOrderQuotationAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_quotation** | [**\Horrentotaal\HamstraApi\Model\HamstraAPIModelsOrdersOrderQuotation**](../Model/HamstraAPIModelsOrdersOrderQuotation.md)| The quotations to order |

### Return type

**int**

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderSaveAsQuotation**
> int orderSaveAsQuotation($order_request)

Creates a quotation for the given order

Sample order request:                    PUT /order/saveAsQuotation      {          \"salesReference1\": \"Webshop order #1\",          \"salesReference2\": null,          \"commissionName\": \"\",          \"purchaseOrder\": \"1\",          \"deliveryName\": \"Company name\",          \"deliveryStreet\": \"dorpsplein 1\",          \"deliveryZipCode\": \"1234AB\",          \"deliveryCity\": \"Rotterdam\",          \"deliveryCountry\": \"Netherlands\",          \"deliveryEmail\": \"name@email.nl\",          \"deliveryPhone\": \"0123456789\",          \"buffer\": 0, // The time in hours the order will not be picked up (order can be changed)          \"MailHTML\": \"Thank you for your order...\" // The mail template to be sent to the customer          \"orderLines\": [              {                  \"quantityOrdered\": 1.0,                  \"productID\": 101,                  \"Height\": 1500, // Deprecated,                  \"Width\": 1200, // Deprecated,                  \"Color\": \"9010\", // Deprecated                  \"customerDescription\": \"Livingroom right window\",                  \"customerReference\": \"John Doe\",                  \"orderLineOptions\": [                      {                          \"option\": \"Height\"                          \"optionId\": 1 // Deprecated,                          \"value\": 1500,                      },                      {                          \"option\": \"Width\"                          \"optionId\": 2 // Deprecated,                          \"value\": 1200,                      }                  ]              }          ]      }

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Horrentotaal\HamstraApi\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Horrentotaal\HamstraApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new Horrentotaal\HamstraApi\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_request = new \Horrentotaal\HamstraApi\Model\HamstraAPIModelsOrdersOrderRequest(); // \Horrentotaal\HamstraApi\Model\HamstraAPIModelsOrdersOrderRequest | The order to quote

try {
    $result = $apiInstance->orderSaveAsQuotation($order_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderSaveAsQuotation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_request** | [**\Horrentotaal\HamstraApi\Model\HamstraAPIModelsOrdersOrderRequest**](../Model/HamstraAPIModelsOrdersOrderRequest.md)| The order to quote |

### Return type

**int**

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderSaveOrderAsync**
> int orderSaveOrderAsync($order_request)

Creates or updates the order

**Use /api/order instead**                Sample order validation errors:                    POST /order      [          {             \"key\": \"Width\",             \"value\": [                 {                     \"message\": \"The value '1200' is smaller than the minimum value '1400'\"                 }             ]          }      ]                Sample order request:                    POST /order      {          \"salesReference1\": \"Webshop order #1\",          \"salesReference2\": null,          \"commissionName\": \"\",          \"purchaseOrder\": \"1\",          \"deliveryName\": \"Company name\",          \"deliveryStreet\": \"dorpsplein 1\",          \"deliveryZipCode\": \"1234AB\",          \"deliveryCity\": \"Rotterdam\",          \"deliveryCountry\": \"Netherlands\",          \"deliveryEmail\": \"name@email.nl\",          \"deliveryPhone\": \"0123456789\",          \"buffer\": 0, // The time in hours the order will not be picked up (order can be changed)          \"MailHTML\": \"Thank you for your order...\" // The mail template to be sent to the customer          \"orderLines\": [              {                  \"quantityOrdered\": 1.0,                  \"productID\": 101,                  \"Height\": 1500, // Deprecated,                  \"Width\": 1200, // Deprecated,                  \"Color\": \"9010\", // Deprecated                  \"customerDescription\": \"Livingroom right window\",                  \"customerReference\": \"John Doe\",                  \"orderLineOptions\": [                      {                          \"option\": \"Height\"                          \"optionId\": 1 // Deprecated,                          \"value\": 1500,                      },                      {                          \"option\": \"Width\"                          \"optionId\": 2 // Deprecated,                          \"value\": 1200,                      }                  ]              }          ]      }

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Horrentotaal\HamstraApi\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Horrentotaal\HamstraApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new Horrentotaal\HamstraApi\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_request = new \Horrentotaal\HamstraApi\Model\HamstraAPIModelsOrdersOrderRequest(); // \Horrentotaal\HamstraApi\Model\HamstraAPIModelsOrdersOrderRequest | The order to create/update

try {
    $result = $apiInstance->orderSaveOrderAsync($order_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderSaveOrderAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_request** | [**\Horrentotaal\HamstraApi\Model\HamstraAPIModelsOrdersOrderRequest**](../Model/HamstraAPIModelsOrdersOrderRequest.md)| The order to create/update |

### Return type

**int**

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderUpdateOrderAsync**
> int orderUpdateOrderAsync($order_request)

Updates the order

Sample order validation errors:                    PUT /order      [          {             \"key\": \"Width\",             \"value\": [                 {                     \"message\": \"The value '1200' is smaller than the minimum value '1400'\"                 }             ]          }      ]                Sample order request:                    PUT /order      {          \"orderId\": 1          \"salesReference1\": \"Webshop order #1\",          \"salesReference2\": null,          \"commissionName\": \"\",          \"purchaseOrder\": \"1\",          \"deliveryName\": \"Company name\",          \"deliveryStreet\": \"dorpsplein 1\",          \"deliveryZipCode\": \"1234AB\",          \"deliveryCity\": \"Rotterdam\",          \"deliveryCountry\": \"Netherlands\",          \"deliveryEmail\": \"name@email.nl\",          \"deliveryPhone\": \"0123456789\",          \"buffer\": 0, // The time in hours the order will not be picked up (order can be changed)          \"MailHTML\": \"Thank you for your order...\" // The mail template to be sent to the customer          \"orderLines\": [              {                  \"quantityOrdered\": 1.0,                  \"productID\": 101,                  \"Height\": 1500, // Deprecated,                  \"Width\": 1200, // Deprecated,                  \"Color\": \"9010\", // Deprecated                  \"customerDescription\": \"Livingroom right window\",                  \"customerReference\": \"John Doe\",                  \"orderLineOptions\": [                      {                          \"option\": \"Height\"                          \"optionId\": 1 // Deprecated,                          \"value\": 1500,                      },                      {                          \"option\": \"Width\"                          \"optionId\": 2 // Deprecated,                          \"value\": 1200,                      }                  ]              }          ]      }

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Horrentotaal\HamstraApi\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Horrentotaal\HamstraApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new Horrentotaal\HamstraApi\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_request = new \Horrentotaal\HamstraApi\Model\HamstraAPIModelsOrdersOrderRequest(); // \Horrentotaal\HamstraApi\Model\HamstraAPIModelsOrdersOrderRequest | The order to update

try {
    $result = $apiInstance->orderUpdateOrderAsync($order_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderUpdateOrderAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_request** | [**\Horrentotaal\HamstraApi\Model\HamstraAPIModelsOrdersOrderRequest**](../Model/HamstraAPIModelsOrdersOrderRequest.md)| The order to update |

### Return type

**int**

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderValidateAsync**
> \Horrentotaal\HamstraApi\Model\HamstraAPIModelsOrdersOrderRequest orderValidateAsync($order_request)

Validate the order

Sample order validation errors:                    POST /order/validate      [          {             \"key\": \"Width\",             \"value\": [                 {                     \"message\": \"The value '1200' is smaller thant the minimum value '1400'\"                 }             ]          }      ]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Horrentotaal\HamstraApi\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Horrentotaal\HamstraApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new Horrentotaal\HamstraApi\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_request = new \Horrentotaal\HamstraApi\Model\HamstraAPIModelsOrdersOrderRequest(); // \Horrentotaal\HamstraApi\Model\HamstraAPIModelsOrdersOrderRequest | 

try {
    $result = $apiInstance->orderValidateAsync($order_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderValidateAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_request** | [**\Horrentotaal\HamstraApi\Model\HamstraAPIModelsOrdersOrderRequest**](../Model/HamstraAPIModelsOrdersOrderRequest.md)|  |

### Return type

[**\Horrentotaal\HamstraApi\Model\HamstraAPIModelsOrdersOrderRequest**](../Model/HamstraAPIModelsOrdersOrderRequest.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

