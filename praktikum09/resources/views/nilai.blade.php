<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai</title>
</head>
<body>
    @php
        $nama = 'Eka';
        $nilai = 80.99;
    @endphp
    {{-- struktur kendali if --}}
    @if ($nilai >= 60)
        @php $ket = "Lulus"; @endphp
    @else
        @php $ket = "Gagal"; @endphp
    @endif
    <h1>Siswa {{ $nama }} dengan nilai {{ $nilai }} dinyatakan {{ $ket }}</h1>
   
</body>
</html>