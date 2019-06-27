<?php 
class Db extends mysqli
{
    const HOST = "localhost" ;
    const USER = "root" ;
    const PASS = "" ;
    const NAME = "akademik_pbo" ;

    public function __construct()
    {
        return parent::__construct(self::HOST, self::USER, self::PASS, self::NAME) ;
    }
}
?>