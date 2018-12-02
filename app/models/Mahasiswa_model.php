<?php 

class Mahasiswa_model{
    /* private $mhs = [
    [
        "nama" => "Dhymas",
        "nrp" => "0129213",
        "email" => "dhy@m.mas",
        "jurusan" => "Tif"
    ],
    [
        "nama" => "pranoto",
        "nrp" => "0122864",
        "email" => "pr@ano.to",
        "jurusan" => "Tin"
    ],
    [
        "nama" => "Garbun",
        "nrp" => "029432",
        "email" => "Ga@rb.un",
        "jurusan" => "Te"
    ]
    ]; */

    // private $dbh; // database handler
    // private $stmt; // statement

    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMahasiswa()
    {
        // return $this->mhs;
        // $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        // $this->stmt->execute();
        // return $this->stmt->fetchAll(PDO::FETCH_ASSOC);

        $this->db->query('SELECT * FROM '.$this->table);
        return $this->db->resultSet();
    }
    
    public function getMahasiswaById($id){
        $this->db->query('SELECT * FROM '.$this->table.' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data)
    {
        $query = "INSERT INTO mahasiswa VALUES ('', :nama, :nrp, :email, :jurusan)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMahasiswa($id)
    {
        $query = "DELETE FROM mahasiswa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
?>