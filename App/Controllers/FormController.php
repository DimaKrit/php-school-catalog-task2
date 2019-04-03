<?php

namespace App\Controllers;

use App\Views\TemplateView;

class FormController
{

	public $layout = __DIR__ . '/../../views/layout.php';

    public function index($params = [])
    {

		$templateView = new TemplateView();

		return $templateView->render('layout', [
			'title' => 'My awesome page4',
		]);
    }

    public function view($params = [])
    {
		$templateView = new TemplateView();

		$content = $templateView->render('view_name', [
			'forms' => ['form_1'],
		] ,true);

		return $templateView->render('layout', [
			'title' => 'My awesome page4',
			'content' => $content,
		]);
    }
}
