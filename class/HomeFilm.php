<?php 
class HomeFilm{
	private $data,$page,$conCount;


	
	public function __construct($page){
		$this->page = $page;
		$this->data = $this->getData($page);
	}
	public function getData($page){
		$db = mysqli_connect('localhost', 'root', 'root', 'Filmer');
		$sql1 = "SELECT COUNT(`id`) FROM `kinoner` ";
		$conCount = mysqli_fetch_assoc(mysqli_query($db,$sql1))["COUNT(`id`)"];
		$sql = "SELECT * FROM `kinoner` WHERE `id` <=$conCount -  $page*6+6  ORDER BY `id` DESC";
		$conn = mysqli_query($db, $sql);
		$this->conCount = $conCount;
		// $result = mysqli_fetch_assoc($conn);
		return $conn;

	}
	public function getData1(){
		return $this->data;
	}
	public function getCount(){
		return $this->conCount;
	}
	public function __get($name){
		return $this->data[$name];
	}

}


 ?>