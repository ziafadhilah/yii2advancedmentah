<?php

/* @var $this yii\web\View */

$this->title = 'Halo, Selamat Datang!';
?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
      <style>
        .accordion {
          background-color: white;
          color: red;
          cursor: pointer;
          padding: 18px;
          width: 100%;
          border: none;
          text-align: left;
          outline: none;
          font-size: 15px;
          transition: 0.4s;
        }

        .active, .accordion:hover {
          background-color: white; 
        }
        .accordion:after {
          content: '\21DB';
          color: red;
          font-weight: bold;
          float: left;
          margin-left: 5px;
        }

        /*.active:after {
          content: "\2212";
        }*/

        .panel {
          padding: 0 18px;
          display: none;
          background-color: white;
          overflow: hidden;
        }
      </style>
  </head>
<body>
<section class="content">
  <div class="row">
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-aqua">
        <div class="inner">
          <!-- Yii::app->formatter->asInteger(Product::getProductCountAll()) -->
          <p>Total Produk</p>
        </div>
        <div class="icon">
          <i class="fa fa-check"></i>
        </div>
        <a href="index.php?r=product/index" class="small-box-footer">Lihat Detail <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-green">
        <div class="inner">
          <!-- Yii::$app->formatter->asInteger(Category::getCategoryCountAll()) -->
          <p>Total Kategori</p>
        </div>
        <div class="icon">
          <i class="fa fa-check"></i>
        </div>
        <a href="index.php?r=category/index" class="small-box-footer">Lihat Detail <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>#</h3>
          <p>Total Terjual</p>
        </div>
        <div class="icon">
          <i class="fa fa-money"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-red">
        <div class="inner">
          <h3>#</h3>
          <p>Stok Minim</p>
        </div>
        <div class="icon">
          <i class="fa fa-exclamation-triangle"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </div>
  <div class="box-body">
    <div class="callout callout-danger">
      <h4>Harap berhati hati dan tolong teliti jika menginput suatu data.</h4>
        <h4><p>Admin harus selalu aktif untuk memeriksa keadaan stok barang minim.</p></h4>
    </div>
  </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-danger">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <!-- <span class="nav-tabs-title">User Manual :</span><br><br> -->
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#beranda" data-toggle="tab">
                            <i class="fa fa-dashboard"></i>&nbsp User Manual
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <!-- <li class="nav-item">
                          <a class="nav-link" href="#tabel" data-toggle="tab">
                            <i class="fa fa-dashboard"></i>&nbsp Daftar Tabel
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#transaksi" data-toggle="tab">
                            <i class="fa fa-dashboard"></i>&nbsp Beranda
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#konfirmasi" data-toggle="tab">
                            <i class="fa fa-dashboard"></i>&nbsp Beranda
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#lainnya" data-toggle="tab">
                            <i class="fa fa-dashboard"></i>&nbsp Beranda
                            <div class="ripple-container"></div>
                          </a>
                        </li> -->
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="beranda">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <div>
                                <i class="fa fa-circle-o" style="color: #3c8dbc;"></i>
                              </div>
                            </td>
                            <td>Halaman ini merupakan tampilan awal pada tab admin ketika berhasil melakukan login.</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <i class="fa fa-circle-o" style="color: #3c8dbc;"></i>
                              </div>
                            </td>
                            <td>Halaman ini berisi daftar user manual untuk memudahkan admin dalam pengolahan data.</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <i class="fa fa-circle-o" style="color: #3c8dbc;"></i>
                              </div>
                            </td>
                            <td>
                                Untuk penambahan data produk harus berurutan, yaitu : <p><p>
                                Tahap 1 : Tambah kategori atau tambah ukuran nya terlebih dahulu (bebas mau yang mana dulu). <p><p>
                                Tahap 2 : Lalu setelah itu, kalian bisa menambahkan produk dan gambar nya.
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="tabel">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <button class="accordion">&nbsp Daftar Tabel Kategori</button>
                              <div class="panel">
                                  Disini admin dapat menambahkan, mengubah, ataupun menghapus admin lainnya. <p>
                                  <h6 style="color: purple">1. Tambah Admin</h6> <p> Untuk menambahkan admin, kamu dapat menekan tombol &nbsp
                                    <i style="color: purple" class="material-icons">add_task</i> &nbsp pada bagian "Daftar Tabel Admin".</p>
                                  <h6 style="color: purple">2. Ubah Admin</h6> <p> Untuk mengubah admin, kamu dapat menekan tombol &nbsp
                                    <i style="color: purple" class="material-icons">edit</i> &nbsp pada bagian isi dari "Daftar Tabel Admin".</p>
                                  <h6 style="color: purple">3. Hapus Admin</h6> <p> Untuk menghapus admin, kamu dapat menekan tombol &nbsp
                                    <i class="material-icons" style="color: red">delete</i> &nbsp pada bagian isi dari "Daftar Tabel Admin".</p>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <button class="accordion">&nbsp Daftar Tabel Ukuran</button>
                              <div class="panel">
                                Admin dapat mengubah dan menghapus user yang sudah terdaftar, <i style="color: red">tetapi admin tidak bisa menambahkan user baru.</i> <p>
                                <h6 style="color: purple">1. Ubah User</h6> <p> Untuk mengubah user, kamu dapat menekan tombol &nbsp
                                  <i style="color: purple" class="material-icons">edit</i> &nbsp pada bagian isi dari "Daftar Tabel User".</p>
                                <h6 style="color: purple">2. Hapus User</h6> <p> Untuk menghapus user, kamu dapat menekan tombol &nbsp
                                  <i class="material-icons" style="color: red">delete</i> &nbsp pada bagian isi dari "Daftar Tabel User".</p>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <button class="accordion">&nbsp Daftar Tabel Produk</button>
                              <div class="panel">
                                Disini admin dapat menambahkan, mengubah, ataupun menghapus Produk dan Ukuran nya. <p>
                                  <h6 style="color: purple">1. Tambah Produk</h6> <p> Untuk menambahkan Produk, kamu dapat menekan tombol &nbsp
                                    <i style="color: purple" class="material-icons">add_task</i> &nbsp pada bagian "Daftar Tabel Produk".</p>
                                  <h6 style="color: purple">2. Ubah Produk</h6> <p> Untuk mengubah Produk, kamu dapat menekan tombol &nbsp
                                    <i style="color: purple" class="material-icons">edit</i> &nbsp pada bagian isi dari "Daftar Tabel Produk".</p>
                                  <h6 style="color: purple">3. Hapus Produk</h6> <p> Untuk menghapus Produk, kamu dapat menekan tombol &nbsp
                                    <i class="material-icons" style="color: red">delete</i> &nbsp pada bagian isi dari "Daftar Tabel Produk".</p>
                                  <h6 style="color: purple">4. Tambah Ukuran, Harga & Stok</h6> <p> Untuk menambahkan Ukuran, Harga & Stok pada suatu produk. Kamu dapat memilih salah satu item pada tabel "Daftar Tabel Produk", setelah itu kamu akan di pindahkan ke tab baru. Setelah di pindahkan ke tab baru, kamu akan melihat icon &nbsp<i class="material-icons" style="color: purple">add_task</i>&nbsp pada bagian tabel "Stok Harga & Ukuran Per-Item"</p>
                                  <h6 style="color: purple">5. Ubah Ukuran, Harga & Stok</h6> <p> Untuk mengubah Ukuran, Harga & Stok pada suatu produk. Kamu dapat menekan tombol &nbsp<i class="material-icons" style="color: purple">edit</i>&nbsp pada bagian tabel "Stok Harga & Ukuran Per-Item"</p>
                                  <h6 style="color: purple">6. Hapus Ukuran, Harga & Stok</h6> <p> Untuk menghapus Ukuran, Harga & Stok pada suatu produk. Kamu dapat menekan tombol &nbsp<i class="material-icons" style="color: red">delete</i>&nbsp pada bagian tabel "Stok Harga & Ukuran Per-Item"</p>
                                  <h6 style="color: purple">7. Tambah Thumbnail</h6> <p> Sama seperti menambahkan Ukuran, Harga & Stok, namun untuk menambahkan Thumbnail pada suatu produk. Kamu dapat memilih salah satu item pada tabel "Daftar Tabel Produk", setelah itu kamu akan di pindahkan ke tab baru. Setelah di pindahkan ke tab baru, kamu akan melihat icon &nbsp<i class="material-icons" style="color: purple">add_task</i>&nbsp pada bagian tabel "Tambah Thumbnail". Perlu di ingat, kamu tidak dapat menghapus dan mengubah nya disini.</p>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <button class="accordion">&nbsp Daftar Tabel Gambar</button>
                              <div class="panel">
                                Admin dapat mengubah dan menghapus Thumbnail yang sudah terdaftar, <i style="color: red"> tetapi admin tidak bisa menambahkan Thumbnail baru di sini.</i> <p>
                                <h6 style="color: purple">1. Ubah Thumbnail</h6> <p> Untuk mengubah Thumbnail, kamu dapat menekan tombol &nbsp
                                  <i style="color: purple" class="material-icons">edit</i> &nbsp pada bagian isi dari "Daftar Tabel Thumbnail".</p>
                                <h6 style="color: purple">2. Hapus Thumbnail</h6> <p> Untuk menghapus Thumbnail, kamu dapat menekan tombol &nbsp
                                  <i style="color: red" class="material-icons">delete</i> &nbsp pada bagian isi dari "Daftar Tabel Thumbnail".</p>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="transaksi">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <center><h6 style="color: red">Menu Status Transaksi ini merupakan detail dari pemesan kayu yang isi nya merupakan detail dari harga barang, ukuran, jumlah pesanan, sku produk, nama produk dan nama pemesan.</h6></center>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <button class="accordion">&nbsp Daftar Tabel Order Yang Berstatus Pesan</button>
                              <div class="panel">
                                  1. Admin dapat melihat detail pesanan yang belum di konfirmasi, karena belum di konfirmasi maka pesanan tidak dapat di proses dan stok barang di gudang juga belum berkurang. <p> <p>
                                  2. Cara agar pesanan ter-konfirmasi, admin dapat melakukannya di menu (Konfirmasi Transaksi).
                                  <p style="color: red"> <i>3. Mohon untuk di lihat dulu tabel ini sebelum melakukan konfirmasi pesanan di tabel (Konfirmasi Transaksi).</i>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <button class="accordion">&nbsp Daftar Tabel Order Yang Berstatus Done</button>
                              <div class="panel">
                                  Pesanan yang sebelumnya belum di konfirmasi tampil di "Daftar Tabel Order Yang Berstatus Pesan", pada bagian ini sekarang di tampilkan hanya pesanan yang sudah di konfirmasi saja. Jika sudah di konfirmasi maka stok di gudang pun harusnya berkurang dan pesanan dapat di proses. <p><p>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="konfirmasi">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <center><h6 style="color: red">Di daftar tabel ini, admin dapat mengkonfirmasi pemesanan atau menolak nya.</h6></center>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <button class="accordion">&nbsp Daftar Tabel Transfer Pembeli Yang Belum Di Konfirmasi</button>
                              <div class="panel">
                                Setelah user melakukan pemesanan, maka admin akan mendapatkan notifikasi pesanan baru pada gambar lonceng di pojok kanan atas. <p>
                                  Admin dapat menekan tombol lonceng tersebut atau menekan menu "Konfirmasi Transaksi". Setelah admin menekan tombol tersebut maka akan terdapat proses apakah admin akan mengkonfirmasi pesanan tersebut atau menolaknya. <p>
                                  Cara caranya adalah : <p>
                                    1. Mengkonfirmasi pesanan : <p>
                                      Sebelum mengkonfirmasi pesanan, mohon untuk di lihat terlebih dahulu foto bukti transfer nya. <p>
                                        Dengan cara klik kanan pada gambar nya lalu klik "Open Image In Newtab" / "Buka Gambar di Tab Baru".<p>
                                          Setelah itu admin cukup menekan tombol <i class="material-icons" style="color: blue">check</i> maka pesanan akan langsung terkonfirmasi. <p>
                                            Pesanan yang di konfirmasi akan otomatis berpindah ke "Daftar Tabel Transfer Pembeli Yang Di Konfirmasi". <p>
                                    2. Menolak pesanan : <p>
                                      Admin cukup menekan tombol <i class="material-icons" style="color: red">remove_circle</i> maka pesanan akan otomatis di batalkan. <p>
                                        Pesanan yang di tolak akan otomatis berpindah ke "Daftar Tabel Transfer Pembeli Yang Di Tolak".
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <button class="accordion">&nbsp Daftar Tabel Transfer Pembeli Yang Di Konfirmasi</button>
                              <div class="panel">
                                Disini admin dapat menghapus data-data yang telah terkonfirmasi dengan cara menekan tombol <i class="material-icons" style="color: red">delete</i>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <button class="accordion">&nbsp Daftar Tabel Transfer Pembeli Yang Di Tolak</button>
                              <div class="panel">
                                Disini admin dapat menghapus data-data yang telah di tolak dengan cara menekan tombol <i class="material-icons" style="color: red">delete</i>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="lainnya">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <center>Terdapat 3 menu pilihan pada fitur ini, yaitu :</center>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <button class="accordion">&nbsp Permintaan admin</button>
                              <div class="panel">
                                Jika ada permintaan admin baru, admin yang sebelumnya dapat mengkonfirmasi atau menolaknya. <p>
                                  Dengan cara menekan tombol <i class="material-icons" style="color: blue">check</i> untuk konfirmasi, atau <i class="material-icons" style="color: red">warning</i> untuk menolak.
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <button class="accordion">&nbsp Stok Minim</button>
                              <div class="panel">
                                Bagian ini sudah di jelaskan pada tampilan awal di "User Manual".
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <button class="accordion">&nbsp Bukti Transfer</button>
                              <div class="panel">
                                Bagian ini sudah di jelaskan di menu pilihan "User Manual > Konfirmasi Transaksi".
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>
      <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
          acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
              panel.style.display = "none";
            } else {
              panel.style.display = "block";
            }
          });
        }
      </script>
</body>
</html>

