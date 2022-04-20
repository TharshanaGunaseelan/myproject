
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="{{ route('do.village.index',auth()->user()->village_id) }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Village
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