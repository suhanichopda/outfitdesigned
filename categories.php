<!DOCTYPE html>
<html>
<head>
<title>Categories</title>

<style>
body {
  margin: 0;
  font-family: Arial;
  height: 100vh;
  overflow: hidden;

  /* ☕ COFFEE SHADES BACKGROUND */
  background: linear-gradient(135deg, 
    #f5e6d3,   /* light coffee */
    #c69c6d,   /* medium coffee */
    #4b2e2b    /* dark coffee */
  );
}

/* CENTER CONTENT */
.container {
  height: 100vh;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

/* TITLE (NO WHITE BOX) */
h1 {
  font-size: 48px;
  color: #fff;
  margin-bottom: 40px;
  text-shadow: 2px 2px 10px rgba(0,0,0,0.5);
}

/* CATEGORY BUTTONS */
.box {
  display: block;
  margin: 12px;
  padding: 15px 40px;
  font-size: 20px;
  font-weight: bold;
  color: #4b2e2b;
  background: rgba(255,255,255,0.85);
  border-radius: 30px;
  text-decoration: none;
  transition: 0.3s;
  box-shadow: 0 8px 20px rgba(0,0,0,0.3);
}

/* HOVER EFFECT */
.box:hover {
  transform: scale(1.1);
  background: #4b2e2b;
  color: white;
}
</style>
</head>

<body>

<div class="container">

  <h1>Select Category</h1>

  <a class="box" href="products.php?type=wedding">💍 Wedding Outfits</a>
  <a class="box" href="products.php?type=navratri">🌸 Navratri Collection</a>
  <a class="box" href="products.php?type=western">👗 Western Wear</a>

</div>

</body>
</html>