<!DOCTYPE HTML>
<!-- test -->
<x-app-layout>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>Blog</title>
        </head>
        <body>
            <h1>Chat</h1>
            <form action="test.php" method="POST">
                @csrf
                <div class="title">
                    <input type="text" name="chat[message]" placeholder="入力" value="{{ old('chat.message') }}"/>
                    <p class="title__error" style="color:red">{{ $errors->first('chat.message') }}</p>
                    <input type="submit" value="送信"/>
                </div>
                <!--
                <div class="category">
                    <h2>Category</h2>
                    <select name="post[category_id]">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                -->
                
                <!--
                <div class="body">
                    <h2>Body</h2>
                    <textarea name="post[body]" placeholder="今日も1日お疲れさまでした。">{{ old('post.body') }}</textarea>
                    <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
                </div>
                
                -->
                
            </form>
            <div class="back">[<a href="/">back</a>]</div>
        </body>
    </html>
</x-app-layout>