@foreach($children as $subcategory)
    <ul class="sub-menu">
        @if(count($subcategory->children))
            <li class="menu-item">
                <span>{{ $subcategory->title}} </span>
            </li>
            <ul>
                @include('home.categorytree',['children' => $subcategory->children])
            </ul>
            <hr>
        @else
            <li class="menu-item" style="color: black">
                    <a href="{{route('categorycourses',['id'=>$subcategory->id])}}">{{ $subcategory->title}} </a>
            </li>
        @endif
    </ul>
@endforeach
