<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Galeri | Dashboard Admin</title>
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
            <li class="has-submenu">
              <a href="#" class="submenu-toggle"><i class="fas fa-folder-open"></i> <span>Proyek</span> <i class="fas fa-chevron-right arrow-icon"></i></a>
              <ul class="submenu">
                <li><a href="tambah_proyek.html"><i class="fas fa-plus-circle"></i> <span>Tambah Proyek</span></a></li>
                <li><a href="#"><i class="fas fa-list-alt"></i> <span>Daftar Proyek</span></a></li>
              </ul>
            </li>
            <li class="has-submenu open">
              <a href="#" class="submenu-toggle"><i class="fas fa-image"></i> <span>Galeri</span> <i class="fas fa-chevron-right arrow-icon"></i></a>
              <ul class="submenu" style="max-height: 100px;">
                <li><a href="tambah_galeri.html" class="active"><i class="fas fa-plus-square"></i> <span>Tambah Galeri</span></a></li>
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
            <h2>Tambah Galeri Baru</h2>
          </div>
          <div class="user-profile">
            <img src="https://via.placeholder.com/40" alt="Admin Avatar" class="avatar">
            <span>Admin Name</span>
          </div>
        </header>

        <section class="content-area">
          <div class="form-container">
            <form id="addGalleryForm" class="add-project-form">
              <div class="form-group">
                <label for="judulGaleri">Judul Gambar</label>
                <input type="text" id="judulGaleri" name="judulGaleri" placeholder="Masukkan judul untuk gambar ini" required>
              </div>

              <div class="form-group">
                <label for="gambarGaleri">Foto Galeri</label>
                <input type="file" id="gambarGaleri" name="gambarGaleri" accept="image/*" multiple required>
                <small class="form-text">Pilih satu atau lebih gambar untuk ditambahkan ke galeri.</small>
              </div>

              <div class="form-actions">
                <button type="submit" class="btn btn-primary">Simpan Galeri</button>
                <button type="reset" class="btn btn-secondary">Reset Form</button>
              </div>
            </form>
          </div>
        </section>
      </main>
    </div>

    <script src="dashboard.js"></script>
    <script>
      // JavaScript khusus untuk halaman Tambah Galeri
      document.addEventListener('DOMContentLoaded', function() {
        const addGalleryForm = document.getElementById('addGalleryForm');
        const gambarGaleriInput = document.getElementById('gambarGaleri');
        const imagePreviewContainer = document.getElementById('imagePreview');

        // Handle image preview (fungsi yang sama dengan Tambah Proyek)
        gambarGaleriInput.addEventListener('change', function() {
          imagePreviewContainer.innerHTML = ''; // Hapus preview sebelumnya
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
                  removeBtn.innerHTML = '&times;';
                  removeBtn.title = 'Hapus gambar';
                  removeBtn.addEventListener('click', function() {
                    imgWrapper.remove();
                    // Untuk demo sederhana, kita hanya menghapus visualnya
                    // Di aplikasi nyata, Anda mungkin perlu mengelola array file pada input file.
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
        addGalleryForm.addEventListener('submit', function(event) {
          event.preventDefault(); // Mencegah refresh halaman

          const judul = document.getElementById('judulGaleri').value;
          const gambarFiles = document.getElementById('gambarGaleri').files;

          if (judul && gambarFiles.length > 0) {
            let message = `Item Galeri Baru Disimpan (Simulasi):\n`;
            message += `Judul: ${judul}\n`;
            message += `Jumlah Gambar: ${gambarFiles.length} file(s)\n`;
            message += `(File gambar tidak diunggah dalam simulasi ini)`;

            // Di sini Anda akan mengirim data ke server
            // const formData = new FormData();
            // formData.append('judul', judul);
            // for (let i = 0; i < gambarFiles.length; i++) {
            //     formData.append('gambar[]', gambarFiles[i]);
            // }

            // fetch('/api/add-gallery', {
            //     method: 'POST',
            //     body: formData
            // })
            // .then(response => response.json())
            // .then(data => {
            //     if (data.success) {
            //         alert('Item galeri berhasil ditambahkan!');
            //         addGalleryForm.reset();
            //         imagePreviewContainer.innerHTML = '';
            //     } else {
            //         alert('Gagal menambahkan item galeri: ' + data.message);
            //     }
            // })
            // .catch(error => {
            //     console.error('Error:', error);
            //     alert('Terjadi kesalahan saat menambahkan item galeri.');
            // });

            alert(message + "\n(Ini adalah simulasi, data tidak benar-benar tersimpan)");
            addGalleryForm.reset(); // Reset form setelah simulasi
            imagePreviewContainer.innerHTML = ''; // Hapus preview gambar
          } else {
            alert('Mohon lengkapi judul dan pilih setidaknya satu gambar.');
          }
        });
      });
    </script>
  </body>
</html>