<!doctype html>
<html>
<head>
<title>Hi Hello</title>
</head>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
body {
  background: #555;
}

.content {
  max-width: 500px;
  margin: auto;
  background: white;
  padding: 10px;
  background-image: url('C:\Users\Pavithra\Desktop\download.jfif');
}

</style>
<body>
</body>

<body class="content">
<form action="AddView.html" method="post">
<table>
<tr>
<td>Name:</td>
<td><input type="text" name="Name"></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="text" name="Password"></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="Login"></td>
</tr>
</table>
</form>
</body>
</html>