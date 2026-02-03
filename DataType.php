  <?php
    //There are 8 Data types in PhP
    // 1 String  ("Ahsan")
    // 2 Integer  (12334)
    // 3 float    (1.999)
    // 4 Boolean   (TRUE, FALSE)
    // 5 NULL       ()
    // 6 Array       ["Ahsan", 123] collectional of multiple
    // 7 Object(Class)  
    // 8 Recourse 


    //String
    $name = "Ahsan";
    // echo $name;
    // echo var_dump($name); // var_dump is a method we use to know the type and value of a variable.

    

    //Integer 
    $num = 123345;
    // echo $num;
    // echo var_dump($num)


    //float
    $numFloat = 10.1;
    // echo $numFloat;
    // echo var_dump($numFloat);


    //Boolean
    $boolean = True;
    // echo $boolean;
    // echo var_dump($boolean)

    //Array

    $arr = ["Ahsan","hanan", 123];
    // echo var_dump($arr);


    //Null
    $empty= null;
    //   echo $null;
    //   echo var_dump($empty);


    //Class
    // $user = new ClassName(); // ye class hao or eska type Object hota hai


    //Resource // ye special type hote hain  es ma ap kisi database connect krne ka connection woh store kr k rahk sakte hain ft ko connect krne ka type hota woh store kr sakte ho

      $connection = ftp_connect("127.0.0.1") or die("Local host not found");
      echo var_dump($connection);

    ?>