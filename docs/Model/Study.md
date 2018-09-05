# Study

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Ex: population, cohort, or individual | 
**user_id** | **string** | The user id of the principal investigator or subject if an individual studies | [optional] 
**study_id** | **string** | ID of the cohort study which is necessary to allow participants to join | [optional] 
**cause_variable** | [**\QuantiModo\Client\Model\Variable**](Variable.md) |  | [optional] 
**cause_variable_name** | **string** | Ex: Sleep Quality | [optional] 
**study_charts** | [**\QuantiModo\Client\Model\StudyCharts**](StudyCharts.md) |  | [optional] 
**effect_variable** | [**\QuantiModo\Client\Model\Variable**](Variable.md) |  | [optional] 
**effect_variable_name** | **string** | Ex: Overall Mood | [optional] 
**participant_instructions** | [**\QuantiModo\Client\Model\ParticipantInstruction**](ParticipantInstruction.md) |  | [optional] 
**statistics** | [**\QuantiModo\Client\Model\Correlation**](Correlation.md) |  | [optional] 
**study_card** | [**\QuantiModo\Client\Model\Card**](Card.md) | Contains a summary, images, sharing buttons, and links | [optional] 
**study_html** | [**\QuantiModo\Client\Model\StudyHtml**](StudyHtml.md) |  | [optional] 
**study_images** | [**\QuantiModo\Client\Model\StudyImages**](StudyImages.md) |  | [optional] 
**study_links** | [**\QuantiModo\Client\Model\StudyLinks**](StudyLinks.md) |  | [optional] 
**study_sharing** | [**\QuantiModo\Client\Model\StudySharing**](StudySharing.md) |  | [optional] 
**study_text** | [**\QuantiModo\Client\Model\StudyText**](StudyText.md) |  | [optional] 
**study_votes** | [**\QuantiModo\Client\Model\StudyVotes**](StudyVotes.md) |  | [optional] 
**joined** | **bool** | True if you are sharing your data with this study | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


