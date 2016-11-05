# UserVariables

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user** | **int** | User ID | 
**variable_id** | **int** | Common variable id | 
**duration_of_action** | **int** | The amount of time over which a predictor/stimulus event can exert an observable influence on an outcome variable’s value. For instance, aspirin (stimulus/predictor) typically decreases headache severity for approximately four hours (duration of action) following the onset delay. | [optional] 
**filling_value** | **int** | When it comes to analysis to determine the effects of this variable, knowing when it did not occur is as important as knowing when it did occur. For example, if you are tracking a medication, it is important to know when you did not take it, but you do not have to log zero values for all the days when you haven&#39;t taken it. Hence, you can specify a filling value (typically 0) to insert whenever data is missing. | [optional] 
**join_with** | **string** | joinWith | [optional] 
**maximum_allowed_value** | **float** | The maximum allowed value for measurements. While you can record a value above this maximum, it will be excluded from the correlation analysis. | [optional] 
**minimum_allowed_value** | **float** | The minimum allowed value for measurements. While you can record a value below this minimum, it will be excluded from the correlation analysis. | [optional] 
**onset_delay** | **int** | onsetDelay | [optional] 
**experiment_start_time** | **string** | Earliest measurement startTime that should be used in analysis. For instance, the date when you started tracking something.  Helpful in determining when to start 0 filling since we can assume the absence of a treatment measurement, for instance, indicates that the treatment was not applied rathter than simply not recorded.  Uses ISO string format | [optional] 
**experiment_end_time** | **string** | Latest measurement startTime that should be used in analysis. For instance, the date when you stopped tracking something.  Helpful in determining when to stop 0 filling since we can assume the absence of a treatment measurement, for instance, indicates that the treatment was not applied rathter than simply not recorded.   Uses ISO string format | [optional] 
**alias** | **string** | User-defined display alias for variable name | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


