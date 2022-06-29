<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Document</title>
</head>
<body>
<header>
    <div class="box_logo">
        <img src="" alt="">
    </div>
</header>
<main id="app">
    <div id="container">
        <div class="card" v-for="item in Albums">
            <div class="box_img">
                <img :src="item.poster" alt="#">
            </div>
            <div class="box_text">
                <h3>{{ item.title }}</h3>
                <span>{{ item.author }}</span><br>
                <span>{{ item.year }}</span>
            </div>
       </div>
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="assets/script.js"></script>
 
</body>
</html>