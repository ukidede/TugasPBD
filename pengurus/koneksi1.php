<?php
$conn = mysqli_connect("localhost", "root", "", "form_login");
// if ($conn) {
//     echo "wow";
// } else {
//     echo "bad";
// }


function ada($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function hapuss($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM pengurus WHERE id= $id");
    return mysqli_affected_rows($conn);
}

function editt($data)
{
    global $conn;
    $id = $data["id"];
    $Nama = htmlspecialchars($data["Nama"]);
    $Jenis_kelamin = htmlspecialchars($data["Jenis_kelamin"]);
    $Tempat_lahir = htmlspecialchars($data["Tempat_lahir"]);
    $Tanggal_lahir = htmlspecialchars($data["Tanggal_lahir"]);
    $Nomer_Hp = htmlspecialchars($data["Nomer_Hp"]);
    $Email = htmlspecialchars($data["Email"]);
    $Alamat = htmlspecialchars($data["Alamat"]);
    $Status_pengurus = htmlspecialchars($data["Status_pengurus"]);

    $query = "UPDATE anggota_stt SET 
                Nama='$Nama', 
                Jenis_kelamin='$Jenis_kelamin', 
                Tempat_lahir='$Tempat_lahir', 
                Tanggal_lahir='$Tanggal_lahir', 
                Nomer_Hp= '$Nomer_Hp', 
                Email='$Email',
                Alamat= '$Alamat',
                Status_pengurus= '$Status_pengurus'
            WHERE id= $id ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
