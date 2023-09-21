namespace misakstvanu;

trait HasObservers {

    protected static array $observers = [];

    public static function bootHasObservers() :void {
        if(!empty(static::$observers)) 
            static::observe(static::$observers);
    }
    
}