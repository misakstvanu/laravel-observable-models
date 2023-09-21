namespace misakstvanu;

/** 
* @property static $observers
*/
trait HasObservers {

    public static function bootHasObservers() :void {
        if(isset(static::$observers) && static::$observers) 
            static::observe(static::$observers);
    }
    
}