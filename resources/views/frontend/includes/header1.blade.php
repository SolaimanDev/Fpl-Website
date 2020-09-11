<header>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
				<h1>
					<a class="navbar-brand text-capitalize" href="index.html">
						{{$settings->app_name}}
                      
					</a>
                    <p>{{$settings->app_title}}</p>
				</h1>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav text-center  ml-lg-auto">
						<li class="nav-item active  mr-3">
							<a class="nav-link" href="{{URL::to('/')}}">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						{{-- <li class="nav-item  mr-3">
							<a class="nav-link" href="{{URL::to('/about')}}">About</a>
						</li>
						<li class="nav-item  mr-3">
							<a class="nav-link" href="{{URL::to('/service')}}">Services</a>
						</li> --}}
<?php $menus=DB::table('menus')->get();

// echo $menus->name;
// foreach($menus as $menu)
    
    // echo $submenus->submenu_name;

?>
@foreach($menu as $menu)
        <li class="nav-item dropdown mr-3">
            <a class="nav-link dropdown-toggle" href="{{ $menu->menu_name }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                {{ $menu->menu_name }}
            </a>                       
            @if (count($menu['submenu'])) 
                @foreach ($menu['submenu'] as $subitem)                       

                <div class="dropdown-menu submenu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ $subitem->submenu_slug }}">{{ $subitem->submenu_name }}</a>
                    
                </div>                               
                @endforeach
            @endif
        </li>
@endforeach

						<li class="nav-item">
							<a class="nav-link" href="{{URL::to('/contact')}}">contact</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</header>
	<!-- //header -->