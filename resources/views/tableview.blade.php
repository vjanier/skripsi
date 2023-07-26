<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Superchat demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama Member</th>
                <th>Grup</th>
                <th>Total Superchat IDR</th>
                <th>Total Subscriber</th>
                <th>Total Penonton</th>
                <th>Rata-rata Penonton Livestream</th>
                <th>Like Rate (%)</th>
                <th>Comment Rate (%)</th>
                <th>Total Jam Livestream</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datas as $data)
              @if ($loop->index == 0)
              @else
              <tr>
                <td>{{ $data[0] }}</td>
                <td>{{ $data[1] }}</td>
                <td>{{ $data[2] }}</td>
                <td>{{ $data[3] }}</td>
                <td>{{ $data[4] }}</td>
                <td>{{ $data[5] }}</td>
                <td>{{ $data[6] }}</td>
                <td>{{ $data[7] }}</td>
                <td>{{ $data[8] }}</td>
              </tr>
              @endif
            @endforeach
        </tbody>
    </table>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
