<?php
//fetchhing records From database
$sql = "SELECT * FROM `concern_form` WHERE 1";
$result = mysqli_query($conn, $sql);
$no = 0;
while ($rows = mysqli_fetch_assoc($result)) {
    $no++;
    echo "
   <tr>
   <td>" . $no . "</td>
   <td>" . $rows['name'] . "</td>
   <td>" . $rows['concern'] . "</td>
   <td>
   <a href='#' class='btn btn-info btn-sm'>Update</a>
   <a href='#' class='btn btn-dark btn-sm'>Delete</a>
   </td>
   </tr>
   ";
};
