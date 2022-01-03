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
        @endif
    </ul>
@endforeach
