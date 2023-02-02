<?php  
    include_once 'inc/header.php'; 
?>
    <main>
      <div class="container d-flex flex-column align-items-center">
        <img
          src="/SP404/phpdemo/feedback/img/logo.png"
          class="w-25 mb-3"
          alt=""
        />
        <h2>Feedback</h2>
        <p class="lead text-center">Leave feedback for Kodego SP404</p>
        <form action="inc/submit.php" method="POST" class="mt-4 w-75">
          <div class="mb-3 ">
            <label for="name" class="form-label">Name</label>
            <input
              type="text"
              class="form-control"
              id="name"
              name="name"
              placeholder="Enter your name"
              required
            />
          </div>
          
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input
              type="email"
              class="form-control"
              id="email"
              name="email"
              placeholder="Enter your email"
              required
            />
          </div>
          <div class="mb-3">
            <label for="body" class="form-label">Feedback</label>
            <textarea
              class="form-control"
              id="body"
              name="body"
              placeholder="Enter your feedback"
              required
            ></textarea>
          </div>
          <div class="mb-3">
            <button
            type="submit"
              name="submit"
              
              class="btn btn-dark w-100">Send</button>
              
           
          </div>
        </form>
      </div>
    </main>

    <?php
      include_once 'inc/footer.php';
    ?>

    
