    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-dark">
        <div class="position-sticky">
            <div class="list-group list-group-flush mx-3 mt-4">
                <a href="{{ route('admin.buyingRequest') }}" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                    <i class="fa fa-credit-card-alt" aria-hidden="true"></i><span>Buy E-currency</span>
                </a>
                <a href="{{ route('admin.sellingRequest') }}" class="list-group-item list-group-item-action py-2 ripple"><i class="fa fa-money"
                        aria-hidden="true"></i><span>Sell E-currency
                    </span></a>
                <a href="{{ route('admin.account.verification') }}" class="list-group-item list-group-item-action py-2 ripple"><i
                        class="fas fa-chart-line fa-fw me-3"></i><span>Verification</span></a>
                <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                    <i class="fas fa-chart-pie fa-fw me-3"></i><span>History</span>
                </a>
                <a href="{{ route('admin.news') }}" class="list-group-item list-group-item-action py-2 ripple">
                    <i class="fas fa-chart-bar fa-fw me-3"></i><span>Add News</span>
                </a>
                <a href="{{ route('admin.newsDetails') }}" class="list-group-item list-group-item-action py-2 ripple">
                    <i class="fas fa-chart-bar fa-fw me-3"></i><span>News</span>
                </a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="list-group-item list-group-item-action py-2 ripple">
                        <i class="fas fa-sign-out-alt fa-fw me-3"></i><span>Logout</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>
