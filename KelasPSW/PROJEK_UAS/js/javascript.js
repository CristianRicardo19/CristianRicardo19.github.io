function validateLogin() {
      const username = document.getElementById('username').value;
      const password = document.getElementById('password').value;
      const errorMsg = document.getElementById('error-msg');

      // Dummy login (ganti dengan login backend di proyek nyata)
      if (username === 'admin' && password === 'admin123') {
        alert('Login berhasil!');
        return true;
      } else {
        errorMsg.textContent = 'Username atau password salah!';
        return false;
      }
    }