<?php

class Post extends BaseModel {

	// The db table this model refers to 
    protected $table = 'posts';

    protected $imgDir = 'img-upload';

    // Validation rules for our model properties
    static public $rules = [
    	'title' => 'required|max:100',
    	'body' => 'required|max:10000'
    ];

    public function user() 
    {
    	return $this->belongsTo('User');
    }

    public function upload($img)
    {
        $systemPath = public_path() . '/' . $this->imgDir . '/';
        $imageName = $this->id . '-' . $img->getClientOriginalName();
        $img->move($systemPath , $imageName);
        $this->img_path = '/'  .$this->imgDir . '/' . $imageName;
    }
}