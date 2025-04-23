<!DOCTYPE html>
<html>
<head>
    <title>Bookverse - Home</title>
    <link rel="stylesheet" href="home.css">


</head>
<body>
  <?php include("../navbar/index.php"); ?>
  <section class="home-section">
    <img src="/bookverse/pictures/DOWNLOAD.jpg" alt="Header Image">
    <div class="tagline">From Freshers to Final Years – We've Got Your Back !</div> 
  </section>
  
  
  
  
  <!-- Interesting Coding Facts Section -->
  <section id="coding-facts" class="coding-facts-section">
  <div class="section-header">
    <h2>Interesting Coding Facts</h2>
  </div>

  <div class="coding-facts-container">
        <div class="fact-card">
            <h3>Did You Know?</h3>
            <p id="fact1" ></p>
        </div>
        
        <div class="fact-card">
          <h3>Did You Know?</h3>
            <p id="fact2"></p>
          </div>
          
          <div class="fact-card">
            <h3>Did You Know?</h3>
            <p id="fact3"></p>
          </div>
    </div>
  </section>
  

  
  <!-- E-books Section -->
  <section id="ebooks"class="content-section">
 
    <div class="section-header">
      <h2>E-books</h2>
      <a href="/bookverse/e-books/index.php" class="more-link">More &raquo;</a>
    </div>
    <div class="book-grid">
      <div class="book-card">
      <a href="/bookverse/e-books/books/E-COMMERCE.html" class="book-link">
        <img src="/bookverse/e-books/books/E-commerce.png" alt="E-COMMERCE">
        <h3>E-Commerce</h3>
      </a>
      </div>


      
      <div class="book-card">
        <a href="/bookverse/e-books/books/JAVA.html" class="book-link">
        <img src="/bookverse/e-books/books/JAVA.jpeg" alt="JAVA">
        <h3>Java</h3>
        </a>
      </div>


      <div class="book-card">
        <a href="/bookverse/e-books/books/thecbook.html" class="book-link">
        <img src="/bookverse/e-books/books/THE C BOOK.JPG" alt="THE C BOOK">
        <h3>The C Book</h3>
        </a>

      </div>
    </div>
  </section>

  <!-- Notes Section -->
  <section class="content-section" id="notes">
    <div class="section-header">
      <h2>Notes</h2>
    <a href="/bookverse/notes/index.php" class="more-link">More &raquo;</a>
  </div>
  
  <div class="book-grid">
    <div class="book-card">
     <a href="/bookverse/notes/Ournotes/COMPUTER MEMORY.html">
     <img src="/bookverse/notes/Ournotes/COMPUTER MEMORY.png" alt="COMPUTER MEMORY">
     <h3>COMPUTER MEMORY</h3>
     </a>
    </div>

    <div class="book-card">
    <a href="/bookverse/notes/Ournotes/C HandWritten Notes.html" >
                    <img src="/bookverse/notes/Ournotes/C HandWritten Notes.png" alt="C HandWritten Notes">
                <h3>C HandWritten Notes</h3>
      </a>
    </div>

    <div class="book-card">
    <a href="/bookverse/notes/Ournotes/C++ INTRO.html">
            <img src="/bookverse/notes/Ournotes/C++ INTRO.png" alt="C++ INTRO">
            <h3>C++ - INTRO</h3>
          </a>
    </div>
  

       

  </div>
</section> 

<!-- Question Papers Section -->
<section class="content-section" id="question-papers">
  <div class="section-header">
    <h2>Question Papers</h2>
    <a href="/bookverse/question-bank/index.php" class="more-link">More &raquo;</a>
  </div>
  <div class="qpapers">
  <div class="book-grid">
  <div class="book-card">
    <a href="/bookverse/question-bank/index.php?subject=java&name=Java">

      <img src="/bookverse/pictures/java.jpeg" alt="JAVA PROGRAMMING">
    </a>
  </div>
  <div class="book-card">
    <a href="/bookverse/question-bank/index.php?subject=php&name=WEB APPLICATION DEVELOPMENT USING PHP">
      <img src="/bookverse/pictures/php.jpeg" alt="PHP">
    </a>
  </div>
  <div class="book-card">
    <a href="/bookverse/question-bank/index.php?subject=ecommerce&name=E-COMMERCE">
      <img src="/bookverse/pictures/ECOMMERCE.jpeg" alt="E-COMMERCE">
    </a>
  </div>
</div>


  
</div>
</section>
<footer>
<?php include("../footer/index.php"); ?>
</footer>
<script src="home.js"></script>
<script src="/bookverse/question-bank/qbank.js" defer></script>
</body>
</html>
