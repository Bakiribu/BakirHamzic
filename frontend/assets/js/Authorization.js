
const role = sessionStorage.getItem('role');
if (!role) {
  alert('You are not logged in!');
  window.location.href = 'index.html';
}

if (window.location.pathname.includes('admin-dashboard.html') && role !== 'admin') {
  alert('You do not have access to this page!');
  window.location.href = 'index.html';
}
if (window.location.pathname.includes('employee-dashboard.html') && role !== 'employee') {
  alert('You do not have access to this page!');
  window.location.href = 'index.html';
}

