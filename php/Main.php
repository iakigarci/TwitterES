<!-- Tweet del usuario -->
<div class="card tweet">
    <div class="card-body">
        <div class="d-flex align-items-center">
            <div class="mr-2">
                <?php
                $foto = getUserFoto($_SESSION['email']);
                echo "<img class='rounded-circle' height='55' width='55' src='data:image/*;base64, $foto' />";
                ?>
            </div>
            <div class="mr-2">
                <?php
                $nombre = $_SESSION['nombre'];
                $user = $_SESSION['user'];
                echo "<div class='h5 m-0'> $nombre </div>";
                echo "<div class='h7 text-muted'> $user </div>";
                ?>
            </div>
        </div>

        <form class="mt-3" id="formTweetUser" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <textarea class="form-control" name="tweetUsuario" id="tweetUsuario" rows="3" placeholder="¿En qué estás pensando?" maxlength="140" requiered></textarea>
                <small id="tweetHelp" class="form-text text-right text-muted">Máximo 140 carácteres.</small>
            </div>
            <div class="btn-toolbar justify-content-between">
                <div class="btn-group adjuntar">
                    <label for="mediaTweet">
                        <img src="../images/adjuntar.png" width="20" height="20">
                    </label>
                    <input type="file" id="mediaTweet" name="mediaTweet" accept="image/x-png,image/gif,image/jpeg">
                    <p id="nombreFichero" maxlength="20"></p>
                </div>
                <div class="btn-group">
                    <button type="button" id="submitTweet" name="submitTweet" class="btn btn-primary" onclick="sendTweet();loadTweets('1')">Publicar</button>
                </div>
            </div>
        </form>
        <div id="gif_upload" class="text-center">
            <img src="../images/tweet_subido.gif" width="100" height="70">
        </div>
    </div>
</div>

<!-- Lista de Tweets de otros usuarios -->
<div class="card" >
    <button type="button" id="updateTweets" name="updateTweets" class="btn btn-primary" onclick="loadTweets('1')">Actualizar</button>
    <div id="gif_updated" class="text-center">
            <img src="../images/loading.gif" width="100" height="100">
        </div>
    <div class="card-body" id="lista-tweet">
        
    </div>
</div>

<script>
$("#mediaTweet").change(function(){
    var fileName = $(this).val();
    $("#nombreFichero").html(fileName);
});
</script>
