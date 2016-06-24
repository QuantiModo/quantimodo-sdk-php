# UserVariableRelationship

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | id | [optional] 
**confidence_level** | **string** | Our confidence that a consistent predictive relationship exists based on the amount of evidence, reproducibility, and other factors | 
**confidence_score** | **float** | A quantitative representation of our confidence that a consistent predictive relationship exists based on the amount of evidence, reproducibility, and other factors | 
**direction** | **string** | Direction is positive if higher predictor values generally precede higher outcome values. Direction is negative if higher predictor values generally precede lower outcome values. | 
**duration_of_action** | **int** | Number of seconds over which the predictor variable event is expected to produce a perceivable effect following the onset delay | 
**error_message** | **string** | error_message | [optional] 
**onset_delay** | **int** | User estimated (or default number of seconds) after cause measurement before a perceivable effect is observed | [optional] 
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


