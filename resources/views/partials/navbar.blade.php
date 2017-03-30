<nav class="navbar navbar-default">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">
                <span class="glyphicon glyphicon-tower" aria-hidden="true"></span>
                Naixements
            </a>
        </div>

        @if( true || Auth::check() )
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li{{ Request::is('pokemons*')? ' class=active' : ''}}>
                    <a href="{{url('/apis')}}">
                        <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                        Apis
                    </a>
                </li>
            </ul>
        </div>
        @endif
    </div>
</nav>
