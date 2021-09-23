<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SELECTION</title>
    <link rel="stylesheet" href="{{asset('css/selection.css')}}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
	 crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="header">
            <img src="{{asset('img/logo.jpg')}}" alt="Opimac">
            
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <i class="align-middle mr-1 fas fa-fw fa-arrow-alt-circle-right"></i> Sign out
            </a>
            
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </header>

    <div class="body">
        <div class="container">
            <h1>Company</h1>
            <div class="company-search">
                <input type="text" id="search">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="company-list">
                <button class="company-btn">
                    <div class="company-logo" style="background:url({{asset('img/logo.jpg')}})no-repeat;"></div>
                    <div class="company-name">Sample Company #1</div>
                </button>
                <button class="company-btn">
                    <div class="company-logo" style="background:url({{asset('img/logo.jpg')}})no-repeat;"></div>
                    <div class="company-name">Sample Company #2</div>
                </button>
                <button class="company-btn">
                    <div class="company-logo" style="background:url({{asset('img/logo.jpg')}})no-repeat;"></div>
                    <div class="company-name">Sample Company #3</div>
                </button>
                <button class="company-btn">
                    <div class="company-logo" style="background:url({{asset('img/logo.jpg')}})no-repeat;"></div>
                    <div class="company-name">Sample Company #4</div>
                </button>
                <button class="company-btn">
                    <div class="company-logo" style="background:url({{asset('img/logo.jpg')}})no-repeat;"></div>
                    <div class="company-name">Sample Company #5</div>
                </button>
                <button class="company-btn">
                    <div class="company-logo" style="background:url({{asset('img/logo.jpg')}})no-repeat;"></div>
                    <div class="company-name">Sample Company #6</div>
                </button>
            </div>
        </div>
    </div>

</body>
</html>
