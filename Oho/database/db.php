<?php

abstract class DataBase_SQL { 	

	private $Link_ID; 	// identif. legaturii cu o baza de date 
	private $Errno; 		// starea de eroare 

	abstract public function connect(); 		// conectare la serverul BD 
	abstract public function query($q); 		// trimiterea unei inter. SQL 

}

class DataBase_MySQL extends DataBase_SQL { 

	private $Host; 		// adresa serverului MySQL 
	private $DataBase;	// numele bazei de date 
	private $Query_ID;
	private $User;			// numele utilizatorului  
	private $Password;	// parola utilizatorului 
	private $Error;			// mesajul de eroare 

	// constructor
	public function __construct ($h = '', $db = '', $u = '', $p = '') {
		$this->Link_ID = 0;
		$this->Query_ID = 0;
		$this->Errno = 0;
		$this->Host = $h;
		$this->DataBase = $db;
		$this->User = $u;
		$this->Password = $p;
		$this->Error = '';
	}

	// destructor
	public function __destruct () {
		if ($this->Link_ID) {
			mysql_close ($this->Link_ID);	 // inchidem conexiunea
		}  
	}
	

	// opreste executia în caz de eroare fatala 	
	public function halt ($msg) { 
		printf("A survenit eroarea: %s\n", $msg); 
		printf("MySQL raporteaza: %s (%s)\n", $this->Errno, $this->Error); 
		die("Terminare anormala."); 
	} 
  
  
	// conectare la baza de date 
	public function connect () { 	
		if ($this->Link_ID == 0) { // inca nu exista o conexiune 
	
			$this->Link_ID = mysql_connect ($this->Host, $this->User, $this->Password); 
		  
			if (!$this->Link_ID) { // succes sau esec?
				$this->halt ("Conexiune esuata"); 
			}   
		  
			// deschidem baza de date 
			if (!mysql_select_db($this->DataBase, $this->Link_ID)) {
				// salvam erorile 
				$this->Errno = mysql_errno(); 
				$this->Error = mysql_error(); 	
				$this->halt ("Baza de date " . $this->DataBase . " nu poate fi deschisa");   				
			} 			  
		} 			
	}  
	
	
	// trimite o interogare serverului MySQL 
	public function query ($q) {      
		$this->Query_ID = mysql_query ($q, $this->Link_ID);     
		// initial stabilim pointerul pe prima înregistrare 
		$this->Row = 0; 
		// salvam erorile 
		$this->Errno = mysql_errno(); 
		$this->Error = mysql_error();     
		
		if (!$this->Query_ID) { // eroare fatala?
			$this->halt ("Comanda SQL eronata: " . $q); 
		}	
		
		return $this->Query_ID; 
	} 


	// verifica daca e-mailul inclus exista in baza de date
	public function checkEmail($m){
		$emailErr="";
		$sql = "SELECT email FROM users";
		$result = mysql_query($sql, $this->Link_ID);
		if (!$result) {
		    $this->halt ("Comanda SQL eronata: " . $sql); 
		}
		else{			  
		    while($row = mysql_fetch_assoc($result)) {		    	
		        if (strcasecmp($row['email'],$m) == 0){		        	
		        	$emailErr = "E-mail is already in use!";	        	
		        }
		    }
		}
		return $emailErr;
	}

	// verifica daca username-ul inclus exista in baza de date
	public function checkUsername($m){
		$userErr="";
		$sql = "SELECT username FROM users";
		$result = mysql_query($sql, $this->Link_ID);
		if (!$result) {
		    $this->halt ("Comanda SQL eronata: " . $sql); 
		}
		else{			  
		    while($row = mysql_fetch_assoc($result)) {		    	
		        if (strcasecmp($row['username'],$m) == 0){		        	
		        	$userErr = "Username is already in use!";	        	
		        }
		    }
		}
		return $userErr;
	}

	public function dataExists($u, $p){
		$sql = "SELECT password FROM users where username = '$u' || email = '$u'";
		$result = mysql_query($sql, $this->Link_ID);

		if (!$result) {
		    $this->halt ("Comanda SQL eronata: " . $sql); 
		}else{
			if(mysql_num_rows($result) == 0)
				return FALSE;
			else{
				$row = mysql_fetch_assoc($result);
				if ($row['password'] == crypt($p, $row['password'])) {
   					return TRUE;
				}
			}
		}
		return FALSE;
	}

	public function getUri($category){
		if(strcmp($category,"all")==0)
			$sql = "SELECT uri,name,category FROM stars";
		else
			$sql = "SELECT uri,name,category FROM stars where category = '$category'";
		$link="";
		$result = mysql_query($sql, $this->Link_ID);
		$num_rows = mysql_num_rows($result);

		$randomNum = rand(1,$num_rows);

		$iterator = 1;
		if (!$result) {
		    $this->halt ("Comanda SQL eronata: " . $sql); 
		}else{
			while($iterator<=$randomNum) {					
				$row = mysql_fetch_assoc($result);	    	
		        $iterator=$iterator+1;
		        $link = $row;      	        
	    	}	    	
		}
		return $link;
	}

	public function saveToHistory($user, $category, $points){
		$sql = "INSERT INTO history(username,category,points) VALUES ('$user','$category','$points')";
		$this->query($sql);
	}

	public function getRow($u){
		$sql = "SELECT username, email FROM users where username = '$u' || email = '$u'";
		$result = mysql_query($sql, $this->Link_ID);

		if (!$result) {
		    $this->halt ("Comanda SQL eronata: " . $sql); 
		}else{
			if(mysql_num_rows($result) == 0)
				return 0;
			else{
				$row = mysql_fetch_assoc($result);
				return $row;		
			}
		}
	}

	public function getHistory($u, $m){
		$sql = "SELECT category, points, date FROM history where username = '$u' || username = '$m' order by date desc";
		$result = mysql_query($sql, $this->Link_ID);
		$num_rows = mysql_num_rows($result);
		$table = array();
		$iterator = 0;

		if (!$result) {
		    $this->halt ("Comanda SQL eronata: " . $sql); 
		}else{
			if(mysql_num_rows($result) == 0)
				return 0;
			else{
				while($iterator<$num_rows) {					
					$row = mysql_fetch_assoc($result);	    	
					$table[$iterator] = $row;
			        $iterator=$iterator+1;
		    	}
				return $table;		
			}
		}
	}

	public function getRanking(){
		$sql = "SELECT DISTINCT username, points FROM history e WHERE points=(SELECT max(points) FROM history WHERE username = e.username) ORDER BY points DESC";

		$result = mysql_query($sql, $this->Link_ID);
		$num_rows = mysql_num_rows($result);
		$table = array();
		$iterator = 0;

		if (!$result) {
		    $this->halt ("Comanda SQL eronata: " . $sql); 
		}else{
			if(mysql_num_rows($result) == 0)
				return 0;
			else{
				while($iterator<$num_rows) {					
					$row = mysql_fetch_assoc($result);	    	
					$table[$iterator] = $row;
			        $iterator=$iterator+1;
		    	}	
			}
		}

		for($i = 0; $i<$iterator; $i++){
			$u = $table[$i]['username'];
			$p = $table[$i]['points'];
			$sql = "SELECT category, date from history where username= '$u' && points= '$p'";
			$result = mysql_query($sql, $this->Link_ID);
			$num_rows = mysql_num_rows($result);

			if (!$result) {
		    	$this->halt ("Comanda SQL eronata: " . $sql); 
			}else{
				if(mysql_num_rows($result) == 0)
					return 0;
				else{			
					$row = mysql_fetch_assoc($result);	    	
					$table[$i]['category'] = $row['category'];
					$table[$i]['date'] = $row['date'];
				}
			}
		}

		return $table;
	}

}

	
?>