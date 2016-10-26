# UserVariableRelationship

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | id | [optional] 
**confidence_level** | **string** | Our confidence that a consistent predictive relationship exists based on the amount of evidence, reproducibility, and other factors | 
**confidence_score** | **float** | A quantitative representation of our confidence that a consistent predictive relationship exists based on the amount of evidence, reproducibility, and other factors | 
**direction** | **string** | Direction is positive if higher predictor values generally precede higher outcome values. Direction is negative if higher predictor values generally precede lower outcome values. | 
**duration_of_action** | **int** | The amount of time over which a predictor/stimulus event can exert an observable influence on an outcome variable’s value. For instance, aspirin (stimulus/predictor) typically decreases headache severity for approximately four hours (duration of action) following the onset delay. | 
**error_message** | **string** | error_message | [optional] 
**onset_delay** | **int** | The amount of time in seconds that elapses after the predictor/stimulus event before the outcome as perceived by a self-tracker is known as the “onset delay”. For example, the “onset delay” between the time a person takes an aspirin (predictor/stimulus event) and the time a person perceives a change in their headache severity (outcome) is approximately 30 minutes. | [optional] 
**outcome_variable_id** | **int** | Variable ID for the outcome variable | 
**predictor_variable_id** | **int** | Variable ID for the predictor variable | 
**predictor_unit_id** | **int** | ID for default unit of the predictor variable | 
**sinn_rank** | **float** | A value representative of the relevance of this predictor relative to other predictors of this outcome.  Usually used for relevancy sorting. | 
**strength_level** | **string** | Can be weak, medium, or strong based on the size of the effect which the predictor appears to have on the outcome relative to other variable relationship strength scores. | 
**strength_score** | **float** | A value represented to the size of the effect which the predictor appears to have on the outcome. | 
**user_id** | **int** | user_id | [optional] 
**vote** | **string** | vote | [optional] 
**value_predicting_high_outcome** | **float** | Value for the predictor variable (in it&#39;s default unit) which typically precedes an above average outcome value | 
**value_predicting_low_outcome** | **float** | Value for the predictor variable (in it&#39;s default unit) which typically precedes a below average outcome value | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


