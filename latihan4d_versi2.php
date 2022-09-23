<?php

//Membuat array dua dimensi
$ASEAN = array(
    array("Negara", "Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand", "Laos", "Filipina", "Myanmar"),
    array("Ibukota", "D.K.I Jakarta", "SIngapura", "Kuala Lumpur", "Bandar Seri Begawan", "Bangkok", "Vientiane", "Manila", "Naypyidaw"),
    array("Kode Telepon", "+62", "+65", "+60", "+673", "+66", "+856", "+63", "+95")
);

?>
<html>

<head>
    <title>Daftar Negara  ASEAN & Ibukotanya Berupa Tabel</title>
</head>

<body>

    <table align="center" border="2" cellpadding="3">
        <tr>
            <th><?php echo $ASEAN[0][0] ?></th>
            <th><?php echo $ASEAN[1][0] ?></th>
            <th><?php echo $ASEAN[2][0] ?></th>
        </tr>
        <tr>
            <td><?php echo $ASEAN[0][1] ?></td>
            <td><?php echo $ASEAN[1][1] ?></td>
            <td><?php echo $ASEAN[2][1] ?></td>
        </tr>
        <tr>
            <td><?php echo $ASEAN[0][2] ?></td>
            <td><?php echo $ASEAN[1][2] ?></td>
            <td><?php echo $ASEAN[2][2] ?></td>
        </tr>
        <tr>
            <td><?php echo $ASEAN[0][3] ?></td>
            <td><?php echo $ASEAN[1][3] ?></td>
            <td><?php echo $ASEAN[2][3] ?></td>
        </tr>
        <tr>
            <td><?php echo $ASEAN[0][4] ?></td>
            <td><?php echo $ASEAN[1][4] ?></td>
            <td><?php echo $ASEAN[2][4] ?></td>
        </tr>
        <tr>
            <td><?php echo $ASEAN[0][5] ?></td>
            <td><?php echo $ASEAN[1][5] ?></td>
            <td><?php echo $ASEAN[2][5] ?></td>
        </tr>
        <tr>
            <td><?php echo $ASEAN[0][6] ?></td>
            <td><?php echo $ASEAN[1][6] ?></td>
            <td><?php echo $ASEAN[2][6] ?></td>
        </tr>
        <tr>
            <td><?php echo $ASEAN[0][7] ?></td>
            <td><?php echo $ASEAN[1][7] ?></td>
            <td><?php echo $ASEAN[2][7] ?></td>
        </tr>
        <tr>
            <td><?php echo $ASEAN[0][8] ?></td>
            <td><?php echo $ASEAN[1][8] ?></td>
            <td><?php echo $ASEAN[2][8] ?></td>
        </tr>
    </table>

</body>

</html>