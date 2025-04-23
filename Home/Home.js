
  const facts = [
    "The first computer bug was a real bug — a moth stuck in a computer.",
    "Ada Lovelace is considered the first computer programmer.",
    "The first website is still live and was created in 1991.",
    "Python is named after 'Monty Python', not the snake.",
    "Java was initially called Oak.",
    "The first computer virus was created in 1986.",
    "You can write a Turing-complete program in Minecraft using redstone.",
    "Linux was created as a hobby by Linus Torvalds in 1991.",
    "The first email was sent by Ray Tomlinson in 1971.",
    "HTML stands for HyperText Markup Language.",
         
        "Java was originally called Oak after an oak tree outside James Gosling's office.",
        "The motto of Java is 'Write Once, Run Anywhere.'",
        "Java avoids multiple inheritance with classes to prevent ambiguity.",
        "The Java Virtual Machine (JVM) makes Java platform-independent.",
        
      
        "C was developed in 1972 by Dennis Ritchie at Bell Labs.",
        "The Unix operating system is largely written in C.",
        "C has influenced nearly every modern programming language.",
        "The C language has only 32 keywords.",
        
        // C++
        "C++ was created by Bjarne Stroustrup in 1983.",
        "C++ is often called 'C with classes' due to its OOP support.",
        "C++ powers major software like Photoshop and high-performance games.",
        "Despite being decades old, C++ remains among the top 5 languages.",
        
        // HTML
        "HTML was invented by Tim Berners-Lee in 1991.",
        "HTML is a markup language, not a programming language.",
        "The <marquee> tag is obsolete but still works in many browsers.",
        "HTML5 added native support for audio and video.",
        
        // CSS
        "CSS was introduced in 1996 to style web pages.",
        "The 'cascading' in CSS means styles can override others.",
        "CSS animations can run without any JavaScript using @keyframes.",
        "Use !important carefully — it overrides all other CSS rules.",
        
        // JavaScript
        "JavaScript was created in just 10 days by Brendan Eich in 1995.",
        "JavaScript and Java are unrelated despite similar names.",
        "JavaScript runs both in browsers and on servers (Node.js).",
        "You can build entire apps using JS frameworks like React and Vue.",
        
        // VB.NET
        "VB.NET is the successor to Visual Basic and runs on the .NET Framework.",
        "VB.NET supports full object-oriented programming.",
        "It's often used in legacy enterprise Windows applications.",
        "VB.NET allows GUI development using drag-and-drop tools in Visual Studio.",
        
        // AI
        "The term 'Artificial Intelligence' was coined in 1956.",
        "IBM’s Deep Blue defeated world chess champion Garry Kasparov in 1997.",
        "AI is now used to generate art, text, and even music.",
        "Modern AI models like ChatGPT are trained on massive datasets.",
        
        // Machine Learning
        "Machine Learning enables computers to learn from data without explicit programming.",
        "There are three types of ML: supervised, unsupervised, and reinforcement learning.",
        "Netflix and Spotify use ML to personalize recommendations.",
        "Neural networks, a core ML concept, date back to the 1940s.",
        
        // PHP
        "PHP originally stood for 'Personal Home Page.'",
        "Facebook was initially developed using PHP.",
        "PHP can be embedded directly into HTML pages.",
        "WordPress, Joomla, and Drupal all run on PHP.",
        
        // Networking
        "The first message over ARPANET was 'LO' before it crashed.",
        "IPv6 was created to solve the limited address space of IPv4.",
        "TCP/IP is the foundational protocol suite of the internet.",
        "You can still visit the first website ever created: info.cern.ch",
        
        // Operating Systems
        "Windows 1.0 was released in 1985 with very limited functionality.",
        "Linux runs on 90% of cloud servers and Android devices.",
        "macOS is based on a Unix-like OS called Darwin.",
        "The OS kernel controls the most basic functions of hardware and software."
      ];
      



  // Shuffle the facts array (Fisher-Yates Shuffle)
  function shuffle(array) {
    for (let i = array.length - 1; i > 0; i--) {
      const j = Math.floor(Math.random() * (i + 1));
      [array[i], array[j]] = [array[j], array[i]];
    }
  }

  function updateFacts() {
    shuffle(facts);
    document.getElementById("fact1").textContent = facts[0];
    document.getElementById("fact2").textContent = facts[1];
    document.getElementById("fact3").textContent = facts[2];
  }

  // Initial call
  updateFacts();

  // Change facts every 10 seconds
  setInterval(updateFacts, 10000);








  