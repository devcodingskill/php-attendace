<?php
    class crud
    {
        //private database object
        private $db;
        //ctor to initialize
        function __construct($conn)
        {
            $this->db =$conn;
        }

        public function insert($fname,$lname,$dob,$email,$contact,$specialty)
        {
            try {
                $sql ="INSERT INTO attendee(firstname,lastname,dob,email,contact,specialty_id) 
                        VALUES (:fname,:lname,:dob,:email,:contact,:specialty)";
                //prepare statement
                $stmt = $this->db->prepare($sql);
                //bind value to it
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':contact',$contact);
                $stmt->bindparam(':specialty',$specialty);
                //execute statement
                $stmt->execute();
                return true;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }

        }
            
        
    }
?>