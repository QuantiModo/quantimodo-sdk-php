# Variable

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action_array** | [**\QuantiModo\Client\Model\TrackingReminderNotificationAction[]**](TrackingReminderNotificationAction.md) |  | [optional] 
**alias** | **string** | User-Defined Variable Setting:  Alternative display name | [optional] 
**available_units** | [**\QuantiModo\Client\Model\Unit[]**](Unit.md) |  | [optional] 
**best_study_link** | **string** | Link to study comparing variable with strongest relationship for user or population | [optional] 
**best_study_card** | [**\QuantiModo\Client\Model\Card**](Card.md) | Description of relationship with variable with strongest relationship for user or population | [optional] 
**best_user_study_link** | **string** | Link to study comparing variable with strongest relationship for user | [optional] 
**best_user_study_card** | [**\QuantiModo\Client\Model\Card**](Card.md) | Description of relationship with variable with strongest relationship for user | [optional] 
**best_population_study_link** | **string** | Link to study comparing variable with strongest relationship for population | [optional] 
**best_population_study_card** | [**\QuantiModo\Client\Model\Card**](Card.md) | Description of relationship with variable with strongest relationship for population | [optional] 
**optimal_value_message** | **string** | Description of relationship with variable with strongest relationship for user or population | [optional] 
**common_optimal_value_message** | **string** | Description of relationship with variable with strongest relationship for population | [optional] 
**user_optimal_value_message** | **string** | Description of relationship with variable with strongest relationship for user | [optional] 
**card** | [**\QuantiModo\Client\Model\Card**](Card.md) | Card containing instructions, image, text, link and relevant import buttons | [optional] 
**cause_only** | **bool** | User-Defined Variable Setting: True indicates that this variable is generally a cause in a causal relationship.  An example of a causeOnly variable would be a variable such as Cloud Cover which would generally not be influenced by the behaviour of the user | [optional] 
**charts** | [**\QuantiModo\Client\Model\VariableCharts**](VariableCharts.md) |  | [optional] 
**charts_link_dynamic** | **string** | Ex: https://local.quantimo.do/ionic/Modo/www/#/app/charts/Trader%20Joes%20Bedtime%20Tea%20%2F%20Sleepytime%20Tea%20%28any%20Brand%29?variableName&#x3D;Trader%20Joes%20Bedtime%20Tea%20%2F%20Sleepytime%20Tea%20%28any%20Brand%29&amp;userId&#x3D;230&amp;pngUrl&#x3D;https%3A%2F%2Fapp.quantimo.do%2Fionic%2FModo%2Fwww%2Fimg%2Fvariable_categories%2Ftreatments.png | [optional] 
**charts_link_email** | **string** | Ex: mailto:?subject&#x3D;Check%20out%20my%20Trader%20Joes%20Bedtime%20Tea%20%2F%20Sleepytime%20Tea%20%28any%20Brand%29%20data%21&amp;body&#x3D;See%20my%20Trader%20Joes%20Bedtime%20Tea%20%2F%20Sleepytime%20Tea%20%28any%20Brand%29%20history%20at%20https%3A%2F%2Flocal.quantimo.do%2Fapi%2Fv2%2Fcharts%3FvariableName%3DTrader%2520Joes%2520Bedtime%2520Tea%2520%252F%2520Sleepytime%2520Tea%2520%2528any%2520Brand%2529%26userId%3D230%26pngUrl%3Dhttps%253A%252F%252Fapp.quantimo.do%252Fionic%252FModo%252Fwww%252Fimg%252Fvariable_categories%252Ftreatments.png%0A%0AHave%20a%20great%20day! | [optional] 
**charts_link_facebook** | **string** | Ex: https://www.facebook.com/sharer/sharer.php?u&#x3D;https%3A%2F%2Flocal.quantimo.do%2Fapi%2Fv2%2Fcharts%3FvariableName%3DTrader%2520Joes%2520Bedtime%2520Tea%2520%252F%2520Sleepytime%2520Tea%2520%2528any%2520Brand%2529%26userId%3D230%26pngUrl%3Dhttps%253A%252F%252Fapp.quantimo.do%252Fionic%252FModo%252Fwww%252Fimg%252Fvariable_categories%252Ftreatments.png | [optional] 
**charts_link_google** | **string** | Ex: https://plus.google.com/share?url&#x3D;https%3A%2F%2Flocal.quantimo.do%2Fapi%2Fv2%2Fcharts%3FvariableName%3DTrader%2520Joes%2520Bedtime%2520Tea%2520%252F%2520Sleepytime%2520Tea%2520%2528any%2520Brand%2529%26userId%3D230%26pngUrl%3Dhttps%253A%252F%252Fapp.quantimo.do%252Fionic%252FModo%252Fwww%252Fimg%252Fvariable_categories%252Ftreatments.png | [optional] 
**charts_link_static** | **string** | Ex: https://local.quantimo.do/api/v2/charts?variableName&#x3D;Trader%20Joes%20Bedtime%20Tea%20%2F%20Sleepytime%20Tea%20%28any%20Brand%29&amp;userId&#x3D;230&amp;pngUrl&#x3D;https%3A%2F%2Fapp.quantimo.do%2Fionic%2FModo%2Fwww%2Fimg%2Fvariable_categories%2Ftreatments.png | [optional] 
**charts_link_twitter** | **string** | Ex: https://twitter.com/home?status&#x3D;Check%20out%20my%20Trader%20Joes%20Bedtime%20Tea%20%2F%20Sleepytime%20Tea%20%28any%20Brand%29%20data%21%20https%3A%2F%2Flocal.quantimo.do%2Fapi%2Fv2%2Fcharts%3FvariableName%3DTrader%2520Joes%2520Bedtime%2520Tea%2520%252F%2520Sleepytime%2520Tea%2520%2528any%2520Brand%2529%26userId%3D230%26pngUrl%3Dhttps%253A%252F%252Fapp.quantimo.do%252Fionic%252FModo%252Fwww%252Fimg%252Fvariable_categories%252Ftreatments.png%20%40quantimodo | [optional] 
**child_common_tag_variables** | [**\QuantiModo\Client\Model\Variable[]**](Variable.md) | Commonly defined for all users. An example of a parent category variable would be Fruit when tagged with the child sub-type variables Apple.  Child variable (Apple) measurements will be included when the parent category (Fruit) is analyzed.  This allows us to see how Fruit consumption might be affecting without having to record both Fruit and Apple intake. | [optional] 
**child_user_tag_variables** | [**\QuantiModo\Client\Model\Variable[]**](Variable.md) | User-Defined Variable Setting: An example of a parent category variable would be Fruit when tagged with the child sub-type variables Apple.  Child variable (Apple) measurements will be included when the parent category (Fruit) is analyzed.  This allows us to see how Fruit consumption might be affecting without having to record both Fruit and Apple intake. | [optional] 
**client_id** | **string** | Your QuantiModo client id can be obtained by creating an app at https://builder.quantimo.do | [optional] 
**combination_operation** | **string** | User-Defined Variable Setting: How to aggregate measurements over time. SUM should be used for things like minutes of exercise.  If you use MEAN for exercise, then a person might exercise more minutes in one day but add separate measurements that were smaller.  So when we are doing correlational analysis, we would think that the person exercised less that day even though they exercised more.  Conversely, we must use MEAN for things such as ratings which cannot be SUMMED. | [optional] 
**common_alias** | **string** | Ex: Anxiety / Nervousness | [optional] 
**common_tagged_variables** | [**\QuantiModo\Client\Model\Variable[]**](Variable.md) |  | [optional] 
**common_tag_variables** | [**\QuantiModo\Client\Model\Variable[]**](Variable.md) |  | [optional] 
**created_at** | **string** | When the record was first created. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format | [optional] 
**data_source_names** | **string** | Comma-separated list of source names to limit variables to those sources | [optional] 
**data_sources** | [**\QuantiModo\Client\Model\DataSource[]**](DataSource.md) | These are sources of measurements for this variable | [optional] 
**description** | **string** | User-Defined Variable Setting: Ex: Summary to be used in studies. | [optional] 
**display_name** | **string** | Ex: Trader Joe&#39;s Bedtime Tea | [optional] 
**duration_of_action** | **int** | The amount of time over which a predictor/stimulus event can exert an observable influence on an outcome variable value. For instance, aspirin (stimulus/predictor) typically decreases headache severity for approximately four hours (duration of action) following the onset delay. Unit: Seconds | [optional] 
**duration_of_action_in_hours** | **float** | User-Defined Variable Setting: The amount of time over which a predictor/stimulus event can exert an observable influence on an outcome variable value. For instance, aspirin (stimulus/predictor) typically decreases headache severity for approximately four hours (duration of action) following the onset delay.  Unit: Hours | [optional] 
**earliest_filling_time** | **int** | Earliest filling time | [optional] 
**earliest_measurement_time** | **int** | Earliest measurement time | [optional] 
**earliest_source_time** | **int** | Earliest source time | [optional] 
**error_message** | **string** | Error message from last analysis | [optional] 
**experiment_end_time** | **string** | User-Defined Variable Setting: Latest measurement time to be used in analysis. Format: UTC ISO 8601 YYYY-MM-DDThh:mm:ss. | [optional] 
**experiment_start_time** | **string** | User-Defined Variable Setting: Earliest measurement time to be used in analysis. Format: UTC ISO 8601 YYYY-MM-DDThh:mm:ss. | [optional] 
**filling_type** | **string** | User-Defined Variable Setting: When it comes to analysis to determine the effects of this variable, knowing when it did not occur is as important as knowing when it did occur. For example, if you are tracking a medication, it is important to know when you did not take it, but you do not have to log zero values for all the days when you haven&#39;t taken it. Hence, you can specify a filling value (typically 0) to insert whenever data is missing. | [optional] 
**filling_value** | **float** | User-Defined Variable Setting: When it comes to analysis to determine the effects of this variable, knowing when it did not occur is as important as knowing when it did occur. For example, if you are tracking a medication, it is important to know when you did not take it, but you do not have to log zero values for all the days when you haven&#39;t taken it. Hence, you can specify a filling value (typically 0) to insert whenever data is missing.  Unit: User-specified or common. | [optional] 
**icon_icon** | **string** | Ex: ion-sad-outline | [optional] 
**id** | **int** | Ex: 95614 | 
**image_url** | **string** | What do you expect? | [optional] 
**informational_url** | **string** | Ex: https://google.com | [optional] 
**ingredient_of_common_tag_variables** | [**\QuantiModo\Client\Model\Variable[]**](Variable.md) | Commonly defined for all users. IngredientOf variable measurements will be included in analysis of the ingredient variable.  For instance, a ingredient of the variable Lollipop could be Sugar.  This way you only have to record Lollipop consumption and we can use this data to see how sugar might be affecting you. | [optional] 
**ingredient_common_tag_variables** | [**\QuantiModo\Client\Model\Variable[]**](Variable.md) | Commonly defined for all users. IngredientOf variable measurements will be included in analysis of the ingredient variable.  For instance, a ingredient of the variable Lollipop could be Sugar.  This way you only have to record Lollipop consumption and we can use this data to see how sugar might be affecting you. | [optional] 
**ingredient_of_user_tag_variables** | [**\QuantiModo\Client\Model\Variable[]**](Variable.md) | User-Defined Variable Setting: IngredientOf variable measurements will be included in analysis of the ingredient variable.  For instance, a ingredient of the variable Lollipop could be Sugar.  This way you only have to record Lollipop consumption and we can use this data to see how sugar might be affecting you. | [optional] 
**ingredient_user_tag_variables** | [**\QuantiModo\Client\Model\Variable[]**](Variable.md) | User-Defined Variable Setting: IngredientOf variable measurements will be included in analysis of the ingredient variable.  For instance, a ingredient of the variable Lollipop could be Sugar.  This way you only have to record Lollipop consumption and we can use this data to see how sugar might be affecting you. | [optional] 
**input_type** | **string** | Type of input field to show for recording measurements | [optional] 
**ion_icon** | **string** | What do you expect? | [optional] 
**joined_common_tag_variables** | [**\QuantiModo\Client\Model\Variable[]**](Variable.md) | Commonly defined for all users.  Joining can be used used to merge duplicate variables. For instance, if two variables called Apples (Red Delicious) and Red Delicious Apples are joined, when one of them is analyzed, the measurements for the other will be included as well. | [optional] 
**joined_user_tag_variables** | [**\QuantiModo\Client\Model\Variable[]**](Variable.md) | User-Defined Variable Setting: Joining can be used used to merge duplicate variables. For instance, if two variables called Apples (Red Delicious) and Red Delicious Apples are joined, when one of them is analyzed, the measurements for the other will be included as well. | [optional] 
**join_with** | **int** | Duplicate variables. If the variable is joined with some other variable then it is not shown to user in the list of variables | [optional] 
**kurtosis** | **float** | Kurtosis | [optional] 
**last_processed_daily_value** | **double** | Calculated Statistic: Ex: 500. Unit: User-specified or common. | [optional] 
**last_successful_update_time** | **string** | When this variable or its settings were last updated UTC ISO 8601 YYYY-MM-DDThh:mm:ss | [optional] 
**last_value** | **float** | Calculated Statistic: Last measurement value in the common unit or user unit if different. Unit: User-specified or common. | [optional] 
**latest_filling_time** | **int** | Latest filling time | [optional] 
**latest_measurement_time** | **int** | Latest measurement time. Format: Unix-time epoch seconds. | [optional] 
**latest_source_time** | **int** | Latest source time. Format: Unix-time epoch seconds. | [optional] 
**latest_user_measurement_time** | **int** | Ex: 1501383600. Format: Unix-time epoch seconds. | [optional] 
**latitude** | **float** | Latitude. Unit: User-specified or common. | [optional] 
**location** | **string** | Location | [optional] 
**longitude** | **float** | Longitude | [optional] 
**manual_tracking** | **bool** | True if the variable is an emotion or symptom rating that is not typically automatically collected by a device or app. | [optional] 
**maximum_allowed_daily_value** | **float** | User-Defined Variable Setting: The maximum allowed value a daily aggregated measurement. Unit: User-specified or common. | [optional] 
**maximum_allowed_value** | **float** | User-Defined Variable Setting: The maximum allowed value a single measurement. While you can record a value above this maximum, it will be excluded from the correlation analysis.  Unit: User-specified or common. | [optional] 
**maximum_recorded_daily_value** | **float** | Calculated Statistic: Maximum recorded daily value of this variable. Unit: User-specified or common. | [optional] 
**maximum_recorded_value** | **double** | Calculated Statistic: Ex: 1. Unit: User-specified or common. | [optional] 
**mean** | **float** | Mean. Unit: User-specified or common. | [optional] 
**measurements_at_last_analysis** | **int** | Number of measurements at last analysis | [optional] 
**median** | **float** | Median | [optional] 
**minimum_allowed_value** | **float** | User-Defined Variable Setting: The minimum allowed value a single measurement. While you can record a value below this minimum, it will be excluded from the correlation analysis. Unit: User-specified or common | [optional] 
**minimum_allowed_daily_value** | **float** | User-Defined Variable Setting: The minimum allowed value a daily aggregated measurement.  For instance, you might set to 100 for steps to keep erroneous 0 daily steps out of the analysis. Unit: User-specified or common. | [optional] 
**minimum_non_zero_value** | **float** | User-Defined Variable Setting: The minimum allowed non-zero value a single measurement.  For instance, you might set to 100 mL for steps to keep erroneous 0 daily steps out of the analysis. Unit: User-specified or common. | [optional] 
**minimum_recorded_value** | **float** | Minimum recorded value of this variable. Unit: User-specified or common. | [optional] 
**most_common_connector_id** | **int** | Ex: 51 | [optional] 
**most_common_original_unit_id** | **int** | Ex: 23 | [optional] 
**most_common_unit_id** | **int** | Most common Unit ID | [optional] 
**most_common_value** | **float** | Calculated Statistic: Most common value. Unit: User-specified or common. | [optional] 
**name** | **string** | Ex: Trader Joes Bedtime Tea / Sleepytime Tea (any Brand) | 
**number_of_aggregate_correlations_as_cause** | **int** | Ex: 1 | [optional] 
**number_of_aggregate_correlations_as_effect** | **int** | Ex: 310 | [optional] 
**number_of_changes** | **int** | Number of changes | [optional] 
**number_of_correlations** | **int** | Number of correlations for this variable | [optional] 
**number_of_correlations_as_cause** | **int** | numberOfAggregateCorrelationsAsCause plus numberOfUserCorrelationsAsCause | [optional] 
**number_of_correlations_as_effect** | **int** | numberOfAggregateCorrelationsAsEffect plus numberOfUserCorrelationsAsEffect | [optional] 
**number_of_processed_daily_measurements** | **int** | Number of processed measurements | [optional] 
**number_of_raw_measurements** | **int** | Ex: 295 | [optional] 
**number_of_tracking_reminders** | **int** | Ex: 1 | [optional] 
**number_of_unique_daily_values** | **float** | Number of unique daily values | [optional] 
**number_of_unique_values** | **int** | Ex: 2 | [optional] 
**number_of_user_correlations_as_cause** | **int** | Ex: 115 | [optional] 
**number_of_user_correlations_as_effect** | **int** | Ex: 29014 | [optional] 
**number_of_user_variables** | **int** | Ex: 2 | [optional] 
**onset_delay** | **int** | The amount of time in seconds that elapses after the predictor/stimulus event before the outcome as perceived by a self-tracker is known as the onset delay. For example, the onset delay between the time a person takes an aspirin (predictor/stimulus event) and the time a person perceives a change in their headache severity (outcome) is approximately 30 minutes. | [optional] 
**onset_delay_in_hours** | **double** | User-Defined Variable Setting: The amount of time in seconds that elapses after the predictor/stimulus event before the outcome as perceived by a self-tracker is known as the onset delay. For example, the onset delay between the time a person takes an aspirin (predictor/stimulus event) and the time a person perceives a change in their headache severity (outcome) is approximately 30 minutes. | [optional] 
**outcome** | **bool** | User-Defined Variable Setting: True for variables for which a human would generally want to identify the influencing factors. These include symptoms of illness, physique, mood, cognitive performance, etc.  Generally correlation calculations are only performed on outcome variables | [optional] 
**outcome_of_interest** | **bool** | Do you want to receive updates on newly discovered factors influencing this variable? | [optional] 
**parent_common_tag_variables** | [**\QuantiModo\Client\Model\Variable[]**](Variable.md) | Commonly defined for all users.  An example of a parent category variable would be Fruit when tagged with the child sub-type variables Apple.  Child variable (Apple) measurements will be included when the parent category (Fruit) is analyzed.  This allows us to see how Fruit consumption might be affecting without having to record both Fruit and Apple intake. | [optional] 
**parent_user_tag_variables** | [**\QuantiModo\Client\Model\Variable[]**](Variable.md) | User-defined. An example of a parent category variable would be Fruit when tagged with the child sub-type variables Apple.  Child variable (Apple) measurements will be included when the parent category (Fruit) is analyzed.  This allows us to see how Fruit consumption might be affecting without having to record both Fruit and Apple intake. | [optional] 
**png_path** | **string** | Ex: img/variable_categories/treatments.png | [optional] 
**png_url** | **string** | Ex: https://web.quantimo.do/img/variable_categories/treatments.png | [optional] 
**predictor_of_interest** | **int** | Ex: 0 | [optional] 
**price** | **double** | Ex: 95.4 | [optional] 
**product_url** | **string** | Link to associated product for purchase | [optional] 
**public** | **bool** | Should this variable show up in automcomplete searches for users who do not already have measurements for it? | [optional] 
**question** | **string** | Ex: How is your overall mood? | [optional] 
**long_question** | **string** | Ex: How is your overall mood on a scale of 1 to 5?? | [optional] 
**raw_measurements_at_last_analysis** | **int** | Ex: 131 | [optional] 
**second_most_common_value** | **double** | Calculated Statistic: Ex: 1. Unit: User-specified or common. | [optional] 
**second_to_last_value** | **double** | Calculated Statistic: Ex: 250. Unit: User-specified or common. | [optional] 
**share_user_measurements** | **bool** | Would you like to make your measurements publicly visible? | [optional] 
**skewness** | **float** | Skewness | [optional] 
**standard_deviation** | **double** | Standard deviation Ex: 0.46483219855434 | [optional] 
**status** | **string** | status | [optional] 
**subtitle** | **string** | Based on sort filter and can be shown beneath variable name on search list | [optional] 
**svg_url** | **string** | Ex: https://web.quantimo.do/img/variable_categories/treatments.svg | [optional] 
**third_most_common_value** | **double** | Calculated Statistic: Ex: 6. Unit: User-specified or common. | [optional] 
**third_to_last_value** | **double** | Calculated Statistic: Ex: 250. Unit: User-specified or common. | [optional] 
**tracking_instructions** | **string** | HTML instructions for tracking | [optional] 
**tracking_instructions_card** | [**\QuantiModo\Client\Model\Card**](Card.md) | Instructions for tracking with buttons and images | [optional] 
**unit** | [**\QuantiModo\Client\Model\Unit**](Unit.md) |  | [optional] 
**unit_abbreviated_name** | **string** | Ex: count | [optional] 
**unit_category_id** | **int** | Ex: 6 | [optional] 
**unit_category_name** | **string** | Ex: Miscellany | [optional] 
**unit_id** | **int** | ID of unit to use for this variable | [optional] 
**unit_name** | **string** | User-Defined Variable Setting: Count | [optional] 
**upc** | **string** | Universal product code or similar | [optional] 
**updated** | **int** | updated | [optional] 
**updated_at** | **string** | When the record in the database was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format | [optional] 
**updated_time** | **string** | Ex: 2017-07-30 14:58:26 | [optional] 
**user_id** | **int** | User ID | 
**user_tagged_variables** | [**\QuantiModo\Client\Model\Variable[]**](Variable.md) |  | [optional] 
**user_tag_variables** | [**\QuantiModo\Client\Model\Variable[]**](Variable.md) |  | [optional] 
**user_variable_unit_abbreviated_name** | **string** | Ex: count | [optional] 
**user_variable_unit_category_id** | **int** | Ex: 6 | [optional] 
**user_variable_unit_category_name** | **string** | Ex: Miscellany | [optional] 
**user_variable_unit_id** | **int** | Ex: 23 | [optional] 
**user_variable_unit_name** | **string** | Ex: Count | [optional] 
**variable_category** | [**\QuantiModo\Client\Model\VariableCategory**](VariableCategory.md) |  | [optional] 
**joined_variables** | [**\QuantiModo\Client\Model\Variable[]**](Variable.md) | Array of Variables that are joined with this Variable | [optional] 
**valence** | **string** | Ex: positive | [optional] 
**variable_category_id** | **int** | Ex: 6 | [optional] 
**variable_category_name** | **string** | User-Defined Variable Setting: Variable category like Emotions, Sleep, Physical Activities, Treatments, Symptoms, etc. | [optional] 
**variable_id** | **int** | Ex: 96380 | 
**variable_name** | **string** | Ex: Sleep Duration | [optional] 
**variance** | **double** | Statistic: Ex: 115947037.40816 | [optional] 
**wikipedia_title** | **string** | User-Defined Variable Setting: You can help to improve the studies by pasting the title of the most appropriate Wikipedia article for this variable | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

