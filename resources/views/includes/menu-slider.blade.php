<div class="food-slider">
    @foreach ($categories as $category)
    <a href="/menu/{{$category->title}}" class="slide">
        <div class="background"></div>
        <div class="content">
            <div class="food-title">
                {{$category->title}}
            </div>
            <p class="description">
                {{$category->description}}
            </p>
            <img src="{{$category->image_url}}">
        </div>
    </a>
    @endforeach
</div>