<!-- .footer-dashboard -->
<div class="footer-dashboard">
    <p>Copyright © {{date('Y')}} BrickBold. All Rights Reserved.</p>
    <ul class="list">
        @foreach (App\Helper\Helper::pages() as $page)
            <li><a href="{{route('page', $page->slug)}}">{{$page->title}}</a></li>
        @endforeach
    </ul>

</div><!-- /.footer-dashboard -->