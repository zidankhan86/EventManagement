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

                  <span class="brand-name text-truncate"> Dashboard</span>
                </a>
              </div>

              <!-- begin sidebar scrollbar -->
              <div class="" data-simplebar style="height: 100%;">
                <!-- sidebar menu -->
                <ul class="nav sidebar-inner" id="sidebar-menu">
                  <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="" data-toggle="collapse" data-target="#dashboard"
                      aria-expanded="false" aria-controls="dashboard">
                      <i class="mdi mdi-view-dashboard-outline"></i>
                      <span class="nav-text">Dashboard</span>
                    </a>


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
                          <a class="sidenav-item-link" href="chat.html">
                            <span class="nav-text">Add Event</span>
                          </a>
                        </li>

                        <li class="">
                          <a class="sidenav-item-link" href="contacts.html">
                            <span class="nav-text">Event List</span>
                          </a>
                        </li>

                        <li class="">
                          <a class="sidenav-item-link" href="team.html">
                            <span class="nav-text">Team</span>
                          </a>
                        </li>

                        <li class="">
                          <a class="sidenav-item-link" href="calendar.html">
                            <span class="nav-text">Calendar</span>
                          </a>
                        </li>
                      </div>
                    </ul>
                  </li>

                  <!-- <li class="section-title">
                    UI Elements
                  </li> -->

                  <li class="has-sub ">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#components"
                      aria-expanded="false" aria-controls="components">
                      <i class="mdi mdi-folder-multiple-outline"></i>
                      <span class="nav-text">Components</span> <b class="caret"></b>
                    </a>

                    <ul class="collapse " id="components" data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        <li class="">
                          <a class="sidenav-item-link" href="alert.html">
                            <span class="nav-text">Alert</span>
                          </a>
                        </li>

                        <li class="">
                          <a class="sidenav-item-link" href="badge.html">
                            <span class="nav-text">Badge</span>
                          </a>
                        </li>

                        <li class="">
                          <a class="sidenav-item-link" href="breadcrumb.html">
                            <span class="nav-text">Breadcrumb</span>

                          </a>
                        </li>

                        <li class="has-sub ">
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#buttons"
                            aria-expanded="false" aria-controls="buttons">
                            <span class="nav-text">Buttons</span> <b class="caret"></b>
                          </a>

                          <ul class="collapse " id="buttons">
                            <div class="sub-menu">
                              <li class="">
                                <a href="button-default.html">Button Default</a>
                              </li>

                             <li class="">
                                <a href="button-dropdown.html">Button Dropdown</a>
                              </li>

                             <li class="">
                                <a href="button-group.html">Button Group</a>
                              </li>

                             <li class="">
                                <a href="button-social.html">Button Social</a>
                              </li>

                             <li class="">
                                <a href="button-loading.html">Button Loading</a>
                              </li>
                            </div>
                          </ul>
                        </li>

                        <li class="">
                          <a class="sidenav-item-link" href="card.html">
                            <span class="nav-text">Card</span>
                          </a>
                        </li>

                        <li class="">
                          <a class="sidenav-item-link" href="carousel.html">
                            <span class="nav-text">Carousel</span>
                          </a>
                        </li>

                        <li class="">
                          <a class="sidenav-item-link" href="collapse.html">
                            <span class="nav-text">Collapse</span>
                          </a>
                        </li>

                        <li class="">
                          <a class="sidenav-item-link" href="list-group.html">
                            <span class="nav-text">List Group</span>
                          </a>
                        </li>

                        <li class="">
                          <a class="sidenav-item-link" href="modal.html">
                            <span class="nav-text">Modal</span>
                          </a>
                        </li>

                        <li class="">
                          <a class="sidenav-item-link" href="pagination.html">
                            <span class="nav-text">Pagination</span>
                          </a>
                        </li>

                        <li class="">
                          <a class="sidenav-item-link" href="popover-tooltip.html">
                            <span class="nav-text">Popover & Tooltip</span>
                          </a>
                        </li>

                        <li class="">
                          <a class="sidenav-item-link" href="progress-bar.html">
                            <span class="nav-text">Progress Bar</span>
                          </a>
                        </li>

                        <li class="">
                          <a class="sidenav-item-link" href="spinner.html">
                            <span class="nav-text">Spinner</span>
                          </a>
                        </li>

                        <li class="">
                          <a class="sidenav-item-link" href="switcher.html">
                            <span class="nav-text">Switcher</span>
                          </a>
                        </li>

                        <li class="">
                          <a class="sidenav-item-link" href="tab.html">
                            <span class="nav-text">Tab</span>
                          </a>
                        </li>
                      </div>
                    </ul>
                  </li>

                  <li class="has-sub ">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#icons"
                      aria-expanded="false" aria-controls="icons">
                      <i class="mdi mdi-diamond-stone"></i>
                      <span class="nav-text">Icons</span> <b class="caret"></b>
                    </a>

                    <ul class="collapse " id="icons" data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        <li class="">
                          <a class="sidenav-item-link" href="material-icon.html">
                            <span class="nav-text">Material Icon</span>
                          </a>
                        </li>

                        <li class="">
                          <a class="sidenav-item-link" href="flag-icon.html">
                            <span class="nav-text">Flag Icon</span>
                          </a>
                        </li>
                      </div>
                    </ul>
                  </li>

                  <li class="has-sub ">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#forms"
                      aria-expanded="false" aria-controls="forms">
                      <i class="mdi mdi-email-mark-as-unread"></i>
                      <span class="nav-text">Forms</span> <b class="caret"></b>
                    </a>

                    <ul class="collapse " id="forms" data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        <li class="">
                          <a class="sidenav-item-link" href="basic-input.html">
                            <span class="nav-text">Basic Input</span>
                          </a>
                        </li>

                        <li class="">
                          <a class="sidenav-item-link" href="input-group.html">
                            <span class="nav-text">Input Group</span>
                          </a>
                        </li>

                        <li class="">
                          <a class="sidenav-item-link" href="checkbox-radio.html">
                            <span class="nav-text">Checkbox & Radio</span>
                          </a>
                        </li>

                        <li class="">
                          <a class="sidenav-item-link" href="form-validation.html">
                            <span class="nav-text">Form Validation</span>
                          </a>
                        </li>

                        <li class="">
                          <a class="sidenav-item-link" href="form-advance.html">
                            <span class="nav-text">Form Advance</span>
                          </a>
                        </li>
                      </div>
                    </ul>
                  </li>

                  <li class="has-sub ">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#tables"
                      aria-expanded="false" aria-controls="tables">
                      <i class="mdi mdi-table"></i>
                      <span class="nav-text">Tables</span> <b class="caret"></b>
                    </a>

                    <ul class="collapse " id="tables" data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        <li class="">
                          <a class="sidenav-item-link" href="basic-tables.html">
                            <span class="nav-text">Basic Tables</span>
                          </a>
                        </li>

                        <li class="has-sub ">
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#data-tables"
                            aria-expanded="false" aria-controls="data-tables">
                            <span class="nav-text">Data Tables</span> <b class="caret"></b>
                          </a>

                          <ul class="collapse " id="data-tables">
                            <div class="sub-menu">
                              <li class="">
                                <a href="basic-data-table.html">Basic Data Table</a>
                              </li>

                             <li class="">
                                <a href="responsive-data-table.html">Responsive Data Table</a>
                              </li>

                             <li class="">
                                <a href="hoverable-data-table.html">Hoverable Data Table</a>
                              </li>

                             <li class="">
                                <a href="expendable-data-table.html">Expendable Data Table</a>
                              </li>
                            </div>
                          </ul>
                        </li>
                      </div>
                    </ul>
                  </li>

                  <li class="has-sub ">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#maps"
                      aria-expanded="false" aria-controls="maps">
                      <i class="mdi mdi-google-maps"></i>
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
                      <i class="mdi mdi-widgets"></i>
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



                  <li class="has-sub ">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#documentation"
                      aria-expanded="false" aria-controls="documentation">
                      <i class="mdi mdi-account-multiple"></i>
                      <span class="nav-text">Users</span> <b class="caret"></b>
                    </a>

                    <ul class="collapse " id="documentation" data-parent="#sidebar-menu">
                      <div class="sub-menu">

                        <li class="">
                          <a class="sidenav-item-link" href="#">
                            <span class="nav-text">Add User</span>
                          </a>
                        </li>

                        <li class="">
                          <a class="sidenav-item-link" href="quick-start.html">
                            <span class="nav-text">User List</span>
                          </a>
                        </li>

                      </div>
                    </ul>
                  </li>

                  <!-- <li class="section-title">
                    Documentation
                  </li> -->
                </ul>
              </div>


            </div>
          </aside>
