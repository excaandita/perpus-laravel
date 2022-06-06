<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="{{ request()->is('/') ? 'active' : ''}}"><a href="/"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
    <li class="{{ request()->is('buku') ? 'active' : ''}}"><a href="/buku"><i class="fa fa-book"></i> <span>Buku</span></a></li>
    <li class="{{ request()->is('petugas') ? 'active' : ''}}"><a href="/petugas"><i class="fa fa-user"></i> <span>Petugas</span></a></li>
    <li class="{{ request()->is('user') ? 'active' : ''}}"><a href="/user"><i class="fa fa-university"></i> <span>Anggota</span></a></li>
    <li class="{{ request()->is('peminjaman') ? 'active' : ''}}"><a href="/peminjaman"><i class="fa fa-cart-plus"></i> <span>Peminjaman</span></a></li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-share"></i> <span>Multilevel</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
      </ul>
    </li> 
</ul>