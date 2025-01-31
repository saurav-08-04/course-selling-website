<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        label {
            display: block;
            margin-top: 10px;
            color: #333;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        option {
            background-color: #fff;
            color: #333;
            margin-top: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #0066cc;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #004080;
        }

        .blur {
            filter: blur(4px);
        }

        
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        
        #success-message {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #4CAF50;
            color: #fff;
            padding: 20px;
            border-radius: 8px;
            z-index: 999;
            body: .blur {
            filter: blur(4px);
        }
        }
    </style>
</head>
<body>
    <form action="/mini project 3rd sem/myform.php" method="POST">
        <h1>REGISTRACTION FORM</h1>
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name">

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">

        <label for="dropdown">Select a Role:</label>
        <select id="dropdown" name="role">
            <option value="JAVA FOR BEGINNER">JAVA FOR BEGINNER</option>
            <option value="JAVA FOR ADVANCE">JAVA FOR ADVANCE</option>
            <option value="FIGMA">FIGMA</option>
            <option value="PYTHON FOR BEGGINER">PYTHON FOR BEGINNER</option>
            <option value="PYTHON FOR ADVANCE">PYTHON FOR ADVANCE</option>
        </select>

        <button type="submit">Submit Information</button>
    </form>

    

    <?php
    

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $role = $_POST['role'];
    
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "code";
    
        $conn = mysqli_connect($servername, $username, $password, $database);
    
        
        if (!$conn) {
            die("Failed to connect to the database: " . mysqli_connect_error());
        }
    
        
    
       
        $sql = "INSERT INTO `code` (`first_name`, `last_name`, `email`, `select_`) VALUES ('$first_name', '$last_name', '$email', '$role')
        ";
    
        
        $result = mysqli_query($conn, $sql);
    
        
        if ($result) {
            echo <span>"Data has been added successfully."</span>;
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    
        
        mysqli_close($conn);
    }
    
    ?>
</body>
</html>
