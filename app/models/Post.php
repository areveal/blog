<?php

class Post extends Eloquent {

	// The db table this model refers to 
    protected $table = 'posts';

    // Validation rules for our model properties
    static public $rules = [
    	'title' => 'required|max:100',
    	'body' => 'required|max:1000'
    ];
}