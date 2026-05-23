<!DOCTYPE html>
<html>
<head>
<title>OutfitDesigned</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
body {
  margin:0;
  font-family: Arial;
  height:100vh;
  background: linear-gradient(135deg, #6a11cb, #2575fc, #ff6a88);
  color:white;
}

/* CENTER CONTENT */
.container {
  text-align:center;
  margin-top:150px;
}

h1 {
  font-size:40px;
}

p {
  font-size:18px;
}

/* BUTTON STYLE */
button {
  padding:12px 25px;
  margin:10px;
  border:none;
  border-radius:25px;
  cursor:pointer;
  font-size:16px;
}

.btn1 {
  background:white;
  color:#6a11cb;
}

.btn2 {
  background:#ff4081;
  color:white;
}

/* 🔥 CONTACT POPUP */
.contact-box {
  display:none;
  position:fixed;
  top:50%;
  left:50%;
  transform:translate(-50%, -50%);
  
  background:black;
  color:white;

  padding:30px;
  width:350px;

  border-radius:15px;
  box-shadow:0 0 20px rgba(0,0,0,0.5);
  text-align:left;
}

.contact-box h2 {
  text-align:center;
}

.contact-box button {
  margin-top:15px;
  padding:10px;
  width:100%;
  background:#ff4081;
  border:none;
  color:white;
  border-radius:10px;
  cursor:pointer;
}
</style>
</head>

<body>

<div class="container">
  <h1>Outfit Designed</h1>

  <p>Premium Wedding Outfit Collection</p>

  <button class="btn1" onclick="window.location.href='categories.php'">
  Shop Now
</button>

  <button class="btn2" onclick="showContact()">Contact Us</button>
</div>

<!-- 🔥 CONTACT BOX (STEP 2) -->
<div id="contactBox" class="contact-box">
  <h2>Contact Us</h2>

  <p>📍 C - 803 Akruti Heights Near Maharaja Farm, Mota Varacha Surat</p>
  <p>📞 8980767472</p>
  <p>✉️ suhanichopda95@gmail.com</p>

  <button onclick="closeContact()">Close</button>
</div>

<!-- 🔥 JAVASCRIPT (STEP 4) -->
<script>
function showContact(){
  document.getElementById("contactBox").style.display="block";
}

function closeContact(){
  document.getElementById("contactBox").style.display="none";
}
</script>

</body>
</html>