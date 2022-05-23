
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                        <a class="nav-link" href="{{ route('dashboard') }}">
                                <div class="sb-nav-link-icon"></i></div>
                                <img src="{{ asset('/img/abc.jpg')}}" width="80px" height="80px">
                            </a>
                            <a class="nav-link" href="{{ route('dashboard') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="{{ route('people.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Family
                            </a>
                            <a class="nav-link" href="{{ route('depend.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                               Dependence
                            </a>
                           
                            <a class="nav-link" href="{{ route('payment.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                               Payment
                            </a>
                          
                            <a class="nav-link" href="{{ route('user.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Users
                            </a>
                            <a class="nav-link" href="{{ route('village.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Villages
                            </a>

                            <a class="nav-link" href="{{ route('payment.report') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Reports
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        {{ auth()->user()->role->name}}</br>
                        {{ auth()->user()->firstname.' '.auth()->user()->lastname}}

                    </div>
                </nav>
            </div>