<?php

namespace Devpoint\SearchClient\Contracts;

interface SearchClient {
    
    /**
     * Create new search builder instance
     *
     * @param  string  $index
     * @param  string  $q
     * @return SearchBuilder
     */
    public function query($index, $q);

}