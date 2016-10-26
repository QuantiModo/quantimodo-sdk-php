# Correlation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**correlation_coefficient** | **float** | Pearson correlation coefficient between cause and effect measurements | 
**cause** | **string** | ORIGINAL variable name of the cause variable for which the user desires correlations. | 
**original_cause** | **string** | original name of the cause. | [optional] 
**effect** | **string** | ORIGINAL variable name of the effect variable for which the user desires correlations. | 
**original_effect** | **string** | effect variable original name. | [optional] 
**onset_delay** | **double** | The amount of time in seconds that elapses after the predictor/stimulus event before the outcome as perceived by a self-tracker is known as the “onset delay”. For example, the “onset delay” between the time a person takes an aspirin (predictor/stimulus event) and the time a person perceives a change in their headache severity (outcome) is approximately 30 minutes. | 
**duration_of_action** | **float** | The amount of time over which a predictor/stimulus event can exert an observable influence on an outcome variable’s value. For instance, aspirin (stimulus/predictor) typically decreases headache severity for approximately four hours (duration of action) following the onset delay. | 
**number_of_pairs** | **float** | Number of points that went into the correlation calculation | 
**effect_size** | **string** | Magnitude of the effects of a cause indicating whether it&#39;s practically meaningful. | [optional] 
**statistical_significance** | **string** | A function of the effect size and sample size | [optional] 
**timestamp** | **float** | Time at which correlation was calculated | 
**reverse_correlation** | **float** | Correlation when cause and effect are reversed. For any causal relationship, the forward correlation should exceed the reverse correlation. | [optional] 
**causality_factor** | **float** |  | [optional] 
**cause_category** | **string** | Variable category of the cause variable. | [optional] 
**effect_category** | **string** | Variable category of the effect variable. | [optional] 
**value_predicting_high_outcome** | **float** | cause value that predicts an above average effect value (in default unit for cause variable) | [optional] 
**value_predicting_low_outcome** | **float** | cause value that predicts a below average effect value (in default unit for cause variable) | [optional] 
**optimal_pearson_product** | **float** | Optimal Pearson Product | [optional] 
**average_vote** | **float** | Average Vote | [optional] 
**user_vote** | **float** | User Vote | [optional] 
**cause_unit** | **string** | Unit of the predictor variable | [optional] 
**cause_unit_id** | **int** | Unit Id of the predictor variable | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


