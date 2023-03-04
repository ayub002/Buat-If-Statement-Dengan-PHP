<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemograman PHP</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <div class="container-fluid">
      <a class="navbar-brand" href="https://temorubun.site/ayub/php/">Pemograman <span class="badge bg-primary">PHP</span></a>
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content">
        <div class="hamburger-toggle">
          <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </button>
      <div class="collapse navbar-collapse" id="navbar-content">
        <ul class="navbar-nav mr-auto mb-2 mb-lg-0 ">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">TEORI PEMROGRAMAN</a>
            <ul class="dropdown-menu shadow">
              <li class="dropend">
                <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">Pertemuan 1</a>
                <ul class="dropdown-menu shadow">
                  <li><a class="dropdown-item" href="https://temorubun.site/ayub/php/teori/materi1/"> Materi PHP 1</a></li>
                  <li><a class="dropdown-item" href="https://temorubun.site/ayub/php/teori/tugas1/"> Tugas PHP 1</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">PRAKTEK PEMOGRAMAN</a>
            <ul class="dropdown-menu shadow">
              <li class="dropend">
                <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">Pertemuan 1</a>
                <ul class="dropdown-menu shadow">
                  <li><a class="dropdown-item" href="https://temorubun.site/ayub/php/praktek/materi1/"> Materi PHP 1</a></li>
                  <li><a class="dropdown-item" href="https://temorubun.site/ayub/php/praktek/tugas1/"> Tugas PHP 1</a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <section class="my-5">
    <div class="container">
      <div class="p-4 border">

        <h1>IF STATEMENT</h1>

        <h2>PHP</h2><br><br><br>

        <label for="positifnegatif"><h2>Bilangan Bulat Positif Atau Negatif!</h2> </label> 

        <form>
            
            <table>
                
                <tr>
                    
                    <td></td>
                    
                    <td><input type="number" name="positifnegatif" placeholder="Masukan Nilai " id="positifnegatif"></td>
                    
                    <td><button type="submit" name="Positif-Negatif" class="button">Periksa</button></td>
                    
                </tr>
                
                <tr>
                    
                    <td></td>
                    
                    <td>
                        
                        <?php

                            if (isset($_GET["Positif-Negatif"])){

                                $bilangan = $_GET["positifnegatif"];

                                if ($bilangan > 0) {
                                
                                    echo "Bilangan $bilangan adalah bilangan positif.";

                                } else if ($bilangan < 0) {

                                    echo "Bilangan $bilangan adalah bilangan negatif.";

                                } else {

                                    echo "Bilangan $bilangan adalah nol.";

                                }

                            }
                            
                        ?>
                        
                    </td>
                    
                </tr>
                
            </table>

        </form><br>

        <label for="genapganjil"><h2>Bilangan Bulat Genap Atau Ganjil!</h2></label>  

        <form>
            
            <table>
                
                <tr>
                    
                    <td></td>
                    
                    <td><input type="number" name="genapganjil" placeholder="Masukan Nilai " id="genapganjil"></td>
                    
                    <td><button type="submit" name="Genap-Ganjil" class="button">Periksa</button></td>
                    
                </tr>
                
                <tr>
                    
                    <td></td>
                    
                    <td>
                        
                        <?php

                            if (isset($_GET["Genap-Ganjil"])){

                                $angka = $_GET["genapganjil"]; 
                            
                                if ($angka % 2 == 0) {
                                
                                    echo $angka . " adalah bilangan genap";
                                
                                } else {
                                
                                    echo $angka . " adalah bilangan ganjil";
                                
                                }                      

                            }
                            
                        ?>
                        
                    </td>
                    
                </tr>
                
            </table>                        

        </form><br>

        <label for="lulustidaklulus"><h2>Mengecek Apakah Siswa Lulus Atau Tidak</h2></label>  

        <form>
            
            <table>
                
                <tr>
                    
                    <td></td>
                    
                    <td><input type="number" name="lulustidaklulus" placeholder="Masukan Nilai " id="lulustidaklulus"></td>
                    
                    <td><button type="submit" name="Lulus-TidakLulus" class="button">Periksa</button></td>
                    
                </tr>
                
                <tr>
                    
                    <td></td>
                    
                    <td>
                        
                        <?php

                            if (isset($_GET["Lulus-TidakLulus"])){

                            $nilai = $_GET["lulustidaklulus"]; 

                            if ($nilai >= 60) {

                                echo "Selamat, kamu lulus!";

                            } else {
                    
                            echo "Maaf, kamu tidak lulus.";

                            }                     

                            }

                        ?>
                        
                    </td>
                    
                </tr>
                
            </table>

        </form><br>

        <label for="katakalimat"><h2>Membalikkan Kata Atau Kalimat</h2></label>  

        <form>
            
            <table>
                
                <tr>
                    
                    <td></td>
                    
                    <td><input type="text" name="katakalimat" placeholder="Masukan Kata " id="katakalimat"></td>
                    
                    <td><button type="submit" name="Kata-Kalimat" class="button">Periksa</button></td>
                    
                </tr>
                
                <tr>
                    
                    <td></td>
                    
                    <td>
                        
                        <?php

                            if (isset($_GET["Kata-Kalimat"])){

                                $kata = $_GET["katakalimat"];

                                $kata_balik = strrev($kata); 

                                if ($kata == $kata_balik) {

                                    echo $kata . " adalah palindrom";

                                } else {

                                    echo $kata . " bukan palindrom";

                                }

                            }

                        ?>
                        
                    </td>
                    
                </tr>
                
            </table>

        </form><br>

        <label for="tahun"><h2>Mengecek Tahun Kabisat Atau Tidak</h2></label>  

        <form>
            
            <table>
                
                <tr>
                    
                    <td></td>
                    
                    <td><input type="text" name="tahun" placeholder="Masukan Tahun " id="tahun"></td>
                    
                    <td><button type="submit" name="Tahun" class="button">Periksa</button></td>
                    
                </tr>
                
                <tr>
                    
                    <td></td>
                    
                    <td>
                        
                        <?php

                            if (isset($_GET["Tahun"])){

                                $tahun =  $_GET["tahun"];

                                if (($tahun % 4 == 0 && $tahun % 100 != 0) || $tahun % 400 == 0) {
                                
                                    echo $tahun . " adalah tahun kabisat";
                                
                                } else {
                                
                                    echo $tahun . " bukan tahun kabisat";
                                
                                }

                            }
     
                        ?>
                        
                    </td>
                    
                </tr>
                
            </table>

        </form>
        <hr>
      <p>Link Github: <a href="https://github.com/ayub002" target="_blank">https://github.com/Ayub-Maniagasi</a></p>
    </div>
    </div>
  </section>

  <footer class="bg-dark p-4 text-white text-center">
    <small>CopyRaight © Ayub Maniagasi 2023</small>
  </footer>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>
