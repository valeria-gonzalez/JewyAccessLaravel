<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
</head>
<body>
    <h1>Client Listing</h1>
    <table>
        <thead>
            <throw>
                <td>Name</td>
                <td>First Lastname</td>
                <td>Second Lastname</td>
                <td>Phone Number</td>
                <td>More</td>
            <throw>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->first_lastname }}</td>
                    <td>{{ $client->second_lastname }}</td>
                    <td>{{ $client->phone_number }}</td>
                    <td>
                        <a href = "{{ route('client.show', $client->id) }}">
                            See more 
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href = 'client/create'>Create client</a>
    
</body>
</html>