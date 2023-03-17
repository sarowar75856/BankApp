<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main</span>
                </li>
                <li>
                    <a href="clients.html"><i class="la la-dashboard"></i> <span>Clients</span></a>
                </li>

                <li class="menu-title">
                    <span>Accounts</span>
                </li>
                <li class="submenu">
                    <a href="#" class="noti-dot"><i class="la la-user"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('account.index') }}">All Accounts</a></li>
                        <li><a href="{{ route('account.balance') }}"> Check Balance</a></li>
                        <li><a href="{{ route('account.transfer') }}"> Transfer Balance</a></li>
                        <li><a href="{{ route('account.history') }}"> Transfer History</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>
