# Calculates the OpenAI tokens for the given prompt
[![Latest Version on Packagist](https://img.shields.io/packagist/v/rajentrivedi/tokenizer-x.svg?style=flat-square)](https://packagist.org/packages/rajentrivedi/tokenizer-x)

[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/rajentrivedi/tokenizer-x/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/rajentrivedi/tokenizer-x/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/rajentrivedi/tokenizer-x.svg?style=flat-square)](https://packagist.org/packages/rajentrivedi/tokenizer-x)


TokenizerX supports Laravel 11 and Laravel 10.

### Installation


```bash
    composer require rajentrivedi/tokenizer-x
```

## TokenizerX
TokenizerX is a Laravel package designed to streamline tokenization processes in your applications. With the latest update, TokenizerX now supports cutting-edge GPT-4 models, providing advanced natural language processing capabilities.

It calculates the tokens required for a given prompt before requesting the OpenAI REST API. This package helps to ensure that the user does not exceed the OpenAI API token limit and can generate accurate responses.

To access the OpenAI Rest API, you may consider the beautiful Laravel Package 
[OpenAI PHP](https://github.com/openai-php/client).

## Supported OpenAI Models
- gpt-4o
- gpt-4
- gpt-3.5-turbo
- text-davinci-003
- text-davinci-002
- text-davinci-001
- text-curie-001
- text-babbage-001
- text-ada-001
- davinci
- curie
- babbage
- ada
- code-davinci-002
- code-davinci-001
- code-cushman-002
- code-cushman-001
- davinci-codex
- cushman-codex
- text-davinci-edit-001
- code-davinci-edit-001
- text-embedding-ada-002
- text-similarity-davinci-001
- text-similarity-curie-001
- text-similarity-babbage-001
- text-similarity-ada-001
- text-search-davinci-doc-001
- text-search-curie-doc-001
- text-search-babbage-doc-001
- text-search-ada-doc-001
- code-search-babbage-code-001
- code-search-ada-code-001

## Supported Encoding
- r50k_base
- p50k_base
- p50k_edit
- cl100k_base


## Installation

You can install the package via composer:

```bash
composer require rajentrivedi/tokenizer-x
```

## Usage
By default package will consider GPT-3 model
```php
use Rajentrivedi\TokenizerX\TokenizerX;
TokenizerX::count("how are you?");
```

If you want token counts for specific OpenAI model, you can pass model as a second argument from above given supported model list.
```php
use Rajentrivedi\TokenizerX\TokenizerX;
TokenizerX::count("how are you?", "gpt-4");
```
You can also read the text from file

```php
TokenizerX::count(file_get_contents('path_to_file'));
```

Please make sure that text of the file don't change while reading the file programmatically, this may happen due to encoding. You can check the generated token IDs by using following

```php
TokenizerX::tokens(file_get_contents('path_to_file'));
```
This will return an array of tokens generated & compare those token IDs with
[OpenAI Tokenizer](https://platform.openai.com/tokenizer)

You can also use the OpenAI Tokenizer to double-check package generated token counts.

## Support
If you find TokenizerX helpful and would like to support its ongoing development, you can contribute by buying me a coffee! Your support helps in maintaining and improving the package for the Laravel community.

[![ko-fi](https://ko-fi.com/img/githubbutton_sm.svg)](https://ko-fi.com/T6T4T0NM4)

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

## ⭐ Star the Repository ⭐

If you find this project useful or interesting, I kindly request you to give it a ⭐ star on GitHub. Your support will encourage and motivate me to continue improving and maintaining this project.

By starring the repository, you can show appreciation for the work put into developing this open-source project. It also helps to increase its visibility, making it more accessible to other developers and potentially attracting contributors.

To give a ⭐ star, simply click on the **Star** button at the top-right corner of the repository page.


## Credits

- [Rajen Trivedi](https://github.com/rajentrivedi)
- [All Contributors](../../contributors)

## License

# TokenizerX is developed using 
- [GPT-3 Encoder PHP](https://github.com/CodeRevolutionPlugins/GPT-3-Encoder-PHP)
- [Tiktoken-php](https://github.com/yethee/tiktoken-php)
- [Laravel Package Skeleton by Spatie](https://github.com/spatie/package-skeleton-laravel)

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
