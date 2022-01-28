<div id="root">
    <main>
        <div class="container justify-content-center text-white main-cont"> 
        
            <select @change="getDiscsApi" v-model="selectedGenre" class="mb-2" >
                <option value="">All</option>
                <option value="Rock">Rock</option>
                <option value="Pop">Pop</option>
                <option value="Metal">Metal</option>
                <option value="Jazz">Jazz</option>
            </select>
        
            <div class="row row-cols-2 row-cols-lg-5 albumList">

                <?php include __DIR__ . '/albumList.php'; ?> 

            </div>
            
        </div>
    </main>
</div>