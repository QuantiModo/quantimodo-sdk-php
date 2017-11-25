# Correlation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**average_daily_high_cause** | **double** | Example: 4.19 | 
**average_daily_low_cause** | **double** | Example: 1.97 | 
**average_effect** | **double** | Example: 3.0791054117396 | 
**average_effect_following_high_cause** | **double** | Example: 3.55 | 
**average_effect_following_high_cause_explanation** | **string** | Example: Overall Mood is 3.55/5 (15% higher) on average after days with around 4.19/5 Sleep Quality | 
**average_effect_following_low_cause** | **double** | Example: 2.65 | 
**average_effect_following_low_cause_explanation** | **string** | Example: Overall Mood is 2.65/5 (14% lower) on average after days with around 1.97/5 Sleep Quality | 
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
**cause_variable_image_url** | **string** | Example: https://maxcdn.icons8.com/Color/PNG/96/Household/sleeping_in_bed-96.png | [optional] 
**cause_variable_ion_icon** | **string** | Example: ion-ios-cloudy-night-outline | [optional] 
**cause_variable_most_common_connector_id** | **int** | Example: 6 | [optional] 
**cause_variable_name** | **string** | Example: Sleep Quality | 
**confidence_interval** | **double** | Example: 0.14344467795996 | 
**confidence_level** | **string** | Example: high | 
**correlation_coefficient** | **double** | Example: 0.538 | 
**correlation_is_contradictory_to_optimal_values** | **bool** | Example: false | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Example: 2016-12-28 20:47:30 | 
**critical_t_value** | **double** | Example: 1.646 | 
**data_analysis** | **string** | Example: It was assumed that 0 hours would pass before a change in Sleep Quality would produce an observable change in Overall Mood.  It was assumed that Sleep Quality could produce an observable change in Overall Mood for as much as 7 days after the stimulus event. | 
**data_sources** | **string** | Example: Sleep Quality data was primarily collected using &lt;a href&#x3D;\&quot;http://www.amazon.com/gp/product/B00A17IAO0/ref&#x3D;as_li_qf_sp_asin_tl?ie&#x3D;UTF8&amp;camp&#x3D;1789&amp;creative&#x3D;9325&amp;creativeASIN&#x3D;B00A17IAO0&amp;linkCode&#x3D;as2&amp;tag&#x3D;quant08-20\&quot;&gt;Up by Jawbone&lt;/a&gt;.  UP by Jawbone is a wristband and app that tracks how you sleep, move and eat and then helps you use that information to feel your best.&lt;br&gt;Overall Mood data was primarily collected using &lt;a href&#x3D;\&quot;https://quantimo.do\&quot;&gt;QuantiModo&lt;/a&gt;.  &lt;a href&#x3D;\&quot;https://quantimo.do\&quot;&gt;QuantiModo&lt;/a&gt; is a Chrome extension, Android app, iOS app, and web app that allows you to easily track mood, symptoms, or any outcome you want to optimize in a fraction of a second.  You can also import your data from over 30 other apps and devices like Fitbit, Rescuetime, Jawbone Up, Withings, Facebook, Github, Google Calendar, Runkeeper, MoodPanda, Slice, Google Fit, and more.  &lt;a href&#x3D;\&quot;https://quantimo.do\&quot;&gt;QuantiModo&lt;/a&gt; then analyzes your data to identify which hidden factors are most likely to be influencing your mood or symptoms and their optimal daily values. | 
**direction** | **string** | Example: higher | 
**duration_of_action** | **int** | Example: 604800 | 
**duration_of_action_in_hours** | **int** | Example: 168 | 
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
**effect_variable_image_url** | **string** | Example: https://maxcdn.icons8.com/Color/PNG/96/Cinema/theatre_mask-96.png | [optional] 
**effect_variable_ion_icon** | **string** | Example: ion-happy-outline | [optional] 
**effect_variable_most_common_connector_id** | **int** | Example: 10 | [optional] 
**effect_variable_name** | **string** | Example: Overall Mood | 
**experiment_end_time** | [**\DateTime**](\DateTime.md) | Example: 2014-07-30 12:50:00 | 
**experiment_start_time** | [**\DateTime**](\DateTime.md) | Example: 2012-05-06 21:15:00 | 
**forward_spearman_correlation_coefficient** | **double** | Example: 0.528359 | 
**gauge_image** | **string** | Example: https://s3.amazonaws.com/quantimodo-docs/images/gauge-moderately-positive-relationship.png | 
**gauge_image_square** | **string** | Example: https://s3.amazonaws.com/quantimodo-docs/images/gauge-moderately-positive-relationship-200-200.png | 
**gauge_sharing_image_url** | **string** | Image with gauge and category images | [optional] 
**image_url** | **string** | Example: https://s3-us-west-1.amazonaws.com/qmimages/variable_categories_gauges_logo_background/gauge-moderately-positive-relationship_sleep_emotions_logo_background.png | 
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
**predictor_explanation** | **string** | Example: Sleep Quality Predicts Higher Overall Mood | 
**predictor_filling_value** | **int** | Example: -1 | 
**predictor_maximum_allowed_value** | **double** | Example: 200 | 
**predictor_minimum_allowed_value** | **double** | Example: 30 | 
**predicts_high_effect_change** | **int** | Example: 17 | 
**predicts_high_effect_change_sentence_fragment** | **string** | Example: , on average, 17% | 
**predicts_low_effect_change** | **int** | Example: -11 | 
**predicts_low_effect_change_sentence_fragment** | **string** | Example: , on average, 11% | 
**p_value** | **double** | Example: 0.39628900511586 | [optional] 
**qm_score** | **double** | Example: 0.528 | 
**reverse_pearson_correlation_coefficient** | **double** | Example: 0.01377184270977 | 
**robot_sharing_image_url** | **string** | Image with robot and category images | [optional] 
**share_user_measurements** | **bool** | Example: 1 | 
**sharing_description** | **string** | Example: N1 Study: Sleep Quality Predicts Higher Overall Mood | [optional] 
**sharing_title** | **string** | Example: N1 Study: Sleep Quality Predicts Higher Overall Mood | [optional] 
**significance_explanation** | **string** | Example: Using a two-tailed t-test with alpha &#x3D; 0.05, it was determined that the change in Overall Mood is statistically significant at 95% confidence interval. | 
**significant_difference** | **bool** | Example: 1 | 
**statistical_significance** | **double** | Example: 0.9813 | 
**strength_level** | **string** | Example: moderate | 
**strongest_pearson_correlation_coefficient** | **double** | Example: 0.613 | 
**study_abstract** | **string** | Example: Your data suggests with a high degree of confidence (p&#x3D;0) that Sleep Quality (Sleep) has a moderately positive predictive relationship (R&#x3D;0.538) with Overall Mood  (Emotions).  The highest quartile of Overall Mood  measurements were observed following an average 4.14/5 Sleep Quality.  The lowest quartile of Overall Mood measurements were observed following an average 3.03/5 Sleep Quality. | 
**study_design** | **string** | Example: This study is based on data donated by one QuantiModo user. Thus, the study design is consistent with an n&#x3D;1 observational natural experiment. | 
**study_limitations** | **string** | Example: As with any human experiment, it was impossible to control for all potentially confounding variables.              Correlation does not necessarily imply correlation.  We can never know for sure if one factor is definitely the cause of an outcome.             However, lack of correlation definitely implies the lack of a causal relationship.  Hence, we can with great             confidence rule out non-existent relationships. For instance, if we discover no relationship between mood             and an antidepressant this information is just as or even more valuable than the discovery that there is a relationship.             &lt;br&gt;             &lt;br&gt;              We can also take advantage of several characteristics of time series data from many subjects  to infer the likelihood of a causal relationship if we do find a correlational relationship.             The criteria for causation are a group of minimal conditions necessary to provide adequate evidence of a causal relationship between an incidence and a possible consequence.             The list of the criteria is as follows:             &lt;br&gt;             1. Strength (effect size): A small association does not mean that there is not a causal effect, though the larger the association, the more likely that it is causal.             &lt;br&gt;             2. Consistency (reproducibility): Consistent findings observed by different persons in different places with different samples strengthens the likelihood of an effect.             &lt;br&gt;             3. Specificity: Causation is likely if a very specific population at a specific site and disease with no other likely explanation. The more specific an association between a factor and an effect is, the bigger the probability of a causal relationship.             &lt;br&gt;             4. Temporality: The effect has to occur after the cause (and if there is an expected delay between the cause and expected effect, then the effect must occur after that delay).             &lt;br&gt;             5. Biological gradient: Greater exposure should generally lead to greater incidence of the effect. However, in some cases, the mere presence of the factor can trigger the effect. In other cases, an inverse proportion is observed: greater exposure leads to lower incidence.             &lt;br&gt;             6. Plausibility: A plausible mechanism between cause and effect is helpful.             &lt;br&gt;             7. Coherence: Coherence between epidemiological and laboratory findings increases the likelihood of an effect.             &lt;br&gt;             8. Experiment: \&quot;Occasionally it is possible to appeal to experimental evidence\&quot;.             &lt;br&gt;             9. Analogy: The effect of similar factors may be considered.             &lt;br&gt;             &lt;br&gt;               The confidence in a causal relationship is bolstered by the fact that time-precedence was taken into account in all calculations. Furthermore, in accordance with the law of large numbers (LLN), the predictive power and accuracy of these results will continually grow over time.  298 paired data points were used in this analysis.   Assuming that the relationship is merely coincidental, as the participant independently modifies their Sleep Quality values, the observed strength of the relationship will decline until it is below the threshold of significance.  To it another way, in the case that we do find a spurious correlation, suggesting that banana intake improves mood for instance,             one will likely increase their banana intake.  Due to the fact that this correlation is spurious, it is unlikely             that you will see a continued and persistent corresponding increase in mood.  So over time, the spurious correlation will             naturally dissipate.Furthermore, it will be very enlightening to aggregate this data with the data from other participants  with similar genetic, diseasomic, environmentomic, and demographic profiles. | 
**study_link_dynamic** | **string** | Example: https://local.quantimo.do/ionic/Modo/www/index.html#/app/study?causeVariableName&#x3D;Sleep%20Quality&amp;effectVariableName&#x3D;Overall%20Mood&amp;userId&#x3D;230 | 
**study_link_email** | **string** | Example: mailto:?subject&#x3D;N1%20Study%3A%20Sleep%20Quality%20Predicts%20Higher%20Overall%20Mood&amp;body&#x3D;Check%20out%20my%20study%20at%20https%3A%2F%2Flocal.quantimo.do%2Fapi%2Fv2%2Fstudy%3FcauseVariableName%3DSleep%2520Quality%26effectVariableName%3DOverall%2520Mood%26userId%3D230%0A%0AHave%20a%20great%20day! | 
**study_link_facebook** | **string** | Example: https://www.facebook.com/sharer/sharer.php?u&#x3D;https%3A%2F%2Flocal.quantimo.do%2Fapi%2Fv2%2Fstudy%3FcauseVariableName%3DSleep%2520Quality%26effectVariableName%3DOverall%2520Mood%26userId%3D230 | 
**study_link_google** | **string** | Example: https://plus.google.com/share?url&#x3D;https%3A%2F%2Flocal.quantimo.do%2Fapi%2Fv2%2Fstudy%3FcauseVariableName%3DSleep%2520Quality%26effectVariableName%3DOverall%2520Mood%26userId%3D230 | 
**study_link_static** | **string** | Example: https://local.quantimo.do/api/v2/study?causeVariableName&#x3D;Sleep%20Quality&amp;effectVariableName&#x3D;Overall%20Mood&amp;userId&#x3D;230 | 
**study_link_twitter** | **string** | Example: https://twitter.com/home?status&#x3D;Sleep%20Quality%20Predicts%20Higher%20Overall%20Mood%20https%3A%2F%2Flocal.quantimo.do%2Fapi%2Fv2%2Fstudy%3FcauseVariableName%3DSleep%2520Quality%26effectVariableName%3DOverall%2520Mood%26userId%3D230%20%40quantimodo | 
**study_objective** | **string** | Example: The objective of this study is to determine the nature of the relationship (if any) between the Sleep Quality and the Overall Mood. Additionally, we attempt to determine the Sleep Quality values most likely to produce optimal Overall Mood values. | 
**study_results** | **string** | Example: This analysis suggests that higher Sleep Quality (Sleep) generally predicts higher Overall Mood (p &#x3D; 0).  Overall Mood is, on average, 17%  higher after around 4.14 Sleep Quality.  After an onset delay of 168 hours, Overall Mood is, on average, 11%  lower than its average over the 168 hours following around 3.03 Sleep Quality.  298 data points were used in this analysis.  The value for Sleep Quality changed 164 times, effectively running 82 separate natural experiments.  The top quartile outcome values are preceded by an average 4.14 /5 of Sleep Quality.  The bottom quartile outcome values are preceded by an average 3.03 /5 of Sleep Quality.  Forward Pearson Correlation Coefficient was 0.538 (p&#x3D;0, 95% CI 0.395 to 0.681 onset delay &#x3D; 0 hours, duration of action &#x3D; 168 hours) .  The Reverse Pearson Correlation Coefficient was 0 (P&#x3D;0, 95% CI -0.143 to 0.143, onset delay &#x3D; -0 hours, duration of action &#x3D; -168 hours). When the Sleep Quality value is closer to 4.14 /5 than 3.03 /5, the Overall Mood value which follows is, on average, 17%  percent higher than its typical value.  When the Sleep Quality value is closer to 3.03 /5 than 4.14 /5, the Overall Mood value which follows is 0% lower than its typical value.  Overall Mood is 3.55/5 (15% higher) on average after days with around 4.19/5 Sleep Quality  Overall Mood is 2.65/5 (14% lower) on average after days with around 1.97/5 Sleep Quality | 
**study_title** | **string** | Example: N1 Study: Sleep Quality Predicts Higher Overall Mood | 
**t_value** | **double** | Example: 9.6986079652717 | 
**updated_at** | [**\DateTime**](\DateTime.md) | Example: 2017-05-06 15:40:38 | 
**user_id** | **int** | Example: 230 | 
**user_vote** | **int** | Example: 1 | 
**value_predicting_high_outcome** | **double** | Example: 4.14 | 
**value_predicting_high_outcome_explanation** | **string** | Example: Overall Mood, on average, 17% higher after around 4.14/5 Sleep Quality | 
**value_predicting_low_outcome** | **double** | Example: 3.03 | 
**value_predicting_low_outcome_explanation** | **string** | Example: Overall Mood, on average, 11% lower after around 3.03/5 Sleep Quality | 
**outcome_data_sources** | **string** | original name of the cause. | [optional] 
**principal_investigator** | **string** | Mike Sinn | [optional] 
**reverse_correlation** | **float** | Correlation when cause and effect are reversed. For any causal relationship, the forward correlation should exceed the reverse correlation. | [optional] 
**study_background** | **string** | In order to reduce suffering through the advancement of human knowledge... | [optional] 
**study_invitation** | **string** | Help us determine if Remeron affects Overall Mood! | [optional] 
**study_question** | **string** | Does Remeron affect Overall Mood? | [optional] 
**study_html** | **string** | Embeddable study HTML including chart svg&#39;s | [optional] 
**average_pearson_correlation_coefficient_over_onset_delays** | **string** | Example: | [optional] 
**calculation_start_time** | [**\DateTime**](\DateTime.md) | Example: | [optional] 
**cause_number_of_raw_measurements** | **int** | Example: 14764 | [optional] 
**correlations_over_durations_of_action** | **string** | Example: | [optional] 
**correlations_over_durations_of_action_chart_config** | **string** | Example: | [optional] 
**correlations_over_onset_delays_chart_config** | **string** | Example: | [optional] 
**degrees_of_freedom** | **int** | Example: 200 | [optional] 
**effect_number_of_processed_daily_measurements** | **int** | Example: 145 | [optional] 
**error** | **string** | Example: optimalPearsonProduct is not defined | [optional] 
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


