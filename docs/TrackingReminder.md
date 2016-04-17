# TrackingReminder

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | id | [optional] 
**client_id** | **string** | clientId | [optional] 
**user_id** | **int** | ID of User | [optional] 
**variable_id** | **int** | Id for the variable to be tracked | 
**default_value** | **float** | Default value to use for the measurement when tracking | [optional] 
**reminder_start_time** | **string** | Earliest time of day at which reminders should appear | [optional] 
**reminder_end_time** | **string** | Latest time of day at which reminders should appear | [optional] 
**reminder_sound** | **string** | String identifier for the sound to accompany the reminder | [optional] 
**reminder_frequency** | **int** | Number of seconds between one reminder and the next | [optional] 
**pop_up** | **bool** | True if the reminders should appear as a popup notification | [optional] 
**sms** | **bool** | True if the reminders should be delivered via SMS | [optional] 
**email** | **bool** | True if the reminders should be delivered via email | [optional] 
**notification_bar** | **bool** | True if the reminders should appear in the notification bar | [optional] 
**last_reminded** | [**\DateTime**](\DateTime.md) | ISO 8601 timestamp for the last time a reminder was sent | [optional] 
**last_tracked** | [**\DateTime**](\DateTime.md) | ISO 8601 timestamp for the last time a measurement was received for this user and variable | [optional] 
**first_daily_reminder_time** | **string** | Specific first time of day that the user should be reminded to track in HH:MM:SS format | [optional] 
**second_daily_reminder_time** | **string** | Specific second time of day that the user should be reminded to track in HH:MM:SS format | [optional] 
**third_daily_reminder_time** | **string** | Specific third time of day that the user should be reminded to track in HH:MM:SS format | [optional] 
**start_tracking_date** | [**\DateTime**](Date.md) | Earliest date on which the user should be reminded to track in YYYY-MM-DD format | [optional] 
**stop_tracking_date** | [**\DateTime**](Date.md) | Latest date on which the user should be reminded to track in YYYY-MM-DD format | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | When the record in the database was last updated. Use ISO 8601 datetime format. Time zone should be UTC and not local. | [optional] 
**variable_name** | **string** | Name of the variable to be used when sending measurements | [optional] 
**variable_category_name** | **string** | Name of the variable category to be used when sending measurements | [optional] 
**abbreviated_unit_name** | **string** | Abbreviated name of the unit to be used when sending measurements | [optional] 
**combination_operation** | **string** | The way multiple measurements are aggregated over time | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


