const BASE_URL = 'http://localhost:8000';

function fetchCategories() {
    return fetch(`${BASE_URL}/categories`)
        .then(response => response.json());
}

function fetchEmployees() {
    return fetch(`${BASE_URL}/employees`)
        .then(response => response.json());
}

function fetchExpenses() {
    return fetch(`${BASE_URL}/expenses`)
        .then(response => response.json());
}

function fetchItems() {
    return fetch(`${BASE_URL}/items`)
        .then(response => response.json());
}

function fetchOffices() {
    return fetch(`${BASE_URL}/offices`)
        .then(response => response.json());
}
function addExpense(expenseData) {
    return fetch(`${BASE_URL}/expenses`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(expenseData)
    })
    .then(response => response.json());
}