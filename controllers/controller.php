<?php
include '../config/database.php';




class adminMaster extends Database
{
    public function adminFrofil()
    {
        $query = "SELECT * FROM adminMaster";
        $frofil = mysqli_query($this->connect(), $query);

        return $frofil;
    }

    public function updateFrofil($id, $nama, $alamat, $email, $user, $pass)
    {
        $query = "UPDATE adminMaster SET nama = '$nama',alamat='$alamat',email='$email',username='$user',pass='$pass' WHERE id='$id'";
        $update = mysqli_query($this->connect(), $query);

        return $update;
    }

    public function adminDaerah()
    {
        $query = "SELECT * FROM adminRegister";
        $reg = mysqli_query($this->connect(), $query);

        return $reg;
    }

    public function DataAdmin()
    {
        $query = "SELECT d.nama,a.fotoKtp,fotoDiri,jenisKelamin,b.kabupatenNama ,c.provinsiNama FROM dataadmin a
                 INNER JOIN kabupaten b ON a.`kabupaten`=b.`id` 
                INNER JOIN provinsi c ON c.`id`=b.`provinsi`
                INNER JOIN adminregister d ON c.`id`=d.`provinsi` WHERE b.`provinsi`";

        $reg = mysqli_query($this->connect(), $query);

        return $reg;
    }
}

class Admin extends Database
{

    public function registerAdmin($wilayah, $nama, $email, $pass)
    {
        date_default_timezone_set('Asia/jakarta');
        $now = date('Y-m-d H:i:s');
        $query = "INSERT INTO adminregister VALUES ('','$wilayah','$now','$nama','$email','$pass')";
        $register = mysqli_query($this->connect(), $query);
        return $register;
    }

    public function verifikasi($lokasi, $fotoKtp, $fotoDiri, $gender)
    {
        $verifikasi = "INSERT INTO dataadmin VALUES ('','$lokasi','$fotoKtp','$fotoDiri','$gender')";
        $query = mysqli_query($this->connect(), $verifikasi);

        return true;
    }
}

class Datapengiriman extends Database
{
    public function dataPengiriman($id, $pengirim, $noPengirim, $alamatPengirim, $penerima, $nopenerima, $alamatpenerima, $layanan)
    {
        date_default_timezone_set('Asia/jakarta');

        $tanggal = date('Y-m-d H:i:s');
        $query = "INSERT INTO pengiriman VALUES ('','$id','$tanggal','$pengirim','$noPengirim','$alamatPengirim','$penerima','$nopenerima','$alamatpenerima','$layanan')";
        $query =  mysqli_query($this->connect(), $query);

        return $query;
    }
    public function SdataKirim($id)
    {
        $query = "SELECT * FROM pengiriman WHERE id_admin = '$id'";
        $query = mysqli_query($this->connect(), $query);

        return $query;
    }

    public function selectAll()
    {
        $query = "SELECT * FROM pengiriman";
        $query = mysqli_query($this->connect(), $query);

        return $query;
    }
    public function deleteDataKirim($id)
    {
        $query = "DELETE FROM pengiriman WHERE resi = '$id'";
        $query = mysqli_query($this->connect(), $query);

        return $query;
    }
}


class Daerah extends Database
{
    public function provinsi()
    {
        $query = "SELECT * FROM provinsi";
        $daerah = mysqli_query($this->connect(), $query);
        return $daerah;
    }
    public function kabupaten()
    {
        $query = "SELECT * FROM kabupaten";
        $like = mysqli_query($this->connect(), $query);

        return $like;
    }
}



///////////////// Biaya pengiriman barang ////////////////////
class Tarif extends Database
{
    public $titikAwal, $titikTujuan, $jarak = 0, $idawal, $idtujuan;



    public function koor($id1, $id2)
    {
        $this->idawal = $id1;
        $this->idtujuan = $id2;
    }

    public function jarakawal()
    {
        $id = $this->idawal;
        $query = "SELECT * FROM kabupaten WHERE id ='$id'";
        $this->titikAwal = mysqli_query($this->connect(), $query);

        return $this->titikAwal;
    }

    public function jarakTujuan()
    {
        $id = $this->idtujuan;
        $query = "SELECT * FROM kabupaten WHERE kabupatenNama = '$id'";
        $this->titikTujuan = mysqli_query($this->connect(), $query);

        return $this->titikTujuan;
    }

    public function jarakKoordinat()
    {
        foreach ($this->jarakawal() as $value) {
            $lintang1 = $value['lintang'];
            $bujur1 = $value['bujur'];
        }
        foreach ($this->jarakTujuan() as $value) {
            $lintang2 = $value['lintang'];
            $bujur2 = $value['bujur'];
        }

        if ($lintang1 == $lintang2 && $bujur1 == $bujur2) {
            return 0;
        } else {
            $sudut = $bujur1 - $bujur2;
            $jarak = sin(deg2rad($lintang1)) * sin(deg2rad($lintang2)) +  cos(deg2rad($lintang1)) * cos(deg2rad($lintang2)) * cos(deg2rad($sudut));
            $jarak = acos($jarak);
            $jarak = rad2deg($jarak);
            $jarakKm = $jarak * 60 * 1.1515;

            return round(($jarakKm * 1.609344));
        }
    }
}

// class Pengiriman extends Database
// {
//     public function pengiriman($){

//     }
// }
