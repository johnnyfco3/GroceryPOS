<html>
<head>
  <title>Tax Document</title>
</head>
<body>
            <h3> Tax Document </h3>
            <form action="taxinsert.php" method="post">
              Tax Year <input type="date" placeholder=" yyyy " name="year">
              <input type="number" placeholder=" State Rate " name="state" step="0.01">
              <input type="number" placeholder=" County Rate " name="county" step="0.01">
              <input type="number" placeholder=" City Rate " name="city" step="0.01">
              <input type="number" placeholder=" Tax Rate " name="tax" step="0.01">
              <button name="submit">Submit</button>
            </form>
</body>
</html>
