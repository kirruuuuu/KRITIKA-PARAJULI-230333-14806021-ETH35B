function validateForm() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var error = document.getElementById('error');

    if (username === "" || password === "") {
        error.classList.remove('hidden');
    } else {
        error.classList.add('hidden');
        alert('Login successful!');
        // Add your login logic here
    }
}
