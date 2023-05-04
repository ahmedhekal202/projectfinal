<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hallo ADMIN') }}
        </h2>
    </x-slot>

   
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('categorie') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p class="btn btn-primary">
                Ctegorie
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('addCategorie') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p class="btn btn-primary">Add categorie</p>
                </a>
              </li>
              
            </ul>
          </li>
         
        </nav>
   
   
</x-app-layout>
