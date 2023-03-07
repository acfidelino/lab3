<?php

namespace App\Controllers;

use App\Models\GuestsModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Guests extends BaseController
{
  public function index()
  {
    $model = model(GuestsModel::class);

    $data = [
      'guests'  => $model->getGuests(),
      'title' => 'Guest list',
    ];

    return view('templates/header', $data)
      . view('guests/index')
      . view('templates/footer');
  }

  public function view($id = null)
  {
    $model = model(GuestsModel::class);

    $data['guests'] = $model->getGuests($id);

    if (empty($data['guests'])) {
      throw new PageNotFoundException('Cannot find the guest with the ID: ' . $id);
    }

    $data['title'] = 'Guest list';

    return view('templates/header', $data)
      . view('guests/view')
      . view('templates/footer');
  }

  public function create()
  {
    helper('form');

    // Checks whether the form is submitted.
    if (!$this->request->is('post')) {
      // The form is not submitted, so returns the form.
      return view('templates/header', ['title' => 'Add a guest'])
        . view('guests/create')
        . view('templates/footer');
    }

    $post = $this->request->getPost([
      'name',
      'email',
      'website',
      'comment',
      'gender',
    ]);

    // Checks whether the submitted data passed the validation rules.
    if (!$this->validateData($post, [
      'name' => 'required|max_length[70]|min_length[3]',
      'email' => 'required|valid_email|max_length[50]|min_length[6]',
      'website' => 'valid_url_strict|max_length[100]|min_length[4]',
      'comment'  => 'max_length[5000]|min_length[10]',
      'gender' => 'max_length[6]|min_length[4]',
    ])) {
      // The validation fails, so returns the form.
      return view('templates/header', ['title' => 'Add a guest'])
        . view('guests/create')
        . view('templates/footer');
    }

    $model = model(GuestsModel::class);

    $model->save([
      'name' => $post['name'],
      'email' => $post['email'],
      'website' => $post['website'],
      'comment' => $post['comment'],
      'gender'  => $post['gender'],
    ]);

    return view('templates/header', ['title' => 'Add a guest'])
      . view('guests/success')
      . view('templates/footer');
  }
}
?>