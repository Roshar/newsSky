<?php

namespace App;

class ErrorRecord
{
    protected $errorData = [];
    /* Recording in txt file at directory Error/log
     * construct
     * $param string $error
     */
    public function __construct($data)
    {
        $date = date('Y-m-d');
        $filename = __DIR__.'/../errors/log/'.$date.'.txt';
        $string = date('Y-m-d H:i:s').'=>'.$data.'\n';
        $f = fopen($filename,'a+');
        fwrite($f,$string);
        fclose($f);
        $this->errorData[] = $data;
    }
}