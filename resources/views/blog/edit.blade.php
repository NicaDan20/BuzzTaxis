<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta name="robots" content="noindex, nofollow"/>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md">
                <h1 class="mb-4">Edit Post</h1>
                <form action="/blog/{{ $post->slug }}" method="POST", enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    
<label for="title">Title</label>
    <input required type="text" name="title" id="title" class="form-control" value="{{ $post->title }}">
</div>

<div class="form-group">
    <label for="markdown">Text</label>
    <textarea required name="markdown" id="markdown" class="form-control">{{ $post->markdown }}</textarea>
</div>


<button type="submit" class="btn btn-success">Publish</button>
<a href="/blog" class="btn btn-danger">Cancel</a>

                </form>
            </div>
        </div>
    </div>
</body>



