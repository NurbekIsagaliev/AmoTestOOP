<?php
class FileProcessor
{
    private $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function processFile()
    {

        $fileHandle = fopen($this->filePath, 'r');


        while (($line = fgets($fileHandle)) !== false) {

            preg_match_all("/\d/", $line, $matches);

            $digitCount = count($matches[0]);

            echo "$line = $digitCount<br>";
        }

        fclose($fileHandle);
    }

    public function uploadFile($uploadedFile)
    {
        if (move_uploaded_file($uploadedFile['tmp_name'], $this->filePath)) {

            $this->processFile();

            echo '<div class="circle success"></div>';
            echo 'Файл успешно загружен' . '<br>';
        } else {

            echo '<div class="circle error"></div>';
            echo 'Ошибка при загрузке файла';
        }
    }
}
