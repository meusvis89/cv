$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// do something with the form data, such as sending an email or storing it in a database
// send an email with the form data
mail('deondre@jacksondavisnotary.com', 'New message from website', "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message");

// redirect the user to a thank you page
header('Location: thankyou.html');
exit;
