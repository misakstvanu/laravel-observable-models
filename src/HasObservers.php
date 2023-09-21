namespace misakstvanu;

/**
* @property array $observers
*/
trait HasObservers {

    public static function bootHasObservers() :void {
        if(!empty(static::$observers)) 
            static::observe(static::$observers);
    }
    
}