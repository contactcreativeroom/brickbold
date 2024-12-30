<!-- .footer-dashboard -->
<div class="footer-dashboard">
    <p>Copyright © 2024 Creative room</p>
    <ul class="list">
        @foreach (App\Helper\Helper::pages() as $page)
            <li><a href="{{route('page', $page->slug)}}">{{$page->title}}</a></li>
        @endforeach
    </ul>

</div><!-- /.footer-dashboard -->