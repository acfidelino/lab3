<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException; // Add this line

class Pages extends BaseController
{

    public function view($page = 'index')
    {
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view('templates/navbar', $data) .
             view('pages/' . $page) .
             view('templates/references');
    }
    
}