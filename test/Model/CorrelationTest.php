<?php
/**
 * CorrelationTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  QuantiModo\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * QuantiModo
 *
 * Welcome to QuantiModo API! QuantiModo makes it easy to retrieve normalized user data from a wide array of devices and applications. [Learn about QuantiModo](https://quantimo.do) or contact us at <api@quantimo.do>.         Before you get started, you will need to: * Sign in/Sign up, and add some data at [https://app.quantimo.do/api/v2/account/connectors](https://app.quantimo.do/api/v2/account/connectors) to try out the API for yourself * Create an app to get your client id and secret at [https://app.quantimo.do/api/v2/apps](https://app.quantimo.do/api/v2/apps) * As long as you're signed in, it will use your browser's cookie for authentication.  However, client applications must use OAuth2 tokens to access the API.     ## Application Endpoints These endpoints give you access to all authorized users' data for that application. ### Getting Application Token Make a `POST` request to `/api/v2/oauth/access_token`         * `grant_type` Must be `client_credentials`.         * `clientId` Your application's clientId.         * `client_secret` Your application's client_secret.         * `redirect_uri` Your application's redirect url.                ## Example Queries ### Query Options The standard query options for QuantiModo API are as described in the table below. These are the available query options in QuantiModo API: <table>            <thead>                <tr>                    <th>Parameter</th>                    <th>Description</th>                </tr>            </thead>            <tbody>                <tr>                    <td>limit</td>                    <td>The LIMIT is used to limit the number of results returned.  So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.</td>                </tr>                <tr>                    <td>offset</td>                    <td>Suppose you wanted to show results 11-20. You'd set the    offset to 10 and the limit to 10.</td>                </tr>                <tr>                    <td>sort</td>                    <td>Sort by given field. If the field is prefixed with '-', it    will sort in descending order.</td>                </tr>            </tbody>        </table>         ### Pagination Conventions Since the maximum limit is 200 records, to get more than that you'll have to make multiple API calls and page through the results. To retrieve all the data, you can iterate through data by using the `limit` and `offset` query parameters.For example, if you want to retrieve data from 61-80 then you can use a query with the following parameters,         `/v2/variables?limit=20&offset=60`         Generally, you'll be retrieving new or updated user data. To avoid unnecessary API calls, you'll want to store your last refresh time locally.  Initially, it should be set to 0. Then whenever you make a request to get new data, you should limit the returned results to those updated since your last refresh by appending append         `?lastUpdated=(ge)&quot2013-01-D01T01:01:01&quot`         to your request.         Also for better pagination, you can get link to the records of first, last, next and previous page from response headers: * `Total-Count` - Total number of results for given query * `Link-First` - Link to get first page records * `Link-Last` - Link to get last page records * `Link-Prev` - Link to get previous records set * `Link-Next` - Link to get next records set         Remember, response header will be only sent when the record set is available. e.g. You will not get a ```Link-Last``` & ```Link-Next``` when you query for the last page.         ### Filter operators support API supports the following operators with filter parameters: <br> **Comparison operators**         Comparison operators allow you to limit results to those greater than, less than, or equal to a specified value for a specified attribute. These operators can be used with strings, numbers, and dates. The following comparison operators are available: * `gt` for `greater than` comparison * `ge` for `greater than or equal` comparison * `lt` for `less than` comparison * `le` for `less than or equal` comparison         They are included in queries using the following format:         `(<operator>)<value>`         For example, in order to filter value which is greater than 21, the following query parameter should be used:         `?value=(gt)21` <br><br> **Equals/In Operators**         It also allows filtering by the exact value of an attribute or by a set of values, depending on the type of value passed as a query parameter. If the value contains commas, the parameter is split on commas and used as array input for `IN` filtering, otherwise the exact match is applied. In order to only show records which have the value 42, the following query should be used:         `?value=42`         In order to filter records which have value 42 or 43, the following query should be used:         `?value=42,43` <br><br> **Like operators**         Like operators allow filtering using `LIKE` query. This operator is triggered if exact match operator is used, but value contains `%` sign as the first or last character. In order to filter records which category that start with `Food`, the following query should be used:         `?category=Food%` <br><br> **Negation operator**         It is possible to get negated results of a query by prefixed the operator with `!`. Some examples:         `//filter records except those with value are not 42 or 43`<br> `?value=!42,43`         `//filter records with value not greater than 21`<br> `?value=!(ge)21` <br><br> **Multiple constraints for single attribute**         It is possible to apply multiple constraints by providing an array of query filters:         Filter all records which value is greater than 20.2 and less than 20.3<br> `?value[]=(gt)20.2&value[]=(lt)20.3`         Filter all records which value is greater than 20.2 and less than 20.3 but not 20.2778<br> `?value[]=(gt)20.2&value[]=(lt)20.3&value[]=!20.2778`<br><br>
 *
 * OpenAPI spec version: 4.6.5
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace QuantiModo\Client;

/**
 * CorrelationTest Class Doc Comment
 *
 * @category    Class */
// * @description Correlation
/**
 * @package     QuantiModo\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CorrelationTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {

    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {

    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {

    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {

    }

    /**
     * Test "Correlation"
     */
    public function testCorrelation()
    {

    }

    /**
     * Test attribute "average_vote"
     */
    public function testPropertyAverageVote()
    {

    }

    /**
     * Test attribute "causality_factor"
     */
    public function testPropertyCausalityFactor()
    {

    }

    /**
     * Test attribute "cause"
     */
    public function testPropertyCause()
    {

    }

    /**
     * Test attribute "cause_category"
     */
    public function testPropertyCauseCategory()
    {

    }

    /**
     * Test attribute "cause_changes"
     */
    public function testPropertyCauseChanges()
    {

    }

    /**
     * Test attribute "cause_combination_operation"
     */
    public function testPropertyCauseCombinationOperation()
    {

    }

    /**
     * Test attribute "cause_variable_image_url"
     */
    public function testPropertyCauseVariableImageUrl()
    {

    }

    /**
     * Test attribute "cause_variable_ion_icon"
     */
    public function testPropertyCauseVariableIonIcon()
    {

    }

    /**
     * Test attribute "cause_unit"
     */
    public function testPropertyCauseUnit()
    {

    }

    /**
     * Test attribute "cause_unit_id"
     */
    public function testPropertyCauseUnitId()
    {

    }

    /**
     * Test attribute "cause_variable_id"
     */
    public function testPropertyCauseVariableId()
    {

    }

    /**
     * Test attribute "correlation_coefficient"
     */
    public function testPropertyCorrelationCoefficient()
    {

    }

    /**
     * Test attribute "data_analysis"
     */
    public function testPropertyDataAnalysis()
    {

    }

    /**
     * Test attribute "data_sources"
     */
    public function testPropertyDataSources()
    {

    }

    /**
     * Test attribute "duration_of_action"
     */
    public function testPropertyDurationOfAction()
    {

    }

    /**
     * Test attribute "effect"
     */
    public function testPropertyEffect()
    {

    }

    /**
     * Test attribute "effect_category"
     */
    public function testPropertyEffectCategory()
    {

    }

    /**
     * Test attribute "effect_variable_image_url"
     */
    public function testPropertyEffectVariableImageUrl()
    {

    }

    /**
     * Test attribute "effect_variable_ion_icon"
     */
    public function testPropertyEffectVariableIonIcon()
    {

    }

    /**
     * Test attribute "effect_size"
     */
    public function testPropertyEffectSize()
    {

    }

    /**
     * Test attribute "effect_variable_id"
     */
    public function testPropertyEffectVariableId()
    {

    }

    /**
     * Test attribute "gauge_image"
     */
    public function testPropertyGaugeImage()
    {

    }

    /**
     * Test attribute "number_of_pairs"
     */
    public function testPropertyNumberOfPairs()
    {

    }

    /**
     * Test attribute "original_effect"
     */
    public function testPropertyOriginalEffect()
    {

    }

    /**
     * Test attribute "onset_delay"
     */
    public function testPropertyOnsetDelay()
    {

    }

    /**
     * Test attribute "optimal_pearson_product"
     */
    public function testPropertyOptimalPearsonProduct()
    {

    }

    /**
     * Test attribute "original_cause"
     */
    public function testPropertyOriginalCause()
    {

    }

    /**
     * Test attribute "outcome_data_sources"
     */
    public function testPropertyOutcomeDataSources()
    {

    }

    /**
     * Test attribute "predictor_explanation"
     */
    public function testPropertyPredictorExplanation()
    {

    }

    /**
     * Test attribute "principal_investigator"
     */
    public function testPropertyPrincipalInvestigator()
    {

    }

    /**
     * Test attribute "reverse_correlation"
     */
    public function testPropertyReverseCorrelation()
    {

    }

    /**
     * Test attribute "significance_explanation"
     */
    public function testPropertySignificanceExplanation()
    {

    }

    /**
     * Test attribute "statistical_significance"
     */
    public function testPropertyStatisticalSignificance()
    {

    }

    /**
     * Test attribute "strength_level"
     */
    public function testPropertyStrengthLevel()
    {

    }

    /**
     * Test attribute "study_abstract"
     */
    public function testPropertyStudyAbstract()
    {

    }

    /**
     * Test attribute "study_background"
     */
    public function testPropertyStudyBackground()
    {

    }

    /**
     * Test attribute "study_design"
     */
    public function testPropertyStudyDesign()
    {

    }

    /**
     * Test attribute "study_limitations"
     */
    public function testPropertyStudyLimitations()
    {

    }

    /**
     * Test attribute "study_link"
     */
    public function testPropertyStudyLink()
    {

    }

    /**
     * Test attribute "study_link_static"
     */
    public function testPropertyStudyLinkStatic()
    {

    }

    /**
     * Test attribute "study_link_google"
     */
    public function testPropertyStudyLinkGoogle()
    {

    }

    /**
     * Test attribute "study_link_facebook"
     */
    public function testPropertyStudyLinkFacebook()
    {

    }

    /**
     * Test attribute "study_link_twitter"
     */
    public function testPropertyStudyLinkTwitter()
    {

    }

    /**
     * Test attribute "study_objective"
     */
    public function testPropertyStudyObjective()
    {

    }

    /**
     * Test attribute "study_results"
     */
    public function testPropertyStudyResults()
    {

    }

    /**
     * Test attribute "study_title"
     */
    public function testPropertyStudyTitle()
    {

    }

    /**
     * Test attribute "timestamp"
     */
    public function testPropertyTimestamp()
    {

    }

    /**
     * Test attribute "user_vote"
     */
    public function testPropertyUserVote()
    {

    }

    /**
     * Test attribute "value_predicting_high_outcome"
     */
    public function testPropertyValuePredictingHighOutcome()
    {

    }

    /**
     * Test attribute "value_predicting_high_outcome_explanation"
     */
    public function testPropertyValuePredictingHighOutcomeExplanation()
    {

    }

    /**
     * Test attribute "value_predicting_low_outcome"
     */
    public function testPropertyValuePredictingLowOutcome()
    {

    }

    /**
     * Test attribute "value_predicting_low_outcome_explanation"
     */
    public function testPropertyValuePredictingLowOutcomeExplanation()
    {

    }

}
