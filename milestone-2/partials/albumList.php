
    <div v-for="element in albums" class="album-square">
        <div class="album-image">
            <img 
                class="d-block mx-auto" 
                :src="element.poster" 
                :alt="element.title"
            >
        </div>
        
        <h3 class="title text-center">{{element.title}}</h3>
        
        <div class="author text-center">{{element.author}}</div>
        
        <div class="year text-center">{{element.year}}</div>                
    </div>
