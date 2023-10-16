 <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        <aside class="left-sidebar bg-sidebar">
            <div id="sidebar" class="sidebar sidebar-with-footer">
              <!-- Aplication Brand -->
              <div class="app-brand">
                <a href="/index.html" title="Sleek Dashboard">
                  <svg
                    class="brand-icon"
                    xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="xMidYMid"
                    width="30"
                    height="33"
                    viewBox="0 0 30 33">
                    <g fill="none" fill-rule="evenodd">
                      <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                      <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                    </g>
                  </svg>

                  <span class="brand-name text-truncate"> <small>EVENT MANAGEMENT</small> </span>
                </a>
              </div>

              <!-- begin sidebar scrollbar -->
              <div class="" data-simplebar style="height: 100%;">
                <!-- sidebar menu -->
                <ul class="nav sidebar-inner" id="sidebar-menu">
                  <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="{{ url('/app') }}"  data-target="#dashboard"
                      aria-expanded="false" aria-controls="dashboard">
                      <i class="mdi mdi-view-dashboard-outline"></i>
                      <span class="nav-text">Dashboard</span>
                    </a>


                  </li>

                  <li class="has-sub ">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#icons"
                      aria-expanded="false" aria-controls="icons">
                      <i class="mdi mdi-diamond"></i>
                      <span class="nav-text">EventCategory
                      </span> <b class="caret"></b>
                    </a>

                    <ul class="collapse " id="icons" data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        <li class="">
                          <a class="sidenav-item-link" href="{{ url('/eventCategory/from') }}">
                            <span class="nav-text">Add Category</span>
                          </a>
                        </li>

                        <li class="">
                          <a class="sidenav-item-link" href="{{ url('/eventCategory/mapping/form') }}">
                            <span class="nav-text">Add Mapping
                            </span>
                          </a>
                        </li>

                        <li class="">
                          <a class="sidenav-item-link" href="{{ url('/mapping-list') }}">
                            <span class="nav-text">Mapping List
                            </span>
                          </a>
                        </li>

                      </div>
                    </ul>
                  </li>

                  <li class="has-sub ">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#app"
                      aria-expanded="false" aria-controls="app">
                      <i class="mdi mdi-pencil-box-multiple"></i>
                      <span class="nav-text">Event</span> <b class="caret"></b>
                    </a>

                    <ul class="collapse " id="app" data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        <li class="">
                          <a class="sidenav-item-link" href="{{ url('/event-from') }}">
                            <span class="nav-text">Add Event</span>
                          </a>
                        </li>

                        <li class="">
                          <a class="sidenav-item-link" href="{{ url('/event-list') }}">
                            <span class="nav-text">Event List</span>
                          </a>
                        </li>

                      </div>
                    </ul>
                  </li>

                  <li class="has-sub ">
                    <a class="sidenav-item-link" href="{{ url('/schedule-list') }}"  data-target="#tables"
                      aria-expanded="false" aria-controls="tables">
                      <i class="mdi mdi-table"></i>
                      <span class="nav-text">Schedule
                      </span> 
                    </a>
                  </li>

                  <li class="">
                    <a class="sidenav-item-link" href="{{ url('/event-organizer-from') }}">
                      <span class="nav-text"><i class="mdi mdi-account-group"></i>Event Organizer </span>
                    </a>
                  </li>

                  <li class="has-sub ">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#forms"
                      aria-expanded="false" aria-controls="forms">
                      <i class="mdi mdi-gift"></i>
                      <span class="nav-text">EventPromotion
                      </span> <b class="caret"></b>
                    </a>

                    <ul class="collapse " id="forms" data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        <li class="">
                          <a class="sidenav-item-link" href="{{ url('/event-promotion-from') }}">
                            <span class="nav-text">Add EventPromotion</span>
                          </a>
                        </li>

                        <li class="">
                          <a class="sidenav-item-link" href="{{ url('/eventPromotion-list') }}">
                            <span class="nav-text">EventPromotion List</span>
                          </a>
                        </li>

                      </div>
                    </ul>
                  </li>



                  <li class="">
                    <a class="sidenav-item-link" href="{{ url('/attendee-from') }}">
                      <span class="nav-text"><i class="mdi mdi-account"></i>
                        Attendee</span>
                    </a>
                  </li>

                  <li class=" ">
                    <a class="" href="{{ url('/ticket-list') }}" data-toggle="" data-target="#components"
                      aria-expanded="false" aria-controls="components">
                      <i class="mdi mdi-ticket"></i>
                      <span class="nav-text">Tickets</span> <b class=""></b>
                    </a>
                  </li>

                  <li class="has-sub ">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#maps"
                      aria-expanded="false" aria-controls="maps">
                      <i class="mdi mdi-email"></i>
                      <span class="nav-text">Contact Info</span> <b class="caret"></b>
                    </a>

                    <ul class="collapse " id="maps" data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        <li class="">
                          <a class="sidenav-item-link" href="google-map.html">
                            <span class="nav-text">View Contacts Info</span>
                          </a>
                        </li>

                      </div>
                    </ul>
                  </li>

                  <li class="has-sub ">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#widgets"
                      aria-expanded="false" aria-controls="widgets">
                      <i class="mdi mdi-file-chart"></i>
                      <span class="nav-text">Reports</span> <b class="caret"></b>
                    </a>

                    <ul class="collapse " id="widgets" data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        <li class="">
                          <a class="sidenav-item-link" href="general-widget.html">
                            <span class="nav-text">Daily Report</span>
                          </a>
                        </li>

                        <li class="">
                          <a class="sidenav-item-link" href="chart-widget.html">
                            <span class="nav-text">Monthly Repor</span>
                          </a>
                        </li>
                      </div>
                    </ul>
                  </li>

                  <li class="">
                    <a class="sidenav-item-link" href="{{ url('/permission-form') }}">
                      <span class="nav-text"><i class="mdi mdi-key"></i>
                     Permission</span>
                    </a>
                  </li>

                  <li class="">
                    <a class="sidenav-item-link" href="{{ url('/user-role-form') }}">
                      <span class="nav-text"><i class="mdi mdi-key"></i>
                        User Role</span>
                    </a>
                  </li>


                  <li class=" ">
                    <a class="sidenav-item-link" href="{{ url('/user-list') }}"  data-target="#documentation"
                      aria-expanded="false" aria-controls="documentation">
                      <i class="mdi mdi-account-multiple"></i>
                      <span class="nav-text">Users</span>
                    </a>


                  </li>

                  <li class="section-title">
                    Documentation
                  </li>
                </ul>
              </div>


            </div>
          </aside>
