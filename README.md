# ResMan - Response Manager for API

ResMan is a PHP class that provides a convenient way to handle API responses with standard status codes and response structures. It includes methods for handling validation errors, success responses, and failure responses.

## Installation

To use ResMan in your project, you can install it via Composer. Run the following command in your terminal:

`composer require awaiskhan18/resman`


## Usage

First, import the ResMan class into your PHP file:


<pre><code>
use Awaiskhan18\ResMan;
</code></pre>


## Handling Validation Errors
To handle validation errors, you can use the validationHandler method of the ResMan class. It takes a validator object as its parameter and returns a JSON response with the appropriate status code and error messages.


<pre><code>
// Example usage of validationHandler
$validator = Validator::make($data, $rules);

if ($validator->fails()) {
    return ResMan::validationHandler($validator);
}
</code></pre>


## Handling Success Responses

To handle success responses, you can use the successHandler method of the ResMan class. It takes the response data and a status description as its parameters and returns a JSON response with the success status code (200) and the provided data.

<pre><code>
// Example usage of successHandler
$data = [
    'user' => [
        'name' => 'John Doe',
        'email' => 'john@example.com',
    ],
];

$statusDescription = 'Data retrieved successfully';

return ResMan::successHandler($data, $statusDescription);

</code></pre>


Constants

ResMan includes the following constants that can be used to represent different HTTP status codes:

    ResMan::STATUS_SUCCESS (200) - Represents a successful response.
    ResMan::STATUS_ERROR (401) - Represents an error response.

## License

This package is open-source software licensed under the MIT License. See the LICENSE file for more information.
