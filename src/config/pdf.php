<?PHP
return [
    // path to the binary of the WkHtmlToPdf library
    'binary' => env('WKHTMLTOPDF_BINARY','wkhtmltopdf'),

    // Whether to ignore any errors if a PDF file was still created
    'ignoreWarnings' => env('WKHTMLTOPDF_INGORE_WARNINGS',false),

    // Path to tmp directory. Defaults to the PHP temp dir.
    'tmpDir' => env('WKHTMLTOPDF_TMP_DIR',null),
];