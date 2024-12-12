// Function to toggle between login and signup forms
function toggleForms(formType) {
    const loginForm = document.getElementById('loginForm');
    const signupForm = document.getElementById('signupForm');
    
    if (formType === 'login') {
        loginForm.classList.remove('hidden');
        signupForm.classList.add('hidden');
    } else {
        loginForm.classList.add('hidden');
        signupForm.classList.remove('hidden');
    }

    alert(`Switched to ${formType} form.`);
}

// Function to show toast notifications
function showToast(message, type = 'success') {
    const toast = document.createElement('div');
    toast.className = `toast ${type}`;
    toast.textContent = message;
    document.body.appendChild(toast);
    
    setTimeout(() => toast.classList.add('show'), 100);
    
    setTimeout(() => {
        toast.classList.remove('show');
        setTimeout(() => toast.remove(), 300);
    }, 3000);
}

// Helper function to clear errors
function clearErrors(formType) {
    const inputs = document.querySelectorAll(`#${formType}Form input`);
    inputs.forEach(input => {
        input.classList.remove('error');
        const errorMsg = input.nextElementSibling;
        if (errorMsg && errorMsg.classList.contains('error-message')) {
            errorMsg.remove();
        }
    });
}

// Function to handle displaying errors
function displayError(input, message) {
    input.classList.add('error');
    let errorMsg = input.nextElementSibling;
    if (!errorMsg || !errorMsg.classList.contains('error-message')) {
        errorMsg = document.createElement('span');
        errorMsg.classList.add('error-message');
        errorMsg.textContent = message;
        input.parentNode.appendChild(errorMsg);
    }
}

// Handle form submissions (Login and Signup)
function handleFormSubmit(event, formType) {
    event.preventDefault();
    clearErrors(formType);
    
    const username = document.getElementById(`${formType}Username`)?.value;
    const email = document.getElementById(`${formType}Email`)?.value;
    const password = document.getElementById(`${formType}Password`)?.value;
    const confirmPassword = formType === 'signup' ? document.getElementById('signupConfirmPassword')?.value : null;

    let isValid = true;

    // Validate input fields
    if (!username) {
        displayError(document.getElementById(`${formType}Username`), 'Username is required.');
        isValid = false;
    }

    if (!email || !/\S+@\S+\.\S+/.test(email)) {
        displayError(document.getElementById(`${formType}Email`), 'Valid email is required.');
        isValid = false;
    }

    if (!password) {
        displayError(document.getElementById(`${formType}Password`), 'Password is required.');
        isValid = false;
    }

    if (formType === 'signup' && password !== confirmPassword) {
        displayError(document.getElementById('signupConfirmPassword'), 'Passwords do not match.');
        isValid = false;
    }

    if (!isValid) return;

    // Proceed with form submission
    if (formType === 'signup') {
        const existingUsers = JSON.parse(localStorage.getItem('users')) || [];
        const userExists = existingUsers.some(user => user.username === username || user.email === email);

        if (userExists) {
            alert('This username or email is already taken.');
            return;
        }

        const newUser = { username, email, password };
        existingUsers.push(newUser);
        localStorage.setItem('users', JSON.stringify(existingUsers));

        // Show success toast
        showToast('Account created successfully! Welcome!', 'success');
        
        // Redirect to login page after a successful signup
        setTimeout(() => {
            window.location.href = 'login.php';
        }, 3000); // Delay for toast visibility
    } else if (formType === 'login') {
        const existingUsers = JSON.parse(localStorage.getItem('users')) || [];
        const user = existingUsers.find(user => (user.username === username || user.email === email) && user.password === password);

        if (user) {
            alert('Login successful!');
            localStorage.setItem('loggedIn', 'true');
            window.location.href = 'index.php'; // Redirect to the menu page
        } else {
            alert('Invalid username, email, or password. Please try again.');
        }
    }
}

// Handle social login buttons (Google & Facebook)
function handleSocialLogin(platform) {
    console.log(`Attempting to login with ${platform}`);
    showToast(`${platform} login initiated!`, 'success');
    platform === 'google' ? googleLogin() : facebookLogin();
}

// Google Login Integration
function googleLogin() {
    gapi.auth2.getAuthInstance().signIn().then(function(googleUser) {
        const profile = googleUser.getBasicProfile();
        const email = profile.getEmail();
        const username = profile.getName();

        const existingUsers = JSON.parse(localStorage.getItem('users')) || [];
        const userExists = existingUsers.some(user => user.email === email);

        if (userExists) {
            alert('Login successful with Google!');
            localStorage.setItem('loggedIn', 'true');
            window.location.href = 'menu.php';
        } else {
            alert('User does not exist. Please sign up first.');
        }
    }).catch(function(error) {
        console.error('Google login error:', error);
        alert('There was an error logging in with Google.');
    });
}


// Google API and Facebook SDK Load Functions
function loadGoogleAPI() {
    gapi.load('auth2', function() {
        gapi.auth2.init({ client_id: '360378459706-69rvmmfllgbi7c34ve4hvmj25ie37ui8.apps.googleusercontent.com' });
        redirect_uri: 'http://localhost/SAWATDII/index.php'
        
    });
}


// Call the load functions for Google and Facebook when the page loads
window.onload = function() {
    loadGoogleAPI();
};

// Event listeners for form submissions
document.getElementById('loginForm')?.addEventListener('submit', (event) => handleFormSubmit(event, 'login'));
document.getElementById('signupForm')?.addEventListener('submit', (event) => handleFormSubmit(event, 'signup'));
