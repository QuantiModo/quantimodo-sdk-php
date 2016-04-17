# SwaggerClient-php
Welcome to QuantiModo API! QuantiModo makes it easy to retrieve normalized user data from a wide array of devices and applications. [Learn about QuantiModo](https://quantimo.do) or contact us at <api@quantimo.do>.\n\n\n\n\n\n\n\n\nBefore you get started, you will need to:\n* Sign in/Sign up, and add some data at [https://quantipress.quantimo.do/import-data/](https://quantipress.quantimo.do/import-data/) to try out the API for yourself\n* As long as you're signed in, it will use your browser's cookie for authentication.  However, client applications must use OAuth2 tokens to access the API.\n\n\n\n\n## Application Endpoints\nThese endpoints give you access to all authorized users' data for that application.\n### Getting Application Token\nMake a `POST` request to `/api/v2/oauth/access_token`\n\n\n\n\n\n\n\n * `grant_type` Must be `client_credentials`.\n\n\n\n\n\n\n\n * `clientId` Your application's clientId.\n\n\n\n\n\n\n\n * `client_secret` Your application's client_secret.\n\n\n\n\n\n\n\n * `redirect_uri` Your application's redirect url.\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n## Example Queries\n### Query Options\nThe standard query options for QuantiModo API are as described in the table below. These are the available query options in QuantiModo API:\n<table>\n\n\n\n\n\n\n\n    <thead>\n\n\n\n\n\n\n\n        <tr>\n\n\n\n\n\n\n\n            <th>Parameter</th>\n\n\n\n\n\n\n\n            <th>Description</th>\n\n\n\n\n\n\n\n        </tr>\n\n\n\n\n\n\n\n    </thead>\n\n\n\n\n\n\n\n    <tbody>\n\n\n\n\n\n\n\n        <tr>\n\n\n\n\n\n\n\n            <td>limit</td>\n\n\n\n\n\n\n\n            <td>The LIMIT is used to limit the number of results returned.\n\nSo\nif you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.</td>\n\n\n\n\n\n\n\n        </tr>\n\n\n\n\n\n\n\n        <tr>\n\n\n\n\n\n\n\n            <td>offset</td>\n\n\n\n\n\n\n\n            <td>Suppose you wanted to show results 11-20. You'd set the\n\n\n\noffset to 10 and the limit to 10.</td>\n\n\n\n\n\n\n\n        </tr>\n\n\n\n\n\n\n\n        <tr>\n\n\n\n\n\n\n\n            <td>sort</td>\n\n\n\n\n\n\n\n            <td>Sort by given field. If the field is prefixed with '-', it\n\n\n\nwill sort in descending order.</td>\n\n\n\n\n\n\n\n        </tr>\n\n\n\n\n\n\n\n    </tbody>\n\n\n\n\n\n\n\n</table>\n\n\n\n\n\n\n\n\n### Pagination Conventions\nSince the maximum limit is 200 records, to get more than that you'll have to make multiple API calls and page through the results. To retrieve all the data, you can iterate through data by using the `limit` and `offset` query parameters.For example, if you want to retrieve data from 61-80 then you can use a query with the following parameters,\n\n\n\n\n\n\n\n\n`/v2/variables?limit=20&offset=60`\n\n\n\n\n\n\n\n\nGenerally, you'll be retrieving new or updated user data. To avoid unnecessary API calls, you'll want to store your last refresh time locally.  Initially, it should be set to 0. Then whenever you make a request to get new data, you should limit the returned results to those updated since your last refresh by appending append\n\n\n\n\n\n\n\n\n`?lastUpdated=(ge)&quot2013-01-D01T01:01:01&quot`\n\n\n\n\n\n\n\n\nto your request.\n\n\n\n\n\n\n\n\nAlso for better pagination, you can get link to the records of first, last, next and previous page from response headers:\n* `Total-Count` - Total number of results for given query\n* `Link-First` - Link to get first page records\n* `Link-Last` - Link to get last page records\n* `Link-Prev` - Link to get previous records set\n* `Link-Next` - Link to get next records set\n\n\n\n\n\n\n\n\nRemember, response header will be only sent when the record set is available. e.g. You will not get a ```Link-Last``` & ```Link-Next``` when you query for the last page.\n\n\n\n\n\n\n\n\n### Filter operators support\nAPI supports the following operators with filter parameters:\n<br>\n**Comparison operators**\n\n\n\n\n\n\n\n\nComparison operators allow you to limit results to those greater than, less than, or equal to a specified value for a specified attribute. These operators can be used with strings, numbers, and dates. The following comparison operators are available:\n* `gt` for `greater than` comparison\n* `ge` for `greater than or equal` comparison\n* `lt` for `less than` comparison\n* `le` for `less than or equal` comparison\n\n\n\n\n\n\n\n\nThey are included in queries using the following format:\n\n\n\n\n\n\n\n\n`(<operator>)<value>`\n\n\n\n\n\n\n\n\nFor example, in order to filter value which is greater than 21, the following query parameter should be used:\n\n\n\n\n\n\n\n\n`?value=(gt)21`\n<br><br>\n**Equals/In Operators**\n\n\n\n\n\n\n\n\nIt also allows filtering by the exact value of an attribute or by a set of values, depending on the type of value passed as a query parameter. If the value contains commas, the parameter is split on commas and used as array input for `IN` filtering, otherwise the exact match is applied. In order to only show records which have the value 42, the following query should be used:\n\n\n\n\n\n\n\n\n`?value=42`\n\n\n\n\n\n\n\n\nIn order to filter records which have value 42 or 43, the following query should be used:\n\n\n\n\n\n\n\n\n`?value=42,43`\n<br><br>\n**Like operators**\n\n\n\n\n\n\n\n\nLike operators allow filtering using `LIKE` query. This operator is triggered if exact match operator is used, but value contains `%` sign as the first or last character. In order to filter records which category that start with `Food`, the following query should be used:\n\n\n\n\n\n\n\n\n`?category=Food%`\n<br><br>\n**Negation operator**\n\n\n\n\n\n\n\n\nIt is possible to get negated results of a query by prefixed the operator with `!`. Some examples:\n\n\n\n\n\n\n\n\n`//filter records except those with value are not 42 or 43`<br>\n`?value=!42,43`\n\n\n\n\n\n\n\n\n`//filter records with value not greater than 21`<br>\n`?value=!(ge)21`\n<br><br>\n**Multiple constraints for single attribute**\n\n\n\n\n\n\n\n\nIt is possible to apply multiple constraints by providing an array of query filters:\n\n\n\n\n\n\n\n\nFilter all records which value is greater than 20.2 and less than 20.3<br>\n`?value[]=(gt)20.2&value[]=(lt)20.3`\n\n\n\n\n\n\n\n\nFilter all records which value is greater than 20.2 and less than 20.3 but not 20.2778<br>\n`?value[]=(gt)20.2&value[]=(lt)20.3&value[]=!20.2778`<br><br>

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.3.9
- Package version: 1.0.0
- Build date: 2016-04-04T03:44:03.384Z
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
      "url": "https://github.com/YOUR_GIT_USR_ID/YOUR_GIT_REPO_ID.git"
    }
  ],
  "require": {
    "YOUR_GIT_USR_ID/YOUR_GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
```

## Tests 

To run the unit tests:

```
composer install
./vendor/bin/phpunit lib/Tests
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: internalApiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'BEARER');

$api_instance = new Swagger\Client\Api\ApplicationEndpointsApi();
$access_token = "access_token_example"; // string | Application's OAuth2 access token
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
    $result = $api_instance->v2ApplicationConnectionsGet($access_token, $connector_id, $connect_status, $connect_error, $update_requested_at, $update_status, $update_error, $last_successful_updated_at, $created_at, $updated_at, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationEndpointsApi->v2ApplicationConnectionsGet: ', $e->getMessage(), "\n";
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://localhost/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ApplicationEndpointsApi* | [**v2ApplicationConnectionsGet**](docs/ApplicationEndpointsApi.md#v2applicationconnectionsget) | **GET** /v2/application/connections | Get all Connections
*ApplicationEndpointsApi* | [**v2ApplicationCredentialsGet**](docs/ApplicationEndpointsApi.md#v2applicationcredentialsget) | **GET** /v2/application/credentials | Get all Credentials
*ApplicationEndpointsApi* | [**v2ApplicationMeasurementsGet**](docs/ApplicationEndpointsApi.md#v2applicationmeasurementsget) | **GET** /v2/application/measurements | Get measurements for all users using your application
*ApplicationEndpointsApi* | [**v2ApplicationTrackingRemindersGet**](docs/ApplicationEndpointsApi.md#v2applicationtrackingremindersget) | **GET** /v2/application/trackingReminders | Get tracking reminders
*ApplicationEndpointsApi* | [**v2ApplicationUpdatesGet**](docs/ApplicationEndpointsApi.md#v2applicationupdatesget) | **GET** /v2/application/updates | Get all Updates
*ApplicationEndpointsApi* | [**v2ApplicationUserVariableRelationshipsGet**](docs/ApplicationEndpointsApi.md#v2applicationuservariablerelationshipsget) | **GET** /v2/application/userVariableRelationships | Get all UserVariableRelationships
*ApplicationEndpointsApi* | [**v2ApplicationUserVariablesGet**](docs/ApplicationEndpointsApi.md#v2applicationuservariablesget) | **GET** /v2/application/userVariables | Get all UserVariables
*ApplicationEndpointsApi* | [**v2ApplicationVariableUserSourcesGet**](docs/ApplicationEndpointsApi.md#v2applicationvariableusersourcesget) | **GET** /v2/application/variableUserSources | Get all VariableUserSources
*ApplicationEndpointsApi* | [**v2ApplicationVotesGet**](docs/ApplicationEndpointsApi.md#v2applicationvotesget) | **GET** /v2/application/votes | Get all Votes
*AuthenticationApi* | [**v2AuthSocialAuthorizeCodeGet**](docs/AuthenticationApi.md#v2authsocialauthorizecodeget) | **GET** /v2/auth/social/authorizeCode | Second Step in Social Authentication flow with JWT Token
*AuthenticationApi* | [**v2AuthSocialAuthorizeTokenGet**](docs/AuthenticationApi.md#v2authsocialauthorizetokenget) | **GET** /v2/auth/social/authorizeToken | Native Social Authentication
*AuthenticationApi* | [**v2AuthSocialLoginGet**](docs/AuthenticationApi.md#v2authsocialloginget) | **GET** /v2/auth/social/login | First Setp in Social Authentication flow with JWT Token
*AuthenticationApi* | [**v2Oauth2AccessTokenGet**](docs/AuthenticationApi.md#v2oauth2accesstokenget) | **GET** /v2/oauth2/access_token | Get a user access token
*AuthenticationApi* | [**v2OauthAuthorizeGet**](docs/AuthenticationApi.md#v2oauthauthorizeget) | **GET** /v2/oauth/authorize | Request Authorization Code
*ConnectorsApi* | [**v1ConnectJsGet**](docs/ConnectorsApi.md#v1connectjsget) | **GET** /v1/connect.js | Get embeddable connect javascript
*ConnectorsApi* | [**v1ConnectMobileGet**](docs/ConnectorsApi.md#v1connectmobileget) | **GET** /v1/connect/mobile | Mobile connect page
*ConnectorsApi* | [**v1ConnectorsConnectorConnectGet**](docs/ConnectorsApi.md#v1connectorsconnectorconnectget) | **GET** /v1/connectors/{connector}/connect | Obtain a token from 3rd party data source
*ConnectorsApi* | [**v1ConnectorsConnectorConnectInstructionsGet**](docs/ConnectorsApi.md#v1connectorsconnectorconnectinstructionsget) | **GET** /v1/connectors/{connector}/connectInstructions | Connection Instructions
*ConnectorsApi* | [**v1ConnectorsConnectorConnectParameterGet**](docs/ConnectorsApi.md#v1connectorsconnectorconnectparameterget) | **GET** /v1/connectors/{connector}/connectParameter | Connect Parameter
*ConnectorsApi* | [**v1ConnectorsConnectorDisconnectGet**](docs/ConnectorsApi.md#v1connectorsconnectordisconnectget) | **GET** /v1/connectors/{connector}/disconnect | Delete stored connection info
*ConnectorsApi* | [**v1ConnectorsConnectorInfoGet**](docs/ConnectorsApi.md#v1connectorsconnectorinfoget) | **GET** /v1/connectors/{connector}/info | Get connector info for user
*ConnectorsApi* | [**v1ConnectorsConnectorUpdateGet**](docs/ConnectorsApi.md#v1connectorsconnectorupdateget) | **GET** /v1/connectors/{connector}/update | Sync with data source
*ConnectorsApi* | [**v1ConnectorsListGet**](docs/ConnectorsApi.md#v1connectorslistget) | **GET** /v1/connectors/list | List of Connectors
*CorrelationsApi* | [**v1AggregatedCorrelationsGet**](docs/CorrelationsApi.md#v1aggregatedcorrelationsget) | **GET** /v1/aggregatedCorrelations | Get aggregated correlations
*CorrelationsApi* | [**v1AggregatedCorrelationsPost**](docs/CorrelationsApi.md#v1aggregatedcorrelationspost) | **POST** /v1/aggregatedCorrelations | Store or Update a Correlation
*CorrelationsApi* | [**v1CorrelationsGet**](docs/CorrelationsApi.md#v1correlationsget) | **GET** /v1/correlations | Get correlations
*CorrelationsApi* | [**v1OrganizationsOrganizationIdUsersUserIdVariablesVariableNameCausesGet**](docs/CorrelationsApi.md#v1organizationsorganizationidusersuseridvariablesvariablenamecausesget) | **GET** /v1/organizations/{organizationId}/users/{userId}/variables/{variableName}/causes | Search user correlations for a given cause
*CorrelationsApi* | [**v1OrganizationsOrganizationIdUsersUserIdVariablesVariableNameEffectsGet**](docs/CorrelationsApi.md#v1organizationsorganizationidusersuseridvariablesvariablenameeffectsget) | **GET** /v1/organizations/{organizationId}/users/{userId}/variables/{variableName}/effects | Search user correlations for a given cause
*CorrelationsApi* | [**v1PublicCorrelationsSearchSearchGet**](docs/CorrelationsApi.md#v1publiccorrelationssearchsearchget) | **GET** /v1/public/correlations/search/{search} | Get average correlations for variables containing search term
*CorrelationsApi* | [**v1VariablesVariableNameCausesGet**](docs/CorrelationsApi.md#v1variablesvariablenamecausesget) | **GET** /v1/variables/{variableName}/causes | Search user correlations for a given effect
*CorrelationsApi* | [**v1VariablesVariableNameEffectsGet**](docs/CorrelationsApi.md#v1variablesvariablenameeffectsget) | **GET** /v1/variables/{variableName}/effects | Search user correlations for a given cause
*CorrelationsApi* | [**v1VariablesVariableNamePublicCausesGet**](docs/CorrelationsApi.md#v1variablesvariablenamepubliccausesget) | **GET** /v1/variables/{variableName}/public/causes | Search public correlations for a given effect
*CorrelationsApi* | [**v1VariablesVariableNamePublicEffectsGet**](docs/CorrelationsApi.md#v1variablesvariablenamepubliceffectsget) | **GET** /v1/variables/{variableName}/public/effects | Search public correlations for a given cause
*CorrelationsApi* | [**v1VotesDeletePost**](docs/CorrelationsApi.md#v1votesdeletepost) | **POST** /v1/votes/delete | Delete vote
*CorrelationsApi* | [**v1VotesPost**](docs/CorrelationsApi.md#v1votespost) | **POST** /v1/votes | Post or update vote
*MeasurementsApi* | [**v1MeasurementSourcesGet**](docs/MeasurementsApi.md#v1measurementsourcesget) | **GET** /v1/measurementSources | Get measurement sources
*MeasurementsApi* | [**v1MeasurementSourcesPost**](docs/MeasurementsApi.md#v1measurementsourcespost) | **POST** /v1/measurementSources | Add a data source
*MeasurementsApi* | [**v1MeasurementsDailyGet**](docs/MeasurementsApi.md#v1measurementsdailyget) | **GET** /v1/measurements/daily | Get daily measurements for this user
*MeasurementsApi* | [**v1MeasurementsDeletePost**](docs/MeasurementsApi.md#v1measurementsdeletepost) | **POST** /v1/measurements/delete | Delete a measurement
*MeasurementsApi* | [**v1MeasurementsGet**](docs/MeasurementsApi.md#v1measurementsget) | **GET** /v1/measurements | Get measurements for this user
*MeasurementsApi* | [**v1MeasurementsPost**](docs/MeasurementsApi.md#v1measurementspost) | **POST** /v1/measurements | Post a new set or update existing measurements to the database
*MeasurementsApi* | [**v1MeasurementsRangeGet**](docs/MeasurementsApi.md#v1measurementsrangeget) | **GET** /v1/measurementsRange | Get measurements range for this user
*MeasurementsApi* | [**v2MeasurementsCsvGet**](docs/MeasurementsApi.md#v2measurementscsvget) | **GET** /v2/measurements/csv | Get Measurements CSV
*MeasurementsApi* | [**v2MeasurementsIdDelete**](docs/MeasurementsApi.md#v2measurementsiddelete) | **DELETE** /v2/measurements/{id} | Delete Measurement
*MeasurementsApi* | [**v2MeasurementsIdGet**](docs/MeasurementsApi.md#v2measurementsidget) | **GET** /v2/measurements/{id} | Get Measurement
*MeasurementsApi* | [**v2MeasurementsIdPut**](docs/MeasurementsApi.md#v2measurementsidput) | **PUT** /v2/measurements/{id} | Update Measurement
*MeasurementsApi* | [**v2MeasurementsRequestCsvPost**](docs/MeasurementsApi.md#v2measurementsrequestcsvpost) | **POST** /v2/measurements/request_csv | Post Request for Measurements CSV
*OrganizationsApi* | [**v1OrganizationsOrganizationIdUsersPost**](docs/OrganizationsApi.md#v1organizationsorganizationiduserspost) | **POST** /v1/organizations/{organizationId}/users | Get user tokens for existing users, create new users
*PairsApi* | [**v1PairsCsvGet**](docs/PairsApi.md#v1pairscsvget) | **GET** /v1/pairsCsv | Get pairs
*PairsApi* | [**v1PairsGet**](docs/PairsApi.md#v1pairsget) | **GET** /v1/pairs | Get pairs
*RemindersApi* | [**v1TrackingReminderNotificationsGet**](docs/RemindersApi.md#v1trackingremindernotificationsget) | **GET** /v1/trackingReminderNotifications | Get specific pending tracking reminders
*RemindersApi* | [**v1TrackingReminderNotificationsSkipPost**](docs/RemindersApi.md#v1trackingremindernotificationsskippost) | **POST** /v1/trackingReminderNotifications/skip | Skip a pending tracking reminder
*RemindersApi* | [**v1TrackingReminderNotificationsSnoozePost**](docs/RemindersApi.md#v1trackingremindernotificationssnoozepost) | **POST** /v1/trackingReminderNotifications/snooze | Snooze a pending tracking reminder
*RemindersApi* | [**v1TrackingReminderNotificationsTrackPost**](docs/RemindersApi.md#v1trackingremindernotificationstrackpost) | **POST** /v1/trackingReminderNotifications/track | Track a pending tracking reminder
*RemindersApi* | [**v1TrackingRemindersDeletePost**](docs/RemindersApi.md#v1trackingremindersdeletepost) | **POST** /v1/trackingReminders/delete | Delete tracking reminder
*RemindersApi* | [**v1TrackingRemindersGet**](docs/RemindersApi.md#v1trackingremindersget) | **GET** /v1/trackingReminders | Get repeating tracking reminder settings
*RemindersApi* | [**v1TrackingRemindersPost**](docs/RemindersApi.md#v1trackingreminderspost) | **POST** /v1/trackingReminders | Store a Tracking Reminder
*TagsApi* | [**v1UserTagsDeletePost**](docs/TagsApi.md#v1usertagsdeletepost) | **POST** /v1/userTags/delete | Delete user tag or ingredient
*TagsApi* | [**v1UserTagsPost**](docs/TagsApi.md#v1usertagspost) | **POST** /v1/userTags | Post or update user tags or ingredients
*UnitsApi* | [**v1UnitCategoriesGet**](docs/UnitsApi.md#v1unitcategoriesget) | **GET** /v1/unitCategories | Get unit categories
*UnitsApi* | [**v1UnitsGet**](docs/UnitsApi.md#v1unitsget) | **GET** /v1/units | Get all available units
*UnitsApi* | [**v1UnitsVariableGet**](docs/UnitsApi.md#v1unitsvariableget) | **GET** /v1/unitsVariable | Units for Variable
*UserApi* | [**v1OrganizationsOrganizationIdUsersPost**](docs/UserApi.md#v1organizationsorganizationiduserspost) | **POST** /v1/organizations/{organizationId}/users | Get user tokens for existing users, create new users
*UserApi* | [**v1UserMeGet**](docs/UserApi.md#v1usermeget) | **GET** /v1/user/me | Get all available units for variableGet authenticated user
*VariablesApi* | [**v1PublicVariablesGet**](docs/VariablesApi.md#v1publicvariablesget) | **GET** /v1/public/variables | Get public variables
*VariablesApi* | [**v1PublicVariablesSearchSearchGet**](docs/VariablesApi.md#v1publicvariablessearchsearchget) | **GET** /v1/public/variables/search/{search} | Get top 5 PUBLIC variables with the most correlations
*VariablesApi* | [**v1UserVariablesPost**](docs/VariablesApi.md#v1uservariablespost) | **POST** /v1/userVariables | Update User Settings for a Variable
*VariablesApi* | [**v1VariableCategoriesGet**](docs/VariablesApi.md#v1variablecategoriesget) | **GET** /v1/variableCategories | Variable categories
*VariablesApi* | [**v1VariablesGet**](docs/VariablesApi.md#v1variablesget) | **GET** /v1/variables | Get variables by the category name
*VariablesApi* | [**v1VariablesPost**](docs/VariablesApi.md#v1variablespost) | **POST** /v1/variables | Create Variables
*VariablesApi* | [**v1VariablesSearchSearchGet**](docs/VariablesApi.md#v1variablessearchsearchget) | **GET** /v1/variables/search/{search} | Get variables by search query
*VariablesApi* | [**v1VariablesVariableNameGet**](docs/VariablesApi.md#v1variablesvariablenameget) | **GET** /v1/variables/{variableName} | Get info about a variable
*VotesApi* | [**v1VotesDeletePost**](docs/VotesApi.md#v1votesdeletepost) | **POST** /v1/votes/delete | Delete vote
*VotesApi* | [**v1VotesPost**](docs/VotesApi.md#v1votespost) | **POST** /v1/votes | Post or update vote


## Documentation For Models

 - [CommonResponse](docs/CommonResponse.md)
 - [Connection](docs/Connection.md)
 - [Connector](docs/Connector.md)
 - [ConnectorInfo](docs/ConnectorInfo.md)
 - [ConnectorInfoHistoryItem](docs/ConnectorInfoHistoryItem.md)
 - [ConnectorInstruction](docs/ConnectorInstruction.md)
 - [ConversionStep](docs/ConversionStep.md)
 - [Correlation](docs/Correlation.md)
 - [Credential](docs/Credential.md)
 - [HumanTime](docs/HumanTime.md)
 - [InlineResponse200](docs/InlineResponse200.md)
 - [InlineResponse2001](docs/InlineResponse2001.md)
 - [InlineResponse20010](docs/InlineResponse20010.md)
 - [InlineResponse20011](docs/InlineResponse20011.md)
 - [InlineResponse20012](docs/InlineResponse20012.md)
 - [InlineResponse2002](docs/InlineResponse2002.md)
 - [InlineResponse2003](docs/InlineResponse2003.md)
 - [InlineResponse2004](docs/InlineResponse2004.md)
 - [InlineResponse2005](docs/InlineResponse2005.md)
 - [InlineResponse2006](docs/InlineResponse2006.md)
 - [InlineResponse2007](docs/InlineResponse2007.md)
 - [InlineResponse2008](docs/InlineResponse2008.md)
 - [InlineResponse2009](docs/InlineResponse2009.md)
 - [JsonErrorResponse](docs/JsonErrorResponse.md)
 - [Measurement](docs/Measurement.md)
 - [MeasurementDelete](docs/MeasurementDelete.md)
 - [MeasurementRange](docs/MeasurementRange.md)
 - [MeasurementSet](docs/MeasurementSet.md)
 - [MeasurementSource](docs/MeasurementSource.md)
 - [Pairs](docs/Pairs.md)
 - [Permission](docs/Permission.md)
 - [PostCorrelation](docs/PostCorrelation.md)
 - [PostVote](docs/PostVote.md)
 - [TrackingReminder](docs/TrackingReminder.md)
 - [TrackingReminderDelete](docs/TrackingReminderDelete.md)
 - [TrackingReminderNotification](docs/TrackingReminderNotification.md)
 - [TrackingReminderNotificationSkip](docs/TrackingReminderNotificationSkip.md)
 - [TrackingReminderNotificationSnooze](docs/TrackingReminderNotificationSnooze.md)
 - [TrackingReminderNotificationTrack](docs/TrackingReminderNotificationTrack.md)
 - [Unit](docs/Unit.md)
 - [UnitCategory](docs/UnitCategory.md)
 - [Update](docs/Update.md)
 - [User](docs/User.md)
 - [UserTag](docs/UserTag.md)
 - [UserTokenFailedResponse](docs/UserTokenFailedResponse.md)
 - [UserTokenRequest](docs/UserTokenRequest.md)
 - [UserTokenRequestInnerUserField](docs/UserTokenRequestInnerUserField.md)
 - [UserTokenSuccessfulResponse](docs/UserTokenSuccessfulResponse.md)
 - [UserTokenSuccessfulResponseInnerUserField](docs/UserTokenSuccessfulResponseInnerUserField.md)
 - [UserVariable](docs/UserVariable.md)
 - [UserVariableRelationship](docs/UserVariableRelationship.md)
 - [UserVariables](docs/UserVariables.md)
 - [ValueObject](docs/ValueObject.md)
 - [Variable](docs/Variable.md)
 - [VariableCategory](docs/VariableCategory.md)
 - [VariableNew](docs/VariableNew.md)
 - [VariableUserSource](docs/VariableUserSource.md)
 - [VariablesNew](docs/VariablesNew.md)
 - [Vote](docs/Vote.md)
 - [VoteDelete](docs/VoteDelete.md)


## Documentation For Authorization


## oauth2

- **Type**: OAuth
- **Flow**: implicit
- **Authorizatoin URL**: https://app.quantimo.do/api/v1/oauth2/authorize
- **Scopes**: 
 - **basic**: Basic authentication
 - **readmeasurements**: Grants read access to measurements and variables. Allows the client app to obtain the user's data.
 - **writemeasurements**: Grants write access to measurements and variables. Allows the client app to store user data.

## quantimodo_oauth2

- **Type**: OAuth
- **Flow**: accessCode
- **Authorizatoin URL**: /api/v2/oauth/authorize
- **Scopes**: 
 - **basic**: allows you to read user info (displayname, email, etc).
 - **readmeasurements**: allows one to read a user's data
 - **writemeasurements**: allows you to write user data

## basicAuth

- **Type**: HTTP basic authentication

## internalApiKey

- **Type**: API key 
- **API key parameter name**: api_key
- **Location**: HTTP header


## Author




