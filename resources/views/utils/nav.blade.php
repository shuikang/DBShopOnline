<nav class="navbar navbar-light bg-light">
  <div class="col-3 d-flex align-items-start">
    <div class="flex1 text-center">
      <img src="/img/logo.png" alt="logo" class="nav-logo">
    </div>
  </div>
  <div class="col-6 d-flex flex-column">
    <div class="flex1 d-flex justify-content-center text-center">
      <div class="flex1">
        <a class="" href="/">HOME</a>
      </div>
      <div class="flex1">
        <a href="/popular">POPULAR</a>
      </div>
      <div class="flex1">
        <a href="/catalog">CATALOG</a>
      </div>
      <div class="flex1">
        <a href="/brand">BRAND</a>
      </div>
    </div>
    <div class="flex1 d-flex">
      <div class="input-group flex1 align-items-start">
        <form action="/search" method="post" id="form">
          {{ csrf_field() }}
          <input type="text" class="form-control search" placeholder="Search by product name" name="search" id="search">
        </form>
        <span class="input-group-addon no-pa">
          <button type="submit" form="form">
            <img src="/img/icon/magnifying-glass.png" alt="search" class="nav-search">
          </button>
        </span>
      </div>
      <a href="/cart">
        <img src="/img/icon/shopping-bag.png" src="bag" class="nav-bag">
      </a>
    </div>
  </div>
  <div class="col-3 d-flex">
    <div class="flex1 d-flex align-items-center justify-content-center">
      <img src="/img/icon/user.png" alt="user" class="nav-user-logo">
      @if(session('customer') == null)
        <a href="/login">Login</a>
      @else
        <div class="pointer">
          <div data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{session('customer')->name}} <i class="fa fa-caret-down"></i>
          </div>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="/profile">Profile</a>
            <a class="dropdown-item" href="/profile/order">Order</a>
            <a class="dropdown-item" href="/shop">Shop</a>
            <a class="dropdown-item" href="/logout">Logout</a>
          </div>
        </div>
      @endif
    </div>
  </div>
</nav>