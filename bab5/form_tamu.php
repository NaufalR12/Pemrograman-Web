<html>

<head>
    <title> Form Tamu </title>
</head>

<body>
    <?php 
    session_start();
    if (empty($_SESSION['username'])) {
    header("location:index.php?pesan=belum_login");
    }
    ?>
    <center>
        <form method="POST" action="input_tamu.php">
            <table>
                <tr>
                    <td>Nama </td>
                    <td>: </td>
                    <td> <input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Email </td>
                    <td>: </td>
                    <td> <input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Pesan </td>
                    <td>: </td>
                    <td> <input type="text" name="pesan"></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <center>
                            <input type="submit" name="submit" value="kirim">
                        </center>
                    </td>
                </tr>

            </table>
        </form>
    </center>
</body>

</html>