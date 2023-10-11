<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="{{route('home')}}">
                                
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            @if(auth()->user()->role=='admin')
                            <a class="nav-link" href="{{url('department')}}">
                                <div class="sb-nav-link-icon"><i class="fa-regular fa-building"></i></div>
                                Department
                            </a>
                            <a class="nav-link" href="{{url('/designation')}}">
                                <div class="sb-nav-link-icon"><i class="fa-sharp fa-regular fa-briefcase"></i></div>
                                Designation
                            </a>
                            <a class="nav-link" href="{{route('salaryStructure.list')}}">
                                <div class="sb-nav-link-icon"><i class="fa-regular fa-money-bill-trend-up"></i></div>
                                Salary Structure
                            </a>
                            <a class="nav-link collapsed" href="{{url('/employee')}}"collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fa-sharp fa-solid fa-person"></i></div>
                                Employee
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>

                            @endif
                            <a class="nav-link collapsed" href="{{route('attendence.list')}}">
                                <div class="sb-nav-link-icon"><i class="fa-sharp fa-regular fa-calendar-circle-user"></i></div>
                                Attendence
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>
                            @if(auth()->user()->role=='admin')
                            </a> <a class="nav-link" href="{{route('attendence.report')}}">
                                <div class="sb-nav-link-icon"><i class="fa-thin fa-house-person-leave"></i></div>
                                Attendence Report 
                            </a>
                            
                           
                            @endif
                            @if(auth()->user()->role=='admin')
                            <a class="nav-link" href="{{route('payroll.list')}}">
                                <div class="sb-nav-link-icon"><i class="fa-regular fa-money-bill-trend-up"></i></div>
                                Payroll
                            </a>
                            @endif

                            <a class="nav-link" href="{{route('leaveBalance.list')}}">
                                <div class="sb-nav-link-icon"><i class="fa-thin fa-house-person-leave"></i></div>
                                Leave Balance
                            </a>
                            @if(auth()->user()->role=='admin')
                             <a class="nav-link" href="{{route('leaveType.list')}}">
                                <div class="sb-nav-link-icon"><i class="fa-thin fa-house-person-leave"></i></div>
                                Leave type
                            </a>
                            @endif
                            @php 
                                $leave=App\Models\Leave::where('status','pending')->count();
                            @endphp
                            </a> <a class="nav-link" href="{{route('leave.list')}}">
                                <div class="sb-nav-link-icon"><i class="fa-thin fa-house-person-leave"></i></div>
                               @if(auth()->user()->role=='admin')
                               Leave Applications({{$leave}})
                               @endif
                               @if(auth()->user()->role=='employee')
                                Apply Leave 
                                @endif
                            </a>
                            
                           
                           
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        {{auth()->user()->name}}
                    </div>
                </nav>
            </div>