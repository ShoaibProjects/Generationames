if (sessionStorage.getItem('userLoggedIn') === 'true') {
    document.getElementById('login-btn').style.display = 'none';
    document.getElementById('signup-btn').style.display = 'none';
}
document.getElementById('signUp').addEventListener('click', (event) => {
    event.preventDefault();
    let Username = document.getElementById("signup-username").value;
    let Password = document.getElementById("signup-password").value;
    let Generation = document.getElementById("generation").value;
    fetch('signup.php', {
        method: 'POST', // Specify the request method
        headers: {
            'Content-Type': 'application/json', // Specify content type
        },
        body: JSON.stringify({
            username: Username,
            password: Password,
            generation: Generation
        }) // Convert the data to JSON
    })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json(); // Parse JSON response
        })
        .then(data => {
            // Handle the data from the response
            if (data.Status == "OK") {
                bootstrap.Modal.getInstance(document.getElementById('signupModal')).hide();
                document.getElementById("login-btn").classList.add("d-none");
                document.getElementById("signup-btn").classList.add("d-none");
                // Set the session storage key
                sessionStorage.setItem('userLoggedIn', 'true');

            }
            else if (data.Status == "usernameDuplication") {
                alert("Username taken");
            }
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });

}
);
document.getElementById('login').addEventListener('click', (event) => {
    event.preventDefault();
    let UsernameL = document.getElementById("login-username").value;
    let PasswordL = document.getElementById("login-password").value;
    fetch('login.php', {
        method: 'POST', // Specify the request method
        headers: {
            'Content-Type': 'application/json', // Specify content type
        },
        body: JSON.stringify({
            username: UsernameL,
            password: PasswordL
        }) // Convert the data to JSON
    })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json(); // Parse JSON response
        })
        .then(data => {
            // Handle the data from the response
            if (data.Status == "Done") {
                bootstrap.Modal.getInstance(document.getElementById('loginModal')).hide();
                document.getElementById("login-btn").classList.add("d-none");
                document.getElementById("signup-btn").classList.add("d-none");
                // Set the session storage key
                sessionStorage.setItem('userLoggedIn', 'true');

            }
            else if (data.Status == "Wrong Password!") {
                alert("Wrong password!");
            }
            else if (data.Status == "Username not found!") {
                alert("Username not found!");
            }
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });

}
);