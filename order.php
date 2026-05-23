<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
<head>
<title>Order</title>

<style>
body {
  font-family: Arial;
  background: #f5f5f5;
  text-align: center;
  padding-top: 50px;
}

form {
  background: white;
  display: inline-block;
  padding: 25px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

input, textarea {
  width: 250px;
  padding: 10px;
  margin: 10px 0;
  border: 1px solid #ccc;
  border-radius: 5px;
}

button {
  padding: 12px 20px;
  background: #25D366;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-weight: bold;
}
</style>

</head>
<body>

<h2>Place Your Order</h2>

<form method="POST">
  <input type="text" name="name" placeholder="Your Name" required><br>
  <input type="text" name="mobile" placeholder="Mobile Number" required><br>
  <textarea name="address" placeholder="Address" required></textarea><br>

  <button name="order">Confirm Order</button>
</form>

</body>
</html>

<?php
if(isset($_POST['order'])){

  $name = $_POST['name'];
  $mobile = $_POST['mobile'];
  $address = $_POST['address'];

  $message = "🛒 New Order Received\n";
  $message .= "Name: $name\n";
  $message .= "Mobile: $mobile\n";
  $message .= "Address: $address";

  $whatsapp = "918980767472"; // 👉 Ahiya tamaro number mukvo

  $wa_url = "https://wa.me/$whatsapp?text=" . urlencode($message);

  echo "<script>
    window.open('$wa_url','_blank');
    alert('Order placed successfully!');
  </script>";
}
?>