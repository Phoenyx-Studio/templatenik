<?php

namespace PhoenyxStudio\Service;

use PhpOffice\PhpWord\Exception\CopyFileException;
use PhpOffice\PhpWord\Exception\CreateTemporaryFileException;
use PhpOffice\PhpWord\TemplateProcessor;

class Templatenik
{
    public $templateProcessor;

    public function __construct($file)
    {
        try {
            $this->templateProcessor = new TemplateProcessor($file);
        } catch (CopyFileException $e) {
            echo 'Copy File Exception' . $e->getMessage();
            die();
        } catch (CreateTemporaryFileException $e) {
            echo 'Create Temporary File Exception ' . $e->getMessage();
            die();
        }
    }

    public function getVariables()
    {
        $variables = $this->templateProcessor->getVariables();
        return $variables;
    }

    public function setValue(string $name, string $value)
    {
        $this->templateProcessor->setValue($name, $value);
    }

    public function saveAs(string $filename)
    {
        $this->templateProcessor->saveAs($filename);
    }
}