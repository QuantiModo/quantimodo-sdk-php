# Variable

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Variable ID | [optional] 
**name** | **string** | User-defined variable display name. | 
**original_name** | **string** | Name used when the variable was originally created in the &#x60;variables&#x60; table. | 
**category** | **string** | Variable category like Mood, Sleep, Physical Activity, Treatment, Symptom, etc. | 
**abbreviated_unit_name** | **string** | Abbreviated name of the default unit for the variable | 
**abbreviated_unit_id** | **int** | Id of the default unit for the variable | 
**sources** | **string** | Comma-separated list of source names to limit variables to those sources | 
**minimum_allowed_value** | **double** | The minimum allowed value for measurements. While you can record a value below this minimum, it will be excluded from the correlation analysis. | 
**maximum_allowed_value** | **double** | The maximum allowed value for measurements. While you can record a value above this maximum, it will be excluded from the correlation analysis. | 
**combination_operation** | **string** | Way to aggregate measurements over time. Options are \&quot;MEAN\&quot; or \&quot;SUM\&quot;.  SUM should be used for things like minutes of exercise.  If you use MEAN for exercise, then a person might exercise more minutes in one day but add separate measurements that were smaller.  So when we are doing correlational analysis, we would think that the person exercised less that day even though they exercised more.  Conversely, we must use MEAN for things such as ratings which cannot be SUMMED. | 
**filling_value** | **double** | When it comes to analysis to determine the effects of this variable, knowing when it did not occur is as important as knowing when it did occur. For example, if you are tracking a medication, it is important to know when you did not take it, but you do not have to log zero values for all the days when you haven&#39;t taken it. Hence, you can specify a filling value (typically 0) to insert whenever data is missing. | 
**join_with** | **string** | The Variable this Variable should be joined with. If the variable is joined with some other variable then it is not shown to user in the list of variables. | 
**joined_variables** | [**\QuantiModo\Client\QuantiModo\Client\Model\Variable[]**](Variable.md) | Array of Variables that are joined with this Variable | 
**parent** | **int** | Id of the parent variable if this variable has any parent | 
**sub_variables** | [**\QuantiModo\Client\QuantiModo\Client\Model\Variable[]**](Variable.md) | Array of Variables that are sub variables to this Variable | 
**onset_delay** | **int** | The amount of time in seconds that elapses after the predictor/stimulus event before the outcome as perceived by a self-tracker is known as the “onset delay”. For example, the “onset delay” between the time a person takes an aspirin (predictor/stimulus event) and the time a person perceives a change in their headache severity (outcome) is approximately 30 minutes. | 
**duration_of_action** | **int** | The amount of time over which a predictor/stimulus event can exert an observable influence on an outcome variable’s value. For instance, aspirin (stimulus/predictor) typically decreases headache severity for approximately four hours (duration of action) following the onset delay. | 
**earliest_measurement_time** | **int** | Earliest measurement time | 
**latest_measurement_time** | **int** | Latest measurement time | 
**updated** | **int** | When this variable or its settings were last updated | 
**cause_only** | **int** | A value of 1 indicates that this variable is generally a cause in a causal relationship.  An example of a causeOnly variable would be a variable such as Cloud Cover which would generally not be influenced by the behaviour of the user. | 
**number_of_correlations** | **int** | Number of correlations | 
**outcome** | **int** | Outcome variables (those with &#x60;outcome&#x60; &#x3D;&#x3D; 1) are variables for which a human would generally want to identify the influencing factors.  These include symptoms of illness, physique, mood, cognitive performance, etc.  Generally correlation calculations are only performed on outcome variables. | 
**raw_measurements_at_last_analysis** | **int** | The number of measurements that a given user had for this variable the last time a correlation calculation was performed. Generally correlation values are only updated once the current number of measurements for a variable is more than 10% greater than the rawMeasurementsAtLastAnalysis.  This avoids a computationally-demanding recalculation when there&#39;s not enough new data to make a significant difference in the correlation. | 
**number_of_raw_measurements** | **int** | Number of measurements | 
**last_unit** | **string** | Last unit | 
**last_value** | **int** | Last value | 
**most_common_value** | **int** | Most common value | 
**most_common_unit** | **string** | Most common unit | 
**last_source** | **int** | Last source | 
**image_url** | **string** |  | [optional] 
**ion_icon** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


