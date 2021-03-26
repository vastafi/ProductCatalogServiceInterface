
/*
function test(int $value){
    if(value<0){
        throw new InvalidArgumentException('Argument "$value" should be positive.');
    }
    //new LogicException("");
    // new RuntimeException("This module is not available");
    // new RuntimeException("Functionality is not implemented yed.");
   
    // value as amount of days
    if ($value>24 || $value <7){
        throw new DomainException("You cannot perform this action in first/last 7 days of the month. ");
    }

    //..    new InvalidPageNumberException();
}

class InvalidPageNumberException extends DomainException{
    public function _construct()
    {
        $this ->message ="...";
    }
}

try
{
    test(-10);
}
catch (DomainException|LogicalException $e){
    return (new Response())
    ->withBody($e->getMessage());
}
catch (RuntimeException $e){
    return (new Response())
    ->withBody("Internal  error.");
}
   */
