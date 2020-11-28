<?php 
class Kino{
	private $data;
	private $sql = "SELECT * FROM `kinoner` WHERE `id` = ";
	public function __construct($id){
		$this->id = $id;
		$this->data = $this->getData($id);
	}
	public function getData($id){
		$sql = $this->sql.$id;
		$db = mysqli_connect('localhost', 'root', 'root', 'Filmer');
		$conn = mysqli_query($db,$sql);
		$result = mysqli_fetch_assoc($conn);
		return $result;

	}
	public function getData1(){
		return $this->data;
	}
	public function __get($name){
		return $this->data[$name];
	}

}


 ?>