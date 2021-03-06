<?php
namespace Starbug\Intl;
use Starbug\Core\Controller;
use Starbug\Core\DatabaseInterface;
class AdminCountriesController extends Controller {
	public $routes = array(
		'update' => '{id}'
	);
	function __construct(DatabaseInterface $db) {
		$this->db = $db;
	}
	function init() {
		$this->assign("model", "countries");
	}
	function default_action() {
		$this->render("admin/list");
	}
	function create() {
		if ($this->db->success("countries", "create")) $this->redirect("admin/countries");
		else $this->render("admin/create");
	}
	function update($id) {
		$this->assign("id", $id);
		if ($this->db->success("countries", "create")) $this->redirect("admin/countries");
		else $this->render("admin/update");
	}
	function import() {
		$this->render("admin/import");
	}
}
?>
