@extends('layouts.sidebar')

@section('content')
<div class="board_area w-100 border m-auto d-flex">
  <div class="post_view w-75 mt-5">
    <p class="w-75 m-auto">投稿一覧</p>
    @foreach($posts as $post)
    <div class="post_area border w-75 m-auto p-3">
      <p><span>{{ $post->user->over_name }}</span><span class="ml-3">{{ $post->user->under_name }}</span>さん</p>
      <p><a href="{{ route('post.detail', ['id' => $post->id]) }}">{{ $post->post_title }}</a></p>
      <div class="post_bottom_area d-flex justify-content-end">
        <div class="d-flex post_status">
          <div class="mr-5">
            <!-- コメント数 -->
            <i class="fa fa-comment" post_id="{{ $post->id }}"></i><span class="comment_counts{{ $post->id }}">{{ $post_comment->commentCounts($post->id) }}</span>
          </div>
          <div>
            <!-- いいね数 -->
            @if(Auth::user()->is_Like($post->id))
            <p class="m-0"><i class="fas fa-heart un_like_btn" post_id="{{ $post->id }}"></i><span class="like_counts{{ $post->id }}">{{ $like->likeCounts($post->id) }}</span></p>
            @else
            <p class="m-0"><i class="fas fa-heart like_btn" post_id="{{ $post->id }}"></i><span class="like_counts{{ $post->id }}">{{ $like->likeCounts($post->id) }}</span></p>
            @endif
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <div class="other_area border w-25">
    <div class="border m-4">
      <a href="{{ route('post.input') }}"><div class="post_btn">投稿</div></a>
      <div class="keyword_area">
        <input type="text" placeholder="キーワードを検索" name="keyword" class="keyword" form="postSearchRequest">
        <input type="submit" value="検索" class="search_btn" form="postSearchRequest">
      </div>
      <input type="submit" name="like_posts" class="category_btn" value="いいねした投稿" form="postSearchRequest">
      <input type="submit" name="my_posts" class="category_btn2" value="自分の投稿" form="postSearchRequest">
      <p>カテゴリー検索</p>
      <ul>
        <!-- <p>教科</p> -->
        @foreach($categories as $category)
        <li class="main_categories" category_id="{{ $category->id }}"><span>{{ $category->main_category }}<i class="fa fa-angle-down"></i></span>
        </li>
          <!-- メインの中にサブカテゴリー表示 -->
          @foreach($category->SubCategories as $sub_category)
          <ul>
            <li class="sub_categories2"><input type="submit" name="category_word" class="category_num{{ $sub_category->main_category_id}}" value="{{$sub_category->sub_category}}" form="postSearchRequest"></li>
          </ul>
          @endforeach
        @endforeach
      </ul>
    </div>
  </div>
  <form action="{{ route('post.show') }}" method="get" id="postSearchRequest"></form>
</div>
@endsection
