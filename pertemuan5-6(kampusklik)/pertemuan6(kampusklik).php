<?php

        $nama_mhs = $_POST['nama'];
        $npm_mhs = $_POST['npm'];
        $nilai_mhs = $_POST['nilai'];
        $perulangan = $_POST['ulangi'];

    if( $nilai_mhs != ""){

        if( $nilai_mhs >= 85){
            $huruf_mutu = 'A';
        }else if ( $nilai_mhs >= 75){
            $huruf_mutu = 'B';
        }else if ( $nilai_mhs >= 65){
            $huruf_mutu = 'C';
        }else{
            $huruf_mutu = '??';
        }
    

        for($x = 0; $x <= $perulangan; $x++){
        
        }
        //echo "<script>alert('nama : " . $nama_mhs . " npm :" . $npm_mhs . " Nilai mata kuliah anda adalah : " . $huruf_mutu . "')</script>";
        echo "nama : " . $nama_mhs . "<br>", " npm :" . $npm_mhs ."<br>", " Nilai mata kuliah anda adalah : " . $huruf_mutu. "<br>";
    }

    
    
?>

<html>
    <header>
        <title>
        </title>
    </header>

        <body>

        <form action="formgwe.php" method="POST">
            
                <button  type="return" name="return">
                    RETURN
                </button>

            </form>

        </body>
</html>