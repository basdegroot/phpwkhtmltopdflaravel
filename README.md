# PHP WkHtmlToPdf Laravel Wrapper
This wrapper will include the [mikehaertl/phpwkhtmltopdf](https://github.com/mikehaertl/phpwkhtmltopdf) library. 
It will use the config functions of laravel and it can be configured threw the .env file. All the functions of the library of mikehaertl 
are available. https://github.com/mikehaertl/phpwkhtmltopdf

## Installation

Install the package through [composer](http://getcomposer.org):

```
composer require basdegroot/phpwkhtmltopdflaravel
``` 

## Configuration

The application can be configured threw the .env file or by publishing the configuration files to your project.

### Publish

```
php artisan vendor:publish
```

### .env variables
```
WKHTMLTOPDF_BINARY = Path to the binary of the WkHtmlToPdf library. Default is 'wkhmltopdf'
WKHTMLTOPDF_INGORE_WARNINGS = Whether to ignore any errors if a PDF file was still created. Default is false
WKHTMLTOPDF_TMP_DIR = Path to tmp directory. Defaults to the PHP temp dir.
```

## Response 
The class has an method which returns a Laravel response object with the PDF content + correct headers

```
use Basdegroot\PhpwkhtmltopdfLaravel\Pdf;

$pdf = new Pdf('http://www.google.nl');
return $pdf->response();

// or with a filename

return $pdf->response('filename'); 


```

The Pdf object extends \mikehaertl\wkhtmlto\Pdf so all the other methods are still available.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.