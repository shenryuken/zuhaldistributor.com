
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-user"></i><span>Users</span></a>
</li>
<li class="{{ Request::is('transactions*') ? 'active' : '' }}">
    <a href="{{ route('transactions.index') }}"><i class="fa fa-edit"></i><span>Transactions</span></a>
</li>

<li class="{{ Request::is('wallets*') ? 'active' : '' }}">
    <a href="{{ route('wallets.index') }}"><i class="fa fa-edit"></i><span>Wallets</span></a>
</li>

<li class="{{ Request::is('transfers*') ? 'active' : '' }}">
    <a href="{{ route('transfers.index') }}"><i class="fa fa-edit"></i><span>Transfers</span></a>
</li>

<li class="{{ Request::is('products*') ? 'active' : '' }}">
    <a href="{{ route('products.index') }}"><i class="fa fa-edit"></i><span>Products</span></a>
</li>

