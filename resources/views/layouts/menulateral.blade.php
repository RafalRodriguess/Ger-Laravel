<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
      <span class="brand-text font-weight-light">TecWeb</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          
        </div>
        <div class="info">
          <a  class="d-block">{{ Auth::user()->name }}</a>

          <a class="btn btn-danger btn-sm" href="{{ route('logout') }}"	
              onclick="event.preventDefault();	
                            document.getElementById('logout-form').submit();">	
              Sair	
          </a>	


          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">	        <footer class="main-footer">
              @csrf	           
          </form>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link">
            <i class="fas fa-solid fa-grid-horizontal"></i>
              Dashboard
              </p>
            </a>

          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-arrow-circle-down"></i>
              <p>
                Entradas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('empresas.create') }}?tipo=fornecedor" class="nav-link">
                  <i class="far fas fa-file"></i>
                  <p>Novo Fornecedor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('empresas.index') }}?tipo=fornecedor" class="nav-link">
                  <i class="far fas fa-list"></i>
                  <p>Lista de Fornecedores</p>
                </a>
              </li>
            </ul>
          </li>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open"">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-arrow-circle-up"></i>
              <p>
                Saidas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('empresas.create') }}?tipo=cliente" class="nav-link">
                <i class="fas fa-duotone fa-user-plus"></i>
                  <p>Novo Cliente</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('empresas.index') }}?tipo=cliente" class="nav-link">
                  <i class="fas fa-list-alt"></i>
                  <p>Lista de Clientes</p>
                </a>
              </li>
            </ul>
          </li>
      <nav class="mt-2">
        
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open"">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-dollar-sign"></i>
              <p>
                Financeiro
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../index.html" class="nav-link">
                  <i class="fas fa-money-check-alt"></i>
                  <p>Novo Lançamento</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../index2.html" class="nav-link">
                  <i class="fas fa-chart-pie"></i>
                  <p>Relatório Financeiro</p>
                </a>
              </li>
            </ul>
          </li>

         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
