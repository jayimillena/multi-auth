document.addEventListener("DOMContentLoaded", function() {
  const name = "John"; // Replace this with the dynamic name value
  const message = `Hi ${name}! it's nice to see you again.`;
  
  let index = 0;
  const speed = 100; // Adjust typing speed in milliseconds

  function typeWriter() {
      if (index < message.length) {
          document.getElementById("typewriter").innerHTML += message.charAt(index);
          index++;
          setTimeout(typeWriter, speed);
      }
  }

  typeWriter();
});
