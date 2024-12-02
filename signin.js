// Get the buttons and form container
const signUpButton = document.querySelector('.signUpBtn-link');
const signInButton = document.querySelector('.signInBtn-link');
const wrapper = document.querySelector('.wrapper');

// Toggle to Sign-Up form when "Sign Up" link is clicked
signUpButton.addEventListener('click', function() {
    wrapper.classList.add('active');
});

// Toggle to Sign-In form when "Login" link is clicked
signInButton.addEventListener('click', function() {
    wrapper.classList.remove('active');
});