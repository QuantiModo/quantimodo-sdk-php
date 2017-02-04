# Measurement

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**variable_name** | **string** | Name of the variable for which we are creating the measurement records | 
**source_name** | **string** | Application or device used to record the measurement values | 
**start_time_string** | **string** | Start Time for the measurement event in UTC ISO 8601 \&quot;YYYY-MM-DDThh:mm:ss\&quot; | [optional] 
**start_time_epoch** | **int** | Seconds between the start of the event measured and 1970 (Unix timestamp) | [optional] 
**human_time** | [**\QuantiModo\Client\QuantiModo\Client\Model\HumanTime**](HumanTime.md) |  | [optional] 
**value** | **double** | Converted measurement value in requested unit | 
**original_value** | **int** | Original value as originally submitted | [optional] 
**original_abbreviated_unit_name** | **string** | Original Unit of measurement as originally submitted | [optional] 
**abbreviated_unit_name** | **string** | Abbreviated name for the unit of measurement | 
**note** | **string** | Note of measurement | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


