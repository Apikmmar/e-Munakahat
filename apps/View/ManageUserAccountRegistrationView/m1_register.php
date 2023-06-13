<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="../assets/img/jata-pahang.png">

<!-- Theme CSS -->
<!-- build:css @@webRoot/assets/css/theme.min.css -->
<link rel="stylesheet" href="../assets/css/login.css">
<!-- endbuild -->

<script src="../assets/js/register.js"></script>

  <title>e-Munakahat</title>
</head>

<body class="overlay">
    <div class="d-lg-block sidebarLogin bg-sidebar" >
        <div class="position-sticky">
            <br><br><br><br><br><br>
            <div class="ps-12 pt-10">
                <img src="../assets/img/jata-pahang.png" alt="logo-persekutuan-malaysia" class="img-upper-interface ms-2">
                <h1 class="fw-medium text-white" style="font-size: 4em;">SISTEM</h1>
                <h1 class="fw-medium text-white" style="font-size: 4em;">MAKLUMAT</h1>
                <h1 class="fw-medium text-white" style="font-size: 4em;">PERKAHWINAN</h1>
                <h1 class="fw-medium text-white" style="font-size: 4em;">ISLAM PAHANG</h1>
                <h3 class="fw-medium text-white">JABATAN AGAMA ISLAM NEGERI PAHANG</h3>
            </div>
        </div>
    </div>

    <nav class="row bg-primary fixed-top">
        <div class="col-md-5">
            <table class="justify-content-start d-flex">
                <tr >
                    <td>
                        <button class="navbar-button" id="hey">&#9776;</button>
                    </td>
                    <td>
                        <h4 class="text-white pt-2 ps-12 fs-2">e-Munakahat</h4>
                    </td>
                    <td>
                        <img src="../assets/img/Logo-KPM-BI-font-putih.png" alt="logo-persekutuan-malaysia" class="img-upper-interface">
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-md-7 justify-content-end d-flex pt-2 pe-5">
            &nbsp;&nbsp;&nbsp;<span class="fw-medium text-white" id="day"></span>
            &nbsp;&nbsp;&nbsp;<span class="fw-medium text-white" id="clock"></span>
        </div>
    </nav>
  <!-- container -->
  <div class="content mt-5 pe-23">
    <div class="justify-content-end d-flex">
      <div class="col-md-6">
          <!-- Card body -->
          <div class="card-body mt-10">
            <header>
              <h2>Daftar Pengguna</h2>
            </header>
            <div>
              <p>Sila masukkan maklumat pengguna anda.</p>
              <p id="errorContainer" class="my-n3"></p>
              <p id="successContainer" class="my-n3"></p>
              <hr class="mb-6">
            </div>
            <!-- Form -->
            <form action="m1_register.php" method="POST" onsubmit="return userRegistration()">
              <!-- IC Number -->
              <div class="form-group">
                <label for="icnum" class="form-label">No. Kad Pengenalan</label>
                <input type="text" id="icnum" class="form-control" name="icnum" placeholder="">
                <br>
              </div>
              <!-- Name -->
              <div class="form-group">
                <label for="name" class="form-label">Nama</label>
                <input type="text" id="name" class="form-control" name="name" placeholder="">
                <br>
              </div>
              <!-- Gender -->
              <div class="form-group">
                <label for="gender" class="form-label">Jantina</label>
                <select name="gender" class="form-select" id="gender">
                  <option selected disabled value="">- Sila Pilih Jantina -</option>
                  <option value="male">Lelaki</option>
                  <option value="female">Perempuan</option>
                </select>
                <br>
              </div>
              <!-- Bangsa -->
              <div class="form-group">
                <label for="bangsa" class="form-label">Bangsa</label>
                <select name="bangsa" class="form-select" id="bangsa">
                  <option selected disabled value="">- Sila Pilih Bangsa -</option>
                  <option value="melayu">Melayu</option>
                  <option value="cina">Cina</option>
                  <option value="india">India</option>
                  <option value="bangladeshi">Bangladeshi</option>
                  <option value="pakistani">Pakistani</option>
                  <option value="sri lanka">Sri Lanka</option>
                  <option value="indonesian">Indonesian</option>
                  <option value="bumiputera sabah">Bumiputera Sabah</option>
                  <option value="bumiputera sarawak">Bumiputera Sarawak</option>
                  <option value="orang asli">Orang Asli (Semenanjung)</option>
                  <option value="lain-lain asia">Lain-lain Asia</option>
                  <option value="european">European</option>
                  <option value="arab">Arab</option>
                </select>
                <br>
              </div>
              <!-- Warganegara -->
              <div class="form-group">
                <label for="warga" class="form-label">Warganegara</label>
                <select name="warga" class="form-select" id="warga">
                  <option selected disabled value="">- Sila Pilih Warganegara -</option>
                  <option value="warganegara">Warganegara</option>
                  <option value="bukan">Bukan Warganegara</option>
                </select>
                <br>
              </div>
              <!-- Address KP-->
              <div class="form-group">
                <label for="address" class="form-label">Alamat dalam K/P</label>
                <textarea name="address" id="address" rows="2" class="form-control" oninput="toggleCurrentAddress()"></textarea>
                <div class="form-check">
                  <input type="checkbox" name="sameaddress" id="sameaddress" class="form-check-input" onclick="toggleCurrentAddress()"> Tanda Jika Alamat Semasa Sama Dengan Alamat Dalam K/P

                </div>
                <br>
              </div>
              <!-- Current Address -->
              <div class="form-group">
                <label for="currentaddress" class="form-label">Alamat Semasa</label>
                <textarea name="currentaddress" id="currentaddress" rows="2" class="form-control"></textarea>
                <br>
              </div>
              <!-- Phone Num -->
              <div class="form-group">
                <label for="phonenum" class="form-label">No. Telefon Bimbit</label>
                <input type="text" id="phonenum" class="form-control" name="phonenum" placeholder="" pattern="^(\+?60\s?1[0-9]-?[0-9]{3}\s?[0-9]{4})$" title="Example: 601xxxxxxxx">
                <br>
              </div>
              <!-- Taraf Pendidikan -->
              <div class="form-group">
                <label for="pendidikan" class="form-label">Taraf Pendidikan</label>
                <select name="pendidikan" class="form-select" id="pendidikan">
                  <option selected disabled value="">- Sila Pilih Taraf Pendidikan -</option>
                  <option value="phd">PHD</option>
                  <option value="master">Master</option>
                  <option value="ijazah">Ijazah</option>
                  <option value="diploma">Diploma</option>
                  <option value="stpm">STPM/HSC/Sijil</option>
                  <option value="spm">SPM/MCE</option>
                  <option value="pt3">PT3/PMR/SRP/LC</option>
                  <option value="upsr">UPSR</option>
                  <option value="tiadapendidikan">Tiada Pendidikan Rasmi</option>
                </select>
                <br>
              </div>
              <!-- Sektor Pekerjaan -->
              <div class="form-group">
                <label for="pekerjaan" class="form-label">Sektor Pekerjaan</label>
                <select name="pekerjaan" class="form-select" id="pekerjaan">
                  <option selected disabled value="">- Sila Pilih Warganegara -</option>
                  <option value="awam">Sektor Awam</option>
                  <option value="swasta">Sektor Swasta</option>
                  <option value="sendiri">Bekerja Sendiri</option>
                  <option value="pesara">Pesara</option>
                  <option value="tidakbekerja">Tidak Bekerja</option>
                </select>
                <br>
              </div>
              <!-- Alamat Tempat Kerja-->
              <div class="form-group">
                <label for="jobAddress" class="form-label">Alamat Tempat Kerja</label>
                <textarea name="jobAddress" id="jobAddress" rows="2" class="form-control"></textarea>
                <br>
              </div>
              <!-- Email -->
              <div class="form-group">
                <label for="email" class="form-label">Emel</label>
                <input type="email" id="email" class="form-control" name="email" placeholder="">
                <br>
              </div>
              <!-- Password -->
              <div class="form-group">
                <label for="password" class="form-label">Kata Laluan</label>
                <input type="password" id="password" class="form-control" name="password" placeholder="**************">
                <br>
              </div>
              <!-- Confirm Password -->
              <div class="form-group">
                <label for="confirmpassword" class="form-label">Ulang Kata Laluan</label>
                <input type="password" id="confirmpassword" class="form-control" name="confirmpassword" placeholder="**************">
                <br>
              </div>
              <div>
                <!-- Button -->
                <div class="d-grid ">
                  <button type="submit" class="btn btn-primary">Daftar Pengguna</button>
                </div>
                <hr>
                <div class="d-md-flex justify-content-center">
                  <div>
                    <a href="../ManageLoginView/m1_login.php" >Kembali</a>
                  </div>
                  <br><br>
                </div>
              </div>
            </form>
    </div>
</body>

</html>