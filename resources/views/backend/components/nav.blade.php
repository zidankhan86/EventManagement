 <!-- Header -->
 <header class="main-header " id="header">
    <nav class="navbar navbar-static-top navbar-expand-lg">
      <!-- Sidebar toggle button -->
      <button id="sidebar-toggler" class="sidebar-toggle">
        <span class="sr-only">Toggle navigation</span>
      </button>
      <!-- search form -->
      <div class="search-form d-none d-lg-inline-block">
        <div class="input-group">
          <button type="button" name="search" id="search-btn" class="btn btn-flat">
            <i class="mdi mdi-magnify"></i>
          </button>
          <input type="text" name="query" id="search-input" class="form-control" placeholder="'button', 'chart' etc."
            autofocus autocomplete="off" />
        </div>
        <div id="search-results-container">
          <ul id="search-results"></ul>
        </div>
      </div>

      <div class="navbar-right ">
        <ul class="nav navbar-nav">
          <li class="dropdown notifications-menu custom-dropdown">
            <button class="dropdown-toggle notify-toggler custom-dropdown-toggler">
              <i class="mdi mdi-bell-outline"></i>
            </button>

            <div class="card card-default dropdown-notify dropdown-menu-right mb-0">
              <div class="card-header card-header-border-bottom px-3">
                <h2>Notifications</h2>
              </div>

              <div class="card-body px-0 py-3">
                <ul class="nav nav-tabs nav-style-border p-0 justify-content-between" id="myTab" role="tablist">
                  <li class="nav-item mx-3 my-0 py-0">
                    <a class="nav-link active pb-3" id="home2-tab" data-toggle="tab" href="#home2" role="tab" aria-controls="home2" aria-selected="true">All (11)</a>
                  </li>

                  <li class="nav-item mx-3 my-0 py-0">
                    <a class="nav-link pb-3" id="profile2-tab" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile2" aria-selected="false">Msgs (6)</a>
                  </li>

                  <li class="nav-item mx-3 my-0 py-0">
                    <a class="nav-link pb-3" id="contact2-tab" data-toggle="tab" href="#contact2" role="tab" aria-controls="contact2" aria-selected="false">Others (5)</a>
                  </li>
                </ul>

                <div class="tab-content" id="myTabContent3">
                  <div class="tab-pane fade show active" id="home2" role="tabpanel" aria-labelledby="home2-tab">
                    <ul class="list-unstyled" data-simplebar style="height: 360px">
                      <li>
                        <a href="javscript:void(0)" class="media media-message media-notification">
                          <div class="position-relative mr-3">
                            <img class="rounded-circle" src="assets/img/user/u2.jpg" alt="Image">
                            <span class="status away"></span>
                          </div>
                          <div class="media-body d-flex justify-content-between">
                            <div class="message-contents">
                              <h4 class="title">Aaren</h4>
                              <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque odio, eligendi delectus vitae.</p>

                              <span class="font-size-12 font-weight-medium text-secondary">
                                <i class="mdi mdi-clock-outline"></i> 30 min ago...
                              </span>
                            </div>
                          </div>
                        </a>
                      </li>

                      <li>
                        <a href="javscript:void(0)" class="media media-message media-notification media-active">
                          <div class="position-relative mr-3">
                            <img class="rounded-circle" src="assets/img/user/u1.jpg" alt="Image">
                            <span class="status active"></span>
                          </div>
                          <div class="media-body d-flex justify-content-between">
                            <div class="message-contents">
                              <h4 class="title">Abril</h4>
                              <p class="last-msg">Donec mattis augue a nisl consequat, nec imperdiet ex rutrum. Fusce et vehicula enim. Sed in enim eu odio vehic.</p>

                              <span class="font-size-12 font-weight-medium text-white">
                                <i class="mdi mdi-clock-outline"></i> Just now...
                              </span>
                            </div>
                          </div>
                        </a>
                      </li>

                      <li>
                        <a href="javscript:void(0)" class="media media-message media-notification">
                          <div class="position-relative mr-3">
                            <img class="rounded-circle" src="assets/img/user/u5.jpg" alt="Image">
                            <span class="status away"></span>
                          </div>
                          <div class="media-body d-flex justify-content-between">
                            <div class="message-contents">
                              <h4 class="title">Emma</h4>
                              <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque odio, eligendi delectus vitae.</p>

                              <span class="font-size-12 font-weight-medium text-secondary">
                                <i class="mdi mdi-clock-outline"></i> 1 hrs ago...
                              </span>
                            </div>
                          </div>
                        </a>
                      </li>

                      <li>
                        <a href="javscript:void(0)" class="media media-message media-notification event-active">

                          <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-info text-white">
                            <i class="mdi mdi-calendar-check font-size-20"></i>
                          </div>

                          <div class="media-body d-flex justify-content-between">
                            <div class="message-contents">
                              <h4 class="title">New event added</h4>
                              <p class="last-msg font-size-14">03/Jan/2020 (1pm - 2pm)</p>

                              <span class="font-size-12 font-weight-medium text-secondary">
                                <i class="mdi mdi-clock-outline"></i> 10 min ago...
                              </span>
                            </div>
                          </div>
                        </a>
                      </li>

                      <li>
                        <a href="javscript:void(0)" class="media media-message media-notification">

                          <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
                            <i class="mdi mdi-chart-areaspline font-size-20"></i>
                          </div>

                          <div class="media-body d-flex justify-content-between">
                            <div class="message-contents">
                              <h4 class="title">Sales report</h4>
                              <p class="last-msg font-size-14">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque odio, eligendi delectus vitae.</p>

                              <span class="font-size-12 font-weight-medium text-secondary">
                                <i class="mdi mdi-clock-outline"></i> 1 hrs ago...
                              </span>
                            </div>
                          </div>
                        </a>
                      </li>

                      <li>
                        <a href="javscript:void(0)" class="media media-message media-notification">

                          <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                            <i class="mdi mdi-account-multiple-check font-size-20"></i>
                          </div>

                          <div class="media-body d-flex justify-content-between">
                            <div class="message-contents">
                              <h4 class="title">Add request</h4>
                              <p class="last-msg font-size-14">Add Dany Jones as your contact consequat nec imperdiet ex rutrum. Fusce et vehicula enim. Sed in enim.</p>

                              <button type="button" class="my-1 btn btn-sm btn-success">Accept</button>
                              <button type="button" class="my-1 btn btn-sm btn-secondary">Delete</button>

                              <span class="font-size-12 font-weight-medium text-secondary d-block">
                                <i class="mdi mdi-clock-outline"></i> 5 min ago...
                              </span>
                            </div>
                          </div>
                        </a>
                      </li>

                      <li>
                        <a href="javscript:void(0)" class="media media-message media-notification">

                          <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-danger text-white">
                            <i class="mdi mdi-server-network-off font-size-20"></i>
                          </div>

                          <div class="media-body d-flex justify-content-between">
                            <div class="message-contents">
                              <h4 class="title">Server overloaded</h4>
                              <p class="last-msg font-size-14">Donec mattis augue a nisl consequat, nec imperdiet ex rutrum. Fusce et vehicula enim. Sed in enim eu odio vehic.</p>

                              <span class="font-size-12 font-weight-medium text-secondary">
                                <i class="mdi mdi-clock-outline"></i> 30 min ago...
                              </span>
                            </div>
                          </div>
                        </a>
                      </li>

                      <li>
                        <a href="javscript:void(0)" class="media media-message media-notification">

                          <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-purple text-white">
                            <i class="mdi mdi-playlist-check font-size-20"></i>
                          </div>

                          <div class="media-body d-flex justify-content-between">
                            <div class="message-contents">
                              <h4 class="title">Task complete</h4>
                              <p class="last-msg font-size-14">Nam ut nisi erat. Ut quis tortor varius, hendrerit arcu quis, congue nisl. In scelerisque, sem ut ve.</p>

                              <span class="font-size-12 font-weight-medium text-secondary">
                                <i class="mdi mdi-clock-outline"></i> 2 hrs ago...
                              </span>
                            </div>
                          </div>
                        </a>
                      </li>

                    </ul>
                  </div>

                  <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile2-tab">
                    <ul class="list-unstyled" data-simplebar style="height: 360px">
                      <li>
                        <a href="javscript:void(0)" class="media media-message media-notification">
                          <div class="position-relative mr-3">
                            <img class="rounded-circle" src="assets/img/user/u6.jpg" alt="Image">
                            <span class="status away"></span>
                          </div>
                          <div class="media-body d-flex justify-content-between">
                            <div class="message-contents">
                              <h4 class="title">William</h4>
                              <p class="last-msg">Donec mattis augue a nisl consequat, nec imperdiet ex rutrum. Fusce et vehicula enim. Sed in enim eu odio vehic.</p>

                              <span class="font-size-12 font-weight-medium text-secondary">
                                <i class="mdi mdi-clock-outline"></i> 1 hrs ago...
                              </span>
                            </div>
                          </div>
                        </a>
                      </li>

                      <li>
                        <a href="javscript:void(0)" class="media media-message media-notification">
                          <div class="position-relative mr-3">
                            <img class="rounded-circle" src="assets/img/user/u7.jpg" alt="Image">
                            <span class="status away"></span>
                          </div>
                          <div class="media-body d-flex justify-content-between">
                            <div class="message-contents">
                              <h4 class="title">Camble</h4>
                              <p class="last-msg">Nam ut nisi erat. Ut quis tortor varius, hendrerit arcu quis, congue nisl. In scelerisque, sem ut ve.</p>

                              <span class="font-size-12 font-weight-medium text-secondary">
                                <i class="mdi mdi-clock-outline"></i> 1 hrs ago...
                              </span>
                            </div>
                          </div>
                        </a>
                      </li>

                      <li>
                        <a href="javscript:void(0)" class="media media-message media-notification media-active">
                          <div class="position-relative mr-3">
                            <img class="rounded-circle" src="assets/img/user/u1.jpg" alt="Image">
                            <span class="status active"></span>
                          </div>
                          <div class="media-body d-flex justify-content-between">
                            <div class="message-contents">
                              <h4 class="title">Abril</h4>
                              <p class="last-msg">Donec mattis augue a nisl consequat, nec imperdiet ex rutrum. Fusce et vehicula enim. Sed in enim eu odio vehic.</p>

                              <span class="font-size-12 font-weight-medium text-white">
                                <i class="mdi mdi-clock-outline"></i> Just now...
                              </span>
                            </div>
                          </div>
                        </a>
                      </li>

                      <li>
                        <a href="javscript:void(0)" class="media media-message media-notification">
                          <div class="position-relative mr-3">
                            <img class="rounded-circle" src="assets/img/user/u2.jpg" alt="Image">
                            <span class="status away"></span>
                          </div>
                          <div class="media-body d-flex justify-content-between">
                            <div class="message-contents">
                              <h4 class="title">Aaren</h4>
                              <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque odio, eligendi delectus vitae.</p>

                              <span class="font-size-12 font-weight-medium text-secondary">
                                <i class="mdi mdi-clock-outline"></i> 1 hrs ago...
                              </span>
                            </div>
                          </div>
                        </a>
                      </li>

                      <li>
                        <a href="javscript:void(0)" class="media media-message media-notification">
                          <div class="position-relative mr-3">
                            <img class="rounded-circle" src="assets/img/user/u5.jpg" alt="Image">
                            <span class="status away"></span>
                          </div>
                          <div class="media-body d-flex justify-content-between">
                            <div class="message-contents">
                              <h4 class="title">Emma</h4>
                              <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque odio, eligendi delectus vitae.</p>

                              <span class="font-size-12 font-weight-medium text-secondary">
                                <i class="mdi mdi-clock-outline"></i> 1 hrs ago...
                              </span>
                            </div>
                          </div>
                        </a>
                      </li>

                    </ul>
                  </div>

                  <div class="tab-pane fade" id="contact2" role="tabpanel" aria-labelledby="contact2-tab">
                    <ul class="list-unstyled" data-simplebar style="height: 360px">
                      <li>
                        <a href="javscript:void(0)" class="media media-message media-notification event-active">

                          <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-info text-white">
                            <i class="mdi mdi-calendar-check font-size-20"></i>
                          </div>

                          <div class="media-body d-flex justify-content-between">
                            <div class="message-contents">
                              <h4 class="title">New event added</h4>
                              <p class="last-msg font-size-14">03/Jan/2020 (1pm - 2pm)</p>

                              <span class="font-size-12 font-weight-medium text-secondary">
                                <i class="mdi mdi-clock-outline"></i> 10 min ago...
                              </span>
                            </div>
                          </div>
                        </a>
                      </li>

                      <li>
                        <a href="javscript:void(0)" class="media media-message media-notification">

                          <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
                            <i class="mdi mdi-chart-areaspline font-size-20"></i>
                          </div>

                          <div class="media-body d-flex justify-content-between">
                            <div class="message-contents">
                              <h4 class="title">Sales report</h4>
                              <p class="last-msg font-size-14">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque odio, eligendi delectus vitae.</p>

                              <span class="font-size-12 font-weight-medium text-secondary">
                                <i class="mdi mdi-clock-outline"></i> 1 hrs ago...
                              </span>
                            </div>
                          </div>
                        </a>
                      </li>

                      <li>
                        <a href="javscript:void(0)" class="media media-message media-notification">

                          <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                            <i class="mdi mdi-account-multiple-check font-size-20"></i>
                          </div>

                          <div class="media-body d-flex justify-content-between">
                            <div class="message-contents">
                              <h4 class="title">Add request</h4>
                              <p class="last-msg font-size-14">Add Dany Jones as your contact consequat nec imperdiet ex rutrum. Fusce et vehicula enim. Sed in enim.</p>

                              <button type="button" class="my-1 btn btn-sm btn-success">Accept</button>
                              <button type="button" class="my-1 btn btn-sm btn-secondary">Delete</button>

                              <span class="font-size-12 font-weight-medium text-secondary d-block">
                                <i class="mdi mdi-clock-outline"></i> 5 min ago...
                              </span>
                            </div>
                          </div>
                        </a>
                      </li>

                      <li>
                        <a href="javscript:void(0)" class="media media-message media-notification">

                          <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-danger text-white">
                            <i class="mdi mdi-server-network-off font-size-20"></i>
                          </div>

                          <div class="media-body d-flex justify-content-between">
                            <div class="message-contents">
                              <h4 class="title">Server overloaded</h4>
                              <p class="last-msg font-size-14">Donec mattis augue a nisl consequat, nec imperdiet ex rutrum. Fusce et vehicula enim. Sed in enim eu odio vehic.</p>

                              <span class="font-size-12 font-weight-medium text-secondary">
                                <i class="mdi mdi-clock-outline"></i> 30 min ago...
                              </span>
                            </div>
                          </div>
                        </a>
                      </li>

                      <li>
                        <a href="javscript:void(0)" class="media media-message media-notification">

                          <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-purple text-white">
                            <i class="mdi mdi-playlist-check font-size-20"></i>
                          </div>

                          <div class="media-body d-flex justify-content-between">
                            <div class="message-contents">
                              <h4 class="title">Task complete</h4>
                              <p class="last-msg font-size-14">Nam ut nisi erat. Ut quis tortor varius, hendrerit arcu quis, congue nisl. In scelerisque, sem ut ve.</p>

                              <span class="font-size-12 font-weight-medium text-secondary">
                                <i class="mdi mdi-clock-outline"></i> 2 hrs ago...
                              </span>
                            </div>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <ul class="dropdown-menu dropdown-menu-right d-none">
              <li class="dropdown-header">You have 5 notifications</li>
              <li>
                <a href="#">
                  <i class="mdi mdi-account-plus"></i> New user registered
                  <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="mdi mdi-account-remove"></i> User deleted
                  <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 07 AM</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="mdi mdi-chart-areaspline"></i> Sales report is ready
                  <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 12 PM</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="mdi mdi-account-supervisor"></i> New client
                  <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="mdi mdi-server-network-off"></i> Server overloaded
                  <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 05 AM</span>
                </a>
              </li>
              <li class="dropdown-footer">
                <a class="text-center" href="#"> View All </a>
              </li>
            </ul>
          </li>

          <!-- User Account -->
          <li class="dropdown user-menu">
            <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <span class="d-none d-lg-inline-block">PROFILE</span>
            </button>
            <ul class="dropdown-menu dropdown-menu-right">
              <!-- User image -->
              <li class="dropdown-header">
                <div class="d-inline-block">
                  {{ auth()->user()->name }} <small class="pt-1">iamabdus@gmail.com</small>
                </div>
              </li>

              <li>
                <a href="user-profile.html">
                  <i class="mdi mdi-account"></i> My Profile
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="mdi mdi-email"></i> Message
                </a>
              </li>
              <li>
                <a href="#"> <i class="mdi mdi-diamond-stone"></i> Projects </a>
              </li>
              <li class="right-sidebar-in">
                <a href="javascript:0"> <i class="mdi mdi-settings"></i> Setting </a>
              </li>

              <li class="dropdown-footer">
                <a href="{{ url('/logout') }}"> <i class="mdi mdi-logout"></i> Log Out </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
