<?php
class Controller {

	public $template = "auto";
	public $auto_render = true;
	private $context;
	public $response;
	public $validators = array();

	function __construct($context) {
		$this->context = $context;
		$this->init();
	}

	function init() {

	}

	/**
	 * Every controller has a default action, used when no action is specified.
	 */
	function default_action() {

	}

	/**
	 * run a controller action
	 * @param string $action - the action to run, an empty string will run default_action
	 * @param string $arguments - arguments to pass to the action
	 */
	function action($action="", $arguments=array()) {
		if (empty($action)) $action = "default_action";
		call_user_func_array(array($this, $action), $arguments);
		if ($this->auto_render) {
			$this->context->render(($this->template == "auto") ? request()->format : $this->template);
		}
	}

	function assign($key, $value=null) {
		$this->context->assign($key, $value);
	}

	/**
	 * set the view to render for this request
	 */
	function render($path="") {
		if (!empty($path)) request()->file = $path;
	}

	/**
	 * return a forbidden response
	 */
	function forbidden() {
		request()->forbidden();
	}

	/**
	 * return a missing response
	 */
	function missing() {
		request()->missing();
	}

	function start(Response $response) {
		$this->response = $response;
	}

	function finish() {
		return $this->response;
	}

	/**
	 * if an unknown action is called, trigger a missing response
	 */
	function __call($name, $arguments) {
		$this->missing();
	}

}
?>
