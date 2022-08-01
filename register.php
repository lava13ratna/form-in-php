<html>
<head>
<title>Thank You</title>
</head>
<body>
<h1>Thank You</h1>
<p>Thank you for registering. Here is the information you submitted.</p>
<table border=1; style="border-collapse:collapse;">
<tr><td>First name: </td><td><?php echo $_POST['firstName']; ?></td></tr>
<tr><td>Last name: </td><td><?php echo $_POST['lastName']; ?></td></tr>
<tr><td>Gender: </td><td><?php echo $_POST['gender']; ?></td></tr>
<tr><td>Following course: </td><td><?php echo $_POST['course']; ?></td></tr>
</table>
</body>
</html>
