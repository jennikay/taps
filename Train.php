<?php
class Train extends Model {
    
    public function callingpoints() {
        return this->has_many('Callingpoint');
    }

    public function toc_id() {
        return this->has_one('Toc');
    }

    public function origin() {
        return this->has_one('Location',STANOX);
    }

    public function destination() {
        return this->has_one('Location',STANOX);
    }
}
?>
