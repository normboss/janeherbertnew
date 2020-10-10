<?php
if ( isset($_SESSION["pagenumber"]) )
{
    class Painting {
        public $curr;
        public $prev;
        public $next;

        function __construct( $curr, $prev, $next)
        {
            $this->current = $curr;
            $this->prev = $prev;
            $this->next = $next;
        }
    }
//                                          current painting                    previous painting                   next painting 
    $painting_filenames["0"] = new Painting("index.php",                        "low-pressure-appleton-ridge.php",  "low-pressure-appleton-ridge.php");        
    $painting_filenames["1"] = new Painting("low-pressure-appleton-ridge.php",  "my-studio.php",                    "side-light.php");        
    $painting_filenames["2"] = new Painting("side-light.php",                   "low-pressure-appleton-ridge.php",  "vespers.php");          
    $painting_filenames["3"] = new Painting("vespers.php",                      "side-light.php",                   "eagle-over-hatchet-cove.php");             
    $painting_filenames["4"] = new Painting("eagle-over-hatchet-cove.php",      "vespers.php",                      "ubiquity.php");               
    $painting_filenames["5"] = new Painting("ubiquity.php",                     "eagle-over-hatchet-cove.php",      "morse-mountain.php");      
    $painting_filenames["6"] = new Painting("morse-mountain.php",             "ubiquity.php",                     "painting-on-location.php");         
    $painting_filenames["7"] = new Painting("painting-on-location.php",         "morse-mountain.php",             "on-lookout-rock.php");  
    $painting_filenames["8"] = new Painting("on-lookout-rock.php",              "painting-on-location.php",         "stillness.php");         
    $painting_filenames["9"] = new Painting("stillness.php",                    "on-lookout-rock.php",              "my-studio.php");                    
    $painting_filenames["10"] = new Painting("my-studio.php",                   "stillness.php",                    "low-pressure-appleton-ridge.php");         // my studio
}

?>
