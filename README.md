# Calculates the OpenAI tokens for the given prompt
[![Latest Version on Packagist](https://img.shields.io/packagist/v/rajentrivedi/tokenizer-x.svg?style=flat-square)](https://packagist.org/packages/rajentrivedi/tokenizer-x)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/rajentrivedi/tokenizer-x/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/rajentrivedi/tokenizer-x/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/rajentrivedi/tokenizer-x/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/rajentrivedi/tokenizer-x/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/rajentrivedi/tokenizer-x.svg?style=flat-square)](https://packagist.org/packages/rajentrivedi/tokenizer-x)





## TokenizerX
TokenzierX is a Laravel package that calculates the tokens required for a given prompt before requesting the OpenAI REST API. This package helps to ensure that the user does not exceed the OpenAI API token limit and can generate accurate responses.

To access the OpenAI Rest API, you may consider the beautiful Laravel Package 
[OpenAI PHP]('https://github.com/openai-php/client')

## Installation

You can install the package via composer:

```bash
composer require rajentrivedi/tokenizer-x
```

## Usage

```php
use Rajentrivedi\TokenizerX\TokenizerX;
TokenizerX::count("how are you?");
```

You can also read the text from file

```php
TokenizerX::count(file_get_contents('path_to_file'));

```

Please make sure that text of the file don't change while reading the file programmatically, this may happen due to encoding. You can check the generated token Ids by using following

```php
TokenizerX::tokens(file_get_contents('path_to_file'));
```
This will return an array of tokens generated & compare those token Ids with OpenAi's tokenizer
[OpenAI Tokenizer]('https://platform.openai.com/tokenizer')

You can also use the OpenAI Tokenizer to double-check package generated token counts.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Rajen Trivedi](https://github.com/rajentrivedi)
- [All Contributors](../../contributors)

## License

# TokenizerX is developed using 
[GPT-3 Encoder PHP]('https://github.com/CodeRevolutionPlugins/GPT-3-Encoder-PHP')

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
