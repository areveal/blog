<?php

class Post extends BaseModel {

	// The db table this model refers to 
    protected $table = 'posts';

    // Validation rules for our model properties
    static public $rules = [
    	'title' => 'required|max:100',
    	'body' => 'required|max:10000'
    ];

    public function user() 
    {
    	return $this->belongsTo('User');
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

    static public function findBySlug($slug) 
    {
        $post = self::where('slug', $slug)->first();
        return ($post == null) ? App::abort(404) : $post;
    }

    public function setSlugAttribute($value) 
    {
        $value = str_replace(' ','-',trim($value));
        $this->attributes['slug'] = strtolower($value);
    }

}