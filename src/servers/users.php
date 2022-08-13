<?php
require_once("../database/con_db.php");
class User
{
	public function __construct(\PDO $pdo)
	{
		$this->conn = $pdo;
	}

	public function get_users()
	{
		$result = $this->conn->prepare("SELECT * FROM USERS LEFT JOIN ROLES ON USERS.ROLE_ID = ROLES.ID");
		$result->execute();
		$res = $result->fetchAll(PDO::FETCH_ASSOC);
		return $res;
	}

	// public function create_user($first_name, $last_name, $email, $phone_number, $password, $role_id)
	// {
	// 	$result = $this->conn->prepare("INSERT INTO users(first_name, last_name, email, phone_number, password, role_id) VALUES(:first_name, :last_name, :email, :phone_number, :password, :role_id)");
	// 	$result->bindParam(":first_name", $first_name);
	// 	$result->bindParam(":last_name", $last_name);
	// 	$result->bindParam(":email", $email);
	// 	$result->bindParam(":phone_number", $phone_number);
	// 	$result->bindParam(":password", $password);
	// 	$result->bindParam(":role_id", $role_id);
	// 	$result->execute();
	// 	$row = $result->fetch(PDO::FETCH_ASSOC);
	// 	return $row;
	// }
}
