<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLIP GAJI</title>
    <style>
        body{
            display: flex;
            justify-content: center;
        }
        .container{
            width : 50%;
            border : 2px solid black;
            padding : 10px;
            display: flex;
            justify-content: center;
            
        }
        table{
            display: flex;
            justify-content: center;
        }
        .kop{
            text-align : center;
        }
    </style>
</head>
<body>
    <div class="container">
    <table width="100%">
        <tr>
            <td width="5%">
                <img src="<?= base_url() ?>/assets/AZLogistik.jpg" alt="logo">
            </td>
            <td colspan="5" class="kop">
                <h1>PT.AZLogistik Dot Com</h1>
                <p>Jl. Kedung Doro No.101 A, RT.001/RW.06, Kedungdoro, Kec. Tegalsari, Kota SBY, Jawa Timur 60261</p>
                <hr size="5px" color="black">
            </td>
        </tr>
        <tr>
            <th colspan="6" align="center"><u>SLIP GAJI KARYAWAN</u></th>
        </tr>
        <tr>
            <td colspan="6"><br><br></td>
        </tr>
        <tr>
            <td>NIK</td>
            <td colspan="5">: <?= $slip['nik']?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td colspan="5">: <?= $slip['nama_karyawan']?></td>
        </tr>
        <tr>
            <td>Golongan</td>
            <td colspan="5">: <?= $slip['golongan']?></td>
        </tr>
        <tr>
            <td colspan="6"><br><br></td>
        </tr>
        <tr>
            <th colspan="3" align="left"><u>PENGHASILAN</u></th>
            <th colspan="3" align="left" style="padding-left: 10px"><u>POTONGAN</u></th>
        </tr>
        <tr>
            <td>Gaji Pokok</td>
            <td>:</td>
            <td align="right"><?= number_format($slip['gaji_pokok']) ?></td>
            <td style="padding-left: 10px">Potongan Absen</td>
            <td>:</td>
            <td align="right"><?= number_format($slip['potongan_absen']) ?></td>
        </tr>
        <tr>
            <td>Uang Kehadiran</td>
            <td>:</td>
            <td align="right"><?= number_format($slip['uang_kehadiran']) ?></td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td>Uang Lembur</td>
            <td>:</td>
            <td align="right"><?= number_format($slip['uang_lembur']) ?></td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td><hr></td>
            <td colspan="2"></td>
            <td><hr></td>
        </tr>
        <tr>
            <th colspan="2" align="right">Total (A)</th>
            <th align="right">Rp <?= number_format($slip['gaji_pokok']+$slip['uang_kehadiran']+$slip['uang_lembur']) ?></th>
            <th colspan="2" align="right">Total (B)</th>
            <th align="right">Rp <?= number_format($slip['potongan_absen']) ?></th>
        </tr>
        <tr>
            <td colspan="6"><br></td>
        </tr>
        <tr style="background-color: #D9D9D9">
            <th colspan="3" align="right">PENERIMAAN (A-B)</th>
            <th>=</th>
            <th colspan="2" align="left">Rp <?= number_format($slip['hasil_thp']) ?></th>
        </tr>
        <tr style="background-color: #D9D9D9">
            <td colspan="6" align="center"><i>Terbilang: # #</i></td>
        </tr>
        <tr>
            <td colspan="6"><br></td>
        </tr>
        <tr>
            <td colspan="4"></td>
            <td colspan="2" align="center">
                Manajer Operasional
                <br><br><br><br>
                <b>Vania Stephanie</b>
            </td>
        </tr>
        
    </table>
    </div>    
</body>
</html>