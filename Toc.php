<?php
class Toc extends Model {

    public function train() {
        return $this->belongs_to('Train');
    }

}
?>
