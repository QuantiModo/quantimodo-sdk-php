# DataSource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**affiliate** | **bool** | Ex: true | 
**background_color** | **string** | Background color HEX code that matches the icon | [optional] 
**buttons** | [**\QuantiModo\Client\Model\Button[]**](Button.md) |  | [optional] 
**card** | [**\QuantiModo\Client\Model\Card**](Card.md) | Card containing instructions, image, text, link and relevant import buttons | [optional] 
**client_id** | **string** | Your QuantiModo client id can be obtained by creating an app at https://builder.quantimo.do | [optional] 
**connected** | **bool** | True if the authenticated user has this connector enabled | [optional] 
**connect_error** | **string** | Ex: Your token is expired. Please re-connect | [optional] 
**connect_instructions** | [**\QuantiModo\Client\Model\ConnectInstructions**](ConnectInstructions.md) | URL and parameters used when connecting to a service | [optional] 
**connector_id** | **int** | Ex: 8 | [optional] 
**connect_status** | **string** | Ex: CONNECTED | [optional] 
**count** | **int** | Number of measurements from this source or number of users who have measurements from this source | [optional] 
**created_at** | **string** | Ex: 2000-01-01 00:00:00 UTC ISO 8601 YYYY-MM-DDThh:mm:ss | [optional] 
**connector_client_id** | **string** | Ex: ba7d0c12432650e23b3ce924ae2d21e2ff59e7e4e28650759633700af7ed0a30 | 
**default_variable_category_name** | **string** | Ex: Foods | 
**display_name** | **string** | Ex: QuantiModo | 
**enabled** | **int** | Ex: 0 | 
**get_it_url** | **string** | Ex: https://quantimo.do | 
**id** | **int** | Ex: 72 | 
**image** | **string** | Ex: https://web.quantimo.do/img/logos/quantimodo-logo-qm-rainbow-200-200.png | 
**image_html** | **string** | Ex: &lt;a href&#x3D;\&quot;https://quantimo.do\&quot;&gt;&lt;img id&#x3D;\&quot;quantimodo_image\&quot; title&#x3D;\&quot;QuantiModo\&quot; src&#x3D;\&quot;https://web.quantimo.do/img/logos/quantimodo-logo-qm-rainbow-200-200.png\&quot; alt&#x3D;\&quot;QuantiModo\&quot;&gt;&lt;/a&gt; | 
**last_successful_updated_at** | **string** | Ex: 2017-07-31 10:10:34 UTC ISO 8601 YYYY-MM-DDThh:mm:ss | [optional] 
**last_update** | **int** | Epoch timestamp of last sync | [optional] 
**linked_display_name_html** | **string** | Ex: &lt;a href&#x3D;\&quot;https://quantimo.do\&quot;&gt;QuantiModo&lt;/a&gt; | 
**long_description** | **string** | Ex: QuantiModo is a Chrome extension, Android app, iOS app, and web app that allows you to easily track mood, symptoms, or any outcome you want to optimize in a fraction of a second.  You can also import your data from over 30 other apps and devices like Fitbit, Rescuetime, Jawbone Up, Withings, Facebook, Github, Google Calendar, Runkeeper, MoodPanda, Slice, Google Fit, and more.  QuantiModo then analyzes your data to identify which hidden factors are most likely to be influencing your mood or symptoms and their optimal daily values. | 
**message** | **string** | Ex: Got 412 new measurements on 2017-07-31 10:10:34 | [optional] 
**mobile_connect_method** | **string** | Mobile connect method: webview, cordova, google, spreadsheet, or ip | [optional] 
**name** | **string** | Ex: quantimodo | 
**platforms** | **string[]** | Platforms (chrome, android, ios, web) that you can connect on. | [optional] 
**premium** | **bool** | True if connection requires upgrade | [optional] 
**scopes** | **string[]** | Required connector scopes | [optional] 
**short_description** | **string** | Ex: Tracks anything | 
**spreadsheet_upload_link** | **string** | URL to POST a spreadsheet to (if available for this data source) | [optional] 
**total_measurements_in_last_update** | **int** | Number of measurements obtained during latest update | [optional] 
**updated_at** | **string** | Ex: 2017-07-31 10:10:34 UTC ISO 8601 YYYY-MM-DDThh:mm:ss | [optional] 
**update_requested_at** | **string** | Ex: 2017-07-18 05:16:31 UTC ISO 8601 YYYY-MM-DDThh:mm:ss | [optional] 
**update_status** | **string** | Ex: UPDATED | [optional] 
**user_id** | **int** | Ex: 230 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


