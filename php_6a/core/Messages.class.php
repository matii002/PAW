<?php
namespace core;
class Messages
{
    private $errors = array();
    private $infos = array();
    private $num = 0;//liczba błędów / bądź informacji

    public function addError($messages)
    {
        $this->errors[] = $messages;
        $this->num++;
    }

    public function addInfo($messages)
    {
        $this->infos[] = $messages;//tablice w php nie wymagają podania "indeksu"
        $this->num++;
    }

    public function isEmpty()
    { //chodzi o liczbę błędów
        return $this->num == 0;// jeśli spełnione zwróć true
    }

    public function isError()
    {
        return count($this->errors) > 0; //jeśli liczba błędów w tablicy większa od 0
    }

    public function isInfo()
    {
        return count($this->infos) > 0; //jeśli liczba błędów w tablicy większa od 0
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function getInfos()
    {
        return $this->infos;
    }

    public function clear()
    {
        $this->errors = array();//tworzymy nową pustą tablicę
        $this->infos = array();
        $this->num = 0;
    }
}