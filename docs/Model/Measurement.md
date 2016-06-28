# Measurement

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**variable** | **string** | ORIGINAL Name of the variable for which we are creating the measurement records | 
**source** | **string** | Application or device used to record the measurement values | 
**start_time** | **string** | Start Time for the measurement event in ISO 8601 | 
**human_time** | [**\QuantiModo\Client\Model\HumanTime**](HumanTime.md) | Start Time for the measurement event in ISO 8601 | [optional]
**value** | **double** | Converted measurement value in requested unit | 
**unit** | **string** | Unit of measurement as requested in GET request | 
**original_value** | **int** | Original value | [optional] 
**stored_value** | **double** | Measurement value in the unit as orignally submitted | [optional] 
**stored_abbreviated_unit_name** | **string** | Unit of measurement as originally submitted | [optional] 
**original_abbreviated_unit_name** | **string** | Original Unit of measurement as originally submitted | [optional] 
**abbreviated_unit_name** | **string** | Unit of measurement as originally submitted | [optional] 
**note** | **string** | Note of measurement | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


