<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];


$errors = [
    'firstNameError' => '',
    'lastNameError' => '',
    'emailError' => '',
];

if (isset($_POST['submit'])) {
    if (empty($firstName)) {
        $errors['firstNameError'] = 'الرجاء إدخال الاسم الأول';
    }

    if (empty($lastName)) {
        $errors['lastNameError'] = 'الرجاء إدخال الاسم الاخير';
    }

    if (empty($email)) {
        $errors['emailError'] = 'الرجاء إدخال البريد الإلكتروني';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['emailError'] = 'الرجاء إدخال بريد إلكتروني صحيح';
    }
    if (!array_filter($errors)) {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];

        $sql = "INSERT INTO users(firstName, lastName, email) VALUES ('{$firstName}', '{$lastName}', '{$email}')";
        if (mysqli_query($conn, $sql)) {
            header('Location: index.php');
            
        } else {
            echo 'Error: ' . mysqli_error($conn);
        }
    } 
}
