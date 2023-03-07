<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{   
    // APCWEBPROG
    //protected $table = 'acfidelino_news';

    // Localhost:    
    protected $table = 'news';
    protected $allowedFields = ['title', 'slug', 'body'];

    public function getNews($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}