function togglePasswordVisibility() {
    const passwordField = document.getElementById('password');
    const toggleIcon = document.getElementById('toggleIcon');

    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        toggleIcon.classList.remove('fa-eye');
        toggleIcon.classList.add('fa-eye-slash');
    } else {
        passwordField.type = 'password';
        toggleIcon.classList.remove('fa-eye-slash');
        toggleIcon.classList.add('fa-eye');
    }
}

// Opsional: Untuk simulasi login (di backend sebenarnya yang memproses)
document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Mencegah form dari refresh halaman
    
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if (username && password) {
        alert('Login berhasil! Username: ' + username);
        // Di sini Anda akan mengirim data ke server untuk verifikasi
        // fetch('/api/login', {
        //     method: 'POST',
        //     headers: {
        //         'Content-Type': 'application/json'
        //     },
        //     body: JSON.stringify({ username, password })
        // })
        // .then(response => response.json())
        // .then(data => {
        //     if (data.success) {
        //         alert('Login berhasil!');
        //         // Redirect ke halaman dashboard atau lainnya
        //     } else {
        //         alert('Login gagal: ' + data.message);
        //     }
        // })
        // .catch(error => {
        //     console.error('Error:', error);
        //     alert('Terjadi kesalahan saat login.');
        // });
    } else {
        alert('Mohon lengkapi username/email dan password Anda.');
    }
});