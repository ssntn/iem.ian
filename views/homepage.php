
<section style="background-image: url('./assets/img/iem.png'); height: 100vh; background-repeat: no-repeat; background-size: cover; background-position: center" id="home">
    <?php include './components/navbar.php' ?>
    <div class="d-flex flex-column justify-content-center align-items-center h-50">
        <h1 class="text-white fw-bold">IEM.IAN</h1>
        <h5 class="text-white fw-light">iems. cracked.</h3>
    </div>
</section>

<section class="d-flex flex-column align-items-center" id="list">
    <h3 class="py-5">My IEM experience</h2>
    <div class="col pb-2">
        <div class="row m-2">
            <div class="col-md-3 col-sm-5">
                <img src="./assets/img/edx.png" alt="KZ EDX">
            </div>
            <div class="col-md-7 col-sm-5 mt-2">
                <h5 class="">KZ EDX </h5>
                <p class="fw-light">The very nice mids and high compared to EDX Pro, and a really  good bass. </p>
            </div>
        </div>
        
        <div class="row m-2">
            <div class="col-md-3 col-sm-5">
                <img src="./assets/img/edx-pro.png" alt="KZ EDX Pro">
            </div>
            <div class="col-md-7 col-sm-5 mt-2">
                <h5 class="">KZ EDX Pro</h5>
                <p class="fw-light">The highs are too high, but very good bass. Not recommended for games with breaking glasses.</p>
            </div>
        </div>
        
        <div class="row m-2">
            <div class="col-md-3 col-sm-5">
            <img src="https://i.ebayimg.com/images/g/qZQAAOSwS3VfGpgW/s-l1200.jpg" alt="KZ EDX">
            </div>
            <div class="col-md-7 col-sm-5 mt-2">
                <h5 class="">KZ ZSN Pro</h5>
                <p class="fw-light">Best overall. A bit pricey but really good for everything. A bit on the bigger side though.</p>
            </div>
        </div>
    </div>
    
</section>

<section class="container my-3">
    <h3 class="pb-3">Comments</h3>

    <div class="input-group row-l-10 row-md-10 row-12">
        <input type="text" class="form-control" name="comment" id="comment" aria-describedby="helpId" placeholder="Write a comment">
        <div class="input-group-append mx-2">
            <button type="button" name="" id="" class="btn btn-dark">Comment</button>
        </div>
    </div>

</section>

    
<?php include './components/footer.php' ?>