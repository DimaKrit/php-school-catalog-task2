<?php

namespace App\Controllers;

use App\Views\TemplateView;

class FormController
{

	public $layout = __DIR__ . '/../../views/layout.php';

    public function index($params = [])
    {

		$templateView = new TemplateView();

		return $templateView->render('view_name', [
			'title' => 'My awesome page',
			'forms' => ['form_1'],
		]);
    }

    public function view($params = [])
    {
		$templateView = new TemplateView();

		return $templateView->render('view_name', [
			'title' => 'My awesome page',
			'forms' => ['form_2'],
		]);
    }
}
