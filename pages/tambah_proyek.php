<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Proyek | Dashboard Admin</title>
		<link href="assets/img/title.png" rel="icon">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  </head>
  <body>
    <div class="dashboard-wrapper">
      <aside class="sidebar">
        <div class="sidebar-header">
          <h3><i class="fas fa-tools"></i> Prohaba Admin</h3> </div>
        <nav class="sidebar-nav">
          <ul>
            <li><a href="dashboard.html"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
            <li class="has-submenu open">
              <a href="#" class="submenu-toggle"><i class="fas fa-folder-open"></i> <span>Proyek</span> <i class="fas fa-chevron-right arrow-icon"></i></a>
              <ul class="submenu" style="max-height: 100px;">
                <li><a href="tambah_proyek.html" class="active"><i class="fas fa-plus-circle"></i> <span>Tambah Proyek</span></a></li>
                <li><a href="#"><i class="fas fa-list-alt"></i> <span>Daftar Proyek</span></a></li>
              </ul>
            </li>
            <li class="has-submenu">
              <a href="#" class="submenu-toggle"><i class="fas fa-image"></i> <span>Galeri</span> <i class="fas fa-chevron-right arrow-icon"></i></a>
              <ul class="submenu">
                <li><a href="tambah_galeri.html"><i class="fas fa-plus-square"></i> <span>Tambah Galeri</span></a></li>
                <li><a href="#"><i class="fas fa-images"></i> <span>Lihat Galeri</span></a></li>
              </ul>
            </li>
            <li><a href="#" class="#"><i class="fas fa-user-plus"></i> Lowongan Kerja</a></li>
            <li><a href="index.html" class="logout-btn"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
          </ul>
        </nav>
      </aside>

      <main class="main-content">
        <header class="navbar">
          <button class="sidebar-toggle" aria-label="Toggle Sidebar"><i class="fas fa-bars"></i></button>
          <div class="navbar-title">
            <h2>Tambah Proyek Baru</h2>
          </div>
          <div class="user-profile">
            <img src="https://via.placeholder.com/40" alt="Admin Avatar" class="avatar">
            <span>Admin Name</span>
          </div>
        </header>

        <section class="content-area">
          <div class="form-container">
            <form id="addProjectForm" class="add-project-form">
              <div class="form-group">
                <label for="judulProyek">Judul Proyek</label>
                <input type="text" id="judulProyek" name="judulProyek" placeholder="Masukkan judul proyek" required>
              </div>

              <div class="form-group">
                <label for="klien">Klien</label>
                <input type="text" id="klien" name="klien" placeholder="Nama klien proyek" required>
              </div>

              <div class="form-group">
                <label for="lokasi">Lokasi Proyek</label>
                <input type="text" id="lokasi" name="lokasi" placeholder="Lokasi proyek" required>
              </div>

              <div class="form-group">
                <label for="keterangan">Keterangan Proyek</label>
                <textarea id="keterangan" name="keterangan" rows="6" placeholder="Deskripsi lengkap proyek"></textarea>
              </div>

              <div class="form-group">
                <label for="gambarProyek">Foto Proyek</label>
                <input type="file" id="gambarProyek" name="gambarProyek" accept="image/*" multiple>
                <small class="form-text">Pilih satu atau lebih gambar untuk proyek ini.</small>
              </div>

              <div class="form-actions">
                <button type="submit" class="btn btn-primary">Simpan Proyek</button>
                <button type="reset" class="btn btn-secondary">Reset Form</button>
              </div>
            </form>
          </div>
        </section>
      </main>
    </div>

    <script src="dashboard.js"></script>
    <script>
      // JavaScript khusus untuk halaman Tambah Proyek
      document.addEventListener('DOMContentLoaded', function() {
        const addProjectForm = document.getElementById('addProjectForm');
        const gambarProyekInput = document.getElementById('gambarProyek');
        const imagePreviewContainer = document.getElementById('imagePreview');

        // Handle image preview
        gambarProyekInput.addEventListener('change', function() {
          imagePreviewContainer.innerHTML = ''; // Clear previous previews
          if (this.files && this.files.length > 0) {
            Array.from(this.files).forEach(file => {
              if (file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = function(e) {
                  const imgWrapper = document.createElement('div');
                  imgWrapper.classList.add('preview-image-wrapper');

                  const img = document.createElement('img');
                  img.src = e.target.result;
                  img.alt = file.name;
                  img.classList.add('preview-image');

                  const removeBtn = document.createElement('span');
                  removeBtn.classList.add('remove-image-btn');
                  removeBtn.innerHTML = '&times;'; // HTML entity for 'x'
                  removeBtn.title = 'Hapus gambar';
                  removeBtn.addEventListener('click', function() {
                    imgWrapper.remove();
                    // Note: Menghapus dari input file secara programmatic lebih kompleks
                    // Untuk demo sederhana, kita hanya menghapus visualnya
                    // Di aplikasi nyata, Anda mungkin perlu mengelola array file.
                  });

                  imgWrapper.appendChild(img);
                  imgWrapper.appendChild(removeBtn);
                  imagePreviewContainer.appendChild(imgWrapper);
                };
                reader.readAsDataURL(file);
              }
            });
          }
        });

        // Handle form submission (SIMULASI)
        addProjectForm.addEventListener('submit', function(event) {
          event.preventDefault(); // Mencegah refresh halaman

          const judul = document.getElementById('judulProyek').value;
          const klien = document.getElementById('klien').value;
          const lokasi = document.getElementById('lokasi').value;
          const keterangan = document.getElementById('keterangan').value;
          const gambarFiles = document.getElementById('gambarProyek').files;

          if (judul && klien && lokasi && keterangan) {
            let message = `Proyek Baru Disimpan (Simulasi):\n`;
            message += `Judul: ${judul}\n`;
            message += `Klien: ${klien}\n`;
            message += `Lokasi: ${lokasi}\n`;
            message += `Keterangan: ${keterangan}\n`;
            message += `Jumlah Gambar: ${gambarFiles.length} file(s)\n`;

            // Di sini Anda akan mengirim data ke server
            // Contoh: Menggunakan FormData untuk file upload
            // const formData = new FormData();
            // formData.append('judul', judul);
            // formData.append('klien', klien);
            // formData.append('lokasi', lokasi);
            // formData.append('keterangan', keterangan);
            // for (let i = 0; i < gambarFiles.length; i++) {
            //     formData.append('gambar[]', gambarFiles[i]);
            // }

            // fetch('/api/add-project', {
            //     method: 'POST',
            //     headers: {
            //         'Content-Type': 'application/json' // Untuk JSON, bukan FormData
            //     },
            //     body: JSON.stringify({ judul, klien, lokasi, keterangan }) // Untuk JSON tanpa file
            //     // Atau body: formData untuk upload file
            // })
            // .then(response => response.json())
            // .then(data => {
            //     if (data.success) {
            //         alert('Proyek berhasil ditambahkan!');
            //         addProjectForm.reset(); // Reset form setelah sukses
            //         imagePreviewContainer.innerHTML = ''; // Hapus preview gambar
            //     } else {
            //         alert('Gagal menambahkan proyek: ' + data.message);
            //     }
            // })
            // .catch(error => {
            //     console.error('Error:', error);
            //     alert('Terjadi kesalahan saat menambahkan proyek.');
            // });

            alert(message + "\n(Ini adalah simulasi, data tidak benar-benar tersimpan)");
            addProjectForm.reset(); // Reset form setelah simulasi
            imagePreviewContainer.innerHTML = ''; // Hapus preview gambar
          } else {
            alert('Mohon lengkapi semua bidang yang wajib diisi.');
          }
        });
      });
    </script>
  </body>
</html>