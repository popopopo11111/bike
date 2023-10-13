<head>
  <meta charset="utf-8">
</head>
<p>
    @foreach($data as $userData)
		{{ $userData->message }}
		</br>
	@endforeach
    
    
  </p>