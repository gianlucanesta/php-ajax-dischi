<?php foreach($database as $album) { ?>
    <div class="album-square">
        
            <div class="album-image">
                <img 
                    class="d-block mx-auto" 
                    src="<?php echo $album['poster']; ?>" 
                    alt="<?php echo $album['title']; ?>"
                >
            </div>
            
            <h3 class="title text-center"><?php echo $album['title']; ?></h3>
            
            <div class="author text-center"><?php echo $album['author']; ?></div>
            
            <div class="year text-center"><?php echo $album['year']; ?></div>                
        
    </div>
<?php } ?>