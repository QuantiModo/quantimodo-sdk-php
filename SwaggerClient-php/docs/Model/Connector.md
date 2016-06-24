# Connector

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Connector ID number | 
**name** | **string** | Connector lowercase system name | 
**display_name** | **string** | Connector pretty display name | 
**image** | **string** | URL to the image of the connector logo | 
**get_it_url** | **string** | URL to a site where one can get this device or application | 
**connected** | **string** | True if the authenticated user has this connector enabled | 
**connect_instructions** | **string** | URL and parameters used when connecting to a service | 
**last_update** | **int** | Epoch timestamp of last sync | 
**total_measurements_in_last_update** | **int** | Number of measurements obtained during latest update | 
**no_data_yet** | **bool** | True if user has no measurements for this connector | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


