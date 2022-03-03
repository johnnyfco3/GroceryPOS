<html>
<head>
  <title>Product Inventory</title>
</head>
<body>
            <h3> Product Inventory </h3>
            <form action="productinsert.php" method="post">
              <input type="text" placeholder=" QR Code " name="qr">
              <input type="text" placeholder=" Serial Number " name="serial">
              <input type="text" placeholder=" Make " name="make">
              <input type="number" placeholder=" Model Number " name="model">
              <input type="text" placeholder=" Model Name " name="name">
              <input type="text" placeholder=" Description " name="d">
              <input type="text" placeholder=" Link of Supplier Data " name="link">
              <input type="number" placeholder=" Cost " name="cost" step="0.01">
              <input type="number" placeholder=" Selling Price " name="price" step="1">
              <input type="text" placeholder=" MSRP " name="msrp">
              <input type="number" placeholder=" In Stock " name="in" step="1">
              <input type="number" placeholder=" Reorder Amount " name="amount" step="1">
              <input type="number" placeholder=" Base Stock " name="base" step="1">
              <input type="number" placeholder=" Vendor ID " name="vendor" step="1">
              <button name="submit">Submit</button>
            </form>
</body>
</html>
