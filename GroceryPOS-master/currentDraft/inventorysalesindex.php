<html>
<head>
  <title>Inventory Sales Document</title>
</head>
<body>
            <h3> Inventory Sales </h3>
            <form action="inventorysalesinsert.php" method="post">
              <input type="number" placeholder=" Ticket ID" name="tid" step="1">
              <input type="number" placeholder=" Product ID " name="pid" step="1">
              <input type="number" placeholder=" QTY " name="qty" step="1">
              <input type="number" placeholder=" Unit Price " name="unit" step="0.01">
              <input type="text" placeholder=" Discount " name="discount">
              <button name="submit">Submit</button>
            </form>
</body>
</html>
