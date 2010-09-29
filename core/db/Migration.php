<?php
/**
* FILE: core/db/Migration.php
* PURPOSE: This is the Migration class. It wraps the Schemer.
*
* This file is part of StarbugPHP
*
* StarbugPHP - website development kit
* Copyright (C) 2008-2009 Ali Gangji
*
* StarbugPHP is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* StarbugPHP is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with StarbugPHP.  If not, see <http://www.gnu.org/licenses/>.
*/
class Migration {
	//ADD TABLE DESCRIPTION
	function table($arg) {
		global $schemer;
		$args = func_get_args();
		call_user_func_array(array($schemer, "table"), $args);
	}
	//ADD COLUMN TO DESCRIPTION
	function column($table, $col) {
		global $schemer;
		$schemer->column($table, $col);
	}
	//DROP TABLE OR COLUMN FROM DESCRIPTION
	function drop($table, $col="") {
		global $schemer;
		$schemer->drop($table, $col);
	}
	function insert($table, $keys, $values) {
		global $schemer;
		$schemer->insert($table, $keys, $values);
	}
	function up() {}
	function down() {}
	function created() {}
	function removed() {}
}
?>