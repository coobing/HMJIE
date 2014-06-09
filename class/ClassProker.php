<?php
	require_once ('mainClass.php');
    class proker extends dbController
	{
        public function getProker()
		{
            $this->dbOpen();
            
            $sql = "SELECT * FROM proker ORDER BY divisi_pelaksana DESC LIMIT 5";
            $query = mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
            $num_results = mysqli_num_rows($query);
            
            if ($num_results > 0)
			{
                $i=0;
                while ($row = mysqli_fetch_array($query))
				{
                    $dataProker[$i]['id'] = $row[0];
                    $dataProker[$i]['nama_proker'] = $row[1];
                    $dataProker[$i]['divisi'] = $row[2];
                    $dataProker[$i]['tujuan'] = $row[3];
                    $dataProker[$i]['sasaran'] = $row[4];
                    $dataProker[$i]['waktu'] = $row[5];
					$dataProker[$i]['waktu1'] = $row[6];
                    $dataProker[$i]['dana'] = $row[7];
                    $i++;                   
                }  
			}
			else 
			{
                    $dataProker = null;
            }
            unset($i);
            $this->dbClose();
            return $dataProker;
            
        }
		
		public function saveProker($nama, $divisi, $tujuan, $sasaran, $tanggal, $tanggal2, $sumber) 
				{
					$this->dbOpen();
					$nama = mysqli_real_escape_string($this->conn, $nama);
					$divisi = mysqli_real_escape_string($this->conn, $divisi);
					$tujuan = mysqli_real_escape_string($this->conn, $tujuan);
					$sasaran = mysqli_real_escape_string($this->conn, $sasaran);
					$tanggal = mysqli_real_escape_string($this->conn, $tanggal);
					$tanggal2 = mysqli_real_escape_string($this->conn, $tanggal2);
					$sumber = mysqli_real_escape_string($this->conn, $sumber);
				
					$sql="INSERT INTO proker VALUES ('', '$nama', '$divisi', '$tujuan', '$sasaran', '$tanggal', '$tanggal2', '$sumber')";
					$query=mysqli_query($this->conn, $sql);
					if ($query==true)
					{
						header('Location: ../admin.php?p=tambah&sub=proker&message=sukses');
					}
					else 
					{
						header('Location: ../admin.php?p=tambah&sub=proker&message=gagal');
					}
					$this->dbClose();
				}
                
    }
?>