<div class="sidebar" data-color="purple" data-background-color="white"
data-image="{{url('backend/img/sidebar-1.jpg')}}">
<div class="logo">
    <a href="" class="simple-text logo-normal">
            Hola <br>
    </a>
</div>
<div class="sidebar-wrapper">
    <ul class="nav">
        <li class="nav-item active  ">
        <a class="nav-link" href="">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
            </a>
        </li>
        
        <li class="nav-item ">
        <a class="nav-link" href="{{url('/admin/sliders')}}">
                <i class="material-icons">account_box</i>
                <p>Sliders</p>
            </a>
        </li>
        


        <li class="nav-item ">
            <a class="nav-link" href="">
                <i class="material-icons">content_paste</i>
                <p>Recetas</p>
            </a>
        </li>

        
        <li class="nav-item ">
            <a class="nav-link" href="{{url('/admin/salsas')}}">
                <i class="material-icons">hotel</i>
                <p>Salsas</p>
            </a>
        </li>
        

       

        <li class="nav-item active-pro ">
                <a class="dropdown-item" href="" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="material-icons">block</i>
                    <p>Cerrar Sesion</p></a>
                <form id="logout-form" action="" method="post" style="display:none">
                @csrf
                </form>
              </li>
    </ul>
</div>
</div>
