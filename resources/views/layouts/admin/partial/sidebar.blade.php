<div class="sidebar-content js-simplebar">
    <a class="sidebar-brand" href="{{ route('dashboard.') }}">
        <span class="align-middle">Kelola SPP SMKS BUNGA PERSADA CIANJUR</span>
    </a>

    <ul class="sidebar-nav">
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('dashboard.') }}">
                <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
        </li>
        <li class="sidebar-header">
            Master Data
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('dashboard.tahunAjaran.index') }}">
                <i class="align-middle" data-feather="award"></i> <span class="align-middle">Tahun Ajaran</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('dashboard.jurusan.index') }}">
                <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Jurusan</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('dashboard.ksiswa.tahunAjaran') }}">
                <i class="align-middle" data-feather="users"></i> <span class="align-middle">Siswa</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('dashboard.biaya.index') }}">
                <i class="align-middle" data-feather="tag"></i> <span class="align-middle">Kelola Biaya</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('dashboard.pembayaran.index') }}">
                <i class="align-middle" data-feather="dollar-sign"></i> <span class="align-middle">Kelola
                    Pembayaran</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('dashboard.rekapan.pembayaran.index') }}">
                <i class="align-middle" data-feather="dollar-sign"></i> <span class="align-middle">
                    Rekapan Pembayaran</span>
            </a>
        </li>

    </ul>

    {{-- <div class="sidebar-cta">
      <div class="sidebar-cta-content">
          <strong class="d-inline-block mb-2">Upgrade to Pro</strong>
          <div class="mb-3 text-sm">
              Are you looking for more components? Check out our premium version.
          </div>
          <a href="https://adminkit.io/pricing" target="_blank"
              class="btn btn-primary btn-block">Upgrade to Pro</a>
      </div>
  </div> --}}
</div>
