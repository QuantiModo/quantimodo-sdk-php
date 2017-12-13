# Correlation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**average_daily_high_cause** | **double** | Example: 4.19 | 
**average_daily_low_cause** | **double** | Example: 1.97 | 
**average_effect** | **double** | Example: 3.0791054117396 | 
**average_effect_following_high_cause** | **double** | Example: 3.55 | 
**average_effect_following_low_cause** | **double** | Example: 2.65 | 
**average_forward_pearson_correlation_over_onset_delays** | **double** | Example: 0.396 | 
**average_reverse_pearson_correlation_over_onset_delays** | **double** | Example: 0.453667 | 
**average_vote** | **float** | Example: 0.9855 | 
**cause_changes** | **int** | Example: 164 | 
**cause_data_source** | [**\QuantiModo\Client\Model\DataSource**](DataSource.md) |  | [optional] 
**cause_user_variable_share_user_measurements** | **int** | Example: 1 | 
**cause_variable_category_id** | **int** | Example: 6 | [optional] 
**cause_variable_category_name** | **string** | Example: Sleep | [optional] 
**cause_variable_combination_operation** | **string** | Example: MEAN | [optional] 
**cause_variable_unit_abbreviated_name** | **string** | Example: /5 | [optional] 
**cause_variable_id** | **int** | Example: 1448 | [optional] 
**cause_variable_most_common_connector_id** | **int** | Example: 6 | [optional] 
**cause_variable_name** | **string** | Example: Sleep Quality | 
**confidence_interval** | **double** | Example: 0.14344467795996 | 
**confidence_level** | **string** | Example: high | 
**correlation_coefficient** | **double** | Example: 0.538 | 
**correlation_is_contradictory_to_optimal_values** | **bool** | Example: false | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Example: 2016-12-28 20:47:30 | 
**critical_t_value** | **double** | Example: 1.646 | 
**direction** | **string** | Example: higher | 
**duration_of_action** | **int** | Example: 604800 | 
**duration_of_action_in_hours** | **int** | Example: 168 | 
**degrees_of_freedom** | **int** | Example: 200 | [optional] 
**effect_number_of_processed_daily_measurements** | **int** | Example: 145 | [optional] 
**error** | **string** | Example: optimalPearsonProduct is not defined | [optional] 
**effect_changes** | **int** | Example: 193 | 
**effect_data_source** | [**\QuantiModo\Client\Model\DataSource**](DataSource.md) |  | [optional] 
**effect_size** | **string** | Example: moderately positive | 
**effect_unit** | **string** | Example: /5 | 
**effect_user_variable_share_user_measurements** | **int** | Example: 1 | [optional] 
**effect_variable_category_id** | **int** | Example: 1 | [optional] 
**effect_variable_category_name** | **string** | Example: Emotions | [optional] 
**effect_variable_combination_operation** | **string** | Example: MEAN | [optional] 
**effect_variable_common_alias** | **string** | Example: Mood_(psychology) | [optional] 
**effect_variable_unit_abbreviated_name** | **string** | Example: /5 | [optional] 
**effect_variable_unit_id** | **int** | Example: 10 | [optional] 
**effect_variable_unit_name** | **string** | Example: 1 to 5 Rating | [optional] 
**effect_variable_id** | **int** | Example: 1398 | [optional] 
**effect_variable_most_common_connector_id** | **int** | Example: 10 | [optional] 
**effect_variable_name** | **string** | Example: Overall Mood | 
**experiment_end_time** | [**\DateTime**](\DateTime.md) | Example: 2014-07-30 12:50:00 | 
**experiment_start_time** | [**\DateTime**](\DateTime.md) | Example: 2012-05-06 21:15:00 | 
**forward_spearman_correlation_coefficient** | **double** | Example: 0.528359 | 
**number_of_pairs** | **int** | Example: 298 | 
**onset_delay** | **int** | Example: 0 | 
**onset_delay_in_hours** | **int** | Example: 0 | 
**onset_delay_with_strongest_pearson_correlation** | **int** | Example: -86400 | 
**onset_delay_with_strongest_pearson_correlation_in_hours** | **int** | Example: -24 | 
**optimal_pearson_product** | **double** | Example: 0.68582816186982 | 
**outcome_filling_value** | **int** | Example: -1 | 
**outcome_maximum_allowed_value** | **double** | Example: 23 | [optional] 
**outcome_minimum_allowed_value** | **double** | Example: 0.1 | [optional] 
**pearson_correlation_with_no_onset_delay** | **double** | Example: 0.477 | 
**predictive_pearson_correlation** | **double** | Example: 0.538 | 
**predictive_pearson_correlation_coefficient** | **double** | Example: 0.538 | 
**predictor_data_sources** | **string** | Example: RescueTime | 
**predictor_filling_value** | **int** | Example: -1 | 
**predictor_maximum_allowed_value** | **double** | Example: 200 | 
**predictor_minimum_allowed_value** | **double** | Example: 30 | 
**predicts_high_effect_change** | **int** | Example: 17 | 
**predicts_low_effect_change** | **int** | Example: -11 | 
**p_value** | **double** | Example: 0.39628900511586 | [optional] 
**qm_score** | **double** | Example: 0.528 | 
**reverse_pearson_correlation_coefficient** | **double** | Example: 0.01377184270977 | 
**share_user_measurements** | **bool** | Example: 1 | 
**sharing_description** | **string** | Example: N1 Study: Sleep Quality Predicts Higher Overall Mood | [optional] 
**sharing_title** | **string** | Example: N1 Study: Sleep Quality Predicts Higher Overall Mood | [optional] 
**significant_difference** | **bool** | Example: 1 | 
**statistical_significance** | **double** | Example: 0.9813 | 
**strength_level** | **string** | Example: moderate | 
**strongest_pearson_correlation_coefficient** | **double** | Example: 0.613 | 
**study_html** | [**\QuantiModo\Client\Model\StudyHtml**](StudyHtml.md) |  | [optional] 
**study_images** | [**\QuantiModo\Client\Model\StudyImages**](StudyImages.md) |  | [optional] 
**study_links** | [**\QuantiModo\Client\Model\StudyLinks**](StudyLinks.md) |  | [optional] 
**study_text** | [**\QuantiModo\Client\Model\StudyText**](StudyText.md) |  | [optional] 
**t_value** | **double** | Example: 9.6986079652717 | 
**updated_at** | [**\DateTime**](\DateTime.md) | Example: 2017-05-06 15:40:38 | 
**user_id** | **int** | Example: 230 | 
**user_vote** | **int** | Example: 1 | 
**value_predicting_high_outcome** | **double** | Example: 4.14 | 
**value_predicting_low_outcome** | **double** | Example: 3.03 | 
**outcome_data_sources** | **string** | original name of the cause. | [optional] 
**principal_investigator** | **string** | Mike Sinn | [optional] 
**reverse_correlation** | **float** | Correlation when cause and effect are reversed. For any causal relationship, the forward correlation should exceed the reverse correlation. | [optional] 
**average_pearson_correlation_coefficient_over_onset_delays** | **string** | Example: | [optional] 
**cause_number_of_raw_measurements** | **int** | Example: 14764 | [optional] 
**correlations_over_durations_of_action** | **string** | Example: | [optional] 
**correlations_over_durations_of_action_chart_config** | **string** | Example: | [optional] 
**correlations_over_onset_delays_chart_config** | **string** | Example: | [optional] 
**number_of_users** | **float** | Example: | [optional] 
**raw_cause_measurement_significance** | **double** | Example: 1 | [optional] 
**raw_effect_measurement_significance** | **double** | Example: 1 | [optional] 
**reverse_pairs_count** | **string** | Example: | [optional] 
**vote_statistical_significance** | **int** | Example: 1 | [optional] 
**aggregate_qm_score** | **double** | Example: 0.011598441286655 | [optional] 
**forward_pearson_correlation_coefficient** | **double** | Example: 0.0333 | [optional] 
**number_of_correlations** | **int** | Example: 6 | [optional] 
**vote** | **float** | Example: | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


