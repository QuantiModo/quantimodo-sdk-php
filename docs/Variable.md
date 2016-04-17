# Variable

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Variable ID | [optional] 
**name** | **string** | User-defined variable display name. | 
**original_name** | **string** | Name used when the variable was originally created in the `variables` table. | 
**category** | **string** | Variable category like Mood, Sleep, Physical Activity, Treatment, Symptom, etc. | 
**abbreviated_unit_name** | **string** | Abbreviated name of the default unit for the variable | 
**abbreviated_unit_id** | **int** | Id of the default unit for the variable | 
**sources** | **string** | Comma-separated list of source names to limit variables to those sources | 
**minimum_value** | **double** | Minimum reasonable value for this variable (uses default unit) | 
**maximum_value** | **double** | Maximum reasonable value for this variable (uses default unit) | 
**combination_operation** | **string** | Way to aggregate measurements over time. Options are \&quot;MEAN\&quot; or \&quot;SUM\&quot;.  SUM should be used for things like minutes of exercise.  If you use MEAN for exercise, then a person might exercise more minutes in one day but add separate measurements that were smaller.  So when we are doing correlational analysis, we would think that the person exercised less that day even though they exercised more.  Conversely, we must use MEAN for things such as ratings which cannot be SUMMED. | 
**filling_value** | **double** | Value for replacing null measurements | 
**join_with** | **string** | The Variable this Variable should be joined with. If the variable is joined with some other variable then it is not shown to user in the list of variables. | 
**joined_variables** | [**\Swagger\Client\Model\Variable[]**](Variable.md) | Array of Variables that are joined with this Variable | 
**parent** | **int** | Id of the parent variable if this variable has any parent | 
**sub_variables** | [**\Swagger\Client\Model\Variable[]**](Variable.md) | Array of Variables that are sub variables to this Variable | 
**onset_delay** | **int** | How long it takes for a measurement in this variable to take effect | 
**duration_of_action** | **int** | How long the effect of a measurement in this variable lasts | 
**earliest_measurement_time** | **int** | Earliest measurement time | 
**latest_measurement_time** | **int** | Latest measurement time | 
**updated** | **int** | When this variable or its settings were last updated | 
**cause_only** | **int** | A value of 1 indicates that this variable is generally a cause in a causal relationship.  An example of a causeOnly variable would be a variable such as Cloud Cover which would generally not be influenced by the behaviour of the user. | 
**number_of_correlations** | **int** | Number of correlations | 
**outcome** | **int** | Outcome variables (those with `outcome` == 1) are variables for which a human would generally want to identify the influencing factors.  These include symptoms of illness, physique, mood, cognitive performance, etc.  Generally correlation calculations are only performed on outcome variables. | 
**measurements_at_last_analysis** | **int** | The number of measurements that a given user had for this variable the last time a correlation calculation was performed. Generally correlation values are only updated once the current number of measurements for a variable is more than 10% greater than the measurementsAtLastAnalysis.  This avoids a computationally-demanding recalculation when there&#39;s not enough new data to make a significant difference in the correlation. | 
**number_of_measurements** | **int** | Number of measurements | 
**last_unit** | **string** | Last unit | 
**last_value** | **int** | Last value | 
**most_common_value** | **int** | Most common value | 
**most_common_unit** | **string** | Most common unit | 
**last_source** | **int** | Last source | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


