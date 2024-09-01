<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="phone1.css">
    <title>Phone</title>  
</head>
<body>
    <div class="header">
        <h1>Smart Phone Shop</h1>
    </div>

    <div class="body1">
       <div class="body11">
        <img src="img/Screenshot 2024-08-29 191128.png" alt="" width="15%" height="100%">
        <img src="img/Screenshot 2024-08-29 191205.png" alt="" width="15%" height="100%">
        <img src="img/Screenshot 2024-08-29 191205.png" alt="" width="15%" height="100%">
        <img src="img/Screenshot 2024-08-29 191205.png" alt="" width="15%" height="100%">
       </div>
    </div>
    
    <div class="body2">
        <h2>Phone Type</h2>
        <p>We have the following smartphone items available</p>
        <ul>
            <li>Xiomi Remdi 12: 70000 rupees</li>
            <li>Iphone 15: 320000 rupees</li>
            <li>Samsung S22: 220000 rupees</li>
        </ul>
             
    </div>

    
    <div class="footer">

    <form method="POST"   action="phone.php">
        <h2>Enter Your Details</h2>

        <label>Select Smartphone:</label>
            <select name="Smartphone" id="Smartphone">
            <option value="Xiomi Redmi 12">Xiomi Redmi 12</option>
            <option value="Iphone 15">Iphone 15</option>
            <option value="Samsung S22">Samsung S22</option>
            </select><br><br>   
                
        Name: <br><input type="text" name="name" id="name" required><br>
        Email: <br><input type="email" name="email" id="email" required><br>
        Phone Number: <br><input type="text" name="pnumber" id="pnumber" required><br><br>

        <input type="submit" value="Submit" >
    </form>    
        
    </div>
    
    
    

</body>
</html>