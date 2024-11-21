<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>

</head>

<body>
    <div class="flex justify-center items-center h-screen">
        <div class="xl:w-[700px] px-10 h-[400px] rounded-3xl xl:shadow-xl">
            <h1 class="text-center text-3xl font-bold mt-2 mb-2">Signup</h1>
            <hr>
            <div class="flex justify-center mt-10">
                <form action="signup.php" method="post">
                    <input type="text" name="email" id="" class="py-3 p-5 rounded-md  bg-zinc-50 md:w-[500px] w-[300px] outline-indigo-400" placeholder="Enter your email">
                    <br><br>
                    <input type="password" name="password" id="" class="py-3 p-5 rounded-md  bg-zinc-50 md:w-[500px] w-[300px] outline-indigo-400" placeholder="Enter your password">

                    <div class="flex justify-end mt-3 mb-4">
                        <a href="login.php" class="text-blue-700">Ayo masuk ke akun</a>
                    </div>

                    <button type="submit" class="py-3 bg-indigo-400 text-white w-full rounded-md font-bold">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<?php
include "database.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $sql = "INSERT INTO users (username,password) VALUES ('$email','$password')";

    if(mysqli_query($db,$sql)){
         $data1 = "data telah masuk";
    }else{
        echo "Data gagal masuk";
    }

}

?>