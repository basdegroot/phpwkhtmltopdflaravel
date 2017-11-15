<?PHP namespace Basdegroot\PhpwkhtmltopdfLaravel;

class Pdf extends \mikehaertl\wkhtmlto\Pdf
{
    public function __construct($options = null)
    {
        // set the options from the laravel config files
        $this->setOptions(config('phpwkhtmltopdf-laravel'));
        // these config options can be overwriten by the constructor parameter
        parent::__construct($options);
    }

    public function response()
    {
        if (!$content = $this->toString())
        {
            throw new \Exception($this->getError());
        }

        $response = \Response::make($content);
        $response->header('Content-Type','application/pdf');
        return $response;
    }
}