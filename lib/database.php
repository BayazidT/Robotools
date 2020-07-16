<?php
	class Database{
		public $host = DB_HOST;
		public $user = DB_USER;
		public $pass = DB_PASS;
		public $dbname = DB_NAME;
		
		
		public $link;
		public $error;
		
		public function __construct(){
			$this->connectDB();
		}
		
		private function connectDB(){
			
			$this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
			if(!$this->link){
				$this->error = "Connection failed".$this->link->connect_error;
				return false;
				
			}
		}
		
		public function select($query){
			$result= $this->link->query($query) or die($this->link->error.__LINE__);
			
			if($result->num_rows > 0){
				return $result;
			}else{
				return false;
			}
		}
		public function insert($query){
			$insert_row = $this->link->query($query) or die($this->link->error.__LINE__);
			
			if($insert_row){
				header("Location: index.php?msg=".urlencode('Data inserted successfully.'));
				exit();
			}else{
				 die("Error!!(".$this->link->errno.")".$this->link->error);
			}
		
		}
		public function insertcart($query){
			$insert_row = $this->link->query($query) or die($this->link->error.__LINE__);
			
			if($insert_row){
				header("Location: cartdetails.php?msg=".urlencode('Data inserted successfully.'));
				exit();
			}else{
				 die("Error!!(".$this->link->errno.")".$this->link->error);
			}
		
		}
		
		public function update($query){
			$update_row = $this->link->query($query) or die($this->link->error.__LINE__);
			
			if($update_row){
				header("Location: profile.php?msg=".urlencode('Data updated successfully.'));
				exit();
			}else{
				 die("Error!!(".$this->link->errno.")".$this->link->error);
			}
		
		}
		public function delete($query){
			$deleteData = $this->link->query($query) or die($this->link->error.__LINE__);
			
			if($deleteData){
				header("Location:profile.php?msg=".urlencode('Data deleted successfully.'));
				
				exit();
			}else{
				 die("Error!!(".$this->link->errno.")".$this->link->error);
			}
		
		}
		public function insertuser($query){
			$insert_row = $this->link->query($query) or die($this->link->error.__LINE__);
			
			if($insert_row){
				header("Location: verified.php?msg=".urlencode('Verification code has been sent.'));
				exit();
			}else{
				 die("Error!!(".$this->link->errno.")".$this->link->error);
			}
		
		}
		public function insertsell($query){
			$insert_row = $this->link->query($query) or die($this->link->error.__LINE__);
			
			if($insert_row){
				header("Location: buy_sell.php?msg=".urlencode('Post uploaded successfully'));
				exit();
			}else{
				 die("Error!!(".$this->link->errno.")".$this->link->error);
			}
		
		}
		public function inserttutor($query){
			$insert_row = $this->link->query($query) or die($this->link->error.__LINE__);
			if($insert_row){
				header("Location: tuition.php?msg=".urlencode('Post uploaded successfully'));
				exit();
			}else{
				 die("Error!!(".$this->link->errno.")".$this->link->error);
			}
		
		}
		public function inserttolet($query){
			$insert_row = $this->link->query($query) or die($this->link->error.__LINE__);
			if($insert_row){
				header("Location: tolet.php?msg=".urlencode('Post uploaded successfully'));
				exit();
			}else{
				 die("Error!!(".$this->link->errno.")".$this->link->error);
			}
		
		}
	}

?>