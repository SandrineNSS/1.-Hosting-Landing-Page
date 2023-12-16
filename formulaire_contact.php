<body>
    <form method="POST" action="traitement_formulaire.php">
        <section class="border-top pb-5 mb-5 container">
            <h2 class="text-center display-4 my-md-5 my-4">Contact-us</h2>
    

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" id="email" name="email" class="form-control">
                    <p class="form-text m-0">We'll never share your email.</p>
                </div>
            
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Your message" id="floatTxtArea" style="height: 100px"></textarea>
                    <label for="floatTxtArea">Your message</label>
                </div>
            
                    <button class="btn btn-primary">Submit</button>
    </form>
    
        </section>
</body>