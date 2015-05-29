<?php
class hook_form_multiple_category_select extends FormHook {
	function build($form, &$control, &$field) {
		$value = $form->get($field['name']);
		if ((empty($value)) && (!empty($field['default']))) {
			$form->set($field['name'], $field['default']);
			unset($field['default']);
		}
		efault($field['taxonomy'], ((empty($form->model)) ? "" : $form->model."_").$field['name']);
		efault($field['parent'], 0);
		$terms = terms($field['taxonomy'], $field['parent']);
		$value = $form->get($field['name']);
		if(!is_array($value)) $value = explode(",",$value);
		foreach ($value as $idx => $v) {
			if (substr($v, 0, 1) == "-") unset($value[$idx]);
		}
		$field['value'] = $value;
		$field['terms'] = $terms;
		$field['writable'] = isset($field['writable']);
	}
}
?>