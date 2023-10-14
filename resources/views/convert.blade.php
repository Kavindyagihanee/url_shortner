<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/dist/output.css" rel="stylesheet">
</head>
<body>
  <div>
    <section>
        <h1 class="text-4xl text-blue-800">Short Your Link</h1>
        @if (session('success_message'))
        {!!session('success_message')!!}
        @endif
        <form method="post" action="{{ route('short.url') }}" >
        @csrf
        <input class="boarder boarder-gray-300 rounded-lg" type="url" name="original_url"/>
        @error('original_url')
        <span class="text-red-400 m-2 p-2">{{message}}</span>
        @enderror
        <button class="m-2 px-6 py-2 bg-green-500 hover:bg-green-700 rounded-lg" type="submit">short</button>
    </form>
    </section>
    
  </div>
</body>
</html>