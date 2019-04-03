<?php

namespace App\Views;

class TemplateView
{

	private $viewsPath = __DIR__ . '/../../views/';

	public function __construct($viewsPath = null)
	{

		if (!is_null($viewsPath)) {
			$this->viewsPath = $viewsPath;
		}

	}

	public function render($view_name, $params = [], $return = false)
	{

		if (!is_file($this->viewsPath . $view_name . '.php')) {
			throw new \Exception('View "' . $view_name . '" in folder "' . $this->viewsPath . '" not exists');
		}

		$template = $this->viewsPath . $view_name . '.php';

		extract($params);
		ob_start();

		require($template);

		if ($return) {
			return ob_get_clean();
		} else {
			echo ob_get_clean();
		}

	}
}
