<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>PHP OOP</title>
    <!-- FontAwesome CDN -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer' />
    <!-- Bootstap CDN -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT' crossorigin='anonymous'>
    <!-- CSS link -->
    <link rel='stylesheet' href='./style.css'>
</head>

<body>
    <div id='app' class="my-5">
        <div class="container">
            <!-- title -->
            <h1 class="text-center mb-3">Movies</h1>

            <!-- row -->
            <div class="row row-cols-4 g-4">
                <!-- col -->
                <div class="col" v-for="movie in movies">
                    <!-- card -->
                    <div class="card border-0 rounded-0">
                        <!-- img -->
                        <div class="card_img">
                            <img :src="movie.src" :alt="movie.title" class="w-100">
                        </div>

                        <!-- body -->
                        <div class="card_body p-2">
                            <!-- movie title -->
                            <h4>{{movie.title}} ({{movie.year}})</h4>

                            <!-- movie genres -->
                            <ul class="m-0 p-0">
                                <li v-for="genre in movie.genres">{{genre}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="movie_form mb-3 p-5">
                <div class="position-relative">
                    <h2>Insert a new movie</h2>
                    <div class="d-flex flex-column gap-2 mb-3">
                        <input type="text" class="form-control" placeholder="Movie name...">
                        <textarea class="form-control" placeholder="Movie description..."></textarea>
                        <input type="number" class="form-control" placeholder="Movie year...">
                    </div>

                    <h4>Cast</h4>
                    <div class="d-flex gap-2 mb-3">
                        <input type="text" class="form-control" placeholder="Actor...">
                        <input type="text" class="form-control" placeholder="Actor...">
                        <input type="text" class="form-control" placeholder="Actor...">
                    </div>

                    <h4>Genres</h4>
                    <div class="d-flex gap-2 mb-3">
                        <input type="text" class="form-control" placeholder="Genre...">
                        <input type="text" class="form-control" placeholder="Genre...">
                        <input type="text" class="form-control" placeholder="Genre...">
                        <input type="text" class="form-control" placeholder="Genre...">
                    </div>

                    <div class="d-flex gap-2">
                        <button type="btn" class="btn btn-primary">Submit</button>
                        <button type="btn" class="btn btn-danger">Reset</button>
                    </div>

                    <i class="fa-sharp fa-solid fa-xmark"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap script -->
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js' integrity='sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8' crossorigin='anonymous'></script>
    <!-- Axios script -->
    <script src='https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js'></script>
    <!-- VueJs script -->
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
    <script src='./app.js'></script>
</body>

</html>