<!DOCTYPE html>
<html>
<head>
<title>Contact Us</title>

<style>
body{
  font-family: Arial;
  margin:0;
  padding:20px;
  background: linear-gradient(135deg, #f5e6d3, #c69c6d, #4b2e2b);
  text-align:center;
  color:white;
}

.box{
  background: rgba(255,255,255,0.9);
  color:#4b2e2b;
  padding:25px;
  width:320px;
  margin:auto;
  border-radius:15px;
  box-shadow:0 10px 25px rgba(0,0,0,0.3);
}

/* BUTTONS */
.btn{
  margin-top:15px;
  padding:12px;
  width:100%;
  border:none;
  border-radius:25px;
  font-weight:bold;
  cursor:pointer;
  transition:0.3s;
}

.call-btn{
  background:#87CEFA;
}

.location-btn{
  background:#4b2e2b;
  color:white;
}

.btn:hover{
  opacity:0.9;
  transform:scale(1.02);
}
</style>
</head>

<body>

<div class="box">

  <h2>Contact Us</h2>

  <p>
    C - 803 Akruti Heights<br>
    Near Maharaja Farm<br>
    Mota Varachha, Surat
  </p>

  <!-- CALL BUTTON -->
  <button class="btn call-btn"
    onclick="window.location.href='tel:+919876543210'">
    📞 Call Now
  </button>

  <!-- LOCATION BUTTON -->
  <button class="btn location-btn"
    onclick="openMap()">
    📍 Open Location
  </button>

</div>

<script>
function openMap(){
  window.open("https://www.google.com/maps?q=C-803+Akruti+Heights+Near+Maharaja+Farm+Mota+Varachha+Surat", "_blank");
}
</script>

</body>
</html>