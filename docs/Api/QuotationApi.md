# Swagger\Client\QuotationApi

All URIs are relative to *https://refactor.api.hamstraonline.vmcluster.nl*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quotationDeleteQuotation**](QuotationApi.md#quotationDeleteQuotation) | **DELETE** /api/quotation/DeleteQuotation/{id} | Delete a quotation
[**quotationGetQuotationLines**](QuotationApi.md#quotationGetQuotationLines) | **GET** /api/quotation/getquotationlines/{id} | Get the quotation lines by a given quotations
[**quotationGetQuotations**](QuotationApi.md#quotationGetQuotations) | **GET** /api/quotation/getquotations | Get the quotations


# **quotationDeleteQuotation**
> quotationDeleteQuotation($id)

Delete a quotation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\QuotationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The quotation Id

try {
    $apiInstance->quotationDeleteQuotation($id);
} catch (Exception $e) {
    echo 'Exception when calling QuotationApi->quotationDeleteQuotation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The quotation Id |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quotationGetQuotationLines**
> \Swagger\Client\Model\ViewQuotationLine[] quotationGetQuotationLines($id)

Get the quotation lines by a given quotations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\QuotationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The quotation id

try {
    $result = $apiInstance->quotationGetQuotationLines($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotationApi->quotationGetQuotationLines: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The quotation id |

### Return type

[**\Swagger\Client\Model\ViewQuotationLine[]**](../Model/ViewQuotationLine.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quotationGetQuotations**
> \Swagger\Client\Model\GridListViewQuotation quotationGetQuotations($page_size, $page, $sort_by, $ascending)

Get the quotations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\QuotationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_size = 56; // int | The page size, default '20'
$page = 56; // int | The current page, default '1'
$sort_by = "sort_by_example"; // string | The field to sort on, default 'quotationId'
$ascending = true; // bool | The sorting direction, default 'true'

try {
    $result = $apiInstance->quotationGetQuotations($page_size, $page, $sort_by, $ascending);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotationApi->quotationGetQuotations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_size** | **int**| The page size, default &#39;20&#39; | [optional]
 **page** | **int**| The current page, default &#39;1&#39; | [optional]
 **sort_by** | **string**| The field to sort on, default &#39;quotationId&#39; | [optional]
 **ascending** | **bool**| The sorting direction, default &#39;true&#39; | [optional]

### Return type

[**\Swagger\Client\Model\GridListViewQuotation**](../Model/GridListViewQuotation.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

