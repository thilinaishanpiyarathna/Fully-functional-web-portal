
<div >
<h2 class="writeya"> Write your Articles Here </h2>
</div>

<form action="./engine/recBlog.php" method="get">


    <div class="formtit">
      <label for="title">Article Title </label>
      <input type="text" class="form-control1" name= 'title' id="title" placeholder="Your Article Title Here">
    </div>

    <div class="formkey">
      <label for="keys">Article Keywords</label>
      <input type="text" class="form-control2" name='keys' id="keys" placeholder="Your Article Keywords Here">
    </div>

    <div class="formentry">
      <label for="HTMLEdit"></label>
      <textarea id="HTMLEdit" class="form-control3" name='entry'> Put your articles here</textarea>
    </div>
    <button type="submit" class="publish_btn">Publish<i class='fas fa-paper-plane' style='font-size:36px'></i></button>

</form>


  <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name'
    });
  </script>
  <div class="wordssearch">
    <h1 class="sw">Look Up words  <i class="fa fa-search"></i></h1>

    <p class="swp">Use synonyms for a better worded articles. Powered by the wordsapi for a better writing experince.</p>


    
        <div class="wordssearch1">
          
         >><a href="./words.php" target="_blank"> <button class ="button1" type="submit"><i class="fa fa-search" style="color:white;background-color: #00B710;"></i></button></a><<
        </div>
      
</div>
