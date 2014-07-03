<?php

class Post extends BaseModel {

	// The db table this model refers to 
    protected $table = 'posts';

    // Validation rules for our model properties
    static public $rules = [
    	'title' => 'required|max:100',
    	'body' => 'required|max:1000'
    ];

    public function user() 
    {
    	return $this->belongsTo('User');
    }
}