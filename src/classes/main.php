<?php

namespace Classes;
use Interfaces\ReaderInterface as Reader;
use Interfaces\OfferCollectionInterface as OfferCollection;
use \ArrayIterator as Iterator;

class Main implements Reader , OfferCollection {
    protected $path;
    protected $type;
    protected $price_from_price;
    protected $price_to;
    protected $vendor_id;
    public $n;
    
    function __construct($path,$type,$price_from_price,$price_to,$vendor_id) {
        $this->path = $path;
        $this->type = $type;
        $this->price_from_price = $price_from_price;
        $this->price_to = $price_to;
        $this->vendor_id = $vendor_id;
    }

    public function rewind() {
        $this->n = 0;
    }

    public function current() {
        return $this->n;
    }

    public function next(){
        return $this->n++;
    }

    public function valid() {
        return $this->n > 0;
    }

    public function read(string $input) : OfferCollection{
        return file_get_contents($input);
    }

    public function getIterator() : \Iterator {
        $array = json_decode(file_get_contents($this->path));
        return new Iterator($array);
    }

    public function get(int $index) {
        return 0;
    }

    public function handleOperation() {
        $array = $this->getIterator();
        switch($this->type) {
            case 'count_by_price_range' :
                break;
            case 'count_by_vendor_id' :
                
                break;
        }
    }
}


