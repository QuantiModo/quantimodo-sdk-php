# Correlation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**average_daily_high_cause** | **double** | Ex: 4.19 | 
**average_daily_low_cause** | **double** | Ex: 1.97 | 
**average_effect** | **double** | Ex: 3.0791054117396 | 
**average_effect_following_high_cause** | **double** | Ex: 3.55 | 
**average_effect_following_low_cause** | **double** | Ex: 2.65 | 
**average_forward_pearson_correlation_over_onset_delays** | **double** | Ex: 0.396 | 
**average_reverse_pearson_correlation_over_onset_delays** | **double** | Ex: 0.453667 | 
**average_vote** | **float** | Ex: 0.9855 | 
**cause_changes** | **int** | Ex: 164 | 
**cause_data_source** | [**\QuantiModo\Client\Model\DataSource**](DataSource.md) |  | [optional] 
**cause_user_variable_share_user_measurements** | **int** | Ex: 1 | 
**cause_variable_category_id** | **int** | Ex: 6 | [optional] 
**cause_variable_category_name** | **string** | Ex: Sleep | [optional] 
**cause_variable_combination_operation** | **string** | Ex: MEAN | [optional] 
**cause_variable_unit_abbreviated_name** | **string** | Ex: /5 | [optional] 
**cause_variable_id** | **int** | Ex: 1448 | [optional] 
**cause_variable_most_common_connector_id** | **int** | Ex: 6 | [optional] 
**cause_variable_name** | **string** | Ex: Sleep Quality | 
**confidence_interval** | **double** | Ex: 0.14344467795996 | 
**confidence_level** | **string** | Ex: high | 
**correlation_coefficient** | **double** | Ex: 0.538 | 
**correlation_is_contradictory_to_optimal_values** | **bool** | Ex: false | [optional] 
**created_at** | **string** | Ex: 2016-12-28 20:47:30 UTC ISO 8601 YYYY-MM-DDThh:mm:ss | 
**critical_t_value** | **double** | Ex: 1.646 | 
**direction** | **string** | Ex: higher | 
**duration_of_action** | **int** | Ex: 604800 | 
**duration_of_action_in_hours** | **int** | Ex: 168 | 
**degrees_of_freedom** | **int** | Ex: 200 | [optional] 
**effect_number_of_processed_daily_measurements** | **int** | Ex: 145 | [optional] 
**error** | **string** | Ex: optimalPearsonProduct is not defined | [optional] 
**effect_changes** | **int** | Ex: 193 | 
**effect_data_source** | [**\QuantiModo\Client\Model\DataSource**](DataSource.md) |  | [optional] 
**effect_size** | **string** | Ex: moderately positive | 
**effect_unit** | **string** | Ex: /5 | 
**effect_user_variable_share_user_measurements** | **int** | Ex: 1 | [optional] 
**effect_variable_category_id** | **int** | Ex: 1 | [optional] 
**effect_variable_category_name** | **string** | Ex: Emotions | [optional] 
**effect_variable_combination_operation** | **string** | Ex: MEAN | [optional] 
**effect_variable_common_alias** | **string** | Ex: Mood_(psychology) | [optional] 
**effect_variable_unit_abbreviated_name** | **string** | Ex: /5 | [optional] 
**effect_variable_unit_id** | **int** | Ex: 10 | [optional] 
**effect_variable_unit_name** | **string** | Ex: 1 to 5 Rating | [optional] 
**effect_variable_id** | **int** | Ex: 1398 | [optional] 
**effect_variable_most_common_connector_id** | **int** | Ex: 10 | [optional] 
**effect_variable_name** | **string** | Ex: Overall Mood | 
**experiment_end_time** | **string** | Ex: 2014-07-30 12:50:00 UTC ISO 8601 YYYY-MM-DDThh:mm:ss | 
**experiment_start_time** | **string** | Ex: 2012-05-06 21:15:00 UTC ISO 8601 YYYY-MM-DDThh:mm:ss | 
**forward_spearman_correlation_coefficient** | **double** | Ex: 0.528359 | 
**number_of_pairs** | **int** | Ex: 298 | 
**onset_delay** | **int** | Ex: 0 | 
**onset_delay_in_hours** | **int** | Ex: 0 | 
**onset_delay_with_strongest_pearson_correlation** | **int** | Ex: -86400 | 
**onset_delay_with_strongest_pearson_correlation_in_hours** | **int** | Ex: -24 | 
**optimal_pearson_product** | **double** | Ex: 0.68582816186982 | 
**outcome_filling_value** | **int** | Ex: -1 | 
**outcome_maximum_allowed_value** | **double** | Ex: 23 | [optional] 
**outcome_minimum_allowed_value** | **double** | Ex: 0.1 | [optional] 
**pearson_correlation_with_no_onset_delay** | **double** | Ex: 0.477 | 
**predictive_pearson_correlation** | **double** | Ex: 0.538 | 
**predictive_pearson_correlation_coefficient** | **double** | Ex: 0.538 | 
**predictor_data_sources** | **string** | Ex: RescueTime | 
**predictor_filling_value** | **int** | Ex: -1 | 
**predictor_maximum_allowed_value** | **double** | Ex: 200 | 
**predictor_minimum_allowed_value** | **double** | Ex: 30 | 
**predicts_high_effect_change** | **int** | Ex: 17 | 
**predicts_low_effect_change** | **int** | Ex: -11 | 
**p_value** | **double** | Ex: 0.39628900511586 | [optional] 
**qm_score** | **double** | Ex: 0.528 | 
**reverse_pearson_correlation_coefficient** | **double** | Ex: 0.01377184270977 | 
**share_user_measurements** | **bool** | Would you like to make this study publicly visible? | 
**sharing_description** | **string** | Ex: N1 Study: Sleep Quality Predicts Higher Overall Mood | [optional] 
**sharing_title** | **string** | Ex: N1 Study: Sleep Quality Predicts Higher Overall Mood | [optional] 
**significant_difference** | **bool** | Ex: 1 | 
**statistical_significance** | **double** | Ex: 0.9813 | 
**strength_level** | **string** | Ex: moderate | 
**strongest_pearson_correlation_coefficient** | **double** | Ex: 0.613 | 
**study_html** | [**\QuantiModo\Client\Model\StudyHtml**](StudyHtml.md) |  | [optional] 
**study_images** | [**\QuantiModo\Client\Model\StudyImages**](StudyImages.md) |  | [optional] 
**study_links** | [**\QuantiModo\Client\Model\StudyLinks**](StudyLinks.md) |  | [optional] 
**study_text** | [**\QuantiModo\Client\Model\StudyText**](StudyText.md) |  | [optional] 
**t_value** | **double** | Ex: 9.6986079652717 | 
**updated_at** | **string** | Ex: 2017-05-06 15:40:38 UTC ISO 8601 YYYY-MM-DDThh:mm:ss | 
**user_id** | **int** | Ex: 230 | 
**user_vote** | **int** | Ex: 1 | 
**value_predicting_high_outcome** | **double** | Ex: 4.14 | 
**value_predicting_low_outcome** | **double** | Ex: 3.03 | 
**outcome_data_sources** | **string** | original name of the cause. | [optional] 
**principal_investigator** | **string** | Mike Sinn | [optional] 
**reverse_correlation** | **float** | Correlation when cause and effect are reversed. For any causal relationship, the forward correlation should exceed the reverse correlation. | [optional] 
**average_pearson_correlation_coefficient_over_onset_delays** | **string** | Ex: | [optional] 
**cause_number_of_raw_measurements** | **int** | Ex: 14764 | [optional] 
**correlations_over_durations_of_action** | **string** | Ex: | [optional] 
**correlations_over_durations_of_action_chart_config** | **string** | Ex: | [optional] 
**correlations_over_onset_delays_chart_config** | **string** | Ex: | [optional] 
**number_of_users** | **float** | Ex: 1 | [optional] 
**raw_cause_measurement_significance** | **double** | Ex: 1 | [optional] 
**raw_effect_measurement_significance** | **double** | Ex: 1 | [optional] 
**reverse_pairs_count** | **string** | Ex: 1 | [optional] 
**vote_statistical_significance** | **int** | Ex: 1 | [optional] 
**aggregate_qm_score** | **double** | Ex: 0.011598441286655 | [optional] 
**forward_pearson_correlation_coefficient** | **double** | Ex: 0.0333 | [optional] 
**number_of_correlations** | **int** | Ex: 6 | [optional] 
**vote** | **float** | Ex: 1 or 0 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


