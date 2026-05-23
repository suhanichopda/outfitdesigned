<?php
$type = $_GET['type'] ?? 'wedding';
?>

<!DOCTYPE html>
<html>
<head>
<title>Products</title>

<style>
body {
  font-family: Arial;
  margin: 0;
  padding: 20px;
}

/* ===== BACKGROUNDS ===== */
body.wedding {
  background: linear-gradient(135deg, #87CEEB, #1E90FF, #0b1d51);
}

body.navratri {
  background: linear-gradient(135deg, #ffecd2, #fcb69f, #ff6f61, #8b3a3a);
}

body.western {
  background: linear-gradient(135deg, #f2f2f2, #cccccc, #999999);
}

/* TITLE */
.title {
  text-align: center;
  color: white;
  font-size: 36px;
  text-transform: capitalize;
}

/* GRID */
.grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}

/* CARD */
.card {
  background: rgba(255,255,255,0.92);
  padding: 15px;
  text-align: center;
  border-radius: 12px;
  transition: 0.3s;
}

.card:hover {
  transform: translateY(-6px);
  box-shadow: 0 10px 20px rgba(0,0,0,0.2);
}

/* ===== IMAGE BOX (THEME BASED) ===== */
.image-box {
  width: 100%;
  height: 320px;
  display:flex;
  align-items:center;
  justify-content:center;
  border-radius: 12px;
  overflow: hidden;
}

/* Wedding → pink shade */
body.wedding .image-box {
  background: linear-gradient(135deg, #ffe4ec, #ffd6e0, #ffc2d1);
}

/* Navratri → orange festive */
body.navratri .image-box {
  background: linear-gradient(135deg, #fff1e6, #ffb347, #ff7a00);
}

/* Western → grey modern */
body.western .image-box {
  background: linear-gradient(135deg, #eeeeee, #cccccc, #999999);
}

.image-box img {
  width: 100%;
  height: 100%;
  object-fit: contain;
  transition: 0.3s;
}

/* IMAGE ZOOM */
.card:hover img {
  transform: scale(1.05);
}

/* PRICE */
 .price {
  margin-top:10px;
  padding:10px;
  background:#eee;
  font-weight:bold;
  width:100%;
  box-sizing: border-box;   /* 👈 MAIN FIX */
  border-radius:8px;
}

/* ===== BUTTON ===== */
.order-btn {
  margin-top:10px;
  padding:12px;
  border:none;
  border-radius:25px;
  width:100%;
  font-weight:bold;
  cursor:pointer;
  transition: 0.3s;
  color:white;
}

/* Wedding button */
body.wedding .order-btn {
  background: linear-gradient(135deg, #ff69b4, #ff1493);
}

/* Navratri button */
body.navratri .order-btn {
  background: linear-gradient(135deg, #8b5e3c, #4b2e2b);
}

/* Western button */
body.western .order-btn {
  background: linear-gradient(135deg, #333, #000);
}

/* HOVER EFFECT */
.order-btn:hover {
  transform: scale(1.05);
  filter: brightness(1.1);
}

/* CLICK EFFECT */
.order-btn:active {
  transform: scale(0.9);
  box-shadow: 0 0 15px rgba(0,0,0,0.5);
}
</style>
</head>

<body class="<?php echo $type; ?>">

<h1 class="title"><?php echo $type; ?> outfits</h1>

<div class="grid">

<?php

if($type == "wedding"){
  $prices = [300,450,350,300,300,300,300,300,300,300,300,250];
  $folder = "wedding";
  $start = 1;
}
elseif($type == "navratri"){
  $prices = [500,400,300,1800,2000,2200,2500,2700,3000,3200,3500,3800];
  $folder = "navratri";
  $start = 13;
}
else{
  $prices = [300,350,1000,1100,1200,1300,1400,1500,1600,1700,1800,1900];
  $folder = "western";
  $start = 25;
}

for($i = 0; $i < 12; $i++){
  $img = $start + $i;
?>

<div class="card">

  <div class="image-box">
    <img src="uploads/<?php echo $folder; ?>/p<?php echo $img; ?>.jpg">
  </div>

  <div class="price">₹ <?php echo $prices[$i]; ?></div>

  <button class="order-btn"
    onclick="window.location.href='order.php?type=<?php echo $type; ?>&product=<?php echo $img; ?>'">
    Order Now
  </button>

</div>

<?php } ?>

</div>

</body>
</html>