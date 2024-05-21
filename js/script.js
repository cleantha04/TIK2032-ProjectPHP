// Bayangan
function scrollHeader() {
  const header = document.getElementById('header');
  if (this.scrollY >= 40) header.classList.add('scroll-header');
  else header.classList.remove('scroll-header');
}
window.addEventListener('scroll', scrollHeader);

// Tema
const themebutton = document.getElementById('theme-button');
const darktheme = 'dark-theme';
const icontheme = 'moon-icon';

// Mengaktifkan Tema Manual
themebutton.addEventListener('click', () => {
  document.body.classList.toggle(darktheme);
  themebutton.classList.toggle(icontheme);
});
