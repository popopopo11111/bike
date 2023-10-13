<head>
  <meta charset="utf-8">
</head>

<form method="post" action="{{ url('/add') }}">
    {{ csrf_field() }}
    <p>
      <input type="text" name="Message" placeholder="入力してください">
    </p>
    <p>
      <input type="text" name="user_id" placeholder="入力してください">
    </p>
    <p>
      <input type="text" name="room_id" placeholder="入力してください">
    </p>
    <p>
      <input type="submit" value="Add">
    </p>
  </form>