<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>control pannel</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/JannaLTRegular.css">
</head>
<body>


    <div class="main">
        <div class="logo">
            <img src="images/logo.png">
            <h2>التحكم عن بعد بالروبورت  </h2>
        </div>
        <div class="boot">
            <form action="index.php" method="post">

                <div class="slidecontainer">
                 <h4> محرك 1 </h4>
                  <input type="range" min="1" max="180" value="90" class="slider" id="myRange" name='E1value' >
                 </div>



                <div class="slidecontainer">
                  <h4> محرك 2</h4>
                  <input type="range" min="1" max="180" value="90" class="slider" id="myRange" name='E2value'>
                </div>

                <div class="slidecontainer">
                   <h4>محرك 3 </h4>
                   <input type="range" min="1" max="180" value="90" class="slider" id="myRange" name='E3value'>
                </div>

                <div class="slidecontainer">
                   <h4> محرك 4 </h4>
                   <input type="range" min="1" max="180" value="90" class="slider" id="myRange" name='E4value'>
                </div>
                <div class="slidecontainer">
                   <h4> محرك 5 </h4>
                   <input type="range" min="1" max="180" value="90" class="slider" id="myRange" name='E5value'>
                </div>
                <div class="slidecontainer">
                  <h4> محرك 6 </h4>
                  <input type="range" min="1" max="180" value="90" class="slider" id="myRange" name='E6value'>
                </div>

                <br>
                <br>

                <div dir="ltr">
                <input type="submit" value="تشغيل" name="run_send">
                <input type="submit" value="حفظ" name="save_send">

                </div>


            </form>

            <?php

            // الاتصال بالسيرفر او قاعدة
            $host               = "localhost";
            $user               = "root";
            $password      = "rootroot";
            $dbName       = "enginControl";
        
            $conn = mysqli_connect($host, $user, $password,$dbName);

            // ارسال المعلومات المُدخله بواسطة المريض الى قاعدة البيانات

                $E1value          = $_POST['E1value'];
                $E2value          = $_POST['E2value'];
                $E3value          = $_POST['E1value'];
                $E4value          = $_POST['E2value'];
                $E5value          = $_POST['E5value'];
                $E6value          = $_POST['E6value'];
                $run_send         = $_POST['run_send'];
                $save_send        = $_POST['save_send'];

            
                if($pSend){
                        $query = "INSERT INTO patients(E1value,E2value,E3value,E4value,E5value,E6value ,run_send,save_send) VALUE('$E1value ','$E2value ','$E3value''$E4value ','$E5value ','$E6value','$run_send' ,'$save_send')";
                    $result = mysqli_query($conn,$query);
                    echo "<p style='color:green'>" . "تم " . "</p>";
                }
                else{
                    echo "<p style='color:red'>" . "عفواً حدث خطأ ما .. حاول مجدد " . "</p>";
                }


            ?>


        </div>
    </div>
</body>
</html>