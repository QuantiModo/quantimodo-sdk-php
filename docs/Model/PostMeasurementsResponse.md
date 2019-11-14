# PostMeasurementsResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**data** | [**\QuantiModo\Client\Model\PostMeasurementsDataResponse**](PostMeasurementsDataResponse.md) |  | [optional] 
**message** | **string** | Message | [optional] 
**description** | **string** | Can be used as body of help info popup | [optional] 
**summary** | **string** | Can be used as title in help info popup | [optional] 
**errors** | [**\QuantiModo\Client\Model\Error[]**](Error.md) | Array of error objects with message property | [optional] 
**status** | **string** | ex. OK or ERROR | 
**success** | **bool** | true or false | 
**code** | **float** | Response code such as 200 | [optional] 
**link** | **string** | A super neat url you might want to share with your users! | [optional] 
**card** | [**\QuantiModo\Client\Model\Card**](Card.md) | A super neat card with buttons and HTML that you can use in your app! | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


