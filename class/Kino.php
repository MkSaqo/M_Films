<?php 
require_once 'Connection.php';
class Kino extends Connection{
	private $data;
	private $sql = "SELECT * FROM `kinoner` WHERE `id` =";
	public function __construct($id,$db){
		$this->id = $id;
		$this->data = $this->getData($id,$db);
	}
	public function getData($id,$db){
		$sql = $this->sql.$id;
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
	public static function getCountFilms($db){
		$sql1 = "SELECT COUNT(`id`) FROM `kinoner` ";
		$conCount = mysqli_fetch_assoc(mysqli_query($db,$sql1))["COUNT(`id`)"];
		return $conCount;	
	}
	public static function getCountYear($db,$why,$year){
		$sql1 = "SELECT COUNT(`$why`) FROM `kinoner` WHERE `$why` LIKE '%$year%'  ORDER BY `id` DESC";
		$conCount = mysqli_fetch_assoc(mysqli_query($db,$sql1))["COUNT(`$why`)"];
		return $conCount;	
	}
	public static function getMiniFilms($db,$genre){
		$sql1 = "SELECT * FROM `kinoner` WHERE `genres` LIKE '%$genre%'  ORDER BY `id` DESC";
		$result = mysqli_query($db,$sql1);
		$conCount = [];
		while($r = mysqli_fetch_assoc($result)){
		    $conCount[] = $r['id'];
		}
		return $conCount;	
	}
	public static function getCategory($db,$why,$page,$limit1,$limit2){
		$sql1 = "SELECT * FROM `kinoner` WHERE `$why` LIKE '%$page%'  LIMIT $limit1,$limit2";
		$result = mysqli_query($db,$sql1);
		$conCount = [];
		while($r = mysqli_fetch_assoc($result)){
		    $conCount[] = $r['id'];
		}
		return $conCount;	

	}
	public static function getCountCategory($db,$why,$page){
	    $sql1 = "SELECT COUNT(`id`) FROM `kinoner`  WHERE `$why` LIKE '%$page%'";	
		$conCount = mysqli_fetch_assoc(mysqli_query($db,$sql1))["COUNT(`id`)"];
		return $conCount;
	}
	public static function getCountSearch($db,$q){
	    $sql1 = "SELECT COUNT(*) FROM `kinoner` WHERE (`name` LIKE '%".$q."%') OR (`desc` LIKE '%".$q."%')OR (`desc1` LIKE '%".$q."%')OR (`desc2` LIKE '%".$q."%')
OR (`desc3` LIKE '%".$q."%')OR (`desc4` LIKE '%".$q."%')OR (`status` LIKE '%".$q."%')OR (`time` LIKE '%".$q."%')
OR (`budget` LIKE '%".$q."%')OR (`revenue` LIKE '%".$q."%')OR (`genres` LIKE '%".$q."%')OR (`lang` LIKE '%".$q."%')";
	
		$conCount = mysqli_fetch_assoc(mysqli_query($db,$sql1))["COUNT(*)"];
		return $conCount;
	}
	public static function getSearch($db,$q,$limit1,$limit2){

		$sql1 = "SELECT * FROM `kinoner` 
			WHERE (`name` LIKE '%".$q."%') OR (`desc` LIKE '%".$q."%')OR (`desc1` LIKE '%".$q."%')OR (`desc2` LIKE '%".$q."%')
			OR (`desc3` LIKE '%".$q."%')OR (`desc4` LIKE '%".$q."%')OR (`status` LIKE '%".$q."%')OR (`time` LIKE '%".$q."%')
			OR (`budget` LIKE '%".$q."%')OR (`revenue` LIKE '%".$q."%')OR
			(`genres` LIKE '%".$q."%')OR (`lang` LIKE '%".$q."%')  LIMIT $limit1,$limit2";

			$result = mysqli_query($db,$sql1);
			$conCount = [];
			while($r = mysqli_fetch_assoc($result)){
			    $conCount[] = $r['id'];
			}
			return $conCount;	
		}

	


}


 ?>