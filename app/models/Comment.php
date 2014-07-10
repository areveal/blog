<?php

class Comment extends BaseModel {

	// The db table this model refers to 
    protected $table = 'comments';

    // Validation rules for our model properties
    static public $rules = [
    	'name' => 'required|max:100',
    	'body' => 'required|max:500'
    ];

    public function post() 
    {
    	return $this->belongsTo('Post');
    }

        public function renderBody()
    {
        $Parsedown = new Parsedown();
        $text = $Parsedown->text($this->body);
        $config = HTMLPurifier_Config::createDefault();
        $purifier = new HTMLPurifier($config);
        $clean_html = $purifier->purify($text);
        return $clean_html;        
    }

}