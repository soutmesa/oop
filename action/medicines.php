<?php 
	include "dataoperation.php";
	$action = $_GET['act'];
	if($action==="post"){
		$name = isset($_GET['name'])? $_GET['name'] : '';
		$qty = isset($_GET['qty'])? $_GET['qty'] : '';
		$data = array(
			'name' => $name, 
			'qty' => $qty 
			);
		$post = new DataOperation();
		$getLastInsert = new DataOperation();
		$lastId = $post->insert("medicines", $data);
		echo $getLastInsert->selectOne("medicines", $lastId);

	}else if($action==="getOne"){
		$id = isset($_GET['id'])? $_GET['id'] : '';
		$getLastInsert = new DataOperation();
		echo $getLastInsert->selectOne("medicines", $id);
	}else if($action==="get"){
		$datas = new DataOperation();
		echo $datas->selectAll("medicines");
	}else if($action==='edit'){
		$id = isset($_GET['id'])? $_GET['id'] : '';
		$data = new DataOperation();
		echo $data->selectOne("medicines", $id);
	}else if($action==='put'){
		$name = isset($_GET['name'])? $_GET['name'] : '';
		$qty = isset($_GET['qty'])? $_GET['qty'] : '';
		$id = isset($_GET['id'])? $_GET['id'] : '';
		$data = array();
		if($name){
			$data['name'] = $name;
		}
		if($qty){
			$data['qty'] = $qty;
		}
		$put = new DataOperation();
		if($put->update("medicines", $data, $id)){
			$updated = new DataOperation();
			echo $updated->selectOne("medicines", $id);
		}else{
			echo "Failed";
		}
		
	}else if($action==='delete'){
		$id = isset($_GET['id']) ? $_GET['id'] : '';
		$delete = new DataOperation();
		echo $delete->delete("medicines", $id);
	}
?>