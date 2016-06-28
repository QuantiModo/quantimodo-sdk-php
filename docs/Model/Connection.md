# Connection

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | id | [optional] 
**user_id** | **int** | ID of user that owns this correlation | [optional] 
**connector_id** | **int** | The id for the connector data source for which the connection is connected | 
**connect_status** | **string** | Indicates whether a connector is currently connected to a service for a user. | [optional] 
**connect_error** | **string** | Error message if there is a problem with authorizing this connection. | [optional] 
**update_requested_at** | [**\DateTime**](\DateTime.md) | Time at which an update was requested by a user. | [optional] 
**update_status** | **string** | Indicates whether a connector is currently updated. | [optional] 
**update_error** | **string** | Indicates if there was an error during the update. | [optional] 
**last_successful_updated_at** | [**\DateTime**](\DateTime.md) | The time at which the connector was last successfully updated. | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | When the record was first created. Use ISO 8601 datetime format | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | When the record in the database was last updated. Use ISO 8601 datetime format | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


