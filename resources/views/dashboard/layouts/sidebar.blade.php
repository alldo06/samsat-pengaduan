
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block onyx-bg sidebar collapse">
      <div class="position-sticky pt-3">
				<div class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white">
					<img src="/img/logo-humas-samsat-hgl.png" alt="Logo Samsat" class="d-block mb-3 logo-160">
				</div>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link side-link py-3 {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
              <span class="feather-16 mx-3 my-auto" data-feather="pie-chart"></span>
              <span class="ml-2 f-16 fw-400 lh-20 ls-02">Overview</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link side-link py-3 {{ Request::is('dashboard/pengaduan*') ? 'active' : '' }}" href="/dashboard/pengaduan">
              <span class="feather-16 mx-3 my-auto" data-feather="file-text"></span>
              <span class="ml-2 f-16 fw-400 lh-20 ls-02">Pengaduan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link side-link py-3 {{ Request::is('dashboard/tanggapan*') ? 'active' : '' }}" href="/dashboard/tanggapan">
              <span class="feather-16 mx-3 my-auto" data-feather="file-text"></span>
              <span class="ml-2 f-16 fw-400 lh-20 ls-02">Tanggapan</span>
            </a>
          </li>
        </ul>
				
				<hr class="gray-border">
        <ul class="nav flex-column">
          <li class="nav-item">
						<form action="/logout" method="post" class="nav-link side-link py-3">
							@csrf
							<button type="submit" class="bg-transparent border-0">
								<span class="mx-3 my-auto feather-16" data-feather="log-out"></span>
								<span class="ml-2 f-16 fw-400 lh-20 ls-02 metallic-silver-color">Log out</span>
							</button>
						</form>
            </a>
          </li>
        </ul>
      </div>
    </nav>