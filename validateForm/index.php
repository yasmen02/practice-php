<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax form submit in PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body{
            width: 50%;
            margin: auto;
        }
        h1{
            text-align: center;
        }
        form{
            border: 1px solid #bdacac;
            border-radius: 10px;
            padding: 10px;
        }
    </style>
</head>
<body>

<div class="cotainer">
    <h1>Ajax form submit in PHP</h1>
    <div id="msg"></div>
    <form action="" id="userForm">
        <div class="mb-3">
            <label for="name" class="form-label  fw-bold">FirstName</label>
            <input
                type="text"
                class="form-control"
                name="first_name"
                id="name"
                placeholder="Enter First Name"
            />
        </div>
        <div class="mb-3">
            <label for="name" class="form-label  fw-bold">Last Name</label>
            <input
                type="text"
                class="form-control"
                name="last_name"
                id="last_name"
                placeholder="Enter Last Name"
            />
        </div>
        <div class="mb-3">
            <label for="email" class="form-label fw-bold">Email</label>
            <input
                type="text"
                class="form-control"
                name="email"
                id="email"
                placeholder="Enter Email"
            />
        </div>
        <div class="mb-3">
            <label for="" class="form-label fw-bold">Address</label>
           <input type="password"   class="form-control"
                  name="password"
                  id="pass"
                  placeholder="Enter password">
        </div>
        <button
            type="submit"
            class="btn btn-primary">
            Submit
        </button>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    $(document).on("submit","#userForm",function(e){
        e.preventDefault();
        $.ajax({
            type:"post",
            url:"processForm.php",
            data:$(this).serialize(),
            dataType:"text",
            success:function(response){
                if (response=="success"){
                    var str = '<div class="alert alert-success">Data Inserted successfully</div>';
                }
                else{
                    var str = '<div class="alert alert-danger">'+response+'</div>';
                }
                $("#msg").html(str);
            }

        });
    });
</script>
</body>
</html>
