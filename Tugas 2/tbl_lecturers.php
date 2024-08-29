<?php
    require_once 'koneksi.php';

    class Lecturers extends database{
        public function __construct(){
            parent::__construct();
        }
        public function tampil_data(){
            $sql = "SELECT 'id_lecturer', 'NIDN', 'NIP' FROM tbl_lecturers";
            $data = $this->baca_data($sql);
            return $data;
        }
    }

    $lecturers1 = new Lecturers();
    $data = $lecturers1->tampil_data();

    foreach($data as $row){
        $no = 1;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
        <tr>
            <th>No</th>
            <th>id_lecturer</th>
            <th>NIDN</th>
            <th>NIP</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Signature</th>
            <th>id_position</th>
            <th>id_user</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row['id_lecturer'] ?></td>
                <td><?php echo $row['nidn'] ?></td>
                <td><?php echo $row['nip'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['phone_number'] ?></td>
                <td><?php echo $row['address'] ?></td>
                <td><?php echo $row['signature'] ?></td>
                <td><?php echo $row['id_position'] ?></td>
                <td><?php echo $row['id_user'] ?></td>
            </tr>
        </tbody>    
    </table>
</body>
</html>