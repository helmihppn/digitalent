<?php
    $nama =$_POST['nama'];
    $email =$_POST['email'];
    $alamat =$_POST['alamat'];
    $notelp =$_POST['notelp'];
    // if($nama == ""){
    //     header("location:kominfo.php?nama=kosong");
    // }else
    //     if($email == ""){
    //         header("location:kominfo.php?email=kosong");
    //     }else
    //         if($alamat == ""){
    //             header("location:kominfo.php?alamat=kosong");
    //         }else
    //             if($notelp == ""){
    //                 header("location:kominfo.php?notelp=kosong");
    //             }else{
    //     echo "Nama anda adalah ".$nama ;
    //     echo "<p>Email anda adalah ".$email;
    //     echo "<p>Alamat anda adalah ".$alamat;
    //     echo "<p>No Telp anda adalah ".$notelp;
    // }
    
    if($nama=="" || $email =="" || $alamat ="" || $notelp =""){
        if($nama ==""){
            $nama="kosong";
        }
        if($email ==""){
            $email="kosong";
        }
        if($alamat ==""){
            $alamat="kosong";
        }
        if($notelp ==""){
            $notelp="kosong";
        }
        header("location:kominfo.php?nama=$nama&email=$email&alamat=$alamat&notelp=$notelp");
    } else {
        echo "Nama :".$nama;
        echo "<p>Email :".$email;
        echo "<p>Alamat :".$alamat;
        echo "<p>No Telp :".$notelp;
    }
    ?>