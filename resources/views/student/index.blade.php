<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List of Students</title>
</head>
<body>
  <h1>List of Students</h1>
  <ul>
    @foreach ($students as $student)
      <li style="border: 2px dotted maroon; background-color: #eee; margin-bottom: 15px; border-radius: 20px; padding: 12px;">
        <p>{{ $student->nrp }}</p>
        <h1>{{ $student->name }}</h1>
        <h4>{{ $student->major }}</h4>
        <p>{{ $student->email }}</p>
      </li>
    @endforeach
  </ul>
</body>
</html>