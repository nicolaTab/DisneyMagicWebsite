<?php
session_start();

$errors = [];
$formData = [
    'first-name' => '',
    'last-name' => '',
    'email' => '',
    'gender' => '',
    'profession' => '',
    'birthdate' => '',
    'subject' => '',
    'message' => ''
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input
    $formData['first-name'] = htmlspecialchars(trim($_POST['first-name']));
    $formData['last-name'] = htmlspecialchars(trim($_POST['last-name']));
    $formData['email'] = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $formData['gender'] = htmlspecialchars(trim($_POST['gender']));
    $formData['profession'] = htmlspecialchars(trim($_POST['profession']));
    $formData['birthdate'] = htmlspecialchars(trim($_POST['birthdate']));
    $formData['subject'] = htmlspecialchars(trim($_POST['subject']));
    $formData['message'] = htmlspecialchars(trim($_POST['message']));

    // Check for required fields and errors
    if (!$formData['first-name']) $errors['first-name'] = 'First name is required';
    if (!$formData['last-name']) $errors['last-name'] = 'Last name is required';
    if (!$formData['email']) $errors['email'] = 'A valid email is required';
    if (!$formData['subject']) $errors['subject'] = 'Subject is required';
    if (!$formData['message']) $errors['message'] = 'Message is required';

    // If no errors, proceed with email
    if (empty($errors)) {
        $to = "nicolatabbah0@gmail.com";  // email
        $subjectLine = "New message from {$formData['first-name']} {$formData['last-name']} - {$formData['subject']}";
        $message = "Name: {$formData['first-name']} {$formData['last-name']}\n";
        $message .= "Email: {$formData['email']}\n";
        $message .= "Gender: {$formData['gender']}\n";
        $message .= "Profession: {$formData['profession']}\n";
        $message .= "Birthdate: {$formData['birthdate']}\n\n";
        $message .= "Message:\n{$formData['message']}";

        $headers = "From: {$formData['email']}";

        if (mail($to, $subjectLine, $message, $headers)) {
            echo "<p>Message sent successfully!</p>";
        } else {
            echo "<p>There was an error sending the message.</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disney Magic - Contact</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <!-- Include Header -->
    <?php include('php/header.inc.php'); ?>

    <!-- Main Content Section -->
    <main>
        <section class="contact-form">
            <h1>Contact Us</h1>
            <p>Have a question? Send us a message and we'll get back to you!</p>

            <form action="contact.php" method="post">
                <!-- Name Fields -->
                <label for="first-name">First Name:</label>
                <input type="text" id="first-name" name="first-name" value="<?php echo htmlspecialchars($formData['first-name']); ?>">
                <?php if (isset($errors['first-name'])): ?><span class="error"><?php echo $errors['first-name']; ?></span><?php endif; ?>

                <label for="last-name">Last Name:</label>
                <input type="text" id="last-name" name="last-name" value="<?php echo htmlspecialchars($formData['last-name']); ?>">
                <?php if (isset($errors['last-name'])): ?><span class="error"><?php echo $errors['last-name']; ?></span><?php endif; ?>

                <!-- Email Field -->
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($formData['email']); ?>">
                <?php if (isset($errors['email'])): ?><span class="error"><?php echo $errors['email']; ?></span><?php endif; ?>

                <!-- Gender Radio Buttons -->
                <label>Gender:</label>
                <input type="radio" id="male" name="gender" value="male" <?php if ($formData['gender'] == 'male') echo 'checked'; ?>>
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female" <?php if ($formData['gender'] == 'female') echo 'checked'; ?>>
                <label for="female">Female</label>
                <input type="radio" id="other" name="gender" value="other" <?php if ($formData['gender'] == 'other') echo 'checked'; ?>>
                <label for="other">Other</label>

                <!-- Profession Dropdown -->
                <label for="profession">Profession:</label>
                <select id="profession" name="profession">
                    <option value="student" <?php if ($formData['profession'] == 'student') echo 'selected'; ?>>Student</option>
                    <option value="teacher" <?php if ($formData['profession'] == 'teacher') echo 'selected'; ?>>Teacher</option>
                    <option value="artist" <?php if ($formData['profession'] == 'artist') echo 'selected'; ?>>Artist</option>
                    <option value="other" <?php if ($formData['profession'] == 'other') echo 'selected'; ?>>Other</option>
                </select>

                <!-- Birthdate Field -->
                <label for="birthdate">Birthdate:</label>
                <input type="date" id="birthdate" name="birthdate" value="<?php echo htmlspecialchars($formData['birthdate']); ?>">

                <!-- Subject Field -->
                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" value="<?php echo htmlspecialchars($formData['subject']); ?>">
                <?php if (isset($errors['subject'])): ?><span class="error"><?php echo $errors['subject']; ?></span><?php endif; ?>

                <!-- Message Text Area -->
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5"><?php echo htmlspecialchars($formData['message']); ?></textarea>
                <?php if (isset($errors['message'])): ?><span class="error"><?php echo $errors['message']; ?></span><?php endif; ?>

                <!-- Submit Button -->
                <button type="submit">Send Message</button>
            </form>
        </section>
    </main>

    <!-- Include Footer -->
    <?php include('php/footer.inc.php'); ?>
</body>
</html>
