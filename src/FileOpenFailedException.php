<?php

/**
 * Project Name: mikisan-ware
 * Description : ファイルが開けなかった場合の例外
 * Start Date  : 2021/07/18
 * Copyright   : Katsuhiko Miki   https://striking-forces.jp
 * 
 * @author Katsuhiko Miki
 */
declare(strict_types=1);

namespace mikisan\core\exception;

class FileOpenFailedException extends \Exception
{
    private $filepath = null;
    
    /**
     * 基底クラスの例外を呼び出す
     * 
     * @param string        $filepath
     * @param int           $code
     * @param \Exception    $previous
     */
    public function __construct($filepath, $code = 0, \Exception $previous = null)
    {
        $this->filepath = $filepath;
        
        parent::__construct($this->toString(), $code, $previous);
    }

    /**
     * 例外に関する情報を string で返す
     * 
     * @return string           
     */
    public function toString()
    {
        return "ファイルが開けませんでした。[{$this->filapath}]\n";
    }
    
}
