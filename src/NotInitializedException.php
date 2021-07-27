<?php

/**
 * Project Name: mikisan-ware
 * Description : オブジェクトが初期化されていない場合の例外
 * Start Date  : 2021/07/19
 * Copyright   : Katsuhiko Miki   https://striking-forces.jp
 * 
 * @author Katsuhiko Miki
 */
declare(strict_types=1);

namespace mikisan\core\exception;

class NotInitializedException extends \Exception
{
    private $classname = null;
            
    /**
     * 基底クラスの例外を呼び出す
     * 
     * @param string        $filepath
     * @param int           $code
     * @param \Exception    $previous
     */
    public function __construct(string $classname, int $code = 0, \Exception $previous = null)
    {
        $this->classname = $classname;
        
        parent::__construct($this->toString(), $code, $previous);
    }

    /**
     * 例外に関する情報を string で返す
     * 
     * @return string           
     */
    public function toString()
    {
        return "オブジェクトが初期化されていません。[{$this->classname}]\n";
    }
    
}
