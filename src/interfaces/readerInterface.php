<?php

namespace Interfaces;
use Interfaces\OfferCollectionInterface as OfferCollection;

interface ReaderInterface {
    public function read(string $input) : OfferCollection;
}