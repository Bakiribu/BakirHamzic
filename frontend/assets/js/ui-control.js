document.addEventListener('DOMContentLoaded', () => {
  const role = sessionStorage.getItem('role');

  if (role === 'admin') {
    const btn = document.getElementById('adminPanelButton');
    if (btn) btn.style.display = 'block';
  } else {
    const btn = document.getElementById('adminPanelButton');
    if (btn) btn.style.display = 'none';
  }
});
