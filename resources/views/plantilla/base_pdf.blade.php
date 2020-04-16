<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PDF</title>
    <style>
        table {
            width: 90%;
          margin: 0 auto;
        }
        table {
          color: #333;
          background: white;
          border: 1px solid grey;
          font-size: 12pt;
          border-collapse: collapse;
        }
        table thead th,
        table tfoot th {
          color: #777;
          background: rgba(0,0,0,.1);
        }
        table caption {
          padding:.5em;
        }
        table th,
        table td {
          font-size: 0.5em;
          padding: .2em .5em;
          border: 1px solid lightgrey;
        }
        [data-table-theme*=zebra] tbody tr:nth-of-type(odd) {
          background: rgba(0,0,0,.05);
        }
        [data-table-theme*=zebra][data-table-theme*=dark] tbody tr:nth-of-type(odd) {
          background: rgba(255,255,255,.05);
        }
        [data-table-theme*=dark] {
          color: #ddd;
          background: #333;
          font-size: 12pt;
          border-collapse: collapse;
        }
        [data-table-theme*=dark] thead th,
        [data-table-theme*=dark] tfoot th {
          color: #aaa;
          background: rgba(0255,255,255,.15);
        }
        [data-table-theme*=dark] caption {
          padding:.5em;
        }
        [data-table-theme*=dark] th,
        [data-table-theme*=dark] td {
          padding: .5em;
          border: 1px solid grey;
        }
    </style>
  </head>
  <body>
    @yield('content')
  </body>
</html>
