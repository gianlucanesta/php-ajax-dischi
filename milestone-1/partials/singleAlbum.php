<?php foreach($database as $data){ ?> 
    
    <div class="album-square">

        <div class="album-image">
            <img 
                class="d-block mx-auto" 
                src="<?php echo $data['poster']; ?>" 
                alt="<?php echo $data['title']; ?>"
            >
        </div>
        
        <h3 class="title text-center"><?php echo $data['title']; ?></h3>
        
        <div class="author text-center"><?php echo $data['author']; ?></div>
        
        <div class="year text-center"><?php echo $data['year']; ?></div>                

    </div>
<?php }?>