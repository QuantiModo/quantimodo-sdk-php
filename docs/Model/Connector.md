# Connector

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**affiliate** | **bool** | Example: false | [optional] 
**buttons** | [**\QuantiModo\Client\Model\Button[]**](Button.md) |  | [optional] 
**client_id** | **string** | Example: ghostInspector | [optional] 
**connected** | **string** | True if the authenticated user has this connector enabled | 
**connect_error** | **string** | Example: Your token is expired. Please re-connect | [optional] 
**connect_instructions** | **string** | URL and parameters used when connecting to a service | 
**connector_client_id** | **string** | Example: 225078261031461 | [optional] 
**connector_id** | **int** | Example: 8 | [optional] 
**connect_status** | **string** | Example: CONNECTED | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Example: 2000-01-01 00:00:00 | [optional] 
**default_variable_category_name** | **string** | Example: Social Interactions | [optional] 
**display_name** | **string** | Connector pretty display name | 
**enabled** | **int** | Example: 1 | [optional] 
**get_it_url** | **string** | URL to a site where one can get this device or application | 
**id** | **int** | Connector ID number | 
**image** | **string** | URL to the image of the connector logo | 
**image_html** | **string** | Example: &lt;a href&#x3D;\&quot;http://www.facebook.com\&quot;&gt;&lt;img id&#x3D;\&quot;facebook_image\&quot; title&#x3D;\&quot;Facebook\&quot; src&#x3D;\&quot;https://i.imgur.com/GhwqK4f.png\&quot; alt&#x3D;\&quot;Facebook\&quot;&gt;&lt;/a&gt; | [optional] 
**last_successful_updated_at** | [**\DateTime**](\DateTime.md) | Example: 2017-07-31 10:10:34 | [optional] 
**last_update** | **int** | Epoch timestamp of last sync | 
**linked_display_name_html** | **string** | Example: &lt;a href&#x3D;\&quot;http://www.facebook.com\&quot;&gt;Facebook&lt;/a&gt; | [optional] 
**long_description** | **string** | Example: Facebook is a social networking website where users may create a personal profile, add other users as friends, and exchange messages. | [optional] 
**message** | **string** | Example: Got 412 new measurements on 2017-07-31 10:10:34 | [optional] 
**name** | **string** | Connector lowercase system name | 
**oauth** | **object** | Example: {} | [optional] 
**scopes** | [**\QuantiModo\Client\Model\Scope[]**](Scope.md) |  | [optional] 
**short_description** | **string** | Example: Tracks social interaction. QuantiModo requires permission to access your Facebook \&quot;user likes\&quot; and \&quot;user posts\&quot;. | [optional] 
**total_measurements_in_last_update** | **int** | Number of measurements obtained during latest update | 
**updated_at** | [**\DateTime**](\DateTime.md) | Example: 2017-07-31 10:10:34 | [optional] 
**update_requested_at** | [**\DateTime**](\DateTime.md) | Example: 2017-07-18 05:16:31 | [optional] 
**update_status** | **string** | Example: UPDATED | [optional] 
**user_id** | **int** | Example: 230 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


