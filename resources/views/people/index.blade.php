<!DOCTYPE html>
<html>
    <head>
        <title>Laravel Assessment</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.1/css/foundation-float.min.css">
    </head>
    <body>
        <div class="row medium-8 large-7 columns">
            <h1>People</h1>

            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($people as $person)
                        <tr>
                              <td>{{$person->name}}</td>
                            <td><a href="/edit/{{$person->id}}">edit</a></td>
                        </tr>
                    @endforeach

                    {{-- List of people names --}}
                </tbody>
            </table>
        </div>
    </body>
</html>
