@extends('layouts.app')

@section('content')
<div class="navigasi" style="margin-top: 5%;">
<div class="d-flex">
    <!-- Navigasi -->
    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="position: fixed;">
        <a class="nav-link active" id="v-pills-home-tab" href="{{ route('home') }}" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
        <a class="nav-link" id="v-pills-profile-tab" href="{{ route('input-dokumen') }}" role="tab" aria-controls="v-pills-profile" aria-selected="false">Input Dokumen</a>
        <a class="nav-link" id="v-pills-messages-tab" href="{{ route('list-dokumen') }}" role="tab" aria-controls="v-pills-messages" aria-selected="false">List Dokumen</a>
        <a class="nav-link" id="v-pills-settings-tab" href="{{ route('kategori-dokumen') }}" role="tab" aria-controls="v-pills-settings" aria-selected="false">Kategori Dokumen</a>
    </div>

    <!-- Konten -->
    <div class="container-fluid" style="margin-left: 220px;">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                <h1>Selamat datang di halaman home!</h1>
            </div>
    </div>
</div>

</div>

@endsection
