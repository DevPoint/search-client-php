<?php

namespace App\Search\Contracts;

interface SearchClientResponse {

    /**
     * Get the take limit.
     *
     * @return int
     */
    public function limit();
    
    /**
     * Get the status.
     *
     * @return string
     */
    public function status();

    /**
     * Get the values count.
     *
     * @return int
     */
    public function count();
    
    /**
     * Get the total count.
     *
     * @return int
     */
    public function totalCount();
    
    /**
     * Get the maximal score.
     *
     * @return float
     */
    public function maxScore();

    /**
     * Retrieve values together with meta information.
     * 
     * [
     *   'index': {indexName}
     *   'id': {valueId}
     *   'score': {valueScore}
     *   'data': [
     *     'name': {the_name}
     *     'email': {the_email}
     *     'street': {the_street}
     *      ..
     *   ]
     * ]
     *
     * @return array
     */
    public function valuesWithMeta();
    
    /**
     * Retrieve values.
     * 
     * [
     *   'name': {the_name}
     *   'email': {the_email}
     *   'street': {the_street}
     *    ..
     * ]
     *
     * @return array
     */
    public function values();

    /**
     * Retrieve values ids.
     *
     * @return array
     */
    public function ids();

}