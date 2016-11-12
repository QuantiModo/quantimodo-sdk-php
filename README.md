# QuantiModoClient
Welcome to QuantiModo API! QuantiModo makes it easy to retrieve normalized user data from a wide array of devices and applications. [Learn about QuantiModo](https://quantimo.do) or contact us at <api@quantimo.do>.         Before you get started, you will need to: * Sign in/Sign up, and add some data at [https://app.quantimo.do/api/v2/account/connectors](https://app.quantimo.do/api/v2/account/connectors) to try out the API for yourself * Create an app to get your client id and secret at [https://app.quantimo.do/api/v2/apps](https://app.quantimo.do/api/v2/apps) * As long as you're signed in, it will use your browser's cookie for authentication.  However, client applications must use OAuth2 tokens to access the API.     ## Application Endpoints These endpoints give you access to all authorized users' data for that application. ### Getting Application Token Make a `POST` request to `/api/v2/oauth/access_token`         * `grant_type` Must be `client_credentials`.         * `clientId` Your application's clientId.         * `client_secret` Your application's client_secret.         * `redirect_uri` Your application's redirect url.                ## Example Queries ### Query Options The standard query options for QuantiModo API are as described in the table below. These are the available query options in QuantiModo API: <table>            <thead>                <tr>                    <th>Parameter</th>                    <th>Description</th>                </tr>            </thead>            <tbody>                <tr>                    <td>limit</td>                    <td>The LIMIT is used to limit the number of results returned.  So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.</td>                </tr>                <tr>                    <td>offset</td>                    <td>Suppose you wanted to show results 11-20. You'd set the    offset to 10 and the limit to 10.</td>                </tr>                <tr>                    <td>sort</td>                    <td>Sort by given field. If the field is prefixed with '-', it    will sort in descending order.</td>                </tr>            </tbody>        </table>         ### Pagination Conventions Since the maximum limit is 200 records, to get more than that you'll have to make multiple API calls and page through the results. To retrieve all the data, you can iterate through data by using the `limit` and `offset` query parameters.For example, if you want to retrieve data from 61-80 then you can use a query with the following parameters,         `/v2/variables?limit=20&offset=60`         Generally, you'll be retrieving new or updated user data. To avoid unnecessary API calls, you'll want to store your last refresh time locally.  Initially, it should be set to 0. Then whenever you make a request to get new data, you should limit the returned results to those updated since your last refresh by appending append         `?lastUpdated=(ge)&quot2013-01-D01T01:01:01&quot`         to your request.         Also for better pagination, you can get link to the records of first, last, next and previous page from response headers: * `Total-Count` - Total number of results for given query * `Link-First` - Link to get first page records * `Link-Last` - Link to get last page records * `Link-Prev` - Link to get previous records set * `Link-Next` - Link to get next records set         Remember, response header will be only sent when the record set is available. e.g. You will not get a ```Link-Last``` & ```Link-Next``` when you query for the last page.         ### Filter operators support API supports the following operators with filter parameters: <br> **Comparison operators**         Comparison operators allow you to limit results to those greater than, less than, or equal to a specified value for a specified attribute. These operators can be used with strings, numbers, and dates. The following comparison operators are available: * `gt` for `greater than` comparison * `ge` for `greater than or equal` comparison * `lt` for `less than` comparison * `le` for `less than or equal` comparison         They are included in queries using the following format:         `(<operator>)<value>`         For example, in order to filter value which is greater than 21, the following query parameter should be used:         `?value=(gt)21` <br><br> **Equals/In Operators**         It also allows filtering by the exact value of an attribute or by a set of values, depending on the type of value passed as a query parameter. If the value contains commas, the parameter is split on commas and used as array input for `IN` filtering, otherwise the exact match is applied. In order to only show records which have the value 42, the following query should be used:         `?value=42`         In order to filter records which have value 42 or 43, the following query should be used:         `?value=42,43` <br><br> **Like operators**         Like operators allow filtering using `LIKE` query. This operator is triggered if exact match operator is used, but value contains `%` sign as the first or last character. In order to filter records which category that start with `Food`, the following query should be used:         `?category=Food%` <br><br> **Negation operator**         It is possible to get negated results of a query by prefixed the operator with `!`. Some examples:         `//filter records except those with value are not 42 or 43`<br> `?value=!42,43`         `//filter records with value not greater than 21`<br> `?value=!(ge)21` <br><br> **Multiple constraints for single attribute**         It is possible to apply multiple constraints by providing an array of query filters:         Filter all records which value is greater than 20.2 and less than 20.3<br> `?value[]=(gt)20.2&value[]=(lt)20.3`         Filter all records which value is greater than 20.2 and less than 20.3 but not 20.2778<br> `?value[]=(gt)20.2&value[]=(lt)20.3&value[]=!20.2778`<br><br>

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 4.6.5
- Package version: 4.7.6
- Build package: class io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/quantimodo/quantimodo-sdk-php.git"
    }
  ],
  "require": {
    "quantimodo/quantimodo-sdk-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/QuantiModoClient/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: internalApiKey
QuantiModo\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// QuantiModo\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$api_instance = new QuantiModo\Client\Api\ApplicationEndpointsApi();
$access_token = "access_token_example"; // string | Application's OAuth2 access token
$user_id = 56; // int | User's id
$connector_id = 56; // int | The id for the connector data source for which the connection is connected
$connect_status = "connect_status_example"; // string | Indicates whether a connector is currently connected to a service for a user.
$connect_error = "connect_error_example"; // string | Error message if there is a problem with authorizing this connection.
$update_requested_at = "update_requested_at_example"; // string | Time at which an update was requested by a user.
$update_status = "update_status_example"; // string | Indicates whether a connector is currently updated.
$update_error = "update_error_example"; // string | Indicates if there was an error during the update.
$last_successful_updated_at = "last_successful_updated_at_example"; // string | The time at which the connector was last successfully updated.
$created_at = "created_at_example"; // string | When the record was first created. Use ISO 8601 datetime format
$updated_at = "updated_at_example"; // string | When the record was last updated. Use ISO 8601 datetime format
$limit = 56; // int | The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.
$offset = 56; // int | OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned.
$sort = "sort_example"; // string | Sort by given field. If the field is prefixed with '-', it will sort in descending order.

try {
    $result = $api_instance->v2ApplicationConnectionsGet($access_token, $user_id, $connector_id, $connect_status, $connect_error, $update_requested_at, $update_status, $update_error, $last_successful_updated_at, $created_at, $updated_at, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationEndpointsApi->v2ApplicationConnectionsGet: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://app.quantimo.do/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ApplicationEndpointsApi* | [**v2ApplicationConnectionsGet**](docs/Api/ApplicationEndpointsApi.md#v2applicationconnectionsget) | **GET** /v2/application/connections | Get all Connections
*ApplicationEndpointsApi* | [**v2ApplicationCredentialsGet**](docs/Api/ApplicationEndpointsApi.md#v2applicationcredentialsget) | **GET** /v2/application/credentials | Get all Credentials
*ApplicationEndpointsApi* | [**v2ApplicationMeasurementsGet**](docs/Api/ApplicationEndpointsApi.md#v2applicationmeasurementsget) | **GET** /v2/application/measurements | Get measurements for all users using your application
*ApplicationEndpointsApi* | [**v2ApplicationTrackingRemindersGet**](docs/Api/ApplicationEndpointsApi.md#v2applicationtrackingremindersget) | **GET** /v2/application/trackingReminders | Get tracking reminders
*ApplicationEndpointsApi* | [**v2ApplicationUpdatesGet**](docs/Api/ApplicationEndpointsApi.md#v2applicationupdatesget) | **GET** /v2/application/updates | Get all Updates
*ApplicationEndpointsApi* | [**v2ApplicationUserVariableRelationshipsGet**](docs/Api/ApplicationEndpointsApi.md#v2applicationuservariablerelationshipsget) | **GET** /v2/application/userVariableRelationships | Get all UserVariableRelationships
*ApplicationEndpointsApi* | [**v2ApplicationUserVariablesGet**](docs/Api/ApplicationEndpointsApi.md#v2applicationuservariablesget) | **GET** /v2/application/userVariables | Get all UserVariables
*ApplicationEndpointsApi* | [**v2ApplicationVariableUserSourcesGet**](docs/Api/ApplicationEndpointsApi.md#v2applicationvariableusersourcesget) | **GET** /v2/application/variableUserSources | Get all VariableUserSources
*ApplicationEndpointsApi* | [**v2ApplicationVotesGet**](docs/Api/ApplicationEndpointsApi.md#v2applicationvotesget) | **GET** /v2/application/votes | Get all Votes
*AuthenticationApi* | [**v2AuthSocialAuthorizeCodeGet**](docs/Api/AuthenticationApi.md#v2authsocialauthorizecodeget) | **GET** /v2/auth/social/authorizeCode | Second Step in Social Authentication flow with JWT Token
*AuthenticationApi* | [**v2AuthSocialAuthorizeTokenGet**](docs/Api/AuthenticationApi.md#v2authsocialauthorizetokenget) | **GET** /v2/auth/social/authorizeToken | Native Social Authentication
*AuthenticationApi* | [**v2AuthSocialLoginGet**](docs/Api/AuthenticationApi.md#v2authsocialloginget) | **GET** /v2/auth/social/login | First Setp in Social Authentication flow with JWT Token
*AuthenticationApi* | [**v2Oauth2AccessTokenGet**](docs/Api/AuthenticationApi.md#v2oauth2accesstokenget) | **GET** /v2/oauth2/access_token | Get a user access token
*AuthenticationApi* | [**v2OauthAuthorizeGet**](docs/Api/AuthenticationApi.md#v2oauthauthorizeget) | **GET** /v2/oauth/authorize | Request Authorization Code
*ConnectorsApi* | [**v1ConnectJsGet**](docs/Api/ConnectorsApi.md#v1connectjsget) | **GET** /v1/connect.js | Get embeddable connect javascript
*ConnectorsApi* | [**v1ConnectMobileGet**](docs/Api/ConnectorsApi.md#v1connectmobileget) | **GET** /v1/connect/mobile | Mobile connect page
*ConnectorsApi* | [**v1ConnectorsConnectorConnectGet**](docs/Api/ConnectorsApi.md#v1connectorsconnectorconnectget) | **GET** /v1/connectors/{connector}/connect | Obtain a token from 3rd party data source
*ConnectorsApi* | [**v1ConnectorsConnectorConnectInstructionsGet**](docs/Api/ConnectorsApi.md#v1connectorsconnectorconnectinstructionsget) | **GET** /v1/connectors/{connector}/connectInstructions | Connection Instructions
*ConnectorsApi* | [**v1ConnectorsConnectorConnectParameterGet**](docs/Api/ConnectorsApi.md#v1connectorsconnectorconnectparameterget) | **GET** /v1/connectors/{connector}/connectParameter | Connect Parameter
*ConnectorsApi* | [**v1ConnectorsConnectorDisconnectGet**](docs/Api/ConnectorsApi.md#v1connectorsconnectordisconnectget) | **GET** /v1/connectors/{connector}/disconnect | Delete stored connection info
*ConnectorsApi* | [**v1ConnectorsConnectorInfoGet**](docs/Api/ConnectorsApi.md#v1connectorsconnectorinfoget) | **GET** /v1/connectors/{connector}/info | Get connector info for user
*ConnectorsApi* | [**v1ConnectorsConnectorUpdateGet**](docs/Api/ConnectorsApi.md#v1connectorsconnectorupdateget) | **GET** /v1/connectors/{connector}/update | Sync with data source
*ConnectorsApi* | [**v1ConnectorsListGet**](docs/Api/ConnectorsApi.md#v1connectorslistget) | **GET** /v1/connectors/list | List of Connectors
*CorrelationsApi* | [**v1AggregatedCorrelationsGet**](docs/Api/CorrelationsApi.md#v1aggregatedcorrelationsget) | **GET** /v1/aggregatedCorrelations | Get aggregated correlations
*CorrelationsApi* | [**v1AggregatedCorrelationsPost**](docs/Api/CorrelationsApi.md#v1aggregatedcorrelationspost) | **POST** /v1/aggregatedCorrelations | Store or Update a Correlation
*CorrelationsApi* | [**v1CorrelationsGet**](docs/Api/CorrelationsApi.md#v1correlationsget) | **GET** /v1/correlations | Get correlations
*CorrelationsApi* | [**v1OrganizationsOrganizationIdUsersUserIdVariablesVariableNameCausesGet**](docs/Api/CorrelationsApi.md#v1organizationsorganizationidusersuseridvariablesvariablenamecausesget) | **GET** /v1/organizations/{organizationId}/users/{userId}/variables/{variableName}/causes | Search user correlations for a given cause
*CorrelationsApi* | [**v1OrganizationsOrganizationIdUsersUserIdVariablesVariableNameEffectsGet**](docs/Api/CorrelationsApi.md#v1organizationsorganizationidusersuseridvariablesvariablenameeffectsget) | **GET** /v1/organizations/{organizationId}/users/{userId}/variables/{variableName}/effects | Search user correlations for a given cause
*CorrelationsApi* | [**v1PublicCorrelationsSearchSearchGet**](docs/Api/CorrelationsApi.md#v1publiccorrelationssearchsearchget) | **GET** /v1/public/correlations/search/{search} | Get average correlations for variables containing search term
*CorrelationsApi* | [**v1VariablesVariableNameCausesGet**](docs/Api/CorrelationsApi.md#v1variablesvariablenamecausesget) | **GET** /v1/variables/{variableName}/causes | Search user correlations for a given effect
*CorrelationsApi* | [**v1VariablesVariableNameEffectsGet**](docs/Api/CorrelationsApi.md#v1variablesvariablenameeffectsget) | **GET** /v1/variables/{variableName}/effects | Search user correlations for a given cause
*CorrelationsApi* | [**v1VariablesVariableNamePublicCausesGet**](docs/Api/CorrelationsApi.md#v1variablesvariablenamepubliccausesget) | **GET** /v1/variables/{variableName}/public/causes | Search public correlations for a given effect
*CorrelationsApi* | [**v1VariablesVariableNamePublicEffectsGet**](docs/Api/CorrelationsApi.md#v1variablesvariablenamepubliceffectsget) | **GET** /v1/variables/{variableName}/public/effects | Search public correlations for a given cause
*CorrelationsApi* | [**v1VotesDeletePost**](docs/Api/CorrelationsApi.md#v1votesdeletepost) | **POST** /v1/votes/delete | Delete vote
*CorrelationsApi* | [**v1VotesPost**](docs/Api/CorrelationsApi.md#v1votespost) | **POST** /v1/votes | Post or update vote
*MeasurementsApi* | [**v1MeasurementSourcesGet**](docs/Api/MeasurementsApi.md#v1measurementsourcesget) | **GET** /v1/measurementSources | Get measurement sources
*MeasurementsApi* | [**v1MeasurementSourcesPost**](docs/Api/MeasurementsApi.md#v1measurementsourcespost) | **POST** /v1/measurementSources | Add a data source
*MeasurementsApi* | [**v1MeasurementsDailyGet**](docs/Api/MeasurementsApi.md#v1measurementsdailyget) | **GET** /v1/measurements/daily | Get daily measurements for this user
*MeasurementsApi* | [**v1MeasurementsDeletePost**](docs/Api/MeasurementsApi.md#v1measurementsdeletepost) | **POST** /v1/measurements/delete | Delete a measurement
*MeasurementsApi* | [**v1MeasurementsGet**](docs/Api/MeasurementsApi.md#v1measurementsget) | **GET** /v1/measurements | Get measurements for this user
*MeasurementsApi* | [**v1MeasurementsPost**](docs/Api/MeasurementsApi.md#v1measurementspost) | **POST** /v1/measurements | Post a new set or update existing measurements to the database
*MeasurementsApi* | [**v1MeasurementsRangeGet**](docs/Api/MeasurementsApi.md#v1measurementsrangeget) | **GET** /v1/measurementsRange | Get measurements range for this user
*MeasurementsApi* | [**v1MeasurementsUpdatePost**](docs/Api/MeasurementsApi.md#v1measurementsupdatepost) | **POST** /v1/measurements/update | Update a measurement
*MeasurementsApi* | [**v2MeasurementsCsvGet**](docs/Api/MeasurementsApi.md#v2measurementscsvget) | **GET** /v2/measurements/csv | Get Measurements CSV
*MeasurementsApi* | [**v2MeasurementsIdDelete**](docs/Api/MeasurementsApi.md#v2measurementsiddelete) | **DELETE** /v2/measurements/{id} | Delete Measurement
*MeasurementsApi* | [**v2MeasurementsIdGet**](docs/Api/MeasurementsApi.md#v2measurementsidget) | **GET** /v2/measurements/{id} | Get Measurement
*MeasurementsApi* | [**v2MeasurementsIdPut**](docs/Api/MeasurementsApi.md#v2measurementsidput) | **PUT** /v2/measurements/{id} | Update Measurement
*MeasurementsApi* | [**v2MeasurementsRequestCsvPost**](docs/Api/MeasurementsApi.md#v2measurementsrequestcsvpost) | **POST** /v2/measurements/request_csv | Post Request for Measurements CSV
*MeasurementsApi* | [**v2MeasurementsRequestPdfPost**](docs/Api/MeasurementsApi.md#v2measurementsrequestpdfpost) | **POST** /v2/measurements/request_pdf | Post Request for Measurements PDF
*MeasurementsApi* | [**v2MeasurementsRequestXlsPost**](docs/Api/MeasurementsApi.md#v2measurementsrequestxlspost) | **POST** /v2/measurements/request_xls | Post Request for Measurements XLS
*OrganizationsApi* | [**v1OrganizationsOrganizationIdUsersPost**](docs/Api/OrganizationsApi.md#v1organizationsorganizationiduserspost) | **POST** /v1/organizations/{organizationId}/users | Get user tokens for existing users, create new users
*PairsApi* | [**v1PairsCsvGet**](docs/Api/PairsApi.md#v1pairscsvget) | **GET** /v1/pairsCsv | Get pairs
*PairsApi* | [**v1PairsGet**](docs/Api/PairsApi.md#v1pairsget) | **GET** /v1/pairs | Get pairs
*RemindersApi* | [**v1TrackingReminderNotificationsGet**](docs/Api/RemindersApi.md#v1trackingremindernotificationsget) | **GET** /v1/trackingReminderNotifications | Get specific pending tracking reminders
*RemindersApi* | [**v1TrackingReminderNotificationsSkipPost**](docs/Api/RemindersApi.md#v1trackingremindernotificationsskippost) | **POST** /v1/trackingReminderNotifications/skip | Skip a pending tracking reminder
*RemindersApi* | [**v1TrackingReminderNotificationsSnoozePost**](docs/Api/RemindersApi.md#v1trackingremindernotificationssnoozepost) | **POST** /v1/trackingReminderNotifications/snooze | Snooze a pending tracking reminder
*RemindersApi* | [**v1TrackingReminderNotificationsTrackPost**](docs/Api/RemindersApi.md#v1trackingremindernotificationstrackpost) | **POST** /v1/trackingReminderNotifications/track | Track a pending tracking reminder
*RemindersApi* | [**v1TrackingRemindersDeletePost**](docs/Api/RemindersApi.md#v1trackingremindersdeletepost) | **POST** /v1/trackingReminders/delete | Delete tracking reminder
*RemindersApi* | [**v1TrackingRemindersGet**](docs/Api/RemindersApi.md#v1trackingremindersget) | **GET** /v1/trackingReminders | Get repeating tracking reminder settings
*RemindersApi* | [**v1TrackingRemindersPost**](docs/Api/RemindersApi.md#v1trackingreminderspost) | **POST** /v1/trackingReminders | Store a Tracking Reminder
*TagsApi* | [**v1UserTagsDeletePost**](docs/Api/TagsApi.md#v1usertagsdeletepost) | **POST** /v1/userTags/delete | Delete user tag or ingredient
*TagsApi* | [**v1UserTagsPost**](docs/Api/TagsApi.md#v1usertagspost) | **POST** /v1/userTags | Post or update user tags or ingredients
*UnitsApi* | [**v1UnitCategoriesGet**](docs/Api/UnitsApi.md#v1unitcategoriesget) | **GET** /v1/unitCategories | Get unit categories
*UnitsApi* | [**v1UnitsGet**](docs/Api/UnitsApi.md#v1unitsget) | **GET** /v1/units | Get all available units
*UnitsApi* | [**v1UnitsVariableGet**](docs/Api/UnitsApi.md#v1unitsvariableget) | **GET** /v1/unitsVariable | Units for Variable
*UserApi* | [**v1OrganizationsOrganizationIdUsersPost**](docs/Api/UserApi.md#v1organizationsorganizationiduserspost) | **POST** /v1/organizations/{organizationId}/users | Get user tokens for existing users, create new users
*UserApi* | [**v1UserMeGet**](docs/Api/UserApi.md#v1usermeget) | **GET** /v1/user/me | Get all available units for variableGet authenticated user
*VariablesApi* | [**v1PublicVariablesGet**](docs/Api/VariablesApi.md#v1publicvariablesget) | **GET** /v1/public/variables | Get public variables
*VariablesApi* | [**v1PublicVariablesSearchSearchGet**](docs/Api/VariablesApi.md#v1publicvariablessearchsearchget) | **GET** /v1/public/variables/search/{search} | Get top 5 PUBLIC variables with the most correlations
*VariablesApi* | [**v1UserVariablesDeletePost**](docs/Api/VariablesApi.md#v1uservariablesdeletepost) | **POST** /v1/userVariables/delete | Delete All Measurements For Variable
*VariablesApi* | [**v1UserVariablesPost**](docs/Api/VariablesApi.md#v1uservariablespost) | **POST** /v1/userVariables | Update User Settings for a Variable
*VariablesApi* | [**v1UserVariablesResetPost**](docs/Api/VariablesApi.md#v1uservariablesresetpost) | **POST** /v1/userVariables/reset | Reset user settings for a variable to defaults
*VariablesApi* | [**v1VariableCategoriesGet**](docs/Api/VariablesApi.md#v1variablecategoriesget) | **GET** /v1/variableCategories | Variable categories
*VariablesApi* | [**v1VariablesGet**](docs/Api/VariablesApi.md#v1variablesget) | **GET** /v1/variables | Get variables with user&#39;s settings
*VariablesApi* | [**v1VariablesPost**](docs/Api/VariablesApi.md#v1variablespost) | **POST** /v1/variables | Create Variables
*VariablesApi* | [**v1VariablesSearchSearchGet**](docs/Api/VariablesApi.md#v1variablessearchsearchget) | **GET** /v1/variables/search/{search} | Get variables by search query
*VariablesApi* | [**v1VariablesVariableNameGet**](docs/Api/VariablesApi.md#v1variablesvariablenameget) | **GET** /v1/variables/{variableName} | Get info about a variable
*VotesApi* | [**v1VotesDeletePost**](docs/Api/VotesApi.md#v1votesdeletepost) | **POST** /v1/votes/delete | Delete vote
*VotesApi* | [**v1VotesPost**](docs/Api/VotesApi.md#v1votespost) | **POST** /v1/votes | Post or update vote


## Documentation For Models

 - [CommonResponse](docs/Model/CommonResponse.md)
 - [Connection](docs/Model/Connection.md)
 - [Connector](docs/Model/Connector.md)
 - [ConnectorInfo](docs/Model/ConnectorInfo.md)
 - [ConnectorInfoHistoryItem](docs/Model/ConnectorInfoHistoryItem.md)
 - [ConnectorInstruction](docs/Model/ConnectorInstruction.md)
 - [ConversionStep](docs/Model/ConversionStep.md)
 - [Correlation](docs/Model/Correlation.md)
 - [Credential](docs/Model/Credential.md)
 - [HumanTime](docs/Model/HumanTime.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse20010](docs/Model/InlineResponse20010.md)
 - [InlineResponse20011](docs/Model/InlineResponse20011.md)
 - [InlineResponse20012](docs/Model/InlineResponse20012.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [InlineResponse2004](docs/Model/InlineResponse2004.md)
 - [InlineResponse2005](docs/Model/InlineResponse2005.md)
 - [InlineResponse2006](docs/Model/InlineResponse2006.md)
 - [InlineResponse2007](docs/Model/InlineResponse2007.md)
 - [InlineResponse2008](docs/Model/InlineResponse2008.md)
 - [InlineResponse2009](docs/Model/InlineResponse2009.md)
 - [JsonErrorResponse](docs/Model/JsonErrorResponse.md)
 - [Measurement](docs/Model/Measurement.md)
 - [MeasurementDelete](docs/Model/MeasurementDelete.md)
 - [MeasurementRange](docs/Model/MeasurementRange.md)
 - [MeasurementSet](docs/Model/MeasurementSet.md)
 - [MeasurementSource](docs/Model/MeasurementSource.md)
 - [MeasurementUpdate](docs/Model/MeasurementUpdate.md)
 - [Pairs](docs/Model/Pairs.md)
 - [Permission](docs/Model/Permission.md)
 - [PostCorrelation](docs/Model/PostCorrelation.md)
 - [PostVote](docs/Model/PostVote.md)
 - [TrackingReminder](docs/Model/TrackingReminder.md)
 - [TrackingReminderDelete](docs/Model/TrackingReminderDelete.md)
 - [TrackingReminderNotification](docs/Model/TrackingReminderNotification.md)
 - [TrackingReminderNotificationSkip](docs/Model/TrackingReminderNotificationSkip.md)
 - [TrackingReminderNotificationSnooze](docs/Model/TrackingReminderNotificationSnooze.md)
 - [TrackingReminderNotificationTrack](docs/Model/TrackingReminderNotificationTrack.md)
 - [Unit](docs/Model/Unit.md)
 - [UnitCategory](docs/Model/UnitCategory.md)
 - [Update](docs/Model/Update.md)
 - [User](docs/Model/User.md)
 - [UserTag](docs/Model/UserTag.md)
 - [UserTokenFailedResponse](docs/Model/UserTokenFailedResponse.md)
 - [UserTokenRequest](docs/Model/UserTokenRequest.md)
 - [UserTokenRequestInnerUserField](docs/Model/UserTokenRequestInnerUserField.md)
 - [UserTokenSuccessfulResponse](docs/Model/UserTokenSuccessfulResponse.md)
 - [UserTokenSuccessfulResponseInnerUserField](docs/Model/UserTokenSuccessfulResponseInnerUserField.md)
 - [UserVariable](docs/Model/UserVariable.md)
 - [UserVariableDelete](docs/Model/UserVariableDelete.md)
 - [UserVariableRelationship](docs/Model/UserVariableRelationship.md)
 - [UserVariables](docs/Model/UserVariables.md)
 - [ValueObject](docs/Model/ValueObject.md)
 - [Variable](docs/Model/Variable.md)
 - [VariableCategory](docs/Model/VariableCategory.md)
 - [VariableNew](docs/Model/VariableNew.md)
 - [VariableUserSource](docs/Model/VariableUserSource.md)
 - [VariablesNew](docs/Model/VariablesNew.md)
 - [Vote](docs/Model/Vote.md)
 - [VoteDelete](docs/Model/VoteDelete.md)


## Documentation For Authorization


## basicAuth

- **Type**: HTTP basic authentication

## internalApiKey

- **Type**: API key
- **API key parameter name**: api_key
- **Location**: HTTP header

## oauth2

- **Type**: OAuth
- **Flow**: implicit
- **Authorization URL**: https://app.quantimo.do/api/v1/oauth2/authorize
- **Scopes**: 
 - **basic**: Basic authentication
 - **readmeasurements**: Grants read access to measurements and variables. Allows the client app to obtain the user's data.
 - **writemeasurements**: Grants write access to measurements and variables. Allows the client app to store user data.

## quantimodo_oauth2

- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: /api/v2/oauth/authorize
- **Scopes**: 
 - **basic**: Allows you to read user info (displayname, email, etc).
 - **readmeasurements**: Allows one to read a user's data
 - **writemeasurements**: Allows you to write user data


## Author




