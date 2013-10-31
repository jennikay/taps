<?php
class Location extends Model {
    
    public static $_id_column = 'STANOX';

/*    public function trains() {
        return $this->belongs_to('Train', 'STANOX');
    }
*/



    public function callingpoints() {
        return $this->belongs_to('Callingpoint', STANOX);
    }

}

?>
