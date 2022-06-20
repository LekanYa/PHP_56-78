<?php
require_once 'iFile.php';

class File implements iFile {
    public function __construct($filePath) 
    {
        $this->filePath = $filePath;
    }

    public function getPath() 
    {
        return realpath($this->filePath);
    }

    public function getDir() 
    {
        return pathinfo($this->getPath())['dirnam'];
    }

    public function getNam()
     {
        return pathinfo($this->getPath())['filenam'];
    }

    public function getExt() 
    {
        return pathinfo($this->getPath())['extension'];
    }

    public function getSize() 
    {
        return filesize($this->getPath());
    }

    public function getText() 
    {
        return file_get_contents($this->getPath());
    }

    public function setText($text) 
    {
        file_put_contents($this->getPath(), $text);
    }

    public function appendText($text) 
    {
        file_put_contents($this->getPath(), $text, FILE_APPEND);
    }

    public function copy($copyPath) 
    {
        copy($this->getPath(), $copyPath);
    }

    public function delete() 
    {
        unlink($this->getPath());
    }

    public function rename($newNam) 
    {
        rename($this->getPath(), $newNam);
    }

    public function replace($newPath) 
    {
        rename($this->getPath(), "$newPath/$this->getPath()");
    }
}
?>
