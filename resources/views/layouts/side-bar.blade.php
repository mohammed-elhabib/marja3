  <nav class="navbar navbar-light navbar-vertical navbar-expand-xl">

      <div class="d-flex align-items-center">
          <div class="toggle-icon-wrapper">

              <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip"
                  data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span
                          class="toggle-line"></span></span></button>

          </div><a class="navbar-brand" href="index.html">
              <div class="d-flex align-items-center py-3"><img class="me-2"
                      src="{{ asset('img/icons/spot-illustrations/falcon.png') }}" alt="" width="40" /><span
                      class="font-sans-serif">Marja3</span>
              </div>
          </a>
      </div>
      <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
          <div class="navbar-vertical-content scrollbar">
              <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">

                  <li class="nav-item">
                      <!-- label-->
                      <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                          <div class="col-auto navbar-vertical-label">Public
                          </div>
                          <div class="col ps-0">
                              <hr class="mb-0 navbar-vertical-divider" />
                          </div>
                      </div>
                      <!-- parent pages--><a class="nav-link" href="{{route('post-list')}}"
                          role="button" aria-expanded="false">
                          <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                      class="fas fa-rocket"></span></span><span class="nav-link-text ps-1">Posts</span>
                          </div>
                      </a>
                      <a class="nav-link" href="{{route('post-add')}}" role="button" aria-expanded="false">
                          <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                      class="fas fa-code-branch"></span></span><span
                                  class="nav-link-text ps-1">New Post</span>
                          </div>
                      </a>
                  </li>
              </ul>
              <div class="settings mb-3">
                  <div class="card alert p-0 shadow-none" role="alert">
                      <div class="btn-close-falcon-container">
                          <div class="btn-close-falcon" aria-label="Close" data-bs-dismiss="alert"></div>
                      </div>
                      <div class="card-body text-center"><img
                              src="{{ asset('img/icons/spot-illustrations/navbar-vertical.png') }}" alt="" width="80" />
                          <p class="fs--2 mt-2">Loving what you see? <br />Get your copy of <a href="#!">Falcon</a>
                          </p>
                          <div class="d-grid"><a class="btn btn-sm btn-purchase"
                                  href="https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/"
                                  target="_blank">Purchase</a></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </nav>
