let i = 0;
let text = document.getElementById('demo').innerText;
let speed = 50;

function typeWriter() {
  if (i < text.length) {
    document.getElementById('demo').innerHTML += text.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}

typeWriter();
