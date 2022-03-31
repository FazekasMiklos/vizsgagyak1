<?php
class Jelentkezes{
    private $rajtszam;
    private $nev;
    private $email;
    private $datum;
    private $nem;

    public function set_futo($rajtszam, $conn) {
        // adatbázisból lekérdezzük
        $sql = "SELECT * FROM jelentkezes";
        $sql .= " WHERE rajtszam = $rajtszam ";
        $result = $conn->query($sql);
        
        if($conn->query($sql)){
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $this->rajtszam = $row['rajtszam'];
            $this->nev = $row['nev'];
            $this->email = $row['email'];
            $this->datum = $row['datum'];
            $this->nem = $row['nem'];
        }
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
}
?>