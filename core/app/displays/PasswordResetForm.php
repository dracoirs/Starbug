<?php
class PasswordResetForm extends FormDisplay {
	public $model = "users";
	public $default_action = "reset_password";
	function build_display($options) {
		$display->add("email");
	}
}
?>