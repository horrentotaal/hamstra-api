# Swagger\Client\ConfigurationWizardApi

All URIs are relative to *https://staging.api.hamstraonline.vmcluster.nl*

Method | HTTP request | Description
------------- | ------------- | -------------
[**configurationWizardGet**](ConfigurationWizardApi.md#configurationWizardGet) | **GET** /api/configuration-wizard/getEmbedURL | Get embedurl for customer based on APIkey authentication


# **configurationWizardGet**
> \Swagger\Client\Model\HamstraAPIModelsConfigurationWizardConfigurationWizardEmbedUrl[] configurationWizardGet($language)

Get embedurl for customer based on APIkey authentication

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigurationWizardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = "language_example"; // string | ISO 639-1 code for language. Currently supported: nl and fr

try {
    $result = $apiInstance->configurationWizardGet($language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationWizardApi->configurationWizardGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**| ISO 639-1 code for language. Currently supported: nl and fr | [optional]

### Return type

[**\Swagger\Client\Model\HamstraAPIModelsConfigurationWizardConfigurationWizardEmbedUrl[]**](../Model/HamstraAPIModelsConfigurationWizardConfigurationWizardEmbedUrl.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

