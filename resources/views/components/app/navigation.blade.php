<div class="flex justify-center">
    <div class="main-navigation">
        <div>
            <a href="{{ route('app.index') }}" @class(['active' => Request::is('/')])>Home</a>
        </div>
        <div>
            <a href="{{ route('app.articles') }}" @class(['active' => Request::is('articles*')])>Articles</a>
        </div>
    </div>
</div>