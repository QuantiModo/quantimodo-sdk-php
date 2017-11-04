# CommonVariable

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**alias** | **string** | Example: | 
**available_units** | [**\QuantiModo\Client\Model\Unit[]**](Unit.md) |  | 
**category** | **string** | Example: Sleep | [optional] 
**cause_only** | **int** | A value of 1 indicates that this variable is generally a cause in a causal relationship.  An example of a causeOnly variable would be a variable such as Cloud Cover which would generally not be influenced by the behaviour of the user. | 
**charts_link_dynamic** | **string** | Example: https://local.quantimo.do/ionic/Modo/www/#/app/charts/Barometric%20Pressure?variableName&#x3D;Barometric%20Pressure&amp;userId&#x3D;230&amp;pngUrl&#x3D;https%3A%2F%2Fapp.quantimo.do%2Fionic%2FModo%2Fwww%2Fimg%2Fvariable_categories%2Fenvironment.png | 
**charts_link_email** | **string** | Example: mailto:?subject&#x3D;Check%20out%20my%20Barometric%20Pressure%20data%21&amp;body&#x3D;See%20my%20Barometric%20Pressure%20history%20at%20https%3A%2F%2Flocal.quantimo.do%2Fapi%2Fv2%2Fcharts%3FvariableName%3DBarometric%2520Pressure%26userId%3D230%26pngUrl%3Dhttps%253A%252F%252Fapp.quantimo.do%252Fionic%252FModo%252Fwww%252Fimg%252Fvariable_categories%252Fenvironment.png%0A%0AHave%20a%20great%20day! | 
**charts_link_facebook** | **string** | Example: https://www.facebook.com/sharer/sharer.php?u&#x3D;https%3A%2F%2Flocal.quantimo.do%2Fapi%2Fv2%2Fcharts%3FvariableName%3DBarometric%2520Pressure%26userId%3D230%26pngUrl%3Dhttps%253A%252F%252Fapp.quantimo.do%252Fionic%252FModo%252Fwww%252Fimg%252Fvariable_categories%252Fenvironment.png | 
**charts_link_google** | **string** | Example: https://plus.google.com/share?url&#x3D;https%3A%2F%2Flocal.quantimo.do%2Fapi%2Fv2%2Fcharts%3FvariableName%3DBarometric%2520Pressure%26userId%3D230%26pngUrl%3Dhttps%253A%252F%252Fapp.quantimo.do%252Fionic%252FModo%252Fwww%252Fimg%252Fvariable_categories%252Fenvironment.png | 
**charts_link_static** | **string** | Example: https://local.quantimo.do/api/v2/charts?variableName&#x3D;Barometric%20Pressure&amp;userId&#x3D;230&amp;pngUrl&#x3D;https%3A%2F%2Fapp.quantimo.do%2Fionic%2FModo%2Fwww%2Fimg%2Fvariable_categories%2Fenvironment.png | 
**charts_link_twitter** | **string** | Example: https://twitter.com/home?status&#x3D;Check%20out%20my%20Barometric%20Pressure%20data%21%20https%3A%2F%2Flocal.quantimo.do%2Fapi%2Fv2%2Fcharts%3FvariableName%3DBarometric%2520Pressure%26userId%3D230%26pngUrl%3Dhttps%253A%252F%252Fapp.quantimo.do%252Fionic%252FModo%252Fwww%252Fimg%252Fvariable_categories%252Fenvironment.png%20%40quantimodo | 
**child_user_tag_variables** | [**\QuantiModo\Client\Model\UserVariableArray**](UserVariableArray.md) |  | 
**client_id** | **string** | Example: local | 
**combination_operation** | **string** | Way to aggregate measurements over time. Options are \&quot;MEAN\&quot; or \&quot;SUM\&quot;. SUM should be used for things like minutes of exercise.  If you use MEAN for exercise, then a person might exercise more minutes in one day but add separate measurements that were smaller.  So when we are doing correlational analysis, we would think that the person exercised less that day even though they exercised more.  Conversely, we must use MEAN for things such as ratings which cannot be SUMMED. | 
**common_alias** | **string** | Example: Mood_(psychology) | [optional] 
**common_tagged_variables** | [**\QuantiModo\Client\Model\CommonVariableArray**](CommonVariableArray.md) |  | 
**common_tag_variables** | [**\QuantiModo\Client\Model\CommonVariableArray**](CommonVariableArray.md) |  | 
**common_variable_most_common_connector_id** | **int** | Example: 13 | 
**common_variable_updated_at** | [**\DateTime**](\DateTime.md) | Example: 2017-07-30 20:47:38 | 
**created_at** | [**\DateTime**](\DateTime.md) | Example: 2014-10-23 03:41:06 | [optional] 
**data_source** | [**\QuantiModo\Client\Model\DataSource**](DataSource.md) |  | 
**highcharts** | [**\QuantiModo\Client\Model\HighchartArray**](HighchartArray.md) |  | [optional] 
**unit_abbreviated_name** | **string** | Abbreviated name of the default unit for the variable | 
**unit_category_id** | **int** | Example: 1 | [optional] 
**unit_category_name** | **string** | Example: Duration | [optional] 
**unit_id** | **int** | Id of the default unit for the variable | 
**unit_name** | **string** | Example: Hours | [optional] 
**description** | **string** | Example: positive | [optional] 
**duration_of_action** | **int** | The amount of time over which a predictor/stimulus event can exert an observable influence on an outcome variable value. For instance, aspirin (stimulus/predictor) typically decreases headache severity for approximately four hours (duration of action) following the onset delay. | 
**duration_of_action_in_hours** | **int** | Example: 168 | [optional] 
**earliest_filling_time** | **int** | Example: 1362099600 | 
**earliest_measurement_time** | **int** | Earliest measurement time | 
**earliest_source_time** | **int** | Example: 1334473200 | 
**experiment_end_time** | [**\DateTime**](\DateTime.md) | Example: | 
**experiment_end_time_seconds** | [**\DateTime**](\DateTime.md) | Example: | 
**experiment_end_time_string** | [**\DateTime**](\DateTime.md) | Example: | 
**experiment_start_time** | [**\DateTime**](\DateTime.md) | Example: | 
**experiment_start_time_seconds** | [**\DateTime**](\DateTime.md) | Example: | 
**experiment_start_time_string** | [**\DateTime**](\DateTime.md) | Example: | 
**filling_type** | **string** | Example: | 
**filling_value** | **double** | When it comes to analysis to determine the effects of this variable, knowing when it did not occur is as important as knowing when it did occur. For example, if you are tracking a medication, it is important to know when you did not take it, but you do not have to log zero values for all the days when you haven&#39;t taken it. Hence, you can specify a filling value (typically 0) to insert whenever data is missing. | 
**id** | **int** | Variable ID | [optional] 
**image_url** | **string** |  | [optional] 
**informational_url** | **string** | Example: | 
**ingredient_of_user_tag_variables** | [**\QuantiModo\Client\Model\UserVariableArray**](UserVariableArray.md) |  | 
**ingredient_user_tag_variables** | [**\QuantiModo\Client\Model\UserVariableArray**](UserVariableArray.md) |  | 
**input_type** | **string** | Example: slider | [optional] 
**ion_icon** | **string** |  | [optional] 
**joined_user_tag_variables** | [**\QuantiModo\Client\Model\UserVariableArray**](UserVariableArray.md) |  | 
**joined_variables** | [**\QuantiModo\Client\Model\CommonVariable[]**](CommonVariable.md) | Array of Variables that are joined with this Variable | 
**join_with** | **string** | The Variable this Variable should be joined with. If the variable is joined with some other variable then it is not shown to user in the list of variables. | 
**kurtosis** | **double** | Example: 10.764488721491 | [optional] 
**last_original_unit_id** | **int** | Example: 47 | 
**last_original_value** | **double** | Example: 100900 | 
**last_processed_daily_value** | **double** | Example: 100900 | 
**last_source** | **int** | Last source | 
**last_successful_update_time** | [**\DateTime**](\DateTime.md) | Example: 2017-02-08 17:43:01 | 
**last_unit** | **string** | Last unit | 
**last_unit_id** | **int** | Example: 47 | 
**last_value** | **int** | Last value | 
**latest_filling_time** | **int** | Example: 1501722000 | 
**latest_measurement_time** | **int** | Latest measurement time | 
**latest_source_time** | **int** | Example: 1501722000 | 
**latest_user_measurement_time** | **int** | Example: 1501722000 | 
**manual_tracking** | **bool** | Example: 1 | [optional] 
**maximum_allowed_value** | **double** | The maximum allowed value for measurements. While you can record a value above this maximum, it will be excluded from the correlation analysis. | 
**maximum_recorded_value** | **double** | Example: 104700 | 
**mean** | **double** | Example: 2202.3886251393 | [optional] 
**measurements_at_last_analysis** | **int** | Example: 9795 | 
**median** | **double** | Example: 2255.9284755781 | [optional] 
**minimum_allowed_value** | **double** | The minimum allowed value for measurements. While you can record a value below this minimum, it will be excluded from the correlation analysis. | 
**minimum_recorded_value** | **double** | Example: 1008.74 | 
**most_common_connector_id** | **int** | Example: 7 | [optional] 
**most_common_original_unit_id** | **int** | Example: 2 | [optional] 
**most_common_unit** | **string** | Most common unit | 
**most_common_value** | **int** | Most common value | 
**name** | **string** | User-defined variable display name. | 
**number_of_aggregate_correlations_as_cause** | **int** | Example: 386 | [optional] 
**number_of_aggregate_correlations_as_effect** | **int** | Example: 2074 | [optional] 
**number_of_changes** | **int** | Example: 1317 | 
**number_of_correlations** | **int** | Number of correlations | 
**number_of_measurements** | **int** | Example: 308554 | [optional] 
**number_of_processed_daily_measurements** | **int** | Example: 1364 | 
**number_of_raw_measurements** | **int** | Number of measurements | 
**number_of_tracking_reminders** | **int** | Example: 6 | [optional] 
**number_of_unique_daily_values** | **int** | Example: 283 | 
**number_of_unique_values** | **int** | Example: 74 | [optional] 
**number_of_user_correlations_as_cause** | **int** | Example: 155 | 
**number_of_user_correlations_as_effect** | **int** | Example: 0 | 
**number_of_user_variables** | **int** | Example: 307 | [optional] 
**onset_delay** | **int** | The amount of time in seconds that elapses after the predictor/stimulus event before the outcome as perceived by a self-tracker is known as the onset delay. For example, the onset delay between the time a person takes an aspirin (predictor/stimulus event) and the time a person perceives a change in their headache severity (outcome) is approximately 30 minutes. | 
**onset_delay_in_hours** | **int** | Example: 0 | 
**outcome** | **int** | Outcome variables (those with &#x60;outcome&#x60; &#x3D;&#x3D; 1) are variables for which a human would generally want to identify the influencing factors. These include symptoms of illness, physique, mood, cognitive performance, etc.  Generally correlation calculations are only performed on outcome variables. | 
**outcome_of_interest** | **int** | Example: 0 | 
**parent** | **int** | Id of the parent variable if this variable has any parent | 
**parent_id** | **string** | Example: | 
**parent_user_tag_variables** | [**\QuantiModo\Client\Model\UserVariableArray**](UserVariableArray.md) |  | 
**png_path** | **string** | Example: img/variable_categories/sleep.png | [optional] 
**png_url** | **string** | Example: https://app.quantimo.do/ionic/Modo/www/img/variable_categories/sleep.png | [optional] 
**predictor_of_interest** | **int** | Example: 0 | 
**price** | **string** | Example: | 
**product_url** | **string** | Example: | 
**public** | **bool** | Example: 1 | [optional] 
**raw_measurements_at_last_analysis** | **int** | The number of measurements that a given user had for this variable the last time a correlation calculation was performed. Generally correlation values are only updated once the current number of measurements for a variable is more than 10% greater than the rawMeasurementsAtLastAnalysis.  This avoids a computationally-demanding recalculation when there&#39;s not enough new data to make a significant difference in the correlation. | 
**second_most_common_value** | **double** | Example: 8 | [optional] 
**second_to_last_value** | **double** | Example: 101800 | 
**share_user_measurements** | **bool** | Example: false | 
**skewness** | **double** | Example: 0.2461351905455 | [optional] 
**sources** | **string** | Comma-separated list of source names to limit variables to those sources | 
**standard_deviation** | **double** | Example: 1840.535129803 | [optional] 
**status** | **string** | Example: UPDATED | 
**subtitle** | **string** | Based on sort filter and can be shown beneath variable name on search list | [optional] 
**sub_variables** | [**\QuantiModo\Client\Model\CommonVariable[]**](CommonVariable.md) | Array of Variables that are sub variables to this Variable | 
**svg_url** | **string** | Example: https://app.quantimo.do/ionic/Modo/www/img/variable_categories/sleep.svg | [optional] 
**third_most_common_value** | **double** | Example: 7 | [optional] 
**third_to_last_value** | **double** | Example: 102000 | 
**updated** | **int** | When this variable or its settings were last updated | 
**updated_at** | [**\DateTime**](\DateTime.md) | Example: 2017-07-31 03:57:06 | [optional] 
**user_id** | **int** | Example: 230 | 
**valence** | **string** | Example: positive | [optional] 
**variable_category_id** | **int** | Example: 6 | [optional] 
**variable_category_image_url** | **string** | Example: https://maxcdn.icons8.com/Color/PNG/96/Household/sleeping_in_bed-96.png | [optional] 
**variable_category_name** | **string** | Variable category like Mood, Sleep, Physical Activity, Treatment, Symptom, etc. | 
**variable_filling_value** | **double** | Example: -1 | 
**variable_id** | **int** | Example: 96380 | 
**variable_name** | **string** | Example: Sleep Duration | [optional] 
**variance** | **double** | Example: 115947037.40816 | [optional] 
**wikipedia_title** | **string** | Example: | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


