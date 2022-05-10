<html>
    <head>
        {{ Carbon\Carbon::now()->timestamp }}
        <title>Store Post Here</title>
    </head>
    <body>
        <form action="" method="post">
            @csrf
            <label for="">Name</label>
            <input type="text" name="name" placeholder="Name"><br>
            <label >User Id</label>
            <input type="text" >

        </form>
    </body>
</html>