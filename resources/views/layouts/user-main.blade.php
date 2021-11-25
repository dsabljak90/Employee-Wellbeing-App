<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body  >
    <section class ="user-background">
        <header>
            <div class="title-user-part">
              
                <!-- @if(isset($user_name)&& $user_id ===2)
                <a href="/test"><h2>{{ $user_name }}</h2></a>
                // In this way we can check the user and make a link on him 
                @endif -->

    
             
                <h1>Manatu Wellbeing Test</h1>


                @if(isset($user_name))
                                <h3>User: {{ $user_name }}</h3>
                                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button>Logout</button>
                </form>
                                @endif
                                
            </div>
            <div class="user-nav-bar">
                <ul>
                <a href="/test">
                    <li>Test</li>
                </a>
                <a href="/recommendations">
                    <li>Recommendation</li>
                </a>
                <a href="/statistics/statistics">
                    <li>Statistic</li>
                </a>
               
                </ul>

            </div>



        </header>
            @yield('user-content')


        <footer class="user-footer">
            <h4>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut nostrum nulla veritatis temporibus, modi incidunt eum neque impedit excepturi ullam sequi iure explicabo maiores consectetur earum dolorem voluptatum dignissimos! Cumque?
            </h4>

        </footer>



    </section>



</body>
</html>