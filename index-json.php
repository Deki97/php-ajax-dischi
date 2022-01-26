<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>JSON Dischi</title>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>

</head>
<body>
    <!-- Seconda Milestone:
    Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue. -->

    <!-- Bonus:
    Attraverso un’altra chiamata api, filtrare gli album per genere. -->

    <div id="root">
        <!-- Header -->
        <header>
            <div class="logo">
                <img src="./img/spotify-logo.png" alt="Spotify Logo">
            </div>
        </header>

        <!-- Main -->
        <main>
            <div class="container">
                <select v-model="selectGenre" name="" id="">
                    <option value="">All</option>
                    <option value="Rock">Rock</option>
                    <option value="Pop">Pop</option>
                    <option value="Jazz">Jazz</option>
                    <option value="Metal">Metal</option>
                </select>
                    <div class="main-wrapper">
                        <div v-for="(disc, index) in discs" :key="index" class="single-card">
                            <div class="poster">
                                <img :src="disc.poster" :alt="disc.title">
                            </div>

                            <div class="title">
                                <h3>{{ disc.title }}</h3>
                            </div>

                            <div class="author">
                                {{ disc.author }}
                            </div>

                            <div class="year">
                                {{ disc.year }}
                            </div>
                        </div>
                    </div>
            </div>
        </main>
        <!-- End Main -->
    </div>


    <script src="js/script.js"></script>

</body>
</html>