<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        *{
            text-decoration: none;
        }
        .navbar{
            background: sandybrown;
            font-family: arial, sans-serif;
            padding: auto;
            border-radius: 20px;
            margin: auto;
            width: auto;
            justify-content:center;
        }
        .navdiv{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .logo{
            font-size: 35px;
            font-weight: 500px;
            height: 65px;
            border-radius: 20px;

        }
        li{
            list-style: none;
            display:inline;
        }
        li a{
            color:white;
            font-size: 18px;
            font-weight: bold;
            margin-right: 25px;
        }
        #Logout{
            border: 1px  solid black;
            border-radius: 12px;
            padding: 3px 2px;
            color: black;
        }


        input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;

}

input[type=BUTTON] {
  width: 5%;
  background-color:sandybrown;
  color: white;
  padding: 10px 20px;
  margin: 20px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=BUTTON] {
  width: 15%;
  background-color:sandybrown;
  color: white;
  padding: 10px 20px;
  margin: 20px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=BUTTON]:hover {
  background-color: #sandybrown;
}
input[type=BUTTON]:hover {
  background-color: #sandybrown;
}
.form {
  border-radius: 10px;
  background-color: #f2f2f2;
  padding: 50px;
}
label[for="type"]{

}
      
        </style>
</head>
<body>
   <nav class="navbar">
    <div class="navdiv">
        <image class=logo src="logo.png" alt="logo">
<ul>
    
    <li><a href="home.php">Home</a></li>
    <li><a href="product.php">Add ptoduct</a></li>
    <li><a href="users.php">Manage users</a></li>
    <li><a href="#" id= Logout>Logout</a></li>
    </ul>
    </div>
    </nav>
    </br>
    <div class="form">
  <form action="/product.php">
    <label for="name"> Name</label>
    <input type="text" id="name" name="product name" placeholder="product name..">

    <label for="description">description</label>
    <input type="text" id="description" name="description" placeholder="description..">
    <label for="price">price</label></br>
    <input type="text" id="price" name="price" placeholder="add a price.."></br>

    <label for="type">Type</label>
    <select id="type" name="type">
      <option value="meals">meals</option>
      <option value="dessert">dessert</option>
      <option value="burgers">burgers</option>
      <option value="drinks">drinks</option>
      <input type="file" id="myFile" name="filename">
      </br>
    </select>
    <input type="BUTTON" value="ADD">
    <input type="BUTTON" value="RESET">

  </form>
</div>
</body>
</html>