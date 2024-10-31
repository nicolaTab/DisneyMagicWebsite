function validateForm() {
    let isValid = true;

    // Clear previous error messages
    document.querySelectorAll('.error').forEach(error => error.remove());

    // Validation for first name
    const firstName = document.getElementById("first-name");
    if (firstName.value.trim() === "") {
        showError(firstName, "First name is required");
        isValid = false;
    }

    // Validation for last name
    const lastName = document.getElementById("last-name");
    if (lastName.value.trim() === "") {
        showError(lastName, "Last name is required");
        isValid = false;
    }

    // Validation for email
    const email = document.getElementById("email");
    const emailPattern = /^[^\\s@]+@[\\w.-]+\\.[A-Za-z]{2,}$/;
    if (!emailPattern.test(email.value.trim())) {
        showError(email, "Please enter a valid email");
        isValid = false;
    }

    // Validation for gender
    const gender = document.querySelector('input[name="gender"]:checked');
    if (!gender) {
        const genderLabel = document.querySelector('label[for="male"]');
        showError(genderLabel, "Gender is required");
        isValid = false;
    }

    // Validation for subject
    const subject = document.getElementById("subject");
    if (subject.value.trim() === "") {
        showError(subject, "Subject is required");
        isValid = false;
    }

    // Validation for message
    const message = document.getElementById("message");
    if (message.value.trim() === "") {
        showError(message, "Message cannot be empty");
        isValid = false;
    }

    return isValid;
}

// Function to display an error message
function showError(inputElement, message) {
    inputElement.style.borderColor = "red";
    const error = document.createElement("div");
    error.className = "error";
    error.style.color = "red";
    error.textContent = message;
    inputElement.parentNode.insertBefore(error, inputElement.nextSibling);
}
