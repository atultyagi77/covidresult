<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Covid Result</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h3>Case search by country</h3>
        <table id="tableID" class="table table-striped">
            <thead>
                <tr>
                    <th data-sortas="numeric">#</th>
                    <th data-sortas="case-insensitive">Country</th>
                    <th data-sortas="numeric">All Cases</th>
                    <th data-sortas="numeric">Today Case</th> 
                </tr>
            </thead>
            <tbody>
                @foreach($data as $value)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$value->country}}</td>
                    <td>{{$value->cases}}</td>
                    <td>{{$value->todayCases}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js">
</script>
<script src="https://cdn.jsdelivr.net/npm/jquery.fancytable/dist/fancyTable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#tableID").fancyTable({
            sortColumn: 2,
            pagination: false,
            globalSearch: true,
            globalSearchExcludeColumns: [1],
            onInit: function() {
                console.log({
                    element: this
                });
            },
            onUpdate: function() {
                console.log({
                    element: this
                });
            }
        });
    });
</script>

</html>