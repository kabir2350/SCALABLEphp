




<?php
class overload
{
    public function __construct() 
    {
        return $this->switchConstruct(func_get_args());
    }

    protected function switchConstruct(array $args)
    {
        switch (count($args))
        {
            case 0:
                return print "0 params<br />";
            case 1:
                return call_user_func_array(array($this, 'constr1'), $args);
            case 2:
                return call_user_func_array(array($this, 'constr2'), $args);
        }
        die("Invalid number of args");
    }

    protected function constr1($a) 
    {
        print "constr1 called<br />";
    }

    protected function constr2($a, $b) 
    {
        print "constr2 called<br />";
    }
}


$o1=new overload("abc","def");




