<?php
    require_once 'koneksi.php';
    class Classes extends database {

        public function __construct() {
            parent::__construct();
        }

        /*public function baca_data($sql) {
            $sql = "SELECT * FROM tbl_classes"; 
        }*/

        public function tampil_data() {
            $sql = "SELECT id_class, id_program, id_academic_advisor FROM tbl_classes";
            $data = $this->baca_data($sql);
            return $data;
        }
    }

    $classes1 = new Classes();
    $data = $classes1->tampil_data();

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
            <th>id_class</th>
            <th>id_program</th>
            <th>id_academic_advisor</th>
            <th>Class Name</th>
            <th>Academic Year</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row['id_class'] ?></td>
                <td><?php echo $row['id_program'] ?></td>
                <td><?php echo $row['id_academic_advisor'] ?></td>
                <td><?php echo $row['class_name'] ?></td>
                <td><?php echo $row['academic_year'] ?></td>
            </tr>
        </tbody>    
    </table>
</body>
</html>