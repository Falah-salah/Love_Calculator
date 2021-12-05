<html>

<head>
    <meta charset="utf-8">
    <title>LOVE</title>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="whole">
        <form method="POST" name="Love_cal">
            <div class="back">



                <p>Love Calculator</p>

                <p>put your name and who you Love😉</p>

                <div class="input">
                    <input type="text" name="boy" class="button" placeholder="your name" required>
                    <input type="text" name="girl" class="button" placeholder="your crush" required>
                    <input type="submit" class="button" id="submit" value="Result" name ="sub">
                </div>
                <div class="php">
                    <?php $rand=rand(0,100);

                     echo  "%".$rand; 
                     
              
                     if(isset($_POST['boy']) && isset($_POST['girl'])) {
                        $data = $_POST['boy'] . '-' . $_POST['girl'] . "\n"."%". $rand;
                        $ret = file_put_contents('form.txt', $data);
                        if($ret === false) {
                            die('There was an error writing this file');
                        }
                    }
                   
                     
                     
?>
                     
                </div>

            </div>
        </form>
    </div>
</body>

<style type="text/css">
    body {
        background-color: #2C5F2D;
        color: lightblue;
        text-align: center;
    }
    
    form {
        width: 470px;
        margin: 30px;
    }
    
    p {
        font-size: 28px;
    }
    
    .header {
        font-size: 35px;
        letter-spacing: 5px;
    }
    
    .input {
        display: flex;
        align-items: center;
        text-align: center;
        margin-right: 20px;
        padding-right: 10px;
    }
    
    .button {
        height: 44px;
        border: 1px solid;
        margin-left: 10px;
    }
    
    #email {
        width: 75%;
        background: #C6BCC6;
        font-family: inherit;
        color: #BD1616;
        letter-spacing: 1px;
        text-indent: 5%;
        border-radius: 5px 0 0 5px;
    }
    
    #submit {
        width: 25%;
        height: 46px;
        background: #FFE6E6;
        font-weight: bolder;
        color: black;
        border-radius: 5px;
        cursor: alias;
    }
    
    #submit:hover {
        background: #d45d7d;
    }
    
    input {
        text-align: center;
    }
    
    input:focus {
        outline: none;
        outline: 2px solid #E86C8D;
        box-shadow: 0 0 2px #E86C8D;
    }
    
    .whole {
        width: 450px;
        height: 350px;
        margin: 7% auto;
        border-radius: 20px;
        background-color: transparent;
        width: 50%;
        align-items: center;
        box-shadow: 0 0 200px red;
    }
    
    .php {
        background-color: red;
        margin-top: 40px;
        border: 1px solid;
        display: none;
    }
    
    .php {
        display: block;
        background-color: red;
        margin-top: 40px;
        border: 1px solid;
    }
</style>



</html>