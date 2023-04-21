# Swagger\Client\ProductApi

All URIs are relative to *https://refactor.api.hamstraonline.vmcluster.nl*

Method | HTTP request | Description
------------- | ------------- | -------------
[**productGetAvailableProducts**](ProductApi.md#productGetAvailableProducts) | **GET** /api/product | Get the available products for the authenticated user
[**productGetById**](ProductApi.md#productGetById) | **GET** /api/product/{productId} | Get the details of a given product
[**productGetBySku**](ProductApi.md#productGetBySku) | **GET** /api/product/sku/{sku} | Get the product by product code
[**productGetConfigurationAsync**](ProductApi.md#productGetConfigurationAsync) | **GET** /api/product/{productId}/configuration | Get the configuration of a given product
[**productGetConfigurationAsync_0**](ProductApi.md#productGetConfigurationAsync_0) | **POST** /api/product/{productId}/configuration | Get the configuration of a given product
[**productGetValidationMessagesAsync**](ProductApi.md#productGetValidationMessagesAsync) | **GET** /api/product/validationMessages | Get the product option validation messages


# **productGetAvailableProducts**
> \Swagger\Client\Model\Product[] productGetAvailableProducts()

Get the available products for the authenticated user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->productGetAvailableProducts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetAvailableProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Product[]**](../Model/Product.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetById**
> \Swagger\Client\Model\ProductDetail productGetById($product_id, $consumer_price, $include_wizard_items, $full_detail)

Get the details of a given product

When 'fullDetail' is true the product options will be included.  The product options contain NCALC expressions to determine if an option should be visible or not.                NCalc is a mathematical expressions evaluator in .NET. It is used to define validation rules and conditions for certain options. By evaluating the expressions provided in the product detail from the endpoint ‘GET /api/product/{productId}’ you can implement your own product configuration with up to date validation rules from Deli Home.  The ‘Validation’ property on the ‘option’ object is used to provide validation rules.  For example:                    if([Width] &lt; 500 || [Width] &gt; 2000, 'Width.MinMax;500;2000', '')                This validation checks if the ‘Width’ option provided in the configuration is between 500 and 2000. If not the validation message ‘Width.MinMax;500;2000’ is returned.The validation message can then be translated to ‘The {field} may not be smaller than {0} and larger than {1}’. Which internally in Deli Home will provide the following to the user: ‘The width may not be smaller than 500 and larger than 2000’. The translation must be implemented yourself when using this strategy.                The ‘Condition’ property on the ‘option’ and ‘value’ object is used to determine if the option or value should be visible. When a user is configuring a product options and values can be dependent on a previous selected value. To ensure that we have full flexibility of hiding and showing certain options based on certain values we implement NCalc expressions. An example of a condition expression on an option is as follows:                    [Mounting] == 'ODD1' || [Mounting] == 'ODD2 ' || [Mounting] == 'ODD3'                In the example above this option is only visible when the option ‘Mounting’ is any of the three values (ODD1, ODD2 or ODD3). When a value other than those three is selected this option should not be visible to the customer.                **Recommended:** <br />  We recommend using the ‘POST / product / 1 / configuration’ endpoint as all the logic above is implemented in the API. The configuration endpoint provides a way to retrieve the configuration of a product based on the selected values of the customer. Validation messages and conditions will be provided within the response. When an option should not be visible for the customer the property ‘isEnabled’ will be false. When a customer has entered an incorrect value for an option the properties ‘isValid’ will be false and ‘validationMessage’ will hold the translated validation message.                For more information about NCALC visit “https://github.com/ncalc/ncalc”.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | The ID of the product
$consumer_price = true; // bool | Show the consumer price instead of salesprice
$include_wizard_items = true; // bool | Include wizard only items in the result
$full_detail = true; // bool | Include product options in the detail

try {
    $result = $apiInstance->productGetById($product_id, $consumer_price, $include_wizard_items, $full_detail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The ID of the product |
 **consumer_price** | **bool**| Show the consumer price instead of salesprice | [optional]
 **include_wizard_items** | **bool**| Include wizard only items in the result | [optional]
 **full_detail** | **bool**| Include product options in the detail | [optional]

### Return type

[**\Swagger\Client\Model\ProductDetail**](../Model/ProductDetail.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetBySku**
> \Swagger\Client\Model\ProductDetail productGetBySku($sku)

Get the product by product code

This product detail does not contain the option list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | The product code

try {
    $result = $apiInstance->productGetBySku($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetBySku: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**| The product code |

### Return type

[**\Swagger\Client\Model\ProductDetail**](../Model/ProductDetail.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetConfigurationAsync**
> \Swagger\Client\Model\ProductConfig productGetConfigurationAsync($product_id, $current_config_consumer_price, $current_config_without_discount, $current_config_options)

Get the configuration of a given product

This endpoint will return the configuration of the product with the available options and validation messages based on the provided config.  When the config changes you can reflect the changes against this endpoint.  This endpoint will only supply the available options and not all. Some options might only be avaible within a certain height or width.                When all options are valid a price will be given.                Sample of current config:                    POST /product/1/configuration      {         \"consumerPrice\": false,         \"withoutDiscount\": false,         \"options\": [             {                 \"option\": \"Width\",                 \"value\": 1200             }         ]      }

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | The ID of the product
$current_config_consumer_price = true; // bool | 
$current_config_without_discount = true; // bool | 
$current_config_options = array(new \stdClass); // object[] | 

try {
    $result = $apiInstance->productGetConfigurationAsync($product_id, $current_config_consumer_price, $current_config_without_discount, $current_config_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetConfigurationAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The ID of the product |
 **current_config_consumer_price** | **bool**|  | [optional]
 **current_config_without_discount** | **bool**|  | [optional]
 **current_config_options** | [**object[]**](../Model/object.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductConfig**](../Model/ProductConfig.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetConfigurationAsync_0**
> \Swagger\Client\Model\ProductConfig productGetConfigurationAsync_0($product_id, $current_config)

Get the configuration of a given product

This endpoint will return the configuration of the product with the available options and validation messages based on the provided config.  When the config changes you can reflect the changes against this endpoint.  This endpoint will only supply the available options and not all. Some options might only be avaible within a certain height or width.                When all options are valid a price will be given.                Sample of current config:                    POST /product/1/configuration      {         \"consumerPrice\": false,         \"withoutDiscount\": false,         \"options\": [             {                 \"option\": \"Width\",                 \"value\": 1200             }         ]      }

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | The ID of the product
$current_config = new \Swagger\Client\Model\ProductConfigRequest(); // \Swagger\Client\Model\ProductConfigRequest | The current configuration

try {
    $result = $apiInstance->productGetConfigurationAsync_0($product_id, $current_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetConfigurationAsync_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The ID of the product |
 **current_config** | [**\Swagger\Client\Model\ProductConfigRequest**](../Model/ProductConfigRequest.md)| The current configuration |

### Return type

[**\Swagger\Client\Model\ProductConfig**](../Model/ProductConfig.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetValidationMessagesAsync**
> \Swagger\Client\Model\ValidationMessageDTO[] productGetValidationMessagesAsync()

Get the product option validation messages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->productGetValidationMessagesAsync();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetValidationMessagesAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ValidationMessageDTO[]**](../Model/ValidationMessageDTO.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

