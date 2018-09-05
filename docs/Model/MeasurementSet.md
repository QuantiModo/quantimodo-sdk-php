# MeasurementSet

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**combination_operation** | **string** | Way to aggregate measurements over time. SUM should be used for things like minutes of exercise.  If you use MEAN for exercise, then a person might exercise more minutes in one day but add separate measurements that were smaller.  So when we are doing correlational analysis, we would think that the person exercised less that day even though they exercised more.  Conversely, we must use MEAN for things such as ratings which cannot be SUMMED. | [optional] 
**measurement_items** | [**\QuantiModo\Client\Model\MeasurementItem[]**](MeasurementItem.md) | Array of timestamps, values, and optional notes | 
**source_name** | **string** | Name of the application or device used to record the measurement values | 
**unit_abbreviated_name** | **string** | Unit of measurement | 
**variable_category_name** | **string** | Ex: Emotions, Treatments, Symptoms... | [optional] 
**variable_name** | **string** | ORIGINAL name of the variable for which we are creating the measurement records | 
**upc** | **string** | UPC or other barcode scan result | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


