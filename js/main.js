let toggle_color_scheme = function() {
  let button = document.querySelector('.color-scheme');
  let el_body = document.querySelector('body');
  let el_links = document.querySelectorAll('a');

  button.addEventListener('click', event => {
    if (button.classList.contains('dark-mode')) {
      button.classList.remove('dark-mode');
      button.classList.add('light-mode');
      
      el_body.classList.add('light');
      el_links.forEach(el => {el.classList.add('light');});
    }
    else if (button.classList.contains('light-mode')) {
      button.classList.remove('light-mode');
      button.classList.add('dark-mode');
      
      el_body.classList.remove('light');
      el_links.forEach(el => {el.classList.remove('light');});
    }
  });
}

toggle_color_scheme();