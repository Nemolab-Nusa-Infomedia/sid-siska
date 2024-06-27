<aside id="sidebar">
    <div class="d-flex justify-content-between">
        <div class="sidebar-logo ms-3">
            <a href="#">Siska</a>
        </div>
        <button id="toggle-btn" type="button">
            <i class="ri-apps-line"></i>
        </button>
    </div>
    <ul class="sidebar-nav">
        <li class="sidebar-item">
            <a href="" class="sidebar-link">
                <i class="ri-home-6-line"></i>
                <span>Beranda</span>
            </a>
        </li>
        <!-- <li class="sidebar-item">
            <a href="" class="sidebar-link">
                <i class="ri-speed-up-fill"></i>
                <span>Tingal Diganti</span>
            </a>
        </li> -->
        <li class="sidebar-item">
            <a href="" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse" data-bs-target="#infoDesa" aria-expanded="false" aria-controls="infoDesa">
                <i class="ri-speed-up-fill"></i>
                <span>Info Desa</span>
            </a>
            <ul id="infoDesa" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a href="{{ route('infoDesa-identitasDesa') }}" class="sidebar-link">
                        <i class="ri-id-card-line"></i>
                        <span>Identitas Desa</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="" class="sidebar-link">
                        <i class="ri-map-2-line"></i>
                        <span>Wilayah Administratif</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="" class="sidebar-link">
                        <i class="ri-mind-map"></i>
                        <span>Pemerintah Desa</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item">
            <a href="" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse" data-bs-target="#kependudukan" aria-expanded="false" aria-controls="kependudukan">
                <i class="ri-group-2-line"></i>
                <span>Kependudukan</span>
            </a>
            <ul id="kependudukan" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a href="{{ route('kependudukan-penduduk') }}" class="sidebar-link">
                        <i class="ri-user-3-line"></i>
                        <span>Penduduk</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="" class="sidebar-link">
                        <i class="ri-group-line"></i>
                        <span>Keluarga</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="" class="sidebar-link">
                        <i class="ri-home-heart-line"></i>
                        <span>Rumah Tangga</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- <li class="sidebar-item">
            <a href="#" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse" data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                <i class="ri-group-line"></i>
                <span>Multi Level</span>
            </a>
            <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#multi-two" aria-expanded="false" aria-controls="multi-two">
                        <i class="ri-home-heart-line"></i>
                        <span>Link two</span>
                    </a>
                    <ul id="multi-two" class="sidebar-dropdown list-unstyled collapse">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">
                                <i class="ri-mind-map"></i>
                                Link 1
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="sidebar-item">
            <a href="" class="sidebar-link">
                <i class="ri-speed-up-fill"></i>
                <span>Tingal Diganti</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="" class="sidebar-link">
                <i class="ri-settings-3-line"></i>
                <span>Pengaturan</span>
            </a>
        </li> -->
    </ul>
    <div class="sidebar-footer">
        <a href="#" class="sidebar-link">
            <i class="ri-expand-left-fill"></i>
            <span>Logout</span>
        </a>
    </div>
</aside>
