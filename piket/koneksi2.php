<?php
$conn = mysqli_connect("localhost", "root", "", "form_login");
// if ($conn) {
//     echo "wow";
// } else {
//     echo "bad";
// }


function queryy($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function hapusss($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM jadwal_piket WHERE id= $id");
    return mysqli_affected_rows($conn);
}

function edittt($data)
{
    global $conn;
    $id = $data["id"];
    $Senin = htmlspecialchars($data["Senin"]);
    $Selasa = htmlspecialchars($data["Selasa"]);
    $Rabu = htmlspecialchars($data["Rabu"]);
    $Kamis = htmlspecialchars($data["Kamis"]);
    $Jumat = htmlspecialchars($data["Jumat"]);

    $query = "UPDATE anggota_stt SET 
                Senin='$Senin', 
                Selasa='$Selasa', 
                Rabu='$Rabu', 
                Kamis= '$Kamis', 
                Jumat='$Jumat',
                WHERE id= $id ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
