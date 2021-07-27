<?php

/**
 * Project Name: mikisan-ware
 * Description : 許可されていないパラメタへのアクセス時の例外
 * Start Date  : 2021/07/17
 * Copyright   : Katsuhiko Miki   https://striking-forces.jp
 * 
 * @author Katsuhiko Miki
 */
declare(strict_types=1);

namespace mikisan\core\exception;

class InvalidParameterAccessException extends \Exception
{
    private $target = null;
    private $key    = null;
    
    /**
     * 基底クラスの例外を呼び出す
     * 
     * @param   mixed       $target
     * @param   string      $key
     * @param   int         $code
     * @param   \Exception  $previous
     */
    public function __construct($target, string $key, int $code = 0, \Exception $previous = null)
    {
        $this->target   = $target;
        $this->key      = $key;
        
        parent::__construct($this->toString(), $code, $previous);
    }

    /**
     * 例外に関する情報を string で返す
     * 
     * @return string           
     */
    public function toString()
    {
        return get_class($this->target) . "::{$this->key} はアクセス許可されていません。\n";
    }
    
}
