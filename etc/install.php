#!/usr/bin/php
<?php
		include("Etc.php");
		include("init.php");
		$uris = unserialize(file_get_contents("core/db/schema/uris"));
		$users = unserialize(file_get_contents("core/db/schema/users"));
		include("core/db/Schemer.php");
		$schemer = new Schemer($this->db);
		$schemer->create("uris", $uris);
		$schemer->create("users", $users);
		$schemer->insert("users", "first_name, last_name, email, password, security", "'$_POST[adminfirst_name]', '$_POST[adminlast_name]', '$_POST[adminemail]', '".md5($_POST['adminpass'])."', '".Etc::SUPER_ADMIN_SECURITY."'");
		$schemer->insert("uris", "path, template, security", "'uris', 'Starbug', '4'");
		$schemer->insert("uris", "path, template, visible, security", "'uris/new', 'Ajax', '0', '4'");
		$schemer->insert("uris", "path, template, visible, security", "'uris/get', 'Ajax', '0', '4'");
		$schemer->insert("uris", "path, template, visible, security", "'uris/edit', 'Ajax', '0', '4'");
		$schemer->insert("uris", "path, template, visible, security", "'uris/add', 'Ajax', '0', '4'");
		$schemer->insert("uris", "path, template, security", "'models', 'Starbug', '4'");
		$schemer->insert("uris", "path, template, visible, security", "'models/new', 'Ajax', '0', '4'");
		$schemer->insert("uris", "path, template, visible, security", "'models/get', 'Ajax', '0', '4'");
		$schemer->insert("uris", "path, template, visible, security", "'models/edit', 'Ajax', '0', '4'");
		$schemer->insert("uris", "path, template, visible, security", "'models/add', 'Ajax', '0', '4'");
		$schemer->insert("uris", "path, template, security", "'users', 'Starbug', '4'");
		$schemer->insert("uris", "path, template, visible, security", "'users/new', 'Ajax', '0', '4'");
		$schemer->insert("uris", "path, template, visible, security", "'users/get', 'Ajax', '0', '4'");
		$schemer->insert("uris", "path, template, visible, security", "'users/edit', 'Ajax', '0', '4'");
		$schemer->insert("uris", "path, template, visible, security", "'users/add', 'Ajax', '0', '4'");
		$schemer->insert("uris", "path, template, visible, security", "'login', 'Starbug', '0', '0'");
?>