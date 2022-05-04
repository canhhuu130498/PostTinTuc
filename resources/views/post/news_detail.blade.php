<?php include "resources/views/post/header.blade.php" ?>
<main>
    <div class="container main">
        <div class="content">
            <h2>{{ $news->title }}</h2>
            <p>{{ $news->content }}</p>
            <p class="date"><i>Ngày tạo : {{$news->createdate}}</i>{{$news->author}}</p>
        </div>
    </div>

</main>
<main>
    <div class="container main">
        <table class="main_content" border="0" >
            <tbody>
                @foreach($post as $row)
                <tr>
                    <td>
                        <h2><a href="http://localhost:8000/PostTinTuc/post/news/{{$row->id}}">{{$row->title}}</a></h2>
                        <p>{{substr($row->content,0,180)."...."}}</p>
                        <p class="date"><i>Ngày tạo : {{$row->createdate}}</i>{{$row->author}}</p>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

</div>
<div class="main_page">{!! $post-> links () !!}</div>

</main>
<?php include "resources/views/post/footer.blade.php" ?>

