<?php

interface Inventory {

    public function move($number);

}

class InventoryIn implements Inventory {

    private $_stock;

    public function move($number){
        return $this->_stock += $number;
    }

}

class InventoryOut implements Inventory {

    private $_stock;

    public function move($number){
        return $this->_stock += $number;
    }

}

class Shop {

    private $_inv;

    public function setState(Inventory $inventory){
        $this->_inv = $inventory;
    }

    public function move($number){
        return $this->_inv->move($number);
    }

}

?>