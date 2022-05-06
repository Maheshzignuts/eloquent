<html>
    <head>
        <title>Relationship Data</title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Post Name</th>
                    <th>Name of Owner</th>
                </tr>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->user->name}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </thead>
        </table>    
    </body>
</html>