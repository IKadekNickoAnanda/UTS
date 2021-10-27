<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="{{ request()->is('/') ? 'active' : ''  }}"><a href="/"><i class="fa fa-home"></i> <span>Home</span></a></li>
    <li class="{{ request()->is('kelompokpenjual') ? 'active' : ''  }}"><a href="/kelompokpenjual"><i class="fa fa-book"></i> <span>Kelompok Penjual</span></a></li>
    <li class="{{ request()->is('penjual') ? 'active' : ''  }}"><a href="/penjual"><i class="fa fa-book"></i> <span>Penjual</span></a></li>
    <li class="{{ request()->is('user') ? 'active' : ''  }}"><a href="/user"><i class="fa fa-book"></i> <span>User</span></a></li>
    
  </ul>