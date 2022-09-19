<div class="menu-list">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="d-xl-none d-lg-none" href="#">メニュー</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav flex-column">
                <li class="nav-divider">
                    メニュー
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{url('/master')}}"><i class="bi bi-house-door-fill"></i>ホーム <span
                            class="badge badge-success">6</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2"
                       aria-controls="submenu-2"><i class="bi bi-calendar2-date-fill"></i>出席表</a>
                    <div id="submenu-2" class="collapse submenu" style="">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="pages/cards.html">出席一覧</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/general.html">出席登録</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3"
                       aria-controls="submenu-3"><i class="bi bi-inboxes-fill"></i>課題</a>
                    <div id="submenu-3" class="collapse submenu" style="">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="pages/chart-c3.html">課題一覧</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/chart-chartist.html">課題登録</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5"
                       aria-controls="submenu-5"><i class="bi bi-book-half"></i>授業科目</a>
                    <div id="submenu-5" class="collapse submenu" style="">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/course/list')}}">授業科目一覧</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/course/register')}}">授業科目登録</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
