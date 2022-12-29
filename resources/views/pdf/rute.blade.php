<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Rute</title>
    <style>
      body { margin: 20px; }
      table { margin-top: 30px; }
      table, tr, th, td {
      width: 100%;
      border: 1px solid black;
      border-collapse: collapse;
      }
      th, td { padding: 10px; }
      h4 {
      margin: 0 0 10px;
      text-align: center;
      }
    </style>
  </head>
  <body>
    <h4>REKAPITUASI DATA TRANSPORTASI BUS</h4>
    <h4>YANG TRANSIT DI TERMINAL INDIHIANG</h4>
    <h4>KOTA TASIKMALAYA</h4>
    <table>
      <thead>
        <tr>
          <th style="width: 30px;">No</th>
          <th style="width: 180px;">Bus</th>
          <th style="width: 175px;">Pemberangkatan</th>
          <th>Pemberhentian</th>
          <th style="width: 110px;">Jam Berangkat</th>
          <th style="width: 90px;">Jam Sampai</th>
          <th style="width: 90px;">Jam Transit</th>
        </tr>
      </thead>
      <tbody>
        @php $i = 1 @endphp
        @foreach ($rute as $item)
        <tr>
          <td style="text-align: center;">{{ $i++ }}</td>
          <td>{{ $item->bus->nama }} {{ $item->bus->kelas }}</td>
          <td>{{ $item->pemberangkatan->nama }}, {{ $item->pemberangkatan->kota }}</td>
          <td>{{ $item->pemberhentian->nama }}, {{ $item->pemberhentian->kota }}</td>
          <td>{{ strtoupper(date('g:i a', strtotime($item->jam_berangkat))) }}</td>
          <td>{{ strtoupper(date('g:i a', strtotime($item->jam_sampai))) }}</td>
          <td>{{ strtoupper(date('g:i a', strtotime($item->jam_transit))) }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </body>
</html>