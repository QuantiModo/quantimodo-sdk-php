# MeasurementSet

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**measurements** | [**\Swagger\Client\Model\ValueObject[]**](ValueObject.md) | Array of timestamps, values, and optional notes | 
**name** | **string** | ORIGINAL name of the variable for which we are creating the measurement records | 
**source** | **string** | Name of the application or device used to record the measurement values | 
**category** | **string** | Variable category name | [optional] 
**combination_operation** | **string** | Way to aggregate measurements over time. Options are \&quot;MEAN\&quot; or \&quot;SUM\&quot;.  SUM should be used for things like minutes of exercise.  If you use MEAN for exercise, then a person might exercise more minutes in one day but add separate measurements that were smaller.  So when we are doing correlational analysis, we would think that the person exercised less that day even though they exercised more.  Conversely, we must use MEAN for things such as ratings which cannot be SUMMED. | [optional] 
**unit** | **string** | Unit of measurement | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


