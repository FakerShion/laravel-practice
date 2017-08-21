<!DOCTYPE html>
<html>
<head>
    <title>Laravel Assessment</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.1/css/foundation-float.min.css">
</head>
<body>
<div class="row medium-8 large-7 columns">
    <h1>Edit {{$person->name}}</h1>

    <form method="POST" action="/edit/{{$person->id}}">
        {{csrf_field()}}

        <div class="form-group">
            <label for="newname">New name:</label>
            <input type="text" class="form-control" id="newname" name="newname" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Change Name</button>
        </div>

    </form>


</div>
</body>
</html>
