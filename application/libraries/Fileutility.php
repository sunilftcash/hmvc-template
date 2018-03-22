<?php

/**
 * Description of fileutility
 *
 * @author Sunil Ftcash
 */
class Fileutility {

    private $filetype = NULL;
    private $extension = NULL;

    public function __construct($constructorData) {
        if (isset($constructorData['filetype'])) {
            $this->filetype = $constructorData['filetype'];
        }
        if (isset($constructorData['ext'])) {
            $this->extension = $constructorData['ext'];
        }
    }

    public function readFile($filename, $atcualname = NULL) {
        switch ($this->filetype) {
            case "excel": {
                    $excelData = $this->readExcel($filename, $atcualname);
                    return $excelData;
                    break;
                }
            case "csv": {
                    break;
                }
            default : {
                    throw new Exception("Invalid or undefined file type", 500);
                    break;
                }
        }
    }

    private function readExcel($filename, $actual_name = NULL) {
        require_once APPPATH . "third_party/phpspreadsheet/autoload.php";

        if ($actual_name != NULL) {
            $this->extractExtFromActualName($actual_name);
        }

        if (is_null($this->extension) || $this->extension == NULL) {
            throw new Exception("Please define excel extension", 500);
            return -1;
        }
        $reader = NULL;

        if ($this->extension == 'xls') {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
        } else if ($this->extension == 'xlsx') {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        } else {
            throw new Exception("Unkown excel extension", 500);
        }
        $reader->setReadDataOnly(true);
//        $spreadsheet = $reader->load($filename);
        $spreadsheet = $reader->load($filename);
        $worksheet = $spreadsheet->getActiveSheet();
        $rows = $worksheet->toArray(false, false, false, true);
        return $rows;
    }

    private function extractExtFromActualName($actual_name) {
        $extension = substr(strrchr($actual_name, "."), 1);
        $this->extension = $extension;
    }

}
