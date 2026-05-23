<!DOCTYPE html>
<html>
<head>
<title>Payment</title>

<style>
body{
  font-family: Arial;
  margin:0;
  padding:30px;
  text-align:center;
  background: linear-gradient(135deg,#e0eafc,#cfdef3);
}

/* BOX */
.box{
  background:white;
  padding:25px;
  width:320px;
  margin:auto;
  border-radius:15px;
  box-shadow:0 0 15px rgba(0,0,0,0.2);
}

/* TITLE */
h2{
  margin-bottom:10px;
}

/* QR IMAGE */
img{
  width:220px;
  margin:15px 0;
}

/* TEXT */
p{
  margin:5px;
}

/* BUTTON */
button{
  margin-top:15px;
  padding:12px;
  width:100%;
  border:none;
  border-radius:25px;
  background:#4CAF50;
  color:white;
  font-weight:bold;
  cursor:pointer;
  transition:0.3s;
}

button:hover{
  background:#45a049;
}

/* SUCCESS MESSAGE */
.success{
  margin-top:15px;
  color:green;
  font-weight:bold;
}
</style>
</head>

<body>

<div class="box">

<h2>Scan & Pay</h2>

<p>Scan this QR using any UPI app</p>

<!-- ✅ DEMO QR CODE -->
<img src="https://api.qrserver.com/v1/create-qr-code/?size=220x220&data=upi://pay?pa=demo@upi&pn=DemoStore&am=500&cu=INR">

<p><b>UPI ID:</b> demo@upi</p>
<p><b>Amount:</b> ₹500</p>

<!-- BUTTON -->
<button onclick="showSuccess()">I Have Paid</button>

<p class="success" id="msg"></p>

</div>

<script>
function showSuccess(){
  document.getElementById("msg").innerHTML = "✅ Payment Received (Demo)";
}
</script>

</body>
</html>