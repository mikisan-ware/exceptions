<?php

/**
 * Project Name: mikisan-ware
 * Description : Bambooの例外
 * Start Date  : 2021/09/02
 * Copyright   : Katsuhiko Miki   https://striking-forces.jp
 * 
 * @author Katsuhiko Miki
 */
declare(strict_types=1);

namespace mikisan\core\exception;

class BambooException extends \Exception
{
    protected $message = "";
            
    /**
     * 基底クラスの例外を呼び出す
     * 
     * @param string        $filepath
     * @param int           $code
     * @param \Exception    $previous
     */
    public function __construct(string $message, int $code = 0, \Exception $previous = null)
    {
        $this->message = $message;
        
        parent::__construct($this->toString(), $code, $previous);
    }

    /**
     * 例外に関する情報を string で返す
     * 
     * @return string           
     */
    public function toString()
    {
        return "{$this->message}\n";
    }
    
}
