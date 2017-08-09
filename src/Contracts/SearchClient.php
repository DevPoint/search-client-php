<?php

namespace Devpoint\SearchClient\Contracts;

interface SearchClient {
    
    /**
     * Update values on the index.
     * 
     * [
     *   'id': {valueId}
     *   'data': [
     *     'name': {the_name}
     *     'email': {the_email}
     *     'street': {the_street}
     *      ..
     *   ]
     * ]
     *
     * @param  string  $index
     * @param  array   $valuesWithMeta
     * @return void
     */
    public function update($index, $valuesWithMeta);

    /**
     * Delete values from the index.
     *
     * @param  string  $index
     * @param  array   $ids
     * @return void
     */
    public function delete($index, $ids);

    /**
     * Create new search builder instance
     *
     * @param  string  $index
     * @param  string  $q
     * @return SearchBuilder
     */
    public function query($index, $q);

}