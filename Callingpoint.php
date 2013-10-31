<?php
class Callingpoint extends Model {

    public function train() {
        return $this->belongs_to('Train');
    }

    public function location() {
        return $this->has_one('Location, STANOX');
    }

}
?>
