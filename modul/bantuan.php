<title>Bantuan</title>
<style>
  @media only screen and (max-width: 1220px) {
    img {
      width: 100%;
    }
  }
</style>
<h2 class="page-header">Bantuan Penggunaan Sistem Pakar</h2>
<div class="nav-tabs-custom">
  <ul class="nav nav-tabs">
    <li class=""><a href="#tab_1" data-toggle="tab" aria-expanded="false"><i class="fa fa-paper-plane" aria-hidden="true"></i> Bantuan Pakar</a></li>
    <li class="active"><a href="#tab_2" data-toggle="tab" aria-expanded="true"><i class="fa fa-user" aria-hidden="true"></i> Bantuan User</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="tab_1">
      <div style="text-align: center;"><br><br><br><br><br><br>
        <h2><i class="fa fa-phone" aria-hidden="true"></i> Hubungi Admin:</h2><br>
        Silahkan hubungi admin dengan mengklik tombol kontak admin. Jika butuh bantuan silahkan kirim pesan apa yang menjadi kendala.<br> Email yang terdaftar sebagai pakar akan di tindak lanjuti.<br><br>
        <button style="float: none;" class="kontak" data-toggle="modal" data-target="#modalForm">
          <i class="fa fa-envelope-square"></i> Kontak Admin</button><br><br><br><br><br><br>
      </div>
    </div>
    <!-- Tab-panel -->
    <div class="tab-pane active" id="tab_2">
      <!-- Box-header -->
      <div class="box-body">
        <div class="box-group" id="accordion">
          <!-- Menu -->
          <div class="panel box box-primary">
            <div class="box-header with-border">
              <h4 class="box-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" class="collapsed">
                  1. Cara Mengakses Menu
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
              <div class="box-body">
                <a href="animasi/bantuan/user/menu.gif" target="_blank"><img src="animasi/bantuan/user/b1.gif" alt="Mengakses Menu" /></a><br><br>
                <div style="font-size: 16px;">
                  1. Pertama, arahkan kursor atau tangan kebagian sidebar menu disamping kiri.<br>
                  2. Selanjutnya silahkan klik atau tekan menu yang ingin anda pilih.<br>
                  3. Menu yang anda pilih telah ditampilkan.<br>
                </div>
              </div>
            </div>
          </div>

          <div class="panel box box-danger">
            <div class="box-header with-border">
              <h4 class="box-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed" aria-expanded="false">
                  2. Cara Melakukan Diagnosis
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
              <div class="box-body">
                <a href="animasi/bantuan/user/diagnosahasil.gif" target="_blank"><img src="animasi/bantuan/user/b2.gif" alt="Mengakses Diagnosa" /></a><br><br>
                <div style="font-size: 16px;">
                  1. Langkah pertama adalah mengarahkan kursor atau tangan kebagian menu [Diagnosis].<br>
                  2. Lalu cari gejala yang tampak pada kucing, misal kucing dengan gejala Demam.<br>
                  3. Pilih keyakinan anda terhadap gejala tersebut.<br>
                  4. Pilih salah satu keyakinan, misal pasti ya.<br>
                  5. Selanjutnya jika terdapat gejala lain anda dapat memilih kembali, dan mengisi seperti langkah 3 & 4.<br>
                  6. jika sudah tekan tombol proses (<i class="fa fa-search-plus"></i>) di bawah untuk melihat hasil.
                  6. Hasil Akan menampilkan penyakit yang diderita oleh kucing anda.</div>
              </div>
            </div>
          </div>

          <div class="panel box box-success">
            <div class="box-header with-border">
              <h4 class="box-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="" aria-expanded="true">
                  3. Cara Membaca di Menu Informasi
                </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse in" aria-expanded="true">
              <div class="box-body">
                <a href="animasi/bantuan/user/riwayat.gif" target="_blank"><img src="animasi/bantuan/user/b3.gif" alt="Mengakses Diagnosa" /></a><br><br>
                <div style="font-size: 16px;">
                  1. Langkah pertama adalah mengarahkan kursor atau tangan kebagian menu [Informasi]<br>
                  2. Selanjutnya silahkan cari penyakit yang dilihat, akan ada tombol detail dan saran dibawahnya<br>
                  3. Tekan tombol detail untuk melihat detail pada penyakit, jika sudah anda dapat menutup dengan tanda(x) diatas, atau tombol Close dibawah<br>
                  3. Tekan tombol saran untuk melihat saran pada penyakit, jika sudah anda dapat menutup dengan tanda(x) diatas, atau tombol Close dibawah<br>
                </div>
              </div>
            </div>
            <!-- box-body -->
          </div>
          <!-- box -->
        </div>
      </div>
      <!-- tab-panel -->
    </div>
    <!-- tab-content -->
  </div>
  <script>
    var d = document.getElementById("pakarayam");
    d.className += " sidebar-collapse";
  </script>