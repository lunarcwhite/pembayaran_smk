<div class="appBottomMenu">
    <a href="{{route('dashboard.')}}" class="item active">
        <div class="col">
            <ion-icon name="home-outline"></ion-icon>
            <strong>Dashboard</strong>
        </div>
    </a>
    <a href="{{route('dashboard.siswa.riwayat_pembayaran')}}" class="item">
        <div class="col">
            <ion-icon name="cube-outline"></ion-icon>
            <strong>Riwayat</strong>
        </div>
    </a>
    {{-- <a href="page-chat.html" class="item">
        <div class="col">
            <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
            <span class="badge badge-danger">5</span>
            <strong>Absen</strong>
        </div>
    </a> --}}
    <a href="{{route('dashboard.siswa.pembayaran')}}" class="item">
        <div class="col">
            <ion-icon name="layers-outline"></ion-icon>
            <strong>Pembayaran</strong>
        </div>
    </a>
    <a href="javascript:;" class="item" data-toggle="modal" data-target="#sidebarPanel">
        <div class="col">
            <ion-icon name="menu-outline"></ion-icon>
            <strong>Profile</strong>
        </div>
    </a>
</div>