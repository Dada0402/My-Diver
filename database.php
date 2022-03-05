<?php
class database {


  private $servername = "localhost";
  private $username = "root";
  private $password = "root";
  private $dbname = "PHP";
  private $conn;

  


    function connect ()
    {
    $this->conn = new mysqli($this-> servername, $this-> username, $this-> password, $this-> dbname);
    if ($this-> conn->connect_error) 
      {
      die("Connection failed: " . $this->conn->connect_error);
    	}
    }

    function disconnect()
    {
    	$this->conn->close();
    }

    function insert($sql)
    {
    	$this-> connect();
    	

      if ($this->conn->query($sql) === TRUE) 
      {$last_id = $this->conn->insert_id;
        // echo "New record created successfully";
     

        
      } 
      else 
      {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $this-> disconnect();
      return $last_id;
    }

    function select($sql)
    {
      $this-> connect();
      $result_database = $this->conn->query($sql); 
      $row = $result_database->fetch_assoc(); 
      $this-> disconnect();
      return $row;
    }

    function update($sql)
    {
      $this-> connect();
      

      if ($this->conn->query($sql) === TRUE) 
      {
        echo "Update successfully";
        
      } 
      else 
      {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $this-> disconnect();
      return $this->conn->query($sql);
    } 

    function selectrows($sql)
    {
      $this-> connect();
      $result_database = $this->conn->query($sql); 
      $rows = array();
      while ($row = $result_database->fetch_assoc()) {
        array_push($rows, $row);
      } 

      $this-> disconnect();
      return $rows;
    }
      
    // function delete($sql)
    // {
    //   $this-> connect();
      

    //   if ($this->conn->query($sql) === TRUE) 
    //   {
    //     echo "delete successfully"
    //   } 
    //   else 
    //   {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    //   }
    //   $this-> disconnect();
    // }
    }

?>